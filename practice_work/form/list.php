<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>last 10 elements of the table</title>
    <style>
        table{
            border-collapse: none;
            border-color: red;
        }
    </style>
</head>
<body>
<h1>Last 10 Records</h1>
<?php
include("sqlFunction.php");
include("db_connection.php");
$query = selectAll("ccc_product","id");
$result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch and display records
        echo '<table class="table_style">';
           echo "<th>product_name</th> <th>sku</th> <th>product_type</th> <th>category</th> <th>manufacturer_cost</th> <th>shipping_cost</th> <th>total_cost</th> <th>price</th> <th>status</th> <th>created_at</th> <th>updated_at</th>";
        while ($row = mysqli_fetch_assoc($result)) {
            // echo '<li>' . $row['product_name'] . '</li>';
            // echo '<li>' . $row['sku'] . '</li>';
            // echo '<li>' . $row['product_type'] . '</li>';
            // echo '<li>' . $row['category'] . '</li>';
            // echo '<li>' . $row['manufacturer_cost'] . '</li>';
            // echo '<li>' . $row['shipping_cost'] . '</li>';
            // echo '<li>' . $row['total_cost'] . '</li>';
            // echo '<li>' . $row['price'] . '</li>';
            // echo '<li>' . $row['status'] . '</li>';
            // echo '<li>' . $row['created_at'] . '</li>';
            // echo '<li>' . $row['updated_at'] . '</li>';
            // echo "<br>";
            // Repeat the line above for each column you want to display
           
            echo "<tr><td>" . $row['product_name'] . "</td>";
            echo "<td>" . $row['sku'] . "</td>";
            echo "<td>" . $row['product_type'] . "</td>";
            echo "<td>" . $row['category'] . "</td>";
            echo "<td>" . $row['manufacturer_cost'] . "</td>";
            echo "<td>" . $row['shipping_cost'] . "</td>";
            echo "<td>" . $row['total_cost'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "<td>" . $row['created_at'] . "</td>";
            echo "<td>" . $row['updated_at'] . "</td></tr>";
       
           
        }
        echo "</table>";
    }
?>
</body>
</html>