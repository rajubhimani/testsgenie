<?php
include('essentials/top.php');
$getUTPDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from utestpaper where id='" . $_SESSION['utpid'] . "'"));
?>
<!DOCTYPE html>
<html>

<head>
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
  <link type="text/css" rel="stylesheet" href="flaviusmatis/simplePagination.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <?php include('includes/header-profile.php'); ?>
  <section class='quespaper-page'>
    <div class='container'>
      <h2>Questions Paper</h2>
      <div class='menu-test-1'>
        <?php
        $getQues=mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpid'] . "' order by qno asc");
        while($getQues1=mysqli_fetch_object($getQues))
        {
          $getQuesDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from quesdet where refid='".$getQues1->qid."' and dtype='Questions' and lang='".$getUTPDet->language."'"));
          $imgURL = '';
          $gQuesImg = mysqli_fetch_object(mysqli_query($dbconn, "select * from quesdetimg where refid='" . $getUTPQid->qid . "' and dtype='Questions' order by ordno asc"));
          if ($gQuesImg->dimg != '') {
              $chkWord = "http";
              if (strpos($gQuesImg->dimg, $chkWord) !== false) {
                  $imgPath = '';
              } else {
                  $imgPath = 'upfile/';
              }
              $imgURL = '<div><img src="' . $imgPath . '' . $gQuesImg->dimg . '" style="max-width:100%"/></div>';
          }
          echo '
          <div>
          <h4><b style="color:#202A6B; font-size: 20px;">
            Q'.$getQues1->qno.'. </b>'.strip_tags($getQuesDet->details).'
          </h4>
          ' . $imgURL . '
          </div>
          <div>';
          $gOptions = mysqli_query($dbconn, "select * from quesdet where refid='" . $getQues1->qid . "' and dtype='Options' and lang='".$getUTPDet->language."' order by ordno asc");
          while ($gOptions1 = mysqli_fetch_object($gOptions)) {
              $imgURL = '';
              $gOptionsImg = mysqli_fetch_object(mysqli_query($dbconn, "select * from quesdetimg where refid='" . $getUTPQid->qid . "' and dtype='Options' order by ordno asc"));
              if ($gOptionsImg->dimg != '') {
                  $chkWord = "http";
                  if (strpos($gOptionsImg->dimg, $chkWord) !== false) {
                      $imgPath = '';
                  } else {
                      $imgPath = 'upfile/';
                  }
                  $imgURL = '<div><img src="' . $imgPath . '' . $gOptionsImg->dimg . '" style="max-width:100%"/></div>';
              }
              $checked='';
              if($getUTPQid->uans==$gOptions1->ordno)
              {
                  $checked='checked';
              }
              echo '
              <div class="qpaper-op">
                  <span></span>
                  <div>
                    <div><label for="vehicle1">' . strip_tags($gOptions1->details) . '</label></div>
                  </div>
                  ' . $imgURL . '
              </div>
              ';
          }
          echo'
          </div>
          ';
        }
        ?>
      </div>
      <!-- <div class='col-lg-2'><a href='Start-test.php' class="save-next"><i class="fas fa-angle-double-left" aria-hidden="true"></i>Go Back to test</a> -->
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