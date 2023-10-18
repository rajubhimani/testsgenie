<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class='company-details'>
      <img src='../img/Testsgenie-02.png'>
    </div>
    <div class='profile'>
      <?php
        $uPicImgSrc='../img/user.jpg';
        if($uProfileDet->upic != '')
        {
          $uPicImgSrc='../upfile/'.$uProfileDet->upic.'';
        }
      ?>
      <img src='<?php echo $uPicImgSrc; ?>'>
      <h4><?php echo $uProfileDet->name; ?></h4>
      <p style='color:#818181;'>
      <?php
        if($_SESSION['uExPrfID']!='' && $_SESSION['uExPrfID']!='0')
        {
          echo $uExProfileDet->name;
        }
        else
        {
          echo 'All Profiles';
        }
      ?></p>
    </div>
    <h4><a href="javascript:void(0)"  onclick="showPopup('popup-2')">Switch Profile</a></h4>
    <?php
    $backToPage='../index.php';
    // if($_SESSION['crpage']!='')
    // {
    //   $backToPage='../'.$_SESSION['crpage'].'';
    // }
    ?>
    <h4><a href="<?php echo $backToPage; ?>" class="backtosite">
      <i class="fa fa-arrow-left" aria-hidden="true"></i>
      <span>Back to Home Page</span>
    </a></h4>
    <?php
    $menuTextArray=array('Dashboard','Profile','Tests','Score','Genie Update','Attempted Test','Exam Notifications','Ask Genie','Coming Soon');
    $menuIconArray=array('<i class="fas fa-chart-line"></i>','<i class="fas fa-user"></i>','<i class="fas fa-file-alt"></i>','<i class="fas fa-spinner"></i>',
    '<i class="fas fa-users"></i>','<i class="far fa-edit"></i>','<i class="fas fa-bell"></i>','<i class="fas fa-question"></i>','<i class="fas fa-ellipsis-h"></i>');
    $menuLinkArray=array('index.php','profile.php/change-password.php/educational.php','tests.php','score.php','updates.php','attemptedtest.php','examnotification.php','askgenie.php','comingsoon.php');
    for($i=0;$i<sizeof($menuTextArray);$i++)
    {
      $menuUrlArray=explode('/',$menuLinkArray[$i]);
      $activeClass='';
      $actionUrl='';
      for($j=0;$j<sizeof($menuUrlArray);$j++)
      {
        if($j==0)
        {
          $actionUrl=$menuUrlArray[$j];
        }
        if($_SESSION['crpage3']==$menuUrlArray[$j]) { $activeClass='active'; }
      }
      ?>
      <a class="service-title <?php echo $activeClass; ?>" href="<?php echo $actionUrl; ?>?submenuClicked=Yes">
      <?php echo $menuIconArray[$i] ?>
      <?php echo $menuTextArray[$i] ?>
      </a><?php
    }
    ?>
    <a class='user-logout' href='../subforms/logout.php'>
      <h4>Logout</h4>
    </a>
  </div>
  <div id="main">
    <button class="openbtn" onclick="openNav()">&#9776;</button>