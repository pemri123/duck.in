<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard Peternak</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('user/assets/img/duck.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('user/css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Duck.in</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#signup">Profile</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#projects">Featured</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                     {{ __('Sign out') }}
                    </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                   </form>
                   </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Duck.in</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">SISTEM INFORMASI PENANGANAN PENYAKIT BEBEK BERBASIS
WEB</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#about">Get Started</a>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="about-section text-center" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2 class="text-white mb-4">Duck.in</h2>
                        <p class="text-white-50">
                        DUCK.IN adalah aplikasi untuk membantu peternak dalam menangani masalah pada ternak
bebek dan bekerjasama dengan dokter hewan serta member infomasi tentang perawatan
bebek yang akurat.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects-->
        <section class="projects-section bg-light" id="projects">
            <div class="container">
                <!-- Featured Project Row-->
                <div class="row align-items-center no-gutters mb-4 mb-lg-5">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="{{ asset('user/assets/img/bebek03.jpg') }}"/></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Konsultasi</h4>
                            <p class="text-black-50 mb-0">Anda bisa berkonsultasi mengenai masalah perawatan bebek dan cara mengobati penyakit bebek dengan dokter hewan yang tersedia di website kami </p>
                            <hr>
                            <a class="btn btn-primary js-scroll-trigger" href="#">Mulai Konsultasi</a>
                        </div>
                    </div>
                </div>
                <!-- Project One Row-->
                <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('user/assets/img/bebek04.jpg') }}" /></div>
                    <div class="col-lg-6">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
                                    <h4 class="text-white">Perawatan Bebek</h4>
                                    <p class="mb-0 text-white-50">Anda bisa mengetahaui informasi mengenai cara perawatan bebek dengan baik</p>
                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                    <br>
                                    <a class="btn btn-primary js-scroll-trigger" href="#">Lihat Perawatan Bebek</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div class="row justify-content-center no-gutters">
                    <div class="col-lg-6"><img class="img-fluid" src="{{ asset('user/assets/img/mati.jpg') }}" /></div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="bg-black text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                    <h4 class="text-white">Penyakit Pada Bebek</h4>
                                    <p class="mb-0 text-white-50">Anda bisa mengetahui informasi mengenai penyakit apa saja yang di alami oleh bebek dan cara pencegahan penyakit tersebut</p>
                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                    <br>
                                    <a class="btn btn-primary js-scroll-trigger" href="#">Lihat Penyakit Bebek</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="signup-section" id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <div class="card bg-black">
                            <div class="card-header bg-transparent mb-0"><h5 class="text-center font-weight-bold text-primary">Your Profile<span class="font-weight-bold text-primary"> Account</span></h5></div>
                                <div class="card-body">
                        <form>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Nama</label>
                                <label class="form-control form-group font-weight-bold text-primary bg-transparent">{{$user->name}}</label>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Email</label>
                                <label class="form-control form-group font-weight-bold text-primary bg-transparent"> {{$user->email}}</label>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Alamat</label>
                                <label class="form-control form-group font-weight-bold text-primary bg-transparent">{{$user->alamat}}</label>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>NoHp</label>
                                <label class="form-control form-group font-weight-bold text-primary bg-transparent">{{$user->nohp}}</label>
                            </div>
                            <a class="btn btn-primary js-scroll-trigger" href="#ubah">Ingin Ubah Profile?</a>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="signup-section" id="ubah">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        <div class="card bg-black">
                            <div class="card-header bg-transparent mb-0"><h5 class="text-center font-weight-bold text-primary">Your Profile<span class="font-weight-bold text-primary"> Account</span></h5></div>
                                <div class="card-body">
                        <form method="post" action="/peternak/{{ $user->id }}">
                        @method('patch')
                        @csrf
                            <div class="form-group font-weight-bold text-primary">
                                <label>Nama</label>
                                <input class="form-control form-group font-weight-bold text-center text-primary bg-transparent" id="name" placeholder="masukan nama" name="name" value = '{{$user->name}}'></input>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Email</label>
                                <input class="form-control form-group font-weight-bold text-center text-primary bg-transparent" id="email" placeholder="masukan email" name="email" value = '{{$user->email}}'></input>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>Alamat</label>
                                <input class="form-control form-group font-weight-bold text-center text-primary bg-transparent" id="alamat" placeholder="masukan alamat" name="alamat" value = '{{$user->alamat}}'></input>
                            </div>
                            <div class="form-group font-weight-bold text-primary">
                                <label>NoHp</label>
                                <input class="form-control form-group font-weight-bold text-center text-primary bg-transparent" id="nohp" placeholder="masukan nohp" name="nohp" value = '{{$user->nohp}}'></input>
                            </div>
                            <button type="submit" class="btn btn-primary">Ubah Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Address</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">{{$user->alamat}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Email</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="#!">{{$user->email}}</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Phone</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">{{$user->nohp}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="mx-2" href="#!"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container"> ©Duck.in</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('user/js/scripts.js') }}"></script>
    </body>
</html>
