<?php

include('../../connection.php');

// SQL query to fetch payment methods
$sql    = "SELECT *  FROM payment_methods";
$result = $connection->query($sql);

// Create an array to store the payment methods
$paymentMethods = [];

if ($result->num_rows > 0) {
    // Fetch all rows and add them to the array
    while ($row = $result->fetch_assoc()) {
        $paymentMethods[] = $row;
    }
}

// Close the database connection
$connection->close();

// Return the result as JSON
echo json_encode($paymentMethods);
