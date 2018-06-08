<div class="modal fade" id="create-matiere" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de base des matiere</h4>
            </div>
            <div class="modal-body">
<form data-toggle="validator" action=" " method="POST">
                    <div class="form-group">
                        <label class="control-label" for="code_matiere">code:</label>
                        <input type="text" id="code_matiere" name="code_matiere" class="form-control" data-error="Entrer le code_matiere du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="libelle_matiere">libelle:</label>
                        <input type="text" id="libelle_matiere" name="libelle_matiere" class="form-control" data-error="Entrer l'dentifiant du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nbr_credit">nbr_credit:</label>
                        <input type="number" id="nbr_credit" name="nbr_credit" class="form-control" data-error="Entrer l'dentifiant du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn matieres_submit btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>