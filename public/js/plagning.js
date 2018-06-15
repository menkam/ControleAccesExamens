$(document).ready(function(){

	getOptionAnnee("datePlanningExamen");
	getOptionClasse("classePlanningExamen");
	var datePlanningExamen = $("#datePlanningExamen").val();
	var classePlanningExamen = $("#classePlanningExamen").val();

	$("#classePlanningExamen").change(function(){
			getOptionActivite(
			"idActiviterPlanningExamen",
			datePlanningExamen,
			classePlanningExamen,
			"examen"
		);
	});
	/*if(datePlanningExamen || classePlanningExamen){
		
	}else{
		$("#idActiviterPlanningExamen").click(function(){
			tostAvertissement("il faut choisir une annee academique et classe !!!");
		});
	}*/

});

function getOptionActivite(position,idAnnee,idClasse,typeActivite) {
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getAnneeAcademique',
        data:{
        	idAnnee:idAnnee,
        	idClasse:idClasse,
        	typeActivite:typeActivite
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].type_activite+'( du '+data[i].date_debut_activite+' au '+data[i].date_fin_activite+') </option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}