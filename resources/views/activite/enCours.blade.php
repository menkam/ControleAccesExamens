@extends('layouts.form')
@section('titre','Activité en cours')
@section('stylesheets')

@endsection
@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Choisir une ativité</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_panel">
                    <div class="row table-responsive">
                        <div class="col-lg-4 col-sm-4 col-xs-4 form-group">
                            <center><span id="badge-nbr-examen" class="badge bg-green" style="display: none"><?= $nbr_examen; ?></span></center>
                            <button id="btn-examen" name="examen" class="btn btn-round btn-primary btn-lg form-control" title="Afficher les Examens en cours"><span class="glyphicon glyphicon-folder-close"></span>
                                EXAMENS
                            </button>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-4 form-group">
                            <center><span id="badge-nbr-tp" class="badge bg-green" style="display: none"><?= $nbr_tp; ?></span></center>
                            <button id="btn-tp" name="tp" class="btn btn-round btn-primary btn-lg form-control" title="Afficher les TP en cours">
                                <span class="glyphicon glyphicon-folder-close"></span>
                                TP
                            </button>
                        </div>
                        <div class="col-lg-4 col-sm-4 col-xs-4 form-group">
                            <center><span id="badge-nbr-cours" class="badge bg-green" style="display: none"><?= $nbr_cours; ?></span></center>
                            <button id="btn-cours" name="cours" class="btn btn-round btn-primary btn-lg form-control" title="Afficher les Cours en cours">
                                <span class="glyphicon glyphicon-folder-close"></span>
                                COURS
                            </button>
                        </div>
                    </div>
                </div><br/><br>

                <div id="content-examen-enCours" class="table-responsive" style="display: none">
                    <div class="x_title">
                        Examens en cours...
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-hover ">
                            <thead>
                            <tr>
                                <th title="Numéro de la ligne">#</th>
                                <th title="Heure de passage de l'activité">Heures</th>
                                <th title="Matière composée">Matières</th>
                                <th title="Classe qui compose">Classes</th>
                                <th title="Session de l'examen">Session</th>
                                <th title="Cursus académique">Cursus</th>
                                <th title="Département concerné">Departements</th>
                                <th title="Semetre de l'activité">Semestre</th>
                                <th title="Voire la liste des etudiants en salle">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="ligneExamenEnCours"></tbody>
                        </table>
                    </div>
                </div>

                <div id="content-tp-enCours" class="table-responsive" style="display: none">
                    <div class="x_title">
                        TP en cours...
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                            <thead>
                            <tr>
                                <th title="Numéro de la ligne">#</th>
                                <th title="Heure de passage de l'activité">Heures</th>
                                <th title="Matière composée">Matières</th>
                                <th title="Responsable chargé de la supervision du TP">Responsable</th>
                                <th title="Classe qui compose">Classes</th>
                                <th title="Cursus académique">Cursus</th>
                                <th title="Département concerné">Departements</th>
                                <th title="Voire la liste des etudiants en salle">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="ligneTpEnCours"></tbody>
                        </table>
                    </div>
                </div>


                <div id="content-cours-enCours" class="table-responsive" style="display: none">
                    <div class="x_title">
                        Cours en cours...
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table">
                            <thead>
                            <tr>
                                <th title="Numéro de la ligne">#</th>
                                <th title="Heure de passage de l'activité">Heures</th>
                                <th title="Matière composée">Matières</th>
                                <th title="Classe qui compose">Classes</th>
                                <th title="Enseignant chargé de dispanser le cours">Enseignant</th>
                                <th title="Cursus académique">Cursus</th>
                                <th title="Département concerné">Departements</th>
                                <th title="Voire la liste des etudiants en salle">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="ligneCoursEnCours"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade  table-responsive" id="show-list" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" title="fermer cette fenettre" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Liste des étudiants en salle</h4>
                <p id="infoSalle"></p>
            </div>
            <div class="modal-body table-responsive">
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
                <button type="reset" class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript"></script>
    <script type="text/javascript" src="js/activite_en_cour.js"></script>
@endsection