@extends('layouts.temp')
@section('titre','Activité en cours')
@section('stylesheets')
<script type="text/css">

</script>
@endsection
@section('page_content')
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Choisir une ativité</h3>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_panel">
                    <div class="row table-responsive">                        
                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th class="column-title"># </th>
                                <th class="column-title">Matricule </th>
                                <th class="column-title">Nom Prénom </th>
                                <th class="column-title">Email </th>
                                <th class="column-title">Date Nais. </th>
                                <th class="column-title">Régime </th>
                                <th class="column-title">Etat </th>
                            </tr>
                            </thead>
                            <tbody id="lignesListeEtudiantEnSalle"></tbody>
                        </table>                        
                    </div>
                </div><br/><br>      
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script type="text/javascript">
var intervalListeEtudiant;
clearInterval(intervalListeEtudiant);
    
    intervalListeEtudiant = setInterval("AfficherListeEtudiantEnSelle()",1000);
    //$('#divListeEtudiantEnSalle').show('slow');

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$(document).ready(function(){
    alert("test");

});

function AfficherListeEtudiantEnSelle(){
    var date = dateCourante;
    var heure = heureCourante;
    var position = $('#lignesListeEtudiantEnSalle');
    var infoSalle = $('#infoSalle');
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
            idActivite:'55'
        }
    }).done(function (data) {
        if(data.length > 0){
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
            //infoSalle.append('<h2>'+libelleSalle+' (<b>'+codeSalle +'</b>)</h2>')
            position.empty();
            position.append(rows).slideDown();

        }else
            position.append('<tr><td colspan="7">Pas d\'"tudiants pour l\'instant...</td></tr>').slideDown();
    });
    //alert(idActivite);
}
</script>
@endsection
