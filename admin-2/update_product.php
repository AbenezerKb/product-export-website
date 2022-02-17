<?php

include("connect.php");

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = $_POST['image'];
$id = $_POST['id'];

$sql="UPDATE products SET name = '$name', price = '$price', category ='$category', image ='$image' WHERE ID = '$id' ";
if ($connect->query($sql) === TRUE)
echo json_encode(array("update"=>"success"));
else
echo json_encode(array("update"=>"error"));

?>''