<?php
include('../../admin/config/sql.php');
session_start();
$testIdCnd="";
if($_REQUEST['testid']!='0')
{
    $getTestTypeNameDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from testtype where id='".$_REQUEST['testid']."'"));
    $testIdCnd="and testtype='".$getTestTypeNameDet->name."'";
}

$filterSubCnd='';
$filterSubCndArray=array();
if($_SESSION['flsubject']!='')
{
    array_push($filterSubCndArray,"subject='".$_SESSION['flsubject']."'");
}
if($_SESSION['flsubsubject']!='')
{
    array_push($filterSubCndArray,"subsubject='".$_SESSION['flsubsubject']."'");
}
if($_SESSION['fltopic']!='')
{
    array_push($filterSubCndArray,"topic='".$_SESSION['fltopic']."'");
}
for($i=0;$i<sizeof($filterSubCndArray);$i++)
{
    if($i==0)
    {
        $filterSubCnd="where ".$filterSubCndArray[$i]."";
    }
    else
    {
        $filterSubCnd="".$filterSubCnd." and ".$filterSubCndArray[$i]."";
    }

}
$filterCnd='';
if($_SESSION['flsubject']!='' || $_SESSION['flsubsubject']!='' || $_SESSION['fltopic']!='')
{
    $filterCnd="".$filterCnd." and id IN (select refid from testpques where qid IN (select id from questions ".$filterSubCnd."))";
}

$exPrfCnd='';
if($_SESSION['uExPrfID']!='' && $_SESSION['uExPrfID']!='0')
{
    $exPrfCnd="and examid IN (select id from exam where expid='".$_SESSION['uExPrfID']."')";
}
$testsQuery="select * from testpaper where istrial='No' and completed='Yes' and isactive='1' ".$testIdCnd." ".$exPrfCnd." ".$filterCnd." order by adate desc limit ".$_REQUEST['offsetno']."";
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
    echo '
    <a href="../subforms/settpid.php?tpid='.$getTestPpr1->id.'" class="test-card">';
    ?>
    <div class="language-initials">
        <?php
        $langQuery="select * from languages where name IN (select name from queslang where refid IN (select qid from utpques where refid='".$getTestPpr1->id."'))";
        $lcount=0;
        $gLInitials=mysqli_query($dbconn,$langQuery);
        while($gLInitials1=mysqli_fetch_object($gLInitials))
        {
        $lcount++;
        if($lcount==1)
        {
            echo ''.$gLInitials1->linitials.'';
        }
        else
        {
            echo ','.$gLInitials1->linitials.'';
        }
        }
        ?>
    </div>
    <?php
    echo'
        <div class="test-detail-wrapper">
            <div class="img-wrapper">
                <img src="'.$imgURL.'">
            </div>
            <div class="other-det-wrapper">
                <p class="test-name-text">'.$getTestPpr1->name.'</p>
                <p class="other-det-text">
                    <span>Total Questions : '.$getExamDet->tlqno.'</span>
                    <span>Duration : '.$getExamDet->eduration.' mins</span>
                </p>';
    ?>
    <div class="test-langs">
        <div class="test-langs-header">Languages Available:</div>
        <div class="test-langs-names">
        <?php
        $langQuery="select * from languages where name IN (select name from queslang where refid IN (select qid from testpques where refid='".$getTestPpr1->id."'))";
        $lcount=0;
        $gLInitials=mysqli_query($dbconn,$langQuery);
        while($gLInitials1=mysqli_fetch_object($gLInitials))
        {
        echo '<div>'.$gLInitials1->name.'</div>';
        }
        ?>
        </div>
    </div>
    <?php
    echo'
            </div>
        </div>
        <button>Start Test</button>
    </a>
    ';
}
?>