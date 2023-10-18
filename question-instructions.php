<?php
include('essentials/top.php');
if($_SESSION['trialTest']=='Yes')
{
  $tableName1='utestpapertrial';
  $tableName2='utpquestrial';
}
else
{
  $tableName1='utestpaper';
  $tableName2='utpques';
}
if ($_SESSION['utpid'] == '') {
    header('location:index.php');
} else {
    $getUTPDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from ".$tableName1." where id='" . $_SESSION['utpid'] . "'"));
    if ($getUTPDet->paused == '1') {
        mysqli_fetch_object(mysqli_query($dbconn, "update ".$tableName1." set paused='0' where id='" . $_SESSION['utpid'] . "'"));
    }
    $getUTPQNo = mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "'"));
    $getUTPQid = mysqli_fetch_object(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qno='" . $getUTPDet->cqno . "'"));
    $getQsDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from questions where id='" . $getUTPQid->qid . "'"));
}
?>
<!DOCTYPE html>
<html>

<head>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-207281095-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-207281095-2');
</script>
<!-- <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
  <meta http-equiv="pragma" content="no-cache" /> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TestsGenie</title>
    <link rel="shortcut icon" href="img/android-icon-72x72.png" />
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
    <!--  Google fonts -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <!-- css stylesheets -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link type="text/css" rel="stylesheet" href="flaviusmatis/simplePagination.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body class="loading">
    <div class="loading-screen">
        <div class="lds-grid">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- header start -->
    <?php include('includes/header-profile.php'); ?>
    <section class='start-test-page'>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-9 quespaper-page'>
                    <h2>Instructions</h2>
                    <?php
                    $totaltimeleft = $getUTPDet->totaltime - $getUTPDet->timetaken;
                    ?>
                    <input type="hidden" name="totaltesttime" id="totaltesttime" value="<?php echo $getUTPDet->totaltime; ?>" />
                    <input type="hidden" name="totaltimetaken" id="totaltimetaken" value="<?php echo $getUTPDet->timetaken; ?>" />
                    <input type="hidden" name="totaltimeleft" id="totaltimeleft" value="<?php echo $totaltimeleft; ?>" />
                    <input type="hidden" name="timetaken" id="timetaken" value="<?php echo $getUTPQid->timetaken; ?>" />
                    <div class='menu-test-1'>
                        <div class='row spec-box '>
                            <!-- 	<div class=''> -->
                            <p><b>Duration : <?php echo $selTpExam->eduration ?> Mins</b></p>
                            <p class='mark-p'><b>Maximum Marks : <?php echo $selTpExam->tmark ?></b></p>
                            <?php
                            echo $selTestPaper->details;
                            ?>
                            <!-- <div class='inst-box '> -->
                            <p>READ VERY VERY CAREFULLY, DO NOT IGNORE ANY INFORMATION- (We observed that- Many students are not serious with their course, exams, assignments and instructions etc.)</p>
                            <!-- 	<p>Appear for exam between 12 pm to 1 pm - Exam Portal will be Activated at 12 PM and Closed at 1 PM (IST) Total One Hour. All mentioned times are Indian Standard Times - You can check current Indian Time from- http://www.worldtimeserver.com/current_time_in_IN.aspx Appear for exam between 12 pm to 1 pm. Exam Portal will closed at sharp 1 PM.</p><p> After closing of exam portal last few minutes will be provided only for verification of submissions, reading emails, checking messages, applying for mark sheet and confirming results etc. We will not be responsible for any lack of time and its losses. Student must keep track of time on own responsibility, as no clock or time notification is provided on our exam portal. Keep provided additional time strictly reserved for verification, confirmations and problem resolution. Entire exam requires only half hour / 30 minutes, so do not appear late.</p> -->
                            <p>EXTRA EXAM ATTEMPT WILL NOT BE PROVIDED IF,-</p>
                            <p>1) Students fail to appear for exam within specified timings. <br>2) Student do not appear for both the papers.<br> 3) Student appear for exam late / face lack of time.<br> 4) Student ignores instructions and rules. <br>5) Student who do not keep backup of answers.<br> 6) Student submit short answers or short assignments (Plagiarism : Student copy answers from books, ebooks, external sources or internet etc.) or who receives less score as mentioned below. <br>7) Student do not submit details from www.dlc.co.in/form/ifs-29.aspx after appearing for both the papers. <br>8) Student face internet of power failure problems.<br> 9) Un-necessary communications / Arguments, or plagiarism against management decisions. </p>
                            <p>Per day late fee of Rs. 50 / 1 USD is applicable as fine. No any concession or flexibility will be provided to any late fee. Entire calculated late fee will be final. Any suspended account will be charged 1200 Rs. / 50 USD for re-activation extra along with above mentioned per day late fee, up to date of your payment of entire fee + late fee etc. </p>
                            <p>Per day late fee of Rs. 50 / 1 USD is applicable as fine. No any concession or flexibility will be provided to any late fee. Entire calculated late fee will be final. Any suspended account will be charged 1200 Rs. / 50 USD for re-activation extra along with above mentioned per day late fee, up to date of your payment of entire fee + late fee etc. </p>
                            <!-- 		</div> -->
                            <!-- 		</div> -->
                            <!-- 	<br><span class='para-spec-1'></span> -->
                        </div>
                    </div>
                </div>
                <div class='col-lg-3 quest-sec'>
                    <div class='row test-sec-row-1'>
                    <?php
                    if($_SESSION['trialTest']!='Yes')
                    {
                        ?><div class='col-lg-12'><a href='pause.php' class='Top-btn' id="1" style="margin-right:10px;">Pause</a></div><?php
                    }
                    ?>
                    </div>
                    <?php include('p-includes/question-numbers.php'); ?>
                    <div class='test-sec-row-4'>
                        <div class='col-lg-6'>
                            <a href='quespaper.php' class='quespaper'>Question paper</a>
                        </div>
                        <div class='col-lg-6'>
                        <a href='question-instructions.php' class='Instruction1'>Instruction</a>
                        </div>
                    </div>
                    <div class='test-sec-row-5'>
                        <a href='anwersReview.php' class='review-pop'>Review Answers</a>
                    </div>
                    <div class='test-sec-row-6'>
                        <a href='score.php' class='submit-pop' id="2" onClick="reply_click(this.id)">Submit Test</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include('includes/footer-inner.php'); ?>
    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
    <!--  Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript" src="flaviusmatis/jquery.js"></script>
    <script type="text/javascript" src="flaviusmatis/jquery.simplePagination.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/index-testpaper.js"></script>
    <script src="js/testpaper.js"></script>
    <script>
        $(document).ready(function() {
            var timetaken = <?php echo $getUTPQid->timetaken; ?>;
            var interval = setInterval(function() {
                var totaltimetaken = $('#totaltimetaken').val();
                saveTimer1(totaltimetaken)
            }, 1000);
        });

        function convert(value) {
            return "<span>" + Math.floor(value / 60) + "</span> : <span>" + (value % 60 ? value % 60 : '00' + "</span>")
        }
    </script>
</body>
</html>
<?php include('admin/config/dbclose.php') ?>