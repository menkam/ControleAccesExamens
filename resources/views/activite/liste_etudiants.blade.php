@extends('layouts.form')
@if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant') || \Auth::user()->hasRole('etudiant'))
@section('titre','Liste des étudiants pas activité')

@section('stylesheets')
<!-- iCheck -->
<link href="{{ asset('framework/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- Datatables -->
<link href="{{ asset('framework/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('framework/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('framework/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('framework/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('framework/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">
@endsection

@section('page_content')
<div class="" style="">
    <div class="page-title">
        <div class="title_left">
            <h3>Formulaire de recherche</h3>
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
                    <h2>Liste des étudiants par activité</h2>
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
                <div class="x_content" class="row">
                    <br>
                    <form data-toggle="validator" action="{{ route('getListEtudiant') }}" method="POST" class="col-md-6 col-md-offset-3">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="control-label" for="id_annee">Année Académique <span class="required">*</span> </label>
                            <select id="id_annee" name="id_annee" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id_semestre">Semestre <span class="required">*</span> </label>
                            <select id="id_semestre" name="id_semestre" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="typeActivite">Type d'activité <span class="required">*</span> </label>
                            <select id="typeActivite" name="typeActivite" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group" style="display: none;" id="divTypeActivite">
                            <label class="control-label" for="id_session">Session <span class="required">*</span> </label>
                            <select id="id_session" name="id_session" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id_niveau">Niveau <span class="required">*</span></label>
                            <select id="id_niveau" name="id_niveau" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id_classe">Classe <span class="required">*</span> </label>
                            <select id="id_classe" name="id_classe" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="id_matiere">Matière  <span class="required">*</span> </label>
                            <select id="id_matiere" name="id_matiere" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>
                        <!--div class="form-group">
                            <label class="control-label" for="id_cursus">Cursus <span class="required">*</span> </label>
                            <select id="id_cursus" name="id_cursus" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div-->                               
                        <div class="form-group">
                            <div class="form-group">
                                <button  id="Effacer" class="btn btn-primary form-control" type="reset">Effacer</button>
                                <button data-toggle="modal" data-target="#show-list-etudiant" id="Afficher" type="" class="btn btn-success form-control">Afficher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade  table-responsive" id="show-list-etudiant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document" style="min-width: 100%;">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" title="fermer cette fenettre" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Liste des étudiants</h4>
                <p id="infoSalle"></p>
            </div>
            <div class="modal-body table-responsive">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Les etudiants dont les nom suivent sont autorisés en salle de composition <small> à l'amphie 200</small></h2>
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
                        <p class="text-muted font-13 m-b-30"></p>
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                          <thead>
                            <tr>
                              <th>N°</th>
                              <th>Matricule</th>
                              <th>Nom</th>
                              <th>Prenom</th>
                              <th>Date Nais.</th>
                              <th>Sexe</th>
                              <th>Régime</th>
                            </tr>
                          </thead>
                          <tbody id="ligneEtudiant"></tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="reset" class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
            </div>
        </div>
    </div>
</div>

<!--div class="ListeEtudiant" style="display: none">
    <div class="page-title">
      <div class="title_left">
        <h3>Liste des étudiants</h3>
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
            <h2>Les etudiants dont les nom suivent sont autorisés en salle de composition <small> à l'amphie 200</small></h2>
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
            <p class="text-muted font-13 m-b-30"></p>
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>N°</th>
                  <th>Matricule</th>
                  <th>Nom</th>
                  <th>Prenom</th>
                  <th>Date Nais.</th>
                  <th>Sexe</th>
                  <th>Régime</th>
                </tr>
              </thead>
              <tbody id="ligneEtudiant"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div-->
@endsection

@section('scriptso')



@endsection

@section('script-form')
    <!-- FastClick -->
    <script src="{{ asset('framework/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- iCheck -->
    <script src="{{ asset('framework/vendors/iCheck/icheck.min.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('framework/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/pdfmake/build/vfs_fonts.js') }}"></script>

    <script src="{{ asset('js/listeEtudiantActivite.js') }}"></script>
@endsection
@endif