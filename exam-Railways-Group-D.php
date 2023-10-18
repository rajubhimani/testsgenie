<?php include( 'essentials/top.php'); ?>
<?php include( 'includes/header.php'); ?>

<section class='exam-details'>
	<div class='container-fluid'>
		<div class="row">
			<div class='background-pages'>
                <div class='important-links'>
                <h1>RRB Group D exam </h1>
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
							<p>RRB Group D exam is organized by Railway Recruitment Board as common recruitment process for recruitment of Track Maintainer Grade-IV, Helper/Assistant in various technical departments (Electrical, Mechanical and S&T departments), Assistant Pointsman, Level-I posts in other departments of Indian Railways. The railway board did not release any notification in 2020 or 2021 and the current recruitment examination in the process is for the RRB Group D 2019 (RRC 01/2019) notification. It is a national level exam and the minimum required qualification to apply is 12th (+2) and Graduation for different posts. The selection process of Group D comprises 3 stages i.e. Stage I - Computer Based Test, Stage II - Physical Efficiency Test (PET) & Document Verification and Medical Examination. </p>
							<div class='row exam1-details'>
								<div class='over-view'>
									<h4>Registration Date</h4>
									<p><span>12-03-2019 (17.00 hrs) to 12-04-2019 (23.59 hrs)</span> </p>
									<h4>Exam Date</h4>
									<p><span>Stage I (Computer Based Test) – To be announced</span>  </p>
									<p><span>Stage II (Physical Efficiency Test ) – To be announced</span>  </p>
									<h4>Eligibility</h4>
									<p><span>Secondary (class 10th) Passed/ ITI Passed</span></p>
								</div>
								<div class='over-view'>
									<h4>Vacancies</h4>
									<p><span>103769 </span></p>
									<h4>Application fee</h4>
									<div class='para-two'>
										<p>UR/OBC*</p>
										<p><span>Rs.  500/-</span></p>
									</div>
									<div class='para-two'>
										<p>SC/ ST/ Ex-Servicemen/ PwBDs/ Transgender**  </p>
										<p><span>Rs. 250 /-</span></p>
									</div>
									<h4>Salary</h4>
									<p><span>Rs. 22,500-Rs.25,380</span></p>
								</div>
							</div>
							<div class='row exam1-details'>
								<div class='over-view' style="width: 100%;">
										<h4>Exam Pattern- Computer Based Test (CBT)</h4>
										<div class='para-two'>
											<p><span><b>Subject</b></span>
											</p>
											<p><span><b>No. of Questions</b></span>
											</p>
										</div>
										<div class='para-two'>
											<p><span>General Awareness and Current Affairs</span></p>
											<p><span>20</span></p>
										</div>
										<div class='para-two'>
											<p><span>Mathematics</span></p>
											<p><span>25</span></p>
										</div>
										<div class='para-two'>
											<p><span>General Science</span></p>
											<p><span>25</span></p>
										</div>
										<div class='para-two'>
											<p><span>General Intelligence and Reasoning</span>
											</p>
											<p><span>30</span>
											</p>
										</div>
										<div class='para-two'>
											<p><span>Total</span>
											</p>
											<p><span>100</span>
											</p>
										</div>
								</div>
							</div>
							<label class="custom-file-upload">
								<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam2'>
						<h2>Important Dates</h2>
						<p>RRB Group D 2021 Important dates related to this can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>23-02-2019</span>
								</p>
								<h4>Online Application Date </h4>
								<p><span> 12-03-2019 (17.00 hrs) to 12-04-2019 (23.59 hrs)</span>
								</p>
								<h4>Last date of Application payment</h4>
								<p>Online (Net banking / Credit Card/ Debit Card /UPI - <br> April 23 2019 at 23.59 hrs</p>
								<p>SBI Challan - April 18 2019 at 13.00 hrs Post </p>
								<p>Office Challan - April 18 2019 at 13.00 hrs</p>
							</div>
							<div class='over-view'>
								<h4>Final Submission of Applications</h4>
								<p><span>26-04-2019 at 23.59 hrs</span>
								</p>
								<h4>RRB Group D Modification Link</h4>
								<p><span>November 2021</span></p>
								<h4>Computer Based Test Date</h4>
								<p><span>To be announced</span></p>
								<h4>Admit Card Release Date</h4>
								<p><span>To be notified later</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam3'>
						<h2>Locations</h2>
						<p>RRB Group D CBT Exam will be held at various exam centers is below.</p>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-startt'>RRB Region</th>
										<th scope="col"> Cities</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>Andhra Pradesh</th>
										<td>Amalapuram, Anantapur, Bhimavaram, Challapalli, Chirala, Chittoot, Eluru, Gooty, Gudivada, Gudur, Guntur, Kadapa, Kakinada, Kanchikachera, Kavali, Kurnool, Nandyal, Narasapuram, Narasaraopet, Nellore, Ongole, Prodattur, Puttur, Rajahmundry, Rajam, Rajampet, Srikakulam, Surampalem, Tadipalligudem, Tekkali, Tirupathi, Vijayawada, Visakhapatnam, Vuzuabagran</td>
									</tr>
									<tr>
										<th>Assam</th>
										<td>	Dibrugarh, Guwahati, Johrat, Kokrajhar, Silchar, Tezpur </td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Bihar</th>
										<td>Arrah, Aurangabad, Bhagalpur, Bihar Sharif, Darbhanga, Gaya, Hajipur, Muzaffarpur, Patna, Purnea, Samastipur, Siwan</td>
									</tr>
									<tr>
										<th>Chandigarh</th>
										<td>Chandigarh</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Delhi/ NCR</th>
										<td>Ghaziabad, Greater Noida, New Delhi, Noida</td>
									</tr>
									<tr>
										<th>Gujarat</th>
										<td>Ahmedabad, Anand, Bharuch, Bhavnagar, Bhuj, Dadra, Gandhinagar, Godhra, Himatnagar, Jamnagar, Junagadh, Mehsana, Nadiad, Navsarim, Rajkot, Silvassa,Surat, Surendranagar, Vadodara, Valsad, Vapi</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Haryana</th>
										<td>Ambala, Bahadurgarh, Gurgaon, Hisar, Jhajjar, Jind, Kaithal, Karnal, Kurukshetra, Mohindergarh, Panchkula, Panipat, Rewari, Rohtak, Sirsa, Sonipat, Yamuna Nagar</td>
									</tr>
									<tr>
										<th>Karnataka</th>
										<td>Bagalkot, Belgaum, Bellary, Bijapur, Chikballapur, Chikmagalpur, Davanagre, Dharwad, Gadag, Gulbarg, Hassan, Hubli, Kolar, Mangalore, Mysore, Puttur, Shimoga, Surathkal, Tumkur, Udupi, Uttara Kannada</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Maharashtra</th>
										<td>Ahmednagar, Akola, Amaravati, Aurangabad, Beed, Bhandara, Buladena, Chandrapur, Dhule, Ghadchiroli, Gondia, Jalgaon, Latur, Madgaon, Mumbai, Nagpur, Nandurbar, Nashik, Navi Mumbai, Pandharpur, Parbhani, Pimpri, Chinchwad, Pune, Raigad, Ratnagiri, Sangamner, Sangli, Satara, Solapur, Sindhudurg, Thane, Wardha, Washim, Yavatmal</td>
									</tr>
									<tr>
										<th>Punjab</th>
										<td>Abohar, Amritsar, Banur, Barnala, Bhatinda, Fatehgarh, Sahib, Gurdaspur, Hoshiarpur, Jalandhar, Kapurthala, Khanna, Ludhiana, Malout, Moga, Mohali, Muktasar, Nawanshahr, Pathankot, Patiala, Phagwara, Ropar, Sangrur.</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Rajasthan</th>
										<td>Abu Road, Ajmer, Alwar, Bharatpur, Bhilwara, Bikaner, Chittorgarh, Dungarpur, Hanumangarh, Jaipur, Jhunjhunu, Jodhpur, Kota, Pali Marwar, Sikar, Sriganagnagar, Tonk, Udaipur</td>
									</tr>
									<tr>
										<th>Uttar Pradesh</th>
										<td>Agra, Aligarh, Allahabad, Amroha, Banda, Barabanki, Bareilly, Bijnor, Bulandshahr, Faizabad, Gonda, Gorakhpur, Jhansi, Kanpur, Kaushambi, Lucknow, Mathura, Sitapur, Sultanpur, Varanasi</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>West Bengal</th>
										<td>Asansol, Bankura, Berhampore, Bishnupur, Burdwan, Durgapur, Haldia, Hooghly, Kalyani, Kolkata, Greater Kolkata, Krishnagar, Siliguri</td>
									</tr>
								</tbody>
							</table>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam4'>
						<h2>Number of Posts</h2>
						<p>Tentative vacancies for the examination are listed below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>103769</span></p>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class='th-start'>Railway</th>
										<th scope="col">UR</th>
										<th scope="col">SC</th>
										<th scope="col">ST</th>
										<th scope="col">OBC</th>
										<th scope="col">EWS</th>
										<th scope="col">TOTAL</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>Central Railway</th>
										<td>3597</td>
										<td>1398</td>
										<td>759</td>
										<td>2656</td>
										<td>935</td>
										<td>9345</td>
									</tr>
									<tr>
										<th>East Central Railway</th>
										<td>1369</td>
										<td>555</td>
										<td>325</td>
										<td>956</td>
										<td>358</td>
										<td>3563</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>East Coast Railway</th>
										<td>1034</td>
										<td>412</td>
										<td>198</td>
										<td>653</td>
										<td>258</td>
										<td>2555</td>
									</tr>
									<tr>
										<th>Eastern Railway, CLW,  & Metro </th>
										<td>4926</td>
										<td>1461</td>
										<td>775</td>
										<td>2619</td>
										<td>1087</td>
										<td>10873</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>North Central Railway and DLW	</th>
										<td>2080</td>
										<td>678</td>
										<td>317</td>
										<td>1175</td>
										<td>474</td>
										<td>4730</td>
									</tr>
									<tr>
										<th>North Eastern Railway, MCF and RDSO</th>
										<td>1570</td>
										<td>615</td>
										<td>307</td>
										<td>1107</td>
										<td>403</td>
										<td>4002</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>North Western Railway</th>
										<td>2132</td>
										<td>814</td>
										<td>384</td>
										<td>1393</td>
										<td>526</td>
										<td>5249</td>
									</tr>
									<tr>
										<th>Northeast Frontier Railway</th>
										<td>1119</td>
										<td>449</td>
										<td>226</td>
										<td>809</td>
										<td>291</td>
										<td>2894</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Northern Railway, DMF and RCF</th>
										<td>5144</td>
										<td>2017</td>
										<td>1031</td>
										<td>3644</td>
										<td>1317</td>
										<td>13153</td>
									</tr>
									<tr>
										<th>South Central Railway</th>
										<td>3663</td>
										<td>1432</td>
										<td>722</td>
										<td>2577</td>
										<td>934</td>
										<td>9328</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>South East Central Railway</th>
										<td>797</td>
										<td>219</td>
										<td>115</td>
										<td>366</td>
										<td>167</td>
										<td>1664</td>
									</tr>
									<tr>
										<th>South Eastern Railway</th>
										<td>1933</td>
										<td>738</td>
										<td>361</td>
										<td>1305</td>
										<td>482</td>
										<td>4914</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>South Western Railway and RWF</th>
										<td>2745</td>
										<td>1138</td>
										<td>557</td>
										<td>2006</td>
										<td>715</td>
										<td>7167</td>
									</tr>
									<tr>
										<th>Southern Railway and ICF</th>
										<td>4363</td>
										<td>1353</td>
										<td>787</td>
										<td>2118</td>
										<td>958</td>
										<td>9579</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>West Central Railway	</th>
										<td>1596</td>
										<td>633</td>
										<td>308</td>
										<td>1080</td>
										<td>402</td>
										<td>4019</td>
									</tr>
									<tr>
										<th>Western Railway</th>
										<td>4287</td>
										<td>1647</td>
										<td>812</td>
										<td>2914</td>
										<td>1074</td>
										<td>10734</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Total Vacancies</th>
										<th>42355</th>
										<th>15559</th>
										<th>7984</th>
										<th>27378</th>
										<th>10381</th>
										<th>103769</th>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col"class='th-start'>Railway</th>
										<th scope='col'>Ex-SM</th>
										<th scope='col'>CCAA</th>
										<th scope='col'>PWBD</th>
										<th scope='col'>Back-PwBD</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>Central Railway</th>
										<td>1870</td>
										<td>1870</td>
										<td>449</td>
										<td>0</td>
									</tr>
									<tr>
										<th>East Central Railway</th>
										<td>713</td>
										<td>713</td>
										<td>166</td>
										<td>0</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>East Coast Railway</th>
										<td>510</td>
										<td>510</td>
										<td>105</td>
										<td>0</td>
									</tr>
									<tr>
										<th>Eastern Railway, CLW,  & Metro </th>
										<td>2175</td>
										<td>2175</td>
										<td>589</td>
										<td>05</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>North Central Railway and DLW	</th>
										<td>948</td>
										<td>948</td>
										<td>145</td>
										<td>06</td>
									</tr>
									<tr>
										<th>North Eastern Railway, MCF and RDSO</th>
										<td>802</td>
										<td>802</td>
										<td>157</td>
										<td>0</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>North Western Railway	</th>
										<td>1049</td>
										<td>1049</td>
										<td>324</td>
										<td>0</td>
									</tr>
									<tr>
										<th>Northeast Frontier Railway </th>
										<td>575</td>
										<td>575</td>
										<td>144</td>
										<td>0</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Northern Railway, DMF and RCF	</th>
										<td>2630</td>
										<td>2630</td>
										<td>626</td>
										<td>0</td>
									</tr>
									<tr>
										<th>South Central Railway</th>
										<td>1867</td>
										<td>1867</td>
										<td>125</td>
										<td>0</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>South East Central Railway</th>
										<td>333</td>
										<td>333</td>
										<td>84</td>
										<td>0</td>
									</tr>
									<tr>
										<th>South Eastern Railway</th>
										<td>965</td>
										<td>965</td>
										<td>215</td>
										<td>95</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>South Western Railway and RWF</th>
										<td>1433</td>
										<td>1433</td>
										<td>193</td>
										<td>06</td>
									</tr>
									<tr>
										<th>Southern Railway and ICF</th>
										<td>1914</td>
										<td>1914</td>
										<td>222</td>
										<td>0</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>West Central Railway</th>
										<td>804</td>
										<td>804</td>
										<td>226</td>
										<td>0</td>
									</tr>
									<tr>
										<th>Western Railway </th>
										<td>2146</td>
										<td>2146</td>
										<td>556</td>
										<td>0</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Total Vacancies</th>
										<th>20734</th>
										<th>20734</th>
										<th>4326</th>
										<th>112</th>
									</tr>
								</tbody>
							</table>
						</div>
						<p style='color:#9f1717;'>* Vacancies under CCAA are applicable to Apprentices trained in Railway Establishments only</p>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam5'>
						<h2>Eligibility</h2>
						<p>Candidates, intending to apply for RRB Group D should ensure that they fulfill the minimum eligibility criteria specified by RRB in this advertisement: </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Nationality</h4>
								<p>A candidate must be either:</p>
								<p>a citizen of India or</p>
								<p>a subject of Nepal or</p>
								<p>a subject of Bhutan or</p>
								<p>a Tibetan refugee who came over to India, before the 1st January, 1962 with the intention of permanently settling in India, or</p>
								<p>a person of Indian origin who has migrated from Pakistan, Burma, Sri Lanka, East African Countries of Kenya, Uganda, the United Republic of Tanzania, Zambia, Malawi, Zaire, Ethiopia and Vietnam with the intention of permanently settling in India.</p>
								<p>Provided that a candidate belonging to categories (b), (c), (d) and (e) above, shall be a person ,in whose favor a certificate of eligibility has been issued by the Government of India.</p>
							</div>
							<div class='over-view'>
								<h4>Age Limit (as  on 01.07.2019) </h4>
								<div class='para-two'>
									<p><b>Age Limit</b></p>
									<p><span><b>18 – 33 years</b></span></p>
								</div>
								<div class='para-two'>
									<p>Born not before</p>
									<p><span>02-07-1986 (UR)<br>02-07-1983 (OBC)<br>02-07-1981 (SC/ST)</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Born not after</p>
									<p><span>01.07.2001 For all community / categories</span>
									</p>
								</div>
								<h4>Age Relaxation</h4>
								<p>Candidates belonging to communities/categories in the table at para 5.1 shall be eligible for age relaxation as applicable.</p>
								<p>Note. The date of birth limits for SC/ST & OBCNCL given in this table includes community age relaxation.</p>
							</div>
						</div>
						<div class="table-responsive">
						<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col"class="th-startt">RRB Department</th>
										<th scope="col">Post</th>
										<th scope="col">Minimum Educational Qualification</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>Electrical </th>
										<td>ASSISTANT LOCO SHED (ELECTRICAL)<br>ASSISTANT OPERATIONS (ELECTRICAL)<br>ASSISTANT TL & AC<br>ASSISTANT TL & AC (WORKSHOP)<br>ASSISTANT TRD</td>
										<td class='td-box'rowspan="7"><b>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </b> </td>
									</tr>
									<tr>
										<th>Engineering </th>
										<td>ASSISTANT BRIDGE<br>ASSISTANT TRACK MACHINE<br>ASSISTANT WORKS<br>TRACK MAINTAINER GRADE IV</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Mechanical</th>
										<td>ASSISTANT (WORKSHOP)<br>ASSISTANT C&W<br>ASSISTANT LOCO SHED (DIESEL)</td>
									</tr>
									<tr>
										<th>Medical </th>
										<td>HOSPITAL ASSISTANT</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Stores</th>
										<td>ASSISTANT DEPOT (STORES)</td>
									</tr>
									<tr>
										<th>Signal & Telecom</th>
										<td>ASSISTANT SIGNAL & TELECOM</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Traffic</th>
										<td>ASSISTANT POINTSMAN</td>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>MEDICAL STANDARDS FOR THE POSTS</h4>
						<div class="table-responsive">
						<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col"class="th-startt">Medical standard</th>
										<th scope="col"class="th-start">General fitness</th>
										<th scope="col">Visual acuity</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th><span>A-2</span></th>
										<td>Physically fit in all respects</td>
										<td>Distant Vision: 6/9, 6/9 without glasses (No fogging test).<br>Near Vision: Sn 0.6, 0.6 without glasses and Must pass test for Colour Vision, Binocular Vision, Night Vision and Myopic vision. </td>
									</tr>
									<tr>
										<th><span>A-3</span></th>
										<td>Physically fit in all respects </td>
										<td>Distant Vision: 6/9, 6/9 with or without glasses (power of lenses not to exceed 2D).<br>Near Vision: Sn 0.6, 0.6 with or without glasses and Must pass test for Colour Vision, Binocular Vision, Night Vision and Myopic vision.</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th><span>B-1</span></th>
										<td>Physically fit in all respects </td>
										<td>Distant Vision: 6/9, 6/12 with or without glasses (power of lenses not to exceed 4D), <br>Near Vision: Sn. 0.6, 0.6 with or without glasses when reading or close work is required and Must pass test for Colour Vision, Binocular Vision, Night Vision, Mesopic vision etc. </td>
									</tr>
									<tr>
										<th><span>B-2</span></th>
										<td>Physically fit in all respects</td>
										<td>Distance Vision: 6/9, 6/12 with or without glasses (Power of lenses not to exceed 4D).<br>Near Vision: Sn 0.6, 0.6 with or without glasses when reading or close work is required and must pass test for Field of Vision(Binocular Vision) etc.</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th><span>C-1</span></th>
										<td>Physically fit in all respects</td>
										<td>Distant Vision: 6/12, 6/18 with or without glasses.<br>Near Vision: Sn. 0.6, 0.6 with or without glasses when reading or close work is required.</td>
									</tr>
									<tr>
										<th><span>C-2</span></th>
										<td>Physically fit in all respects</td>
										<td>Distant Vision: 6/12, nil with or without glasses.<br>Near Vision: Sn 0.6 combined with or without glasses where reading or close work is required.</td>
									</tr>
								</tbody>
							</table>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam6'>
						<h2>How to apply </h2>
						<p>Application are open online only from  01.03.2019 (16.00 hrs) to 31.03.2019 (23.59 hrs)</p>
						<h4>Steps</h4>
						<p><i class="far fa-dot-circle"></i>Candidates are required to visit the official <a href='https://www.rrbcdg.gov.in/'target='_blank'>&nbsp RRB website &nbsp </a> to register.</p>
						<p><i class="far fa-dot-circle"></i>Go to the RRB website of your respective region</p>
						<p><i class="far fa-dot-circle"></i>Click on “Click here to Apply” button</p>
						<p><i class="far fa-dot-circle"></i>Click on “NEW REGISTRATION” button to start your application form.</p>
						<p><i class="far fa-dot-circle"></i>Fill Out the three sections of the Application Form: Personal Details, Uploading Photograph & Signature & Education Qualifications</p>
						<p><i class="far fa-dot-circle"></i>Pay your Application Fee for RRB Group D Exam.</p>
						<h4>Application Fee :</h4>
						<p><i class="far fa-dot-circle"></i>UR/OBC* : Rs. 500/-  </p>
						<p><i class="far fa-dot-circle"></i>SC/ST/Ex-Servicemen/PwBDs/Transgender** : Rs. 250 /-  </p>
						<p><i class="far fa-dot-circle"></i>* Out of this fee, Rs. 400/- will be refunded duly deducting bank charges, on appearing in 1st Stage CBT</p>
						<p><i class="far fa-dot-circle"></i>* This fee of Rs. 250/- will be refunded duly deducting Bank Charges as applicable on appearing for 1st Stage CBT</p>
						<p><i class="far fa-dot-circle"></i>* The fee can be paid through online modes such as internet banking, credit/debit cards and UPI. The Bank Transaction charges incurred in the course of Online Payment of application fees will be borne by the candidates.</p>
					</div>
					<div class='exam-1' id='exam7'>
						<h2>Exam Pattern</h2>
						<p>There will be negative marking and 1/3 mark shall be deducted for each wrong answer.</p>
						<h4>Stage-I CBT </h4>
						<div class="table-responsive">
							<table class="table table-1">
								<thead class="top-th">
									<tr>
										<th scope="col" class="th-start">Name of Tests</th>
										<th scope="col"class="th-start">No. of Questions </th>
										<th scope="col">Max. Marks</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
								<tbody>
									<tr style='background: #fffdfd;'>
										<th>General Awareness and Current Affairs</th>
										<td>20</td>
										<td>20</td>
										<td class='td-box'rowspan="5"style='text-align: center;'><b>90 minutes<br> 120 minutes for PWD</b> </td>
									</tr>
									<tr>
										<th>General Science</th>
										<td>25</td>
										<td>25</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Mathematics</th>
										<td>25</td>
										<td>25</td>
									</tr>
									<tr>
										<th>General Intelligence and Reasoning</th>
										<td>30</td>
										<td>30</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<th>Total</th>
										<th>100</th>
										<th>100</th>
									</tr>
								</tbody>
							</table>
						</div>
						<h4>Physical Efficiency Test (PET)</h4>
						<p>Based on the merit of the candidates in the CBT, candidates shall be called for PET Three times the community wise total vacancy of the Posts notified against RRBs/RRCs. However, Railways reserve the right to increase/decrease this ratio as required to ensure availability of adequate/reasonable number of candidates for all the notified posts. Passing Physical Efficiency Test (PET) is mandatory and the same will be qualifying in nature. The criterion for PET is as under:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4> Male Candidates</h4>
								<p>You should be able to lift and carry 35 kg of weight for a distance of 100 meters in 2 minutes in one chance without putting the weight down.</p>
								<p>You should be able to run for a distance of 1000 meters in 4 minutes and 15 seconds in one chance.</p>
							</div>
							<div class='over-view'>
								<h4>Female Candidates</h4>
								<p>You should be able to lift and carry 20 kg of weight for a distance of 100 meters in 2 minutes in one chance without putting the weight down.</p>
								<p>You should be able to run for a distance of 1000 meters in 5 minutes and 40 seconds in one chance.</p>
							</div>
						</div>
						<h4>Notes:</h4>
							<p><i class="far fa-dot-circle"></i>The Persons with Benchmark Disabilities(PwBD) as specified in Para 11.0 are exempted from appearing for PET. However, after qualifying in the CBT, such candidates will have to pass the medical examination prescribed for PwBD. </p>
							<p><i class="far fa-dot-circle"></i>It is the candidates’ responsibility to ensure that they are medically fit enough to attempt the PET.Railways will not be responsible for any injury/harm suffered by candidates as a result of participating in the PET.</p>
					</div>
					<div class='exam-1' id='exam8'>
						<h2>Syllabus</h2>
						<h4> Stage I CBT EXAM DETAILED SYLLABUS</h4>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Mathematics</li>
									<li>Simplification </li>
									<li>Interest</li>
									<li>Percentage</li>
									<li>Ratio & Proportion</li>
									<li>Average</li>
									<li>Problems on Ages</li>
									<li>Speed, Time & Distance</li>
									<li>Algebra</li>
									<li>Profit & Loss</li>
									<li>Number Series</li>
									<li>Mensuration</li>
									<li>Time & Work</li>
									<li>Mixture Problems</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence & Reasoning</li>
									<li>Classification</li>
									<li>Analogy</li>
									<li>Number & Alphabet Series</li>
									<li>Coding-Decoding</li>
									<li>Blood Relations</li>
									<li>Clock & Calendar</li>
									<li>Ordering & Ranking</li>
									<li>Directions & Distances</li>
									<li>Word Formation</li>
									<li>Non-Verbal Reasoning</li>
									<li>Missing Number</li>
									<li>Venn Diagram</li>
									<li>Puzzle</li>
								</ul>
							</div>
						</div>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Awareness Syllabus</li>
									<li>Science & Technology </li>
									<li>Sports</li>
									<li>Culture, Personalities</li>
									<li>Economics</li>
									<li>Politics </li>
									<li>Any other subject of importance</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Science</li>
									<li>Physics, Chemistry, and Biology of 10th standard level (as per NCERT textbooks)</li>
								</ul>
							</div>
						</div>
					</div>
					<div class='exam-1' id='exam9'>
						<h2>Selection Process</h2>
						<div class='heading-1'>
							<h4>RRB Group D</h4>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>1.</h4>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Stage-I Computer based test 100 marks</div>
							</div>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>2.</h4>
							<div id='pointer2'>
								<div class='pointer-tab' style='border:1px solid #78df67;'>Stage-II Physical Efficiency Test Qualifying in nature  </div>
							</div>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>3.</h4>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Medical Fitness Test</div>
							</div>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>4.</h4>
							<div id='pointer2'>
								<div class='pointer-tab' style='border:1px solid #78df67;height: 55px;'>Documents Verification</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam10'>
						<h2>Previous Year Cut-Off</h2>
						<h4><strong>RRB Group D Cut-Off 2018-19</strong><br></h4><p>CEN 02/2018 (Level – 1 Posts of 7th CPC Pay Matrix)</p><p>Normalized cut off marks of candidates shortlisted for Physical Efficiency Test (PET)</p>
						<div class="table-responsive">
						<table class="table table-1">
							<tbody><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for AJMER</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>73.73073</td><td>70.10507</td><td>63.37549</td><td>60.62978</td></tr><tr><td>Ex-servicemen</td><td>40.20650</td><td>30.02539</td><td>30.47971</td><td>30.35898</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.34260</td><td>30.43260</td><td>32.58236</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for ALLAHABAD</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC/NCL</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>74.57579</td><td>69.78740</td><td>62.92684</td><td>50.12207</td></tr><tr><td>Ex-servicemen</td><td>40.00081</td><td>30.04608</td><td>32.55328</td><td>33.86401</td></tr><tr><td>CCAA in Railways</td><td>41.16811</td><td>30.34260</td><td>30.71590</td><td>36.44781</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for AHEMDABAD</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>71.86468</td><td>66.77575</td><td>60.85283</td><td>57.85161</td></tr><tr><td>Ex-servicemen</td><td>40.00159</td><td>30.04044</td><td>30.38026</td><td>———–</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.34260</td><td>30.34260</td><td>30.34260</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for BENGALURU</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>62.01964</td><td>56.60285</td><td>49.65250</td><td>48.78492</td></tr><tr><td>Ex-servicemen</td><td>40.23986</td><td>30.06408</td><td>30.04608</td><td>35.40327</td></tr><tr><td>CCAA in Railways</td><td>42.59145</td><td>31.08919</td><td>30.71590</td><td>32.20906</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for BHOPAL</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>75.03355</td><td>70.75118</td><td>63.51720</td><td>58.61426</td></tr><tr><td>Ex-servicemen</td><td>40.06859</td><td>30.05624</td><td>30.33041</td><td>0.00000</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.34260</td><td>30.34260</td><td>30.71590</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for BILASPUR</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>70.22887</td><td>66.07970</td><td>59.50198</td><td>52.73928</td></tr><tr><td>Ex-servicemen</td><td>40.04764</td><td>30.07200</td><td>31.01847</td><td>30.44739</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.34260</td><td>30.71590</td><td>30.34260</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for BHUBANESHWAR</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>73.86689</td><td>69.13033</td><td>60.82752</td><td>55.83808</td></tr><tr><td>Ex-servicemen</td><td>40.04823</td><td>30.40393</td><td>30.51015</td><td>34.32121</td></tr><tr><td>CCAA in Railways</td><td>40.79482</td><td>30.34260</td><td>31.46248</td><td>31.46248</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for CHANDIGARH&nbsp;</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>75.07613</td><td>68.55507</td><td>34.39158</td><td>55.13337</td></tr><tr><td>Ex-servicemen</td><td>40.00611</td><td>30.05769</td><td>30.08656</td><td>36.19895</td></tr><tr><td>CCAA in Railways</td><td>40.42153</td><td>30.34260</td><td>30.34260</td><td>32.95565</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for CHENNAI</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>71.53120</td><td>68.63312</td><td>61.56750</td><td>55.32595</td></tr><tr><td>Ex-servicemen</td><td>40.14442</td><td>30.00703</td><td>30.13570</td><td>32.63244</td></tr><tr><td>CCAA in Railways</td><td>41.54140</td><td>30.34260</td><td>30.33041</td><td>30.71590</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for GORAKHPUR</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>73.90623</td><td>69.27577</td><td>60.92724</td><td>54.35642</td></tr><tr><td>Ex-servicemen</td><td>40.16889</td><td>30.06729</td><td>32.36991</td><td>00.00000</td></tr><tr><td>CCAA in Railways</td><td>40.79482</td><td>30.34260</td><td>31.46248</td><td>31.08919</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for GUWAHATI</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>77.09933</td><td>72.22287</td><td>67.39113</td><td>57.07288</td></tr><tr><td>Ex-servicemen</td><td>40.86204</td><td>30.45276</td><td>31.28844</td><td>31.46806</td></tr><tr><td>CCAA in Railways</td><td>40.42153</td><td>30.34260</td><td>30.34260</td><td>31.83577</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for KOLKATA</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>80.57238</td><td>71.77651</td><td>71.60480</td><td>55.76072</td></tr><tr><td>Ex-servicemen</td><td>40.01368</td><td>30.16633</td><td>30.00703</td><td>0.00000</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.34260</td><td>31.08919</td><td>0.00000</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for MUMBAI&nbsp;</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>67.96106</td><td>63.08909</td><td>58.88383</td><td>52.58975</td></tr><tr><td>Ex-servicemen</td><td>40.16796</td><td>30.08656</td><td>30.00360</td><td>37.62862</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.30418</td><td>30.34260</td><td>30.71590</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for PATNA</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>77.00350</td><td>72.51232</td><td>61.64224</td><td>58.20304</td></tr><tr><td>Ex-servicemen</td><td>40.19724</td><td>30.05174</td><td>33.04063</td><td>30.54074</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.34260</td><td>30.71590</td><td>37.43518</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for RANCHI</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>76.30354</td><td>71.44115</td><td>62.41570</td><td>58.68276</td></tr><tr><td>Ex-servicemen</td><td>40.09680</td><td>30.18282</td><td>34.04212</td><td>30.07665</td></tr><tr><td>CCAA in Railways</td><td>40.04823</td><td>30.34260</td><td>30.34260</td><td>30.34260</td></tr><tr style='background: #fffdfd;'><td rowspan="4"class="td-box"><strong>RRB Group D Cut-Off for SECUNDERABAD</strong></td><td><strong>Category</strong></td><td><strong>UR</strong></td><td><strong>OBC</strong></td><td><strong>SC</strong></td><td><strong>ST</strong></td></tr><tr><td>Community</td><td>69.79887</td><td>65.69349</td><td>59.96240</td><td>56.68657</td></tr><tr><td>Ex-servicemen</td><td>40.00159</td><td>30.00360</td><td>30.39356</td><td>31.07579</td></tr><tr><td>CCAA in Railways</td><td>40.42153</td><td>30.34260</td><td>30.34260</td><td>31.94469</td></tr></tbody></table></div>
					</div>
					<div class='exam-1' id='exam11'>
						<h2>Detailed Advertisement</h2>
						<p>RRB Group D Official advertisement-</p>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
					</div>
					<div class='exam-1' id='exam12'>
						<h2>Call Letters/ Admit Card</h2>
						<h4>e-CALL LETTERS/ HALL TICKET for CBTs, PET, Document Verification:</h4>
						<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>SMS and email messages will be sent to all eligible candidates about the e-Call letter and upload details on their registered mobile number and email ID. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>No call letter will be sent by post.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates should regularly visit the official websites of RRB as there can be failure in delivery of SMS/E-mail to the candidates due to reasons beyond control of RRBs.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Download e-Call letter along with Annexure V(D) (declaration for scribe, wherever applicable) from the RRBs/RRCs websites about 10 days before the date of the CBT/PET/Document Verification (as applicable). Call letter will not be sent to candidates by post.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates must bring their e- Call letter along with a valid Photo ID (name, date of birth and photo on ID should match with the details furnished in the online application) along with one color photograph (of size 35 mm x 45 mm). </p>
							<p>Warning: Candidates will have to write the paragraph of Self-Declaration, Sign and affix LTI at the venue of the CBT/PET/DV (as applicable) in the presence of the invigilator at the Examination hall/Venue ONLY and hand over the same to the invigilator before the conclusion of the examination. Candidates writing the self-declaration paragraph and/or Signing in CAPITAL/BLOCK/DISJOINTED letters will be rejected.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website:<a href='https://www.rrbcdg.gov.in/'target='_blank'> www.rrbcdg.gov.in</a> </b></p>
						</div>
						<h4>A. Details of Various RRBs and their Wesite Address are indicated below:</h4>
						<div class='exam1-details'>
							<div class="table-responsive">
						 	<table class="table table-1">
						  	<thead class="top-th">
							   <tr>
							    <th width="140"><strong>Name of RRB and Railway</strong></th>
							    <th width="119"><strong>Website Address and Telephone Numbers</strong></th>
							   </tr>
						   </thead>
						   <tbody>
						   <tr style='background: #fffdfd;'>
						    <td  class="td-box">Ahmedabad (WR)</td>
						    <td class="td-box"><p>07922940858</p><a href='https://www.rrbahmedabad.gov.in/'target='_blank'>www.rrbahmedabad.gov.in</a></td>
						   </tr>
						   <tr>
						    <td class="td-box">&nbsp;Ajmer (NWR)</td>
						    <td class="td-box"><p>0145-2425230</p> <a href='http://www.rrbajmer.gov.in/'target='_blank'>www.rrbajmer.gov.in</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Allahabad (NCR)</td>
						    <td class="td-box"><p>0532 - 2224531</p><a href='http://rrbald.nic.in/'target='_blank'>rrbald.nic.in</a></td>
						   </tr>
						   <tr>
						    <td class="td-box">Bangalore (SWR)</td>
						    <td class="td-box"><p>080-23330378</p> <a href='https://www.rrbbnc.gov.in/'target='_blank'>https://www.rrbbnc.gov.in/</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Bhopal (WCR)</td>
						    <td class="td-box"><p>0755-2746660</p> <a href='https://rrbbhopal.gov.in/'target='_blank'>rrbbhopal.gov.in</a></td>
						   </tr>
						   <tr>
						    <td class="td-box">Bhubaneshwar (ECoR)</td>
						    <td class="td-box"><p>0674-2303015</p> <a href='https://www.rrbbbs.gov.in/'target='_blank'>www.rrbbbs.gov.in</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Bilaspur (SECR)</td>
						    <td class="td-box"><p>07752-247291</p> <a href='http://www.rrbbilaspur.gov.in/'target='_blank'>www.rrbbilaspur.gov.in</a></td>
						   </tr>
						   <tr>
						    <td class="td-box">Chandigarh (NR)</td>
						    <td class="td-box"><p>0172-2730093</p> <a href='https://www.rrbcdg.gov.in/'target='_blank'>www.rrbcdg.gov.in</a></td>
						   </tr>
						   </tbody>
						 	</table>
							</div>
							<div class="table-responsive">
						 	<table class="table table-1">
						  	<thead class="top-th">
							   <tr>
							    <th width="140"><strong>Name of RRB and Railway</strong></th>
							    <th width="119"><strong>Website Address and Telephone Numbers</strong></th>
							   </tr>
						   </thead>
						   <tbody>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Chennai (SR)</td>
						    <td class="td-box"><p>044-28275323</p> <a href='https://www.rrbchennai.gov.in/'target='_blank'>www.rrbchennai.gov.in</a></td>
						   </tr>
						   <tr>
						    <td class="td-box">Gorakhpur (NER)</td>
						    <td class="td-box"><p>0551-2201209</p><a href='http://rrbgkp.gov.in/'target='_blank'>rrbgkp.gov.in</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Guwahati (NFR)</td>
						    <td class="td-box"><p>0361-2540815</p> <a href='https://www.rrbguwahati.gov.in/'target='_blank'>www.rrbguwahati.gov.in</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Kolkata (ER)</td>
						    <td class="td-box"><p>033-25430108</p> <a href='https://rrbkolkata.gov.in/'target='_blank'>rrbkolkata.gov.in</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Mumbai (CR)</td>
						    <td class="td-box"><p>022-23090422</p><a href='http://www.rrbmumbai.gov.in/'target='_blank'>www.rrbmumbai.gov.in</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Patna (ECR)</td>
						    <td class="td-box"><p>0612-2677680</p> <a href='https://www.rrbpatna.gov.in/'target='_blank'>www.rrbpatna.gov.in</a></td>
						   </tr>
						   <tr>
						    <td class="td-box">Ranchi (SER)</td>
						    <td class="td-box"><p>0651-2462429</p> <a href='https://www.rrbranchi.gov.in/'target='_blank'>www.rrbranchi.gov.in</a></td>
						   </tr>
						   <tr style='background: #fffdfd;'>
						    <td class="td-box">Secunderabad (SCR)</td>
						    <td class="td-box"><p>040-27821663</p> <a href='https://rrbsecunderabad.nic.in/'target='_blank'>rrbsecunderabad.nic.in</a></td>
						   </tr>
						  </tbody>
						 	</table>
							</div>
						</div>
						<h4>Details of various RRCs and their Website Address are indicated below:-</h4>
						<div class='exam1-details'>
							<div class="table-responsive">
							 	<table class="table table-1">
							  	<thead class="top-th">
								   <tr>
								    <th width="140"><strong>RRC</strong></th>
								    <th width="119"><strong>Website Address</strong></th>
								   </tr>
							   </thead>
							   <tbody>
							   <tr style='background: #fffdfd;'>
							    <td  class="td-box">Central Railway</td>
							    <td class="td-box"><a href='https://www.rrccr.com/'target='_blank'>www.rrccr.com</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Eastern Railway</td>
							    <td class="td-box"><a href='https://er.indianrailways.gov.in/'target='_blank'>er.indianrailways.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">East Central Railway</td>
							    <td class="td-box"><a href='https://www.rrcecr.gov.in/'target='_blank'>www.rrcecr.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">East Coast Railway</td>
							    <td class="td-box"><a href='https://eastcoastrail.indianrailways.gov.in/'target='_blank'>eastcoastrail.indianrailways.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Northern Railway</td>
							    <td class="td-box"><a href='http://www.rrcnr.org/'target='_blank'>www.rrcnr.org</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">North Central Railway</td>
							    <td class="td-box"><a href='https://www.rrcpryj.org/'target='_blank'>www.rrcald.org</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">North Eastern Railway</td>
							    <td class="td-box"><a href='https://ner.indianrailways.gov.in/'target='_blank'>www.ner.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Northeast Frontier Railway</td>
							    <td class="td-box"><a href='https://nfr.indianrailways.gov.in/'target='_blank'>www.nfr.indianrailways.gov.in</a></td>
							   </tr>
							   </tbody>
							 	</table>
							</div>
							<div class="table-responsive">
							 	<table class="table table-1">
							  	<thead class="top-th">
								   <tr>
								    <th width="140"><strong>RRC</strong></th>
								    <th width="119"><strong>Website Address</strong></th>
								   </tr>
							   </thead>
							   <tbody>
							   <tr style='background: #fffdfd;'>
							    <td  class="td-box">North Western Railway</td>
							    <td class="td-box"><a href='https://nwr.indianrailways.gov.in/'target='_blank'>www.nwr.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Southern Railway</td>
							    <td class="td-box"><a href='https://www.rrcmas.in/'target='_blank'>www.rrcmas.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">South central railway</td>
							    <td class="td-box"><a href='https://scr.indianrailways.gov.in/'target='_blank'>www.scr.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">South Eastern Railway</td>
							    <td class="td-box"><a href='https://ser.indianrailways.gov.in/'target='_blank'>ser.indianrailways.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">South East Central Railway</td>
							    <td class="td-box"><a href='https://secr.indianrailways.gov.in/'target='_blank'>www.secr.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">South Western Railway</td>
							    <td class="td-box"><a href='https://www.rrchubli.in/'target='_blank'>www.rrchubli.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Western Railway</td>
							    <td class="td-box"><a href='https://www.rrc-wr.com/'target='_blank'>www.rrc-wr.com</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">West Central Railway</td>
							    <td class="td-box"><a href='https://wcr.indianrailways.gov.in/'target='_blank'>www.wcr.indianrailways.gov.in</a></td>
							   </tr>
							   </tbody>
							 	</table>
							</div>
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
							<p>RRB Group D exam is organized by Railway Recruitment Board as common recruitment process for recruitment of Track Maintainer Grade-IV, Helper/Assistant in various technical departments (Electrical, Mechanical and S&T departments), Assistant Pointsman, Level-I posts in other departments of Indian Railways. The railway board did not release any notification in 2020 or 2021 and the current recruitment examination in the process is for the RRB Group D 2019 (RRC 01/2019) notification. It is a national level exam and the minimum required qualification to apply is 12th (+2) and Graduation for different posts. The selection process of Group D comprises 3 stages i.e. Stage I - Computer Based Test, Stage II - Physical Efficiency Test (PET) & Document Verification and Medical Examination. </p>
							<div class='row exam1-details'>
								<div class='over-view'>
									<h4>Registration Date</h4>
									<p><span>12-03-2019 (17.00 hrs) to 12-04-2019 (23.59 hrs)</span> </p>
									<h4>Exam Date</h4>
									<p><span>Stage I (Computer Based Test) – To be announced</span>  </p>
									<p><span>Stage II (Physical Efficiency Test ) – To be announced</span>  </p>
									<h4>Eligibility</h4>
									<p><span>Secondary (class 10th) Passed/ ITI Passed</span></p>
								</div>
								<div class='over-view'>
									<h4>Vacancies</h4>
									<p><span>103769 </span></p>
									<h4>Application fee</h4>
									<div class='para-two'>
										<p>UR/OBC*</p>
										<p><span>Rs.  500/-</span></p>
									</div>
									<div class='para-two'>
										<p>SC/ ST/ Ex-Servicemen/ PwBDs/ Transgender**  </p>
										<p><span>Rs. 250 /-</span></p>
									</div>
									<h4>Salary</h4>
									<p><span>Rs. 22,500-Rs.25,380</span></p>
								</div>
							</div>
							<div class='row exam1-details'>
								<div class='over-view' style="width: 100%;">
										<h4>Exam Pattern- Computer Based Test (CBT)</h4>
										<div class='para-two'>
											<p><span><b>Subject</b></span>
											</p>
											<p><span><b>No. of Questions</b></span>
											</p>
										</div>
										<div class='para-two'>
											<p>General Awareness and Current Affairs</p>
											<p><span>20</span></p>
										</div>
										<div class='para-two'>
											<p>Mathematics</p>
											<p><span>25</span></p>
										</div>
										<div class='para-two'>
											<p>General Science</p>
											<p><span>25</span></p>
										</div>
										<div class='para-two'>
											<p>General Intelligence and Reasoning</p>
											<p><span>30</span>
											</p>
										</div>
										<div class='para-two'>
											<p>Total</p>
											<p><span>100</span>
											</p>
										</div>
								</div>
							</div>
							<label class="custom-file-upload">
								<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
							</label>
							<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>Important Dates</summary>
  					<div class='exam-1 active' id='exam2'>
							<p>RRB Group D 2021 Important dates related to this can be found below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Notification Date</h4>
								<p><span>23-02-2019</span>
								</p>
								<h4>Online Application Date </h4>
								<p><span> 12-03-2019 (17.00 hrs) to 12-04-2019 (23.59 hrs)</span>
								</p>
								<h4>Last date of Application payment</h4>
								<p>Online (Net banking / Credit Card/ Debit Card /UPI - <br> April 23 2019 at 23.59 hrs</p>
								<p>SBI Challan - April 18 2019 at 13.00 hrs Post </p>
								<p>Office Challan - April 18 2019 at 13.00 hrs</p>
							</div>
							<div class='over-view'>
								<h4>Final Submission of Applications</h4>
								<p><span>26-04-2019 at 23.59 hrs</span>
								</p>
								<h4>RRB Group D Modification Link</h4>
								<p><span>November 2021</span></p>
								<h4>Computer Based Test Date</h4>
								<p><span>To be announced</span></p>
								<h4>Admit Card Release Date</h4>
								<p><span>To be notified later</span></p>
								<h4>Result Date</h4>
								<p><span>To be notified later</span></p>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>Locations</summary>
  					<div class='exam-1 active' id='exam3'>
  						<p>RRB Group D CBT Exam will be held at various exam centers is below.</p>
  							<div class='row exam1-details'>
									<div class='over-view'>
										<h4>Andhra Pradesh</h4>
										<p>Amalapuram, Anantapur, Bhimavaram, Challapalli, Chirala, Chittoot, Eluru, Gooty, Gudivada, Gudur, Guntur, Kadapa, Kakinada, Kanchikachera, Kavali, Kurnool, Nandyal, Narasapuram, Narasaraopet, Nellore, Ongole, Prodattur, Puttur, Rajahmundry, Rajam, Rajampet, Srikakulam, Surampalem, Tadipalligudem, Tekkali, Tirupathi, Vijayawada, Visakhapatnam, Vuzuabagran</p>
										<h4>Assam</h4>
										<p>	Dibrugarh, Guwahati, Johrat, Kokrajhar, Silchar, Tezpur </p>
										<h4>Bihar</h4>
										<p>Arrah, Aurangabad, Bhagalpur, Bihar Sharif, Darbhanga, Gaya, Hajipur, Muzaffarpur, Patna, Purnea, Samastipur, Siwan</p>
										<h4>Chandigarh</h4>
										<p><span>Chandigarh</span></p>
										<h4>Delhi/ NCR</h4>
										<p>Ghaziabad, Greater Noida, New Delhi, Noida</p>
										<h4>Gujarat</h4>
										<p>Ahmedabad, Anand, Bharuch, Bhavnagar, Bhuj, Dadra, Gandhinagar, Godhra, Himatnagar, Jamnagar, Junagadh, Mehsana, Nadiad, Navsarim, Rajkot, Silvassa,Surat, Surendranagar, Vadodara, Valsad, Vapi</p>
										<h4>Haryana</h4>
										<p>Ambala, Bahadurgarh, Gurgaon, Hisar, Jhajjar, Jind, Kaithal, Karnal, Kurukshetra, Mohindergarh, Panchkula, Panipat, Rewari, Rohtak, Sirsa, Sonipat, Yamuna Nagar</p>
										<h4>Karnataka</h4>
										<p>Bagalkot, Belgaum, Bellary, Bijapur, Chikballapur, Chikmagalpur, Davanagre, Dharwad, Gadag, Gulbarg, Hassan, Hubli, Kolar, Mangalore, Mysore, Puttur, Shimoga, Surathkal, Tumkur, Udupi, Uttara Kannada</p>
										<h4>Maharashtra</h4>
										<p>Ahmednagar, Akola, Amaravati, Aurangabad, Beed, Bhandara, Buladena, Chandrapur, Dhule, Ghadchiroli, Gondia, Jalgaon, Latur, Madgaon, Mumbai, Nagpur, Nandurbar, Nashik, Navi Mumbai, Pandharpur, Parbhani, Pimpri, Chinchwad, Pune, Raigad, Ratnagiri, Sangamner, Sangli, Satara, Solapur, Sindhudurg, Thane, Wardha, Washim, Yavatmal</p>
										<h4>Punjab</h4>
										<p>Abohar, Amritsar, Banur, Barnala, Bhatinda, Fatehgarh, Sahib, Gurdaspur, Hoshiarpur, Jalandhar, Kapurthala, Khanna, Ludhiana, Malout, Moga, Mohali, Muktasar, Nawanshahr, Pathankot, Patiala, Phagwara, Ropar, Sangrur.</p>
										<h4>Rajasthan</h4>
										<p>Abu Road, Ajmer, Alwar, Bharatpur, Bhilwara, Bikaner, Chittorgarh, Dungarpur, Hanumangarh, Jaipur, Jhunjhunu, Jodhpur, Kota, Pali Marwar, Sikar, Sriganagnagar, Tonk, Udaipur</p>
										<h4>Uttar Pradesh</h4>
										<p>Agra, Aligarh, Allahabad, Amroha, Banda, Barabanki, Bareilly, Bijnor, Bulandshahr, Faizabad, Gonda, Gorakhpur, Jhansi, Kanpur, Kaushambi, Lucknow, Mathura, Sitapur, Sultanpur, Varanasi</p>
										<h4>West Bengal</h4>
										<p>Asansol, Bankura, Berhampore, Bishnupur, Burdwan, Durgapur, Haldia, Hooghly, Kalyani, Kolkata, Greater Kolkata, Krishnagar, Siliguri</p>
									</div>
								</div>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>Number of Posts</summary>
  					<div class='exam-1 active' id='exam4'>
  						<p>Tentative vacancies for the examination are listed below-  </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Total Vacancies</h4>
								<p><span>103769</span></p>
							</div>
						</div>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Central Railway</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>3597</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>1398</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>759</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>2656</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>935</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>9345</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>1870</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>1870</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>448</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>East Central Railway	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>1369</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>555</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>325</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>956</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>358</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>3563</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>713</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>713</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>166</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>East Coast Railway	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>1034</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	412	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>198	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>653</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>	258</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>	2555</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>	510</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>	510</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>	105</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>Eastern Railway, CLW,  & Metro	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>4926	</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>1461	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>775	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>2619	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>1087	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>10873	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>2175</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>	2175</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>	589</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>	05</span></p>
										</div>
										<h4>North Central Railway and DLW</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>	2080</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	678</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>	317</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>	1175</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>	474	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>4730</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>	948	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>948</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>	145</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>	06</span></p>
										</div>
										<h4>North Eastern Railway, MCF and RDSO	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>1570</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	615</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>	307	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>1107</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>	403	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>4002	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>802</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>	802</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>	157</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>	0</span></p>
										</div>
										<h4>North Western Railway</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>	2132</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	814	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>384	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>1393</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>	526</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>	5249</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>	1049	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>1049	</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>324</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>Northeast Frontier Railway</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>	1119</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	449	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>226	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>809	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>291	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>2894</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>	575	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>575</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>	144	</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>Northern Railway, DMF and RCF	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>5144	</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>2017	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>1031	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>3644	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>1317	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>13153</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>	2630	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>2630	</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>626</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>South Central Railway	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>3663	</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>1432	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>722</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>	2577	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>934</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>	9328	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>1867	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>1867	</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>125</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>South East Central Railway	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>797	</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>219	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>115	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>366	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>167	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>1664	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>333</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>333</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>84</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>South Eastern Railway	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>1933	</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>738	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>361	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>1305	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>482	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>4914	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>965	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>965	</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>215	</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>95</span></p>
										</div>
										<h4>South Western Railway and RWF	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>2745</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	1138</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>	557	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>2006	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>715</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>	7167	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>1433	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>1433	</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>193	</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>06</span></p>
										</div>
										<h4>Southern Railway and ICF</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>	4363</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	1353</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>	787	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>2118	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>958</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>	9579	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>1914</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>1914</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>222</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>West Central Railway	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>1596	</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>633	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>308</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>	1080</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>	402	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>4019	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>804	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>804</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>	226	</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>Western Railway	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>4287	</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>1647</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>	812	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>2914</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>	1074	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>10734	</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>2146	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>2146</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>	556	</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>0</span></p>
										</div>
										<h4>Total Vacancies	</h4>
										<div class='para-two'>
											<p><span>UR</span></p>
											<p><span>42355</span></p>
										</div>
										<div class='para-two'>
											<p><span>SC</span></p>
											<p><span>	15559	</span></p>
										</div>
										<div class='para-two'>
											<p><span>ST</span></p>
											<p><span>7984	</span></p>
										</div>
										<div class='para-two'>
											<p><span>OBC</span></p>
											<p><span>27378	</span></p>
										</div>
										<div class='para-two'>
											<p><span>EWS</span></p>
											<p><span>10381	</span></p>
										</div>
										<div class='para-two'>
											<p><span>TOTAL</span></p>
											<p><span>103769</span></p>
										</div>
										<div class='para-two'>
											<p><span>Ex-SM</span></p>
											<p><span>	20734	</span></p>
										</div>
										<div class='para-two'>
											<p><span>CCAA</span></p>
											<p><span>20734	</span></p>
										</div>
										<div class='para-two'>
											<p><span>PWBD</span></p>
											<p><span>4326</span></p>
										</div>
										<div class='para-two'>
											<p><span>	Back-PwBD</span></p>
											<p><span>	112</span></p>
										</div>
									</div>
								</div>
						<p style='color:#9f1717;'>* Vacancies under CCAA are applicable to Apprentices trained in Railway Establishments only</p>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Eligibility</summary>
  					<div class='exam-1 active' id='exam5'>
							<p>Candidates, intending to apply for RRB Group D should ensure that they fulfill the minimum eligibility criteria specified by RRB in this advertisement: </p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Nationality</h4>
								<p>A candidate must be either:</p>
								<p>a citizen of India or</p>
								<p>a subject of Nepal or</p>
								<p>a subject of Bhutan or</p>
								<p>a Tibetan refugee who came over to India, before the 1st January, 1962 with the intention of permanently settling in India, or</p>
								<p>a person of Indian origin who has migrated from Pakistan, Burma, Sri Lanka, East African Countries of Kenya, Uganda, the United Republic of Tanzania, Zambia, Malawi, Zaire, Ethiopia and Vietnam with the intention of permanently settling in India.</p>
								<p>Provided that a candidate belonging to categories (b), (c), (d) and (e) above, shall be a person ,in whose favor a certificate of eligibility has been issued by the Government of India.</p>
							</div>
							<div class='over-view'>
								<h4>Age Limit (as  on 01.07.2019) </h4>
								<div class='para-two'>
									<p><b>Age Limit</b></p>
									<p><span><b>18 – 33 years</b></span></p>
								</div>
								<div class='para-two'>
									<p>Born not before</p>
									<p><span>02-07-1986 (UR)<br>02-07-1983 (OBC)<br>02-07-1981 (SC/ST)</span>
									</p>
								</div>
								<div class='para-two'>
									<p>Born not after</p>
									<p><span>01.07.2001 For all community / categories</span>
									</p>
								</div>
								<h4>Age Relaxation</h4>
								<p>Candidates belonging to communities/categories in the table at para 5.1 shall be eligible for age relaxation as applicable.</p>
								<p>Note. The date of birth limits for SC/ST & OBCNCL given in this table includes community age relaxation.</p>
							</div>
						</div>
						<div class='over-view'>
							<h4>Electrical </h4>
								<p>ASSISTANT LOCO SHED (ELECTRICAL)<br>
									ASSISTANT OPERATIONS (ELECTRICAL)<br>
									ASSISTANT TL & AC<br>
									ASSISTANT TL & AC (WORKSHOP)<br>
									ASSISTANT TRD</p>
								<p>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </p>
								<h4>Engineering </h4>
								<p>ASSISTANT BRIDGE<br>ASSISTANT TRACK MACHINE<br>ASSISTANT WORKS<br>TRACK MAINTAINER GRADE IV</p>
								<p>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </p>
							<h4>Mechanical</h4>
								<p>ASSISTANT (WORKSHOP)<br>ASSISTANT C&W<br>ASSISTANT LOCO SHED (DIESEL)</p>
								<p>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </p>
							<h4>Medical </h4>
								<p>HOSPITAL ASSISTANT</p>
								<p>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </p>
							<h4>Stores</h4>
								<p>ASSISTANT DEPOT (STORES)</p>
								<p>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </p>
							<h4>Signal & Telecom</h4>
								<p>ASSISTANT SIGNAL & TELECOM</p>
								<p>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </p>
							<h4>Traffic</h4>
								<p>ASSISTANT POINTSMAN</p>
								<p>10th pass (OR) ITI from institutions recognised by NCVT/SCVT (or) equivalent (OR) National Apprenticeship Certificate (NAC) granted by NCVT </p>
						</div>
						<h4>MEDICAL STANDARDS FOR THE POSTS</h4>
						<div class='over-view'>
							<h4>Medical standard A-2</h4>
							<p>Physically fit in all respects</p>
							<p>Distant Vision: 6/9, 6/9 without glasses (No fogging test).</p>
							<p>Near Vision: Sn 0.6, 0.6 without glasses and Must pass test for Colour Vision, Binocular Vision, Night Vision and Myopic vision. </p>
							<h4>Medical standard A-3</h4>
							<p>Physically fit in all respects</p>
							<p>Distant Vision: 6/9, 6/9 with or without glasses (power of lenses not to exceed 2D).</p>
							<p>Near Vision: Sn 0.6, 0.6 with or without glasses and Must pass test for Colour Vision, Binocular Vision, Night Vision and Myopic vision.</p>
							<h4>Medical standard B-1</h4>
							<p>Physically fit in all respects</p>
							<p>Distant Vision: 6/9, 6/12 with or without glasses (power of lenses not to exceed 4D),</p>
							<p>Near Vision: Sn. 0.6, 0.6 with or without glasses when reading or close work is required and Must pass test for Colour Vision, Binocular Vision, Night Vision, Mesopic vision etc.</p>
							<h4>Medical standard B-2</h4>
							<p>Physically fit in all respects</p>
							<p>Distance Vision: 6/9, 6/12 with or without glasses (Power of lenses not to exceed 4D).</p>
							<p>Near Vision: Sn 0.6, 0.6 with or without glasses when reading or close work is required and must pass test for Field of Vision(Binocular Vision) etc.</p>
							<h4>Medical standard C-1</h4>
							<p>Physically fit in all respects</p>
							<p>Distant Vision: 6/12, 6/18 with or without glasses.</p>
							<p>Near Vision: Sn. 0.6, 0.6 with or without glasses when reading or close work is required.</p>
							<h4>Medical standard C-2</h4>
							<p>Physically fit in all respects</p>
							<p>Distant Vision: 6/12, nil with or without glasses.</p>
							<p>Near Vision: Sn 0.6 combined with or without glasses where reading or close work is required.</p>
						</div>

						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
						</div>
  				</details>
  				<details>
  					<summary>How To Apply</summary>
  					<div class='exam-1 active' id='exam6'>
	  					<p>Application are open online only from  01.03.2019 (16.00 hrs) to 31.03.2019 (23.59 hrs)</p>
							<h4>Steps</h4>
							<p><i class="far fa-dot-circle"></i>Candidates are required to visit the official  RRB website to register.</p>
							<p><i class="far fa-dot-circle"></i>Go to the RRB website of your respective region</p>
							<p><i class="far fa-dot-circle"></i>Click on “Click here to Apply” button</p>
							<p><i class="far fa-dot-circle"></i>Click on “NEW REGISTRATION” button to start your application form.</p>
							<p><i class="far fa-dot-circle"></i>Fill Out the three sections of the Application Form: Personal Details, Uploading Photograph & Signature & Education Qualifications</p>
							<p><i class="far fa-dot-circle"></i>Pay your Application Fee for RRB Group D Exam.</p>
							<h4>Application Fee :</h4>
							<p><i class="far fa-dot-circle"></i>UR/OBC* : Rs. 500/-  </p>
							<p><i class="far fa-dot-circle"></i>SC/ST/Ex-Servicemen/PwBDs/Transgender** : Rs. 250 /-  </p>
							<p><i class="far fa-dot-circle"></i>* Out of this fee, Rs. 400/- will be refunded duly deducting bank charges, on appearing in 1st Stage CBT</p>
							<p><i class="far fa-dot-circle"></i>* This fee of Rs. 250/- will be refunded duly deducting Bank Charges as applicable on appearing for 1st Stage CBT</p>
							<p><i class="far fa-dot-circle"></i>* The fee can be paid through online modes such as internet banking, credit/debit cards and UPI. The Bank Transaction charges incurred in the course of Online Payment of application fees will be borne by the candidates.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Exam Pattern</summary>
  					<div class='exam-1 active' id='exam7'>
  						<p>There will be negative marking and 1/3 mark shall be deducted for each wrong answer.</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4>Stage-I CBT </h4>
								<div class='para-two'>
									<p><span><b>Name of Tests</b></span></p>
									<p><span><b>No. of Questions</b></span></p>
									<p><span><b>Max. Marks</b></span></p>
								</div>
								<div class='para-two'>
									<p>General Awareness and Current Affairs</p>
									<p><span>20</span></p>
									<p><span>20</span></p>
								</div>
								<div class='para-two'>
									<p>General Science</p>
									<p><span>25</span></p>
									<p><span>25</span></p>
								</div>
								<div class='para-two'>
									<p>Mathematics</p>
									<p><span>25</span></p>
									<p><span>25</span></p>
								</div>
								<div class='para-two'>
									<p>General Intelligence and Reasoning</p>
									<p><span>30</span></p>
									<p><span>30</span></p>
								</div>
								<div class='para-two'>
									<p>Total</p>
									<p><span>100</span></p>
									<p><span>100</span></p>
								</div>
								<h4>Stage-I CBT Exam Duration</h4>
								<p><span>90 minutes 120 minutes for PWD</span></p>
							</div>
						</div>
						<h4>Physical Efficiency Test (PET)</h4>
						<p>Based on the merit of the candidates in the CBT, candidates shall be called for PET Three times the community wise total vacancy of the Posts notified against RRBs/RRCs. However, Railways reserve the right to increase/decrease this ratio as required to ensure availability of adequate/reasonable number of candidates for all the notified posts. Passing Physical Efficiency Test (PET) is mandatory and the same will be qualifying in nature. The criterion for PET is as under:</p>
						<div class='row exam1-details'>
							<div class='over-view'>
								<h4> Male Candidates</h4>
								<p>You should be able to lift and carry 35 kg of weight for a distance of 100 meters in 2 minutes in one chance without putting the weight down.</p>
								<p>You should be able to run for a distance of 1000 meters in 4 minutes and 15 seconds in one chance.</p>
							</div>
							<div class='over-view'>
								<h4>Female Candidates</h4>
								<p>You should be able to lift and carry 20 kg of weight for a distance of 100 meters in 2 minutes in one chance without putting the weight down.</p>
								<p>You should be able to run for a distance of 1000 meters in 5 minutes and 40 seconds in one chance.</p>
							</div>
						</div>
						<h4>Notes:</h4>
							<p><i class="far fa-dot-circle"></i>The Persons with Benchmark Disabilities(PwBD) as specified in Para 11.0 are exempted from appearing for PET. However, after qualifying in the CBT, such candidates will have to pass the medical examination prescribed for PwBD. </p>
							<p><i class="far fa-dot-circle"></i>It is the candidates’ responsibility to ensure that they are medically fit enough to attempt the PET.Railways will not be responsible for any injury/harm suffered by candidates as a result of participating in the PET.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Syllabus</summary>
  					<div class='exam-1 active' id='exam8'>
  						<h4> Stage I CBT EXAM DETAILED SYLLABUS</h4>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>Mathematics</li>
									<li>Simplification </li>
									<li>Interest</li>
									<li>Percentage</li>
									<li>Ratio & Proportion</li>
									<li>Average</li>
									<li>Problems on Ages</li>
									<li>Speed, Time & Distance</li>
									<li>Algebra</li>
									<li>Profit & Loss</li>
									<li>Number Series</li>
									<li>Mensuration</li>
									<li>Time & Work</li>
									<li>Mixture Problems</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Intelligence & Reasoning</li>
									<li>Classification</li>
									<li>Analogy</li>
									<li>Number & Alphabet Series</li>
									<li>Coding-Decoding</li>
									<li>Blood Relations</li>
									<li>Clock & Calendar</li>
									<li>Ordering & Ranking</li>
									<li>Directions & Distances</li>
									<li>Word Formation</li>
									<li>Non-Verbal Reasoning</li>
									<li>Missing Number</li>
									<li>Venn Diagram</li>
									<li>Puzzle</li>
								</ul>
							</div>
						</div>
						<div class='row syll-row'>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Awareness Syllabus</li>
									<li>Science & Technology </li>
									<li>Sports</li>
									<li>Culture, Personalities</li>
									<li>Economics</li>
									<li>Politics </li>
									<li>Any other subject of importance</li>
								</ul>
							</div>
							<div class='syll-box'>
								<ul>
									<li class='sylltop-li'>General Science</li>
									<li>Physics, Chemistry, and Biology of 10th standard level (as per NCERT textbooks)</li>
								</ul>
							</div>
						</div>
  					</div>
  				</details>
  				<details>
  					<summary>Selection Process</summary>
  					<div class='exam-1 active' id='exam9'>
  						<div class='heading-1'>
							<h4>RRB Group D</h4>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>1.</h4>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Stage-I Computer based test 100 marks</div>
							</div>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>2.</h4>
							<div id='pointer2'>
								<div class='pointer-tab' style='border:1px solid #78df67;'>Stage-II Physical Efficiency Test Qualifying in nature  </div>
							</div>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>3.</h4>
							<div id='pointer1'>
								<div class='pointer-tab pointer-tab-pad' style='border:1px solid #52d2c8;'>Medical Fitness Test</div>
							</div>
						</div>
						<div class='row exam9-details'style='justify-content: left; padding: 10px;'>
							<h4>4.</h4>
							<div id='pointer2'>
								<div class='pointer-tab' style='border:1px solid #78df67;height:55px;'>Documents Verification</div>
							</div>
						</div>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Previous Year Cut-Off</summary>
  					<div class='exam-1 active' id='exam10'>
  						<h4><strong>RRB Group D Cut-Off 2018-19</strong><br></h4><p>CEN 02/2018 (Level – 1 Posts of 7th CPC Pay Matrix)</p><p>Normalized cut off marks of candidates shortlisted for Physical Efficiency Test (PET)</p>
								<div class="table-responsive">
								<table class="table table-1">
									<tbody>
										<tr style='background: #fffdfd;'>
											<td><h4>RRB Group D Cut-Off for AJMER</h4></td>
										</tr>
										<tr>
											<td>Category : Community</td>
											<td>UR : 73.73073</td>
											<td>OBC : 70.10507</td>
											<td>SC : 63.37549</td>
											<td>ST : 60.62978</td>
										</tr>
										<tr>
											<td>Category : Ex-servicemen</td>
											<td>UR : 40.20650</td>
											<td>OBC : 30.02539</td>
											<td>SC : 30.47971</td>
											<td>ST : 30.35898</td>
										</tr>
										<tr>
											<td>Category : CCAA in Railways</td>
											<td>UR : 40.04823</td>
											<td>OBC : 30.34260</td>
											<td>SC : 30.43260</td>
											<td>ST : 32.58236</td>
										</tr>
										<tr style='background: #fffdfd;'>
											<td><h4>RRB Group D Cut-Off for ALLAHABAD</h4></td>
										</tr>
										<tr>
											<td>Category : Community</td>
											<td>UR : 74.57579</td>
											<td>OBC : 69.78740</td>
											<td>SC : 62.92684</td>
											<td>ST : 50.12207</td>
										</tr>
										<tr>
											<td>Category : Ex-servicemen</td>
											<td>UR : 40.00081</td>
											<td>OBC : 30.04608</td>
											<td>SC : 32.55328</td>
											<td>ST : 33.86401</td>
										</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 41.16811</td>
										<td>OBC : 30.34260</td>
										<td>SC : 30.71590</td>
										<td>ST : 36.44781</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for AHEMDABAD</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 71.86468</td>
										<td>OBC : 66.77575</td>
										<td>SC : 60.85283</td>
										<td>ST : 57.85161</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.00159</td>
										<td>OBC : 30.04044</td>
										<td>SC : 30.38026</td>
										<td>ST : ———–</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.04823</td>
										<td>OBC : 30.34260</td>
										<td>SC : 30.34260</td>
										<td>ST : 30.34260</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for BENGALURU</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 62.01964</td>
										<td>OBC : 56.60285</td>
										<td>SC : 49.65250</td>
										<td>ST : 48.78492</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.23986</td>
										<td>OBC : 30.06408</td>
										<td>SC : 30.04608</td>
										<td>ST : 35.40327</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 42.59145</td>
										<td>OBC : 31.08919</td>
										<td>SC : 30.71590</td>
										<td>ST : 32.20906</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for BHOPAL</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 75.03355</td>
										<td>OBC : 70.75118</td>
										<td>SC : 63.51720</td>
										<td>ST : 58.61426</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.06859</td>
										<td>OBC : 30.05624</td>
										<td>SC : 30.33041</td>
										<td>ST : 0.00000</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.04823</td>
										<td>OBC : 30.34260</td>
										<td>SC : 30.34260</td>
										<td>ST : 30.71590</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for BILASPUR</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 70.22887</td>
										<td>OBC : 66.07970</td>
										<td>SC : 59.50198</td>
										<td>ST : 52.73928</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.04764</td>
										<td>OBC : 30.07200</td>
										<td>SC : 31.01847</td>
										<td>ST : 30.44739</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.04823</td>
										<td>OBC : 30.34260</td>
										<td>SC : 30.71590</td>
										<td>ST : 30.34260</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for BHUBANESHWAR</h4></td>
									<tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 73.86689</td>
										<td>OBC : 69.13033</td>
										<td>SC : 60.82752</td>
										<td>ST : 55.83808</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.04823</td>
										<td>OBC : 30.40393</td>
										<td>SC : 30.51015</td>
										<td>ST : 34.32121</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.79482</td>
										<td>OBC : 30.34260</td>
										<td>SC : 31.46248</td>
										<td>ST : 31.46248</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for CHANDIGARH</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 75.07613</td>
										<td>OBC : 68.55507</td>
										<td>SC : 34.39158</td>
										<td>ST : 55.13337</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.00611</td>
										<td>OBC : 30.05769</td>
										<td>SC : 30.08656</td>
										<td>ST : 36.19895</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.42153</td>
										<td>OBC : 30.34260</td>
										<td>SC : 30.34260</td>
										<td>ST : 32.95565</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for CHENNAI</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 71.53120</td>
										<td>OBC : 68.63312</td>
										<td>SC : 61.56750</td>
										<td>ST : 55.32595</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.14442</td>
										<td>OBC : 30.00703</td>
										<td>SC : 30.13570</td>
										<td>ST : 32.63244</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 41.54140</td>
										<td>OBC : 30.34260</td>
										<td>SC : 30.33041</td>
										<td>ST : 30.71590</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for GORAKHPUR</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 73.90623</td>
										<td>OBC : 69.27577</td>
										<td>SC : 60.92724</td>
										<td>ST : 54.35642</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.16889</td>
										<td>OBC : 30.06729</td>
										<td>SC : 32.36991</td>
										<td>ST : 00.00000</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.79482</td>
										<td>OBC : 30.34260</td>
										<td>SC : 31.46248</td>
										<td>ST : 31.08919</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td><h4>RRB Group D Cut-Off for GUWAHATI</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 77.09933</td>
										<td>OBC : 72.22287</td>
										<td>SC : 67.39113</td>
										<td>ST : 57.07288</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.86204</td>
										<td>OBC : 30.45276</td>
										<td>SC : 31.28844</td>
										<td>ST : 31.46806</td>
									</tr>
										<tr><td>Category : CCAA in Railways</td>
										<td>40.4UR : 2153</td>
										<td>30.3OBC : 4260</td>
										<td>30.3SC : 4260</td>
										<td>31.8ST : 3577</td>
									</tr>
									<tr style='background: #fffdfd;'>
										<td>
											<h4>RRB Group D Cut-Off for KOLKATA</h4>
										</td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 80.57238</td>
										<td>OBC : 71.77651</td>
										<td>SC : 71.60480</td>
										<td>ST : 55.76072</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.01368</td>
										<td>OBC : 30.16633</td>
										<td>SC : 30.00703</td>
										<td>ST : 0.00000</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.04823</td>
										<td>OBC : 30.34260</td>
										<td>SC : 31.08919</td>
										<td>ST : 0.00000</td>
									</tr>
									<tr style='background: #fffdfd;'>
											<td><h4>RRB Group D Cut-Off for MUMBAI&nbsp;</h4></td>
									</tr>
									<tr>
										<td>Category : Community</td>
										<td>UR : 67.96106</td>
										<td>OBC : 63.08909</td>
										<td>SC : 58.88383</td>
										<td>ST : 52.58975</td>
									</tr>
									<tr>
										<td>Category : Ex-servicemen</td>
										<td>UR : 40.16796</td>
										<td>OBC : 30.08656</td>
										<td>SC : 30.00360</td>
										<td>ST : 37.62862</td>
									</tr>
									<tr>
										<td>Category : CCAA in Railways</td>
										<td>UR : 40.04823</td>
										<td>OBC : 30.30418</td>
										<td>SC : 30.34260</td>
										<td>ST : 30.71590</td>
									</tr>
								<tr style='background: #fffdfd;'>
									<td><h4>RRB Group D Cut-Off for PATNA</h4></td>
								</tr>
								<tr>
									<td>Category : Community</td>
									<td>UR : 77.00350</td>
									<td>OBC : 72.51232</td>
									<td>SC : 61.64224</td>
									<td>ST : 58.20304</td>
								</tr>
								<tr>
									<td>Category : Ex-servicemen</td>
									<td>UR : 40.19724</td>
									<td>OBC : 30.05174</td>
									<td>SC : 33.04063</td>
									<td>ST : 30.54074</td>
								</tr>
								<tr>
									<td>Category : CCAA in Railways</td>
									<td>UR : 40.04823</td>
									<td>OBC : 30.34260</td>
									<td>SC : 30.71590</td>
									<td>ST : 37.43518</td>
								</tr>
								<tr style='background: #fffdfd;'>
									<td><h4>RRB Group D Cut-Off for RANCHI</h4></td>
								</tr>
								<tr>
									<td>Category : Community</td>
									<td>UR : 76.30354</td>
									<td>OBC : 71.44115</td>
									<td>SC : 62.41570</td>
									<td>ST : 58.68276</td>
								</tr>
								<tr>
									<td>Category : Ex-servicemen</td>
									<td>UR : 40.09680</td>
									<td>OBC : 30.18282</td>
									<td>SC : 34.04212</td>
									<td>ST : 30.07665</td>
								</tr>
								<tr>
									<td>Category : CCAA in Railways</td>
									<td>UR : 40.04823</td>
									<td>OBC : 30.34260</td>
									<td>SC : 30.34260</td>
									<td>ST : 30.34260</td>
								</tr>
								<tr style='background: #fffdfd;'>
									<td><h4>RRB Group D Cut-Off for SECUNDERABAD</h4></td>
								</tr>
								<tr>
									<td>Category : Community</td>
									<td>UR : 69.79887</td>
									<td>OBC : 65.69349</td>
									<td>SC : 59.96240</td>
									<td>ST : 56.68657</td>
								</tr>
								<tr>
									<td>Category : Ex-servicemen</td>
									<td>UR : 40.00159</td>
									<td>OBC : 30.00360</td>
									<td>SC : 30.39356</td>
									<td>ST : 31.07579</td>
								</tr>
								<tr>
									<td>Category : CCAA in Railways</td>
									<td>UR : 40.42153</td>
									<td>OBC : 30.34260</td>
									<td>SC : 30.34260</td>
									<td>ST : 31.94469</td>
								</tr>
							</tbody>
						</table>
						</div>
		  			</div>
  				</details>
  				<details>
  					<summary>Detailed Advertisement</summary>
  					<div class='exam-1 active' id='exam11'>
  						<p>RRB Group D Official advertisement-</p>
						<label class="custom-file-upload">
							<a href='https://www.rrbcdg.gov.in/uploads/Corrigendum%20&%20amendment%20No.-3%20RRC%2001-2019.pdf' target="_blank"> <i class="fa fa-cloud-download-alt" aria-hidden="true"></i> Download Official Notification</a>
						</label>
						<p>Disclaimer – This presentation is for information purposes only. For detailed information please refer to the official notification.</p>
  					</div>
  				</details>
  				<details>
  					<summary>Admit Card</summary>
  					<div class='exam-1 active' id='exam12'>
  						<h4>e-CALL LETTERS/ HALL TICKET for CBTs, PET, Document Verification:</h4>
							<div class='getadmit-step'>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>SMS and email messages will be sent to all eligible candidates about the e-Call letter and upload details on their registered mobile number and email ID. </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>No call letter will be sent by post.  </p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates should regularly visit the official websites of RRB as there can be failure in delivery of SMS/E-mail to the candidates due to reasons beyond control of RRBs.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Download e-Call letter along with Annexure V(D) (declaration for scribe, wherever applicable) from the RRBs/RRCs websites about 10 days before the date of the CBT/PET/Document Verification (as applicable). Call letter will not be sent to candidates by post.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i>Candidates must bring their e- Call letter along with a valid Photo ID (name, date of birth and photo on ID should match with the details furnished in the online application) along with one color photograph (of size 35 mm x 45 mm). </p>
							<p>Warning: Candidates will have to write the paragraph of Self-Declaration, Sign and affix LTI at the venue of the CBT/PET/DV (as applicable) in the presence of the invigilator at the Examination hall/Venue ONLY and hand over the same to the invigilator before the conclusion of the examination. Candidates writing the self-declaration paragraph and/or Signing in CAPITAL/BLOCK/DISJOINTED letters will be rejected.</p>
							<p><i class="far fa-dot-circle" aria-hidden="true"></i><b>Authorized Website:<a href='https://www.rrbcdg.gov.in/'target='_blank'> www.rrbcdg.gov.in</a> </b></p>
						</div>
						<h4>A. Details of Various RRBs and their Wesite Address are indicated below:</h4>
							<div class="table-responsive">
							 	<table class="table table-1">
							  	<thead class="top-th">
								   <tr>
								    <th width="140"><strong>Name of RRB and Railway</strong></th>
								    <th width="119"><strong>Website Address and Telephone Numbers</strong></th>
								   </tr>
							   </thead>
							   <tbody>
							   <tr style='background: #fffdfd;'>
							    <td  class="td-box">Ahmedabad (WR)</td>
							    <td class="td-box"><p>07922940858</p><a href='https://www.rrbahmedabad.gov.in/'target='_blank'>www.rrbahmedabad.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">&nbsp;Ajmer (NWR)</td>
							    <td class="td-box"><p>0145-2425230</p> <a href='http://www.rrbajmer.gov.in/'target='_blank'>www.rrbajmer.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Allahabad (NCR)</td>
							    <td class="td-box"><p>0532 - 2224531</p><a href='http://rrbald.nic.in/'target='_blank'>rrbald.nic.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Bangalore (SWR)</td>
							    <td class="td-box"><p>080-23330378</p> <a href='https://www.rrbbnc.gov.in/'target='_blank'>https://www.rrbbnc.gov.in/</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Bhopal (WCR)</td>
							    <td class="td-box"><p>0755-2746660</p> <a href='https://rrbbhopal.gov.in/'target='_blank'>rrbbhopal.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Bhubaneshwar (ECoR)</td>
							    <td class="td-box"><p>0674-2303015</p> <a href='https://www.rrbbbs.gov.in/'target='_blank'>www.rrbbbs.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Bilaspur (SECR)</td>
							    <td class="td-box"><p>07752-247291</p> <a href='http://www.rrbbilaspur.gov.in/'target='_blank'>www.rrbbilaspur.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Chandigarh (NR)</td>
							    <td class="td-box"><p>0172-2730093</p> <a href='https://www.rrbcdg.gov.in/'target='_blank'>www.rrbcdg.gov.in</a></td>
							   </tr>
							   </tbody>
							 	</table>
							</div>
							<div class="table-responsive">
							 	<table class="table table-1">
							  	<thead class="top-th">
								   <tr>
								    <th width="140"><strong>Name of RRB and Railway</strong></th>
								    <th width="119"><strong>Website Address and Telephone Numbers</strong></th>
								   </tr>
							   </thead>
							   <tbody>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Chennai (SR)</td>
							    <td class="td-box"><p>044-28275323</p> <a href='https://www.rrbchennai.gov.in/'target='_blank'>www.rrbchennai.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Gorakhpur (NER)</td>
							    <td class="td-box"><p>0551-2201209</p><a href='http://rrbgkp.gov.in/'target='_blank'>rrbgkp.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Guwahati (NFR)</td>
							    <td class="td-box"><p>0361-2540815</p> <a href='https://www.rrbguwahati.gov.in/'target='_blank'>www.rrbguwahati.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Kolkata (ER)</td>
							    <td class="td-box"><p>033-25430108</p> <a href='https://rrbkolkata.gov.in/'target='_blank'>rrbkolkata.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Mumbai (CR)</td>
							    <td class="td-box"><p>022-23090422</p><a href='http://www.rrbmumbai.gov.in/'target='_blank'>www.rrbmumbai.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Patna (ECR)</td>
							    <td class="td-box"><p>0612-2677680</p> <a href='https://www.rrbpatna.gov.in/'target='_blank'>www.rrbpatna.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Ranchi (SER)</td>
							    <td class="td-box"><p>0651-2462429</p> <a href='https://www.rrbranchi.gov.in/'target='_blank'>www.rrbranchi.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Secunderabad (SCR)</td>
							    <td class="td-box"><p>040-27821663</p> <a href='https://rrbsecunderabad.nic.in/'target='_blank'>rrbsecunderabad.nic.in</a></td>
							   </tr>
							  </tbody>
							 	</table>
							</div>
							<h4>Details of various RRCs and their Website Address are indicated below:-</h4>
							<div class="table-responsive">
							 	<table class="table table-1">
							  	<thead class="top-th">
								   <tr>
								    <th width="140"><strong>RRC</strong></th>
								    <th width="119"><strong>Website Address</strong></th>
								   </tr>
							   </thead>
							   <tbody>
							   <tr style='background: #fffdfd;'>
							    <td  class="td-box">Central Railway</td>
							    <td class="td-box"><a href='https://www.rrccr.com/'target='_blank'>www.rrccr.com</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Eastern Railway</td>
							    <td class="td-box"><a href='https://er.indianrailways.gov.in/'target='_blank'>er.indianrailways.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">East Central Railway</td>
							    <td class="td-box"><a href='https://www.rrcecr.gov.in/'target='_blank'>www.rrcecr.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">East Coast Railway</td>
							    <td class="td-box"><a href='https://eastcoastrail.indianrailways.gov.in/'target='_blank'>eastcoastrail.indianrailways.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Northern Railway</td>
							    <td class="td-box"><a href='http://www.rrcnr.org/'target='_blank'>www.rrcnr.org</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">North Central Railway</td>
							    <td class="td-box"><a href='https://www.rrcpryj.org/'target='_blank'>www.rrcald.org</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">North Eastern Railway</td>
							    <td class="td-box"><a href='https://ner.indianrailways.gov.in/'target='_blank'>www.ner.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Northeast Frontier Railway</td>
							    <td class="td-box"><a href='https://nfr.indianrailways.gov.in/'target='_blank'>www.nfr.indianrailways.gov.in</a></td>
							   </tr>
							   </tbody>
							 	</table>
							</div>
							<div class="table-responsive">
							 	<table class="table table-1">
							  	<thead class="top-th">
								   <tr>
								    <th width="140"><strong>RRC</strong></th>
								    <th width="119"><strong>Website Address</strong></th>
								   </tr>
							   </thead>
							   <tbody>
							   <tr style='background: #fffdfd;'>
							    <td  class="td-box">North Western Railway</td>
							    <td class="td-box"><a href='https://nwr.indianrailways.gov.in/'target='_blank'>www.nwr.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">Southern Railway</td>
							    <td class="td-box"><a href='https://www.rrcmas.in/'target='_blank'>www.rrcmas.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">South central railway</td>
							    <td class="td-box"><a href='https://scr.indianrailways.gov.in/'target='_blank'>www.scr.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">South Eastern Railway</td>
							    <td class="td-box"><a href='https://ser.indianrailways.gov.in/'target='_blank'>ser.indianrailways.gov.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">South East Central Railway</td>
							    <td class="td-box"><a href='https://secr.indianrailways.gov.in/'target='_blank'>www.secr.indianrailways.gov.in</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">South Western Railway</td>
							    <td class="td-box"><a href='https://www.rrchubli.in/'target='_blank'>www.rrchubli.in</a></td>
							   </tr>
							   <tr style='background: #fffdfd;'>
							    <td class="td-box">Western Railway</td>
							    <td class="td-box"><a href='https://www.rrc-wr.com/'target='_blank'>www.rrc-wr.com</a></td>
							   </tr>
							   <tr>
							    <td class="td-box">West Central Railway</td>
							    <td class="td-box"><a href='https://wcr.indianrailways.gov.in/'target='_blank'>www.wcr.indianrailways.gov.in</a></td>
							   </tr>
							   </tbody>
							 	</table>
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