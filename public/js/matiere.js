var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

/* manage data list */
function manageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data) {
        total_page = data.last_page;
        current_page = data.current_page;
        $('#pagination').twbsPagination({
            totalPages: total_page,
            visiblePages: current_page,
            onPageClick: function (event, pageL) {
                page = pageL;
                if(is_ajax_fire != 0){
                    getPageData();
                }
            }
        });
        manageRow(data.data);
        is_ajax_fire = 1;
    });
}

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


// Get Page Data
function getPageData() {
    $.ajax({
        dataType: 'json',
        url: url,
        data: {page:page}
    }).done(function(data){
        manageRow(data.data);
    });
}


// Add new Post table row
function manageRow(data) {
    var	rows = '';
    var nbr = 1;
    $.each( data, function( key, value ) {
        rows = rows + '<tr>';
        rows = rows + '<td>'+nbr+'</td>';
        rows = rows + '<td>'+value.code_matiere+'</td>';
        rows = rows + '<td>'+value.libelle_matiere+'</td>';
        rows = rows + '<td>'+value.nbcredit+'</td>';
        rows = rows + '<td data-id="'+value.id+'">';
        rows = rows + '<button data-toggle="modal" title="Afficher" data-target="#show-item" class="btn btn-primary edit-item fa fa-eye"></button> ';
        rows = rows + '<button data-toggle="modal" title="Modifier" data-target="#edit-item" class="btn btn-default edit-item fa fa-edit"></button> ';
        rows = rows + '<button title="Supprimer" class="btn btn-danger remove-item fa fa-trash"></button>';
        rows = rows + '</td>';
        rows = rows + '</tr>';
        nbr++;
    });
    $("tbody").html(rows);
}

// Create new Post
$(".crud-submit").click(function(e){
    e.preventDefault();
    var form_action = $("#create-item").find("form").attr("action");

    var code_matiere = $("#create-item").find("input[name='code_matiere']").val();
    var libelle_matiere = $("#create-item").find("input[name='libelle_matiere']").val();
    var nbcredit = $("#create-item").find("input[name='nbcredit']").val();

    $.ajax({
        dataType: 'json',
        type:'POST',
        url: form_action,
        data:{
            code_matiere:code_matiere,
            libelle_matiere:libelle_matiere,
            nbcredit:nbcredit
        }
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Matiere Created Successfully.', 'Success Alert', {timeOut: 5000});
    });
});


// Remove Post
$("body").on("click",".remove-item",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");

    $.ajax({
        dataType: 'json',
        type:'delete',
        url: url + '/' + id
    }).done(function(data){
        c_obj.remove();
        toastr.success('Matiere Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        getPageData();
    });
});

// Edit Post
$("body").on("click",".edit-item",function(){
    var id = $(this).parent("td").data('id');
    var code_matiere = $(this).parent("td").prev("td").text();
    var libelle_matiere = $(this).parent("td").prev("td").text();
    var nbcredit = $(this).parent("td").prev("td").text();

    $("#edit-item").find("input[name='code_matiere']").val(code_matiere);
    $("#edit-item").find("input[name='libelle_matiere']").val(libelle_matiere);
    $("#edit-item").find("input[name='nbcredit']").val(nbcredit);

    $("#edit-item").find("form").attr("action",url + '/' + id);

});


// Updated new Post
$(".crud-submit-edit").click(function(e){
    e.preventDefault();
    var form_action = $("#edit-item").find("form").attr("action");

    var code_matiere = $("#create-item").find("input[name='code_matiere']").val();
    var libelle_matiere = $("#create-item").find("input[name='libelle_matiere']").val();
    var nbcredit = $("#create-item").find("input[name='nbcredit']").val();

    $.ajax({
        dataType: 'json',
        type:'PUT',
        url: form_action,
        data:{
            code_matiere:code_matiere,
            libelle_matiere:libelle_matiere,
            nbcredit:nbcredit
        }
    }).done(function(data){
        getPageData();
        $(".modal").modal('hide');
        toastr.success('Matiere Updated Successfully.', 'Success Alert', {timeOut: 5000});
    });
});