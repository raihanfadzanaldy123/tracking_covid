<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tracking</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('frontEnd/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('frontEnd/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('frontEnd/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/owl.carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontEnd/assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('frontEnd/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage - v3.0.1
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Tracking Covid</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html" class="logo me-auto"><img src="{{ asset('frontEnd/assets/img/logo.png') }}" alt=""
                    class="img-fluid"></a>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Tracking Covid</h1>
                    <h2> </h2>
                </div>
            </div>

            <div class="section-title">
                <h2>Data Indonesia</h2>
            </div>


            <div class="row icon-boxes">
                <div class="col-md-6 col-lg-3 align-items-md-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-fingerprint-line"></i></div>
                        <div class="col-lg-3 col-md-5 col-6 mb-5 mb-lg-0 align-items-md-stretch">
                            <div class="count-box">
                                <h4 class="title" data-toggle="counter-up"><a href="">{{ $positif }}</a></h4>
                                <p>Positif</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 align-items-md-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <div class="col-lg-3 col-md-5 col-6 mb-5 mb-lg-0 align-items-md-stretch">
                            <div class="count-box">
                                <h4 class="title" data-toggle="counter-up"><a href="">{{ $sembuh }}</a></h4>
                                <p>Sembuh</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 align-items-md-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-command-line"></i></div>
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <h4 class="title" data-toggle="counter-up"><a href="">{{ $meninggal }}</a></h4>
                                <p>Meninggal</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 align-items-md-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                    data-aos-delay="500">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-fingerprint-line"></i></div>
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <h4 class="title" data-toggle="counter-up"><a href="">jqwejiji</a></h4>
                                <p class="descriptions">Global</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">


        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Provinsi</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Provinsi</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($provinsi as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->nama_provinsi }}</td>
                                            <td>{{ $data->positif }}</td>
                                            <td>{{ $data->sembuh }}</td>
                                            <td>{{ $data->meninggal }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->

        <!-- ======= About Section ======= -->
        <section id="abaout" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Provinsi</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                            <table class="table table-striped table-bordered" id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Provinsi</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($url2 as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data['attributes']['Provinsi'] }}</td>
                                            <td>{{ $data['attributes']['Kasus_Posi'] }}</td>
                                            <td>{{ $data['attributes']['Kasus_Semb'] }}</td>
                                            <td>{{ $data['attributes']['Kasus_Meni'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->

        <section id="contact" class="services">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Global</h2>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive service">
                            <table class="table table-striped table-bordered table-hover mb-0 text-nowrap css-serial"
                                id="datatable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Negara</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($url as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data['attributes']['Country_Region'] }}</td>
                                            <td>{{ $data['attributes']['Confirmed'] }}</td>
                                            <td>{{ $data['attributes']['Recovered'] }}</td>
                                            <td>{{ $data['attributes']['Deaths'] }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts section-bg">
            <div class="container">

                <div class="row justify-content-end">
                    @foreach ($url1 as $data)
                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <span data-toggle="counter-up">{{ $data['positif'] }}</span>
                                <p>Positif</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <span data-toggle="counter-up">{{ $data['sembuh'] }}</span>
                                <p>Sembuh</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <span data-toggle="counter-up">{{ $data['meninggal'] }}</span>
                                <p>Meninggal</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                            <div class="count-box">
                                <span data-toggle="counter-up"></span>
                                <p>Awards</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Counts Section -->



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>OnePage</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontEnd/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontEnd/assets/vendor/aos/aos.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontEnd/assets/js/main.js') }}"></script>

</body>

</html>
