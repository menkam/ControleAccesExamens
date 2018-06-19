$(document).ready(function(){

  // $(document).ready(function(){

 

  setInterval(findNewMessageNav,"5000");

});

function findNewMessageNav(){
    //var iduser = "<?php echo Auth::user()->id; ?>";
    var position = $("#listMailNav");
    
    var rows = '';
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'verifierMailRecive',
        data:{
            id:idUser
        },
        success: function(data){
            //alert(data.length);
            if(data.length > 0){
              var nbr = 0;
                for(i=0; i<data.length; i++){
                  nbr++;
          if(i<4){
            rows = rows + '<li>';
            rows = rows + '<a>';
            rows = rows + '<span class="image"><img src="images/'+data[i].photo+'" alt="Profile Image" /></span>';
            rows = rows + '<span>';
            rows = rows + '<span>'+data[i].name+' '+data[i].prenom+'</span>';
            //rows = rows + '<span class="time">3 mins ago</span>';
            rows = rows + '</span>';
            rows = rows + '<span class="message">';
            rows = rows + data[i].libelle;
            rows = rows + '</span>';
            rows = rows + '</a>';
            rows = rows + '</li>';
          }
                }      
                position.empty();
                position.append(rows).slideDown();     
                $('#nbrMail').html('<span class="badge bg-green">'+nbr+'</span>');    
                
            }else{
                rows ='<p><b>pas de message</b></p>';
                position.empty();
                position.append(rows);
            }
        }

    });   
    //alert (iduser);
}    