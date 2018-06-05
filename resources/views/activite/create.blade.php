<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Information sur la nouvelle activité</h4>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label" for="anneeAcdivite">Année Académique:</label>
                        <select name="anneeAcdivite" id="anneeAcdivite" class="form-control" data-error="Choisr l'année académique." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="idSemestreActivite">Semestre:</label>
                        <select id="idSemestreActivite" name="idSemestreActivite" class="form-control" data-error="Choisir le semestre." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="niveau">Niveau:</label>
                        <select id="id_niveau" name="id_niveau" class="form-control" data-error="Choisir le Niveau d'étude." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="type_activite">Type d'activite:</label>
                        <select id="type_activite" name="type_activite" class="form-control" data-error="Choisir le type de l'activité." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group" id="typeExamens"></div>
                    <div class="form-group" id="dateDebutActivites"></div>
                    <div class="form-group" id="dateFinActivites"></div>
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

<!-- formulaire d'ajout des matières aux examens -->
<div class="modal fade" id="addMatiereExamen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h6 class="modal-title" id="myModalLabel">Ajouter une matière à cette examen</h6>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group" id="dateMatiereActivites"></div>
                    <div class="form-group">
                        <label class="control-label" for="dureeMatiere">Durée:</label>
                        <select name="dureeMatiere" id="dureeMatiere" class="form-control" data-error="Choisir une durée." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneauMatiere">Creneau horaire:</label>
                        <select name="id_creneauMatiere" id="id_creneauMatiere" class="form-control" data-error="Choisir un créneau horaire." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_matiere">Matière:</label>
                        <select name="id_matiere" id="id_matiere" class="form-control" data-error="Choisir la matière." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_surveillant">Surveillant:</label>
                        <select name="id_surveillant" id="id_surveillant" class="form-control" data-error="Choisir un surveillant pour cette matière." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn save_matiere_activite1 btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- formulaire d'ajout des matières aux cours -->
<div class="modal fade" id="addMatiereCoursTp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h6 class="modal-title" id="myModalLabel">Ajouter une matière</h6>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group" id="dateMatiereActivites2"></div>
                    <div class="form-group">
                        <label class="control-label" for="dureeMatiere2">Durée:</label>
                        <select name="dureeMatiere2" id="dureeMatiere2" class="form-control" data-error="Choisir une durée." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneauMatiere2">Creneau horaire:</label>
                        <select name="id_creneauMatiere2" id="id_creneauMatiere2" class="form-control" data-error="Choisir un créneau horaire." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_matiere2">Matière:</label>
                        <select name="id_matiere2" id="id_matiere2" class="form-control" data-error="Choisir la matière." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_enseignant">Enseignant:</label>
                        <select name="id_enseignant" id="id_enseignant" class="form-control" data-error="Choisir l'enseigant pour cette matière." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn save_matiere_activite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- formulaire d'ajout des matières aux tps -->
<!--div class="modal fade" id="addMatiereTp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h6 class="modal-title" id="myModalLabel">Ajouter une matière à cette activité</h6>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group" id="dateMatiereActivites"></div>
                    <div class="form-group">
                        <label class="control-label" for="dureeMatiere">Durée:</label>
                        <select name="dureeMatiere" id="dureeMatiere" class="form-control" data-error="Choisir une durée." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneauMatiere">Creneau horaire:</label>
                        <select name="id_creneauMatiere" id="id_creneauMatiere" class="form-control" data-error="Choisir un créneau horaire." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_matiere">Matière:</label>
                        <select name="id_matiere" id="id_matiere" class="form-control" data-error="Choisir la matière." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_surveillant">Surveillant:</label>
                        <select name="id_surveillant" id="id_surveillant" class="form-control" data-error="Choisir un surveillant pour cette matière." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group" id="idSession">
                        <label class="control-label" for="id_session">Session:</label>
                        <select name="id_session" id="id_session" class="form-control" data-error="Choisir la sessionde cette activité." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn save_matiere_activite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div-->

<!-- formulaire d'ajout d'une classe à une activité -->
<div class="modal fade" id="addClasse" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h6 class="modal-title" id="myModalLabel">Ajouter une classe</h6>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group"  style="">
                        <label class="control-label" for="id_classe">Classe :</label>
                        <select name="id_classe" id="id_classe" class="form-control" data-error="Choisir une classe." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn saveClasseActivite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- formulaire d'ajout d'une Salle à une activité -->
<div class="modal fade" id="addSalle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h6 class="modal-title" id="myModalLabel">Ajouter une salle</h6>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group" id="dateSaleDispos"></div>
                    <div class="form-group">
                        <label class="control-label" for="dureesaledispo">Durée:</label>
                        <select name="dureesaledispo" id="dureesaledispo" class="form-control" data-error="Choisir une durée." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneauSalleDispo">Creneau horaire:</label>
                        <select name="id_creneauSalleDispo" id="id_creneauSalleDispo" class="form-control" data-error="Choisir un créneau horaire." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="salleActivite">Salle :</label>
                        <select name="salleActivite" id="salleActivite" class="form-control" data-error="Choisir une sale." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn saveSalleActivite btn-success">Submit</button>
                        <button type="reset" class="btn btn-warning crud-reset-edit">Effacer</button>
                        <button class="btn btn-default close crud-close-edit" data-dismiss="modal" aria-label="Close">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section("script-modal")
<script type="text/javascript">

maxDateAnnee = "2018-08-05";
//alert(dateCourante+" "+heureCourante);

$(document).ready(function (){

    /**
     * gestion du modal d'activite
     */
    getOptionAnnee("anneeAcdivite");
    getOptionSemestre("idSemestreActivite");
    $("#idSemestreActivite").change(function(){
        idSemestreActivite = $("#idSemestreActivite").val();
        getOptionNiveau("id_niveau",idSemestreActivite);
    });
    getDatePaticularDate("dateDebutActivites","dateDebutActivite","Date de debut :",dateCourante,maxDateAnnee);
    $('#dateDebutActivite').change(function(){
        dateDebutActivite = $('#dateDebutActivite').val();
        getDatePaticularDate("dateFinActivites","dateFinActivite","Date de fin :",dateDebutActivite,maxDateAnnee);
    });
    getOptionType("type_activite");
    $("#type_activite").change(function(){
        type_activite=$("#type_activite").val();
        if(type_activite=="examen"){
            $("#typeExamens").html('' +
            '<label class="control-label" for="typeExamen">Type d\'examens:</label>' +
            '<select id="typeExamen"  name="typeExamen" class="form-control"  data-error="Choisir le typpe de cet examen" required >' +
            '<option value="">-----</option>'+
            '<option value="normale">Normale</option>'+
            '<option value="rattrapage">Rattrapage</option>'+
            '<div class="help-block with-errors"></div>');
        }else{
            $("#typeExamens").html('');
        }
    });



    /**
    * controle du modale de matiere
    */
    //getDatePaticularDate("dateMatiereActivites","dateMatiereActivite","Date :",dateCourante,maxDateAnnee);
    getOptionDuree("dureeMatiere");
    $("#dureeMatiere").change(function(){
        dureeMatiere = $("#dureeMatiere").val();
        getOptionCreneau("id_creneauMatiere",dureeMatiere);
        getOptionSurveillant("id_surveillant",dureeMatiere);
    });
    getOptionMatiere("id_matiere");
    getOptionSession("id_session");

    getOptionDuree("dureeMatiere2");
    $("#dureeMatiere2").change(function(){
        dureeMatiere = $("#dureeMatiere2").val();
        getOptionCreneau("id_creneauMatiere2",dureeMatiere);
        getOptionEnseignant("id_enseignant",dureeMatiere);
    });
    getOptionMatiere("id_matiere2");

    /**
     * controle du modale de salle
    */
    getOptionDuree("dureesaledispo");
    $("#dureesaledispo").change(function(){
        dureesaledispo = $("#dureesaledispo").val();
        getOptionCreneau("id_creneauSalleDispo",dureesaledispo);
        $("#id_creneauSalleDispo").change(function(){
            id_creneauSalleDispo = $("#id_creneauSalleDispo").val();
            dateSaleDispo = $("#dateSaleDispo").val();
            if(dateSaleDispo){
                getOptionSalleLibre("salleActivite",dateSaleDispo, id_creneauSalleDispo);
            }else{
                $("#id_creneauSalleDispo").val("");
                tostAvertissement("la valeur de la date est invalite");
            }
        });
    });

 });

</script>
@endsection