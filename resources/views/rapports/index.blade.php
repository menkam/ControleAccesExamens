@extends('layouts.form')
@section('titre','Rapport-Participation-Examens')
@section('stylesheets')
    <!-- Bootstrap --
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome --
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress --
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck --
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar --
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify --
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Theme Style --
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Custom Theme Style --
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Datatables --
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    !-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
    <!-- jQuery --
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap --
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick --
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress --
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar --
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck --
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify --
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- Chart.js --
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>

    <!-- Custom Theme Scripts
    <script src="../build/js/custom.min.js"></script>
    <script src="../build/js/diagramme_bilan.js"></script> -->

    <script src="js/rapportActivite.js"></script>
@endsection