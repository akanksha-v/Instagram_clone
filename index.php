<html>
<head>
    <title>Instagram_Clone</title>
    <link rel="stylesheet" href="./css/index.css">
    
</head>   
<body>

<button name="login_button" id="login_button" onclick="function0()">Login</button>
<!-- login -->
<div id="login_form" class="hide">
    <form id="login" action="./app/controllers/login.php" method="POST">
    <input type="text" placeholder="Username" name="username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <input type="submit" name="login" value="login">
    </form>
    </div>


<button name="signup_button" id="signup_button" onclick="function1()">Sign Up</button>

<!-- signup -->
<div id="signup_form" class="hide">
    <form id="signup" action="./app/controllers/signup.php" method="POST">
    <input type="text" name="username" placeholder="username" required><br>
    <input type="email" name="email" placeholder="email" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <input type="submit" name="register" value="signup">
    </form>
    </div>


    <script src="./js/login.js"></script>
</body>    
</html>