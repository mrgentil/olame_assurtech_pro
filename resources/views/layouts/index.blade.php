@extends('layouts.main')

@section('title') @parent | Acueil @endsection

@section('description')
    @yield('description')
@endsection

@section('keywords')
    ('keywords') OLAME ASSURTECH
@endsection

{{--@section('meta-image')
    ('meta-image'){{ asset('images/favicon.png') }}
@endsection--}}
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="m-0 breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">OLAME ASSURTECH PRO</a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @if(auth()->user()->can('SudoUser'))
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card-box">
                                <h4 class="mt-0 mb-4 header-title">Utilisateurs</h4>

                                <div class="widget-box-2">
                                    <div class="text-right widget-detail-2">
                                        <span class="float-left mt-3 badge badge-success badge-pill">% <i
                                                class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="mb-1 font-weight-normal"> {{$usersAllCount}} </h2>
                                    </div>
                                    <div style="width:%;" class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->

                        <div class="col-xl-4 col-md-6">
                            <div class="card-box">
                                <a href=""><h4 class="mt-0 mb-3 header-title">Entreprises d'Assurances</h4></a>
                                <div class="widget-box-2">
                                    <div class="text-right widget-detail-2">
                                        <span class="float-left mt-3 badge badge-success badge-pill">% <i
                                                class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="mb-1 font-weight-normal">{{$entreprisesAssuranceAllCount}}</h2>
                                    </div>
                                    <div style="width:%;" class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><!-- end col -->

                        <div class="col-xl-4 col-md-6">
                            <div class="card-box">
                                <h4 class="mt-0 mb-4 header-title">Souscripteurs</h4>
                                <div class="widget-chart-1">
                                    <div class="text-right widget-detail-1">
                                        <span class="float-left mt-3 badge badge-success badge-pill">% <i
                                                class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="pt-2 mb-1 font-weight-normal"> {{$souscripteursAllCount}}</h2>
                                    </div>
                                    <div style="width:%;" class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                @endif
                @if(auth()->user()->can('AdminRegulateur'))
                    <div class="row">
                        <div class="col-xl-6 col-md-6">
                            <div class="card-box">
                                <a href=""><h4 class="mt-0 mb-3 header-title">Entreprises d'Assurances</h4></a>
                                <div class="widget-box-2">
                                    <div class="text-right widget-detail-2">
                                        <span class="float-left mt-3 badge badge-success badge-pill">% <i
                                                class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="mb-1 font-weight-normal"> {{$entreprisesAssuranceAllCount}}</h2>
                                    </div>
                                    <div style="width:%;" class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-xl-6 col-md-6">
                            <div class="card-box">
                                <h4 class="mt-0 mb-4 header-title">Souscripteurs</h4>
                                <div class="widget-chart-1">
                                    <div class="text-right widget-detail-1">
                                        <span class="float-left mt-3 badge badge-success badge-pill">% <i
                                                class="mdi mdi-trending-up"></i> </span>
                                        <h2 class="pt-2 mb-1 font-weight-normal"> {{$souscripteursAllCount}}</h2>
                                    </div>
                                    <div style="width:%;" class="progress progress-bar-alt-success progress-sm">
                                        <div class="progress-bar bg-success" role="progressbar"
                                             aria-valuenow="77" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 77%;">
                                            <span class="sr-only">77% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                @endif
                @if(auth()->user()->can('AdminEntrepriseAssurance'))
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <div class="card-box">
                                <a href=""><h4 class="mt-0 mb-3 header-title">Agents Commerciaux</h4></a>
                                <div class="widget-box-2">
                                    <div class="text-right widget-detail-2">
                                        <h2 class="mb-1 font-weight-normal"> {{$agent_commercials}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card-box">
                                <h4 class="mt-0 mb-4 header-title">Souscripteurs</h4>
                                <div class="widget-chart-1">
                                    <div class="text-right widget-detail-1">
                                        <h2 class="pt-2 mb-1 font-weight-normal">{{$souscripteursEntreprise}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                        <div class="col-xl-4 col-md-6">
                            <div class="card-box">
                                <h4 class="mt-0 mb-4 header-title">Total Primes</h4>
                                <div class="widget-chart-1">
                                    <div class="text-right widget-detail-1">
                                        <h2 class="pt-2 mb-1 font-weight-normal">{{$primes}}</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                @endif

                @if(auth()->user()->can('AgentCommercial'))
                    <div class="row">
                        <div class="col-xl-12 col-md-6">
                            <div class="card-box">
                                <h4 class="mt-0 mb-4 header-title">Souscripteurs</h4>
                                <div class="widget-chart-1">
                                    <div class="text-right widget-detail-1">
                                        <h2 class="pt-2 mb-1 font-weight-normal">{{ $agents_commercials }}</h2>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end row -->
                @endif
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card-box">
                            <div class="float-right dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>

                            <h4 class="mt-0 header-title">Ventes par entreprise d'assurance</h4>

                            <div class="text-center widget-chart">
                                <div id="chart1" style="height: 300px;"></div>
                                {{--<ul class="mb-0 list-inline chart-detail-list">
                                    <li class="list-inline-item">
                                        <h5 style="color: #ff8acc;"><i class="mr-1 fa fa-circle"></i>Series A</h5>
                                    </li>
                                    <li class="list-inline-item">
                                        <h5 style="color: #5b69bc;"><i class="mr-1 fa fa-circle"></i>Series B</h5>
                                    </li>
                                </ul>--}}
                            </div>
                        </div>
                    </div><!-- end col -->

                    <div class="col-xl-8">
                        <div class="card-box">
                            <div class="float-right dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <h4 class="mt-0 header-title">Statistiques périodiques</h4>
                            <div id="chart_periode" style="height: 300px;"></div>
                        </div>

                        @push('script')
                            <script>
                                new Chartisan({
                                    el: '#chart_periode',
                                    url: "@chart('admin_regulateur_periode_chart')",
                                    hooks: new ChartisanHooks()
                                        .legend()
                                        .colors()
                                        .tooltip()

                                });
                                 new Chartisan({
                                    el: '#chart1',
                                    url: "@chart('admin_regulateur_chart')",
                                     hooks: new ChartisanHooks()
                                         .datasets([
                                             { type: 'pie', radius: ['40%', '60%'] },
                                             { type: 'pie', radius: ['10%', '30%'] },
                                         ])
                                         .legend()
                                         .colors()
                                         .tooltip()     ,

                                 });
                              /* new Chartisan({
                                    el: '#chart2',
                                    url: "@chart('admin_regulateur_chart')",
                                   hooks: new ChartisanHooks()
                                       .datasets([{ type: 'line', fill: false }, 'line']),
                                });*/
                            </script>
                        @endpush
                    </div><!-- end col -->

                   {{-- <div class="col-xl-4">
                        <div class="card-box">
                            <div class="float-right dropdown">
                                <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                </div>
                            </div>
                            <h4 class="mt-0 header-title">Total Revenue</h4>
                            <div id="chart2" style="height: 300px;"></div>
                        </div>
                    </div>--}}<!-- end col -->

                </div>
                <!-- end row -->

                @if(auth()->user()->can('SudoUser'))
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card-box widget-user">
                                <div class="media">
                                    <div class="mr-3 avatar-lg">
                                        <img src="{{asset('assets/images/users/user-3.jpg')}}"
                                             class="img-fluid rounded-circle" alt="user">
                                    </div>
                                    <div class="overflow-hidden media-body">
                                        <h5 class="mt-0 mb-1">Chadengle</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-warning"><b>Admin</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box widget-user">
                                <div class="media">
                                    <div class="mr-3 avatar-lg">
                                        <img src="assets/images/users/user-2.jpg" class="img-fluid rounded-circle"
                                             alt="user">
                                    </div>
                                    <div class="overflow-hidden media-body">
                                        <h5 class="mt-0 mb-1"> Michael Zenaty</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-pink"><b>Support Lead</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box widget-user">
                                <div class="media">
                                    <div class="mr-3 avatar-lg">
                                        <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle"
                                             alt="user">
                                    </div>
                                    <div class="overflow-hidden media-body">
                                        <h5 class="mt-0 mb-1">Stillnotdavid</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-success"><b>Designer</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                        <div class="col-xl-3 col-md-6">
                            <div class="card-box widget-user">
                                <div class="media">
                                    <div class="mr-3 avatar-lg">
                                        <img src="assets/images/users/user-10.jpg" class="img-fluid rounded-circle"
                                             alt="user">
                                    </div>
                                    <div class="overflow-hidden media-body">
                                        <h5 class="mt-0 mb-1">Tomaslau</h5>
                                        <p class="mb-2 text-muted font-13 text-truncate">coderthemes@gmail.com</p>
                                        <small class="text-info"><b>Developer</b></small>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->

                    </div>
            @endif
            <!-- end row -->


                <div class="row">
                    @if(auth()->user()->can('SudoUser'))
                        <div class="col-xl-4">
                            <div class="card-box">
                                <div class="float-right dropdown">
                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown"
                                       aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                    </div>
                                </div>

                                <h4 class="mb-3 header-title">Inbox</h4>

                                <div class="inbox-widget">

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img
                                                    src="{{asset('assets/images/users/user-1.jpg')}}"
                                                    class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Chadengle</h5>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">13:40 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg"
                                                                             class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Tomaslau</h5>
                                            <p class="inbox-item-text">I've finished it! See you so...</p>
                                            <p class="inbox-item-date">13:34 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg"
                                                                             class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Stillnotdavid</h5>
                                            <p class="inbox-item-text">This theme is awesome!</p>
                                            <p class="inbox-item-date">13:17 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg"
                                                                             class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Kurafire</h5>
                                            <p class="inbox-item-text">Nice to meet you</p>
                                            <p class="inbox-item-date">12:20 PM</p>
                                        </a>
                                    </div>

                                    <div class="inbox-item">
                                        <a href="#">
                                            <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg"
                                                                             class="rounded-circle" alt=""></div>
                                            <h5 class="mt-0 mb-1 inbox-item-author">Shahedk</h5>
                                            <p class="inbox-item-text">Hey! there I'm available...</p>
                                            <p class="inbox-item-date">10:15 AM</p>
                                        </a>
                                    </div>
                                </div>
                                @endif

                            </div>
                        </div><!-- end col -->

                        @if (auth()->user()->can('AdminRegulateur'))
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="card-box">
                                            <div class="float-right dropdown">
                                                <a href="#" class="dropdown-toggle arrow-none card-drop"
                                                   data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-vertical"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Another
                                                        action</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Something
                                                        else</a>
                                                    <!-- item-->
                                                    <a href="javascript:void(0);" class="dropdown-item">Separated
                                                        link</a>
                                                </div>
                                            </div>

                                            <h4 class="mt-0 mb-3 header-title">Liste des souscripteurs</h4>

                                            <div class="table-responsive">
                                                <table class="table mb-0 table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Logo</th>
                                                        <th>Entreprise souscripteuse</th>
                                                        <th>RCCM</th>
                                                        <th>Secteur d'Activité</th>
                                                        <th>Prime</th>
                                                        <th>Province</th>
                                                        <th>Branche d'Assurance</th>
                                                        <th>Type d'Assurance</th>
                                                        <th>Adresse</th>
                                                        <th>Adresse Email</th>
                                                        <th>Souscrite par</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @forelse($souscripteursAll as $item)
                                                        <tr>
                                                            <td class="text-center"><img src="{{asset($item->xsLogo)}}"
                                                                                         alt="{{ $item->name }}"></td>
                                                            <td>{{$item->name}}</td>
                                                            <td>{{$item->rccm}}</td>
                                                            <td>{{$item->secteur_activity}}</td>
                                                            <td>{{$item->prime}}</td>
                                                            <td>{{$item->province}}</td>
                                                            <td>{{$item->branche->name}}</td>
                                                            <td>{{$item->assurance}}</td>
                                                            <td>{{$item->adress}}</td>
                                                            <td>{{$item->user->email}}</td>
                                                            <td>{{$item->agentCommercial->entrepriseAssurance->name}}</td>
                                                        </tr>
                                                    </tbody>
                                                    @empty
                                                        <li class="col-md-12 col-sm-12 col-xs-12">
                                                            Aucun Souscripteur trouvé
                                                        </li>
                                                    @endforelse
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @if (auth()->user()->can('AdminEntrepriseAssurance'))
                            <div class="row">
                                @foreach($showProvince as $item)
                                    <div class="col-xl-3 col-md-6">
                                        <div class="card-box widget-user">
                                            <div class="media">
                                                {{--<div class="mr-3 avatar-lg">
                                                    <img src="{{asset($item->xsLogo)}}" class="img-fluid rounded-circle" alt="user">
                                                </div>--}}
                                                <div class="overflow-hidden media-body">
                                                    <h5 class="mt-0 mb-1">Province de {{$item->ville}}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                    <!-- end col -->
                                @endforeach
                            </div>
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="card-box">
                                        <div class="float-right dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop"
                                               data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>

                                        <h4 class="mb-3 header-title">Nos Agents Commerciaux</h4>

                                        <div class="inbox-widget">
                                            @foreach($showProvince as $item)
                                                <div class="inbox-item">
                                                    <a href="#">
                                                        <div class="inbox-item-img"><img src="{{asset($item->xsLogo)}}"
                                                                                         class="rounded-circle" alt="">
                                                        </div>
                                                        <h5 class="mt-0 mb-1 inbox-item-author">{{$item->name}}</h5>
                                                        <p class="inbox-item-text">{{$item->phone}}</p>
                                                        <p class="inbox-item-date">

                                                            @php
                                                                $datetime1 = new DateTime();
                                                                $datetime2 = new DateTime($item->created_at);
                                                                $interval = $datetime1->diff($datetime2);
                                                                $elapsed = $interval->format('%y années');
                                                            @endphp
                                                            Agent depuis : {{ $elapsed }} <br>
                                                            Nombre d'enregistrement : {{$agent_commercials}}
                                                        </p>

                                                    </a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div><!-- end col -->

                                <div class="col-xl-8">
                                    <div class="card-box">
                                        <div class="float-right dropdown">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop"
                                               data-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>

                                        <h4 class="mt-0 mb-3 header-title">Recentes Souscriptions</h4>

                                        <div class="table-responsive">
                                            <table id="tech-companies-1" class="table mb-0 table-striped">
                                                <thead>
                                                <tr>
                                                    <th>Logo</th>
                                                    <th>Nom</th>
                                                    <th>RCCM</th>
                                                    <th>Secteur d'Activité</th>
                                                    <th>Prime</th>
                                                    <th>Province</th>
                                                    <th>Branche d'Assurance</th>
                                                    <th>Type d'Assurance</th>
                                                    <th>Adresse</th>
                                                    <th>Adresse Email</th>
                                                    <th>Enregistré par</th>
                                                    <th>Actions</th>
                                                    <th></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @forelse($recentSouscripteurs as $item)
                                                    <tr>
                                                        <td class="text-center"><img src="{{asset($item->xsLogo)}}"
                                                                                     alt="{{ $item->name }}"></td>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->rccm}}</td>
                                                        <td>{{$item->secteur_activity}}</td>
                                                        <td>{{$item->prime}}</td>
                                                        <td>{{$item->province}}</td>
                                                        <td>{{$item->branche->name}}</td>
                                                        <td>{{$item->assurance}}</td>
                                                        <td>{{$item->adress}}</td>
                                                        <td>{{$item->user->email}}</td>
                                                        <td>{{$item->agentCommercial->name}}</td>
                                                        <td>
                                                            <div class="d-flex">
                                                                @can('AdminEntrepriseAssurance')
                                                                    <a href=""
                                                                       class="mr-1 shadow btn btn-primary btn-xs sharp"><i
                                                                            class="fa fa-edit"></i></a>
                                                                @endcan
                                                                @can('AdminEntrepriseAssurance')
                                                                    <form id="{{$item->id}}" action="" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button
                                                                            class="shadow btn btn-danger btn-xs sharp">
                                                                            <i class="fa fa-trash "></i></button>
                                                                    </form>
                                                                @endcan
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <li class="col-md-12 col-sm-12 col-xs-12">
                                                        Aucun Client trouvé
                                                    </li>
                                                @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- end col -->

                            </div>
                    @endif
                    <!-- end col -->

                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <!-- Footer Start -->

        <!-- end Footer -->

    </div>
@endsection
