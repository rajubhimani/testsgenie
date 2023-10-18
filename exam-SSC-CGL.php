<?php include( 'essentials/top.php'); ?>
<?php include( 'includes/header.php'); ?>

<section class='exam-details'>
	<div class='container-fluid'>
		<div class="row">
			<div class='background-pages'>
				<div class='important-links'>
                <h1>SSC CGL Exam</h1>
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
						<p>Combined Graduate Level Examination, 2021 (CGL) is organized by Staff Selection Commission for recruitment of various Group ‘B’ and Group ‘C’ posts in different Ministries/ Departments/ Organizations of Government of India and various Constitutional Bodies/ Statutory Bodies/ Tribunals, etc. </p>
						<p>The details of the examination are as under:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p>23-12-2021 to 23-01-2022 </p>
								<h4>Exam Date</h4>
								<p>Tier-I :- April, 2022  </p>
								<p>Tier-II :- To be notified later</p>
								<h4>Preliminary Exam Pattern</h4>
								<div class='para-two'>
									<p><span><b>Subject</b></span>
									</p>
									<p><span><b>No of Questions</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p>English Comprehension</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Quantitative Aptitude</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>General Intelligence and Reasoning</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>General Awareness</p>
									<p><span>25</span>
									</p>
								</div>
							</div>
							<div class='over-view'>
								<h4>Eligibility</h4>
								<p><span>Graduation</span>
								</p>
								<h4>Vacancies</h4>
								<p><span>Vacancies will be determined in due course </span>
								</p>
								<h4>Salary</h4>
								<div class='para-two'>
									<p><span><b>SSC CGL Pay Levels</b></span>
									</p>
									<p><span><b>SSC CGL Pay Scales(in INR)</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>4</span></p>
									<p><span>25500 to 81100</span></p>
								</div>
								<div class='para-two'>
									<p><span>5</span></p>
									<p><span>29200 to 92300</span></p>
								</div>
								<div class='para-two'>
									<p><span>6</span></p>
									<p><span>35400 to 112400</span></p>
								</div>
								<div class='para-two'>
									<p><span>7</span></p>
									<p><span>44900 to 142400</span></p>
								</div>
								<div class='para-two'>
									<p><span>8</span></p>
									<p><span>47600 to 151100</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam2'>
						<h2>Important Dates</h2>
						<p>SSC CGL 2021-22 Notification is out!. SSC CGL 2021 related important dates can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>23-12-2021</span>
								</p>
								<h4>Online Application Date</h4>
								<p><span> 23-12-2021 to 23-01-2022</span>
								</p>
								<h4>Last date and time for receipt of online applications </h4>
								<p><span>23-01-2022 (23:30)</span>
								</p>
								<h4>Last date & time online payment</h4>
								<p><span>25-01-2022 (23:30)</span></p>
								<h4>Dates of ‘Window for Application Form Correction’ including online payment</h4>
								<p><span>28-01-2022 to 01-02-2022 (23:30) </span> </p>
							</div>
							<div class='over-view'>
								<h4>Last date & time for offline challan generation </h4>
								<p><span>26-01-2022 (23:30)</span></p>
								<h4>Last date for payment through challan</h4>
								<p><span>27-01-2022</span></p>
								<h4>Computer Based Examination Date</h4>
								<p><span>Tier-I : April, 2022 </span> </p>
								<p><span>Tier-II : To be notified later</span> </p>
								<h4>Admit Card Release Date</h4>
								<p><span>To be notified later</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam3'>
						<h2>Locations</h2>
						<p>SSC CGL 2021-22 Notification is out!. SSC CGL 2021 Exam centers and center code can be found below.</p>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-star'>Examination Centers and Centre Code</th>
										<th scope="col" class='th-star'>SSC Region and States/ UTs under the jurisdiction of the Region </th>
										<th scope="col" class='th-star'>Address of the Regional Offices and their websites </th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bhagalpur(3201), Muzaffarpur(3205), Patna(3206), Purnea (3209), Agra(3001), Bareilly (3005), Gorakhpur (3007), Jhansi (3008), Kanpur(3009), Lucknow(3010), Meerut(3011), Prayagraj(3003), Varanasi(3013) </td>
										<td>Central Region (CR)/ Bihar and Uttar Pradesh </td>
										<td>Regional Director (CR), Staff Selection Commission, 34-A, Mahatma Gandhi Marg, Civil Lines, Kendriya Sadan, Prayagraj – 211001. <a href='http://www.ssc-cr.org/'target='_blank'>(www.ssc-cr.org)</a> </td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>Port Blair (4802), Bokaro(4201), Hazaribagh(4204), Jamshedpur(4207), Ranchi(4205), Balasore(Odisha) (4601), Berhampore(Odisha) (4602), Bhubaneswar(4604), Cuttack(4605), Dhenkenal(4611), Rourkela(4610), Sambalpur(4609), Gangtok(4001), Asansol(4417), Kalyani(4419), Kolkata(4410), Siliguri(4415) </td>
										<td>Eastern Region (ER)/ Andaman & Nicobar Islands, Jharkhand, Odisha, Sikkim and West Bengal </td>
										<td>Regional Director (ER), Staff Selection Commission, 1st MSO Building, (8th Floor), 234/4, Acharya Jagadish Chandra Bose Road, Kolkata, West Bengal-700020 <a href='https://www.sscer.org/'target='_blank'>(www.sscer.org)</a> </td>
									</tr>
									<tr>
										<td>Belagavi (9002), Bengaluru (9001), Hubballi (9011), Kalaburagi (Gulbarga) (9005), Mangaluru (9008), Mysuru (9009), Shivamogga (9010), Udupi (9012). Ernakulam (9213), Kannur (9202), Kollam (9210), Kottayam (9205), Kozhikode (9206), Thrissur (9212), Thiruvananthapuram (9211). </td>
										<td>Karnataka, Kerala Region (KKR)/ Lakshadweep, Karnataka and Kerala </td>
										<td>Regional Director (KKR), Staff Selection Commission, 1st Floor, “E” Wing, Kendriya Sadan, Koramangala, Bengaluru, Karnataka-560034 <a href='https://www.ssckkr.kar.nic.in/'target='_blank'>(www.ssckkr.kar.nic.in)</a> </td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>Bhopal (6001), Gwalior(6005), Indore (6006), Jabalpur (6007), Satna (6014), Sagar (6015), Ujjain (6016), Bilaspur (6202), Raipur (6204), Durg-Bhilai (6205) </td>
										<td>Madhya Pradesh Sub-Region (MPR)/ Chhattisgarh and Madhya Pradesh</td>
										<td>Dy. Director (MPR), Staff Selection Commission, 5th Floor, Investment Building, LIC Campus-2, Pandri, Raipur, Chhattisgarh-492004  <a href='https://www.sscmpr.org/'target='_blank'>(www.sscmpr.org)</a> </td>
									</tr>
									<tr>
										<td>Itanagar(5001), Dibrugarh(5102), Guwahati(Dispur)(5105), Jorhat(5107), Silchar(5111), Churachandpur(5502), Imphal(5501), Ukhrul(5503), Shillong(5401), Aizwal(5701), Dimapur (5301), Kohima(5302), Agartala(5601), </td>
										<td>North Eastern Region (NER)/ Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland and Tripura. </td>
										<td>Regional Director (NER), Staff Selection Commission, Housefed Complex, Last Gate, Beltola-Basistha Road, P.O. Assam Sachivalaya, Dispur, Guwahati, Assam-781006 <a href='https://www.sscner.org.in/en/'target='_blank'>(www.sscner.org.in) </a></td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>Dehradun(2002), Haldwani(2003), Haridwar(2005), Roorkee(2006), Delhi(2201), Ajmer(2401), Alwar(2402), Bikaner(2404), Jaipur(2405), Jodhpur(2406), Kota(2407), Sriganganagar(2408), Udaipur(2409), Sikar(2411) </td>
										<td>Northern Region (NR)/ Delhi, Rajasthan and Uttarakhand</td>
										<td>Regional Director (NR), Staff Selection Commission, Block No. 12, CGO Complex, Lodhi Road, New Delhi-110003 <a href='https://sscnr.nic.in/newlook/site/index.html'target='_blank'>(www.sscnr.nic.in)</a> </td>
									</tr>
									<tr>
										<td>Chandigarh/ Mohali(1601), Hamirpur(1202), Shimla(1203), Jammu(1004), Samba(1010), Srinagar(J&K)(1007),Leh(1005), Amritsar(1404), Jalandhar(1402), Ludhiana(1405), Patiala(1403), </td>
										<td>North Western Sub-Region (NWR)/ Chandigarh, Haryana, Himachal Pradesh, Jammu and Kashmir, Ladakh and Punjab </td>
										<td>Dy. Director (NWR), Staff Selection Commission, Block No. 3, Ground Floor, Kendriya Sadan, Sector-9, Chandigarh-160009 <a href='https://www.sscnwr.org/'target='_blank'>(www.sscnwr.org)</a> 	</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>Chirala(8011), Cuddapah(8013), Guntur(8001), Kakinada (8009), Kurnool(8003), Nellore (8010), Rajahmundry(8004), Tirupati(8006), Vizianagaram(8012), Vijayawada(8008), Vishakhapatnam(8007), Puducherry(8401), Chennai(8201), Coimbatore(8202), Krishnagiri(8209), Madurai(8204), Salem(8205), Tiruchirapalli(8206), Tirunelveli(8207), Vellore (8208), Hyderabad(8601), Karimnagar (8604), Warangal(8603)  </td>
										<td>Southern Region (SR)/ Andhra Pradesh, Puducherry, Tamil Nadu and Telangana. 	</td>
										<td>Regional Director (SR), Staff Selection Commission, 2nd Floor, EVK Sampath Building, DPI Campus, College Road, Chennai, Tamil Nadu-600006 <a href='http://www.sscsr.gov.in/'target='_blank'>(www.sscsr.gov.in)</a> </td>
									</tr>
									<tr>
										<td>Panaji(7801), Ahmedabad(7001), Anand(7011), Gandhinagar(7012), Mehsana(7013), Rajkot(7006), Surat(7007), Vadodara(7002), Amravati(7201), Aurangabad(7202), Jalgaon(7214), Kolhapur(7203), Mumbai(7204), Nagpur(7205), Nanded (7206), Nashik(7207), Pune(7208) </td>
										<td>Western Region (WR)/ Dadra and Nagar Haveli and Daman and Diu, Goa, Gujarat and Maharashtra</td>
										<td>Regional Director (WR), Staff Selection Commission, 1st Floor, South Wing, Pratishtha Bhawan,  101, Maharshi Karve Road, Mumbai, Maharashtra-400020 <a href='https://www.sscwr.net/'target='_blank'>(www.sscwr.net)</a> </td>
									</tr>
								</tbody>
							</table>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam4'>
						<h2>Number of Posts</h2>
						<p>Vacancies will be determined in due course. Updated vacancy position will be uploaded on the website of the Commission (https://ssc.nic.in > Candidate’s Corner > Tentative Vacancy). </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>To be announced</span>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col"class='th-startt'>S. No.</th>
										<th scope="col">Name of Post</th>
										<th scope="col">Ministry/ Department/ Office/ Cadre</th>
										<th scope="col">Classification of Posts</th>
										<th scope="col">Age Limit</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>1</th>
										<td>Assistant Audit Officer</td>
										<td>Indian Audit & Accounts Department under C&AG</td>
										<td>Group “B” Gazetted</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>2</th>
										<td>Assistant Accounts Officer</td>
										<td>Indian Audit & Accounts Department under C&AG</td>
										<td>Group “B” Gazetted</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>3</th>
										<td>Assistant Section Officer</td>
										<td>Central Secretariat Service</td>
										<td>Group “B”</td>
										<td>20-30 years</td>
									</tr>
									<tr>
										<th>4</th>
										<td>Assistant Section Officer</td>
										<td>Intelligence Bureau</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>5</th>
										<td>Assistant Section Officer</td>
										<td>Ministry of Railway</td>
										<td>Group “B”</td>
										<td>20-30 years</td>
									</tr>
									<tr>
										<th>6</th>
										<td>Assistant Section Officer</td>
										<td>Ministry of External Affairs</td>
										<td>Group “B”</td>
										<td>20-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>7</th>
										<td>Assistant Section Officer</td>
										<td>AFHQ</td>
										<td>Group “B”</td>
										<td>20-30 years</td>
									</tr>
									<tr>
										<th>8</th>
										<td>Assistant Section Officer</td>
										<td>Ministry of Electronics and Information Technology</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>9</th>
										<td>Assistant </td>
										<td>Other Ministries/ Departments/ Organizations </td>
										<td>Group “B”</td>
										<td>20-30 years</td>
									</tr>
									<tr>
										<th>10</th>
										<td>Assistant Section Officer</td>
										<td>Other Ministries/ Departments/ Organizations </td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>11</th>
										<td>Inspector of Income Tax</td>
										<td>CBDT</td>
										<td>Group “C”</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>12</th>
										<td>Inspector, (CGST & Central Excise)</td>
										<td>CBIC</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>13</th>
										<td>Inspector (Preventive Officer)</td>
										<td>CBIC</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>14</th>
										<td>Inspector (Examiner)</td>
										<td>CBIC</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>15</th>
										<td>Assistant Enforcement Officer</td>
										<td>Directorate of Enforcement, Department of Revenue </td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>16</th>
										<td>Sub Inspector</td>
										<td>Central Bureau of Investigation</td>
										<td>Group “B”</td>
										<td>20-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>17</th>
										<td>Inspector Posts</td>
										<td>Department of Post</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>18</th>
										<td>Inspector</td>
										<td>Central Bureau of Narcotics</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>19</th>
										<td>Assistant/ Superintendent </td>
										<td>Indian Coast Guard</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>20</th>
										<td>Assistant</td>
										<td>Other Ministries/ Departments/ Organizations</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>21</th>
										<td>Assistant</td>
										<td>National Company Law Appellate Tribunal (NCLAT)</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>22</th>
										<td>Research Assistant</td>
										<td>National Human Rights Commission (NHRC)</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>23</th>
										<td>Divisional Accountant </td>
										<td>Offices under C&AG</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr>
										<th>24</th>
										<td>Sub Inspector</td>
										<td>National Investigation Agency (NIA)</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>25</th>
										<td>Junior StatisticalOfficer (JSO)</td>
										<td>M/o Statistics & Programme Implementation.</td>
										<td>Group “B”</td>
										<td>18-32 years</td>
									</tr>
									<tr>
										<th>26</th>
										<td>Statistical Investigator Grade-II </td>
										<td>Registrar General of India</td>
										<td>Group “B”</td>
										<td>18-30 years</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>27</th>
										<td>Auditor</td>
										<td>Offices under C&AG </td>
										<td>Group “C”</td>
										<td>18-27 years</td>
									</tr>
									<tr>
										<th>28</th>
										<td>Auditor</td>
										<td>Other Ministry/ Departments</td>
										<td>Group “C”</td>
										<td>18-27 years</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>*Reservation* Please refer official notification for complete details</p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam5'>
						<h2>Eligibility</h2>
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
								<h4>Age Relaxation</h4>
								<div class='para-two'>
									<p>SC / ST</p>
									<p><span>5 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>OBC</p>
									<p><span>3 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>PwD (unreserved)</p>
									<p><span>10 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>PwD (OBC)</p>
									<p><span>13 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>PwD (SC/ST)</p>
									<p><span>15 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Ex-Serviceman (ESM)</p>
									<p>3 years after deduction of the military service rendered from the actual age as on the closing date.</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Relaxation</h4>

								<div class='para-two'>
									<p>Defence Personnel disabled in operation during hostilities with any foreign country or in a disturbed area and released as a consequence thereof</p>
									<p><span>3 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Defence Personnel disabled in operation during hostilities with any foreign country or in a disturbed area and released as a consequence thereof (SC/ST)</p>
									<p><span>8 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Central Govt. Civilian Employees who have rendered not less than 3 years regular and continuous service as on closing date for receipt of application.</p>
									<p><span>Up to 40 years of age </span>
									</p>
								</div>
								<div class='para-two'>
									<p>Central Govt. Civilian Employees (SC/ST) who have rendered not less than 3 years regular and continuous service as on closing date for receipt of application. </p>
									<p><span>Up to 45 years of age </span>
									</p>
								</div>
								<div class='para-two'>
									<p>Widows/ Divorced Women/ Women judicially separated and who are not remarried.</p>
									<p><span>Up to 35 years of age </span>
									</p>
								</div>
								<div class='para-two'>
									<p>Widows/ Divorced Women/ Women judicially separated and who are not remarried (SC/ST).</p>
									<p><span>Up to 40 years of age </span>
									</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Limit (as  on 01-01-2022)</h4>
								<div class='para-two'>
									<p><span><b>Age Limit</b></span> </p>
									<p><span><b>Remarks</b></span> </p>
								</div>
								<div class='para-two'>
									<p>For the posts for which age limit is 18-27 years </p>
									<p>Candidate must have been born not earlier than 02-01-1995 and not later than 01-01-2004. </p>
								</div>
								<div class='para-two'>
									<p>For the posts for which age limit is 20-30 years  </p>
									<p>Candidate must have been born not earlier than 02-01-1992 and not later than 01-01-2002. </p>
								</div>
								<div class='para-two'>
									<p>For the posts for which age limit is 18-30 years  </p>
									<p>Candidate must have been born not earlier than 02-01-1992 and not later than 01-01-2004. </p>
								</div>
								<div class='para-two'>
									<p>For the post for which age limit is 18-32 years  </p>
									<p>Candidate must have been born not earlier than 02-01-1990 and not later than 01-01-2004. </p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Educational Qualification (As on 23-01-2022) </h4>
								<div class='para-two'>
									<p>Assistant Audit Officer/Assistant Accounts Officer </p>
									<p>Essential Qualifications: Bachelor’s Degree from a recognized University or Institute. <br>Desirable Qualifications: Chartered Accountant or Cost & Management Accountant or Company Secretary or Masters in Commerce or Masters in Business Studies or Masters in Business Administration (Finance) or Masters in Business Economics. During the period of probation direct recruits shall have to qualify the “Subordinate Audit/ Accounts Service Examination” in respective branches for confirmation and regular appointment as Assistant Audit Officer/Assistant Accounts Officer.</p>
								</div>
								<div class='para-two'>
									<p>Junior Statistical Officer </p>
									<p>Bachelor’s Degree in any subject from a recognized University or Institute with at least 60% Marks in Mathematics at 12th standard level; Or Bachelor’s Degree in any subject with Statistics as one of the subjects at degree level. </p>
								</div>
								<div class='para-two'>
									<p>Statistical Investigator Grade-II </p>
									<p>Bachelor’s Degree in any subject with Statistics as one of the subjects from a recognized University or Institute. </p>
								</div>
								<div class='para-two'>
									<p>Assistant in National Company Law Appellate Tribunal (NCLAT) </p>
									<p>Essential Qualifications: Bachelor’s Degree from a recognized University or Institute. <br>Desirable Qualifications: Degree in law from a recognized university. </p>
								</div>
								<div class='para-two'>
									<p>Research Assistant in National Human Rights Commission (NHRC) </p>
									<p>Essential Qualifications: Bachelor’s Degree from a recognized University or Institute.<br> Desirable Qualifications: Degree in Law or Human Rights from a recognized universityMinimum one-year research experience in any recognized university or recognized Research Institution; </p>
								</div>
								<div class='para-two'>
									<p>All other Posts</p>
									<p>Bachelor’s Degree from a recognized University or equivalent </p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam6'>
						<h2>How to apply </h2>
						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Submit applications online at the website of SSC Headquarter i.e. <a href='https://ssc.nic.in/'target='_blank'>https://ssc.nic.in</a>.  </p>
						<p><i class="far fa-dot-circle"></i>Upload the scanned colour passport size photograph (not more than three months old) in JPEG format (20 KB to 50 KB) with dimension of about 3.5 cm (width) x 4.5 cm (height). The photograph should be without cap, spectacles and both ears should be visible.</p>
						<p><i class="far fa-dot-circle"></i>Last date and time for submission of online applications is 23-01-2022 (23:30). </p>
						<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form.</p>

						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>Fee payable: ₹100/- (Rs one hundred only). </p>
						<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee.  </p>
						<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.  </p>
						<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 25-01-2022 (23:30 hours). </p>
						<p><i class="far fa-dot-circle"></i>Candidates who wish to make cash payment through the challan of SBI, may make payment in cash at the Branches of SBI within the working hours of bank up to 27-01-2022 provided the challan has been generated by them before 26-01-2022 (23:30 hours).  </p>
						<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection. </p>
					</div>
					<div class='exam-1' id='exam7'>
						<h2>Exam Pattern</h2>
						<p>Scheme of Tier-I and Tier-II Examinations</p>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-startt">Tier</th>
										<th scope="col"class="th-start">Subject </th>
										<th scope="col">No. of Questions</th>
										<th scope="col">Maximum Marks </th>
										<th scope="col">Time allowed </th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th class='td-box'rowspan="4">I</th>
										<th>General Intelligence and Reasoning </th>
										<td>25</td>
										<td>50</td>
										<td class='td-box'rowspan="4"><b>1 hour (1 hour and 20 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</b> </td>
									</tr>
									<tr>
										<th>General Awareness </th>
										<td>25</td>
										<td>50</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Quantitative Aptitude </th>
										<td>25</td>
										<td>50</td>
									</tr>
									<tr>
										<th>English Comprehension </th>
										<td>25</td>
										<td>50</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th class='td-box'rowspan="4">II</th>
										<th>Paper-I: Quantitative Abilities </th>
										<td>100</td>
										<td>200</td>
										<td class='td-box'rowspan="4"><b>2 hours (for each Paper) (2 hours and 40 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</b> </td>
									</tr>
									<tr>
										<th>Paper-II: English Language and Comprehension   </th>
										<td>200</td>
										<td>200</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Paper-III: Statistics 	</th>
										<td>100</td>
										<td>200</td>
									</tr>
									<tr>
										<th>Paper-IV: General Studies (Finance and Economics) </th>
										<td>100</td>
										<td>200</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th class='td-box'>III</th>
										<th>Mode of Examination Pen and Paper mode  </th>
										<td colspan="2">Descriptive Paper in English or Hindi (Writing of Essay/ Precis/ Letter/ Application etc.) </td>
										<td class='td-box'><b>1 hour (1 hour and 20 minutes for the candidates who are eligible for scribe) </b> </td>
									</tr>
									<tr  style='background: #fffdfd;'>
										<th class='td-box'>IV</th>
										<th>Skill Test</th>
										<td class='td-box' colspan="3">In the Tier-IV, Computer Proficiency Test (CPT) and Data Entry Speed Test (DEST) will be conducted.  </td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>Tier-I and Tier-II consist of Objective Type, Multiple choice questions. </p>
							<p><i class="far fa-dot-circle"></i>The questions will be set both in English & Hindi except for English Comprehension in Tier-I and Paper-II in Tier-II. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-I, there will be negative marking of 0.50 for each wrong answer. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, there will be negative marking of 0.25 for each wrong answer in Paper-II (English Language and Comprehension) and of 0.50 marks for each wrong answer in Paper-I, Paper-III and Paper-IV. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, Paper-I and Paper-II are compulsory for all the posts. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, Paper-III will be for only those candidates who apply for the posts of Junior Statistical Officer (JSO) in the Ministry of Statistics and Programme Implementation and Statistical Investigator Grade-II in the office of Registrar General of India (M/o Home Affairs) and who are shortlisted in Tier-I for these Posts. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, Paper-IV will be for only those candidates who are shortlisted in Tier-I for Paper-IV i.e. for the posts of Assistant Audit Officer/ Assistant Accounts Officer. </p>
							<p><i class="far fa-dot-circle"></i>The Paper in Tier-III will have to be written either in Hindi or in English. Part paper written in Hindi and part in English will be awarded zero marks. </p>
					</div>
					<div class='exam-1' id='exam8'>
						<h2>Syllabus</h2>
						<h4> SSC CGL Tier I </h4>
						<p>The SSC CGL Tier I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC CGL Tier I paper which consist of 100 questions. Each question carries 2 marks. So, the total marks is 200 marks.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
									<li>Semantic/Symbolic/Number/Figural </li>
									<li>Analogy</li>
									<li>Semantic/Symbolic/Number/Figural</li>
									<li>Classification</li>
									<li>Semantic/Number/Figural Series</li>
									<li>Problem Solving</li>
									<li>Word Building</li>
									<li>Coding & de-coding</li>
									<li>Numerical/Symbolic Operations</li>
									<li>Space Orientation</li>
									<li>Space Visualization </li>
									<li>Venn Diagrams</li>
									<li>Drawing inferences</li>
									<li>Pattern-folding and completion</li>
									<li>Indexing, Address matching</li>
									<li>Classification of centre codes/roll numbers</li>
									<li>Small & Capital letters/numbers coding, </li>
									<li>decoding and classification</li>
									<li>Embedded Figures</li>
									<li>Critical thinking</li>
									<li>Emotional Intelligence</li>
									<li>Social Intelligence </li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Quantitative Ability Syllabus</li>
									<li>Computation of Whole </li>
									<li>Number, decimal And </li>
									<li>Fractions, Relationship </li>
									<li>Between Numbers</li>
									<li>Profit and Loss</li>
									<li>Simple Interest & Compound </li>
									<li>Interest & Surds & Indices</li>
									<li>Work And Time</li>
									<li>Time And Distance</li>
									<li>Mensuration- Cylinder, Cone, Sphere </li>
									<li>Data Interpretation</li>
									<li>Ratio and Proportion, </li>
									<li>Percentage</li>
									<li>Number Systems</li>
									<li>Sequences and Series</li>
									<li>Mixtures and Allegations</li>
									<li>Permutation, Combination </li>
									<li>and Probability</li>
								</ul>
							</div>
						</div>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>English Language Syllabus</li>
									<li>Reading Comprehension</li>
									<li>Cloze Test</li>
									<li>Para Jumbles</li>
									<li>Synonyms/Antonyms/Homonyms</li>
									<li>Fill In The Blanks</li>
									<li>Multiple Meaning/Error Spotting</li>
									<li>Paragraph Completion</li>
									<li>One Word Substitute</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Awareness Syllabus</li>
									<li>History</li>
									<li>Culture</li>
									<li>Geography</li>
									<li>Economic Scene</li>
									<li>General Policy </li>
									<li>Scientific</li>
									<li>Research</li>
									<li>Current Affairs</li>
								</ul>
							</div>
						</div>
						<h4>SSC CGL Tier II</h4>
						<p>The SSC CGL Tier II will be a computer-based exam conducted online. 120 minutes are allotted to candidates to solve each SSC CGL Tier II paper.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-I (Quantitative Abilities)</li>
									<li>Computation of Whole </li>
									<li>Number, decimal And </li>
									<li>Fractions, Relationship Between Numbers</li>
									<li>Profit and Loss</li>
									<li>Simple Interest & </li>
									<li>Compound Interest & </li>
									<li>Surds & Indices</li>
									<li>Work And Time</li>
									<li>Time And Distance</li>
									<li>Mensuration- Cylinder, </li>
									<li>Cone, Sphere </li>
									<li>Data Interpretation</li>
									<li>Ratio and Proportion, </li>
									<li>Percentage</li>
									<li>Number Systems</li>
									<li>Sequences and Series</li>
									<li>Mixtures and Allegations</li>
									<li>Permutation, Combination </li>
									<li>and Probability</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-II (English Language and Comprehension)  </li>
									<li>spot the error</li>
									<li>fill in the blanks</li>
									<li> synonyms, antonyms</li>
									<li> spelling/ detecting misspelled words</li>
									<li> idioms & phrases</li>
									<li> one word substitution</li>
									<li> improvement of sentences</li>
									<li> active/passive voice of verbs</li>
									<li> conversion into direct/indirect narration</li>
									<li> shuffling of sentence parts</li>
									<li> shuffling of sentences in a passage</li>
									<li>cloze passage & comprehension passage </li>
								</ul>
							</div>
					</div>
					<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-III (Statistics) </li>
									<li>Collection, Classification and Presentation of Statistical Data</li>
									<li>Measures of Central Tendency </li>
									<li>Measures of Dispersion </li>
									<li>Moments, Skewness and Kurtosis </li>
									<li>Correlation and Regression </li>
									<li>Probability Theory </li>
									<li>Random Variable and Probability Distributions </li>
									<li>Sampling Theory </li>
									<li>Statistical Inference</li>
									<li>Analysis of Variance </li>
									<li>Time Series Analysis </li>
									<li>Index Numbers </li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-IV (General Studies-Finance and Economics)  </li>
									<li><b>Part A: Finance and Accounts-(80 marks) </b></li>
									<li>Fundamental principles and basic concept of Accounting</li>
									<li>Financial Accounting </li>
									<li>Basic concepts of accounting </li>
									<li><b>Part B: Economics and Governance-(120 marks) </b></li>
									<li>Comptroller & Auditor General of India</li>
									<li>Finance Commission</li>
									<li>Basic Concept of Economics and introduction to Micro Economics</li>
									<li>Theory of Demand and Supply</li>
									<li>Theory of Production and cost</li>
									<li>Forms of Market and price determination in different markets</li>
									<li>Indian Economy </li>
									<li>Economic Reforms in India </li>
									<li>Money and Banking </li>
									<li>Role of Information Technology in Governance</li>
								</ul>
							</div>
					</div>
					<h4>SSC CGL TIER-IV  SKILL TEST</h4>
					<p><b>Date Entry Speed Test (DEST)</b> </p>
					<p>For the posts of Tax Assistant in CBIC, Tax Assistant in CBDT, and UDC/ SSA in Central Bureau of Narcotics: Data Entry Speed Test (DEST) at 8,000 (eight thousand) Key Depression per hour on Computer </p>
					<p><b>Computer Proficiency Test (CPT) </b></p>
					<p>The Commission will hold Computer Proficiency Test (CPT), comprising of three modules: (i) Word Processing, (ii) Spread Sheet and (iii) Generation of Slides, for the posts of Assistant Section Officer in CSS, MEA & AFHQ, Assistant in Serious Fraud Investigation Office (SFIO) under the Ministry of Corporate Affairs, Assistant (GSI) in the Ministry of Mines, Inspector (CGST &Central Excise), Inspector (Preventive Officer) & Inspector (Examiner) in CBIC and Assistant in National Company Law Appellate Tribunal (NCLAT). </p>
					<p>Duration of each module will be 15 minutes </p>
					<p>Module-I will comprise of DEST which will be conducted for a passage of about 2000 (two thousand) key depressions. </p>
					<p>Module-II will comprise preparation of spreadsheet as per the exercise given in the test. </p>
					<p>Module-III will comprise preparation of Power Point Presentation as per the exercise given in the test. </p>
				</div>
				<div class='exam-1' id='exam9'>
						<h2>Selection Process</h2>
						<h4>The Examination will be conducted in four tiers:  </h4>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-I: Computer Based Examination </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-II: Computer Based Examination </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-III: Pen and Paper Mode (Descriptive paper) </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-IV: Computer Proficiency Test/ Data Entry Skill Test (wherever applicable).</p>
						<h4>Minimum qualifying marks in Tier-I, each Paper of Tier-II and Tier-III Examination: </h4>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>UR : 30% </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>OBC/ EWS : 25% </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Others : 20% </p>
						<p>Merit list will be prepared on the basis of overall performance of candidates in Tier-I, Tier-II and Tier-III Examinations. Final selection of candidates, in each category, will be made on the basis of aggregate marks scored by them in ‘Tier-I, Tier-II and Tier-III examinations’ and ‘preference of posts’ exercised by them. Once the candidate has been given his first available preference, as per his merit, he will not be considered for any other option. Candidates are, therefore, required to exercise preference of posts very carefully. </p>
						<p>The decision of the Commission in all matters relating to eligibility, acceptance or rejection of the applications, penalty for false information, mode of selection, conduct of examination(s), allotment of examination centers, selection and allotment of posts/organizations to selected candidates will be final and binding on the candidates and no enquiry/correspondence will be entertained in this regard. </p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
				</div>
				<div class='exam-1' id='exam10'>
						<h2>Previous Year Cut-Off</h2>
						<p>SSC CGL cutoff has risen significantly in last few years. The key off success to score maximum number. This can be achieved by doing more and more practice with TestsGenie, your exam success partner. </p>
						<h4>SSC CGL Tier 1 Cut-off: 2020-2021</h4>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-startt'>Category</th>
										<th scope="col">Assistant Audit Officer (AAO)</th>
										<th scope="col">Junior Statistical Officer (Grade-II)</th>
										<th scope="col">Remaining Posts</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>UR</th>
										<td>180.12237</td>
										<td>165.77474</td>
										<td>147.78606</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>EWS</th>
										<td>175.31247</td>
										<td>152.03803</td>
										<td>135.04329</td>
									</tr>
									<tr>
										<th>OBC</th>
										<td>172.76640</td>
										<td>154.87053</td>
										<td>135.95037</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SC</th>
										<td>156.73419</td>
										<td>130.76651</td>
										<td>115.35401</td>
									</tr>
									<tr>
										<th>ST</th>
										<td>151.46077</td>
										<td>119.99291</td>
										<td>104.91984</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Ex.S</th>
										<td>–</td>
										<td>–</td>
										<td>89.29321</td>
									</tr>
									<tr>
										<th>OH</th>
										<td>147.08520</td>
										<td>130.86331</td>
										<td>98.42808</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>HH</th>
										<td>117.49075</td>
										<td>86.44781</td>
										<td>40.00000</td>
									</tr>
									<tr>
										<th>VH</th>
										<td>–</td>
										<td>110.67982</td>
										<td>110.41208</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Others-PWD</th>
										<td>83.70627</td>
										<td>40.00000</td>
										<td>40.0000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>SSC CGL Cut Off: 2019-20 [(Tier 1)+(Tier-II)]</h4>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-startt'>Category</th>
										<th scope="col">Assistant Audit Officer (AAO) (Paper I+II +IV)</th>
										<th scope="col">Junior Statistical Officer (Paper I+II+III)</th>
										<th scope="col">Remaining Posts (Paper I +II)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>SC</th>
										<td>422.99783</td>
										<td>359.87503</td>
										<td>434.68407</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>ST</th>
										<td>377.74693</td>
										<td>343.80764</td>
										<td>405.12641</td>
									</tr>
									<tr>
										<th>UR</th>
										<td>517.46992</td>
										<td>488.00000</td>
										<td>528.38462</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>EWS</th>
										<td>504.58172</td>
										<td>457.41940</td>
										<td>466.42205</td>
									</tr>
									<tr>
										<th>OBC</th>
										<td>456.79650</td>
										<td>423.83991</td>
										<td>478.82303</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>OH</th>
										<td>422.28761</td>
										<td>422.28761</td>
										<td>392.96950</td>
									</tr>
									<tr>
										<th>HH</th>
										<td>385.70577</td>
										<td>302.89152</td>
										<td>259.90917</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>VH</th>
										<td>–</td>
										<td>320.64089</td>
										<td>422.76404</td>
									</tr>
									<tr>
										<th>ESM</th>
										<td>–</td>
										<td>–</td>
										<td>365.98601</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Others-PWD</th>
										<td>306.93200</td>
										<td>375.17063</td>
										<td>120.00000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam11'>
						<h2>Detailed Advertisement</h2>
						<p>SSC CGL 2021-22 Official advertisement-</p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam12'>
						<h2>Call Letters/ Admit Card</h2>
						<p>SSC CGL  2021-22 Admit card</p>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Admit Cards for all stages of examination will be issued online on the websites of concerned Regional Office of the Commission.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates are advised to regularly visit the websites of the Commission Headquarters (i.e. https://ssc.nic.in) and Regional Office concerned of the Commission under whose jurisdiction the examination centers opted by the candidate are located (detail at para-12.1).  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Information about the Examination indicating the time table and City/ Centre of examination for the candidates will be uploaded on the websites of the Regional Office concerned of the Commission about two weeks before the date of examination.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Facility to download Admit Cards will be made available 3-7 days before the examination on the website of Regional Office concerned. Candidate must bring printout of the Admit Card to the Examination Hall. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>In addition to the Admit Card, it is mandatory to carry at least two passport size recent colour photographs, Original valid Photo-ID proof having the Date of Birth as printed on the Admit Card  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website:<a href='https://ssc.nic.in'target='_blank'>https://ssc.nic.in</a> </b></p>
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
						<p>Combined Graduate Level Examination, 2021 (CGL) is organized by Staff Selection Commission for recruitment of various Group ‘B’ and Group ‘C’ posts in different Ministries/ Departments/ Organizations of Government of India and various Constitutional Bodies/ Statutory Bodies/ Tribunals, etc. </p>
						<p>The details of the examination are as under:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p>23-12-2021 to 23-01-2022 </p>
								<h4>Exam Date</h4>
								<p>Tier-I :- April, 2022  </p>
								<p>Tier-II :- To be notified later</p>
								<h4>Preliminary Exam Pattern</h4>
								<div class='para-two'>
									<p><span><b>Subject</b></span>
									</p>
									<p><span><b>No of Questions</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p>English Comprehension</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Quantitative Aptitude</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>General Intelligence and Reasoning</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>General Awareness</p>
									<p><span>25</span>
									</p>
								</div>
							</div>
							<div class='over-view'>
								<h4>Eligibility</h4>
								<p><span>Graduation</span>
								</p>
								<h4>Vacancies</h4>
								<p><span>Vacancies will be determined in due course </span>
								</p>
								<h4>Salary</h4>
								<div class='para-two'>
									<p><span><b>SSC CGL Pay Levels</b></span>
									</p>
									<p><span><b>SSC CGL Pay Scales(in INR)</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>4</span></p>
									<p><span>25500 to 81100</span></p>
								</div>
								<div class='para-two'>
									<p><span>5</span></p>
									<p><span>29200 to 92300</span></p>
								</div>
								<div class='para-two'>
									<p><span>6</span></p>
									<p><span>35400 to 112400</span></p>
								</div>
								<div class='para-two'>
									<p><span>7</span></p>
									<p><span>44900 to 142400</span></p>
								</div>
								<div class='para-two'>
									<p><span>8</span></p>
									<p><span>47600 to 151100</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Important Dates</summary>
  					<div class='exam-1 active' id='exam2'>
						<p>SSC CGL 2021-22 Notification is out!. SSC CGL 2021 related important dates can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>23-12-2021</span>
								</p>
								<h4>Online Application Date</h4>
								<p><span> 23-12-2021 to 23-01-2022</span>
								</p>
								<h4>Last date and time for receipt of online applications </h4>
								<p><span>23-01-2022 (23:30)</span>
								</p>
								<h4>Last date & time online payment</h4>
								<p><span>25-01-2022 (23:30)</span></p>
								<h4>Dates of ‘Window for Application Form Correction’ including online payment</h4>
								<p><span>28-01-2022 to 01-02-2022 (23:30) </span> </p>
							</div>
							<div class='over-view'>
								<h4>Last date & time for offline challan generation </h4>
								<p><span>26-01-2022 (23:30)</span></p>
								<h4>Last date for payment through challan</h4>
								<p><span>27-01-2022</span></p>
								<h4>Computer Based Examination Date</h4>
								<p><span>Tier-I : April, 2022 </span> </p>
								<p><span>Tier-II : To be notified later</span> </p>
								<h4>Admit Card Release Date</h4>
								<p><span>To be notified later</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Locations</summary>
  					<div class='exam-1 active' id='exam3'>
  						<p>SSC CGL 2021-22 Notification is out!. SSC CGL 2021 Exam centers and center code can be found below.</p>
  						<div class='over-view'>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Bhagalpur(3201), Muzaffarpur(3205), Patna(3206), Purnea (3209), Agra(3001), Bareilly (3005), Gorakhpur (3007), Jhansi (3008), Kanpur(3009), Lucknow(3010), Meerut(3011), Prayagraj(3003), Varanasi(3013) </p>
								<p>Central Region (CR)/ Bihar and Uttar Pradesh </p>
								<p>Regional Director (CR), Staff Selection Commission, 34-A, Mahatma Gandhi Marg, Civil Lines, Kendriya Sadan, Prayagraj – 211001. (http://www.ssc-cr.org) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Port Blair (4802), Bokaro(4201), Hazaribagh(4204), Jamshedpur(4207), Ranchi(4205), Balasore(Odisha) (4601), Berhampore(Odisha) (4602), Bhubaneswar(4604), Cuttack(4605), Dhenkenal(4611), Rourkela(4610), Sambalpur(4609), Gangtok(4001), Asansol(4417), Kalyani(4419), Kolkata(4410), Siliguri(4415) </p>
								<p>Eastern Region (ER)/ Andaman & Nicobar Islands, Jharkhand, Odisha, Sikkim and West Bengal </p>
								<p>Regional Director (ER), Staff Selection Commission, 1st MSO Building, (8th Floor), 234/4, Acharya Jagadish Chandra Bose Road, Kolkata, West Bengal-700020 (www.sscer.org) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Belagavi (9002), Bengaluru (9001), Hubballi (9011), Kalaburagi (Gulbarga) (9005), Mangaluru (9008), Mysuru (9009), Shivamogga (9010), Udupi (9012). Ernakulam (9213), Kannur (9202), Kollam (9210), Kottayam (9205), Kozhikode (9206), Thrissur (9212), Thiruvananthapuram (9211). </p>
								<p>Karnataka, Kerala Region (KKR)/ Lakshadweep, Karnataka and Kerala </p>
								<p>Regional Director (KKR), Staff Selection Commission, 1st Floor, “E” Wing, Kendriya Sadan, Koramangala, Bengaluru, Karnataka-560034 (www.ssckkr.kar.nic.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Bhopal (6001), Gwalior(6005), Indore (6006), Jabalpur (6007), Satna (6014), Sagar (6015), Ujjain (6016), Bilaspur (6202), Raipur (6204), Durg-Bhilai (6205) </p>
								<p>Madhya Pradesh Sub-Region (MPR)/ Chhattisgarh and Madhya Pradesh</p>
								<p>Dy. Director (MPR), Staff Selection Commission, 5th Floor, Investment Building, LIC Campus-2, Pandri, Raipur, Chhattisgarh-492004  (www.sscmpr.org) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Itanagar(5001), Dibrugarh(5102), Guwahati(Dispur)(5105), Jorhat(5107), Silchar(5111), Churachandpur(5502), Imphal(5501), Ukhrul(5503), Shillong(5401), Aizwal(5701), Dimapur (5301), Kohima(5302), Agartala(5601), </p>
								<p>North Eastern Region (NER)/ Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland and Tripura. </p>
								<p>Regional Director (NER), Staff Selection Commission, Housefed Complex, Last Gate, Beltola-Basistha Road, P.O. Assam Sachivalaya, Dispur, Guwahati, Assam-781006 (www.sscner.org.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Dehradun(2002), Haldwani(2003), Haridwar(2005), Roorkee(2006), Delhi(2201), Ajmer(2401), Alwar(2402), Bikaner(2404), Jaipur(2405), Jodhpur(2406), Kota(2407), Sriganganagar(2408), Udaipur(2409), Sikar(2411) </p>
								<p>Northern Region (NR)/ Delhi, Rajasthan and Uttarakhand</p>
								<p>Regional Director (NR), Staff Selection Commission, Block No. 12, CGO Complex, Lodhi Road, New Delhi-110003 (www.sscnr.nic.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Chandigarh/ Mohali(1601), Hamirpur(1202), Shimla(1203), Jammu(1004), Samba(1010), Srinagar(J&K)(1007),Leh(1005), Amritsar(1404), Jalandhar(1402), Ludhiana(1405), Patiala(1403), </p>
								<p>North Western Sub-Region (NWR)/ Chandigarh, Haryana, Himachal Pradesh, Jammu and Kashmir, Ladakh and Punjab </p>
								<p>Dy. Director (NWR), Staff Selection Commission, Block No. 3, Ground Floor, Kendriya Sadan, Sector-9, Chandigarh-160009 (www.sscnwr.org) 	</p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Chirala(8011), Cuddapah(8013), Guntur(8001), Kakinada (8009), Kurnool(8003), Nellore (8010), Rajahmundry(8004), Tirupati(8006), Vizianagaram(8012), Vijayawada(8008), Vishakhapatnam(8007), Puducherry(8401), Chennai(8201), Coimbatore(8202), Krishnagiri(8209), Madurai(8204), Salem(8205), Tiruchirapalli(8206), Tirunelveli(8207), Vellore (8208), Hyderabad(8601), Karimnagar (8604), Warangal(8603)  </p>
								<p>Southern Region (SR)/ Andhra Pradesh, Puducherry, Tamil Nadu and Telangana. 	</p>
								<p>Regional Director (SR), Staff Selection Commission, 2nd Floor, EVK Sampath Building, DPI Campus, College Road, Chennai, Tamil Nadu-600006 (www.sscsr.gov.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Panaji(7801), Ahmedabad(7001), Anand(7011), Gandhinagar(7012), Mehsana(7013), Rajkot(7006), Surat(7007), Vadodara(7002), Amravati(7201), Aurangabad(7202), Jalgaon(7214), Kolhapur(7203), Mumbai(7204), Nagpur(7205), Nanded (7206), Nashik(7207), Pune(7208) </p>
								<p>Western Region (WR)/ Dadra and Nagar Haveli and Daman and Diu, Goa, Gujarat and Maharashtra</p>
								<p>Regional Director (WR), Staff Selection Commission, 1st Floor, South Wing, Pratishtha Bhawan,  101, Maharshi Karve Road, Mumbai, Maharashtra-400020 (www.sscwr.net) </p>
							</div>
						</div>
  				</details>
  				<details>
  					<summary>Number of Posts</summary>
  					<div class='exam-1 active' id='exam4'>
  						<p>Vacancies will be determined in due course. Updated vacancy position will be uploaded on the website of the Commission (https://ssc.nic.in > Candidate’s Corner > Tentative Vacancy).</p>
  						<div class='over-view'>
  							<h4>Total Vacancies</h4>
  							<p>To be announced</p>
  							<h4>Assistant Audit Officer</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Indian Audit & Accounts Department under C&AG</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B” Gazetted</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant Accounts Officer</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Indian Audit & Accounts Department under C&AG</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B” Gazetted</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant Section Officer</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Central Secretariat Service</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>20-30 years</p>
								</div>
								<h4>Assistant Section Officer</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Intelligence Bureau</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant Section Officer</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Ministry of Railway</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>	20-30 years</p>
								</div>
								<h4>Assistant Section Officer	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Ministry of External Affairs</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>20-30 years</p>
								</div>
								<h4>Assistant Section Officer		</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>AFHQ</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>20-30 years</p>
								</div>
								<h4>Assistant Section Officer	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Ministry of Electronics and Information Technology	</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>	Other Ministries/ Departments/ Organizations</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>20-30 years</p>
								</div>
								<h4>	Assistant Section Officer	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Other Ministries/ Departments/ Organizations</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>	Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Inspector of Income Tax		</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>CBDT</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “C”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Inspector, (CGST & Central Excise)		</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>CBIC</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Inspector (Preventive Officer)</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>CBIC</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Inspector (Examiner)	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>CBIC	</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant Enforcement Officer	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Directorate of Enforcement, Department of Revenue</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Sub Inspector</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>	Central Bureau of Investigation</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>	Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Inspector </h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Posts	Department of Post</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Inspector	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Central Bureau of Narcotics</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant/ Superintendent	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Indian Coast Guard</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant		</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Other Ministries/ Departments/ Organizations	</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Assistant</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>	National Company Law Appellate Tribunal (NCLAT)	</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Research Assistant</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>National Human Rights Commission (NHRC)</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Divisional Accountant	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Offices under C&AG	</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>	Sub Inspector	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>National Investigation Agency (NIA)	</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Junior StatisticalOfficer (JSO)		</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>M/o Statistics & Programme Implementation.</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>	18-32 years</p>
								</div>
								<h4>Statistical Investigator Grade-II	</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Registrar General of India		</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “B”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-30 years</p>
								</div>
								<h4>Auditor</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>	Offices under C & AG</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “C”</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-27 years</p>
								</div>
								<h4>Auditor</h4>
  							<div class="para-two">
									<p>Ministry/ Department/ Office/ Cadre</p>
									<p>Other Ministry/ Departments</p>
								</div>
								<div class="para-two">
									<p>Classification of Posts</p>
									<p>Group “C”	</p>
								</div>
								<div class="para-two">
									<p>Age Limit</p>
									<p>18-27 years</p>
								</div>
  						</div>
  					</div>
  				</details>
  				<details>
  					<summary>Eligibility</summary>
  					<div class='exam-1 active' id='exam5'>
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
								<h4>Age Relaxation</h4>
								<div class='para-two'>
									<p>SC / ST</p>
									<p><span>5 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>OBC</p>
									<p><span>3 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>PwD (unreserved)</p>
									<p><span>10 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>PwD (OBC)</p>
									<p><span>13 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>PwD (SC/ST)</p>
									<p><span>15 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Ex-Serviceman (ESM)</p>
									<p>3 years after deduction of the military service rendered from the actual age as on the closing date.</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Relaxation</h4>

								<div class='para-two'>
									<p>Defence Personnel disabled in operation during hostilities with any foreign country or in a disturbed area and released as a consequence thereof</p>
									<p><span>3 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Defence Personnel disabled in operation during hostilities with any foreign country or in a disturbed area and released as a consequence thereof (SC/ST)</p>
									<p><span>8 Years</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Central Govt. Civilian Employees who have rendered not less than 3 years regular and continuous service as on closing date for receipt of application.</p>
									<p><span>Up to 40 years of age </span>
									</p>
								</div>
								<div class='para-two'>
									<p>Central Govt. Civilian Employees (SC/ST) who have rendered not less than 3 years regular and continuous service as on closing date for receipt of application. </p>
									<p><span>Up to 45 years of age </span>
									</p>
								</div>
								<div class='para-two'>
									<p>Widows/ Divorced Women/ Women judicially separated and who are not remarried.</p>
									<p><span>Up to 35 years of age </span>
									</p>
								</div>
								<div class='para-two'>
									<p>Widows/ Divorced Women/ Women judicially separated and who are not remarried (SC/ST).</p>
									<p><span>Up to 40 years of age </span>
									</p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Limit (as  on 01-01-2022)</h4>
								<div class='para-two'>
									<p><span><b>Age Limit</b></span> </p>
									<p><span><b>Remarks</b></span> </p>
								</div>
								<div class='para-two'>
									<p>For the posts for which age limit is 18-27 years </p>
									<p>Candidate must have been born not earlier than 02-01-1995 and not later than 01-01-2004. </p>
								</div>
								<div class='para-two'>
									<p>For the posts for which age limit is 20-30 years  </p>
									<p>Candidate must have been born not earlier than 02-01-1992 and not later than 01-01-2002. </p>
								</div>
								<div class='para-two'>
									<p>For the posts for which age limit is 18-30 years  </p>
									<p>Candidate must have been born not earlier than 02-01-1992 and not later than 01-01-2004. </p>
								</div>
								<div class='para-two'>
									<p>For the post for which age limit is 18-32 years  </p>
									<p>Candidate must have been born not earlier than 02-01-1990 and not later than 01-01-2004. </p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Educational Qualification (As on 23-01-2022) </h4>
								<div class='para-two'>
									<p>Assistant Audit Officer/Assistant Accounts Officer </p>
									<p>Essential Qualifications: Bachelor’s Degree from a recognized University or Institute. <br>Desirable Qualifications: Chartered Accountant or Cost & Management Accountant or Company Secretary or Masters in Commerce or Masters in Business Studies or Masters in Business Administration (Finance) or Masters in Business Economics. During the period of probation direct recruits shall have to qualify the “Subordinate Audit/ Accounts Service Examination” in respective branches for confirmation and regular appointment as Assistant Audit Officer/Assistant Accounts Officer.</p>
								</div>
								<div class='para-two'>
									<p>Junior Statistical Officer </p>
									<p>Bachelor’s Degree in any subject from a recognized University or Institute with at least 60% Marks in Mathematics at 12th standard level; Or Bachelor’s Degree in any subject with Statistics as one of the subjects at degree level. </p>
								</div>
								<div class='para-two'>
									<p>Statistical Investigator Grade-II </p>
									<p>Bachelor’s Degree in any subject with Statistics as one of the subjects from a recognized University or Institute. </p>
								</div>
								<div class='para-two'>
									<p>Assistant in National Company Law Appellate Tribunal (NCLAT) </p>
									<p>Essential Qualifications: Bachelor’s Degree from a recognized University or Institute. <br>Desirable Qualifications: Degree in law from a recognized university. </p>
								</div>
								<div class='para-two'>
									<p>Research Assistant in National Human Rights Commission (NHRC) </p>
									<p>Essential Qualifications: Bachelor’s Degree from a recognized University or Institute.<br> Desirable Qualifications: Degree in Law or Human Rights from a recognized universityMinimum one-year research experience in any recognized university or recognized Research Institution; </p>
								</div>
								<div class='para-two'>
									<p>All other Posts</p>
									<p>Bachelor’s Degree from a recognized University or equivalent </p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>How To Apply</summary>
  					<div class='exam-1 active' id='exam6'>
  						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Submit applications online at the website of SSC Headquarter i.e. https://ssc.nic.in.  </p>
						<p><i class="far fa-dot-circle"></i>Upload the scanned colour passport size photograph (not more than three months old) in JPEG format (20 KB to 50 KB) with dimension of about 3.5 cm (width) x 4.5 cm (height). The photograph should be without cap, spectacles and both ears should be visible.</p>
						<p><i class="far fa-dot-circle"></i>Last date and time for submission of online applications is 23-01-2022 (23:30). </p>
						<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form.</p>

						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>Fee payable: ₹100/- (Rs one hundred only). </p>
						<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee.  </p>
						<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.  </p>
						<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 25-01-2022 (23:30 hours). </p>
						<p><i class="far fa-dot-circle"></i>Candidates who wish to make cash payment through the challan of SBI, may make payment in cash at the Branches of SBI within the working hours of bank up to 27-01-2022 provided the challan has been generated by them before 26-01-2022 (23:30 hours).  </p>
						<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection. </p>
  					</div>
  				</details>
  				<details>
  					<summary>Exam Pattern</summary>
  					<div class='exam-1 active' id='exam7'>
  						<div class="impt-points">
  							<h4>Tier-I Examination</h4>
  						</div>
  						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>General Intelligence and Reasoning	</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>25</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>50</p>
								</div>
								<h4>General Awareness</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>25</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>50</p>
								</div>
								<h4>Quantitative Aptitude</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>25</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>50</p>
								</div>
								<h4>English Comprehension</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>25</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>50</p>
								</div>
								<div class='para-two'>
									<p>Tier-I Examination Total Time allowed</p>
									<p>1 hour (1 hour and 20 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</p>
								</div>
							</div>
						</div>
						<div class="impt-points">
  							<h4>Tier-II Examination</h4>
  						</div>
  						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Paper-I: Quantitative Abilities</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>100</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>200</p>
								</div>
								<h4>Paper-II: English Language and Comprehension</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>200</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>200</p>
								</div>
								<h4>Paper-III: Statistics</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>100</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>200</p>
								</div>
								<h4>Paper-IV: General Studies (Finance and Economics)</h4>
								<div class='para-two'>
									<p>	No. of Questions</p>
									<p>100</p>
								</div>
								<div class='para-two'>
									<p>	Maximum Marks</p>
									<p>200</p>
								</div>
								<div class='para-two'>
									<p>Tier-II Examination Total Time allowed</p>
									<p>2 hours (for each Paper) (2 hours and 40 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</p>
								</div>
							</div>
						</div>
						<div class="impt-points">
  							<h4>Tier-III Examination </h4>
  						</div>
  						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Tier-III Examination Details</h4>
								<p>Mode of Examination Pen and Paper mode</p>
								<p>Descriptive Paper in English or Hindi (Writing of Essay/ Precis/ Letter/ Application etc.)</p>
								<div class='para-two'>
									<p>Time allowed</p>
									<p>1 hour (1 hour and 20 minutes for the candidates who are eligible for scribe) </p>
								</div>
							</div>
						</div>
						<div class="impt-points">
  							<h4>Tier-IV Examination</h4>
  						</div>
  						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Tier-IV Examination  Details</h4>
								<p>Skill Test</p>
								<p>In the Tier-IV, Computer Proficiency Test (CPT) and Data Entry Speed Test (DEST) will be conducted. </p>
							</div>
						</div>
  						<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>Tier-I and Tier-II consist of Objective Type, Multiple choice questions. </p>
							<p><i class="far fa-dot-circle"></i>The questions will be set both in English & Hindi except for English Comprehension in Tier-I and Paper-II in Tier-II. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-I, there will be negative marking of 0.50 for each wrong answer. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, there will be negative marking of 0.25 for each wrong answer in Paper-II (English Language and Comprehension) and of 0.50 marks for each wrong answer in Paper-I, Paper-III and Paper-IV. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, Paper-I and Paper-II are compulsory for all the posts. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, Paper-III will be for only those candidates who apply for the posts of Junior Statistical Officer (JSO) in the Ministry of Statistics and Programme Implementation and Statistical Investigator Grade-II in the office of Registrar General of India (M/o Home Affairs) and who are shortlisted in Tier-I for these Posts. </p>
							<p><i class="far fa-dot-circle"></i>In Tier-II, Paper-IV will be for only those candidates who are shortlisted in Tier-I for Paper-IV i.e. for the posts of Assistant Audit Officer/ Assistant Accounts Officer. </p>
							<p><i class="far fa-dot-circle"></i>The Paper in Tier-III will have to be written either in Hindi or in English. Part paper written in Hindi and part in English will be awarded zero marks. </p>
  					</div>
  				</details>
  				<details>
  					<summary>Syllabus</summary>
  					<div class='exam-1 active' id='exam8'>
  						<h4> SSC CGL Tier I </h4>
  						<p>The SSC CGL Tier I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC CGL Tier I paper which consist of 100 questions. Each question carries 2 marks. So, the total marks is 200 marks.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
									<li>Semantic/Symbolic/Number/Figural </li>
									<li>Analogy</li>
									<li>Semantic/Symbolic/Number/Figural</li>
									<li>Classification</li>
									<li>Semantic/Number/Figural Series</li>
									<li>Problem Solving</li>
									<li>Word Building</li>
									<li>Coding & de-coding</li>
									<li>Numerical/Symbolic Operations</li>
									<li>Space Orientation</li>
									<li>Space Visualization </li>
									<li>Venn Diagrams</li>
									<li>Drawing inferences</li>
									<li>Pattern-folding and completion</li>
									<li>Indexing, Address matching</li>
									<li>Classification of centre codes/roll numbers</li>
									<li>Small & Capital letters/numbers coding, </li>
									<li>decoding and classification</li>
									<li>Embedded Figures</li>
									<li>Critical thinking</li>
									<li>Emotional Intelligence</li>
									<li>Social Intelligence </li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Quantitative Ability Syllabus</li>
									<li>Computation of Whole </li>
									<li>Number, decimal And </li>
									<li>Fractions, Relationship </li>
									<li>Between Numbers</li>
									<li>Profit and Loss</li>
									<li>Simple Interest & Compound </li>
									<li>Interest & Surds & Indices</li>
									<li>Work And Time</li>
									<li>Time And Distance</li>
									<li>Mensuration- Cylinder, Cone, Sphere </li>
									<li>Data Interpretation</li>
									<li>Ratio and Proportion, </li>
									<li>Percentage</li>
									<li>Number Systems</li>
									<li>Sequences and Series</li>
									<li>Mixtures and Allegations</li>
									<li>Permutation, Combination </li>
									<li>and Probability</li>
								</ul>
							</div>
						</div>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>English Language Syllabus</li>
									<li>Reading Comprehension</li>
									<li>Cloze Test</li>
									<li>Para Jumbles</li>
									<li>Synonyms/Antonyms/Homonyms</li>
									<li>Fill In The Blanks</li>
									<li>Multiple Meaning/Error Spotting</li>
									<li>Paragraph Completion</li>
									<li>One Word Substitute</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Awareness Syllabus</li>
									<li>History</li>
									<li>Culture</li>
									<li>Geography</li>
									<li>Economic Scene</li>
									<li>General Policy </li>
									<li>Scientific</li>
									<li>Research</li>
									<li>Current Affairs</li>
								</ul>
							</div>
						</div>
						<h4>SSC CGL Tier II</h4>
						<p>The SSC CGL Tier II will be a computer-based exam conducted online. 120 minutes are allotted to candidates to solve each SSC CGL Tier II paper.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-I (Quantitative Abilities)</li>
									<li>Computation of Whole </li>
									<li>Number, decimal And </li>
									<li>Fractions, Relationship Between Numbers</li>
									<li>Profit and Loss</li>
									<li>Simple Interest & </li>
									<li>Compound Interest & </li>
									<li>Surds & Indices</li>
									<li>Work And Time</li>
									<li>Time And Distance</li>
									<li>Mensuration- Cylinder, </li>
									<li>Cone, Sphere </li>
									<li>Data Interpretation</li>
									<li>Ratio and Proportion, </li>
									<li>Percentage</li>
									<li>Number Systems</li>
									<li>Sequences and Series</li>
									<li>Mixtures and Allegations</li>
									<li>Permutation, Combination </li>
									<li>and Probability</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-II (English Language and Comprehension)  </li>
									<li>spot the error</li>
									<li>fill in the blanks</li>
									<li> synonyms, antonyms</li>
									<li> spelling/ detecting misspelled words</li>
									<li> idioms & phrases</li>
									<li> one word substitution</li>
									<li> improvement of sentences</li>
									<li> active/passive voice of verbs</li>
									<li> conversion into direct/indirect narration</li>
									<li> shuffling of sentence parts</li>
									<li> shuffling of sentences in a passage</li>
									<li>cloze passage & comprehension passage </li>
								</ul>
							</div>
					</div>
					<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-III (Statistics) </li>
									<li>Collection, Classification and Presentation of Statistical Data</li>
									<li>Measures of Central Tendency </li>
									<li>Measures of Dispersion </li>
									<li>Moments, Skewness and Kurtosis </li>
									<li>Correlation and Regression </li>
									<li>Probability Theory </li>
									<li>Random Variable and Probability Distributions </li>
									<li>Sampling Theory </li>
									<li>Statistical Inference</li>
									<li>Analysis of Variance </li>
									<li>Time Series Analysis </li>
									<li>Index Numbers </li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Paper-IV (General Studies-Finance and Economics)  </li>
									<li><b>Part A: Finance and Accounts-(80 marks) </b></li>
									<li>Fundamental principles and basic concept of Accounting</li>
									<li>Financial Accounting </li>
									<li>Basic concepts of accounting </li>
									<li><b>Part B: Economics and Governance-(120 marks) </b></li>
									<li>Comptroller & Auditor General of India</li>
									<li>Finance Commission</li>
									<li>Basic Concept of Economics and introduction to Micro Economics</li>
									<li>Theory of Demand and Supply</li>
									<li>Theory of Production and cost</li>
									<li>Forms of Market and price determination in different markets</li>
									<li>Indian Economy </li>
									<li>Economic Reforms in India </li>
									<li>Money and Banking </li>
									<li>Role of Information Technology in Governance</li>
								</ul>
							</div>
					</div>
					<h4>SSC CGL TIER-IV  SKILL TEST</h4>
					<p><b>Date Entry Speed Test (DEST)</b> </p>
					<p>For the posts of Tax Assistant in CBIC, Tax Assistant in CBDT, and UDC/ SSA in Central Bureau of Narcotics: Data Entry Speed Test (DEST) at 8,000 (eight thousand) Key Depression per hour on Computer </p>
					<p><b>Computer Proficiency Test (CPT) </b></p>
					<p>The Commission will hold Computer Proficiency Test (CPT), comprising of three modules: (i) Word Processing, (ii) Spread Sheet and (iii) Generation of Slides, for the posts of Assistant Section Officer in CSS, MEA & AFHQ, Assistant in Serious Fraud Investigation Office (SFIO) under the Ministry of Corporate Affairs, Assistant (GSI) in the Ministry of Mines, Inspector (CGST &Central Excise), Inspector (Preventive Officer) & Inspector (Examiner) in CBIC and Assistant in National Company Law Appellate Tribunal (NCLAT). </p>
					<p>Duration of each module will be 15 minutes </p>
					<p>Module-I will comprise of DEST which will be conducted for a passage of about 2000 (two thousand) key depressions. </p>
					<p>Module-II will comprise preparation of spreadsheet as per the exercise given in the test. </p>
					<p>Module-III will comprise preparation of Power Point Presentation as per the exercise given in the test. </p>
  					</div>
  				</details>
  				<details>
  					<summary>Selection Process</summary>
  					<div class='exam-1 active' id='exam9'>
  						<h4>The Examination will be conducted in four tiers:  </h4>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-I: Computer Based Examination </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-II: Computer Based Examination </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-III: Pen and Paper Mode (Descriptive paper) </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-IV: Computer Proficiency Test/ Data Entry Skill Test (wherever applicable).</p>
						<h4>Minimum qualifying marks in Tier-I, each Paper of Tier-II and Tier-III Examination: </h4>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>UR : 30% </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>OBC/ EWS : 25% </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Others : 20% </p>
						<p>Merit list will be prepared on the basis of overall performance of candidates in Tier-I, Tier-II and Tier-III Examinations. Final selection of candidates, in each category, will be made on the basis of aggregate marks scored by them in ‘Tier-I, Tier-II and Tier-III examinations’ and ‘preference of posts’ exercised by them. Once the candidate has been given his first available preference, as per his merit, he will not be considered for any other option. Candidates are, therefore, required to exercise preference of posts very carefully. </p>
						<p>The decision of the Commission in all matters relating to eligibility, acceptance or rejection of the applications, penalty for false information, mode of selection, conduct of examination(s), allotment of examination centers, selection and allotment of posts/organizations to selected candidates will be final and binding on the candidates and no enquiry/correspondence will be entertained in this regard. </p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Previous Year Cut-Off</summary>
  					<div class='exam-1 active' id='exam10'>
  						<p>SSC CGL cutoff has risen significantly in last few years. The key off success to score maximum number. This can be achieved by doing more and more practice with TestsGenie, your exam success partner. </p>
						<h4>SSC CGL Tier 1 Cut-off: 2020-2021</h4>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-startt'>Category</th>
										<th scope="col">Assistant Audit Officer (AAO)</th>
										<th scope="col">Junior Statistical Officer (Grade-II)</th>
										<th scope="col">Remaining Posts</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>UR</th>
										<td>180.12237</td>
										<td>165.77474</td>
										<td>147.78606</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>EWS</th>
										<td>175.31247</td>
										<td>152.03803</td>
										<td>135.04329</td>
									</tr>
									<tr>
										<th>OBC</th>
										<td>172.76640</td>
										<td>154.87053</td>
										<td>135.95037</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SC</th>
										<td>156.73419</td>
										<td>130.76651</td>
										<td>115.35401</td>
									</tr>
									<tr>
										<th>ST</th>
										<td>151.46077</td>
										<td>119.99291</td>
										<td>104.91984</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Ex.S</th>
										<td>–</td>
										<td>–</td>
										<td>89.29321</td>
									</tr>
									<tr>
										<th>OH</th>
										<td>147.08520</td>
										<td>130.86331</td>
										<td>98.42808</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>HH</th>
										<td>117.49075</td>
										<td>86.44781</td>
										<td>40.00000</td>
									</tr>
									<tr>
										<th>VH</th>
										<td>–</td>
										<td>110.67982</td>
										<td>110.41208</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Others-PWD</th>
										<td>83.70627</td>
										<td>40.00000</td>
										<td>40.0000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>SSC CGL Cut Off: 2019-20 [(Tier 1)+(Tier-II)]</h4>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-startt'>Category</th>
										<th scope="col">Assistant Audit Officer (AAO) (Paper I+II +IV)</th>
										<th scope="col">Junior Statistical Officer (Paper I+II+III)</th>
										<th scope="col">Remaining Posts (Paper I +II)</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>SC</th>
										<td>422.99783</td>
										<td>359.87503</td>
										<td>434.68407</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>ST</th>
										<td>377.74693</td>
										<td>343.80764</td>
										<td>405.12641</td>
									</tr>
									<tr>
										<th>UR</th>
										<td>517.46992</td>
										<td>488.00000</td>
										<td>528.38462</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>EWS</th>
										<td>504.58172</td>
										<td>457.41940</td>
										<td>466.42205</td>
									</tr>
									<tr>
										<th>OBC</th>
										<td>456.79650</td>
										<td>423.83991</td>
										<td>478.82303</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>OH</th>
										<td>422.28761</td>
										<td>422.28761</td>
										<td>392.96950</td>
									</tr>
									<tr>
										<th>HH</th>
										<td>385.70577</td>
										<td>302.89152</td>
										<td>259.90917</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>VH</th>
										<td>–</td>
										<td>320.64089</td>
										<td>422.76404</td>
									</tr>
									<tr>
										<th>ESM</th>
										<td>–</td>
										<td>–</td>
										<td>365.98601</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Others-PWD</th>
										<td>306.93200</td>
										<td>375.17063</td>
										<td>120.00000</td>
									</tr>
								</tbody>
							</table>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Detailed Advertisement</summary>
  					<div class='exam-1 active' id='exam11'>
  						<p>SSC CGL 2021-22 Official advertisement-</p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_23122021.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Admit Card</summary>
  					<div class='exam-1 active' id='exam12'>
  						<p>SSC CGL  2021-22 Admit card</p>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Admit Cards for all stages of examination will be issued online on the websites of concerned Regional Office of the Commission.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates are advised to regularly visit the websites of the Commission Headquarters (i.e. https://ssc.nic.in) and Regional Office concerned of the Commission under whose jurisdiction the examination centers opted by the candidate are located (detail at para-12.1).  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Information about the Examination indicating the time table and City/ Centre of examination for the candidates will be uploaded on the websites of the Regional Office concerned of the Commission about two weeks before the date of examination.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Facility to download Admit Cards will be made available 3-7 days before the examination on the website of Regional Office concerned. Candidate must bring printout of the Admit Card to the Examination Hall. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>In addition to the Admit Card, it is mandatory to carry at least two passport size recent colour photographs, Original valid Photo-ID proof having the Date of Birth as printed on the Admit Card  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website:<a href='https://ssc.nic.in'target='_blank'>https://ssc.nic.in</a> </b></p>
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