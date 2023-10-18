<?php
$tname = "uprofile";
$pageid = "User";
include('../admin/config/sql.php');
include('../admin/config/fileupload-class.php');
include '../includes/mail.php';
session_start();
$tableArray=array('ecutoff','ecutoffval','ecutoffview','exam','examsubject','examsubsubject','examtopic','qgroup','qgroupques','quesdet','quesdetextra','quesdetimg','queslang','questions','testpaper','testpques','testpugroup','utestpaper','utpques');
for($i=1;$i<sizeof($tableArray);$i++)
{
    mysqli_query($dbconn,"TRUNCATE ".$tableArray[$i]."");
}
?>