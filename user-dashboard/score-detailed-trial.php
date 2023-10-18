<?php
include('../admin/config/sql.php');
session_start();
$_SESSION['crpage3']='score-detailed-trial.php';
$trailMail=mysqli_query($dbconn,"select * from utrialemail where email='".$_REQUEST['email']."' and randno='".$_REQUEST['randno']."'");
$chkTrailMail=mysqli_num_rows($trailMail);
if ($chkTrailMail>0) {
  $getTrailMail=mysqli_fetch_object($trailMail);
  $_SESSION['utpidres1'] = $getTrailMail->tpid;
}
else
{
  header('location:../index.php');
}
if ($_SESSION['utpidres1'] == '') {
  header('location:../index.php');
} else {
  $getUTPDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from utestpapertrial where id='" . $_SESSION['utpidres1'] . "'"));
  $_SESSION['useltpid'] = $getUTPDet->tpid;
  $getUTPQNo = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "'"));
  $getUTPQid = mysqli_fetch_object(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qno='" . $getUTPDet->cqno . "'"));
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
    $totalQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')"));
    $CorrectQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpquestrial.uans=utpquestrial.cans"));
    $WrongQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpquestrial.uans!=utpquestrial.cans"));
    $AttemptedQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpquestrial.uans!=''"));
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
      $totalQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "')"));
      $CorrectQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and utpquestrial.uans=utpquestrial.cans"));
      $WrongQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and utpquestrial.uans!=utpquestrial.cans"));
      $AttemptedQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "') and utpquestrial.uans!=''"));
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
    $totalQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "'"));
    $CorrectQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and utpquestrial.uans=utpquestrial.cans"));
    $WrongQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and utpquestrial.uans!=utpquestrial.cans"));
    $AttemptedQ = mysqli_num_rows(mysqli_query($dbconn, "select * from utpquestrial where refid='" . $_SESSION['utpidres1'] . "' and utpquestrial.uans!=''"));
    array_push($resultSub, 'Total');
    $resultCorrect[0][0] = $CorrectQ * $selTpExam->pmark;
    $resultWrong[0][0] = $WrongQ * $selTpExam->nmark;
    $resultTotal[0][0] = $totalQ * $selTpExam->pmark;
    $resultCorrect1[$k][0] = $CorrectQ;
    $resultWrong1[$k][0] = $WrongQ;
    $resultTotal1[$k][0] = $totalQ;
    $resultAttempted[$k][0] = $AttemptedQ;
    if ($totalQ > $totalQsCountSub) {
      $totalQsCountSub = $totalQ;
    }
  }
}
$totalQsCount = $totalQsCountSub;
$totalQsCount = $totalQsCount;
if ($totalQsCount >= 10) {
  $tlQsDiv = ceil($totalQsCount / 10);
} else {
  $tlQsDiv = $totalQsCount;
}
$tlQsDivPerc = (($tlQsDiv / $totalQsCount) * 100);
$tlQsDivCount = ceil($totalQsCount / $tlQsDiv);
?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body>
  <div class='service-1 ' id='service4'>
  <?php include('includes/form-msgs.php') ?>
    <div class='test-2 active' id='test1'>
      <h4><?php echo $testPaperNameHeader; ?></h4>
      <?php include('includes/score-graph.php') ?>
      <?php include('includes/score-table.php') ?>
      <?php include('includes/score-details-trial.php') ?>
    </div>
  </div>