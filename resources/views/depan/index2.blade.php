<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('depan_data_lama') }}/assets/img/favicon.png" rel="icon">
    <link href="{{ asset('depan_data_lama') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('depan_data_lama') }}/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="{{ asset('depan_data_lama') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('depan_data_lama') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('depan_data_lama') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('depan_data_lama') }}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('depan_data_lama') }}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('depan_data_lama') }}/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

</head>

<body>



    <!-- ======= Mobile nav toggle button ======= -->
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

    <!-- ======= Header ======= -->
    <header id="header">

        <div class="d-flex flex-column">

            <div class="profile">
                <img src="{{ asset('foto') }}/230430033341.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.html">{{ Auth::user()->name }}</a></h1>
            </div>

            <nav id="navbar" class="nav-menu navbar">
                <ul>
                    {{-- @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif --}}
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ url('/home') }}" class="nav-link scrollto active"><i class="bx bx-home"></i>
                                    <span>Home</span></a></li>
                        @else
                            <a href="{{ route('login') }}">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    @endif
                    <li><a href="#about_me" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About
                                Me</span></a></li>
                    <li><a href="#experience" class="nav-link scrollto"><i class="bx bx-file-blank"></i>
                            <span>Experience</span></a></li>
                    <li><a href="#education" class="nav-link scrollto"><i class="bx bx-book-open"></i>
                            <span>Education</span></a></li>
                    <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-wrench"></i> <span>Skills</span></a>
                    </li>
                    <li><a href="#award" class="nav-link scrollto"><i class="bx bx-award"></i> <span>Awards</span></a>
                    </li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>{!! $about->judul !!}</h1>
            <p>I'm <span class="typed" data-typed-items="College Students, Web Developer, UI/UX Designer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about_me" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About Me</h2>
                    <div class="social-icons">
                        <a style="font-size:30px" class="social-icon" href="{{ get_meta_value('_linkedin') }}"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a style="font-size:30px" class="social-icon" href="{{ get_meta_value('_github') }}"><i class="fab fa-github"></i></a>
                        <a style="font-size:30px" class="social-icon" href="{{ get_meta_value('_twitter') }}"><i
                                class="fab fa-twitter"></i></a>
                        <a style="font-size:30px" class="social-icon" href="{{ get_meta_value('_facebook') }}"><i
                                class="fab fa-facebook-f"></i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="{{ asset('foto') }}/230430033341.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>UI/UX Designer &amp; Web Developer.</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Kota:</strong>
                                        <span>{{ get_meta_value('_kota') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Provinsi:</strong>
                                        <span>{{ get_meta_value('_provinsi') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Telepon:</strong>
                                        <span>{{ get_meta_value('_nohp') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{ get_meta_value('_email') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Facebook:</strong>
                                        <span>{{ get_meta_value('_facebook') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Twitter:</strong>
                                        <span>{{ get_meta_value('_twitter') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Linkedin:</strong>
                                        <span>{{ get_meta_value('_linkedin') }}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Github:</strong>
                                        <span>{{ get_meta_value('_github') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="class="fst-italic"">{!! $about->isi !!}</div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Experience Section ======= -->
        <section id="experience" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Experience</h2>
                    @foreach ($experience as $dt)
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                            <div class="flex-grow-1">
                                <h3 class="mb-0">{{ $dt->judul }}</h3>
                                <div class="subheading mb-3">{{ $dt->info1 }}</div>
                                {!! $dt->isi !!}
                            </div>
                            <div class="flex-shrink-0"><span class="text-primary">{{ $dt->tgl_mulai }} -
                                    {{ $dt->tgl_akhir }}</span></div>
                        </div>
                    @endforeach
                </div>
        </section><!-- End Experience Section -->


        <!-- ======= Education Section ======= -->
        <section id="education" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Education</h2>
                    @foreach ($education as $dt)
                        <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                            <div class="flex-grow-1">
                                <h3 class="mb-0">{{ $dt->judul }}</h3>
                                <div class="subheading mb-3">{{ $dt->info1 }}</div>
                                <div>{{ $dt->info2 }}</div>
                                <p>{{ $dt->info3 }}</p>
                            </div>
                            <div class="flex-shrink-0"><span class="text-primary">{{ $dt->tgl_mulai }} -
                                    {{ $dt->tgl_akhir }}</span></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Education Section -->


        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <h3 class="subheading mb-3">Programming Languages & Tools</h3>
                <ul class="list-inline dev-icons">
                    @foreach (explode(', ', get_meta_value('_language')) as $dt)
                        <li class="list-inline-item"><i style="font-size:45px"
                                class="devicon-{{ strtolower($dt) }}-plain"></i></li>
                    @endforeach
                </ul>
                <h3 class="subheading mb-3">Workflow</h3>
                {!! set_list_workflow(get_meta_value('_workflow')) !!}
            </div>
        </section><!-- End Skills Section -->


        <!-- ======= Awards Section ======= -->
        <section id="award" class="services">
            <div class="container">

                <div class="section-title">
                    <div class="resume-section-content">
                        <h2 class="mb-5">{{ $award->judul }}</h2>
                        {!! set_list_award($award->isi) !!}
                    </div>
                </div>
        </section><!-- End Awards Section -->


        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
                class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/aos/aos.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/typed.js/typed.min.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/waypoints/noframework.waypoints.js"></script>
        <script src="{{ asset('depan_data_lama') }}/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('depan_data_lama') }}/assets/js/main.js"></script>

</body>

</html>
