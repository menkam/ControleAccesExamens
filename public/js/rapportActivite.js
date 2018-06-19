
 var data1;
$(document).ready(function(){

    var pp = $("#pp");
    var pt = $("#pt");
    var pa = $("#pa");
    var rowEtudiantPresent = $("#rowEtudiantPresent");
    var rowEtudiantTricheur = $("#rowEtudiantTricheur");
    var rowEtudiantAbsent = $("#rowEtudiantAbsent");
    var table = "";
   

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
                
                if(typeActivite=="normale" || typeActivite=="rattrapage"){
                    table = "examens";
                }else{
                    if(typeActivite=="tp")
                        table = typeActivite+"s";
                    else
                        table = typeActivite;
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

        $("#resultatRapport").hide();
        chargement("chargement");
        var typeActiviteRapport = $("#typeActiviteRapport").val();
        var idMatiere = $("#idMatiere").val();
        var idActivite = filterInfo(typeActiviteRapport,"g");
        var typeActivite = filterInfo(typeActiviteRapport,"d");

        setTimeout(function(){
            //alert(idActivite+"  "+idMatiere+"  "+table);
            getListeEtudiant(
                "getListePresence",
                "pp",
                "rowEtudiantPresent",
                { idActivite:idActivite, idMatiere:idMatiere, table:table }
            );

            getListeEtudiant(
                "getListeTricheur",
                "pt",
                "rowEtudiantTricheur",
                { idActivite:idActivite, idMatiere:idMatiere, table:table }
            );
            
            getListeEtudiant(
                "getListAbsent",
                "pa",
                "rowEtudiantAbsent",
                {idActivite:idActivite, idMatiere:idMatiere, table:table}
            );

            //calcule();

            $("#resultatRapport").show('slideDown');
            $("#chargement").hide();
        },1000);

    });
});

function calcule(position,data,eff)
{
    var position = $("."+position);
    var eff = parseInt(eff);
    var pourcentage = 0;
    $.ajax({
        type: "POST",
        dataType: 'json',
        url:'getNombre',
        data:data,
        success: function(data){
            if(data.length>0){
                if(data[0].count>0){
                    position.empty();
                    pourcentage = eff*100 / data[0].count;
                    position.append(pourcentage);
                }else{
                    position.empty();
                    position.append("0");
                }
            }
        }
    }); 
}

function getListeEtudiant(url,position,position2,data1) 
{
    var rows = '';
    var num = 0;
    var position2 = $("#"+position2);
    $.ajax({
        type: "POST",
        dataType: 'json',
        url:url,
        data:data1,
        success: function(data){
            if(data.length>0){
                for(var i= 0; i < data.length; i++) {
                    //alert(data[i].libelle_annee);
                    rows = rows + '<tr>';
                    rows = rows + '<td>'+(num+1)+'</td>';
                    rows = rows + '<td>'+data[i].matricule_etudiant+'</td>';
                    rows = rows + '<td>'+data[i].name+'</td>';
                    rows = rows + '<td>'+data[i].prenom+'</td>';
                    rows = rows + '<td>'+data[i].date_nais+'</td>';                
                    rows = rows + '<td>'+data[i].regime+'</td>';
                    rows = rows + '</tr>';
                    num++;
                }
            }else{
                rows = rows + '<tr><td colspan="6" style="text-aling: center;">Pas d\'Etudiant</td></tr>';
            }
            $("#"+position).empty();
            position2.empty();
            setTimeout(function(){
                calcule(position,data1,num);
                position2.append(rows);
            },100);
        }
    });    
}

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
                position.append(rows);
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
                position.append(rows);
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