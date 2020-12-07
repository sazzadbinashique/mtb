@extends('frontend.layouts.app')



@section('content')

    <!-- Image Slider
        ====================================================== -->
        <section>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('image/banner-1380px-X-473px-06.jpg')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('image/banner-1380px-X-473px-07.jpg')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('image/banner-1380px-X-473px-08.jpg')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>


    <!-- FEATURES one 
        =================================================== -->

        <section class="feature-one" id="feature">
            <div class="container">
                <div class="row justy-content-center">
                    <div class="feature-one-items col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="icon fa fa-percent" ></i>
                            </div>
                            <h4 class="mb-2"><a href="">MTB Discount Partners</a></h4>
                        </div>
                    </div>

                    <div class="feature-one-items col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <h4 class="mb-2"><a href="">Open an Account</a></h4>
                        </div>
                    </div>

                    <div class="feature-one-items col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <h4 class="mb-2"><a href="">Customer Services</a></h4>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-block">
                            <div class="img-icon-block mb-4">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <h4 class="mb-2"><a href="">Complaints</a></h4>
                        </div>
                    </div>
                </div>
            </div> <!-- / .container -->
        </section>


    <!-- Retail section 
        ===================================================-->
        <section class="feature-reail">
            <div class="overlay"></div>
            <div class="retail-title">
                <h1 class="">Retail</h1>
            </div>
            <div class="retail-img">
                <img class="img-responsive d-block w-100" src="{{asset('image/banner-1380px-X-473px-06.jpg')}}" alt="">
            </div>
    <!--    <div class="ribbon">
            <span class="ribbon3">Ribbon</span>
        </div> -->

    </section>

    <!-- Section Threee
        ============================================================= -->

        <section class="feature-three">
            <div class="container feature-content">
                <div class="row justy-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fa fa-percent"></i>
                            </div>
                            <a class="mb-2" href="">Loan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <a class="mb-2" href="">Deposit</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <a class="mb-2" href="">Cards</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <a class="mb-2" href="">Employee Account</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    <!-- Offer section
        =========================================================== -->
        <section class="section" id="blog">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 text-center">
                        <div class="offer-heading">
                            <!-- Heading -->
                            <h1 class="offer-title">
                                Offer for you
                            </h1>
                        </div>
                    </div>
                </div> <!-- / .row -->

                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="{{asset('image/blog-1.jpg')}}" alt="" class="img-fluid blog-img">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content">
                                    <a href="#">
                                        <h3 class="card-title">MTB Cards</h3>
                                    </a>
                                    <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="{{asset('image/blog-2.jpg')}}" alt="" class="img-fluid blog-img">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content">
                                    <a href="#">
                                        <h3 class="card-title">Air Lounge</h3>
                                    </a>

                                    <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8">
                        <div class="blog-box">
                            <div class="blog-img-box">
                                <img src="{{asset('image/blog-2.jpg')}}" alt="" class="img-fluid blog-img">
                            </div>
                            <div class="single-blog">
                                <div class="blog-content">
                                    <a href="#">
                                        <h3 class="card-title">Privillage</h3>
                                    </a>
                                    <p>There are many variations of passages Lorem Ipsum available, but majority have ama suffered altratio. the lorem.</p>
                                    <a href="#" class="read-more">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    <!-- SME  section
        ============================================================= -->

        <section class="feature-sme">
            <div class="overlay"></div>
            <div class="sme-title">
                <h1 class="">SME</h1>
            </div>
            <div class="sme-img">
                <img  class="img-responsive d-block w-100" src="{{asset('image/banner-1380px-X-473px-06.jpg')}}" alt="">
            </div>
        <!-- <div class="ribbon">
            <span class="ribbon3">Ribbon</span>
        </div> -->
         </section>


    <!-- Section Six 
        ============================================================= -->

        <section class="feature-three">
            <div class="container feature-content">
                <div class="row justy-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fa fa-percent"></i>
                            </div>
                            <a class="mb-2" href="">Loan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <a class="mb-2" href="">Deposit</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <a class="mb-2" href="">Cards</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <a class="mb-2" href="">Employee Account</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    <!-- Corporate Banking 
        =============================================================-->


        <section class="feature-corporate">
            <div class="overlay"></div>
            <div class="corporate-title">
                <h1 class="">Corporate Banking</h1>
            </div>
            <div class="corporate-img">
                <img  class="img-responsive d-block w-100" src="{{asset('image/banner-1380px-X-473px-06.jpg')}}" alt="">
            </div>
        <!-- <div class="ribbon">
            <span class="ribbon3">Ribbon</span>
        </div> -->
        
    </section>

    <!-- Section Eight 
        =================================================================-->

        <section class="feature-three">
            <div class="container feature-content">
                <div class="row justy-content-center">
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fa fa-percent"></i>
                            </div>
                            <a class="mb-2" href="">Loan</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-users"></i>
                            </div>
                            <a class="mb-2" href="">Deposit</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-users-cog"></i>
                            </div>
                            <a class="mb-2" href="">Cards</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6">
                        <div class="text-center feature-link">
                            <div class="img-icon mb-4">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <a class="mb-2" href="">Employee Account</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
@endsection