@extends('layouts.main')

@section('title') @parent | Les Regulateurs @endsection

@section('description')
    @yield('description')
@endsection

@section('keywords')
    ('keywords') OLAM ASSURTECH PRO
@endsection

@section('meta-image')
    ('meta-image'){{ asset('img/favicon.png') }}
@endsection

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title">Liste Regulateurs</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Les Regulateurs</a></li>
                                    <li class="breadcrumb-item active">Liste Regulateurs</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                @include('flash::message')
                <div class="row">
                    <div class="col-xl-4">
                        <a href="{{route('entreprise-regulateurs.create')}}" class="btn btn-success btn-md waves-effect waves-light mb-3"><i class="mdi mdi-plus-circle-outline"></i>Ajouter un regulateur </a>
                    </div><!-- end col -->
                </div>
                <!-- end row -->

                <div class="row">
                    @forelse($regulars as $regular)
                        <div class="col-xl-4">
                            <div class="text-center card-box">
                                <div>
                                    <img src="{{asset($regular->xsLogo)}}" class="rounded-circle avatar-xl img-thumbnail mb-2" alt="{{$regular->name}}">

                                    <p class="text-muted font-13 mb-3">
                                        Salut <span>{{$regular->name}}</span>
                                    </p>

                                    <div class="text-left">
                                        <p class="text-muted font-13"><strong>Nom   :</strong> <span class="ml-2">{{$regular->name}}</span></p>
                                    </div>
                                    <a class="btn btn-primary btn-rounded waves-effect waves-light" href="{{route('entreprise-regulateurs.edit',$regular)}}">Modifier</a>
                                    <a class="btn btn-danger btn-rounded waves-effect waves-light" href="{{route('entreprise-regulateurs.destroy',$regular)}}">Supprimer</a>
                                </div>

                            </div>

                        </div> <!-- end col -->
                    @empty
                        <li class="col-md-12 col-sm-12 col-xs-12">
                            Aucun Regulateur trouvé
                        </li>
                    @endforelse
                </div>
                <!-- end row -->

                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->
    </div>
@endsection
