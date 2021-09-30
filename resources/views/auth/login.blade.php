<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Connexion | Olame AssurTech Pro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    @stack('css')
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/css/app.min.css')}}" id="app-stylesheet" rel="stylesheet" type="text/css" />
    @livewireStyles
</head>


<body class="authentication-bg">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="text-center">
                    <a href="{{url('/')}}" class="logo">
                        <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="22" class="logo-light mx-auto">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="22" class="logo-dark mx-auto">
                    </a>
                    <p class="text-muted mt-2 mb-4">OLAME ASSURTECH PRO Dashboard</p>
                </div>
                <div class="card">

                    <div class="card-body p-4">

                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Connexion</h4>
                        </div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email">Adresse Email</label>
                                <input type="email" id="email" name="email" placeholder="Entrer email" value="{{ old('email') }}" required autocomplete="email" autofocus class="form-control">
                                @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label for="password">Mot de passe</label>
                                <input type="password" placeholder="Entrer mot de passe" id="password" name="password" required autocomplete="current-password" class="form-control">
                                @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group mb-0 text-center">

                                <button class="btn btn-primary btn-block" type="submit"> Se connecter </button>
                            </div>

                        </form>


                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p> <a href="#" class="text-muted ml-1"><i class="fa fa-lock mr-1"></i>Mot de passe oublié?</a></p>
                        {{--<p class="text-muted">Pas de compte? <a href="pages-register.html" class="text-dark ml-1"><b>Sign Up</b></a></p>--}}
                    </div> <!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->

@stack('script')
<!-- Vendor js -->
@livewireScripts
<script src="{{asset('assets/js/vendor.min.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.min.js')}}"></script>
</body>
</html>
