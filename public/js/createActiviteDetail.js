maxDateAnnee = "2018-09-01";
//alert(dateCourante+" "+heureCourante);

$(document).ready(function (){

    $("#addActivity").click(function(){
        /**
         * gestion du modal d'activite
         */

        getOptionAnnee("anneeAcdivite");
        getOptionSemestre("idSemestreActivite");
        getOptionNiveau("id_niveau");
        getOptionDuree("duree");
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
    });


    /**
    * controle du modale de matiere
    */
    $("#btnAddMatiere").click(function(){   
    //getDatePaticularDate("dateMatiereActivites","dateMatiereActivite","Date :",dateCourante,maxDateAnnee);
    
        getOptionCreneau("id_creneauMatiere",dureeActiviteCourante);
        getOptionSurveillant("id_surveillant",dureeActiviteCourante);
        getOptionMatiere("id_matiere");
        getOptionSession("id_session");

        getOptionCreneau("id_creneauMatiere2",dureeActiviteCourante);
        getOptionEnseignant("id_enseignant",dureeActiviteCourante);
        getOptionMatiere("id_matiere2");
    });


    /**
     * controle du modale de salle
    */
    $("#addSalle2").click(function(){    
        getOptionCreneau("id_creneauSalleDispo",dureeActiviteCourante);
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
    $("#addClasse2").click(function(){
        getOptionClasse2("idClasseActivite",idNiveauActiviteCourante);
    });

 });
