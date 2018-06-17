

$(document).ready(function(){

    var pp = $("#pp");
    var pt = $("#pt");
    var pa = $("#pa");
    var rowEtudiantPresent = $("#rowEtudiantPresent");
    var rowEtudiantTricheur = $("#rowEtudiantTricheur");
    var rowEtudiantAbsent = $("#rowEtudiantAbsent");

	getOptionAnnee("idDateRapport");

	$("#idDateRapport").change(function(){
		getOptionClasse("idClasseRapport");
		$("#idMatiere").empty();
        $("#typeActiviteRapport").empty();
        $("#resultatRapport").hide('slideDown');

		$("#idClasseRapport").change(function(){            
            var idClasseRapport = $("#idClasseRapport").val();
            getOptionTypeActivite("typeActiviteRapport",idClasseRapport);
            $("#idMatiere").empty();

            $("#typeActiviteRapport").change(function(){

                var typeActiviteRapport = $("#typeActiviteRapport").val();
                var idActivite = filterInfo(typeActiviteRapport,"g");
                var typeActivite = filterInfo(typeActiviteRapport,"d");
    			var idDateRapport = $("#idDateRapport").val();
                var table = "";
                if(typeActivite=="normale" || typeActivite=="rattrapage"){
                    table = "public.examens";
                }else{
                    if(typeActivite=="tp")
                        table = "public."+typeActivite+"s";
                    else
                        table = "public."+typeActivite;
                }

                $("#idMatiere").empty();
    			
    			getOptionMatiere(
    				"idMatiere",
    				idActivite,
                    table
    			);
            });    
		});
	});

	$("#idMatiere").click(function(){
		if($("#typeActiviteRapport").val()==''){
			tostAvertissement("il faut d'abord choisir le type d'activité !!!");
		}
	});
    $("#typeActiviteRapport").click(function(){
        if($("#idClasseRapport").val()==''){
            tostAvertissement("il faut d'abord choisir une classe !!!");
        }
    });
    $("#idClasseRapport").click(function(){
        if($("#idDateRapport").val()==''){
            tostAvertissement("il faut d'abord choisir une annee !!!");
        }
    });

    $("#btnAfficherRapport").click(function(e){
        e.preventDefault();

        var idMatiere = $("#idMatiere").val();
        var typeActivite = $("#typeActiviteRapport").val();
    });

});

function getOptionMatiere(position,idActivite,table) 
{
    var rows = '<option value="">-----</option>';
    var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getOptionMatiere',
        data:{ 
            idActivite:idActivite,
            table:table
        },
        success: function(data){
            for(var i= 0; i < data.length; i++) {
                //alert(data[i].libelle_annee);
                rows = rows + '<option value="'+data[i].id+'">'+data[i].code_matiere+' => ('+data[i].libelle_matiere+') </option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

function getListePresence(position,idAnnee,idClasse,typeActivite) 
{
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

function getOptionTypeActivite(position,idClasse) 
{
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
                rows = rows + '<option value="'+data[i].id+'@'+data[i].type_activite+'">'+data[i].type_activite+'</option>';
                position.empty();
                position.append(rows).slideDown();
            }
        }
    });
}

//extraire l'id et le type d'activite dans une chiane
function filterInfo(info,position)
{
    var N = info.length;
    var result = "";
    var i = 0;

    if(position=="g"){
        result = "";
        do{
            result += info[i];
            i++;
        }while(info[i] != "@");
    }

    if(position=="d"){
        var start = 0;
        result = "";
        for(var j=0; j<info.length; j++){
            if(info[j]=="@"){
                start = 1;
            }
            else{
                if(start)
                result += info[j];
            }
        }
    }
    return result;
}