<div class="modal fade" id="create-cursus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations des cursus</h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="{('Cursus_accsController')}" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="code">Code:</label>
                        <input type="text" id="code" name="code" class="form-control" data-error="Entrer le code du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="libelle">libelle:</label>
                        <input type="int" id="libelle" name="libelle" class="form-control" data-error="Entrer l'dentifiant du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn crud-submit btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
	    </div>
        </div>
    </div>
</div>





