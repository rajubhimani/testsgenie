<div class="score-detail-outer">
    <?php
    $getExSub = mysqli_query($dbconn, "select * from examsubject where examid='" . $selTestPaper->examid . "'");
    if (mysqli_num_rows($getExSub) > 0) {
        while ($getExSub1 = mysqli_fetch_object($getExSub)) {
            $UResMaxQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')"));
            $UResCrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpques.uans=utpques.cans"));
            $UResWrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') and utpques.uans!=utpques.cans"));
            $finalScore=0;
            $crMark=$UResCrQNo*$selTpExam->pmark;
            $wrgMark=$UResWrQNo*$selTpExam->nmark;
            $finalScore=$crMark-$wrgMark;
            $MaxScore=$UResMaxQNo*$selTpExam->pmark;
            //echo '<p><strong>' . $getExSub1->subject . '</strong></p>';
            ?>
            <div class="score-detail-wrapper">
                <div class="score-detail-header">
                    <div class="header-text">
                        <?php echo $getExSub1->subject; ?>
                    </div>
                    <div class="misc-text">
                        <span>Marks Obtained: <?php echo $finalScore; ?> / <?php echo $MaxScore; ?></span>
                    </div>
                </div>
                <?php
                    $quesSubQuery = "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "') order by qno asc";
                    include('includes/score-details-questions.php');
                ?>
            </div>
            <?php
        }
    } else {
        $getQSub = mysqli_query($dbconn, "select DISTINCT subject from questions where id IN(select qid from testpques where refid='" . $_SESSION['useltpid'] . "')");
        if(mysqli_num_rows($getQSub)>0)
        {
            while ($getQSub1 = mysqli_fetch_object($getQSub)) {
            $UResMaxQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getQSub1->subject . "')"));
            $UResCrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getQSub1->subject . "') and utpques.uans=utpques.cans"));
            $UResWrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getQSub1->subject . "') and utpques.uans!=utpques.cans"));
            $finalScore=0;
            $crMark=$UResCrQNo*$selTpExam->pmark;
            $wrgMark=$UResWrQNo*$selTpExam->nmark;
            $finalScore=$crMark-$wrgMark;
            $MaxScore=$UResMaxQNo*$selTpExam->pmark;
        ?>
                <div class="score-detail-wrapper">
                    <div class="score-detail-header">
                        <div class="header-text">
                            <?php echo $getQSub1->subject; ?>
                        </div>
                        <div class="misc-text">
                            <span>Marks Obtained: <?php echo $finalScore; ?> / <?php echo $MaxScore; ?></span>
                        </div>
                    </div>
                    <?php
                        $quesSubQuery = "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and qid IN (select id from questions where subject='" . $getQSub1->subject . "') order by qno asc";
                        include('includes/score-details-questions.php');
                    ?>
                </div>
        <?php
            }
        }
        else
        {
            $UResMaxQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "'"));
            $UResCrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and utpques.uans=utpques.cans"));
            $UResWrQNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utpques where refid='" . $_SESSION['utpidres1'] . "' and utpques.uans!=utpques.cans"));
            $finalScore=0;
            $crMark=$UResCrQNo*$selTpExam->pmark;
            $wrgMark=$UResWrQNo*$selTpExam->nmark;
            $finalScore=$crMark-$wrgMark;
            $MaxScore=$UResMaxQNo*$selTpExam->pmark;
            ?><div class="score-detail-wrapper">
            <div class="score-detail-header">
                <div class="header-text">
                    All Questions
                </div>
                <div class="misc-text">
                    <span>Marks Obtained: <?php echo $finalScore; ?> / <?php echo $MaxScore; ?></span>
                </div>
            </div>
            <?php
                $quesSubQuery = "select * from utpques where refid='" . $_SESSION['utpidres1'] . "' order by qno asc";
                include('includes/score-details-questions.php');
            ?>
        </div>
            <?php
        }
    }
    ?>
</div>