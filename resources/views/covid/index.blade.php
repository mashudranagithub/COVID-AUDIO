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
						<a target="_blank" href="{{ route('awarenessPage') }}" class="float-right">View All</a>
					</div>
				</div>
				<div class="col-md-12">
					<div class="owl-carousel awareness-slider">
						<div class="single-awareness">
							<div class="awareness-image">
								<a target="_blank" href="{{ asset('front/covid/assets/files/homeCare/Home-care-recommendation_English_09 06 2020 _English.pdf') }}">
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
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Role-play by the students: Exploring different aspects of Environment & Climate Change through the lens of Public Health</b></a></h3>
						<div class="course-details">
							<p class="mb-3">The MPH 16th batch students just completed their last course work for the academic year. Students highly enjoyed this module which included a teaching-learning experience. One of the specialities of  Environment, Health and Climate Change (MPH 541) is that it does not have a final exam but only a reflection of three things they learnt and have to summarize on the last day. Students got a chance to be acquainted with environmental determinants and factors broadly affecting health and wellbeing and gained basic understanding and orientation on key concepts, approaches and perspectives of environment, climate change and disaster in the context of public health implication. The course also dealt with the application of selected tools widely used for environmental assessment and further explored how policies and frameworks related to environment and climate change are formulated at national and international level.</p>
							<p>The course coordinator was Dr. Zahirul Islam; Clinical Research Fellow, Child Health Research Center at the University of University of Queensland, Australia. He used various means of technology to make the teaching sessions more interactive and interesting such as: Video Documentaries to explain the relation with health and Environment and climate changes; Mini workshop and panel sessions with experts from The Government and Highest International NGOs in the country, Futures Wheel Exercises, Simulation sessions, Facilitated discussions. Overall the module ensured a student-centred learning.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Students designing life course approach intervention</b></a></h3>
						<div class="course-details">
							<p class="mb-2">A 2 week long course on Aging and Health (MPH 681) started on October 11, 2020 and was designed to run for 2 weeks. This module introduced the students to population ageing, its underlying factors as well as regional and gender dimensions of ageing. Implications of rapid population ageing in low-income countries in the context of public health and care for older persons will be discussed. Students are exploring the preventable conditions which are causing mortality among the older population. Such as intestinal infections and nutrition related problems are still common in low-income regions of the world. The overall objective of the module is to provide an understanding of ageing taking a life-course approach and the necessity to view ageing from a multi-disciplinary perspective.</p>
							<p class="mb-2">We have professor Malay Kanti Mridha from JPGSPH and Professor Dr. Fariha Haseen from BSMMU to Coordinate the entire module, along with the following faculty members-</p>
							<p class="mb-2">Syed Masud Ahmed (BRAC JPGSPH), Malabika Sarker (BRAC JPGSPH), Helal Uddin Ahmed (NIMH), Manna Rahman (VSO), Mehedi Hasan (BRAC JPGSPH), Abu Hanif Mohammad Abdullah (BRAC JPGSPH).</p>
							<p class="mb-2">We also have Ipsita Sutradhar (BRAC JPGSPH) as a resource person and Nazrana Khaled (BRAC JPGSPH) and Fahmida Akter (BRAC JPGSPH).</p>
							<p>Students are analyzing public health implications of population growth and the burden of NCDs globally and at a national level in terms of the magnitude of the problem (economic burden, social burden and future impact). Identifying the multiple facets of ageing including functional ability, social support, role of the older persons, formal and informal care for older persons. Assessing the social, political, environmental, cultural and economic factors contributing to the burden of NCDs and illustrating health promotion aspects for preparation for healthy ageing from young adulthood through Mini Seminars arranged and conducted by the students in pairs or small groups everyday.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Virtual tour of Hospital setting in a LMIC: Exploring the Nutritional Status of Children</b></a></h3>
						<div class="course-details">
							<p>The two-week long course on Public Health Nutrition started on September 27 th , 2020 and the School prepared practical video shoots on the following:</p>
							<p class="mb-2">1. How to assess nutritional status of children and women: anthropometric techniques, Z scores and their interpretation</p>
							<p class="mb-2">2. Assessment of nutritional status: anthropometric techniques and their use</p>
							<p class="mb-2">3. Interviews and interpretation of the findings on Management of stunting, underweight, wasting, severe acute malnutrition, and Nutritional rehabilitation of severely malnourished children.</p>
							<p class="mb-3">4. Practical demonstration of the Preparation of therapeutic diets: F-75 and Khichuri and Nutritional rehabilitation.</p>
							<p class="mb-3">The Students were able to get a virtual tour of the Dhaka hospital and see the rehabilitation wards and interview of patients which helped them understand and conceptualize the causes of malnutrition learning from a hospital setting, gain an idea on assessment of nutritional status of children and women, and the different methods of improving intake of nutrients.</p>
							<p class="mb-3">In this module, Dr. Tahmeed Ahmed, MBBS, PhD, Senior Director & Senior Scientist, Nutrition & Clinical Services Division (NCSD), ICDDR,B and Professor, BRAC James P Grant School of Public Health, BRAC University is the Coordinator and teacher. He’s the first ever Bangladeshi to take up the position of Executive Director of ICDDR,B. Several scientists and research Investigators are partaking in this course to enrich the students with their practical knowledge and experiences through teaching different sessions.</p>
							<p>Students gained experience on food security, IYCF, nutrition during infections, nutrition during adolescence and pregnancy etc with supervision from Research officers, Research Investigators and Research Physicians from Icddrb.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Why Gender, sexual and reproductive health & rights matter?</b></a></h3>
						<div class="course-details">
							<p class="mb-3">Gender, sexual and reproductive health & rights (MPH 660) module started on the 6th of September, 2020 and designed in a way which will help the students to acquire broad perspective on sexual and reproductive health and rights of women and men and other vulnerable groups, gain a layered understanding of the broader factors that shape sexual and reproductive health and rights. Some of the layers that will be considered (with varying emphases for particular topics) are: epidemiology, anthropology, policy, human rights, and health programs. The course will explore how global and local agendas and contexts (social, cultural and political economic factors), and gender shape health experiences (i.e quality of care, neglect and other forms of denial, which impacts on access and rights).</p>
							<p class="mb-3">This module is Coordinated by Dr Sabina Faiz Rashid - Dean and Professor, BRAC James P Grant School of Public Health, BRAC University, Dhaka, Bangladesh, with the Co-coordinator Ms. Bachera Aktar - Assistant Director, The Center of Excellence for Gender, Sexual and Reproductive Health and Rights (CGSRHR), James P Grant School of Public Health, BRAC University, Dhaka, Bangladesh.</p>
							<p class="mb-3">‘Online Debates’ are a new addition and an integral part of this course. The objective of these debates is for students to understand global policies and local realities which impact on rights, and have healthy and logical discussions on the intersections between gender, socio-cultural, political and economic factors as they affect adversely reproductive health experiences and rights.</p>
							<p>Topics such as Legalization of abortion increases the rate of pre-marital sex and other ‘illicit’ relationships; Basic Comprehensive Sexuality education should be mandatory in primary education in all schools (Age 10 years and above); LGBTQI have the right to adopt children or have children of their own (i.e surrogacy); Need to promote and provide access to contraceptives for college going (grade 11 & 12) and university students in Educational Institution were discussed in these debates.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Multi-country virtual study in Infectious Diseases course during pandemic</b></a></h3>
						<div class="course-details">
							<p class="mb-3">Epidemiology of Infectious Diseases (MPH 620), a 3-week long course that started August 9th, introduced the students to a wide range of infectious diseases through illustrating the principles of infectious diseases around the globe. The course was conducted online and students acquired knowledge on the high burden of disease with data driven presentations from faculty members all over the world as well as strategies to reduce infectious disease burden in a low resource context.</p>
							<p class="mb-3">Dr. Richard A. Cash, Professor: Global Health and Population, Harvard T.H. Chan School of Public Health, USA; and Professor, BRAC JPG School of Public Health; Infectious Diseases; Research Ethics, and Dr. Stephen P. Luby, Professor of Medicine (Infectious Diseases), Associate Dean for Global Health Research, Stanford University, USA coordinated the entire module, along with other national and international faculty members. As per the requirement of the course, the students worked in groups and designed small study to assess impact of COVID-19 on issues related to social and health seeking behavior during pandemic: Livelihood, Health care seeking behavior, Trust in organizations, Mental health, and Adaptation of behaviour i.e. use of masks/facial covering, hand washing, etc.</p>
							<p>This is the first time the students conducted research in different countries simultaneously, which included the UK, India, Indonesia, Myanmar, Bangladesh, Maldives, Philippines. They collected quantitative and qualitative data through a variety of online data collection platforms including Phone interviews, online survey via different online platforms like Google, Facebook. Some of the research included Change in Healthcare Seeking Behaviour and Adaptation of Behaviour.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>MPH Students to analyse Health System and Policy of different countries</b></a></h3>
						<div class="course-details">
							<p class="mb-3">The MPH students have been getting engaged in active discussion, meaningful exchange of ideas and productive dialogue with health systems experts during the current Health Systems Management Module. The students are also critically reviewing health systems contexts and responses to covid-19 situations in different countries.</p>
							<p class="mb-3">As per the requirement of the course, students have also undertaken experiential learning projects on Health System’s response to COVID 19 pandemic in different country context and apply critical systems thinking approach in order to identify gaps and challenges and find out a possible solution.</p>
							<p class="mb-3">The course is being advised by Prof. Syed Masud Ahmed, Director, Centre of Excellence for Health Systems and Universal Health Coverage and coordinated by Shaikh A Shahed Hossain, Professor with support from other Facilitators.</p>
							<p>Students are also receiving critical sessions by distinguished faculty members and experts and practitioners from renowned organizations and institutions round the globe. Dr. Timothy Grant Evans, Inaugural Director and Associate Dean of the School of Population and Global Health (SPGH) in the Faculty of Medicine and Associate Vice-Principal at Global Policy and Innovation, McGill University; Ermin Erasmus, Collaboration for Health Policy & Systems Analysis in South Africa; Miatta Zenabu Gbanya, Immunization Specialist, UNICEF Afghanistan; Dr. Taufique Joarder, Research Director, USAID’s Multisectoral Nutrition Programming through Implementation Science Activity, FHI360 Bangladesh; Jannatul Ferdous, Health Officer (Health System Strengthening), UNICEF Bangladesh; Dr. ATM Iqbal Anwar, Project Director, Universal Health Coverage, Health System and Population Studies Division, ICDDRB and Dr. Mohammad Mushtuq Husain; Advisor IEDCR (Consultant, COVID-19 Pandemic Control, World Bank) have all provided these sessions to the students during the coursework.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>MPH STUDENTS DESIGN COMMUNITY BASED INNOVATIVE HEALTH INSURANCE SCHEME</b></a></h3>
						<div class="course-details">
							<p class="mb-3">The 5th online course taking place during the COVID-19 pandemic is the Health Economics and Health Care Financing module which is coordinated by Dr. Zahidul Quayyum, Professor of Health Economics; Co-Director Research and Co-Director Centre of Excellence for Urban Equity and Health (CUEH), and Dr. Jahangir Khan, Senior Lecturer at Department of International Public Health at Liverpool School of Tropical Medicine, UK; Adjunct Researcher, Department of Learning, Informatics, Management and Ethics, Karolinska Institutet, Sweden and Adjunct Professor.</p>
							<p class="mb-3">This course is intensively designed with lots of hands-on learning experiences that will foster basic understanding of different approaches of health economics and health care financing and its application in the field of public health. This course is separated in two different blocks: Block-I: Basic Concepts, Market for Health Care Goods, Resource Allocation, and Economic Evaluation, and Block-II: Healthcare Financing. The course is designed to engage students in interactive and meaningful discussion on different market forces and dynamics of the healthcare industry and how it relates to designing community based health insurance projects.</p>
							<p>Students have received critical sessions by distinguished faculty members and experts and practitioners from renowned organizations and institutions. Professor Nahid Akhter Jahan and Professor Sayed Abdul Hamid at Institute of Health Economics, University of Dhaka; Dr. Shakil Ahmed, Senior Economist at World Bank Group; Mr. Musabbir Rahim, Manager at BRAC-Aarong, and Dr. Sayem Ahmed; Health Economist at Liverpool School of Tropical Medicine, UK and Dr. Marufa Sultana, PhD Candidate at the Deakin University, Australia has conducted sessions with the students.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>MPH STUDENTS PARTICIPATE IN ONLINE QUANTITATIVE RESEARCH METHODS MODULE</b></a></h3>
						<div class="course-details">
							<p class="mb-3">After successful completion of the 4 week Biostatistics course, our MPH students are not lagging behind and have moved forward to the 3rd online course during the pandemic: Quantitative Research Methods. The course is coordinated by Malabika Sarker Professor and Associate Dean; Director of Research, Director Center of Excellence for Science of Implementation & Scale-Up (CoE-SISU). The QRM course is designed as an intensive, hands-on learning experience that will foster the development of a basic understanding of different research designs and concrete skills in quantitative research methods, with a particular emphasis on survey development.</p>
							<p>Unlike other previous online modules, students are doing online group work to design a quantitative research query, make data collection plans in a pandemic, collect data online and present findings in group.</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"> <b> MPH Students undertake online Biostatistics course </b></a></h3>
						<div class="course-details">
							<p>The course that took place during the pandemic was the Biostatistical course. The MPH Students took the Biostatistics course online after the successful completion of Epidemiology course. The course was coordinated by Dr Md. Tanvir Hasan Assistant Professor and Co-Director of Centre of Excellence for Urban Equity and Health (CUEH). This 4-week course equips students with basic statistical tools and its application in public health.</p>
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
					<h5><a href="{{ asset('front/covid/assets/files/etra/Annual_Report_2018_Education.pdf') }}" target="_blank">Click here for more information on MPH programme</a></h5>
				</div>
				<div class="col-md-6">
					<div id="evoCalendar" class="sidebar-hide"></div>
					<h5><a href="{{ asset('front/covid/assets/files/MPHCalendar2020-21-Final.pdf') }}" target="_blank">Click here to see the full MPH Academic Calendar 2020-21 in pdf file</a></h5>
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

						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">Health, Fitness, and Nutrition during COVID-19</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>3 December 2020, Thursday</p>
											<p><b>TIME:  </b>5:00 pm -  6:30 pm (Bangladesh Standard Time)</p>

											<p><b>Panel Speakers:</b></p>

											<p><b>Tanjim Ahmad Sohel Taj,</b> Social Activist, Founder of Inspire Fitness; Host and Creator of Hotline Commando</p>

											<p><b>Nazia Hassan,</b> Certified Fitness Trainer</p>
											<p><b>Professor Malay Kanti Mridha,</b> Professor and  Director of the Centre of Excellence for Non-Communicable Diseases & Nutrition (CNCDN), BRAC James P Grant School of Public Health, BRAC University</p>

											<p><b>Moderator:</b></p>

											<p><b>Rafee Muhammad Tamjid</b>, Assistant Manager, New Media, BRAC James P Grant School of Public Health, BRAC University</p>

											<p><b>Full Webinar Video: </b> <a class="mt-3" target="_blank" href="https://www.youtube.com/watch?v=i75GusfbD1E">https://www.youtube.com/watch?v=i75GusfbD1E</a></p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/health-fitness.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>

										<p class="mb-3"></p>

										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/health-fitness.jpg') }}" target="_blank">Click here to see more</a></h5>

									</div>
								</div>
							</div>
						</div>

						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">"Producing a Safe and Effective Vaccine: Align Public Health Needs with Economic & Social Development Objectives"</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>23 November 2020</p>
											<p><b>TIME:  </b>4:00 PM – 5:30 PM (Bangladesh Standard Time)</p>

											<p><b>Panel Speakers:</b></p>

											<p><b>Malabika Sarker,</b> Professor & Associate Dean of BRAC James P Grant School of Public Health, BRAC University; Director, CoE Science of Implementation & Scale Up (SISU)</p>

											<p><b>Prof. Ian Frazer,</b> Nobel prize and inventor of the vaccine against human papillomavirus (HPV)</p>
											<p><b>Professor Walter Ricciardi,</b> President, WFPHA</p>
											<p><b>Dr. Jane Barratt,</b> Secretary Genereal, IFA</p>
											<p><b>Dr. Michael Moore AM,</b> Former President, WFPHA</p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/safe-effecting-vaccine.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>

										<p class="mb-3"></p>

										<p><b>Full Webinar Video: </b> <a class="mt-3" target="_blank" href="https://www.facebook.com/834660103326222/videos/393548095093599">https://www.facebook.com/834660103326222/videos/393548095093599</a></p>

										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/safe-effecting-vaccine.jpg') }}" target="_blank">Click here to see more</a></h5>

									</div>
								</div>
							</div>
						</div>


						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">Implementation Research: A catalyst for bridging the knowledge gap between Discovery to Delivery</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>Thursday, November 19, 2020</p>
											<p><b>TIME:  </b>9:00 am-10:30 am (Berkeley time) | 11 pm - 12:30 am (Dhaka time)</p>

											<p><b>Panel Speaker:</b></p>

											<p><b>Malabika Sarker,</b> Professor & Associate Dean of BRAC James P Grant School of Public Health, BRAC University; Director, CoE Science of Implementation & Scale Up (SISU)</p>

											<p><b>Moderator:</b></p>

											<p><b>Bilal Siddiqi,</b> Director of Research, Center for Effective Global Action (CEGA), UC Berkeley</p>

											<p><b>Full Webinar Video: </b> <a class="mt-3" target="_blank" href="https://www.youtube.com/watch?v=6Y0ljQJtUzQ">https://www.youtube.com/watch?v=6Y0ljQJtUzQ</a></p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/implementation-research.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>

										<p class="mb-3"></p>

										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/implementation-research.jpg') }}" target="_blank">Click here to see more</a></h5>

									</div>
								</div>
							</div>
						</div>

						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">Community Health Workers During COVID-19</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>11 October 2020, Sunday</p>
											<p><b>TIME:  </b>4:00 pm -  5:30 pm  Bangladesh Standard Time</p>

											<p><b>Panellists:</b></p>

											<p><b>1. Dr AKM Rezaul Haque</b>, Senior Director, Health and Training, Gonoshasthaya Kendra(GK)</p>
											<p><b>2. Dr Fawzia Rasheed</b>, Senior Adviser to the Director of Health of the Aga Khan Development Network</p>
											<p><b>3. Dr Mushtaque Chowdhury</b>, Advisor, BRAC JPGSPH, Convener, Bangladesh Health Watch(BHW)</p>
											<p><b>4. Dr Morseda Chowdhury</b>, Associate Director at Health, Nutrition and Population Programme, BRAC Bangladesh</p>

											<p><b>The webinar seats are limited and will be filled on a rolling basis. To join, please Sign Up:</b>
											<a class="mb-3" target="_blank" href="https://forms.gle/3rNPUYWXeSzpn196A">https://forms.gle/3rNPUYWXeSzpn196A</a></p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/community-health-workers.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>

										<p class="mb-3"></p>

										<p><b>The webinar will be broadcast live on the BRAC JPGSPH Facebook Page:</b> <a class="mb-3" target="_blank" href="http://www.facebook.com/BRACJPGSPH">http://www.facebook.com/BRACJPGSPH</a></p>
										

										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/community-health-workers.jpg') }}" target="_blank">Click here to see more</a></h5>

										
									</div>
								</div>
							</div>
						</div>

						<div class="webinar education-text mb-4">
							<li><h4 class="show-webinar">Colourism in South Asia</h4></li>
							<div class="webinar-details">
								<div class="row">		
									<div class="col-md-6">
										<div class="education-text">

											<p><b>DATE:  </b>24 September, 2020</p>
											<p><b>TIME:  </b>4.00PM to 5.00PM (BD Time) <br>3.30PM to 4.30PM (India Time)</p>

											<p><b>Welcome by:</b></p> 
											<p><b>Sabina Faiz Rashid,</b>PhD, Dean and Professor, BRAC James P Grant School of Public Health, Associate Vice President, IMPACT, BRAC University</p>

											<p><b>Speaker:</b></p>
											<p><b>Nandita Das, </b>Actor, Director and Social Activist, India</p>

											<p><b>Moderator:</b></p>
											<p><b>Farhana Alam, </b>Assistant Director, Center for Gender, Sexual and Reproductive Health and Rights (CGSRHR), BRAC James P Grant School of Public Health, BRAC University</p>

											<p><b>The webinar seats are limited and will be filled on a rolling basis. To join, please Sign Up:</b>
											<a class="mb-3" target="_blank" href="https://forms.gle/gT9F2ZarCzy6nGd7A">https://forms.gle/gT9F2ZarCzy6nGd7A</a></p>

										</div>
									</div>
									<div class="col-md-6">
										<div class="section-banner">
											<img src="{{ asset('front/covid/assets/images/webinar/colourism-in-asia.jpg') }}" alt="Webinar Banner Image">
										</div>
										<hr>

										<p><b>The webinar will be broadcast live on the BRAC JPGSPH Facebook Page:</b> <a class="mb-3" target="_blank" href="http://www.facebook.com/BRACJPGSPH">http://www.facebook.com/BRACJPGSPH</a></p>

										<h5 class="mt-3"><a href="{{ asset('front/covid/assets/images/webinar/colourism-in-asia.jpg') }}" target="_blank">Click here to see more</a></h5>

									</div>
								</div>
							</div>
						</div>

					</ul>


				</div>
				<div class="col-md-12">
					<h5><a href="{{ route('webinarsPage') }}" target="_blank">View all webinars</a></h5>
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
						<a target="_blank" href="{{ asset('front/covid/assets/files/Training on COVID-2019_BRAC JPGSPH.pdf') }}">
							<h5>One week training on awareness, prevention, and protection from COVID-19 was completed with the BRAC JPG School students, researchers, academics, faculty, and management staff.</h5>
						</a>
					</div>
					<h4><a target="_blank" href="{{ asset('front/covid/assets/files/Training on COVID-2019_BRAC JPGSPH.pdf') }}">Click for Training</a></h4>
				</div>
				<div class="col-md-4">
					<div class="single-training">
						<a target="_blank" href="javascript:void(0);">
							<img src="{{ asset('front/covid/assets/images/training/bracjpg-office-training.jpg') }}" alt="Training on covid-19">
						</a>
					</div>
					<h4><a target="_blank" href="{{ asset('front/covid/assets/files/Training on COVID-2019_BRAC JPGSPH.pdf') }}">COVID-19 training for support staff</a></h4>
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
					<h5><a href="{{ asset('front/covid/assets/files/etra/Annual_Report_2018_Training.pdf') }}" target="_blank">CLICK LINK FOR MORE INFORMATION</a></h5>
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
						<h5 class="mt-3"><a href="{{ asset('front/covid/assets/files/research/Organisation Capacity Statement.pdf') }}" target="_blank">Click for Organisational statement</a></h5>
					</div>
				</div>
			</div>			

			<div class="row mt-4 mb-4">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>31 NEW AND UPCOMING RAPID RESEARCH SURVEYS AND QUALITATIVE ASSESSMENTS ARE BEING UNDER TAKEN (APRIL- PRESENT) AND 14 COMPLETED:</h3>
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
						<h5 class="mt-3"><a href="{{ asset('front/covid/assets/files/research/pdf/Research Updates- send to mukul_allPage.pdf') }}" target="_blank">Click here to see more</a></h5>
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
						<p><b><a target="_blank" href="{{ asset('front/covid/assets/files/research/peer_reviewed_publication/PEER-REVIEWED-PUBLICATIONS-2020.pdf') }}">PEER-REVIEWED PUBLICATIONS 2020: (PDF)</a></b></p>
						<p><b><a target="_blank" href="{{ asset('front/covid/assets/files/research/peer_reviewed_publication/PUBLICATIONS-2019.pdf') }}">PEER-REVIEWED PUBLICATIONS 2019: (PDF)</a></b></p>
						<p><b><a target="_blank" href="http://bracjpgsph.org/images/PUBLICATION/Publications_2018_FinalV3.pdf">January - December 2018: (PDF)</a></b></p>
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
							<a href="{{ asset('front/covid/assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/pregnant_woman.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}" target="_blank">Psychological stress of pregnant women during coronavirus disease</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Health_System.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/health-system-nine-weeks.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Health_System.pdf') }}" target="_blank">Bangladesh Health System’s Response to COVID-19 during First Nine weeks</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Health_System.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Exploring-the-impact-of-covid-19-on-adolescents-in-urban-slums-in-Dhaka-Bangladesh.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/young-voices.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Exploring-the-impact-of-covid-19-on-adolescents-in-urban-slums-in-Dhaka-Bangladesh.pdf') }}" target="_blank">Exploring the impact of covid-19 on adolescents</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Exploring-the-impact-of-covid-19-on-adolescents-in-urban-slums-in-Dhaka-Bangladesh.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/pdf/Gender.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/gender.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/pdf/Gender.pdf') }}" target="_blank">Gender based perception and differentials of COVID-19</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/pdf/Gender.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/pdf/Masud-Bhai.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/flw.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/pdf/Masud-Bhai.pdf') }}" target="_blank">Re-visiting Front Line Health Workers</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/pdf/Masud-Bhai.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/pdf/Disabilities .pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/disabilities.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/pdf/Disabilities .pdf') }}" target="_blank"> LIVES OF PEOPLE WITH DISABILITIES DURING COVID-19</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/pdf/Disabilities .pdf') }}" class="btn-more" target="_blank">Research brief will be uploaded once completed</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/stigma.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}" target="_blank">Stigma, Shame and COVID-19</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Immunization backlogs_Final.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/immunization.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Immunization backlogs_Final.pdf') }}" target="_blank">Immunization Backlogs</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Immunization backlogs_Final.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Slum_Health .pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/slum-health.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Slum_Health .pdf') }}" target="_blank">Slum Health</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Slum_Health .pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Balancing_hunger_and_response.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/socially.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Balancing_hunger_and_response.pdf') }}" target="_blank">A Socially Just Model</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Balancing_hunger_and_response.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>

						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/front-line-workers.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}" target="_blank">frontline workers</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/awareness.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}" target="_blank">health awareness</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/local-beliefs.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}" target="_blank">local cultural beliefs on health</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/mental-health.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}" target="_blank">mental health</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min_Updated.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/hijra.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min_Updated.pdf') }}" target="_blank">on the fringes transgender communities</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min_Updated.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/rmg.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}" target="_blank">rmg workers</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
						<div class="single-brief">
							<a href="{{ asset('front/covid/assets/files/research/brief/ARISE-Urban Poor 7may.pdf') }}" target="_blank">
								<img src="{{ asset('front/covid/assets/images/research/brief/ARISE.jpg') }}" alt="Research Brief Image">
							</a>
							<h4><a href="{{ asset('front/covid/assets/files/research/brief/ARISE-Urban Poor 7may.pdf') }}" target="_blank">Urban poor lived experiences in slums</a></h4>
							<a href="{{ asset('front/covid/assets/files/research/brief/ARISE-Urban Poor 7may.pdf') }}" class="btn-more" target="_blank">Click here for more information</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row mt-4 mb-4">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h3></h3>
					</div>
					<h3>COVID-19 RESEARCH ARE PART OF THE 5 CENTRES AT THE SCHOOL AND SOME FOCUS ON HUMANITARIAN RESEARCH IN THE ROHINGYA CAMPS AND HOST COMMUNITIES</h3>
					<h3>CENTRES OF RESEARCH EXCELLENCE</h3>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-7">
					<div class="research-center-part">
						<h3>Current Ongoing Research (April 2020 - Present)</h3>


						<div class="research-ongoing-part">
							<div class="single-research">
					
					<ul>

						<!-- 22 October Added list start -->
						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/BRAC’s Community-based Comprehensive.pdf') }}">A baseline survey of an evaluation study of BRAC’s Community-based Comprehensive COVID-19 Response Project</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/Sex Workers in Bangladesh during covid.pdf') }}">The Impact of COVID-19 on the social, economic, and psychosocial wellbeing of Sex-Workers in Bangladesh</a></li>			

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/7. Evaluation and Implementation.pdf') }}">Evaluation and Implementation Research on BRAC Comprehensive COVID-19 Response</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/1. Bridging Communities in Cox’s Bazar.pdf') }}">Bridging Communities in Cox’s Bazar: Mitigating Risks and Promoting Gender, Governance and Localization of Humanitarian Responses in COVID-19 Era</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/BRAC-CDC.pdf') }}">Evaluation of BRAC-CDC Collaboration on Community Surveillance and Response in selected areas of Gazipur</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/10. Managing Impact of COVID-19 in Rohingya Refugee Camps.pdf') }}">Managing Impact of COVID-19 in Rohingya Refugee Camps and Host Communities with Culturally Appropriate Technological Solutions</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/Skills-Demand-Analysis.pdf') }}">Skills Demand Analysis of Healthcare Services in Bangladesh, 2020</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/3. Gender and COVID-19.pdf') }}">Gender and COVID-19</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/4. Life in the Times.pdf') }}">Life in the Times of Coronavirus: A Gendered Perspective</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/9. Effect and challenges of introducing.pdf') }}">Effect and challenges of introducing referral transportation system project on utilization of comprehensive SRHR health services during Covid-19 pandemic in Rohingya population: An implementation research on fidelity and coverage</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/6. Exploring the perception of caregivers.pdf') }}">Exploring the perception of caregivers’ engagement about Pashe Achi telecommunication model</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/Perceptions-of.pdf') }}">Perceptions of Frontline Workers on Psychosocial Training</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/Pashe-Achi.pdf') }}">A Process Documentation of the National Approach to Preventing COVID-19 Infections in Bangladesh</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/The Impact of COVID-19 .pdf') }}">The Impact of COVID-19 on the Psychosocial Wellbeing of the Sexually Marginalized Community in Bangladesh</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/COVID 19 Shutdown.pdf') }}">COVID 19 shutdown: a new threat to the personal, social and economic wellbeing of Dalit community</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Exploring Opportuniti.pdf') }}">Exploring Opportunities to Improve Health Outcomes and Enable better Health Systems Delivery through Mobile Money: Impact of COVID-19</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/COVID-19 Mitigatio.pdf') }}">COVID-19 mitigation Study among Migrant Workers in Singapore</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/What works to continue.pdf') }}">What works to continue maternal and neonatal healthcare services during COVID-19 pandemic by MANOSHI Programme in urban slums of Bangladesh?-a case study</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Telecounselling Interv.pdf') }}">Telecounselling Interventions during COVID-19 Situation in Bangladesh: A  Process Documentation</a></li>

						<li><a target="_blank" href="#">Pashe Achi Telecommunication model of BIED during COVID-19 Situation in Bangladesh: A process documentation study</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/5. COVID19 Knowledge, perceptions.pdf') }}">COVID-19: Knowledge, perceptions, and experience of lives and livelihood and mental health of Rohingya Refugees in Camps of Bangladesh</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/ongoing/2. COVID-19 Response Process Documentation Research.pdf') }}">BRAC COVID-19 Response Process Documentation Research</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Understanding kno.pdf') }}">Understanding knowledge and awareness on COVID-19 (Corona disease) and its impact on Livelihoods and life of Rohingya Refugee Camps in Cox’s Bazar, Bangladesh</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Mental and Emotional H.pdf') }}">Mental And Emotional Health and Well-Being of University Students</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Knowledge, Practices.pdf') }}">COVID 19: Knowledge, Practices and Impact in South-Asia (Bangladesh Component)</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/A Quick Assessm.pdf') }}">A Quick Assessment of Knowledge, Perceptions, Barriers and Enablers, and Experiences of the Frontline Health Workers (Flws) Vis-à-vis COVID-19 Epidemic Management in Bangladesh</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Adapting with the.pdf') }}">Adapting with the Context: ‘One BRAC’ Story in COVID-19 Response in Bangladesh</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/COVID-19 Impact.pdf') }}">Covid-19 Impact on Urban Slums and Low Income Settlements: Education, Psychosocial Wellbeing and coping</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/COVID-19 Impact in Bangladesh_22may2020.pdf') }}">COVID-19 Impact in Bangladesh: Transmission Dynamics, Health System, Preparedness and Financing by Districts</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Survey on Consumer.pdf') }}">Survey on consumer awareness of Nutrition, Food Safety and Hygiene</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Media Surveillance.pdf') }}">Media Surveillance On Coronavirus</a></li>

						<!-- <li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Advancing Inclusive.pdf') }}">Advancing inclusive and resilient urban development targeted at the urban poor in Bangladesh</a></li>
						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/BRAC Health.pdf') }}">BRAC health, nutrition and population programme (HNPP): impact evaluation and social return on investment of selected programmes</a></li> -->
						
						<!-- <li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/A Process Docu.pdf') }}">A Process Documentation of the Radio Intervention during COVID-19 Situation in Bangladesh</a></li>

						<li><a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Telecommunication model.pdf') }}">Telecommunication model towards Govt. Play Lab students:   A process documentation l during COVID-19 Situation in Bangladesh</a></li>
						
						<li><a target="_blank" href="#">An integrated research on comprehensive response to COVID 19 in two rural subdistricts in Bangladesh led by BRAC</a></li> -->
					</ul>
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
									<p class="director-name">Led by <a target="_blank" href="{{ asset('front/covid/assets/files/cv/Dr-Rashid-Resume-October-v5.2020.pdf') }}"><span>Professor Sabina Faiz Rashid</span></a></p>
									<a target="_blank" href="{{ asset('front/covid/assets/files/cv/Dr-Rashid-Resume-October-v5.2020.pdf') }}" class="cv-link">Show CV</a>
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
									<p class="director-name">Led by <a target="_blank" href="{{ asset('front/covid/assets/files/cv/Malabika-Sarker_Full_CV_ April 2020.pdf') }}"><span>Professor Malabika Sarker</span></a></p>
									<a target="_blank" href="{{ asset('front/covid/assets/files/cv/Malabika-Sarker_Full_CV_ April 2020.pdf') }}" class="cv-link">Show CV</a>
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
									<p class="director-name">Led by <a target="_blank" href="{{ asset('front/covid/assets/files/cv/CV-of-Syed-Masud-Ahmed_Mar. 2020.pdf') }}"><span>Professor Syed Masud Ahmed</span></a></p>
									<a target="_blank" href="{{ asset('front/covid/assets/files/cv/CV-of-Syed-Masud-Ahmed_Mar. 2020.pdf') }}" class="cv-link">Show CV</a>
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
									<p class="director-name">Led by <a target="_blank" href="{{ asset('front/covid/assets/files/cv/CV_Z.Quayyum_Nov20.pdf') }}"><span>Professor Zahidul Quaiyyum</span></a> & <a target="_blank" href="{{ asset('front/covid/assets/files/cv/CV_Tanvir-Hasan_September-24-2020.pdf') }}"><span>Associate Professor Tanvir Hassan</span></a></p>
									<a target="_blank" href="{{ asset('front/covid/assets/files/cv/CV_Z.Quayyum_Nov20.pdf') }}" class="cv-link">CV of Zahidul Quaiyyum</a> <br> <br>
									<a target="_blank" href="{{ asset('front/covid/assets/files/cv/CV_Tanvir-Hasan_September-24-2020.pdf') }}" class="cv-link">CV of Tanvir Hassan</a>
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
									<p class="director-name">Led by <a target="_blank" href="{{ asset('front/covid/assets/files/cv/Malay_Kanti_Mridha_CV_2020.pdf') }}"><span>Professor Malay Kanti Mridha</span></a></p>
									<a target="_blank" href="{{ asset('front/covid/assets/files/cv/Malay_Kanti_Mridha_CV_2020.pdf') }}" class="cv-link">Show CV</a>
								</div>
							</div>
						</div>
						<div class="ongoing-research">
							<h4><a target="_blank" href="{{ asset('front/covid/assets/files/research/Research-Project-2020.pdf') }}">2020 research list</a></h4>
							<h4><a target="_blank" href="{{ asset('front/covid/assets/files/research/Research-2019.pdf') }}">2019 research list</a></h4>
						</div>
					</div>

					<!-- New section to link voice memo -->
					<div class="research-center-part mt-4">
						<h4>Innovative digital research on gendered experience on COVID-19</h4>
						<div class="registration-image" style="overflow: hidden; margin-bottom:25px;">
							<a href="{{ route('vUserCreatePage') }}">
								<img src="{{ asset('voice/assets/images/registration/man-at-the-office-2127140-1.png') }}" alt="Registration Image">
							</a>
						</div>
						<a href="{{ route('vUserCreatePage') }}">Click here to record your voice memo</a>
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
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Mothers & Pregnant Women During Covid19.pdf') }}">Psychological Stress of Pregnant Women During the Coronavirus Disease (Covid-19) Pandemic</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Health_System.pdf') }}">Health System’s Response to COVID-19 In Bangladesh: A Rapid Study on the key building blocks</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Gender.pdf') }}">Gender based perception and differentials of COVID-19: Findings from Rapid Surveys</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/Masud-Bhai.pdf') }}">Re-visitng the Front Line health Workers’ (FLWs) attending suspected or confirmed COVID-19 patients in Bangladesh: how far has the situation improved in a month since the last survey?</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/pdf/V2_Final_COVID Research Brief-Revised Version_15.12 (2).pdf') }}">Livelihood, food security and well-being of persons with disabilities in Bangladesh during the COVID-19 Pandemic.</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/Stgma-Shame-and-COVID-19.pdf') }}">Stigma, Shame and COVID-19: "They Won't Even Touch the Money We Touched”</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Immunization backlogs_Final.pdf') }}">Immunization Backlogs: A Quick Assessment of the Effects of COVID-19 on the Expanded Programme on Immunization (EPI) in Bangladesh</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Health Awareness_April 19_final brief 2020-min.pdf') }}">JPG COVID-19 Rapid Survey in Urban and Rural sites: Awareness and knowledge about COVID-19 during the early onslaught of the pandemic</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Mental health_April 19_final brief 2020-min.pdf') }}">JPG COVID-19 Rapid Survey in Urban and Rural sites: Loss of Mental Well-being at the time of COVID-19 Pandemic</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Local Cultural beliefs on Health_April 19_final brief 2020-min.pdf') }}">Developing Appropriate Health Messaging for Urban and Rural Populations</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Urban_ Poor Lived Experiences in SLums ARISE_April 19_final brief 2020-min.pdf') }}">IMPACT ON COVID-19- Lived Experiences of the Urban Poor in Slums during the Shutdown</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/On the fringes Transgender Communities_April 19_final brief 2020-min_Updated.pdf') }}">ON THE FRINGES: Impact of COVID-19 Shutdown on Hijras Daily Personal, Social and Economic lives</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/Frontline workers_April 19_final brief 2020-min.pdf') }}">Front Line Health Workers (FLWs) perceptions and opinions on their personal safety while attending suspected or confirmed COVID-19 patients in Bangladesh</a>
										</h4>
									</li>

									<li>
										<h4>
											<a target="_blank" href="{{ asset('front/covid/assets/files/research/brief/RMG workers_April 19_final brief 2020-min.pdf') }}">Pins and needles at the time of a pandemic: Learning from the RMG workers through a rapid survey</a>
										</h4>
									</li>

								</ul>
							</div>
						</div>
</div>

				<div class="col-md-12 text-center">
					<div class="section-heading"></div>
					<h5><a href="{{ asset('front/covid/assets/files/etra/Annual_Report_2018_Research.pdf') }}" target="_blank">CLICK LINK FOR MORE INFORMATION</a></h5>
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
						<h3 class="float-left">95 NEWS ARTICLES AND 21 NEW BLOGS HAVE BEEN POSTED SINCE APRIL</h3>
						<a target="_blank" href="{{ route('advocacyPage') }}#exter" class="float-right">View All</a>
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
						<a target="_blank" href="{{ route('advocacyPage') }}" class="float-right">View All</a>
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

			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>MEMBERSHIPS (2020)</h3>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Professor Sabina Faiz Rashid</b></a></h3>
						<div class="course-details"> 
							<h4>Membership of Boards, Secretariat, Organizations in 2020</h4>
							<p class="mb-3"><b>September 1, 2020:</b>Invited to be member of the COVID-19 Research Roadmap social science working group, World Health Organisation, Geneva, Switzerland</p>
							<p class="mb-3"><b>July 1, 2020:</b> Co-Chair the World Congress on Public Health (October 12-16, 2020), Congress Management Committee, World Federation of Public Health Associations, Headquarters, University of Geneva</p>
							<p class="mb-3"><b>June 2020:</b> Member, of the MRC Wellcome Trust Joint Health Systems Research Committee (three years’ appointment), UK</p>
							<p class="mb-3"><b>May 2020:</b> Member of the Global Network for Academic Public Health, the focus of the network is to engage in conversations to enhance academic public health worldwide through mutual learning and collaborations between academic public health institutions globally.</p>
							<p class="mb-3"><b>April 2020:</b> Lead Focal, (Bangladesh), Regional Platform on Gender and Sexual and Reproductive Health and Rights, with Partner platforms in India and Nepal. Overall coordinator, SRHM, Geneva, (funded by Gates, India)</p>
							<p class="mb-4"><b>March 2020 – Present:</b> Member, Rockefeller-BU 3-D Commission, led by Professor Sandro Galeo, Dean, Robert A Knox Professor, School of Public Health, Boston University (global group of members as part of the Commission), funded by Rockefeller Foundation.</p>
							<h4>Board Member of International Journals in 2020</h4>
							<p><b>2020</b> - Editorial Advisory Board, Sexual Reproductive Health Matters SRHM (Peer reviewed Journal) 
							(Member of the advisory board of additional 5 peer-reviewed journals since 2012)</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Professor Malabika Sarker</b></a></h3>
						<div class="course-details">
							<p><b>2020:</b> Panel member, Applied Global Health Research Board, MRC, UKRI, UK</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Professor Kaosar Afsana</b></a></h3>
						<div class="course-details">
							<p class="mb-2">- Vice-Chair, Scientific Committee, UN Summit for Food Security 2021, United Nations, New    York, USA</p>
							<p>- Member, Strategic Committee, Ahimsa Renaissance ThinkTank, Ahimsha Fund, Lyon, France</p>
						</div>
					</div>
					<div class="single-edu-faq">
						<h3 class="show-details"><a href="javascript:void(0);" class="education-color"><b>Professor Malay Kanti Mridha</b></a></h3>
						<div class="course-details">
							<p>External Editor of the Borneo Journal of Medical Sciences. The journal is published by the Department of Medicine and Health Sciences of Univirsiti Malaysia Sabah (UMS)</p>
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
					<h5><a href="{{ asset('front/covid/assets/files/etra/Annual_Report_2018_Advocacy.pdf') }}" target="_blank">CLICK LINK FOR MORE INFORMATION</a></h5>
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

			<div class="row mt-3">
				<div class="col-md-12">
					<div class="section-heading">
						<h3>New Membership in 2020 in Dhaka Academic Sites</h3>
					</div>
					<div class="education-text">
						<table>
							<thead>
								<tr>
									<th>SI No</th>
									<th>PIN No</th>
									<th>Title</th>
									<th>Name</th>
									<th>Gender</th>
									<th>Designation</th>
									<th>Date of Joining</th>
									<th>Contract Ending Date</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>12609</td>
									<td>Ms.</td>
									<td>Surayia Begum</td>
									<td>F</td>
									<td>Principal</td>
									<td>5-Apr-20</td>
									<td>30-Sep-21</td>
								</tr>
								<tr>
									<td>2</td>
									<td>12607</td>
									<td>Ms.</td>
									<td>Pabitra Chakma</td>
									<td>F</td>
									<td>Jr. Instructor</td>
									<td>1-Apr-20</td>
									<td>30-Sep-21</td>
								</tr>
								<tr>
									<td>3</td>
									<td>12608</td>
									<td>Ms.</td>
									<td>Sanchita Baidda</td>
									<td>F</td>
									<td>Jr. Instructor</td>
									<td>1-Apr-20</td>
									<td>30-Sep-21</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section><!-- Advocacy End Here -->



@endsection