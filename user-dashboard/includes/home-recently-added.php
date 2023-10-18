<?php
$testIdCnd="";
if($_SESSION['uExPrfID']!='' && $_SESSION['uExPrfID']!='0')
{
    $exPrfCnd="and examid IN (select id from exam where expid='".$_SESSION['uExPrfID']."')";
}
$testsQuery="select * from testpaper where completed='Yes' ".$exPrfCnd." order by adate desc limit 4 ".$offsetValue."";
//echo $testsQuery;
$getTestPpr=mysqli_query($dbconn,$testsQuery);
if(mysqli_num_rows($getTestPpr)<=0)
{
    //echo '<p>There are not tests available</p>';
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
    // echo '
    // <a href="../subforms/settpid.php?tpid='.$getTestPpr1->id.'" class="test-card">
    //     <img src="'.$imgURL.'">
    //     <p>'.$getTestPpr1->name.'<br> '.$getExamDet->name.'</p>
    //     <p>Total Questions : '.$getExamDet->tlqno.'<br>Duration : '.$getExamDet->eduration.' mins</p>
    // </a>
    // ';
    echo '
    <div class="recent-content">
        <img src="'.$imgURL.'">
        <div class="inside-recent">
            <h4>'.$getTestPpr1->name.'</h4>
            <p>Total Questions : '.$getExamDet->tlqno.', Total Marks : '.$getExamDet->tmark.'</p>
        </div>
        <div class="start-btnn">
            <a class="start-btnn" href="../subforms/settpid.php?tpid='.$getTestPpr1->id.'">Start</a>
        </div>
    </div>
    ';
}
?>
