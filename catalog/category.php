<?php
include('sql/functions.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categoryName = $_POST['category'];
    // echo $categoryName;
//  print_r($arr);
//  print_r($arr['category']);
// $sql = "$query ORDER BY `cat_id` ASC";
$existingCategoryQuery = select('ccc_category', ['name'], ['name' => $categoryName]);
$existingCategoryResult = mysqli_query($conn, $existingCategoryQuery);

if ($existingCategoryResult && mysqli_num_rows($existingCategoryResult) > 0) {
    echo "Category name is already added. Choose a different name.";
} else {
    $newCategoryEntry = insert('ccc_category', ['name' => $categoryName]);
    mysqli_query($conn, $newCategoryEntry);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categories</title>
</head>
<body>
    <form action="category.php" method="post">
        <h1>add the categories</h1>
        <label for="category">
            Category:
        </label>
        <input type="text" name="category" id="category" required>
        <p>
            <input type="submit" value="submit">
        </p>
    </form>
</body>
</html>