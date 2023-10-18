<?php
$tname = "testtype";
$pageid = "Test Type";
include("includes/header.php");
$fieldName="subject";
include('includes/tqno-update.php');
$breadcrumbs1=array();
$breadcrumbs2=array();
$currentPage='Test Type';
$filterField3=array('name','tqno');
$headerName=array('Test Type','Preview','# Questions','Updated On','Status');
$headerName1=array('name','tqno','pview','udate','isactive');
?>
<main>
    <section class="adminpage">
        <div class="fullwrapper">
            <div class="adminpage-inner">
                <div id="tabs">
                    <?php include('includes/leftmenu.php'); ?>
                    <div class="content">
                        <?php
                        include('includes/form-msgs.php');
                        include('includes/breadcrumbs.php');
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <h3><?php echo $pageid ?> List</h3>
                                <?php
                                include('includes/table-filter.php');
                                ?>
                                <div class="action-bar">
                                    <a href="<?php echo $tname; ?>-edit.php" class="add">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                        Add</a>
                                </div>
                            </div>
                            <div class="table-wrapper">
                                <div class="table">
                                    <div class="row header-row">
                                        <?php
                                        include('includes/header-table.php');
                                        ?>
                                        <div>
                                            Action
                                        </div>
                                    </div>
                                    <?php
                                    include('includes/sort-table.php');
                                    $getData = mysqli_query($dbconn, $tableQueryWithLimit);
                                    while ($getData1 = mysqli_fetch_object($getData)) {
                                        $sNo++;
                                        if ($getData1->isactive == '0') {
                                            $activeTxt = '<span class="not-active">Inactive</span>';
                                            $btnText = '<a href="subforms/' . $tname . '.php?ftype=makeActive&id=' . $getData1->id . '" class="btn btn-default btn-green"><i class="fa fa-check" aria-hidden="true"></i></a>';
                                        } else {
                                            $activeTxt = '<span class="active">Active</span>';
                                            $btnText = '<a href="javascript:void(0)" data-target="subforms/' . $tname . '.php?ftype=makeInactive&id=' . $getData1->id . '" class="btn btn-default btn-red alert-inactive"><i class="fa fa-trash-o" aria-hidden="true"></i></a>';
                                        }
                                        echo '
                                        <div class="row">
                                            <div>' . $getData1->name . '</div>
                                            <div>' . $getData1->pview . '</div>
                                            <div class="q-no">' . $getData1->tqno . '</div>
                                            <div class="q-no">' . $getData1->udate . '</div>
                                            <div class="tques-td">' . $activeTxt . '</div>
                                            <div class="button-holder">
                                                <a href="' . $tname . '-edit.php?edid=' . $getData1->id . '" class="btn btn-default"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                ' . $btnText . '
                                            </div>
                                        </div>
                                        ';
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                            include("includes/pagination.php");
                            ?>
                        </div>
                    </div>
                    <?php
                    include("includes/footer-inner.php");
                    ?>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
include("includes/footer.php");
?>