$(document).ready(function(){

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

        $("#resultatPlanning").hide();
        chargement("chargement");
		var idActivite = $("#idActiviterPlanning").val();
        var typeActivite = $("#typeActivitePlanning").val();

		setTimeout(function(){
            getMatierePlanning(typeActivite,idActivite);
            $("#resultatPlanning").show();
            $("#chargement").hide();
        },1000);
	});

});


function getMatierePlanning(typeActivite,idActivite) {
    var nomClasse = $("#nomClasse");
    var descpActivite = $("#descpActivite");
    var enTetetabPlanning = $("#enTetetabPlanning");
    var contenuTabPlanning = $("#contenuTabPlanning");
    var rowsH = '';
    var rowsB = '';


    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getMatierePlanning',
        data:{
        	idActivite:idActivite,
        	typeActivite:typeActivite
        },
        success: function(data){
        	nomClasse.empty();
        	nomClasse.append('<b>CLASSE '+data[0].libelle_classe+'</b> (Effectif : '+data[0].effectif_classe+' Etudiants)');
        	descpActivite.empty();
        	if(data[0].type_activite=="normale" || data[0].type_activite=="rattrapage"){
        		descpActivite.append('PLANNING EXAMEN DE '+data[0].type_activite+' '+data[0].code_classe+' DU '+data[0].date_debut_activite+' AU '+data[0].date_fin_activite+'');
        	}
        	else{
        		descpActivite.append('PLANNING '+data[0].type_activite+' '+data[0].code_classe+' DU '+data[0].date_debut_activite+' AU '+data[0].date_fin_activite+'');
        	}
            var dateOld;
            var nbr = 1;
            rowsH = '<tr><th></th>';
            rowsB = '<tr><td style="text-align: center; width: 40px;">'+data[0].datem+'444</td>';
            for(var i= 0; i < data.length; i++) {
                if(data[0].datem == data[i].datem){
                    if(nbr==3){
                        rowsH = rowsH +'<th style="text-align: center; width: 15px;">pause</th>';
                        rowsB = rowsB +'<td></td>';
                        nbr++;
                    }
                    if(nbr==6){
                        rowsH = rowsH +'</tr>';
                        rowsB = rowsB +'</tr><tr><td style="text-align: center; width: 40px;">'+data[(i+1)].datem+'</td>';
                        nbr = 1;
                    }
                    rowsH = rowsH +'<th  style="text-align: center; width: 40px;">'+data[i].libelle_creneaux+'</th>';
                    rowsB = rowsB +'<td  style="text-align: center; width: 40px;">'+data[i].libelle_matiere+'</td>';
                    nbr++; 

                }else{

                    if(nbr==3){
                        rowsB = rowsB +'<td style="text-align: center; width: 15px;"></td>';
                        nbr++;
                    }
                    if(nbr==6){
                        rowsB = rowsB +'</tr><tr><td  style="text-align: center; width: 40px;">'+data[(i+1)].datem+'</td>';
                        nbr = 1;
                    }
                    rowsB = rowsB +'<td  style="text-align: center; width: 40px;">'+data[i].libelle_matiere+'</td>';
                    nbr++;
                }
            }
            
            enTetetabPlanning.empty();
            enTetetabPlanning.append(rowsH);
            contenuTabPlanning.empty();
            contenuTabPlanning.append(rowsB);
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
                position.append(rows);
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
                position.append(rows);
            }
        }
    });
}