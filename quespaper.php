<?php
include('essentials/top.php');
if($_SESSION['trialTest']=='Yes')
{
  $tableName1='utestpapertrial';
  $tableName2='utpquestrial';
}
else
{
  $tableName1='utestpaper';
  $tableName2='utpques';
}
if ($_SESSION['utpid'] == '') {
  header('location:index.php');
} else {
  $getUTPDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from ".$tableName1." where id='" . $_SESSION['utpid'] . "'"));
  if ($getUTPDet->paused == '1') {
    mysqli_fetch_object(mysqli_query($dbconn, "update ".$tableName1." set paused='0' where id='" . $_SESSION['utpid'] . "'"));
  }
  $getUTPQNo = mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "'"));
  $getUTPQid = mysqli_fetch_object(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qno='" . $getUTPDet->cqno . "'"));
  $getQsDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from questions where id='" . $getUTPQid->qid . "'"));
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
  <link type="text/css" rel="stylesheet" href="flaviusmatis/simplePagination.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body class="loading">
  <div class="loading-screen">
    <div class="lds-grid">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- header start -->
  <?php include('includes/header-profile.php'); ?>
  <section class='start-test-page'>
    <div class='container-fluid'>
      <div class='row'>
        <div class='col-lg-9 quespaper-page'>
          <h2>Questions Paper</h2>
          <?php
          $totaltimeleft = $getUTPDet->totaltime - $getUTPDet->timetaken;
          ?>
          <input type="hidden" name="totaltesttime" id="totaltesttime" value="<?php echo $getUTPDet->totaltime; ?>" />
          <input type="hidden" name="totaltimetaken" id="totaltimetaken" value="<?php echo $getUTPDet->timetaken; ?>" />
          <input type="hidden" name="totaltimeleft" id="totaltimeleft" value="<?php echo $totaltimeleft; ?>" />
          <input type="hidden" name="timetaken" id="timetaken" value="<?php echo $getUTPQid->timetaken; ?>" />
          <div class='menu-test-1'>
            <?php
            $getQues = mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' order by qno asc");
            while ($getQues1 = mysqli_fetch_object($getQues)) {

              $qrQuesDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from questions where id='" . $getQues1->qid . "'"));

              $rowNo=0;
              $cLangNo=0;
              $getQLang=mysqli_query($dbconn,"select * from languages where name IN (select name from queslang where refid='".$getQues1->qid."') order by id asc");
              while($getQLang1=mysqli_fetch_object($getQLang))
              {
                if($getUTPDet->language==$getQLang1->name)
                {
                  $cLangNo=$rowNo;
                }
                $rowNo++;
              }

              $imgURL = '';
              $insImg=urldecode($qrQuesDet->quesimg);
              if ($insImg != '') {
                  $chkWord = "http";
                  if (strpos($insImg, $chkWord) !== false) {
                      $imgPath = '';
                  } else {
                      $imgPath = 'upfile/';
                  }
                  $imgURL = '<div><img src="' . $imgPath . '' . $insImg . '" style="max-width:100%"/></div>';
              }
              $jsonQuestion = json_decode($qrQuesDet->quesdata,true);
              $questionData=urldecode($jsonQuestion[$cLangNo][$getUTPDet->language]);

              echo '
              <div class="each-q-header">
              <h4><b style="color:#202A6B; font-size: 20px;">
                Q'.$getQues1->qno.'. </b>' . $questionData . '
              </h4>
              ' . $imgURL . '
              </div>
              <div>';

              $ansStatus = '0';
              $ansCount=0;
              $jsonOption = json_decode($qrQuesDet->optiondata,true);
              $jsonOptionImg = json_decode($qrQuesDet->optionimg,true);
              for($i=1;$i<=$qrQuesDet->noofoptions;$i++)
              {
                $imgURL = '';
                $optionImg='';
                $j=$i-1;
                $optionImg=urldecode($jsonOptionImg[$j][$i]);
                if ($optionImg != '') {
                    $chkWord = "http";
                    if (strpos($optionImg, $chkWord) !== false) {
                        $imgPath = '';
                    } else {
                        $imgPath = '../upfile/';
                    }
                    $imgURL = '<div><img src="' . $imgPath . '' . $optionImg . '" style="max-width:500px"/></div>';
                }
                if ($getQues1->uans == $i) {
                  $checked = 'active';
                } else {
                  $checked = '';
                }
                echo '
                <div class="qpaper-op">
                    <div style="margin-right:8px">('.$i.')</div>
                    <span></span>
                    <div>
                      <div><label for="vehicle1">' . urldecode($jsonOption[$i][$cLangNo][$getUTPDet->language]) . ' ' . $chkMark . ' ' . $wrgMark . '</label></div>
                    </div>
                    ' . $imgURL . '
                </div>
                ';
              }
              echo '
              </div>
              ';
            }
            ?>
          </div>
        </div>
        <div class='col-lg-3 quest-sec'>
          <div class='row test-sec-row-1'>
            <?php
              if($_SESSION['trialTest']!='Yes')
              {
                ?><div class='col-lg-12'><a href='pause.php' class='Top-btn' id="1" style="margin-right:10px;">Pause</a></div><?php
              }
            ?>
            <!-- <div class='col-lg-8'>
              <a href='javascript:void(0)' class='Top-btn'>Take a Srceenshot!</a>
            </div> -->
          </div>
          <?php include('p-includes/question-numbers.php'); ?>
          <div class='test-sec-row-4'>
            <div class='col-lg-6'>
              <a href='quespaper.php' class='quespaper'>Question paper</a>
            </div>
            <div class='col-lg-6'>
            <a href='question-instructions.php' class='Instruction1'>Instruction</a>
            </div>
          </div>
          <div class='test-sec-row-5'>
            <a href='anwersReview.php' class='review-pop'>Review Answers</a>
          </div>
          <div class='test-sec-row-6'>
            <a href='score.php' class='submit-pop' id="2" onClick="reply_click(this.id)">Submit Test</a>
          </div>
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
  <script type="text/javascript" src="flaviusmatis/jquery.js"></script>
  <script type="text/javascript" src="flaviusmatis/jquery.simplePagination.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/index-testpaper.js"></script>
  <script src="js/testpaper.js"></script>
  <script>
    $(document).ready(function() {
      var timetaken = <?php echo $getUTPQid->timetaken; ?>;
      var interval = setInterval(function() {
        var totaltimetaken = $('#totaltimetaken').val();
        saveTimer1(totaltimetaken)
      }, 1000);
    });

    function convert(value) {
      return "<span>" + Math.floor(value / 60) + "</span> : <span>" + (value % 60 ? value % 60 : '00' + "</span>")
    }
  </script>
</body>
</html>
<?php include('admin/config/dbclose.php') ?>