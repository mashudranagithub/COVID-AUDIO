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
						<p>দয়া করে কোন বাজে ভাষা ব্যবহার করে সম্মান নষ্ট করবেন না। অশ্লীলতা থেকে দুরে থাকুন । </p>
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
					<p>কোভিড-১৯ পুরো বিশ্বকে গভীরভাবে প্রভাবিত করেছে। এই মহামারী আমাদের সমাজ ব্যবস্থা, পারস্পরিক সম্পর্ক এবং যোগাযোগ ব্যবস্থাকে প্রতিনিয়ত প্রভাবিত করে যাচ্ছে। অব্যাহত রাখছে উচ্চ মৃত্যুহার, ধ্বংসাত্মক প্রভাব পরছে অর্থনীতিতে। কিন্তু তা স্বত্বেও আমরা কাজ করে যাচ্ছি, বেঁচে থাকার উদ্দেশ্যে।</p>
					<p>বাংলাদেশকে কোভিড-১৯ মহামারী তীব্রভাবে প্রভাবিত করেছে। লকডাউন, লকডাউনের পরবর্তী অস্থিতিশীলতা, স্বাস্থ্যব্যবস্থার সীমাবদ্ধতা, অর্থনৈতিক অবস্থার পরিবর্তন – আমাদের দেশটি এখনও অশান্ত সময়ের মধ্য দিয়ে যাচ্ছে, স্বাভাবিক থাকার জন্য যথাসাধ্য চেষ্টা করছে। এই উত্থান-পতনের কেন্দ্রবিন্দুতে রয়েছি আমি, আপনি, আমরা। আমরা আপনাকে আমন্ত্রণ জানাচ্ছি আপনার এবং আপনার প্রিয়জনের গল্প বলার জন্য। আমরা শুনতে চাই লকডাউন এবং লকডাউনের পরবর্তী অবস্থা আপনার জীবনকে কীভাবে পরিবর্তিত করছে?</p>
					<p>আমাদেরকে আপনার গল্প বলুন। নিচে ১০ টি গাইডিং প্রশ্ন রয়েছে। যে কোনও একটি নির্বাচন করুন এবং শেয়ার করুন আপনার অভিজ্ঞতা। আপনি হতে পারেন সেই ভাগ্যবানদের একজন, যার গল্পটি আমরা শোনাব মহামারীর সময় বাংলাদেশের জীবন নিয়ে নির্মিত আসন্ন পডকাস্ট সিরিজে। আমরা আপনার গল্প শোনার অপেক্ষায় আছি।</p>
				</div>
			</div>
		</div>
	</section>

	<section id="How_record">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>কিভাবে রেকর্ড ও আপলোড করবেনঃ</h3>

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

					<p class="how-record">আপনি কি প্রতিটি প্রশ্নের সাথে <img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image"> <img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image"> <img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image"> <img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image"> আইকন গুলো দেখতে পাচ্ছেন?  আপনার গল্পটি রেকর্ড করতে, আপনার ফোন / কম্পিউটারের কাছে এসে  <img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image"> চাপুন। আপনার উত্তরটি দেয়া হয়ে গেলে রেকর্ডিং বন্ধ করতে <img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image">  চাপুন, অন্যথায় এটি 70 সেকেন্ড পরে স্বয়ংক্রিয়ভাবে বন্ধ হয়ে যাবে। তারপরে আপনার রেকর্ড করা গল্পটি শুনতে <img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image"> চাপুন। যদি রেকর্ড করা উওরটি আপনার পছন্দ হয় তাহলে পরের প্রশ্নের উওর শুরু করুন, আর যদি উওরটি আপনার পছন্দ না হয় তাহলে <img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image"> চাপুন এবং আবার রেকর্ড করুন।</p> <br>
					<p>আপনার সব উত্তর রেকর্ড করা হয়ে গেলে পৃষ্ঠার শেষে সাবমিট বাটন চাপুন এবং আপনার ভয়েস নোটগুলি প্রেরণ করুন!</p>
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
						<h2>প্রশ্নসমুহ:</h2>
					</div>
				</div>
			</div>
		</div>

		<div class="question-block">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block-heading">
							<h3>লকডাউনের সময়ের অভিজ্ঞতা</h3>
						</div>

						<ol class="questions">
							@foreach($lockdown_questions as $l_question)
							<li>
								<div class="single-question d-flex justify-content-between align-items-center">
									<p>{{ $l_question->bnquestion }}</p>
									<div class="buttons d-flex">
										<button type="button" class="btn btn-record start_rec" id="start_id_{{ $l_question->id }}" onclick="startMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image">
											<span>রেকর্ড</span>
										</button>
										<button type="button" class="btn btn-stop" id="stop_id_{{ $l_question->id }}" disabled onclick="stopMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image">
											<span>থামুন</span>
										</button>
										<button type="button" class="btn btn-play" id="play_id_{{ $l_question->id }}" disabled onclick="playMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image">
											<span>প্লে</span>
										</button>
										<button type="button" class="btn btn-pause" id="pause_id_{{ $l_question->id }}" disabled onclick="pauseMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/pause.png') }}" alt="Button icon image">
											<span>পজ</span>
										</button>
										<button type="button" class="btn btn-delete" id="delete_id_{{ $l_question->id }}" disabled onclick="deleteMyRecord('id_{{$l_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image">
											<span>ডিলিট</span>
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
							<h3>বর্তমান মহামারী চলাকালীন অভিজ্ঞতা</h3>
						</div>
						<ol class="questions">
							@foreach($pandemic_questions as $p_question)
							<li>
								<div class="single-question d-flex justify-content-between align-items-center">
									<p>{{ $p_question->bnquestion }}</p>
									<div class="buttons d-flex">
										<button type="button" class="btn btn-record start_rec" id="start_id_{{ $p_question->id }}" onclick="startMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/recording-symbol.png') }}" alt="Button icon image">
											<span>রেকর্ড</span>
										</button>
										<button type="button" class="btn btn-stop" id="stop_id_{{ $p_question->id }}" disabled onclick="stopMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/stop.png') }}" alt="Button icon image">
											<span>থামুন</span>
										</button>
										<button type="button" class="btn btn-play" id="play_id_{{ $p_question->id }}" disabled onclick="playMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/play.png') }}" alt="Button icon image">
											<span>প্লে</span>
										</button>
										<button type="button" class="btn btn-pause" id="pause_id_{{ $p_question->id }}" disabled onclick="pauseMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/pause.png') }}" alt="Button icon image">
											<span>পজ</span>
										</button>
										<button type="button" class="btn btn-delete" id="delete_id_{{ $p_question->id }}" disabled onclick="deleteMyRecord('id_{{$p_question->id}}')">
											<img src="{{ asset('voice/assets/images/record/icons/delete.png') }}" alt="Button icon image">
											<span>ডিলিট</span>
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
					<p>আমি পডকাস্ট উত্পাদন সহ বিভিন্ন গবেষণামূলক উদ্দেশ্যে আমার ভয়েস নোটটি ব্যবহার করতে ব্র্যাক JPGSPH কে সম্মতি জানাই। (একটি টিক বিকল্প প্রদান করতে হবে)</p>
				</div>
			</div>
		</div>
	</section>

	<div id="audioContainer">
		
	</div>
	<input type="hidden" id="_token" value="{{ csrf_token() }}">

	<section id="Submit" class="d-flex align-items-center justify-content-center">
		<button onclick="uploadAllFiles()" type="submit" class="btn btn-submit">সাবমিট করুন</button>
	</section>

	

</form>


	<section id="Our-donors">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3>আমাদের অংশীধারগন</h3>
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