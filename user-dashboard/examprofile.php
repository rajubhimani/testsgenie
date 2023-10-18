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
        <div class='account-1 active editexprf'>
          <form action="subforms/uprofile.php?ftype=UpdateExamProfile" method="post" enctype="multipart/form-data">
          <div class="reg-exmp-wrapper">
            <?php
            $slno = 0;
            $selList = mysqli_query($dbconn, "select * from examprofile where isactive='1' order by name asc");
            $selListCount = mysqli_num_rows($selList);
            while ($selList1 = mysqli_fetch_object($selList)) {
                $checked="";
                $chkPrExam=mysqli_num_rows(mysqli_query($dbconn,"select * from upexam where uid='".$_SESSION['uid']."' and expid='".$selList1->eid."'"));
                if($chkPrExam>0)
                {
                    $checked="checked";
                }
                $slno++;
                $imgTxt = '';
                if ($selList1->eimg != '') {
                    $chkWord = "http";
                    if (strpos($selList1->eimg, $chkWord) !== false) {
                    $imgPath = '';
                    } else {
                    $imgPath = '../upfile/';
                    }
                    $imgTxt = '<div><img src="' . $imgPath . '' . $selList1->eimg . '" style="max-width:100px;"/></div>';
                }
                $linkHref='subforms/uprofile.php?ftype=eprofile&eprid='.$selList1->eid.'';
                $overlayText='';
                $selectText='Click to select the profile';
                $selClass='';
                if($selList1->eid == $_SESSION['uExPrfID'])
                {
                  $linkHref='javascript:void(0)';
                  $selectText='Selected Profile<br/> Cannot be edited';
                  $selClass='selected';
                  $overlayText='
                  <div class="exam-overlay">
                    <div>
                      <div class="tick-wrapper"><i class="fa fa-check" aria-hidden="true"></i></div>
                      <div class="select-profile">'.$selectText.'</div>
                    </div>
                  </div>';
                  $checked="checked";
                }
                echo '
                <div class="reg-exmp '.$selClass.'">
                    <div class="img-holder">' . $imgTxt . '</div>
                    <div>
                        <label class="checkbox-container full-width">
                            <input type="checkbox" class="inp-checkbox" name="ex-' . $selList1->eid . '" id="ex-' . $selList1->eid . '" value="Yes" '.$checked.'>
                            <span class="checkmark"></span>
                            <span class="label-text">' . $selList1->name . '</span>
                        </label>
                    </div>
                    '.$overlayText.'
                </div>
                ';
            }
            ?>
            </div>
            <div class='prof-btn'><button type="submit">Save</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php include('includes/footer.php') ?>