<form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label class="control-label" for="matricule_enseignant">matricule_enseignant:</label>
                        <input type="text" name="matricule_enseignant" class="control-label" data-error="entrer son matricule." required>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="id_annee">Année Académique:</label>
                        <select name="id_annee" id="id_annee" class="form-control" data-error="Choisr l'année académique." required >
                            <option value="">....</option>
                            <option value="1">2017-2018</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="id_user">id_user:</label>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="id_departement">id_departement:</label>
                        <select name="id_departement" class="form-control" data-error="Choisir le departement." required >
                            <option value="">....</option>
                            <option value="1">GI</option>
                            <option value="2">GTR</option>
                            <option value="3">GC</option>
			                <option value="4">GE</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="grade">grade:</label>
                        <input type="text" id="grade" name="grade" class="form-control" data-error="entrer son grade." required >
                    </div>

                    <div class="form-group">
                        <label class="control-label" for="fonction">fonction:</label>
                        <input type="text" name="fonction" class="form-control" data-error="entrer sa fonction." required />
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn save_activite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button type="reset" class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>