<div class="topbar-logo">
    <div class="container">

        <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{asset('images/logo.png')}}" alt="" />
        </a>

        <div class="contact-info">
            <!-- INFO 1 -->
            <div class="box-icon-1">
                <div class="icon">
                    <div class="fa fa-phone"></div>
                </div>
                <div class="body-content">
                    <div class="heading">(+243)823 693 435</div>
                    info@olameanalytica.com
                </div>
            </div>
            <!-- INFO 2 -->
            <div class="box-icon-1">
                <div class="icon">
                    <div class="fa fa-clock-o"></div>
                </div>
                <div class="body-content">
                    <div class="heading">Lun - Vend 08:00 - 17:00</div>
                    Dimanche Closed
                </div>
            </div>
            <!-- INFO 3 -->
            <div class="box-icon-1">
                <div class="icon">
                    <div class="fa fa-map-marker"></div>
                </div>
                <div class="body-content">
                    <div class="heading">30 bis, Rufidji, Kinshasa/Kintambo</div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- NAVBAR SECTION -->
<div class="navbar navbar-main">

    <div class="container container-nav">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <a href="{{route('login')}}" title="" class="btn btn-orange-cta pull-right btn-view-all">Espace client</a>

        <nav class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{url('/')}}">ACCUEIL</a></li>
                <li><a href="">A PROPOS</a></li>
                <li><a href="{{route('besoins')}}">VOS BESOINS EN ASSURANCE</a></li>
                <li><a href="https://olameanalytica.com/">OLAME ANALYTICA</a></li>
                <li><a href="https://assurtech.olameanalytica.com/">OLAME ASSURTECH</a></li>


            </ul>
        </nav>



    </div>
</div>
