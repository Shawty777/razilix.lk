<?php

          if(isset($_POST["btnlog"])){
            // Read values from the text feild
            $Username = $_POST["txtEmail"];
            $Password = $_POST["txtPassword"];
            $valid = false;
			
              $con = mysqli_connect("localhost","root","","itemdb");

              if(!$con){ // Error Handling part
                die("Could not connect to DB server. Please try again");
              }
              $sql = " SELECT * FROM `user` WHERE  `email` = '".$Username."' and  `password` = '".$Password."'";
              $result = mysqli_query($con,$sql);
              if(mysqli_num_rows($result) > 0){
                  $valid = true;
              } else {
                  $valid = false;
              }
            if($valid) {
              $_SESSION["userName"] = $Username;
              header("Location:page.html");
            } else {
              echo "Please check your Username and password";
            }
          }
          ?>
