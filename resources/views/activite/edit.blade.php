<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de base de l'activité</h4>
            </div>
            <div class="modal-body">

                <form data-toggle="validator" action="/item-ajax/14" method="put">
                    <div class="form-group">
                        <label class="control-label" for="id_annee">Année Académique:</label>
                        <select name="id_annee" class="form-control" data-error="Choisr l'année académique." required >
                            <option value="">....</option>
                            <option value="1">2017-2018</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_semestre">semestre:</label>
                        <select name="id_semestre" class="form-control" data-error="Choisir le semestre." required >
                            <option value="">....</option>
                            <option value="LMD1">LMD1</option>
                            <option value="LMD1&2">LMD1&2</option>
                            <option value="LMD2">LMD2</option>
                            <option value="LMD3">LMD3</option>
                            <option value="LMD3&4">LMD3&4</option>
                            <option value="LMD4">LMD4</option>
                            <option value="LMD5">LMD5</option>
                            <option value="LMD5&6">LMD5&6</option>
                            <option value="LMD6">LMD6</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="niveau">Niveau:</label>
                        <select name="niveau" class="form-control" data-error="Choisir le Niveau d'étude." required >
                            <option value="">....</option>
                            <option value="I">I</option>
                            <option value="II">II</option>
                            <option value="III">III</option>
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
                        <input type="date" name="date_debut_activite" class="form-control" data-error="Choisir la date de début de l'activité." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="date_fin_activite">Date de fin:</label>
                        <input type="date" name="date_fin_activite" class="form-control" data-error="Choisir la date de début de l'activité." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success edit_activite">Envoyer</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button type="reset" class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>