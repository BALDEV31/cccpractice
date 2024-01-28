<?php
// include("sql/connection.php");
include("sql/functions.php");
// include("product_list.php");
$id = isset($_GET['id']) ? $_GET['id'] : '';
echo $id;
$action = isset($_GET['action']) ? $_GET['action'] : '';
$data =array();

if(!$id==0 and $action=='edit'){
    $query = select('ccc_product',['*'],['id' => $id]);
    $result = mysqli_query($conn,$query);
    if($result and mysqli_num_rows($result)>0){
       $data = mysqli_fetch_assoc($result);
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $formdata = $_POST['group1'];
    // print_r($formdata);
    if($formdata['id']){
        $update=update('ccc_product',$formdata,['id'=> $formdata['id']]);
        mysqli_query($conn,$update);
        header("Location:product_list.php");
        echo "update";
    }else{
        $insert=insert('ccc_product',$formdata);
        mysqli_query($conn,$insert);
        header("Location:product_list.php");
        echo "insert";
    }
}

if(!$id==0 and $action=='delete'){
    $delete = delete('ccc_product',['id'=> $id]);
    mysqli_query($conn,$delete);
    header("LOCATION:product_list.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    label,.label{
        display: inline-block;
        width: 120px;
        text-align: right;
    }
 .label label{
        /* display: inline-block; */
        text-align: left;
        width: 70px;
    }
   </style>
</head>
<body>
    <form action="product.php" method="post">
    <fieldset>
        <legend>product_details</legend>
        <p>
            <label for="product_name">product_name :</label>
            <input type="text" name="group1[product_name]" id="product_name" value="<?php echo isset($data['product_name'])&&$data['product_name'] ? $data['product_name']: ''; ?>" required> <br>
        </p>

        <p>
            <label for="SKU">SKU :</label>
            <input type="text" name="group1[sku]" id="SKU" value="<?php echo isset($data['sku'])&&$data['sku'] ? $data['sku']:""; ?>"required> <br>
        </p>

        <p>
            <span class="label">product_type:</span>
            <label for="simple">simple</label>
            <input type="radio" name="group1[product_type]" class="radio_buttons" value="simple"<?php echo isset($data['product_type'])&&$data['product_type'] =='simple' ? 'checked' : ''; ?>checked>

            <label for="bundle">bundle</label>
            <input type="radio" name="group1[product_type]" class="radio_buttons" value="bundle"<?php echo  isset($data['product_type'])&&$data['product_type'] == 'bundle' ? 'checked' : ''; ?>><br>
        </p>
        
        <p>
        <label for="category">category:</label>
            <select name="group1[category]" id="category">
                <option value="Bar & Game Room" <?php echo isset($data['category'])&&$data['category'] == 'Bar & Game Room' ? 'selected' : ''; ?>>Bar & Game Room</option>
                <option value="Bedroom" <?php echo  isset($data['category'])&&$data['category'] == 'Bedroom' ? 'selected' : ''; ?>>Bedroom</option>
                <option value="Decor" <?php echo  isset($data['category'])&&$data['category'] == 'Decor' ? 'selected' : ''; ?>>Decor</option>
                <option value="Dining & Kitchen" <?php echo isset($data['category'])&&$data['category'] == 'Dining & Kitchen' ? 'selected' : ''; ?>>Dining & Kitchen</option>
                <option value="Lighting" <?php echo  isset($data['category'])&&$data['category'] == 'Lighting' ? 'selected' : ''; ?>>Lighting</option>
                <option value="Living Room" <?php echo  isset($data['category'])&&$data['category'] == 'Living Room' ? 'selected' : ''; ?>>Living Room</option>
                <option value="Mattresses" <?php echo  isset($data['category'])&&$data['category'] == 'Mattresses' ? 'selected' : ''; ?>>Mattresses</option>
                <option value="Office" <?php echo  isset($data['category'])&&$data['category'] == 'Office' ? 'selected' : ''; ?>>Office</option>
                <option value="Outdoor" <?php echo  isset($data['category'])&&$data['category'] == 'Outdoor' ? 'selected' : ''; ?>>Outdoor</option>
            </select><br>
        </p>

        <p>
            <label for="Manufacturer_Cost"> Manufacturer Cost:</label>
            <input type="text" name="group1[manufacturer_cost]" id=" Manufacturer_Cost" value="<?php echo isset($data['manufacturer_cost'])&&$data['manufacturer_cost'] ?$data['manufacturer_cost']: ""; ?>"required><br>
        </p>

        <p>
            <label for="Shipping_cost">Shipping cost:</label>
            <input type="text" name="group1[shipping_cost]" id="Shipping_cost" value="<?php echo isset($data['shipping_cost'])&&$data['shipping_cost'] ?$data['shipping_cost']: ""; ?>"required><br>
        </p>

        <p>
            <label for="Total_Cost">Total Cost:</label>
            <input type="text" name="group1[total_cost]" id="Total_Cost" value="<?php echo isset($data['total_cost'])&&$data['total_cost'] ?$data['total_cost']: ""; ?>"required><br>
        </p>

        <p>
            <label for="Price">Price :</label>
            <input type="text" name="group1[price]" id="Price" value="<?php echo isset($data['price'])&&$data['price'] ?$data['price']: ""; ?>"required><br>
        </p>

        <p>
            <label for="Status">Status:</label>
                <select name="group1[status]" id="Status">
                    <option value="enabled"<?php echo isset($data['status'])&&$data['status']=='enabled'?'selected':'';?>>enabled</option>
                    <option value="disabled"<?php echo isset($data['status'])&&$data['status']=='disabled'?'selected':'';?>>disabled</option>
                </select><br>
        </p>

        <p>
            <label for="Created_At">Created_At :</label>
            <input type="Date" id="Created_At" name="group1[created_at]" value="<?php echo isset($data['created_at'])&&$data['created_at'] ?$data['created_at']: ""; ?>"required></inPut><br>
        </p>

        <p>
            <label for="Updated_At">Updated_At :</label>
            <input type="Date" id="Updated_At" name="group1[updated_at]" value="<?php echo isset($data['updated_at'])&&$data['updated_at'] ?$data['updated_at']: ""; ?>"required></inPut><br>
        </p>
            <input type="hidden" name="group1[id]" value="<?php echo $id; ?>">
        <p>
            <input type="submit" value="submit">
        </p>
    </fieldset>
    </form>
</body>
</html>