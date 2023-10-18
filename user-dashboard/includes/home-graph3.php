<div class='graph-box'>
    <h3>Goal Completion</h3>
    <div class="goal-wrapper">
    <?php
    $colorsArray = array('#43c0f2','#d34d2e','#39a558','#ec9c00');
    $colorCount=0;
    $getTestTypeList=mysqli_query($dbconn,"select * from testtype where name IN (select testtype from testpaper where completed='Yes')");
    $exPrfCnd='';
    if($_SESSION['uExPrfID']!='' && $_SESSION['uExPrfID']!='0')
    {
        $exPrfCnd="and examid IN (select id from exam where expid='".$_SESSION['uExPrfID']."')";
    }
    while($getTestTypeList1=mysqli_fetch_object($getTestTypeList))
    {
        $tPaperCount=mysqli_num_rows(mysqli_query($dbconn,"select * from testpaper  where completed='Yes' and testtype='".$getTestTypeList1->name."' ".$exPrfCnd.""));
        $utPaperCount=mysqli_num_rows(mysqli_query($dbconn,"select * from testpaper where completed='Yes' and testtype='".$getTestTypeList1->name."' and id IN (select tpid from utestpaper where uid='".$_SESSION['uid']."')  ".$exPrfCnd.""));
        $perValue=round(($utPaperCount/$tPaperCount)*100,2);
        echo '
        <div class="each-goals">
            <div class="goals-text">
                <span><b>'.$getTestTypeList1->name.'</b></span>
                <span><b>'.$utPaperCount.'</b>/'.$tPaperCount.'</span>
            </div>
            <div class="goals-graph-bar">
                <div class="goals-graph-bar-value" style="width:'.$perValue.'%;background:'.$colorsArray[$colorCount].';"></div>
            </div>
        </div>
        ';
        if($perValue>0)
        {
            $colorCount++;
            if($colorCount>=4)
            {
                $colorCount=0;
            }
        }
    }
    ?>
    </div>
</div>