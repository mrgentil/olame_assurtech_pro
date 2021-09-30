@extends('layouts.main')

@section('title') @parent | Les Entreprises @endsection

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
                            <h4 class="page-title">Listes entriprises</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Les Entriprises</a></li>
                                    <li class="breadcrumb-item active"><a href="{{route('entreprises.create')}}">Ajouter Entreprise</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->




                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-centered mb-0" id="btn-editable">
                                        <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Secteur d'activité</th>
                                            <th>Objet social</th>
                                            <th>RCCM</th>
                                            <th>Date de création</th>
                                            <th>Adresse</th>
                                            <th>Site web</th>
                                            <th>Adresse Email</th>
                                            <th>Nom du renseignant</th>
                                            <th>Abonnements</th>
                                            <th>Assurances</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($entreprises as $item)
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        @empty
                                            <li class="col-md-12 col-sm-12 col-xs-12">
                                                Aucune entreprise trouvée
                                            </li>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div> <!-- end .table-responsive-->
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div> <!-- content -->
    </div>
@endsection
