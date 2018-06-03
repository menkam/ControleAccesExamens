@extends('layouts.form')
@section('titre','Gestion des activités')

@section('stylesheets')
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('framework/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
@endsection

@section('contenu')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Activités</h2>
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
                <div class="row">
                    <div class="col-lg-12 pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Ajouter une Activité</button></div>

                    <div class="table-responsive col-md-12">
                        <table class="table table-striped jambo_table bulk_action table-bordered">
                            <thead>
                            <tr class="headings">
                                <!--th>
                                    <div class="icheckbox_flat-green" style="position: relative;"><input id="check-all" class="flat" style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                                </th-->
                                <th class="column-title">id</th>
                                <th class="column-title">Année Acad</th>
                                <th class="column-title">Semestre</th>
                                <th class="column-title">Niveau</th>
                                <th class="column-title">Type</th>
                                <th class="column-title">Date de début</th>
                                <th class="column-title">Date de fin</th>
                                <th class="column-title">Etat</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="lignes_activites"></tbody>
                            <!--tbody>
                            <tr class="even pointer">
                                <td class="a-center ">
                                    <div class="icheckbox_flat-green" style="position: relative;"><input class="flat" name="table_records" style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                                </td>
                                <td class=" ">121000040</td>
                                <td class=" ">May 23, 2014 11:47:56 PM </td>
                                <td class=" ">121000210 <i class="success fa fa-long-arrow-up"></i></td>
                                <td class=" ">John Blank L</td>
                                <td class=" ">Paid</td>
                                <td class="a-right a-right ">$7.45</td>
                                <td class=" last"><a href="#">View</a>
                                </td>
                            </tr>
                            </tbody-->
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <ul id="pagination" class="pagination-sm"></ul>
                        </div>
                        <div class="col-md-6 col-xs-12 widget widget_tally_box">
                            <strong style="text-color: #bcd42a">Activité completée à : <span class="badge"><i id="completer">0</i>%</span></strong>
                            <!--div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <ul id="pagination" class="pagination-sm"></ul>
                                </div>
                                <div class="col-md-12 col-xs-12 widget widget_tally_box">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Activité completer à :</h2>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <div style="text-align: center;">
                                                <span id="pourcentage"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Create Item Modal -->
            @include('activite.create')
            <!-- Edit Item Modal -->
            @include('activite.edit')
        </div>
    </div>
    @include('activite.examen')
    </div>
    @endsection
            <!--div class="page-title">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="title_leftpull-left">
                    <h2>Activités</h2>
                </div>
                <div class="pull-right">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">Ajouter une Activité</button>
                </div>
            </div>
        </div>
    </div>
    <div class="x_panel">
        <div class="x_content">
            <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Annee</th>
                        <th>Semestre</th>
                        <th>Niveau</th>
                        <th>Type</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th width="150px">Etat</th>
                        <th width="200px">Action</th>
                    </tr>
                </thead>
                <tbody id="lignes_activites"></tbody>
            </table>
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <ul id="pagination" class="pagination-sm"></ul>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                            <div class="ui-ribbon-wrapper">
                                <div class="ui-ribbon">
                                    30% Off
                                </div>
                            </div>
                            <div class="x_title">
                                <h2>User Mail</h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <div style="text-align: center; margin-bottom: 17px">
                              <span class="chart" data-percent="86">
                                                  <span class="percent">86</span>
                              <canvas height="110" width="110"></canvas></span>
                                </div>

                                <h3 class="name_title">Finance</h3>
                                <p>Short Description</p>

                                <div class="divider"></div>

                                <p>If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>




<!--script pour la page courante-->
@section('script-form')


    <script type="text/javascript">
        var url = "<?php echo route('activite.index');?>";
        var idActiviteCourante;
        var DateDebutActiviteCourante;
        var DateFinActiviteCourante;
        var idUser = 1;
        /*var compteurA = 0;
        var compteurM = 0;
        var compteurC = 0;
        var compteurS = 0;*/
    </script>
    <script src="{{ asset('js/activite.js') }}"></script>
    @yield('script-modal')
@endsection