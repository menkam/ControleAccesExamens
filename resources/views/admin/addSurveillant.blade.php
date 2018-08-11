@extends('layouts.admin')
@section('titre','Enregistrement d\'un enseignant en cours...')

@section('stylesheets')
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('framework/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
@endsection


@section('contenu')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2>LISTE DES SURVEILLANTS</h2>
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
            <div id="listeSurveillant" style="display: none;">
                <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#createEnseignant">Ajouter un Surveillant</button></div>
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
                                <th class="column-title">SEXE</th>
                                <th class="column-title">FONCTION</th>
                                <th class="column-title no-link last"><span class="nobr">Action</span>
                                </th>
                                <th class="bulk-actions" colspan="7">
                                    <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="lignes_surveillant"></tbody>
                        </table>
                    </div>                
                </div>
            </div>
            <div id="chargement" style="display: none;text-align: center; padding-top: 10px"></div> 
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
                           <button type="submit" class="btn saveSurveillant btn-success">Submit</button>
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
chargement("chargement");

setTimeout(function(){
    getListeEnseignant();

    $("#listeSurveillant").show('slideDown');
    $("#chargement").hide();
},2000);

function getListeEnseignant() 
{
    var rows = '';
    var num = 0;
    var position = $("#lignes_surveillant");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getSurveillant0',
        data: {},
        success: function(data){
            if(data.length>0){
                for(var i= 0; i < data.length; i++) {
                    //alert(data[i].libelle_annee);
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+(num+1)+'</td>';
                    rows = rows + '<td>CM-UDS-IUT-00'+(num+1)+'</td>';
                    rows = rows + '<td>'+data[i].name+'</td>';
                    rows = rows + '<td>'+data[i].prenom+'</td>';
                    rows = rows + '<td>'+data[i].email+'</td>';
                    rows = rows + '<td>'+data[i].date_nais+'</td>';  
                    rows = rows + '<td>'+data[i].telephone+'</td>';              
                    rows = rows + '<td>'+data[i].sexe+'</td>';              
                    rows = rows + '<td></td>';
                    rows = rows + '<td><button class="btn btn-success">Afficher</button></td>';
                    rows = rows + '</tr>';
                    num++;
                }
            }else{
                rows = rows + '<tr><td colspan="10" style="text-aling: center;">Pas d\'Etudiant</td></tr>';
            }
            position.empty();
            position.append(rows);
        }
    });    
}
</script>

@endsection