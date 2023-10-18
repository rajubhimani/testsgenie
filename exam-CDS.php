<?php include( 'essentials/top.php'); ?>
<?php include( 'includes/header.php'); ?>

<section class='exam-details'>
	<div class='container-fluid'>
		<div class="row">
			<div class='background-pages'>
				<div class='important-links'>
                <h1>UPSC CDS Exam</h1>
                <div class="stage">
						<?php
						if($_SESSION['uid']!='')
						{
							?>
							<div class="cubespinner">
								<div class="face1">	<a href='user-dashboard/tests.php'><h4>Start Test</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
								<div class="face2">	<a href='user-dashboard/tests.php'><h4>SSC Exam</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
								<div class="face3">	<a href='user-dashboard/tests.php'><h4>Start Test</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
								<div class="face4">	<a href='user-dashboard/tests.php'><h4>SSC Exam</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
							</div>
							<?php
						}
						else
						{
							?>
							<div class="cubespinner">
								<div class="face1">	<a href='signup.php'><h4>Register</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
								<div class="face2">	<a href='login.php'><h4>Login</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
								<div class="face3">	<a href='signup.php'><h4>Register</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
								<div class="face4">	<a href='login.php'><h4>Login</h4>
									<img src='img/Testsgenie-02.png'></a>
								</div>
							</div>
							<?php
						}
						?>
					</div>
				</div>
					<div class='col-lg-3 sidebar'>
					<ul class="list-unstyled">
						<li class='exam-title active' id='exam1'>	<a href="#top">Overview</a>
						</li>
						<li class='exam-title' id='exam2'>	<a href="#top">Important Dates</a>
						</li>
						<li class='exam-title' id='exam3'>	<a href="#top3">Locations</a>
						</li>
						<li class='exam-title' id='exam4'>	<a href="#top">Number of Posts</a>
						</li>
						<li class='exam-title' id='exam5'>	<a href="#top">Eligibility</a>
						</li>
						<li class='exam-title' id='exam6'>	<a href="#top">How To Apply</a>
						</li>
						<li class='exam-title' id='exam7'>	<a href="#top">Exam Pattern</a>
						</li>
						<li class='exam-title' id='exam8'>	<a href="#top">Syllabus</a>
						</li>
						<li class='exam-title' id='exam9'>	<a href="#top">Selection Process</a>
						</li>
						<li class='exam-title' id='exam10'>	<a href="#top">Previous Year Cut-Off</a>
						</li>
						<li class='exam-title' id='exam11'>	<a href="#top">Detailed Advertisement</a>
						</li>
						<li class='exam-title' id='exam12'>	<a href="#top">Admit Card</a>
						</li>
						<li class='exam-title' id='exam13'>	<a href="#top">Enroll on TestsGenie</a>
						</li>
					</ul>
				</div>
				<div class='col-lg-9 sidebar-content'>
					<div class='exam-1 active' id='exam1'>
						<h2>Overview</h2>
						<p>CDS 2022 Exam Date: Union Public Service Commission has announced the UPSC CDS Exam Date 2022 for Combined Defence Service Examination (I) at upsc.gov.in on. The online registration process for 371 vacancies has been over on upsc.gov.in on 11th January 2022 and now the candidates must have begun with their preparation for the written exam. The CDS 1 Exam 2022 has been scheduled for 10th April 2022 (Sunday). </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p><span>22-12-2021 to 11-01-2022</span> </p>
								<h4>Exam Date</h4>
								<p><span>CDS-I: 10-April-2022</span>  </p>
								<h4>Eligibility</h4>
								<p><span>Graduate & Unmarried </span></p>
							</div>
							<div class='over-view'>
								<h4>Vacancies</h4>
								<p><span>371</span></p>
								<h4>Application fee</h4>
								<p><span>Rs. 200</span></p>
							</div>
							<div class='over-view' style="width: 100%;">
								<h4>Salary</h4>
								<div class='para-two'>
									<p><span><b>Rank</b></span>
									</p>
									<p><span><b>Level</b></span>
									</p>
									<p><span><b>Pay Scale/ Salary</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>Lieutenant</span></p>
									<p><span>Level 10</span></p>
									<p><span>	INR 56,100 – 1,77,500</span></p>
								</div>
								<div class='para-two'>
									<p><span>Captain	</span></p>
									<p><span>Level 10 B</span></p>
									<p><span>	INR 61,300 – 1,93,900</span></p>
								</div>
								<div class='para-two'>
									<p><span>Major	</span></p>
									<p><span>Level 11</span></p>
									<p><span>	INR 69,400 – 2,07,200</span></p>
								</div>
								<div class='para-two'>
									<p><span>Lieutenant Colonel		</span></p>
									<p><span>Level 12 A</span></p>
									<p><span>INR 1,21,200 – 2,12,400</span></p>
								</div>
								<div class='para-two'>
									<p><span>Colonel</span></p>
									<p><span>	Level 13	</span></p>
									<p><span>INR 1,30,600 – 2,15,900</span></p>
								</div>
								<div class='para-two'>
									<p><span>Brigadier	</span></p>
									<p><span>Level 13 A</span></p>
									<p><span>INR 1,39,600 – 2,17,600</span></p>
								</div>
								<div class='para-two'>
									<p><span>Major General	</span></p>
									<p><span>Level 14	</span></p>
									<p><span>INR 1,44,200 – 2,18,200</span></p>
								</div>
								<div class='para-two'>
									<p><span>Lieutenant General HAG Scale		</span></p>
									<p><span>Level 15</span></p>
									<p><span>INR 1,82,200 – 2,24,100</span></p>
								</div>
								<div class='para-two'>
									<p><span>HAG + Scale</span></p>
									<p><span>Level 16</span></p>
									<p><span>INR 2,05,400 – 2,24,400</span></p>
								</div>
								<div class='para-two'>
									<p><span>VCOAS/ Lieutenant General (NFSG) / Army Cdr	</span></p>
									<p><span>Level 17	</span></p>
									<p><span>INR 2,25,000 (Fixed)</span></p>
								</div>
								<div class='para-two'>
									<p><span>COAS</span></p>
									<p><span>Level 18</span></p>
									<p><span>INR 2,25,000 (Fixed)</span></p>
								</div>
							</div>
							<div class='over-view' style="width: 100%;">
								<h4>CDS-I Written Test</h4>
								<p><span>For Indian military Academy, Indian Naval Academy and Air Force Academy</span></p>
								<div class='para-two'>
									<p><span><b>Subject</b></span>
									</p>
									<p><span><b>Maximum marks</b></span>
									</p>
									<p><span><b>Duration</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>English</span></p>
									<p><span>120</span></p>
									<p><span>2 hours</span></p>
								</div>
								<div class='para-two'>
									<p><span>General Knowledge</span></p>
									<p><span>120</span></p>
									<p><span>2 hours</span></p>
								</div>
								<div class='para-two'>
									<p><span>Elementary Mathematics</span></p>
									<p><span>120</span></p>
									<p><span>2 hours</span></p>
								</div>
								<p><span>For Officer's Training Academy</span></p>
								<div class='para-two'>
									<p><span>English</span>
									</p>
									<p><span>100</span>
									</p>
									<p><span>2 hours</span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>General Knowledge</span>
									</p>
									<p><span>100</span>
									</p>
									<p><span>2 hours</span>
									</p>
								</div>
						</div>
						<p style='color:#9f1717;padding-top:10px;'>Note: SC/ST/Female candidates are exempted from paying the application fees.</p>
						<p>The payment can be done through online/offline mode (Net Banking, Mastercard/Debit Card or cash deposit in SBI Bank.).</p>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
				</div>
					<div class='exam-1' id='exam2'>
						<h2>Important Dates</h2>
						<p>UPSC CDS-I 2022 Notification is out!. UPSC CDS-I 2022 related important dates can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>December 22, 2021</span>
								</p>
								<h4>Online Application Date </h4>
								<p><span> December 22, 2021 to January 11, 2022 (6PM)</span>
								</p>
								<h4>Withdrawal of Application</h4>
								<p><span>January 18-24, 2022</span></p>
								<h4>Availability of Admit Card</h4>
								<p><span>3rd week March 2022 (Tentative)</span>
								</p>
							</div>
							<div class='over-view'>
								<h4>CDS-I Exam Date </h4>
								<p><span>April 10, 2022</span></p>
								<h4>Result Declaration</h4>
								<p><span>May 2022 (Tentative)</span></p>
								<h4>Interview</h4>
								<p><span>To be notified later</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam3'>
						<h2>Locations</h2>
						<p>CDS I 2022 Exam Centers: The candidates were given choice to choose their preferred cities for the exam centers while filling their application form. Below is the list of cities where UPSC CDS-I Exam will be conducted on 10th April 2022.</p>
						<div class='over-view' style='width: 100%;'>
							<div class='para-two'>
								<p>Agartala</p><p>	Bilaspur</p><p>	Ghaziabad</p><p>	Gurgaon</p><p> Navi Mumbai</p><p>Panaji (Goa)	</p>
							</div>
							<div class='para-two'>
								<p>Agra</p><p>	Chandigarh</p><p>	Gorakhpur</p><p>Gwalior	</p><p>	Patna</p><p>	Port Blair</p>
							</div>
							<div class='para-two'>
								<p>Ahmedabad </p><p>Chennai	</p><p>	Hyderabad</p><p>Imphal	</p><p>Prayagraj (Allahabad) </p><p>Puducherry	</p>
							</div>
							<div class='para-two'>
								<p>Aizwal </p><p>Coimbatore	</p><p>Indore	</p><p>Itanagar	</p><p>Pune	</p><p>	Raipur</p>
							</div>
							<div class='para-two'>
								<p>Aligarh </p><p>Cuttack	</p><p>Jabalpur	</p><p>Jaipur	</p><p>Rajkot </p><p>Ranchi	</p>
							</div>
							<div class='para-two'>
								<p>Almora </p><p>	Delhi</p><p>Jammu	</p><p>	Jodhpur</p><p>Vellore	</p><p>Vishakhapatnam	</p>
							</div>
							<div class='para-two'>
								<p>Ananthapur </p><p>Dharwad	</p><p>Kochi	</p><p>Kohima	</p><p>Shillong </p><p>Shimla	</p>
							</div>
							<div class='para-two'>
								<p>Aurangabad </p><p>	Dispur</p><p>Kolkata	</p><p>Kozhikode	</p><p>Siliguri	</p><p>Srinagar	</p>
							</div>
							<div class='para-two'>
								<p>Bareilly </p><p>Faridabad	</p><p>	Leh</p><p>Lucknow</p><p>Thane </p><p>Thiruvananthapuram	</p>
							</div>
							<div class='para-two'>
								<p>Bengaluru </p><p>Gangtok	</p><p>Ludhiana	</p><p>Madhurai	</p><p>Tiruchirapalli	</p><p>Tirupati	</p>
							</div>
							<div class='para-two'>
								<p> Jorhat</p><p>Garwhal (Srinagar)	</p><p>Mysuru	</p><p>Mumbai	</p><p>Udaipur </p><p>Varanasi	</p>
							</div>
							<div class='para-two'>
								<p>Bhopal </p><p>Gautam Budh Nagar	</p><p>Nagpur	</p><p>Sambalpur	</p><p>Vijayawada	</p><p>	Warangal</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam4'>
						<h2>Number of Posts</h2>
						<h4>CDS – I 2022 Vacancy Details</h4>
						<p>A total of 341 vacancies were announced for Indian Air Force, Indian Military Academy, Indian Naval Academy and Officer’s Training Academy. Have a look at the Vacancy distribution for the CDS-1 2022 Exam. </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>341</span></p>
							</div>
						</div>
						<div class='over-view' style='width: 100%;'>
							<h4>CDS Vacancy 2022 for CDS 1 Exam</h4>
							<div class='para-two'>
								<p><span><b>Name of the academy</b></span></p>
								<p><span><b>Number of Vacancies</b></span></p>
							</div>
							<div class='para-two'>
								<p><span>Indian Military Academy, Dehradun</span></p>
								<p><span>100</span></p>
							</div>
							<div class='para-two'>
								<p><span>Indian Naval Academy, Ezhimala</span></p>
								<p><span>22</span></p>
							</div>
							<div class='para-two'>
								<p><span>Air Force Academy, Hyderabad</span></p>
								<p><span>32</span></p>
							</div>
							<div class='para-two'>
								<p><span>Officers’ Training Academy, Chennai (Madras) SSC Men</span></p>
								<p><span>170</span></p>
							</div>
							<div class='para-two'>
								<p><span>Officers Training Academy, Chennai SSC Women</span></p>
								<p><span>17</span></p>
							</div>
							<div class='para-two'>
								<p><span><b>Total Vacancies</b></span></p>
								<p><span><b>341</b></span></p>
							</div>
						</div>

						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam5'>
						<h2>Eligibility</h2>
						<h4>UPSC CDS 2022 Eligibility Criteria</h4>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Nationality</h4>
								<p>a citizen of India or</p>
								<p>a subject of Nepal or</p>
								<p>a subject of Bhutan or</p>
								<p>a Tibetan refugee who came over to India, before the 1st January 1962 with the intention of permanently settling in India, or</p>
								<p>a person of Indian origin who has migrated from Pakistan, Burma, Sri Lanka, East African Countries of Kenya, Uganda, the United Republic of Tanzania (Formerly Tanganyika and Zanzibar), Zambia, Malawi, Zaire, Ethiopia and Vietnam with the intention of permanently settling in India.</p>
							</div>
							<div class='over-view'>
								<h4>Educational Qualification </h4>
								<div class='para-two'>
									<p><b>Academy</b></p>
									<p><b>Education Qualification</b> </p>
								</div>
								<div class='para-two'>
									<p>Indian Military Academy (IMA) and Officers’ Training Academy (OTA)</p>
									<p>Bachelor’s Degree from a recognised university</p>
								</div>
								<div class='para-two'>
									<p>Indian Naval Academy (INA)</p>
									<p>Bachelors in Engineering from a recognised University</p>
								</div>
								<div class='para-two'>
									<p>Air Force Academy (AFA)</p>
									<p>Graduated with  Physics and Mathematics in Class 12th or Bachelor of Engineering
									</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Limit</h4>
								<div class='para-two'>
									<p><b>Academy</b></p>
									<p><span><b>Age Limit </b></span></p>
									<p><b>Marital Status</b></p>
								</div>
								<div class='para-two'>
									<p>Indian Military Academy (IMA)</p>
									<p><span>19 – 24 Years</span>
									</p>
									<p>Unmarried</p>
								</div>
								<div class='para-two'>
									<p>Indian Naval Academy (INA)</p>
									<p><span>19 – 22 Years</span>
									</p>
									<p>Unmarried</p>
								</div>
								<div class='para-two'>
									<p>Air Force Academy</p>
									<p><span>19 – 23 Years</span>
									</p>
									<p><25 years unmarried or >25 years both married and unmarried.</p>
								</div>
								<div class='para-two'>
									<p>Officers’ Training Academy (SSC Women Non-Technical Course)</p>
									<p><span>19 – 25 Years</span>
									</p>
									<p>Unmarried females, issueless widows who haven’t remarried, and issueless divorcees who have not remarried are eligible.</p>
								</div>
								<div class='para-two'>
									<p>Officers’ Training Academy (SSC Course for Men)</p>
									<p><span>19 – 25 Years</span>
									</p>
									<p>Unmarried</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Marital Status and Sex</h4>
									<p>For Indian Military Academy, Indian Naval Academy, only Unmarried males are eligible to apply for CDS Exam</p>
									<p>For Indian Air Force Academy, both married and unmarried males can apply, however marriage during the training is not permitted</p>
									<p>For Officer Training Academy, unmarried males & females can apply for CDS Exam.</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam6'>
						<h2>How to apply </h2>
						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Visit the official website of UPSC i.e. <a href='https://www.upsc.gov.in/'target="_blank">www.upsc.gov.in</a> or directly apply from the above link.</p>
						<p><i class="far fa-dot-circle"></i>On the homepage, click on Examination >> Active Examinations >> Online Application For UPSC CDS 1 Exam.</p>
						<p><i class="far fa-dot-circle"></i>Click on "Part-1" against Combined Defence Examination (II) 2022</p>
						<p><i class="far fa-dot-circle"></i>Read all the instructions carefully and proceed by clicking on "Yes"</p>
						<p><i class="far fa-dot-circle"></i>You will be redirected to a new page, start filling in your details correctly.</p>
						<p><i class="far fa-dot-circle"></i>Select your preferences carefully and continue to Part-II.</p>
						<p><i class="far fa-dot-circle"></i>Pay the required application fee through online/offline mode as discussed above.</p>
						<p><i class="far fa-dot-circle"></i>Select the desired examination center from the list.</p>
						<p><i class="far fa-dot-circle"></i>Upload scanned documents as required in the application form.</p>
						<p><i class="far fa-dot-circle"></i>Check all the details and click on "Submit". Download a copy of the application form for future reference.</p>
						<h4>Documents Required to fill CDS Application Form</h4>
						<p><i class="far fa-dot-circle"></i>Before filling the UPSC CDS I application form, the candidates must keep the following documents aside.</p>
						<p><i class="far fa-dot-circle"></i>Scanned images of photograph and signature </p>
						<p><i class="far fa-dot-circle"></i>Photo-identity card in PDF format (Aadhar Card / Voter Card/PAN Card/ Passport/ Driving License/ School Photo ID or any other photo ID Card issued by the State / Central Government) </p>
						<p><i class="far fa-dot-circle"></i>Bank details to make an online transaction</p>
						<p><i class="far fa-dot-circle"></i>Marksheet and admit card of Class 10 and 12</p>
					</div>
					<div class='exam-1' id='exam7'>
						<h2>Exam Pattern</h2>
						<h4>For Indian Military Academy, Indian Naval Academy and Air Force Academy</h4>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-startt">SNo</th>
										<th scope="col">Subject</th>
										<th scope="col">Maximum Marks</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>1</th>
										<td>English</td>
										<td>120</td>
										<td>2 hours</td>
									</tr>
									<tr>
										<th>2</th>
										<td>General Knowledge</td>
										<td>120</td>
										<td>2 hours</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>3</th>
										<td>Elementary Mathematics</td>
										<td>100</td>
										<td>2 hours</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>For Officers’ Training Academy</h4>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-startt">SNo</th>
										<th scope="col">Subject</th>
										<th scope="col">Maximum Marks</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>1</th>
										<td>English</td>
										<td>100</td>
										<td>2 hours</td>
									</tr>
									<tr>
										<th>2</th>
										<td>General Knowledge</td>
										<td>100</td>
										<td>2 hours</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>The candidates who are preparing for CDS-I Exam 2022, must be familiar with the exam pattern that is followed by UPSC.  </p>
							<p><i class="far fa-dot-circle"></i>There will be Multiple-Choice Questions in each paper </p>
							<p><i class="far fa-dot-circle"></i>The question paper for General Knowledge and Elementary Mathematics will be set in Hindi as well as English</p>
							<p><i class="far fa-dot-circle"></i>There will be a penalty of 1/3 marks for a wrong answer </p>
							<p><i class="far fa-dot-circle"></i>Duration of each exam is separate i.e. 2 hours. </p>
					</div>
					<div class='exam-1' id='exam8'>
						<h2>Syllabus</h2>
						<h4>CDS-I 2022 Syllabus: </h4>
							<div class='over-view'style='width:100%;'>
								<h4>Elementary Mathematics</h4>
								<p><i class="far fa-dot-circle"></i>Algebra- Basic Operations, simple factors, Remainder Theorem, H.C.F., L.C.M., Theory of polynomials, solutions of quadratic equations, relation between its roots and coefficients (Only real roots to be considered), Simultaneous linear equations in two unknowns—analytical and graphical solutions, Simultaneous linear inequations in two variables and their solutions, Practical problems leading to two simultaneous linear equations or inequations in two variables or quadratic equations in one variable & their solutions, Set language and set notation, Rational expressions and conditional identities, Laws of indices</p>
								<p><i class="far fa-dot-circle"></i>Arithematic- Number System: Natural numbers, Integers, Rational and Real numbers,Fundamental operations: addition, substraction, multiplication, division, Square roots, Decimal fractions, Unitary method, time and distance, time and work, percentages, applications to simple and compound interest, profit and loss, ratio and proportion, variation Elementary Number Theory: Division algorithm, Prime and composite numbers, Tests of divisibility by 2, 3, 4, 5, 9 and 11, Multiples and factors. Factorisation Theorem, H.C.F. and L.C.M., Euclidean algorithm, Logarithms to base 10, laws of logarithms, use of logarithmic tables</p>
								<p><i class="far fa-dot-circle"></i>Trigonometry- Sine ×, cosine ×, Tangent × when 0° < × < 90°, Values of sin ×, cos × and tan ×, for ×= 0°, 30°, 45°, 60° and 90°, Simple trigonometric identities, Use of trigonometric tables, Simple cases of heights and distances</p>
								<p><i class="far fa-dot-circle"></i>Geometry- Lines and angles, Plane and plane figures, Theorems on Properties of angles at a point, Parallel lines, Sides and angles of a triangle, Congruency of triangles, Similar triangles Concurrence of medians and altitudes, Properties of angles, sides and diagonals of a Parallelogram, rectangle and square, Circles and its properties including tangents and normals, Loci</p>
								<p><i class="far fa-dot-circle"></i>Mensuration- Areas of squares, rectangles, parallelograms, triangle and circle, Areas of figures which can be split up into these figures (Field Book), Surface area and volume of cuboids, lateral surface and volume of right circular cones and cylinders, surface area and volume of spheres</p>
								<p><i class="far fa-dot-circle"></i>Statistics- Collection and tabulation of statistical data, Graphical representation frequency polygons, histograms, bar charts, pie charts etc, Measures of central tendency</p>
							</div>
							<div class='row syll-row'>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>English</li>
										<li>Spotting Errors </li>
										<li>Questions Sentence</li>
										<li>Arrangement Questions</li>
										<li>Synonyms & Antonyms</li>
										<li>Selecting Words</li>
										<li>Ordering of Sentence</li>
										<li>Comprehension Questions</li>
										<li>Ordering of words in a sentence</li>
										<li>Fill in the blanks questions </li>
										<li>Idioms and Phrases</li>
									</ul>
								</div>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>General Knowledge</li>
										<li>Economics </li>
										<li>Physics , Biology , History , Chemistry , Geography</li>
										<li>Current Affairs</li>
										<li>Politics ,  Sociology</li>
										<li>Defence related Award</li>
										<li>Environment</li>
										<li>Sport</li>
										<li>Cultural</li>
										<li>Book</li>
										<li>Statement true/false</li>
									</ul>
								</div>
							</div>
							<h2>CDS-I 2022 SSB Interview</h2>
							<h4>CDS SSB Interview Stage 1</h4>
							<p>Officer Intelligence Rating (OIR) will be conducted which involves a Picture Perception and Description Test (PP & DT) wherein candidates will be shown a picture for 30 seconds. Post 30 seconds, candidates will be given 4 minutes to write about the picture. Then several groups of 15 members will be formed to discuss and arrive at a conclusion regarding the picture. Based on the discussion and conclusion, the officer will rate your intelligence skills. Only those who clear this round will be eligible to appear for Stage 2.</p>
							<h4>CDS SSB Interview Stage 2</h4>
							<p>Stage will be of four days. Stage II Comprises of Interview, Group Testing Officer Tasks, Psychology Tests, and the Conference. Additionally, marks for Conference are allotted based on the candidate’s initial performance in the three techniques and decision of the Board.</p>
							<div class='row syll-row'>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>Psychological Test </li>
										<li>Word Association Test</li>
										<li>Thematic Appreciation Test</li>
										<li>Situation Reaction Test</li>
										<li>Self Description Test</li>
									</ul>
								</div>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>Group Activities </li>
										<li>Group Discussion</li>
										<li>Group Planning Exercise</li>
										<li>Progressive Group Task</li>
										<li>Half Group Task</li>
										<li>Group Obstacle Race</li>
										<li>Lecturette</li>
										<li>Individual Obstacles</li>
										<li>Command Task</li>
										<li>Final Group Task</li>
									</ul>
								</div>
							</div>
							<p>The final selection of candidates will be made based on their performance in Stage 2 of the SSB Interview. These various tests of IO, GTO, and Psychology are specifically designed to analyze the presence or absence of Officer Qualities and trainability in the candidate. Based on these tests, the candidates will be recommended by the officers of SSB.</p>
					</div>
					<div class='exam-1' id='exam9'>
						<h2>Selection Process</h2>
						<h4>CDS-I Exam 2022 Selection Process-</h4>
						<p>The recruitment of AFA, IMA, INA & Officers Training Academy posts will be conducted on the basis of:</p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Written Exam</p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>SSB Interview/Personality Test</p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Document Verification </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Medical Examination</p>

						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
				</div>
				<div class='exam-1' id='exam10'>
						<h2>Previous Year Cut-Off</h2>
						<h4>UPSC CDS Cut off- </h4>
						<p>UPSC releases cut-off marks for CDS Exam on its official website. The candidates must score the minimum qualifying marks (i.e. 20 marks minimum in each subject) and for selection must score more than the cut-off marks. UPSC releases CDS written exam cut-off and final cut-off separately. Check the previous year's cut-off marks for your reference.</p>
						<div class='row exam1-details'>
							<div class='over-view'style='width:80%;'>
								<h4>CDS-I Cut off 2020</h4>
								<div class='para-two'>
									<p><b>Academy</b></p>
									<p><span><b>Written Exam</b></span></p>
									<p><span><b>Final Exam</b></span></p>
								</div>
								<div class='para-two'>
									<p>IMA</p>
									<p><span>130</span></p>
									<p><span>250</span></p>
								</div>
								<div class='para-two'>
									<p>INA</p>
									<p><span>118</span></p>
									<p><span>242</span></p>
								</div>
								<div class='para-two'>
									<p>AFA</p>
									<p><span>143</span></p>
									<p><span>274</span></p>
								</div>
								<div class='para-two'>
									<p>OTA (Men)</p>
									<p><span>93</span></p>
									<p><span>173</span></p>
								</div>
								<div class='para-two'>
									<p>OTA(Women)</p>
									<p><span>93</span></p>
									<p><span>177</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam11'>
						<h2>Detailed Advertisement</h2>
						<h4>CDS-1 Exam Notification 2022</h4>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam12'>
						<h2>Call Letters/ Admit Card</h2>
						<h4>UPSC CDS-I 2022 Admit card-</h4>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>The admit card for CDS I exam 2022 Admit Card is expected to be released in 3rd week of March 2022.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>The candidates must download their call letter much before the exam date to avoid the last-minute rush.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>It is mandatory to carry the hard copy of admit card to the exam hall.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website: <a href='https://www.upsc.gov.in/'target='_blank'> https://www.upsc.gov.in/</a> </b></p>
						</div>
					</div>
					<div class='exam-1' id='exam13'>
						<h2>Enroll on TestsGenie</h2>
						<div class='lastest-exam'>
							<a href='user-dashboard/tests.php'>SSC Exam<img src='img/Testsgenie-02.png'></a>
							<a href='user-dashboard/tests.php'>Banking<img src='img/Testsgenie-02.png'></a>
							<a href='user-dashboard/tests.php'>Railway<img src='img/Testsgenie-02.png'></a>
							<a href='user-dashboard/tests.php'>Army<img src='img/Testsgenie-02.png'></a>
						</div>
					</div>
			</div>
				<div class='row mobile-version'>
					<details open>
  					<summary>Overview</summary>
  					<div class='exam-1 active' id='exam1'>
						<p>CDS 2022 Exam Date: Union Public Service Commission has announced the UPSC CDS Exam Date 2022 for Combined Defence Service Examination (I) at upsc.gov.in on. The online registration process for 371 vacancies has been over on upsc.gov.in on 11th January 2022 and now the candidates must have begun with their preparation for the written exam. The CDS 1 Exam 2022 has been scheduled for 10th April 2022 (Sunday). </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p><span>22-12-2021 to 11-01-2022</span> </p>
								<h4>Exam Date</h4>
								<p><span>CDS-I: 10-April-2022</span>  </p>
								<h4>Eligibility</h4>
								<p><span>Graduate & Unmarried </span></p>
							</div>
							<div class='over-view'>
								<h4>Vacancies</h4>
								<p><span>371</span></p>
								<h4>Application fee</h4>
								<p><span>Rs. 200</span></p>
							</div>
							<div class='over-view' style="width: 100%;">
								<h4>Salary</h4>
								<div class='para-two'>
									<p><span><b>Rank</b></span>
									</p>
									<p><span><b>Level</b></span>
									</p>
									<p><span><b>Pay Scale/ Salary</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>Lieutenant</span></p>
									<p><span>Level 10</span></p>
									<p><span>	INR 56,100 – 1,77,500</span></p>
								</div>
								<div class='para-two'>
									<p><span>Captain	</span></p>
									<p><span>Level 10 B</span></p>
									<p><span>	INR 61,300 – 1,93,900</span></p>
								</div>
								<div class='para-two'>
									<p><span>Major	</span></p>
									<p><span>Level 11</span></p>
									<p><span>	INR 69,400 – 2,07,200</span></p>
								</div>
								<div class='para-two'>
									<p><span>Lieutenant Colonel		</span></p>
									<p><span>Level 12 A</span></p>
									<p><span>INR 1,21,200 – 2,12,400</span></p>
								</div>
								<div class='para-two'>
									<p><span>Colonel</span></p>
									<p><span>	Level 13	</span></p>
									<p><span>INR 1,30,600 – 2,15,900</span></p>
								</div>
								<div class='para-two'>
									<p><span>Brigadier	</span></p>
									<p><span>Level 13 A</span></p>
									<p><span>INR 1,39,600 – 2,17,600</span></p>
								</div>
								<div class='para-two'>
									<p><span>Major General	</span></p>
									<p><span>Level 14	</span></p>
									<p><span>INR 1,44,200 – 2,18,200</span></p>
								</div>
								<div class='para-two'>
									<p><span>Lieutenant General HAG Scale		</span></p>
									<p><span>Level 15</span></p>
									<p><span>INR 1,82,200 – 2,24,100</span></p>
								</div>
								<div class='para-two'>
									<p><span>HAG + Scale</span></p>
									<p><span>Level 16</span></p>
									<p><span>INR 2,05,400 – 2,24,400</span></p>
								</div>
								<div class='para-two'>
									<p><span>VCOAS/ Lieutenant General (NFSG) / Army Cdr	</span></p>
									<p><span>Level 17	</span></p>
									<p><span>INR 2,25,000 (Fixed)</span></p>
								</div>
								<div class='para-two'>
									<p><span>COAS</span></p>
									<p><span>Level 18</span></p>
									<p><span>INR 2,25,000 (Fixed)</span></p>
								</div>
							</div>
							<div class='over-view' style="width: 100%;">
								<h4>CDS-I Written Test</h4>
								<p><span>For Indian military Academy, Indian Naval Academy and Air Force Academy</span></p>
								<div class='para-two'>
									<p><span><b>Subject</b></span>
									</p>
									<p><span><b>Maximum marks</b></span>
									</p>
									<p><span><b>Duration</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>English</span></p>
									<p><span>120</span></p>
									<p><span>2 hours</span></p>
								</div>
								<div class='para-two'>
									<p><span>General Knowledge</span></p>
									<p><span>120</span></p>
									<p><span>2 hours</span></p>
								</div>
								<div class='para-two'>
									<p><span>Elementary Mathematics</span></p>
									<p><span>120</span></p>
									<p><span>2 hours</span></p>
								</div>
								<p><span>For Officer's Training Academy</span></p>
								<div class='para-two'>
									<p><span>English</span>
									</p>
									<p><span>100</span>
									</p>
									<p><span>2 hours</span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>General Knowledge</span>
									</p>
									<p><span>100</span>
									</p>
									<p><span>2 hours</span>
									</p>
								</div>
						</div>
					</div>
					<p style='color:#9f1717;padding-top:10px;'>Note: SC/ST/Female candidates are exempted from paying the application fees.</p>
						<p>The payment can be done through online/offline mode (Net Banking, Mastercard/Debit Card or cash deposit in SBI Bank.).</p>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  				</details>
  				<details>
  					<summary>Important Dates</summary>
  					<div class='exam-1 active' id='exam2'>
						<p>SSC CGL 2021-22 Notification is out!. SSC CGL 2021 related important dates can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>December 22, 2021</span>
								</p>
								<h4>Online Application Date </h4>
								<p><span> 23-12-2021 to 23-01-2022</span>
								</p>
								<h4>Withdrawal of Application</h4>
								<p><span>January 18-24, 2022</span></p>
								<h4>Availability of Admit Card</h4>
								<p><span>3rd week March 2022 (Tentative)</span>
								</p>
							</div>
							<div class='over-view'>
								<h4>CDS-I Exam Date </h4>
								<p><span>April 10, 2022</span></p>
								<h4>Result Declaration</h4>
								<p><span>May 2022 (Tentative)</span></p>
								<h4>Interview</h4>
								<p><span>To be notified later</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Locations</summary>
  					<div class='exam-1 active' id='exam3'>
  						<p>CDS I 2022 Exam Centers: The candidates were given choice to choose their preferred cities for the exam centers while filling their application form. Below is the list of cities where UPSC CDS-I Exam will be conducted on 10th April 2022.</p>
						<div class='over-view' style='width: 100%;'>
							<div class='para-two'>
								<p>Agartala</p><p>	Bilaspur</p><p>	Ghaziabad</p><p>	Gurgaon</p>
							</div>
							<div class='para-two'>
								<p>Agra</p><p>	Chandigarh</p><p>	Gorakhpur</p><p>Gwalior	</p>
							</div>
							<div class='para-two'>
								<p>Ahmedabad </p><p>Chennai	</p><p>	Hyderabad</p>
							</div>
							<div class='para-two'>
								<p>Aizwal </p><p>Coimbatore	</p><p>Indore	</p><p>Itanagar	</p>
							</div>
							<div class='para-two'>
								<p>Aligarh </p><p>Cuttack	</p><p>Jabalpur	</p><p>Jaipur	</p>
							</div>
							<div class='para-two'>
								<p>Almora </p><p>	Delhi</p><p>Jammu	</p><p>	Jodhpur</p>
							</div>
							<div class='para-two'>
								<p>Ananthapur </p><p>Dharwad	</p><p>Kochi	</p><p>Kohima	</p>
							</div>
							<div class='para-two'>
								<p>Aurangabad </p><p>	Dispur</p><p>Kolkata	</p><p>Kozhikode	</p>
							</div>
							<div class='para-two'>
								<p>Bareilly </p><p>Faridabad	</p><p>	Leh</p><p>Lucknow</p>
							</div>
							<div class='para-two'>
								<p>Bengaluru </p><p>Gangtok	</p><p>Ludhiana	</p>
							</div>
							<div class='para-two'>
								<p> Jorhat</p><p>Garwhal (Srinagar)	</p><p>Mysuru	</p>
							</div>
							<div class='para-two'>
								<p>Bhopal </p><p>Gautam Budh Nagar	</p><p>Nagpur	</p><p>Sambalpur	</p>
							</div>
							<div class='para-two'>
								<p> Navi Mumbai</p><p>Panaji (Goa)	</p><p>	Patna</p><p>	Port Blair</p>
							</div>
							<div class='para-two'>
								<p>Prayagraj (Allahabad) </p><p>Puducherry	</p>
							</div>
							<div class='para-two'>
								<p>Rajkot </p><p>Ranchi	</p><p>Vellore	</p><p>Vishakhapatnam	</p>
							</div>
							<div class='para-two'>
								<p>Shillong </p><p>Shimla	</p><p>Siliguri	</p><p>Srinagar	</p>
							</div>
							<div class='para-two'>
								<p>Thane </p><p>Thiruvananthapuram	</p><p>Tiruchirapalli	</p>
							</div>
							<div class='para-two'>
								<p>Udaipur </p><p>Varanasi	</p><p>Vijayawada	</p><p>	Warangal</p>
							</div>
							<div class='para-two'>
								<p>Mumbai	</p><p>Tirupati	</p><p>Madhurai	</p>
							</div>
							<div class='para-two'>
								<p>Imphal	</p><p>	Raipur</p><p>Pune	</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>Number of Posts</summary>
  					<div class='exam-1 active' id='exam4'>
  						<h4>CDS – I 2022 Vacancy Details</h4>
  						<p>A total of 341 vacancies were announced for Indian Air Force, Indian Military Academy, Indian Naval Academy and Officer’s Training Academy. Have a look at the Vacancy distribution for the CDS-1 2022 Exam. </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>371</span></p>
							</div>
						</div>
						<div class='over-view' style='width: 100%;'>
							<h4>CDS Vacancy 2022 for CDS 1 Exam</h4>
							<div class='para-two'>
								<p><span><b>Name of the academy</b></span></p>
								<p><span><b>Number of Vacancies</b></span></p>
							</div>
							<div class='para-two'>
								<p><span>Indian Military Academy, Dehradun</span></p>
								<p><span>100</span></p>
							</div>
							<div class='para-two'>
								<p><span>Indian Naval Academy, Ezhimala</span></p>
								<p><span>22</span></p>
							</div>
							<div class='para-two'>
								<p><span>Air Force Academy, Hyderabad</span></p>
								<p><span>32</span></p>
							</div>
							<div class='para-two'>
								<p><span>Officers’ Training Academy, Chennai (Madras) SSC Men</span></p>
								<p><span>170</span></p>
							</div>
							<div class='para-two'>
								<p><span>Officers Training Academy, Chennai SSC Women</span></p>
								<p><span>17</span></p>
							</div>
							<div class='para-two'>
								<p><span><b>Total Vacancies</b></span></p>
								<p><span><b>341</b></span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Eligibility</summary>
  					<div class='exam-1 active' id='exam5'>
						<h4>UPSC CDS 2022 Eligibility Criteria</h4>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Nationality</h4>
								<p>a citizen of India or</p>
								<p>a subject of Nepal or</p>
								<p>a subject of Bhutan or</p>
								<p>a Tibetan refugee who came over to India, before the 1st January 1962 with the intention of permanently settling in India, or</p>
								<p>a person of Indian origin who has migrated from Pakistan, Burma, Sri Lanka, East African Countries of Kenya, Uganda, the United Republic of Tanzania (Formerly Tanganyika and Zanzibar), Zambia, Malawi, Zaire, Ethiopia and Vietnam with the intention of permanently settling in India.</p>
							</div>
							<div class='over-view'>
								<h4>Educational Qualification </h4>
								<div class='para-two'>
									<p><b>Academy</b></p>
									<p><b>Education Qualification</b> </p>
								</div>
								<div class='para-two'>
									<p>Indian Military Academy (IMA) and Officers’ Training Academy (OTA)</p>
									<p>Bachelor’s Degree from a recognised university</p>
								</div>
								<div class='para-two'>
									<p>Indian Naval Academy (INA)</p>
									<p>Bachelors in Engineering from a recognised University</p>
								</div>
								<div class='para-two'>
									<p>Air Force Academy (AFA)</p>
									<p>Graduated with  Physics and Mathematics in Class 12th or Bachelor of Engineering
									</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Limit</h4>
								<div class='para-two'>
									<p><b>Academy</b></p>
									<p><span><b>Age Limit </b></span></p>
									<p><b>Marital Status</b></p>
								</div>
								<div class='para-two'>
									<p>Indian Military Academy (IMA)</p>
									<p><span>19 – 24 Years</span>
									</p>
									<p>Unmarried</p>
								</div>
								<div class='para-two'>
									<p>Indian Naval Academy (INA)</p>
									<p><span>19 – 22 Years</span>
									</p>
									<p>Unmarried</p>
								</div>
								<div class='para-two'>
									<p>Air Force Academy</p>
									<p><span>19 – 23 Years</span>
									</p>
									<p><25 years unmarried or >25 years both married and unmarried.</p>
								</div>
								<div class='para-two'>
									<p>Officers’ Training Academy (SSC Women Non-Technical Course)</p>
									<p><span>19 – 25 Years</span>
									</p>
									<p>Unmarried females, issueless widows who haven’t remarried, and issueless divorcees who have not remarried are eligible.</p>
								</div>
								<div class='para-two'>
									<p>Officers’ Training Academy (SSC Course for Men)</p>
									<p><span>19 – 25 Years</span>
									</p>
									<p>Unmarried</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Marital Status and Sex</h4>
									<p>For Indian Military Academy, Indian Naval Academy, only Unmarried males are eligible to apply for CDS Exam</p>
									<p>For Indian Air Force Academy, both married and unmarried males can apply, however marriage during the training is not permitted</p>
									<p>For Officer Training Academy, unmarried males & females can apply for CDS Exam.</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>How To Apply</summary>
  					<div class='exam-1 active' id='exam6'>
	  					<h4>Steps</h4>
							<p><i class="far fa-dot-circle"></i>Visit the official website of UPSC i.e. <a href='https://www.upsc.gov.in/'target="_blank">www.upsc.gov.in</a> or directly apply from the above link.</p>
							<p><i class="far fa-dot-circle"></i>On the homepage, click on Examination >> Active Examinations >> Online Application For UPSC CDS 1 Exam.</p>
							<p><i class="far fa-dot-circle"></i>Click on "Part-1" against Combined Defence Examination (II) 2022</p>
							<p><i class="far fa-dot-circle"></i>Read all the instructions carefully and proceed by clicking on "Yes"</p>
							<p><i class="far fa-dot-circle"></i>You will be redirected to a new page, start filling in your details correctly.</p>
							<p><i class="far fa-dot-circle"></i>Select your preferences carefully and continue to Part-II.</p>
							<p><i class="far fa-dot-circle"></i>Pay the required application fee through online/offline mode as discussed above.</p>
							<p><i class="far fa-dot-circle"></i>Select the desired examination center from the list.</p>
							<p><i class="far fa-dot-circle"></i>Upload scanned documents as required in the application form.</p>
							<p><i class="far fa-dot-circle"></i>Check all the details and click on "Submit". Download a copy of the application form for future reference.</p>
							<h4>Documents Required to fill NDA Application Form</h4>
							<p><i class="far fa-dot-circle"></i>Before filling the UPSC NDA I application form, the candidates must keep the following documents aside.</p>
							<p><i class="far fa-dot-circle"></i>Scanned images of photograph and signature </p>
							<p><i class="far fa-dot-circle"></i>Photo-identity card in PDF format (Aadhar Card / Voter Card/PAN Card/ Passport/ Driving License/ School Photo ID or any other photo ID Card issued by the State / Central Government) </p>
							<p><i class="far fa-dot-circle"></i>Bank details to make an online transaction</p>
							<p><i class="far fa-dot-circle"></i>Marksheet and admit card of Class 10 and 12</p>
  					</div>
  				</details>
  				<details>
  					<summary>Exam Pattern</summary>
  					<div class='exam-1 active' id='exam7'>
  						<h4>For Indian Military Academy, Indian Naval Academy and Air Force Academy</h4>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col">Subject</th>
										<th scope="col">Maximum Marks</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<td>English</td>
										<td>120</td>
										<td>2 hours</td>
									</tr>
									<tr>
										<td>General Knowledge</td>
										<td>120</td>
										<td>2 hours</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>Elementary Mathematics</td>
										<td>100</td>
										<td>2 hours</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>For Officers’ Training Academy</h4>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col">Subject</th>
										<th scope="col">Maximum Marks</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<td>English</td>
										<td>100</td>
										<td>2 hours</td>
									</tr>
									<tr>
										<td>General Knowledge</td>
										<td>100</td>
										<td>2 hours</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>The candidates who are preparing for CDS-I Exam 2022, must be familiar with the exam pattern that is followed by UPSC.  </p>
							<p><i class="far fa-dot-circle"></i>There will be Multiple-Choice Questions in each paper </p>
							<p><i class="far fa-dot-circle"></i>The question paper for General Knowledge and Elementary Mathematics will be set in Hindi as well as English</p>
							<p><i class="far fa-dot-circle"></i>There will be a penalty of 1/3 marks for a wrong answer </p>
							<p><i class="far fa-dot-circle"></i>Duration of each exam is separate i.e. 2 hours. </p>
  					</div>
  				</details>
  				<details>
  					<summary>Syllabus</summary>
  					<div class='exam-1 active' id='exam8'>
  						<h4>CDS-I 2022 Syllabus: </h4>
							<div class='over-view'style='width:100%;'>
								<h4>Elementary Mathematics</h4>
								<p><i class="far fa-dot-circle"></i>Algebra- Basic Operations, simple factors, Remainder Theorem, H.C.F., L.C.M., Theory of polynomials, solutions of quadratic equations, relation between its roots and coefficients (Only real roots to be considered), Simultaneous linear equations in two unknowns—analytical and graphical solutions, Simultaneous linear inequations in two variables and their solutions, Practical problems leading to two simultaneous linear equations or inequations in two variables or quadratic equations in one variable & their solutions, Set language and set notation, Rational expressions and conditional identities, Laws of indices</p>
								<p><i class="far fa-dot-circle"></i>Arithematic- Number System: Natural numbers, Integers, Rational and Real numbers,Fundamental operations: addition, substraction, multiplication, division, Square roots, Decimal fractions, Unitary method, time and distance, time and work, percentages, applications to simple and compound interest, profit and loss, ratio and proportion, variation Elementary Number Theory: Division algorithm, Prime and composite numbers, Tests of divisibility by 2, 3, 4, 5, 9 and 11, Multiples and factors. Factorisation Theorem, H.C.F. and L.C.M., Euclidean algorithm, Logarithms to base 10, laws of logarithms, use of logarithmic tables</p>
								<p><i class="far fa-dot-circle"></i>Trigonometry- Sine ×, cosine ×, Tangent × when 0° < × < 90°, Values of sin ×, cos × and tan ×, for ×= 0°, 30°, 45°, 60° and 90°, Simple trigonometric identities, Use of trigonometric tables, Simple cases of heights and distances</p>
								<p><i class="far fa-dot-circle"></i>Geometry- Lines and angles, Plane and plane figures, Theorems on Properties of angles at a point, Parallel lines, Sides and angles of a triangle, Congruency of triangles, Similar triangles Concurrence of medians and altitudes, Properties of angles, sides and diagonals of a Parallelogram, rectangle and square, Circles and its properties including tangents and normals, Loci</p>
								<p><i class="far fa-dot-circle"></i>Mensuration- Areas of squares, rectangles, parallelograms, triangle and circle, Areas of figures which can be split up into these figures (Field Book), Surface area and volume of cuboids, lateral surface and volume of right circular cones and cylinders, surface area and volume of spheres</p>
								<p><i class="far fa-dot-circle"></i>Statistics- Collection and tabulation of statistical data, Graphical representation frequency polygons, histograms, bar charts, pie charts etc, Measures of central tendency</p>
							</div>
							<div class='row syll-row'>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>English</li>
										<li>Spotting Errors </li>
										<li>Questions Sentence</li>
										<li>Arrangement Questions</li>
										<li>Synonyms & Antonyms</li>
										<li>Selecting Words</li>
										<li>Ordering of Sentence</li>
										<li>Comprehension Questions</li>
										<li>Ordering of words in a sentence</li>
										<li>Fill in the blanks questions </li>
										<li>Idioms and Phrases</li>
									</ul>
								</div>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>General Knowledge</li>
										<li>Economics </li>
										<li>Physics , Biology , History , Chemistry , Geography</li>
										<li>Current Affairs</li>
										<li>Politics ,  Sociology</li>
										<li>Defence related Award</li>
										<li>Environment</li>
										<li>Sport</li>
										<li>Cultural</li>
										<li>Book</li>
										<li>Statement true/false</li>
									</ul>
								</div>
							</div>
							<h2>CDS-I 2022 SSB Interview</h2>
							<h4>CDS SSB Interview Stage 1</h4>
							<p>Officer Intelligence Rating (OIR) will be conducted which involves a Picture Perception and Description Test (PP & DT) wherein candidates will be shown a picture for 30 seconds. Post 30 seconds, candidates will be given 4 minutes to write about the picture. Then several groups of 15 members will be formed to discuss and arrive at a conclusion regarding the picture. Based on the discussion and conclusion, the officer will rate your intelligence skills. Only those who clear this round will be eligible to appear for Stage 2.</p>
							<h4>CDS SSB Interview Stage 2</h4>
							<p>Stage will be of four days. Stage II Comprises of Interview, Group Testing Officer Tasks, Psychology Tests, and the Conference. Additionally, marks for Conference are allotted based on the candidate’s initial performance in the three techniques and decision of the Board.</p>
							<div class='row syll-row'>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>Psychological Test </li>
										<li>Word Association Test</li>
										<li>Thematic Appreciation Test</li>
										<li>Situation Reaction Test</li>
										<li>Self Description Test</li>
									</ul>
								</div>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>Group Activities </li>
										<li>Group Discussion</li>
										<li>Group Planning Exercise</li>
										<li>Progressive Group Task</li>
										<li>Half Group Task</li>
										<li>Group Obstacle Race</li>
										<li>Lecturette</li>
										<li>Individual Obstacles</li>
										<li>Command Task</li>
										<li>Final Group Task</li>
									</ul>
								</div>
							</div>
							<p>The final selection of candidates will be made based on their performance in Stage 2 of the SSB Interview. These various tests of IO, GTO, and Psychology are specifically designed to analyze the presence or absence of Officer Qualities and trainability in the candidate. Based on these tests, the candidates will be recommended by the officers of SSB.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Selection Process</summary>
  					<div class='exam-1 active' id='exam9'>
  						<h4>CDS-I Exam 2022 Selection Process-</h4>
							<p>The recruitment of AFA, IMA, INA & Officers Training Academy posts will be conducted on the basis of:</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Written Exam</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>SSB Interview/Personality Test</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Document Verification </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Medical Examination</p>

							<label class="custom-file-upload">
								<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Previous Year Cut-Off</summary>
  					<div class='exam-1 active' id='exam10'>
  						<h4>UPSC CDS Cut off- </h4>
							<p>UPSC releases cut-off marks for CDS Exam on its official website. The candidates must score the minimum qualifying marks (i.e. 20 marks minimum in each subject) and for selection must score more than the cut-off marks. UPSC releases CDS written exam cut-off and final cut-off separately. Check the previous year's cut-off marks for your reference.</p>
							<div class='row exam1-details'>
								<div class='over-view'style='width:100%;'>
									<h4>CDS-I Cut off 2020</h4>
									<div class='para-two'>
										<p><b>Academy</b></p>
										<p><span><b>Written Exam</b></span></p>
										<p><span><b>Final Exam</b></span></p>
									</div>
									<div class='para-two'>
										<p>IMA</p>
										<p><span>130</span></p>
										<p><span>250</span></p>
									</div>
									<div class='para-two'>
										<p>INA</p>
										<p><span>118</span></p>
										<p><span>242</span></p>
									</div>
									<div class='para-two'>
										<p>AFA</p>
										<p><span>143</span></p>
										<p><span>274</span></p>
									</div>
									<div class='para-two'>
										<p>OTA (Men)</p>
										<p><span>93</span></p>
										<p><span>173</span></p>
									</div>
									<div class='para-two'>
										<p>OTA(Women)</p>
										<p><span>93</span></p>
										<p><span>177</span></p>
									</div>
								</div>
							</div>
							<label class="custom-file-upload">
								<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Detailed Advertisement</summary>
  					<div class='exam-1 active' id='exam11'>
  						<h4>CDS-1 Exam Notification 2022</h4>
						<label class="custom-file-upload">
							<a href='https://www.upsc.gov.in/sites/default/files/Notif-CDSE-I-21-Engl.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Admit Card</summary>
  					<div class='exam-1 active' id='exam12'>
  						<h4>UPSC CDS-I 2022 Admit card-</h4>
							<div class='getadmit-step'>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i>The admit card for CDS I exam 2022 Admit Card is expected to be released in 3rd week of March 2022.  </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i>The candidates must download their call letter much before the exam date to avoid the last-minute rush.  </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i>It is mandatory to carry the hard copy of admit card to the exam hall.  </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website: <a href='https://www.upsc.gov.in/'target='_blank'> https://www.upsc.gov.in/</a> </b></p>
							</div>
  					</div>
  				</details>
  				<details>
  					<summary>Enroll on TestsGenie</summary>
  					<div class='exam-1 active' id='exam13'>
  						<div class='lastest-exam'>
								<a href='user-dashboard/tests.php'>SSC Exam<img src='img/Testsgenie-02.png'></a>
								<a href='user-dashboard/tests.php'>Banking<img src='img/Testsgenie-02.png'></a>
								<a href='user-dashboard/tests.php'>Railway<img src='img/Testsgenie-02.png'></a>
								<a href='user-dashboard/tests.php'>Army<img src='img/Testsgenie-02.png'></a>
							</div>
  					</div>
  				</details>
  			</div>
			</div>
		</div>
</section>
<?php include( 'includes/footer.php'); ?>
<!-- Font Awsome -->
<script src="https://kit.fontawesome.com/e0d1216781.js" crossorigin="anonymous"></script>
<!--  Bootstrap Script -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- animation -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
	AOS.init();
</script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/index.js"></script>
</body>

</html>
<?php include('admin/config/dbclose.php') ?>