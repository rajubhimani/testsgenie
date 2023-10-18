<?php
$tname = "uprofile";
$pageid = "User";
include('../admin/config/sql.php');
include('../admin/config/fileupload-class.php');
include '../includes/mail.php';
session_start();
$avoidColumns=array('id','adate','udate');

if($_REQUEST['ftype']=='Report')
{
    $userDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprofile where id='".$_SESSION['uid']."'"));
    $strTo='fadil@dotlinedesigns.com,info@testgenie.com';
    $strSubject='TestGenie - Report Question' ;

    $qrQuesDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from questions where id='".$_REQUEST['report-qid']."'"));
    $qLangArray=array();
    $langName=mysqli_query($dbconn,"select * from queslang where refid='".$_REQUEST['report-qid']."' order by id asc");
    while($langName1=mysqli_fetch_object($langName))
    {
        array_push($qLangArray,$langName1->name);
    }

    $questionImage= '';
    $quesImg=urldecode($qrQuesDet->quesimg);
    if($quesImg!='')
    {
        $chkWord = "http";
        if(strpos($quesImg, $chkWord) !== false){
            $imgPath='';
        } else{
            $imgPath='../upfile/';
        }
        $questionImage= ''.$questionImage.'<img src="' . $imgPath . '' . $quesImg . '" style="max-width:100%"/>';
    }

    $questionRows='';
    $jsonQuestion = json_decode($qrQuesDet->quesdata,true);
    for($i=0;$i<sizeof($qLangArray);$i++)
    {
        $insText=urldecode($jsonQuestion[$i][$qLangArray[$i]]);
        $questionRows='
        '.$questionRows.'
        <tr>
            <td width="150">'.$qLangArray[$i].'</td>
            <td>
                <div>'.$insText.'</div>
                <div>'.$questionImage.'</div>
            </td>
        </tr>';
    }

    $optionRows='';
    $oldOrdNo='';
    $jsonOption = json_decode($qrQuesDet->optiondata,true);
    $jsonOptionImg = json_decode($qrQuesDet->optionimg,true);
    for($i=1;$i<=$qrQuesDet->noofoptions;$i++)
    {
        $optionImage='';
        $optionImg=urldecode($jsonOptionImg[$cLangNo][$i]);
        if($optionImg!='')
        {
            $chkWord = "http";
            if(strpos($optionImg, $chkWord) !== false){
                $imgPath='';
            } else{
                $imgPath='../upfile/';
            }
            $optionImage= ''.$optionImage.'<img src="' . $imgPath . '' . $optionImg . '" style="max-width:100%"/>';
        }
        for($j=0;$j<sizeof($qLangArray);$j++)
        {
            $insText=strip_tags(urldecode($jsonOption[$i][$j][$qLangArray[$j]]));
            if($insText!='')
            {
                $optionRows='
                '.$optionRows.'
                <tr>
                    <td width="50">'.$i.'</td>
                    <td width="150">'.$qLangArray[$j].'</td>
                    <td>
                        <div>'.$insText.'</div>
                        <div>'.$optionImage.'</div>
                    </td>
                </tr>';
            }
        }
    }
    $message = '
        '.$maila.'
        <p><b>User Details</b></p>
        <table width="100%" cellpadding="10" cellspacing="0" border="1">
            <tr>
                <td width="150">Name</td>
                <td>'.$userDet->name.'</td>
            </tr>
            <tr>
                <td width="150">Email</td>
                <td>'.$userDet->email.'</td>
            </tr>
            <tr>
                <td width="150">Phone</td>
                <td>'.$userDet->phone.'</td>
            </tr>
        </table>
        <p><b>Question</b></p>
        <table width="100%" cellpadding="10" cellspacing="0" border="1">
            '.$questionRows.'
        </table>
        <p><b>Options</b></p>
        <table width="100%" cellpadding="10" cellspacing="0" border="1">
            '.$optionRows.'
        </table>
        <p><b>Report Details</b></p>
        <table width="100%" cellpadding="10" cellspacing="0" border="1">
            <tr>
                <td width="150">Type</td>
                <td>'.$_REQUEST['report-rtype'].'</td>
            </tr>
            <tr>
                <td width="150">Details</td>
                <td>'.$_REQUEST['report-details'].'</td>
            </tr>
        </table>
        '.$mailb.'
    ';
    $headers  = "From: info@testgenie.com \n";
    $headers .= "MIME-version: 1.0\n";
    $headers .= "Content-type: text/html; charset= iso-8859-1\n";
    $headers1=$headers;
    $result2 = mail($strTo,$strSubject,$message,$headers1);
    if($result2)
    {
        $_SESSION['msgStatus']='1';
        $_SESSION['msgText']='Question has been reported successfully';
    }
    else
    {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText']='Failed, Something went wrong';
    }
}
if($rdPage!=''){
    $_SESSION['crpage1']='';
    header('location:../'.$rdPage.'');
}
else{
    header('location:../'.$_SESSION['crpage'].'');
}
?>