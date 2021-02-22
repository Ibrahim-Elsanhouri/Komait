@extends('layouts.master')

@section('content')





    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>استشاراتي</h2>
                            <p>حسابي<span>/<span><a href="/myconsultants">استشاراتي</a></p>
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
          <h2 class="contact-title">قائمة الاستشارات</h2>

        </div>
        </div>
        <div class="col-lg-1"></div>
        <div class="col-lg-10">
   
   
<table class="table" style="direction:rtl;">
  <thead>
    <tr>
      <th scope="col">
          <div class="text-center">رقم الاستشارة</div>

      
       </th>
      <th scope="col">          <div class="text-center"> الاستشارة</div>
</th>
    <th scope="col">

    <div class="text-center">الملاحظات</div>
    
    
    </th>
      <th scope="col">
                <div class="text-center">العروض  </div>

      
      </th>
       <th scope="col">
                <div class="text-center">الاتفاقية  </div>

      
      </th>

            <th scope="col"> 
                      <div class="text-center">تاريخ التقديم</div>

            </th>


            <th scope="col"> 
                      <div class="text-center">الحالة</div>

            </th>
    </tr>
  </thead>
  <tbody>
  @foreach ($myconsultants as  $myconsultant)
              <tr>
      <th scope="row">
                <div class="text-center">K2020-{{ $myconsultant->id }}</div>
      </th>
      <td>                  <div class="text-center"><a href="{{ route('consultant.show' ,  $myconsultant->id  ) }}">{{ $myconsultant->subject  }}</a></div>
</td>
    <td>
    <div class="text-center">
    

        <a href="{{ route('note.consultant_notes' ,   $myconsultant->id    )}}"> <i class="fa fa-envelope"></i><span> {{ $myconsultant->notes->count()  }} </span></a>

    </div>
    
</td>
      <td>
      <div class="text-center">
        <a href="{{ route('offer.consultant_offers' ,  $myconsultant->id  )}}"> <i class="fa fa-money"></i><span> {{ $myconsultant->offers->count()  }} </span></a>
      
      </div>
      
      </td>
       <td>
      <div class="text-center">
     @if  ($myconsultant->contract->id)  
        <a href="{{ route('contract.show' , $myconsultant->contract->id) }}" target="_blank"> <i class="fa fa-money"></i><span> العقود </span></a>
      @endif
      </div>
      
      </td>
            <td scope="col">
                  <div class="text-center">
                  {{ $myconsultant->created_at->diffForHumans() }}
                  </div>

            
            </td>

     <td scope="col">
                  <div class="text-center">
                  
                  {{ $myconsultant->hala->name }}
                  


                  </div>

            
            </td>
    </tr> 
  @endforeach
 
  </tbody>
</table>

<div class="container">
<div class="text-center">
  {{ $myconsultants->links() }}
</div>
</div>

        </div>
     
        
       
        </div>
                <div class="col-lg-1"></div>

      </div>
    </div>
  </section>















@endsection
