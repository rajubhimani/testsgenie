<?php
include('admin/config/sql.php');
$query = 'SET GLOBAL group_concat_max_len=1000000000';
mysqli_query($dbconn,$query);
?>
<?php
//QUESTIONS
// $getQ=mysqli_query($dbconn,"select refid,GROUP_CONCAT(`English`) as `English1`,GROUP_CONCAT(`Hindi`) as `Hindi1` from qdet_Questions group by refid");
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     echo $getQ1->refid.','.urlencode($getQ1->English1).','.urlencode($getQ1->Hindi1).'<br/>';
//     $subarray1=array();
//     array_push($subarray1,array('English'  => urlencode($getQ1->English1)));
//     array_push($subarray1,array('Hindi'  => urlencode($getQ1->Hindi1)));
//     mysqli_query($dbconn,"update questions set quesdata='".json_encode($subarray1)."' where id='".$getQ1->refid."'");
// }



//INSTRUCTIONS
// mysqli_query($dbconn,"update questions set insdata=NULL where 1");
// $getQ=mysqli_query($dbconn,"select refid,GROUP_CONCAT(`English`) as `English1`,GROUP_CONCAT(`Hindi`) as `Hindi1` from qdet_Instructions group by refid");
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     echo $getQ1->refid.','.urlencode($getQ1->English1).','.urlencode($getQ1->Hindi1).'<br/>';
//     $subarray1=array();
//     array_push($subarray1,array('English'  => urlencode($getQ1->English1)));
//     array_push($subarray1,array('Hindi'  => urlencode($getQ1->Hindi1)));
//     mysqli_query($dbconn,"update questions set insdata='".json_encode($subarray1)."' where id='".$getQ1->refid."'");
// }



//EXPLANATIONS
// mysqli_query($dbconn,"update questions set expdata=NULL where 1");
// $getQ=mysqli_query($dbconn,"select refid,GROUP_CONCAT(`English`) as `English1`,GROUP_CONCAT(`Hindi`) as `Hindi1` from qdet_Explanations group by refid");
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     echo $getQ1->refid.','.urlencode($getQ1->English1).','.urlencode($getQ1->Hindi1).'<br/>';
//     $subarray1=array();
//     array_push($subarray1,array('English'  => urlencode($getQ1->English1)));
//     array_push($subarray1,array('Hindi'  => urlencode($getQ1->Hindi1)));
//     mysqli_query($dbconn,"update questions set expdata='".json_encode($subarray1)."' where id='".$getQ1->refid."'");
// }



//EXPLANATION VIDEO LINK
// $dbQuery="select questions.id as quesid,quesdetextra.details as qdet from questions LEFT JOIN quesdetextra ON quesdetextra.refid=questions.id where quesdetextra.dtype='Explanations Video Link' order by questions.id desc";
// $getQ=mysqli_query($dbconn,$dbQuery);
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     //$getExpV=mysqli_fetch_object(mysqli_query($dbconn,"select * from quesdetextra where refid='".$getQ1->id."'"));
//     echo $getQ1->quesid.','.$getQ1->qdet.'<br/>';
//     mysqli_query($dbconn,"update questions set expvlink='".$getQ1->qdet."' where id='".$getQ1->quesid."'");
// }



//OPTIONS 1
// $refid='';
// $refidprev='';
// $subarray1=array();
// $dbQR2="select * from qdet_options1 limit 50000";
// $getQ=mysqli_query($dbconn,$dbQR2);;
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     $refid=$getQ1->refid;
//     if($refid!='' && $refid!=$refidprev)
//     {
//         echo $refidprev.'<br/>'.json_encode($subarray1).'<br/>';
//         mysqli_query($dbconn,"update questions set optiondata='".json_encode($subarray1)."' where id='".$refidprev."'");
//         $subarray1=array();
//     }
//     echo $getQ1->refid.','.urlencode($getQ1->English1).','.urlencode($getQ1->Hindi1).'<br/>';
//     $subarray2=array();
//     array_push($subarray2,array('English'  => urlencode($getQ1->English1)));
//     array_push($subarray2,array('Hindi'  => urlencode($getQ1->Hindi1)));
//     $subarray1[$getQ1->ordno]=$subarray2;
//     $refidprev=$refid;
// }



//OPTIONS 2
// $refid='';
// $refidprev='';
// $subarray1=array();
// $dbQR2="select * from qdet_options1 limit 50000 OFFSET 50000";
// $getQ=mysqli_query($dbconn,$dbQR2);;
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     $refid=$getQ1->refid;
//     if($refid!='' && $refid!=$refidprev)
//     {
//         echo $refidprev.'<br/>'.json_encode($subarray1).'<br/>';
//         mysqli_query($dbconn,"update questions set optiondata='".json_encode($subarray1)."' where id='".$refidprev."'");
//         $subarray1=array();
//     }
//     echo $getQ1->refid.','.urlencode($getQ1->English1).','.urlencode($getQ1->Hindi1).'<br/>';
//     $subarray2=array();
//     array_push($subarray2,array('English'  => urlencode($getQ1->English1)));
//     array_push($subarray2,array('Hindi'  => urlencode($getQ1->Hindi1)));
//     $subarray1[$getQ1->ordno]=$subarray2;
//     $refidprev=$refid;
// }



//OPTIONS IMAGE
// $dbQR="select refid,
// GROUP_CONCAT(`Op1`) as `Opt1`,
// GROUP_CONCAT(`Op2`) as `Opt2`,
// GROUP_CONCAT(`Op3`) as `Opt3`,
// GROUP_CONCAT(`Op4`) as `Opt4`,
// GROUP_CONCAT(`Op5`) as `Opt5`
// from qdet_OptionsImg group by refid";
// $getQ=mysqli_query($dbconn,$dbQR);
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     echo $getQ1->refid.','.urlencode($getQ1->Opt1).','.urlencode($getQ1->Opt2).','.urlencode($getQ1->Opt3).','.urlencode($getQ1->Opt4).','.urlencode($getQ1->Opt5).'<br/>';
//     $subarray1=array();
//     array_push($subarray1,array('1'  => urlencode($getQ1->Opt1)));
//     array_push($subarray1,array('2'  => urlencode($getQ1->Opt2)));
//     array_push($subarray1,array('3'  => urlencode($getQ1->Opt3)));
//     array_push($subarray1,array('4'  => urlencode($getQ1->Opt4)));
//     array_push($subarray1,array('5'  => urlencode($getQ1->Opt5)));
//     mysqli_query($dbconn,"update questions set optionimg='".json_encode($subarray1)."' where id='".$getQ1->refid."'");
// }



//ALL IMAGES
// $dbQR="select refid,
// GROUP_CONCAT(`Instructions`) as `Instructions1`,
// GROUP_CONCAT(`Questions`) as `Questions1`,
// GROUP_CONCAT(`Explanations`) as `Explanations1`
// from qdet_OtherImg group by refid";
// $getQ=mysqli_query($dbconn,$dbQR);
// while($getQ1=mysqli_fetch_object($getQ))
// {
//     $updQR="update questions set
//     insimg='".urlencode($getQ1->Instructions1)."',
//     quesimg='".urlencode($getQ1->Questions1)."',
//     expimg='".urlencode($getQ1->Explanations1)."'
//     where id='".$getQ1->refid."'";
//     echo $updQR.'<br/>';
//     mysqli_query($dbconn,$updQR);
// }

?>