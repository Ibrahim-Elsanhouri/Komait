@extends('layouts.lms')

@section('content')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>الدورات</h2>
                            <p>الرئيسية<span>/</span>الدورات</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


       <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>الدورات التدريبية</h2>
                    </div>
                </div>
            </div>
            <div class="row"  style="direction:rtl;">
@include('layouts.alerts')


@foreach ($courses as $course )
    
                   <div class="col-sm-6 col-lg-4">
                    <div class="single_special_cource">
                        <img src="/{{ $course->image }}" class="special_img" alt="" width="360" height="180">
                        <div class="special_cource_text">
                            <a href="#" class="btn_4">{{ $course->category->name }}</a>
                            @if ($course->price == 0 )
                            <h4>مجانا</h4>

                            @else 
                            <h4>{{ $course->price }}  ريال سعودي</h4>


                            @endif
                            <a href="{{ route('course.show' , $course->id) }}">
                                <h3>{{ $course->name }}</h3>
                            </a>
                            <p>{{ $course->goal }}</p>
                            <div class="author_info">
                                <div class="author_img">
                                    <div class="author_info_text">
                                        <p>مدرب الدورة</p>
                                        <h5><a href="#">{{ $course->user->name }}</a></h5>
                                    </div>
                                </div>
                            <div class="author_rating">
                            <!--        <div class="rating">
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="img/icon/star.svg" alt=""></a>
                                    </div> -->
                                <!--    <p>3.8 Ratings</p> -->
                                </div>
                            </div>
                        
                        </div>

                    </div>
                </div>

     @endforeach





              
           
            </div>
        </div>
    </section>


@endsection  