<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
<nav>
    <a href="Admin.php" class="nav-button" >Home</a>
    <a href="supplier.php" class="nav-button">Supplier</a>
    <a href="logout.php" class="nav-button">Logout</a>
</nav>

<!--ADD ORDER-->
<h2>Add Order</h2>
<form method="post" action="manage.php">
    <fieldset><legend>Fill in all fields to add Order</legend>
        Product Name:<br> <input type="text" name="prod_name"> <br>
        Quantity:<br> <input type="text" name="qty"> <br>
        Client Name:<br> <input type="text" name="client_name"> <br>
        Phone Number:<br> <input type="tel" name="phone_number"> <br>
        Address:<br> <input type="password" name="address"> <br>
        <input type="reset">
        <input type="submit" value="Save" name="submit" >
    </fieldset>
</form>
<?php
require_once 'connection.php';
session_start();

//DELETE ORDER
echo "<h2>Delete Order</h2>";
echo "<form action='admin.php' method='post'>";
echo "Order Number<select name='order_no' id='order_no'>";
while ($stmt->fetch()){
    echo "<option value='$order_no'>$order_no></option>";
    echo "<br>";
    echo "<br>";
}
echo "</select>";
echo "<input type='submit' id='button' name='submit' value='Delete'>";
echo "</form><br>";

//VIEW ORDERS
$stmt->execute();
echo "<h2>View Orders</h2>";
echo "<table>";
echo"<tr>
<th></th>
<th>Product Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Client Name</th>
<th>Phone Number</th>
<th>Address</th>
<th>Order Status</th>
</tr>";
while ($stmt->fetch()) {
    echo "<tr>";
    echo "<td>$order_no</td>";
    echo "<td>$prod_name</td>";
    echo "<td>$qty</td>";
    echo "<td>$client_name</td>";
    echo "<td>$phone_number</td>";
    echo "<td>$address</td>";
    echo "<td>$order_status</td>";
    echo "<td><a href='edit.php' id=$order_no >Edit</a></td> ";
    echo "<td><input type='submit' id='button' name='submit' value='Available'></td> ";
    echo "<td><input type='submit' id='button' name='submit' value='Unavailable'></td> ";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
