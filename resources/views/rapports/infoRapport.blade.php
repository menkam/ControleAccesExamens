<div class="page-title">
    <div class="title_left">
        <h3>Resultat de la recherche</h3>
    </div>
</div>
<div id="resultatRapport" class="x_panel" style="display: ;">
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
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Présents <span class="badge bg-green"><strong class="pp"></strong><strong>%</strong></span> </a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Tricheries <span class="badge bg-red"><strong class="pt"></strong><strong>%</strong></span></a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Absents <span class="badge bg-purple"><strong class="pa"></strong><strong>%</strong></span></a>
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
                                                <div class="x_content">
                                                    <p class="text-muted font-13 m-b-30">

                                                    </p>
                                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Matricule</th>
                                                                <th>Nom</th>
                                                                <th>Prenom</th>
                                                                <th>Date Nais.</th>
                                                                <th>Régime</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="rowEtudiantPresent"></tbody>
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
                                            <div class="x_content">
                                                <p class="text-muted font-13 m-b-30">

                                                </p>
                                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Matricule</th>
                                                            <th>Nom</th>
                                                            <th>Prenom</th>
                                                            <th>Date Nais.</th>
                                                            <th>Régime</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="rowEtudiantTricheur"></tbody>
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
                                        <h2>Liste des étudiants qui n'ont pas pris part à l'activite</h2>
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
                                            <div class="x_content">

                                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Matricule</th>
                                                            <th>Nom</th>
                                                            <th>Prenom</th>
                                                            <th>Date Nais.</th>
                                                            <th>Régime</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="rowEtudiantAbsent"></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab4">

                            <!--div class="x_panel tile fixed_height_320 overflow_hidden">
                                <div class="x_title">
                                  <h2>Device Usage</h2>
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
                                    <tbody><tr>
                                      <th style="width:37%;">
                                        <p>Top 5</p>
                                      </th>
                                      <th>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                          <p class="">Device</p>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                          <p class="">Progress</p>
                                        </div>
                                      </th>
                                    </tr>
                                    <tr>
                                      <td><iframe class="chartjs-hidden-iframe" style="width: 100%; display: block; border: 0px; height: 0px; margin: 0px; position: absolute; left: 0px; right: 0px; top: 0px; bottom: 0px;"></iframe>
                                        <canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0px; width: 140px; height: 140px;"></canvas>
                                      </td>
                                      <td>
                                        <table class="tile_info">
                                          <tbody><tr>
                                            <td>
                                              <p><i class="fa fa-square blue"></i>IOS </p>
                                            </td>
                                            <td>30%</td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <p><i class="fa fa-square green"></i>Android </p>
                                            </td>
                                            <td>10%</td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                                            </td>
                                            <td>20%</td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <p><i class="fa fa-square aero"></i>Symbian </p>
                                            </td>
                                            <td>15%</td>
                                          </tr>
                                          <tr>
                                            <td>
                                              <p><i class="fa fa-square red"></i>Others </p>
                                            </td>
                                            <td>30%</td>
                                          </tr>
                                        </tbody></table>
                                      </td>
                                    </tr>
                                  </tbody></table>
                                </div>
                              </div-->
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
                                                                <p><i class="fa fa-square green"></i><strong class="pp"></strong><strong>%</strong> Presents</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square purple"></i><strong class="pa"></strong><strong>%</strong> Absent</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <p><i class="fa fa-square red"></i><strong class="pt"></strong><strong>%</strong> Fraude</p>
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
<div id="chargement" style="display: none;text-align: center; padding-top: 10px"></div> 