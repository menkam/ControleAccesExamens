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
                        <label class="control-label" for="id_annee">Année Académique:</label>
                        <select name="id_annee" id="id_annee" class="form-control" data-error="Choisr l'année académique." required >
                            <option value="">....</option>
                            <option value="1">2017-2018</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="semestre">Semestre:</label>
                        <select id="id_semestre" name="id_semestre" class="form-control" data-error="Choisir le semestre." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="niveau">Niveau:</label>
                        <select id="id_niveau" name="id_niveau" class="form-control" data-error="Choisir le Niveau d'étude." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="type_activite">Type:</label>
                        <select id="type_activite" name="type_activite" class="form-control" data-error="Choisir le type de l'activité." required >
                            <option value="">....</option>
                            <option value="cours">Cours</option>
                            <option value="examen">Examen</option>
                            <option value="tp">Tp</option>
                            <option value="autre">Autre</option>
                        </select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group" id="date_debut_activite"></div>
                    <div class="form-group" id="date_fin_activite"></div>
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

<!-- formulaire d'ajout des matières -->
<div class="modal fade" id="addMatiere" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h6 class="modal-title" id="myModalLabel">Ajouter une matière à cette activité</h6>
            </div>
            <div class="modal-body">
                <form data-toggle="validator" action="" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group" id="date_matiere_activite"></div>
                    <div class="form-group">
                        <label class="control-label" for="duree">Durée:</label>
                        <select name="duree" id="duree1" class="form-control" data-error="Choisir une durée." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneau">Creneau horaire:</label>
                        <select name="id_creneau" id="id_creneau1" class="form-control" data-error="Choisir un créneau horaire." required ></select>
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
</div>

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
                    <div class="form-group" id="date1"></div>
                    <div class="form-group">
                        <label class="control-label" for="duree">Durée:</label>
                        <select name="duree" id="duree2" class="form-control" data-error="Choisir une durée." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_creneau">Creneau horaire:</label>
                        <select name="id_creneau" id="id_creneau2" class="form-control" data-error="Choisir un créneau horaire." required ></select>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="id_salle">Salle :</label>
                        <select name="id_salle" id="salleActivite" class="form-control" data-error="Choisir une sale." required ></select>
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

    getOptionClasse();
    getOptionDuree("duree1");
    getOptionDuree("duree2");
    getOptionMatiere();
    getOptionSession();

    //getDate(min, max,position,nom,id,label)
    getDate(dateCourante,maxDateAnnee,"date1","date","date","Date:");

    $("#date").change(function(){
        date = $("#date").val();
        $("#duree2").change(function(){
            duree = $("#duree2").val();
            getOptionCreneau("id_creneau2",duree);
            $("#id_creneau2").change(function(){
                id_creneau = $("#id_creneau2").val();
                getOptionSalleLibre(date, id_creneau);
            });
        });
    });

    //

    $("#id_annee").change(function(){
        getOptionSemestre();
        getOptionNiveau();
        getDateDebut();
        $("#date_debut_activite").change(function(){
            getDatefin();
        });
    });

    $("#duree1").change(function(){
        duree = $("#duree1").val();
        getOptionCreneau("id_creneau1",duree);
        getOptionSurveillant(duree);
    });
});

function getDateDebut(){
    $("#date_debut_activite").html('' +
    '<label class="control-label" for="date_debut_activite">Date de début:</label>' +
    '<input type="date" id="dateDebut"  name="date_debut_activite" class="form-control" min="'+dateCourante+'" max="'+maxDateAnnee+'" data-error="Choisir la date de début de lactivité" required >' +
    '<div class="help-block with-errors"></div>');
}
function getDatefin(){
    dateDebut = $("#dateDebut").val();
    $("#date_fin_activite").html('' +
    '<label class="control-label" for="date_fin_activite">Date de fin:</label>' +
    '<input type="date" name="date_fin_activite" class="form-control" min="'+dateDebut+'" max="'+maxDateAnnee+'" data-error="Choisir la date de début de lactivité." required />' +
    '<div class="help-block with-errors"></div>');
}
</script>
@endsection