<?php
define("HOST", "localhost");
define("USER", "qsgigqid_kingsley");
define("PASSWORD", "07089611318Kk");
define("DATABASE", "qsgigqid_crypto");

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
error_reporting(E_ALL);
ini_set('display_errors', 1);

$current_datetime = date("Y-m-d H:i:s");

$query = mysqli_query($connection, "SELECT * FROM investment WHERE status = 'running'");

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_assoc($query)) {
        $day_run = $row['day_run'];
        $amount_made = $row['amount_made'];
        $amount = $row['amount'];
        $id = $row['id'];
        $user = $row['user'];
        $duration = $row['duration'];
        $investment_return = $row['return'];
        $next_credit_time = $row['next_credit_time'];

        if (strtotime($current_datetime) >= strtotime($next_credit_time)) {
            $newday = $day_run + 1;
            $newamount = $newday * ($amount / 100) * $investment_return;
            $next_time = date("Y-m-d H:i:s", strtotime('+24 hours'));

            if ($duration != $day_run) {
                $update_query = mysqli_query($connection, "UPDATE investment 
                    SET day_run = '$newday', 
                        amount_made = '$newamount', 
                        next_credit_time = '$next_time' 
                    WHERE id = '$id'");

                echo $update_query ? "UPDATED investment ID: $id<br>" : "FAILED to update ID: $id<br>";
            } else {
                $complete_query = mysqli_query($connection, "UPDATE investment SET status = 'completed' WHERE id = '$id'");
                $credit_user = mysqli_query($connection, "UPDATE client SET invested = invested + $amount_made WHERE id = '$user'");

                if ($complete_query && $credit_user) {
                    echo "COMPLETED investment ID: $id and credited user ID: $user<br>";
                } else {
                    echo "FAILED to complete or credit user ID: $user for investment ID: $id<br>";
                }
            }
        } else {
            echo "Not yet time for investment ID: $id<br>";
        }
    }
} else {
    echo "NO RUNNING INVESTMENTS";
}
