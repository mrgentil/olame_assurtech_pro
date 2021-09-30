@extends('layouts.main_font')

@section('title') @parent | Acueil @endsection

@section('description')
    @yield('description')
@endsection

@section('keywords')
    ('keywords') OLAME ASSURTECH
@endsection
@section('content')
    <div id="slides" class="section banner">
        <ul class="slides-container">
            <li>
                <img src="{{asset('images/slide-1.jpg')}}" alt="">
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading">
                            Bienvenu sur Olame AssurTech Pro
                        </h2>
                        <p class="excerpt">La plateforme digitale 100% dédiée assurance au service des professionnels</p>
                        <a href="" class="btn btn-primary" title="Voir plus">VOIR PLUS</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{asset('images/slide-3.jpg')}}" alt="">
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading">
                            Les assurances et la finance de votre entreprise
                        </h2>
                        <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                        <a href="#" class="btn btn-primary" title="LEARN MORE">VOIR PLUS</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT</a>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{asset('images/slide-2.jpg')}}" alt="">
                <div class="container">
                    <div class="wrap-caption">
                        <h2 class="caption-heading">
                            Tout le processus de votre gestion d'assurance digitalisé
                        </h2>
                        <p class="excerpt">Faites des appels d'offre d'assurance à l'intention des assureurs sur le marché congolais,
                            et la gestion de vos contrats d'assurance en ligne avec votre assureur</p>
                        <a href="#" class="btn btn-primary" title="VOIR PLUS">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT</a>
                    </div>
                </div>
            </li>

        </ul>

        <nav class="slides-navigation">
            <div class="container">
                <a href="#" class="next">
                    <i class="fa fa-angle-right"></i>
                </a>
                <a href="#" class="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
            </div>
        </nav>

    </div>

    <!-- ABOUT FEATURE -->


    <!-- WHY -->
    <div class="section why section-border">
        <div class="container">
            <div class="row">

                <div class="col-sm-6 col-md-6">
                    <h2 class="section-heading">
                        OLAME ASSUTECH PRO
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a href="" class="btn btn-secondary" title="NOTRE COMPAGNIE">NOTRE COMPAGNIE</a>
                    <div class="margin-bottom-30"></div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="vidimg">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/2Lc0F7qvY5I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- SERVICES -->


    <!-- How -->


    <!-- TESTIMONY -->
    <div class="section testimony section-border">
        <div class="container">

            <div class="row">

                <div class="col-sm-7 col-md-8">

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="section-title center cwhite">
                                <h2 class="section-heading">Ce qu'ils pensent</h2>
                            </div>
                        </div>
                    </div>

                    <div id="owl-testimony">
                        <div class="item">
                            <div class="box-testimony">
                                <div class="quote-box">
                                    <blockquote>
                                        We specialize in 23 different kinds of pest, and we're also qualified to handle a much wider range of pest control needs. If you have a pest problem that's not covered in our pest library.
                                    </blockquote>
                                    <p class="quote-name">
                                        Johnathan Doel <span>CEO Buka Kreasi</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-testimony">
                                <div class="quote-box">
                                    <blockquote>
                                        We specialize in 23 different kinds of pest, and we're also qualified to handle a much wider range of pest control needs. If you have a pest problem that's not covered in our pest library.
                                    </blockquote>
                                    <p class="quote-name">
                                        Johnathan Doel <span>CEO Buka Kreasi</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-testimony">
                                <div class="quote-box">
                                    <blockquote>
                                        We specialize in 23 different kinds of pest, and we're also qualified to handle a much wider range of pest control needs. If you have a pest problem that's not covered in our pest library.
                                    </blockquote>
                                    <p class="quote-name">
                                        Johnathan Doel <span>CEO Buka Kreasi</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box-testimony">
                                <div class="quote-box">
                                    <blockquote>
                                        We specialize in 23 different kinds of pest, and we're also qualified to handle a much wider range of pest control needs. If you have a pest problem that's not covered in our pest library.
                                    </blockquote>
                                    <p class="quote-name">
                                        Johnathan Doel <span>CEO Buka Kreasi</span>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-sm-5 col-md-4">
                    <div class="people">
                        <img class="user-pic" src="images/say-img.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CLIENT -->
    <div class="section stat-client">
        <div class="container">

            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="section-heading center">
                        <h2 class="section-heading">Nos Partenaires</h2>
                    </div>
                </div>
            </div>
            <div class="margin-bottom-50"></div>
            <div class="row">

                <div class="col-sm-3 col-md-3">
                    <div class="client-img">
                        <a href="#"><img src="images/partners-1.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3">
                    <div class="client-img">
                        <a href="#"><img src="images/partners-2.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3">
                    <div class="client-img">
                        <a href="#"><img src="images/partners-3.png" alt="" class="img-responsive"></a>
                    </div>
                </div>

                <div class="col-sm-3 col-md-3">
                    <div class="client-img">
                        <a href="#"><img src="images/partners-4.png" alt="" class="img-responsive"></a>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
