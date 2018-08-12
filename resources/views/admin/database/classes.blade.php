<div class="modal fade" id="create-classes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Ajouter une nouvelle classe</h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="{{ route('activite.store') }}" method="POST">
                        
                    <div class="form-group">
                        <label class="control-label" for="code_classe">Code de la classe:</label>
                        <input type="text" name="code_classe" id="code_classe" class="form-control" data-error="définir le code de la classe." required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="niveau">Niveau:</label>
                        <select type="text" name="niveau" id="niveauClasse" class="form-control" data-error="niveau." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="option">Option:</label>
                        <select name="option" class="form-control" data-error="Choisir l'option." id="optionClasse" required >
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="libelle">Libelle:</label>
                        <input type="text" name="libelle" class="form-control" data-error="libelle." required >
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="effectif_classe">Effectif:</label>
                        <input type="number" name="effectif_classe" class="form-control" data-error="effectif_classe." required >
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