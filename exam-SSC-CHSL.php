<?php include( 'essentials/top.php'); ?>
<?php include( 'includes/header.php'); ?>
<section class='exam-details'>
	<div class='container-fluid'>
		<div class="row">
			<div class='background-pages'>
				<div class='important-links'>
                <h1>SSC CHSL Exam</h1>
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
						<p>Combined Higher Secondary Level (CHSL) 2022 is a national level exam conducted every year by the Staff Selection Commission to select Higher Secondary qualified students for posts like Lower Divisional Clerk (LDC), Junior Secretariat Assistant (JSA), Postal Assistants(PA), Sorting Assistants(SA), Data Entry Operator (DEO), Data Entry Operator Grade A across ministries and government offices. </p>
						<p>The details of the examination are as under:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p>01-02-2022 to 07-03-2022 </p>
								<h4>Exam Date</h4>
								<p>Tier-I : May, 2022 </p>
								<p>Tier-II: To be notified later</p>
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
								<h4>Eligibility</h4>
								<p><span>10+2</span>
								</p>

							</div>
							<div class='over-view'>
								<h4>Vacancies</h4>
								<p><span>To be notified </span>
								</p>
								<h4>Salary</h4>
								<div class='para-two'>
									<p><span><b>SSC CHSL Posts</b></span>
									</p>
									<p><span><b>SSC CHSL Pay Scales</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>Junior Secretariat Assistant (JSA)</span></p>
									<p><span>Pay Level-2 <br>Rs. 19,900 – 63,200/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Postal Assistant (PA)</span></p>
									<p><span>Pay Level-4 <br>Rs. 25,500 – 81,100/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Sorting Assistant (SA)</span></p>
									<p><span>Pay Level-4 <br>Rs. 25,500 – 81,100/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Data Entry Operator (DEO)</span></p>
									<p><span> Pay Level-4 <br> Rs. 25,500 – 81,100/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Data Entry Operator (DEO)</span></p>
									<p><span> Pay Level-5 <br> Rs. 29,200 – 92,300/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Data Entry Operator, Grade “A” </span></p>
									<p><span>Pay Level-4 <br>Rs. 25,500 – 81,100/-</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam2'>
						<h2>Important Dates</h2>
						<p>SSC CHSL 2021-22 Notification is out!. SSC CHSL 2021 related important dates can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>01-02-2022</span></p>
								<h4>Online Application Date</h4>
								<p><span> 01-02-2022 to 07-03-2022</span>
								</p>
								<h4>Last date and time for receipt of online applications  </h4>
								<p><span>07-03-2022 (23:00) </span>
								</p>
								<h4>Last date & time online payment</h4>
								<p><span> 08-03-2022 (23:00)</span></p>
								<h4>Last date & time for offline challan generation</h4>
								<p><span>09-03-2022 (23:00) </span> </p>
							</div>
							<div class='over-view'>
								<h4>Last date for payment through challan</h4>
								<p><span>10-03-2022</span></p>
								<h4>Dates of ‘Window for Application Form Correction’ including online payment</h4>
								<p><span>11-03-2022 to 15-03-2022 (23:00)</span></p>
								<h4>Computer Based Examination Date</h4>
								<p><span>Tier-I : May, 2022  </span> </p>
								<p><span>Tier-II : To be notified later</span> </p>
								<h4>Admit Card Release Date</h4>
								<p><span>April/May 2022</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam3'>
						<h2>Locations</h2>
						<p>SSC CHSL 2021-22 Notification is out!. SSC CHSL 2021 Exam centers and center code can be found below.</p>
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
										<td>Port Blair (4802), Bokaro(4201), Hazaribagh(4204), Jamshedpur(4207), Ranchi(4205), Balasore(Odisha) (4601), Berhampore(Odisha) (4602), Bhubaneswar(4604), Cuttack(4605), Dhenkenal(4611), Rourkela(4610), Sambalpur(4609), Gangtok(4001), Asansol(4417), Burdwan(4404), Durgapur(4426), Kalyani(4419), Kolkata(4410), Siliguri(4415)</td>
										<td>Eastern Region (ER)/ Andaman & Nicobar Islands, Jharkhand, Odisha, Sikkim and West Bengal </td>
										<td>Regional Director (ER), Staff Selection Commission, 1st MSO Building, (8th Floor), 234/4, Acharya Jagadish Chandra Bose Road, Kolkata, West Bengal-700020 <a href='https://www.sscer.org/'target='_blank'>(www.sscer.org)</a> </td>
									</tr>
									<tr>
										<td>Kavaratti(9401), Belagavi (9002), Bengaluru (9001), Hubballi (9011), Kalaburagi (Gulbarga) (9005), Mangaluru (9008), Mysuru (9009), Shivamogga (9010), Udupi (9012). Ernakulam (9213), Kannur (9202), Kollam (9210), Kottayam (9205), Kozhikode (9206), Thrissur (9212), Thiruvananthapuram (9211). </td>
										<td>Karnataka, Kerala Region (KKR)/ Lakshadweep, Karnataka and Kerala </td>
										<td>Regional Director (KKR), Staff Selection Commission, 1st Floor, “E” Wing, Kendriya Sadan, Koramangala, Bengaluru, Karnataka-560034 <a href='https://www.ssckkr.kar.nic.in/'target='_blank'>(www.ssckkr.kar.nic.in)</a> </td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>Bhopal (6001), Gwalior(6005), Indore (6006), Jabalpur (6007), Satna (6014), Sagar (6015), Ujjain (6016), Bilaspur (6202), Raipur (6204), Durg-Bhilai (6205)  </td>
										<td>Madhya Pradesh Sub-Region (MPR)/ Chhattisgarh and Madhya Pradesh</td>
										<td>Regional Director (MPR), Staff Selection Commission, 5th Floor, Investment Building, LIC Campus-2, Pandri, Raipur, Chhattisgarh-492004<a href='https://www.sscmpr.org/'target='_blank'>(www.sscmpr.org)</a> </td>
									</tr>
									<tr>
										<td>Itanagar(5001), Dibrugarh(5102), Guwahati(Dispur)(5105), Jorhat(5107), Silchar(5111), Churachandpur(5502), Imphal(5501), Ukhrul(5503), Shillong(5401), Aizwal(5701), Dimapur (5301), Kohima(5302), Agartala(5601),  </td>
										<td>North Eastern Region (NER)/ Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland and Tripura. </td>
										<td>Regional Director (NER), Staff Selection Commission, Housefed Complex, Last Gate, Beltola-Basistha Road, P.O. Assam Sachivalaya, Dispur, Guwahati, Assam-781006 <a href='https://www.sscner.org.in/en/'target='_blank'>(www.sscner.org.in) </a></td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>Dehradun(2002), Haldwani(2003), Haridwar(2005), Roorkee(2006), Delhi(2201), Ajmer(2401), Alwar(2402), Bikaner(2404), Jaipur(2405), Jodhpur(2406), Kota(2407), Sriganganagar(2408), Udaipur(2409), Sikar(2411) </td>
										<td>Northern Region (NR)/ Delhi, Rajasthan and Uttarakhand</td>
										<td>Regional Director (NR), Staff Selection Commission, Block No. 12, CGO Complex, Lodhi Road, New Delhi-110003 <a href='https://sscnr.nic.in/newlook/site/index.html'target='_blank'>(www.sscnr.nic.in)</a> </td>
									</tr>
									<tr>
										<td>Chandigarh/ Mohali(1601), Ambala(1801), Hamirpur(1202), Shimla(1203), Jammu(1004), Samba(1010), Srinagar(J&K)(1007), Leh(1005), Amritsar(1404), Jalandhar(1402), Ludhiana(1405), Patiala(1403),  </td>
										<td>North Western Region (NWR)/Chandigarh,Haryana,Himachal Pradesh, Jammu and Kashmir, Ladakh and Punjab </td>
										<td>Regional Director (NWR), Staff Selection Commission, Block No. 3, Ground Floor, Kendriya Sadan, Sector-9, Chandigarh-160009<a href='https://www.sscnwr.org/'target='_blank'> (www.sscnwr.org)</a> </td>
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
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam4'>
						<h2>Number of Posts</h2>
						<p>Vacancies will be determined in due course. Updated vacancy position will be uploaded on the website of the Commission (https://ssc.nic.in > Candidate’s Corner > Tentative Vacancy). </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>To be announced</span></p>
								<h4>SSC CHSL Last Year Vacancy (2019-20)</h4>
								<div class="para-two">
									<p><span><b>Post Name</b></span>
									</p>
									<p><span><b>Vacancy</b></span>
									</p>
								</div>
								<div class="para-two">
									<p><span>LDC/JSA</span></p>
									<p><span>1269 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>PA/SA</span></p>
									<p><span>3598 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>DEO</span></p>
									<p><span>26 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>Total</span></p>
									<p><span>4893 Vacancies</span></p>
								</div>
							</div>
							<div class='over-view'>
								<h4>POSTS</h4>
								<p>Lower Division Clerk (LDC)/ Junior Secretariat Assistant (JSA)</p>
								<p>Postal Assistant (PA)/ Sorting Assistant (SA)</p>
								<p>Postal Assistant (PA)/ Sorting Assistant (SA)</p>
								<p>Data Entry Operator (DEO)</p>
								<p>Data Entry Operator, Grade ‘A’</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
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
								<h4>Age Limit (as  on 01-01-2022)</h4>
								<p>Age limit for the posts is 18-27 years as on 01-01-2022 i.e. Candidates born not before 02-01-1995 and not later than 01-01-2004 are eligible to apply.</p>
							</div>
							<div class='over-view'>
								<h4>Educational Qualification (As on 07-03-2022) </h4>
								<div class='para-two'>
									<p>For LDC/ JSA, PA/ SA, DEO (except DEOs in C&AG)</p>
									<p>12th Standard or equivalent examination from a recognized Board or University.</p>
								</div>
								<div class='para-two'>
									<p>For Data Entry Operator (DEO Grade ‘A’) in the Office of Comptroller and Auditor General of India (C&AG)</p>
									<p>12th Standard pass in Science stream with Mathematics as a subject from a recognized Board or equivalent.</p>
								</div>
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
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
					</div>
					<div class='exam-1' id='exam6'>
						<h2>How to apply </h2>
						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Submit applications online at the website of SSC Headquarter i.e. <a href='https://ssc.nic.in/'target='_blank'>https://ssc.nic.in</a>.  </p>
						<p><i class="far fa-dot-circle"></i>Upload the scanned colour passport size photograph (not more than three months old) in JPEG format (20 KB to 50 KB) with dimension of about 3.5 cm (width) x 4.5 cm (height). The photograph should be without cap, spectacles and both ears should be visible.</p>
						<p><i class="far fa-dot-circle"></i> Last date and time for submission of online applications is 07-03-2022 (23:00). </p>
						<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form.</p>

						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>Fee payable: ₹100/- (Rs one hundred only). </p>
						<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee. </p>
						<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.   </p>
						<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 08-03-2022 (23:00 hours).</p>
						<p><i class="far fa-dot-circle"></i>Candidates who wish to make cash payment through the challan of SBI, may make payment in cash at the Branches of SBI within the working hours of bank up to 10-03-2022 provided the challan has been generated by them before 09-03-2022 (23:00 hours).  </p>
						<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection.</p>
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
										<th class='td-box'>II</th>
										<td colspan="4"><p>Descriptive Paper of 100 marks in 'Pen and Paper' Mode.<br>
											<p>Duration will be for one hour (20 minutes compensatory time will also  be provided to the candidates eligible for scribe as per Para 8.1 and 8.2 above)
												<br>
											<p>Paper will comprise of writing Essay/ Letter/ Application/ precis etc.<br>
											<p>Minimum Qualifying marks in Tier-II would be 33 percent.<br>
											<p>Paper will have to be written either in Hindi or in English.Part paper written in Hindi and Part in English will be awarded zero marks.</p>
										</td>
									</tr>
									<tr>
										<th class='td-box'>III</th>
										<th>Skill Test</th>
										<td class='td-box' colspan="3">In the Tier-III, Skill test/typing test will be conducted.  </td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>The examination will consist of Computer Based Examination (Tier-I), Descriptive Paper (Tier-II) and Skill Test/ Typing Test (Tier-III).  </p>
							<p><i class="far fa-dot-circle"></i>In the question papers, wherever necessary, the metric systems of weights and measures will be used. </p>
							<p><i class="far fa-dot-circle"></i>The dates of examinations indicated in the Notice are tentative. Any change in the schedule of examinations will be informed to candidates only through the website of the Commission.  </p>
							<p><i class="far fa-dot-circle"></i>There shall be no provision for re-evaluation/ re-checking in the examination. No correspondence in this regard shall be entertained.  </p>
							<h4>Tier-I  (Computer Based Examination)</h4>
							<p><i class="far fa-dot-circle"></i>The Tier-I Examination will consist of Objective Type, Multiple choice questions only. The questions will be set both in English & Hindi for Part-II, III & IV.  </p>
							<p><i class="far fa-dot-circle"></i>There will be negative marking of 0.50 marks for each wrong answer. Candidates are, therefore, advised to keep this in mind while answering the questions.  </p>
							<p><i class="far fa-dot-circle"></i>Marks scored by candidates in the Computer Based Examination will be normalized by using the formula published by the Commission vide Notice No: 1-1/2018-P&P-I dated 07-02-2019 and such normalized scores will be used to determine final merit and cut-off marks.  </p>

							<h4>Tier-II (Descriptive Paper): </h4>
							<p><i class="far fa-dot-circle"></i>Tier-II Paper will be a descriptive Paper of 100 Marks in ‘Pen and Paper’ Mode.  </p>
							<p><i class="far fa-dot-circle"></i>The duration of the Descriptive Paper will be for one hour (20 minutes compensatory time will also be provided to the candidates eligible for scribe).  </p>
							<p><i class="far fa-dot-circle"></i>The Paper will comprise of writing Essay/ Letter/ Application/ Precis etc.  </p>
							<p><i class="far fa-dot-circle"></i>The minimum qualifying marks in Tier-II would be 33 per cent.  </p>
							<p><i class="far fa-dot-circle"></i>The paper will have to be written either in Hindi or in English. Part paper written in Hindi and Part in English will be awarded zero marks </p>
							<h4>Tier-III (Skill Test/ Typing Test): </h4>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test for the shortlisted candidates will be conducted.</p>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test will be conducted in the cities where Regional Offices of the Commission.</p>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test will be of qualifying nature. </p>
							<p><i class="far fa-dot-circle"></i>Errors in the Skill Test will be calculated up to 2 decimal places. </p>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test will be conducted as per the following scheme: </p>
							<h4>Skill Test for Data Entry Operator: </h4>
							<p><i class="far fa-dot-circle"></i>Skill Test is mandatory for Data Entry Operators. </p>
							<p><i class="far fa-dot-circle"></i>‘Data Entry Speed of 8,000 (Eight Thousand) Key Depressions per hour on Computer’ will be adjudged on the basis of the correct entry of words/ key depressions as per the given passage. </p>
							<p><i class="far fa-dot-circle"></i>The duration of the Test will be 15 (Fifteen) minutes and printed matter in English containing about 2000-2200 key-depressions would be given to each candidate who would enter the same in the Computer. </p>
							<p><i class="far fa-dot-circle"></i>Candidates eligible for scribe will be given compensatory time of 5 minutes. Therefore, duration of Skill Test for such candidates will be 20 minutes. </p>
							<h4>Typing Test for LDC/ JSA and Postal Assistant/ Sorting Assistant: </h4>
							<p><i class="far fa-dot-circle"></i>The medium of Typing Test will be Hindi or English. </p>
							<p><i class="far fa-dot-circle"></i>The candidates will have to opt for the medium of Typing Test (i.e. either Hindi or English) in the online Application Form. </p>
							<p><i class="far fa-dot-circle"></i>Candidates opting for English medium should have typing speed of 35 words per minute (w.p.m.) and those opting for Hindi medium should have typing speed of 30 words per minute (w.p.m.). </p>
							<p><i class="far fa-dot-circle"></i>35 w.p.m. and 30 w.p.m. correspond to about 10500 key depressions per hour and about 9000 key depressions per hour respectively. </p>
							<p><i class="far fa-dot-circle"></i>The speed will be adjudged on the accuracy of typing on the Computer of a given text passage in 10 minutes. </p>
							<p><i class="far fa-dot-circle"></i>Candidates eligible for scribe will be given compensatory time of 5 minutes. Therefore, duration of Typing Test for such candidates will be 15 minutes. </p>
					</div>
					<div class='exam-1' id='exam8'>
						<h2>Syllabus</h2>
						<h4> SSC CHSL Tier I </h4>
						<p>The SSC CHSL Tier I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC CHSL Tier I paper which consist of 100 questions. Each question carries 2 marks. So, the total marks is 200 marks.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
									<li>Verbal and non-verbal type Questions </li>
									<li>Semantic Analogy, </li>
									<li>Symbolic operations, </li>
									<li>Symbolic/ Number Analogy,Trends,  </li>
									<li>Figural Analogy, Space Orientation, Semantic Classification,</li>
									<li>Venn Diagrams, Symbolic/ Number Classification, </li>
									<li>Drawing inferences, </li>
									<li>Figural Classification,</li>
									<li> Punched hole/ pattern-folding & unfolding, </li>
									<li>Semantic Series, </li>
									<li>Figural Pattern-folding and completion, Number Series, </li>
									<li>Embedded figures, Figural Series,  </li>
									<li>Critical Thinking, Problem Solving, </li>
									<li>Emotional Intelligence, </li>
									<li>Word Building, </li>
									<li>Social Intelligence</li>
									<li>Coding and de-coding, </li>
									<li>Numerical operations, Other sub-topics, if any  </li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Quantitative Ability Syllabus</li>
									<li><b>Number Systems:</b> Computation of Whole Number, Decimal and Fractions, Relationship between numbers.  </li>
									<li><b>Fundamental arithmetical operations:</b> Percentages, Ratio and Proportion, Square roots, Averages, Interest (Simple and Compound), Profit and Loss, Discount, Partnership Business, Mixture and Allegation, Time and distance, Time and work. </li>
									<li><b>Algebra:</b> Basic algebraic identities of School Algebra and Elementary surds (simple problems) and Graphs of Linear Equations. </li>
									<li><b>Geometry:</b> Familiarity with elementary geometric figures and facts: Triangle and its various kinds of centers, Congruence and similarity of triangles, Circle and its chords, tangents, angles subtended by chords of a circle, common tangents to two or more circles.</li>
									<li><b>Mensuration:</b> Triangle, Quadrilaterals, Regular Polygons, Circle, Right Prism, Right Circular Cone, Right Circular Cylinder, Sphere, Hemispheres, Rectangular Parallelepiped, Regular Right Pyramid with triangular or square Base. </li>
									<li><b>Trigonometry:</b> Trigonometry, Trigonometric ratios, Complementary angles, Height and distances (simple problems only) Standard Identities like sin2𝜃 + Cos2𝜃=1 etc.,</li>
									<li><b>Statistical Charts:</b> Use of Tables and Graphs: Histogram, Frequency polygon, Bar-diagram, Pie-chart. </li>
								</ul>
							</div>
						</div>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>English Language Syllabus</li>
									<li>Spot the Error, Fill in the Blanks, </li>
									<li>Synonyms/ Homonyms, Antonyms,</li>
									<li>Spellings/ Detecting misspell words, </li>
									<li>Idioms & Phrases,</li>
									<li>One word substitution, </li>
									<li>Improvement of Sentences, </li>
									<li>Active/ Passive Voice of Verbs, </li>
									<li>Conversion into Direct/ Indirect narration, </li>
									<li>Shuffling of Sentence parts, Shuffling of Sentences in a passage, </li>
									<li>Cloze Passage, Comprehension Passage.</li>
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
					</div>
					<div class='exam-1' id='exam9'>
						<h2>Selection Process</h2>
						<h4>The Examination will be conducted in three tiers:   </h4>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-I: Computer Based Examination </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-II: Pen and Paper Mode (Descriptive paper)  </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-III: Skill Test/ Typing Test  </p>
						<p>Candidates will be shortlisted for Tier-II Examination on the basis of their performance in Tier-I Examination and further will be shortlisted for Tier-III Examination on the basis of their performance in Tier-I + Tier-II subject to having scored a minimum of 33% marks in Tier-II Examination. </p>
						<p>Tier-III Examination i.e. Skill Test/ Typing Test is qualifying in nature. </p>
						<p>There may be separate category-wise cut-offs in Tier-I and subsequent Tiers for different posts i.e. (i) DEO, (ii) DEO Grade 'A' and (iii) LDC/ JSA and PA/ SA. </p>
						<p>Candidates will be shortlisted for appearing in the Document Verification on the basis of their performance in Tier-I + Tier-II subject to their qualifying the Skill Test as per the qualifying standards fixed by the Commission. </p>
						<p>Final selection and allocation of Ministries/ Departments/ Offices to the candidates qualified in the Document Verification will be made on the basis of their performance in Tier-I + Tier-II Examinations and the preference of Posts/ Departments confirmed by them at the time of Document Verification. </p>
						<p>Requirement of Physical Standard, Physical Efficiency Tests and Medical Standards for the post of Lower Division Clerk in BRO is available at Annexure-XVI. </p>
						<p>The final allotment of posts is made on the basis of merit-cum-preferences of Posts/ Departments of candidates and once a post is allocated, no change of posts will be made by the Commission due to non-fulfillment of any post specific requirements of physical/ medical/ educational standards. </p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam10'>
						<h2>Previous Year Cut-Off</h2>
						<p>SSC CHSL cutoff has risen significantly in last few years. The key off success to score maximum number. This can be achieved by doing more and more practice with TestsGenie, your exam success partner.  </p>
						<h4>SSC CHSL Tier 1 Cut-off: 2020-2021</h4>
						<div class='row row exam1-details'>
							<div class='over-view'style='width:80%;'>
								<div class='para-two'>
									<p><span><b>Category </b></span></p>
									<p><span><b>Cut off Marks </b></span></p>
								</div>
								<div class='para-two'>
									<p><span>UR</span></p>
									<p><span>141.88884</span></p>
								</div>
								<div class='para-two'>
									<p><span>SC</span></p>
									<p><span>114.16301</span></p>
								</div>
								<div class='para-two'>
									<p><span>ST</span></p>
									<p><span>108.88563</span></p>
								</div>
								<div class='para-two'>
									<p><span>OBC</span></p>
									<p><span>139.46324</span></p>
								</div>
								<div class='para-two'>
									<p><span>EWS</span></p>
									<p><span>117.59934</span></p>
								</div>
								<div class='para-two'>
									<p><span>ESM</span></p>
									<p><span>72.10346</span></p>
								</div>
								<div class='para-two'>
									<p><span>OH</span></p>
									<p><span>106.37516</span></p>
								</div>
								<div class='para-two'>
									<p><span>HH</span></p>
									<p><span>63.80870</span></p>
								</div>
								<div class='para-two'>
									<p><span>VH</span></p>
									<p><span>93.81684</span></p>
								</div>
								<div class='para-two'>
									<p><span>PwD – Other</span></p>
									<p><span>51.12050</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam11'>
						<h2>Detailed Advertisement</h2>
						<p>SSC CHSL 2021-22 Official advertisement-</p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam12'>
						<h2>Call Letters/ Admit Card</h2>
						<p>SSC CHSL  2021-22 Admit card</p>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Admit Cards for all stages of examination will be issued online on the websites of concerned Regional Office of the Commission.   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates are advised to regularly visit the websites of the Commission Headquarters (i.e. https://ssc.nic.in) and Regional Office concerned of the Commission under whose jurisdiction the examination centers opted by the candidate are located (detail at para-12.1).   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Information about the Examination indicating the time table and City/ Centre of examination for the candidates will be uploaded on the websites of the Regional Office concerned of the Commission about two weeks before the date of examination.   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Facility to download Admit Cards will be made available 3-7 days before the examination on the website of Regional Office concerned. Candidate must bring printout of the Admit Card to the Examination Hall.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>In addition to the Admit Card, it is mandatory to carry at least two passport size recent colour photographs, Original valid Photo-ID proof having the Date of Birth as printed on the Admit Card </p>
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
							<p>Combined Higher Secondary Level (CHSL) 2022 is a national level exam conducted every year by the Staff Selection Commission to select Higher Secondary qualified students for posts like Lower Divisional Clerk (LDC), Junior Secretariat Assistant (JSA), Postal Assistants(PA), Sorting Assistants(SA), Data Entry Operator (DEO), Data Entry Operator Grade A across ministries and government offices. </p>
						<p>The details of the examination are as under:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p>01-02-2022 to 07-03-2022 </p>
								<h4>Exam Date</h4>
								<p>Tier-I : May, 2022 </p>
								<p>Tier-II: To be notified later</p>
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
								<h4>Eligibility</h4>
								<p><span>10+2</span>
								</p>

							</div>
							<div class='over-view'>
								<h4>Vacancies</h4>
								<p><span>To be notified </span>
								</p>
								<h4>Salary</h4>
								<div class='para-two'>
									<p><span><b>SSC CHSL Posts</b></span>
									</p>
									<p><span><b>SSC CHSL Pay Scales</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p><span>Junior Secretariat Assistant (JSA)</span></p>
									<p><span>Pay Level-2 <br>Rs. 19,900 – 63,200/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Postal Assistant (PA)</span></p>
									<p><span>Pay Level-4 <br>Rs. 25,500 – 81,100/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Sorting Assistant (SA)</span></p>
									<p><span>Pay Level-4 <br>Rs. 25,500 – 81,100/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Data Entry Operator (DEO)</span></p>
									<p><span> Pay Level-4 <br> Rs. 25,500 – 81,100/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Data Entry Operator (DEO)</span></p>
									<p><span> Pay Level-5 <br> Rs. 29,200 – 92,300/-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Data Entry Operator, Grade “A” </span></p>
									<p><span>Pay Level-4 <br>Rs. 25,500 – 81,100/-</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Important Dates</summary>
  					<div class='exam-1 active' id='exam2'>
  						<p>SSC CHSL 2021-22 Notification is out!. SSC CHSL 2021 related important dates can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>01-02-2022</span></p>
								<h4>Online Application Date</h4>
								<p><span> 01-02-2022 to 07-03-2022</span>
								</p>
								<h4>Last date and time for receipt of online applications  </h4>
								<p><span>07-03-2022 (23:00) </span>
								</p>
								<h4>Last date & time online payment</h4>
								<p><span> 08-03-2022 (23:00)</span></p>
								<h4>Last date & time for offline challan generation</h4>
								<p><span>09-03-2022 (23:00) </span> </p>
							</div>
							<div class='over-view'>
								<h4>Last date for payment through challan</h4>
								<p><span>10-03-2022</span></p>
								<h4>Dates of ‘Window for Application Form Correction’ including online payment</h4>
								<p><span>11-03-2022 to 15-03-2022 (23:00)</span></p>
								<h4>Computer Based Examination Date</h4>
								<p><span>Tier-I : May, 2022  </span> </p>
								<p><span>Tier-II : To be notified later</span> </p>
								<h4>Admit Card Release Date</h4>
								<p><span>April/May 2022</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>Locations</summary>
  					<div class='exam-1 active' id='exam3'>
  						<p>SSC CHSL 2021-22 Notification is out!. SSC CHSL 2021 Exam centers and center code can be found below.</p>
  						<div class='over-view'>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Bhagalpur(3201), Muzaffarpur(3205), Patna(3206), Purnea (3209), Agra(3001), Bareilly (3005), Gorakhpur (3007), Jhansi (3008), Kanpur(3009), Lucknow(3010), Meerut(3011), Prayagraj(3003), Varanasi(3013) </p>
								<p>Central Region (CR)/ Bihar and Uttar Pradesh </p>
								<p>Regional Director (CR), Staff Selection Commission, 34-A, Mahatma Gandhi Marg, Civil Lines, Kendriya Sadan, Prayagraj – 211001. (http://www.ssc-cr.org) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Port Blair (4802), Bokaro(4201), Hazaribagh(4204), Jamshedpur(4207), Ranchi(4205), Balasore(Odisha) (4601), Berhampore(Odisha) (4602), Bhubaneswar(4604), Cuttack(4605), Dhenkenal(4611), Rourkela(4610), Sambalpur(4609), Gangtok(4001), Asansol(4417), Burdwan(4404), Durgapur(4426), Kalyani(4419), Kolkata(4410), Siliguri(4415)</p>
								<p>Eastern Region (ER)/ Andaman & Nicobar Islands, Jharkhand, Odisha, Sikkim and West Bengal </p>
								<p>Regional Director (ER), Staff Selection Commission, 1st MSO Building, (8th Floor), 234/4, Acharya Jagadish Chandra Bose Road, Kolkata, West Bengal-700020 (www.sscer.org) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Kavaratti(9401), Belagavi (9002), Bengaluru (9001), Hubballi (9011), Kalaburagi (Gulbarga) (9005), Mangaluru (9008), Mysuru (9009), Shivamogga (9010), Udupi (9012). Ernakulam (9213), Kannur (9202), Kollam (9210), Kottayam (9205), Kozhikode (9206), Thrissur (9212), Thiruvananthapuram (9211).</p>
								<p>Karnataka, Kerala Region (KKR)/ Lakshadweep, Karnataka and Kerala </p>
								<p>Regional Director (KKR), Staff Selection Commission, 1st Floor, “E” Wing, Kendriya Sadan, Koramangala, Bengaluru, Karnataka-560034 (www.ssckkr.kar.nic.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Bhopal (6001), Gwalior(6005), Indore (6006), Jabalpur (6007), Satna (6014), Sagar (6015), Ujjain (6016), Bilaspur (6202), Raipur (6204), Durg-Bhilai (6205) </p>
								<p>Madhya Pradesh Sub-Region (MPR)/ Chhattisgarh and Madhya Pradesh</p>
								<p>Regional Director (MPR), Staff Selection Commission, 5th Floor, Investment Building, LIC Campus-2, Pandri, Raipur, Chhattisgarh-492004(www.sscmpr.org) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Itanagar(5001), Dibrugarh(5102), Guwahati(Dispur)(5105), Jorhat(5107), Silchar(5111), Churachandpur(5502), Imphal(5501), Ukhrul(5503), Shillong(5401), Aizwal(5701), Dimapur (5301), Kohima(5302), Agartala(5601),</p>
								<p>North Eastern Region (NER)/ Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland and Tripura. </p>
								<p>Regional Director (NER), Staff Selection Commission, Housefed Complex, Last Gate, Beltola-Basistha Road, P.O. Assam Sachivalaya, Dispur, Guwahati, Assam-781006 (www.sscner.org.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Dehradun(2002), Haldwani(2003), Haridwar(2005), Roorkee(2006), Delhi(2201), Ajmer(2401), Alwar(2402), Bikaner(2404), Jaipur(2405), Jodhpur(2406), Kota(2407), Sriganganagar(2408), Udaipur(2409), Sikar(2411) </p>
								<p>Northern Region (NR)/ Delhi, Rajasthan and Uttarakhand</p>
								<p>Regional Director (NR), Staff Selection Commission, Block No. 12, CGO Complex, Lodhi Road, New Delhi-110003 (www.sscnr.nic.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Chandigarh/ Mohali(1601), Ambala(1801), Hamirpur(1202), Shimla(1203), Jammu(1004), Samba(1010), Srinagar(J&K)(1007), Leh(1005), Amritsar(1404), Jalandhar(1402), Ludhiana(1405), Patiala(1403),</p>
								<p>North Western Region (NWR)/Chandigarh,Haryana,Himachal Pradesh, Jammu and Kashmir, Ladakh and Punjab</p>
								<p>Regional Director (NWR), Staff Selection Commission, Block No. 3, Ground Floor, Kendriya Sadan, Sector-9, Chandigarh-160009 (www.sscnwr.org)	</p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Chirala(8011), Cuddapah(8013), Guntur(8001), Kakinada (8009), Kurnool(8003), Nellore (8010), Rajahmundry(8004), Tirupati(8006), Vizianagaram(8012), Vijayawada(8008), Vishakhapatnam(8007), Puducherry(8401), Chennai(8201), Coimbatore(8202), Krishnagiri(8209), Madurai(8204), Salem(8205), Tiruchirapalli(8206), Tirunelveli(8207), Vellore (8208), Hyderabad(8601), Karimnagar (8604), Warangal(8603) </p>
								<p>Southern Region (SR)/ Andhra Pradesh, Puducherry, Tamil Nadu and Telangana.	</p>
								<p>Regional Director (SR), Staff Selection Commission, 2nd Floor, EVK Sampath Building, DPI Campus, College Road, Chennai, Tamil Nadu-600006 (www.sscsr.gov.in) </p>
								<h4>Examination Centers, Centre Code,Region and States and Address of Offices </h4>
								<p>Panaji(7801), Ahmedabad(7001), Anand(7011), Gandhinagar(7012), Mehsana(7013), Rajkot(7006), Surat(7007), Vadodara(7002), Amravati(7201), Aurangabad(7202), Jalgaon(7214), Kolhapur(7203), Mumbai(7204), Nagpur(7205), Nanded (7206), Nashik(7207), Pune(7208) </p>
								<p>Western Region (WR)/ Dadra and Nagar Haveli and Daman and Diu, Goa, Gujarat and Maharashtra</p>
								<p>Regional Director (WR), Staff Selection Commission, 1st Floor, South Wing, Pratishtha Bhawan,  101, Maharshi Karve Road, Mumbai, Maharashtra-400020 (www.sscwr.net) </p>
							</div>
							<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>Number of Posts</summary>
  					<div class='exam-1 active' id='exam4'>
  						<p>Vacancies will be determined in due course. Updated vacancy position will be uploaded on the website of the Commission (https://ssc.nic.in > Candidate’s Corner > Tentative Vacancy). </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>To be announced</span></p>
								<h4>SSC CHSL Last Year Vacancy (2019-20)</h4>
								<div class="para-two">
									<p><span><b>Post Name</b></span>
									</p>
									<p><span><b>Vacancy</b></span>
									</p>
								</div>
								<div class="para-two">
									<p><span>LDC/JSA</span></p>
									<p><span>1269 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>PA/SA</span></p>
									<p><span>3598 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>DEO</span></p>
									<p><span>26 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>Total</span></p>
									<p><span>4893 Vacancies</span></p>
								</div>
							</div>
							<div class='over-view'>
								<h4>POSTS</h4>
								<p>Lower Division Clerk (LDC)/ Junior Secretariat Assistant (JSA)</p>
								<p>Postal Assistant (PA)/ Sorting Assistant (SA)</p>
								<p>Postal Assistant (PA)/ Sorting Assistant (SA)</p>
								<p>Data Entry Operator (DEO)</p>
								<p>Data Entry Operator, Grade ‘A’</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
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
										<h4>Age Limit (as  on 01-01-2022)</h4>
										<p>Age limit for the posts is 18-27 years as on 01-01-2022 i.e. Candidates born not before 02-01-1995 and not later than 01-01-2004 are eligible to apply.</p>
									</div>
									<div class='over-view'>
										<h4>Educational Qualification (As on 07-03-2022) </h4>
										<div class='para-two'>
											<p>For LDC/ JSA, PA/ SA, DEO (except DEOs in C&AG)</p>
											<p>12th Standard or equivalent examination from a recognized Board or University.</p>
										</div>
										<div class='para-two'>
											<p>For Data Entry Operator (DEO Grade ‘A’) in the Office of Comptroller and Auditor General of India (C&AG)</p>
											<p>12th Standard pass in Science stream with Mathematics as a subject from a recognized Board or equivalent.</p>
										</div>
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
							<label class="custom-file-upload">
									<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
								</label>
								<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>How To Apply</summary>
  					<div class='exam-1 active' id='exam6'>
  						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Submit applications online at the website of SSC Headquarter i.e.  https://ssc.nic.in  </p>
						<p><i class="far fa-dot-circle"></i>Upload the scanned colour passport size photograph (not more than three months old) in JPEG format (20 KB to 50 KB) with dimension of about 3.5 cm (width) x 4.5 cm (height). The photograph should be without cap, spectacles and both ears should be visible.</p>
						<p><i class="far fa-dot-circle"></i> Last date and time for submission of online applications is 07-03-2022 (23:00). </p>
						<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form.</p>
						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>Fee payable: ₹100/- (Rs one hundred only). </p>
						<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee. </p>
						<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.   </p>
						<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 08-03-2022 (23:00 hours).</p>
						<p><i class="far fa-dot-circle"></i>Candidates who wish to make cash payment through the challan of SBI, may make payment in cash at the Branches of SBI within the working hours of bank up to 10-03-2022 provided the challan has been generated by them before 09-03-2022 (23:00 hours).  </p>
						<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection.</p>
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
								<h4>Tier-II Examination</h4>
								<p>Descriptive Paper of 100 marks in 'Pen and Paper' Mode.</p>
								<p>Duration will be for one hour (20 minutes compensatory time will also be provided to the candidates eligible for scribe as per Para 8.1 and 8.2 above)</p>
								<p>Paper will comprise of writing Essay/ Letter/ Application/ precis etc.
								Minimum Qualifying marks in Tier-II would be 33 percent.</p>
								<p>Paper will have to be written either in Hindi or in English.Part paper written in Hindi and Part in English will be awarded zero marks.</p>
								<h4>Tier-III Examination</h4>
								<div class='para-two'>
									<p>Skill Test</p>
									<p>In the Tier-III, Skill test/typing test will be conducted.</p>
								</div>
							</div>
						</div>
							<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>The examination will consist of Computer Based Examination (Tier-I), Descriptive Paper (Tier-II) and Skill Test/ Typing Test (Tier-III).  </p>
							<p><i class="far fa-dot-circle"></i>In the question papers, wherever necessary, the metric systems of weights and measures will be used. </p>
							<p><i class="far fa-dot-circle"></i>The dates of examinations indicated in the Notice are tentative. Any change in the schedule of examinations will be informed to candidates only through the website of the Commission.  </p>
							<p><i class="far fa-dot-circle"></i>There shall be no provision for re-evaluation/ re-checking in the examination. No correspondence in this regard shall be entertained.  </p>
							<h4>Tier-I  (Computer Based Examination)</h4>
							<p><i class="far fa-dot-circle"></i>The Tier-I Examination will consist of Objective Type, Multiple choice questions only. The questions will be set both in English & Hindi for Part-II, III & IV.  </p>
							<p><i class="far fa-dot-circle"></i>There will be negative marking of 0.50 marks for each wrong answer. Candidates are, therefore, advised to keep this in mind while answering the questions.  </p>
							<p><i class="far fa-dot-circle"></i>Marks scored by candidates in the Computer Based Examination will be normalized by using the formula published by the Commission vide Notice No: 1-1/2018-P&P-I dated 07-02-2019 and such normalized scores will be used to determine final merit and cut-off marks.  </p>

							<h4>Tier-II (Descriptive Paper): </h4>
							<p><i class="far fa-dot-circle"></i>Tier-II Paper will be a descriptive Paper of 100 Marks in ‘Pen and Paper’ Mode.  </p>
							<p><i class="far fa-dot-circle"></i>The duration of the Descriptive Paper will be for one hour (20 minutes compensatory time will also be provided to the candidates eligible for scribe).  </p>
							<p><i class="far fa-dot-circle"></i>The Paper will comprise of writing Essay/ Letter/ Application/ Precis etc.  </p>
							<p><i class="far fa-dot-circle"></i>The minimum qualifying marks in Tier-II would be 33 per cent.  </p>
							<p><i class="far fa-dot-circle"></i>The paper will have to be written either in Hindi or in English. Part paper written in Hindi and Part in English will be awarded zero marks </p>
							<h4>Tier-III (Skill Test/ Typing Test): </h4>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test for the shortlisted candidates will be conducted.</p>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test will be conducted in the cities where Regional Offices of the Commission.</p>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test will be of qualifying nature. </p>
							<p><i class="far fa-dot-circle"></i>Errors in the Skill Test will be calculated up to 2 decimal places. </p>
							<p><i class="far fa-dot-circle"></i>Skill Test/ Typing Test will be conducted as per the following scheme: </p>
							<h4>Skill Test for Data Entry Operator: </h4>
							<p><i class="far fa-dot-circle"></i>Skill Test is mandatory for Data Entry Operators. </p>
							<p><i class="far fa-dot-circle"></i>‘Data Entry Speed of 8,000 (Eight Thousand) Key Depressions per hour on Computer’ will be adjudged on the basis of the correct entry of words/ key depressions as per the given passage. </p>
							<p><i class="far fa-dot-circle"></i>The duration of the Test will be 15 (Fifteen) minutes and printed matter in English containing about 2000-2200 key-depressions would be given to each candidate who would enter the same in the Computer. </p>
							<p><i class="far fa-dot-circle"></i>Candidates eligible for scribe will be given compensatory time of 5 minutes. Therefore, duration of Skill Test for such candidates will be 20 minutes. </p>
							<h4>Typing Test for LDC/ JSA and Postal Assistant/ Sorting Assistant: </h4>
							<p><i class="far fa-dot-circle"></i>The medium of Typing Test will be Hindi or English. </p>
							<p><i class="far fa-dot-circle"></i>The candidates will have to opt for the medium of Typing Test (i.e. either Hindi or English) in the online Application Form. </p>
							<p><i class="far fa-dot-circle"></i>Candidates opting for English medium should have typing speed of 35 words per minute (w.p.m.) and those opting for Hindi medium should have typing speed of 30 words per minute (w.p.m.). </p>
							<p><i class="far fa-dot-circle"></i>35 w.p.m. and 30 w.p.m. correspond to about 10500 key depressions per hour and about 9000 key depressions per hour respectively. </p>
							<p><i class="far fa-dot-circle"></i>The speed will be adjudged on the accuracy of typing on the Computer of a given text passage in 10 minutes. </p>
							<p><i class="far fa-dot-circle"></i>Candidates eligible for scribe will be given compensatory time of 5 minutes. Therefore, duration of Typing Test for such candidates will be 15 minutes. </p>
  					</div>
  				</details>
  				<details>
  					<summary>Syllabus</summary>
  					<div class='exam-1 active' id='exam8'>
  						<h4> SSC CHSL Tier I </h4>
						<p>The SSC CHSL Tier I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC CHSL Tier I paper which consist of 100 questions. Each question carries 2 marks. So, the total marks is 200 marks.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
									<li>Verbal and non-verbal type Questions </li>
									<li>Semantic Analogy, </li>
									<li>Symbolic operations, </li>
									<li>Symbolic/ Number Analogy,Trends,  </li>
									<li>Figural Analogy, Space Orientation, Semantic Classification,</li>
									<li>Venn Diagrams, Symbolic/ Number Classification, </li>
									<li>Drawing inferences, </li>
									<li>Figural Classification,</li>
									<li> Punched hole/ pattern-folding & unfolding, </li>
									<li>Semantic Series, </li>
									<li>Figural Pattern-folding and completion, Number Series, </li>
									<li>Embedded figures, Figural Series,  </li>
									<li>Critical Thinking, Problem Solving, </li>
									<li>Emotional Intelligence, </li>
									<li>Word Building, </li>
									<li>Social Intelligence</li>
									<li>Coding and de-coding, </li>
									<li>Numerical operations, Other sub-topics, if any  </li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Quantitative Ability Syllabus</li>
									<li><b>Number Systems:</b> Computation of Whole Number, Decimal and Fractions, Relationship between numbers.  </li>
									<li><b>Fundamental arithmetical operations:</b> Percentages, Ratio and Proportion, Square roots, Averages, Interest (Simple and Compound), Profit and Loss, Discount, Partnership Business, Mixture and Allegation, Time and distance, Time and work. </li>
									<li><b>Algebra:</b> Basic algebraic identities of School Algebra and Elementary surds (simple problems) and Graphs of Linear Equations. </li>
									<li><b>Geometry:</b> Familiarity with elementary geometric figures and facts: Triangle and its various kinds of centers, Congruence and similarity of triangles, Circle and its chords, tangents, angles subtended by chords of a circle, common tangents to two or more circles.</li>
									<li><b>Mensuration:</b> Triangle, Quadrilaterals, Regular Polygons, Circle, Right Prism, Right Circular Cone, Right Circular Cylinder, Sphere, Hemispheres, Rectangular Parallelepiped, Regular Right Pyramid with triangular or square Base. </li>
									<li><b>Trigonometry:</b> Trigonometry, Trigonometric ratios, Complementary angles, Height and distances (simple problems only) Standard Identities like sin2𝜃 + Cos2𝜃=1 etc.,</li>
									<li><b>Statistical Charts:</b> Use of Tables and Graphs: Histogram, Frequency polygon, Bar-diagram, Pie-chart. </li>
								</ul>
							</div>
						</div>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>English Language Syllabus</li>
									<li>Spot the Error, Fill in the Blanks, </li>
									<li>Synonyms/ Homonyms, Antonyms,</li>
									<li>Spellings/ Detecting misspell words, </li>
									<li>Idioms & Phrases,</li>
									<li>One word substitution, </li>
									<li>Improvement of Sentences, </li>
									<li>Active/ Passive Voice of Verbs, </li>
									<li>Conversion into Direct/ Indirect narration, </li>
									<li>Shuffling of Sentence parts, Shuffling of Sentences in a passage, </li>
									<li>Cloze Passage, Comprehension Passage.</li>
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
  					</div>
  				</details>
  				<details>
  					<summary>Selection Process</summary>
  					<div class='exam-1 active' id='exam9'>
  						<h4>The Examination will be conducted in three tiers:   </h4>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-I: Computer Based Examination </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-II: Pen and Paper Mode (Descriptive paper)  </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Tier-III: Skill Test/ Typing Test  </p>
						<p>Candidates will be shortlisted for Tier-II Examination on the basis of their performance in Tier-I Examination and further will be shortlisted for Tier-III Examination on the basis of their performance in Tier-I + Tier-II subject to having scored a minimum of 33% marks in Tier-II Examination. </p>
						<p>Tier-III Examination i.e. Skill Test/ Typing Test is qualifying in nature. </p>
						<p>There may be separate category-wise cut-offs in Tier-I and subsequent Tiers for different posts i.e. (i) DEO, (ii) DEO Grade 'A' and (iii) LDC/ JSA and PA/ SA. </p>
						<p>Candidates will be shortlisted for appearing in the Document Verification on the basis of their performance in Tier-I + Tier-II subject to their qualifying the Skill Test as per the qualifying standards fixed by the Commission. </p>
						<p>Final selection and allocation of Ministries/ Departments/ Offices to the candidates qualified in the Document Verification will be made on the basis of their performance in Tier-I + Tier-II Examinations and the preference of Posts/ Departments confirmed by them at the time of Document Verification. </p>
						<p>Requirement of Physical Standard, Physical Efficiency Tests and Medical Standards for the post of Lower Division Clerk in BRO is available at Annexure-XVI. </p>
						<p>The final allotment of posts is made on the basis of merit-cum-preferences of Posts/ Departments of candidates and once a post is allocated, no change of posts will be made by the Commission due to non-fulfillment of any post specific requirements of physical/ medical/ educational standards. </p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Previous Year Cut-Off</summary>
  					<div class='exam-1 active' id='exam10'>
  						<p>SSC CHSL cutoff has risen significantly in last few years. The key off success to score maximum number. This can be achieved by doing more and more practice with TestsGenie, your exam success partner.  </p>
						<h4>SSC CHSL Tier 1 Cut-off: 2020-2021</h4>
						<div class='row row exam1-details'>
							<div class='over-view'>
								<div class='para-two'>
									<p><span><b>Category </b></span></p>
									<p><span><b>Cut off Marks </b></span></p>
								</div>
								<div class='para-two'>
									<p><span>UR</span></p>
									<p><span>141.88884</span></p>
								</div>
								<div class='para-two'>
									<p><span>SC</span></p>
									<p><span>114.16301</span></p>
								</div>
								<div class='para-two'>
									<p><span>ST</span></p>
									<p><span>108.88563</span></p>
								</div>
								<div class='para-two'>
									<p><span>OBC</span></p>
									<p><span>139.46324</span></p>
								</div>
								<div class='para-two'>
									<p><span>EWS</span></p>
									<p><span>117.59934</span></p>
								</div>
								<div class='para-two'>
									<p><span>ESM</span></p>
									<p><span>72.10346</span></p>
								</div>
								<div class='para-two'>
									<p><span>OH</span></p>
									<p><span>106.37516</span></p>
								</div>
								<div class='para-two'>
									<p><span>HH</span></p>
									<p><span>63.80870</span></p>
								</div>
								<div class='para-two'>
									<p><span>VH</span></p>
									<p><span>93.81684</span></p>
								</div>
								<div class='para-two'>
									<p><span>PwD – Other</span></p>
									<p><span>51.12050</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Detailed Advertisement</summary>
  					<div class='exam-1 active' id='exam11'>
  						<p>SSC CHSL 2021-22 Official advertisement-</p>
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/Notice_chsl_01022022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Admit Card</summary>
  					<div class='exam-1 active' id='exam12'>
  						<p>SSC CHSL  2021-22 Admit card</p>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Admit Cards for all stages of examination will be issued online on the websites of concerned Regional Office of the Commission.   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates are advised to regularly visit the websites of the Commission Headquarters (i.e. https://ssc.nic.in) and Regional Office concerned of the Commission under whose jurisdiction the examination centers opted by the candidate are located (detail at para-12.1).   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Information about the Examination indicating the time table and City/ Centre of examination for the candidates will be uploaded on the websites of the Regional Office concerned of the Commission about two weeks before the date of examination.   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Facility to download Admit Cards will be made available 3-7 days before the examination on the website of Regional Office concerned. Candidate must bring printout of the Admit Card to the Examination Hall.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>In addition to the Admit Card, it is mandatory to carry at least two passport size recent colour photographs, Original valid Photo-ID proof having the Date of Birth as printed on the Admit Card </p>
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