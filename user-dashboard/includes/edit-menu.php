<div class='col-lg-3 acct-sidebar'>
<a href="profile.php?submenuClicked=Yes" class='account-title <?php if($_SESSION['crpage3']=='profile.php') { echo 'active'; } ?>'><i class="fas fa-user"></i> Edit Profile</a>
<a href="change-password.php?submenuClicked=Yes" class='account-title <?php if($_SESSION['crpage3']=='change-password.php') { echo 'active'; } ?>'><i class="fas fa-lock"></i> Change Password</a>
<a href="educational.php?submenuClicked=Yes" class='account-title <?php if($_SESSION['crpage3']=='educational.php') { echo 'active'; } ?>'><i class="fas fa-folder-minus"></i>Educational Qualification</a>
<a href="examprofile.php?submenuClicked=Yes" class='account-title <?php if($_SESSION['crpage3']=='examprofile.php') { echo 'active'; } ?>'><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Exam Profile</a>
</div>