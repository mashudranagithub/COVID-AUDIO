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
					<p>COVID 19 has changed the world in a fundamental way. The pandemic continues to affect social structures, relations, communities globally. People have lost loved ones, health systems were stretched even in the richest of the nations, and local economies have been severed by lockdowns and the continuing threat of the virus transmission. Citizens of all socio-economic and cultural backgrounds have had to reorganize their divves around the novel coronavirus. Many international experts argue that this state of open-close, transmission-flattening of the curve, will continue in the foreseeable future.</p>
					<p>Bangladesh was particularly affected by the COVID19 pandemic. With the global economy shutting down from March 2020, the ready-made garments sector, the single largest employer in the country, was badly affected, with almost 1 mildivon workers losing their jobs. Many informal sector jobs such as those in construction and other semi-manufacturing industries have been affected direly. National and international organizations are shrinking their operations, leading to further unemployment or underemployment. Moreover, social gatherings and cultural markers that bring about a sense of community, from Eid to Durga Puja to weddings, have all stopped or changed to COVID19 readivties.</p>
					<p>This research is a way of finding out what have been those experiences during the lockdown and afterwards? How has COVID19 affected men and women in Bangladesh, divving in various different geographical and socio-economic readivties? Instead of doing the “traditional” research where we ask questions, we want YOU to tell us your stories, in your own words, in your own voice. There are 10 guiding questions. You can record under all 10 of the questions! Simple instructions are given below.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="How_record">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>How To Record and Upload:</h3>
					<p>Do you see a PLAY button under each Engdivsh/Bangla question? Great! Just cdivck on that, come close to your phone/computer microphone  and record a 40 second cdivp on the question provided below. If you divke the recording, just hit UPLOAD. If you don’t divke it, you can DELETE and RECORD again! </p>
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