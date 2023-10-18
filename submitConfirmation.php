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
if($_SESSION['utpid']!='')
{
  $_SESSION['utpidres']=$_SESSION['utpid'];
}
mysqli_fetch_object(mysqli_query($dbconn, "update ".$tableName1." set submitted='1' where id='" . $_SESSION['utpid'] . "'"));
$_SESSION['utpid'] = '';
if ($_SESSION['utpidres'] == '') {
  header('location:index.php');
} else {
  $getUTPDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from ".$tableName1." where id='" . $_SESSION['utpidres'] . "'"));
  $getUTPQNo = mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "'"));
  $getUTPQid = mysqli_fetch_object(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and qno='" . $getUTPDet->cqno . "'"));
  $getQsDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from questions where id='" . $getUTPQid->qid . "'"));
  $selTestPaper = mysqli_fetch_object(mysqli_query($dbconn, "select * from testpaper where id='" . $getUTPDet->tpid . "'"));
  $selTpExam = mysqli_fetch_object(mysqli_query($dbconn, "select * from exam where id='" . $selTestPaper->examid . "'"));
}
$resultSub=array();
$resultCorrect=array(array());
$resultWrong=array(array());
$resultTotal=array(array());
$totalQsCountSub=0;
$getExSub = mysqli_query($dbconn, "select * from examsubject where examid='" . $selTestPaper->examid . "'");
if(mysqli_num_rows($getExSub)>0)
{
  $k=0;
  while ($getExSub1 = mysqli_fetch_object($getExSub))
  {
    $totalQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')"));
    $CorrectQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and ".$tableName2.".uans=".$tableName2.".cans"));
    $WrongQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and ".$tableName2.".uans!=".$tableName2.".cans"));
    //echo '1. '.$getExSub1->subject.' Correct:'.$CorrectQ.'  Wrong:'.$WrongQ.'  Total:'.$totalQ.'<br/>';
    array_push($resultSub,$getExSub1->subject);
    $resultCorrect[$k][0]=$CorrectQ * $selTpExam->pmark;
    $resultWrong[$k][0]=$WrongQ * $selTpExam->nmark;
    $resultTotal[$k][0]=$totalQ * $selTpExam->pmark;
    if($totalQ>$totalQsCountSub){
      $totalQsCountSub=$totalQ;
    }
    $k++;
  }
}
else
{
  $subList=array();
  $getQSub=mysqli_query($dbconn,"select DISTINCT subject from questions where id IN(select qid from testpques where refid='" . $_SESSION['seltpid'] . "')");
  while($getQSub1=mysqli_fetch_object($getQSub))
  {
      array_push($subList,$getQSub1->subject);
  }
  if(sizeof($subList)>0)
  {
    for($k=0;$k<sizeof($subList);$k++) {
      $totalQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "')"));
      $CorrectQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and ".$tableName2.".uans=".$tableName2.".cans"));
      $WrongQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and ".$tableName2.".uans!=".$tableName2.".cans"));
      //echo '2. '.$getExSub1->subject.' Correct:'.$CorrectQ.'  Wrong:'.$WrongQ.'  Total:'.$totalQ.'<br/>';
      array_push($resultSub,$subList[$k]);
      $resultCorrect[$k][0] = $CorrectQ * $selTpExam->pmark;
      $resultWrong[$k][0] = $WrongQ * $selTpExam->nmark;
      $resultTotal[$k][0] = $totalQ * $selTpExam->pmark;
      if($totalQ>$totalQsCountSub){
        $totalQsCountSub=$totalQ;
      }
    }
  }
  else
  {
    $totalQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "'"));
    $CorrectQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and ".$tableName2.".uans=".$tableName2.".cans"));
    $WrongQ=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "' and ".$tableName2.".uans!=".$tableName2.".cans"));
    array_push($resultSub,'Total');
    $resultCorrect[0][0] = $CorrectQ * $selTpExam->pmark;
    $resultWrong[0][0] = $WrongQ * $selTpExam->nmark;
    $resultTotal[0][0] = $totalQ * $selTpExam->pmark;
    //echo '3. Correct:'.$CorrectQ.'  Wrong:'.$WrongQ.'  Total:'.$totalQ.'<br/>';
    if($totalQ>$totalQsCountSub){
      $totalQsCountSub=$totalQ;
    }
  }
}
//$totalQsCount=mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpidres'] . "'"));
$totalQsCount=$totalQsCountSub;
if($totalQsCount>=10)
{
  $tlQsDiv=ceil($totalQsCount/10);
}
else
{
  $tlQsDiv=$totalQsCount;
}
$tlQsDivPerc=(($tlQsDiv/$totalQsCount)*100);
$tlQsDivCount=ceil($totalQsCount/$tlQsDiv);
// echo 'Total:'.$totalQsCount.'  Div:'.$tlQsDiv.'  Perc:'.$tlQsDivPerc.'  Count:'.$tlQsDivCount.'<br/>';
// print_r($resultSub);
// print_r($resultCorrect);
// print_r($resultWrong);
// print_r($resultTotal);
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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
  <!-- css stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/graph.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link type="text/css" rel="stylesheet" href="flaviusmatis/simplePagination.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    <?php
    $leftVal = 0;
    for ($i = 0; $i <= $tlQsDivCount; $i++) {
      $lno = $i + 1;
      $leftVal = $leftVal + $tlQsDivPerc;
      echo '
        .graph-lines-wrapper .g-lines.gline' . $lno . '{
            left: ' . $leftVal . '%;
        }
        .graph-lines-wrapper .gtext' . $lno . '{
            left: ' . $leftVal . '%;
        }
      ';
    }
    ?>
  </style>
</head>

<body>
  <!-- header start -->
  <?php include('includes/header-profile.php'); ?>
  <section class='confirm-page'>
    <div class='container'>
      <div>
        <div class='submit-confirm-wrapper'>
          <img src='img/check.png' data-aos="zoom-in" data-aos-duration="20000" class='check-cls'>
          <h1>Thank You!</h1>
          <h2>Your test has been submitted.</h2>
          <div class="graph-outer">
            <div class="graph-inner-wrapper">
              <div class="graph-lines-wrapper">
                <?php
                $bval=0;
                for ($i = 0; $i <= $tlQsDivCount; $i++) {
                  $j = $i - 1;
                  echo '<div class="g-lines gline' . $i . '"></div>';
                  echo '<div class="gtext gtext' . $i . '">' . $bval . '</div>';
                  $bval=$bval+$tlQsDiv;
                }
                ?>
              </div>
              <?php
              for($i=0;$i<sizeof($resultSub);$i++)
              {
                echo '
                <div class="graph-outer-wrapper">
                  <div class="graph-outer-text">
                    '.$resultSub[$i].'
                  </div>
                ';
                for($k=0;$k<sizeof($resultTotal[$i]);$k++)
                {
                  $cResult = $resultCorrect[$i][0];
                  $wResult = $resultWrong[$i][0];
                  $tResult = $resultTotal[$i][0];
                  $totalPerc = (($tResult / $totalQsCount) * 100);
                  $markPerc = ((($cResult - $wResult) / $totalQsCount) * 100);
                  if($markPerc<0)
                  {
                    $markPerc=0;
                  }
                  //echo '<div style="position:absolute;left:0;top:-10px;">'.$getExSub1->subject.' Correct:'.$cResult.'  Wrong:'.$wResult.'  Total:'.$tResult.'   TotalQCount:'.$totalQsCount.'<br/></div>';
                  echo '
                  <div class="graph-outer-data">
                    <div>
                      <div class="g-bar bar1" style="width:'.$markPerc.'%;"></div>
                    </div>
                    <div>
                      <div class="g-bar bar2" style="width:'.$totalPerc.'%;"></div>
                    </div>
                  </div>
                  ';
                }
                echo '
                </div>
                ';
              }
              ?>
            </div>
            <div class="legends">
              <div class="each-legend">
                <span class="lcolor"></span>
                <span>Full Marks</span>
              </div>
              <div class="each-legend">
                <span class="lcolor l2"></span>
                <span>My Marks</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
      if($_SESSION['trialTest']!='Yes')
      {
      ?>
      <div class="row">
        <div class='buttons-holder'>
          <a href="subforms/mailscore.php?utpid=<?php echo $_SESSION['utpidres']; ?>" class="save-next-1">Mail the Result</i></a>
          <a href='user-dashboard/index.php' class="submit-pop">My Dashboard</a>
          <a href='user-dashboard/score-detailed.php?utpid=<?php echo $_SESSION['utpidres']; ?>' class="save-next-1">Show Detailed Result <i class="fas fa-angle-double-right" aria-hidden="true"></i></a>
        </div>
      </div>
      <?php
      }
      else
      {
        ?>
        <div class="row">
          <div class='buttons-holder'>
            <a href='index.php' class="submit-pop">Go to Home</a>
            <a href='signup.php' class="submit-pop">Registration</a>
            <a href='javascript:void(0);' id='trial-email-btn' class="submit-pop">Send detailed results on email</a>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </section>
  <?php
  if($_SESSION['trialTest']!='Yes')
  {
  ?>
  <section class='confirm-page-row-3'>
    <div class='container'>
      <h2>Recommended Tests</h2>
      <?php
      $recTopicArray=array();
      $getQSub=mysqli_query($dbconn,"select DISTINCT subject from questions where id IN(select qid from testpques where refid='" . $_SESSION['seltpid'] . "')");
      while($getQSub1=mysqli_fetch_object($getQSub))
      {
          array_push($recTopicArray,$getQSub1->subject);
      }
      //print_r($recTopicArray);
      $topicCND='';
      for($i=0;$i<sizeof($recTopicArray);$i++)
      {
        if($i==0)
        {
          $topicCND=" where ( subject='".$recTopicArray[$i]."'";
        }
        else
        {
          $topicCND="".$topicCND." OR subject='".$recTopicArray[$i]."'";
        }
      }
      $topicCND="".$topicCND.")";
      //echo $topicCND;
      ?>
      <div class='row mock-row-2 owl-carousel similar-test'>
        <?php
          $recTestPaperQuery="select * from testpaper where completed='Yes' and id!='".$_SESSION['seltpid']."'
          and id IN (select refid from testpques where qid IN (select id from questions ".$topicCND."))
          order by id asc";
          //echo $recTestPaperQuery;
          $getTestPpr=mysqli_query($dbconn, $recTestPaperQuery);
          while($getTestPpr1=mysqli_fetch_object($getTestPpr))
          {
            $getExamDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from exam where id='".$getTestPpr1->examid."'"));
            $imgURL='img/no-image.png';
            if($getExamDet->expid!='')
            {
                $getExPrfDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from examprofile where eid='".$getExamDet->expid."'"));
                if($getExPrfDet->eimg!='')
                {
                    $imgURL='upfile/'.$getExPrfDet->eimg.'';
                }
            }
            ?>
            <div class=' col-12'>
              <div class='box-1'>
                <?php echo '<img class="logo-img" src="'.$imgURL.'" style="margin-top:10px;display:inline-block;">';  ?>
                <p><?php echo $getTestPpr1->name; ?></p>
                <p>Total Questions : <?php echo $getExamDet->tlqno; ?><br>Duration Of Test : <?php echo $getExamDet->eduration; ?> mins</p>
                <div class="overlay">
                  <a href='subforms/settpid.php?tpid=<?php echo $getTestPpr1->id ?>' >
                    <h3 class='overlay-text'>START TEST</h3>
                    <img class='overlay-img' src="img/Test Genie-04.png">
                  </a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
      </div>
    </div>
  </section>
  <section class='confirm-page-row-3'>
    <div class='container'>
      <h2>Similiar Tests</h2>
      <?php
      $tPNameArray=explode(' ',$testPaperNameHeader);
      //echo $tPNameArray[0];
      ?>
      <div class='row mock-row-2 owl-carousel similar-test'>
        <?php
          $getTestPpr=mysqli_query($dbconn, "select * from testpaper where name LIKE '%".$tPNameArray[0]."%' and id!='".$_SESSION['seltpid']."' and completed='Yes' order by id asc");
          while($getTestPpr1=mysqli_fetch_object($getTestPpr))
          {
            $getExamDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from exam where id='".$getTestPpr1->examid."'"));
            $imgURL='img/no-image.png';
            if($getExamDet->expid!='')
            {
                $getExPrfDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from examprofile where eid='".$getExamDet->expid."'"));
                if($getExPrfDet->eimg!='')
                {
                    $imgURL='upfile/'.$getExPrfDet->eimg.'';
                }
            }
            ?>
            <div class=' col-12'>
              <div class='box-1'>
                <?php echo '<img class="logo-img" src="'.$imgURL.'" style="margin-top:10px;display:inline-block;">';  ?>
                <p><?php echo $getTestPpr1->name; ?></p>
                <p>Total Questions : <?php echo $getExamDet->tlqno; ?><br>Duration Of Test : <?php echo $getExamDet->eduration; ?> mins</p>
                <div class="overlay">
                  <a href='subforms/settpid.php?tpid=<?php echo $getTestPpr1->id ?>' >
                    <h3 class='overlay-text'>START TEST</h3>
                    <img class='overlay-img' src="img/Test Genie-04.png">
                  </a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
      </div>
    </div>
  </section>
  <?php
  }
  ?>
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
  <script src="js/index-new.js"></script>
</body>
</html>
<?php include('admin/config/dbclose.php') ?>