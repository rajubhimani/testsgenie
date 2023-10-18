<?php include('essentials/top.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>TestsGenie</title>
<link rel="shortcut icon" href="img/android-icon-72x72.png" />
 <!-- Font Awsome -->
<script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
 <!--  Google fonts -->
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
<!-- css stylesheets -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- animation -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="css/userdashobord.css">
 <!--  <link rel="stylesheet" href="styles.css"> -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
</head>
<body>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class='company-details'>
  	<img src='img/Testsgenie-02.png'>
  </div>
  <div class='profile'>
  	<img src='img/user.jpg'>
  	<h4>Amit Kumar</h4>
  	<p style='color:#818181;'>SSC CGL Profile</p>
  </div>
  <h4>Switch Profile</h4>
  <a class='service-title active' id='service1'><i class="fas fa-chart-line"></i>Dashboard</a>
  <a class='service-title' id='service2'><i class="fas fa-user"></i>Profile</a>
  <a class='service-title' id='service3'><i class="fas fa-file-alt"></i>Tests</a>
  <a class='service-title' id='service4'><i class="fas fa-spinner"></i>Score</a>
  <a class='service-title' id='service5'><i class="far fa-comment-dots"></i>My Genie</a>
  <a class='service-title' id='service6'><i class="fas fa-users"></i>Genie Update</a>
  <a class='service-title' id='service7'><i class="far fa-edit"></i>Attempted Test</a>
  <a class='service-title' id='service8'><i class="fas fa-bell"></i>Exam Notifications</a>
  <a class='service-title' id='service9'><i class="fas fa-question"></i>Ask Genie</a>
  <a class='service-title' id='service10'><i class="fas fa-ellipsis-h"></i>Coming Soon</a>
  <a class='user-logout'href='login.php'><h4>Logout</h4></a>
</div>
<div id="main">
  <button class="openbtn" onclick="openNav()">&#9776;</button>
  <div class='service-1 active' id='service1'>
    <div class='top-content'>
    <div style='display: flex;'>
      <img src='img/user.jpg'><h1>Welcome Back, Amit Kumar</h1>
    </div>
    <p style='color:#818181;padding-left: 60px;'><i class="fas fa-bell"></i>You have 5 test added since you last login</p>
  </div>
    <div class='dashboard-matrix'>
      <div class='martrix'>
        <div class='martix-box' style='background: #ffa500;'><i class="far fa-file-alt"></i></div>
        <h4>Total Tests</h4>
        <h1>100</h1>
        <hr><p><i class="fas fa-exclamation-triangle"></i>1% Completed</p>
      </div>
      <div class='martrix'>
        <div class='martix-box' style='background-color: #32b932;'><i class="fas fa-question"></i></div>
        <h4>Total Questions</h4>
        <h1>10000</h1>
        <hr><p><i class="far fa-calendar"></i> 0.5% Completed</p>
      </div>
      <div class='martrix'>
        <div class='martix-box'style='background:#ff0000;'><i class="fas fa-scroll"></i></div>
        <h4>Average Score</h4>
        <h1>50%</h1>
        <hr><p><i class="fas fa-tag"></i> Average score across the tests</p>
      </div>
      <div class='martrix'>
        <div class='martix-box'style='background: #50ABF1;'><i class="fas fa-clock"></i></div>
        <h4>Time Spent</h4>
        <h1>5 Hours</h1>
        <hr><p><i class="fas fa-history"></i>Total Time Spent on this profile</p>
      </div>
    </div>
    <div class='garph'>
      <div class='graph-box graph-1'>
        <img class='w-100'src='img/newchart.png'>
        <h4>Your Score</h4>
        <p><i class="fas fa-long-arrow-alt-up"></i> 55% improved in last one week</p>
        <hr><p><i class="far fa-clock"></i> Updated 4 min ago</p>
    </div>
      <div class='graph-box graph-1'>
        <img class='w-100'src='img/newchart.png'>
        <h4>Your Score</h4>
        <p><i class="fas fa-long-arrow-alt-up"></i> 55% improved in last one week</p>
        <hr><p><i class="far fa-clock"></i> Updated 4 min ago</p>
    </div>
      <div class='graph-box'>
        <h3>Goal Completion</h3>
        <img class='w-100'src='img/goal.png'>
      </div>
    </div>
    <div class='recent-update'>
      <div class='recent-box'>
       <h2>Recently Added Tests</h2>
       <div class='recent-content'>
        <img src='img/Test Genie-06.png'>
        <div class='inside-recent'>
         <h4>SSC CGL Tier-1 Mock Test</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
       <div class='recent-content'>
        <img src='img/Test Genie-06.png'>
        <div class='inside-recent'>
         <h4>SSC CGL Tier-1 Chapter Test</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
       <div class='recent-content'>
        <img src='img/Test Genie-05.png'>
        <div class='inside-recent'>
         <h4>SBI Clerk Mock Tests</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
       <div class='recent-content'>
        <img src='img/Test Genie-05.png'>
        <div class='inside-recent'>
         <h4>SBI Clerk Chapter Tests</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
      </div>
      <div class='recent-box'>
       <h2>Recently Added Tests</h2>
       <div class='recent-content'>
        <img src='img/Test Genie-06.png'>
        <div class='inside-recent'>
         <h4>SSC CGL Tier-1 Mock Test</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
       <div class='recent-content'>
        <img src='img/Test Genie-06.png'>
        <div class='inside-recent'>
         <h4>SSC CGL Tier-1 Chapter Test</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
       <div class='recent-content'>
        <img src='img/Test Genie-05.png'>
        <div class='inside-recent'>
         <h4>SBI Clerk Mock Tests</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
       <div class='recent-content'>
        <img src='img/Test Genie-05.png'>
        <div class='inside-recent'>
         <h4>SBI Clerk Chapter Tests</h4>
         <p>Total Questions : 100, Total Marks : 120</p>
       </div>
       <div class='start-btnn'>
       <a class='start-btnn'href='#'>Start</a></div>
       </div>
      </div>
    </div>
  </div>
  <div class='service-1 ' id='service2'>
    <div class='row profile-row'>
      <div class='col-lg-3 acct-sidebar'>
        <ul>
          <li class='account-title active' id='account1'><i class="fas fa-user"></i> Edit Profile</li>
          <li class='account-title' id='account2'><i class="fas fa-lock"></i> Change Password</li>
          <li class='account-title' id='account3'><i class="fas fa-folder-minus"></i>Educational Qualification</li>
        </ul>
      </div>
      <div class='col-lg-9'>
        <div class='account-1 active'id='account1'>
          <form>
            <div class='row'>
              <div class="col"><img src='img/Test-15.png'></div>
              <div class="col">
                <div class='prof-btn'><a href=''>Change Profile Picture</a></div>
              </div>
              <div class="col">
                <div class='prof-btn'><a href='' class='rem-btn'>Remove</a></div>
              </div>
             <!--  <div class="col"></div> -->
            </div>
            <div class="row">
            <div class="col">
              <label for="">First Name</label>
              <input type="text" class="form-control" placeholder="Enter your First Name">
            </div>
            <div class="col">
              <label for="">Last Name</label>
              <input type="text" class="form-control" placeholder="Enter your Last Name">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="l">Email Address</label>
              <input type="email" class="form-control" placeholder="Enter your email">
            </div>
            <div class="col">
              <label for="">Date of Birth</label>
              <input type="Date" class="form-control" placeholder="Enter your Date of birth">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="l">Phone Number</label>
              <input type="number" class="form-control" placeholder="Enter your phone number">
            </div>
            <div class="col">
              <label for="l">Password Recovery Email</label>
              <input type="email" class="form-control" >
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="">Address</label>
              <textarea type="text" class="form-control" placeholder="Enter your Address"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="">City</label>
              <input type="text" class="form-control" placeholder="Enter your City">
            </div>
            <div class="col">
              <label for="l">Pin</label>
              <input type="number" class="form-control" placeholder="Enter your pin">
            </div>
          </div>
          <div class='prof-btn'><a href=''>Save</a></div>
        </form>
        </div>
        <div class='account-1'id='account2'>
          <form>
          <div class="row">
            <div class="col">
              <label for="l">Email</label>
              <input type="email" class="form-control" >
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="l">Old Password</label>
              <input type="password" class="form-control" >
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="l">New Password</label>
              <input type="password" class="form-control" >
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label for="l">Re-Enter Password</label>
              <input type="password" class="form-control" >
            </div>
          </div>
          <div class='prof-btn'><a href=''>Save</a></div></form>
        </div>
        <div class='account-1'id='account3'>
          <form>
            <div class="row">
              <div class="col">
              </div>
              <div class="col">
                <label for="l">Institute Name</label>
              </div>
              <div class="col">
                <label for="l">Qualification Category</label>
              </div>
              <div class="col">
                <label for="l">Year of passing</label>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">Highest Qualification</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">Post Graduate</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">Post Graduate</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l"> XII Grade</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">X Grade</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="number" class="form-control">
              </div>
            </div>
            <div class="row">
              <div class="col">
                <label for="l">Any other Qualification</label>
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="text" class="form-control" >
              </div>
              <div class="col">
                <input type="number" class="form-control">
              </div>
            </div>
            <div class='prof-btn'><a href=''>Save</a></div>
          </form>
        </div>
      </div>
    </div>
  </div>
   <div class='service-1 ' id='service3'>
     <div class='row tests-row-1'>
       <div class='test-category test-category1 active'id='test1'>Resume Tests</div>
       <div class='test-category test-category1'id='test2'>Mock Tests</div>
       <div class='test-category test-category1'id='test3'>Previous Year Tests</div>
       <div class='test-category test-category1'id='test4'>Sectional Tests</div>
       <div class='test-category test-category1'id='test5'>Chapter Tests</div>
   </div>
   <div class='test-1  active'id='test1'>
    <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div>
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
            <h4><b>Pending Tests</b></h4><h4><b>160</b>/200</h4></div>
            <div class="progress">
              <div class="progress-bar" style="width:80%"></div>
            </div>
          </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <span id="dots"></span><span id="more">
        <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div></span>
      <button onclick="myFunction()" id="myBtn">Load More</button>
   </div>
   <div class='test-1'id='test2'>
      <div class='row'>
        <div class='col-lg-3'><div class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div>
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
            <h4><b>Pending Tests</b></h4><h4><b>160</b>/200</h4></div>
            <div class="progress">
              <div class="progress-bar" style="width:80%"></div>
            </div>
          </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <span id="dots"></span><span id="more">
        <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div></span>
      <button onclick="myFunction()" id="myBtn">Load More</button>
   </div>
   <div class='test-1'id='test3'>
    <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div>
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
            <h4><b>Pending Tests</b></h4><h4><b>160</b>/200</h4></div>
            <div class="progress">
              <div class="progress-bar" style="width:80%"></div>
            </div>
          </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <span id="dots"></span><span id="more">
        <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div></span>
      <button onclick="myFunction()" id="myBtn">Load More</button>
   </div>
   <div class='test-1'id='test4'>
    <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div>
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
            <h4><b>Pending Tests</b></h4><h4><b>160</b>/200</h4></div>
            <div class="progress">
              <div class="progress-bar" style="width:80%"></div>
            </div>
          </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <span id="dots"></span><span id="more">
        <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div></span>
      <button onclick="myFunction()" id="myBtn">Load More</button>
   </div>
   <div class='test-1'id='test5'>
    <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div>
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
            <h4><b>Pending Tests</b></h4><h4><b>160</b>/200</h4></div>
            <div class="progress">
              <div class="progress-bar" style="width:80%"></div>
            </div>
          </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <span id="dots"></span><span id="more">
        <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div></span>
      <button onclick="myFunction()" id="myBtn">Load More</button>
   </div>
 </div>
 <div class='service-1 ' id='service4'>
   <div class='row tests-row-1'>
       <div class='test-category test-category2 active'id='test1'>Resume Tests</div>
       <div class='test-category test-category2'id='test2'>Mock Tests</div>
       <div class='test-category test-category2'id='test3'>Previous Year Tests</div>
       <div class='test-category test-category2'id='test4'>Sectional Tests</div>
       <div class='test-category test-category2'id='test5'>Chapter Tests</div>
   </div>
   <div class='test-2 active'id='test1'>
    <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div>
      <div class="table-responsive">
            <table class="table table-1">
              <thead class="top-th">
              <tr>
                <th scope="col">Test Name</th>
                <th scope="col">Date & Time</th>
                <th scope="col">Your Score</th>
                <th scope="col">Cut off Marks</th>
                <th scope="col">Detailed Analysis</th>
              </tr>
            </thead>
              <tbody>
              <tr style='background: #fffdfd;'>
                <th>Mock Test 1</th>
                <td>8-Nov-2020</td>
                <td>120</td>
                <td>150</td>
                <td><a href='#'>click here</a></td>
              </tr>
              <tr style='background:#F5FCFE;'>
                <th>Mock Test 2</th>
                <td>8-Nov-2020</td>
                <td>120</td>
                <td>150</td>
                <td><a href='#'>click here</a></td>
              </tr>
              <tr style='background: #fffdfd;'>
                <th>Mock Test 3</th>
                <td>8-Nov-2020</td>
                <td>120</td>
                <td>150</td>
                <td><a href='#'>click here</a></td>
              </tr>
              <tr style='background:#F5FCFE;'>
               <th>Mock Test 4</th>
                <td>8-Nov-2020</td>
                <td>120</td>
                <td>150</td>
                <td><a href='#'>click here</a></td>
              </tr>
            </tbody>
            </table>
          </div>
          <h2>Chart Title</h2>
          <img src='img/latestchart.png'>
    </div>
 </div>
  <div class='service-1'id='service5'>
   <h1>Coming Soon</h1>
  </div>
    <div class='service-1 ' id='service6'>
   <div class='row genie-update-row'>
     <h2>Genie Update</h2>
     <div class='col-12 genie-update-col p-3'>
     <h4><img src='img/genie.png'>TestsGenie<span>1d</span></h4>
     <p>In these difficult times, let us all resolve to <a href="#"target='_blank'>#Rise</a> & stand by each other At Tech Mahindra, our teams have stepped forward to support communities, associates & families across India  Visit our Covid response page to stay updated <a href='https://lnkd.in/gRTeucK'target='_blank'>- https://lnkd.in/gRTeucK</a></p>
   </div>
   <div class='col-12 genie-update-col p-3'>
     <h4><img src='img/genie.png'>TestsGenie<span>5d</span></h4>
     <a href="https://www.google.com/search?q=(8)+Tech+Mahindra:+Posts+%7C+LinkedIn&rlz=1C1SQJL_enIN908IN908&oq=(8)+Tech+Mahindra:+Posts+%7C+LinkedIn&aqs=chrome..69i57.911j0j7&sourceid=chrome&ie=UTF-8&ibp=htl;jobs&sa=X&ved=2ahUKEwjp1LOAodXwAhWa73MBHVFHDs0Qkd0GMAF6BAgEEAE#fpstate=tldetail&htivrt=jobs&htiq=(8)+Tech+Mahindra:+Posts+%7C+LinkedIn&htidocid=5Qj52WdDPJW2HEOFAAAAAA%3D%3D"target='_blank'><img src='img/mehi.png'></a>
   </div>
   </div>
  </div>
  <div class='service-1 ' id='service7'>
    <div class='row tests-row-1'>
       <div class='test-category test-category3 active'id='test1'>Resume Tests</div>
       <div class='test-category test-category3'id='test2'>Mock Tests</div>
       <div class='test-category test-category3'id='test3'>Previous Year Tests</div>
       <div class='test-category test-category3'id='test4'>Sectional Tests</div>
       <div class='test-category test-category3'id='test5'>Chapter Tests</div>
   </div>
   <div class='test-3 active'id='test1'>
    <h2>All Attempted Tests </h2>
    <!-- <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div> -->
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
            <h4><b>Pending Tests</b></h4><h4><b>160</b>/200</h4></div>
            <div class="progress">
              <div class="progress-bar" style="width:80%"></div>
            </div>
          </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div>
      <span id="dots"></span><span id="more">
        <div class='row test-cont'>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
      </div></span>
      <button onclick="myFunction()" id="myBtn">Load More</button>
   </div>
 </div>
  <div class='service-1 ' id='service8'>
    <h2>Exam Notifications</h2>
    <div class='row exam-notification-row'>
        <a href='exam.php'><div class='examm'>
        <img src='img/Test Genie-06.png'></div>
        <p>SSC CGL Tier 1 Notification
        Notification Date – 21 st May 2021</p></a>
        <a href='exam.php'><div class='examm'>
        <img src='img/Test Genie-05.png'></div>
        <p>SBI Exam</p></a>
        <a href='exam.php'><div class='examm'>
        <img src='img/railway.png'></div>
        <p>Railway Exam</p></a>
    </div>
  </div>
  <div class='service-1 contcct' id='service9'>
    <h2>Ask Genie</h2>
    <form action='contact.php'class='ask-form' method='post'onSubmit="alert('Thank you for your Contacting us');">
          <div class="row contact-input-row">
            <div class="col">
              <input type="text" class="form-control" name='fname' placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" name='lname'placeholder="Last name">
            </div>
          </div>
           <div class="row contact-input-row">
            <div class="col">
              <input type="email"  name="email"  class="form-control" placeholder="email">
            </div>
            <div class="col">
              <input type="text"  name="phone"  class="form-control" placeholder="Phone Number">
            </div>
          </div>
            <div class="form-group">
              <textarea class="form-control"  name="message"  id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
            </div>
            <div class="form-group contact-page-btn">
             <button type="submit" name='submit'>SUBMIT</button>
            </div>
        </form>
  </div>
  <div class='service-1 ' id='service10'>
    <div class='row tests-row-1'>
       <div class='test-category test-category4 active'id='test1'>Resume Tests</div>
       <div class='test-category test-category4'id='test2'>Mock Tests</div>
       <div class='test-category test-category4'id='test3'>Previous Year Tests</div>
       <div class='test-category test-category4'id='test4'>Sectional Tests</div>
       <div class='test-category test-category4'id='test5'>Chapter Tests</div>
   </div>
   <div class='test-4 active'id='test1'>
    <h2>Upcoming Exams</h2>
    <!-- <div class='row'>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Start Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>End Date</a></div></div>
        <div class='col-lg-3'><div  class='test-cont-btn'><a href='#'>Search</a></div></div>
        <div class='col-lg-3'></div>
      </div> -->
      <div class='row'>
          <div class='col-12'>
            <div class=' test-bar'>
            <h4><b>Pending Tests</b></h4><h4><b>160</b>/200</h4></div>
            <div class="progress">
              <div class="progress-bar" style="width:80%"></div>
            </div>
          </div>
      </div>
      <div class='row test-cont'>
        <div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div>
        <h4>Date : </h4><h4>Time : </h4></div>
      </div>
      <div class='row test-cont'>
        <div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div><h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div><h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div><h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-06.png'>
          <p>SSC CGL Tier-2<br> Mock Test-1</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div><h4>Date : </h4><h4>Time : </h4></div>
        <div>
        <div class='test-card test-card-1'>
          <img src='img/Test Genie-05.png'>
          <p>SBI PO<br> 2017</p>
          <p>Total Questions : 50<br>Duration Of Test : 30</p>
        </div><h4>Date : </h4><h4>Time : </h4></div>
      </div>


  </div>
</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
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
<?php include('admin/config/dbclose.php') ?>