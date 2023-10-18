<?php include('essentials/top.php'); ?>
    <?php include('includes/header.php'); ?>
    <section class='contact-page'>
        <div class='container'>
            <div class='row row-contact row-forms'>
                <div class='col-lg-8'>
                    <h2>Edit Profile</h2>
                    <form action="subforms/uprofile.php?ftype=UpdateProfile" method="post">
                        <div class="form-box">
                            <label for="username">Full Name</label>
                            <input class="form-control" type="text" name="name" id="name" autocomplete="off" value="<?php echo $uProfileDet->name; ?>" required>
                        </div>
                        <div class="form-box">
                            <label for="username">Email Address</label>
                            <input class="form-control" type="email" name="email" id="email" autocomplete="off" value="<?php echo $uProfileDet->email; ?>" disabled style="cursor:not-allowed" required>
                        </div>
                        <div class="form-box">
                            <label for="username">Mobile Number</label>
                            <input class="form-control" type="text" name="mobile" id="mobile" required value="<?php echo $uProfileDet->phone; ?>" disabled style="cursor:not-allowed">
                        </div>
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
                                $imgPath = 'upfile/';
                                }
                                $imgTxt = '<div><img src="' . $imgPath . '' . $selList1->eimg . '" style="max-width:100px;"/></div>';
                            }
                            echo '
                            <div class="reg-exmp">
                                <div class="img-holder">' . $imgTxt . '</div>
                                <div>
                                    <label class="checkbox-container full-width">
                                        <input type="checkbox" class="inp-checkbox" name="ex-' . $selList1->eid . '" id="ex-' . $selList1->eid . '" value="Yes" '.$checked.'>
                                        <span class="checkmark"></span>
                                        <span class="label-text">' . $selList1->name . '</span>
                                    </label>
                                </div>
                            </div>
                            ';
                        }
                        ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name='submit' class="btn btn-primary">UPDATE PROFILE</button>
                        </div>
                    </form>
                </div>
            </div>
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