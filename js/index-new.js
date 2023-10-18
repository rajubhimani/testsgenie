jQuery(document).ready(function(){
  const humbargerBtn = jQuery('.humbergarBtn');

  humbargerBtn.click(function(){

    jQuery('.main-menu').toggleClass('addSlide');

    jQuery(this).toggleClass('close');


  });


         $(document).on("scroll",function(){
        if($(document).scrollTop()>200){
            $("header").addClass('sticky');
            $("header").removeClass('.header');
        } else{
            $("header").removeClass('sticky');
            $("header").addClass('.header');

        }
    });
  $('.banner-row.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        }

    }
});
$('.mock-row.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    // autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
$('.mock-row-2.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    // autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

  $('.row-testi.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    // autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});
  $('.row-testimo.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    // autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
      },
      600: {
        items: 2
      }
    }
});
  $('.row-faq.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    // autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
      },
      1000: {
        items: 2
      }
    }
});
$('.row-feature-out.owl-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    // autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

$('.row-feature-in.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    // autoplay:true,
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
        0:{
            items:1
        }
    }
});

});

// $(document).hover('.dropdown-menu', function (e) {
//   e.stopPropagation();
// });

// const hasDropLink = jQuery('.has-megamenu');

//   hasDropLink.each(function(){



//     jQuery(this).find('.aset').hover(function(){

//       jQuery(this).siblings('.dropdownbox').slideToggle("slow");

//       jQuery(this).parents('.has-megamenu').siblings('li').find('.dropdownbox').slideUp('slow');

//     });

//   });



$(document).ready(function() {

var hamburger = $('.mobile-menu'),
    menu      = $('.menu'),
    sub_menu  = $('.sub-menu-wrapper'),
    menu_item = $('.has-sub-menu');

  hamburger.on('click', function() {
      menu.slideToggle();
      $(this).toggleClass('active');
  });

  menu_item.on('click', function() {
      $(this).children('.sub-menu-wrapper').slideToggle();
  });

});

var a = 0;
  $(window).scroll(function() {

    var oTop = $('#counter').offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() > oTop) {
      $('.counter-value').each(function() {
        var $this = $(this),
          countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
            countNum: countTo
          },

          {

            duration: 4000,
            easing: 'swing',
            step: function() {
              $this.text(Math.floor(this.countNum));
            },
            complete: function() {
              $this.text(this.countNum);
              //alert('finished');
            }

          });
      });
      a = 1;
    }

  });




// $(document).ready(function() {
//  $(".mob-menu span").click(function(){
//     $(".test-menu").slideToggle();
//    });

// });

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
   const examtitle = $('.exam-title');

    examtitle.each(function(){
      $(this).click(function(){
          examtitle.removeClass('active');
          $(this).addClass('active');

          const examId=$(this).attr('id');
          console.log(examId);

          const diffexam=$('.exam-1');

          diffexam.each(function(){
            const diffId=$(this).attr('id');
            if(examId==diffId){
              $(this).addClass('active');

            }else{
              $(this).removeClass('active');
            }

          });

      });
    });
})();
// for contact us page

 //generate captcha for contact us
          function generateCaptcha(length, chars) {
              var result = '';
              for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
              return result;
          }

          //default captcha
          $('.dynamic-code').text(generateCaptcha(5, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));

          $('.captcha-reload').on('click', function () {
              $('.dynamic-code').text(generateCaptcha(5, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));
          });

          //check captcha
          $('#captcha-input').on('change', function () {
              if($(this).val() != $('.dynamic-code').text()){
                  $('#errCaptcha').html('<span style="color: red;"><i class="ion-close"></i> Captecha not matched.</span>');
                  $(this).val('');
              }else {
                  $('#errCaptcha').html('');
              }
          });

// change password page captcha uses
function generateCaptcha(length, chars) {
              var result = '';
              for (var i = length; i > 0; --i) result += chars[Math.round(Math.random() * (chars.length - 1))];
              return result;
          }

          //default captcha
          $('.dynamic-code-2').text(generateCaptcha(5, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));

          $('.captcha-reload-2').on('click', function () {
              $('.dynamic-code-2').text(generateCaptcha(5, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'));
          });

          //check captcha
          $('#captcha-input-2').on('change', function () {
              if($(this).val() != $('.dynamic-code-2').text()){
                  $('#errCaptcha-2').html('<span style="color: red;"><i class="ion-close"></i> Captecha not matched.</span>');
                  $(this).val('');
              }else {
                  $('#errCaptcha-2').html('');
              }
          });

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

// timer code




  // var items = $(".menu-test li");
  //   var numItems = items.length;
  //   var perPage =1;

  //   items.slice(perPage).css('display','none');

  //   $('#pagination-container').pagination({
  //       items: numItems,
  //       itemsOnPage: perPage,
  //       prevText: "&laquo;",
  //       nextText: "&raquo;",
  //       onPageClick: function (pageNumber) {
  //           var showFrom = perPage * (pageNumber - 1);
  //           var showTo = showFrom + perPage;
  //           items.css('display','none').slice(showFrom, showTo).css('display','block');
  //       }
  //   });

  // var items = $(".menu-test-1 li");
  //   var numItems = items.length;
  //   var perPage =10;

  //   items.slice(perPage).css('display','none');

  //   $('#pagination-container').pagination({
  //       items: numItems,
  //       itemsOnPage: perPage,
  //       prevText: "&laquo;",
  //       nextText: "&raquo;",
  //       onPageClick: function (pageNumber) {
  //           var showFrom = perPage * (pageNumber - 1);
  //           var showTo = showFrom + perPage;
  //           items.css('display','none').slice(showFrom, showTo).css('display','block');
  //       }
  //   });



function reply_click(clicked_id)
  {
    if(clicked_id==1){
     alert('Pause test and check the score.');
    }
     else{
      alert('Submit test and check the score.');
     }

  }


// the selector will match all input controls of type :checkbox
// and attach a click event handler
$("input:checkbox").on('click', function() {
  // in the handler, 'this' refers to the box clicked on
  var $box = $(this);
  if ($box.is(":checked")) {
    // the name of the box is retrieved using the .attr() method
    // as it is assumed and expected to be immutable
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    // the checked state of the group/box on the other hand will change
    // and the current value is retrieved using .prop() method
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});




(function(){
   const membertitle = $('.member-title');

    membertitle.each(function(){
      $(this).click(function(){
          membertitle.removeClass('active');
          $(this).addClass('active');

          const memberId=$(this).attr('id');
          console.log(memberId);

          const diffmember=$('.section-1');

          diffmember.each(function(){
            const diffId=$(this).attr('id');
            if(memberId==diffId){
              $(this).addClass('active');

            }else{
              $(this).removeClass('active');
            }

          });

      });
    });
})();



