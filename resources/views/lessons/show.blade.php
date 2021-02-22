
@extends('layouts.master')

@section('content')


      <section class="breadcrumb breadcrumb_bg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>{{ $lesson->course->name }}</h2>
                            <p>{{ $lesson->name }}</p>
                            @can('view', $lesson)
                            < The Current User Can see  The Post 
                        @else
                             The Current User Canbot  Create New Post
                        @endcan
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
                <div class="col-lg-12 course_details_left" >
                  
                    <div class="content_wrapper" style="direction: rtl;">
                        <div class="text-center">

                            <h4 class="title_top">محتوى الدرس</h4>

                        </div>
                        <div class="content">
                            <div class="text-center">
                             <?php echo  htmlspecialchars_decode($lesson->content) ?>
                            </div> 
                      

                        </div>

                   
                
                    </div>
                </div>


           
    </section>

@endsection  