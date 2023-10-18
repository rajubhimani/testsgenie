<?php include('essentials/top.php'); ?>
<?php
if($_REQUEST['typeid']!='')
{
  if($_REQUEST['typeid']=='All')
  {
    $_SESSION['testtypeid']='';
  }
  else
  {
    $_SESSION['testtypeid']=$_REQUEST['typeid'];
  }
}
?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if ($_SESSION['menuvalno'] == '1') {
                echo 'menutoggle';
              } ?>">
  <?php include('includes/sidenav.php') ?>
  <div class='service-1 ' id='service4'>
    <div class='row tests-row-1'>
      <a href="score.php?typeid=All" class='test-category test-category1 <?php if ($_SESSION['testtypeid'] == '') {
                                                                            echo 'active';
                                                                          } ?>' id='test1'>All Tests</a>
      <?php
      $getTestTypeList = mysqli_query($dbconn, "select * from testtype where name IN (select testtype from testpaper where completed='Yes')");
      while ($getTestTypeList1 = mysqli_fetch_object($getTestTypeList)) {
        $activeClass = '';
        if ($_SESSION['testtypeid'] == $getTestTypeList1->id) {
          $activeClass = 'active';
        }
        echo '<a href="score.php?typeid=' . $getTestTypeList1->id . '" class="test-category test-category1 ' . $activeClass . '">' . $getTestTypeList1->name . '</a>';
      }
      ?>
    </div>
    <div class='test-2 active' id='test1'>
      <div class="">
        <?php
        $testIdCnd="";
        if($_SESSION['testtypeid']!='')
        {
            $getTestTypeNameDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from testtype where id='".$_SESSION['testtypeid']."'"));
            $testIdCnd="and tpid IN (select id from testpaper where testtype='".$getTestTypeNameDet->name."')";
        }
        $getUResults=mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."' and submitted='1' ".$testIdCnd." order by adate desc");
        if(mysqli_num_rows($getUResults)<=0)
        {
          echo '<p>There are no tests attended yet</p>';
        }
        else
        {
        ?>
        <table class="table table-1 score-table">
          <thead class="top-th">
            <tr>
              <th scope="col">Test Name</th>
              <th scope="col">Date & Time</th>
              <th scope="col">Your Score</th>
              <th scope="col">Max Score</th>
              <th scope="col">Detailed Analysis</th>
            </tr>
          </thead>
          <tbody>
            <?php
            while($getUResults1=mysqli_fetch_object($getUResults))
            {
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
              echo '
              <tr>
                <td title="Test Name">'.$uResTPDet->name.'</td>
                <td title="Date & Time">'.date('d-M-Y: g:i A',strtotime($getUResults1->adate)).'</td>
                <td title="Your Score">'.$finalScore.'</td>
                <td title="Max Score">'.$MaxScore.'</td>
                <td title="Detailed Analysis"><a href="score-detailed.php?utpid='.$getUResults1->id.'">click here</a></td>
              </tr>
              ';
            }
            ?>
          </tbody>
        </table>
        <?php
        }
        ?>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php') ?>