<?php
include('includes/mail.php');
echo '
<div style="max-width:650px; margin:0 auto; background:#f1f1f1; padding:20px;font-family: Arial, Helvetica, sans-serif; font-size:16px;">
<div>
    <table style="width:100%;table-layout:fixed;">
        <tr>
            <td>
                <table border="0" width="100%" cellpadding="1" cellspacing="0" style="font-size:13px;">
                    <tr><td>SSC CGL Tier II - Mock Test 1</td></tr>
                    <tr><td>24 April 2021</td></tr>
                    <tr><td>8:20 PM</td></tr>
                </table>
            </td>
            <td style="text-align:center;">
            <img src="https://testsgenie.com/admin/images/logo.png" style="max-width:120px; margin:20px 0" />
            </td>
            <td>
                <table border="0" width="100%" cellpadding="1" cellspacing="0" style="font-size:13px; text-align:right">
                    <tr><td>Amit Kumar</td></tr>
                    <tr><td>Amitsinha401@gmail.com</td></tr>
                </table>
            </td>
        </tr>
    </table>
</div>
<div style="margin-top:30px">
    <h3>Overall Summary</h3>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
    <tr>
        <td><b>Score</b></td>
        <td><b>Attempted</b></td>
        <td><b>Accuracy</b></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table>
</div>
<div style="margin-top:30px">
    <h3>Sectional Summary</h3>
    <table border="1" width="100%" cellpadding="10" cellspacing="0">
    <tr>
        <td><b>Sections</b></td>
        <td><b>Score</b></td>
        <td><b>Correct</b></td>
        <td><b>InCorrect</b></td>
        <td><b>Unattempted</b></td>
        <td><b>Time Taken</b></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </table>
</div>
<div style="margin-top:30px;">
    <div style="background:#202a6b;border-radius:5px;padding:15px;text-align:center;color:#fff;font-size:12px;">
        <div>To know more about TestGenie <a href="#" style="color:#fff">Click Here</a></div>
        <div style="margin:10px 0 15px 0">For any problem, whatsoever, you can reach out to us at <a href="mailto:info@testsgenie.com" style="color:#fff">info@testsgenie.com</a></div>
        <div class="social-icon-fa">
            <a href="https://www.facebook.com/tests.genie.3" style="display:inline-block;vertical-align:middle;margin-right:5px;"><img src="https://testsgenie.com/img/sicons/fc1.png" style="max-height:25px"/></a>
            <a href="https://www.Instagram.com/testgenie" style="display:inline-block;vertical-align:middle;margin-right:5px;"><img src="https://testsgenie.com/img/sicons/fc2.png" style="max-height:25px"/></a>
            <a href="https://twitter.com/Testsgenie" style="display:inline-block;vertical-align:middle;margin-right:5px;"><img src="https://testsgenie.com/img/sicons/fc3.png" style="max-height:25px"/></a>
            <a href="https://www.tumblr.com/dashboard" style="display:inline-block;vertical-align:middle;"><img src="https://testsgenie.com/img/sicons/fc4.png" style="max-height:25px"/></a>
        </div>
    </div>
</div>
';
echo $mailb;
?>