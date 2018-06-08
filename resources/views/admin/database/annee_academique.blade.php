<div class="modal fade" id="create-annee_academique" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations sur les annee academique</h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    <div class="form-group">
                           <label class="control-label" for="libelle_annee">libelle <span class="required">*</span> </label>
                           <input type="text" id="libelle_annee" name="libelle_annee" required="required" class="form-control"/>
                          <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success anneeAca_submit">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>