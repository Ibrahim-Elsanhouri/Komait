<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>منصة كميت التدريبية الاستشارية</title>
    <link rel="icon" href="{{ asset('img/main-logo.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu" style="direction: rtl;">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-12">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand logo_1" href="/"> <img width="300" height="80" src="{{ asset('img/komait.jpeg') }}" alt="logo"> </a>
                      <a class="navbar-brand logo_2" href="/"> <img width="300" height="80" src="{{ asset('img/komait.jpeg') }}" alt="logo"> </a>
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
                      
                   
                           <li class="nav-item">
                                <a class="nav-link" href="/contact">تواصل معنا</a>
                            </li>
                            @if(CRUDBooster::myId())
                                     <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    حسابي
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/myconsultants">استشاراتي</a>
                                    <a class="dropdown-item" href="/myenrollments">دوراتي</a>
    <a class="dropdown-item" href="/notifications"> ({{ CRUDBooster::myNotifications() }})الاشعارات </a>

                                    <a class="dropdown-item" href="/profile">معلومات الحساب</a>
                                    <a class="dropdown-item" href="/admin/logout ">تسجيل خروج</a>


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


  @yield('content')

    <footer class="footer-area" style="direction: rtl;">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-sm-6 col-md-4 col-xl-3">
                  <div class="single-footer-widget footer_1">
                      <a href="#"> <img src="{{ asset('img/komait.jpeg') }}" alt=""> </a>
                   
                      <p>منصة كميت الاستشارية منصة عربية تقدم خدمات استشارية و تدريبية </p>
                      <a href="/admin" style="color:blue">قسم الادارة</a>
                  </div>
              </div>
              <div class="col-sm-6 col-md-4 col-xl-4">
                  <div class="single-footer-widget footer_2">
                      <h4>وسائل التواصل الاجتماعي</h4>
                      <p>
سعيدين بتواصلكم معنا على مدار الساعة                      </p>
    
                      <div class="social_icon">
                          <a href="https://www.facebook.com/KomaitKSA/"> <i class="ti-facebook"></i> </a>
                          <a href="https://twitter.com/KomaitKSA"> <i class="ti-twitter-alt"></i> </a>
                          <a href="https://www.instagram.com/komaitksa/"> <i class="ti-instagram"></i> </a>
                          <a href="https://www.linkedin.com/company/komaitksa/?originalSubdomain=sa"> <i class="ti-linkedin"></i> </a>
            <a href="https://www.youtube.com/channel/UCOHrkGGPcTpTJN1HEZ1NBSw"> <i class="ti-youtube"></i> </a>

                      </div>
                  </div>
              </div>
              <div class="col-xl-3 col-sm-6 col-md-4">
                  <div class="single-footer-widget footer_2">
                      <h4>تواصل معنا</h4>
                      <div class="contact_info">
                          <p><span> العنوان :</span>طريق الملك فهد</p>
                          <p><span> الهاتف :</span> ‪9200 15166 </p>
                          <p><span> البريد الالكتروني : </span>komaitksa@gmail.com‏</p>
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
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e504f34a89cda5a18875676/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- jquery plugins here-->
<!-- jquery -->
<script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
<!-- popper js -->
<script src="{{ asset('js/popper.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- easing js -->
<script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/swiper.min.js') }}"></script>
<script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
<!-- swiper js -->
<script src="{{ asset('js/masonry.pkgd.js') }}"></script>
<!-- particles js -->
<script src="{{ asset('js/owl.carousel.min.js ') }}"></script>
<!-- contact js -->
<script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('js/jquery.form.js') }}"></script>
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/mail-script.js') }}"></script>
<script src="{{ asset('js/contact.js') }}"></script>

<!-- slick js -->
<script src="{{ asset('js/slick.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!-- payment js -->
<script src="{{ asset('js/payment.js') }}"></script>
<!-- custom js -->
<script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>