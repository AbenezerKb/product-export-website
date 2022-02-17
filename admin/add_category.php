<?php

include("connect.php");

$name = $_POST['name'];


echo "ttttttttttttttt";
$sql="INSERT INTO categories(name) VALUES('$name')";
if ($connect->query($sql) === TRUE)
    echo "inserted";
else
    echo "error";

?>
