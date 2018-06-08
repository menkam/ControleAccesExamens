<div class="modal fade" id="create-semestre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de bass des semestre</h4>
            </div>
            <div class="modal-body">
<form data-toggle="validator" action="" method="POST">
                    <div class="form-group">
                        <label class="control-label" for="libelle_semestre">libelle_semestre:</label>
                        <input type="text" id="libelle_semestre" name="libelle_semestre" class="form-control" data-error="Entrer le libelle_semestre du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn semestre_submit btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>                              </div>
        </div>
    </div>
</div>