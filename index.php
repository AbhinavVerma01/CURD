<?php
require 'heder.php';
?>
<style>
    #up1{
        background-color: brown;
        color: antiquewhite;
        border: 1px solid red;
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
        padding: 4px;
        border: 2px solid red ;
        border-radius: 7px;
    }
    #de1{
        background-color: green;
        color: antiquewhite;
        border: 1px solid red;
        margin-left: 20px;
        font-size: 20px;
        font-weight: bold;
        padding: 4px;
        border: 2px solid greenyellow ;
        border-radius: 7px;
    }


</style>
<table border="3" cellpadding="10">
        <tr>
            <th>Emp_id</th>
             <th>Employee Name</th>
              <th>Email</th>
               <th>Gender</th>
                <th>Address</th>
                <th colspan="2">Action</th>
        </tr>
        <?php
       $con= mysqli_connect("localhost","root","root","curd11");
       $sql="select * from employee ";
       $qry=mysqli_query($con,$sql);
       while( $row=mysqli_fetch_assoc($qry))
       {

       
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['ename']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['gender']?></td>
            <td><?php echo $row['addr']?></td>
            <td > <a href="update_emp.php?id=<?php echo $row['id']?> " id=up1>Update</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']?> " id=de1>Delete</td>

        </tr>
     <?php  } ?>
    </table>
   
</body>
</html>