<?php

define("HOST", "localhost");
define("USER", "qsgigqid_kingsley");
define("PASSWORD", "07089611318Kk");
define("DATABASE", "qsgigqid_crypto");
$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
error_reporting(E_ALL);
ini_set('display_errors', 1);



$query = mysqli_query($connection, "SELECT * FROM `investment` WHERE `status`='running'");



// Check if there are rows returned by the query
if(mysqli_num_rows($query) > 0){
  
    
    while($row = mysqli_fetch_assoc($query)){
        $day_run = $row['day_run'];
        $amount_made = $row['amount_made'];
        $amount = $row['amount'];
        $id = $row['id'];
        $user = $row['user'];
        $duration = $row['duration'];
        
        $newday = $day_run + 1;
        
        // Assuming 'return' is a column name, but it's a reserved keyword in SQL.
        // Enclose it in backticks if needed: $row['`return`']

        if($duration != $day_run){
            $newamount = $newday * ($amount / 100) * $row['return'];
    
            // Perform the UPDATE query
            $update_query = mysqli_query($connection, "UPDATE `investment` SET `day_run`='$newday', `amount_made`='$newamount' WHERE `id`='$id'");
            
            if($update_query){
                echo 'UPDATED'; // Debugging statement to confirm UPDATE query success
            } else {
                echo 'NOT-UPDATED'; // Debugging statement to confirm UPDATE query failure
            }
        }else{
            $update_query = mysqli_query($connection, "UPDATE `investment` SET `status`='completed',   WHERE `id`='$id'");

            $update_user = mysqli_query($connection, "UPDATE `client` SET `invested` = invested + $amount_made WHERE `id` = '$user'");

        }
       
    }
} else {
    echo 'NOT RUNNING INVESTMENT'; // Debugging statement if no rows are found
}

?>
