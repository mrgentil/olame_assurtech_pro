@extends('layouts.main')

@section('title') @parent | Les Administrateurs Enteprises Assurances @endsection

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
                            <h4 class="page-title">Liste Administrateurs Entreprises Assurances</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrateurs Entreprises Assurances</a></li>
                                     <li class="breadcrumb-item active"><a href="{{route('admin-assurances.create')}}">Ajouter Administrateur Entreprise Assurance</a></li>
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
                                                <th>Avatar</th>
                                                <th>Nom</th>
                                                <th>PostNom</th>
                                                <th>Prénom</th>
                                                <th>Adresse</th>
                                                <th>Téléphone</th>
                                                <th>Genre</th>
                                                <th>Societé Assurance</th>
                                                <th>Adresse Email</th>
                                                <th>Actions</th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($admins as $item)
                                            <tr>
                                                <td class="text-center"><img src="{{asset($item->xsLogo)}}" alt="{{ $item->name }}"></td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->firstName}}</td>
                                                <td>{{$item->lastName}}</td>
                                                <td>{{$item->adress}}</td>
                                                <td>{{$item->phone}}</td>
                                                <td>{{$item->genre}}</td>
                                                <td>{{$item->entrepriseAssurance->name}}</td>
                                                <td>{{$item->user->email}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        @can('SudoUser')
                                                            <a href="{{route('admin-assurances.edit',$item)}}" class="mr-1 shadow btn btn-primary btn-xs sharp"><i class="fa fa-edit"></i></a>
                                                        @endcan
                                                        @can('SudoUser')
                                                            <form id="{{$item->id}}" action="{{route('admin-assurances.destroy', $item)}}" method="POST">
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
                                                    Aucun Administrateur trouvé
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

        <!-- Footer Start -->
    </div>
@endsection
