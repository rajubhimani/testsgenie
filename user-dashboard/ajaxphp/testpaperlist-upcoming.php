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
$testsQuery="select * from testpaper where completed='No' and sdate>'".date('Y-m-d')."' ".$testIdCnd." ".$exPrfCnd." order by adate desc";
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
    $overlayText=''.$overlayText.'</div></div></div>';
    echo '
    <div class="test-card with-overlay">
        <img src="'.$imgURL.'">
        <p>'.$getTestPpr1->name.'</p>
        <p>Total Questions : '.$getExamDet->tlqno.'<br>Duration : '.$getExamDet->eduration.' mins</p>
    </div>
    ';
}
?>