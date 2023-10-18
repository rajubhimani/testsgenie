<?php include('essentials/top.php'); ?>
<?php
if ($_REQUEST['utpid'] != '') {
  $_SESSION['utpidres1'] = $_REQUEST['utpid'];
}
if ($_SESSION['utpidres1'] == '') {
  header('location:score.php');
} else {
  $getUTPDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from utestpaper where id='" . $_SESSION['utpidres1'] . "'"));
  if($getUTPDet->uid != $_SESSION['uid'])
  {
    header('location:score.php');
  }
  $_SESSION['useltpid'] = $getUTPDet->tpid;
  $getUTPQNo = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "'"));
  $getUTPQid = mysqli_fetch_object(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qno='" . $getUTPDet->cqno . "'"));
  $getQsDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from questions where id='" . $getUTPQid->qid . "'"));
}
if ($_SESSION['useltpid'] != '') {
  $selTestPaper = mysqli_fetch_object(mysqli_query($dbconn, "select * from testpaper where id='" . $_SESSION['useltpid'] . "'"));
  $selTestTypeDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from testtype where name='" . $selTestPaper->testtype . "'"));
  $selTpExam = mysqli_fetch_object(mysqli_query($dbconn, "select * from exam where id='" . $selTestPaper->examid . "'"));
  $testPaperNameHeader = $selTestPaper->name;
}
$resultSub = array();
$resultAttempted = array(array());
$resultCorrect = array(array());
$resultWrong = array(array());
$resultTotal = array(array());
$resultCorrect1 = array(array());
$resultWrong1 = array(array());
$resultTotal1 = array(array());
$totalQsCountSub = 0;
$getExSub = mysqli_query($dbconn, "select * from examsubject where examid='" . $selTestPaper->examid . "'");
if (mysqli_num_rows($getExSub) > 0) {
  $k = 0;
  while ($getExSub1 = mysqli_fetch_object($getExSub)) {
    $totalQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')"));
    $CorrectQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpques.uans=utpques.cans"));
    $WrongQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpques.uans!=utpques.cans"));
    $AttemptedQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpques.uans!=''"));
    //echo '1. '.$getExSub1->subject.' Correct:'.$CorrectQ.'  Wrong:'.$WrongQ.'  Total:'.$totalQ.'<br/>';
    array_push($resultSub, $getExSub1->subject);
    $resultCorrect[$k][0] = $CorrectQ * $selTpExam->pmark;
    $resultWrong[$k][0] = $WrongQ * $selTpExam->nmark;
    $resultTotal[$k][0] = $totalQ * $selTpExam->pmark;
    $resultCorrect1[$k][0] = $CorrectQ;
    $resultWrong1[$k][0] = $WrongQ;
    $resultTotal1[$k][0] = $totalQ;
    $resultAttempted[$k][0] = $AttemptedQ;
    if ($totalQ > $totalQsCountSub) {
      $totalQsCountSub = $totalQ;
    }
    $k++;
  }
} else {
  $subList = array();
  $getQSub = mysqli_query($dbconn, "select DISTINCT subject from questions where id IN(select qid from testpques where refid='" . $_SESSION['useltpid'] . "')");
  while ($getQSub1 = mysqli_fetch_object($getQSub)) {
    array_push($subList, $getQSub1->subject);
  }
  if (sizeof($subList) > 0) {
    for ($k = 0; $k < sizeof($subList); $k++) {
      $totalQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "')"));
      $CorrectQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and utpques.uans=utpques.cans"));
      $WrongQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and utpques.uans!=utpques.cans"));
      $AttemptedQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and utpques.uans!=''"));
      //echo '2. '.$getExSub1->subject.' Correct:'.$CorrectQ.'*'.$selTpExam->pmark.'  Wrong:'.$WrongQ.'*'.$selTpExam->nmark.'  Total:'.$totalQ.'*'.$selTpExam->pmark.'<br/>';
      array_push($resultSub, $subList[$k]);
      $resultCorrect[$k][0] = $CorrectQ * $selTpExam->pmark;
      $resultWrong[$k][0] = $WrongQ * $selTpExam->nmark;
      $resultTotal[$k][0] = $totalQ * $selTpExam->pmark;
      $resultCorrect1[$k][0] = $CorrectQ;
      $resultWrong1[$k][0] = $WrongQ;
      $resultTotal1[$k][0] = $totalQ;
      $resultAttempted[$k][0] = $AttemptedQ;
      if ($totalQ > $totalQsCountSub) {
        $totalQsCountSub = $totalQ;
      }
    }
  } else {
    $totalQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "'"));
    $CorrectQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and utpques.uans=utpques.cans"));
    $WrongQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and utpques.uans!=utpques.cans"));
    $AttemptedQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and utpques.uans!=''"));
    array_push($resultSub, 'Total');
    $resultCorrect[0][0] = $CorrectQ * $selTpExam->pmark;
    $resultWrong[0][0] = $WrongQ * $selTpExam->nmark;
    $resultTotal[0][0] = $totalQ * $selTpExam->pmark;
    $resultCorrect1[$k][0] = $CorrectQ;
    $resultWrong1[$k][0] = $WrongQ;
    $resultTotal1[$k][0] = $totalQ;
    $resultAttempted[$k][0] = $AttemptedQ;
    //echo '3. Correct:'.$CorrectQ.'  Wrong:'.$WrongQ.'  Total:'.$totalQ.'<br/>';
    if ($totalQ > $totalQsCountSub) {
      $totalQsCountSub = $totalQ;
    }
  }
}
//$totalQsCount=mysqli_num_rows(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpidres1'] . "'"));
$totalQsCount = $totalQsCountSub;
$totalQsCount = $totalQsCount;
if ($totalQsCount >= 10) {
  $tlQsDiv = ceil($totalQsCount / 10);
} else {
  $tlQsDiv = $totalQsCount;
}
$tlQsDivPerc = (($tlQsDiv / $totalQsCount) * 100);
$tlQsDivCount = ceil($totalQsCount / $tlQsDiv);
// echo 'Total:'.$totalQsCount.'  Div:'.$tlQsDiv.'  Perc:'.$tlQsDivPerc.'  Count:'.$tlQsDivCount.'<br/>';
// print_r($resultSub);
// print_r($resultCorrect);
// print_r($resultWrong);
// print_r($resultTotal);
?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if ($_SESSION['menuvalno'] == '1') {
                echo 'menutoggle';
              } ?>">
  <?php include('includes/sidenav.php') ?>
  <div class='service-1 ' id='service4'>
  <?php include('includes/form-msgs.php') ?>
    <div class='test-2 active' id='test1'>
      <h4><?php echo $testPaperNameHeader; ?></h4>
      <div class="score-detail-links">
        <a href="../subforms/mailscore.php?rdpage=score-detailed.php&rdid=<?php echo $_REQUEST['utpid'] ?>" class="button-links">Send an Email</a>
        <a href="../subforms/settpid.php?tpid=<?php echo $getUTPDet->tpid ?>" onclick="return confirm('Are you sure you want to retake the test?');" class="button-links">Retake Test</a>
      </div>
      <?php include('includes/score-graph.php') ?>
      <?php include('includes/score-table.php') ?>
      <?php include('includes/score-details.php') ?>
    </div>
  </div>
  <?php include('includes/footer.php') ?>