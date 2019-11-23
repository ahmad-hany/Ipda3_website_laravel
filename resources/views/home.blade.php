@extends('layouts.frontend.master')

    <!-- Start Main -->

    <main>
        <!-- Start Home -->
        @section('home')
            <section class="home mb-5">
                    <div class="container">
                        <div class="row">
                            @foreach ($setting as $row)
                            <div class="head_right col-12 col-lg-5">
                                <img src="{{asset('frontend/assets/imgs/'. $row['intro_image'] .'.jpg')}}" alt="" class="img-fluid">
                            </div>
                            <div class="head_left col-12 col-lg-7 pt-5">
                                <h1 class="pt-5 wow bounceInDown slow font-weight-bold">
                                    {{-- ابداع تك .. شريكك التقني الأمثل لبدأ مشروعك الان --}}
                                        {{ $row['slogan'] }}
                                </h1>
                            </div>
                        </div>
                            @endforeach
                    </div>
            </section>
        @endsection
        

        <!-- End Home -->

        <!-- Start About -->

            @section('about')
                <section class="about my-5">
                        <div class="container">
                            @foreach ($page as $row)
                            <div class="mx-auto">
                                <h2 class="text-center">{{$row['title']}}</h2>
                            </div>
                            <div class="head-line my-3 mx-auto"></div>
                            <div class="row">
                                <div class="about_right col-12 col-lg-6 wow slideInRight animated">
                                    <img src="{{asset('frontend/assets/imgs/'. $row['image'] .'.png')}}" alt="" class="img-fluid w-75 mt-5">
                                </div>
                                <div class="about_left col-12 col-lg-6 d-flex align-items-center wow slideInLeft">
                                    <p>
                                        {{$row['content']}}
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
            @endsection
        
        <!-- End About -->

        <!-- Start Offer -->

            @section('offer')
                <section>
                    
                    <h2 class="text-center">ما نقدمه لكم ؟</h2>
                    <div class="head-line my-3 mx-auto"></div>
                    <div class="offer">
                        <div class="container">
                            <div class="row offer-items wow fadeIn slow">
                                @foreach ($service as $row)
                                <div class="card">
                                    <img src="{{asset('frontend/assets/imgs/'. $row['image'] .'.png')}}" class="card-img-top mx-auto" alt="التدريب">
                                    <div class="card-body">
                                        <h4 class="text-center">{{$row['title']}}</h4>
                                        <p class="card-text text-center">{{$row['content']}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                
                                <div class="arrows text-center pt-5">
                                    <i class="fa fa-angle-right fa-2x offer-next"></i>
                                    &nbsp;&nbsp;
                                    <i class="fa fa-angle-left fa-2x offer-prev"></i>
                                </div>
                            </div>
                        </div>
                </section>
            @endsection
        

        <!-- End Offer -->

        <!-- Start Work -->
            @section('work')
                <section>
                    <h2 class="text-center my-5">بعض أعمالنا
                        <div class="head-line my-3 mx-auto"></div>
                    </h2>
                    <div class="work">
                        <div class="container">
                            <div class="row pt-5 wow fadeIn slow">
                                <div class="col-12 col-lg-4">
                                    @foreach ($project as $row)
                                        
                                    <div class="card mb-4 shadow">
                                        <img src="{{asset('frontend/assets/imgs/'. $row['cover_image'] .'.jpg')}}" class="card-img-top" alt="تطبيق بنك الدم">
                                        <div class="card-body">
                                            <h4 class="text-center">
                                                <a href="project-details.html" class="text-decoration-none text-body">
                                                    {{$row['title']}}
                                                </a>
                                            </h4>
                                        </div>
                                    </div>

                                    @endforeach
                                </div>
                            </div>
                            <div class="text-center pb-5">
                                <button type="button" class="btn btn-color text-center rounded-pill px-5 shadow">
                                    <a href="our-work.html" class="text-decoration-none text-white">
                                        شاهد كل
                                        أعمالنا
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            @endsection
        

        <!-- End Work -->

        <!-- Start Articles -->
@section('articles')
<section>
        <div class="articles">
            <div class="container">
                <div class="row pt-5 justify-content-around d-flex">
                    <div class="col-12 col-lg-5">
                        @foreach ($post as $row)
                            
                        <div class="card mb-5 shadow-lg">
                            <img src="{{asset('frontend/assets/imgs/'. $row['image'] .'.jpg')}}" class="card-img-top" alt="التدريب">
                            <div class="card-body">
                                <p class="text-center"> 
                                    {{$row['title']}}
                                </p>
                                    <div class="justify-content-between d-flex">
                                        <button type="button"
                                        class="btn btn-color text-center rounded-pill px-3 shadow">
                                        <a href="article-details.html" class="text-decoration-none text-white">
                                            اقرأ
                                            الان
                                        </a>
                                    </button>
                                    <span class="d-flex align-items-center">
                                        200 &nbsp; <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                        @endforeach
                    </div>
                </div>
                <div class="text-center pb-5">
                    <button type="button" class="btn btn-color text-center rounded-pill px-5 shadow">
                        <a href="our-articles.html" class="text-decoration-none text-white">
                            المزيد
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
        

        <!-- End Articles -->

        <!-- Start Clients -->
@section('clients')
<section>
        <h2 class="text-center">عملاء نفتخر بهم</h2>
        <div class="head-line my-3 mx-auto"></div>
        <div class="clients">
            <div class="container py-5">
                <div class="row client-items py-5 align-items-center d-flex wow bounceInUp slow">
                    @foreach ($client as $row)
                        
                    <div>
                        <img src="{{asset('frontend/assets/imgs/'. $row['image'] .'.png')}}" class="card-img-top mx-auto" alt="التدريب">
                    </div>

                    @endforeach
                </div>

                <div class="arrows text-center pb-5">
                    <i class="fa fa-angle-right fa-2x client-next"></i>
                    &nbsp;&nbsp;
                    <i class="fa fa-angle-left fa-2x client-prev"></i>
                </div>
            </div>
        </div>
    </section>
@endsection
        

        <!-- End Clients -->

    </main>

    <!-- End Main -->

