@extends('layouts.global')
@section('titre','Rapport-Participation-Cours')
@section('stylesheets')

@endsection

@section('page_content')
@section('stylesheets')
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    !-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
@endsection

@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h4>Formulaire de selection d'activité</h4>
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
            <form class="form-inline" method="POST" action="#affficher_activiter">
                <div class="form-group">
                    <label for="date">Date :</label>
                    <input type="date" id="date" class="form-control date" name="date" required="">
                    <label for="classe"> Classe :</label>
                    <select id="classe" class="form-control" name="classe" required="">
                        <option value=""></option>
                        <option value="LIR">LIR</option>
                        <option value="GI2">GI1</option>
                    </select>
                    <label for="activiter"> Activité :</label>
                    <select id="activiter" class="form-control" name="activiter" required="">
                        <option value=""></option>
                        <option value="1">Noumale LMD1</option>
                        <option value="2">Normale LMD2</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">GO</button>
            </form>
        </div>
    </div>
    <div class="page-title">
        <div class="title_left">
            <h3>Resultat de la recherche</h3>
        </div>
    </div>
    <div class="x_panel">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="">
                <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Examen : Normale 2015-2016</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#envoie_du_rapport"><i class="fa fa-inbox"></i> Envoyer par mail</a></li>
                                <li><a href="#imprimerle_rapport"><i class="fa fa-print"></i> Imprimer</a></li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Présents <span class="badge bg-green"> 90% </span> </a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tricheries <span class="badge bg-red"> 2% </span></a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Abscents <span class="badge bg-purple"> 8% </span></a>
                            </li>
                            <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Bilan</a>
                            </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                <div class="main_container">

                                    <div class="">
                                        <div class="page-title">
                                            <div class="title_left">
                                                <h2>Liste des étudiants ayant composés</h2>
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
                                                    <!--div class="x_title">

                                                      <ul class="nav navbar-right panel_toolbox">
                                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                        </li>
                                                        <li class="dropdown">
                                                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                          <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Settings 1</a>
                                                            </li>
                                                            <li><a href="#">Settings 2</a>
                                                            </li>
                                                          </ul>
                                                        </li>
                                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                        </li>
                                                      </ul>
                                                      <div class="clearfix"></div>
                                                    </div-->
                                                    <div class="x_content">
                                                        <p class="text-muted font-13 m-b-30">

                                                        </p>
                                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>N°</th>
                                                                <th>Matricule</th>
                                                                <th>Nom</th>
                                                                <th>Prenom</th>
                                                                <th>Date Nais.</th>
                                                                <th>Régime</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>CM-UDS-16IUT1214</td>
                                                                <td>TAMO</td>
                                                                <td>Edinburgh</td>
                                                                <td>2011/04/25</td>
                                                                <td>Régulier</td>
                                                            </tr>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>CM-UDS-15IUT1214</td>
                                                                <td>NANA</td>
                                                                <td>Elvis</td>
                                                                <td>2010/04/25</td>
                                                                <td>Créditaire</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>CM-UDS-16IUT1114</td>
                                                                <td>SIMO</td>
                                                                <td>Silveste</td>
                                                                <td>1998/04/25</td>
                                                                <td>Régulier</td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab2">

                                <div class="">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h2>Liste des étudiants ayant fraudés</h2>
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
                                                <!--div class="x_title">

                                                  <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                      <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                  </ul>
                                                  <div class="clearfix"></div>
                                                </div-->
                                                <div class="x_content">
                                                    <p class="text-muted font-13 m-b-30">

                                                    </p>
                                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Matricule</th>
                                                            <th>Nom</th>
                                                            <th>Prenom</th>
                                                            <th>Date Nais.</th>
                                                            <th>Régime</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>CM-UDS-16IUT1214</td>
                                                            <td>TAMO</td>
                                                            <td>Edinburgh</td>
                                                            <td>2011/04/25</td>
                                                            <td>Régulier</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>CM-UDS-15IUT1214</td>
                                                            <td>NANA</td>
                                                            <td>Elvis</td>
                                                            <td>2010/04/25</td>
                                                            <td>Créditaire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>CM-UDS-16IUT1114</td>
                                                            <td>SIMO</td>
                                                            <td>Silveste</td>
                                                            <td>1998/04/25</td>
                                                            <td>Régulier</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab3">

                                <div class="">
                                    <div class="page-title">
                                        <div class="title_left">
                                            <h2>Liste des étudiants qui n'ont pas pris part à l'examen</h2>
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
                                                <!--div class="x_title">

                                                  <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                      <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                      </ul>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                  </ul>
                                                  <div class="clearfix"></div>
                                                </div-->
                                                <div class="x_content">

                                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>N°</th>
                                                            <th>Matricule</th>
                                                            <th>Nom</th>
                                                            <th>Prenom</th>
                                                            <th>Date Nais.</th>
                                                            <th>Régime</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>CM-UDS-16IUT1214</td>
                                                            <td>TAMO</td>
                                                            <td>Edinburgh</td>
                                                            <td>2011/04/25</td>
                                                            <td>Régulier</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>CM-UDS-15IUT1214</td>
                                                            <td>NANA</td>
                                                            <td>Elvis</td>
                                                            <td>2010/04/25</td>
                                                            <td>Créditaire</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>CM-UDS-16IUT1114</td>
                                                            <td>SIMO</td>
                                                            <td>Silveste</td>
                                                            <td>1998/04/25</td>
                                                            <td>Régulier</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab4">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Bilan final:</h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">
                                            <table class="" style="width:100%">
                                                <tr>
                                                    <th><center>Diagramme :</center></th>
                                                    <th>Légende :</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <center><canvas class="diagramme_rapport" height="140" width="140" style=""></canvas></center>
                                                    </td>
                                                    <td>
                                                        <table class="table table-responsive tile_info">
                                                            <tr>
                                                                <td>
                                                                    <p><i class="fa fa-square green"></i> 60% Presents</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><i class="fa fa-square purple"></i> 30% Ascents</p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p><i class="fa fa-square red"></i> 10% Fraude</p>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

@endsection