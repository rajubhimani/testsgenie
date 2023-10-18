<?php include('essentials/top.php'); ?>
<?php include('includes/header.php'); ?>
<!-- <section class='banner-page-3'>
	<div class='container'>
		<div class='row'></div>
	</div>
</section> -->
<section class='How-it-work-page'>
  <div class='container'>
    <h2>How it works?</h2>
    <div class='row'>
      <div class="col-lg-12">
        <p  class="lang-switch-wrapper lang-howitwork"><b style="font-size:16px;">Choose your default language:</b>
          <select name="Language" id="Language" required>
            <?php
            $getLang = mysqli_query($dbconn, "select * from languages where isactive='1' order by id asc");
            while ($getLang1 = mysqli_fetch_object($getLang)) {
              $selected='';
              if($getLang1->name==$_SESSION['slang'])
              {
                $selected='selected';
              }
              echo '<option class="option-drop" value="' . $getLang1->name . '" '.$selected.'>' . $getLang1->name . '</option>';
            }
            ?>
          </select>
        </p>
      <div>
    </div>
    <?php
      $langFolderName='how-it-work';
      $lNo=0;
      $getLangContent = mysqli_query($dbconn, "select * from languages where isactive='1' order by id asc");
      while ($getLangContent1 = mysqli_fetch_object($getLangContent)) { $lNo++;
      ?>
        <div class="lang-content" id="lcontent-<?php echo $getLangContent1->name; ?>" style="display:none">
          <?php
            include('p-languages/'.$langFolderName.'/'.$getLangContent1->name.'.php');
          ?>
        </div>
      <?php
      }
    ?>
  </div>
</section>
<?php include('includes/footer.php'); ?>
<!-- Font Awsome -->
<script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
<!--  Bootstrap Script -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>
<?php include('admin/config/dbclose.php') ?>