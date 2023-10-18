<?php
include('../admin/config/sql.php');
include('../admin/config/fileupload-class.php');
$getUProfiles=mysqli_query($dbconn,"select * from uprofile");
while($getUProfiles1=mysqli_fetch_object($getUProfiles))
{
    mysqli_query($dbconn,"insert into ulastlogin(uid,adate)values('".$getUProfiles1->id."','".$getUProfiles1->adate."')");
}
?>