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
          <h2 class="contact-title">قائمة الملاحظات</h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
  <thead>
    <tr>
      <th scope="col">
          <div class="text-center"> الملاحظة</div>

      
       </th>
      <th scope="col">          <div class="text-center"> ملف مرفق</div>
</th>
 <th scope="col"> 
                      <div class="text-center">المرسل</div>

            </th>
    

            <th scope="col"> 
                      <div class="text-center">تاريخ الارسال</div>

            </th>

    </tr>
  </thead>
  <tbody>
  @foreach ($notes as  $note)
              <tr>
      <th scope="row">
                <div class="text-center">{{ $note->subject  }}</div>
      </th>
      <td>                  <div class="text-center">
      @if($note->screen)

              <a href="" download> <i class="fa fa-file"></i></a>
@else
				<button  class="genric-btn disable circle">لا يوجد </button>

   @endif   
      </div>
</td>
    <td>
    <div class="text-center">
@if($note->cms_users_id == CRUDBooster::myId())    
				<a href="#" class="genric-btn disable circle">{{ $note->user->name }}</a>

@else
				<button  class="genric-btn disable circle">ادارة المنصة</button>

@endif
    </div>
    
</td>
   
            <td scope="col">
                  <div class="text-center">
                  {{ $note->created_at->diffForHumans() }}
                  </div>

            
            </td>


    </tr> 
  @endforeach
 
  </tbody>
</table>

<div class="text-center">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
ارفاق ملاحظة
</button>
        </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="direction:rtl">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal </h5>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form method="post" action="{{ route('note.store') }}" enctype="multipart/form-data">
 @csrf
  <div class="form-group">
    <input name="subject" type="text" class="form-control" placeholder="نص الملاحظة">
  </div>
  <div class="form-group">
    <input name="screen" type="file" class="form-control" >

  </div>
    <input name="cms_users_id" type="hidden" value="{{ CRUDBooster::myId() }}" >
    <input name="consultants_id" type="hidden" value="{{ $consultants_id }}" >

  <button type="submit" class="btn btn-primary">ارسال الملاحظة</button>

</form>






 </div>
    </div>
  </div>
</div>

</div>

     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>















@endsection
