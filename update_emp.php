<?php
require'heder.php';
$con=mysqli_connect('localhost','root','root','curd11');
$id=$_GET['id'];
$sql="select *from employee where id='$id' ";
$qry=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($qry)){


?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add New Data</title>
      <style>
            form{
                  height: 300px;
                  width: 25%;
                  margin-left: 400px;
                  margin-top: 50px;
                  border: 2px solid black;
                  border-radius: 20px;
                  padding-left: 120px;
                  font-size: 21px;
                  padding-top: 15px;
                  background-color: white;
                  box-shadow:6px 5px 10px black; ;

               
                  
            }
            .input{
                  font-size: 16px;
                  /* border: 1px solid black; */
                  color: black;
                  border-radius: 6px;
                  padding:5px;
                  font-weight: bold;
            }
            #bt1{
                  background-color: brown;
                  color: black;
                  font-weight: bold;
                  font-size: 22px;
                  border: 1px solid black;
                  border-radius: 10px;
                  box-shadow: 7px 7px 10px red;
                  margin-left: 0px;
                  width: 200px;
            }
          
      </style>

</head>
<body>
     <form method="post" >
 <b>Student Name:</b>
 <br>
 <input type="text" name="ename" value="<?php echo $row['ename']  ?>" class=input>
      <br>
     
      <b>E-mail:</b>
      <br>
      <input type="email" name="email" value="<?php echo $row['email']  ?>" class=input>
      <br>
      
      <b>Select Your Gender:</b>
      <br>
      <select name="gen" class=input>
            <option value="male">Male</option>
            <option value="female">Female</option>
      </select>
      <br>
      
      <b>Course:</b>
      <br>
      <input type="text" name="addr" value="<?php echo $row['addr']  ?>"class=input>
      <br>
      <br>
      
      <input type="Submit" name="save" value="Update" id=bt1> 
      
     </form> 
     <?php } ?>
</body>
</html>
<?php
if(isset($_POST['save'])){
      $emp_name=$_POST['ename'];
      $em=$_POST['email'];
      $gen=$_POST['gen'];
      $addr=$_POST['addr'];
      $sql1="update employee set ename='$emp_name',email='$em',gender='$gen',addr='$addr' where id ='$id'";
      mysqli_query($con,$sql1);
      
            header("location:index.php");
      
}
?>

