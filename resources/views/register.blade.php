@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>تسجيل جديد</h2>
                            <p>الرئيسية<span>/<span>تسجيل جديد</p>
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
          <h2 class="contact-title">تسجيل جديد</h2>

        </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
   
          <form class="form-contact contact_form" action="{{ route('user.register') }}" method="post">
 @csrf
            <div class="row">
               <div class="col-12">
                <div class="form-group">
                  
                  <input class="form-control" name="name"  type="text" placeholder = 'الاسم'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  
                  <input class="form-control" name="email"   type="email" placeholder = 'البريد الالكتروني'>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="password"  type="password"   placeholder = ' كلمة المرور'>
                </div>
              </div>
                 <div class="col-sm-12">
                <div class="form-group">
                  <input class="form-control" name="mobile"  type="text"   placeholder = 'رقم الجوال'>
                </div>
              </div>
           
           
            </div>
            <div class="text-center">
            
               <div class="form-group mt-4">
              <button type="submit" class="button button-contactForm btn_1">تسجيل جديد</button>
            </div>
            
            </div>
         
          </form>
        </div>
            <div class="col-lg-4"></div>

      </div>
    </div>
  </section>















@endsection
