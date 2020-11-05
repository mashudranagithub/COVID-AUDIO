	<!-- Header Section Start Here -->
	<header id="header">
		<!-- Header Main Start Here -->
		<div class="header-main">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Logo Start Here -->
						<div class="logo">
							<a href="{{ url('/') }}" class="d-flex justify-content-center align-items-center">
								<img src="{{ asset('front/covid/assets/images/logo/covid-logo.jpg') }}" alt="Logo Image">
							</a>
						</div>
						<!-- Logo End Here -->
					</div>
					<div class="col col-md-12 d-flex justify-content-center text-right">
						<!-- Main Navigation Menu Start Here -->
						<nav class="navbar navbar-expand-lg navbar-light">
							<!-- <a class="navbar-brand" href="#">Navbar</a> -->
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav mr-auto">
									<li><a class="nav-link education-color" href="{{ route('homePage') }}#Education">EDUCATION</a></li>
									<li><a class="nav-link training-color" href="{{ route('homePage') }}#Training">TRAINING</a></li>
									<li><a class="nav-link research-color" href="{{ route('homePage') }}#Research">RESEARCH</a></li>
									<li><a class="nav-link advocacy-color" href="{{ route('homePage') }}#Advocacy">ADVOCACY</a></li>
								</ul>
							</div>
						</nav><!-- Main Navigation Menu End Here -->
					</div>
				</div>
			</div>
		</div><!-- Header Main End Here -->
	</header><!-- Header Section End Here -->