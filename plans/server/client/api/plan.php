<?php

include('../../connection.php');

// SQL query to fetch investment plans
$sql = "SELECT * FROM investment_plans";
$result = $connection->query($sql);

// Create an array to store the investment plans
$plans = [];

if ($result->num_rows > 0) {
    // Fetch all rows and add them to the array
    while ($row = $result->fetch_assoc()) {
        $plans[] = $row;
    }
}

// Close the database connection
$connection->close();

// Return the result as JSON
echo json_encode($plans);
?>
