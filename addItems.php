<html>
<head>
<style>



input[type=submit]:hover{
background-color: green;
}

input[type=text]{
font-size: 12px;
padding:8px;
}
</style>
</head>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
require('mysql_connect.php');
$dbName = $_POST['dbN'];
$dbid = $_POST['dbidd'];
$dbimg = $_POST['dbimg'];
$dbname = $_POST['dbnam'];
$dbprice = $_POST['dbpri'];

$sq = "CREATE TABLE $dbName(
$dbid INT AUTO_INCREMENT PRIMARY KEY,
$dbimg VARCHAR(600) NOT NULL,
$dbname VARCHAR(100) NOT NULL,
$dbprice VARCHAR(6) NOT NULL
);";
if(mysqli_query($conn,$sq)){
echo "Table Created Successfully";
}
mysqli_close($conn);
}
?>
<form ACTION="" METHOD="POST">
<h3>Create table</h3>
<p><input type="text" name="dbN" placeholder="Table Name" required> CREATE TABLE</p>
<p><input type="text" name="dbidd" placeholder="ex:- toy_id, ele_id" required> INT AUTO_INCREMENT PRIMARY KEY,</p>
<p><input type="text" name="dbimg" placeholder="ex:- toy_img, ele_img" required> VARCHAR(600) NOT NULL,</p>
<p><input type="text" name="dbnam" placeholder="ex:- toy_name, ele_name" required> VARCHAR(100) NOT NULL,</p>
<p><input type="text" name="dbpri" placeholder="Eex:- toy_price, ele_price" required> VARCHAR(6) NOT NULL</p>
<input type="submit" value="Add Items">
</form>


<hr>
<?php

?>

<?php
require('mysql_connect.php');
$sql = "select ele_id from electronic";
$re = mysqli_query($conn,$sql);
if(mysqli_num_rows($re)>0)
{
echo "Id: "; 
while($row = mysqli_fetch_assoc($re)){

echo $row['ele_id'].', ';
}
}else{
echo "0 Electronic ID Found ";
}
mysqli_close($conn);
?>
<br>

<?php
/*
CREATE TABLE electronic
(
ele_id INT AUTO_INCREMENT PRIMARY KEY,
ele_img VARCHAR(600) NOT NULL,
ele_name VARCHAR(100) NOT NULL,
ele_price VARCHAR(6) NOT NULL
);
*/

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	require ('mysql_connect.php');

	$id1 = $_POST['ele_id'];
	$img1 = $_POST['ele_img'];
	$name1 = $_POST['ele_name'];
	$price1 = $_POST['ele_price'];

$sql = "insert into electronic values ($id1,'$img1','$name1','$price1');";

 if(mysqli_query($conn, $sql)){
 echo "Electronic Item Added Successfully";
 }
 
 mysqli_close($conn);
 }
 ?>
<form ACTION="" METHOD="POST">
<h3>Add Items in Electronic.</h3>
<p>ID <input type="number" name="ele_id" style="width:70px;" placeholder="Enter # " required></p>
<p>Image <br><textarea cols="50" rows="4" type="text" name="ele_img" placeholder="Enter IMAGE Link Here" required ></textarea></p>
<p>Name <br><textarea cols="50" rows="4" type="text" name="ele_name" placeholder="Enter Item Name" required ></textarea></p>
<p>Price <input type="text" name="ele_price" placeholder="Enter Items $ Price" required></p>
<input type="submit" value="Add Items">
</form>


<hr>
<?php
require('mysql_connect.php');
$sql = "select toy_id from toys";
$re = mysqli_query($conn,$sql);
if(mysqli_num_rows($re)>0)
{
echo "Id: "; 
while($row = mysqli_fetch_assoc($re)){

echo $row['toy_id'].', ';
}
}else{
echo "0 Toys ID Found ";
}
mysqli_close($conn);
?>
<br>


<?php
// CREATE TABLE toys
// (
// toy_id INT AUTO_INCREMENT PRIMARY KEY,
// toy_img VARCHAR(600) NOT NULL,
// toy_name VARCHAR(100) NOT NULL,
// toy_price VARCHAR(6) NOT NULL
// );
if($_SERVER['REQUEST_METHOD'] == 'POST'){
require('mysql_connect.php');

$toy_id = $_POST['to_id'];
$toy_img = $_POST['to_img'];
$toy_name = $_POST['to_name'];
$toy_price = $_POST['to_price'];

$sql = "insert into toys values($toy_id,'$toy_img','$toy_name','$toy_price');";

if(mysqli_query($conn, $sql)){
echo "Toys Added Successfully.";
}
mysqli_close($conn);
}
?>
<form ACTION="" METHOD="POST">
<h3>Add Items in Toys.</h3>
<p>ID <input type="number" name="to_id" placeholder="Enter # for your Items" required></p>
<p>Image <br><textarea cols="50" rows="4" type="text" name="to_img" placeholder="Enter IMAGE Link Here" required ></textarea></p>
<p>Name <br><textarea cols="50" rows="4" type="text" name="to_name" placeholder="Enter Item Name" required ></textarea></p>
<p>Price <input type="text" name="to_price" placeholder="Enter Items $ Price" required></p>
<input type="submit" value="Add Items">
</form>

<hr>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

require('mysql_connect.php');

$toy_id23 = $_POST['to_id32'];
$sql = "$toy_id23";

if(mysqli_query($conn, $sql)){
echo "Created Successfull ";
}
mysqli_close($conn);
}
?>
<h3>Create Anything Table,Databases,Delete,Update,...</h3>
<form action="" method="POST">
<textarea name="to_id32" type="text" cols="80" rows="20"></textarea>
<br>
<input type="submit" value="Run Query">
</form>






























