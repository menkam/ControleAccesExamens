@extends('layouts.global')
@section('titre','Virsualisation-Plannig-Cours')
@section('stylesheets')

@endsection

@section('page_content')
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


@section('script')

@endsection