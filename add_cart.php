<?php

include("admin-2/connect.php");
session_start();
$item_id = $_POST['item_id'];
$value = $_POST['value'];
$total = $_POST['price']  *  $value  ;
$price = $_POST['price'];
$name = $_POST['name'];

$user_id = $_SESSION['email'];
// echo "<script>alert(".$user_id.")</script>";


$sql="INSERT INTO cart(user_id, item_id, item_name,size, price,total_price) VALUES('$user_id','$item_id', '$name','$value', '$price','$total')";
if ($connect->query($sql) === TRUE)
{ 
$set="SELECT COUNT(user_id) FROM cart WHERE user_id = '$user_id'";    
$results=$connect->query($set);
$final = $results->fetch_array()[0];
echo json_encode(array("number"=>$final)); 

}
else
echo json_encode(array("from server"=>"error" ));

?>