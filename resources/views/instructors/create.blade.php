@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>طلب عضوية مدرب</h2>
                            <p>الرئيسية<span>/<span>طلب عضوية مدرب</p>
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
          <h2 class="contact-title">طلب عضوية مدرب</h2>

        </div>
        </div>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
   
          <form class="form-contact contact_form" action="{{ route('instructor.store') }}" method="post">
 @csrf
            <div class="row">
               <div class="col-12">
                <div class="form-group">
                  
                  <input class="form-control" name="experience"  type="integer" placeholder = 'سنوات الخبرة'>
                </div>
              </div>
            
              <div class="col-sm-12">
                <div class="form-group">
                  
    <textarea name="overview" class="form-control" id="exampleFormControlTextarea1" rows="3">نبذة</textarea>
                </div>
              </div>
             
           
           
            </div>
            <div class="text-center">
            
               <div class="form-group mt-4">
              <button type="submit" class="button button-contactForm btn_1">ارسال الطلب</button>
            </div>
            
            </div>
                           <input class="form-control" name="cms_users_id"  type="hidden"  value="{{ CRUDBooster::myId() }}">

          </form>
        </div>
            <div class="col-lg-4"></div>

      </div>
    </div>
  </section>















@endsection
