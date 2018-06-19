@extends('layouts.form')
@section('titre','Rapport-Participation-Examens')
@section('stylesheet')
    
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
                                <label class="control-label" for="idDateRapport">Annee :</label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <select id="idDateRapport" class="form-control date" name="idDateRapport" required=""></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                <label class="control-label" for="idClasseRapport">Classe :</label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <select id="idClasseRapport" class="form-control" name="idClasseRapport" required=""></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                <label class="control-label" for="typeActiviteRapport">Type :</label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <select id="typeActiviteRapport" class="form-control" name="typeActiviteRapport" required=""></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                <label class="control-label" for="idMatiere">Matière :</label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <select id="idMatiere" class="form-control" name="idMatiere" required=""></select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                <button id="btnAfficherRapport" type="submit" class="form-control btn btn-primary">
                                    AFFICHER <small>Rapport</small> </button>
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
    @include('rapports.infoRapport')
</div>
@endsection


@section('script-form')
    

    <script src="js/rapportActivite.js') }}"></script>
@endsection