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
        <form id="mainForm" action="logic/verifyLogin.php" method="post"">
            <div class="login forms form-style">
                <p>Username</p>
                <input id="username" class="input" type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input id="password" class="input" type="password" name="password" placeholder="Enter Password">
                <input id="submit" type="submit" name="login-btn" value="Login" formaction="index.php">
                <a href="#">Forgot your Password?</a><br>
            </div>
            <div class="register forms hidden">
                <p>Username</p>
                <input id="usernamereg"  class="input" type="text" name="register-username" placeholder="Enter Username">
                <p>Password</p>
                <input id="passwordreg" class="input" type="password" name="register-password" placeholder="Enter Password">
                <p>Last Name</p>
                <input id="email" class="input" type="text" name="register-lastname" placeholder="Enter Last Name">
                <input type="submit" id="register" name="register-btn" value="Register">
                <a href="#" onclick="changeForm(0)">Already have an account?</a><br>
            </div>
        </form>
    </div>
    <script src="validation.js"></script>
 </body>
</html>