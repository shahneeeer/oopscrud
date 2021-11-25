<?php
class crud{
    private $con;
    function __construct(){
      $this->con= mysqli_connect("localhost","root","","oopscrud");
    }
    function insert($name,$uname,$age,$email,$pass,$image){//inserting the data
        if(mysqli_query($this->con,"insert into crud(name,username,age,email,password,image) values('$name','$uname',$age,'$email','$pass','$image')"));{
            echo "REGISTER SUCESSFULLY";
            header("location:read.php");
        }
       

    }
 
    function show(){    // show all details from table 
        $query=mysqli_query($this->con,"SELECT * FROM crud;");
        return $query;
    }   
    function del($id){  // delete detail
        return mysqli_query($this->con,"DELETE FROM crud WHERE id=$id;");
    }
    function update($id,$name,$uname,$age,$email,$pass,$img){
       
    
        if(mysqli_query($this->con,"UPDATE crud SET name='$name',username='$uname',age=$age,email='$email',password='$pass',image='$img' WHERE id=$id ")or die("mysqli")){
        
           header("location:read.php");
       
        }
       

    }
    function display($id){  // fetch employee data
        $dis=mysqli_query($this->con,"SELECT * FROM crud WHERE id=$id;");
        $result=mysqli_fetch_assoc($dis);
      return $result;
    }
    
    function __destruct()
    {
        mysqli_close($this->con);
    }
    
}
?>