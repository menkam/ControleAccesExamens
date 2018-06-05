$(document).ready(function(){
    var page = 1;
    var current_page = 1;
    var total_page = 0;
    var is_ajax_fire = 0;
    var datacurrent_page;
    var effectif_classe = 0;
    var idActivi = 0;
    //alert(dateCourante+" "+heureCourante);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    manageData();

    /* manage data list */
    function manageData() {
        $.ajax({
            dataType: 'json',
            url: url,
            data: {page:page}
        }).done(function(data) {
            total_page = data.last_page;
            current_page = data.current_page;
            $('#pagination').twbsPagination({
                totalPages: total_page,
                visiblePages: current_page,
                onPageClick: function (event, pageL) {
                    page = pageL;
                    if(is_ajax_fire != 0){
                        getPageDataActivity();
                        $("#completer").text('0');
                    }
                }
            });
            manageRow(data.data);
            is_ajax_fire = 1;
        });
    }

    // Get Page DataActivity
    function getPageDataActivity() {
        $.ajax({
            dataType: 'json',
            url: url,
            data: {page:page}
        }).done(function(data){
            manageRow(data.data);
            datacurrent_page=data;
        });
    }


// Get Page DataMatiereActivity
function getPageDataMatiereActivity(id) {
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'AjaxExamen',
        data: {idActivite:id},
        success: function(data){
            manageRowMatiereActivity(data);
            //alert('matiere trouver');
        }
    });
}

    // Get Page DataClasseActivity
    function getPageDataClasseActivity(id) {
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: 'classeActivite',
            data: {idActivite:id},
            success: function(data){
                manageRowClasseActivity(data);
                //alert("classe trouver");
            }
        });
    }

    // Get Page DataSalleActivity
    function getPageDataSalleActivity(id) {
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: 'salleActivite',
            data: {idActivite:id},
            success: function(data){
                manageRowSalleActivity(data);
                //alert("salle trouver");
            }
        });
    }

    // Add new Activity table row
    function manageRow(data) {
        var completer_init = parseInt($("#completer").text());
        var completer = 0;
        //alert (completer);
        var	rows = '';
        var nbr = 1;
        $.each( data, function( key, value ) {
            rows = rows + '<tr>';
            rows = rows + '<td>'+value.id+'</td>';
            rows = rows + '<input type="hidden" na>';
            rows = rows + '<td>'+value.id_annee+'</td>';
            rows = rows + '<td>'+value.id_semestre+'</td>';
            rows = rows + '<td>'+value.id_niveau+'</td>';
            rows = rows + '<td id="typeActiviteCourante">'+value.type_activite+'</td>';
            rows = rows + '<td>'+value.date_debut_activite+'</td>';
            rows = rows + '<td>'+value.date_fin_activite+'</td>';
            if(value.date_fin_activite >= dateCourante ){
                if(value.date_debut_activite > dateCourante ){
                    rows = rows + '<td><b><strong style="color: #f89406">En attentee</strong></b></td>';
                }else{
                    rows = rows + '<td><b><strong style="color: #32cd32">En cours</strong></b></td>';
                }
            }else{
                rows = rows + '<td><b><strong style="color: #AA0000">Terminée</strong></b></td>';
            }
            rows = rows + '<td data-id="'+value.id+'">';
            rows = rows + '<button data-toggle="modal" title="Afficher" data-target="#show-item" class="btn btn-info show-item fa fa-eye"></button> ';
            rows = rows + '<button data-toggle="modal" title="Modifier" data-target="#edit-item"class="btn btn-primary fa fa-edit"></button> ';
            rows = rows + '<button title="Supprimer" class="btn btn-danger removeActivity fa fa-trash"></button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
            nbr++;

            idActiviteCourante=value.id;
            completer=25;
            getPageDataMatiereActivity(value.id);
            getPageDataClasseActivity(value.id);
            getPageDataSalleActivity(value.id);
            getDatePaticularDate("dateMatiereActivites","dateMatiereActivite","Date :",value.date_debut_activite,value.date_fin_activite);
            getDatePaticularDate("dateSaleDispos","dateSaleDispo","Date de la matiere:",value.date_debut_activite,value.date_fin_activite);
            //getDateActivite(value.date_debut_activite,value.date_fin_activite);
        });

        $("#completer").text(completer+completer_init);
        $("#lignes_activites").html(rows);

    }

    // Add new Matiere_activity table row
    function manageRowMatiereActivity(data) {
        var completer_init = parseInt($("#completer").text());
        var completer = 0;
        var position = $('#lignes_matiere_activite');
        var rows = '';
        for(var i= 0; i < data.length; i++){
            rows = rows + '<tr>';
            rows = rows + '<td>'+(i+1)+'</td>';
            rows = rows + '<td>'+data[i].date_examen+'</td>';
            rows = rows + '<td>'+data[i].libelle_creneaux+'</td>';
            rows = rows + '<td>'+data[i].libelle_matiere+'</td>';
            rows = rows + '<td>'+data[i].name+' '+data[i].prenom+'</td>';

            rows = rows + '<td data-id="'+data[i].id+'">';

            rows = rows + '<button data-toggle="modal" title="Modifier" data-target="#editMA" class="btn btn-default edit-item fa fa-edit"></button> ';
            rows = rows + '<button title="Supprimer" class="btn btn-danger removeMatiereActivity fa fa-trash"></button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
            completer=25;
        }
        $("#completer").text(completer+completer_init);

        position.empty();
        position.append(rows).slideDown();
    }

    // Add new classe_activity table row
    function manageRowClasseActivity(data) {
        effectif_classe=0;
        var completer_init = parseInt($("#completer").text());
        var completer = 0;
        var position = $('#lignes_classe_activite');
        var rows = '';
        for(var i= 0; i < data.length; i++){
            rows = rows + '<tr>';
            rows = rows + '<td>'+(i+1)+'</td>';
            rows = rows + '<td>'+data[i].code_classe+'</td>';
            rows = rows + '<td>'+data[i].libelle_classe+'</td>';
            rows = rows + '<td>'+data[i].effectif_classe+'</td>';

            rows = rows + '<td data-id="'+data[i].id+'">';
            rows = rows + '<button data-toggle="modal" title="Modifier" data-target="#editMA" class="btn btn-default edit-item fa fa-edit"></button> ';
            rows = rows + '<button title="Supprimer" class="btn btn-danger removeClasseActivity fa fa-trash"></button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
            effectif_classe += data[i].effectif_classe;
            completer=25;
        }
        rows = rows + '<tr><td colspan="2"><b>Total Etudiants</b></td><td colspan="3"><b>'+effectif_classe+' etudiants</b></td></tr>';
        $("#completer").text(completer+completer_init);
        position.empty();
        position.append(rows).slideDown();
    }

    // Add new salle_activity table row
    function manageRowSalleActivity(data) {
        var completer_init = parseInt($("#completer").text());
        var completer = 0;
        var position = $('#lignes_salle_activite');
        var rows = '';
        for(var i= 0; i < data.length; i++){
            rows = rows + '<tr>';
            rows = rows + '<td>'+(i+1)+'</td>';
            rows = rows + '<td>'+data[i].code_salle+'</td>';
            rows = rows + '<td>'+data[i].libelle_salle+'</td>';
            rows = rows + '<td>'+data[i].nbre_places+'</td>';

            rows = rows + '<td data-id="'+data[i].id+'">';
            rows = rows + '<button data-toggle="modal" title="Modifier" data-target="#editMA" class="btn btn-default edit-item fa fa-edit"></button> ';
            rows = rows + '<button title="Supprimer" class="btn btn-danger removeSalleActivity fa fa-trash"></button>';
            rows = rows + '</td>';
            rows = rows + '</tr>';
            completer=25;
        }
        $("#completer").text(completer+completer_init);
        position.empty();
        position.append(rows).slideDown();
    }



    /*
     * Insertion des donnée
     */

    // Create new Activity
    $(".save_activite").click(function(e){
        e.preventDefault();
        //var form_action = $("#create-item").find("form").attr("action");

        var id_annee = $("#create-item").find("select[name='anneeAcdivite']").val();
        var id_semestre = $("#create-item").find("select[name='idSemestreActivite']").val();
        var id_niveau = $("#create-item").find("select[name='id_niveau']").val();
        var type_activite = $("#create-item").find("select[name='type_activite']").val();
        var date_debut_activite = $("#create-item").find("input[name='dateDebutActivite']").val();
        var date_fin_activite = $("#create-item").find("input[name='dateFinActivite']").val();

        //alert(id_annee+id_semestre+id_niveau+type_activite+date_debut_activite+date_fin_activite);

        $.ajax({
            dataType: 'json',
            type:'POST',
            url:'activiteStore',
            data:{id_annee:id_annee, id_semestre:id_semestre, id_niveau:id_niveau, type_activite:type_activite, date_debut_activite:date_debut_activite, date_fin_activite:date_fin_activite}
        }).done(function(data){
            getPageDataActivity();
            $(".modal").modal('hide');
            toastr.success('Activity Created Successfully.', 'Success Alert', {timeOut: 5000});
        }).error(function(){
            //$(".modal").modal('hide');
            toastr.error('Activity not Created.', 'Error Alert', {timeOut: 5000});
        });
    });

    // Create new MatiereActivity
    $(".save_matiere_activite").click(function(e){
        e.preventDefault();
        var form_action = $("#addMatiere").find("form").attr("action");

        var completer_init = parseInt($("#completer").text());
        var completer = 0;
        var id_activite = parseInt(idActiviteCourante);

       // alert(id_activite);

        var date_examen = $("#dateMatiere").val();
        var id_creneau = $("#id_creneau1").val();
        var id_matiere = $("#id_matiere").val();
        var id_surveillant = $("#id_surveillant").val();
        var id_session = $("#id_session").val();

        //alert("id "+id_activite+" date_examen "+date_examen+" id_creneau "+id_creneau+" id_matiere "+id_matiere+" id_surveillant "+id_surveillant+" id_session "+id_session);

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'addMatiereExamen',
            data:{
                id_ens_chef_dpt:idUser,
                id_activite:id_activite,
                id_creneau:id_creneau,
                id_matiere:id_matiere,
                id_surveillant:id_surveillant,
                date_examen:date_examen,
                id_session:id_session
            }
        }).done(function(data){
            getPageDataMatiereActivity(id_activite);
            //manageRow(data.datacurrent_page);
            $(".modal").modal('hide');
            //completer=25;
            //$("#completer").text(completer+completer_init);
            toastr.success('Matiere Add Successfully.', 'Success Alert', {timeOut: 5000});
        });

    });


    // Create new ClasseActivity
    $(".saveClasseActivite").click(function(e){
        e.preventDefault();
        var form_action = $("#addSalle").find("form").attr("action");
        var id_activite = parseInt(idActiviteCourante);
        var id_classe = $("#id_classe").val();
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'addClasseActivite',
            data:{
                id_activite:id_activite,
                id_classe:id_classe
            }
        }).done(function(data){
            getPageDataClasseActivity(id_activite);
            $(".modal").modal('hide');
            toastr.success('Matiere Add Successfully.', 'Success Alert', {timeOut: 5000});
        });
    });

    // Create new SalleActivity
    $(".saveSalleActivite").click(function(e){
        e.preventDefault();
        var form_action = $("#addSalle").find("form").attr("action");
        var id_activite = parseInt(idActiviteCourante);
        var id_salle = $("#id_salle").val();
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'addSalleActivite',
            data:{
                id_activite:id_activite,
                id_salle:id_salle
            }
        }).done(function(data){
            getPageDataSalleActivity(id_activite);
            $(".modal").modal('hide');
            toastr.success('Matiere Add Successfully.', 'Success Alert', {timeOut: 5000});
        });
    });



    /*
     * Suppréssion des données
     */

    // Remove Activity
    $("body").on("click",".removeActivity",function(){
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");

        $.ajax({
            dataType: 'json',
            type:'delete',
            url: url + '/' + id
        }).done(function(data){
            c_obj.remove();
            toastr.success('Activity Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            getPageDataActivity();
        });
    });

    // Remove Matière activite
    $("body").on("click",".removeMatiereActivity",function(){
        var id_activite = parseInt(idActiviteCourante);
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");
        //alert("l'ide = "+id);
        $.ajax({
            dataType: 'json',
            type:'delete',
            url: 'delMatiereExamen',
            data: {
                id:id
            }
        }).done(function(data){
            c_obj.remove();
            toastr.success('Matière Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            getPageDataMatiereActivity(id_activite);
        });
    });


    // Remove classe activite
    $("body").on("click",".removeClasseActivity",function(){
        var id_activite = parseInt(idActiviteCourante);
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");

        $.ajax({
            dataType: 'json',
            type:'delete',
            url: 'delClasseActivite',
            data: {
                id:id
            }
        }).done(function(data){
            c_obj.remove();
            toastr.success('Activity Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            getPageClasseActivity(id_activite);
        });
    });

    // Remove salle activite
    $("body").on("click",".removeSalleActivity",function(){
        var id_activite = parseInt(idActiviteCourante);
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");

        $.ajax({
            dataType: 'json',
            type:'delete',
            url: 'delSalleActivite',
            data: {
                id:id
            }
        }).done(function(data){
            c_obj.remove();
            toastr.success('Activity Deleted Successfully.', 'Success Alert', {timeOut: 5000});
            getPageSalleActivity(id_activite);
        });
    });


    /*
     * Modification des données
    */
    // Edit Activity
    $("body").on("click",".edit_activite",function(){
        var id = $(this).parent("td").data('id');
        var id_annee = $(this).parent("td").prev("td").text();
        var id_semestre = $(this).parent("td").prev("td").text();
        var id_niveau = $(this).parent("td").prev("td").text();
        var type_activite = $(this).parent("td").prev("td").text();
        var date_debut_activite = $(this).parent("td").prev("td").text();
        var date_fin_activite = $(this).parent("td").prev("td").text();

        $("#edit-item").find("input[name='id_annee']").val(id_annee);
        $("#edit-item").find("input[name='id_semestre']").val(id_semestre);
        $("#edit-item").find("input[name='id_niveau']").val(id_niveau);
        $("#edit-item").find("input[name='type_activite']").val(type_activite);
        $("#edit-item").find("input[name='date_debut_activite']").val(date_debut_activite);
        $("#edit-item").find("input[name='date_fin_activite']").val(date_fin_activite);

        $("#edit-item").find("form").attr("action",url + '/' + id);

    });

    // Updated new Post
    $(".crud-submit-edit").click(function(e){
        e.preventDefault();
        var form_action = $("#edit-item").find("form").attr("action");

        var id_annee = $("#create-item").find("input[name='id_annee']").val();
        var id_semestre = $("#create-item").find("input[name='id_semestre']").val();
        var id_ = $("#create-item").find("input[name='id_niveau']").val();
        var type_activite = $("#create-item").find("input[name='type_activite']").val();
        var date_debut_activite = $("#create-item").find("input[name='date_debut_activite']").val();
        var date_fin_activite = $("#create-item").find("input[name='date_fin_activite']").val();

        $.ajax({
            dataType: 'json',
            type:'PUT',
            url: form_action,
            data:{id_annee:id_annee, semestre:semestre, niveau:niveau, type_activite:type_activite, date_debut_activite:date_debut_activite, date_fin_activite:date_fin_activite}
        }).done(function(data){
            getPageDataActivity();
            $(".modal").modal('hide');
            toastr.success('Activity Updated Successfully.', 'Success Alert', {timeOut: 5000});
        });
    });


    function getDateActivite(positin,id,min, max){
        $("#date_matiere_activite").html('' +
        '<label class="control-label" for="date_matiere">Date:</label>'+
        '<input id="dateMatiere" type="date" name="date_matiere" class="form-control" min="'+min+'" max="'+max+'" data-error="Choisr la une date." required >'+
        '<div class="help-block with-errors"></div>');
    }
});