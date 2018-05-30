<div class="modal fade" id="create-departement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de base de l'activité</h4>
            </div>
            <div class="modal-body">
 <form data-toggle="validator" action="{('DepartementsController')}" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="code_departement">code_departement:</label>
                        <input type="text" id="code_departement" name="code_departement" class="form-control" data-error="Entrer le code_departement du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="libelle_departement">libelle_departement:</label>
                        <input type="int" id="libelle_departement" name="libelle_departement" class="form-control" data-error="Entrer l'dentifiant du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn crud-submit btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>            </div>
        </div>
    </div>
</div>