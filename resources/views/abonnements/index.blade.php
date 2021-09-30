@extends('layouts.main')

@section('title') @parent | Les Abonnements @endsection

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
                            <h4 class="page-title">Liste abonnement</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Les Abonnements</a></li>
                                    <li class="breadcrumb-item active"><a href="{{route('abonnements.create')}}">Ajouter Abonnement</a></li>
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
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($abonnements as $item)
                                            <tr>
                                                <td>{{$item->name}}</td>
                                            </tr>
                                        @empty
                                            <li class="col-md-12 col-sm-12 col-xs-12">
                                                Aucun abonnement trouvée
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
