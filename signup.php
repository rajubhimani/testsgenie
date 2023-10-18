<?php include('essentials/top.php'); ?>
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
<!-- <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
  <meta http-equiv="pragma" content="no-cache" /> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TestsGenie</title>
  <link rel="shortcut icon" href="img/android-icon-72x72.png" />
  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
  <!--  Google fonts -->
  <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="css/styles.css">
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
  <section class='signup-page'>
    <div class='container'>
      <div class='row text-center'><a href="index.php" style="width:100%"><img class='logo-login' src='img/logo-02.png'></a></div>
      <div class='row'>
        <div class='col-lg-3'>
        </div>
        <div class='col-lg-6 login-box shadow'>
          <h1>Registration</h1>
          <hr class="header-line" />
          <?php include('includes/form-msgs.php'); ?>
          <form action="subforms/uprofile.php?ftype=Add" method="post" name="regForm" class='login-form'>
            <div class="form-box">
              <label for="username">* Full Name</label>
              <input type="text" name="name" id="name" autocomplete="off" required>
            </div>
            <div class="form-box">
              <label for="username">* Email Address</label>
              <input type="email" name="email" id="email" autocomplete="off" required>
            </div>
            <div class="form-box">
              <label for="username">* Mobile Number</label>
              <input type="text" name="mobile" id="mobile" pattern="[0-9]{10}" oninvalid="setCustomValidity('Enter valid 10 digit number')" onchange="try{setCustomValidity('')}catch(e){}" autocomplete="off" required>
            </div>
            <div class="form-box">
              <label for="username">Promo Code</label>
              <input type="text" name="promocode" id="promocode" autocomplete="off">
              <div class="reg-info">If you have a promotional code, please fill here.</div>
            </div>
            <div class="form-box">
              <label for="fname">Exam Profile</label>
              <div class="reg-exmp-wrapper">
                <div class="reg-exmp">
                    <div class="img-holder"><img src="img/Testsgenie-02.png"/></div>
                    <div>
                        <label class="checkbox-container full-width">
                            <input type="checkbox" class="inp-checkbox" name="ex-all-profiles" id="ex-all-profiles" value="Yes">
                            <span class="checkmark"></span>
                            <span class="label-text">All Profiles</span>
                        </label>
                    </div>
                </div>
                <?php
                $slno = 0;
                $selList = mysqli_query($dbconn, "select * from examprofile where isactive='1' order by name asc");
                $selListCount = mysqli_num_rows($selList);
                while ($selList1 = mysqli_fetch_object($selList)) {
                  $slno++;
                  $imgTxt = '';
                  if ($selList1->eimg != '') {
                    $chkWord = "http";
                    if (strpos($selList1->eimg, $chkWord) !== false) {
                      $imgPath = '';
                    } else {
                      $imgPath = 'upfile/';
                    }
                    $imgTxt = '<div><img src="' . $imgPath . '' . $selList1->eimg . '" style="max-width:100px;"/></div>';
                  }
                  echo '
                  <div class="reg-exmp reg-other-profiles" id="'.$selList1->eid.'">
                      <div class="img-holder">' . $imgTxt . '</div>
                      <div>
                          <label class="checkbox-container full-width">
                              <input type="checkbox" class="inp-checkbox" name="ex-' . $selList1->eid . '" id="ex-' . $selList1->eid . '" value="Yes">
                              <span class="checkmark"></span>
                              <span class="label-text">' . $selList1->name . '</span>
                          </label>
                      </div>
                      <div class="reg-overlay"></div>
                  </div>
                  ';
                }
                ?>
              </div>
            </div>
            <div class="form-box">
              <label for="password">* Password</label>
              <input type="password" name="rpassword" id="rpassword" required pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Must have at least 8 characters,one capital character, one numeric and one special character[!,@,#,$,%,^,&,*]' : ''); if(this.checkValidity()) regForm.rcpassword.pattern = this.value;" autocomplete="off" required>
            </div>
            <div class="form-box">
              <label for="password">* Confirm Password</label>
              <input type="password" name="rcpassword" id="rcpassword" required oninput="checkConfirmPassword(this)" autocomplete="off" required>
            </div>
            <div class="chkbox-form-box">
                <label class="checkbox-container full-width">
                    <input type="checkbox" class="inp-checkbox" name="agterms" id="agterms" value="Yes" required>
                    <span class="checkmark"></span>
                    <span class="label-text" >Click here to indicate that you have read and agree to the our
                      <a href="javascript:void(0)" onclick="showTermsPopUp()">Terms & Conditions</a>
                    </span>
                </label>
            </div>
            <div style="text-align:center"> <button type="submit" class='continue' >Create Account</button></div>
            <div style="text-align:center"> <a class='fogot' href='forgot-password.php'>Forgot Password ?</a></div>
          </form>
        </div>
        <div class='col-lg-3'></div>
      </div>
      <div class='row'>
        <div class='col-lg-4'></div>
        <div class='col-lg-4'>
          <p>Already have an account?<a class='sign-in' href='login.php'>Click here to login</a></p>
        </div>
        <div class='col-lg-4'></div>
      </div>
    </div>
  </section>
  <?php include('includes/footer-inner.php'); ?>
  <script>
  function checkConfirmPassword(input) {
      if (input.value != document.getElementById('rpassword').value) {
          input.setCustomValidity('Password Must be Matching.');
      } else {
          // input is valid -- reset the error message
          input.setCustomValidity('');
      }
  }
  </script>
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
  <script>
  function showTermsPopUp(){
      $("#terms-popup").show();
  }
  function closeTermsPopUp(){
    $("#terms-popup").hide();
  };
  $('#ex-all-profiles').click(function(){
    $(".reg-exmp-wrapper .reg-other-profiles").each(function() {
        var inputID=$(this).attr('id');
        if ($('#ex-all-profiles').prop('checked')) {
          $('#'+inputID).addClass('reg-exmp-disabled');
          $('#ex-'+inputID).prop('checked', true);
        }
        else
        {
          $('#'+inputID).removeClass('reg-exmp-disabled');
          $('#ex-'+inputID).prop('checked', false);
        }
    });
  });
  </script>
</body>
</html>
<?php include('admin/config/dbclose.php') ?>