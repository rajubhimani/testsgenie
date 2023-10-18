<?php
include('essentials/top.php');
//$_SESSION['slang']='';
?>
<!DOCTYPE html>
<html>

<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-207281095-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
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
  <script src="js/language-switch.js"></script>
</head>

<body>
  <?php include('p-includes/language-switch.php') ?>
  <!-- header start -->
  <?php include('includes/header-profile.php'); ?>
  <section class='test-instuction'>
    <div class='container'>
      <div class='row inst-box'>
        <!-- <div class='inst-box '> -->
        <p style="margin-top:20px"><b>Choose your default language:</b>
          <select name="Language" id="Language" required>
            <?php
            $getLang = mysqli_query($dbconn, "select * from languages where isactive='1' and name in (select name from queslang where refid IN (select id from questions where id IN (select qid from testpques where refid='" . $_SESSION['seltpid'] . "'))) order by id asc");
            while ($getLang1 = mysqli_fetch_object($getLang)) {
              $selected='';
              if($getLang1->name==$_SESSION['slang'])
              {
                $selected='selected';
              }
              echo '<option class="option-drop" value="' . $getLang1->name . '" '.$selected.'>' . $getLang1->name . '</option>';
            }
            ?>
          </select>
        </p>
        <?php
        $langFolderName='test_instruction';
        $lNo=0;
        $getLangContent = mysqli_query($dbconn, "select * from languages where isactive='1' and name in (select name from queslang where refid IN (select id from questions where id IN (select qid from testpques where refid='" . $_SESSION['seltpid'] . "'))) order by id asc");
        while ($getLangContent1 = mysqli_fetch_object($getLangContent)) { $lNo++;
        ?>
          <div class="lang-content" id="lcontent-<?php echo $getLangContent1->name; ?>" style="display:none">
            <?php
              include('p-languages/'.$langFolderName.'/'.$getLangContent1->name.'.php');
            ?>
          </div>
        <?php
        }
        ?>
      </div>
      <div class='test-buttons'>
        <span></span>
        <!-- <a href='' class=' prev-page'><i class="fas fa-angle-double-left"></i>Go to Test</a> -->
        <a href='specific_instruction.php' class='next-page'>Next<i class="fas fa-angle-double-right"></i></a>
      </div>
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