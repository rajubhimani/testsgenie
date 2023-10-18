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
$testTypeCnd1="";
$testTypeCnd2="";
if($_SESSION['testtypeid']!='')
{
  $getTestTypeName=mysqli_fetch_object(mysqli_query($dbconn,"select * from testtype where id='".$_SESSION['testtypeid']."'"));
  $testTypeName=$getTestTypeName->name;
  $testID=$_SESSION['testtypeid'];
  $testTypeCnd1="and testtype='".$testTypeName."'";
  $testTypeCnd2="and tpid IN (select id from testpaper where testtype='".$testTypeName."')";
}
else
{
  $testTypeName='All Tests';
  $testID='0';
}
$exPrfCnd="and examid IN (select id from exam where expid='".$_SESSION['uExPrfID']."')";
$testsCountNo=mysqli_num_rows(mysqli_query($dbconn,"select * from testpaper where completed='Yes' ".$exPrfCnd." ".$testTypeCnd1.""));
$utestsCountNo=mysqli_num_rows(mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."' and submitted='1' ".$testTypeCnd2.""));
if($utestsCountNo>$testsCountNo)
{
  $utestsCountNo=$testsCountNo;
}
$testPerc=round(($utestsCountNo/$testsCountNo)*100);
if($_REQUEST['viewType']!='')
{
  $_SESSION['viewType']=$_REQUEST['viewType'];
}
?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if($_SESSION['menuvalno']=='1') { echo 'menutoggle'; } ?>" onload="loadMoreTestsAttempted('<?php echo $testID; ?>')">
<input type="hidden" name="offsetno" id="offsetno" value="10"/>
<input type="hidden" name="testcount" id="testcount" value="<?php echo $testsCountNo; ?>"/>
<?php include('includes/sidenav.php') ?>
<div class='service-1 ' id='service3'>
     <div class='row tests-row-1'>
        <a href="attemptedtest.php?typeid=All" class='test-category test-category1 <?php if($_SESSION['testtypeid']=='') { echo 'active'; } ?>'id='test1'>All Tests</a>
        <?php
        $getTestTypeList=mysqli_query($dbconn,"select * from testtype where name IN (select testtype from testpaper where completed='Yes')");
        while($getTestTypeList1=mysqli_fetch_object($getTestTypeList))
        {
          $activeClass='';
          if($_SESSION['testtypeid']==$getTestTypeList1->id) { $activeClass='active'; }
          echo '<a href="attemptedtest.php?typeid='.$getTestTypeList1->id.'" class="test-category test-category1 '.$activeClass.'">'.$getTestTypeList1->name.'</a>';
        }
        ?>
    </div>
   <div class='test-1  active'id='test1'>
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
              <h4><b>Attempted <?php echo $testTypeName; ?></b></h4>
            </div>
            <div class="card-view-wrapper">
              <div class="card-views">
                <a href="attemptedtest.php?viewType=Card" <?php if($_SESSION['viewType'] == 'Card' || $_SESSION['viewType'] == '') { echo 'class="active"'; } ?>>Card View</a>
                <a href="attemptedtest.php?viewType=List" <?php if($_SESSION['viewType'] == 'List') { echo 'class="active"'; } ?>>List View</a>
              </div>
            </div>
            <!-- <div class="progress">
              <div class="progress-bar" style="width:<?php echo $testPerc; ?>%"></div>
            </div> -->
          </div>
      </div>
      <div class="test-outer <?php if($_SESSION['viewType'] == 'List') { echo 'list-view'; } ?>">
        <div class='test-cont' id="testsDataWrapper">
        </div>
      </div>
      <div class="tests-loadmore" style="display:none">
        <button class="loadmore" onclick="loadMoreTestsAttempted('<?php echo $testID; ?>')" id="myBtn">Load More</button>
        <button class="loading" onclick="loadMoreTestsAttempted('<?php echo $testID; ?>')" id="myBtn">Loading ...</button>
      </div>
   </div>
 </div>
<?php include('includes/footer.php') ?>