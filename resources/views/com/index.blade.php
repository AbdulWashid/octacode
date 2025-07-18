
@extends('com.layouts.master')
@section('title', 'Octacodes Technologies')
@section('content')

<!-- =======================
Hero START -->
<section class="position-relative pt-sm-8 pt-lg-9 pb-4">
	<!-- Right side svg decoration -->
	<div class="position-absolute top-0 end-0 z-index-2 d-none d-md-block rtl-flip">
		<img src="com_assets/images/elements/grad-shape/octacode_07.png" alt="octacodes_img_">
	</div>

	<div class="container pt-4">
		<div class="col-md-9 pe-3">

			<!-- Title -->
			<h1 class="display-6 fw-semibold mb-4 lh-base">Creating software solutions for your
				<span class="text-primary ityped-cursor-opacity mb-0 d-block d-xxl-inline-block">
					<span class="typed" data-type-text="business&&agency&&startup"></span>
				</span>
			</h1>

		</div>
	</div>
</section>
<!-- =======================
Hero END -->

<!-- =======================
Image and client START -->
<section class="bg-secondary position-relative overflow-hidden">
	<!-- skewed divider	 -->
	 <span class="position-absolute top-0 start-0">
		<svg class="fill-body" width="1920" height="237" viewBox="0 0 1920 237" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M1940.5 0H-9V164C708.2 295.2 1589.5 218.667 1940.5 164V0Z"/>
		</svg>
	 </span>

	<div class="container position-relative z-index-9">
		<!-- Grad blur decoration -->
		<div class="position-absolute top-0 start-50 translate-middle-x mt-n3">
			<img src="com_assets/images/elements/grad-shape/octacode_blur-decoration-2.svg" class="opacity-2 blur-8" alt="octacodes_img_Grad shape">
		</div>

		<!-- Image -->
		<div class="bg-body bg-opacity-10 bg-blur border border-white border-opacity-25 position-relative rounded-4 shadow-primary-lg p-4">
			<!-- Dots -->
			<span class="text-purple">
				<svg class="mt-n4" width="40" height="10" viewBox="0 0 40 10" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M10 5C10 7.76142 7.76142 10 5 10C2.23858 10 0 7.76142 0 5C0 2.23858 2.23858 0 5 0C7.76142 0 10 2.23858 10 5Z" fill="currentColor"/>
					<path d="M25 5C25 7.76142 22.7614 10 20 10C17.2386 10 15 7.76142 15 5C15 2.23858 17.2386 0 20 0C22.7614 0 25 2.23858 25 5Z" fill="currentColor"/>
					<path d="M40 5C40 7.76142 37.7614 10 35 10C32.2386 10 30 7.76142 30 5C30 2.23858 32.2386 0 35 0C37.7614 0 40 2.23858 40 5Z" fill="currentColor"/>
				</svg>
			</span>

			<!-- Images content -->
			<div class="row rounded-4 overflow-hidden g-0">
				<!-- Call image -->
				<div class="col-sm-5">
					<div class="card card-body p-0 h-100">
						<!-- Image -->
						<img src="com_assets/images/bg/octacode_02.jpg" alt="octacodes_img_">

						<!-- Actions -->
						 <div class="card-img-overlay d-flex flex-column">
							 <ul class="list-inline d-flex gap-3 mb-1 mt-auto mx-auto">
								 <li class="list-inline-item me-0">
									 <button class="btn btn-lg btn-white btn-icon rounded-circle mb-0" type="button"><i class="bi bi-mic fa-sm"></i></button>
								 </li>

								 <li class="list-inline-item me-0">
									<button class="btn btn-lg btn-white btn-icon rounded-circle mb-0" type="button"><i class="bi bi-camera-reels fa-sm"></i></button>
								</li>

								<li class="list-inline-item me-0">
									<button class="btn btn-lg btn-danger btn-icon rounded-circle mb-0" type="button"><i class="bi bi-telephone-x fa-sm"></i>
									</button>
								</li>
							 </ul>
						 </div>
					</div>
				</div>

				<!-- Code image -->
				<div class="col-sm-7">
					<div class="h-100" style="background:url(com_assets/images/bg/octacode_code.gif) no-repeat; background-size:cover; background-position:left top;"></div>
				</div>
			</div>
		</div>

		<!-- Client slider START -->
		<div class="swiper mt-6 d-none d-sm-block" data-swiper-options='{
			"slidesPerView": 1,
			"spaceBetween": 20,
			"breakpoints": {
				"576": {"slidesPerView": 2},
				"768": {"slidesPerView": 3},
				"1200": {"slidesPerView": 4},
				"1400": {"slidesPerView": 4}
			}}'>

			<!-- Slider items -->
			<div class="swiper-wrapper align-items-center">
				<!-- Image -->
				<div class="swiper-slide">
					<div class="swap-logo">
						<img src="com_assets/images/client/logo-gray/octacode_2.png" class="client-img" alt="octacodes_img_client-img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swap-logo">
						<img src="com_assets/images/client/logo-gray/octacode_3.png" class="client-img" alt="octacodes_img_client-img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swap-logo">
						<img src="com_assets/images/client/logo-gray/octacode_4.png" class="client-img" alt="octacodes_img_client-img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swap-logo">
						<img src="com_assets/images/client/logo-gray/octacode_5.png" class="client-img" alt="octacodes_img_client-img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swap-logo">
						<img src="com_assets/images/client/logo-gray/octacode_6.png" class="client-img" alt="octacodes_img_client-img">
					</div>
				</div>
				<div class="swiper-slide">
					<div class="swap-logo">
						<img src="com_assets/images/client/logo-gray/octacode_7.png" class="client-img" alt="octacodes_img_client-img">
					</div>
				</div>
			</div>
		</div>
		<!-- Client slider END -->
	</div>
</section>
<!-- =======================
Image and client END -->

<!-- =======================
institude START -->
<section class="bg-secondary pt-0 overflow-hidden">
  <div class="container">
    <div class="row g-4">

      <!-- Title and contents -->
      <div class="col-lg-5">
        <h2 class="mb-2 mb-lg-4">Launch Your Tech Career with Our IT Training Programs</h2>
        <p class="mb-2 mb-lg-4">
          Our IT Training Institute offers practical, project-based learning in high-demand technologies. Whether you're a beginner or looking to upgrade your skills, we help you become job-ready with real-world expertise and certifications.
        </p>

        <!-- Feature List -->
        <ul class="list-group list-group-borderless mb-3 mb-lg-4">
          <li class="list-group-item d-flex heading-color fw-semibold pb-0">
            <i class="bi bi-check-circle text-primary me-2"></i> Hands-on training with live projects
          </li>
          <li class="list-group-item d-flex heading-color fw-semibold pb-0">
            <i class="bi bi-check-circle text-primary me-2"></i> Courses in Web Development, Python, Laravel, JavaScript, MySQL, and more
          </li>
          <li class="list-group-item d-flex heading-color fw-semibold pb-0">
            <i class="bi bi-check-circle text-primary me-2"></i> Industry-recognized certifications
          </li>
          <li class="list-group-item d-flex heading-color fw-semibold pb-0">
            <i class="bi bi-check-circle text-primary me-2"></i> Placement assistance & career guidance
          </li>
        </ul>

        <!-- Buttons -->
        <div class="d-flex gap-3 flex-wrap">
          <a href="{{route('institude.index')}}" class="btn btn-primary mb-0">
            Visit Training Website
          </a>
        </div>
      </div>

      <!-- Image -->
      <div class="col-lg-6 position-relative ms-auto ps-lg-4">
        <div class="position-absolute top-50 start-0 translate-middle-y ms-n4 mt-n7">
          <img src="com_assets/images/elements/grad-shape/octacode_blur-decoration.svg" class="blur-7 opacity-1" alt="octacodes_img_Grad shape">
        </div>

        <!-- Main image -->
        <img src="com_assets/images/about/octacode_04.jpg" class="rounded-4 position-relative z-index-2" alt="octacodes_img_IT Training">
      </div>

    </div>

    <!-- Stats Section -->
    <!-- Testimonial Section -->
	<div class="swiper mt-6 d-none d-sm-block" data-swiper-options='{
		"slidesPerView": 1,
		"spaceBetween": 20,
		"loop": true,
		"autoplay": { "delay": 5000 }
	}'>

		<!-- Slider items -->
		<div class="swiper-wrapper align-items-center">

			<!-- Slide 1 -->
			<div class="swiper-slide">
				<div class="row mt-5">
					<div class="col-lg-8 mx-auto text-center">
						<div class="p-4 bg-light rounded-4 shadow-sm">
							<p class="fst-italic mb-3">
								"The full stack development course helped me land my first developer job. The practical projects were invaluable."
							</p>
							<h6 class="fw-bold mb-0">– Vasu Gour, Web Developer batch </h6>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide 2 -->
			<div class="swiper-slide">
				<div class="row mt-5">
					<div class="col-lg-8 mx-auto text-center">
						<div class="p-4 bg-light rounded-4 shadow-sm">
							<p class="fst-italic mb-3">
								"Amazing experience! The instructors were supportive, and I loved the hands-on learning style."
							</p>
							<h6 class="fw-bold mb-0">– Priya Mehta, Python batch Student </h6>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide 3 -->
			<div class="swiper-slide">
				<div class="row mt-5">
					<div class="col-lg-8 mx-auto text-center">
						<div class="p-4 bg-light rounded-4 shadow-sm">
							<p class="fst-italic mb-3">
								"I joined with zero experience. Now I’m freelancing and building real client websites."
							</p>
							<h6 class="fw-bold mb-0">– Rahul Singh,Frontend batch Student</h6>
						</div>
					</div>
				</div>
			</div>

			<!-- Slide 4 -->
			<div class="swiper-slide">
				<div class="row mt-5">
					<div class="col-lg-8 mx-auto text-center">
						<div class="p-4 bg-light rounded-4 shadow-sm">
							<p class="fst-italic mb-3">
								"Thanks to this training, I built a startup website from scratch. Highly recommend it!"
							</p>
							<h6 class="fw-bold mb-0">– Sneha Kapoor, Founder at SmartKart</h6>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
  </div>
</section>
<!-- =======================
institude END -->
<!-- =======================
Services START -->
<section class="bg-secondary position-relative overflow-hidden pt-0">
	<div class="container position-relative">
		<!-- Title -->
		<div class="inner-container-small text-center mb-6 mb-lg-7">
			<h2 class="mb-0">Our Products</h2>
		</div>

		<!-- Services START -->
		<div class="row g-4 g-xl-5">
			<!-- Service item -->
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
					<!-- Icon -->
					<div class="card-icon icon-xl bg-pink d-flex justify-content-center align-items-center text-white rounded-circle">
						<i class="bi bi-cart-check"></i>
					</div>

					<!-- Card body -->
					<div class="card-footer bg-transparent mt-6 p-0">
						<h6 class="mb-3">E-commerce Platform</h6>
						<p>Smart tools to manage your entire e-commerce business efficiently.</p>
						<a href="service-single.html" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<!-- Service item -->
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
					<!-- Icon -->
					<div class="card-icon icon-xl bg-purple d-flex justify-content-center align-items-center text-white rounded-circle">
						<i class="bi bi-basket"></i>
					</div>

					<!-- Card body -->
					<div class="card-footer bg-transparent mt-6 p-0">
						<h6 class="mb-3">Grocery Management</h6>
						<p> Simplify inventory, billing, and sales for your grocery store.</p>
						<a href="service-single.html" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<!-- Service item -->
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
					<!-- Icon -->
					<div class="card-icon icon-xl bg-warning d-flex justify-content-center align-items-center text-white rounded-circle">
						<i class="bi bi-mortarboard"></i>
					</div>

					<!-- Card body -->
					<div class="card-footer bg-transparent mt-6 p-0">
						<h6 class="mb-3">School Management</h6>
						<p>Complete digital solution for managing schools, staff, and students.</p>
						<a href="service-single.html" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<!-- Service item -->
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
					<!-- Icon -->
					<div class="card-icon icon-xl bg-primary d-flex justify-content-center align-items-center text-white rounded-circle">
						<i class="bi bi-cup-straw"></i>
					</div>

					<!-- Card body -->
					<div class="card-footer bg-transparent mt-6 p-0">
						<h6 class="mb-3">Food App</h6>
						<p>Order, manage, and deliver food with speed and ease.</p>
						<a href="service-single.html" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<!-- Service item -->
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="card card-hover-shadow card-icon-transition text-center bg-body bg-opacity-50 bg-blur rounded-4 h-100 p-4">
					<!-- Icon -->
					<div class="card-icon icon-xl bg-success d-flex justify-content-center align-items-center text-white rounded-circle">
						<i class="bi bi-box-seam"></i>
					</div>

					<!-- Card body -->
					<div class="card-footer bg-transparent mt-6 p-0">
						<h6 class="mb-3">Inventory Management </h6>
						<p>Track stock, manage suppliers, and streamline inventory operations easily.</p>
						<a href="service-single.html" class="link-primary-grad icon-link icon-link-hover stretched-link mb-0">Read more <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>

			<!-- button -->
			<div class="col-sm-6 col-lg-4 mb-4">
				<div class="d-flex flex-column justify-content-center align-items-center text-center h-100">
					<img src="com_assets/images/elements/emoji.png" class="mb-3" alt="octacodes_img_">
					<p>Not satisfied yet?</p>
					<a href="#" class="btn btn-primary-grad mb-0">Explore all services</a>
				</div>
			</div>

		</div>
		<!-- Services END -->
	</div>
</section>
<!-- =======================
Services END -->
<br><br>
<!-- =======================
Testimonials START -->
<section class="bg-body position-relative pt-0 pb-5 pb-sm-0">
	<!-- Right side svg decoration -->
	<div class="position-absolute top-100 start-0 translate-middle z-index-2 ms-5 ms-xl-9 mt-5 d-none d-sm-block">
		<img src="com_assets/images/elements/grad-shape/octacode_10.png" class="h-500px h-xl-700px rtl-flip" alt="octacodes_img_">
	</div>

	<div class="container position-relative z-index-9">
		<!-- Title -->
		<div class="row align-items-center mb-4 mb-md-5">
			<div class="col-md-7 col-lg-5">
				<h2 class="mb-0">What our clients say</h2>
			</div>

			<div class="col-md-5 ms-sm-auto text-sm-end mt-5 mt-sm-0">
				<!-- Add pagination and navigation elements here -->
				<div class="d-flex gap-2 justify-content-sm-end">
					<a href="#" class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-prev"><i class="bi bi-arrow-left fa-sm"></i></a>
					<a href="#" class="btn btn-primary-grad btn-icon btn-lg rounded-circle mb-0 swiper-button-next"><i class="bi bi-arrow-right fa-sm"></i></a>
				</div>
			</div>
		</div>

		<!-- Testimonials START -->
		<div class="swiper"
		data-swiper-options='{
				"spaceBetween": 30,
				"breakpoints": {
					"576": {"slidesPerView": 1},
					"768": {"slidesPerView": 2},
					"992": {"slidesPerView": 3}
				},
				"navigation":{
					"nextEl":".swiper-button-next",
					"prevEl":".swiper-button-prev"
				}}'>

			<div class="swiper-wrapper">
				<!-- Testimonials item -->
				<div class="swiper-slide">
					<div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
						<!-- Card body -->
						<div class="card-body p-0 mb-4">
							<!-- Rating star -->
							<ul class="list-inline mb-3">
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
							</ul>
							<!-- Testimonials text -->
							<blockquote>
								<p class="heading-color mb-0">Their team went above and beyond to understand our needs and deliver a solution that exceeded our expectations. They demonstrated throughout the process was truly impressive.</p>
							</blockquote>
						</div>
						<!-- Card footer -->
						<div class="card-footer bg-transparent p-0">
							<!-- Testimonials info -->
							<div class="d-flex align-items-center">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="com_assets/images/avatar/octacode_09.jpg" alt="octacodes_img_avatar">
								</div>
								<div class="ms-3">
									<p class="lead heading-color fw-semibold mb-0">Jacqueline Miller</p>
									<!-- <small>Product designer</small> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonials item -->
				<div class="swiper-slide">
					<div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
						<!-- Card body -->
						<div class="card-body p-0 mb-4">
							<!-- Rating star -->
							<ul class="list-inline mb-3">
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
							</ul>
							<!-- Testimonials text -->
							<blockquote>
								<p class="heading-color mb-0">Frequently partiality possession resolution at or appearance unaffected me. Ye goodness felicity do disposal dwelling no.</p>
							</blockquote>
						</div>
						<!-- Card footer -->
						<div class="card-footer bg-transparent p-0">
							<!-- Testimonials info -->
							<div class="d-flex align-items-center">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="com_assets/images/avatar/octacode_10.jpg" alt="octacodes_img_avatar">
								</div>
								<div class="ms-3">
									<p class="lead heading-color fw-semibold mb-0">Louis Ferguson</p>
									<!-- <small>Web Developer</small> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonials item -->
				<div class="swiper-slide">
					<div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
						<!-- Card body -->
						<div class="card-body p-0 mb-4">
							<!-- Rating star -->
							<ul class="list-inline mb-3">
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
							</ul>
							<!-- Testimonials text -->
							<blockquote>
								<p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.</p>
							</blockquote>
						</div>
						<!-- Card footer -->
						<div class="card-footer bg-transparent p-0">
							<!-- Testimonials info -->
							<div class="d-flex align-items-center">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="com_assets/images/avatar/octacode_04.jpg" alt="octacodes_img_avatar">
								</div>
								<div class="ms-3">
									<p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
									<!-- <small>UI/UX designer</small> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonials item -->
				<div class="swiper-slide">
					<div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
						<!-- Card body -->
						<div class="card-body p-0 mb-4">
							<!-- Rating star -->
							<ul class="list-inline mb-3">
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
							</ul>
							<!-- Testimonials text -->
							<blockquote>
								<p class="heading-color mb-0">Our passion for customer excellence is just one reason why we are the market leader. We've always worked very hard to give our customers the best experience.</p>
							</blockquote>
						</div>
						<!-- Card footer -->
						<div class="card-footer bg-transparent p-0">
							<!-- Testimonials info -->
							<div class="d-flex align-items-center">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="com_assets/images/avatar/octacode_07.jpg" alt="octacodes_img_avatar">
								</div>
								<div class="ms-3">
									<p class="lead heading-color fw-semibold mb-0">Allen Smith</p>
									<!-- <small>Manager</small> -->
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Testimonials item -->
				<div class="swiper-slide">
					<div class="card bg-secondary bg-opacity-50 bg-blur rounded-4 p-4 h-100">
						<!-- Card body -->
						<div class="card-body p-0 mb-4">
							<!-- Rating star -->
							<ul class="list-inline mb-3">
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-fill text-warning"></i></li>
								<li class="list-inline-item me-0"><i class="bi bi-star-half text-warning"></i></li>
							</ul>
							<!-- Testimonials text -->
							<blockquote>
								<p class="heading-color mb-0">Was out laughter raptures returned outweigh. Luckily cheered colonel I do we attack highest enabled. Tried law yet style child. The bore of true of no be deal.</p>
							</blockquote>
						</div>
						<!-- Card footer -->
						<div class="card-footer bg-transparent p-0">
							<!-- Testimonials info -->
							<div class="d-flex align-items-center">
								<div class="avatar flex-shrink-0">
									<img class="avatar-img rounded-circle" src="com_assets/images/avatar/octacode_01.jpg" alt="octacodes_img_avatar">
								</div>
								<div class="ms-3">
									<p class="lead heading-color fw-semibold mb-0">Emma Watson</p>
									<!-- <small>UI/UX designer</small> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Testimonials END -->
	</div>
</section>
<!-- =======================
Testimonials END -->

<!-- =======================
CTA START -->
<br><br>
<section class="bg-secondary overflow-hidden pt-0 pb-5 mb-n8">
	<div class="container z-index-9 position-relative">
		<div class="row g-5">
			<!-- CTA One -->
			<div class="col-xl-6">
				<div class="card bg-primary h-100">

					<!-- Rocket image -->
					<div class="position-absolute top-0 end-0 me-n6 mb-n5 d-none d-sm-block">
						<img src="com_assets/images/elements/octacode_rocket-02.png" alt="octacodes_img_rocket image">
					</div>

					<!-- Content -->
					<div class="row align-items-center h-100 p-3 p-sm-4">
						<!-- Title and content -->
						<div class="col-sm-8 d-flex h-100">
							<div class="card-body d-flex flex-column text-white">
								<h4 class="mb-5 text-white">Stay connected with us</h4>

								<div class="mt-auto">
									<a class="btn btn-sm btn-dark icon-link icon-link-hover" href="{{route('contactPage')}}"> Contact Us <i class="bi bi-arrow-right"></i> </a>
									<p class="small mb-0">✌️ No Spam — We Promise!</p>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- CTA Two -->
			<div class="col-xl-6">
				<div class="card bg-primary-grad h-100 overflow-hidden">
					<!-- Image -->
					<div class="position-absolute end-0 top-0 me-n8 d-none d-sm-block">
						<img src="com_assets/images/elements/octacode_person-laptop.png" alt="octacodes_img_">
					</div>

					<div class="row align-items-center p-3 p-sm-4">
						<!-- Title and content -->
						<div class="col-sm-8">
							<div class="card-body text-white">
								<p>Apply to work with us</p>
								<h4 class="mb-5 text-white">Explore Career Opportunities</h4>
								<a class="btn btn-sm btn-dark icon-link icon-link-hover disabled" href="">View open positions<i class="bi bi-arrow-right"></i> </a>
								<p class="small mb-0">No jobs are available currently</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- Row END -->
	</div>
</section>

@endsection
