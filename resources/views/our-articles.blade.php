@extends('layouts.frontend.master')

<!-- Start Main -->

   <main>

<!-- Start Articles -->
@section('our-articles')
<section>
        <div class="articles">
            <div class="container-fluid">
                <div class="row vertical-line my-4 ml-4">
                    <h2 class="text-center px-2">المقالات</h2>
                </div>
            </div>
            <div class="our-articles">
                <div class="container">
                    <div class="row pt-5 justify-content-around d-flex">
                        <div class="col-12 col-lg-5">
                            <div class="card mb-5 shadow-lg">
                                <img src="{{asset('frontend/assets/imgs/web.jpg')}}" class="card-img-top" alt="التدريب">
                                <div class="card-body">
                                    <p class="text-center">توقف دعم تطبيقات Microsoft شركة لتتبع اللياقة البدنية
                                        Microsoft
                                        Band</p>
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
        </div>
    </section>
@endsection
    

    <!-- End Articles -->

</main>

<!-- End Main -->