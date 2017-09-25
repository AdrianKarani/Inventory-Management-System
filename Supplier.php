<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Supplier</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>

<body>
<nav>
    <a href="Admin.php" class="nav-button" >Home</a>
    <a href="logout.php" class="nav-button">Logout</a>
</nav>

<?php
require_once 'connection.php';
session_start();

//VIEW SUPPLIERS & GOODS f
echo "<h2>View Goods</h2>";
echo "<table>";
echo"<tr>
<th>Supplier ID</th>
<th>Supplier Name</th>
<th>Goods</th>
<th>Quantity</th>
<th>Price</th>
<th>Specifications</th>
</tr>";
while ($stmt->fetch()) {
    echo "<tr>";
    echo "<td>$supplier_id</td>";
    echo "<td>$supplier_name</td>";
    echo "<td>$goods</td>";
    echo "<td>$qty</td>";
    echo "<td>$price</td>";
    echo "<td>$specs</td>";
    echo "<td><a href='edit.php' id=$order_no >Edit</a></td> ";
    echo "<td><input type='submit' id='button' name='submit' value='Available'></td> ";
    echo "<td><input type='submit' id='button' name='submit' value='Unavailable'></td> ";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
