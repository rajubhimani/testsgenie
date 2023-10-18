<?php include('essentials/top.php'); ?>
    <?php include('includes/header.php'); ?>
    <section class=''>
        <div class='container'>
            <div class='row row-contact row-forms'>
                <div class='col-lg-8'>
                    <h2>Paused Test</h2>
                    <div class="mytest-wrapper paused-test">
                        <?php
                        $gTstPsd=mysqli_query($dbconn,"select * from utestpaper where uid='".$_SESSION['uid']."' and paused='1'");
                        if(mysqli_num_rows($gTstPsd)<=0)
                        {
                            echo '
                            <p>There are no paused tests</p>
                            ';
                        }
                        while($gTstPsd1=mysqli_fetch_object($gTstPsd))
                        {
                            $testPaperDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from testpaper where id='".$gTstPsd1->tpid."'"));
                            echo '
                            <div class="each-test">
                                <span>'.$testPaperDet->name.'</span>
                                <span>'.$gTstPsd1->adate.'</span>
                                <span><a href="subforms/resume-test.php?testid='.$gTstPsd1->id.'">Resume Test</a></span>
                            </div>';
                        }
                        ?>
                    </div>
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