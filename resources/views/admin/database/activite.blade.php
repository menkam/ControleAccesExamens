<div class="modal fade" id="create-activite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de base de l'activité</h4>
            </div>
            <div class="modal-body">
<form data-toggle="validator" action="{{ route('activite.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label" for="id_annee">Année Académique:</label>
                        <select name="id_annee" id="id_annee" class="form-control" data-error="Choisr l'année académique." required >
                            <option value="">....</option>
                            <option value="1">2017-2018</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="semestre">semestre:</label>
                        <select name="id_semestre" class="form-control" data-error="Choisir le semestre." required >
                            <option value="">....</option>
                            <option value="1">LMD1</option>
                            <option value="2">LMD1&2</option>
                            <option value="3">LMD2</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="niveau">Niveau:</label>
                        <select name="id_niveau" class="form-control" data-error="Choisir le Niveau d'étude." required >
                            <option value="">....</option>
                            <option value="1">I</option>
                            <option value="3">II</option>
                            <option value="6">III</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="type_activite">Type:</label>
                        <select name="type_activite" class="form-control" data-error="Choisir le type de l'activité." required >
                            <option value="">....</option>
                            <option value="cours">Cours</option>
                            <option value="examen">Examen</option>
                            <option value="tp">Tp</option>
                            <option value="autre">Autre</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="date_debut_activite">Date de début:</label>
                        <input type="date" name="date_debut_activite" class="form-control" min="2018-05-05" data-error="Choisir la date de début de l'activité." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="date_fin_activite">Date de fin:</label>
                        <input type="date" name="date_fin_activite" class="form-control" min="2018-05-05" data-error="Choisir la date de début de l'activité." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn save_activite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button type="reset" class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- formulaire d'ajout des matières -->
<div class="modal fade" id="addMatiere" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h6 class="modal-title" id="myModalLabel">Ajouter une matière à cette activité</h6>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="{{ route('addMatiereExamen') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label" for="date_examen">Date:</label>
                        <input type="date" id="date_examen" name="date_examen" class="form-control" data-error="Choisr la une date." required >
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneau">Durée:</label>
                        <select name="id_creneau" id="id_creneau" class="form-control" data-error="Choisir un créneau horaire." required >
                            <option value="">....</option>
                            <option value="1">8h-9h</option>
                            <option value="2">9h-10h</option>
                            <option value="3">10h-11h</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_matiere">Matière:</label>
                        <select name="id_matiere" id="id_matiere" class="form-control" data-error="Choisir la matière." required >
                            <option value="">....</option>
                            <option value="1">Recherche opp</option>
                            <option value="2">algorithmique</option>
                            <option value="3">Probabilite</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_surveillant">Surveillant:</label>
                        <select name="id_surveillant" id="id_surveillant" class="form-control" data-error="Choisir un surveillant pour cette matière." required >
                            <option value="">....</option>
                            <option value="1">surveillant 1</option>
                            <option value="2">surveillant 2</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_session">Session:</label>
                        <select name="id_session" id="id_session" class="form-control" data-error="Choisir la sessionde cette activité." required >
                            <option value="">....</option>
                            <option value="1">Normale</option>
                            <option value="2">Rattrapage</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn save_matiere_activite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
</div>











                                                                                                  