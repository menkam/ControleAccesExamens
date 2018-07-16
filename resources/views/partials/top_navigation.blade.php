<div class="nav toggle">
    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
</div>

<ul class="nav navbar-nav navbar-right">
  <li class="">
    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
          <img src="images/{{ Auth::user()->photo }}" alt="">{{ Auth::user()->name }} {{ Auth::user()->prenom }}
          <span class=" fa fa-angle-down"></span>
        </a>
    <ul class="dropdown-menu dropdown-usermenu pull-right">
      <li><a href="javascript:;"> Profile</a></li>
      <li>
        <a href="javascript:;">
          <span class="badge bg-red pull-right">50%</span>
          <span>Settings</span>
        </a>
      </li>
      <li><a href="Help.html">Help</a></li>
      <li><a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
          <i class="fa fa-sign-out pull-right"></i> Log Out</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        </form>
      </li>
    </ul>
  </li>

  <li role="presentation" class="dropdown">
    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
      <i class="fa fa-envelope-o"></i>
      <span id="nbrMail"></span>
    </a>
    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
      <li id="listMailNav"></li>
      <li>
        <div class="text-center">
          <a href="{{ route('inbox') }}">
            <strong>See All Alerts</strong>
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </li>
    </ul>
  </li>
  <li style="padding-top: 15px">
    <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button>
  </li>
  <li style="padding-top: 15px; margin-right: 15px">
    <button id="getApk" class="btn btn-sm btn-default btn-block" type="button"><a href="apk/app-debug.apk">Get APK</a></button>
  </li>
</ul>
<script type="text/javascript">
 // $(document).ready(function(){

 

  setInterval(findNewMessageNav,"5000");

//});


function findNewMessageNav(){
    var iduser = "<?php echo Auth::user()->id; ?>";
    var position = $("#listMailNav");
    
    var rows = '';
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: 'verifierMailRecive',
        data:{
            id:iduser
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
</script>