jQuery(document).ready(function () {
  const humbargerBtn = jQuery('.humbergarBtn');
  humbargerBtn.click(function () {
    jQuery('.main-menu').toggleClass('addSlide');
    jQuery(this).toggleClass('close');
  });
  $(document).on("scroll", function () {
    if ($(document).scrollTop() > 200) {
      $("header").addClass('sticky');
      $("header").removeClass('.header');
    } else {
      $("header").removeClass('sticky');
      $("header").addClass('.header');
    }
  });
  $('.banner-row.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    autoplay: true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      }
    }
  });
  $('.mock-row.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // autoplay:true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
  $('.mock-row-2.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // autoplay:true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
  $('.row-testi.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // autoplay:true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
  $('.row-testimo.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // autoplay:true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2
      }
    }
  });
  $('.row-faq.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // autoplay:true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 2
      }
    }
  });
  $('.row-feature-out.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // autoplay:true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });
  $('.row-feature-in.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    // autoplay:true,
    smartSpeed: 1000,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
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
$(document).ready(function () {
  var hamburger = $('.mobile-menu'),
    menu = $('.menu'),
    sub_menu = $('.sub-menu-wrapper'),
    menu_item = $('.has-sub-menu');
  hamburger.on('click', function () {
    menu.slideToggle();
    $(this).toggleClass('active');
  });
  menu_item.on('click', function () {
    $(this).children('.sub-menu-wrapper').slideToggle();
  });
});
var a = 0;
$(window).scroll(function () {
  var oTop = $('#counter').offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $('.counter-value').each(function () {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
        countNum: countTo
      }, {
        duration: 4000,
        easing: 'swing',
        step: function () {
          $this.text(Math.floor(this.countNum));
        },
        complete: function () {
          $this.text(this.countNum);
          //alert('finished');
        }
      });
    });
    a = 1;
  }
});
$(document).ready(function () {
  $(".mob-menu span").click(function () {
    $(".test-menu").slideToggle();
  });
});
(function () {
  const servicetitle = $('.service-title');
  servicetitle.each(function () {
    $(this).click(function () {
      servicetitle.removeClass('active');
      $(this).addClass('active');
      const serviceId = $(this).attr('id');
      console.log(serviceId);
      const diffservice = $('.service-1');
      diffservice.each(function () {
        const diffId = $(this).attr('id');
        if (serviceId == diffId) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  });
})();
(function () {
  const examtitle = $('.exam-title');
  examtitle.each(function () {
    $(this).click(function () {
      examtitle.removeClass('active');
      $(this).addClass('active');
      const examId = $(this).attr('id');
      console.log(examId);
      const diffexam = $('.exam-1');
      diffexam.each(function () {
        const diffId = $(this).attr('id');
        if (examId == diffId) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  });
})();
$("a[href='#top1']").click(function () {
  $("html, body").animate({
    scrollTop: 0
  }, "slow");
  return false;
});
$(".exam-title a").click(function () {
  // This prevents the default 'jump to' behaviour if JavaScript is enabled,
  // whilst keeping the functionality there for when JavaScript isn't enabled
  // event.preventDefault();
  $("html, body").animate({
    scrollTop: $($(this).attr('href')).offset().top - 120
  }, 500);
  $('.exam-title a').removeClass('active');
  $(this).addClass('active');
  return true;
});
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
  if ($(this).val() != $('.dynamic-code').text()) {
    $('#errCaptcha').html('<span style="color: red;"><i class="ion-close"></i> Captecha not matched.</span>');
    $(this).val('');
  } else {
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
  if ($(this).val() != $('.dynamic-code-2').text()) {
    $('#errCaptcha-2').html('<span style="color: red;"><i class="ion-close"></i> Captecha not matched.</span>');
    $(this).val('');
  } else {
    $('#errCaptcha-2').html('');
  }
});

function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
// timer code
const x = 1.1; //add the Timer minutes here ( e.g. 2 for two Minutes or 0.2 for 12 secs)
display = document.querySelector('#clock');
clock_initialize(x);

function newInterval(x) {
  $('#clock').css({
    "animation": "none"
  });
  $('#clock').css({
    "color": "yellowgreen"
  });
  clock_initialize(x);
}

function clock_initialize(x) {
  $count_from_minutes = x; //count of minutes
  if ($count_from_minutes > 1440) {
    $count_from_minutes = 1440;
  }
  let $timer_time = 60 * $count_from_minutes;
  let $time_at_start = x;
  startTimer($timer_time, display, $time_at_start);
}

function startTimer($timer_time, display, $time_at_start) {
  let interval = setInterval(function () {
    let days = Math.floor($timer_time / 86400);
    let hours = Math.floor(($timer_time - (days * 86400)) / 3600);
    let minutes = Math.floor(($timer_time - (days * 86400) - (hours * 3600)) / 60);
    let secs = Math.floor(($timer_time - (days * 86400) - (hours * 3600) - (minutes * 60)));
    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    secs = secs < 10 ? "0" + secs : secs;
    display.innerHTML = "<div class=\"hours\">" + hours + "</div>\n" + "<div class=\"clock-dots\">:</div>" + "<div class=\"minutes\">" + minutes + "</div>\n" + "<div class=\"clock-dots\">:</div>" + "<div class=\"seconds\">" + secs + "</div>";
    $timer_time--;
    if ($timer_time <= 59) {
      $('#clock').css({
        "color": "red"
      });
    }
    if ($timer_time >= -1 && $timer_time < 10) {
      $('.seconds').css({
        "animation": "scale-secs 1s infinite",
        "animation-iteration-count": "10"
      });
    }
    if ($timer_time === -1) {
      clearInterval(interval);
      $('#clock').css({
        "animation": "countdown-over .9s infinite",
        "animation-iteration-count": "3"
      });
      $('.seconds').css({
        "animation": "none"
      });
      setTimeout(function () {
        $('.confirm-btn').css({
          "animation": "confirm-come 1s",
          "display": "flex"
        })
      }, 2800);
      // setTimeout(function() {newInterval($time_at_start)},2900);
      $('.confirm-btn').on('click', function () {
        $('.confirm-btn').css({
          "animation": "confirm-go 1s"
        });
        setTimeout(function () {
          $('.confirm-btn').css({
            "display": "none"
          })
        }, 1000);
        newInterval($time_at_start);
      });
    }
    return $timer_time;
  }, 1000);
}
var items = $(".menu-test li");
var numItems = items.length;
var perPage = 1;
items.slice(perPage).css('display', 'none');
$('#pagination-container').pagination({
  items: numItems,
  itemsOnPage: perPage,
  prevText: "&laquo;",
  nextText: "&raquo;",
  onPageClick: function (pageNumber) {
    var showFrom = perPage * (pageNumber - 1);
    var showTo = showFrom + perPage;
    items.css('display', 'none').slice(showFrom, showTo).css('display', 'block');
  }
});
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
function reply_click(clicked_id) {
  if (clicked_id == 1) {
    alert('Pause test and check the score.');
  } else {
    alert('Submit test and check the score.');
  }
}
// the selector will match all input controls of type :checkbox
// and attach a click event handler
$("input:checkbox").on('click', function () {
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
(function () {
  const membertitle = $('.member-title');
  membertitle.each(function () {
    $(this).click(function () {
      membertitle.removeClass('active');
      $(this).addClass('active');
      const memberId = $(this).attr('id');
      console.log(memberId);
      const diffmember = $('.section-1');
      diffmember.each(function () {
        const diffId = $(this).attr('id');
        if (memberId == diffId) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  });
})();
// screen shot
document.querySelector('button').addEventListener('click', function () {
  html2canvas(document.querySelector('.specific'), {
    onrendered: function (canvas) {
      // document.body.appendChild(canvas);
      return Canvas2Image.saveAsPNG(canvas);
    }
  });
});
$(document).ready(function () {
  $(".mob-menu span").click(function () {
    $(".test-menu").slideToggle();
  });
});
(function () {
  const servicetitle = $('.service-title');
  servicetitle.each(function () {
    $(this).click(function () {
      servicetitle.removeClass('active');
      $(this).addClass('active');
      const serviceId = $(this).attr('id');
      console.log(serviceId);
      const diffservice = $('.service-1');
      diffservice.each(function () {
        const diffId = $(this).attr('id');
        if (serviceId == diffId) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  });
})();
(function () {
  const examtitle = $('.exam-title');
  examtitle.each(function () {
    $(this).click(function () {
      examtitle.removeClass('active');
      $(this).addClass('active');
      const examId = $(this).attr('id');
      console.log(examId);
      const diffexam = $('.exam-1');
      diffexam.each(function () {
        const diffId = $(this).attr('id');
        if (examId == diffId) {
          $(this).addClass('active');
        } else {
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
  if ($(this).val() != $('.dynamic-code').text()) {
    $('#errCaptcha').html('<span style="color: red;"><i class="ion-close"></i> Captecha not matched.</span>');
    $(this).val('');
  } else {
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
  if ($(this).val() != $('.dynamic-code-2').text()) {
    $('#errCaptcha-2').html('<span style="color: red;"><i class="ion-close"></i> Captecha not matched.</span>');
    $(this).val('');
  } else {
    $('#errCaptcha-2').html('');
  }
});
// timer code
const x = document.getElementById('totaltimeleft').value; //add the Timer minutes here ( e.g. 2 for two Minutes or 0.2 for 12 secs)
display = document.querySelector('#clock');
clock_initialize(x);

function newInterval(x) {
  $('#clock').css({
    "animation": "none"
  });
  $('#clock').css({
    "color": "yellowgreen"
  });
  clock_initialize(x);
}

function clock_initialize(x) {
  $count_from_minutes = x; //count of minutes
  // if ($count_from_minutes > 1440) {
  //     $count_from_minutes = 1440;
  // }
  let $timer_time = $count_from_minutes;
  let $time_at_start = x;
  startTimer($timer_time, display, $time_at_start);
}

function startTimer($timer_time, display, $time_at_start) {
  let interval = setInterval(function () {
    let days = Math.floor($timer_time / 86400);
    let hours = Math.floor(($timer_time - (days * 86400)) / 3600);
    let minutes = Math.floor(($timer_time - (days * 86400) - (hours * 3600)) / 60);
    let secs = Math.floor(($timer_time - (days * 86400) - (hours * 3600) - (minutes * 60)));
    hours = hours < 10 ? "0" + hours : hours;
    minutes = minutes < 10 ? "0" + minutes : minutes;
    secs = secs < 10 ? "0" + secs : secs;
    display.innerHTML = "<div class=\"hours\">" + hours + "</div>\n" + "<div class=\"clock-dots\">:</div>" + "<div class=\"minutes\">" + minutes + "</div>\n" + "<div class=\"clock-dots\">:</div>" + "<div class=\"seconds\">" + secs + "</div>";
    $timer_time--;
    var timeTaken = parseInt(document.getElementById('totaltesttime').value) - parseInt($timer_time);
    document.getElementById('totaltimetaken').value = timeTaken;
    if ($timer_time <= 59) {
      $('#clock').css({
        "color": "red"
      });
    }
    if ($timer_time >= -1 && $timer_time < 10) {
      $('.seconds').css({
        "animation": "scale-secs 1s infinite",
        "animation-iteration-count": "10"
      });
    }
    if ($timer_time === -1) {
      clearInterval(interval);
      $('#clock').css({
        "animation": "countdown-over .9s infinite",
        "animation-iteration-count": "3"
      });
      $('.seconds').css({
        "animation": "none"
      });
      setTimeout(function () {
        $('.confirm-btn').css({
          "animation": "confirm-come 1s",
          "display": "flex"
        })
      }, 2800);
      // setTimeout(function() {newInterval($time_at_start)},2900);
      $('.confirm-btn').on('click', function () {
        $('.confirm-btn').css({
          "animation": "confirm-go 1s"
        });
        setTimeout(function () {
          $('.confirm-btn').css({
            "display": "none"
          })
        }, 1000);
        newInterval($time_at_start);
      });
    }
    if ($timer_time <= -1) {
      alert('Your maximum time to attend exam has expired. The test will be submitted.');
      location.replace('subforms/submit-test.php');
    }
    return $timer_time;
  }, 1000);
}
var items = $(".menu-test li");
var numItems = items.length;
var perPage = 1;
items.slice(perPage).css('display', 'none');
$('#pagination-container').pagination({
  items: numItems,
  itemsOnPage: perPage,
  prevText: "&laquo;",
  nextText: "&raquo;",
  onPageClick: function (pageNumber) {
    var showFrom = perPage * (pageNumber - 1);
    var showTo = showFrom + perPage;
    items.css('display', 'none').slice(showFrom, showTo).css('display', 'block');
  }
});
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
function reply_click(clicked_id) {
  if (clicked_id == 1) {
    alert('Pause test and check the score.');
  } else {
    alert('Submit test and check the score.');
  }
}

function reply_click1(qtype, lastqid, lastqno) {
  alert();
  var answer = window.confirm("You have reached to end of test, Click Ok to submit or Click Cancel to review the answers.");
  if (answer) {
    var qopradio = '';
    var radios = document.getElementsByName(lastqno + 'qopradio');
    for (var i = 0, length = radios.length; i < length; i++) {
      if (radios[i].checked) {
        qopradio = radios[i].value;
        break;
      }
    }
    $('.quiz-form').attr('action', "subforms/next-question.php?ftype=" + qtype + "&lastqid=" + lastqid + "&lastqno=" + lastqno + "&qopradio=" + qopradio).submit();
  } else {
    //some code
  }
}

function confirm_submit() {
  var answer = window.confirm("Are you sure to submit the test?");
  if (answer) {
    //location.replace('subforms/submit-test.php');
    $('form#scoreform').submit();
  } else {
    //some code
  }
}
// the selector will match all input controls of type :checkbox
// and attach a click event handler
$("input:checkbox").on('click', function () {
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
(function () {
  const membertitle = $('.member-title');
  membertitle.each(function () {
    $(this).click(function () {
      membertitle.removeClass('active');
      $(this).addClass('active');
      const memberId = $(this).attr('id');
      console.log(memberId);
      const diffmember = $('.section-1');
      diffmember.each(function () {
        const diffId = $(this).attr('id');
        if (memberId == diffId) {
          $(this).addClass('active');
        } else {
          $(this).removeClass('active');
        }
      });
    });
  });
})();
// screen shot
document.querySelector('button').addEventListener('click', function () {
  html2canvas(document.querySelector('.specific'), {
    onrendered: function (canvas) {
      // document.body.appendChild(canvas);
      return Canvas2Image.saveAsPNG(canvas);
    }
  });
});