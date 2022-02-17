<?php

include("admin-2/connect.php");

$name = $_POST['first'];
$last = $_POST['last'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$company = $_POST['company'];
$country = $_POST['country'];
// $address = $_POST['address'];
$state = $_POST['state'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$tax = $_POST['tax'];


$sql="INSERT INTO customers(first_name, last_name, email, phone, password, company, country, state, city, postcode, tax_id) 
                    VALUES('$name','$last','$email', '$phone', '$password' ,'$company','$country', '$state', '$city', '$postcode', '$tax')";
if ($connect->query($sql) === TRUE)
echo 'success';
else
echo "error";

?>''