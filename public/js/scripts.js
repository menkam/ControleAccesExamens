$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Get option Année Académique
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

// Get option Niveau
function getOptionNiveau(position,idsemestre) {
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

// Get option Cursus
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

// Get option Classe
function getOption(position) {
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

// Get option Semestre
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

// Get option type_activite
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
    rows = rows + '<option value="1">Cours</option>';
    rows = rows + '<option value="2">Normale</option>';
    rows = rows + '<option value="3">TP</option>';
    position.empty();
    position.append(rows).slideDown();
}

// Get option Session
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

// Get option Matière
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

// Get option creno
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

// Get option surveillant
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

// Get option duree
function getOptionDuree(position) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    rows = rows + '<option value="45">45Min</option>';
    rows = rows + '<option value="1">01H</option>';
    rows = rows + '<option value="2">02H</option>';
    position.empty();
    position.append(rows).slideDown();
}

// Get option salle lbre
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

function getDatePaticularDate(position,id,libelle,min,max){
    $("#"+position+"").html('' +
    '<label class="control-label" for="'+libelle+'">Date de début:</label>' +
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