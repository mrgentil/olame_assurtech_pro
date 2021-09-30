@extends('layouts.main')

@section('title') @parent | Les Clients @endsection

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
            @include('flash::message')
            <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="page-title">Liste Clients</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Clients</a></li>
                                    <li class="breadcrumb-item active"><a href="{{route('clients.create')}}">Ajouter un Client</a></li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="card-box">

                            <div class="responsive-table-plugin">
                                <div class="table-rep-plugin">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-striped mb-0">
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
                                            @forelse($clients as $item)
                                                <tr>
                                                    <td class="text-center"><img src="{{asset($item->xsLogo)}}" alt="{{ $item->name }}"></td>
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
                                                                <a href="" class="mr-1 shadow btn btn-primary btn-xs sharp"><i class="fa fa-edit"></i></a>
                                                            @endcan
                                                            @can('AdminEntrepriseAssurance')
                                                                <form id="{{$item->id}}" action="" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash "></i></button>
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
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->

        </div> <!-- content -->
    </div>
@endsection
