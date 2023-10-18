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
</head>

<body>
  <!-- header start -->
  <?php
  $totaltimeleft = $getUTPDet->totaltime - $getUTPDet->timetaken;
  ?>
  <input type="hidden" name="totaltesttime" id="totaltesttime" value="<?php echo $getUTPDet->totaltime; ?>" />
  <input type="hidden" name="totaltimetaken" id="totaltimetaken" value="<?php echo $getUTPDet->timetaken; ?>" />
  <input type="hidden" name="totaltimeleft" id="totaltimeleft" value="<?php echo $totaltimeleft; ?>" />
  <input type="hidden" name="timetaken" id="timetaken" value="<?php echo $getUTPQid->timetaken; ?>" />
  <?php include('includes/header-profile.php'); ?>
  <section class='score-page'>
    <div class='container'>
      <div class='row'>
        <div class="col-lg-12">
          <h2>Confirmation</h2>
        </div>
        <div class="col-lg-12">
          <table class="table">
            <thead class="top-th">
              <tr>
                <th scope="col" class='sec-start'><i class="fas fa-poll-h"></i>Section</th>
                <th scope="col">No. of questions</th>
                <th scope="col">Answered</th>
                <th scope="col">Not Answered</th>
                <th scope="col">Mark for review</th>
                <th scope="col">Not Visited</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $getExSub = mysqli_query($dbconn, "select * from examsubject where examid='" . $selTestPaper->examid . "'");
              if(mysqli_num_rows($getExSub)>0)
              {
                while ($getExSub1 = mysqli_fetch_object($getExSub)) {
                  echo '
                  <tr>
                    <th title="Section" scope="row">' . $getExSub1->subject . '</th>
                    <td title="No. of questions">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')")) . '
                    </td>
                    <td title="Answered" style="color: green">
                    ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='1' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')")) . '
                    </td>
                    <td title="Not Answered" style="color: red">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='4' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')")) . '
                    </td>
                    <td title="Mark for review" style="color: #F5871F">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and (qstatus='2' OR qstatus='3') and qid IN (select id from questions where subject='" . $getExSub1->subject . "')")) . '
                    </td>
                    <td title="Not Visited">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='0' and qid IN (select id from questions where subject='" . $getExSub1->subject . "')")) . '
                    </td>
                  </tr>
                ';
                }
              }
              else
              {
                $subList=array();
                $getQSub=mysqli_query($dbconn,"select DISTINCT subject from questions where id IN(select qid from testpques where refid='" . $_SESSION['seltpid'] . "')");
                while($getQSub1=mysqli_fetch_object($getQSub))
                {
                    array_push($subList,$getQSub1->subject);
                }
                if(sizeof($subList)>0)
                {
                  for($k=0;$k<sizeof($subList);$k++) {
                    echo '
                    <tr>
                      <th title="Section" scope="row">' . $subList[$k] . '</th>
                      <td title="No. of questions">
                        ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qid IN (select id from questions where subject='" . $subList[$k] . "')")) . '
                      </td>
                      <td title="Answered" style="color: green">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='1' and qid IN (select id from questions where subject='" . $subList[$k] . "')")) . '
                      </td>
                      <td title="Not Answered" style="color: red">
                        ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='4' and qid IN (select id from questions where subject='" . $subList[$k] . "')")) . '
                      </td>
                      <td title="Mark for review" style="color: #F5871F">
                        ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and (qstatus='2' OR qstatus='3') and qid IN (select id from questions where subject='" . $subList[$k] . "')")) . '
                      </td>
                      <td title="Not Visited">
                        ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='0' and qid IN (select id from questions where subject='" . $subList[$k] . "')")) . '
                      </td>
                    </tr>
                    ';
                  }
                }
                else
                {
                  echo '
                  <tr>
                    <th title="Section" scope="row">All Questions</th>
                    <td>
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "'")) . '
                    </td>
                    <td title="No. of questions" style="color: green">
                    ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='1'")) . '
                    </td>
                    <td title="Answered" style="color: red">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='4'")) . '
                    </td>
                    <td title="Not Answered" style="color: #F5871F">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and (qstatus='2' OR qstatus='3')")) . '
                    </td>
                    <td title="Mark for review">
                      ' . mysqli_num_rows(mysqli_query($dbconn, "select * from ".$tableName2." where refid='" . $_SESSION['utpid'] . "' and qstatus='0'")) . '
                    </td>
                  </tr>
                  ';
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
      <form action="submitConfirmation.php" method="post" id="scoreform">
        <div class="row">
          <div class='buttons-holder'>
            <a href='Start-test.php' class="save-next-1">Back</a>
            <a href='submitConfirmation.php' class="submit-pop" onclick="confirm_submit();">Submit Test</a>
            <?php
              if($_SESSION['trialTest']!='Yes')
              {
                ?><a href='javascript:void(0)' class="save-next-1 disabled-bt">Resume Test<i class="fas fa-angle-double-right" aria-hidden="true"></i></a><?php
              }
            ?>
          </div>
        </div>
      </form>
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
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/index.js"></script>
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