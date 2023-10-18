<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <?php
    $quesTime=0;
    for($crQuesNo=1;$crQuesNo<=5;$crQuesNo++)
    {
        $quesTime=$quesTime+20;
        ?>
        <label id="minutes<?php echo $crQuesNo; ?>">00</label>:<label id="seconds<?php echo $crQuesNo; ?>">00</label>
        <script type="text/javascript">
            var totalSeconds<?php echo $crQuesNo; ?> = <?php echo $quesTime; ?>;
            setInterval(setTime<?php echo $crQuesNo; ?>, 1000);
            function setTime<?php echo $crQuesNo; ?>() {
                ++totalSeconds<?php echo $crQuesNo; ?>;
                document.getElementById("seconds<?php echo $crQuesNo; ?>").innerHTML = pad(totalSeconds<?php echo $crQuesNo; ?> % 60);
                document.getElementById("minutes<?php echo $crQuesNo; ?>").innerHTML = pad(parseInt(totalSeconds<?php echo $crQuesNo; ?> / 60));
            }
        </script>
        <?php
    }
    ?>
    <script type="text/javascript">
        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }
    </script>
</body>

</html>