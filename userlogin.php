<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/userlogin.css">
    <a class="navbar-brand" href="index.php"><img src="images/home.png" alt="calligraphy-fonts" border="0"
          style="width:100px;margin-right:1500px;margin-left:-80px;margin-bottom:750px;"></a>
    <style>
    body
    {
    background-image:url(images/users.png);
    background-repeat:no-repeat;
    background-size:cover;
    }
</style>
</head>
<body>
<div class="wrapper">
    <div class="title-text">
      <div class="title login">Login</div>
      <div class="title signup">Register</div>
      </div>
    <div class="form-container">
      <div class="slide-controls">
        <input type="radio" name="slide" id="login" checked>
        <input type="radio" name="slide" id="signup">
        <label for="login" class="slide login">Login</label>
        <label for="signup" class="slide signup">Register</label>
        <div class="slider-tab"></div>
      </div>
      <div class="form-inner">
        <form action="reg.php" class="login" method="post">
          <div class="field">
            <input type="text" placeholder="Username"  name="username" required >
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password" required >
          </div>
          <div class="pass-link"><a href="#"></a></div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Login" name="login">
          </div>
          <div class="signup-link"><a href="">Register now</a></div>
          </form>
          
        <form action="reg.php" class="signup" method="post">
        <div class="field">
            <input type="text" placeholder="Username" name="username" required>
          </div>
          <div class="field">
            <input type="text" placeholder="Email Address" name="email"  required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="field btn">
            <div class="btn-layer"></div>
            <input type="submit" value="Register"  name="register">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="js/login.js" type="text/javascript"></script>
  </body>
  </html>
  

