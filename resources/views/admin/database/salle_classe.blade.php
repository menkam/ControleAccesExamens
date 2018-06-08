<div class="modal fade" id="create-salle_classe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Modifier les informations de base sur le salles de classes</h4>
            </div>
            <div class="modal-body">
<form data-toggle="validator" action=" {('SallesController')} " method="POST">
                    <div class="form-group">
                        <label class="control-label" for="code_salle">code_salle:</label>
                        <input type="text" id="code_salle" name="code_salle" class="form-control" data-error="Entrer le code_salle du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="libelle_salle">libelle_salle:</label>
                        <input type="text" id="libelle_salle" name="libelle_salle" class="form-control" data-error="Entrer l'dentifiant du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="nbre_places">nbre_places:</label>
                        <input type="number" id="nbre_places" name="nbre_places" class="form-control" data-error="Entrer l'dentifiant du cursus." required />
                        <div class="help-block with-errors"></div>
                    </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn salle_submit btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
             </div>
        </div>
    </div>
</div>