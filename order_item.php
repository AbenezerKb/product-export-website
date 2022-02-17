<?php

include("admin-2/connect.php");

//$id = $_POST['id'];


session_start();
$item_id = $_POST['id'];
$value = $_POST['size'];
$total = $_POST['price']  *  $value  ;
$price = $_POST['price'];
$name = $_POST['name'];

$user_id = $_SESSION['email'];
// echo "<script>alert(".$user_id.")</script>";


$insert_sql="INSERT INTO orders(customer_id, product_id, product_name,size, price,total_price, status) VALUES('$user_id','$item_id', '$name','$value', '$price','$total', 'pending')";




$delete_sql="DELETE FROM cart WHERE ID = '$item_id'";
if ($connect->query($insert_sql) === TRUE   )
{
if($connect->query($delete_sql) === TRUE)
    echo json_encode(array("blablabla"=>"success"));


}
else
echo json_encode(array("blablabla"=>"error"));

?>''