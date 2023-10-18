<div class='dashboard-matrix'>
      <div class='martrix'>
        <div class='martix-box' style='background: #ffa500;'><i class="far fa-file-alt"></i></div>
        <h4>Total Tests</h4>
        <h1><?php echo mysqli_num_rows(mysqli_query($dbconn, "select * from testpaper where isactive='1'")); ?></h1>
        <hr>
        <?php
        $gQCnt1=mysqli_num_rows(mysqli_query($dbconn, "select * from testpaper where isactive='1'"));
        $gQCnt2=mysqli_num_rows(mysqli_query($dbconn, "select * from testpaper where isactive='1' and id IN (select tpid from utestpaper where uid='".$_SESSION['uid']."')"));
        $gQCnt3=round((($gQCnt2/$gQCnt1)*100),2);
        ?>
        <p><i class="fas fa-exclamation-triangle"></i><?php echo $gQCnt3; ?>% Completed</p>
      </div>
      <div class='martrix'>
        <div class='martix-box' style='background-color: #32b932;'><i class="fas fa-question"></i></div>
        <h4>Total Questions</h4>
        <h1><?php echo mysqli_num_rows(mysqli_query($dbconn, "select * from questions where isactive='1'")); ?></h1>
        <hr>
        <?php
        $gQCnt1=mysqli_num_rows(mysqli_query($dbconn, "select * from questions where isactive='1'"));
        $gQCnt2=mysqli_num_rows(mysqli_query($dbconn, "select * from questions where isactive='1' and id IN (select qid from utpques where utpid IN (select refid from utestpaper where uid='".$_SESSION['uid']."'))"));
        $gQCnt3=round((($gQCnt2/$gQCnt1)*100),2);
        ?>
        <p><i class="far fa-calendar"></i> <?php echo $gQCnt3; ?>% Completed</p>
      </div>
      <div class='martrix'>
        <div class='martix-box' style='background:#ff0000;'><i class="fas fa-scroll"></i></div>
        <h4>Average Score</h4>
        <?php
        $finalScoreTotal=0;
        $finalScoreCount=0;
        $rCount=0;
        $getUResults=mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."' and submitted='1' order by adate desc");
        while($getUResults1=mysqli_fetch_object($getUResults))
        {
            $rCount++;
            $finalScoreCount++;
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
            $markPercentage=round((($finalScore/$MaxScore)*100),2);
            $finalScoreTotal=$finalScoreTotal+$markPercentage;
        }
        $avgScore=round(($finalScoreTotal/$finalScoreCount),2);
        ?>
        <h1><?php echo $avgScore; ?>%</h1>
        <hr>
        <p><i class="fas fa-tag"></i> Average score across the tests</p>
      </div>
      <div class='martrix'>
        <div class='martix-box' style='background: #50ABF1;'><i class="fas fa-clock"></i></div>
        <h4>Time Spent</h4>
        <?php
        $totalTimeSpent=0;
        $gtimeSpent=mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."'");
        while($gtimeSpent1=mysqli_fetch_object($gtimeSpent))
        {
          $totalTimeSpent=$totalTimeSpent+$gtimeSpent1->timetaken;
        }
        $totalTimeSpentHours=round(($totalTimeSpent/1440),1);
        ?>
        <h1><?php echo $totalTimeSpentHours; ?> Hours</h1>
        <hr>
        <p><i class="fas fa-history"></i>Total Time Spent on testpapers</p>
      </div>
    </div>