@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>تسجيل دخول</h2>
                            <p>الرئيسية<span>/<span>تسجيل الدخول</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

  
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        
@include('layouts.alerts')

      <div class="row">
        <div class="col-12">
        <div class="text-center">
          <h2 class="contact-title">تسجيل الدخول</h2>

        </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
   
          <form class="form-contact contact_form" action="{{ route('postLogin') }}" method="post">
 @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'البريد الالكتروني  '" placeholder = 'البريد الالكتروني'>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'كلمة المرور  '" placeholder = ' كلمة المرور'>
                </div>
              </div>
           
           
            </div>
            <div class="text-center">
            
               <div class="form-group mt-4">
              <button type="submit" class="button button-contactForm btn_1">تسجيل الدخول</button>
            </div>
            
            </div>
         
          </form>
        </div>
            <div class="col-lg-4"></div>

      </div>
    </div>
  </section>















@endsection
