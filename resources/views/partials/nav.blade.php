<div class="topbar-menu">
    <div class="container-fluid">
        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu">

                <li class="has-submenu">
                    <a href="{{url('/')}}"><i class="mdi mdi-view-dashboard"></i>Tableau de bord</a>
                </li>

                @if(auth()->user()->can('SudoUser') /*|| auth()->user()->can('AdminRegulateur')*/ || auth()->user()->can('AdminEntrepriseAssurance') )
                <li class="has-submenu">
                    <a href="#"> <i class="mdi mdi-invert-colors"></i>Les Utilisateurs  <div class="arrow-down"></div></a>
                    <ul class="submenu megamenu">

                        <li>
                            <ul>
                                @can('SudoUser')
                                <li>
                                    <a href="{{route('admin_regulateurs.index')}}">Les Admins Regulateurs</a>
                                </li>
                                @endcan
                                {{--@can(/*'SudoUser',*/'AdminRegulateur')
                                <li>
                                    <a href="{{route('agents-regulateurs.index')}}">Les Agents Regulateurs</a>
                                </li>--}}
                                    {{--@else
                                        <li>
                                            <a href="{{route('agents-regulateurs.index')}}">Les Agents Regulateurs</a>
                                        </li>--}}
                                    {{--@endcan--}}
                            </ul>
                        </li>
                        <li>
                            <ul>
                                @can('SudoUser')
                                <li>
                                    <a href="{{route('admin-assurances.index')}}">Les Admins Entreprises Assurances</a>
                                </li>
                                @endcan
                                @can('AdminEntrepriseAssurance')
                                <li>
                                    <a href="{{route('agents-commercials.index')}}">Les Agents Commerciaux</a>
                                </li>
                                    @endcan
                            </ul>
                        </li>
                    </ul>
                </li>
                @endif
                @if(auth()->user()->can('SudoUser') || auth()->user()->can('AdminRegulateur'))
                    <li><a href="{{route('entreprise-assurances.index')}}">Entreprises Assurances</a></li>
                @endif
                {{--@if(auth()->user()->can('SudoUser'))
                    <li><a href="{{route('entreprise-regulateurs.index')}}">Entreprises Regulateur</a></li>
               <li><a href="">Type abonnements</a></li>

                <li><a href="">Nos assurances</a></li>
                    @endif--}}
                @if(auth()->user()->can('AgentCommercial'))
                <li><a href="{{route('clients.index')}}">Enregistrer un client</a></li>
                    @endif

                @if(auth()->user()->can('AdminEntrepriseAssurance'))
                    <li><a href="{{route('clients.all')}}">Nos Clients</a></li>
                    <li><a href="{{route('devis.all')}}">Les Devis <span class="badge badge-danger rounded-circle noti-icon-badge">{{\App\Models\Devis::count()}}</span></a></li>
                @endif

                @if(auth()->user()->can('Client'))
                    <li><a href="{{route('devis.create')}}">Demander un devis</a></li>
                @endif
            </ul>
            <!-- End navigation menu -->

            <div class="clearfix"></div>
        </div>
        <!-- end #navigation -->
    </div>
    <!-- end container -->
</div>
