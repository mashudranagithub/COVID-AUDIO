@extends('voice.layouts.master')

@section('content')


	<header id="Header">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-between">
				<div class="col-md-4">
					<div class="logo">
						<a href="#"><img src="{{ asset('voice/assets/images/logo/full-logo.png') }}" alt="Logo Image"></a>
					</div>
				</div>
				<div class="col-md-3">
					<div class="language">
						<a href="{{ route('vUserCreatePage') }}" class="btn btn-lang">English</a>
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
						<h2>আপনার মহামারী গল্প বলুন। আমরা সবাই একইসঙ্গে।</h2>
						<form action="{{ route('banglaVuserCreate') }}" method="post">
							{{ csrf_field() }}
							<div class="form-row">
								<div class="col">
									<div class="form-group">
										<select name="gender" id="Gender" class="form-control">
											<option value="">লিঙ্গ</option>
											<option value="m">পুরুষ</option>
											<option value="f">মহিলা</option>
											<option value="h">তৃতীয় লিঙ্গ</option>
										</select>
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<select name="age" id="Age" class="jjj form-control">

											<option value="">আপনার বয়স</option>

											<?php for($i=1;$i<=100;$i++){ ?>
												<option value="<?php echo $i ?>"><?php echo $i ?></option>
											<?php } ?>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<select name="location" id="select" class="jjj form-control" style="height: 38px; line-height: 38px;">
									<option value="">আপনার এলাকা নির্ধারণ করুন</option>
									<option value="outside">Outside of Bangladesh</option>
								</select>
								<!-- <input name="location" id="location" placeholder="Where are you recording from" type="text" class="form-control"> -->



<script>
	var select = document.getElementById("select"),
	arr = ["Dhaka","Faridpur","Gazipur","Gopalganj","Jamalpur","Kishoreganj","Madaripur","Manikganj","Munshiganj","Mymensingh","Narayanganj","Narsingdi","Netrokona","Rajbari","hariatpur","Sherpur","Tangail","Bogura","Joypurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajgonj","Dinajpur","Gaibandha","Kurigram","Lalmonirhat","ilphamari","Panchagarh","Rangpur","Thakurgaon","Barguna","Barishal","Bhola","Jhalokati","Patuakhali","Pirojpur","Bandarban","Brahmanbaria","Chandpur","Chattogram","Cumilla","Cox's Bazar","Feni","Khagrachari","Lakshmipur","Noakhali","Rangamati","Habiganj","Maulvibazar","Sunamganj","Sylhet","Bagerhat","Chuadanga","Jashore","Jhenaidah","Khulna","Kushtia","Magura","Meherpur","Narail","Satkhira"];

	for(var i = 0; i < arr.length; i++)
	{
		var option = document.createElement("OPTION"),
			txt = document.createTextNode(arr[i]);
		option.appendChild(txt);
		option.setAttribute("value", arr[i]);
		select.insertBefore(option, select.lastChild);
	}
</script>





							</div>
							<div class="form-group">
								<input name="m_phone" placeholder="আপনার মোবাইল নাম্বার" type="text" class="form-control" minlength="9" maxlength="11" pattern="[0-9]{9, }">
							</div>
							<button type="submit" class="btn btn-register">শুরু করা যাক <img src="{{ asset('voice/assets/images/registration/right-arrow.png') }}" alt="Right Arrow Image"></button>
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