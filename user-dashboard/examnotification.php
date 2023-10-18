<?php include('essentials/top.php'); ?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if ($_SESSION['menuvalno'] == '1') {
                echo 'menutoggle';
              } ?>">
  <?php include('includes/sidenav.php') ?>
  <div class='service-1 ' id='service8'>
    <h2>Exam Notifications</h2>
    <div class='row exam-notification-row'>
      <div class="each-exam-notify">
        <div class='examm'>
          <img src='../img/ssc.png'>
        </div>
        <div>
          <p><b>SSC Exams</b></p>
          <p><a href='../exam-SSC-CGL.php'>SSC CGL</a></p>
          <p><a href='../exam-SSC-CGL-Tier-1.php'>SSC CHSL Tier -1 </a></p>
          <p><a href='../exam-SSC-MTS.php'>SSC MTS</a></p>

        </div>
      </div>
      <div class="each-exam-notify">
        <div class='examm'>
          <img src='../img/E-1 (3).jpg'>
        </div>
        <div>
          <p><b>Banking Exams</b></p>
          <p><a href='../IBPS_Clerk.php'>IBPS Clerk </a></p>
          <p><a href='../IBPS_PO.php'>IBPS PO</a></p>
          <p><a href='../exam-SBI-Clerk-Tier-2.php'>SBI Clerk Tier 2 </a></p>
        </div>
      </div>
      <div class="each-exam-notify">
        <div class='examm'>
          <img src='../img/railway-1.png'>
        </div>
        <div>
          <p><b>Railway</b></p>
          <p><a href='../exam-Railways-Group-D.php'>Railways Group D</a></p>
          <p><a href='../exam-NTPC-Graduate-Level.php'>NTPC Graduate Level</a></p>
          <p><a href='../exam-NTPC-Matric-Level.php'>NTPC Matric Level</a></p>
        </div>
      </div>
      <div class="each-exam-notify">
        <div class='examm'>
          <img src='../img/army.png'>
        </div>
        <div>
          <p><b>Army</b></p>
          <p><a href='../exam-NDA.php'>NDA</a></p>
          <p><a href='../exam-CDS.php'>CDS</a></p>
        </div>
      </div>
    </div>
    <?php include('includes/footer.php') ?>