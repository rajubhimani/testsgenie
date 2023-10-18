<?php
$_SESSION['firstTime']=0;
$_SESSION['logOut']=0;
$cookie_name = "tguid";
if($_SESSION['clearCookie']==1 || $_REQUEST['showLogOut']=='Yes')
{
    $_SESSION['uid']='';
	$cookie_value = 0;
	setcookie($cookie_name, $cookie_value, time() + (86400 * 365), '/');
    $_SESSION['clearCookie']=0;
    $_SESSION['logOut']=1;
}
else
{
    if($_SESSION['uid']!='' && $_COOKIE[$cookie_name]==0)
    {
        $cookie_value = $_SESSION['uid'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 365), '/');
        $_SESSION['firstTime']=1;
    }
    else if ($_SESSION['uid']=='' && $_COOKIE[$cookie_name]!=0) {
        $_SESSION['uid'] = $_COOKIE[$cookie_name];
        $getUPrSub=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprsub where isprimary='Yes' and uid='".$_SESSION['uid']."'"));
        $_SESSION['usid'] = $getUPrSub->id;
        mysqli_query($dbconn,"insert into uloginlog(uid)values('".$_SESSION['uid']."')");
    }
}
if($_SESSION['uid']!='')
{
    $isUserBlocker=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprofile where id='".$_SESSION['uid']."'"));
    if($isUserBlocker->isactive=='0')
    {
        if($_SESSION['pageFolder']=='User Dashboard')
        {
            header('location:../subforms/logout.php');
        }
        else
        {
            header('location:subforms/logout.php');
        }
    }
}
?>