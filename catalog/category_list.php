<?php
include('sql/functions.php');
$query = select('ccc_category');
$result = mysqli_query($conn, $query);

echo "<h2>Category List</h2>";
echo "<table border='1'>";
echo "<tr><th>Category ID</th><th>Name</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['cat_id']}</td><td>{$row['name']}</td></tr>";
}
echo "</table>";
mysqli_close($conn);
?>