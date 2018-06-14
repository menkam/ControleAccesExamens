$(document).ready(function(){

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


	$('#emailTo').keyup(function(){
	    var val = $(this).val();
		verifierEmail("emailTo","id_user_to",val);
	});

	$('#emailFrom').keyup(function(){
		var val = $(this).val();
		verifierEmail("emailFrom","id_user_from",val);
	});


	

	$("#send").click(function(e){
        e.preventDefault();

		var id_user_from = $("#id_user_from").val();
		var id_user_to = $("#id_user_to").val();
		var objet = $("#objet").val();
		var message = $("#message").val();
		var lue = '0';

		//alert(id_user_from+id_user_to+objet+message);

		$.ajax({
            dataType: 'json',
            type:'POST',
            url:'sendMail',
            data:{
            	id_user_from:id_user_from, 
            	id_user_to:id_user_to, 
            	objet:objet, 
            	libelle:objet, 
            	lue:lue
            }
        }).done(function(data){
        	//alert("Success");
            //$(".modal").modal('hide');
            toastr.success('message envoyé avec success.', 'Success Alert', {timeOut: 5000});
        }).error(function(){
        	//alert("echec");
            tostErreur("echec lors de l'envoie du message");
        });

	});




});	




function verifierEmail(position,position2,email) {
    //var rows = '<option value="">-----</option>';
    //var position = $("#"+position+"");
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'verifierMail',
        data:{
            email:email
        },
        success: function(data){
            if(data.length > 0){
            	$("#"+position).css('color', 'green');
            	$("#"+position2).val(data[0].id);
            	//return true;
            	//document.getElementById('emailTo').style.color='green';
            }else{
            	$("#"+position).css('color', 'red');
            	$("#"+position2).val('');
            }
        }
    });
}