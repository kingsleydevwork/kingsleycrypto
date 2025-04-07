<?php

define("HOST", "localhost");
define("USER", "qsgigqid_kingsley");
define("PASSWORD", "07089611318Kk");
define("DATABASE", "qsgigqid_crypto");

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Current time for comparison
$current_time = date("H:i");

$query = mysqli_query($connection, "SELECT * FROM `investment` WHERE `status`='running'");

if (mysqli_num_rows($query) > 0) {

    while ($row = mysqli_fetch_assoc($query)) {
        $day_run = $row['day_run'];
        $amount_made = $row['amount_made'];
        $amount = $row['amount'];
        $id = $row['id'];
        $user = $row['user'];
        $duration = $row['duration'];
        $payment_time = $row['payment_time']; // Expected format: "H:i"
        $investment_return = $row['return']; // Assuming this is a percentage like "3" for 3%

        // Compare time with ±60 seconds tolerance
        if (abs(strtotime($current_time) - strtotime($payment_time)) <= 60) {

            $newday = $day_run + 1;
            $newamount = $newday * ($amount / 100) * $investment_return;

            // Still running
            if ($duration != $day_run) {
                $update_query = mysqli_query($connection, 
                    "UPDATE `investment` 
                     SET `day_run` = '$newday', 
                         `amount_made` = '$newamount' 
                     WHERE `id` = '$id'");

                if ($update_query) {
                    echo "UPDATED for investment ID: $id<br>";
                } else {
                    echo "FAILED to update running investment ID: $id<br>";
                }
            } 
            // Completed
            else {
                $complete_query = mysqli_query($connection, 
                    "UPDATE `investment` 
                     SET `status` = 'completed' 
                     WHERE `id` = '$id'");

                $credit_user = mysqli_query($connection, 
                    "UPDATE `client` 
                     SET `invested` = invested + $amount_made 
                     WHERE `id` = '$user'");

                if ($complete_query && $credit_user) {
                    echo "COMPLETED investment ID: $id and credited user ID: $user<br>";
                } else {
                    echo "FAILED to complete or credit user ID: $user for investment ID: $id<br>";
                }
            }
        } else {
            echo "Skipped investment ID: $id - not yet time ($payment_time)<br>";
        }
    }

} else {
    echo 'NO RUNNING INVESTMENTS';
}

?>
