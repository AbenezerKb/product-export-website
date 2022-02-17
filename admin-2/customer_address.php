<?php

include("connect.php");

$id = $_POST['id'];

$sql="SELECT * FROM `customers` WHERE email = '$id' ";

//if ($connect->query($sql) === TRUE)
//echo ($sql);
if ($connect->query($sql) )
{$result= $connect->query($sql);
  
$final=$result->fetch_assoc();

    //$final=$result->fetch_assoc();
 echo json_encode(array('country'=>$final['country'], 'city'=>$final['city'], 'state'=>$final['state'], 'postcode'=>$final['postcode']));
 
 //echo $row['city'];
 //echo $row['state'];
 //echo $row['postcode'];
 //$results=$connect->query($set);
//$final = $results->fetch_array()[0];
//echo json_encode(array("email"=>$final));
}
else
echo json_encode(array("update"=>"error"));

?>