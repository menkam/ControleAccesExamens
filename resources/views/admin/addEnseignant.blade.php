@extends('layouts.form')
@section('titre','Enregistrement d\'un enseignant en cours...')

@section('stylesheets')
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('framework/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
@endsection


@section('contenu')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>LISTE DES ENSEIGNANTS</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#createEnseignant">Ajouter un Enseignant</button></div>
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table class="table table-striped jambo_table bulk_action table-bordered">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">id</th>
                            <th class="column-title">MATRICULE</th>
                            <th class="column-title">NOM</th>
                            <th class="column-title">PRENOM</th>
                            <th class="column-title">EMAIL</th>
                            <th class="column-title">Date DE NAIS.</th>
                            <th class="column-title">TELEPHONE</th>
                            <th class="column-title">FONCTION</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>
                        <tbody id="lignes_activites"></tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="createEnseignant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel"></h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                            {{ csrf_field() }}

                        <div class="form-group">
                            <label class="control-label" for="matricule_enseignant"> Matricule De Enseignant</label>
                            <input type="text" id="matricule_enseignant" name="matricule_enseignant" class="form-control" data-error="entrer son matricule." required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="Nom"> Nom </label>
                            <input type="text" name="Nom" class="form-control" data-error="entrer votre Nom." required>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="Prenom"> Prenom </label>
                            <input type="text" name="Prenom" class="form-control" data-error="Prenom." required>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email"> email</label>
                             <input type="mail" name="email" class="form-control" data-error="Format de mail incorrect." required>
                             <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="telephone"> telephone </label>
                             <input type="number" name="telephone" id="tel" min="650000000" max="699999999" class="form-control" data-error="Entrer un numero à 9 chiffre" required>
                             <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="Sexe"> Sexe </label>
                             <select name="Sexe" id="Sexe" class="form-control" data-error="Choisissez votre sexe." required >
                                <option value="">   </option>
                                <option value="1">Homme</option>
                                <option value="1">Femme</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="id_departement"> Departement</label>
                            <select name="id_departement" class="form-control" data-error="Choisir le departement." required >
                                <option value="">   </option>
                                <option value="1">GI</option>
                                <option value="2">GTR</option>
                                <option value="3">GC</option>
                                <option value="4">GE</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="grade"> Grade </label>
                            <select id="grade" name="grade" class="form-control" data-error="Choisir le departement." required >
                                <option value="">   </option>
                                <option value="1">Docteur</option>
                                <option value="2">Proffesseur</option>
                                <option value="3">Maitre de Conférence</option>
                            </select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="fonction">Fonction</label>
                             <select id="fonction" name="fonction" class="form-control" data-error="Entrez votre fonction." required >
                                <option value="">   </option>
                                <option value="1">Enseignent</option>
                                <option value="2">chef de departement</option>
                                <option value="1">Directeur</option>
                            </select>
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
@endsection

@section('scripts')

<script type="text/javascript">
    /*
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".saveEnseignant").click(function(e){
            e.preventDefault();
             var matricule_enseignant = $("#matricule_enseignant").val();
            var id_departement = $("#id_departement").val();
            var grade = $("#grade").val();
            var fonction = $("#fonction").val();

            //alert(matricule_enseignant+id_departement+grade+fonction);

            $.ajax({
                dataType: 'json',
                type:'POST',
                url: 'addEnseignant',
                data:{
                    matricule_enseignant:matricule_enseignant,
                    id_user:'66',
                    id_departement:id_departement,
                    grade:grade,
                    fonction:fonction
                }
            }).done(function(data){
                getPageDataSalleActivity(id_activite);
                toastr.success('Matiere Add Successfully.', 'Success Alert', {timeOut: 5000});
            }).error(function(){
                tostErreur("Cette classe n'a pas été ajouter");
            });
        });
        
    });
*/
</script>

@endsection