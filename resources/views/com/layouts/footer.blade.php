<footer class="bg-dark pt-8 pt-md-9 position-relative" data-bs-theme="dark">
	<div class="container">
		<div class="row g-4 justify-content-between">
			<!-- Widget 1 START -->
			<div class="col-lg-4">
				<!-- logo -->
				<a class="me-0" href="{{URL('/')}}">
					<img class="h-40px" src="com_assets/images/logo-light.svg" alt="logo">
				</a>
				<ul class="list-wrap">
					<p>L-155, Indra Nagar, Indira Nagar, Neemuch (458441), M.P., India</p>
					<p>+91 62643 55302</p>
				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6 col-xxl-4">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6">
						<h6 class="mb-3 mb-sm-4">Get In Touch</h6>
						<!-- Links -->
						<ul class="list-inline mb-0">
							<li  class="list-inline-item">
								<a href="https://www.facebook.com/octacodes.technologu.3/" target="_blank">
									<img src="inst_assets/img/icons/facebook.svg" alt="img" class="injectable">
								</a>
							</li>
							<li  class="list-inline-item">
								<a href="https://wa.me/6264355302" target="_blank">
									<img src="inst_assets/img/icons/whatsapp.svg" alt="img" class="injectable">
								</a>
							</li>
							<li  class="list-inline-item">
								<a href="https://www.instagram.com/octacodes_technologies?igsh=MW9zbjJnenc2cTl6bw==" target="_blank">
									<img src="inst_assets/img/icons/instagram.svg" alt="img" class="injectable">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Widget 2 END -->
		</div>

		<!-- Divider -->
		<hr class="mt-xl-5 mb-0 opacity-1">

		<!-- Bottom footer -->
		<div class="d-md-flex justify-content-between align-items-center text-center text-lg-start py-4">
			<!-- copyright text -->
			<div class="text-body small mb-3 mb-md-0"> © 2024-2025 Octacodetechnologies.com. All rights reserved.</div>
			
			<!-- Policy link -->
			<ul class="nav d-flex justify-content-center gap-1 mb-0">
				<li class="nav-item"><a class="nav-link small py-0" href="#">Terms of Use</a></li>
				<li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">Privacy Policy</a></li>
			</ul>
		</div>
	</div>
</footer>

<!-- Schedule call offcanvas content START -->
<div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="scheduleCall" aria-labelledby="scheduleCallLabel">
  <div class="offcanvas-header">
    <h6 class="offcanvas-title" id="scheduleCallLabel">Schedule a call</h6>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
		<!-- Form START -->
		<form class="row g-3" action="{{route('contactData')}}" method="POST">
			@csrf
			<div class="col-12">
				<label class="form-label">Your name</label>
				<input type="text" class="form-control form-control-sm" placeholder="Full name" value="{{old('name')}}" name="name">
				@error('name')
					<span class="text-danger small">{{$message}}</span>
				@enderror
			</div>

			<div class="col-12">
				<label class="form-label">Email address</label>
				<input type="email" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com" value="{{old('email')}}" name="email">
				@error('email')
					<span class="text-danger small">{{$message}}</span>
				@enderror
			</div>

			<div class="col-12">
				<label class="form-label">Schedule date</label>
				<input type="datetime-local" class="form-control form-control-sm" name="date" value="{{old('date')}}">
				@error('date')
					<span class="text-danger small">{{$message}}</span>
				@enderror
			</div>

			<div class="col-12">
				<label class="form-label">Phone number</label>
				<input type="text" class="form-control form-control-sm" placeholder="(xxx) xx xxxx" value="{{old('number')}}" name="number">
				@error('number')
					<span class="text-danger small">{{$message}}</span>
				@enderror
			</div>

			<div class="col-12">
				<label class="form-label">Subject</label>
				<input type="text" class="form-control form-control-sm" placeholder="Subject name" value="{{old('sub')}}" name="sub">
				@error('sub')
					<span class="text-danger small">{{$message}}</span>
				@enderror
			</div>

			<div class="col-12">
				<label class="form-label">Message</label>
				<textarea class="form-control" placeholder="Write your message here...." id="floatingTextarea2" style="height: 150px" name="message">{{old('message')}}</textarea>
				@error('message')
					<span class="text-danger small">{{$message}}</span>
				@enderror
			</div>
			<!-- Button -->
			<button class="btn btn-primary mb-0">Send a message</button>
		</form>
		<!-- Form END -->
  </div>
</div>
<!-- Schedule call offcanvas content END -->