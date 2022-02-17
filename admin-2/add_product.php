<?php

include("connect.php");

$name = $_POST['name'];
$price = $_POST['price'];
$category = $_POST['category'];
$image = $_POST['image'];

echo "ttttttttttttttt";
$sql="INSERT INTO products(name, price,category, image) VALUES('$name','$price','$category','$image')";
if ($connect->query($sql) === TRUE)
echo json_encode(array("blablabla"=>"success"));
else
echo json_encode(array("blablabla"=>"error"));

?>''