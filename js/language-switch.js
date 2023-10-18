$(document).ready(function(){
    showLangContent($('#sellang').val());
    $('#Language').change(function() {
        $('#sellang').val($('#Language').val());
        showLangContent($('#sellang').val());
        $.ajax({ url: "ajaxphp/language-selection.php?slang="+$('#Language').val(), context: document.body, success: function(result){
            //alert();
            //$("#question-number-wrapper").html(result);
        }});
    });
});
function showLangContent(lName)
{
    $('.lang-content').hide();
    $('#lcontent-'+lName).show();
    $('.lang-content2').hide();
    $('#lcontent2-'+lName).show();
}
