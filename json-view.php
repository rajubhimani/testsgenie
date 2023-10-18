<?php
include('admin/config/sql.php');
$getRefid=mysqli_query($dbconn,"select DISTINCT(refid) from qdet_explanations order by refid asc");
while($getRefid1=mysqli_fetch_object($getRefid))
{
    $getlang2=mysqli_fetch_object(mysqli_query($dbconn,"select * from qdet_explanations"));
}
?>