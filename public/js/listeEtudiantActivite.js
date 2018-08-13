
$(document).ready(function(){
    $("#Afficher").hide();

    getOptionAnnee("id_annee");
    getOptionSemestre("id_semestre");
    getOptionSession("id_session");
    getOptionType("typeActivite");    
    $("#typeActivite").change(function(){
        //alert($("#typeActivite").val());
        if($("#typeActivite").val()=="examen"){
            $("#divTypeActivite").show();
        }else{
            $("#divTypeActivite").hide();
        }
    });        
    getOptionNiveau("id_niveau");
    $("#id_niveau").change(function(){
        getOptionClasse2("id_classe",$("#id_niveau").val());
    });
    
    $("#id_classe").change(function(){
        getOptionMatiere("id_matiere");
    });
    

    $("#id_matiere").change(function(){
        $("#Afficher").show();

        $("#Afficher").click(function(e){
            e.preventDefault();
            //$("#Afficher").hide();
            var position = $("#ligneEtudiant");
            var rows;

            var id_annee =  $("#id_annee").val();
            var id_cursus =  $("#id_cursus").val();
            var id_classe =  $("#id_classe").val();
            var id_semestre =  $("#id_semestre").val();
            var typeActivite =  $("#typeActivite").val();
            var id_session =  $("#id_session").val();
            var id_niveau =  $("#id_niveau").val();
            var id_matiere =  $("#id_matiere").val();

            $.ajax({
                type: "POST",
                dataType: 'json',
                url: 'getListEtudiant',
                data: {
                    id_annee:id_annee,
                    id_classe:id_classe,
                    id_semestre:id_semestre,
                    typeActivite:typeActivite,
                    id_session:id_session,
                    id_niveau:id_niveau,
                    id_matiere:id_matiere
                },
                success: function(data){
                    //alert(data);
                    for(var i= 0; i < data.length; i++) {
                        rows = rows + '<tr>';
                        rows = rows + '<td>'+(i+1)+'</td>';
                        rows = rows + '<td>'+data[i].matricule_etudiant+'</td>';
                        rows = rows + '<td>'+data[i].name+'</td>';
                        rows = rows + '<td>'+data[i].prenom+'</td>';
                        rows = rows + '<td>'+data[i].date_nais+'</td>';
                        rows = rows + '<td>'+data[i].sexe+'</td>';
                        rows = rows + '<td>'+data[i].regime+'</td>';
                        rows = rows + '</tr>';
                    }
                    position.empty();
                    position.append(rows).slideDown();
                    $(".ListeEtudiant").show();
                }
            });
        });
    });


    /*$("#id_annee2").change(function(){
        $("#id_cursus").empty();
        $("#id_niveau").empty();
        $("#id_classe").empty();
        $("#id_semestre").empty();
        $("#typeActivite").empty();
        $("#id_session").empty();
        getOptionCursus("id_cursus");
        $("#id_cursus").change(function(){
            getOptionNiveau("id_niveau");
            $("#id_niveau").change(function(){
                getOptionClasse("id_classe");
                $("#id_classe").change(function(){
                    getOptionSemestre("id_semestre");
                    $("#id_semestre").change(function(){
                        getOptionType("typeActivite");
                        $("#typeActivite").change(function(){
                            if($("#typeActivite").val()==2){
                                getOptionSession("id_session");
                                $("#id_session").change(function(){
                                    getOptionMatiere();
                                });
                            }else{
                                getOptionMatiere("id_matiere");
                                $("#id_session").empty();
                            }
                            $("#id_matiere").change(function(){
                                $("#Afficher").show();

                                $("#Afficher").click(function(e){
                                    e.preventDefault();
                                    //$("#Afficher").hide();
                                    var position = $("#ligneEtudiant");
                                    var rows;

                                    var id_annee =  $("#id_annee").val();
                                    var id_cursus =  $("#id_cursus").val();
                                    var id_classe =  $("#id_classe").val();
                                    var id_semestre =  $("#id_semestre").val();
                                    var typeActivite =  $("#typeActivite").val();
                                    var id_session =  $("#id_session").val();
                                    var id_niveau =  $("#id_niveau").val();
                                    var id_matiere =  $("#id_matiere").val();

                                    $.ajax({
                                        type: "POST",
                                        dataType: 'json',
                                        url: 'getListEtudiant',
                                        data: {
                                            id_annee:id_annee,
                                            id_classe:id_classe,
                                            id_semestre:id_semestre,
                                            typeActivite:typeActivite,
                                            id_session:id_session,
                                            id_niveau:id_niveau,
                                            id_matiere:id_matiere
                                        },
                                        success: function(data){
                                            //alert(data);
                                            for(var i= 0; i < data.length; i++) {
                                                rows = rows + '<tr>';
                                                rows = rows + '<td>'+(i+1)+'</td>';
                                                rows = rows + '<td>'+data[i].matricule_etudiant+'</td>';
                                                rows = rows + '<td>'+data[i].name+'</td>';
                                                rows = rows + '<td>'+data[i].prenom+'</td>';
                                                rows = rows + '<td>'+data[i].date_nais+'</td>';
                                                rows = rows + '<td>'+data[i].sexe+'</td>';
                                                rows = rows + '<td>'+data[i].regime+'</td>';
                                                rows = rows + '</tr>';
                                            }
                                            position.empty();
                                            position.append(rows).slideDown();
                                            $(".ListeEtudiant").show();
                                        }
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });
    });*/

    $("#Effacer").click(function(){
        getOptionAnnee("id_annee");
    });
});

