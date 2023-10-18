<div class="score-table" style="padding:0 15px">
    <table class="table">
        <thead class="top-th">
            <tr>
                <th scope="col" class="sec-start"><i class="fas fa-poll-h" aria-hidden="true"></i>Section</th>
                <th scope="col">Total Questions</th>
                <th scope="col">Attempted Questions</th>
                <th scope="col">Correct Answers</th>
                <th scope="col">Incorrect Answers</th>
                <th scope="col">Marks Obtained</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $totalTableVal1=0;
            $totalTableVal2=0;
            $totalTableVal3=0;
            $totalTableVal4=0;
            $totalTableVal5=0;
            for ($i = 0; $i < sizeof($resultSub); $i++) {
                $cResult = $resultCorrect[$i][0];
                $wResult = $resultWrong[$i][0];
                $tResult = $resultTotal[$i][0];
                $markPerc = $cResult - $wResult;

                $totalTableVal1=$totalTableVal1+$resultTotal1[$i][0];
                $totalTableVal2=$totalTableVal2+$resultAttempted[$i][0];
                $totalTableVal3=$totalTableVal3+$resultCorrect1[$i][0];
                $totalTableVal4=$totalTableVal4+$resultWrong1[$i][0];
                $totalTableVal5=$totalTableVal5+$markPerc;

                echo '
                <tr>
                    <th title="Section" scope="row">
                        '.$resultSub[$i].'
                    </th>
                    <td title="Total Questions">
                        '.$resultTotal1[$i][0].'
                    </td>
                    <td title="Attempted Questions">
                        '.$resultAttempted[$i][0].'
                    </td>
                    <td title="Correct Answers">
                        '.$resultCorrect1[$i][0].'
                    </td>
                    <td title="Incorrect Answers">
                        '.$resultWrong1[$i][0].'
                    </td>
                    <td title="Marks Obtained">
                        '.$markPerc.'
                    </td>
                </tr>
                ';
            }
            echo '
            <tr>
                <th style="background: #f4f4f4;" title="Section" scope="row">
                    <b>Total</b>
                </th>
                <td style="background: #f4f4f4;" title="Total Questions">
                    <b>'.$totalTableVal1.'</b>
                </td>
                <td style="background: #f4f4f4;" title="Attempted Questions">
                    <b>'.$totalTableVal2.'</b>
                </td>
                <td style="background: #f4f4f4;" title="Correct Answers">
                    <b>'.$totalTableVal3.'</b>
                </td>
                <td style="background: #f4f4f4;" title="Incorrect Answers">
                    <b>'.$totalTableVal4.'</b>
                </td>
                <td style="background: #f4f4f4;" title="Marks Obtained">
                    <b>'.$totalTableVal5.'</b>
                </td>
            </tr>
            ';
            ?>
        </tbody>
    </table>
</div>