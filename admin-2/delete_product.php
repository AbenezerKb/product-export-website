<?php

include("connect.php");

$id = $_POST['id'];

echo "ttttttttttttttt";
$sql="DELETE FROM products WHERE ID = '$id'";
if ($connect->query($sql) === TRUE)
echo json_encode(array("blablabla"=>"success"));
else
echo json_encode(array("blablabla"=>"error"));

?>''