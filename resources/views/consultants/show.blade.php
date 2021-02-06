@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2></h2>
                            <p>حسابي<span>/<span><a href="#">تفاصيل الاستشارة </a></p>
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
          <h2 class="contact-title">تفاصيل الاستشارة</h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
  <thead>
    <tr>
      <th scope="col">
       رقم الاستشارة

      
       </th>
      <th scope="col">          <div class="text-center"> {{ $consultant->id }}</div>
</th>
</tr>



    <tr>

<td>تفاصيل الاستشارة</td>    
    <td>
        <div class="text-center">

    {{ $consultant->details }}

    </div>
    </td>    

    </tr>
   
    <tr>

<td>نوع الاستشارة</td>    
    <td>
        <div class="text-center">

    {{ $consultant->type->name }}
</div>    
    
    </td>    

    </tr>
       <tr>

<td>هل يوجد ترخيص تجاري</td>    
    <td>
        <div class="text-center">

    @if($consultant->licences == 1)

<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>

    @else 

<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>

    @endif
    </div>
    </td>    

    </tr>

      <tr>

<td>دراسة جدوى   </td>    
    <td>
        <div class="text-center">

    @if($consultant->study == 1)

<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>

    @else 

<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>

    @endif
    </div>
    </td>    

    </tr>


      <tr>

<td> مستندات المشروع   </td>    
    <td>
    <div class="text-center">
    @if($consultant->docs == 1)

<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>

    @else 

<i class="fa fa-thumbs-o-down" aria-hidden="true"></i>

    @endif
    </div>
    </td>    

    </tr>
  </thead>

</table>



        </div>
     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>















@endsection
