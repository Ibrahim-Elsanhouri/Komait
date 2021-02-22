<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>منصة كميت الاستشارية التدريبية</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
	<link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu" style="direction: rtl;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12"><nav class="navbar navbar-expand-lg navbar-light">
                         <a class="navbar-brand logo_1" href="/"> <img width="400" height="80" src="{{ asset('img/komait.jpeg') }}" alt="logo"> </a>
                      <a class="navbar-brand logo_2" href="/"> <img width="400" height="80" src="{{ asset('img/komait.jpeg') }}" alt="logo"> </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>

                      <div class="collapse navbar-collapse main-menu-item justify-content-end"
                          id="navbarSupportedContent">
                 
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">الرئيسية</a>
                                </li>
                      
                              
                                <li class="nav-item">
                                    <a class="nav-link" href="/courses">الدورات </a>
                                </li>
                              
         @if(CRUDBooster::myId())
                                     <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    حسابي
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/myconsultants">استشاراتي</a>
                                        <a class="dropdown-item" href="/myenrollments">دوراتي</a>
                                    <a class="dropdown-item" href="/profile">معلومات الحساب</a>
                                    <a class="dropdown-item" href="/admin/logout">تسجيل خروج</a>



                                </div>
                            </li>
                            @else 
              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    دخول الحساب
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/login">تسجيل دخول</a>
                                    <a class="dropdown-item" href="/register">تسجيل جديد</a>


                                </div>
                            </li>


                            @endif
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">تواصل معنا</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="/become-instructor">كن معلما</a>
                                </li>
                            </ul>
                      </div>
                  </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
	
	<!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
							<h2>طلب استشارة</h2>
							<p>الرئيسية <span>/</span>طلب استشارة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!-- End banner Area -->


	<!-- Start Button -->

	<!-- End Button -->

	<!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
		
	
		
		@include('layouts.alerts')

		
		
			<div class="section-top-border" style="direction:rtl;">
				<div class="row">
					<div class="col-lg-8 col-md-8">
                    <div class="text-center"><h3 class="mb-30">طلب استشارة</h3></div>
						<form  method="post" action="{{ route('consultant.store') }}"  enctype="multipart/form-data">
                       @csrf
							<div class="mt-10">
								<input type="text" name="subject" placeholder="عنوان الاستشارة" 
								 required class="single-input">
							</div>
					<div class="mt-10">
								<textarea name="details" class="single-textarea" placeholder="شرح الاستشارة" 
								 required></textarea>
							</div>
						
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name="types_id">
                                                			<option value="" >اختر نوع الاستشارة</option>

                                            @foreach (\App\Type::all() as $type )
									<option value="{{ $type->id }}">{{ $type->name }}</option>
									
                                            @endforeach
									
									</select>
								</div>
							</div>
								<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name="study">
                                                			<option value="" >هل يوجد دراسة جدوى <i class="fa fa-plane" aria-hidden="true"></i></option>

									<option value="1">نعم</option>
									
																		<option value="0">لا</option>

									</select>
								</div>
							</div>
											<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-fax" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name="licences">
                                                			<option value="" >هل يوجد  ترخيص تجاري </option>

									<option value="1">نعم</option>
									
																		<option value="0">لا</option>

									</select>
								</div>
							</div>
                            								<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-fax" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name="docs">
                                                			<option value="">هل يوجد مستندات للاستشارة</option>

									<option value="1">نعم</option>
									
																		<option value="0">لا</option>

									</select>
								</div>
							</div>

							
		<div class="mt-10">
        <div class="text-right">
                <label>ملف الاستشارة</label>
</div>
								<input type="file" name="file" placeholder="ملف الاستشارة" 
								  class="single-input">
							</div>
                         
						
							<div class="mt-10">
                            <div class="text-center">
                        <button type="submit" class="button button-contactForm btn_1" >ارسال الطلب</button>

                            
                            </div>
							</div>
                            <input type="hidden" name="cms_users_id" value="{{ CRUDBooster::myId() }}" />
						</form>
					</div>
					<div class="col-lg-3 col-md-4 mt-sm-30">
				
					
					
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Align Area -->

	<!-- footer part start-->

    <!-- footer part start-->
    <footer class="footer-area" style="direction: rtl;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="/"> <img src="{{ asset('img/komait.jpeg') }}" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>