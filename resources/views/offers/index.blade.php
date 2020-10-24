@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>ملاحظات الاستشارة</h2>
                            <p>استشاراتي<span>/<span>ملاحظات الاستشارة</p>
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
          <h2 class="contact-title">قائمة العروض</h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
  <thead>
    <tr>
      <th scope="col">
          <div class="text-center">💸 تكلفة العرض</div>

      
       </th>
      <th scope="col">          <div class="text-center"> ⏰مدة التنفيذ</div>
</th>
 <th scope="col"> 
                      <div class="text-center">✍ تفاصيل العرض</div>

            </th>
    

            <th scope="col"> 
                      <div class="text-center"> ⌚تاريخ الارسال</div>

            </th>
  <th scope="col"> 
                      <div class="text-center">قبول العرض</div>

            </th>
             <th scope="col"> 
                      <div class="text-center">اتفاقية العمل</div>

            </th>
    </tr>
  </thead>
  <tbody>
  @foreach ($offers as  $offer)
              <tr>
      <th scope="row">
                <div class="text-center"> {{ $offer->cost  }} ريال سعودي </div>
      </th>
      <td>                  <div class="text-center">
     {{ $offer->period  }}

      </div>
</td>
    <td>
    <div class="text-center">
     {{ $offer->details  }}

    </div>
    
</td>
   
            <td scope="col">
                  <div class="text-center">
                  {{ $offer->created_at }}
                  </div>

            
            </td>
              <td scope="col">
                  <div class="text-center">
@if($offer->status == 0)
				<a href="{{ route('offer.accepted' , $offer->id) }}" class="genric-btn primary-border circle">قبول العرض</a>
@else

تم قبول العرض 💖

@endif
                  </div>

            
            </td>
@if($offer->status == 1)

           <td scope="col">
                  <div class="text-center">
<button type="button" class="btn btn-default" data-toggle="modal" data-target="#exampleModal">
انشاء اتفاقية عمل 
</button>

                  </div>

            
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    

 <div class="modal-header">

        <h5  class="modal-title" id="exampleModalLabel">التوقيع الالكتروني على اتفاقية العمل</h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>









      <div class="modal-body">
      <h4  style="color:red">
      
بتاكيدك للطب تعتبر موافقا على العرض , و لن تفعل الاتفاقية الا بعد اتمام السداد 
كما يمكنك الاطلاع على بنود الاتفاقية و تحميلها قبل السداد

      </div>
      
      </h4>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
<span class="glyphicon glyphicon-plus" aria-hidden="true"></span> 
        <button type="button" class="btn btn-primary">تأكيد التوقيع</button>

      </div>
    </div>
  </div>
</div>









            </td>
@endif





    </tr> 
  @endforeach
 
  </tbody>
</table>




     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>















@endsection
