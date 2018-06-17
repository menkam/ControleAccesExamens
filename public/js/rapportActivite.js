

$(document).ready(function(){

    var pp = $("#pp");
    var pt = $("#pt");
    var pa = $("#pa");
    var rowEtudiantPresent = $("#rowEtudiantPresent");
    var rowEtudiantTricheur = $("#rowEtudiantTricheur");
    var rowEtudiantAbsent = $("#rowEtudiantAbsent");

	getOptionAnnee("idDatePlanning");

	$("#idDatePlanning").change(function(){
		getOptionClasse("idClassePlanning");
		$("#idActiviterPlanning").empty();
        $("#typeActivitePlanning").empty();
        $("#resultatPlanning").hide('slideDown');

		$("#idClassePlanning").change(function(){            
            var idClassePlanning = $("#idClassePlanning").val();
            getOptionTypeActivite("typeActivitePlanning",idClassePlanning);
            $("#idActiviterPlanning").empty();

            $("#typeActivitePlanning").change(function(){

                var typeActivitePlanning = $("#typeActivitePlanning").val();
    			var idDatePlanning = $("#idDatePlanning").val();
                $("#idActiviterPlanning").empty();
    			
    			getOptionActivite(
    				"idActiviterPlanning",
    				idDatePlanning,
    				idClassePlanning,
    				typeActivitePlanning
    			);
            });    
		});
	});

	$("#idActiviterPlanning").click(function(){
		if($("#typeActivitePlanning").val()==''){
			tostAvertissement("il faut d'abord choisir le type d'activité !!!");
		}
	});
    $("#typeActivitePlanning").click(function(){
        if($("#idClassePlanning").val()==''){
            tostAvertissement("il faut d'abord choisir une classe !!!");
        }
    });
    $("#idClassePlanning").click(function(){
        if($("#idDatePlanning").val()==''){
            tostAvertissement("il faut d'abord choisir une annee !!!");
        }
    });


    $("#btnAfficherPlanning").click(function(e){
        e.preventDefault();

        var idActivite = $("#idActiviterPlanning").val();
        var typeActivite = $("#typeActivitePlanning").val();

        

    });

});

function getListePresence(position,idAnnee,idClasse,typeActivite) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getOptionActivite',
        data:{
            idAnnee:idAnnee,
            idClasse:idClasse,
            typeActivite:typeActivite
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].type_activite+' (Du '+data[i].date_debut_activite+' Au '+data[i].date_fin_activite+') </option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

function getOptionActivite(position,idAnnee,idClasse,typeActivite) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getOptionActivite',
        data:{
        	idAnnee:idAnnee,
        	idClasse:idClasse,
        	typeActivite:typeActivite
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].type_activite+' (Du '+data[i].date_debut_activite+' Au '+data[i].date_fin_activite+') </option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

function getOptionTypeActivite(position,idClasse) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getOptionTypeActivite',
        data:{ idClasse:idClasse },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].type_activite+'">'+data[i].type_activite+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}