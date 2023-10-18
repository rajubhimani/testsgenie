</div>
<?php
if($uProfileDet->exprofileid=='')
{
?>
<div class="popup-outer" id="popup-1" style="display:flex;">
    <div class="popup-inner confirm-popup">
        <div class="popup-header">
            <h2 class="heading text-center">Profile Selection</h2>
        </div>
        <div class="popup-body text-center">
            <div class="pdesc">Please select your profile to proceed</div>
            <div class="reg-exmp-wrapper">
              <a href="subforms/uprofile.php?ftype=eprofile&eprid=All"
              class="reg-exmp <?php if($_SESSION['uExPrfID']=='' || $_SESSION['uExPrfID']=='0') { echo 'selected'; } ?>">
                <div class="img-holder"><img src="../img/Testsgenie-02.png"/></div>
                <div class="text-holder">
                  All Profiles
                </div>
                <div class="exam-overlay">
                  <div>
                    <div class="tick-wrapper"><i class="fa fa-check" aria-hidden="true"></i></div>
                    <div class="select-profile">Click to select the profile</div>
                  </div>
                </div>
                </a>
                <?php
                $uPrfCnd="";
                $getUPrf=mysqli_num_rows(mysqli_query($dbconn,"select * from upexam where uid='".$_SESSION['uid']."' and expid IN (select eid from examprofile"));
                if($getUPrf>0)
                {
                  $uPrfCnd="and eid IN (select expid from upexam where uid='".$_SESSION['uid']."'))";
                }
                $slno = 0;
                $ePRQuery="select * from examprofile where isactive='1'  ".$uPrfCnd." order by name asc";
                //echo $ePRQuery;
                $selList = mysqli_query($dbconn, $ePRQuery);
                $selListCount = mysqli_num_rows($selList);
                while ($selList1 = mysqli_fetch_object($selList)) {
                  $slno++;
                  $imgTxt = '';
                  if ($selList1->eimg != '') {
                    $chkWord = "http";
                    if (strpos($selList1->eimg, $chkWord) !== false) {
                      $imgPath = '';
                    } else {
                      $imgPath = '../upfile/';
                    }
                    $imgTxt = '<div><img src="' . $imgPath . '' . $selList1->eimg . '" style="max-width:100px;"/></div>';
                  }
                  echo '
                  <a href="subforms/uprofile.php?ftype=eprofile&eprid='.$selList1->eid.'" class="reg-exmp">
                      <div class="img-holder">' . $imgTxt . '</div>
                      <div class="text-holder">
                        ' . $selList1->name . '
                      </div>
                      <div class="exam-overlay">
                        <div>
                          <div class="tick-wrapper"><i class="fa fa-check" aria-hidden="true"></i></div>
                          <div class="select-profile">Click to select the profile</div>
                        </div>
                      </div>
                  </a>
                  ';
                }
                ?>
              </div>
        </div>
    </div>
</div>
<?php
}
?>
<div class="popup-outer" id="popup-2">
    <div class="popup-inner confirm-popup">
        <a href="javascript:void(0)" class="close-popup" onclick="closePopup('popup-2')"><i class="fa fa-times" aria-hidden="true"></i></a>
        <div class="popup-header">
            <h2 class="heading text-center">Profile Selection</h2>
        </div>
        <div class="popup-body text-center">
            <div class="pdesc">Please select your profile to proceed</div>
            <div class="reg-exmp-wrapper">
              <a href="subforms/uprofile.php?ftype=eprofile&eprid=All"
              class="reg-exmp <?php if($_SESSION['uExPrfID']=='' || $_SESSION['uExPrfID']=='0') { echo 'selected'; } ?>">
                <div class="img-holder"><img src="../img/Testsgenie-02.png"/></div>
                <div class="text-holder">
                  All Profiles
                </div>
                <div class="exam-overlay">
                  <div>
                    <div class="tick-wrapper"><i class="fa fa-check" aria-hidden="true"></i></div>
                    <div class="select-profile">Click to select the profile</div>
                  </div>
                </div>
                </a>
                <?php
                $uPrfCnd="";
                $getUPrf=mysqli_num_rows(mysqli_query($dbconn,"select * from upexam where uid='".$_SESSION['uid']."'"));
                if($getUPrf>0)
                {
                  $uPrfCnd="and eid IN (select expid from upexam where uid='".$_SESSION['uid']."')";
                }
                $slno = 0;
                $selList = mysqli_query($dbconn, "select * from examprofile where isactive='1' ".$uPrfCnd." order by name asc");
                $selListCount = mysqli_num_rows($selList);
                while ($selList1 = mysqli_fetch_object($selList)) {
                  $slno++;
                  $imgTxt = '';
                  if ($selList1->eimg != '') {
                    $chkWord = "http";
                    if (strpos($selList1->eimg, $chkWord) !== false) {
                      $imgPath = '';
                    } else {
                      $imgPath = '../upfile/';
                    }
                    $imgTxt = '<div><img src="' . $imgPath . '' . $selList1->eimg . '" style="max-width:100px;"/></div>';
                  }
                  $linkHref='subforms/uprofile.php?ftype=eprofile&eprid='.$selList1->eid.'';
                  $selectText='Click to select the profile';
                  $selClass='';
                  if($selList1->eid == $_SESSION['uExPrfID'])
                  {
                    $linkHref='javascript:void(0)';
                    $selectText='Selected Profile';
                    $selClass='selected';
                  }
                  echo '
                  <a href="'.$linkHref.'" class="reg-exmp '.$selClass.'">
                      <div class="img-holder">' . $imgTxt . '</div>
                      <div class="text-holder">
                        ' . $selList1->name . '
                      </div>
                      <div class="exam-overlay">
                        <div>
                          <div class="tick-wrapper"><i class="fa fa-check" aria-hidden="true"></i></div>
                          <div class="select-profile">'.$selectText.'</div>
                        </div>
                      </div>
                  </a>
                  ';
                }
                ?>
              </div>
        </div>
    </div>
</div>
<?php if($_REQUEST['submenuClicked']=='Yes') { ?>
<script>
jQuery(function($){
    if ($(window).width() < 992) {
      $('body').removeClass('menutoggle');
      saveMenuValue('0');
    }
});
</script>
<?php } ?>
<script>
function openNav() {
  $('body').addClass('menutoggle');
  saveMenuValue('1');
  // document.getElementById("mySidebar").style.width = "250px";
  // document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  $('body').removeClass('menutoggle');
  saveMenuValue('0');
  // document.getElementById("mySidebar").style.width = "0";
  // document.getElementById("main").style.marginLeft= "0";
}
function saveMenuValue(valno)
{
    $.ajax({ url: "ajaxphp/savemenuvalue.php?valno="+valno, context: document.body, success: function(result){
        //$("#question-number-wrapper").html(result);
    }});
}
    (function(){
   const servicetitle = $('.service-title');
    servicetitle.each(function(){
      $(this).click(function(){
          servicetitle.removeClass('active');
          $(this).addClass('active');
          const serviceId=$(this).attr('id');
          console.log(serviceId);
          const diffservice=$('.service-1');
          diffservice.each(function(){
            const diffId=$(this).attr('id');
            if(serviceId==diffId){
              $(this).addClass('active');
            }else{
              $(this).removeClass('active');
            }
          });
      });
    });
})();
    (function(){
   const accounttitle = $('.account-title');
    accounttitle.each(function(){
      $(this).click(function(){
          accounttitle.removeClass('active');
          $(this).addClass('active');
          const accountId=$(this).attr('id');
          console.log(accountId);
          const diffaccount=$('.account-1');
          diffaccount.each(function(){
            const diffId=$(this).attr('id');
            if(accountId==diffId){
              $(this).addClass('active');
            }else{
              $(this).removeClass('active');
            }
          });
      });
    });
})();
    (function(){
   const testCategory = $('.test-category1');
    testCategory.each(function(){
      $(this).click(function(){
          testCategory.removeClass('active');
          $(this).addClass('active');
          const testId=$(this).attr('id');
          console.log(testId);
          const difftest=$('.test-1');
          difftest.each(function(){
            const diffId=$(this).attr('id');
            if(testId==diffId){
              $(this).addClass('active');
            }else{
              $(this).removeClass('active');
            }
          });
      });
    });
})();
    (function(){
   const testCategory = $('.test-category2');
    testCategory.each(function(){
      $(this).click(function(){
          testCategory.removeClass('active');
          $(this).addClass('active');
          const testId=$(this).attr('id');
          console.log(testId);
          const difftest=$('.test-2');
          difftest.each(function(){
            const diffId=$(this).attr('id');
            if(testId==diffId){
              $(this).addClass('active');
            }else{
              $(this).removeClass('active');
            }
          });
      });
    });
})();
    (function(){
   const testCategory = $('.test-category3');
    testCategory.each(function(){
      $(this).click(function(){
          testCategory.removeClass('active');
          $(this).addClass('active');
          const testId=$(this).attr('id');
          console.log(testId);
          const difftest=$('.test-3');
          difftest.each(function(){
            const diffId=$(this).attr('id');
            if(testId==diffId){
              $(this).addClass('active');
            }else{
              $(this).removeClass('active');
            }
          });
      });
    });
})();
    (function(){
   const testCategory = $('.test-category4');
    testCategory.each(function(){
      $(this).click(function(){
          testCategory.removeClass('active');
          $(this).addClass('active');
          const testId=$(this).attr('id');
          console.log(testId);
          const difftest=$('.test-4');
          difftest.each(function(){
            const diffId=$(this).attr('id');
            if(testId==diffId){
              $(this).addClass('active');
            }else{
              $(this).removeClass('active');
            }
          });
      });
    });
})();
document.getElementById('getval').addEventListener('change', readURL, true);
function readURL(){
    var file = document.getElementById("getval").files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
        document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
    }
    if(file){
        reader.readAsDataURL(file);
    }else{
    }
}
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");
  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Load more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>
<script>
  function checkConfirmPassword(input) {
      if (input.value != document.getElementById('rpassword').value) {
          input.setCustomValidity('Password Must be Matching.');
      } else {
          // input is valid -- reset the error message
          input.setCustomValidity('');
      }
  }

jQuery(function($){
    $('#changepic').on('click', function(e){
      $('#upic').click();
    });
});

function previewFile() {
  var preview = document.getElementById('uprpic');
  var file    = document.getElementById('upic').files[0];
  var reader  = new FileReader();

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
  document.getElementById("clearPic").value = "";
}
function closeFile() {
  document.getElementById("uprpic").src="../img/user.jpg";
  document.getElementById("upic").value = "";
  document.getElementById("clearPic").value = "Yes";
}
function loadMoreTests(testid)
{
    //alert();
    var offsetno=$("#offsetno").val();
    $(".tests-loadmore .loadmore").hide();
    $(".tests-loadmore .loading").show();
    $.ajax({ url: "ajaxphp/testpaperlist.php?testid="+testid+"&offsetno="+offsetno, context: document.body, success: function(result){
      $("#testsDataWrapper").html(result);
      $(".tests-loadmore .loadmore").show();
      $(".tests-loadmore .loading").hide();
      var offsetNewNo=parseInt($("#offsetno").val())+10;
      $("#offsetno").val(offsetNewNo);
      var testcount=parseInt($("#testcount").val());
      if(offsetno>testcount)
      {
        $(".tests-loadmore .loadmore").hide();
        $(".tests-loadmore .loading").hide();
      }
    }});
}
function loadMoreTestsAttempted(testid)
{
    //alert();
    var offsetno=$("#offsetno").val();
    $(".tests-loadmore .loadmore").hide();
    $(".tests-loadmore .loading").show();
    $.ajax({ url: "ajaxphp/testpaperlist-attempted.php?testid="+testid+"&offsetno="+offsetno, context: document.body, success: function(result){
      $("#testsDataWrapper").html(result);
      $(".tests-loadmore .loadmore").show();
      $(".tests-loadmore .loading").hide();
      var offsetNewNo=parseInt($("#offsetno").val())+10;
      $("#offsetno").val(offsetNewNo);
      var testcount=parseInt($("#testcount").val());
      if(offsetno>testcount)
      {
        $(".tests-loadmore .loadmore").hide();
        $(".tests-loadmore .loading").hide();
      }
    }});
}
function loadMoreTestsUpcoming(testid)
{
    //alert();
    var offsetno=$("#offsetno").val();
    $(".tests-loadmore .loadmore").hide();
    $(".tests-loadmore .loading").show();
    $.ajax({ url: "ajaxphp/testpaperlist-upcoming.php?testid="+testid+"&offsetno="+offsetno, context: document.body, success: function(result){
      $("#testsDataWrapper").html(result);
      $(".tests-loadmore .loadmore").show();
      $(".tests-loadmore .loading").hide();
      var offsetNewNo=parseInt($("#offsetno").val())+10;
      $("#offsetno").val(offsetNewNo);
      var testcount=parseInt($("#testcount").val());
      if(offsetno>testcount)
      {
        $(".tests-loadmore .loadmore").hide();
        $(".tests-loadmore .loading").hide();
      }
    }});
}
function showPopup(popupid)
{
  document.getElementById(popupid).style.display='flex';
}
function closePopup(popupid)
{
  document.getElementById(popupid).style.display='none';
}
function showExp(expid)
{
  document.getElementById('exp'+expid).style.display='block';
  document.getElementById('explink'+expid).style.display='none';
}
function showExp(expid)
{
  document.getElementById('exp'+expid).style.display='block';
  document.getElementById('explink'+expid).style.display='none';
  document.getElementById('explinkCl'+expid).style.display='block';
}
function closeExp(expid)
{
  document.getElementById('exp'+expid).style.display='none';
  document.getElementById('explink'+expid).style.display='block';
  document.getElementById('explinkCl'+expid).style.display='none';
}
function chkChangePassword()
{
  var returnValue=1;
  var inpFocus=0;
  if(document.getElementById('cpassword').value=='')
  {
    returnValue=0;
    document.getElementById('ferror1').innerHTML='Please enter current password';
    if(inpFocus==0)
    {
      inpFocus=1;
      document.getElementById("cpassword").focus();
    }
  }
  else
  {
    document.getElementById('ferror1').innerHTML='';
  }

  var regExpPassword = new RegExp("^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*]).{8,}$");
  if(document.getElementById('rpassword').value=='' || !regExpPassword.test(document.getElementById('rpassword').value))
  {
    returnValue=0;
    document.getElementById('ferror2').innerHTML='Must have at least 8 characters,one capital character, one numeric and one special character[!,@,#,$,%,^,&,*]';
    if(inpFocus==0)
    {
      inpFocus=1;
      document.getElementById("rpassword").focus();
    }
  }
  else
  {
    document.getElementById('ferror2').innerHTML='';
  }

  if(document.getElementById('rcpassword').value=='' || document.getElementById('rcpassword').value!=document.getElementById('rpassword').value)
  {
    returnValue=0;
    document.getElementById('ferror3').innerHTML='Passwords should be matching';
    if(inpFocus==0)
    {
      inpFocus=1;
      document.getElementById("rcpassword").focus();
    }
  }
  else
  {
    document.getElementById('ferror3').innerHTML='';
  }

  if(returnValue==1)
  {
    return true;
  }
  else
  {
    return false;
  }
}
$(document).ready(function () {
    $("#subject").change(function() {
        $.ajax({ url: "../sribhushan/ajaxphp/subsubject-selectboxlist.php?subject="+$("#subject").val(), context: document.body, success: function(result){
            $("#subsubject").html(result);
        }});
    });
    $("#subsubject").change(function() {
        $.ajax({ url: "../sribhushan/ajaxphp/topic-selectboxlist.php?subject="+$("#subject").val()+"&subsubject="+$("#subsubject").val(), context: document.body, success: function(result){
            $("#topic").html(result);
        }});
    });
    for(var i=1;i<=4;i++)
    {
        examSubSubject(i);
    }
})
  </script>
  <?php include('../admin/config/dbclose.php') ?>