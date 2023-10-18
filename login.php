<?php
include('essentials/top.php');
if($_REQUEST['redirectPage']!='')
{
  $_SESSION['redirectPage']=$_REQUEST['redirectPage'];
}
?>
<!DOCTYPE html>
<html>

<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-207281095-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-207281095-2');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TestsGenie</title>
  <link rel="shortcut icon" href="img/android-icon-72x72.png" />
  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
  <!--  Google fonts -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <!-- css stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <section class='login-page'>
    <div class='container'>
      <div class='row text-center'><a href="index.php" style="width:100%"><img class='logo-login' src='img/logo-02.png'></a></div>
      <div class='row'>
        <div class='col-lg-3'>
        </div>
        <div class='col-lg-6 login-box shadow'>
          <h1>Login</h1>
          <hr class="header-line" />
          <?php include('includes/form-msgs.php'); ?>
          <form class='login-form' action="subforms/uprofile.php?ftype=Login" method="post">
            <div class="form-box">
              <label>Email ID / Mobile</label>
              <input type="text" name="lemail" id="lemail" required>
            </div>
            <div class="form-box">
              <label>Password</label>
              <input type="password" name="lpassword" id="lpassword" required>
            </div>
            <div style="text-align:center"> <button type="submit" class='continue'>Login</button></div>
            <div style="text-align:center"> <a class='fogot' href='forgot-password.php'>Forgot Password ?</a></div>
          </form>
        </div>
        <div class='col-lg-43'></div>
      </div>
      <div class='row'>
        <div class='col-lg-4'></div>
        <div class='col-lg-4 para'>
          <p>New to TestsGenie?</p>
          <a class='register' href='signup.php'>Register Now</a>
        </div>
        <div class='col-lg-4'></div>
      </div>
    </div>
  </section>
  <?php include('includes/footer-inner.php'); ?>
  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
  <!--  Bootstrap Script -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- animation -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/index.js"></script>
</body>
</html>
<?php include('admin/config/dbclose.php') ?>