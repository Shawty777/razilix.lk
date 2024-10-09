<?php
 if(isset($_POST["btnreg"])) 
 {
 $fullname=$_POST["txtName"];
 $email=$_POST["txtEmail"];
 $contact=$_POST["txtContactNo"];
 $password=$_POST["txtPassword"];

 $con = mysqli_connect("localhost","root","","itemdb");
   if(!$con){

        die("Could not connect to DB server. Please try again");
   }
   $sql = "INSERT INTO `user` (`email`, `fullname`, `contact`, `password`) VALUES ('".$email."', '".$fullname."', '".$contact."', '".$password."');";

     mysqli_query($con,$sql);

     header("Location:log.php");
   }
  
   ?>

		  

