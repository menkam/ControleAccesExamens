$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// Get option Année Académique
function getOptionAnnee() {
    var rows = '<option value="">-----</option>';
    var position = $("#id_annee");
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
function getOptionNiveau() {
    var rows = '<option value="">-----</option>';
    var position = $("#id_niveau");
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
function getOptionCursus() {
    var rows = '<option value="">-----</option>';
    var position = $("#id_cursus");
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
function getOptionClasse() {
    var rows = '<option value="">-----</option>';
    var position = $("#id_classe");
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
function getOptionSemestre() {
    var rows = '<option value="">-----</option>';
    var position = $("#id_semestre");
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
function getOptionType() {
    var rows = '<option value="">-----</option>';
    var position = $("#typeActivite");
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
function getOptionSession() {
    var rows = '<option value="">-----</option>';
    var position = $("#id_session");
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
function getOptionMatiere() {
    var rows = '<option value="">-----</option>';
    var position = $("#id_matiere");
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