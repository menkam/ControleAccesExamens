@extends('layouts.global')
@section('titre','Liste des étudiants actuelement en salle de composition')
@section('stylesheets')

@endsection

@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Liste des étudiants en salle</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <p id="infoSalle"></p>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="x_content">

                    <div class="table-responsive">
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title"># </th>
                                    <th class="column-title">Matricule </th>
                                    <th class="column-title">Nom Prénom </th>                                    
                                    <th class="column-title">Email </th>
                                    <th class="column-title">Date Nais. </th>
                                    <th class="column-title">Régime </th>
                                    <th class="column-title">Etat </th>
                                </tr>
                            </thead>
                            <tbody id="lignesListeEtudiantEnSalle"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript" src="js/listeEtudiqntEnSqlle.js"></script>
@endsection