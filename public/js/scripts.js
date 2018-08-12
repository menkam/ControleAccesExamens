$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

/**
 * Get option Année Académique
 * @param position
 */
function getOptionAnnee(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getAnneeAcademique',
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].libelle_annee+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option Niveau
 * @param position
 * @param idsemestre
 */
function getOptionNiveau(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getNiveau',
        success: function(data){

            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].libelle_niveau+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option Cursus
 * @param position
 */
function getOptionCursus(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getCursus',
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].code+' ('+data[i].libelle+')</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option Classe
 * @param position
 */
function getOptionClasse(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getClasse',
        success: function(data){

            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].code_classe+' ('+data[i].libelle_classe+')</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

function getOptionClasse2(position,idNiveau) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getClasse2',
        data:{
            idNiveau:idNiveau
        },
        success: function(data){

            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].code_classe+' ('+data[i].libelle_classe+')</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option Semestre
 * @param position
 */
function getOptionSemestre(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getSemestre',
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].libelle_semestre+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option type_activite
 * @param position
 */
function getOptionType(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    /*$.ajax({
     type: "POST",
     dataType: 'json',
     url: 'getTypeActivite',
     success: function(data){
     for(var i= 0; i < data.length; i++) {
     rows = rows + '<option value="'+data[i].type_activite+'">'+data[i].type_activite+'</option>';
     position.empty();
     position.append(rows).slideDown();
     }
     }
     });*/
    rows = rows + '<option value="cours">Cours</option>';
    rows = rows + '<option value="examen">Examens</option>';
    rows = rows + '<option value="tp">TP</option>';
    position.empty();
    position.append(rows).slideDown();
}

/**
 * Get option Session
 * @param position
 */
function getOptionSession(position) {
        var rows = '<option value="">-----</option>';
        var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getSession',
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].libelle_session+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option Matière
 * @param position
 */
function getOptionMatiere(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getMatieres',
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].code_matiere+' ('+data[i].libelle_matiere+')</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option creno
 * @param position
 * @param duree
 */
function getOptionCreneau(position,duree) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getCreneaux',
        data:{
            duree:duree
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].libelle_creneaux+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option dureecreno
 * @param position
 */
function getOptionDuree(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getDureeCreneaux',
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].duree+'">'+data[i].duree+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option surveillant
 * @param position
 * @param duree
 */
function getOptionSurveillant(position,duree) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getSurveillant',
        data:{
            duree:duree
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].name+' '+data[i].prenom+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option enseignant
 * @param position
 * @param duree
 */
function getOptionEnseignant(position,duree) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getEnseignant',
        data:{
            duree:duree
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].name+' '+data[i].prenom+' ('+data[i].grade+')</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}


/**
 * Get option salle lbre
 * @param position
 * @param date
 * @param heure
 */
function getOptionSalleLibre(position,date, heure) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getSalleLibre',
        data:{
            date:date,
            idCreneau:heure
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                rows = rows + '<option value="'+data[i].id+'">'+data[i].code_salle+' ('+data[i].libelle_salle+') =>'+data[i].nbre_places+' places</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

/**
 * Get option Date
 * @param position
 * @param id
 * @param libelle
 * @param min
 * @param max
 */
function getDatePaticularDate(position,id,libelle,min,max){
    $("#"+position+"").html('' +
    '<label class="control-label" for="'+id+'">'+libelle+'</label>' +
    '<input type="date" id="'+id+'"  name="'+id+'" class="form-control" min="'+min+'" max="'+max+'"  data-error="Choisir une dateé" required >' +
    '<div class="help-block with-errors"></div>');
}

/**
 * Toast d'avertissement
 * @param msg
 */
function tostAvertissement(msg){
    toastr.warning(msg, 'Avertissement!!!', {timeOut: 5000});
}

/**
 * Toast d'erreur
 * @param msg
 */
function tostErreur(msg){
    toastr.error(msg, 'Erreur !!!', {timeOut: 5000});
}

function chargement(position){
    var position = $("#"+position+"");
    position.empty();
    position.append('<div><img src="images/chargementCouleur.gif" alt="chargement du contenu">');
    position.show();
}