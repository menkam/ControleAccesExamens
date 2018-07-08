$(document).ready(function(){

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

    
    //setInterval(findNewMessage,"1000");

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
                    //getInfoUser("name"+$i,data[$i].id_user_from);
                    rows = rows + '<a href="#" onclick="getLibelle('+data[$i].id+')">';
                    rows = rows + '<div class="mail_list">';
                    rows = rows + '<div class="left">';
                    rows = rows + '<i class="fa fa-circle"></i> <i class="fa fa-edit"></i>';
                    rows = rows + '</div>';
                    rows = rows + '<div class="right">';
                    rows = rows + '<h3>'+data[$i].name+' '+data[$i].prenom+'</h3>';
                    rows = rows + '<p>'+data[$i].objet+'</p>';
                    rows = rows + '<h3><small>'+data[$i].updated_at+'</small></h3>';
                    rows = rows + '</div></div>';
                    rows = rows + '</a>';
                }      
                position.empty();
                position.append(rows).slideDown();        
                
            }else{
                rows ='<p><b>pas de message</b></p>';
                position.empty();
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
                $('#objectifmsg').html("<hr><h2><u>Objet :</u> " +data[0].objet+"</h2>");
                $('#mainMsg').html("<hr><p><h2><u>Message :</u></h2>"+data[0].libelle+"</p>");
                //var rows ='<hr><strong>Jon Doe</strong>';
                //rows +='<span>(jon.doe@gmail.com)</span> to';
                //rows +='<strong>me</strong>';
                //rows +='<a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>';
                $('#infoSender').html(rows);
                var rows2 ='<button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>';
                rows2 +='<button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>';
                rows2 +='<button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>';
                rows2 +='<button onclick="delMsg('+data[0].id+')" class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>';
                $('#goupeBtn').html(rows2);
            }
        }

    });
}

function delMsg(id){
    if(confirm('Voulez-vous vraiment supprimer ce message ?')){
        $.ajax({
            dataType: 'json',
            type:'delete',
            url: 'delMail' + '/' + id
        }).done(function(data){
            toastr.success('Activity Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        }).error(function(data){
            tostErreur("echec de suppression");
        });
    }else{
        tostAvertissement("Oppération Annulée");
    }
    
}