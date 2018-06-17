@extends('layouts.form')
@section('titre','Virsualisation-Plannig-Examens')
@section('stylesheets')
@endsection

@section('contenu')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Formulaire de selection d'activité</h3>
        </div>

        <div class="title_right">
            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2><i class="fa fa-binoculars"></i> Recherche</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form class="form-group" method="POST" action="#affficher_activiter">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                        <label class="control-label" for="idDatePlanning">Annee :</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                        <select id="idDatePlanning" class="form-control date" name="idDatePlanning" required=""></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                        <label class="control-label" for="idClassePlanning">Classe :</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                        <select id="idClassePlanning" class="form-control" name="idClassePlanning" required=""></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                        <label class="control-label" for="typeActivitePlanning">Type :</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                        <select id="typeActivitePlanning" class="form-control" name="typeActivitePlanning" required=""></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                        <label class="control-label" for="idActiviterPlanning">Activité :</label>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                        <select id="idActiviterPlanning" class="form-control" name="idActiviterPlanning" required=""></select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                        <button id="btnAfficherPlanning" type="submit" class="form-control btn btn-primary">
                                            AFFICHER <small>Planning</small> </button>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <button type="reset" class="form-control btn btn-warning">
                                            EFFACER</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
            @include('planning.liste')            
        </div>
    </div>
</div>
@endsection


@section('script-form')
    <script src="js/planning.js"></script>
@endsection