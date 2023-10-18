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
          <form action="subforms/uprofile.php?ftype=UpdateProfile" method="post" enctype="multipart/form-data">
            <div class='profile-pic-wrapper'>
              <div class="prof-img">
                <?php
                  $uPicImgSrc='../img/user.jpg';
                  if($uProfileDet->upic != '')
                  {
                    $uPicImgSrc='../upfile/'.$uProfileDet->upic.'';
                  }
                ?>
                <img id="uprpic" src='<?php echo $uPicImgSrc; ?>'>
              </div>
              <div class='prof-btn'>
                <a href='javascript:void(0)' id="changepic">Change Profile Picture</a>
                <input type="file" id="upic" name="upic" onchange="previewFile()" accept="image/*" style="display:none">
              </div>
              <div class='prof-btn'>
                <a href='subforms/uprofile.php?ftype=RemoveProfilePic' class='rem-btn'>Remove</a>
                <input type="hidden" name="clearPic" id="clearPic" value=""/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="">Full Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your Full Name" value="<?php echo $uProfileDet->name; ?>">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">Email Address</label>
                <input type="email" class="form-control" placeholder="Enter your email" value="<?php echo $uProfileDet->email; ?>" style="cursor:not-allowed" disabled>
              </div>
              <div class="col">
                <label for="">Date of Birth</label>
                <input type="Date" name="dob" class="form-control" placeholder="Enter your Date of birth" value="<?php echo $uProfileDet->dob; ?>">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">Phone Number</label>
                <input type="number" name="phone" class="form-control" placeholder="Enter your phone number" value="<?php echo $uProfileDet->phone; ?>">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="">Address</label>
                <textarea type="text" name="address" class="form-control" placeholder="Enter your Address"><?php echo $uProfileDet->address; ?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="">City</label>
                <input type="text" name="city" class="form-control" placeholder="Enter your City" value="<?php echo $uProfileDet->city; ?>">
              </div>
              <div class="col">
                <label for="l">Pin</label>
                <input type="number" name="pincode" class="form-control" placeholder="Enter your pin" value="<?php echo $uProfileDet->pincode; ?>">
              </div>
            </div>
            <div class='prof-btn'><button type="submit">Save</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php') ?>