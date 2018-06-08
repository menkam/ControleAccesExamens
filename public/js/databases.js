$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){

    /**
     * add annee Academique
     */
    $(".anneeAca_submit").click(function(e){
        e.preventDefault();
        libelle_annee = $("#libelle_annee").val();

        //alert ("libelle "+libelle_annee);

        $.ajax({

            dataType: 'json',
            type:'POST',
            url: 'addAnneeAca',
            data:{
                libelle_annee: libelle_annee
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('year Added Successfully.', 'Success Alert', {timeOut: 5000});
        }).error(function(){
            toastr.error('year not Added.', 'Error Alert', {timeOut: 5000});
        });
    });

    //add cursus

    $(".btnSubmitCursus").click(function(e){
        e.preventDefault();
        code = $("#codeCursus").val();
        libelle = $("#libelleCursus").val();

        //alert ("code "+code+" libelle"+libelle);

        $.ajax({

            dataType: 'json',
            type:'POST',
            url: 'addCursus',
            data:{
                code: code,
                libelle: libelle
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('cursus Added Successfully.', 'Success Alert', {timeOut: 5000});
        }).error(function(){
            toastr.error('cursus not Added.', 'Error Alert', {timeOut: 5000});
        });
    });


    $(".creneau_submit").click(function(e){
        e.preventDefault();

        duree = $("#dureeCreneau").val();
        libelle_creneaux = $("#libelle_creneaux").val();

        //alert (duree+libelle_creneaux);

        $.ajax({

            dataType: 'json',
            type:'POST',
            url: 'addCreneaux',
            data:{
                duree: duree,
                libelle_creneaux: libelle_creneaux
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('Annee Added Successfully.', 'Success Alert', {timeOut: 5000});
        }).error(function(){
            toastr.error('creneau not Added.', 'error Alert', {timeOut: 5000});
        });
    });



    $(".btnsubmit_departement").click(function(e){
        e.preventDefault();

        code = $("#code_departement").val();
        libelle = $("#libelle_departement").val();

       // alert ("code "+code+" libelle"+libelle)

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: 'addDepartement',
            data:{
                   code: code,
                libelle: libelle
            }
        }).done(function(data){
            $(".modal").modal('hide');
            toastr.success('Departement Added Successfully.', 'Success Alert', {timeOut: 5000});
        }).error(function(){
            toastr.error('departement not Added.', 'error Alert', {timeOut: 5000});

        });

    });
});

   $(".matieres_submit").click(function(e){
       e.preventDefault();
       code = $("#code_matiere").val();
       libelle = $("#libelle_matiere").val();
       nbr_credit = $("#nbr_credit").val();

     // alert ("code "+code+" libelle"+libelle "credit"+credit);

    $.ajax({

        dataType: 'json',
        type:'POST',
        url: 'addMatiere',
        data:{
            code: code,
            libelle: libelle,
            nbr_credit: nbr_credit
        }
    }).done(function(data){
        $(".modal").modal('hide');
        toastr.success('mtiere Added Successfully.', 'Success Alert', {timeOut: 5000});
    }).error(function(){
        toastr.error('matiere not Added.', 'Error Alert', {timeOut: 5000});
    });
});
    $(".neveau_submit").click(function(e){
        e.preventDefault();

        libelle_niveau = $("#libelle_niveau").val();

    //alert (libelle_niveau);

    $.ajax({

        dataType: 'json',
        type:'POST',
        url: 'addNiveau',
        data:{

            libelle_niveau: libelle_niveau
        }
    }).done(function(data){
        $(".modal").modal('hide');
        toastr.success('niveau Added Successfully.', 'Success Alert', {timeOut: 5000});
    }).error(function(){
        toastr.error('niveau not Added.', 'error Alert', {timeOut: 5000});
    });
});
     $(".role_submit").click(function(e){
        e.preventDefault();

         description = $("#description").val();
         name = $("#name").val();

        // alert ("name "+name+" description"+description);
    $.ajax({

        dataType: 'json',
        type:'POST',
        url: 'addNiveau',
        data:{

            name: name,
            description: description
        }
    }).done(function(data){
        $(".modal").modal('hide');
        toastr.success('role Added Successfully.', 'Success Alert', {timeOut: 5000});
    }).error(function(){
        toastr.error('role not Added.', 'error Alert', {timeOut: 5000});
    });
});
     $(".salle_submit").click(function(e){
           e.preventDefault();

         code_salle = $("#code_salle").val();
         libelle_salle = $("#libelle_salle").val();
         nbre_places = $("#nbre_places").val();

     //  alert ("code"+code+" libelle +libelle+ nbre_places+nbre_places+ ");

    $.ajax({

        dataType: 'json',
        type:'POST',
        url: 'addSalle',
        data:{
            code_salle: code_salle,
            libelle_creneaux: libelle_creneaux,
            nbre_places: nbre_places
        }
    }).done(function(data){
        $(".modal").modal('hide');
        toastr.success('hall Added Successfully.', 'Success Alert', {timeOut: 5000});
    }).error(function(){
        toastr.error('hall not Added.', 'error Alert', {timeOut: 5000});
    });
});
      $(".semestre_submit").click(function(e){
          e.preventDefault();
          libelle_semestre = $("#libelle_semestre").val();

    //alert ("libelle "+libelle_semestre);

    $.ajax({

        dataType: 'json',
        type:'POST',
        url: 'addSemestre',
        data:{
            libelle_semestre: libelle_semestre
        }
    }).done(function(data){
        $(".modal").modal('hide');
        toastr.success('semester Added Successfully.', 'Success Alert', {timeOut: 5000});
    }).error(function(){
        toastr.error('semester not Added.', 'Error Alert', {timeOut: 5000});
    });
});
       $(".suveillant_submit").click(function(e){
          e.preventDefault();
           id_user = $("#id_user").val();

    //alert ("id "+id_user);

    $.ajax({

        dataType: 'json',
        type:'POST',
        url: 'addSurveillant',
        data:{
            id_user: id_user
        }
    }).done(function(data){
        $(".modal").modal('hide');
        toastr.success('identifier  Added Successfully.', 'Success Alert', {timeOut: 5000});
    }).error(function(){
        toastr.error('identifier not Added.', 'Error Alert', {timeOut: 5000});
    });
});