<div class="modal fade" id="create-cours" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de base de l'activité</h4>
            </div>
            <div class="modal-body">
 <form data-toggle="validator" action="{{ route('activite.store') }}" method="POST">
                        
                    <div class="form-group">
                        <label class="control-label" for="id_enseignant">enseignant:</label>
                        <select name="id_enseignant" id="id_enseignant" class="form-control" data-error="Choisr d'un ensseignant." required >
                            <option value="">....</option>
                            <option value="1">FM01</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_activite">activite:</label>
                        <select name="id_activite" class="form-control" data-error="Choisir une activite." required >
                            <option value="">....</option>
                            <option value="1">TP2</option>
                            <option value="2">EX3</option>
                            <option value="3">CC1</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_matiere">matiere:</label>
                        <select name="id_id_matiere" class="form-control" data-error="Choisir le id_matiere d'étude." required >
                            <option value="">....</option>
                            <option value="id_1">ECO</option>
                            <option value="id_2">DW</option>
                            <option value="id_3">MAT</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneau">creneau:</label>
                        <select name="id_id_creneau" class="form-control" data-error="Choisir  l'id_creneau horaire." required >
                            <option value="">....</option>
                            <option value="id_1">H1</option>
                            <option value="id_2">H9</option>
                            <option value="id_3">H2</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn save_activite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button type="reset" class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>                 </div>
        </div>
    </div>
</div>