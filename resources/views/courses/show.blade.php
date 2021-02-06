@extends('layouts.lms')

@section('content')
      <section class="breadcrumb breadcrumb_bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>تفاصيل الدورة</h2>
                            <p><a href="/courses">الدورات</a><span>/</span>تفاصيل الدورة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_padding" style="direction: rtl;">
        <div class="container">
            <div class="row">
            @include('layouts.alerts')

                <div class="col-lg-8 course_details_left" >
                    <div class="main_image">
                    <div class="text-center">
                                            <img class="img-fluid" src="/{{ $course->image }}" alt="">

                    
                    </div>
                    </div>
                    <div class="content_wrapper" style="direction: rtl;">
                        <div class="text-right">

                            <h4 class="title_top">اهداف الدورة</h4>

                        </div>
                        <div class="content">
                            <div class="text-right">
                             {{ $course->goal }}
                            </div> 
                      

                        </div>
                        <div class="text-right">
                            <h4 class="title">متطلبات الدورة</h4>
                        <div class="content">
{{ $course->requirements }}
                        </div>
                    </div>

                    <div class="text-right">

                        <h4 class="title">محتوى الدورة</h4>


                    </div>

                        <div class="content">
                            <ul class="course_list">
                            @foreach ( $course->lessons as $lesson )
                                        <li class="justify-content-between align-items-center d-flex">
                                    <p>{{ $lesson->name }}</p>
                                @if ($course->users->contains(CRUDBooster::myId()) )

                                    <a class="btn_2 text-uppercase" href="{{ route('lesson.show' , $lesson->id ) }}">عرض الدرس</a>
                             
                             @endif
                                </li>
                             
                         
                          
                            @endforeach
                        
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 right-contents">
                    <div class="sidebar_top">
                        <ul>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>المدرب</p>
                                    <span class="color">{{ $course->user->name }}</span>
                                </a>
                            </li>
                            <li>
                                <a class="justify-content-between d-flex" href="#">
                                    <p>رسوم الدورة</p>
                                    <span>SR {{ $course->price }}</span>
                                </a>
                            </li>
                         
                         

                        </ul>
                       @if ($course->users->contains(CRUDBooster::myId()))
                                               <a href="#" class="btn_1 d-block"><i class="fa fa-heart" aria-hidden="true"></i>  انت منضم للدورة  </a>
                                               @endif
                       @if (!$course->users->contains(CRUDBooster::myId()) && $course->price == 0)
     <form method="post" action="{{  route('enrollment.store') }}">
                       @csrf
                       <input type="hidden" name="cms_users_id" value="{{ CRUDBooster::myId() }}"/> 
                        <input type="hidden" name="courses_id" value="{{ $course->id }}"/> 

                       <button type="submit" class="btn_1 d-block">انضم الى الدورة</button>
                       </form>
                       @else
 <form method="post" action="{{  route('enrollment.store') }}">
                       @csrf
                       <input type="hidden" name="cms_users_id" value="{{ CRUDBooster::myId() }}"/> 
                        <input type="hidden" name="courses_id" value="{{ $course->id }}"/> 

                       <button type="submit" class="btn_1 d-block">السداد  </button>
                       </form>
                       @endif
                

                 
                    </div>


                </div>
            </div>
        </div>
    </section>


@endsection  