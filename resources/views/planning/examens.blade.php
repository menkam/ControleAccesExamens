@extends('layouts.form')
@section('titre','Virsualisation-Plannig-Examens')
@section('stylesheetss')
@endsection

@section('contenu')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Planning</h3>
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
                <div class="x_panel">
                    <form class="form-group" method="POST" action="#affficher_activiter">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5">
                                        <label class="control-label" for="datePlanningExamen">Annee:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-7">
                                        <select id="datePlanningExamen" class="form-control date" name="datePlanningExamen" required=""></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5">
                                        <label class="control-label" for="classePlanningExamen">Classe:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-7">
                                        <select id="classePlanningExamen" class="form-control" name="classePlanningExamen" required=""></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-5">
                                        <label class="control-label" for="idActiviterPlanningExamen">Activité:</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-7">
                                        <select id="idActiviterPlanningExamen" class="form-control" name="idActiviterPlanningExamen" required=""></select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 20px">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
                                        <button id="btnAfficherPlanningExamen" type="submit" class="form-control btn btn-primary">
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
                </div><br/><br>
            </div>   


            <div id="resultatPlanning" class="x_panel" style="display: none;">    
                <div class="x_content">
                    <div class="row" style="background-image: url('images/BANRFASA2.jpg');">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="text-align: center;">
                            <b>REPUBLIQUE DU CAMEROUN<br>
                            REPUBLIC OF CAMEROON</b><br>
                            Preace-Work-Fatherland<br>
                            <b>UNIVERSITE DE DSCHANG</b><br>
                            UNIVERSITY OF DSCHANG<br>
                            Scholae Thesaurus Dshangenisi Ibi Cc<br>
                            Bp 96 Dschang Tel/Fax (237) 33 45 13 81<br>
                            Website : www.univ-dschang.org<br>
                            Email : udsrectorat@univ-dschang.org<br>
                            N°........../UDS/IUT/D/DA/DGC/SSOF
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="text-align: center;">
                            <img src="images/logo_iut.png" alt="logo" style="width: 50%; margin-top: 25%;">
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" style="text-align: center;">
                            <b>INSTITUT UNIVERSITAIRE DE TECHNOLOGI FOTSO VICTOR<br>
                            FOTSO VICTOR INSTITUTE OF TECHNOLOGY<br>
                            la Direction</b><br>
                            The Head Office<br>
                            Bp 134 Bandjoun Cameroun<br>
                            Tél: (237) 697 922 938 / 666 585 422<br>
                            Email : iutfv-bandjoun@univ-dschang.org<br>
                        </div>
                        <br>
                        <div id="nomClasse" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center; margin-top: 10px;"></div>
                        <div id="descpActivite" class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align: center; margin-top: 10px;"></div>
                    </div>
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="margin-top: 15px">
                        <thead id="enTetetabPlanning"></thead>
                        <tbody id="contenuTabPlanning"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script-form')
    <script src="js/planning.js"></script>
@endsection