<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sign Up | Dawnstar</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


  <!-- Custom fonts for this template -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/coming-soon.css" rel="stylesheet">
  <link href="css/sign_up.css" rel="stylesheet">

</head>

<body>

  <div class=""></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="mp4/back.mp4" type="video/mp4">
  </video>
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <a href="index.html">
          <img src="img/game.png" alt="" style="margin:50px 0px;" width="180" height="180" margin:50px 0px />
        </a>
      </div>

      <!-- Login Form -->
      <form action="registerController.php" method="POST">
        User ID: <br> <input type="text" id="login" class="fadeIn second" name="username" placeholder="" required="required">
        <br> Password: <br> <input type="password" id="password" class="fadeIn second" name="password" placeholder="" required="required">
        <br> Full Name: <br> <input type="text" name="name" class="fadeIn second" placeholder="" required="required">
        <br> Email: <br> <input type="text" name="email" class="fadeIn second" placeholder="" required="required">
        <br> NID No.: <br> <input type="text" name="nid_no" class="fadeIn second" placeholder="" required="required">
        <br> Phone Number: <br> <input type="text" name="phone_number" class="fadeIn second" placeholder="" required="required">
        <br> Address: <br> <input type="text" name="address" class="fadeIn second" placeholder="" required="required">
        <input type="submit" class="fadeIn third" value="Sign Up">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="login.html">Sign In</a>
      </div>

    </div>
  </div>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/coming-soon.min.js"></script>

</body>

</html>