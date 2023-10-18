<div class="quespaper-page">
    <div class="menu-test-1">
        <?php
        $getQues = mysqli_query($dbconn, $quesSubQuery);
        while ($getQues1 = mysqli_fetch_object($getQues)) {
            //echo $getQues1->qid;
            echo '<div class="each-q-wrapper">';
            $insImg='';
            $insText='';
            $qrQuesDet = mysqli_fetch_object(mysqli_query($dbconn, "select * from questions where id='" . $getQues1->qid . "'"));

            $rowNo=0;
            $cLangNo=0;
            $getQLang=mysqli_query($dbconn,"select * from languages where name IN (select name from queslang where refid='".$getQues1->qid."') order by id asc");
            while($getQLang1=mysqli_fetch_object($getQLang))
            {
              if($getUTPDet->language==$getQLang1->name)
              {
                $cLangNo=$rowNo;
              }
              $rowNo++;
            }

            $insImg=urldecode($qrQuesDet->insimg);
            if($insImg!='')
            {
                $chkWord = "http";
                if(strpos($insImg, $chkWord) !== false){
                    $imgPath='';
                } else{
                    $imgPath='../upfile/';
                }
                $insImg='<div><img src="'.$imgPath.''.$insImg.'" style="max-width:500px"/></div>';
            }

            $jsonInstruction = json_decode($qrQuesDet->insdata,true);
            $insText=urldecode($jsonInstruction[$cLangNo][$getUTPDet->language]);
            if($insImg!='' || $insText!='')
            {
                echo '<div class="instruction-wrapper"><div style="color: #202A6B;"><b>Instructions</b></div>';
                echo '<div>'.$insText.'</div>';
                echo '<div>'.$insImg.'</div></div>';
            }

            $imgURL = '';
            $jsonQuestion = json_decode($qrQuesDet->quesdata,true);
            $questionData=urldecode($jsonQuestion[$cLangNo][$getUTPDet->language]);
            $imgURL = '';
            $quesImg=urldecode($qrQuesDet->quesimg);
            if ($quesImg != '') {
                $chkWord = "http";
                if (strpos($quesImg, $chkWord) !== false) {
                    $imgPath = '';
                } else {
                    $imgPath = '../upfile/';
                }
                $imgURL = '<div><img src="' . $imgPath . '' . $quesImg . '" style="max-width:500px"/></div>';
            }
            echo '
                <div class="each-q-header">
                    <div class="detailed-ques-wrapper">
                    <b style="color:#202A6B;">Q' . $getQues1->qno . '.</b>
                    <span>' . $questionData . '</span>
                    </div>
                    ' . $imgURL . '
                    </div>
                <div>';


            $ansStatus = '0';
            $ansCount=0;
            $jsonOption = json_decode($qrQuesDet->optiondata,true);
            $jsonOptionImg = json_decode($qrQuesDet->optionimg,true);
            // echo 'Options<br/>';
            // print_r($jsonOption);
            // echo '<br/><br/>Option Img<br/>';
            // print_r($jsonOptionImg);
            for($i=1;$i<=$qrQuesDet->noofoptions;$i++)
            {
                $j=$i-1;
                $imgURL = '';
                $optionImg=urldecode($jsonOptionImg[$j][$i]);
                if ($optionImg != '') {
                    $chkWord = "http";
                    if (strpos($optionImg, $chkWord) !== false) {
                        $imgPath = '';
                    } else {
                        $imgPath = '../upfile/';
                    }
                    $imgURL = '<div><img src="' . $imgPath . '' . $optionImg . '" style="max-width:500px"/></div>';
                }
                $checked = '';
                $chkMark = '';
                $wrgMark = '';
                if ($getQues1->uans == $i) {
                    $checked = 'active';
                    if ($i == $qrQuesDet->coption) {
                        $ansStatus = '1';
                        $chkMark = '<i class="fa fa-check" style="color:green" aria-hidden="true"></i>';
                        //$checked='active correct';
                    } else {
                        $wrgMark = '<i class="fa fa-times" style="color:red" aria-hidden="true"></i>';
                        //$checked='active wrong';
                    }
                } else {
                    if ($i == $qrQuesDet->coption) {
                        //$checked='active correct';
                        $chkMark = '<i class="fa fa-check" style="color:green" aria-hidden="true"></i>';
                    }
                }
                echo '
                <div class="ques-op-wrapper">
                    <div class="qpaper-op">
                        <div style="margin-right:8px">('.$i.')</div>
                        <span class="' . $checked . '"></span>
                        <div class="score-options-text-wrapper"><div> ' . urldecode($jsonOption[$i][$cLangNo][$getUTPDet->language]) . '</div><div>' . $imgURL . '</div>' . $chkMark . ' ' . $wrgMark . '</div>
                    </div>
                </div>
                ';
            }

            if ($getQues1->uans == '') {
                echo '<div class="result-data">Status: <b style="color:red">Not answered</b></div>';
            } else {
                if ($ansStatus == '1') {
                    echo '<div class="result-data">Status: <b style="color:green">Correct Answer</b></div>';
                } else {
                    echo '<div class="result-data">Status: <b style="color:red">Wrong Answer</b></div>';
                }
            }

            $jsonExplanation = json_decode($qrQuesDet->expdata,true);
            $expText=urldecode($jsonExplanation[$cLangNo][$getUTPDet->language]);
            $expImg=urldecode($qrQuesDet->expimg);
            if($expText!='' || $expImg!='' || $qrQuesDet->expvlink!='')
            {
                ?><div>
                    <a href="javsacript:void(0)" id="explink<?php echo $getQues1->qid; ?>" onClick="showExp('<?php echo $getQues1->qid; ?>')">View Explanations</a>
                    <a style="display:none" href="javsacript:void(0)" id="explinkCl<?php echo $getQues1->qid; ?>" onClick="closeExp('<?php echo $getQues1->qid; ?>')">Hide Explanations</a>
                </div>
                <?php
                echo '
                <div class="exp-wrapper" id="exp'.$getQues1->qid.'">
                    <div class="exp-title"><b>Explanation</b></div>';
                    $imgURL='';
                    if($qrQuesDet->expvlink!='')
                    {
                        //$getExp31=mysqli_fetch_object($getExp3);
                        echo '<div class="exp-vlink"><a href="'.$qrQuesDet->expvlink.'" target="_blank">'.$qrQuesDet->expvlink.'</a></div>';
                    }
                    //$getExp21=mysqli_fetch_object($getExp2);

                    if ($expImg != '') {
                        $chkWord = "http";
                        if (strpos($qrQuesDet->expimg, $chkWord) !== false) {
                            $imgPath = '';
                        } else {
                            $imgPath = '../upfile/';
                        }
                        $imgURL = '<div class="exp-img"><img src="' . $imgPath . '' . $expImg . '" style="max-width:500px"/></div>';
                    }
                    echo $imgURL;
                    if($expText!='')
                    {
                        //$getExp11=mysqli_fetch_object($getExp1);
                        echo '<div>'.$expText.'</div>';
                    }
                echo '</div>';

            }
            echo '
            </div>
            </div>
            ';
        }
        ?>


    </div>
</div>