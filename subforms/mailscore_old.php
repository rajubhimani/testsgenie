<?php
$tname = "uprofile";
$pageid = "User";
include('../admin/config/sql.php');
include('../admin/config/fileupload-class.php');
include '../includes/mail.php';
session_start();

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

$sectionTable='
<table border="1" width="100%" cellpadding="10" cellspacing="0">
    <tr>
        <th><i class="fas fa-poll-h" aria-hidden="true"></i>Section</th>
        <th>Total Questions</th>
        <th>Attempted Questions</th>
        <th>Correct Answers</th>
        <th>Incorrect Answers</th>
        <th>Marks Obtained</th>
    </tr>
';

$totalPercentage=0;
$totalAttempted=0;
$totalQuesCount=0;
$totalCorrectAns=0;
for ($i = 0; $i < sizeof($resultSub); $i++) {
    $cResult = $resultCorrect[$i][0];
    $wResult = $resultWrong[$i][0];
    $tResult = $resultTotal[$i][0];
    $markPerc = $cResult - $wResult;
    $totalPercentage=$totalPercentage+$markPerc;
    $totalAttempted=$totalAttempted+$resultAttempted[$i][0];
    $totalQuesCount=$totalQuesCount+$resultTotal1[$i][0];
    $totalCorrectAns=$totalCorrectAns+$resultCorrect1[$i][0];
    $sectionTable=' '.$sectionTable.'
    <tr>
        <td>
            '.$resultSub[$i].'
        </td>
        <td>
            '.$resultTotal1[$i][0].'
        </td>
        <td>
            '.$resultAttempted[$i][0].'
        </td>
        <td>
            '.$resultCorrect1[$i][0].'
        </td>
        <td>
            '.$resultWrong1[$i][0].'
        </td>
        <td>
            '.$markPerc.'
        </td>
    </tr>
    ';
}
$accuracy=round((($totalCorrectAns/$totalQuesCount)*100),2);

$sectionTable=' '.$sectionTable.'</table>';

$overallTable='
<table border="1" width="100%" cellpadding="10" cellspacing="0">
    <tr>
        <td><b>Score</b></td>
        <td><b>Attempted</b></td>
        <td><b>Accuracy</b></td>
    </tr>
    <tr>
        <td>'.$totalPercentage.'</td>
        <td>'.$totalAttempted.'</td>
        <td>'.$accuracy.'%</td>
    </tr>
</table>
';
$strTo=''.$mailUserDet->email.'';
$strSubject='TestGenie Test Result' ;
$mailUserDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprofile where id='".$_SESSION['uid']."'"));
$message = '
<div style="max-width:650px; margin:0 auto; background:#f1f1f1; padding:20px;font-family: Arial, Helvetica, sans-serif; font-size:16px;">
<div>
    <table style="width:100%;table-layout:fixed;">
        <tr>
            <td>
                <table border="0" width="100%" cellpadding="1" cellspacing="0" style="font-size:13px;">
                    <tr><td>'.$testPaperNameHeader.'</td></tr>
                    <tr><td>'.date('d F Y',strtotime($getUTPDet->adate)).'</td></tr>
                    <tr><td>'.date('g:i A',strtotime($getUTPDet->adate)).'</td></tr>
                </table>
            </td>
            <td style="text-align:center;">
            <img src="https://testsgenie.com/admin/images/logo.png" style="max-width:120px; margin:20px 0" />
            </td>
            <td>
                <table border="0" width="100%" cellpadding="1" cellspacing="0" style="font-size:13px; text-align:right">
                    <tr><td>'.$mailUserDet->name.'</td></tr>
                    <tr><td>'.$mailUserDet->email.'</td></tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<div style="margin-top:30px">
    <h3>Overall Summary</h3>
    '.$overallTable.'
</div>
<div style="margin-top:30px">
    <h3>Sectional Summary</h3>
    '.$sectionTable.'
</div>
<div style="margin-top:30px;">
    <div style="background:#202a6b;border-radius:5px;padding:15px;text-align:center;color:#fff;font-size:12px;">
        <div>To know more about TestGenie <a href="#" style="color:#fff">Click Here</a></div>
        <div style="margin:10px 0 15px 0">For any problem, whatsoever, you can reach out to us at <a href="mailto:info@testsgenie.com" style="color:#fff">info@testsgenie.com</a></div>
        <div class="social-icon-fa">
            <a href="https://www.facebook.com/tests.genie.3" style="display:inline-block;vertical-align:middle;margin-right:5px;"><img src="https://testsgenie.com/img/sicons/fc1.png" style="max-height:25px"/></a>
            <a href="https://www.Instagram.com/testgenie" style="display:inline-block;vertical-align:middle;margin-right:5px;"><img src="https://testsgenie.com/img/sicons/fc2.png" style="max-height:25px"/></a>
            <a href="https://twitter.com/Testsgenie" style="display:inline-block;vertical-align:middle;margin-right:5px;"><img src="https://testsgenie.com/img/sicons/fc3.png" style="max-height:25px"/></a>
            <a href="https://www.tumblr.com/dashboard" style="display:inline-block;vertical-align:middle;"><img src="https://testsgenie.com/img/sicons/fc4.png" style="max-height:25px"/></a>
        </div>
    </div>
</div>
';
$message = ''.$message.' '.$mailb.'';
$headers  = "From: info \n";
$headers .= "MIME-version: 1.0\n";
$headers .= "Content-type: text/html; charset= iso-8859-1\n";
$headers1=$headers;
$result2 = mail($strTo,$strSubject,$message,$headers1);
if($result2)
{
    echo 'Yes';
}
else
{
    echo 'No';
}
echo $message;
$_SESSION['msgStatus']='1';
$_SESSION['msgText']='Mail has been successfully send';
//header('location:../'.$_SESSION['crpage'].'');