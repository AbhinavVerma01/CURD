<?php

$con=mysqli_connect('localhost','root','root','curd11');
$id=$_GET['id'];
$sql="delete from employee where id='$id' ";
mysqli_query($con,$sql);
header('location:index.php');


?>