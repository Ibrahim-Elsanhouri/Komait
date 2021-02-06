<!doctype html>
<html lang="ar">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>منصة كميت التدريبية الاستشارية</title>
    <link rel="icon" href="img/main-logo.png">
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
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">

<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu home_menu" style="direction: rtl;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img width="300px" height="80px" src="img/komait.jpeg" alt="logo"> </a>
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
    <a class="dropdown-item" href="/notifications"> ({{ CRUDBooster::myNotifications() }})الاشعارات </a>

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

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-xl-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>منصةاستشارية تدريبية عربية</h5>
                            <h1>منصة كميت الاستشاريةالتدريبية</h1>
                            <p>
                            اكمل جميع عملياتك الاستشارية و انضم لنا في المحتوى التدريبي 
                            </p>
                            <a href="/courses" class="btn_1">عرض الدورات</a>
                            <a href="/consultant" class="btn_2">طلب استشارة</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xl-3 align-self-center">
                    <div class="single_feature_text ">
                        <h2>فلسفتنا بسيطة  </h2>
                        <p>نهدف لمساعدة عملائنا على النجاح. هذا هو السبب في أننا نخصص لكل عميل فريق عمل متخصص.
</p>
                        <a href="/become-instructor" class="btn_1">طلب الانضمام</a>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-layers"></i></span>
                            <h4> 
                                 تنوعنا
                                </h4>
                            <p>
مجموعة واسعة من الخدمات لكل مرحلة من مراحل نمو منشأتكم.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><i class="ti-new-window"></i></span>
                            <h4>مهمتنا</h4>
                            <p>
تقديم خدمات مهنية استثنائية وذات قيمة مضافة لعملائنا، لنكون الخيار المفضل والذي يتعدى طموحاتهم.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="single_feature">
                        <div class="single_feature_part single_feature_part_2">
                            <span class="single_service_icon style_icon"><i class="ti-light-bulb"></i></span>
                            <h4> رؤيتنا </h4>
                            <p>أن نكون الخيار الأول لشركاء نجاحنا في تقديم الخدمات الاستشارية المتكاملة.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- learning part start-->
    <section class="learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-lg-stretch">
                <div class="col-md-7 col-lg-7">
                    <div class="learning_img">
                        <img src="img/learning_img.png" alt="">
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="learning_member_text">
                        <h5> الخدمات </h5>
                        <h2>
استشارية تدريبية تقنية                        
                        </h2>
                        <p>نقدم افضل الخدمات والحلول للتحديات التي تواجهها المنظمات في إدارة وتطوير العنصر البشري 
</p>
                        <ul>
                            <li><span class="ti-pencil-alt"></span>تقديم حلول متكاملة خلال دورة حياة الموظف في المنظمات 
</li>
                            <li><span class="ti-ruler-pencil"></span>تصميم برامج تطويرية متكاملة تلبي احتياجات المنظمات 
</li>
                        </ul>
                        <a href="#" class="btn_1">اقرا اكثر</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- learning part end-->

    <!-- member_counter counter start -->
    <section class="member_counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ App\User::where('id_cms_privileges', 2)->count() }}</span>
                        <h4>مدربي المنصة </h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ App\User::count() }}</span>
                        <h4>عملاء المنصة</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ App\Course::count() }}</span>
                        <h4>عدد الدورات </h4>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_member_counter">
                        <span class="counter">{{ App\Lesson::count() }}</span>
                        <h4>عدد الدروس</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- member_counter counter end -->

    <!--::review_part start::-->


    <!-- learning part start-->
    <section class="advance_feature learning_part">
        <div class="container">
            <div class="row align-items-sm-center align-items-xl-stretch">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_member_text">
                        <h5>قدرات سيتي</h5>
                        <h2>
                        نظام التعليم عن بعد
                        </h2>
                        <p>توفر منصة كميت خدمات تدريبية متكاملة من خلال المنصة
                    

                        </p>
                        <div class="row">
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-pencil-alt"></span>
                                    <h4> تعلم في اي مكان</h4>
                                    <p>يمكنك التسجيل في الدورة و حضورها عن بعد في اي وقت او مكان</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-12 col-lg-6">
                                <div class="learning_member_text_iner">
                                    <span class="ti-stamp"></span>
                                    <h4>مدربين اكفاء</h4>
                                    <p>مدريبين ذوي خبرة عالية في مختلف المجالات</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="learning_img">
                        <img src="img/advance_feature_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    

    <!--::review_part start::-->
   


    <footer class="footer-area" style="direction: rtl;">
      <div class="container">
          <div class="row justify-content-between">
              <div class="col-sm-6 col-md-4 col-xl-3">
                  <div class="single-footer-widget footer_1">
                      <a href="#"> <img src="{{ asset('img/main-logo.png') }}" alt=""> </a>
                   
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

    <!-- jquery plugins here-->
    <!-- jquery -->
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