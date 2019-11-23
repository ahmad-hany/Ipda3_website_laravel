@extends('layouts.frontend.master')

<!-- Start Main -->

<main>

        <!-- Start Project Preview -->
@section('project-preview')
    
<section>
    <div class="project-preview">
        <div class="container-fluid">
            <div class="row vertical-line my-4 ml-4">
                <h2 class="text-center px-2">تطبيق وان</h2>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <img src="{{asset('frontend/assets/imgs/project-preview-header.png')}}" alt="project-preview"
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
                            <p class="text-center text-white p-5">لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض
                                على
                                العميل ليتصور طريقه وضع النصوص بالتصاميم
                                سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت
                                ...
                                
                                وعند موافقه العميل المبدئيه على التصميم يتم ازالة هذا النص من التصميم ويتم وضع النصوص
                                النهائية
                                المطلوبة للتصميم ويقول البعض ان وضع النصوص التجريبية بالتصميم قد تشغل المشاهد عن وضع
                                الكثير
                                من
                                الملاحظات او الانتقادات للتصميم الاساسي.
                                
                                وخلافاَ للاعتقاد السائد فإن لوريم إيبسوم ليس نصاَ عشوائياً، بل إن له جذور في الأدب
                                اللاتيني
                                الكلاسيكي منذ العام 45 قبل الميلاد. من كتاب "حول أقاصي الخير والشر"</p>
                            </div>
                        </div>
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
                        <div class="my-card"><img src="{{asset('frontend/assets/imgs/Slider-two.png')}}" alt=""></div>
                    <div class="my-card"><img src="{{asset('frontend/assets/imgs/slider-three.png')}}" alt=""></div>
                    <div class="my-card"><img src="{{asset('frontend/assets/imgs/Slider-four.png')}}" alt=""></div>
                    <div class="my-card"><img src="{{asset('frontend/assets/imgs/slide-one.png')}}" alt=""></div>
                </div>
            </div>
        </section>
        
        @endsection
        
        <!-- End Project Tour -->

    </main>

    <!-- End Main -->

