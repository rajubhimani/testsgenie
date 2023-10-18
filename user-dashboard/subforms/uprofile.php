<?php
$tname = "uprofile";
$pageid = "User";
include('../../admin/config/sql.php');
include('../../admin/config/fileupload-class.php');
include '../../includes/mail.php';
session_start();
$avoidColumns=array('id','adate','udate');
function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
    return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}


if($_REQUEST['ftype']=='UpdateProfile'){
    $updQuery="update uprofile set
    name='".$_REQUEST['name']."',
    lname='".$_REQUEST['lname']."',
    phone='".$_REQUEST['phone']."',
    address='".$_REQUEST['address']."',
    city='".$_REQUEST['city']."',
    pincode='".$_REQUEST['pincode']."'
    where id='".$_SESSION['uid']."'";
    $updqry=mysqli_query($dbconn,$updQuery);
    if ($updqry) {
        if($_REQUEST['dob']!='')
        {
            $updQuery1="update uprofile set
            dob='".$_REQUEST['dob']."'
            where id='".$_SESSION['uid']."'";
            mysqli_query($dbconn,$updQuery1);
        }

        mysqli_query($dbconn,"update uprsub set
        name='".$_REQUEST['name']."'
        where uid='".$_SESSION['uid']."' and isprimary='Yes'");

        $doc1='';
        $uploadFileName='upic';
        $uploadFilePath='../../upfile/';
        include('../../admin/includes/file-upload.php');

        if($doc1!='')
        {
            $updateQuery="update uprofile set
            upic='".$doc1."'
            where id='".$_SESSION['uid']."'";
            echo $updateQuery;
            mysqli_query($dbconn,$updateQuery);
        }

        // if($_REQUEST['clearPic']=='Yes')
        // {
        //     $updateQuery="update uprofile set
        //     upic=''
        //     where id='".$_SESSION['uid']."'";
        //     //echo $updateQuery;
        //     mysqli_query($dbconn,$updateQuery);
        // }

        $insid=$_SESSION['uid'];
        $insSubid=$_SESSION['usid'];
        mysqli_query($dbconn,"delete from upexam where usid='".$_SESSION['usid']."'");
        $selList=mysqli_query($dbconn,"select * from examprofile where isactive='1' order by name asc");
        $selListCount=mysqli_num_rows($selList);
        while($selList1=mysqli_fetch_object($selList))
        {
            if($_REQUEST['ex-'.$selList1->eid.'']=='Yes')
            {
                mysqli_query($dbconn,"insert into upexam(uid,usid,expid)values('".$insid."','".$insSubid."','".$selList1->eid."')");
            }
        }

        $_SESSION['msgStatus']='1';
        $_SESSION['msgText'] = 'Profile has been updated successfully';
    } else {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText'] = 'Please Try Again';
    }
}
if($_REQUEST['ftype']=='ChangePassword'){
    $getUPrDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprofile where id='".$_SESSION['uid']."'"));
    if($getUPrDet->password!=base64_encode($_REQUEST['cpassword']))
    {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText'] = 'Incorrect current password';
    }
    else
    {
        $updqry=mysqli_query($dbconn,"update uprofile set
        password='".base64_encode($_REQUEST['rpassword'])."'
        where id='".$_SESSION['uid']."'");
        if ($updqry) {
            $_SESSION['msgStatus']='1';
            $_SESSION['msgText'] = 'Password has been updated successfully';
        } else {
            $_SESSION['msgStatus']='0';
            $_SESSION['msgText'] = 'Please Try Again';
        }
    }
}
if($_REQUEST['ftype']=='updateQualification'){
    //echo 'Qualification';
    mysqli_query($dbconn,"delete from uprqlf where uid='".$_SESSION['uid']."'");
    for($i=1;$i<=5;$i++)
    {
        $qaddQuery="insert into uprqlf(uid,name,institute,
        category,passyear)
        values('".$_SESSION['uid']."','".$_REQUEST['name'.$i.'']."','".$_REQUEST['institute'.$i.'']."',
        '".$_REQUEST['category'.$i.'']."','".$_REQUEST['passyear'.$i.'']."')";
        //echo $qaddQuery;
        $updqry=mysqli_query($dbconn,$qaddQuery);
    }
    if ($updqry) {
        $_SESSION['msgStatus']='1';
        $_SESSION['msgText'] = 'Qualification has been updated successfully';
    } else {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText'] = 'Please Try Again';
    }
}
if($_REQUEST['ftype']=='RemoveProfilePic'){
    $updateQuery="update uprofile set
    upic=''
    where id='".$_SESSION['uid']."'";
    //echo $updateQuery;
    mysqli_query($dbconn,$updateQuery);
}
if($_REQUEST['ftype']=='eprofile'){
    if($_REQUEST['eprid']=='All')
    {
        $ePrID=0;
    }
    else
    {
        $ePrID=$_REQUEST['eprid'];
    }
    $updateQuery="update uprofile set
    exprofileid='".$ePrID."'
    where id='".$_SESSION['uid']."'";
    //echo $updateQuery;
    mysqli_query($dbconn,$updateQuery);
    mysqli_query($dbconn,"insert into uexplog(uid,expid) values('".$_SESSION['uid']."','".$_REQUEST['eprid']."')");
}
if($_REQUEST['ftype']=='UpdateExamProfile'){
    mysqli_query($dbconn,"delete from upexam where uid='".$_SESSION['uid']."'");
    $selList=mysqli_query($dbconn,"select * from examprofile where isactive='1'  order by name asc");
    $selListCount=mysqli_num_rows($selList);
    while($selList1=mysqli_fetch_object($selList))
    {
        if($_REQUEST['ex-'.$selList1->eid.'']=='Yes')
        {
            mysqli_query($dbconn,"insert into upexam(uid,usid,expid)values('".$_SESSION['uid']."','0','".$selList1->eid."')");
        }
    }
    $_SESSION['msgStatus']='1';
    $_SESSION['msgText'] = 'Exam Profile has been updated successfully';
}

if($rdPage!=''){
    $_SESSION['crpage1']='';
    header('location:../'.$rdPage.'');
}
else{
    header('location:../'.$_SESSION['crpage3'].'');
}
?>