<div class="modal fade" id="create-tp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations sur les  TP</h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                        
                      <div class="form-group">
                            <label class="control-label" for="id_enseignant">Enseignant <span class="required">*</span> </label>
                            <select id="id_enseignant" name="id_enseignant" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>

                         <div class="form-group">
                            <label class="control-label" for="id_activite">Activite <span class="required">*</span> </label>
                            <select id="id_activite" name="id_activite" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>

                         <div class="form-group">
                            <label class="control-label" for="id_matiere">Matiere <span class="required">*</span> </label>
                            <select id="id_matiere" name="id_matiere" required="required" class="form-control"></select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="id_creneau">Creneau <span class="required">*</span> </label>
                            <select id="id_creneau" name="id_creneau" required="required" class="form-control"></select>
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