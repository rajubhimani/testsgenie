<?php
if($_SESSION['msgStatus']==1 || $_SESSION['msgStatus']==0)
{
    if($_SESSION['msgStatus']=='1')
    {
        echo '<div class="alert alert-success">
            <span>
                <b> Success - </b> '.$_SESSION['msgText'].'
            </span>
        </div>';
    }
    else if($_SESSION['msgStatus']=='0')
    {
        echo '<div class="alert alert-danger">
            <span>
                <b> Error - </b> '.$_SESSION['msgText'].'
            </span>
        </div>';
    }
}
$_SESSION['msgStatus']='';
$_SESSION['msgText']='';
?>