<?php include('essentials/top.php'); ?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if ($_SESSION['menuvalno'] == '1') {
                echo 'menutoggle';
              } ?>">
  <?php include('includes/sidenav.php') ?>
  <div class='service-1 ' id='service2'>
    <?php include('includes/form-msgs.php') ?>
    <div class='row profile-row'>
      <?php include('includes/edit-menu.php') ?>
      <div class='col-lg-9'>
        <div class='account-1 active'>
          <form action="subforms/uprofile.php?ftype=ChangePassword" method="post" name="regForm" onsubmit="return chkChangePassword()">
            <div class="row">
              <div class="col">
                <label for="l">Old Password</label>
                <input class="form-control" type="password" name="cpassword" id="cpassword" autocomplete="off">
                <div class="ferror" id="ferror1"></div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">New Password</label>
                <input class="form-control" type="password" name="rpassword" id="rpassword" autocomplete="off">
                <div class="ferror" id="ferror2"></div>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">Re-Enter Password</label>
                <input class="form-control" type="password" name="rcpassword" id="rcpassword" autocomplete="off">
                <div class="ferror" id="ferror3"></div>
              </div>
            </div>
            <div class='prof-btn'><button type="submit">Save</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php') ?>