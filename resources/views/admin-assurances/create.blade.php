@extends('layouts.main')

@section('title') @parent | Ajout Administrateur Assurances @endsection

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
                            <h4 class="page-title">Ajouter un Administrateur Assurances</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrateur</a></li>
                                    <li class="breadcrumb-item active"><a href="{{route('admin-assurances.index')}}">Liste Administrateurs Assurances</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Form row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title">Formulaire administrateur assurance</h4>
                            @include('admin-assurances.form', ['action' => 'POST'])
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->
    </div>
@endsection
