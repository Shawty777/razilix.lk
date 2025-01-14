<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

input[type="submit"] {
	border-radius: 20px;
	border: 1px solid #228B22;
	background-color: #228B22;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

input[type="submit"]:active {
	transform: scale(0.95);
}

input[type="submit"]:focus {
	outline: none;
}

input[type="submit"].ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #023020, #50C878);
	background: linear-gradient(to right, #023020, #50C878);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
    
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
    <h2>Razilix Sign up form</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="loginHandler.php" method="post">
		<!-- <form action="RegistrationHandler.php" method="post"> -->
			<h1>Create Account</h1>
					
			<input type="text" placeholder="Name" name="txtName" id = "txtName"/>
			<input type="email" placeholder="Email" required name="txtEmail" id="txtEmail"/>
			<input type="password" placeholder="Password" id="txtPassword" name="txtPassword" required/>
            <input type="password" placeholder="Confirm Password" id="txtConfimPassword" name="txtConfimPassword"/>
            <input type="number" placeholder="Contact Number" name="txtContactNo" id="txtContactNo" pattern="[0-9]{10}" required />   
			
			<?php
				if(isset($_POST["btnSubmit"])) {
					$email = $_POST["txtEmail"];
					$fullname = $_POST["txtName"];
					$contact = $_POST["txtContactNo"];
					$password = $_POST["txtPassword"];

					$con = mysqli_connect("localhost","root","","itemdb");
							if(!$con){
								die("Could not connect to DB server. Please try again");
							}

							$sql = "INSERT INTO `user` ( `user_name`, `email`, `password`, `phone_no`) VALUES ( '".$fullname."', '".$email."', '".$password."', '".$contact."');";

							mysqli_query($con,$sql);

							foreach($in as $i){
								$sql_interes = "INSERT INTO `interest` (`email`, `interest`) VALUES ('".$email."', '".$i."');";
							}
							mysqli_query($con,$sql_interes);

							header("Location:login.php");
				}
			?>
            
			<input type="submit" value="Sign Up" onClick="checkPassword()">
            <a href="page.html">Razilix</a>

		</form>  
	</div>
	<div class="form-container sign-in-container">
		<form action="loginHandler.php" method="post">
			<h1>Sign in</h1>
		 
			<input type="email" name="txtEmail" placeholder="Email" />
			<input type="password" name="txtPassword" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<input type="submit" value="Sign In" name="btnSubmit">
            <br>
            <a href="page.html">Back to Razilix</a>
        </form>
         
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
                
				<input type="submit" class="ghost" id="signIn" value="Sign In">
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and register with us</p>
                 
				<input type="submit" class="ghost" id="signUp" value="Sign Up"> 
			</div>
		</div>
	</div>
</div>

<script>
    
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>
</body>
</html>
