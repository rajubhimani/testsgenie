<?php include('essentials/top.php'); ?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if($_SESSION['menuvalno']=='1') { echo 'menutoggle'; } ?>">
<?php include('includes/sidenav.php') ?>
<div class='service-1 ' id='service6'>
   <div class='row coming-soon-row'>
     <h2>Coming Soon</h2>
     <?php
     $getUpdates=mysqli_query($dbconn,"select * from comingsoon where publish='Yes' order by id desc");
     while($getUpdates1=mysqli_fetch_object($getUpdates))
     {
      echo '
      <div class="col-12 coming-soon p-3">
        <div class="img-holder">
          <img src="../img/genie.png" style="max-width:100%">
        </div>
        <div class="text-holder">
          <h4>'.$getUpdates1->name.'</h4>
          <div class="other-det">
            <div>Total Questions: '.$getUpdates1->totalques.'</div>
            <div>Time allowed: '.$getUpdates1->timeallowed.'</div>
            <div>Supported Languages: '.$getUpdates1->slanguages.'</div>
          </div>
          <div>'.$getUpdates1->details.'</div>
        </div>
      </div>
      ';
     }
     ?>
   </div>
  </div>
<?php include('includes/footer.php') ?>