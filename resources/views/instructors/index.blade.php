@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>طلب التدريب</h2>
                            <p>حسابي<span>/<span>طلب التدريب</p>
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
          <h2 class="contact-title">طلب عضوية التدريب</h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
  <thead>
    <tr>
      <th scope="col">
          <div class="text-center">رقم الطلب</div>

      
       </th>
      <th scope="col">          <div class="text-center"> تاريخ الطلب</div>
</th>
    <th scope="col">

    <div class="text-center">الحالة</div>
    
    
    </th>
   

          


    </tr>
  </thead>
  <tbody>

              @foreach($instructors as $instructor)

              <tr>
      <th scope="row">
                <div class="text-center">INST2020-{{ $instructor->id  }}</div>
      </th>
      <td>             
           <div class="text-center">{{ $instructor->created_at }}</div>
</td>
    <td>
             <div class="text-center">
             @if ($instructor->accepted ==  0)
طلبك في الانتظار ⌛
             @else
تم قبول طلبك ✌
             @endif
             
             </div>

    
</td>
  
    
     

    </tr> 
    @endforeach
 
  </tbody>
</table>



        </div>
     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>















@endsection
