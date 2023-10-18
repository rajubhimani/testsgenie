<?php include('essentials/top.php'); ?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if($_SESSION['menuvalno']=='1') { echo 'menutoggle'; } ?>">
<?php include('includes/sidenav.php') ?>
<div class='service-1 ' id='service6'>
   <div class='row genie-update-row'>
     <h2>Genie Update</h2>
     <?php
     function getDaysAgo($adate)
     {
      $seconds_ago = (time() - strtotime($adate));
      if ($seconds_ago >= 31536000) {
          return "" . intval($seconds_ago / 31536000) . "y";
      } elseif ($seconds_ago >= 2419200) {
          return "" . intval($seconds_ago / 2419200) . "m";
      } elseif ($seconds_ago >= 86400) {
          return "" . intval($seconds_ago / 86400) . "d";
      } elseif ($seconds_ago >= 3600) {
          return "" . intval($seconds_ago / 3600) . "h";
      } elseif ($seconds_ago >= 60) {
          return "" . intval($seconds_ago / 60) . "m";
      } else {
          return "1m";
      }
     }
     ?>
     <?php
     $getUpdates=mysqli_query($dbconn,"select * from updates where publish='Yes' order by id desc");
     while($getUpdates1=mysqli_fetch_object($getUpdates))
     {
      echo '
      <div class="col-12 genie-update-col p-3">
        <h4><img src="../img/genie.png" style="max-width:100%">'.$getUpdates1->name.'<span>'.getDaysAgo($getUpdates1->adate).'</span></h4>
        <div class="update-images"><img src="../upfile/'.$getUpdates1->eimg.'"></div>
        <div>'.$getUpdates1->details.'</div>
      </div>
      ';
     }
     ?>
   </div>
  </div>
<?php include('includes/footer.php') ?>