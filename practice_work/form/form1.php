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
    <?php
    include("db_connection.php");
    ?>
    <form action="form_submit.php" method="post">
    <fieldset>
        <legend>product_details</legend>
        <p>
        <label for="product_name">product_name :</label>
        <input type="text" name="group1[product_name]" id="product_name"> <br>
        </p>

        <p>
        <label for="SKU">SKU :</label>
        <input type="text" name="group1[sku]" id="SKU"> <br>
        </p>

        <p>
        <span class="label">product_type:</span>
        <label for="simple">simple</label>
        <input type="radio" name="group1[product_type]" class="radio_buttons" value="simple">
        <label for="bundle">bundle</label>
        <input type="radio" name="group1[product_type]" class="radio_buttons" value="bundle"><br>
        </p>
        
        <p>
        <label for="category">category:</label>
        <select name="group1[category]" id="category">
        <option value="Bar & Game Room">Bar & Game Room</option>
        <option value="Bedroom">Bedroom</option>
        <option value="Decor">Decor</option>
        <option value="Dining & Kitchen">Dining & Kitchen</option>
        <option value="Lighting">Lighting</option>
        <option value="Living Room">Living Room</option>
        <option value="Mattresses">Mattresses</option>
        <option value="Office">Office</option>
        <option value="Outdoor">Outdoor</option>
        </select><br>
        </p>

        <p>
        <label for="Manufacturer_Cost"> Manufacturer Cost:</label>
        <input type="text" name="group1[manufacturer_cost]" id=" Manufacturer_Cost"><br>
        </p>

        <p>
        <label for="Shipping_cost">Shipping cost:</label>
        <input type="text" name="group1[shipping_cost]" id="Shipping_cost"><br>
        </p>

        <p>
        <label for="Total_Cost">Total Cost:</label>
        <input type="text" name="group1[total_cost]" id="Total_Cost"><br>
        </p>

        <p>
        <label for="Price">Price :</label>
        <input type="text" name="group1[price]" id="Price"><br>
        </p>

        <p>
        <label for="Status">Status:</label>
        <select name="group1[status]" id="Status">
            <option value="enabled">enabled</option>
            <option value="disabled">disabled</option>
        </select><br>
        </p>

        <p>
        <label for="Created_At">Created_At :</label>
        <input type="Date" id="Created_At" name="group1[created_at]"></inPut><br>
        </p>

        <p>
        <label for="Updated_At">Updated_At :</label>
        <input type="Date" id="Updated_At" name="group1[updated_at]"></inPut><br>
        </p>

        <p>
        <input type="submit" value="submit">
        </p>
    </fieldset>
    </form>
</body>
</html>

?>