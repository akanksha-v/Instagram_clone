<html>
<head>
    <title>Instagram_Clone</title>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@562&family=Lemonada:wght@600&display=swap" rel="stylesheet">
    
</head>   
<body>
    <div id="insta">Instagram</div>
<img src="insta.webp" id="img">
<button name="login_button" id="login_button" onclick="function0()">Login</button>
<!-- login -->
<div id="login_form" class="hide">
    <form id="login" action="./app/controllers/login.php" method="POST">
    <input type="text" placeholder="Username" name="username" class="input" required><br>
    <input type="password" name="password" placeholder="Password" class="input" required><br>
    <input type="submit" name="login" value="login" class="submit">
    </form>
    </div>


<button name="signup_button" id="signup_button" onclick="function1()">Sign Up</button>

<!-- signup -->
<div id="signup_form" class="hide">
    <form id="signup" action="./app/controllers/signup.php" method="POST">
    <input type="text" name="username" placeholder="username" class="input" required><br>
    <input type="email" name="email" placeholder="email" class="input" required><br>
    <input type="password" name="password" placeholder="password"  class="input" required><br>
    
    <input type="submit" name="register" value="signup" class="submit">
    </form>
    </div>

    <img src="phone.jpg" id="img1">
    <script src="./js/login.js"></script>
</body>    
</html>