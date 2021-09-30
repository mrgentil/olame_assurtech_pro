@extends('layouts.main_font')

@section('title') @parent | VOS BESOINS EN ASSURANCE @endsection

@section('description')
    @yield('description')
@endsection

@section('keywords')
    ('keywords') OLAME ASSURTECH
@endsection
@section('content')
    <!-- BANNER -->
    <div class="section banner-page pages">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="title-page">Vos besoins en assurance</div>
                </div>
            </div>
        </div>
    </div>

    <!-- SINGLE PAGE -->
    <div class="section pages section-border">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h2 class="section-heading">
                        Vos besoins en assurances

                    </h2>
                    <div class="section-subheading">
                        En tant que professionnel, entreprise, organisation, quels sont vos besoins en assurance ? <br>
                        Ayez la maitrise des besoins en assurance liés à votre secteur d’activités et sécurisez-vous grâce aux offres d’assurances des acteurs sur le marché congolais des assurances.

                    </div>
                    <ul class="checklist">
                        <li>Agroalimentaire</li>
                        <li>Education</li>
                        <li>Etudes et Conseil</li>
                        <li>Hotelerie et restauration</li>
                        <li>Machine et équipements</li>
                        <li>BTP</li>
                        <li>Chimie et pharmaceutique</li>
                        <li>Transport et Logistique</li>
                        <li>Evenement, Spectacle et divertissement</li>
                        <li>Santé</li>
                        <li>Industrie</li>
                        <li>Droit</li>
                    </ul>

                </div>
                <div class="col-sm-6 col-md-6">
                    <img src="{{asset('images/why-img.jpg')}}" alt="" class="img-responsive">
                </div>

            </div>
        </div>
    </div>

    {{--<!-- OPEN POSITION -->
    <div class="section why section-border">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <h2 class="section-heading">
                        Open Positions
                    </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div class="margin-bottom-50"></div>

                    <div class="career-tabs" data-example-id="togglable-tabs">
                        <ul id="myTabs" class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Manager</a></li>
                            <li class=""><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Marketing</a></li>
                            <li class=""><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Advisor</a></li>
                            <li class=""><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab">Agent</a></li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab1">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="body-tab">
                                            <h4>JOB DESCRIPTION</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p><p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum.</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>RECRUITMENT</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p>
                                            <ul>
                                                <li>Sollicitudin viverra vel varius</li>
                                                <li>Ligula id commodo aenean est in volutpat amet sodales</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Dolor sit ametviverra vel varius</li>
                                            </ul>
                                            <div class="margin-bottom-30"></div>
                                            <h4>LOCATIONS</h4>
                                            <p>Pekanbaru, Riau, ID</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>DEPARTMENT</h4>
                                            <p>Project Management</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>END DATE</h4>
                                            <p>March 15, 2016</p>
                                            <div class="margin-bottom-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="body-tab">
                                            <h4>JOB DESCRIPTION</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p><p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum.</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>RECRUITMENT</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p>
                                            <ul>
                                                <li>Sollicitudin viverra vel varius</li>
                                                <li>Ligula id commodo aenean est in volutpat amet sodales</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Dolor sit ametviverra vel varius</li>
                                            </ul>
                                            <div class="margin-bottom-30"></div>
                                            <h4>LOCATIONS</h4>
                                            <p>Pekanbaru, Riau, ID</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>DEPARTMENT</h4>
                                            <p>Project Management</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>END DATE</h4>
                                            <p>March 15, 2016</p>
                                            <div class="margin-bottom-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="body-tab">
                                            <h4>JOB DESCRIPTION</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p><p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum.</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>RECRUITMENT</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p>
                                            <ul>
                                                <li>Sollicitudin viverra vel varius</li>
                                                <li>Ligula id commodo aenean est in volutpat amet sodales</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Dolor sit ametviverra vel varius</li>
                                            </ul>
                                            <div class="margin-bottom-30"></div>
                                            <h4>LOCATIONS</h4>
                                            <p>Pekanbaru, Riau, ID</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>DEPARTMENT</h4>
                                            <p>Project Management</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>END DATE</h4>
                                            <p>March 15, 2016</p>
                                            <div class="margin-bottom-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12">
                                        <div class="body-tab">
                                            <h4>JOB DESCRIPTION</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p><p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum.</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>RECRUITMENT</h4>
                                            <p>Lorem ipsum dolor sit amet libero turpis non cras ligula id commodo aenean est in volutpat amet sodales porttitor bibendum facilisi suspendisse aliquam ipsum ante morbi sed ipsum mollis. Sollicitudin viverra vel varius eget sit mollis.</p>
                                            <ul>
                                                <li>Sollicitudin viverra vel varius</li>
                                                <li>Ligula id commodo aenean est in volutpat amet sodales</li>
                                                <li>Lorem ipsum dolor sit amet</li>
                                                <li>Dolor sit ametviverra vel varius</li>
                                            </ul>
                                            <div class="margin-bottom-30"></div>
                                            <h4>LOCATIONS</h4>
                                            <p>Pekanbaru, Riau, ID</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>DEPARTMENT</h4>
                                            <p>Project Management</p>
                                            <div class="margin-bottom-30"></div>
                                            <h4>END DATE</h4>
                                            <p>March 15, 2016</p>
                                            <div class="margin-bottom-30"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END TAB -->

                </div>
            </div>
        </div>
    </div>

    <!-- AGENTS -->
    <div class="section testimony">
        <div class="container">

            <div class="row">

                <div class="col-sm-6 col-md-3 col-md-offset-2">
                    <div class="people">
                        <img class="user-pic" src="images/say-img-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-md-offset-1">

                    <div class="margin-bottom-70"></div>
                    <h2 class="title-agent">Select Your Agents Now!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <a href="#" class="btn btn-secondary" title="OUR COMPANY">FIND AN AGENTS</a>
                    <div class="margin-bottom-50"></div>

                </div>

            </div>
        </div>
    </div>

    <!-- CTA -->
    <div class="section cta">
        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-7 col-md-offset-1">
                    <h3 class="cta-desc">Get An Insurance Right Now & Save up to 10%</h3>
                </div>
                <div class="col-sm-12 col-md-3">
                    <a href="contact.html" title="" class="btn btn-orange-cta pull-right btn-view-all">GET A QUOTE</a>
                </div>

            </div>
        </div>
    </div>--}}
@endsection
