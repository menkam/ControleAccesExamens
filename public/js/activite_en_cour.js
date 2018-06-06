
//alert(dateCourante);
//alert(heureCourante);

dateCourante = dateCourante;
heureCourante = heureCourante;

/*
 * variable globale pour les Etudiants en salle de compos
 */
var idActiviteEnCours;
var typeActiviteChoisi;
var idExamentEnCours;
var idTpEnCours;
var idCoursEnCours;
var idCcEnCours;

intitPage();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

    $("#btn-examen").click(function(){
        typeActiviteChoisi = 'Examen';
        var date = dateCourante;
        var heure = heureCourante;
        var position = $('#ligneExamenEnCours');
        var rows = '';
        //alert(date+heure);
        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'getListExamenEnCour',
            data:{
                date:date,
                heure:heure
            }
        }).done(function(data){
            for(var i= 0; i < data.length; i++){
                rows = rows + '<tr>';
                rows = rows + '<td>'+(i+1)+'</td>';
                rows = rows + '<td>'+data[i].libelle_creneaux+'</td>';
                rows = rows + '<td>'+data[i].libelle_matiere+'</td>';
                rows = rows + '<td>'+data[i].code_classe+'</td>';
                rows = rows + '<td>'+data[i].libelle_session+'</td>';
                rows = rows + '<td>'+data[i].code+'</td>';
                rows = rows + '<td>'+data[i].code_departement+'</td>';
                rows = rows + '<td>'+data[i].libelle_semestre+'</td>';

                rows = rows + '<td id="AfficherListEtudiants" data-id="'+data[i].id+'">';
                rows = rows + '<a data-toggle="modal" data-target="#show-list" onclick="AfficherListeEtudiantEnSelle('+data[i].id+')"  title="Voire la liste des etudiants en salle"><i class="btn btn-info fa fa-eye"></i></a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            }
            position.empty();
            position.append(rows).slideDown();
        });

        afficherElement("examen");
        //setInterval(afficherElement,2000);
    });


    $("#btn-tp").click(function(){
        typeActiviteChoisi = 'Tp';
        var date = dateCourante;
        var heure = heureCourante;
        var position = $('#ligneTpEnCours');
        var rows = '';

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'getListTpEnCour',
            data:{
                date:date,
                heure:heure
            }
        }).done(function(data){
            for(var i= 0; i < data.length; i++){
                rows = rows + '<tr>';
                rows = rows + '<td>'+(i+1)+'</td>';
                rows = rows + '<td>'+data[i].libelle_creneaux+'</td>';
                rows = rows + '<td>'+data[i].libelle_matiere+'</td>';
                rows = rows + '<td>'+data[i].grade+' '+data[i].name+' '+data[i].prenom+'</td>';
                rows = rows + '<td>'+data[i].code_classe+'</td>';
                rows = rows + '<td>'+data[i].code+'</td>';
                rows = rows + '<td>'+data[i].code_departement+'</td>';

                rows = rows + '<td id="AfficherListEtudiants" data-id="'+data[i].id+'">';
                rows = rows + '<a data-toggle="modal" data-target="#show-list" onclick="AfficherListeEtudiantEnSelle('+data[i].id+')"  title="Voire la liste des etudiants en salle"><i class="btn btn-info fa fa-eye"></i></a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            }
            position.empty();
            position.append(rows).slideDown();
        });
        afficherElement("tp");
    });


    $("#btn-cc").click(function(){
        typeActiviteChoisi = 'Cc';
        var date = dateCourante;
        var heure = heureCourante;
        var position = $('#ligneCcEnCours');
        var rows = '';

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'getListCcEnCour',
            data:{
                date:date,
                heure:heure
            }
        }).done(function(data){
            for(var i= 0; i < data.length; i++){
                rows = rows + '<tr>';
                rows = rows + '<td>'+(i+1)+'</td>';
                rows = rows + '<td>'+data[i].libelle_creneaux+'</td>';
                rows = rows + '<td>'+data[i].libelle_matiere+'</td>';
                rows = rows + '<td>'+data[i].code_classe+'</td>';
                rows = rows + '<td>'+data[i].code+'</td>';
                rows = rows + '<td>'+data[i].code_departement+'</td>';
                rows = rows + '<td>'+data[i].libelle_semestre+'</td>';

                rows = rows + '<td id="AfficherListEtudiants" data-id="'+data[i].id+'">';
                rows = rows + '<a data-toggle="modal" data-target="#show-list" onclick="AfficherListeEtudiantEnSelle('+data[i].id+')"  title="Voire la liste des etudiants en salle"><i class="btn btn-info fa fa-eye"></i></a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            }
            position.empty();
            position.append(rows).slideDown();
        });
        afficherElement("cc");
    });


    $("#btn-cours").click(function(){
        typeActiviteChoisi = 'Cours';
        var date = dateCourante;
        var heure = heureCourante;
        var position = $('#ligneCoursEnCours');
        var rows = '';

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'getListCoursEnCour',
            data:{
                date:date,
                heure:heure
            }
        }).done(function(data){
            for(var i= 0; i < data.length; i++){
                rows = rows + '<tr>';
                rows = rows + '<td>'+(i+1)+'</td>';
                rows = rows + '<td>'+data[i].libelle_creneaux+'</td>';
                rows = rows + '<td>'+data[i].libelle_matiere+'</td>';
                rows = rows + '<td>'+data[i].code_classe+'</td>';
                rows = rows + '<td>'+data[i].grade+' '+data[i].name+' '+data[i].prenom+'</td>';
                rows = rows + '<td>'+data[i].code+'</td>';
                rows = rows + '<td>'+data[i].code_departement+'</td>';

                rows = rows + '<td id="AfficherListEtudiants" data-id="'+data[i].id+'">';
                rows = rows + '<a data-toggle="modal" data-target="#show-list" onclick="AfficherListeEtudiantEnSelle('+data[i].id+')"  title="Voire la liste des etudiants en salle"><i class="btn btn-info fa fa-eye"></i></a> ';
                rows = rows + '</td>';
                rows = rows + '</tr>';
            }
            position.empty();
            position.append(rows).slideDown();
        });
        afficherElement("cours");
    });

    //MouseOver();
});



function intitPage(){
    initElements("examen");
    initElements("tp");
    initElements("cc");
    initElements("cours");
}

function initElements(e){
    $("#btn-"+e).removeClass("active");
    $("#btn-"+e).removeClass("btn-info");
    $("#content-"+e+"-enCours").hide().slideUp();
    $("#btn-"+e).find("span").removeClass("glyphicon-folder-open");

}

function afficherElement(e){
    var classe =  $("#btn-"+e).attr("class");
    if(classe == "btn btn-round btn-primary btn-lg form-control") {

        intitPage();

        $("#btn-" + e).find("span").addClass("glyphicon-folder-open");
        //$("#btn-"+e).removeClass("btn-primary");
        $("#btn-" + e).addClass("btn-info");
        $("#btn-" + e).addClass("active");
        $("#content-" + e + "-enCours").slideDown().slow();
        $("#btn-" + e).find("span").addClass("glyphicon-folder-open");

    }
}
 function MouseOver(){
     $("#btn-examen").mouseover(function(){
         $("#badge-nbr-examen").show("slow").hide("slow");
     });
     $("#btn-tp").mouseover(function(){
         $("#badge-nbr-tp").show("slow").hide("slow");
     });
     $("#btn-cours").mouseover(function(){
         $("#badge-nbr-cours").show("slow").hide("slow");
     });
     $("#btn-cc").mouseover(function(){
         $("#badge-nbr-cc").show("slow").hide("slow");
     });
 }

function AfficherListeEtudiantEnSelle(idActivite){
    var date = dateCourante;
    var heure = heureCourante;
    var position = $('#lignesListeEtudiantEnSalle').empty();
    var infoSalle = $('#infoSalle').empty();
    var codeSalle = '';
    var libelleSalle = '';
    var rows = '';
    $.ajax({
        dataType: 'json',
        type: 'POST',
        url: 'getListEtudiantsEnSalle',
        data: {
            date:date,
            heure:heure,
            idActivite:idActivite
        }
    }).done(function (data) {
        for (var i = 0; i < data.length; i++) {
            rows = rows + '<tr>';
            rows = rows + '<td>' + (i + 1) + '</td>';
            rows = rows + '<td>' + data[i].matricule_etudiant + '</td>';
            rows = rows + '<td>' + data[i].name + ' ' + data[i].prenom + '</td>';
            rows = rows + '<td>' + data[i].email + '</td>';
            rows = rows + '<td>' + data[i].date_nais + '</td>';
            rows = rows + '<td>' + data[i].regime + '</td>';

            //rows = rows + '<td>' + data[i].statut + '</td>';
            if(data[i].statut == 0){
                rows = rows + '<td><b><strong style="color: #f89406">EN SALLE</strong></b></td>';
            }
            if(data[i].statut == 1){
                rows = rows + '<td><b><strong style="color: #32cd32">TERMINER</strong></b></td>';
            }
            if(data[i].statut == 2){
                rows = rows + '<td><b><strong style="color: #AA0000">EXCLUS</strong></b></td>';
            }
            rows = rows + '</tr>';
        }
        codeSalle = data[0].code_salle;
        libelleSalle = data[0].libelle_salle;
        position.empty();
        infoSalle.empty();
        infoSalle.append('<h2>'+libelleSalle+' (<b>'+codeSalle +'</b>)</h2>')
        position.append(rows).slideDown();
        $('#divListeEtudiantEnSalle').show('slow');
    });
    //alert(idActivite);
}