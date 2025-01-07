<!-- resources/views/layouts/app.blade.php -->
 
<html>
    <head>
        <title>SIABDES</title>
        <link rel="icon" href="{{asset('BUMDES/assets/logo/icon-siabdes.png')}}" type="image/icon type">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous">
        </script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Cial</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content=""> 
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- fevicon -->
        {{-- <link rel="icon" href="images/fevicon.png" type="image/gif" /> --}}
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <!-- owl stylesheets --> 
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

        {{-- <link href="{{asset('css/sign-in.css')}}" rel="stylesheet"> --}}

        <style>
            .banner{
                height: 91vh;
                
                background-size: cover;
                
                background-position: center;
                background: url('{{asset('BUMDES/assets/halaman_awal/banner.png')}}');
                
            }
            /* .mx10{
                margin-left: 8rem
                
            }
            .font20{
                font-size: 20px
            }
            .me10{
                margin-right: 10rem
            } */
        </style>
    </head>
    <body>
        @section('sidebar')
            <div class="header_section">
                <div class="" >
                    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #303C54;">
                        <div class="logo"><a href="/"><img src="{{asset('BUMDES/assets/halaman_awal/logo-siabdes.jpg')}}" width="200px" height="125px" alt="logo-siabdes">
                            <img src="{{asset('BUMDES/assets/logo/logo-btp-png.png')}}" width="110px" height="125px" alt="logo-btp"></a></div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                <a class="nav-link text-white" href="/kelebihan">Kelebihan SIAB-DES </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-white" href="/fitur">Fitur SIAB-DES </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-white" href="/cara-order">Cara Order</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-white" href="/kontak">Kontak Kami</a>
                                </li>
                            </ul>
                        </div>
                        
                        
                        <a href="/login" class="btn btn-primary mx-3 mt-3 text-black fw-semibold px-4 border-0" style="background-color: #D9D9D9">Login</a>
                        
                    </nav>
                    
                </div>
                
            </div>
        @show
            
        <div class="">
            @yield('content')
        </div>
        <!-- Javascript files-->
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
        <script src="{{asset('js/plugin.js')}}"></script>
        <!-- sidebar -->
        <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        <!-- javascript --> 
        <script src="{{asset('js/owl.carousel.js')}}"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> 
    </body>
</html>