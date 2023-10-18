<?php
  include('essentials/top.php');
?>
  <?php include('includes/header.php'); ?>
  <section class='banner-page-3'>
    <div class='container'>
      <div class='row'>
        <h2>About Us</h2>
      </div>
    </div>
  </section>
  <section class='abt-page'>
    <div class='container'>
      <div class='row'>

        <div class='col-lg-7'>
          <p class="lang-switch-wrapper lang-about"><b>Choose your default language:</b>
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
          <?php
          $langFolderName='about';
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
        <div class='col-lg-5'>
          <img class='w-100' src="img/Test Genie-16.png">
        </div>
      </div>
    </div>
  </section>

  <?php include('includes/footer.php'); ?>