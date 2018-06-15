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
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <br><button type="submit" class="form-control btn btn-primary">GO</button>
                            </div>
                        </div>
                    </form>
                </div><br/><br>
                <div class="x_title">
                    <div class="clearfix"></div>
                </div>
                


                <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Date</th>
                            <th>Heure</th>
                            <th>Matière</th>
                            <th>Durée</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>2-05-2018</td>
                            <td>08h15-09h15</td>
                            <td>Annalyse Fonctionnelle</td>
                            <td>1h</td>
                        </tr>
                        <tr>
                            <td>2-05-2018</td>
                            <td>09h20-11h20</td>
                            <td>Recherche Opérationnelle</td>
                            <td>2h</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script-form')
    <script src="js/plagning.js"></script>
@endsection