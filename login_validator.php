<?php  

session_start();

if(isset($_POST['save']))
{


include("admin-2/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

$set="SELECT * FROM customers WHERE email='$email' AND password='$password'";

$results = $connect->query($set);
$final=$results->fetch_assoc();

$_SESSION['email']=$final['email'];
$_SESSION['password']=$final['password'];

if($email==$final['email'] AND $password==$final['password'])
{

   
    header("location:index.php");
  

}
else{
    header("location:login.php");
   
}
}
?>
