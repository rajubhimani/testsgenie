<?php include('essentials/top.php'); ?>
<!DOCTYPE html>
<html>

<?php include('includes/head-tags.php') ?>

<body class="<?php if($_SESSION['menuvalno']=='1') { echo 'menutoggle'; } ?>">
<?php include('includes/sidenav.php') ?>
<div class='service-1 contcct' id='service9'>
<?php include('includes/form-msgs.php') ?>
    <h2>Ask Genie</h2>
    <form action='subforms/askgenie.php'class='ask-form' method='post'>
          <div class="row contact-input-row">
            <div class="col">
              <input type="text" class="form-control" name='fname' placeholder="Full name" value="<?php echo $uProfileDet->name; ?>" required>
            </div>
          </div>
           <div class="row contact-input-row">
            <div class="col">
              <input type="email"  name="email"  class="form-control" placeholder="email" value="<?php echo $uProfileDet->email; ?>"  required>
            </div>
            <div class="col">
              <input type="text"  name="phone"  class="form-control" placeholder="Phone Number" value="<?php echo $uProfileDet->phone; ?>"  required>
            </div>
          </div>
            <div class="form-group">
              <textarea required class="form-control"  name="message"  id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="form-group contact-page-btn">
             <button type="submit" name='submit'>SUBMIT</button>
            </div>
        </form>
  </div>
<?php include('includes/footer.php') ?>