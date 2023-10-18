<style>
    * {
        box-sizing: border-box;
    }

    .graph-outer {
        max-width: 600px;
        margin: 10px auto;
        border: solid 1px #ddd;
        position: relative;
        padding-bottom: 20px;
    }

    .graph-inner-wrapper {
        position: relative;
    }

    .graph-outer-wrapper {
        display: flex;
        padding-bottom: 10px;
        align-items: center;
    }

    .graph-outer-text {
        width: 100px;
        padding: 10px;
    }

    .graph-outer-data {
        width: calc(100% - 100px);
        position: relative;
        padding: 10px 0;
        line-height: 0;
        z-index: 1;
    }

    .graph-outer-data .g-bar {
        width: 100%;
        height: 20px;
        left: top;
        background: brown;
        display: inline-block;
    }

    .graph-outer-data .g-bar.bar2 {
        background: #2b388f;
    }

    .graph-lines-wrapper {
        left: 100px;
        top: 0;
        position: absolute;
        z-index: 0;
        height: 100%;
        width: calc(100% - 100px);
    }

    .graph-lines-wrapper .g-lines {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 1px;
        height: 100%;
        background: #ccc;
    }

    .graph-lines-wrapper .gtext {
        position: absolute;
        left: 0;
        bottom: -20px;
        transform: translateX(-50%);
    }

    <?php
    $leftVal = 0;
    for ($i = 1; $i <= 7; $i++) {
        $lno = $i + 1;
        $leftVal = $leftVal + 14.28;
        echo '
        .graph-lines-wrapper .g-lines.gline' . $lno . '{
            left: ' . $leftVal . '%;
        }
        .graph-lines-wrapper .gtext' . $lno . '{
            left: ' . $leftVal . '%;
        }
        ';
    }
    ?>
</style>
<div class="graph-outer">
    <div class="graph-inner-wrapper">
        <div class="graph-lines-wrapper">
            <?php
            $numbers = array('0', '2', '3', '6', '8', '10', '12');
            for ($i = 1; $i <= 7; $i++) {
                $j = $i - 1;
                echo '<div class="g-lines gline' . $i . '"></div>';
                echo '<div class="gtext gtext' . $i . '">' . $numbers[$j] . '</div>';
            }
            ?>
        </div>
        <div class="graph-outer-wrapper">
            <div class="graph-outer-text">
                Total
            </div>
            <div class="graph-outer-data">
                <div>
                    <div class="g-bar bar1" style="width:55%;"></div>
                </div>
                <div>
                    <div class="g-bar bar2" style="width:70%;"></div>
                </div>
            </div>
        </div>
        <div class="graph-outer-wrapper">
            <div class="graph-outer-text">
                Reasoning
            </div>
            <div class="graph-outer-data">
                <div>
                    <div class="g-bar bar1" style="width:25%;"></div>
                </div>
                <div>
                    <div class="g-bar bar2" style="width:30%;"></div>
                </div>
            </div>
        </div>
        <div class="graph-outer-wrapper">
            <div class="graph-outer-text">
                English
            </div>
            <div class="graph-outer-data">
                <div>
                    <div class="g-bar bar1" style="width:30%;"></div>
                </div>
                <div>
                    <div class="g-bar bar2" style="width:33%;"></div>
                </div>
            </div>
        </div>
        <div class="graph-outer-wrapper">
            <div class="graph-outer-text">
                QA
            </div>
            <div class="graph-outer-data">
                <div>
                    <div class="g-bar bar1" style="width:5%;"></div>
                </div>
                <div>
                    <div class="g-bar bar2" style="width:50%;"></div>
                </div>
            </div>
        </div>
    </div>
</div>