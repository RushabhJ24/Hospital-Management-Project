<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <link rel="stylesheet" href="login.css">
    <link rel="shortcut icon" href="images/favicon.svg" type="image/x-icon">
     <link rel="stylesheet" href="header2.css">.
</head>
<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>
  
    <nav class="navbar">
       
        <a href="home1.html">home</a>
        <a href="login.html">Log In</a>
        <a href="aboutus.html">about</a>
        <a href="index.html">doctors</a>
        <a href="bookingapp.html">book</a>
        <a href="#review">review</a>
        <a href="#blogs">blogs</a>
    </nav>
  
    <div id="menu-btn" class="fas fa-bars"></div>
  
  </header>
<body>
    <div class="mainform">
        <div class="formheader">
             <h2 class="h2header">Log In</h2>
        </div>
        <form action="sign.php">
        <div class="logininp">
            <div class="pic-inp">
               
                <img src="email.png" alt="" style="height: 20px; width: 20px;">
                <input type="text"  value="" id="uemail" placeholder="Email" required>
               
            </div>
            <div class="pic-inp">
                <img src="password.png" alt="" style="height: 20px; width: 20px;">
                <input type="password"  value="" id="pass" placeholder="Password" required>
            </div>
                <button type="submit" class="btn btn-primary" aria-required="true">Log In</button>
                <p class="Register">Don't have an account?<a href="register.html">Register here</a> </p>
                <p class="Register">Forget Password<a href="#">Click here </a> </p>
            </div> 
            </form>
    </div>
</body>
</html>