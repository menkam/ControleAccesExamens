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

    /**
     * controle modale d'ajout d'une classe
     */
    getOptionClasse("idClasseActivite");

 });
