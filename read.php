<?php 
error_reporting(0);
include("oops.php");  // include OOPS class file
$sn=1;  // Iterating veriable
$obj=new crud;
$array=$obj->show();    // display details function
if(!empty($_GET['del'])){
    $id=$_GET['del'];
   $obj->del($id);
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php");?>
    <style>
        
    </style>
</head>
<body >
    <h3 class="mt-4" align="center">Employee Details</h3>
   <a href="index.php">ADD EMPLOYEE</a>
    <section class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">srno</th>
                <th scope="col"> Name</th>
                <th scope="col">username</th>
                <th scope="col">Age</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Profile</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <?php 
            // display all records.
            foreach($array as $arr){
            ?>
            <tbody>
                <tr>
                <th scope="row"><?php echo $sn;?></th>
                <td><?php echo $arr['name'];?></td>
                <td><?php echo $arr['username'];?></td>
                <td><?php echo $arr['age'];?></td>
                <td><?php echo $arr['email'];?></td>
                <td><?php echo $arr['password'];?></td>
                <td><img src="<?php echo $arr['image'];?>" height="100px" width="80px" class="card-img-top" alt="Profile Photo"></td>
                <td><a href="edit.php?edit=<?php echo $arr['id'];?>" role="button" class="btn btn-primary">Edit</a> 
                | <a href="?del=<?php echo $arr['id'];?>" role="button" class="btn btn-danger">Delete</a>
				</td>
                </tr>
            </tbody>
            <?php
            $sn+=1;
            }
            ?>
        </table>
    </section>
    <!-- include script links -->
    <?php include("foot.php");?>
</body>
</html>