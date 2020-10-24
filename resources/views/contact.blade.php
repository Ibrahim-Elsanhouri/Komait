@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>تواصل معنا</h2>
                            <p>الرئيسية<span>/<span>تواصل معنا</p>
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
          <h2 class="contact-title">ارسل استفسارك</h2>

        </div>
        </div>
        <div class="col-lg-8">
   
          <form class="form-contact contact_form" action="{{ route('contact.store') }}" method="post">
 @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الاستفسار'" placeholder = 'الاستفسار'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'الاسم  '" placeholder = 'الاسم'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'البريد الالكتروني '>
                </div>
              </div>
              <!--
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div> -->
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_1">ارسل</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>الرياض - المملكة العربية السعودية</h3>
              <p>شارع العليا العام</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>من الاحد الى الخميس 8 - 5</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@komait.com</h3>
              <p>ارسل طلبك في اي وقت</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>















@endsection
