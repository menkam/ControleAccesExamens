@extends('layouts.admin')
@section('titre','Enregistrement d\'un enseignant en cours...')

@section('stylesheets')
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('framework/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
@endsection


@section('contenu')
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_content">
            <!--ul class="nav navbar-right panel_toolbox">
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
                </ul-->
            <form class="form-group" method="POST" action="#affficher_activiter">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                <label class="control-label" for="idAnneeAcad">Annee :</label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <select id="idAnneeAcad" class="form-control date" name="idAnneeAcad" required=""></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                <label class="control-label" for="idClasseEtud">Classe :</label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <select id="idClasseEtud" class="form-control" name="idClasseEtud" required=""></select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                <label class="control-label" for="btnAfficherListeEtud"></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <button id="btnAfficherListeEtud" type="submit" class="form-control btn btn-primary">
                                    AFFICHER <small>Etudiants</small> </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-5">
                                <label class="control-label" for="ras"></label>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-7">
                                <button type="reset" class="form-control btn btn-warning">
                                    EFFACER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <hr>
        </div>
        

        <div  id="resultat" class="x_panel" style="display: none;">
            <div class="x_title">
                <h2>LISTE DES ETUDIANTS</h2>
                <!--ul class="nav navbar-right panel_toolbox">
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
                </ul-->
                <div class="clearfix"></div>
            </div>
            <div class="pull-right"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#createEtudiant">Ajouter un Etudiant</button></div>
            <div class="row">
                <div class="table-responsive col-md-12">
                    <table class="table table-striped jambo_table bulk_action table-bordered">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">#</th>
                            <th class="column-title">MATRICULE</th>
                            <th class="column-title">NOM</th>
                            <th class="column-title">PRENOM</th>
                            <th class="column-title">EMAIL</th>
                            <th class="column-title">Date DE NAIS.</th>
                            <th class="column-title">TELEPHONE</th>
                            <th class="column-title">SEXE</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                        </tr>
                        </thead>
                        <tbody id="lignes_etudiant"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="chargement" style="display: none;text-align: center; padding-top: 10px"></div> 
    </div>
</div>


<div class="modal fade" id="createEtudiant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                            <label class="control-label" for="matricule_enseignant"> Matricule De l'Etudiant</label>
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
                           <button type="submit" class="btn save_activite btn-success">Submit</button>
                            <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                            <button type="reset" class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@include('admin.infoEtudiant')
@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function(){

        getOptionAnnee("idAnneeAcad");

        $("#idAnneeAcad").change(function(){
            getOptionClasse("idClasseEtud");

            $("#btnAfficherListeEtud").click(function(e){
                e.preventDefault();

                $("#resultat").hide();
                chargement("chargement");

                setTimeout(function(){
                    //alert(idActivite+"  "+idMatiere+"  "+table);
                    getListeEtudiant();

                    $("#resultat").show('slideDown');
                    $("#chargement").hide();
                },2000);

            });

        });
    });

    

    function getListeEtudiant() 
    {
        var rows = '';
        var num = 0;
        var position = $("#lignes_etudiant");
        var idAnnee = $("#idAnneeAcad").val();
        var idClasse = $("#idClasseEtud").val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: 'getListEtudiantScolarise',
            data: {idAnnee:idAnnee, idClasse:idClasse},
            success: function(data){
                if(data.length>0){
                    for(var i= 0; i < data.length; i++) {
                        //alert(data[i].libelle_annee);
                        rows = rows + '<tr>';
                        rows = rows + '<td>'+(num+1)+'</td>';
                        rows = rows + '<td>'+data[i].matricule_etudiant+'</td>';
                        rows = rows + '<td>'+data[i].name+'</td>';
                        rows = rows + '<td>'+data[i].prenom+'</td>';
                        rows = rows + '<td>'+data[i].email+'</td>';
                        rows = rows + '<td>'+data[i].date_nais+'</td>';  
                        rows = rows + '<td>'+data[i].telephone+'</td>';              
                        rows = rows + '<td>'+data[i].sexe+'</td>';
                        rows = rows + '<td><button type="button" onclick="showInfoEtudiant('+data[i].id_annee+','+data[i].id+');" class="btn btn-success" data-toggle="modal" data-target="#infoEtudiant">Afficher</button></td>';
                        rows = rows + '</tr>';
                        num++;
                    }
                }else{
                    rows = rows + '<tr><td colspan="9" style="text-aling: center;">Pas d\'Etudiant</td></tr>';
                }
                position.empty();
                position.append(rows);
            }
        });    
    }

//showInfoEtudiant() 
    function showInfoEtudiant(idAnnee,idUser) 
    {
        var rows = '';
        var position = $("#infoStudent");
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: 'getInfoEtudiant',
            data: {idAnnee:idAnnee, idUser:idUser},
            success: function(data){
                if(data.length>0){
                    //for(var i= 0; i < data.length; i++) {
                        //alert(data[i].libelle_annee);
                    var info = data[0];

                    rows = rows + '<div class="row">';
                    rows = rows + '<div class="col-lg-12" style="text-align: center;">';
                    rows = rows + 'IUT FOTSO VICTOR DE BANDJOUN<br>';
                    rows = rows + '<!--University Institue of Technology - Bandjoun<br--><hr></div>';
                    rows = rows + '</div>';
                    rows = rows + '<div class="row">';
                    rows = rows + '<div class="col-lg-4" style="margin-right: 0px">';
                    rows = rows + '<div class="row">';
                    rows = rows + '<div class="col-lg-12">Année Académique<br><b>   '+info.libelle_annee+'</b></div>';
                    rows = rows + '<div class="col-lg-12">';
                    rows = rows + '<img src="images/'+info.photo+'" style="height: 120px; width: 120px" alt="avatar etudiant" >';
                    rows = rows + '</div>';
                    rows = rows + '<div class="col-lg-12">';
                    //rows = rows + '<img src="phpqrcode/temp/codeBarre.png" style="height: 120px; width: 120px" alt="code barre etudiant">';
                    rows = rows + '<p>'+info.codeBarre+'</p>';
                    rows = rows + '</div>';
                    rows = rows + '</div>';
                    rows = rows + '</div>';
                    rows = rows + '<div class="col-lg-8" style="margin-left: 0px">';
                    rows = rows + '<div class="col-lg-12"><h2>INFORMATION SUR L\'ETUDIANT</h2></div>';
                    rows = rows + '<div class="col-lg-12">Matricule/Restration number : <b>'+info.matricule_etudiant+'</b><br><br></div>';
                    rows = rows + '<div class="col-lg-12">Nom/Surname : <b>'+info.name+'</b><br><br></div>';
                    rows = rows + '<div class="col-lg-12">Prénom/Given Name : <b>'+info.prenom+'</b><br><br></div>';
                    rows = rows + '<div class="col-lg-12">Né(e) le/Bon on : <b>'+info.date_nais+'</b><br><br></div>';
                    rows = rows + '<div class="col-lg-12">Parcours/Course : <b>'+info.libelle_classe+'</b><br><br></div>';
                    rows = rows + '<div class="col-lg-12">Niveau/Level : <b>'+info.code_classe+'</b></div>';
                    rows = rows + '</div>';
                    rows = rows + '</div>';
                   // }
                }
                position.empty();
                position.append(rows);
            }
        });    
    }

</script>

@endsection