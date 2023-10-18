<?php include( 'essentials/top.php'); ?>
<?php include( 'includes/header.php'); ?>

<section class='exam-details'>
	<div class='container-fluid'>
		<div class="row">
			<div class='background-pages'>
				<div class='important-links'>
					<h1>SSC CGL 2020-21</h1>
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
						<p>IBPS PO/MT exam is organized by Institute of Banking Personnel Selection (IBPS) once every year as common recruitment process for recruitment of probationary officers/ management trainees in 11 participating banks. It is a national level exam and the minimum required qualification to apply is Graduation. There are two parts of the exam- prelims and mains respectively.</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p>20-10-2021 to 10-11-2021</p>
								<h4>Exam Date</h4>
								<p>Preliminary - 04.12.2021 and 11.12.2021 (Tentative)</p>
                                <p>Main - January 2022</p>
							</div>
							<div class='over-view'>
								<h4>Eligibility</h4>
								<p><span>Graduation</span>
								</p>
								<h4>Vacancies</h4>
								<p><span>4135</span>
								</p>
							</div>
						</div>
						<div class='row exam1-details'>
                            <div class='over-view'>
								<h4>Application fees</h4>
								<div class='para-two'>
									<p>SC/ST/PWBD</p>
									<p>Rs. 175/-</p>
								</div>
								<div class='para-two'>
									<p>All other categories</p>
									<p>Rs. 850 /- </p>
								</div>
							</div>
                            <div class='over-view'>
								<h4>Salary</h4>
                                <div class='para-two'>
									<p><b>Basic Pay</b></p>
									<p><b>Rs. 36000/-</b></p>
								</div>
								<div class='para-two'>
									<p>Gross Pay with HRA</p>
									<p>Rs. 58271.55/-</p>
								</div>
							</div>
                            </div>
                            <div class='row exam1-details'>
							<div class='over-view'>
								<h4>Exam Pattern- Preliminary Exam</h4>
								<div class='para-two'>
									<p><span><b>Subject</b></span>
									</p>
									<p><span><b>No of Questions</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p>English Language</p>
									<p><span>30</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Numerical Ability</p>
									<p><span>35</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Reasoning Ability</p>
									<p><span>35</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Total</p>
									<p><span>100</span>
									</p>
								</div>
							</div>
						</div>
						<!-- <label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label> -->
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam2'>
						<h2>Important Dates</h2>
						<p><b>IBPS CRP PO/MT-XI for Vacancies of 2022-23</b></p>
                        <p>IBPS PO/MT 2022-23 Notification is out! Important dates related to this can be found below-</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>20-10-2021</span>
								</p>
								<h4>Conduct of Pre-Exam Training *</h4>
								<p><span>November/December 2021 *</span>
								</p>
								<h4>Online Application Date</h4>
								<p><span> 20.10.2021 to 10.11.2021</span>
								</p>
								<h4>Computer Based Examination Date</h4>
								<p><span>Preliminary - 04.12.2021 & 11.12.2021</span></p>
                                <p><span>Main - January 2022 (Tentative)</span></p>
							</div>
							<div class='over-view'>
								<h4>Last date of Application payment</h4>
								<p><span> 20.10.2021 to 10.11.2021</span></p>
								<h4>Admit Card Release Date</h4>
								<p>Preliminary - November/December 2021</p>
								<p>Main - December 2021/ January 2022</p>
								<h4>Admit Card Release Date for Pre- Exam Training (PET) *</h4>
								<p>November, 2021 *</p>
								<h4>Result Date</h4>
								<p>Preliminary - December 2021/January 2022 </p>
                                <p>Main - January/ February 2022</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='#' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>* In case it is possible and safe to hold PET</p>
					</div>
					<div class='exam-1' id='exam3'>
						<h2>Locations</h2>
						<p><b>IBPS CRP PO/MT-XI for Vacancies of 2022-23</b></p>
                        <p>IBPS PO/MT 2022-23 Notification is out! Pre-Examination training centres can be found below-</p>
                        <p><b>PRE-EXAMINATION CENTRES</b></p>
                        <p><b>PRE-EXAMINATION TRAINING</b></p>
                        <p style="color:red">Note- Due to COVID-19 pandemic, for the safety of the candidates, PET during this period may not be held.</p>
                        <p>Pre-Examination Training may be arranged by the Nodal Banks/ Participating Banks to a limited number of candidates belonging to Scheduled Caste/ Scheduled Tribes/ Minority Communities at certain centres viz. Agartala, Agra, Ahmedabad, Amritsar, Aurangabad, Balasore, Behrampur (Ganjam), Bengaluru, Bhopal, Bhubaneshwar, Chandigarh, Chennai, Coimbatore, Dehradun, Dhanbad, Gorakhpur, Gulbarga, Guwahati, Hubli, Hyderabad, Indore, Jabalpur, Jaipur, Jammu, Jodhpur, Kanpur, Karnal, Kavaratti, Kochi, Kolkata, Lucknow, Ludhiana, Madurai, Mangalore, Mumbai, Muzaffarpur, Mysore, Nagpur, New Delhi, Panaji (Goa), Patiala, Patna, Port Blair, Prayagraj (Allahabad), Puducherry, Pune, Raipur, Rajkot, Ranchi, Rohtak, Sambalpur, Shimla, Shillong, Siliguri, Thiruchirapalli, Thiruvananthapuram, Tirupati, Vadodara, Varanasi, Vijaywada and Vishakhapatnam.</p>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-start'>State Code</th>
										<th scope="col" class='th-star'>State/ UT/ NCR</th>
										<th scope="col" class='th-star'>Preliminary Examination Center</th>
                                        <th scope="col" class='th-star'>Main Examination Center</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Bhagalpur(3201), Darbhanga (3202), Muzaffarpur(3205), Patna(3206), Purnea (3209), Agra(3001), Bareilly (3005), Gorakhpur (3007), Jhansi (3008), Kanpur(3009), Lucknow(3010), Meerut(3011), Prayagraj(3003), Varanasi(3013)</th>
										<td>Central Region (CR)/ Bihar and Uttar Pradesh</td>
										<td>Regional Director (CR), Staff Selection Commission, 34-A, Mahatma Gandhi Marg, Civil lines, Kendriya Sadan, Prayagraj – 21100</td>
									</tr>
								</tbody>
							</table>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam4'>
						<h2>Number of Posts</h2>
						<p><b>IBPS CRP PO/MT-XI for Vacancies of 2022-23</b></p>
                        <p>IBPS PO/MT 2022-23 Notification is out! Tentative vacancies for the examination are listed below-</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>4135</span></p>
							</div>
						</div>
					</div>
					<div class='exam-1' id='exam5'>
						<h2>Eligibility</h2>
                        <p>Candidates, intending to apply for CRP-PO/MT-XI should ensure that they fulfill the minimum eligibility criteria specified by IBPS in this advertisement:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Nationality</h4>
                                <p>Citizen of India ora subject of Nepal/Bhutan or</p>
                                <p>a Tibetan Refugee came to India before 1 Jan 1962 to permanently settle in India or</p>
                                <p>a person of Indian origin who has migrated from Pakistan, Burma, Sri Lanka, East African countries of Kenya, Uganda, the United Republic of Tanzania (formerly Tanganyika and Zanzibar), Zambia, Malawi, Zaire, Ethiopia and Vietnam with the intention of permanently settling in India,
 (a person in whose favor a certificate of eligibility has been issued by the Government of India. )</p>
							</div>
							<div class='over-view'>
								<h4>Age Limit (As on 01-01-2021)</h4>
								<div class='para-two'>
									<p><b>Age Limit</b></p>
									<p><b>20 – 30 years</b></p>
								</div>
								<div class='para-two'>
									<p>Born not before</p>
									<p>02-10-1991</p>
								</div>
								<div class='para-two'>
									<p>Born not after</p>
									<p>01-10-2001</p>
								</div>
								<h4>Age Relaxation</h4>
								<div class='para-two'>
									<p>SC / ST</p>
									<p><span>5 Years</span></p>
								</div>
								<div class='para-two'>
									<p>OBC</p>
									<p><span>3 Years</span></p>
								</div>
								<div class='para-two'>
									<p>PwD (unreserved)</p>
									<p><span>10 Years</span></p>
								</div>
								<div class='para-two'>
									<p>PwD (OBC)</p>
									<p><span>13 Years</span></p>
								</div>
								<div class='para-two'>
									<p>PwD (SC/ST)</p>
									<p><span>15 Years</span></p>
								</div>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Relaxation</h4>
								<div class='para-two'>
									<p>Ex-Serviceman (ESM)</p>
									<p>3 years after deduction of the military service rendered from the actual age as on the closing date.</p>
								</div>
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
							<div class='over-view' style='width:100%;background: linear-gradient(90deg, rgba(214,212,57,0.6615021008403361) 100%, rgba(255,255,255,0.7931547619047619) 100%);'>
								<h4 style='background: linear-gradient(90deg, rgba(214,212,57,1) 0%, rgba(57,92,214,0.9192051820728291) 49%, rgba(139,69,19,0.7651435574229692) 100%);;'>Educational Qualification</h4>
								<div class='para-two'>
									<p>Essential Qualification :</p>
									<p>Bachelor’s Degree</p>
								</div>
								<div class='para-two'>
									<p>Desirable Qualification :</p>
									<p>CA or Cost & Management Accountant or CS or Mcom or MBS or MBA (Finance) or MBE</p>
								</div>
								<div class='para-two'>
									<p>All Others :</p>
									<p>Bachelor’s Degree (final year of graduation can also apply)</p>
								</div>
								<div class='para-two'>
									<p>Junior Statistical Officer :</p>
									<p>Bachelor’s Degree in any subject with at least 60 % in Math at 12th standard level OR Bachelor’s Degree in any subject with Statistics as one of the subject at degree level</p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam6'>
						<h2>How to apply </h2>
						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Go to <span><a href='https://ssc.nic.in/'target='_blank'> https://ssc.nic.in </a></span> (submitted only online mode)</p>
						<p><i class="far fa-dot-circle"></i>Upload scanned latest photo (not more than 6 months old) (JPEG format (3.5 cm width X 4.5 cm (height) and size 20 – 50 KB)</p>
						<p><i class="far fa-dot-circle"></i>Last date of online form submission : 31-01-2021 (23.30)</p>
						<p><i class="far fa-dot-circle"></i>Students are advised to submit application as early as possible.</p>
						<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form. No modification allowed after submission.</p>
						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>Fee Payable : Rs. 100/-</p>
						<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee.</p>
						<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.</p>
						<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 02-02-2021 (23:30 hours). However, candidates who wish to make cash payment through the challan of SBI, may make payment in cash at the Branches of SBI within the working hours of bank up to 06-02-2021 provided the challan has been generated by them before 04-02-2021 (23:30 hours).</p>
						<p><i class="far fa-dot-circle"></i>Candidates who are not exempted from fee payment must ensure that their fee has been deposited with SSC.</p>
						<p><i class="far fa-dot-circle"></i>If the fee is not received by SSC, status of the Application Form is shown as ‘Incomplete’</p>
						<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection.</p>
					</div>
					<div class='exam-1' id='exam7'>
						<h2>Exam Pattern</h2>
						<div class='impt-points'>
							<h4>Important points</h4>
							<p>In Tier-II, Paper-I and Paper-II are compulsory for all the posts.</p>
							<p>In Tier-II, Paper-IV will be for only those candidates who are shortlisted in Tier-I for Paper-IV</p>
							<p>Paper-III of Tier-II will be for only those candidates who apply for the posts of Junior Statistical Officer (JSO) in the Ministry of Statistics and Programme Implementation and who are shortlisted in Tier-I for the Posts.</p>
						</div>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-exam-7">Tier</th>
										<th scope="col">Subject</th>
										<th scope="col">No. of Questions</th>
										<th scope="col">Maximum Marks</th>
										<th scope="col">Negative Marking</th>
										<th scope="col">Time Allowed</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>I</th>
										<td>
											<p class='para-exam-pattern'>A. General Intelligence and Reasoning</p>
											<p class='para-exam-pattern'>B. General Awareness</p>
											<p class='para-exam-pattern'>C. Quantitative Aptitude</p>
											<p class='para-exam-pattern'>D. English Comprehension</p>
										</td>
										<td>
											<p>25</p>
											<p>25</p>
											<p>25</p>
											<p>25</p>
										</td>
										<td>
											<p>50</p>
											<p>50</p>
											<p>50</p>
											<p>50</p>
										</td>
										<td>
											<p>0.50</p>
											<p>0.50</p>
											<p>0.50</p>
											<p>0.50</p>
										</td>
										<td style='text-align: left;'>1 hour (1 hour and 20 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</td>
									</tr>
									<tr>
										<th>II</th>
										<td>
											<p class='para-exam-pattern'>Paper-I: Quantitative Abilities</p>
											<p class='para-exam-pattern'>Paper-II: English Language and Comprehension</p>
											<p class='para-exam-pattern'>Paper-III: Statistics</p>
											<p class='para-exam-pattern'>Paper-IV: General Studies (Finance and Economics)</p>
										</td>
										<td>
											<p>100</p>
											<p>100</p>
											<p></p>
											<p></p>
											<p>100</p>
											<p>100</p>
										</td>
										<td>
											<p>200</p>
											<p>200</p>
											<p></p>
											<p></p>
											<p>200</p>
											<p>200</p>
										</td>
										<td>
											<p>0.50</p>
											<p>0.50</p>
											<p></p>
											<p></p>
											<p>0.50</p>
											<p>0.50</p>
										</td>
										<td style='text-align: left;'>2 hours (for each Paper) (2 hours and 40 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>III</th>
										<td>
											<p class='para-exam-pattern'>Descriptive Paper in English or Hindi (Writing of Essay/ Precis/ Letter/ Application etc.)</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td>
											<p>100</p>
										</td>
										<td>
											<p>0.00</p>
										</td>
										<td style='text-align: left;'>1 hour (1 hour and 20 minutes for the candidates who are eligible for scribe as per Para-7.1 and 7.2)</td>
									</tr>
									<tr>
										<th>IV</th>
										<td>
											<p class='para-exam-pattern'>Descriptive Paper in English or Hindi (Writing of Essay/ Precis/ Letter/ Application etc.)</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td style='text-align: left;'>-</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class='exam-1' id='exam8'>
						<h2>Syllabus</h2>
						<p>The SSC CHSL Tier I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC CHSL Tier I paper which consist of 100 questions. Each question carries 2 marks. So, the total marks is 200 marks.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
									<li>Logical Reasoning</li>
									<li>Alphanumeric Series</li>
									<li>Ranking/ Direction/ Alphabet Test</li>
									<li>Data Sufficiency</li>
									<li>Coded Inequalities</li>
									<li>Seating Arrangement</li>
									<li>Puzzle</li>
									<li>Tabulation</li>
									<li>Syllogism</li>
									<li>Space Orientation, Semantic Classification</li>
									<li>Figural Series, Critical Thinking</li>
									<li>Coding/ Decoding</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Quantitative Ability Syllabus</li>
									<li>Computation of Whole Number, decimal And Fractions, Relationship Between Numbers</li>
									<li>Profit and Loss</li>
									<li>Simple Interest & Compound Interest & Surds & Indices</li>
									<li>Work And Time</li>
									<li>Time And Distance</li>
									<li>Mensuration- Cylinder, Cone, Sphere </li>
									<li>Data Interpretation</li>
									<li>Ratio and Proportion, Percentage</li>
									<li>Number Systems</li>
									<li>Sequences and Series</li>
									<li>Mixtures and Allegations</li>
									<li>Permutation, Combination and Probability</li>
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
									<li>General Policy</li>
									<li>Scientific Research</li>
									<li>-</li>
									<li>-</li>
								</ul>
							</div>
						</div>
					</div>
					<div class='exam-1' id='exam9'>
						<h2>Selection Process</h2>
						<div class='heading-1'>
							<h4>Audit Officer/ Assistant Accounts Officer </h4>
						</div>
						<div class='row exam9-details'>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Tier-I Computer Based Exam</div>
							</div>
							<div id='pointer2'>
								<div class='pointer-tab' style='border:1px solid #78df67;'>Tier-II Computer Based Exam & Paper-IV
									<br>General Studies (Finance & Economics)</div>
							</div>
						</div>
						<div class='heading-1'>
							<h4>Junior Statistical Officer </h4>
						</div>
						<div class='row exam9-details'>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Tier 1 Computer Based Exam</div>
							</div>
							<div id='pointer2'>
								<div class='pointer-tab  pointer-tab-pad' style='border:1px solid #78df67;'>Tier 2 Computer Based Exam & Paper</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam10'>
						<h2>Previous Year Cut-Off</h2>
						<p>SCC CGL cutoff has risen significantly in last five years. The asked questions will be basic only. The key off success to score maximum number. This you can achieve with doing more and more practice.</p>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-start">Category</th>
										<th scope="col">2019-2020</th>
										<th scope="col">2018</th>
										<th scope="col">2017</th>
										<th scope="col">2016</th>
										<th scope="col">2015</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>UR</th>
										<td>180.12237</td>
										<td>170</td>
										<td>148.00</td>
										<td>137.00</td>
										<td>102.25</td>
									</tr>
									<tr>
										<th>OBC</th>
										<td>172.76640</td>
										<td>165.00</td>
										<td>135.50</td>
										<td>125.50</td>
										<td>89.50</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SC</th>
										<td>156.73419</td>
										<td>148.97</td>
										<td>125/50</td>
										<td>114.00</td>
										<td>80.25</td>
									</tr>
									<tr>
										<th>ST</th>
										<td>151.46077</td>
										<td>141.86</td>
										<td>119.00</td>
										<td>103.00</td>
										<td>74.25</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>EWS</th>
										<td>175.31247</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th>ESM</th>
										<td>87.32036</td>
										<td></td>
										<td></td>
										<td>92.00</td>
										<td>67.75</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>OH</th>
										<td>147.08520</td>
										<td>132.90</td>
										<td>111.50</td>
										<td>97.00</td>
										<td>69.00</td>
									</tr>
									<tr>
										<th>HH</th>
										<td>117.49075</td>
										<td>102.45</td>
										<td>75.50</td>
										<td>20.00</td>
										<td>20.00</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>VH</th>
										<td></td>
										<td></td>
										<td></td>
										<td>68.00</td>
										<td>51.00</td>
									</tr>
									<tr>
										<th>Other PwD</th>
										<td>83.70627</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						<img class='w-100' src='img/Picture1.png'>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam11'>
						<h2>Detailed Advertisement</h2>
						<p>Exams detailed official advertisement can be found at below location</p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam12'>
						<h2>Admit Card</h2>
						<p>Candidates can download the SSC CHSL Admit Card for the Written examination by following the steps below. The candidates who fail to carry the hall ticket to the exam center will not be allowed to sit for the test.</p>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-start">Name of the Region</th>
										<th scope="col">SSC CHSL Admit Card Link</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>SSC Central Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC Madhya Pradesh Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SSC Western Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC Southern Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SSC Eastern Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC North Western Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SSC North Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC North Eastern Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>You can follow the steps below to download your admit card</p>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 1: Candidates will have to click on the link which is given above.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 2: A new page will appear on the candidate’s screen. Type in your Application/Registration Number and Password in the credentials section.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 3: Click on the submit button and the Admit Card for the. The written tests will be available to the candidates.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 4: Double-check the details on the admit card and download/printout for further use.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 5: Candidates can alternatively visit the official website and click on the SSC CHSL Admit Card link available on the home page.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 6: After doing so, candidates can follow the same procedure as given above to download the admit card.</p>
						</div>
					</div>
					<div class='exam-1' id='exam13'>
						<h2>Enroll on TestsGenie</h2>
						<div class='impt-btn'>	<a href='signup.php'>Register</a>
							<a href='login.php'>Login</a>
						</div>
						<div class='lastest-exam'>	<a href='#'>SSC Exam<img src='img/Testsgenie-02.png'></a>
							<a href='#'>Banking<img src='img/Testsgenie-02.png'></a>
							<a href='#'>Railway<img src='img/Testsgenie-02.png'></a>
							<a href='#'>Army<img src='img/Testsgenie-02.png'></a>
						</div>
					</div>
				</div>
				<div class='row mobile-version'>
					<details open>
  					<summary>Overview</summary>
  					<div class='exam-1 active' id='exam1'>
						<h2>Overview</h2>
						<p>SSC CGL 2020-21 Notification is out!. SSC CGL 2021 Exam is your chance to get a job in the bureaucracy of the country! Get all the information like syllabus, preparation guide, exam dates, admit card, latest exam pattern and results here at TestsGenie.</p>
						<p>The important Exam dates for the 2021 & 2020 exam are as follows:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Registration Date</h4>
								<p>21 Dec 2020 - 31 Jan 2021</p>
								<h4>Exam Date</h4>
								<p>Tier-I :-29 May 2021 - 7 Jun 2021</p>
								<p>Tier-II :-To be notified later</p>
							</div>
							<div class='over-view'>
								<h4>Eligibility</h4>
								<p><span>Graduation</span>
								</p>
								<h4>Vacancies</h4>
								<p><span>6506</span>
								</p>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Salary</h4>
								<div class='para-two'>
									<p><b>Pay Level </b>
									</p>
									<p><b> Salary Range</b>
									</p>
								</div>
								<div class='para-two'>
									<p>Pay Level-8</p>
									<p>Rs 47,600 to 1,51,100</p>
								</div>
								<div class='para-two'>
									<p>Pay Level-7</p>
									<p>Rs 44,900 to 1,42,400</p>
								</div>
								<div class='para-two'>
									<p>Pay Level-6</p>
									<p>Rs 35,400 to 1,12,400</p>
								</div>
								<div class='para-two'>
									<p>Pay Level-5</p>
									<p>Rs 29,200 to 92,300</p>
								</div>
								<div class='para-two'>
									<p>Pay Level-4</p>
									<p>Rs 25,500 to 81,100</p>
								</div>
							</div>
							<div class='over-view'>
								<h4>Exam Pattern- Tier-1</h4>
								<div class='para-two'>
									<p><span><b>Subject</b></span>
									</p>
									<p><span><b>No of Questions</b></span>
									</p>
								</div>
								<div class='para-two'>
									<p>English</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Math</p>
									<p><span>25</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Reasoning</p>
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
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					</details>
					<details>
  					<summary>Important Dates</summary>
  					<div class='exam-1 active' id='exam2'>
						<h2>Important Dates</h2>
						<p>SSC CGL 2020-21 Notification is out!. SSC CGL 2020 related important dates can be found below-</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>29 Dec 2020</span>
								</p>
								<h4>Online Application -  Date & Time</h4>
								<p><span>29 Dec 2020 - 31 Jan 2021 (23:30)</span>
								</p>
								<h4>Online payment - Last date & time</h4>
								<p><span>02 Feb 2021 (23:30)</span>
								</p>
								<h4>Offline challan generation - Last date & time </h4>
								<p><span>04 Feb 2021 (23:30)</span>
								</p>
							</div>
							<div class='over-view'>
								<h4>Payment through challan- Last date</h4>
								<p><span>06 Feb 2021</span>
								</p>
								<h4>Computer Based Examination Date</h4>
								<p>Tier-I :- 29 May 2021 - 7 Jun 2021</p>
								<p>Tier-II :-To be notified later</p>
								<h4>Admit Card Release Date</h4>
								<p>*TBA – To be Announced</p>
								<h4>Result Date</h4>
								<p>*TBA – To be Announced</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Locations</summary>
  					<div class='exam-1 active' id='exam3'>
						<h2>Locations</h2>
						<p>SSC CGL 2020-21 Notification is out!. SSC CGL 2020 Exam centers and center code can be found below.</p>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-start'>Examination Centers and Centre
											<br>Code</th>
										<th scope="col" class='th-star'>SSC Region and States/ UTs under the jurisdiction of the Region</th>
										<th scope="col" class='th-star'>Address of the Regional Offices/ Website</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<th>Bhagalpur(3201), Darbhanga (3202), Muzaffarpur(3205), Patna(3206), Purnea (3209), Agra(3001), Bareilly (3005), Gorakhpur (3007), Jhansi (3008), Kanpur(3009), Lucknow(3010), Meerut(3011), Prayagraj(3003), Varanasi(3013)</th>
										<td>Central Region (CR)/ Bihar and Uttar Pradesh</td>
										<td>Regional Director (CR), Staff Selection Commission, 34-A, Mahatma Gandhi Marg, Civil lines, Kendriya Sadan, Prayagraj – 21100</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th scope="row">Port Blair (4802), Ranchi(4205), Balasore(4601), Berhampore(Odisha) (4602), Bhubaneshwar(4604), Cuttack(4605), Dhenkenal(4611), Rourkela(4610), Sambalpur(4609), Gangtok(4001), Hooghly (4418), Kolkata(4410), Siliguri(4415)</th>
										<td>Eastern Region (ER)/ Andaman & Nicobar Islands, Jharkhand, Odisha, Sikkim and West Bengal</td>
										<td>Regional Director (ER), Staff Selection Commission, 1 st MSO Building, (8th Floor), 234/4, Acharya Jagadish Chandra Bose Road, Kolkata, West Bengal-700020 <a href='https://sscer.org/' target='_blank'>(www.sscer.org)</a>
										</td>
									</tr>
									<tr>
										<th scope="row">Kavaratti (9401), Belagavi (9002), Bengaluru (9001), Hubballi (9011), Kalaburagi (Gulbarga) (9005), Mangaluru (9008), Mysuru (9009), Shivamogga (9010), Udupi (9012). Ernakulam (9213), Kannur (9202), Kollam (9210), Kottayam (9205), Kozhikode (9206), Thrissur (9212), Thiruvananthapuram (9211).</th>
										<td>Karnataka, Kerala Region (KKR)/ Lakshadweep, Karnataka and Kerala</td>
										<td>Regional Director (KKR), Staff Selection Commission, 1 st Floor, “E” Wing, Kendriya Sadan, Koramangala, Bengaluru, Karnataka-560034 <a href='https://www.ssckkr.kar.nic.in/' target='_blank'>(www.ssckkr.kar.nic.in)</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th scope="row">Bhopal (6001), Gwalior(6005), Indore (6006), Jabalpur (6007), Satna (6014), Sagar (6015), Ujjain (6016), Bilaspur (6202), Raipur (6204), Durg-Bhilai (6205)</th>
										<td>Madhya Pradesh Sub-Region (MPR)/ Chhattisgarh and Madhya Pradesh</td>
										<td>Dy. Director (MPR), Staff Selection Commission, 5 th Floor, Investment Building, LIC Campus-2, Pandri, Raipur, 16 Chhattisgarh-492004 <a href='http://www.sscmpr.org/' target='_blank'>(www.sscmpr.org)</a>
										</td>
									</tr>
									<tr>
										<th scope="row">Itanagar(5001), Dibrugarh(5102), Guwahati(Dispur)(5105), Jorhat(5107), Silchar(5111), Dimapur (5301), Kohima(5302), Shillong(5401), Imphal(5501), Churachandpur(5502), Ukhrul(5503), Agartala(5601), Aizwal(5701)</th>
										<td>North Eastern Region (NER)/ Arunachal Pradesh, Assam, Manipur, Meghalaya, Mizoram, Nagaland and Tripura.</td>
										<td>Regional Director (NER), Staff Selection Commission, Housefed Complex, Last Gate, Beltola-Basistha Road, P.O. Assam Sachivalaya, Dispur, Guwahati, Assam-781006 <a href='https://www.sscner.org.in/trial/' target='_blank'>(www.sscner.org.in)</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th scope="row">Dehradun(2002), Haldwani(2003),Haridwar(2005), Roorkee(2006),Delhi(2201), Ajmer(2401),Alwar(2402), Bharatpur(2403),Bikaner(2404), Jaipur(2405),Jodhpur(2406), Kota(2407),Sriganganagar(2408), Udaipur(2409),Sikar(2411)</th>
										<td>Northern Region(NR)/Delhi, Rajasthan and Uttarakhand</td>
										<td>Regional Director (NR),Staff Selection Commission,Block No. 12,CGO Complex, Lodhi Road,New Delhi-110003<a href='https://www.sscnr.net.in/newlook/site/index.html' target='_blank'>(www.sscnr.net.in)</a>
										</td>
									</tr>
									<tr>
										<th scope="row">Chandigarh/Mohali(1601),Hamirpur(1202), Shimla(1203),Jammu(1004), Leh(1005), Samba(1010), Srinagar(J&K)(1007),Jalandhar(1402), Ludhiana(1405)Patiala(1403), Amritsar(1404)</th>
										<td>North WesternSub-Region(NWR)/Chandigarh,Haryana, HimachalPradesh, Jammuand Kashmir,Ladakh and Punjab</td>
										<td>Dy. Director (NWR),Staff Selection Commission,Block No. 3, Ground Floor,KendriyaSadan,Sector-9,Chandigarh-160009<a href='http://www.sscnwr.org/' target='_blank'>(www.sscnwr.org)</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th scope="row">Chirala(8011), Guntur(8001), Kakinada (8009), Kurnool(8003), Nellore (8010), Rajahmundry(8004), Tirupati(8006), Vizianagaram(8012), Vijaywada(8008), Vishakhapatnam(8007), Puducherry(8401), Chennai(8201), Coimbatore(8202), Madurai(8204), Salem(8205), Tiruchirapalli(8206), Tirunelveli(8207), Vellore (8208), Hyderabad(8601), Karimnagar (8604), Warangal(8603)</th>
										<td>Southern Region (SR)/ Andhra Pradesh, Puducherry, Tamil Nadu and Telangana.</td>
										<td>Regional Director (SR), Staff Selection Commission, 2nd Floor, EVK Sampath Building, DPI Campus, College Road, Chennai, Tamil Nadu-600006<a href='http://www.sscsr.gov.in/' target='_blank'> (www.sscsr.gov.in) </a>
										</td>
									</tr>
									<tr>
										<th scope="row">Panaji(7801), Ahmedabad(7001), Anand(7011), Gandhinagar(7012), Mehsana(7013), Rajkot(7006), Surat(7007), Vadodara(7002), Amravati(7201), Aurangabad(7202), Jalgaon(7214), Kolhapur(7203), Mumbai(7204), Nagpur(7205), Nanded (7206), Nashik(7207), Pune(7208)</th>
										<td>Western Region (WR)/ Dadra and Nagar Haveli and Daman and Diu, Goa, Gujarat and Maharashtra</td>
										<td>Regional Director (WR), Staff Selection Commission, 1st Floor, South Wing, Pratishtha Bhawan, 101, Maharshi Karve Road, Mumbai, Maharashtra-400020 <a href='http://www.sscwr.net/' target='_blank'> (www.sscwr.net)</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Number of Posts</summary>
  					<div class='exam-1 active' id='exam4'>
						<h2>Number of Posts</h2>
						<p>Tentative vacancies for the examination are listed below. Reservation for all the categories of posts/ services, wherever applicable and admissible, would be as determined and communicated by the Indenting Ministries/ Departments/ Offices/ Cadres, as per extant Government Orders.</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>6506</span>
								</p>
								<h4>Group ‘B’ – Gazetted</h4>
								<p><span>250</span>
								</p>
								<h4>Group ‘B ‘– Non-Gazetted</h4>
								<p><span>3513</span>
								</p>
								<h4>Group ‘C’</h4>
								<p><span>2743</span>
								</p>
							</div>
							<div class='over-view'>
								<h4>*Reservation* Please refer official notification for complete details</h4>
								<p>Scheduled Castes (SC)</p>
								<p>Scheduled Tribes (ST)</p>
								<p>Other Backward Classes (OBC)</p>
								<p>Economically Weaker Sections (EWS)</p>
								<p>Ex-Servicemen (ESM)</p>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Important note</h4>
								<p>Vacancies for ESM are reserved for only Group “C” posts as per extant Government Orders.</p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Eligibility</summary>
  					<div class='exam-1 active' id='exam5'>
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
								<h4>Age Limit (As on 01-01-2021)</h4>
								<p><span>Group ‘C’ : 18 – 27 years</span>
								</p>
								<p><span>Group ‘B’ : 18 – 32 years</span>
								</p>
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
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view' style='width:100%;'>
								<h4>Age Relaxation</h4>
								<div class='para-two'>
									<p>Ex-Serviceman (ESM)</p>
									<p>3 years after deduction of the military service rendered from the actual age as on the closing date.</p>
								</div>
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
							<div class='over-view' style='width:100%;background: linear-gradient(90deg, rgba(214,212,57,0.6615021008403361) 100%, rgba(255,255,255,0.7931547619047619) 100%);'>
								<h4 style='background: linear-gradient(90deg, rgba(214,212,57,1) 0%, rgba(57,92,214,0.9192051820728291) 49%, rgba(139,69,19,0.7651435574229692) 100%);;'>Educational Qualification</h4>
								<div class='para-two'>
									<p>Essential Qualification :</p>
									<p>Bachelor’s Degree</p>
								</div>
								<div class='para-two'>
									<p>Desirable Qualification :</p>
									<p>CA or Cost & Management Accountant or CS or Mcom or MBS or MBA (Finance) or MBE</p>
								</div>
								<div class='para-two'>
									<p>All Others :</p>
									<p>Bachelor’s Degree (final year of graduation can also apply)</p>
								</div>
								<div class='para-two'>
									<p>Junior Statistical Officer :</p>
									<p>Bachelor’s Degree in any subject with at least 60 % in Math at 12th standard level OR Bachelor’s Degree in any subject with Statistics as one of the subject at degree level</p>
								</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>How To Apply</summary>
  					<div class='exam-1 active' id='exam6'>
						<h2>How to apply </h2>
						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Go to <span><a href='https://ssc.nic.in/'target='_blank'> https://ssc.nic.in </a></span> (submitted only online mode)</p>
						<p><i class="far fa-dot-circle"></i>Upload scanned latest photo (not more than 6 months old) (JPEG format (3.5 cm width X 4.5 cm (height) and size 20 – 50 KB)</p>
						<p><i class="far fa-dot-circle"></i>Last date of online form submission : 31-01-2021 (23.30)</p>
						<p><i class="far fa-dot-circle"></i>Students are advised to submit application as early as possible.</p>
						<p><i class="far fa-dot-circle"></i>Before submission of the online application, candidates must check that they have filled correct details in each field of the form. No modification allowed after submission.</p>
						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>Fee Payable : Rs. 100/-</p>
						<p><i class="far fa-dot-circle"></i>Women candidates and candidates belonging to Scheduled Castes (SC), Scheduled Tribes (ST), Persons with Disabilities (PwD) and Ex-servicemen (ESM) eligible for reservation are exempted from payment of fee.</p>
						<p><i class="far fa-dot-circle"></i>Fee can be paid online through BHIM UPI, Net Banking or by using Visa, Mastercard, Maestro, RuPay Credit or Debit cards or in cash at SBI Branches by generating SBI Challan.</p>
						<p><i class="far fa-dot-circle"></i>Online fee can be paid by candidates up to 02-02-2021 (23:30 hours). However, candidates who wish to make cash payment through the challan of SBI, may make payment in cash at the Branches of SBI within the working hours of bank up to 06-02-2021 provided the challan has been generated by them before 04-02-2021 (23:30 hours).</p>
						<p><i class="far fa-dot-circle"></i>Candidates who are not exempted from fee payment must ensure that their fee has been deposited with SSC.</p>
						<p><i class="far fa-dot-circle"></i>If the fee is not received by SSC, status of the Application Form is shown as ‘Incomplete’</p>
						<p><i class="far fa-dot-circle"></i>Fee once paid shall not be refunded under any circumstances nor will it be adjusted against any other examination or selection.</p>
					</div>
  				</details>
  				<details>
  					<summary>Exam Pattern</summary>
  					<div class='exam-1 active' id='exam7'>
						<h2>Exam Pattern</h2>
						<div class='impt-points'>
							<h4>Important points</h4>
							<p>In Tier-II, Paper-I and Paper-II are compulsory for all the posts.</p>
							<p>In Tier-II, Paper-IV will be for only those candidates who are shortlisted in Tier-I for Paper-IV</p>
							<p>Paper-III of Tier-II will be for only those candidates who apply for the posts of Junior Statistical Officer (JSO) in the Ministry of Statistics and Programme Implementation and who are shortlisted in Tier-I for the Posts.</p>
						</div>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-exam-7">Tier</th>
										<th scope="col">Subject</th>
										<th scope="col">No. of Questions</th>
										<th scope="col">Maximum Marks</th>
										<th scope="col">Negative Marking</th>
										<th scope="col">Time Allowed</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>I</th>
										<td>
											<p class='para-exam-pattern'>A. General Intelligence and Reasoning</p>
											<p class='para-exam-pattern'>B. General Awareness</p>
											<p class='para-exam-pattern'>C. Quantitative Aptitude</p>
											<p class='para-exam-pattern'>D. English Comprehension</p>
										</td>
										<td>
											<p>25</p>
											<p>25</p>
											<p>25</p>
											<p>25</p>
										</td>
										<td>
											<p>50</p>
											<p>50</p>
											<p>50</p>
											<p>50</p>
										</td>
										<td>
											<p>0.50</p>
											<p>0.50</p>
											<p>0.50</p>
											<p>0.50</p>
										</td>
										<td style='text-align: left;'>1 hour (1 hour and 20 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</td>
									</tr>
									<tr>
										<th>II</th>
										<td>
											<p class='para-exam-pattern'>Paper-I: Quantitative Abilities</p>
											<p class='para-exam-pattern'>Paper-II: English Language and Comprehension</p>
											<p class='para-exam-pattern'>Paper-III: Statistics</p>
											<p class='para-exam-pattern'>Paper-IV: General Studies (Finance and Economics)</p>
										</td>
										<td>
											<p>100</p>
											<p>100</p>
											<p></p>
											<p></p>
											<p>100</p>
											<p>100</p>
										</td>
										<td>
											<p>200</p>
											<p>200</p>
											<p></p>
											<p></p>
											<p>200</p>
											<p>200</p>
										</td>
										<td>
											<p>0.50</p>
											<p>0.50</p>
											<p></p>
											<p></p>
											<p>0.50</p>
											<p>0.50</p>
										</td>
										<td style='text-align: left;'>2 hours (for each Paper) (2 hours and 40 minutes for the candidates eligible for scribe as per Para-7.1 and 7.2)</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>III</th>
										<td>
											<p class='para-exam-pattern'>Descriptive Paper in English or Hindi (Writing of Essay/ Precis/ Letter/ Application etc.)</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td>
											<p>100</p>
										</td>
										<td>
											<p>0.00</p>
										</td>
										<td style='text-align: left;'>1 hour (1 hour and 20 minutes for the candidates who are eligible for scribe as per Para-7.1 and 7.2)</td>
									</tr>
									<tr>
										<th>IV</th>
										<td>
											<p class='para-exam-pattern'>Descriptive Paper in English or Hindi (Writing of Essay/ Precis/ Letter/ Application etc.)</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td>
											<p>-</p>
										</td>
										<td style='text-align: left;'>-</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
  				</details>
  				<details>
  					<summary>Syllabus</summary>
  					<div class='exam-1 active' id='exam8'>
						<h2>Syllabus</h2>
						<p>The SSC CHSL Tier I will be a computer-based exam conducted online. 60 minutes are allotted to candidates to solve SSC CHSL Tier I paper which consist of 100 questions. Each question carries 2 marks. So, the total marks is 200 marks.</p>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence/ Reasoning Syllabus</li>
									<li>Logical Reasoning</li>
									<li>Alphanumeric Series</li>
									<li>Ranking/ Direction/ Alphabet Test</li>
									<li>Data Sufficiency</li>
									<li>Coded Inequalities</li>
									<li>Seating Arrangement</li>
									<li>Puzzle</li>
									<li>Tabulation</li>
									<li>Syllogism</li>
									<li>Space Orientation, Semantic Classification</li>
									<li>Figural Series, Critical Thinking</li>
									<li>Coding/ Decoding</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Quantitative Ability Syllabus</li>
									<li>Computation of Whole Number, decimal And Fractions, Relationship Between Numbers</li>
									<li>Profit and Loss</li>
									<li>Simple Interest & Compound Interest & Surds & Indices</li>
									<li>Work And Time</li>
									<li>Time And Distance</li>
									<li>Mensuration- Cylinder, Cone, Sphere </li>
									<li>Data Interpretation</li>
									<li>Ratio and Proportion, Percentage</li>
									<li>Number Systems</li>
									<li>Sequences and Series</li>
									<li>Mixtures and Allegations</li>
									<li>Permutation, Combination and Probability</li>
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
									<li>General Policy</li>
									<li>Scientific Research</li>
									<li>-</li>
									<li>-</li>
								</ul>
							</div>
						</div>
					</div>
  				</details>
  				<details>
  					<summary>Selection Process</summary>
  					<div class='exam-1 active' id='exam9'>
						<h2>Selection Process</h2>
						<div class='heading-1'>
							<h4>Audit Officer/ Assistant Accounts Officer </h4>
						</div>
						<div class='row exam9-details'>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Tier-I Computer Based Exam</div>
							</div>
							<div id='pointer2'>
								<div class='pointer-tab' style='border:1px solid #78df67;'>Tier-II Computer Based Exam & Paper-IV
									<br>General Studies (Finance & Economics)</div>
							</div>
						</div>
						<div class='heading-1'>
							<h4>Junior Statistical Officer </h4>
						</div>
						<div class='row exam9-details'>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Tier 1 Computer Based Exam</div>
							</div>
							<div id='pointer2'>
								<div class='pointer-tab  pointer-tab-pad' style='border:1px solid #78df67;'>Tier 2 Computer Based Exam & Paper</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Previous Year Cut-Off</summary>
  					<div class='exam-1 active' id='exam10'>
						<h2>Previous Year Cut-Off</h2>
						<p>SCC CGL cutoff has risen significantly in last five years. The asked questions will be basic only. The key off success to score maximum number. This you can achieve with doing more and more practice.</p>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-start">Category</th>
										<th scope="col">2019-2020</th>
										<th scope="col">2018</th>
										<th scope="col">2017</th>
										<th scope="col">2016</th>
										<th scope="col">2015</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>UR</th>
										<td>180.12237</td>
										<td>170</td>
										<td>148.00</td>
										<td>137.00</td>
										<td>102.25</td>
									</tr>
									<tr>
										<th>OBC</th>
										<td>172.76640</td>
										<td>165.00</td>
										<td>135.50</td>
										<td>125.50</td>
										<td>89.50</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SC</th>
										<td>156.73419</td>
										<td>148.97</td>
										<td>125/50</td>
										<td>114.00</td>
										<td>80.25</td>
									</tr>
									<tr>
										<th>ST</th>
										<td>151.46077</td>
										<td>141.86</td>
										<td>119.00</td>
										<td>103.00</td>
										<td>74.25</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>EWS</th>
										<td>175.31247</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
									<tr>
										<th>ESM</th>
										<td>87.32036</td>
										<td></td>
										<td></td>
										<td>92.00</td>
										<td>67.75</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>OH</th>
										<td>147.08520</td>
										<td>132.90</td>
										<td>111.50</td>
										<td>97.00</td>
										<td>69.00</td>
									</tr>
									<tr>
										<th>HH</th>
										<td>117.49075</td>
										<td>102.45</td>
										<td>75.50</td>
										<td>20.00</td>
										<td>20.00</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>VH</th>
										<td></td>
										<td></td>
										<td></td>
										<td>68.00</td>
										<td>51.00</td>
									</tr>
									<tr>
										<th>Other PwD</th>
										<td>83.70627</td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>
						<img class='w-100' src='img/Picture1.png'>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Detailed Advertisement</summary>
  					<div class='exam-1 active' id='exam11'>
						<h2>Detailed Advertisement</h2>
						<p>Exams detailed official advertisement can be found at below location</p>
						<label class="custom-file-upload">
							<a href='https://ssc.nic.in/SSCFileServer/PortalManagement/UploadedFiles/notice_CGLE_29122020.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
  				</details>
  				<details>
  					<summary>Admit Card</summary>
  					<div class='exam-1 active' id='exam12'>
						<h2>Admit Card</h2>
						<p>Candidates can download the SSC CHSL Admit Card for the Written examination by following the steps below. The candidates who fail to carry the hall ticket to the exam center will not be allowed to sit for the test.</p>
						<div class="table-responsive">
							<table class="table">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-start">Name of the Region</th>
										<th scope="col">SSC CHSL Admit Card Link</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>SSC Central Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC Madhya Pradesh Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SSC Western Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC Southern Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SSC Eastern Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC North Western Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>SSC North Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
									<tr>
										<th>SSC North Eastern Region</th>
										<td><a href='https://ssc.nic.in/Portal/AdmitCard' target='_blank'>click here</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<p>You can follow the steps below to download your admit card</p>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 1: Candidates will have to click on the link which is given above.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 2: A new page will appear on the candidate’s screen. Type in your Application/Registration Number and Password in the credentials section.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 3: Click on the submit button and the Admit Card for the. The written tests will be available to the candidates.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 4: Double-check the details on the admit card and download/printout for further use.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 5: Candidates can alternatively visit the official website and click on the SSC CHSL Admit Card link available on the home page.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Step 6: After doing so, candidates can follow the same procedure as given above to download the admit card.</p>
						</div>
					</div>
  				</details>
  				<details>
  					<summary>Enroll on TestsGenie</summary>
  					<div class='exam-1 active' id='exam13'>
						<h2>Enroll on TestsGenie</h2>
						<div class='impt-btn'>	<a href='signup.php'>Register</a>
							<a href='login.php'>Login</a>
						</div>
						<div class='lastest-exam'>	<a href='#'>SSC Exam<img src='img/Testsgenie-02.png'></a>
							<a href='#'>Banking<img src='img/Testsgenie-02.png'></a>
							<a href='#'>Railway<img src='img/Testsgenie-02.png'></a>
							<a href='#'>Army<img src='img/Testsgenie-02.png'></a>
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