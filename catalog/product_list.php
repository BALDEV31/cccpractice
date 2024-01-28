
<?php
include("sql/functions.php");
// include("sql/connection.php");
$query = select("ccc_product");
$sql = "$query ORDER BY `id` DESC LIMIT 20";
$result = mysqli_query($conn, $sql);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Last 20 Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product Name</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>';

if($result){
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['product_name']}</td>";
        echo "<td>{$row['sku']}</td>";
        echo "<td>{$row['category']}</td>";
        echo "<td><a href='product.php?id={$row['id']}&action=edit'>Edit</a></td>";
        echo "<td><a href='product.php?id={$row['id']}&action=delete'>Delete</a></td>";
        echo "</tr>";
    }
}
else {
    echo "error in fetching the records";
}

// $conn->close();

?>
    