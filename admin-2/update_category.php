<?php

include("connect.php");

$category = $_POST['category'];
$description = $_POST['description'];
$image = $_POST['image'];
$id = $_POST['id'];
echo "ttttttttttttttt";
$sql="UPDATE categories SET category = '$category', description = '$description', image ='$image' WHERE ID = '$id' ";
if ($connect->query($sql) === TRUE)
echo json_encode(array("update"=>"success"));
else
echo json_encode(array("update"=>"error"));

?>''