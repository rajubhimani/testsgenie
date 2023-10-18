<?php include('essentials/top.php'); ?>
<?php include('includes/header.php'); ?>
<section class='banner'>
  <div class='row banner-row owl-carousel'>
    <div class="col-12 banner1">
      <div class='container'>
      </div>
    </div>
    <div class="col-12 banner2">
      <div class='container'>
      </div>
    </div>
    <div class="col-12 banner3">
      <div class='container'>
      </div>
    </div>
    <div class="col-12 banner4">
      <div class='container'>
      </div>
    </div>
    <div class="col-12 banner5">
      <div class='container'>
      </div>
    </div>
  </div>
</section>
<section class="section-switch-lang">
  <div class='container'>
    <div class='row'>
        <p class="lang-switch-wrapper lang-home"><b>Choose your default language:</b>
          <select name="Language" id="Language" required>
            <?php
            $getLang = mysqli_query($dbconn, "select * from languages where isactive='1' order by id asc");
            while ($getLang1 = mysqli_fetch_object($getLang)) {
              $selected='';
              if($getLang1->name==$_SESSION['slang'])
              {
                $selected='selected';
              }
              echo '<option class="option-drop" value="' . $getLang1->name . '" '.$selected.'>' . $getLang1->name . '</option>';
            }
            ?>
          </select>
        </p>
    </div>
  </div>
</section>
<?php
  $langFolderName='home-why';
  $lNo=0;
  $getLangContent = mysqli_query($dbconn, "select * from languages where isactive='1' order by id asc");
  while ($getLangContent1 = mysqli_fetch_object($getLangContent)) { $lNo++;
  ?>
    <div class="lang-content" id="lcontent-<?php echo $getLangContent1->name; ?>" style="display:none">
      <?php
        include('p-languages/'.$langFolderName.'/'.$getLangContent1->name.'.php');
      ?>
    </div>
  <?php
  }
?>
<section>
  <div class='container'>
    <div class='row moto-row'>
      <div class='col-lg-3 moto-col shadow'>
        <img src='img/Test Genie-09.png'>
        <h4>Unlimited Free Content</h4>
      </div>
      <div class='col-lg-3  moto-col shadow'>
        <img src='img/Test Genie-08.png'>
        <h4>Personalized Testing </h4>
      </div>
      <div class='col-lg-3  moto-col shadow'>
        <img src='img/Icons-06.png'>
        <h4>AI Powered </h4>
      </div>
    </div>
  </div>
</section>
<section class='matrix-section'>
  <div class='container'>
    <h3>Metrics</h3>
    <div class='row matrix-row'>
      <div class='col-lg-3 matrix-col'>
        <div id="counter">
          <img src='img/Icons-02.png'>
          <div class="counter-value" data-count="<?php echo mysqli_num_rows(mysqli_query($dbconn, "select * from testpaper where isactive='1'")); ?>">0</div>
          <h4>Total Tests</h4>
        </div>
      </div>
      <div class='col-lg-3 matrix-col'>
        <div id="counter">
          <img src='img/Icons-03.png'>
          <div class="counter-value" data-count="<?php echo mysqli_num_rows(mysqli_query($dbconn, "select * from questions where isactive='1'")); ?>">0</div>
          <h4>Total Questions</h4>
        </div>
      </div>
      <div class='col-lg-3 matrix-col'>
        <div id="counter">
          <img src='img/Icons-04.png'>
          <div class="counter-value" data-count="<?php echo 47876 + mysqli_num_rows(mysqli_query($dbconn, "select * from uvisits")); ?>">0</div>
          <h4>Total Visits </h4>
        </div>
      </div>
      <div class='col-lg-3 matrix-col'>
        <div id="counter">
          <img src='img/Icons-01.png'>
          <!--<div class="counter-value" data-count="<?php echo mysqli_num_rows(mysqli_query($dbconn, "select * from uprofile where everify='Yes'")); ?>">0</div>-->
		  <div class="counter-value" data-count="<?php echo 9453 + mysqli_num_rows(mysqli_query($dbconn, "select * from uprofile where everify='Yes'")); ?>">0</div>
          <h4>Total Users</h4>
        </div>
      </div>
      <!-- <div class='col-lg-2 matrix-col'>
      <div id="counter">
        <img src='img/Icon.png'>
          <div class="counter-value" data-count="10">0+</div>
             <h4>Number of Peer groups</h4>
      </div>
    </div> -->
    </div>
  </div>
</section>
<?php
  if($_SESSION['uid']=='')
  {
    include('p-includes/trial-tests.php');
  }
  include('p-includes/featured-home.php');
?>
<?php
  $langFolderName='home-how';
  $lNo=0;
  $getLangContent = mysqli_query($dbconn, "select * from languages where isactive='1' order by id asc");
  while ($getLangContent1 = mysqli_fetch_object($getLangContent)) { $lNo++;
  ?>
    <div class="lang-content2" id="lcontent2-<?php echo $getLangContent1->name; ?>" style="display:none">
      <?php
        include('p-languages/'.$langFolderName.'/'.$getLangContent1->name.'.php');
      ?>
    </div>
  <?php
  }
?>

<section class='testi-section'>
  <div class='container'>
    <h3>Testimonial</h3>
    <div class='row row-testimo owl-carousel'>
      <div class='col-12 testi'>
        <p>TestsGenie is the kind of platform I was waiting to be launched. Original questions, multiple test papers on each topic, detailed analysis and a very simple registration process. And the best part is that it provided me separate profiles for separate exams. That helped me to track progress on each of the exams independently. </p>
        <div class="text-center"><img src="img/testimonials/t1.jpg" style="display:inline;" /></div>
        <p class="textBold text-light-blue">Sandeep Kumar</p>
      </div>
      <div class='col-12 testi'>
        <p>I started using TestsGenie after my some of my friends recommended it. It provided me with thousands of test papers in a complete distraction free and easy to use platform. No Fees, no subscriptions. The detailed results and explanations were very helpful too. </p>
        <div class="text-center"><img src="img/testimonials/t2.jpg" style="display:inline;" /></div>
        <p class="textBold text-light-blue">Sudhanshu Agarwal</p>
      </div>
      <div class='col-12 testi'>
        <p>I used TestsGenie to prepare for SSC exams and my experience of using the platform was flawless. Free registration, all original and correct questions, explanations, social media posts and direct communication with experts. Highly recommended. </p>
        <div class="text-center"><img src="img/testimonials/t3.jpg" style="display:inline;" /></div>
        <p class="textBold text-light-blue">Divya Bisht</p>
      </div>
      <div class='col-12 testi'>
        <p>My search for India’s totally ad-free platform ended here. TestsGenie helped me prepare for the banking exams and provided me the right material for English, GK and other sections. TestsGenie experts were always available to answer any queries. </p>
        <div class="text-center"><img src="img/testimonials/t4.jpg" style="display:inline;" /></div>
        <p class="textBold text-light-blue">Shubham Mehta</p>
      </div>
    </div>
  </div>
</section>
<section class='download-app'>
  <div class='container'>
    <div class='row'>
      <div class='col-lg-6'>
        <h2>Download our Highly-Rated App</h2>
      </div>
      <div class='col-lg-6'>
        <a href="#" target='_blank'>
          <img src="img/Test Genie-13.png"></a>
        <a href="#" target='_blank'>
          <img src="img/Test Genie-14.png"></a>
      </div>
    </div>
  </div>
</section>
<section class='contact-page'>
  <div class='container'>
    <div class='row row-contact'>
      <div class='col-lg-4 contact-details' data-aos="flip-left">
        <div class="shadow p-3 mb-5 bg-yellow rounded">
          <h2>Contact us</h2>
          <ul class="list-unstyled">
            <li>
              <i class="fas  fa-mobile-alt fa-lg"></i><a href="tel: + 91 63092 54445" class='contact-top'>+ 91 63092 54445</a>
            </li>
            <li>
              <i class="fas fa-envelope-open-text fa-lg"></i>
              <a href="mailto:info@testsgenie.com">info@testsgenie.com
              </a>
            </li>
            <li>
              <p><i class="fas fa-home fa-lg"></i>TestsGenie Education Solutions Pvt. Ltd.Newyarpur, Gardanibagh, Patna, Bihar – 800001 INDIA
                </span>
              </p>
            </li>
            <li>
            </li>
          </ul>
        </div>
      </div>
      <style type="text/css">
        .antispam {
          display: none;
        }
      </style>
      <div class='col-lg-8'>
        <h2>Send us a Message</h2>
        <form action='contact.php' method='post' onSubmit="alert('Thank you for your Contacting us');">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder=" Name">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="email">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
          </div>
          <div class="col col-12 col-md-6 form-group">
            <div class='row'>
              <div class="col-lg-9">
                <div class='row'>
                  <div class='col-lg-6'>
                    <div class="code">
                      <div class="dynamic-code"></div>
                    </div>
                  </div>
                  <div class='col-lg-6 captcha-reload'>
                    <i class="fa fa-refresh fa-lg" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <input type="text" class="form-control" id="captcha-input" required autocomplete="off" placeholder="Enter captcha code ...">
                <span id="errCaptcha"></span>
              </div>
            </div>
            <div class="antispam w50">
              <p class="">Leave this empty:
                <br /><input name="url" />
              </p>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name='submit' class="btn btn-primary">SUBMIT</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class='faq'>
  <div class='container'>
    <h3>FAQs</h3>
    <div class='row row-faq owl-carousel'>
      <div class='col-12'>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ques'>Q</div>
          <div class='col-lg-10 ques'>
            <p>Is this app free?</p>
          </div>
        </div>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ans'>A</div>
          <div class='col-lg-10 ans'>
            <p>Yes, the app is totally free. <br>Just register and you are good to go. </p>
          </div>
        </div>
      </div>
      <div class='col-12'>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ques'>Q</div>
          <div class='col-lg-10 ques'>
            <p>Are the questions on this app designed in line with current patterns?</p>
          </div>
        </div>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ans'>A</div>
          <div class='col-lg-10 ans'>
            <p>All questions have been designed by experts and they are totally in line with the current patterns of various exams. Have fun! </p>
          </div>
        </div>
      </div>
      <div class='col-12'>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ques'>Q</div>
          <div class='col-lg-10 ques'>
            <p>What if I have a doubt on any of the questions? </p>
          </div>
        </div>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ans'>A</div>
          <div class='col-lg-10 ans'>
            <p>Just drop a message to TestsGenie team and an expert will answer your query. </p>
          </div>
        </div>
      </div>
      <div class='col-12'>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ques'>Q</div>
          <div class='col-lg-10 ques'>
            <p>Will the app cover more exams? </p>
          </div>
        </div>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ans'>A</div>
          <div class='col-lg-10 ans'>
            <p>TestsGenie will soon cover all major exams of India and abroad. </p>
          </div>
        </div>
      </div>
      <div class='col-12'>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ques'>Q</div>
          <div class='col-lg-10 ques'>
            <p>Is my personal data safe on the platform? </p>
          </div>
        </div>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ans'>A</div>
          <div class='col-lg-10 ans'>
            <p>TestsGenie will never sell your data to anybody. Please refer to our data policy for more details. </p>
          </div>
        </div>
      </div>
      <div class='col-12'>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ques'>Q</div>
          <div class='col-lg-10 ques'>
            <p>Will TestsGenie run on all platforms? </p>
          </div>
        </div>
        <div class='row ques align-items-center'>
          <div class='col-lg-2 ans'>A</div>
          <div class='col-lg-10 ans'>
            <p>As of now, TestsGenie is designed to run on Desktops, Laptops, Android and iOS platforms.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class='education-partners'>
  <div class='container'>
    <h3>Education Partners</h3>
    <div class='row row-testimo owl-carousel'>
      <?php include('p-includes/education-partners.php'); ?>
    </div>
  </div>
</section>
<?php include('includes/footer.php'); ?>