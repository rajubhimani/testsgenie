$(document).ready(function(){
    // $(".clear-response").click(function(){
    //     $('input:radio').prop('checked', false);
    // });
    // $(".mark-review").click(function(){
    //     $('.quiz-form').attr('action', "subforms/next-question.php?ftype=markquestion").submit();
    // });
    // $(".save-next").click(function(){
    //     $('.quiz-form').attr('action', "subforms/next-question.php?ftype=nextquestion").submit();
    // });
    $(".show-instruction").click(function(){
        $('body').addClass('show-instruction');
    });
    $(".close-ins").click(function(){
        $('body').removeClass('show-instruction');
    });
    $(".report-question-link").click(function(){
        $(".report-dropdown").slideToggle();
    });
    $("a.close-popup").click(function(){
        $(".pg-popup").hide();
    });
    var cqno=$("#currentQuesNo").val();
    showQuesImg("#qw"+cqno);
});
function saveTimer(qid,timetaken)
{
    console.log(qid+' : '+timetaken);
    $.ajax({ url: "ajaxphp/save-qtimer.php?qid="+qid+"&timetaken="+timetaken, context: document.body, success: function(result){
        //$("#subsubject").html(result);
    }});
}
function saveTimer1(totaltimetaken)
{
    $.ajax({ url: "ajaxphp/save-ttimer.php?totaltimetaken="+totaltimetaken, context: document.body, success: function(result){
        //$("#subsubject").html(result);
        //alert(result);
    }});
}
$(window).on("load", function(){
    setTimeout(function(){ $("body").removeClass("loading"); }, 1000);
});
function showReportPopup(rtype,qid)
{
    $(".report-dropdown").slideUp();
    $("#report-rtype").val(rtype);
    $("#report-qid").val(qid);
    $("#report-popup").show();
}
$(document).ready(function(){
    $("form:not(.no-loader-form)").submit(function(){
        $("body").addClass("loading");
    });
});
function showNextQuestion(qid,cqno,ftype)
{
    var nextQNo=parseInt(cqno)+1;
    $(".test-questions-wrapper").hide();
    $("#qw"+nextQNo).show();
    $(".test-questions-wrapper .inptpaused").val('0');
    $(".test-questions-wrapper #tpaused"+nextQNo).val('1');
    $(".question-numbers a").removeClass('current');
    $(".question-numbers #qnolink"+nextQNo).addClass('current');
    updateQuestionStatus(qid,cqno,ftype,nextQNo);
    showQuesImg("#qw"+nextQNo);
}
function saveQuestion(qid,cqno,ftype)
{
    var nextQNo=parseInt(cqno);
    updateQuestionStatus(qid,cqno,ftype,nextQNo)
}
function goToQuestion(qno)
{
    var cqno=$("#currentQuesNo").val();
    var qid=$("#qNoID"+cqno).val();
    showQuesImg("#qw"+qno);
    //alert(cqno);
    if(qno != cqno)
    {
        var nextQNo=parseInt(qno);
        $(".test-questions-wrapper").hide();
        $("#qw"+nextQNo).show();
        $(".test-questions-wrapper .inptpaused").val('0');
        $(".test-questions-wrapper #tpaused"+nextQNo).val('1');
        $(".question-numbers a").removeClass('current');
        $(".question-numbers #qnolink"+nextQNo).addClass('current');
        $.ajax({ url: "ajaxphp/goto-question.php?qno="+qno, context: document.body, success: function(result){
            //updateAttemptNo(nextQNo);
        }});
        var ftype='nextquestion';
        updateQuestionStatus(qid,cqno,ftype,nextQNo);
    }
}

function clearOptions(cqno)
{
    $('#qw'+cqno+' input:radio').prop('checked', false);
    var qid=$("#qNoID"+cqno).val();
    var ajaxURL="ajaxphp/clear-question.php?qid="+qid;
    $.ajax({ url: ajaxURL, context: document.body, success: function(result){
    }});
}
function updateQuestionStatus(qid,cqno,ftype,nextQNo)
{

    var qopradio='';
    var radios = document.getElementsByName(cqno+'qopradio');
    for (var i = 0, length = radios.length; i < length; i++) {
        if (radios[i].checked) {
            qopradio = radios[i].value;
            break;
        }
    }
    var qNoClass='notanswered';
    if(ftype=='markquestion')
    {
        if(qopradio!='')
        {
            qNoClass='markedanswered';
        }
        else
        {
            qNoClass='marked';
        }
    }
    else if(ftype=='nextquestion')
    {
        if(qopradio!='')
        {
            qNoClass='answered';
        }
        else
        {
            qNoClass='notanswered';
        }
    }
    $("#qnolink"+cqno).attr('class', ''+qNoClass);
    var ajaxURL="ajaxphp/next-question.php?ftype="+ftype+"&qid="+qid+"&qopradio1="+qopradio+"&nextQNo="+nextQNo;
    //alert(ajaxURL);
    $.ajax({ url: ajaxURL, context: document.body, success: function(result){
        $("#qsubres"+cqno).html(result);
        //reloadQuestionNumbers(nextQNo);
        reloadQuestionNumbersCount(nextQNo);
        updateAttemptNo(nextQNo);
    }});
    $("#currentQuesNo").val(nextQNo);
}
function reloadQuestionNumbers(cqno)
{
    $.ajax({ url: "ajaxphp/question-numbers.php?cqno="+cqno, context: document.body, success: function(result){
        $("#question-number-wrapper").html(result);
    }});
}
function reloadQuestionNumbersCount(cqno)
{
    $.ajax({ url: "ajaxphp/question-numbers-count.php?cqno="+cqno, context: document.body, success: function(result){
        $("#qn-count-wrapper").html(result);
    }});
}
function updateAttemptNo(cqno)
{
    $.ajax({ url: "ajaxphp/update-attemptno.php?cqno="+cqno, context: document.body, success: function(result){
        //alert('Qno:'+cqno+' AtNo:'+result);
        $("#atmpno"+cqno).html(result);
    }});
}
function showCurrentQuestion(cqno)
{
    var nextQNo=parseInt(cqno);
    $(".test-questions-wrapper").hide();
    $("#qw"+nextQNo).show();
    $(".question-numbers a").removeClass('current');
    $(".question-numbers #qnolink"+nextQNo).addClass('current');
}
function pad(val) {
    var valString = val + "";
    if (valString.length < 2) {
        return "0" + valString;
    } else {
        return valString;
    }
}
function confirm_subject_change(subname,subid)
{
    var currentQuesNo=document.getElementById('currentQuesNo').value;
    var csubid=$("#qw"+currentQuesNo+" .test-menu .active a").data("target");
    var qCount=document.getElementById("SubNoVQno"+csubid).value;
    var qNo=document.getElementById('SubMinQno'+subid).value;
    if(qCount>0)
    {
        var confirmText="There are still "+qCount+" unanswered questions in this section. Are you sure you want to move to "+subname+" section? ";
        var answer = window.confirm(confirmText);
        if (answer) {
            goToQuestion(qNo);
        }
        else {
        }
    }
    else
    {
        goToQuestion(qNo);
    }
}
function showQuesImg(qid) {
    //alert(qid);
    var imgCount=parseInt($(""+qid+"-img-count").val());
    if(imgCount>0)
    {
        for(var i = 1; i <= imgCount; i++)
        {
            var imgID=""+qid+"-img"+i;
            var imgSource=imgDataSrc=$(imgID).data('src');
            $(imgID).attr("src",imgSource);
        }
    }
  }