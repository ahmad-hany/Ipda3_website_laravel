    <!-- Start Footer -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="footer_right col-12 col-lg-6">
                    <img src="{{asset('frontend/assets/imgs/footer-vec.jpg')}}" alt="footer-vec" class="wow slideInDown">
                </div>
                <div class="footer_left col-12 col-lg-6">
                    @foreach ($setting as $row)
                    <div>
                        <img src="{{asset('frontend/assets/imgs/'. $row['footer_logo'] .'.png')}}" alt="ابداع تك">
                    </div>
                    <div class="text-white my-4">
                        <p>{{$row['address']}}</p>
                    </div>
                    <div class="text-white col-12 col-lg-5">
                        <div class="d-flex justify-content-between">
                            <i class="fab fa-whatsapp fa-2x"></i>
                            <i class="fab fa-twitter fa-2x"></i>
                            <i class="fab fa-facebook-f fa-2x"></i>
                            <i class="fab fa-github fa-2x"></i>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->

    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"
        integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{asset('frontend/assets/js/slick.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <script src="{{asset('frontend/assets/js/custom.js')}}">
    </script>
</body>

</html>