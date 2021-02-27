@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>سداد رسوم الدورة</h2>
                            <p>دورة تدريبية<span>/<span>سداد رسوم</p>
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
          <h2 class="contact-title">امر الدفع</h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
  <thead>
    <tr>
      <th scope="col">
          <div class="text-center"> الدورة </div>

      
       </th>
      <th scope="col">          <div class="text-center">{{ $course->name }}</div>
</th>


    </tr>
  </thead>
  <tbody>
              <tr>
      <th scope="row">
                <div class="text-center">الرسوم</div>
      </th>
      <td>                  <div class="text-center">
                                    {{ $course->price }}      </div>
</td>

   
     


    </tr>  

 <tr>
 <td colspan="2">
 <div class="text-center">

 <form action="{{ route('myfatoorah.execute' , $course->id) }}"  method="post">

 @csrf
 <input  type="hidden" name="courses_id" value="{{ $course->id}}"/>
 <input  type="hidden" name="courses_id" value="{{ $course->price}}"/>

 <button type="submit" class="btn btn-primary">الدفع الان</button>
 </form>

 </div>
 
 </td>
 
 </tr>
  </tbody>
</table>


<!-- Modal -->

</div>

</div>

     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>















@endsection
