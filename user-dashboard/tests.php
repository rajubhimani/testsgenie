<?php include('essentials/top.php'); ?>
<?php
if ($_REQUEST['typeid'] != '') {
  if ($_REQUEST['typeid'] == 'All') {
    $_SESSION['testtypeid'] = '';
  } else {
    $_SESSION['testtypeid'] = $_REQUEST['typeid'];
  }
}

if($_REQUEST['submenuClicked']=='Yes')
{
  $_SESSION['flsubject']='';
  $_SESSION['flsubsubject']='';
  $_SESSION['fltopic']='';
  $_SESSION['viewType']='';
}
if($_REQUEST['filterSubmit']=='Yes')
{
  $_SESSION['flsubject']=$_REQUEST['subject'];
  $_SESSION['flsubsubject']=$_REQUEST['subsubject'];
  $_SESSION['fltopic']=$_REQUEST['topic'];
}
if($_REQUEST['viewType']!='')
{
  $_SESSION['viewType']=$_REQUEST['viewType'];
}

$testTypeCnd1 = "";
$testTypeCnd2 = "";
if ($_SESSION['testtypeid'] != '') {
  $getTestTypeName = mysqli_fetch_object(mysqli_query($dbconn, "select * from testtype where id='" . $_SESSION['testtypeid'] . "'"));
  $testTypeName = $getTestTypeName->name;
  $testID = $_SESSION['testtypeid'];
  $testTypeCnd1 = "and testtype='" . $testTypeName . "'";
  $testTypeCnd2 = "and tpid IN (select id from testpaper where testtype='" . $testTypeName . "')";
} else {
  $testTypeName = 'All Tests';
  $testID = '0';
}

$filterSubCnd='';
$filterSubCndArray=array();
if($_SESSION['flsubject']!='')
{
    array_push($filterSubCndArray,"subject='".$_SESSION['flsubject']."'");
}
if($_SESSION['flsubsubject']!='')
{
    array_push($filterSubCndArray,"subsubject='".$_SESSION['flsubsubject']."'");
}
if($_SESSION['fltopic']!='')
{
    array_push($filterSubCndArray,"topic='".$_SESSION['fltopic']."'");
}
for($i=0;$i<sizeof($filterSubCndArray);$i++)
{
    if($i==0)
    {
        $filterSubCnd="where ".$filterSubCndArray[$i]."";
    }
    else
    {
        $filterSubCnd="".$filterSubCnd." and ".$filterSubCndArray[$i]."";
    }

}
$filterCnd='';
if($_SESSION['flsubject']!='' || $_SESSION['flsubsubject']!='' || $_SESSION['fltopic']!='')
{
    $filterCnd="".$filterCnd." and id IN (select refid from testpques where qid IN (select id from questions ".$filterSubCnd."))";
}

$exPrfCnd='';
if($_SESSION['uExPrfID']!='' && $_SESSION['uExPrfID']!='0')
{
  $exPrfCnd = "and examid IN (select id from exam where expid='" . $_SESSION['uExPrfID'] . "')";
}

$testsCountNo = mysqli_num_rows(mysqli_query($dbconn, "select * from testpaper where completed='Yes' " . $exPrfCnd . " " . $testTypeCnd1 . " ".$filterCnd.""));
$utestsCountNo = mysqli_num_rows(mysqli_query($dbconn, "select * from utestpaper where uid='" . $_SESSION['uid'] . "' and submitted='1' " . $testTypeCnd2 . ""));
if ($utestsCountNo > $testsCountNo) {
  $utestsCountNo = $testsCountNo;
}
$testPerc = round(($utestsCountNo / $testsCountNo) * 100);
?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if ($_SESSION['menuvalno'] == '1') {
                echo 'menutoggle';
              } ?>" onload="loadMoreTests('<?php echo $testID; ?>')">
  <input type="hidden" name="offsetno" id="offsetno" value="10" />
  <input type="hidden" name="testcount" id="testcount" value="<?php echo $testsCountNo; ?>" />
  <?php include('includes/sidenav.php') ?>
  <div class='service-1 ' id='service3'>
    <div class='row tests-row-1'>
      <a href="tests.php?typeid=All" class='test-category test-category1
      <?php if ($_SESSION['testtypeid'] == '') { echo 'active'; } ?>' id='test1'>All Tests</a>
      <?php
      $getTestTypeList = mysqli_query($dbconn, "select * from testtype where name IN (select testtype from testpaper where completed='Yes')");
      while ($getTestTypeList1 = mysqli_fetch_object($getTestTypeList)) {
        $activeClass = '';
        if ($_SESSION['testtypeid'] == $getTestTypeList1->id) {
          $activeClass = 'active';
        }
        echo '<a href="tests.php?typeid=' . $getTestTypeList1->id . '" class="test-category test-category1 ' . $activeClass . '">' . $getTestTypeList1->name . '</a>';
      }
      ?>
    </div>
    <div class='test-1  active' id='test1'>
      <!-- <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div> -->
      <div class='row'>
        <div class='col-12'>
          <div class=' test-bar'>
            <h4><b><?php echo $testTypeName; ?></b></h4>
            <p>Completed <b>
                <?php
                echo $utestsCountNo;
                ?>
              </b>/<?php echo $testsCountNo; ?></p>
          </div>
          <div class="progress">
            <div class="progress-bar" style="width:<?php echo $testPerc; ?>%"></div>
          </div>
        </div>
      </div>
      <?php
      $chkTestNameForTopic=0;
      if($_SESSION['testtypeid']!='')
      {
        $chkTestNameForTopic=mysqli_num_rows(mysqli_query($dbconn,"select * from testtype where id='".$_SESSION['testtypeid']."' and name LIKE '%Topic%'"));
      }
      if($_SESSION['testtypeid']=='' || $chkTestNameForTopic>0)
      {
        include('includes/test-filter.php');
      }
      ?>
      <div class="card-view-wrapper">
        <div class="card-views">
          <a href="tests.php?viewType=Card" <?php if($_SESSION['viewType'] == 'Card' || $_SESSION['viewType'] == '') { echo 'class="active"'; } ?>>Card View</a>
          <a href="tests.php?viewType=List" <?php if($_SESSION['viewType'] == 'List') { echo 'class="active"'; } ?>>List View</a>
        </div>
      </div>
      <div class="test-outer <?php if($_SESSION['viewType'] == 'List') { echo 'list-view'; } ?>">
        <div class='test-cont' id="testsDataWrapper">
        </div>
      </div>
      <div class="tests-loadmore">
        <button class="loadmore" onclick="loadMoreTests('<?php echo $testID; ?>')" id="myBtn">Load More</button>
        <button class="loading" onclick="loadMoreTests('<?php echo $testID; ?>')" id="myBtn">Loading ...</button>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php') ?>