@extends('layouts.frontend.master')

<!-- Start Main -->

<main>

    <!-- Start Articles -->
@section('article-details')
<section class="article-details">
        <div class="articles">
            <div class="container-fluid">
                <div class="row py-5 ml-4">
                    @foreach ($post as $row)
                    <div class="vertical-line">
                        <h2 class="text-center px-2">{{$row['title']}}</h2>
                        
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-around d-flex">
                    <div class="card mb-5 shadow-lg col-12 col-lg-9 py-3">
                        <img src="{{asset('frontend/assets/imgs/'. $row['image'] .'.jpg')}}" class="card-img-top mx-auto my-5 shadow" alt="التدريب">
                        <div class="card-body">
                            <p class="text-center">
                                {{$row['content']}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
    

    <!-- End Articles -->

</main>
<!-- End Main -->
