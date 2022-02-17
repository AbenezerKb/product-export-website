<?php

include("connect.php");

$id = $_POST['id'];
echo ($id);
$sql="UPDATE orders SET status='order confirmed' WHERE ID='$id'";

//if ($connect->query($sql) === TRUE)
//echo ($sql);
if ($connect->query($sql) )
{$result= $connect->query($sql);
  


    //$final=$result->fetch_assoc();
 echo json_encode(array("update"=>"success"));
 
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