<div class="x_panel">
    <div class="x_title">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <h2><i class="fa fa-list-alt"></i> Détail sur l'activité courante :</h2>
            </div>
        </div>
    </div>
    <div class="x_content">
        <div class="" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Matières</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Classes</a>
                </li>
                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Salles</a>
                </li>
            </ul>
            <div id="myTabContent" class="tab-content table-responsive">
                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                    <div class="row">
                        <div class="col-lg-6 pull-left">
                            <br>Liste des matières</br>
                        </div>
                        <div class="col-lg-6 pull-right" id="btnAddMatiere"></div>
                    </div>
                    <table class="table table-bordered jambo_table table-striped tablecondensed">
                        <thead id="header_matiere_activite">
                            <tr>
                                <th>#</th>
                                <th>Dates</th>
                                <th>Heures</th>
                                <th>Matières</th>
                                <th>Surveillant</th>
                                <th width="200px">Action</th>
                            </tr>
                        </thead>
                        <tbody id="lignes_matiere_activite"></tbody>
                    </table>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-lg-6 pull-left">
                            <br>Liste des classes concernées pour cette activité</br>
                        </div>
                        <div class="col-lg-6 pull-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addClasse">Ajouter une classe</button>
                        </div>
                    </div>
                    <table class="table table-bordered jambo_table table-striped tablecondensed">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Code classe</th>
                            <th>Libelle classe</th>
                            <th>Effectif</th>
                            <th width="200px">Action</th>
                        </tr>
                        </thead>
                        <tbody id="lignes_classe_activite"></tbody>
                    </table>
                </div>

                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <div class="row">
                        <div class="col-lg-6 pull-left">
                            <br>Liste des salles concernées pour cette activité</br>
                        </div>
                        <div class="col-lg-6 pull-right">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSalle">Ajouter une salle</button>
                         </div>
                    </div>
                    <table class="table table-bordered jambo_table table-striped tablecondensed">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Codes salle</th>
                            <th>Libelles salle</th>
                            <th>Places Disponible</th>
                            <th width="200px">Action</th>
                        </tr>
                        </thead>
                        <tbody id="lignes_salle_activite"></tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>



