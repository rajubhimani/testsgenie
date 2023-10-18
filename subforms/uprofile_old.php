<?php
$tname = "uprofile";
$pageid = "User";
include('../admin/config/sql.php');
include('../admin/config/fileupload-class.php');
include '../includes/mail.php';
session_start();
$avoidColumns=array('id','adate','udate');

if($_REQUEST['ftype']=='Add')
{
    $chkDuplicate=mysqli_num_rows(mysqli_query($dbconn,"select * from uprofile where email='".addslashes($_REQUEST['email'])."'"));
    $chkDuplicate1=mysqli_num_rows(mysqli_query($dbconn,"select * from uprofile where phone='".addslashes($_REQUEST['mobile'])."'"));
    if($chkDuplicate>0)
    {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText']='Failed, Email ID is already registered';
    }
    else if($chkDuplicate1>0)
    {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText']='Failed, Mobile is already registered';
    }
    else
    {
        $query="insert into uprofile(name,email,phone,password,updby)
        values('".addslashes($_REQUEST['name'])."','".$_REQUEST['email']."','".$_REQUEST['mobile']."','".base64_encode($_REQUEST['rpassword'])."','".$_SERVER['REMOTE_ADDR']."')";
        $insQuery=mysqli_query($dbconn,$query);
        if($insQuery){
            $insid=mysqli_insert_id($dbconn);

            $insQ="insert into uprsub(uid,name,isprimary,updby)
            values('".$insid."','".$_REQUEST['name']."','Yes','".$_SERVER['REMOTE_ADDR']."')";
            mysqli_query($dbconn,$insQ);
            $insSubid=mysqli_insert_id($dbconn);

            $selList=mysqli_query($dbconn,"select * from examprofile where isactive='1' order by name asc");
            $selListCount=mysqli_num_rows($selList);
            while($selList1=mysqli_fetch_object($selList))
            {
                if($_REQUEST['ex-'.$selList1->eid.'']=='Yes')
                {
                    mysqli_query($dbconn,"insert into upexam(uid,usid,expid)values('".$insid."','".$insSubid."','".$selList1->eid."')");
                }
            }

            $strTo=''.$_REQUEST['email'].'';
            $strSubject='Welcome to TestsGenie' ;
            $message = '
                '.$maila.'
                <div style="background:#fff;padding:20px;text-align:center">
                    <h1 style="font-weight:normal;">Thanks for signing up, '.$_REQUEST['name'].'! </h1>
                    <p>Please verify your email address to get access to million questions and thousands test papers.</p>
                    <p style="color:#2a3890;font-weight:bold;">Thank you! </p>
                    <p style="text-align:center"><a href="'.$_SESSION['webURL'].'/subforms/everify.php?tuid='.$insid.'" style="display:inline-block; padding:10px 30px; background:#00adef; color:#fff; text-decoration:none; font-size:13px;">Verify Email Now</a></p>
                </div>
                <div style="background:#6e6e6e;padding:20px;color:#fff;text-align:center">
                    <p><b>Here’s what happens next:</b></p>
                    <p>1. Create your Exam Profile to practice for specific exam.</p>
                    <p>2. You can take test for full length tests; previous years test as well as topic or sectional test.</p>
                    <p>3. You can even build your own criteria to test yourself.</p>
                    <p>4. The more you test yourself with TestsGenie, Genie will intelligently guide you to further practice and help you to achieve your goal.</p>
                </div>
                '.$mailb.'
            ';
            $headers  = "From: info@testgenie.com \n";
            $headers .= "MIME-version: 1.0\n";
            $headers .= "Content-type: text/html; charset= iso-8859-1\n";
            $headers1=$headers;
            $result2 = mail($strTo,$strSubject,$message,$headers1);
            $_SESSION['msgStatus']='1';
            $_SESSION['msgText']='User Registered Successfully. Please login below';
            $rdPage='login.php';
        }
        else{
            $_SESSION['msgStatus']='0';
            $_SESSION['msgText']='Something went wrong';
        }
    }
}
if($_REQUEST['ftype']=='Login')
{
    $uname = $_REQUEST['lemail'];
    $passw = base64_encode($_REQUEST['lpassword']);
    $loginQuery="select * from uprofile
    where (email='" . $uname . "' and password='" . $passw . "') OR (phone='" . $uname . "' and password='" . $passw . "')";
    $chklogin = mysqli_query($dbconn,$loginQuery);
    if (mysqli_num_rows($chklogin) <= 0) {
        $_SESSION['msgText'] = 'Invalid Username/Password';
        $_SESSION['msgStatus']='0';
    } else {
        $chklogin1 = mysqli_fetch_object($chklogin);
        if ($chklogin1->everify == 'No') {
            $_SESSION['msgText'] = 'Email Verification is pending';
            $_SESSION['msgStatus']='0';
        }
        else if ($chklogin1->isactive == '0') {
            $_SESSION['msgText'] = 'Your account is inactive. Please contact info@testsgenie.com for more details.';
            $_SESSION['msgStatus']='0';
        }
         else {
            $getUPrSub=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprsub where isprimary='Yes' and uid='".$chklogin1->id."'"));
            $_SESSION['uid'] = $chklogin1->id;
            $_SESSION['usid'] = $getUPrSub->id;
            // if($_SESSION['crpage1']!='')
            // {
            //     $rdPage=$_SESSION['crpage1'];
            // }
            if($_SESSION['redirectPage']!='')
            {
                $rdPage=$_SESSION['redirectPage'];
                $_SESSION['redirectPage']='';
            }
            else
            {
                $rdPage='user-dashboard/index.php';
            }
            mysqli_query($dbconn,"update uprofile set exprofileid=NULL where id='".$_SESSION['uid']."'");
            mysqli_query($dbconn,"update ulastlogin set clogin='0' where uid='".$_SESSION['uid']."'");
            mysqli_query($dbconn,"insert into ulastlogin(uid,clogin)values('".$_SESSION['uid']."','1')");
        }
    }
}
if($_REQUEST['ftype']=='ForgotPassword'){
    $_SESSION['fpemail']=$_REQUEST['fpemail'];
    $query="select * from uprofile where email='".$_SESSION['fpemail']."'";
    $chkEmail=mysqli_num_rows(mysqli_query($dbconn,$query));
    if($chkEmail<=0)
    {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText']='Failed, Email ID given is not yet registered.';
    }
    else
    {
        $resetCode=rand(10000,99999);
        $updqry = mysqli_query($dbconn,"update uprofile set
        resetcode='" . $resetCode . "'
        where email='" . $_SESSION['fpemail'] . "'");
        $getUserDet=mysqli_fetch_object(mysqli_query($dbconn,$query));
        $strTo=''.$_SESSION['fpemail'].'';
        $strSubject='TestGenie - Forgot Password Request' ;
        $message = '
            '.$maila.'
                <div style="background:#fff;padding:20px;text-align:center">
                    <p>Hi '.$getUserDet->name.',</p>
                    <p>Greetings!</p>
                    <p>You are just a step away from accessing your TestGenie account</p>
                    <p>We are sharing a verification code to access your account.</p>
                    <p>Once you have verified the code, you will be prompted to set a new password immediately. This is to ensure that only you have access to your account.</p>
                    <p>Your OTP: '.$resetCode.'</p>
                </div>
                <div style="background:#fff;padding:20px;">
                    <p>Best Regards,<br/>
                    Team TestGenie </p>
                </div>
            '.$mailb.'
        ';
        $headers  = "From: info@testgenie.com \n";
        $headers .= "MIME-version: 1.0\n";
        $headers .= "Content-type: text/html; charset= iso-8859-1\n";
        $headers1=$headers;
        $result2 = mail($strTo,$strSubject,$message,$headers1);
        $_SESSION['msgStatus']='1';
        $_SESSION['msgText']='Password reset OTP has been send to your Email ID';
        $rdPage='forgot-password1.php';
    }
}
if($_REQUEST['ftype']=='resendRCode'){
    $resetCode=rand(10000,99999);
    $updqry = mysqli_query($dbconn,"update uprofile set
    resetcode='" . $resetCode . "'
    where email='" . $_SESSION['fpemail'] . "'");
    $getUserDet=mysqli_fetch_object(mysqli_query($dbconn,$query));
    $strTo=''.$_SESSION['fpemail'].'';
    $strSubject='TestGenie - Forgot Password Request' ;
    $message = '
        '.$maila.'
            <div style="background:#fff;padding:20px;text-align:center">
                <p>Hi '.$getUserDet->name.',</p>
                <p>Greetings!</p>
                <p>You are just a step away from accessing your TestGenie account</p>
                <p>We are sharing a verification code to access your account.</p>
                <p>Once you have verified the code, you will be prompted to set a new password immediately. This is to ensure that only you have access to your account.</p>
                <p>Your OTP: '.$resetCode.'</p>
            </div>
            <div style="background:#fff;padding:20px;">
                <p>Best Regards,<br/>
                Team TestGenie </p>
            </div>
        '.$mailb.'
    ';
    $headers  = "From: info@testgenie.com \n";
    $headers .= "MIME-version: 1.0\n";
    $headers .= "Content-type: text/html; charset= iso-8859-1\n";
    $headers1=$headers;
    $result2 = mail($strTo,$strSubject,$message,$headers1);
    $_SESSION['msgStatus']='1';
    $_SESSION['msgText']='Password reset OTP has been send to your Email ID';
}
if($_REQUEST['ftype']=='ForgotRCode'){
    $chkResetCode=mysqli_num_rows(mysqli_query($dbconn,"select * from uprofile where email='".$_SESSION['fpemail']."' and resetcode='".$_REQUEST['rcode']."'"));
    if($chkResetCode<=0)
    {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText'] = 'Incorrect OTP, Please try again';
    }
    else
    {
        $updqry = mysqli_query($dbconn,"update uprofile set
        password='" . base64_encode($_REQUEST['rpassword']) . "',
        resetcode=''
        where email='" . $_SESSION['fpemail'] . "'");
        if ($updqry) {
            $rdPage='login.php';
            $_SESSION['msgStatus']='1';
            $_SESSION['msgText'] = 'Password has been successfully reset. Login with your new password.';
        } else {
            $_SESSION['msgStatus']='0';
            $_SESSION['msgText'] = 'Please Try Again';
        }
    }
}
if($_REQUEST['ftype']=='UpdateProfile'){
    $updqry=mysqli_query($dbconn,"update uprofile set
    name='".$_REQUEST['name']."'
    where id='".$_SESSION['uid']."'");
    if ($updqry) {
        mysqli_query($dbconn,"update uprsub set
        name='".$_REQUEST['name']."'
        where uid='".$_SESSION['uid']."' and isprimary='Yes'");

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
if($rdPage!=''){
    $_SESSION['crpage1']='';
    header('location:../'.$rdPage.'');
}
else{
    header('location:../'.$_SESSION['crpage'].'');
}
?>