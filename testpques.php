<?php
$tname = "testpques";
$pageid = "Question";
include("includes/header.php");
$sNo = 0;
if ($_REQUEST['tpid'] != '') {
    $_SESSION['tpid'] = $_REQUEST['tpid'];
}
$testPaperDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from testpaper where id='" . $_SESSION['tpid'] . "'"));
$testExamDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from exam where id='" . $testPaperDet->examid . "'"));
if ($testPaperDet->completed != 'Yes') {
    $pbTxt = '<span class="not-active">No</span>';
} else {
    $pbTxt = '<span class="active">Yes</span>';
}
$breadcrumbs1 = array('Test Paper');
$breadcrumbs2 = array('testpaper.php');
$currentPage = 'Questions';
$filterField3 = array('questions.question', 'questions.answer', 'questions.subject', 'questions.subsubject', 'questions.topic', 'questions.qcomplexity');
$headerName = array('Question Description', 'Subject', 'Sub Subject', 'Topic', 'Complexity Level');
$headerName1 = array('questions.question', 'questions.answer', 'questions.subject', 'questions.subsubject', 'questions.topic', 'questions.qcomplexity', 'questions.isactive');
?>
<main>
    <section class="adminpage">
        <div class="fullwrapper">
            <div class="adminpage-inner">
                <div id="tabs">
                    <?php include('includes/leftmenu.php'); ?>
                    <div class="content">
                        <?php
                        include('includes/form-msgs.php');
                        include('includes/breadcrumbs.php');
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h3><a href="testpaper.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i></a><span>Selected Test Paper</span></h3>
                            </div>
                            <div class="table-wrapper">
                                <div class="table">
                                    <div class="row header-row">

                                        <div>
                                            <a class="" href="javascript:void(0)" style="cursor:default;">
                                                <span>Test Paper</span>
                                            </a>
                                        </div>

                                        <div>
                                            <a class="" href="javascript:void(0)" style="cursor:default;">
                                                <span>Exam</span>
                                            </a>
                                        </div>

                                        <div>
                                            <a class="" href="javascript:void(0)" style="cursor:default;">
                                                <span>Test Type</span>
                                            </a>
                                        </div>

                                        <div>
                                            <a class="" href="javascript:void(0)" style="cursor:default;">
                                                <span>Start Date Time</span>
                                            </a>
                                        </div>

                                        <div>
                                            <a class="" href="javascript:void(0)" style="cursor:default;">
                                                <span>End Date Time</span>
                                            </a>
                                        </div>

                                        <div>
                                            <a class="" href="javascript:void(0)" style="cursor:default;">
                                                <span>Question Add Method</span>
                                            </a>
                                        </div>
                                        <div>
                                            <a class="" href="javascript:void(0)" style="cursor:default;">
                                                <span>Publish</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div><?php echo $testPaperDet->name; ?></div>
                                        <div><?php echo $testExamDet->name; ?></div>
                                        <div><?php echo $testPaperDet->testtype; ?></div>
                                        <div><?php echo $testPaperDet->sdate; ?> <?php echo $testPaperDet->stime; ?></div>
                                        <div><?php echo $testPaperDet->edate; ?> <?php echo $testPaperDet->etime; ?></div>
                                        <div><?php echo $testPaperDet->qaddmethod; ?></div>
                                        <div><?php echo $pbTxt; ?></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h3><?php echo $testPaperDet->name; ?> - <?php echo $pageid ?> List</h3>
                                <div class="action-bar">
                                <?php
                                $chkQues = mysqli_num_rows(mysqli_query($dbconn, "select * from testpques where refid='" . $_SESSION['tpid'] . "'"));
                                if($chkQues>0 && $testPaperDet->completed!='Yes')
                                {
                                    echo '
                                        <a href="subforms/' . $tname . '.php?ftype=Completed" class="add">
                                            <i class="fa fa-upload" aria-hidden="true"></i>
                                            Publish
                                        </a>
                                    ';
                                }
                                ?>
                                    <a href="testpques-preview.php?tpqid=<?php echo $_SESSION['tpid']; ?>" class="add" target="_blank">
                                        <i class="fa fa-eye" aria-hidden="true"></i>Preview
                                    </a>
                                <?php
                                $noFilter = 'Yes';
                                include('includes/table-filter.php');
                                if($testExamDet->ispyear=='Yes')
                                {
                                    if ($chkQues <= 0) {
                                        echo '
                                            <a href="subforms/' . $tname . '.php?ftype=AddPrevYear" class="add">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                                Add Prev Year Questions
                                            </a>
                                        ';
                                    }
                                }
                                else
                                {
                                    if ($testPaperDet->qaddmethod == 'Manually') {
                                        if ($chkQues > 0) {
                                            echo '
                                                <a href="' . $tname . '-edit.php" class="add">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    Edit Manually</a>
                                            ';
                                        } else {

                                            echo '
                                                <a href="' . $tname . '-edit.php" class="add">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                    Add Manually</a>
                                            ';
                                        }
                                    } else {
                                        if ($chkQues <= 0) {
                                            echo '
                                                <a href="subforms/' . $tname . '.php?ftype=AddAutomatically" class="add">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                    Add Automatically</a>
                                            ';
                                        } else {
                                            echo '
                                                <a href="' . $tname . '-edit.php" class="add">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    Edit Manually</a>
                                            ';
                                        }
                                    }
                                }
                                ?>
                                </div>
                            </div>
                            <div class="table-wrapper">
                                <div class="table">
                                    <div class="row header-row">
                                        <?php
                                        $notSortable = 'Yes';
                                        $sortByText = 'order by testpques.ordno asc,testpques.gordno asc,testpques.qid asc';
                                        include('includes/header-table.php');
                                        ?>
                                        <div>Action</div>
                                    </div>
                                    <?php
                                    $joinText = 'LEFT JOIN questions
                                    ON questions.id = testpques.qid';
                                    $extCnd = "and testpques.refid='" . $_SESSION['tpid'] . "'";
                                    $noPagination = 'Yes';
                                    include('includes/sort-table.php');
                                    $getData = mysqli_query($dbconn, $tableQueryWithLimit);
                                    while ($getData1 = mysqli_fetch_object($getData)) {
                                        $sNo++;
                                        if ($testPaperDet->qaddmethod == 'Manually') {
                                            $btnText = '<a href="subforms/' . $tname . '.php?ftype=makeActive&id=' . $getData1->id . '" class="btn btn-default btn-green"><i class="fa fa-check" aria-hidden="true"></i></a>';
                                        }
                                        $quesTxt = '';
                                        $getQues = mysqli_query($dbconn, "select * from quesdet where refid='" . $getData1->id . "' and dtype='Questions' order by id asc");
                                        while ($getQues1 = mysqli_fetch_object($getQues)) {
                                            $qDetTxt = strip_tags($getQues1->details);
                                            $qDetTxtFull = strip_tags($getQues1->details);
                                            if (strlen($qDetTxt) > 200) {
                                                $qDetTxt = '' . substr(strip_tags($getQues1->details), 0, 200) . ' ... <br/><a href="javascript:void(0)" class="read-more" data-id="qdet-' . $getQues1->id . '" data-target="qdet-' . $getQues1->id . '-full">Readmore ...</a>';
                                                $qDetTxtFull = '' . strip_tags($getQues1->details) . ' <br/><a href="javascript:void(0)" class="read-more" data-id="qdet-' . $getQues1->id . '-full" data-target="qdet-' . $getQues1->id . '">Readless ..</a>';
                                            }
                                            $quesTxt = '' . $quesTxt . '
                                            <div><strong>' . $getQues1->lang . '</strong></div>
                                            <div id="qdet-' . $getQues1->id . '">' . $qDetTxt . '</div>
                                            <div id="qdet-' . $getQues1->id . '-full" style="display:none">' . $qDetTxtFull . '</div>
                                            ';
                                        }
                                        $ansTxt = '';
                                        $getQues = mysqli_query($dbconn, "select * from quesdet where refid='" . $getData1->id . "' and dtype='Options' and ordno='" . $getData1->coption . "' order by id asc");
                                        while ($getQues1 = mysqli_fetch_object($getQues)) {
                                            $ansTxt = '' . $ansTxt . '
                                            <div><strong>' . $getQues1->lang . '</strong></div>
                                            <div>' . strip_tags($getQues1->details) . '</div>
                                            ';
                                        }
                                        $qUpNo = $getData1->ordno + 1;
                                        $qDownNo = $getData1->ordno - 1;
                                        $upDownActions='
                                            <a href="subforms/' . $tname . '.php?qid=' . $getData1->tid . '&ftype=ordNoUp&curOrdNo=' . $getData1->ordno . '" class="btn btn-default"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                                            <a href="subforms/' . $tname . '.php?qid=' . $getData1->tid . '&ftype=ordNoDown&curOrdNo=' . $getData1->ordno . '" class="btn btn-default btn-grey"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                                        ';
                                        if($getData1->ordno==$oldOrdNo && $getData1->qgid==$oldQgid)
                                        {
                                            $upDownActions='';
                                        }
                                        echo '
                                        <div class="row">
                                            <div>' . $quesTxt . '</div>
                                            <div class="tques-td">' . $getData1->subject . '</div>
                                            <div class="tques-td">' . $getData1->subsubject . '</div>
                                            <div class="tques-td">' . $getData1->topic . '</div>
                                            <div class="tques-td">' . $getData1->qcomplexity . '</div>
                                            <div class="button-holder">
                                                '.$upDownActions.'
                                            </div>
                                        </div>
                                        ';
                                        $oldOrdNo=$getData1->ordno;
                                        $oldQgid=$getData1->qgid;
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                            //include("includes/pagination.php");
                            ?>
                        </div>
                    </div>
                    <?php
                    include("includes/footer-inner.php");
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include("includes/footer.php");
?>
<?php include('admin/config/dbclose.php') ?>