$(document).ready(function(){

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	$("#send").click(function(e){
        e.preventDefault();

		var id_user_from = $("#id_user_from").val();
        var id_user_to = $("#id_user_to").val();
        var objet = $("#objet").val();
        var message = $("#message").val();
        var lue = '0';

		//alert(id_user_from+" "+id_user_to+" "+objet+" "+message);

		$.ajax({
            dataType: 'json',
            type:'POST',
            url:'sendMail',
            data:{
            	id_user_from:id_user_from, 
            	id_user_to:id_user_to, 
            	objet:objet, 
            	libelle:message, 
            	lue:lue
            }
        }).done(function(data){
            //$(".modal").modal('hide');
            $('#emailTo').val('');
            $('#objet').val('');
            $('#message').val('');
            toastr.success('message envoyé avec success.', 'Success Alert', {timeOut: 5000});

        }).error(function(){
        	//alert("echec");
            tostErreur("echec lors de l'envoie du message");
        });

	});

    $('#emailFrom').keyup(function(){
        var val = $(this).val();
        verifierEmail("emailFrom","id_user_from",val);
    }); 

    $('#emailTo').keyup(function(){
        var val = $(this).val();
        verifierEmail("emailTo","id_user_to",val);
    });

    
    findNewMessage();


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



function findNewMessage(){
    //alert(iduser);
    var position = $("#listMail");
    position.empty();
    var rows = '';
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getInbox',
        data:{
            id:iduser
        },
        success: function(data){
            //alert(data.length);
            if(data.length > 0){
                for($i=0; $i<data.length; $i++){
                    getInfoUser("name"+$i,data[$i].id_user_from);
                    rows ='<a href="#" onclick="getLibelle('+data[$i].id+')">';
                    rows +='<div class="mail_list">';
                    rows +='<div class="left">';
                    rows +='<i class="fa fa-circle"></i> <i class="fa fa-edit"></i>';
                    rows +='</div>';
                    rows +='<div class="right">';
                    rows +='<h3 id="name'+$i+'"></h3>';
                    rows +='<p>'+data[$i].objet+'</p>';
                    rows +='<h3><small>'+data[$i].updated_at+'</small></h3>';
                    rows +='</div></div>';
                    rows +='</a>';
                    position.append(rows);
                }                
                
            }else{
                rows ='<p><b>pas de message</b></p>';
                position.append(rows);
            }
        }

    });   
    //alert (iduser);
}

function getInfoUser($name,$id){
    
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getInfoUser',
        data:{
            id:$id
        },
        success: function(data){
            if(data.length > 0){
                $('#'+$name).html(data[0].name+" "+data[0].prenom);
            }else{
                nameUser = "ras";
            }
        }

    });
}

function getLibelle($id){
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'getContentMsg',
        data:{
            id:$id
        },
        success: function(data){
            if(data.length > 0){
                $('#objectifmsg').html("<h3>"+data[0].objet+"</h3>");
                $('#mainMsg').html("<br><p>"+data[0].libelle+"</p>");
            }
        }

    });
}