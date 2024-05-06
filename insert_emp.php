<?php

$emp_name=$_POST['ename'];
$email=$_POST['email'];
$gender=$_POST['gen'];
$addr=$_POST['addr'];
 $con=mysqli_connect("localhost","root","root","curd11");
 $sql="insert into employee(ename,email,gender,addr )values('$emp_name','$email','$gender','$addr')";
 $qry=mysqli_query($con,$sql);
if($qry){
      header("location:index.php");
}
?>