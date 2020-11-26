@extends('voice.layouts.master')

@section('content')


	<header id="Record_header" class="d-flex align-items-center">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="col-md-4">
					<div class="logo">
						<a href="#"><img src="{{ asset('voice/assets/images/logo/full-logo.png') }}" alt="Logo Image"></a>
					</div>
				</div>
				<div class="col-md-5">
					<div class="warning d-flex justify-content-between align-items-center">
						<p>Please no foul language. No obscenity Let’s keep it clean, let’s keep it respectful</p>
						<img src="{{ asset('voice/assets/images/record/warning.png') }}" alt="Warning Icon Image">
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="Intro">
		<div class="container">

<div class="row">
	<div class="col-md-12">
	@if(Session::has('smessage'))
	    <div class="alert alert-block alert-success">
	        <i class=" fa fa-check cool-green "></i>
	        {{ nl2br(Session::get('smessage')) }}
	    </div>
	@endif
	</div>
</div>
			<div class="row">
				<div class="col-md-12">
					<p>COVID-19 has changed the world in a fundamental way. The pandemic continues to affect social structures, relations, and communities globally with devastating effects, high death rates and financial crisis. Yet, despite it all, we are working and living through this tragedy.</p>
					<p>Bangladesh was particularly affected by the COVID-19 pandemic. Lockdowns, post-lockdown, health system challenges, economic recoveries - the country is still going through a tumultuous time, trying its very best to remain afloat.  At the heart of these ups and downs is the people, you. We invite you to share your COVID 19 stories. We want to hear how you and your loved ones coped during the lockdown? With everything opening up while the virus is still at large, how has your life changed?</p>
					<p>Tell us your story. There are 10 guiding questions. Pick any ONE of the questions and tell us your experience. Your story may be one of the lucky ones to get featured in our upcoming podcast series on life in Bangladesh during pandemic. We look forward to hearing from you.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="How_record">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>How To Record and Upload:</h3>
					<!-- <p>Do you see a PLAY button under each English question? Great! Just click on that, come close to your phone/computer microphone  and record a 70 second click on the question provided below. If you like the recording, just hit Submit. If you don’t like it, you can DELETE and RECORD again! </p> -->

					<style>
						p.how-record img {
							width: 25px;
							background: transparent;
							height: 25px;
							padding: 4px;
							margin: 5px;
							border: 1px solid #fff;
						}
					</style>

					<p class="how-record">Do you see the icons <img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image"> <img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image"> <img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image"> <img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image"> with each question? To record, come close to your phone/computer and press <img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image"> to record your story. Hit <img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image"> to stop your recording if you are done otherwise it will stop automatically after 70 seconds, and then <img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image"> to hear your story. Like it? Great! Move on to the next question. Not so great? No problem: hit <img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image"> and record again.</p><br>
					<p>Once you are done recording go to the submit button at the end of the page to send in your voice notes!</p>
				</div>
			</div>
		</div>
	</section>

<form action="{{ route('recordStore') }}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
	<input name="vuser_id" type="hidden" value="{{ $vuser_id[0]->id }}" required>

	<section id="Question">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-heading">
						<h2>Questions:</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="question-block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block-heading">
							<h3>During the Lockdown</h3>
						</div>

						<ol class="questions">
							@foreach($lockdown_questions as $l_question)
							<li>
								<div class="single-question d-flex justify-content-between align-items-center">
									<p>{{ $l_question->question }}</p>
									<div class="buttons d-flex">
										<button type="button" class="btn btn-record start_rec" id="start_id_{{ $l_question->id }}" onclick="startMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image">
											<span>Record</span>
										</button>
										<button type="button" class="btn btn-stop" id="stop_id_{{ $l_question->id }}" disabled onclick="stopMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image">
											<span>Stop</span>
										</button>
										<button type="button" class="btn btn-play" id="play_id_{{ $l_question->id }}" disabled onclick="playMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image">
											<span>Play</span>
										</button>
										<button type="button" class="btn btn-pause" id="pause_id_{{ $l_question->id }}" disabled onclick="pauseMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/pause.png') }}" alt="Button icon image">
											<span>Pause</span>
										</button>
										<button type="button" class="btn btn-delete" id="delete_id_{{ $l_question->id }}" disabled onclick="deleteMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image">
											<span>Delete</span>
										</button>
									</div>
								</div>
							</li>
							@endforeach
						</ol>
					</div>
				</div>
			</div>
		</div>

		<div class="question-block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block-heading">
							<h3>Living Through a Pandemic</h3>
						</div>
						<ol class="questions">
							@foreach($pandemic_questions as $p_question)
							<li>
								<div class="single-question d-flex justify-content-between align-items-center">
									<p>{{ $p_question->question }}</p>
									<div class="buttons d-flex">
										<button type="button" class="btn btn-record start_rec" id="start_id_{{ $p_question->id }}" onclick="startMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image">
											<span>Record</span>
										</button>
										<button type="button" class="btn btn-stop" id="stop_id_{{ $p_question->id }}" disabled onclick="stopMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image">
											<span>Stop</span>
										</button>
										<button type="button" class="btn btn-play" id="play_id_{{ $p_question->id }}" disabled onclick="playMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image">
											<span>Play</span>
										</button>
										<button type="button" class="btn btn-pause" id="pause_id_{{ $p_question->id }}" disabled onclick="pauseMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/pause.png') }}" alt="Button icon image">
											<span>Pause</span>
										</button>
										<button type="button" class="btn btn-delete" id="delete_id_{{ $p_question->id }}" disabled onclick="deleteMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image">
											<span>Delete</span>
										</button>
									</div>
								</div>
							</li>
							@endforeach
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="Agree" class="d-flex align-items-center justify-content-center">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="col-md-8 d-flex align-items-center justify-content-center">
					<input type="checkbox" value="agree" required>
					<p>I consent to BRAC JPGSPH using my voice note for various research purposes including in podcast production. (a tick option has to be provided)</p>
				</div>
			</div>
		</div>
	</section>

	<div id="audioContainer">
		
	</div>
	<input type="hidden" id="_token" value="{{ csrf_token() }}">

	<section id="Submit" class="d-flex align-items-center justify-content-center">
		<button onclick="uploadAllFiles()" type="submit" class="btn btn-submit">Submit</button>
	</section>

	

</form>


	<section id="Our-donors">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>Our Partners</h3>
				</div>
			</div>
			<div class="row justify-content-around">
				<div class="col-md-4">
					<div class="donor-logo">
						<img src="{{ asset('voice/assets/images/registration/donors/Share-Net-International-logo.png') }}" alt="Donor logo image">
					</div>
				</div>
				<div class="col-md-4">
					<div class="donor-logo">
						<img src="{{ asset('voice/assets/images/registration/donors/MJFlogo.jpg') }}" alt="Donor logo image">
					</div>
				</div>
			</div>
		</div>
	</section>
	

@endsection