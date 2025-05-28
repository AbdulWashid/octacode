<footer class="bg-dark pt-8 pt-md-9 position-relative" data-bs-theme="dark">

	<div class="container">
		<div class="row g-4 justify-content-between">
			<!-- Widget 1 START -->
			<div class="col-lg-4">
				<!-- logo -->
				<a href="index.html">
					<img class="h-40px" src="com_assets/images/logo-light.svg" alt="logo">
				</a>

				<p class="my-3 my-lg-4">A Bootstrap theme that's both stylish and functional, perfect for any type of technology or corporate website.</p>
				<!-- Social icon -->
				<ul class="list-inline mb-0">
					<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i class="bi bi-facebook lh-base"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i class="bi bi-instagram lh-base"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i class="bi bi-twitter-x lh-base"></i></a> </li>
					<li class="list-inline-item"> <a class="btn btn-xs btn-icon btn-secondary" href="#"><i class="bi bi-linkedin lh-base"></i></a> </li>
				</ul>
			</div>
			<!-- Widget 1 END -->

			<!-- Widget 2 START -->
			<div class="col-lg-6 col-xxl-4">
				<div class="row g-4">
					<!-- Link block -->
					<div class="col-6">
						<h6 class="mb-3 mb-sm-4">Company</h6>
						<!-- Links -->
						<ul class="nav flex-column gap-1">
							<li class="nav-item"><a class="nav-link pt-0" href="about-v1.html">About us</a></li>
							<li class="nav-item"><a class="nav-link" href="contact-us.html">Contact us</a></li>
							<li class="nav-item"><a class="nav-link" href="career.html">Career <span class="badge bg-primary ms-2">2 jobs</span></a></li>
							<li class="nav-item"><a class="nav-link" href="career-single.html">Career detail</a></li>
							<li class="nav-item"><a class="nav-link" href="contact-us-v2.html">Become a partner</a></li>
							<li class="nav-item"><a class="nav-link" href="service-v1.html">Services</a></li>
						</ul>
					</div>

					<!-- Link block -->
					<div class="col-6">
						<h6 class="mb-3 mb-sm-4">Resources</h6>
						<!-- Links -->
						<ul class="nav flex-column gap-1">
							<li class="nav-item"><a class="nav-link pt-0" href="portfolio-case-study-v1.html">Case studies</a></li>
							<li class="nav-item"><a class="nav-link" href="pricing-v1.html">Pricing <span class="badge bg-success ms-2">New</span></a></li>
							<li class="nav-item"><a class="nav-link" href="blog-minimal.html">Blogs</a></li>
							<li class="nav-item"><a class="nav-link" href="blog-single.html">Blog detail</a></li>
							<li class="nav-item"><a class="nav-link" href="#">Success stories<i class="bi bi-box-arrow-up-right small ms-2"></i></a></li>
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
			<div class="text-body small mb-3 mb-md-0"> Copyrights ©2025 Octacodes Technology.</div>
			
			<!-- Policy link -->
			<ul class="nav d-flex justify-content-center gap-1 mb-0">
				<li class="nav-item"><a class="nav-link small py-0" href="#">Privacy policy</a></li>
				<li class="nav-item"><a class="nav-link small py-0 pe-0" href="#">Terms & conditions</a></li>
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
		<form class="row g-3" action="" method="POST">
			@csrf
			<div class="col-12">
				<label class="form-label">Your name *</label>
				<input type="text" class="form-control form-control-sm" placeholder="Full name">
			</div>

			<div class="col-12">
				<label class="form-label">Email address *</label>
				<input type="email" class="form-control form-control-sm" id="floatingInput" placeholder="name@example.com">
			</div>

			<div class="col-6">
				<label class="form-label">Schedule date *</label>
				<input type="date" class="form-control form-control-sm">
			</div>

			<div class="col-6">
				<label class="form-label">Schedule date *</label>
				<input type="time" class="form-control form-control-sm">
			</div>

			<div class="col-12">
				<label class="form-label">Phone number *</label>
				<input type="text" class="form-control form-control-sm" placeholder="(xxx) xx xxxx">
			</div>

			<div class="col-12">
				<label class="form-label">Subject *</label>
				<input type="text" class="form-control form-control-sm" placeholder="Subject name">
			</div>

			<div class="col-12">
				<label class="form-label">Message *</label>
				<textarea class="form-control" placeholder="Write your message here...." id="floatingTextarea2" style="height: 150px"></textarea>
			</div>
			<!-- Button -->
			<button class="btn btn-primary mb-0">Send a message</button>
		</form>
		<!-- Form END -->
  </div>
</div>
<!-- Schedule call offcanvas content END -->