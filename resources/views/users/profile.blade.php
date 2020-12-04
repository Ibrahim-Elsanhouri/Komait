@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>معلومات الحساب</h2>
                            <p>حسابي<span>/<span><a href="/profile">معلومات الحساب</a></p>
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
          <h2 class="contact-title">معلومات الحساب</h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
    <tr>
      <th scope="col">
          <div class="text-center">رقم العضوية</div>

      
       </th>
      <th scope="col">    
            <div class="text-center"> 
KMT-2020-{{ CRUDBooster::myId() }}
      </div>

</th>

</tr>
   <tr>
      <th scope="col">
          <div class="text-center">الاسم</div>

      
       </th>
      <th scope="col">    
            <div class="text-center"> 
{{ CRUDBooster::MyName() }}
      </div>

</th>

</tr>
  
    
  <tr>
      <th scope="col">
          <div class="text-center">الجوال</div>

      
       </th>
      <th scope="col">    
            <div class="text-center"> 
{{ CRUDBooster::MyMobile() }}
      </div>

</th>

</tr>
   
  <tr>
      <th scope="col">
          <div class="text-center">البريد الالكتروني</div>

      
       </th>
      <th scope="col">    
            <div class="text-center"> 
{{ CRUDBooster::MyEmail() }}
      </div>

</th>

</tr>
     <tr>
      <th scope="col">
          <div class="text-center">نوع العضوية</div>

      
       </th>
      <th scope="col">    
            <div class="text-center"> {{ CRUDBooster::myPrivilegeName()	}}
      </div>

</th>

</tr>  
   

</table>



        </div>
     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>















@endsection
