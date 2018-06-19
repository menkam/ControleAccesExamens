$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){


    $(".anneeAca_submit").click(function(e){
        e.preventDefault();
        libelle_annee = $("#libelle_annee").val();

        //alert ("preparation...."+libelle_annee);

        $.ajax({

            dataType: 'json',
            type:'POST',
            url: 'addAnneeAca',
            data:{
                libelle_annee:libelle_annee
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('Matiere Add Successfully.', 'Success Alert', {timeOut: 5000});
        });
    });

    $(".cursus_submit").click(function(e){
        e.preventDefault();

        code = $("#code").val();
        libelle = $("#libelle").val();

        //alert ("preparation...."+libelle_annee);

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'addCursus',
            data:{
                code:code,
                libelle:libelle
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('Matiere Add Successfully.', 'Success Alert', {timeOut: 5000});
        });
    });


    $(".creneau_submit").click(function(e){
        e.preventDefault();
        libelle_creneaux = $("#libelle_creneaux").val();

        //alert ("preparation...."+libelle_creneaux);

        $.ajax({

            dataType: 'json',
            type:'POST',
            url: 'addCreneaux',
            data:{
                libelle_creneaux:libelle_creneaux
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('Annee Add Successfully.', 'Success Alert', {timeOut: 5000});
        });
    });



    $(".cdepartement_submit").click(function(e){
        e.preventDefault();

        code = $("#code_departement").val();
        libelle = $("#libelle_departement").val();

        //alert ("preparation...."+libelle_annee);

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'addDepartement',
            data:{
                code_departement:code,
                libelle_departement:libelle
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('Departement Add Successfully.', 'Success Alert', {timeOut: 5000});
        });
    });

});