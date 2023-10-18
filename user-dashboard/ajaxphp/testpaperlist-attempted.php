<?php
include('../../admin/config/sql.php');
session_start();
$testIdCnd="";
if($_REQUEST['testid']!='0')
{
    $getTestTypeNameDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from testtype where id='".$_REQUEST['testid']."'"));
    $testIdCnd="and testtype='".$getTestTypeNameDet->name."'";
}
$exPrfCnd='';
if($_SESSION['uExPrfID']!='' && $_SESSION['uExPrfID']!='0')
{
    $exPrfCnd="and examid IN (select id from exam where expid='".$_SESSION['uExPrfID']."')";
}
$testsQuery="select * from testpaper where completed='Yes' and id IN (select tpid from utestpaper where uid='".$_SESSION['uid']."' and (paused='1' OR submitted='1')) ".$testIdCnd." ".$exPrfCnd." order by adate desc";
//echo $testsQuery;
$getTestPpr=mysqli_query($dbconn,$testsQuery);
if(mysqli_num_rows($getTestPpr)<=0)
{
    echo '<p>There are not tests available</p>';
}
while($getTestPpr1=mysqli_fetch_object($getTestPpr))
{
    $getExamDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from exam where id='".$getTestPpr1->examid."'"));
    $imgURL='../img/no-image.png';
    if($getExamDet->expid!='')
    {
        $getExPrfDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from examprofile where eid='".$getExamDet->expid."'"));
        if($getExPrfDet->eimg!='')
        {
            $imgURL='../upfile/'.$getExPrfDet->eimg.'';
        }
    }
    $overlayText='<div class="overlay-text-outer"><div class="overlay-text"><div class="overlay-text-wrapper">';
    $ut=0;
    $resumeTestCount=0;
    $getUTP=mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."' and tpid='".$getTestPpr1->id."' order by id desc");
    while($getUTP1=mysqli_fetch_object($getUTP))
    {
        $ut++;
        if($getUTP1->paused=='1')
        {
            if($resumeTestCount==0)
            {
                $overlayText=''.$overlayText.'<div><span>'.$ut.'.</span> <span><span class="date-text">'.date('d-m-y g:i A',strtotime($getUTP1->adate)).'</span><br/><a href="../subforms/resume-test.php?testid='.$getUTP1->id.'&seltpid='.$getUTP1->tpid.'">Resume Test</a></span></div>';
                $resumeTestCount=1;
            }
        }
        else
        {
            if($getUTP1->submitted=='1')
            {
                $overlayText=''.$overlayText.'<div><span>'.$ut.'.</span> <span><span class="date-text">'.date('d-m-y g:i A',strtotime($getUTP1->adate)).'</span><br/><a href="score-detailed.php?utpid='.$getUTP1->id.'">View Results</a></span></div>';
            }
            else
            {
                if($resumeTestCount==0)
                {
                    $overlayText=''.$overlayText.'<div><span>'.$ut.'.</span> <span><span class="date-text">'.date('d-m-y g:i A',strtotime($getUTP1->adate)).'</span><br/><a href="../subforms/resume-test.php?testid='.$getUTP1->id.'&seltpid='.$getUTP1->tpid.'">Resume Test</a></span></div>';
                    $resumeTestCount=1;
                }
            }
        }

    }
    $overlayText=''.$overlayText.'</div></div></div>';
    echo '
    <div class="test-card with-overlay">
        <img src="'.$imgURL.'">
        <p>'.$getTestPpr1->name.'</p>
        <p>Total Questions : '.$getExamDet->tlqno.'<br>Duration : '.$getExamDet->eduration.' mins</p>
        '.$overlayText.'
    </div>
    ';
}
?>