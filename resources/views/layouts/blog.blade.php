<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog Duck.in</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css')}}" />

    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">

    <link rel="icon" type="image/x-icon" href="{{ asset('user/assets/img/duck.ico') }}" />

    <link type="text/css" rel="stylesheet" href="{{asset('front/css/style.css')}}" />
</head>

<body>

    <!-- Header -->
    <header id="header">
        <!-- Nav -->
        <div id="nav">
            <!-- Main Nav -->
            <div id="nav-fixed">
                <div class="container">
                    <!-- logo -->
                    <div class="nav-logo">
                        <a href="{{ route('perawatan.index') }}" class="logo"><img src="{{asset('front/img/duck.png')}}" alt=""></a>
                    </div>
                    <!-- /logo -->

                    <!-- nav -->
                    @stack('nav')
                    <!-- /nav -->

                    
            </div>
            
        </div>
  
    </header>


    @yield('content')


    <!-- Footer -->
    <footer id="footer">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html" class="logo"><img src="{{asset('front/img/duck.png')}}" alt=""></a>
                        </div>
                        <div class="footer-copyright">
                            <span>&copy;
                                <!-- Link back to Colorlib cant be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());

                                </script> Duck.in <i class="fa fa-heart-o"
                                    aria-hidden="true"></i> by <a href="#"
                                    target="_blank">duck.in</a>
                        </div>
                    </div>
                </div>

                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                 @stack('categoris')
                            </div>
                        </div>
                    </div>
                </div>
       

</div>
<!-- /row -->
</div>
<!-- /container -->
</footer>
<!-- /Footer -->

<!-- jQuery Plugins -->
<script src="{{asset('front/js/jquery.min.js')}}"></script>
<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>

</body>

</html>