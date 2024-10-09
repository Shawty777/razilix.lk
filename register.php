<html>
<head>
    <title>Website For Razilix Store </title>
    <link rel="stylesheet" href="reg.css">
    <!-- <link rel="stylesheet" href="log.css"> -->
    <link rel="stylesheet" href="style.css">

    <script>
    function checkPassword()
        {
            let pw = document.getElementById("txtPassword").value;
            let cpw = document.getElementById("txtConfimPassword").value;
            if(pw != cpw)
                {
                    alert("Password and confrim password should be the same");
                    event.preventDefault();
                }
        }
    </script>
    <style>
   
    </style>
</head>
<body>
    <div class="Main">
        <nav>
            <div class="navbar">
                <div class="logo" style="float:left; padding: 0px 0px 0px 20px">
                    <!-- pading: top right bottom left -->
                    <a href="page.html" id="home"><img src="images/logo.png" width="20%"></a>
                </div>
                <ul>
                    <li><a href="log.php">Login</a> </li>
                    <li><a href="register.php">Register</a> </li>
                    <li><a href="a">Cart</a> </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="content">
         <div class="reg-box">
            <h2>Register</h2>
            <form action="RegHandler.php" method="post">
              <div class="user-box">
                <input type="text" id="txtName" name="txtName" required=""/>
                <label>Full Name</label>
              </div>
              <div class="user-box">
                <input type="text" id="txtEmail" name="txtEmail" required="">
                <label>Email</label>
              </div>
              <div class="user-box">
                <input type="tel" id="txtContactNo" name="txtContactNo" required=""/>
                <label>Contact Number</label>
              </div>
              <div class="user-box">
                <input type="password" id="txtPassword" name="txtPassword" required=""/>
                <label>Password</label>
              </div>
              <div class="user-box">
                <input type="password" id="txtConfimPassword" name="txtConfimPassword" required=""/>
                <label>Confirm Password</label>
                </script>
              </div>
                <!-- <input type="submit" name= "btnreg" id= "btnreg" value="Register" onClick="checkPassword()"> -->
                <button type="submit" name="btnreg" onClick="checkPassword()" >
                   <!-- name= "btnreg" id= "btnreg" onClick="checkPassword()"  -->
                  Register
                </button>
                <!-- <a href="#"
                Register
              </a> -->
                
            </form>
          </div>  
    </div>
</body>
</html>