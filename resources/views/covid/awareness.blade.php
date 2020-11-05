@extends('covid.layouts.master')

@section('content')
	


	<section id="hotline-scroll">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<marquee behavior="scroll" direction="right-to-left">COVID-19 HOTLINE <span>333, 10655, 16263, 01944333222</span></marquee>
				</div>
			</div>
		</div>
	</section>




	<section id="Awareness" class="awareness-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="section-heading">
						<h3 class="float-left">COVID-19 AWARENESS</h3>
						<a target="_blank" href="index.html" class="float-right">Back to Home</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-awareness">
						<div class="awareness-image">
							<a target="_blank" href="{{ asset('front/covid/assets/files/homeCare/Home-care-recommendation_English_09 06 2020 _English.pdf') }}">
								<img src="{{ asset('front/covid/assets/images/awareness/home-care.jpg') }}" alt="Home Care">
							</a>
						</div>
						<h4><a target="_blank" href="{{ asset('front/covid/assets/files/homeCare/Home-care-recommendation_English_09 06 2020 _English.pdf') }}">Home Care Recommendation (English)</a></h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-awareness">
						<div class="awareness-image">
							<a target="_blank" href="{{ asset('front/covid/assets/files/homeCare/Home-care-recommendation_Bangla_09 06 2020.pdf') }}">
								<img src="{{ asset('front/covid/assets/images/awareness/home-care.jpg') }}" alt="Home Care">
							</a>
						</div>
						<h4><a target="_blank" href="{{ asset('front/covid/assets/files/homeCare/Home-care-recommendation_Bangla_09 06 2020.pdf') }}">Home Care Recommendation (Bangla)</a></h4>
					</div>
				</div>
				<div class="col-md-6">
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
				</div>
				<div class="col-md-6">
					<div class="single-awareness">
						<div class="awareness-image">
							<a target="_blank" href="{{ asset('front/covid/assets/images/awareness/three-cs.jpg') }}">
								<img src="{{ asset('front/covid/assets/images/awareness/three-cs.jpg') }}" alt="AWARENESS POSTER IMAGE">
							</a>
						</div>
						<h4><a href="javascript:void(0);">Avoid the "Three Cs"</a></h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-awareness">
						<div class="awareness-image">
							<a target="_blank" href="{{ asset('front/covid/assets/images/awareness/5-key-msg.jpg') }}">
								<img src="{{ asset('front/covid/assets/images/awareness/5-key-msg.jpg') }}" alt="5 key messages image">
							</a>
						</div>
						<h4><a href="javascript:void(0);">Five Key Messages</a></h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-awareness">
						<div class="awareness-image">
							<a target="_blank" href="{{ asset('front/covid/assets/images/awareness/english-poster.jpg') }}">
								<img src="{{ asset('front/covid/assets/images/awareness/english-poster.jpg') }}" alt="AWARENESS POSTER IMAGE">
							</a>
						</div>
						<h4><a href="javascript:void(0);">WAYS OF PREVENT COVID-19</a></h4>
					</div>
				</div>
				<div class="col-md-6">
					<div class="single-awareness">
						<div class="awareness-image">
							<a target="_blank" href="{{ asset('front/covid/assets/images/awareness/Covid19_Hand-Wash-FB-post_3.jpg') }}">
								<img src="{{ asset('front/covid/assets/images/awareness/Covid19_Hand-Wash-FB-post_3.jpg') }}" alt="AWARENESS POSTER IMAGE">
							</a>
						</div>
						<h4><a href="javascript:void(0);">HOW TO WASH HANDS PROPERLY</a></h4>
					</div>
				</div>
				<div class="col-md-6">
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
	</section>




@endsection