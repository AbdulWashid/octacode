    <!-- header-area -->
    <header>
        <div class="tg-header__top">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="tg-header__top-info list-wrap">
                            <li><img src="{{ asset('institude/img/icons/envelope.svg') }}" alt="Icon" target="_blank">
                                <a href="mailto:octacodetechnology@gmail.com">octacodetechnology@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="tg-header__top-right">
                            <div class="tg-header__phone">
                                Call us: <a href="tel:+91 6264355302">+91 62643 55302</a>
                            </div>
                            <ul class="tg-header__top-social list-wrap">
                                <li>Follow Us On :</li>
                                <li><a href="https://www.facebook.com/octacodes.technologu.3/" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/octacodes_technologies?igsh=MW9zbjJnenc2cTl6bw=="
                                        target="_blank"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-fixed-height"></div>
        <div id="sticky-header" class="tg-header__area">
            <div class="container custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="tgmenu__wrap">
                            <nav class="tgmenu__nav">
                                <div class="logo d-flex align-items-center">
                                    <a href="{{ URL::TO('/') }}"><img
                                            src="{{ asset('com_assets/images/octacode_logo.png') }}"
                                            alt="Logo"><span class="fw-bold mx-2 text-center text-dark"
                                            style="font-family:sans-serif;">Octacode Technologies</span></a>
                                </div>
                                {{-- <div class="tgmenu__navbar-wrap tgmenu__main-menu d-none d-xl-flex">
                                    <ul class="navigation">
                                        <li class="active menu-item-has-children"><a href="#">Home</a>
                                            <ul class="sub-menu mega-menu">
                                                <li>
                                                    <ul class="list-wrap mega-sub-menu">
                                                        <li class="active">
                                                            <a href="index-2.html">Main Home</a>
                                                        </li>
                                                        <li>
                                                            <a href="index-3.html">Online Course <span class="tg-badge">Hot</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="index-4.html">University <span class="tg-badge-two">New</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="index-5.html">Yoga Instructor<span class="tg-badge-two">New</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="index-6.html">Kindergarten<span class="tg-badge">Hot</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul class="list-wrap mega-sub-menu">
                                                        <li>
                                                            <a href="index-7.html">Language Academy<span class="tg-badge-two">New</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="index-8.html">Business Coach <span class="tg-badge-two">New</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="index-9.html">Kitchen Coach <span class="tg-badge">Hot</span></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="mega-menu-img">
                                                        <a href="courses.html"><img src="{{asset('institude/img/others/mega_menu_img.jpg')}}" alt="img"></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Courses</a>
                                            <ul class="sub-menu">
                                                <li><a href="courses.html">All Courses</a></li>
                                                <li><a href="course-details.html">Course Details</a></li>
                                                <li><a href="lesson.html">Course Lesson</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="about-us.html">About Us</a></li>
                                                <li class="menu-item-has-children">
                                                    <a href="instructors.html">Our Instructors</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="instructors.html">Our Instructors</a></li>
                                                        <li><a href="instructor-details.html">Instructor Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="events.html">Our Events</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="events.html">Our Events</a></li>
                                                        <li><a href="events-details.html">Event Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="shop.html">Shop</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="shop.html">Shop Page</a></li>
                                                        <li><a href="shop-details.html">Shop Details</a></li>
                                                        <li><a href="cart.html">Cart Page</a></li>
                                                        <li><a href="check-out.html">Checkout</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="blog.html">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog.html">Blog Right Sidebar</a></li>
                                                        <li><a href="blog-2.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-3.html">Blog Full Width</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="login.html">Student Login</a></li>
                                                <li><a href="registration.html">Student Registration</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Dashboard</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item-has-children">
                                                    <a href="instructor-dashboard.html">Instructor Dashboard</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="instructor-dashboard.html">Dashboard</a></li>
                                                        <li><a href="instructor-profile.html">Profile</a></li>
                                                        <li><a href="instructor-enrolled-courses.html">Enrolled Courses</a></li>
                                                        <li><a href="instructor-wishlist.html">Wishlist</a></li>
                                                        <li><a href="instructor-review.html">Reviews</a></li>
                                                        <li><a href="instructor-attempts.html">My Quiz Attempts</a></li>
                                                        <li><a href="instructor-history.html">Order History</a></li>
                                                        <li><a href="instructor-courses.html">My Course</a></li>
                                                        <li><a href="instructor-announcement.html">Announcements</a></li>
                                                        <li><a href="instructor-quiz.html">Quiz Attempts</a></li>
                                                        <li><a href="instructor-assignment.html">Assignments</a></li>
                                                        <li><a href="instructor-setting.html">Settings</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="student-dashboard.html">Student Dashboard</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="student-dashboard.html">Dashboard</a></li>
                                                        <li><a href="student-profile.html">Profile</a></li>
                                                        <li><a href="student-enrolled-courses.html">Enrolled Courses</a></li>
                                                        <li><a href="student-wishlist.html">Wishlist</a></li>
                                                        <li><a href="student-review.html">Reviews</a></li>
                                                        <li><a href="student-attempts.html">My Quiz Attempts</a></li>
                                                        <li><a href="student-history.html">Order History</a></li>
                                                        <li><a href="student-setting.html">Settings</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tgmenu__search d-none d-md-block">
                                    <form action="#" class="tgmenu__search-form">
                                        <div class="select-grp">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.992 13.25C10.5778 13.25 10.242 13.5858 10.242 14C10.242 14.4142 10.5778 14.75 10.992 14.75V13.25ZM16.992 14.75C17.4062 14.75 17.742 14.4142 17.742 14C17.742 13.5858 17.4062 13.25 16.992 13.25V14.75ZM14.742 11C14.742 10.5858 14.4062 10.25 13.992 10.25C13.5778 10.25 13.242 10.5858 13.242 11H14.742ZM13.242 17C13.242 17.4142 13.5778 17.75 13.992 17.75C14.4062 17.75 14.742 17.4142 14.742 17H13.242ZM1 6.4H1.75H1ZM1 1.6H1.75H1ZM6.4 1V1.75V1ZM7 1.6H6.25H7ZM6.4 7V6.25V7ZM1 16.4H1.75H1ZM1 11.6H1.75H1ZM6.4 11V11.75V11ZM7 11.6H6.25H7ZM6.4 17V17.75V17ZM1.6 17V17.75V17ZM11 6.4H11.75H11ZM11 1.6H11.75H11ZM11.6 1V0.25V1ZM16.4 1V1.75V1ZM17 1.6H17.75H17ZM17 6.4H17.75H17ZM16.4 7V6.25V7ZM10.992 14.75H13.992V13.25H10.992V14.75ZM16.992 13.25H13.992V14.75H16.992V13.25ZM14.742 14V11H13.242V14H14.742ZM13.242 14V17H14.742V14H13.242ZM1.75 6.4V1.6H0.25V6.4H1.75ZM1.75 1.6C1.75 1.63978 1.7342 1.67794 1.70607 1.70607L0.645406 0.645406C0.392232 0.89858 0.25 1.24196 0.25 1.6H1.75ZM1.70607 1.70607C1.67794 1.7342 1.63978 1.75 1.6 1.75V0.25C1.24196 0.25 0.89858 0.392232 0.645406 0.645406L1.70607 1.70607ZM1.6 1.75H6.4V0.25H1.6V1.75ZM6.4 1.75C6.36022 1.75 6.32207 1.7342 6.29393 1.70607L7.35459 0.645406C7.10142 0.392231 6.75804 0.25 6.4 0.25V1.75ZM6.29393 1.70607C6.2658 1.67793 6.25 1.63978 6.25 1.6H7.75C7.75 1.24196 7.60777 0.898581 7.35459 0.645406L6.29393 1.70607ZM6.25 1.6V6.4H7.75V1.6H6.25ZM6.25 6.4C6.25 6.36022 6.2658 6.32207 6.29393 6.29393L7.35459 7.35459C7.60777 7.10142 7.75 6.75804 7.75 6.4H6.25ZM6.29393 6.29393C6.32207 6.2658 6.36022 6.25 6.4 6.25V7.75C6.75804 7.75 7.10142 7.60777 7.35459 7.35459L6.29393 6.29393ZM6.4 6.25H1.6V7.75H6.4V6.25ZM1.6 6.25C1.63978 6.25 1.67793 6.2658 1.70607 6.29393L0.645406 7.35459C0.898581 7.60777 1.24196 7.75 1.6 7.75V6.25ZM1.70607 6.29393C1.7342 6.32207 1.75 6.36022 1.75 6.4H0.25C0.25 6.75804 0.392231 7.10142 0.645406 7.35459L1.70607 6.29393ZM1.75 16.4V11.6H0.25V16.4H1.75ZM1.75 11.6C1.75 11.6398 1.7342 11.6779 1.70607 11.7061L0.645406 10.6454C0.392231 10.8986 0.25 11.242 0.25 11.6H1.75ZM1.70607 11.7061C1.67793 11.7342 1.63978 11.75 1.6 11.75V10.25C1.24196 10.25 0.898581 10.3922 0.645406 10.6454L1.70607 11.7061ZM1.6 11.75H6.4V10.25H1.6V11.75ZM6.4 11.75C6.36022 11.75 6.32207 11.7342 6.29393 11.7061L7.35459 10.6454C7.10142 10.3922 6.75804 10.25 6.4 10.25V11.75ZM6.29393 11.7061C6.2658 11.6779 6.25 11.6398 6.25 11.6H7.75C7.75 11.242 7.60777 10.8986 7.35459 10.6454L6.29393 11.7061ZM6.25 11.6V16.4H7.75V11.6H6.25ZM6.25 16.4C6.25 16.3602 6.2658 16.3221 6.29393 16.2939L7.35459 17.3546C7.60777 17.1014 7.75 16.758 7.75 16.4H6.25ZM6.29393 16.2939C6.32207 16.2658 6.36022 16.25 6.4 16.25V17.75C6.75804 17.75 7.10142 17.6078 7.35459 17.3546L6.29393 16.2939ZM6.4 16.25H1.6V17.75H6.4V16.25ZM1.6 16.25C1.63978 16.25 1.67793 16.2658 1.70607 16.2939L0.645406 17.3546C0.898581 17.6078 1.24196 17.75 1.6 17.75V16.25ZM1.70607 16.2939C1.7342 16.3221 1.75 16.3602 1.75 16.4H0.25C0.25 16.758 0.392231 17.1014 0.645406 17.3546L1.70607 16.2939ZM11.75 6.4V1.6H10.25V6.4H11.75ZM11.75 1.6C11.75 1.63978 11.7342 1.67793 11.7061 1.70607L10.6454 0.645406C10.3922 0.898581 10.25 1.24196 10.25 1.6H11.75ZM11.7061 1.70607C11.6779 1.7342 11.6398 1.75 11.6 1.75V0.25C11.242 0.25 10.8986 0.392231 10.6454 0.645406L11.7061 1.70607ZM11.6 1.75H16.4V0.25H11.6V1.75ZM16.4 1.75C16.3602 1.75 16.3221 1.7342 16.2939 1.70607L17.3546 0.645406C17.1014 0.392231 16.758 0.25 16.4 0.25V1.75ZM16.2939 1.70607C16.2658 1.67793 16.25 1.63978 16.25 1.6H17.75C17.75 1.24196 17.6078 0.898581 17.3546 0.645406L16.2939 1.70607ZM16.25 1.6V6.4H17.75V1.6H16.25ZM16.25 6.4C16.25 6.36022 16.2658 6.32207 16.2939 6.29393L17.3546 7.35459C17.6078 7.10142 17.75 6.75804 17.75 6.4H16.25ZM16.2939 6.29393C16.3221 6.2658 16.3602 6.25 16.4 6.25V7.75C16.758 7.75 17.1014 7.60777 17.3546 7.35459L16.2939 6.29393ZM16.4 6.25H11.6V7.75H16.4V6.25ZM11.6 6.25C11.6398 6.25 11.6779 6.2658 11.7061 6.29393L10.6454 7.35459C10.8986 7.60777 11.242 7.75 11.6 7.75V6.25ZM11.7061 6.29393C11.7342 6.32207 11.75 6.36022 11.75 6.4H10.25C10.25 6.75804 10.3922 7.10142 10.6454 7.35459L11.7061 6.29393Z" fill="currentcolor" />
                                            </svg>
                                            <select class="form-select" id="course-cat" aria-label="Default select example" style="width: 150px">
                                                <option selected disabled>Categories</option>
                                                <option value="1">Business</option>
                                                <option value="2">Data Science</option>
                                                <option value="3">Art & Design</option>
                                                <option value="4">Marketing</option>
                                                <option value="5">Finance</option>
                                            </select>
                                        </div>
                                        <div class="input-grp">
                                            <input type="text" placeholder="Search For Course . . .">
                                            <button type="submit"><i class="flaticon-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tgmenu__action">
                                    <ul class="list-wrap">
                                        <li class="wishlist-icon">
                                            <a href="cart.html" class="cart-count">
                                                <img src="{{asset('institude/img/icons/heart.svg')}}" class="injectable" alt="img">
                                                <span class="wishlist-count">0</span>
                                            </a>
                                        </li>
                                        <li class="mini-cart-icon">
                                            <a href="cart.html" class="cart-count">
                                                <img src="{{asset('institude/img/icons/cart.svg')}}" class="injectable" alt="img">
                                                <span class="mini-cart-count">0</span>
                                            </a>
                                        </li>
                                        <li class="header-btn login-btn">
                                            <a href="login.html">Log in</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mobile-login-btn">
                                    <a href="login.html"><img src="{{asset('institude/img/icons/user.svg')}}" alt="" class="injectable"></a>
                                </div>
                                <div class="mobile-nav-toggler"><i class="tg-flaticon-menu-1"></i></div> --}}
                            </nav>
                        </div>
                        <!-- Mobile Menu  -->
                        {{-- <div class="tgmobile__menu">
                            <nav class="tgmobile__menu-box">
                                <div class="close-btn"><i class="tg-flaticon-close-1"></i></div>
                                <div class="nav-logo">
                                    <a href="index-2.html"><img src="{{asset('institude/img/logo/logo.svg')}}" alt="Logo"></a>
                                </div>
                                <div class="tgmobile__search">
                                    <form action="#">
                                        <input type="text" placeholder="Search here...">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                                <div class="tgmobile__menu-outer">
                                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                </div>
                                <div class="social-links">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="tgmobile__menu-backdrop"></div> --}}
                        <!-- End Mobile Menu -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <style>
        .whatsapp-btn {
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.3));
            position: fixed;
            bottom: 15px;
            left: 12px;
            z-index: 100;
        }

        .whatsapp-btn>i {
            color: white;
            background-color: #25D366;
            padding: 12px;
            border-radius: 50%;
            font-size: 28px;
            transition: transform 0.5s ease;
        }

        .whatsapp-btn:hover i {
            background-color: #1ebe5d;
            transform: scale(1.1);
        }
    </style>

    <a href="https://wa.me/+916264355302" target="_blank" title="Chat on WhatsApp" class="whatsapp-btn">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- header-area-end -->
