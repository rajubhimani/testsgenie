<?php
include('../admin/config/sql.php');
session_start();
mysqli_query($dbconn,"update utestpaper set submitted='1' where id='" . $_SESSION['utpid'] . "'");
header('location:../submitConfirmation.php');
?>