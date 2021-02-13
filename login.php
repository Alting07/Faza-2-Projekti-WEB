<!DOCTYPE html>
<html>
 <head>
     <title>Login Form Idea</title>
        <link rel="stylesheet" type="text/css" href="css/loginreg.css">
 </head>
 <body>
    <div class="loginbox">
        <div class="link-container">
            <a id="first" href="#" onclick="changeForm(0)" >Login</a>
            <a id="second" href="#" onclick="changeForm(1)"  >Register</a>
        </div>
        <img src="images/avatar.png" class="avatar">
        <form id="mainForm" action="" method="post">
            <div class="login forms form-style">
                <p>Username</p>
                <input id="username" class="input" type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input id="password" class="input" type="password" name="password" placeholder="Enter Password">
                <input id="submit" type="submit" name="login-btn" value="Login" onclick="validate(0)" formaction="#">
                <a href="#">Forgot your Password?</a><br>
            </div>
            <div class="register forms hidden">
                <p>Username</p>
                <input id="usernamereg"  class="input" type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input id="passwordreg" class="input" type="password" name="password" placeholder="Enter Password">
                <p>Email</p>
                <input id="email" class="input" type="email" name="email" placeholder="Enter Email">
                <input type="submit" id="register" name="" value="Register" onclick="validate(1)" >
                <a href="#" onclick="changeForm(0)">Already have an account?</a><br>
            </div>
        </form>
    </div>
    <script src="validation.js"></script>
 </body>
</html>