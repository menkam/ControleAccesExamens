<div class="modal fade" id="create-activite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de base de l'examen</h4>
            </div>
            <div class="modal-body">
<form data-toggle="validator" action="{('ExamensController')}" method="POST">
                    {{ csrf_field() }} 
                    
                    <div class="form-group">
                        <label class="control-label" for="id_activite"> Activite:</label>
                        <select name="id_activite" id="id_activite" class="form-control" data-error="Choisr l'année académique." required >
                            <option value="">....</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="ens_chef_dpt">ens_chef_dpt:</label>
                        <select name="id_ens_chef_dpt" class="form-control" data-error="Choisir le ens_chef_dpt." required >
                            <option value="">....</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="id_matiere">id_matiere:</label>
                        <select name="id_matiere" class="form-control" data-error="Choisir le id_matiere d'étude." required >
                            <option value="">....</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="id_creneau">creneau:</label>
                        <select name="id_creneau" class="form-control" data-error="Choisir le creneau." required >
                            <option value="">....</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="id_surveillant">suiveillant:</label>
                        <select name="id_surveillant" class="form-control" data-error="Choisir l'id_surveillant'." required >
                            <option value="">....</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="id_session">suiveillant:</label>
                        <select name="id_session" class="form-control" data-error="Choisir l'id_session'." required >
                            <option value="">....</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="date_examen">Date de l'examen:</label>
                        <input type="date" name="date_examen" class="form-control" min="2018-05-05" data-error="Choisir la date  de l'examen." required />
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