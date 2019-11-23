@extends('layouts.frontend.master')

    <!-- Start Main -->

    <main>

<!-- Start Work -->
@section('our-work')
    
<section>
    <div class="work">
        <div class="container-fluid">
            <div class="row py-5 ml-4">
                <div class="vertical-line">
                    <h2 class="text-center px-2">اعمالنا</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-5 wow bounceInLeft animated slow">
                <div class="col-12 col-lg-4">
                    <div class="card mb-4 shadow">
                        <img src="{{asset('frontend/assets/imgs/blood-bank.jpg')}}" class="card-img-top" alt="تطبيق بنك الدم">
                        <div class="card-body">
                            <h4 class="text-center">تطبيق بنك الدم</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

@endsection
<!-- End Work -->

</main>

<!-- End Main -->
