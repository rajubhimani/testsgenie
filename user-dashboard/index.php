<?php include('essentials/top.php'); ?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if($_SESSION['menuvalno']=='1') { echo 'menutoggle'; } ?>">
  <?php include('includes/sidenav.php') ?>
  <div class='service-1 active' id='service1'>
    <div class='top-content'>
      <div style='display: flex;'>
        <?php
          $uPicImgSrc='../img/user.jpg';
          if($uProfileDet->upic != '')
          {
            $uPicImgSrc='../upfile/'.$uProfileDet->upic.'';
          }
        ?>
        <img src='<?php echo $uPicImgSrc; ?>'>
        <h1>Welcome Back, <?php echo $uProfileDet->name; ?></h1>
      </div>
      <?php
      $gNewTestCount=mysqli_num_rows(mysqli_query($dbconn,"select * from testpaper where completed='Yes' and adate>'".$gLastLoginDet->adate."'"));
      ?>
      <p style='color:#818181;padding-left: 60px;'><i class="fas fa-bell"></i>You have <?php echo $gNewTestCount; ?> test added since you last login</p>
    </div>
    <?php include('includes/home-top.php') ?>
    <div class='garph'>
      <div class='graph-box graph-1'>
      <div id="chartContainer1" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
        <h4>Your Score over last 7 exams</h4>
        <!-- <p><i class="fas fa-long-arrow-alt-up"></i> 55% improved in last one week</p>
        <hr>
        <p><i class="far fa-clock"></i> Updated 4 min ago</p> -->
      </div>
      <div class='graph-box graph-1'>
        <div id="chartContainer2" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
        <script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
        <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
        <h4>Your time spent over last 7 exams</h4>
        <!-- <p><i class="fas fa-long-arrow-alt-up"></i> 55% improved in last one week</p>
        <hr>
        <p><i class="far fa-clock"></i> Updated 4 min ago</p> -->
      </div>
      <?php include('includes/home-graph3.php') ?>
    </div>
    <div class='recent-update'>
      <div class='recent-box'>
        <h2>Recently Added Tests</h2>
        <?php
          include('includes/home-recently-added.php')
        ?>
      </div>
      <div class='recent-box'>
        <h2>Recently Added Tests</h2>
        <?php
          $offsetValue='OFFSET 4';
          include('includes/home-recently-added.php')
        ?>
      </div>
    </div>
  </div>
    <?php include('includes/footer.php') ?>