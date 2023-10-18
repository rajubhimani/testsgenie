<?php
include('admin/config/sql.php');
?>
<!DOCTYPE html>
<html>
<body>
<?php
$qno=0;
$getQ=mysqli_query($dbconn,"select * from questions where id NOT IN (select qid from qdataupdated) order by id desc limit 200");
while($getQ1=mysqli_fetch_object($getQ))
{
    if($getQ1->insdata!='')
    {
        $qno++;
        echo ''.$qno.': '.$getQ1->id.'<br/>';
        $subarray1=array();
        $getQD=mysqli_query($dbconn,"select * from quesdet where refid='".$getQ1->id."' and dtype='Instructions'");
        while($getQD1=mysqli_fetch_object($getQD))
        {
            array_push($subarray1,array($getQD1->lang  => $getQD1->details));
        }
        //echo json_encode($subarray1).'<br/>';
        mysqli_query($dbconn,"update questions set insdata='".json_encode($subarray1)."' where id='".$getQ1->id."'");
    }

    if($getQ1->expdata!='')
    {
        $subarray1=array();
        $getQD=mysqli_query($dbconn,"select * from quesdet where refid='".$getQ1->id."' and dtype='Explanations'");
        while($getQD1=mysqli_fetch_object($getQD))
        {
            array_push($subarray1,array($getQD1->lang  => $getQD1->details));
        }
        //echo json_encode($subarray1).'<br/>';
        mysqli_query($dbconn,"update questions set expdata='".json_encode($subarray1)."' where id='".$getQ1->id."'");
    }

    if($getQ1->quesdata!='')
    {
        $subarray1=array();
        $getQD=mysqli_query($dbconn,"select * from quesdet where refid='".$getQ1->id."' and dtype='Questions'");
        while($getQD1=mysqli_fetch_object($getQD))
        {
            array_push($subarray1,array($getQD1->lang  => $getQD1->details));
        }
        //echo json_encode($subarray1).'<br/>';
        mysqli_query($dbconn,"update questions set quesdata='".json_encode($subarray1)."' where id='".$getQ1->id."'");
    }

    if($getQ1->optiondata!='')
    {
        $subarray1=array();
        for($i=1;$i<=$getQ1->noofoptions;$i++)
        {
            $subarray2=array();
            $getQD=mysqli_query($dbconn,"select * from quesdet where refid='".$getQ1->id."' and dtype='Options' and ordno='".$i."' order by ordno asc");
            while($getQD1=mysqli_fetch_object($getQD))
            {
                array_push($subarray2,array($getQD1->lang  => $getQD1->details));
            }
            $subarray1[$i]=$subarray2;
        }
        //echo json_encode($subarray1).'<br/>';
        mysqli_query($dbconn,"update questions set optiondata='".json_encode($subarray1)."' where id='".$getQ1->id."'");
    }

    if($getQ1->optionimg!='')
    {
        $subarray1=array();
        $getQD=mysqli_query($dbconn,"select * from quesdetimg where refid='".$getQ1->id."' and dtype='Options'");
        while($getQD1=mysqli_fetch_object($getQD))
        {
            array_push($subarray1,array($getQD1->ordno  => $getQD1->dimg));
        }
        //echo json_encode($subarray1).'<br/>';
        mysqli_query($dbconn,"update questions set optionimg='".json_encode($subarray1)."' where id='".$getQ1->id."'");
    }

    $getImgData1=mysqli_fetch_object(mysqli_query($dbconn,"select * from quesdetimg where refid='".$getQ1->id."' and dtype='Instructions'"));
    $getImgData2=mysqli_fetch_object(mysqli_query($dbconn,"select * from quesdetimg where refid='".$getQ1->id."' and dtype='Questions'"));
    $getImgData3=mysqli_fetch_object(mysqli_query($dbconn,"select * from quesdetimg where refid='".$getQ1->id."' and dtype='Explanations'"));
    mysqli_query($dbconn,"update questions set
    insimg='".$getImgData1->dimg."',
    quesimg='".$getImgData2->dimg."',
    expimg='".$getImgData3->dimg."'
    where id='".$getQ1->id."'");

    mysqli_query($dbconn,"insert into qdataupdated(qid)values('".$getQ1->id."')");
}
?>
<?php
$getQCount=mysqli_num_rows(mysqli_query($dbconn,"select * from questions where id NOT IN (select qid from qdataupdated) order by id desc"));
if($getQCount>0)
{
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        location.reload();
    });
</script>
<?php
}
?>
</body>
</html>