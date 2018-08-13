<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titre')</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/png" href="{{ asset('Login_v3/images/icons/favicon.ico') }}"/>
    
    <!-- Bootstrap -->
    <link href="{{ asset('framework/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('framework/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('framework/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="{{ asset('framework/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="{{ asset('framework/build/css/custom.min.css') }}" rel="stylesheet">
    
    @yield('stylesheets')
     
  </head>
  
@if(\Auth::user()->hasRole('admin') || \Auth::user()->hasRole('enseignant') || \Auth::user()->hasRole('etudiant') || \Auth::user()->hasRole('visiteur'))
  <body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col menu_fixed">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href=" {{ url('home') }} " class="site_title"><i class="fa"><small>PFE</small></i> <span>LIR-2017</span></a>
                    </div>
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    @include('partials.info_profil')
                    <!-- /menu profile quick info -->
                    <br />
                    <!-- sidebar menu -->
                    @include('partials.menu')
                    <!-- /sidebar menu -->

                    <!-- /menu footer buttons -->
                    @include('partials.menu_footer')
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        @include('partials.top_navigation')
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">
                @yield('page_content')
            </div>
            <!-- /page content -->

            <!-- footer content -->
            @include('partials.footer')
            <!-- /footer content -->
        </div>
    </div>

    @include('compose')
    <!-- compose -->
    
    <!-- /compose -->
   
    <!-- jQuery -->
    <script src="{{ asset('framework/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('framework/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('framework/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('framework/vendors/nprogress/nprogress.js') }}"></script>
    <!-- jQuery custom content scroller -->
    <script src="{{ asset('framework/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- inbox -->
    <!-- bootstrap-wysiwyg -->
    <script src="{{ asset('framework/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('framework/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('framework/vendors/google-code-prettify/src/prettify.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('framework/build/js/custom.min.js') }}"></script>
    <!--script src="{{ asset('js/compose.js') }}"></script-->

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Variable de reccupération de la date et l'heure courande du serveur
        //var dateCourante = "2018-07-18";

        var dateCourante = "<?php
            $date = getDate();
            if((int)$date["mon"] < 10 && (int)$date["mday"] < 10){
                echo $date["year"]."-0".$date["mon"]."-0".$date["mday"];
            }
            if((int)$date["mon"] < 10 && (int)$date["mday"] >= 10){
                echo $date["year"]."-0".$date["mon"]."-".$date["mday"];
            }
            if((int)$date["mon"] >= 10 && (int)$date["mday"] < 10){
                echo $date["year"]."-".$date["mon"]."-0".$date["mday"];
            }
            if((int)$date["mon"] >= 10 && (int)$date["mday"] >= 10){
                echo $date["year"]."-".$date["mon"]."-".$date["mday"];
            }
        ?>";
         var heureCourante2 = '<?php
            $heure = getDate();
            if(((int)$heure["hours"]+1) < 10 && (int)$heure["minutes"] < 10){
                echo "0".($heure["hours"]+1)."H0".$heure["minutes"];
            }
            if(((int)$heure["hours"]+1) < 10 && (int)$heure["minutes"] > 10){
                echo "0".($heure["hours"]+1)."H".$heure["minutes"];
            }
            if(((int)$heure["hours"]+1) >= 10 && (int)$heure["minutes"] < 10){
                echo ($heure["hours"]+1)."H0".$heure["minutes"];
            }
            if(((int)$heure["hours"]+1) >= 10 && (int)$heure["minutes"] > 10){
                echo ($heure["hours"]+1)."H".$heure["minutes"];
            }
            //echo $heure["hours"]."h".$heure["minutes"].":".$heure["seconds"];
        ?>';

        //var heureCourante = '08H';
        
        var heureCourante = '<?php
            $heure = getDate();
            if(($heure["hours"]+1) < 10){
                echo "0".($heure["hours"]+1)."H";
            }else {
                echo ($heure["hours"]+1)."H";
            }
        ?>';
        //alert(dateCourante+" "+heureCourante);

        
        var iduser = "<?php echo Auth::user()->id; ?>";
        var idUser = "<?php echo Auth::user()->id; ?>";
    </script>

    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/compose.js') }}"></script>

    @yield('scripts_menu')
    
    @yield('scripts')
    </body>
@else
    <body>
        <div class="container">
            <div class="row">
                <div class="col col-md-10 col-md-offset-1">
                    <div class="alert alert-warning" style="text-align: center; margin-top: 20%">
                        <h2>ACERFI SIGES</h2><br/>
                        <i class="fa fa-warning" style="font-size: 6em"></i><br/>
                        <h3>Votre Compte a ete Desactiver!!!!</h3><br/>
                        <h4>Veiller contacter l admin ===> <a href="www.github/menkam.com">men_franc</a></h4><br/>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-btn fa-sign-out"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </body>
@endif
</html>


                                       