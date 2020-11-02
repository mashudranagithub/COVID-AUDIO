@extends('voice.layouts.master')

@section('content')


	<header id="Header">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="logo">
						<a href="#"><img src="{{ asset('voice/assets/images/logo/full-logo.png') }}" alt="Logo Image"></a>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="Registration">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					@if ($errors->any())
					<div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
					@endif
				</div>
			</div>
<div class="row">
	<div class="col-md-12">
@if(Session::has('smessage'))
    <div class="alert alert-block alert-success">
        <i class=" fa fa-check cool-green "></i>
        {{ nl2br(Session::get('smessage')) }}
    </div>
@endif
	@if ($msg = Session::get('msg'))
	    <div class="alert alert-success">
	        <p>{{ $msg }}</p>
	    </div>
	@endif
	</div>
</div>
			<div class="row">
				<div class="col-md-6">
					<div class="registration-form">
						<h2>Tell us your pandemic story. We are all in this together.</h2>
						<form action="{{ route('vUserCreate') }}" method="post">
							{{ csrf_field() }}
							<div class="form-row">
								<div class="col">
									<div class="form-group">
										<select name="gender" id="Gender" class="form-control">
											<option value="">Gender</option>
											<option value="m">Male</option>
											<option value="f">Female</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<select name="age" id="Age" class="form-control">

											<option value="">Your Age</option>

											<?php for($i=1;$i<=100;$i++){ ?>
												<option value="<?php echo $i ?>"><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input name="location" id="location" placeholder="Where are you recording from" type="text" class="form-control">
							</div>
							<div class="form-group">
								<input name="m_phone" placeholder="Your Phone Number" type="text" class="form-control" minlength="11" pattern="[0-9]{11}">
							</div>
							<button type="submit" class="btn btn-register">Get Start <img src="{{ asset('voice/assets/images/registration/right-arrow.png') }}" alt="Right Arrow Image"></button>
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="registration-image">
						<img src="{{ asset('voice/assets/images/registration/man-at-the-office-2127140-1.png') }}" alt="Registration Image">
					</div>
				</div>
			</div>
		</div>
	</section>
	

@endsection