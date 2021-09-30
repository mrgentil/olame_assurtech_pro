@extends('layouts.main')

@section('title') @parent | Les Administrateurs Regulateurs @endsection

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
                            <h4 class="page-title">Liste Administrateurs Regulateurs</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Administrateurs Regulateurs</a></li>
                                     <li class="breadcrumb-item active"><a href="{{route('admin_regulateurs.create')}}">Ajouter Administrateurs Regulateurs</a></li>
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
                                                <th>Societé regulateur</th>
                                                <th>Adresse Email</th>
                                                <th>Fonction</th>
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
                                                <td>{{$item->regulateurEntreprise->name}}</td>
                                                <td>{{$item->user->email}}</td>
                                                <td>{{$item->permission->name}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="{{route('admin_regulateurs.edit',$item)}}" class="mr-1 shadow btn btn-primary btn-xs sharp"><i class="fa fa-edit"></i></a>
                                                        <form id="{{$item->id}}" action="{{route('admin_regulateurs.destroy', $item)}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="shadow btn btn-danger btn-xs sharp"><i class="fa fa-trash "></i></button>
                                                        </form>
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
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        2016 - 2020 &copy; Adminto theme by <a href="">Coderthemes</a>
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-right footer-links d-none d-sm-block">
                            <a href="javascript:void(0);">About Us</a>
                            <a href="javascript:void(0);">Help</a>
                            <a href="javascript:void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>
@endsection
