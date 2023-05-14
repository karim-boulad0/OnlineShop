<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop - Contact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="{{ asset('newwebsite/assets/img/apple-icon.png') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/' . $setting->logo) }}" />

    <link rel="stylesheet" href="{{ asset('newwebsite/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('newwebsite/assets/css/templatemo.css') }}" />
    <link rel="stylesheet" href="{{ asset('newwebsite/assets/css/custom.css') }}" />

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="{{ asset('newwebsite/assets/css/fontawesome.min.css') }}" />

    <!-- Load map styles -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <!--

TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->
</head>

<body>


    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none"
                        href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                </div>
                <div>
                    <a class="text-light" href="{{ $setting->facebook }} " target="_blank" rel="sponsored"><i
                            class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="{{ $setting->instagram }}  " target="_blank"><i
                            class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="{{ $setting->twitter }}  " target="_blank"><i
                            class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="{{ $setting->linkedin }}  " target="_blank"><i
                            class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand  logo h1 align-self-center " href="index.html">
                <img src="{{ asset('public/' . $setting->logo) }}" width="50px" alt="not logo">
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website/index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website/about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('website/shop/products', $id = 2) }}">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('site.contact') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('useraddresse.index') }}">Account Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="  btn  text-white" href="{{ route('settings.index') }}"
                                style="background-color: #ea4b33">login </a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    {{-- <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch"
                                placeholder="Search ..." />
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                        data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a> --}}
                    <a class="nav-icon position-relative text-decoration-none"
                        href="{{ route('site.website.carts') }}">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{ $cartCount }}</span>
                    </a>
                    {{-- <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a> --}}
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('website/index') }}" method="get"
                class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="search"
                        placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    {{-- content --}}
    @yield('content')
    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-white border-bottom pb-3 border-light logo">
                        <img src="{{ asset('public/' . $setting->logo) }}" width="50px" alt=""> shop
                    </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        {{-- <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li> --}}
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="{{ $setting->phone }}">{{ $setting->phone }}</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none"
                                href="mailto:{{ $setting->email }}">{{ $setting->email }}</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">
                        Products
                    </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        @foreach ($products  as $product )
                        <li>
                            <a class="text-decoration-none" href="#">{{$product->name}}</a>
                        </li>
                        @endforeach

                        {{-- <li>
                            <a class="text-decoration-none" href="#">Sport Wear</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="#">Men's Shoes</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="#">Women's Shoes</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="#">Popular Dress</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="#">Gym Accessories</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="#">Sport Shoes</a>
                        </li> --}}
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">
                        Further Info
                    </h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <a class="text-decoration-none" href="{{ route('website/index') }}">Home</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="{{ route('website/about') }}">About</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="{{ route('website/shop/products', $id = 2) }}">Shop </a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="{{ route('site.contact') }}">Contact</a>
                        </li>
                        <li>
                            <a class="text-decoration-none" href="{{ route('useraddresse.index') }}">Account details</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="{{ $setting->facebook }}"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="{{ $setting->instagram }}"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="{{ $setting->description }}"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="{{ $setting->linkedin }}"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control text-dark bg-white border-light"
                            id="subscribeEmail" placeholder="Email address" />
                        <div class="input-group-text btn-primary text-light">
                            Subscribe
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2023 Company {{ $setting->name }} | Designed by
                            <a rel="sponsored" href="https://templatemo.com" target="_blank">karimBoulad</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{ asset('newwebsite/assets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('newwebsite/assets/js/jquery-migrate-1.2.1.min.js') }}"></script>
    <script src="{{ asset('newwebsite/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('newwebsite/assets/js/templatemo.js') }}"></script>
    <script src="{{ asset('newwebsite/assets/js/custom.js') }}"></script>
    <!-- End Script -->
</body>

</html>