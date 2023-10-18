<?php include( 'essentials/top.php'); ?>
<?php include( 'includes/header.php'); ?>

<section class='exam-details'>
	<div class='container-fluid'>
		<div class="row">
			<div class='background-pages'>
                <div class='important-links'>
                	<h1>SSC MTS Exam</h1>
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
						<p>Multi Tasking (Non-Technical) Staff (MTS) 2021 is organized by Staff Selection Commission for recruitment of a General Central Service Group ‘C’ Non-Gazetted, Non-Ministerial post and Havaldar, a General Central Service Group ‘C’ Non-Gazetted, Non-Ministerial post in Central Board of Indirect Taxes and Customs (CBIC) and Central Bureau of Narcotics (CBN) under Department of Revenue, Ministry of Finance.</p>
						<p> The details of the examination are as under: </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p><span>22-03-2022 to 30-04-2022</span></p>
								<h4>Exam Date</h4>
								<p><span>PAPER-I : July, 2022  </span></p>
								<p><span>PAPER-II: To be notified later</span></p>
								<h4>Eligibility</h4>
								<p><span>10th (Matriculation)</span>
								</p>
								<h4>Salary</h4>
								<p><span>Rs. 18,000 - 22,000/ per month</span>
								</p>
							</div>
							<div class='over-view'>
								<h4>Vacancies</h4>
								<p><span>MTS : Will be intimated later </span>
								</p>
								<p><span>Havaldar in CBIC and CBN : 3603  </span>
								</p>
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
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam2'>
						<h2>Important Dates</h2>
						<p>SSC MTS 2021-22 Notification is out!. SSC MTS 2021 related important dates can be found below-   </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>22-03-2022</span></p>
								<h4>Online Application Date</h4>
								<p><span> 22-03-2022 to 30-04-2022</span>
								</p>
								<h4>Last date and time for receipt of online applications  </h4>
								<p><span>30-04-2022 (23:00) </span>
								</p>
								<h4>Last date & time online payment</h4>
								<p><span> 02-05-2022 (23:00) </span></p>
								
								<h4>Dates of ‘Window for Application Form Correction’ including online payment</h4>
								<p><span>05-05-2022 to 09-05-2022 (23:00) </span></p>
							</div>
							<div class='over-view'>
								<h4>Last date & time for offline challan generation</h4>
								<p><span>03-05-2022 (23:00) </span> </p>
								<h4>Last date for payment through challan</h4>
								<p><span>04-05-2022</span></p>
								<h4>Computer Based Examination Date</h4>
								<p><span>Paper-I : July, 2022   </span> </p>
								<p><span>Paper-II : To be notified later</span> </p>
								<h4>Admit Card Release Date</h4>
								<p><span>To be notified later</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>						
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam3'>
						<h2>Locations</h2>
						<p>SSC MTS 2021-22 Notification is out!. SSC MTS 2021 Exam centers and center code can be found below.</p>
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
										<td>Belagavi (9002), Bengaluru (9001), Hubballi (9011), Kalaburagi (Gulbarga) (9005), Mangaluru (9008), Mysuru (9009), Shivamogga (9010), Udupi (9012). Ernakulam (9213), Kannur (9202), Kollam (9210), Kottayam (9205), Kozhikode (9206), Thrissur (9212), Thiruvananthapuram (9211). </td>
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
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam4'>
						<h2>Number of Posts</h2>
						<p>Vacancies will be determined in due course. Updated vacancy position will be uploaded on the website of the Commission (https://ssc.nic.in > Candidate’s Corner > Tentative Vacancy).  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>MTS : Will be intimated later </span></p>
								<p><span>Havaldar in CBIC and CBN : 3603 </span></p>
								<h4>*Reservation* Please refer official notification for complete details </h4>
								<p><span>Scheduled Castes (SC)</span> </p>
								<p><span>Scheduled Tribes (ST)</span></p>
								<p><span>Other Backward Classes (OBC)</span> </p>
								<p><span>Economically Weaker Sections (EWS)</span></p>
								<p><span>Ex-Servicemen (ESM) </span></p>
							</div>
							<div class='over-view'>
								<h4>SSC MTS Havaldar Vacancy 2022</h4>
								<div class="para-two">
									<p><span><b>Category</b></span>
									</p>
									<p><span><b>Vacancy</b></span>
									</p>
								</div>
								<div class="para-two">
									<p><span>UR</span></p>
									<p><span>1551 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>SC</span></p>
									<p><span>470 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>ST</span></p>
									<p><span>300 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>OBC</span></p>
									<p><span>922 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>EWS</span></p>
									<p><span>360 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>Total </span></p>
									<p><span>3603 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>ESM</span></p>
									<p><span>353 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>OH</span></p>
									<p><span>48 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>HH</span></p>
									<p><span>49 Vacancies</span></p>
								</div>
								<div class="para-two">
									<p><span>PwD-Others</span></p>
									<p><span>42 Vacancies</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
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
								<p>18-25 years (i.e. candidates born not before 02-01-1997 and not later than 01-01-2004) for MTS and Havaldar in CBN (Department of Revenue). </p>
								<p>18-27 years (i.e. candidates born not before 02-01-1995 and not later than 01-01-2004) for Havaldar in CBIC (Department of Revenue) and few posts of MTS. </p>
							</div>
							<div class='over-view'>
								<h4>Educational Qualification (As on 30-04-2022)  </h4>
									<p>The candidates must have passed Matriculation Examination or equivalent from a recognized Board.</p> 
									<p><b>It is reiterated that the result of requisite educational qualification must have been declared by the Board/ Institute/ University by the specified date. Mere processing of the result by the Board/ University/ Institute by the cut-off date does not fulfill the EQ requirement.</b> </p>
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
									<p>Widows/ Divorced Women/ Women judicially separated and who are not remarried (SC/ST). </p>
									<p><span>Up to 40 years of age </span>
									</p>
								</div>
							</div>
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
					</div>
					<div class='exam-1' id='exam6'>
						<h2>How to apply </h2>
						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Submit applications online at the website of SSC Headquarter i.e. <a href='https://ssc.nic.in/'target='_blank'>https://ssc.nic.in</a>.  </p>
						<p><i class="far fa-dot-circle"></i>Upload the scanned colour passport size photograph (not more than three months old) in JPEG format (20 KB to 50 KB) with dimension of about 3.5 cm (width) x 4.5 cm (height). The photograph should be without cap, spectacles and both ears should be visible. </p>
						<p><i class="far fa-dot-circle"></i> Last date and time for submission of online applications is 30-04-2022 (23:00).  </p>
						<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form. </p>
						
						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>Fee payable: ₹100/- (Rs one hundred only). </p>
						<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee. </p>
						<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.   </p>
						<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 02.05.2022 (23:00 hours).</p>
						<p><i class="far fa-dot-circle"></i>Candidates who wish to make cash payment through Challan of SBI, may make the payment in cash at the Branches of SBI within the working hours of bank up to 04.05.2022 provided the Challan has been generated by them before 03.05.2022 (23.00 hours).   </p>
						<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection.</p>
						<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam7'>
						<h2>Exam Pattern</h2>
						<p>Scheme of SSC MTS Paper I and II</p>
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
										<td class='td-box'rowspan="4"><b>90 Minutes (120 Minutes for candidates eligible for scribes as per para 8.1 and 8.2) </b> </td>
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
										<th class='td-box'rowspan="2">II</th>
										<th>Short Essay and a Letter in English or in any language included in the 8th schedule of the Constitution. </th>
										<td>25</td>
										<td>25</td>
										<td class='td-box'rowspan="2"><b>45 minutes (60 minutes for the candidates eligible for scribes as per Para 8.1 and 8.2). </b> </td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class='row exam1-details'>
							<div class='over-view'style='width: 100%;'>
								<h4>PET (ONLY for the post of Havaldar in CBIC and CBN)</h4>
								<div class='para-two'>
									<p><span><b>Particulars</b></span></p>
									<p><span><b>Male</b></span></p>
									<p><span><b>Female</b></span></p>
								</div>
								<div class='para-two'>
									<p><span>Walking</span></p>
									<p><span>1600 meters in 15 minutes</span></p>
									<p><span>1 km in 20 minutes</span></p>
								</div>
								<div class='para-two'>
									<p><span>Cycling</span></p>
									<p><span>8 km in 30 minutes</span></p>
									<p><span>3 km in 25 minutes</span></p>
								</div>
							</div>
							<div class='over-view'style='width: 100%;'>
								<h4>PST (ONLY for the post of Havaldar in CBIC and CBN)</h4>
								<div class='para-two'>
									<p><span><b>Particulars</b></span></p>
									<p><span><b>Male</b></span></p>
									<p><span><b>Female</b></span></p>
								</div>
								<div class='para-two'>
									<p><span>Height</span></p>
									<p><span>157.5cm</span></p>
									<p><span>152cm</span></p>
								</div>
								<div class='para-two'>
									<p><span>Chest</span></p>
									<p><span>76cm (unexpanded) Min.<br> expansion: 5 cms </span></p>
									<p><span>-</span></p>
								</div>
								<div class='para-two'>
									<p><span>Weight</span></p>
									<p><span>-</span></p>
									<p><span>48kg</span></p>
								</div>
							</div>
						</div>
						<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>The examination will consist of a Computer Based Examination (Paper-I), Physical Efficiency Test (PET)/ Physical Standard Test (PST) (only for the post of Havaldar) and a Descriptive Paper (Paper-II).  </p>
							<p><i class="far fa-dot-circle"></i>Paper-I will consist of Objective Type, Multiple choice questions. The questions will be set both in English & Hindi for Part-II, III & IV.  </p>
							<p><i class="far fa-dot-circle"></i>There will be negative marking of 0.25 marks for each wrong answer.  </p>
							<p><i class="far fa-dot-circle"></i>Paper-II will be of descriptive type in ‘Pen and Paper’ Mode in which the candidates will be required to write a short essay and a letter in English or any language included in the Schedule-VIII of the Constitution. </p>
							<p><i class="far fa-dot-circle"></i>Paper-II will only be of qualifying nature and is intended to test elementary language skills in view of categorization of the post as Group-C and in view of job requirements. </p>
							<p><i class="far fa-dot-circle"></i>Paper-II will be held only for those candidates who meet the cut-off prescribed by the Commission in Paper-I for different categories. </p>
							<p><i class="far fa-dot-circle"></i>Physical Efficiency Test (PET)/ Physical Standard Test (PST) is only for the post of Havaldar in CBIC and CBN. </p>
							<p><i class="far fa-dot-circle"></i>PET/ PST will be conducted by CBIC / CBN at various centres finalized by them. The candidates may be called for PET/ PST to any centre across the country. </p>
							<p><i class="far fa-dot-circle"></i>The candidates who wish to avail any relaxation in PST, the requisite documents must be carried by them while appearing for PET/ PST. The scrutiny of such documents will be carried out by CBIC / CBN at the time of PET/ PST. </p>
					</div>
					<div class='exam-1' id='exam8'>
						<h2>Syllabus</h2>
						<p>The SSC MTS Paper I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC MTS Paper I that consists of 100 questions. Each question carries 1 mark. So, the total marks is 100 marks.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
										<li>similarities and differences, </li>
										<li>space visualization,</li> 
										<li>problem solving </li>
										<li>analysis, judgment </li>
										<li>decision making </li>
										<li>visual memory </li>
										<li>discriminating observation,</li> 
										<li>relationship concepts </li>
										<li>figure classification </li>
										<li>arithmetical number series </li>
										<li>non-verbal series </li>
										<li>candidate’s abilities to deal with abstract ideas and symbols and their relationship </li>				
										<li>arithmetical computation </li>
										<li>other analytical functions</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Quantitative Ability Syllabus</li>
									<li>Number Systems</li> 
									<li>Computation of Whole Numbers</li> 
									<li>Decimals and Fractions and relationship between Numbers</li> 
									<li>Fundamental arithmetical operations</li> 
									<li>Percentages</li> 
									<li>Ratio and Proportion</li>
									<li>Averages</li> 
									<li>Interest</li> 
									<li>Profit and Loss</li> 
									<li>Discount</li> 
									<li>use of Tables and Graphs</li> 
									<li>Mensuration</li> 
									<li>Time and Distance</li> 
									<li>Ratio and Time</li> 
									<li>Time and Work</li>
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
					</div>
					<div class='exam-1' id='exam9'>
						<h2>Selection Process</h2>
						<p>The eligible candidates for SSC Multi Tasking Staff recruitment will be shortlisted on the basis of three stages. A candidate needs to qualify in each stage with marks more than the cut-off announced. The three stages to be cleared are as below-   </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Stage 1- Paper-1 (Objective) </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Stage 2- Physical Efficiency Test (PET)/ Physical Standard Test (PST) (only for the post of Havaldar)  </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Stage 3- Paper-2 (Descriptive)  </p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Minimum qualifying marks in Paper-I  </li>
									<li>UR : 30% </li>
									<li>OBC/ EWS : 25% </li>
									<li>All other categories : 20% </li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Minimum qualifying marks in Paper-II  </li>
									<li>UR : 40% </li>
									<li>All other categories : 35% </li>
								</ul>
							</div>
						</div>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>The recruitment process for the post of MTS consist of Paper-I (Computer Based Examination), Paper-II (Descriptive) and Document Verification. </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of MTS, candidates will be shortlisted for appearing in Paper-II on the basis of their performance in Paper-I. Normalized scores of the candidates will be used to determine merit in Paper-I. </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>The recruitment process for the post of Havaldar will consist of Paper-I (Computer Based Examination), Physical Efficiency </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of Havaldar, candidates will be shortlisted in the ratio of 1: 6 (vacancies: candidates) for appearing in PET/ PST and Paper-II on the basis of their performance in Paper-I. Normalized scores of the candidates will be used to determine merit in Paper-I. The Commission may fix CCA-wise and category-wise cut-offs in Paper-I. </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Paper-II will be qualifying in nature. </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of MTS, based on the performance in Paper-I and scoring the cut-off marks in Paper-II, candidates will be shortlisted for appearing in the Document Verification to check their eligibility as per the information given by them in the online Application Form. The eligible candidates whose documents are found in order will be considered for final selection. </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of Havaldar, based on the performance in Paper-I, qualifying in PET/ PST and scoring the cut-off marks in Paper-II, candidates will be shortlisted for appearing in the Document Verification to check their eligibility as per the information given by them in the online Application Form. The eligible candidates whose documents are found in order will be considered for final selection. </p>
						<p><i class="far fa-dot-circle" aria-hidden="true"></i>Final selection and allocation of Post-cum-States/ UTs/ CCAs will be made on the basis of performance of the candidates in Paper-I, the preference of Post-cum-States/ UTs/ CCAs given by them in the online Application Form and the age-group of the candidates. Normalized scores of the candidates in Paper-I will be used to determine merit and the candidates will only be considered against the vacancies of Post-cum-States/ UTs/ CCAs for which they have given their preference in the online Application Form. In the final result, there will be a single select list for all the posts. Once a Post-cum-State/ UT/ CCA is allocated, no change will be made by the Commission due to non-fulfillment of any post specific requirements of physical/ medical/ educational standards. </p>

						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam10'>
						<h2>Previous Year Cut-Off</h2>
						<p>SSC MTS cutoff has risen significantly in last few years. The key off success to score maximum number. This can be achieved by doing more and more practice with TestsGenie, your exam success partner. </p>
						<div class='row row exam1-details'>
							<div class='over-view'style='width:100%;'>
								<h4>SSC MTS Tier 1 Cut-off: 2020-2021</h4>
								<div class='para-two'>
									<p><span><b>State </b></span></p>
									<p><span><b>18-25 years </b></span></p>
									<p><span><b>18-27 years </b></span></p>
								</div>
								<div class='para-two'>
									<p><span>Bihar</span></p>
									<p><span>93.06053</span></p>
									<p><span>87.29406</span></p>
								</div>
								<div class='para-two'>
									<p><span>Uttar Pradesh</span></p>
									<p><span>81.47412</span></p>
									<p><span>80.44016</span></p>
								</div>
								<div class='para-two'>
									<p><span>Jharkhand</span></p>
									<p><span>82.07591</span></p>
									<p><span>82.96938</span></p>
								</div>
								<div class='para-two'>
									<p><span>Odisha</span></p>
									<p><span>75.43995</span></p>
									<p><span>76.81953</span></p>
								</div>
								<div class='para-two'>
									<p><span>West Bengal</span></p>
									<p><span>81.31158</span></p>
									<p><span>79.32743</span></p>
								</div>
								<div class='para-two'>
									<p><span>Andaman & Nicobar</span></p>
									<p><span>–</span></p>
									<p><span>75.03277</span></p>
								</div>
								<div class='para-two'>
									<p><span>Sikkim</span></p>
									<p><span>	–	</span></p>
									<p><span>78.91719</span></p>
								</div>
								<div class='para-two'>
									<p><span>Karnataka</span></p>
									<p><span>68.26162</span></p>
									<p><span>71.87653</span></p>
								</div>
								<div class='para-two'>
									<p><span>Kerala	</span></p>
									<p><span>79.50238</span></p>
									<p><span>81.60663</span></p>
								</div>
								<div class='para-two'>
									<p><span>Lakshadweep</span></p>
									<p><span> – </span></p>
									<p><span>77.06987</span></p>
								</div>
								<div class='para-two'>
									<p><span>Chhattisgarh</span></p>
									<p><span>77.18593</span></p>
									<p><span>78.72949</span></p>
								</div>
								<div class='para-two'>
									<p><span>Madhya Pradesh	</span></p>
									<p><span>79.90320</span></p>
									<p><span>78.84794</span></p>
								</div>
								<div class='para-two'>
									<p><span>Arunachal Pradesh</span></p>	
									<p><span>–</span></p>
									<p><span>75.88015</span></p>
								</div>
								<div class='para-two'>
									<p><span>Assam</span></p>
									<p><span>73.84505</span></p>
									<p><span>–</span></p>
								</div>
								<div class='para-two'>
									<p><span> Goa</span></p>
									<p><span>72.97864</span></p>
									<p><span>77.46276</span></p>
								</div>
								<div class='para-two'>
									<p><span>Gujarat</span></p>
									<p><span>70.82844</span></p>
									<p><span>73.99393</span></p>
								</div>
								<div class='para-two'>
									<p><span>Meghalaya</span></p>
									<p><span>73.72003</span></p>
									<p><span>73.50681</span></p>
								</div>
								<div class='para-two'>
									<p><span>Mizoram</span></p>
									<p><span>73.78867</span></p>
									<p><span>73.36723</span></p>
								</div>
								<div class='para-two'>
									<p><span>Nagaland</span></p>
									<p><span>72.38148</span></p>
									<p><span>72.76800</span></p>
								</div>
								<div class='para-two'>
									<p><span>Tripura</span></p>
									<p><span>–</span></p>
									<p><span>–</span></p>
								</div>
								<div class='para-two'>
									<p><span>Delhi</span></p>
									<p><span>76.38163</span></p>
									<p><span>74.67396</span></p>
								</div>
								<div class='para-two'>
									<p><span>Rajasthan</span></p>
									<p><span>78.74005</span></p>
									<p><span>78.63906</span></p>
								</div>
								<div class='para-two'>
									<p><span>Uttarakhand</span></p>
									<p><span>81.21107</span></p>
									<p><span>79.48723</span></p>
								</div>
								<div class='para-two'>
									<p><span>Chandigarh</span></p>
									<p><span>88.33125</span></p>
									<p><span>82.04487</span></p>
								</div>
								<div class='para-two'>
									<p><span>Jammu & Kashmir</span></p>
									<p><span>80.89158</span></p>
									<p><span>77.69109</span></p>
								</div>
								<div class='para-two'>
									<p><span>Haryana</span></p>
									<p><span>78.25030</span></p>
									<p><span>–</span></p>
								</div>
								<div class='para-two'>
									<p><span>Himachal Pradesh</span></p>
									<p><span>76.55765</span></p>
									<p><span>75.79898</span></p>
								</div>
								<div class='para-two'>
									<p><span>Punjab</span></p>
									<p><span>76.11025</span></p>
									<p><span>75.74039</span></p>
								</div>
								<div class='para-two'>
									<p><span>Andhra Pradesh</span></p>
									<p><span>78.61684</span></p>
									<p><span>74.91524</span></p>
								</div>
								<div class='para-two'>
									<p><span>Puducherry & Tamil Nadu</span></p>
									<p><span>77.96557</span></p>
									<p><span>76.55238</span></p>
								</div>
								<div class='para-two'>
									<p><span>Maharashtra</span></p>
									<p><span>70.49554</span></p>
									<p><span>72.05151</span></p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam11'>
						<h2>Detailed Advertisement</h2>
						<p>SSC MTS 2021-22 Official advertisement-</p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam12'>
						<h2>Call Letters/ Admit Card</h2>
						<h4>SSC MTS 2021-22 Admit card</h4>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Admit Cards for all stages of examination will be issued online on the websites of concerned Regional Office of the Commission.    </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates are advised to regularly visit the websites of the Commission Headquarters (i.e. https://ssc.nic.in) and Regional Office concerned of the Commission under whose jurisdiction the examination centers opted by the candidate are located (detail at para-12.1).    </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i> Information about the Examination indicating the time table and City/ Centre of examination for the candidates will be uploaded on the websites of the Regional Office concerned of the Commission about two weeks before the date of examination.    </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Facility to download Admit Cards will be made available 3-7 days before the examination on the website of Regional Office concerned. Candidate must bring printout of the Admit Card to the Examination Hall.   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>In addition to the Admit Card, it is mandatory to carry at least two passport size recent colour photographs, Original valid Photo-ID proof having the Date of Birth as printed on the Admit Card  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website : <a href='https://ssc.nic.in'target='_blank'>https://ssc.nic.in</a> </b></p>
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
							<h2>Overview</h2>
							<p>Multi Tasking (Non-Technical) Staff (MTS) 2021 is organized by Staff Selection Commission for recruitment of a General Central Service Group ‘C’ Non-Gazetted, Non-Ministerial post and Havaldar, a General Central Service Group ‘C’ Non-Gazetted, Non-Ministerial post in Central Board of Indirect Taxes and Customs (CBIC) and Central Bureau of Narcotics (CBN) under Department of Revenue, Ministry of Finance.</p>
							<p> The details of the examination are as under: </p>
							<div class='row exam1-details'>
								<div class='over-view'>
									<h4>Registration Date</h4>
									<p><span>22-03-2022 to 30-04-2022</span></p>
									<h4>Exam Date</h4>
									<p><span>PAPER-I : July, 2022  </span></p>
									<p><span>PAPER-II: To be notified later</span></p>
									<h4>Eligibility</h4>
									<p><span>10th (Matriculation)</span>
									</p>
									<h4>Salary</h4>
									<p><span>Rs. 18,000 - 22,000/ per month</span>
									</p>
								</div>
								<div class='over-view'>
									<h4>Vacancies</h4>
									<p><span>MTS : Will be intimated later </span>
									</p>
									<p><span>Havaldar in CBIC and CBN : 3603  </span>
									</p>
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
							</div>
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  					</details>
  					<details>
  						<summary>Important Dates</summary>
  						<div class='exam-1 active' id='exam2'>
							<p>SSC MTS 2021-22 Notification is out!. SSC MTS 2021 related important dates can be found below-   </p>
							<div class='row exam1-details'>
								<div class='over-view'>
									<h4>Notification Date</h4>
									<p><span>22-03-2022</span></p>
									<h4>Online Application Date</h4>
									<p><span> 22-03-2022 to 30-04-2022</span>
									</p>
									<h4>Last date and time for receipt of online applications  </h4>
									<p><span>30-04-2022 (23:00) </span>
									</p>
									<h4>Last date & time online payment</h4>
									<p><span> 02-05-2022 (23:00) </span></p>
									
									<h4>Dates of ‘Window for Application Form Correction’ including online payment</h4>
									<p><span>05-05-2022 to 09-05-2022 (23:00) </span></p>
								</div>
								<div class='over-view'>
									<h4>Last date & time for offline challan generation</h4>
									<p><span>03-05-2022 (23:00) </span> </p>
									<h4>Last date for payment through challan</h4>
									<p><span>04-05-2022</span></p>
									<h4>Computer Based Examination Date</h4>
									<p><span>Paper-I : July, 2022   </span> </p>
									<p><span>Paper-II : To be notified later</span> </p>
									<h4>Admit Card Release Date</h4>
									<p><span>To be notified later</span></p>
									<h4>Result Date</h4>
									<p><span>To be notified later</span></p>
								</div>
							</div>						
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  					</details>
  					<details>
  						<summary>Locations</summary>
  						<div class='exam-1 active' id='exam3'>
  						<p>SSC MTS 2021-22 Notification is out!. SSC MTS 2021 Exam centers and center code can be found below.</p>
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
								<p> Belagavi (9002), Bengaluru (9001), Hubballi (9011), Kalaburagi (Gulbarga) (9005), Mangaluru (9008), Mysuru (9009), Shivamogga (9010), Udupi (9012). Ernakulam (9213), Kannur (9202), Kollam (9210), Kottayam (9205), Kozhikode (9206), Thrissur (9212), Thiruvananthapuram (9211).</p>
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
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  					</details>
  					<details>
  						<summary>Number of Posts</summary>
  						<div class='exam-1 active' id='exam4'>
							<p>Vacancies will be determined in due course. Updated vacancy position will be uploaded on the website of the Commission (https://ssc.nic.in > Candidate’s Corner > Tentative Vacancy).  </p>
							<div class='row exam1-details'>
								<div class='over-view'>
									<h4>Total Vacancies</h4>
									<p><span>MTS : Will be intimated later </span></p>
									<p><span>Havaldar in CBIC and CBN : 3603 </span></p>
									<h4>*Reservation* Please refer official notification for complete details </h4>
									<p>Scheduled Castes (SC) </p>
									<p>Scheduled Tribes (ST)</p>
									<p>Other Backward Classes (OBC) </p>
									<p>Economically Weaker Sections (EWS)</p>
									<p>Ex-Servicemen (ESM) </p>
								</div>
								<div class='over-view'>
									<h4>SSC MTS Havaldar Vacancy 2022</h4>
									<div class="para-two">
										<p><span><b>Category</b></span>
										</p>
										<p><span><b>Vacancy</b></span>
										</p>
									</div>
									<div class="para-two">
										<p><span>UR</span></p>
										<p><span>1551 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>SC</span></p>
										<p><span>470 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>ST</span></p>
										<p><span>300 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>OBC</span></p>
										<p><span>922 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>EWS</span></p>
										<p><span>360 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>Total </span></p>
										<p><span>3603 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>ESM</span></p>
										<p><span>353 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>OH</span></p>
										<p><span>48 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>HH</span></p>
										<p><span>49 Vacancies</span></p>
									</div>
									<div class="para-two">
										<p><span>PwD-Others</span></p>
										<p><span>42 Vacancies</span></p>
									</div>
								</div>
							</div>
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
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
									<p>18-25 years (i.e. candidates born not before 02-01-1997 and not later than 01-01-2004) for MTS and Havaldar in CBN (Department of Revenue). </p>
									<p>18-27 years (i.e. candidates born not before 02-01-1995 and not later than 01-01-2004) for Havaldar in CBIC (Department of Revenue) and few posts of MTS. </p>
								</div>
								<div class='over-view'>
									<h4>Educational Qualification (As on 30-04-2022)  </h4>
										<p>The candidates must have passed Matriculation Examination or equivalent from a recognized Board.</p> 
										<p><b>It is reiterated that the result of requisite educational qualification must have been declared by the Board/ Institute/ University by the specified date. Mere processing of the result by the Board/ University/ Institute by the cut-off date does not fulfill the EQ requirement.</b> </p>
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
										<p>Widows/ Divorced Women/ Women judicially separated and who are not remarried (SC/ST). </p>
										<p><span>Up to 40 years of age </span>
										</p>
									</div>
								</div>
							</div>
							<label class="custom-file-upload">
									<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
								</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  					</details>
	  				<details>
	  					<summary>How To Apply</summary>
	  					<div class='exam-1 active' id='exam6'>
							<h2>How to apply </h2>
							<h4>Steps</h4>
							<p><i class="far fa-dot-circle"></i>Submit applications online at the website of SSC Headquarter i.e. https://ssc.nic.in.  </p>
							<p><i class="far fa-dot-circle"></i>Upload the scanned colour passport size photograph (not more than three months old) in JPEG format (20 KB to 50 KB) with dimension of about 3.5 cm (width) x 4.5 cm (height). The photograph should be without cap, spectacles and both ears should be visible. </p>
							<p><i class="far fa-dot-circle"></i> Last date and time for submission of online applications is 30-04-2022 (23:00).  </p>
							<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form. </p>
							
							<h4>Application Fee :</h4>
							<p><i class="far fa-dot-circle"></i>Fee payable: ₹100/- (Rs one hundred only). </p>
							<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee. </p>
							<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.   </p>
							<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 02.05.2022 (23:00 hours).</p>
							<p><i class="far fa-dot-circle"></i>Candidates who wish to make cash payment through Challan of SBI, may make the payment in cash at the Branches of SBI within the working hours of bank up to 04.05.2022 provided the Challan has been generated by them before 03.05.2022 (23.00 hours).   </p>
							<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection.</p>
							<label class="custom-file-upload">
									<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
	  				</details>
	  				<details>
	  					<summary>Exam Pattern</summary>
	  					<div class='exam-1 active' id='exam7'>
							<h2>Exam Pattern</h2>
							<p>Scheme of SSC MTS Paper I and II</p>
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
										<p>90 Minutes (120 Minutes for candidates eligible for scribes as per para 8.1 and 8.2) </p>
									</div>
								</div>
							</div>
							<div class="impt-points">
  								<h4>Tier-II Examination</h4>
  							</div>
							<div class='row exam1-details'>
								<div class='over-view'>
									<h4>Subject </h4>
									<p>Short Essay and a Letter in English or in any language included in the 8th schedule of the Constitution. </p>
									<div class='para-two'>
										<p>No. of Questions </p>
										<p>25</p>
									</div>
									<div class='para-two'>
										<p>Maximum Marks  </p>
										<p>25</p>
									</div>
									<div class='para-two'>
										<p>Time allowed </p>
										<p>45 minutes (60 minutes for the candidates eligible for scribes as per Para 8.1 and 8.2). </p>
									</div>
								</div>
							</div>
							<div class='row exam1-details'>
								<div class='over-view'style='width: 100%;'>
									<h4>PET (ONLY for the post of Havaldar in CBIC and CBN)</h4>
									<div class='para-two'>
										<p><span><b>Particulars</b></span></p>
										<p><span><b>Male</b></span></p>
										<p><span><b>Female</b></span></p>
									</div>
									<div class='para-two'>
										<p><span>Walking</span></p>
										<p><span>1600 meters in 15 minutes</span></p>
										<p><span>1 km in 20 minutes</span></p>
									</div>
									<div class='para-two'>
										<p><span>Cycling</span></p>
										<p><span>8 km in 30 minutes</span></p>
										<p><span>3 km in 25 minutes</span></p>
									</div>
								</div>
								<div class='over-view'style='width: 100%;'>
									<h4>PST (ONLY for the post of Havaldar in CBIC and CBN)</h4>
									<div class='para-two'>
										<p><span><b>Particulars</b></span></p>
										<p><span><b>Male</b></span></p>
										<p><span><b>Female</b></span></p>
									</div>
									<div class='para-two'>
										<p><span>Height</span></p>
										<p><span>157.5cm</span></p>
										<p><span>152cm</span></p>
									</div>
									<div class='para-two'>
										<p><span>Chest</span></p>
										<p><span>76cm (unexpanded) Min. expansion: 5 cms </span></p>
										<p><span>-</span></p>
									</div>
									<div class='para-two'>
										<p><span>Weight</span></p>
										<p><span>-</span></p>
										<p><span>48kg</span></p>
									</div>
								</div>
							</div>
							<h4>EXAM INSTRUCTIONS-</h4>
							<p><i class="far fa-dot-circle"></i>The examination will consist of a Computer Based Examination (Paper-I), Physical Efficiency Test (PET)/ Physical Standard Test (PST) (only for the post of Havaldar) and a Descriptive Paper (Paper-II).  </p>
							<p><i class="far fa-dot-circle"></i>Paper-I will consist of Objective Type, Multiple choice questions. The questions will be set both in English & Hindi for Part-II, III & IV.  </p>
							<p><i class="far fa-dot-circle"></i>There will be negative marking of 0.25 marks for each wrong answer.  </p>
							<p><i class="far fa-dot-circle"></i>Paper-II will be of descriptive type in ‘Pen and Paper’ Mode in which the candidates will be required to write a short essay and a letter in English or any language included in the Schedule-VIII of the Constitution. </p>
							<p><i class="far fa-dot-circle"></i>Paper-II will only be of qualifying nature and is intended to test elementary language skills in view of categorization of the post as Group-C and in view of job requirements. </p>
							<p><i class="far fa-dot-circle"></i>Paper-II will be held only for those candidates who meet the cut-off prescribed by the Commission in Paper-I for different categories. </p>
							<p><i class="far fa-dot-circle"></i>Physical Efficiency Test (PET)/ Physical Standard Test (PST) is only for the post of Havaldar in CBIC and CBN. </p>
							<p><i class="far fa-dot-circle"></i>PET/ PST will be conducted by CBIC / CBN at various centres finalized by them. The candidates may be called for PET/ PST to any centre across the country. </p>
							<p><i class="far fa-dot-circle"></i>The candidates who wish to avail any relaxation in PST, the requisite documents must be carried by them while appearing for PET/ PST. The scrutiny of such documents will be carried out by CBIC / CBN at the time of PET/ PST. </p>	
						</div>
	  				</details>
	  				<details>
	  					<summary>Syllabus</summary>
	  					<div class='exam-1 active' id='exam8'>
							<p>The SSC MTS Paper I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC MTS Paper I that consists of 100 questions. Each question carries 1 mark. So, the total marks is 100 marks.</p>
							<div class='row syll-row'>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
											<li>similarities and differences, </li>
											<li>space visualization,</li> 
											<li>problem solving </li>
											<li>analysis, judgment </li>
											<li>decision making </li>
											<li>visual memory </li>
											<li>discriminating observation,</li> 
											<li>relationship concepts </li>
											<li>figure classification </li>
											<li>arithmetical number series </li>
											<li>non-verbal series </li>
											<li>candidate’s abilities to deal with abstract ideas and symbols and their relationship </li>				
											<li>arithmetical computation </li>
											<li>other analytical functions</li>
									</ul>
								</div>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>Quantitative Ability Syllabus</li>
										<li>Number Systems</li> 
										<li>Computation of Whole Numbers</li> 
										<li>Decimals and Fractions and relationship between Numbers</li> 
										<li>Fundamental arithmetical operations</li> 
										<li>Percentages</li> 
										<li>Ratio and Proportion</li>
										<li>Averages</li> 
										<li>Interest</li> 
										<li>Profit and Loss</li> 
										<li>Discount</li> 
										<li>use of Tables and Graphs</li> 
										<li>Mensuration</li> 
										<li>Time and Distance</li> 
										<li>Ratio and Time</li> 
										<li>Time and Work</li>
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
						</div>
	  				</details>
	  				<details>
	  					<summary>Selection Process</summary>
	  					<div class='exam-1 active' id='exam9'>
							<p>The eligible candidates for SSC Multi Tasking Staff recruitment will be shortlisted on the basis of three stages. A candidate needs to qualify in each stage with marks more than the cut-off announced. The three stages to be cleared are as below-   </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Stage 1- Paper-1 (Objective) </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Stage 2- Physical Efficiency Test (PET)/ Physical Standard Test (PST) (only for the post of Havaldar)  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Stage 3- Paper-2 (Descriptive)  </p>
							<div class='row syll-row'>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>Minimum qualifying marks in Paper-I  </li>
										<li>UR : 30% </li>
										<li>OBC/ EWS : 25% </li>
										<li>All other categories : 20% </li>
									</ul>
								</div>
								<div class='syll-box'>
									<ul>
										<li class='sylltop-li'>Minimum qualifying marks in Paper-II  </li>
										<li>UR : 40% </li>
										<li>All other categories : 35% </li>
									</ul>
								</div>
							</div>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>The recruitment process for the post of MTS consist of Paper-I (Computer Based Examination), Paper-II (Descriptive) and Document Verification. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of MTS, candidates will be shortlisted for appearing in Paper-II on the basis of their performance in Paper-I. Normalized scores of the candidates will be used to determine merit in Paper-I. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>The recruitment process for the post of Havaldar will consist of Paper-I (Computer Based Examination), Physical Efficiency </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of Havaldar, candidates will be shortlisted in the ratio of 1: 6 (vacancies: candidates) for appearing in PET/ PST and Paper-II on the basis of their performance in Paper-I. Normalized scores of the candidates will be used to determine merit in Paper-I. The Commission may fix CCA-wise and category-wise cut-offs in Paper-I. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Paper-II will be qualifying in nature. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of MTS, based on the performance in Paper-I and scoring the cut-off marks in Paper-II, candidates will be shortlisted for appearing in the Document Verification to check their eligibility as per the information given by them in the online Application Form. The eligible candidates whose documents are found in order will be considered for final selection. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>For the post of Havaldar, based on the performance in Paper-I, qualifying in PET/ PST and scoring the cut-off marks in Paper-II, candidates will be shortlisted for appearing in the Document Verification to check their eligibility as per the information given by them in the online Application Form. The eligible candidates whose documents are found in order will be considered for final selection. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Final selection and allocation of Post-cum-States/ UTs/ CCAs will be made on the basis of performance of the candidates in Paper-I, the preference of Post-cum-States/ UTs/ CCAs given by them in the online Application Form and the age-group of the candidates. Normalized scores of the candidates in Paper-I will be used to determine merit and the candidates will only be considered against the vacancies of Post-cum-States/ UTs/ CCAs for which they have given their preference in the online Application Form. In the final result, there will be a single select list for all the posts. Once a Post-cum-State/ UT/ CCA is allocated, no change will be made by the Commission due to non-fulfillment of any post specific requirements of physical/ medical/ educational standards. </p>

							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
	  				</details>
	  				<details>
	  					<summary>Previous Year Cut-Off</summary>
	  					<div class='exam-1 active' id='exam10'>
							<p>SSC MTS cutoff has risen significantly in last few years. The key off success to score maximum number. This can be achieved by doing more and more practice with TestsGenie, your exam success partner. </p>
							<div class='row row exam1-details'>
								<div class='over-view'style='width:100%;'>
									<h4>SSC MTS Tier 1 Cut-off: 2020-2021</h4>
									<div class='para-two'>
										<p><span><b>State </b></span></p>
										<p><span><b>18-25 years </b></span></p>
										<p><span><b>18-27 years </b></span></p>
									</div>
									<div class='para-two'>
										<p><span>Bihar</span></p>
										<p><span>93.06053</span></p>
										<p><span>87.29406</span></p>
									</div>
									<div class='para-two'>
										<p><span>Uttar Pradesh</span></p>
										<p><span>81.47412</span></p>
										<p><span>80.44016</span></p>
									</div>
									<div class='para-two'>
										<p><span>Jharkhand</span></p>
										<p><span>82.07591</span></p>
										<p><span>82.96938</span></p>
									</div>
									<div class='para-two'>
										<p><span>Odisha</span></p>
										<p><span>75.43995</span></p>
										<p><span>76.81953</span></p>
									</div>
									<div class='para-two'>
										<p><span>West Bengal</span></p>
										<p><span>81.31158</span></p>
										<p><span>79.32743</span></p>
									</div>
									<div class='para-two'>
										<p><span>Andaman & Nicobar</span></p>
										<p><span>–</span></p>
										<p><span>75.03277</span></p>
									</div>
									<div class='para-two'>
										<p><span>Sikkim</span></p>
										<p><span>	–	</span></p>
										<p><span>78.91719</span></p>
									</div>
									<div class='para-two'>
										<p><span>Karnataka</span></p>
										<p><span>68.26162</span></p>
										<p><span>71.87653</span></p>
									</div>
									<div class='para-two'>
										<p><span>Kerala	</span></p>
										<p><span>79.50238</span></p>
										<p><span>81.60663</span></p>
									</div>
									<div class='para-two'>
										<p><span>Lakshadweep</span></p>
										<p><span> – </span></p>
										<p><span>77.06987</span></p>
									</div>
									<div class='para-two'>
										<p><span>Chhattisgarh</span></p>
										<p><span>77.18593</span></p>
										<p><span>78.72949</span></p>
									</div>
									<div class='para-two'>
										<p><span>Madhya Pradesh	</span></p>
										<p><span>79.90320</span></p>
										<p><span>78.84794</span></p>
									</div>
									<div class='para-two'>
										<p><span>Arunachal Pradesh</span></p>	
										<p><span>–</span></p>
										<p><span>75.88015</span></p>
									</div>
									<div class='para-two'>
										<p><span>Assam</span></p>
										<p><span>73.84505</span></p>
										<p><span>–</span></p>
									</div>
									<div class='para-two'>
										<p><span> Goa</span></p>
										<p><span>72.97864</span></p>
										<p><span>77.46276</span></p>
									</div>
									<div class='para-two'>
										<p><span>Gujarat</span></p>
										<p><span>70.82844</span></p>
										<p><span>73.99393</span></p>
									</div>
									<div class='para-two'>
										<p><span>Meghalaya</span></p>
										<p><span>73.72003</span></p>
										<p><span>73.50681</span></p>
									</div>
									<div class='para-two'>
										<p><span>Mizoram</span></p>
										<p><span>73.78867</span></p>
										<p><span>73.36723</span></p>
									</div>
									<div class='para-two'>
										<p><span>Nagaland</span></p>
										<p><span>72.38148</span></p>
										<p><span>72.76800</span></p>
									</div>
									<div class='para-two'>
										<p><span>Tripura</span></p>
										<p><span>–</span></p>
										<p><span>–</span></p>
									</div>
									<div class='para-two'>
										<p><span>Delhi</span></p>
										<p><span>76.38163</span></p>
										<p><span>74.67396</span></p>
									</div>
									<div class='para-two'>
										<p><span>Rajasthan</span></p>
										<p><span>78.74005</span></p>
										<p><span>78.63906</span></p>
									</div>
									<div class='para-two'>
										<p><span>Uttarakhand</span></p>
										<p><span>81.21107</span></p>
										<p><span>79.48723</span></p>
									</div>
									<div class='para-two'>
										<p><span>Chandigarh</span></p>
										<p><span>88.33125</span></p>
										<p><span>82.04487</span></p>
									</div>
									<div class='para-two'>
										<p><span>Jammu & Kashmir</span></p>
										<p><span>80.89158</span></p>
										<p><span>77.69109</span></p>
									</div>
									<div class='para-two'>
										<p><span>Haryana</span></p>
										<p><span>78.25030</span></p>
										<p><span>–</span></p>
									</div>
									<div class='para-two'>
										<p><span>Himachal Pradesh</span></p>
										<p><span>76.55765</span></p>
										<p><span>75.79898</span></p>
									</div>
									<div class='para-two'>
										<p><span>Punjab</span></p>
										<p><span>76.11025</span></p>
										<p><span>75.74039</span></p>
									</div>
									<div class='para-two'>
										<p><span>Andhra Pradesh</span></p>
										<p><span>78.61684</span></p>
										<p><span>74.91524</span></p>
									</div>
									<div class='para-two'>
										<p><span>Puducherry & Tamil Nadu</span></p>
										<p><span>77.96557</span></p>
										<p><span>76.55238</span></p>
									</div>
									<div class='para-two'>
										<p><span>Maharashtra</span></p>
										<p><span>70.49554</span></p>
										<p><span>72.05151</span></p>
									</div>
								</div>
							</div>
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
	  				</details>
	  				<details>
	  					<summary>Detailed Advertisement</summary>
	  					<div class='exam-1 active' id='exam11'>
							<h2>Detailed Advertisement</h2>
							<p>SSC MTS 2021-22 Official advertisement-</p>
							<label class="custom-file-upload">
								<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_mts_22032022.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
	  				</details>
	  				<details>
	  					<summary>Admit Card</summary>
	  					<div class='exam-1 active' id='exam12'>
							<h4>SSC MTS 2021-22 Admit card</h4>
							<div class='getadmit-step'>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i>Admit Cards for all stages of examination will be issued online on the websites of concerned Regional Office of the Commission. </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates are advised to regularly visit the websites of the Commission Headquarters (i.e. https://ssc.nic.in) and Regional Office concerned of the Commission under whose jurisdiction the examination centers opted by the candidate are located (detail at para-12.1). </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i> Information about the Examination indicating the time table and City/ Centre of examination for the candidates will be uploaded on the websites of the Regional Office concerned of the Commission about two weeks before the date of examination. </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i>Facility to download Admit Cards will be made available 3-7 days before the examination on the website of Regional Office concerned. Candidate must bring printout of the Admit Card to the Examination Hall. </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i>In addition to the Admit Card, it is mandatory to carry at least two passport size recent colour photographs, Original valid Photo-ID proof having the Date of Birth as printed on the Admit Card  </p>
								<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website : <a href='https://ssc.nic.in'target='_blank'>https://ssc.nic.in</a> </b></p>
							</div>
						</div>
	  				</details>
	  				<details>
	  					<summary>Enroll on TestsGenie</summary>
	  					<div class='exam-1 active' id='exam13'>
							<h2>Enroll on TestsGenie</h2>
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