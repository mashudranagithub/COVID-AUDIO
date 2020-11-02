@extends('covid.layouts.master')

@section('content')

	<div class="header-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Global COVID-19 Pandemic</h2>
				</div>
			</div>
		</div>
	</div>


	<!-- Banner Section Start Here -->
	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="covid-banner-image owl-carousel">
						<img src="{{ asset('front/covid/assets/images/banner/2020-04-06.jpg') }}" alt="Covid-19 virus banner image">
						<img src="{{ asset('front/covid/assets/images/banner/Website-Banner_1A.jpg') }}" alt="Covid-19 virus banner image">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner Section End Here -->


	<section id="hotline-scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<marquee behavior="scroll" direction="right-to-left">COVID-19 HOTLINE <span>333, 10655, 16263, 01944333222</span></marquee>
				</div>
			</div>
		</div>
	</section>

	<section id="Promo-numbers">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="promos">
						<div class="single-promo">
							<p class="number education-color">524 +</p>
							<p class="education-color">Graduates from 34 countries</p>
						</div>
						<div class="single-promo">
							<p class="number training-color">6200 +</p>
							<p class="training-color">Health and Development Professionals trained</p>
						</div>
						<div class="single-promo">
							<p class="number research-color">158 +</p>
							<p class="research-color">Research Projects Since Inception</p>
						</div>
						<div class="single-promo">
							<p class="number advocacy-color">214 +</p>
							<p class="advocacy-color">Advocacy Based Events Through Multi-Stakeholder Engagements to Date</p>
						</div>
						<div class="single-promo">
							<p class="number education-color">109 +</p>
							<p class="education-color">Local and Global Partners</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section id="Awareness">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h3 class="float-left">COVID-19 AWARENESS</h3>
						<a target="_blank" href="awareness.html" class="float-right">View All</a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="owl-carousel awareness-slider">
						<div class="single-awareness">
							<div class="awareness-image">
								<a target="_blank" href="assets/files/homeCare/Home-care-recommendation_English_09 06 2020 _English.pdf') }}">
									<img src="{{ asset('front/covid/assets/images/awareness/home-care.jpg') }}" alt="Home Care">
								</a>
							</div>
							<h4><a href="javascript:void(0);">Home Care Recommendation</a></h4>
						</div>
						<div class="single-awareness">
							<div class="awareness-image">
								<div class="video-box">
									<a href="https://www.youtube.com/watch?v=BtN-goy9VOY" class="video-link">
										<img src="http://i3.ytimg.com/vi/BtN-goy9VOY/maxresdefault.jpg" alt="Video Thumbnail Image">
										<i class="far fa-play-circle"></i>
									</a>
								</div>
							</div>
							<h4><a href="javascript:void(0);">The Coronavirus Explained</a></h4>
						</div>
						<div class="single-awareness">
							<div class="awareness-image">
								<a target="_blank" href="{{ asset('front/covid/assets/images/awareness/5-key-msg.jpg') }}">
									<img src="{{ asset('front/covid/assets/images/awareness/5-key-msg.jpg') }}" alt="5 key messages image">
								</a>
							</div>
							<h4><a href="javascript:void(0);">Five Key Messages</a></h4>
						</div>
						<div class="single-awareness">
							<div class="awareness-image">
								<a target="_blank" href="{{ asset('front/covid/assets/images/awareness/three-cs.jpg') }}">
									<img src="{{ asset('front/covid/assets/images/awareness/three-cs.jpg') }}" alt="AWARENESS POSTER IMAGE">
								</a>
							</div>
							<h4><a href="javascript:void(0);">Avoid the "Three Cs"</a></h4>
						</div>
						<div class="single-awareness">
							<div class="awareness-image">
								<a target="_blank" href="{{ asset('front/covid/assets/images/awareness/Covid19_Hand-Wash-FB-post_3.jpg') }}">
									<img src="{{ asset('front/covid/assets/images/awareness/Covid19_Hand-Wash-FB-post_3.jpg') }}" alt="AWARENESS POSTER IMAGE">
								</a>
							</div>
							<h4><a href="javascript:void(0);">HOW TO WASH HANDS PROPERLY</a></h4>
						</div>
						<div class="single-awareness">
							<div class="awareness-image">
								<div class="video-box">
									<a href="https://www.youtube.com/watch?v=L67TV12X_ao" class="video-link">
										<img src="http://i3.ytimg.com/vi/L67TV12X_ao/maxresdefault.jpg" alt="Video Thumbnail Image">
										<i class="far fa-play-circle"></i>
									</a>
								</div>
							</div>
							<h4><a href="javascript:void(0);">QURANTINE at home</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Education Section Start Here -->
	<section id="Education" class="d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>EDUCATION</h2>
				</div>
				<div class="col-md-12 text-center">
					<div class="section-heading margin-minus">
						<h5>Online Learning Continues: Master of Public Health</h5>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>MPH Students to analyse Health System and Policy of different countries</b></a></h3>
						<div class="course-details">
							<p class="mb-3">What else could be more relevant, interesting and timely than exploring how systemic challenges can be overcome during a pandemic situation like covid 19?</p>
							<p class="mb-3">The Master of Public Health (MPH) students at BRAC JPG School of Public Health are getting engaged in active discussion, meaningful exchange of ideas and productive dialogue with health systems experts during the current Health Systems Management Module. The students are also critically reviewing health systems contexts and response to covid-19 situation in different countries.</p>
							<p class="mb-3">As per the requirement of the course, students will also undertake experiential learning project on Health System’s response to COVID 19 pandemic in different country context and apply critical systems thinking approach in order to identify gaps and challenges and find out a possible solution.</p>
							<p class="mb-3">The course is being advised by Prof. Syed Masud Ahmed, Director, Centre of Excellence for Health Systems and Universal Health Coverage at BRAC JPG School of Public Health and coordinated by Shaikh A Shahed Hossain, Professor, BRAC JPG School of Public Health with support from other Facilitators Bachera Aktar, Assistant Director, The Center of Excellence for Gender, Sexual and Reproductive Health and Rights (CGSRHR), BRAC JPG School of Public Health; Kuhel Faizul Islam, Senior Coordinator, JPGSPH, BRAC University and Rushdia Ahmed, Senior Researcher (part-time) with BRAC JPG School of Public Health & Doctoral Student University of Toronto, Canada.</p>
							<p class="mb-3">Students are also receiving critical sessions by distinguished faculty members and experts and practitioners from renowned organizations and institutions round the globe. They include Dr. Timothy Grant Evans, Inaugural Director and Associate Dean of the School of Population and Global Health (SPGH) in the Faculty of Medicine and Associate Vice-Principal at Global Policy and Innovation, McGill University; Ermin Erasmus, Collaboration for Health Policy & Systems Analysis in South Africa; Miatta Zenabu Gbanya, Immunization Specialist, UNICEF Afghanistan;  Dr. Taufique Joarder, Research Director, USAID’s Multisectoral Nutrition Programming through Implementation Science Activity, FHI360 Bangladesh; Jannatul Ferdous, Health Officer (Health System Strengthening), UNICEF Bangladesh; Dr. ATM Iqbal Anwar, Project Director, Universal Health Coverage, Health System and Population Studies Division, ICDDRB and Dr. Mohammad Mushtuq Husain; Advisor IEDCR (Consultant, COVID-19 Pandemic Control, World Bank).</p>
							<p class="mb-3">Teaching Fellows for this course include Samiun Nazrin Bente Kamal Tune, Farzana Manzoor, Nibedita Sarker , Mowtushi Matin, Wafa Alam, Md. Imran Hossain Mithu, Bushra Zarin Islam, Ranjan Koiri, Rituja Shome, Ateeb Ahmad Parray who are working as Research Associates and assistant coordinator at JPGSPH, BRAC University.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>MPH STUDENTS DESIGN COMMUNITY BASED INNOVATIVE HEALTH INSURANCE SCHEME</b></a></h3>
						<div class="course-details">
							<p class="mb-3">After successful completion of week-long Proposal Development Workshop, the Master of Public Health (MPH) students are currently undertaking Health Economics and Health Care Financing module, the 5th online course during COVID-19 pandemic. Coordinated by Dr. Zahidul Quayyum, Professor of Health Economics; Co-Director Research and Co-Director Centre of Excellence for Urban Equity and Health (CUEH), BRAC JPG School of Public Health, BRAC University and Dr. Jahangir Khan, Senior Lecturer at Department of International Public Health at Liverpool School of Tropical Medicine, UK; Adjunct Researcher, Department of Learning, Informatics, Management and Ethics, Karolinska Institutet, Sweden and Adjunct Professor at BRAC James P Grant School of Public Health, BRAC University, Bangladesh.</p>
							<p class="mb-3">This course is intensively designed with lots of hands-on learning experiences that will foster basic understanding of different approaches of health economics and health care financing and its application in the field of public health.</p>
							<p class="mb-3">Unlike other previous online modules, this module is separated in two different blocks; Block-I: Basic Concepts, Market for Health Care Goods, Resource Allocation, and Economic Evaluation, and Block-II: Healthcare Financing. The course will engage students in interactive and meaningful discussion on different market forces and dynamics of health care industry and how it relates to designing community based health insurance projects. As per the requirement of the course, students will design community-based health insurance schemes in a developing country context.</p>
							<p class="mb-3">Students will also get critical other sessions by distinguished faculty members and experts and practitioners from renowned organizations and institutions. They include Professor Nahid Akhter Jahan and Professor Sayed Abdul Hamid at Institute of Health Economics, University of Dhaka; Dr. Shakil Ahmed, Senior Economist at World Bank Group; Mr. Musabbir Rahim, Manager at BRAC-Aarong, and Dr. Sayem Ahmed; Health Economist at Liverpool School of Tropical Medicine, UK and Dr. Marufa Sultana, PhD Candidate at the Deakin University, Australia.</p>
							<p>Teaching Fellows for this course include Muhammad Nazmul Islam: Research Fellow, Marzuka Ahmed Radia; Research Coordinator, Baby Naznin; Research Assistant, from JPGSPH. In addition, the MPH team are also providing management support for the implementation of this online module.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"> <b> MPH STUDENTS PARTICIPATE IN ONLINE QUANTITATIVE RESEARCH METHODS MODULE </b></a></h3>
						<div class="course-details">
							<p class="mb-3">After successful completion of 4 weeks long Biostatistics course, Master of Public Health (MPH) students are currently undertaking Quantitative Research Methods, the 3rd online course during COVID-19 pandemic. Coordinated by Malabika Sarker Professor and Associate Dean; Director of Research, Director Center of Excellence for Science of Implementation & Scale-Up (CoE-SISU) BRAC JPG School of Public Health, the QRM course is designed as an intensive, hands-on learning experience that will foster the development of a basic understanding of different research designs and concrete skills in quantitative research methods, with a particular emphasis on survey development.</p>
							<p class="mb-3">Unlike other previous online modules, students are doing online group work to design a quantitative research query, make data collection plan in a pandemic, collect data online and present findings in group.</p>
							<p class="mb-3">The Course will be co-facilitated by Malay Kanti Mridha Professor and Director, Center of Excellence for Non- communicable Diseases and Nutrition BRAC JPG School of Public Health; Atonu Rabbani, Associate Scientist, at BRAC JPG School of Public Health; Mrittika Barua, Senior Research Fellow, BRAC JPG School of Public Health; Mehedi Hasan, Senior Research Fellow, BRAC JPG School of Public Health; Nazmul Islam, Research Fellow, BRAC JPG School of Public Health; Musfiqur Rahman, Research Associate, BRAC JPG School of Public Health.</p>
							<p>Teaching Fellows for this course include Avijit Saha: Research Fellow, Shams Shabab Haider, Research Assistant; and Suhi Hanif, Statistical Analyst. In addition, the MPH team are also providing management support for the implementation of this online module.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"> <b> MPH Students undertake online Biostatistics course </b></a></h3>
						<div class="course-details">
							<p class="mb-3">MPH Students undertake online Biostatistics course
							After the successful completion of Epidemiology course, MPH students are currently undertaking 2nd online course Biostatistics. Coordinated by Dr Md. Tanvir Hasan Assistant Professor and Co-Director of Centre of Excellence for Urban Equity and Health (CUEH) BRAC JPG School of Public Health Currently, this 4-week course will equip students with basic statistical tools and its application in public health.
							</p>
							<p>Dr Malay Kanti Mridha Professor and Director, Center of Excellence for Non- communicable Diseases and Nutrition BRAC JPG School of Public Health; Dr Shofiqur Rahman, Professor, Institute of Statistical Research and Training at Dhaka University and Dr Dipak Mitra, Professor and Chair, Department of Public Health at North South University are also teaching in this module.  Teaching Fellows for this course include  Uzzal Chowdhury: Senior Statistician, Mir Rayhanul Islam: Senior Research Associate, Abdul Awal: Senior Research Assistant, Srizan Chowdhury: Research Assistant and Md Mobkul Hossain: Statistical Analyst. In addition, the MPH team are also providing management support for the implementation of this online module.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Podcast</h3>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="text-center">
						<h5>Our MPH Students explore their experience when going back to their home country during COVID-19</h5>
						<p>Click on the images below to hear their experiences</p>
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-4">
					<div class="single-podcast">
						<a href="https://anchor.fm/saraharahbukansalaharah/episodes/How-to-manage-flight-to-The-Philippines-during-COVID-19---with-Rafy-ei01a6" target="_blank">
							<img src="{{ asset('front/covid/assets/images/education/podcast/podcast-1.jpg') }}" alt="Podcast Image">
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-podcast">
						<a href="https://anchor.fm/saraharahbukansalaharah/episodes/How-does-it-feel-travel-to-Maldives-during-a-pandemic---with-Aisha-Humdhaa-ei015s" target="_blank">
							<img src="{{ asset('front/covid/assets/images/education/podcast/podcast-2.jpg') }}" alt="Podcast Image">
						</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="single-podcast">
						<a href="https://anchor.fm/saraharahbukansalaharah/episodes/How-difficult-is-it-to-travel-during-COVID-19-from-Bangladesh-to-India---with-dr-Yogesh-ei012m" target="_blank">
							<img src="{{ asset('front/covid/assets/images/education/podcast/podcast-3.jpg') }}" alt="Podcast Image">
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h5></h5>
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-6">
					<div class="education-text">
						<p>BRAC James P Grant School of Public Health at BRAC University remains committed to continuous learning and is continuing its Master of Public Health program online with 38 number of students from 14 number of countries.</p>
						<p>Online resource tools such as Moodle and Zoom allow students and faculty members from Bangladesh and Australia to do online discussion sessions and coaching (i.e. live and recorded) so students can continue to learn. Presently, the Epidemiology course is being taught online, and is coordinated by Dr. Shams El Arifeen, Senior Director, icddrb & Professor, BRAC JPG School of Public Health, with support from Dr. Nusrat Homaira, Senior Lecturer at UNSW School of Women’s and Children’s Health, Australia,  SK Masum Billah, PhD Researcher at University of Sydney School of Public Health & Adjunct Lecturer at BRAC JPG School of Public Health and other faculty members- and Teaching Fellows-  and MPH team from BRAC JPG School of Public Health.</p>
						<p>More updates available on this website as the courses continue online.</p>
					</div>
					<h5><a href="assets/files/etra/Annual_Report_2018_Education.pdf') }}" target="_blank">Click here for more information on MPH programme</a></h5>
				</div>
				<div class="col-md-6">
					<div id="evoCalendar" class="sidebar-hide"></div>
					<h5><a href="assets/files/MPHCalendar2020-21-Final.pdf') }}" target="_blank">Click here to see the full MPH Academic Calendar 2020-21 in pdf file</a></h5>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Midwifery Updates</h3>
					</div>
					<div class="education-text">
						<p>Due to the sudden outbreak of Covid-19, the Developing Midwifery Project (DMP) was
						postponed starting March 19 th , 2020 as per directives of GoB. All upcoming modules of April to June semester were distributed to the students before they left the dormitory. DMP took
						measures to continue academic activities from April through June. 20-25 Students were
						grouped under one faculty and began taking online classes through zoom and facebook. All
						classes are recorded and those who cannot attend classes can watch the uploaded video later.
						Weekly exams are conducted and results and feedback are shared with the students.
						Interaction between the students and teachers are satisfactory. The students who do not have
						access to online classes can go through the modules and ask questions over phone to the
						teachers in their weekly calls. The Midwifery Education Team is continuing to adjust lessons and revising academic calendar based on class performance and is also arranging extra help, if
						required.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Education Section End Here -->



	<!-- Training Section Start Here -->
	<section id="Training" class="d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Training ON COVID-19</h2>
				</div>
			</div>
			<!-- Webinar Section Start here -->
			<div class="row mb-4">
				<div class="col-md-12">
					<div class="section-heading">
						<h3><i>New Updates</i> - BRAC JPGSPH Webinar (NEW WEBINARS ARE BEING HOSTED EVERY WEEK)</h3>
					</div>
				</div>
			</div>

			<!-- Webinar Faq's -->
			<div class="row mb-4">
				<!-- <div class="col-md-12">
					<div class="section-heading">
						<h3>BRAC JPGSPH Webinars</h3>
					</div>
				</div> -->
				<div class="col-md-12">
					<ul>

						<!-- 12 August 2020 -->
						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">COVID-19 and Youth Initiatives</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>Wednesday, 12 August 2020</p>
											<p><b>TIME:  </b>3:30 PM to 5:00 PM</p>

											<p><b>PANEL SPEAKERS:</b></p>
											<p><b>1. Sarah Kamal, </b>2020 National President, Junior Chamber International (JCI) Bangladesh</p>
											<p><b>2. Tawhida Shiropa, </b>Founder and CEO, Moner Bondhu</p>
											<p><b>3. Sharnila Nuzhat Kabir, </b>Youth Advocate</p>
											<p><b>4. Md. Sadequl Arefeen, </b>Co-founder The Earth Society</p>

											<p><b>Full Recording: </b><a target="_blank" href="https://www.youtube.com/watch?v=gtrNcUjVRFU">https://www.youtube.com/watch?v=gtrNcUjVRFU</a></p>

											<p><b>Presentation: </b><a target="_blank" href="https://drive.google.com/drive/folders/1n_yGiMFxXDxb2N6WO5OaAOGqZov1IrSN">https://drive.google.com/drive/
											folders/1n_yGiMFxXDxb2N6WO5OaAOGqZov1IrSN</a></p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/SPH_webinar-12820.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>
										
										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/SPH_webinar-12820.jpg') }}" target="_blank">Click here to see more</a></h5>

									</div>
								</div>
							</div>
						</div>

						<!-- 13 July -->
						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">Covid-19: knowledge, practices, health and socio-economic impact in bangladesh</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>14 July 2020, Tuesday</p>
											<p><b>TIME:  </b>3:30 PM -  5:00 PM  Bangladesh Standard Time <br>10:30 AM - 12:00 PM British Summer Time</p>

											<p><b>PANEL SPEAKERS:</b></p>
											<p><b>1. Dr Malay Kanti Mridha,</b> Professor & Director of Centre of Excellence for Non-Communicable Disease(CNCDN), BRAC James P Grant School of Public Health, BRAC University</p>
											<p><b>2. Professor John Chambers,</b> Director, NIHR Global Health Research Unit for diabetes and Cardiovascular Disease in South Asians; Professor of Cardiovascular Epidemiology, Imperial College London, UK; Consultant Cardiologist, London North West Hospitals NHS Trust, UK</p>
											<p><b>3. Dr Mehedi Hasan, </b> Senior Research Fellow & Coordinator, Center for Non-communicable Diseases and Nutrition, BRAC James P Grant School of Public Health, BRAC University</p>
											<p><b>4. Dr Abu Abdullah Mohammad Hanif,</b> Senior Research Fellow, Center for Non-communicable Diseases and Nutrition, BRAC James P Grant School of Public Health, BRAC University</p>
										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/ncd-05.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>
										<!-- <p class="mb-1"><b>Presentations:</b></p>
										<a href="#">#</a> -->

										<p class="mb-3"></p>

										<p class="mb-1"><b>Full Webinar Video:</b></p>
										<a href="https://www.facebook.com/watch/live/?v=689374144946247&ref=watch_permalink">https://www.facebook.com/watch/
										live/?v=689374144946247&ref=watch_permalink</a>

										<p class="mb-3"></p>
										

										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/ncd-05.jpg') }}" target="_blank">Click here to see more</a></h5>

										
									</div>
								</div>
							</div>
						</div>

						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">Rohingya Crisis: A Persepective from Bangladesh</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>10 July 2020</p>
											<p><b>TIME:  </b>9:00 PM Bangladesh Standard Time <br>
											10 :00 AM Winnipeg, Canada Time</p>

											<p><b>PANEL SPEAKERS:</b></p>
											<p><b>1. Kaosar Afsana PhD,</b> Professor, BRAC James P Grant School of Public Health, BRAC University. Former Director of Health, Nutrition and Population Programme, BRAC</p>

											<p><b>2. AKM Mazharul Islam, </b>Professor of Anthropology, SUST.
											Executive Director, Institute of Applied Anthropology.</p>

											<p><b>3. Md. Shamsud Douza, </b>Additional Refugee Relief and Repatriation Commissioner (Deputy Secretary)
											Refugee Relief and Repatriation Commissioner Office, Cox’s Bazar</p>

											<p><b>4. Mr Md Rashadul Islam, </b>Senior Assistant Secretary and Camp in Charge in FDMN camp 11,12 and 18, Cox’s Bazar</p>


											<p><b>Full Webinar Video: </b>
											<a class="mb-3" target="_blank" href="https://web.facebook.com/watchparty/742177433275744/?entry_source=FEED ">https://web.facebook.com/watchparty/742177433275744/?entry_source=FEED </a></p>
											<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/crric.jpg') }}" target="_blank">Click here to see more</a></h5>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/crric.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>										
									</div>
								</div>
							</div>
						</div>

						<!-- 08 July -->
						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">Impact of covid-19 shutdown on the hijra community</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE: </b>9 July 2020, Thursday</p>
											<p><b>TIME: </b>3:30 PM -  5:00 PM Bangladesh Standard Time (BST) <br>
												3:00 PM - 4:30 PM Indian Standard Time (IST)
											</p>

											<p><b>PANEL SPEAKERS:</b></p>

											<p><b>1. MD HELAL UDDIN AHMED,</b> Deputy Director(Social Safety Net), Department of Social Services, Ministry of Social Welfare, Govt of Bangladesh</p>

											<p><b>2. ANINDYA HAJRA, </b>Director, Pratyay Gender Trust Transfeminist, Transgender Rights and Social Justice Activist, Kolkata, India.</p>

											<p><b>3. IVAN AHAMED KATHA, </b>President, Shacheton Hijra Odhikar Shangha. Human Rights Activist </p>

											<p><b>4. TASFIYAH JALIL, </b>Senior Coordinator, BRAC James P Grant School of Public Health, BRAC University  </p>

											<p><b>5. MD. MOSTAFIZUR  RAHMAN, </b>Assistant Coordinator, BRAC James P Grant School of Public Health, BRAC University</p>

											<p><b>MODERATOR:</b></p>

											<p><b>FARHANA ALAM, </b>Assistant Director (CGSRHR), BRAC James P Grant School of Public Health, BRAC University</p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/shutdown-hijra.jpg') }}" alt="Webinar Banner Image">
										</div>
										
										<hr>

										<p><b>The webinar Full Video: </b>
										<a class="mb-3" target="_blank" href="https://www.youtube.com/watch?v=RiHwriOqe1g&feature=youtu.be">https://www.youtube.com/watch?v=RiHwriOqe1g&feature=youtu.be</a></p>
										<p class="mb-3"></p>
										<p><b>Presentation:</b> </p>
										<p><b>Tasfiyah Jalil and  Md. Mostafizur Rahman:</b> <br>
										<a class="mb-3" target="_blank" href="https://drive.google.com/drive/folders/1SuANVb3kvSCtnIC8dHrMpr9aRKFPOvv0">https://drive.google.com/drive/folders/
										1SuANVb3kvSCtnIC8dHrMpr9aRKFPOvv0</a></p>
										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/shutdown-hijra.jpg') }}" target="_blank">Click here to see more</a></h5>
									</div>
								</div>
							</div>
						</div>
						<!-- 01 July -->

						<!-- 12 July 2020 -->
						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">South Asia: The Public Health Response to Covid-19</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">
											<p><b>DATE: </b>2 July 2020</p>
											<p><b>Panelists:</b></p>
											<p><b>1· Dr Ahmed Mushtaque Raza Chowdhury</b>  was formerly Vice Chair of BRAC, Dhaka, and is an alumnus of LSE Professor</p>
											<p><b>2. K Srinath Reddy</b> is President Public Health Foundation of India;</p>
											<p><b>3. Dr Faisal Sultan (@CEOSKMCH) is CEO,</b> Shaukat Khanum Memorial Cancer Hospital & Research Centre, Lahore</p>
											<p><b>4. Dr Mishal S Khan (@DrMishalK)</b> is Associate Professor in Health Policy, London School of Hygiene and Tropical Medicine.</p>

											<p><b>Chair: Dr Nilanjan Sarkar </b>is Deputy Director, South Asia Centre.</p>

											<p><b>Webinar Full Video:</b> <br>
											<a href="https://www.youtube.com/watch?v=pFfRuTU1tOA&feature=emb_logo">https://www.youtube.com/
											watch?v=pFfRuTU1tOA&feature=emb_logo</a></p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/south-asia-response.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>

										<p class="mb-3"></p>										

										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/south-asia-response.jpg') }}" target="_blank">Click here to see more</a></h5>

										
									</div>
								</div>
							</div>
						</div>
 

					</ul>


				</div>
				<div class="col-md-12">
					<h5><a href="webinars.html" target="_blank">View all webinars</a></h5>
				</div>
			</div>


			<!-- Webinar Section End Here -->			
			
			<div class="row">
				<div class="col-md-12">
				    <div class="section-heading">
    					<h3></h3>
    				</div>
				</div>
				<div class="col-md-12 text-center mb-3">
					<h5>The training component is led by Professor Kaosar Afsana, who is a member of the BRAC Global COVID-19 Taskforce and BRAC Emergency DMSC and COVID-19 Taskforce. The training materials were aggregated locally and from the World Health Organization (WHO), Bangladesh Directorate General of Health Services (DGHS), and BRAC</h5>
				</div>
				<div class="col-md-4">
					<div class="single-training">
						<a target="_blank" href="assets/files/Training on COVID-2019_BRAC JPGSPH.pdf') }}">
							<h5>One week training on awareness, prevention, and protection from COVID-19 was completed with the BRAC JPG School students, researchers, academics, faculty, and management staff.</h5>
						</a>
					</div>
					<h4><a target="_blank" href="assets/files/Training on COVID-2019_BRAC JPGSPH.pdf') }}">Click for Training</a></h4>
				</div>
				<div class="col-md-4">
					<div class="single-training">
						<a target="_blank" href="javascript:void(0);">
							<img src="{{ asset('front/covid/assets/images/training/bracjpg-office-training.jpg') }}" alt="Training on covid-19">
						</a>
					</div>
					<h4><a target="_blank" href="assets/files/Training on COVID-2019_BRAC JPGSPH.pdf') }}">COVID-19 training for support staff</a></h4>
				</div>
				<div class="col-md-4">
					<div class="single-training">
						<a target="_blank" href="https://openwho.org/courses/UNCT-COVID19-preparedness-and-response-EN">
							<img src="{{ asset('front/covid/assets/images/training/who-free-course.jpg') }}" alt="Training on covid-19">
						</a>
					</div>
					<h4><a target="_blank" href="https://openwho.org/courses/UNCT-COVID19-preparedness-and-response-EN">WHO Training Platform</a></h4>
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<p></p>
					</div>
					<h5>ARISE :  lead partner LSTM had organized webinars and shared many resource materials with us on  COVID-19</h5>
				</div>

				<div class="col-md-12">
					<div class="arise-slider owl-carousel">
						<div class="single-video">
							<div class="video-box">
								<a href="https://www.youtube.com/watch?v=nFEBBAUZDvI" class="video-link">
								<!-- Ei khane image dynamic korte hoile youtube link theke video id ta niye image er source ta create korte hobe -->
									<img src="http://i3.ytimg.com/vi/nFEBBAUZDvI/maxresdefault.jpg" alt="Video Thumbnail Image">
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4>TEST TRACE ISOLATE PROTECT - Nazeem Official Video</h4>
						</div>
						<div class="single-video">
							<div class="video-box">
								<a href="https://www.youtube.com/watch?v=gfye0q3v10w" class="video-link">
								<!-- Ei khane image dynamic korte hoile youtube link theke video id ta niye image er source ta create korte hobe -->
									<img src="http://i3.ytimg.com/vi/gfye0q3v10w/hqdefault.jpg" alt="Video Thumbnail Image">
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4>COVID READY - Nazeem Official Video</h4>
						</div>
						<div class="single-video">
							<div class="video-box">
								<a href="https://www.youtube.com/watch?v=PFMPuc_Ho8Q" class="video-link">
								<!-- Ei khane image dynamic korte hoile youtube link theke video id ta niye image er source ta create korte hobe -->
									<img src="http://i3.ytimg.com/vi/PFMPuc_Ho8Q/maxresdefault.jpg" alt="Video Thumbnail Image">
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4>What is COVID-19? Who are more vulnerable?</h4>
						</div>
						<div class="single-video">
							<div class="video-box">
								<a href="https://www.youtube.com/watch?v=Hf8SRM7_tRc" class="video-link">
								<!-- Ei khane image dynamic korte hoile youtube link theke video id ta niye image er source ta create korte hobe -->
									<img src="http://i3.ytimg.com/vi/Hf8SRM7_tRc/maxresdefault.jpg" alt="Video Thumbnail Image">
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4>Preventable measures? Treatment at home?</h4>
						</div>
						<div class="single-video">
							<div class="video-box">
								<a href="https://www.youtube.com/watch?v=c8gFMyeuknU" class="video-link">
								<!-- Ei khane image dynamic korte hoile youtube link theke video id ta niye image er source ta create korte hobe -->
									<img src="http://i3.ytimg.com/vi/c8gFMyeuknU/maxresdefault.jpg" alt="Video Thumbnail Image">
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4>Reliable sources of information on COVID-19?</h4>
						</div>
						<div class="single-video">
							<div class="video-box">
								<a href="https://www.youtube.com/watch?v=DD8zIduKnn8" class="video-link">
								<!-- Ei khane image dynamic korte hoile youtube link theke video id ta niye image er source ta create korte hobe -->
									<img src="http://i3.ytimg.com/vi/DD8zIduKnn8/maxresdefault.jpg" alt="Video Thumbnail Image">
									<i class="far fa-play-circle"></i>
								</a>
							</div>
							<h4>How to maintain good mental health?</h4>
						</div>					
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading"></div>
					<h5><a href="assets/files/etra/Annual_Report_2018_Training.pdf') }}" target="_blank">CLICK LINK FOR MORE INFORMATION</a></h5>
				</div>	
			</div>
		</div>
	</section><!-- Training Section End Here -->


	<!-- Research Section Start Here -->
	<section id="Research" class="d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h2>Research</h2>
						<h5 class="mt-3"><a href="assets/files/research/Organisation Capacity Statement.pdf') }}" target="_blank">Click for Organisational statement</a></h5>
					</div>
				</div>
			</div>			

			<div class="row mt-4 mb-4">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>19 NEW AND UPCOMING RAPID RESEARCH SURVEYS AND QUALITATIVE ASSESSMENTS ARE BEING UNDER TAKEN (APRIL- PRESENT) AND 14 COMPLETED:</h3>
					</div>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-md-7">
					<div class="education-text">
						<p>COVID-19 is expected to disproportionately affect Bangladesh’s poor and most vulnerable,
						including informal slum settlement residents, the rural poor and extreme poor, sexual
						minorities, ethnic minorities, refugees, persons living with disabilities, sex workers, domestic
						workers, factory workers, daily-wage earners, and front line workers and so forth. Without comprehensive mitigating
						measures, these groups will be among the worst affected from a personal, social, health and
						economic perspective.</p>
						<h5 class="mt-3"><a href="assets/files/research/pdf/Research Updates- send to mukul_allPage.pdf') }}" target="_blank">Click here to see more</a></h5>
					</div>
				</div>
				<div class="col-md-5">
					<div class="section-banner">
						<img src="{{ asset('front/covid/assets/images/research/research-top.jpg') }}" alt="Research Banner Image">
					</div>
				</div>
			</div>

			<!-- Peer Reviewed Publications Start Here -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h3 class="float-left">Peer-Reviewed Publications:</h3>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-12">
					<div class="education-text">
						<p><b><a target="_blank" href="assets/files/research/peer_reviewed_publication/January-August 16, 2020.pdf') }}">January - August 16, 2020: (PDF)</a></b></p>
						<p><b><a target="_blank" href="http://bracjpgsph.org/images/PUBLICATION/PUBLICATIONS_2019_v12.pdf') }}">January - December 2019: (PDF)</a></b></p>
						<p><b><a target="_blank" href="http://bracjpgsph.org/images/PUBLICATION/Publications_2018_FinalV3.pdf') }}">January - December 2018: (PDF)</a></b></p>
					</div>
				</div>
			</div>
			<!-- Peer Reviewed Publications End Here -->


			<div class="row mt-4">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Rapid research briefs - Uploaded June, 2020</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="owl-carousel research-brief-slider">

						<div class="single-brief">
							<a href="assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/pregnant_woman.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}" target="_blank">Psychological stress of pregnant women during coronavirus disease</a></h4>
							<a href="assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/brief/Health_System.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/health-system-nine-weeks.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Health_System.pdf') }}" target="_blank">Bangladesh Health System’s Response to COVID-19 during First Nine weeks</a></h4>
							<a href="assets/files/research/brief/Health_System.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/brief/Exploring-the-impact-of-covid-19-on-adolescents-in-urban-slums-in-Dhaka-Bangladesh.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/young-voices.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Exploring-the-impact-of-covid-19-on-adolescents-in-urban-slums-in-Dhaka-Bangladesh.pdf') }}" target="_blank">Exploring the impact of covid-19 on adolescents</a></h4>
							<a href="assets/files/research/brief/Exploring-the-impact-of-covid-19-on-adolescents-in-urban-slums-in-Dhaka-Bangladesh.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/pdf/Gender.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/gender.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/pdf/Gender.pdf') }}" target="_blank">Gender based perception and differentials of COVID-19</a></h4>
							<a href="assets/files/research/pdf/Gender.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/pdf/Masud-Bhai.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/flw.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/pdf/Masud-Bhai.pdf') }}" target="_blank">Re-visiting Front Line Health Workers</a></h4>
							<a href="assets/files/research/pdf/Masud-Bhai.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/pdf/Disabilities .pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/disabilities.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/pdf/Disabilities .pdf') }}" target="_blank"> LIVES OF PEOPLE WITH DISABILITIES DURING COVID-19</a></h4>
							<a href="assets/files/research/pdf/Disabilities .pdf') }}" class="btn-more" target="_blank">Research brief will be uploaded once completed</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/stigma.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}" target="_blank">Stigma, Shame and COVID-19</a></h4>
							<a href="assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/brief/Immunization backlogs_Final.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/immunization.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Immunization backlogs_Final.pdf') }}" target="_blank">Immunization Backlogs</a></h4>
							<a href="assets/files/research/brief/Immunization backlogs_Final.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						
						<div class="single-brief">
							<a href="assets/files/research/brief/Slum_Health .pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/slum-health.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Slum_Health .pdf') }}" target="_blank">Slum Health</a></h4>
							<a href="assets/files/research/brief/Slum_Health .pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						
						<div class="single-brief">
							<a href="assets/files/research/brief/Balancing_hunger_and_response.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/socially.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Balancing_hunger_and_response.pdf') }}" target="_blank">A Socially Just Model</a></h4>
							<a href="assets/files/research/brief/Balancing_hunger_and_response.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/front-line-workers.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}" target="_blank">frontline workers</a></h4>
							<a href="assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/awareness.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}" target="_blank">health awareness</a></h4>
							<a href="assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/local-beliefs.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}" target="_blank">local cultural beliefs on health</a></h4>
							<a href="assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/mental-health.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}" target="_blank">mental health</a></h4>
							<a href="assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/hijra.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min.pdf') }}" target="_blank">on the fringes transgender communities</a></h4>
							<a href="assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/rmg.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}" target="_blank">rmg workers</a></h4>
							<a href="assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="assets/files/research/brief/ARISE-Urban Poor 7may.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/ARISE.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="assets/files/research/brief/ARISE-Urban Poor 7may.pdf') }}" target="_blank">Urban poor lived experiences in slums</a></h4>
							<a href="assets/files/research/brief/ARISE-Urban Poor 7may.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-4 mb-4">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h3></h3>
					</div>
					<h3>COVID 19 RESEARCH ARE PART OF THE 5 CENTRES AT THE SCHOOL AND SOME FOCUS ON HUMANITARIAN RESEARCH IN THE ROHINGYA CAMPS AND HOST COMMUNITIES</h3>
					<h3>CENTRES OF RESEARCH EXCELLENCE</h3>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-7">
					<div class="research-center-part">
						<h3>Current Ongoing Research (April - Present)</h3>


						<div class="research-ongoing-part">
							<div class="single-research">
								<!--<h3></h3>-->
					<ul>
						<li><a target="_blank" href="assets/files/research/pdf/Advancing Inclusive.pdf') }}">Advancing inclusive and resilient urban development targeted at the urban poor in Bangladesh</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/BRAC Health.pdf') }}">BRAC health, nutrition and population programme (HNPP): impact evaluation and social return on investment of selected programmes</a></li>

						<li><a target="_blank" href="assets/files/research/pdf/Survey on Consumer.pdf') }}">Survey on consumer awareness of Nutrition, Food Safety and Hygiene</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/Media Surveillance.pdf') }}">Media Surveillance On Coronavirus</a></li> 
						<li><a target="_blank" href="assets/files/research/pdf/A Quick Assessm.pdf') }}">A Quick Assessment of Knowledge, Perceptions, Barriers and Enablers, and Experiences of the Frontline Health Workers (Flws) Vis-à-vis COVID-19 Epidemic Management in Bangladesh</a></li> 
						<li><a target="_blank" href="assets/files/research/pdf/Adapting with the.pdf') }}">Adapting with the Context: ‘One BRAC’ Story in COVID-19 Response in Bangladesh</a></li>

						

						<li><a target="_blank" href="assets/files/research/pdf/COVID-19 Impact.pdf') }}">Covid-19 Impact on Urban Slums and Low Income Settlements: Education, Psychosocial Wellbeing and coping</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/Understanding kno.pdf') }}">Understanding knowledge and awareness on COVID-19 (Corona disease) and its impact on Livelihoods and life of Rohingya Refugee Camps in Cox’s Bazar, Bangladesh</a></li>
						
						<li><a target="_blank" href="assets/files/research/pdf/Mental and Emotional H.pdf') }}">Mental And Emotional Health and Well-Being of University Students</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/Knowledge, Practices.pdf') }}">COVID 19: Knowledge, Practices and Impact in South-Asia (Bangladesh Component)</a></li>
						
						<li><a target="_blank" href="assets/files/research/pdf/Exploring Opportuniti.pdf') }}">Exploring Opportunities to Improve Health Outcomes and Enable better Health Systems Delivery through Mobile Money: Impact of COVID-19</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/COVID-19 Mitigatio.pdf') }}">COVID-19 mitigation Study among Migrant Workers in Singapore</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/What works to continue.pdf') }}">What works to continue maternal and neonatal healthcare services during COVID-19 pandemic by MANOSHI Programme in urban slums of Bangladesh?-a case study</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/A Process Docu.pdf') }}">A Process Documentation of the Radio Intervention during COVID-19 Situation in Bangladesh</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/Telecounselling Interv.pdf') }}">Telecounselling Interventions during COVID-19 Situation in Bangladesh: A  Process Documentation</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/Telecommunication model.pdf') }}">Telecommunication model towards Govt. Play Lab students:   A process documentation l during COVID-19 Situation in Bangladesh</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/COVID-19 Impact in Bangladesh_22may2020.pdf') }}">COVID-19 Impact in Bangladesh: Transmission Dynamics, Health System, Preparedness and Financing by Districts</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/The Impact of COVID-19 .pdf') }}">The Impact of COVID-19 on the Psychosocial Wellbeing of the Sexually Marginalized Community in Bangladesh</a></li>
						<li><a target="_blank" href="assets/files/research/pdf/COVID 19 Shutdown.pdf') }}">COVID 19 shutdown: a new threat to the personal, social and economic wellbeing of Dalit community</a></li>
					</ul>

								<h4><span class="black-color"></span> <a target="_blank" href="assets/files/research/pdf/"></a></h4>

							</div>
						</div>

					</div>
				</div>
				<div class="col-md-5">
					<div class="research-center-part">
						<h3>Centres of Excellence</h3>
						<div class="single-research">
							<h4>Centre of Excellence for Gender, Sexual and Reproductive Health and Rights (CGSRHR)</h4>
							<div class="centre-director d-flex">
								<div class="director-image">
									<img src="{{ asset('front/covid/assets/images/research/director/Dr-Sabina-Faiz-Rashid.jpg') }}" alt="Director Image">
								</div>
								<div class="director-info">
									<p class="director-name">Led by <a target="_blank" href="assets/files/cv/Dr-Rashid-Resume-July-3-2020.pdf') }}"><span>Professor Sabina Faiz Rashid</span></a></p>
									<a target="_blank" href="assets/files/cv/Dr-Rashid-Resume-July-3-2020.pdf') }}" class="cv-link">Show CV</a>
								</div>
							</div>
						</div>
						<div class="single-research">
							<h4>Centre of Excellence for Science of Implementation and Scale-Up (CoE-SISU)</h4>
							<div class="centre-director d-flex">
								<div class="director-image">
									<img src="{{ asset('front/covid/assets/images/research/director/Dr-Malabika-Sarker.jpg') }}" alt="Director Image">
								</div>
								<div class="director-info">
									<p class="director-name">Led by <a target="_blank" href="assets/files/cv/Malabika-Sarker_Full_CV_ April 2020.pdf') }}"><span>Professor Malabika Sarker</span></a></p>
									<a target="_blank" href="assets/files/cv/Malabika-Sarker_Full_CV_ April 2020.pdf') }}" class="cv-link">Show CV</a>
								</div>
							</div>
						</div>
						<div class="single-research">
							<h4>Centre of Excellence for Health Systems and Universal Health Coverage (CoE-HS&UHC)</h4>
							<div class="centre-director d-flex">
								<div class="director-image">
									<img src="{{ asset('front/covid/assets/images/research/director/Dr-Syed-Masud-Ahmed.jpg') }}" alt="Director Image">
								</div>
								<div class="director-info">
									<p class="director-name">Led by <a target="_blank" href="assets/files/cv/CV-of-Syed-Masud-Ahmed_Mar. 2020.pdf') }}"><span>Professor Syed Masud Ahmed</span></a></p>
									<a target="_blank" href="assets/files/cv/CV-of-Syed-Masud-Ahmed_Mar. 2020.pdf') }}" class="cv-link">Show CV</a>
								</div>
							</div>
						</div>
						<div class="single-research">
							<h4>Centre of Excellence for Urban Equity and Health (CUEH)</h4>
							<div class="centre-director d-flex">
								<div class="director-image">
									<img src="{{ asset('front/covid/assets/images/research/director/Dr-Zahidul-Quayyum.jpg') }}" alt="Director Image">
								</div>
								<div class="director-info">
									<p class="director-name">Led by <a target="_blank" href="#"><span>Professor Zahidul Quaiyyum</span></a> & <a target="_blank" href="#"><span>Associate Professor Tanvir Hassan</span></a></p>
									<a target="_blank" href="#" class="cv-link">Show CV</a>
								</div>
							</div>
						</div>
						<div class="single-research">
							<h4>Centre of Excellence for Non-Communicable Diseases and Nutrition (CNCDN)</h4>
							<div class="centre-director d-flex">
								<div class="director-image">
									<img src="{{ asset('front/covid/assets/images/research/director/Dr-Malay-Kanti-Mridha.jpg') }}" alt="Director Image">
								</div>
								<div class="director-info">
									<p class="director-name">Led by <a target="_blank" href="assets/files/cv/Malay_Kanti_Mridha_CV_2019.pdf') }}"><span>Professor Malay Kanti Mridha</span></a></p>
									<a target="_blank" href="assets/files/cv/Malay_Kanti_Mridha_CV_2019.pdf') }}" class="cv-link">Show CV</a>
								</div>
							</div>
						</div>
						<div class="ongoing-research">
							<h4><a target="_blank" href="assets/files/research/Research-Project-2020.pdf') }}">2020 research list</a></h4>
							<h4><a target="_blank" href="assets/files/research/Research-2019.pdf') }}">2019 research list</a></h4>
						</div>
					</div>
				</div>

<!-- Completed Research -->
<div class="col-md-12">
	<div class="research-upcoming-part">
							<div class="single-research">
								<h3>Completed Research</h3>

								<ul>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}">Psychological Stress of Pregnant Women During the Coronavirus Disease (Covid-19) Pandemic</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Health_System.pdf') }}">Health System’s Response to COVID-19 In Bangladesh: A Rapid Study on the key building blocks</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/pdf/Gender.pdf') }}">Gender based perception and differentials of COVID-19: Findings from Rapid Surveys</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/pdf/Masud-Bhai.pdf') }}">Re-visitng the Front Line health Workers’ (FLWs) attending suspected or confirmed COVID-19 patients in Bangladesh: how far has the situation improved in a month since the last survey?</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/pdf/Disabilities .pdf') }}">Livelihood, food security and well-being of persons with disabilities in Bangladesh during the COVID-19 Pandemic.</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}">Stigma, Shame and COVID-19: "They Won't Even Touch the Money We Touched”</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Immunization backlogs_Final.pdf') }}">Immunization Backlogs: A Quick Assessment of the Effects of COVID-19 on the Expanded Programme on Immunization (EPI) in Bangladesh</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}">JPG COVID-19 Rapid Survey in Urban and Rural sites: Awareness and knowledge about COVID-19 during the early onslaught of the pandemic</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}">JPG COVID-19 Rapid Survey in Urban and Rural sites: Loss of Mental Well-being at the time of COVID-19 Pandemic</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}">Developing Appropriate Health Messaging for Urban and Rural Populations</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Urban_ Poor Lived Experiences in SLums ARISE_April 19_final brief 2020-min.pdf') }}">IMPACT ON COVID-19- Lived Experiences of the Urban Poor in Slums during the Shutdown</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min.pdf') }}">ON THE FRINGES: Impact of COVID-19 Shutdown on Hijras Daily Personal, Social and Economic lives</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}">Front Line Health Workers (FLWs) perceptions and opinions on their personal safety while attending suspected or confirmed COVID-19 patients in Bangladesh</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}">Pins and needles at the time of a pandemic: Learning from the RMG workers through a rapid survey</a>
										</h4>
									</li>

								</ul>
							</div>
						</div>
</div>

				<div class="col-md-12 text-center">
					<div class="section-heading"></div>
					<h5><a href="assets/files/etra/Annual_Report_2018_Research.pdf') }}" target="_blank">CLICK LINK FOR MORE INFORMATION</a></h5>
				</div>
			</div>
		</div>
	</section><!-- Research Section End Here -->

	<!-- Advocacy Section Start Here -->
	<section id="Advocacy" class="d-flex justify-content-center align-items-center">
		<div class="container">
			<div class="row">

				<div class="col-md-12 text-center">
					<h2>ADVOCACY: New Materials Are Continually Being Updated</h2>
					<br>
					<p>BRAC JPGSPH actively initiated events to acknowledge the public health emergency, COVID-19. The public health emergency related to the virus has led active aggregating and sharing of useful resource materials locally and globally to a wider audience, including BRAC University, health organizations, key stakeholders, partners, and networks</p>
				</div>
				
			</div>


			<div class="row">
				<div class="col-md-12 mb-4">
					<div class="section-heading text-center">
						<h3>Important message about staying safe featuring Dr Kaosar Afsana</h3>
					</div>
				</div>
				<div class="col-md-7">
					<div class="advocacy-video section-banner">
						<!-- <div class="video-box"> -->
							<a href="https://www.youtube.com/watch?v=Pl4509GxtdI" class="video-link">
							<!-- Ei khane image dynamic korte hoile youtube link theke video id ta niye image er source ta create korte hobe -->
								<img src="http://i3.ytimg.com/vi/Pl4509GxtdI/maxresdefault.jpg" alt="Video Thumbnail Image">
								<i class="far fa-play-circle"></i>
							</a>
						<!-- </div> -->
					</div>
				</div>
				<div class="col-md-5 d-flex align-items-center">
					<div class="education-text">
						<p>Sharing about where to get COVID-19 official information and important message about staying safe featuring Professor Afsana. An initiative by HealthServe, Singapore General Hospital and Ministry of Communications and Information. Dr Kaosar Afsana teaches at BRAC James P Grant School of Public Health, BRAC university in Bangladesh.</p>
					</div>
				</div>
			</div>


















			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Sabina Faiz Rashid: Research on Community Resilience</h3>
					</div>
				</div>
				<div class="col-md-5">
					<div class="section-banner">
						<a target="_blank" href="https://www.who.int/bulletin/volumes/98/7/20-030720.pdf') }}">
							<img src="{{ asset('front/covid/assets/images/advocacy/external/sabina-who-interview.jpg') }}" alt="Internal blog image">
						</a>
					</div>
				</div>
				<div class="col-md-7 d-flex align-items-center">
					<div class="education-text">
						<p>Sabina Faiz Rashid talks to Andréia Azevedo Soares about anthropology, poverty, inequality and sex education in Bangladesh.</p>
						<p>Sabina Faiz Rashid is a researcher and advocate, specializing in gender, sexual and reproductive health, sexuality, poverty and the rights of marginalised populations in Bangladesh. She started her career as a researcher with the Bangladesh Rural Advancement Committee (BRAC) and in 2004 joined the James P Grant School of Public Health, at BRAC University, Dhaka, Bangladesh, where she has been dean since 2013.</p>
						<a target="_blank" href="https://www.who.int/bulletin/volumes/98/7/20-030720.pdf') }}">WHO Bulletin</a>
					</div>
				</div>
			</div>






			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>BRAC JPGSPH joins a global team in a groundbreaking project</h3>
					</div>
				</div>
				<div class="col-md-5">
					<div class="section-banner">
						<a target="_blank" href="https://www.genderandcovid-19.org">
							<img src="{{ asset('front/covid/assets/images/advocacy/gender-site.jpg') }}" alt="Link image">
						</a>
					</div>
				</div>
				<div class="col-md-7 d-flex align-items-center">
					<div class="education-text">
						<p>BRAC James P Grant School of Public Health joins a global team in a groundbreaking project conducting real time gender analysis to identify and document the gendered dynamics of COVID-19 and gaps in preparedness and response. This was made possible through a $1.6 million USD grant from the Bill & Melinda Gates Foundation.</p>
						<p>The global team includes researchers from the US, Bangladesh, Brazil, Democratic Republic of Congo, Canada, Kenya, Nigeria, UK, Hong Kong and Australia who help widen their analysis of gendered risks and impacts of the pandemic on health, social and economic welfare.</p>
						<p>Check out their new website: <a target="_blank" href="https://www.genderandcovid-19.org/">https://www.genderandcovid-19.org/</a></p>
						
					</div>
				</div>
			</div>
			


			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>COVID-19 Seminar at BRAC University on February 19, 2020</h3>
					</div>
				</div>
				<div class="col-md-5">
					<div class="section-banner">
						<img src="{{ asset('front/covid/assets/images/advocacy/governmenbt-seminar.jpg') }}" alt="Advocacy Event Image">
					</div>
				</div>
				<div class="col-md-7 d-flex align-items-center">
					<div class="education-text">
						<p>BRAC JPGSPH actively initiated events to acknowledge the public health emergency, COVID-19. The public health emergency related to the virus has led active aggregating and sharing of useful resource materials locally and globally to a wider audience, including BRAC University, health organizations, key stakeholders, partners, and networks</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Social Media Campaign to spread awareness on COVID-19</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="education-text">
						<p>From early March 2020, the BRAC JPG School has been conducting social media campaigns via Facebook, Twitter, LinkedIn, Instagram and Medium for disseminating awareness on COVID-19. The campaigns are being carried out in Bengali and English and cover a range of topics including Common Symptoms, Modes of Transmission, Prevention, Protection, and Preparedness, Quarantine Protocols, and Hotline numbers.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Circulating daily updates on COVID-19</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="education-text">
						<p>Brac University JPG School of Public health shares situation updates with BRAC University faculty members, students and staff on COVID-19. The sources are WHO, BRAC, Daily national and International news.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Global COVID-19 Clinical Data Platform for clinical characterization and management of hospitalized patients with suspected or confirmed COVID-19</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="education-text">
						<p>WHO invites Member States, health facilities and other entities to participate in the global effort to collect anonymized clinical data relating to hospitalized suspected or confirmed cases of COVID-19 and contribute data to the Global COVID-19 Clinical Data Platform.</p>
						<a href="https://www.who.int/teams/health-care-readiness-clinical-unit/covid-19/data-platform/" target="_blank">Click here for more information</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Voices from the Frontline – International Centre for Climate Change and Development (ICCCAD)</h3>
					</div>
				</div>
				<div class="col-md-12">
					<div class="education-text">
						<p>As the COVID-19 pandemic grips the world with unfolding health, economic and social impacts, grassroots communities are developing their own coping mechanisms in the face of the crisis. It is important to capture and document these stories in real time as the world faces up to an even longer term challenge of climate change.</p>
						<p>Voices from the Frontline is a joint initiative by ICCCAD and CDKN to support communities across the globe in sharing their stories on the challenges of and the responses to the pandemic and the consequent lockdown. By accumulating and disseminating stories from different communities we hope to build resilience for the vulnerable in future emergencies.</p>
						<a href="http://www.icccad.net/category/voices-from-the-frontline/" target="_blank">Click here for more information</a>
						<a class="ml-3" href="http://www.icccad.net/wp-content/uploads/2020/06/Voices-From-The-Frontine-Flyer_Final_compressed.pdf') }}">Download pdf</a>

						<ul class="icccad-news">
							<li><a href="" target="_blank">Solomon Islands: How the Barana Community is Preparing for COVID-19</a></li>
							<li><a href="" target="_blank">Dhaka, Bangladesh: How One Woman’s Idea Unleashed the Power of Community Spirit</a></li>
							<li><a href="" target="_blank">Rafiq Nagar, Mumbai: Residents Confront COVID-19 On Top of Existing Health threats</a></li>
							<li><a href="" target="_blank">Fiji: Community Voices Highlight Lessons and Opportunities for Resilience</a></li>
							<li><a href="" target="_blank">Women’s Group Boosts Resilience in the Face of Crisis</a></li>
							<li><a href="" target="_blank">Bangladeshi Farmers Respond to COVID-19 with Innovation and Sustainability</a></li>
							<li><a href="" target="_blank">Lockdown slum style</a></li>
						</ul>

					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h3 class="float-left">66 NEWS ARTICLES AND 20 NEW BLOGS HAVE BEEN POSTED SINCE APRIL</h3>
						<a target="_blank" href="advocacy.html" class="float-right">View All</a>
					</div>
				</div>
				<div class="col-md-12">


					<!-- Internal advocacy slider start here -->
					<div class="internal-blog owl-carousel">
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://medium.com/@jpgsph.comms/pandoras-box-what-will-remain-b89c2792e156">
									<img src="{{ asset('front/covid/assets/images/advocacy/internal/1_DXjzaIPATRBCaWj9-r48Ow.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://medium.com/@jpgsph.comms/pandoras-box-what-will-remain-b89c2792e156">Pandora’s box- what will remain?</a></h5>
							<p class="written-by">By Farzana Misha</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://medium.com/@jpgsph.comms/the-early-german-response-to-sars-cov-2-perspectives-from-a-guinea-pig-patient-e7e1aab6dc7">
									<img src="{{ asset('front/covid/assets/images/advocacy/internal/1_7OfaUftIQppxZZjbfuYRZg.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://medium.com/@jpgsph.comms/the-early-german-response-to-sars-cov-2-perspectives-from-a-guinea-pig-patient-e7e1aab6dc7">The early German response to SARS-CoV-2: Perspectives from a guinea-pig patient</a></h5>
							<p class="written-by">By Astrid Berner-Rodoreda</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://medium.com/@jpgsph.comms/self-isolation-and-realizations-8e6387e3c5b0">
									<img src="{{ asset('front/covid/assets/images/advocacy/internal/self-isolation.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://medium.com/@jpgsph.comms/self-isolation-and-realizations-8e6387e3c5b0">Self-isolation and Realizations</a></h5>
							<p class="written-by">By Nahela Nowshin</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://medium.com/@jpgsph.comms/is-history-repeating-itself-613a54c359eb">
									<img src="{{ asset('front/covid/assets/images/advocacy/internal/history-repeating.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://medium.com/@jpgsph.comms/is-history-repeating-itself-613a54c359eb">Is history Repeating Itself!</a></h5>
							<p class="written-by">By Kuhel Faizul Islam</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://medium.com/@jpgsph.comms/%E0%A6%95%E0%A6%B0%E0%A7%8B%E0%A6%A8%E0%A6%BE-%E0%A6%AD%E0%A6%BE%E0%A6%87%E0%A6%B0%E0%A6%BE%E0%A6%B8-%E0%A6%AE%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%AC%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A7%9F-%E0%A6%95%E0%A6%A4%E0%A6%9F%E0%A6%BE-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A7%81%E0%A6%A4-%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A7%87%E0%A6%B0-%E0%A6%9C%E0%A6%A8%E0%A6%97%E0%A6%A8%E0%A7%87%E0%A6%B0-%E0%A6%B6%E0%A6%B0%E0%A7%80%E0%A6%B0-59380a40dc32">
									<img src="{{ asset('front/covid/assets/images/advocacy/internal/bangladesh-people.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://medium.com/@jpgsph.comms/%E0%A6%95%E0%A6%B0%E0%A7%8B%E0%A6%A8%E0%A6%BE-%E0%A6%AD%E0%A6%BE%E0%A6%87%E0%A6%B0%E0%A6%BE%E0%A6%B8-%E0%A6%AE%E0%A7%8B%E0%A6%95%E0%A6%BE%E0%A6%AC%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A7%9F-%E0%A6%95%E0%A6%A4%E0%A6%9F%E0%A6%BE-%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A6%B8%E0%A7%8D%E0%A6%A4%E0%A7%81%E0%A6%A4-%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A7%87%E0%A6%B0-%E0%A6%9C%E0%A6%A8%E0%A6%97%E0%A6%A8%E0%A7%87%E0%A6%B0-%E0%A6%B6%E0%A6%B0%E0%A7%80%E0%A6%B0-59380a40dc32">করোনা ভাইরাস মোকাবেলায় কতটা প্রস্তুত বাংলাদেশের জনগনের শরীর?</a></h5>
							<p class="written-by">ডা. ফৌজিয়া খানম এবং আব্দুল জব্বার তপু</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://medium.com/@jpgsph.comms/%E0%A6%95%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BE%E0%A6%87%E0%A6%A8-%E0%A6%9C%E0%A7%80%E0%A6%AC%E0%A6%A8%E0%A6%83-%E0%A6%86%E0%A6%B2%E0%A7%8B-%E0%A6%93-%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%A7%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%B0-%E0%A6%85%E0%A6%AC%E0%A7%8B%E0%A6%B2%E0%A6%95%E0%A6%A8-2c9f1a68f939">
									<img src="{{ asset('front/covid/assets/images/advocacy/internal/qurantine-jibon.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://medium.com/@jpgsph.comms/%E0%A6%95%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0%E0%A6%BE%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BE%E0%A6%87%E0%A6%A8-%E0%A6%9C%E0%A7%80%E0%A6%AC%E0%A6%A8%E0%A6%83-%E0%A6%86%E0%A6%B2%E0%A7%8B-%E0%A6%93-%E0%A6%85%E0%A6%A8%E0%A7%8D%E0%A6%A7%E0%A6%95%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%B0-%E0%A6%85%E0%A6%AC%E0%A7%8B%E0%A6%B2%E0%A6%95%E0%A6%A8-2c9f1a68f939">কোয়ারান্টাইন জীবনঃ আলো ও অন্ধকারের অবোলকন</a></h5>
							<p class="written-by">মোঃ ইমরান হোসেন</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://medium.com/@jpgsph.comms/%E0%A6%B9%E0%A7%8B%E0%A6%AE-%E0%A6%95%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BF%E0%A6%A8-%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%A4%E0%A6%BE-%E0%A6%A5%E0%A7%87%E0%A6%95%E0%A7%87-%E0%A6%AA%E0%A7%87%E0%A6%B6%E0%A6%BE%E0%A6%A6%E0%A6%BE%E0%A6%B0-%E0%A6%9C%E0%A6%A8%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%BE%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A7%8D%E0%A6%AF%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A7%80-%E0%A6%B9%E0%A7%9F%E0%A7%87-%E0%A6%93%E0%A6%A0%E0%A6%BE%E0%A6%B0-%E0%A6%97%E0%A6%B2%E0%A7%8D%E0%A6%AA-911c8b5d9e2d">
									<img src="{{ asset('front/covid/assets/images/advocacy/internal/home-qurantine.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://medium.com/@jpgsph.comms/%E0%A6%B9%E0%A7%8B%E0%A6%AE-%E0%A6%95%E0%A7%8B%E0%A7%9F%E0%A6%BE%E0%A6%B0%E0%A7%87%E0%A6%A8%E0%A7%8D%E0%A6%9F%E0%A6%BF%E0%A6%A8-%E0%A6%85%E0%A6%AD%E0%A6%BF%E0%A6%9C%E0%A7%8D%E0%A6%9E%E0%A6%A4%E0%A6%BE-%E0%A6%A5%E0%A7%87%E0%A6%95%E0%A7%87-%E0%A6%AA%E0%A7%87%E0%A6%B6%E0%A6%BE%E0%A6%A6%E0%A6%BE%E0%A6%B0-%E0%A6%9C%E0%A6%A8%E0%A6%B8%E0%A7%8D%E0%A6%AC%E0%A6%BE%E0%A6%B8%E0%A7%8D%E0%A6%A5%E0%A7%8D%E0%A6%AF%E0%A6%95%E0%A6%B0%E0%A7%8D%E0%A6%AE%E0%A7%80-%E0%A6%B9%E0%A7%9F%E0%A7%87-%E0%A6%93%E0%A6%A0%E0%A6%BE%E0%A6%B0-%E0%A6%97%E0%A6%B2%E0%A7%8D%E0%A6%AA-911c8b5d9e2d">হোম কোয়ারেন্টিন: অভিজ্ঞতা থেকে ‘পেশাদার’ জনস্বাস্থ্যকর্মী হয়ে ওঠার গল্প</a></h5>
							<p class="written-by">সায়েমা আক্তার</p>
						</div>
					</div>
					<!-- Internal advocacy slider end here -->


					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h3 class="float-left">External publications</h3>
						<a target="_blank" href="advocacy.html#exter" class="float-right">View All</a>
					</div>
				</div>
				<div class="col-md-12">

					<div class="external-blog owl-carousel owl-theme">

						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://www.who.int/bulletin/volumes/98/7/20-030720.pdf') }}">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/sabina-who-interview.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://www.who.int/bulletin/volumes/98/7/20-030720.pdf') }}">Sabina Faiz Rashid: Research on Community Resilience</a></h5>
							<p class="written-by">WHO Bulletin</p>
						</div>

						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://www.thedailystar.net/opinion/perspective/news/homebound-the-first-eight-days-1888189">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/homebound_china.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://www.thedailystar.net/opinion/perspective/news/homebound-the-first-eight-days-1888189">Homebound: The first eight days</a></h5>
							<p class="written-by">by Mushtaque Chowdhury</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://www.dhakatribune.com/bangladesh/dhaka/2020/02/19/coronavirus-people-need-to-free-themselves-of-fear-and-take-necessary-measures">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/coronavirus-people.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://www.dhakatribune.com/bangladesh/dhaka/2020/02/19/coronavirus-people-need-to-free-themselves-of-fear-and-take-necessary-measures">Coronavirus: People need to free themselves of fear and take necessary measures</a></h5>
							<p class="written-by">by Saudia Afrin (Journalist of DT)</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://english.kalerkantho.com/online/trending/2020/02/20/33348">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/bracjpgsph.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://english.kalerkantho.com/online/trending/2020/02/20/33348">BRAC JPG School of Public Health hosts seminar on Coronavirus outbreak</a></h5>
							<p class="written-by">Press Release</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://opinion.bdnews24.com/bangla/archives/60217">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/home-qurantine-experience.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://opinion.bdnews24.com/bangla/archives/60217">হোম কোয়ারেন্টিন: অভিজ্ঞতা থেকে ‘পেশাদার’ জনস্বাস্থ্যকর্মী হয়ে ওঠার গল্প</a></h5>
							<p class="written-by">by Sayema Akter</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://english.kalerkantho.com/online/op-ed/2020/03/25/34361">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/pandora-box.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://english.kalerkantho.com/online/op-ed/2020/03/25/34361">Pandora’s box- what will remain?</a></h5>
							<p class="written-by">by Farzana Misha</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://www.dhakatribune.com/opinion/op-ed/2020/04/03/lessons-from-the-past">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/lesson-from-the-post.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://www.dhakatribune.com/opinion/op-ed/2020/04/03/lessons-from-the-past">Lessons from the Past: What the Ebola outbreak -- and other experiences -- teach us about containment</a></h5>
							<p class="written-by">by Mushtaque Chowdhury</p>
						</div>
						<div class="single-blog">
							<div class="blog-image">
								<a target="_blank" href="https://epaper.shampratikdeshkal.com/nogor-edition/2020-04-02/9?fbclid=IwAR20Gd3JCOh_npu2xK03bSxmxztWt0QEN4ex43t607WrRtStOTUYJExKtjc">
									<img src="{{ asset('front/covid/assets/images/advocacy/external/ucchasha.jpg') }}" alt="Internal blog image">
								</a>
							</div>
							<h5><a target="_blank" href="https://epaper.shampratikdeshkal.com/nogor-edition/2020-04-02/9?fbclid=IwAR20Gd3JCOh_npu2xK03bSxmxztWt0QEN4ex43t607WrRtStOTUYJExKtjc">করোনা ভাইরাসের নিজস্ব কোন উচ্চাশা নেই</a></h5>
							<p class="written-by">by AKM Mazharul Islam</p>
						</div>
					</div>
				</div>
			</div>

			<div class="row"></div>

			<div class="row mt-4">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>Midwifery</h3>
					</div>
				</div>
				<div class="col-md-7">
					<div class="education-text">
						<p class="mt-2">Three batches comprising of 631 students 7 academic sites under the Developing Midwives Project of the BRAC JPG School received training on COVID-19. They were also provided with posters and leaflets for distributing in their communities.</p>
						<p>380 students from the Midwives Project organized community meetings on the pandemic (uthan boithok) in their respective localities.</p>
						<p>Fifteen awareness programs were undertaken at two Midwives-led Centers (MLCs) at Jaintapur (UH&FWC), Sylhet and at Brac Maternity Centre, Dhaka between March 22 April 06, 2020.</p>
						<p>Dr. Selina Amin, Head of the Developing Midwives Project has been actively advocating with WHO for supplying necessary personal protective equipment for midwives.</p>   
					</div>
				</div>
				<div class="col-md-5">
					<div class="section-banner">
						<img src="{{ asset('front/covid/assets/images/advocacy/student.jpg') }}" alt="Banner Image">
					</div>
				</div>
				<div class="col-md-12 text-center">
					<div class="section-heading"></div>
					<h5><a href="assets/files/etra/Annual_Report_2018_Advocacy.pdf') }}" target="_blank">CLICK LINK FOR MORE INFORMATION</a></h5>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>MIDIWFERY LED CENTRE (MLC): - Advocacy</h3>
					</div>
					<div class="education-text">
						<p>Both MLCs in Dhaka and Sylhet are providing midwifery service during the ongoing outbreak of
						Covid-19. While the UH&FWCs in general struggle to attract maternity cases, the Midwife-led
						UH&FWC at Charikata, Sylhet is working very well. Similarly, our BRAC MLC at Mirpur is
						continuing their services to the mothers of the neighbouring areas. In April 2020, 58 normal
						vaginal deliveries took place, in comparison to 68 in March and 63 in February. The Covid19
						crisis did not alter the functioning or reputation of the Charikata Midwife led UH&FWC. Despite
						discouragement in view of the Covid19 situation, 170 antenatal visits took place in April alone.
						These show how the midwives have earned the trust of the local people. In addition, they also
						continued their family planning work. Similarly, in Mirpur BRAC Maternity MLC 30 normal
						deliveries took place in April in comparison to 43 in March and 29 in February and 95 antenatal
						visits also took place.in April</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<a href="{{ route('vUserCreatePage') }}" class="btn btn-jpg">Voice</a>
				</div>
			</div>

		</div>
	</section><!-- Advocacy End Here -->




@endsection