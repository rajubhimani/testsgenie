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
                    <form action="subforms/uprofile.php?ftype=updateQualification" method="post">
                        <div class="row">
                            <div class="col">
                            </div>
                            <div class="col">
                                <label for="l">Institute Name</label>
                            </div>
                            <div class="col">
                                <label for="l">Qualification Category</label>
                            </div>
                            <div class="col">
                                <label for="l">Year of passing</label>
                            </div>
                        </div>
                        <?php
                        $maxYear=date('Y');
                        $minYear=date('Y')-50;
                        $qlfNo=0;
                        $qlfArray=array('Highest Qualification','Post Graduate','XII Grade','X Grade','Any other Qualification');
                        for($i=0;$i<5;$i++)
                        {
                            $qlfNo++;
                            $getQlfDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprqlf where uid='".$_SESSION['uid']."' and name='".$qlfArray[$i]."'"));
                            echo'
                            <div class="row">
                                <div class="col">
                                    <label for="l">'.$qlfArray[$i].'</label>
                                    <input type="hidden" name="name'.$qlfNo.'" id="name'.$qlfNo.'" value="'.$qlfArray[$i].'"/>
                                </div>
                                <div class="col">
                                    <input type="text" name="institute'.$qlfNo.'" id="institute'.$qlfNo.'2" class="form-control" value="'.$getQlfDet->institute.'">
                                </div>
                                <div class="col">
                                    <input type="text" name="category'.$qlfNo.'" id="category'.$qlfNo.'3" class="form-control" value="'.$getQlfDet->category.'">
                                </div>
                                <div class="col">
                                    <input min="'.$minYear.'" max="'.$maxYear.'" type="number" name="passyear'.$qlfNo.'" id="passyear'.$qlfNo.'4" class="form-control" value="'.$getQlfDet->passyear.'">
                                </div>
                            </div>
                            ';
                        }
                        ?>
                        <div class='prof-btn'><button type="submit">Save</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('includes/footer.php') ?>