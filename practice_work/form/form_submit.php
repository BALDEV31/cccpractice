<?php


include("db_connection.php");
include("sqlFunction.php");
// echo "<pre>";
    $group1=$_POST['group1'];
    // print_r($_POST['group2']);
    // echo "</pre>";
// die;

// $product_name = $_POST['product_name'];
// $sku = $_POST['sku'];
// $product_type =$_POST['product_type'];
// $category = $_POST['category'];
// $manufacturer_cost = $_POST['manufacturer_cost'];
// $shipping_cost = $_POST['shipping_cost'];
// $total_cost = $_POST['total_cost'];
// $price = $_POST['price'];
// $status = $_POST['status'];
// $created_at = $_POST['created_at'];
// $updated_at = $_POST['updated_at'];

$sql= insert("ccc_product",$group1);
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Submit successful";
} else {
    echo "Error: " . mysqli_error($conn);
}

$conn->close();
?>