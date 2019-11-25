@extends('layouts.frontend.master')

<!-- Start Main -->

<main>

        <!-- Start Project Preview -->
@section('project-preview')

<section>
    <div class="project-preview">
            @foreach ($project as $row)
            <div class="container-fluid">
                <div class="row vertical-line my-4 ml-4">
                    <h2 class="text-center px-2">{{$row['title']}}</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <img src="{{asset('frontend/assets/imgs/'. $row['image'] .'.png')}}" alt="project-preview"
                    class="w-50 mx-auto wow rotateInDownLeft animated">
                </div>
            </div>
        </div>
    </section>
    
    @endsection
    <!-- End Project Preview -->
    
    <!-- Start Project Details -->
    
    @section('project-details')
    
    <section>
        <div class="project-details">
            <div class="container-fluid">
                <div class="row vertical-line my-4 ml-4">
                    <h2 class="text-center px-2">تفاصيل المشروع</h2>
                </div>
            </div>
            <div class="project-details-text">
                <div class="container">
                    <div class="row">
                    <p class="text-center text-white p-5">{{$row['content']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        
        @endsection
        <!-- End Project Details -->
        
        <!-- Start Project Tour -->
        
        @section('project-tour')
        
        <section>
            <div class="project-tour my-5">
                    <div class="container-fluid">
                        <div class="row vertical-line my-4 ml-4">
                            <h2 class="text-center px-2">خدلك لفة</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="arrows text-center">
                            <i class="fa fa-caret-square-right fa-2x project-tour-prev"></i>
                            <i class="fa fa-caret-square-left fa-2x project-tour-next"></i>
                        </div>
                    </div>
                    <div class="card-carousel mb-5">
                        @foreach ($photo as $row)
                            
                        <div class="my-card"><img src="{{asset('frontend/assets/imgs/'. $row['url'] .'.'. $row['extension'].'')}}" alt=""></div>
                        
                        @endforeach
                    </div>
                </div>
            </section>
            
            @endsection
            
            <!-- End Project Tour -->
            
        </main>
        
        <!-- End Main -->
        
        