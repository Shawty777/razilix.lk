<html>
<head>
    <title>Website For Razilix Store </title>
    <!-- <link rel="stylesheet" href="reg.css"> -->
    <!-- <link rel="stylesheet" href="log.css"> -->
    <link rel="stylesheet" href="style.css">
    <style>
   .reg-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%, -50%);
    background: rgba(0,0,0,.5);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.6);
    border-radius: 10px;
}
.reg-box h2 {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
}
.reg-box .user-box {
    position: relative;
}
.reg-box .user-box input,select {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: rgb(0, 0, 0);
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background-color: transparent;
}
.reg-box .user-box label {
    position: absolute;
    top:0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: 0.5s;
}
.reg-box .user-box input:focus ~ label,
.reg-box .user-box input:valid ~ label,
.reg-box .user-box select:focus ~ label,
.reg-box .user-box select:valid ~ label {
    top: -20px;
    left: 0;
    color: #ae952f;
    font-size: 12px;
}
.reg-box form button {
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    color: #f6d655;
    font-size: 16px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 40px;
    letter-spacing: 4px;
    border:none;
    background-color: transparent;
}
.reg-box button:hover {
    background: #f6d655;
    color: rgb(0, 0, 0);
    border-radius: 5px;
    box-shadow: 0 0 5px #f6d655,
                0 0 25px #f6d655,
                0 0 50px #f6d655,
                0 0 100px #f6d655;
}
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
            <h2>Add Your Item Here</h2>
            <form action="RegHandler.php" method="post">
              <div class="user-box">
                <input type="text" id="txtTitle" name="txtName" required=""/>
                <label>Product Name</label>
              </div>
              <div class="user-box">
                <input type="text"name="txtDescription" required="">
                <label>Describe about the product</label>
              </div>
              <div class="user-box">
                <input type="file" name="imageFile" required=""/>
                <label>Upload a Picture</label>
              </div>
              Category  <select name="lstCategory">
                        <option value="glass">Glass</option>
                        <option value="metal">Metal</option>
                        <option value="cardboard">Cardboard </option>
                        <option value="paper">Paper</option>
                        <option value="plastic">Plastic</option>
                        <option value="other">Other</option>
                        </select>
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