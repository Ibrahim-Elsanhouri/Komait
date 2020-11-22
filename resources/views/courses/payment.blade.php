@extends('layouts.master')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2اتمام الدفع</h2>
                            <p>{{ $course->name }}<span>/<span>الدفع</p>
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
          <h2 class="contact-title">بيانات الدفع </h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
  <thead>
    <tr>
      <th scope="col">
          <div class="text-center">رقم الدورة</div>

      
       </th>
      <th scope="col">          
      <div class="text-center">CRS-{{ $course->id }}</div>
</th>

      

           


    </tr>
     <tr>
      <th scope="col">
          <div class="text-center">المبلغ</div>

      
       </th>
      <th scope="col">          <div class="text-center">{{ $course->price }}</div>
</th>

      

           


    </tr>
  </thead>
  <tbody>
 
              <tr>
     

      <td colspan="2">    
                    <div class="text-center">
      <form method="post" action="{{ route('paylink.course.invoice') }}">
      @csrf
<input type="hidden" value="{{ $course->price }}" name="price"/>
<input type="hidden" value="{{ $course->id }}" name="id"/>

<input type="hidden" value="{{ CRUDBooster::myName() }}" name="name"/>
<input type="hidden" value="{{ CRUDBooster::myMobile() }}" name="mobile"/>
<input type="hidden" value="{{ CRUDBooster::MyEmail() }}" name="email"/>
<input type="hidden" value="{{ $id_token }}" name="id_token"/>

      <button class="btn btn-primary">تاكيد الدفع</button>
      
      
      </form>
      
      </div>
</td>
  

    </tr> 
 
  </tbody>
</table>



        </div>
     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>

















@endsection
