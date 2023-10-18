<?php
include('../admin/config/sql.php');
session_start();
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
$testPaperDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from testpaper where id='" . $_SESSION['seltpid'] . "'"));
$testPExamDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from exam where id='" . $testPaperDet->examid . "'"));
$testTypeDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from testtype where name='" . $testPaperDet->testtype . "'"));

function insertQuestion($qid,$qno){
    include('../admin/config/sql.php');
    if($_SESSION['trialTest']=='Yes')
    {
      $tableName2='utpquestrial';
    }
    else
    {
      $tableName2='utpques';
    }
    $insQsDetail=mysqli_fetch_object(mysqli_query($dbconn,"select * from questions where id='".$qid."'"));
    $insQ1="insert into ".$tableName2."(utpid,qid,qno,refid,cans)
    values('".$_SESSION['seltpid']."','".$qid."','".$qno."','".$_SESSION['utpid']."','".$insQsDetail->coption."')";
    //echo $insQ1.'<br/>';
    mysqli_query($dbconn,$insQ1);
    $lastInsID=mysqli_insert_id($dbconn);
    if($getTPQ1->gordno!='')
    {
        mysqli_query($dbconn,"update ".$tableName2." set
        qgid='".$getTPQ1->qgid."',gordno='".$getTPQ1->gordno."'
        where id='" . $lastInsID . "'");
    }
}

$uid=0;
if($_SESSION['uid']!='')
{
  $uid=$_SESSION['uid'];
}
$insQ="insert into ".$tableName1."(uid,language,tpid)
values('".$uid."','".$_REQUEST['Language']."','".$_SESSION['seltpid']."')";
//echo $insQ;
$insQr=mysqli_query($dbconn,$insQ);
if($insQr)
{
    $_SESSION['utpid']=mysqli_insert_id($dbconn);

    $getTestPaperDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from testpaper where id='".$_SESSION['seltpid']."'"));
    $getExamDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from exam where id='".$getTestPaperDet->examid."'"));
    $secDuration=60*$getExamDet->eduration;
    mysqli_query($dbconn,"update ".$tableName1." set totaltime='".$secDuration."' where id='".$_SESSION['utpid']."'");
    if($testPExamDet->ispyear=='Yes')
    {
      $subList=array();
      $getQSub=mysqli_query($dbconn,"select DISTINCT subject from questions where id IN(select qid from testpques where refid='" . $testPaperDet->id . "')");
      while($getQSub1=mysqli_fetch_object($getQSub))
      {
        array_push($subList,$getQSub1->subject);
      }
      $qno=0;
      for($i=0;$i<sizeof($subList);$i++)
      {
        $slq=0;
        $quesQuery="select * from testpques where refid='" . $testPaperDet->id . "' and qid IN(select id from questions where subject='".$subList[$i]."') order by testpques.ordno asc,testpques.gordno asc,testpques.qid asc";
        $getQues=mysqli_query($dbconn,$quesQuery);
        while($getQues1=mysqli_fetch_object($getQues))
        {
          $qno++;
          insertQuestion($getQues1->qid,$qno);
        }
      }
    }
    else
    {
      if($testTypeDet->pview=='Subject')
      {
        $qno=0;
        $getExamSub=mysqli_query($dbconn,"select DISTINCT subject from examsubject where examid='".$testPaperDet->examid."'");
        while($getExamSub1=mysqli_fetch_object($getExamSub))
        {
            $slq=0;
            $quesQuery="select * from testpques where refid='" . $testPaperDet->id . "' and qid IN(select id from questions where subject='".$getExamSub1->subject."') order by testpques.ordno asc,testpques.gordno asc,testpques.qid asc";
            $getQues=mysqli_query($dbconn,$quesQuery);
            while($getQues1=mysqli_fetch_object($getQues))
            {
              $qno++;
              insertQuestion($getQues1->qid,$qno);
            }
        }
      }
      else if($testTypeDet->pview=='Sub Subject')
      {
        $qno=0;
        $getExamSub=mysqli_query($dbconn,"select * from examsubject where examid='".$testPaperDet->examid."'");
        while($getExamSub1=mysqli_fetch_object($getExamSub))
        {
          $sqlQuery="select * from examsubsubject where examid='".$testPaperDet->examid."' and exsubid='".$getExamSub1->tid."'";
          $getExamSubSb=mysqli_query($dbconn,$sqlQuery);
          while($getExamSubSb1=mysqli_fetch_object($getExamSubSb))
          {
              $slq=0;
              $quesQuery="select * from testpques where refid='" . $testPaperDet->id . "' and qid IN(select id from questions where subject='".$getExamSub1->subject."' and subsubject='".$getExamSubSb1->subsubject."') order by testpques.ordno asc,testpques.gordno asc,testpques.qid asc";
              $getQues=mysqli_query($dbconn,$quesQuery);
              while($getQues1=mysqli_fetch_object($getQues))
              {
                $qno++;
                insertQuestion($getQues1->qid,$qno);
              }
          }
        }
      }
      else
      {
        $qno=0;
        $quesQuery="select * from testpques where refid='" . $testPaperDet->id . "' order by testpques.ordno asc,testpques.gordno asc ";
        $getQues=mysqli_query($dbconn,$quesQuery);
        while($getQues1=mysqli_fetch_object($getQues))
        {
          $qno++;
          insertQuestion($getQues1->qid,$qno);
        }
      }
    }
    mysqli_query($dbconn,"update ".$tableName2." set attemptno='1' where refid='" . $_SESSION['utpid'] . "' and qno='1'");
    header('location:../Start-test.php');
}
else
{
    $_SESSION['msgStatus']='0';
    $_SESSION['msgText'] = 'Please Try Again';
    header('location:../specific_instruction.php');
}
?>