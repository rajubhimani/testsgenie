<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer1", {
	animationEnabled: false,
	theme: "light2",
    axisY: {
		title: "Score",
		suffix: "%",
        minimum: 0,
        maximum: 100,
        interval: 20
	},
	data: [{
		type: "line",
      	indexLabelFontSize: 16,
        yValueFormatString: "0'%'",
		dataPoints: [
            <?php
            $rCount=0;
            $getUResults=mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."' and submitted='1' ".$testIdCnd." order by adate desc limit 7");
            while($getUResults1=mysqli_fetch_object($getUResults))
            {
                $rCount++;
                $uResTPDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from testpaper where id='".$getUResults1->tpid."'"));
                $uResExDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from exam where id='".$uResTPDet->examid."'"));
                $UResMaxQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='".$getUResults1->id."'"));
                $UResCrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='".$getUResults1->id."' and utpques.uans=utpques.cans"));
                $UResWrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='".$getUResults1->id."' and utpques.uans!=utpques.cans"));
                $finalScore=0;
                $crMark=$UResCrQNo*$uResExDet->pmark;
                $wrgMark=$UResWrQNo*$uResExDet->nmark;
                $finalScore=$crMark-$wrgMark;
                $MaxScore=$UResMaxQNo*$uResExDet->pmark;
                $markPercentage=round((($finalScore/$MaxScore)*100));
                if($markPercentage<0)
                {
                    $markPercentage=0;
                }
                if($rCount>1)
                {
                    echo ',';
                }
                echo '{ x:'.$rCount.',y: '.$markPercentage.' }';
            }
            if($rCount<7)
            {
                for($i=$rCount;$i<=7;$i++)
                {
                    echo ',';
                    echo '{ x:'.$i.',y: 0 }';
                }
            }
            ?>
		]
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: false,
	theme: "light2",
    axisY: {
		title: "Time Spent in minutes",
		suffix: "mins",
        minimum: 0,
        maximum: 120,
        interval: 20
	},
	data: [{
		type: "line",
      	indexLabelFontSize: 16,
        yValueFormatString: "0'mins'",
		dataPoints: [
            <?php
            $rCount=0;
            $getUResults=mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."' and submitted='1' ".$testIdCnd." order by adate desc limit 7");
            while($getUResults1=mysqli_fetch_object($getUResults))
            {
                $rCount++;
                $timeSpent=round(($getUResults1->timetaken/60));
                if($timeSpent<0)
                {
                    $timeSpent=0;
                }
                if($rCount>1)
                {
                    echo ',';
                }
                echo '{ x:'.$rCount.',y: '.$timeSpent.' }';
            }
            if($rCount<7)
            {
                for($i=$rCount;$i<=7;$i++)
                {
                    echo ',';
                    echo '{ x:'.$i.',y: 0 }';
                }
            }
            ?>
		]
	}]
});
chart.render();

}
</script>