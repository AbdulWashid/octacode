@extends('com.layouts.master')
@section('title', 'Octacodes Technologies || contact')
@section('content')
<!-- =======================
Hero START -->
<section class="bg-dark position-relative overflow-hidden pt-xl-8" data-bs-theme="dark">
	<!-- Blur decoration -->
	<div class="position-absolute bottom-0 end-0 mb-n9">
		<img src="com_assets/images/elements/grad-shape/blur-decoration-2.svg" class="opacity-2 blur-9" alt="Grad shape">
	</div>
	
	<div class="container position-relative pt-4 pt-sm-5">
		<!-- Title and content -->
		<span class="h2">👋</span>
		<h1 class="display-5 mt-3">Let's Connect</h1>

		<p class="mb-1">We’re here to help </p>
		<p>Support hours: <span class="text-primary fw-bold">24/7</span></p>
	</div>
</section>
<!-- =======================
Hero END -->

<!-- =======================
Contact info START -->
<section class="pt-0 mt-n6 mt-lg-n7 mt-xl-n8">
	<div class="container">
		<!-- Contact detail START -->
		<div class="row g-4 g-lg-5">
			<!-- Call us -->
			<div class="col-md-4">
				<div class="card bg-secondary rounded-4 p-4 h-100">
					<!-- Card body -->
					<div class="card-body p-0">
						<!-- Icon -->
						<div class="icon-lg bg-pink text-white rounded-circle mb-3"><i class="bi bi-telephone"></i></div>
						<h6>Call us</h6>
						<p class="mb-0">Speak with a member of our team. We’re always ready to assist you.</p>
					</div>
					<!-- Card footer -->
					<div class="card-footer bg-transparent p-0 pt-3">
						<a href="tel:+916264355302" class="text-primary-grad">+91 62643 55302</a>
					</div>
				</div>
			</div>

			<!-- Mail us -->
			<div class="col-md-4">
				<div class="card bg-secondary rounded-4 p-4 h-100">
					<!-- Card body -->
					<div class="card-body p-0">
						<!-- Icon -->
						<div class="icon-lg bg-primary text-white rounded-circle mb-3"><i class="bi bi-envelope"></i></div>
						<h6>Mail us</h6>
						<p class="mb-0">We’re prompt and aim to respond to all inquiries within 24 hours.</p>
					</div>
					<!-- Card footer -->
					<div class="card-footer bg-transparent p-0 pt-3">
						<a href="mailto:octacodetechnology@gmail.com" class="text-primary-grad">octacodetechnology@gmail.com</a>
					</div>
				</div>
			</div>

			<!-- Support -->
			<div class="col-md-4">
				<div class="card bg-secondary rounded-4 p-4 h-100">
					<!-- Card body -->
					<div class="card-body p-0">
						<!-- Icon -->
						<div class="icon-lg bg-warning text-white rounded-circle mb-3"><i class="bi bi-headset"></i></div>
						<h6>Support</h6>
						<p class="mb-0">Check out helpful resources, FAQs and developer tools. </p>
					</div>
					<!-- Card footer -->
					<div class="card-footer bg-transparent p-0 pt-3">
						<a class="btn btn-sm btn-white-shadow icon-link icon-link-hover" href="https://wa.me/+916264355302">Chat now<i class="bi bi-arrow-right"></i> </a>
					</div>
				</div>
			</div>
		</div>
		<!-- Contact detail END -->
	</div>
</section>
<!-- =======================
Contact info END -->

<!-- =======================
Contact form START -->
<section class="position-relative pt-0">
	<div class="container bg-secondary-grad rounded-4 p-4 p-md-6 p-xxl-8">

		<div class="inner-container-small">
			<!-- Title -->
			<h1 class="fw-bold mb-2 lh-base text-center"><i class="bi bi-emoji-smile me-2"></i>Say
				<span class="cd-headline clip big-clip is-full-width text-primary-grad mb-0">
					<span class="typed" data-type-text="Hello&&Hola&&Ciao&&Bonjour"></span>
				</span>
			</h1>
			<p class="text-center">Have an idea, need advice, or just want to say hello? We’re all ears.</p>

			<!-- Form START -->
			<form method="post" action="{{route('contactData')}}" class="row form-border-transparent g-3 mt-4" >
				@csrf
				<div class="col-md-6">
					<label class="form-label">Your name</label>
					<input type="text" class="form-control" name="name" value="{{old('name')}}" required>
					@error('name')
						<span class="text-danger small">{{$message}}</span>
					@enderror
				</div>
	
				<div class="col-md-6">
					<label class="form-label">Email address</label>
					<input type="email" class="form-control" id="floatingInput" name="email" value="{{old('email')}}">
					@error('email')
						<span class="text-danger small">{{$message}}</span>
					@enderror
				</div>

				<div class="col-md-6">
					<label class="form-label">whatsapp number</label>
					<input type="text" class="form-control" name="number" value="{{old('number')}}">
					@error('number')
						<span class="text-danger small">{{$message}}</span>
					@enderror
				</div>
	
				<div class="col-md-6">
					<label class="form-label">Subject</label>
					<input type="text" class="form-control" name="sub" value="{{old('sub')}}">
					@error('sub')
						<span class="text-danger small">{{$message}}</span>
					@enderror
				</div>
	
				<div class="col-12">
					<label class="form-label">Message</label>
					<textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="message">{{old('message')}}</textarea>
					@error('message')
						<span class="text-danger small">{{$message}}</span>
					@enderror
				</div>
				<div class="col-12 d-sm-flex align-items-center gap-3 mt-4">
					<!-- Button -->
					<button class="btn btn-primary mb-2 mb-md-0">Send a message</button>
					<!-- Social links -->
					<ul class="list-inline mb-0 ms-auto">
						<li class="list-inline-item small heading-color">Connect with:</li>
						<li class="list-inline-item"> <a href="https://www.facebook.com/octacodes.technologu.3/" class="heading-color text-primary-hover"><i class="bi bi-facebook"></i></a> </li>
						<li class="list-inline-item"> <a href="https://www.instagram.com/octacodes_technologies?igsh=MW9zbjJnenc2cTl6bw==" class="heading-color text-primary-hover"><i class="bi bi-instagram"></i></a> </li>
						<!-- <li class="list-inline-item"> <a href="#" class="heading-color text-primary-hover"><i class="bi bi-linkedin"></i></a> </li> -->
					</ul>
				</div>
			</form>
			<!-- Form END -->
		</div>
	</div>
</section>
<!-- =======================
Contact form END -->

<!-- =======================
Map and office detail START -->
<section class="position-relative pt-0 overflow-hidden">
	<!-- Decoration -->
	<div class="position-absolute bottom-0 end-0 mb-n3 me-n7 d-none d-xl-block">
		<img src="com_assets/images/elements/relex-slay.png" class="h-400px h-xxl-500px rtl-flip" alt="image">
	 </div>

	<div class="container">
		<div class="row g-4 align-items-center">
			<!-- Map -->
			<div class="col-lg-5">
				<!-- <iframe class="w-100 h-200px h-lg-500px grayscale rounded-4 d-block mb-3 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.9663095343008!2d-74.00425878428698!3d40.74076684379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259bf5c1654f3%3A0xc80f9cfce5383d5d!2sGoogle!5e0!3m2!1sen!2sin!4v1586000412513!5m2!1sen!2sin" style="margin-bottom: -5px;" aria-hidden="false" tabindex="0"></iframe>	 -->
					<iframe class="w-100 h-200px h-lg-500px grayscale rounded-4 d-block mb-3 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3631.612795450864!2d74.88172797405298!3d24.46421576100121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396673c2cf960f61%3A0x3ed9e844a1e844eb!2sOctacodes%20technologies!5e0!3m2!1sen!2sin!4v1748694543265!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div class="col-lg-7 ps-lg-6">
				<!-- Title -->
				<h2 class="mb-4">Our office</h2>

				<!-- Office details -->
				<div class="row g-4 mb-4">
					<!-- Office item -->
					<div class="col-md-6">
						<!-- Title and country image -->
						<div class="d-flex align-items-center gap-2">
							<div class="avatar avatar-xs flex-shrink-0">
								<img class="avatar-img rounded-circle" src="com_assets/images/flags/in.svg" alt="avatar">
							</div>
							<h6 class="mb-0">India</h6>
						</div>
						<!-- List -->
						 <ul class="mb-0 mt-3">
							<li class="mb-2">L-155, Indra Nagar, Indira Nagar, Neemuch (458441), M.P., India</li>
							<li class="mb-2">Call: +91 62643 55302</li>
							<li class="mb-2">Support time: Monday to Saturday 10:00 am to 5:30 pm</li>
						 </ul>
					</div>
				</div>

				<!-- Button -->
				<a class="btn btn-secondary icon-link icon-link-hover" href="tel:+916264355302">Contact our help center<i class="bi bi-arrow-right"></i> </a>
			</div>
		</div> <!-- Row END -->
	</div>
</section>
<!-- =======================
Map and office detail END -->
@endsection