<?php

include("connect.php");

$category = $_POST['category'];
$description = $_POST['description'];


$target ="uploads/";

$file_path=$target.basename($_FILES['file']['name']);

$file_name=$_FILES['file']['name'];

$file_tmp=$_FILES['file']['tmp_name'];



$file_store="../uploads/".$file_name;

move_uploaded_file($file_tmp,$file_store);





$image = $_POST['image'];

echo "ttttttttttttttt";
$sql="INSERT INTO categories(category, description, image) VALUES('$category','$description','$file_path')";
if ($connect->query($sql) === TRUE)
echo json_encode(array("blablabla"=>"success"));
else
echo json_encode(array("blablabla"=>"error"));

?>