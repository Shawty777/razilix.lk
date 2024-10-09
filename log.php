<html>
<head>
    <title>Website For Razilix Store </title>
    <link rel="stylesheet" href="log.css">
    <link rel="stylesheet" href="style.css">
    <style>
     
    </style>
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
        <div class="login-box">
            <h2>Login</h2>
		        <form action="logHandler.php" method="post">
            <form>
              <div class="user-box">
                <input type="text" name="txtEmail" required="">
                <label>Email</label>
              <div class="user-box">
                <input type="password" name="txtPassword" required="">
                <label>Password</label>
             </div>
               </div>
              <button type="submit" name="btnlog">
                LogIn
              </button>
            </form>
        </div>
                <!-- <a href="page.html" >Register</a> -->
              <!-- <a href="#">
                 <input type="submit"> 
              </a> -->
            </form>
          </div>  
    </div>
</body>
</html>