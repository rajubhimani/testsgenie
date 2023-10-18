<div class="graph-outer">
    <div class="graph-inner-wrapper">
        <div class="graph-lines-wrapper">
            <?php
            $bval = 0;
            for ($i = 0; $i <= $tlQsDivCount; $i++) {
                $j = $i - 1;
                $bvalScore = $bval * $selTpExam->pmark;
                echo '<div class="g-lines gline' . $i . '"></div>';
                echo '<div class="gtext gtext' . $i . '">' . $bvalScore . '</div>';
                $bval = $bval + $tlQsDiv;
            }
            ?>
        </div>
        <?php
        for ($i = 0; $i < sizeof($resultSub); $i++) {
            echo '
                <div class="graph-outer-wrapper">
                  <div class="graph-outer-text">
                    ' . $resultSub[$i] . '
                  </div>
                ';
            for ($k = 0; $k < sizeof($resultTotal[$i]); $k++) {
                $cResult = $resultCorrect[$i][0];
                $wResult = $resultWrong[$i][0];
                $tResult = $resultTotal[$i][0];
                $totalPerc = (($tResult / $totalQsCount) * 100);
                $markPerc = ((($cResult - $wResult) / $totalQsCount) * 100);
                if($markPerc<0)
                {
                  $markPerc=0;
                }
                //echo '<div style="position:absolute;left:0;top:-10px;">'.$getExSub1->subject.' Correct:'.$cResult.'  Wrong:'.$wResult.'  Total:'.$tResult.'   TotalQCount:'.$totalQsCount.'<br/></div>';
                echo '
                  <div class="graph-outer-data">
                    <div>
                      <div class="g-bar bar1" style="width:' . $markPerc . '%;"></div>
                    </div>
                    <div>
                      <div class="g-bar bar2" style="width:' . $totalPerc . '%;"></div>
                    </div>
                  </div>
                  ';
            }
            echo '
                </div>
                ';
        }
        ?>
    </div>
    <div class="legends">
        <div class="each-legend">
            <span class="lcolor"></span>
            <span>Full Marks</span>
        </div>
        <div class="each-legend">
            <span class="lcolor l2"></span>
            <span>My Marks</span>
        </div>
    </div>
</div>