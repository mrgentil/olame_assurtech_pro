@extends('layouts.main')

@section('title') @parent | Les Entreprises Assurances @endsection

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
                            <h4 class="page-title">Les Entreprises Assurances</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Liste Entreprises Assurances</a></li>
                                    @can('SudoUser')
                                    <li class="breadcrumb-item active"><a href="{{route('entreprise-assurances.create')}}">Ajouter Entreprise Assurance</a></li>
                                    @endcan
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
                                                <th>Adresse</th>
                                                <th>Type Abonnement</th>
                                                <th>Actions</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($assurances as $item)
                                                <tr>
                                                    <td class="text-center"><img src="{{asset($item->xsLogo)}}" alt="{{ $item->name }}"></td>
                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->rccm}}</td>
                                                    <td>{{$item->adresse}}</td>
                                                    <td>{{$item->abonnements->name}}</td>
                                                    <td>
                                                        <div class="d-flex">
                                                            @can('SudoUser')
                                                            <a href="{{route('entreprise-assurances.edit',$item)}}" class="mr-1 shadow btn btn-primary btn-xs sharp"><i class="fa fa-edit"></i></a>
                                                            @endcan
                                                            <a href="{{route('entreprise-assurances.show',$item)}}" class="mr-1 shadow btn btn-primary btn-xs sharp"><i class="fa fa-eye"></i></a>
                                                                @can('SudoUser')
                                                            <form id="{{$item->id}}" action="{{route('entreprise-assurances.destroy', $item)}}" method="POST">
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
                                                    Aucune Entreprise d'Assurance trouvée
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
