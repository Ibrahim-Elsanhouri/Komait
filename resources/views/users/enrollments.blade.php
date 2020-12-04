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
  <thead>
    <tr>
      <th scope="col">
          <div class="text-center"> الدورة</div>

      
       </th>

    

            <th scope="col"> 
                      <div class="text-center">تاريخ الالتحاق</div>

            </th>

    </tr>
  </thead>
  <tbody>
  @foreach ($enrollments as  $enrollment)
              <tr>
      <th scope="row">
                <div class="text-center"><a href="{{ route('course.show' ,  $enrollment->course->id  ) }}">{{ $enrollment->course->name  }}</a></div>
      </th>
 
  
   
            <td scope="col">
                  <div class="text-center">
           {{ $enrollment->created_at }}     -   {{ $enrollment->created_at->diffForHumans() }}
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
