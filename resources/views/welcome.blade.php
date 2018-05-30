@extends('layouts.app')
@section('style')
<!-- Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
@endsection
@section('content')
    <div class="jumbotron">
        <h1>Contrôle d'Acces aux Examens</h1>
        <p><marquee>Support d'aide pour la gestion des activités de l'IUT-FV de bandjoun.</marquee></p>

        <p>
            <a href="https://github.com/menkam/ControleAccesExamens" title="source en ligne" role="button" class="btn btn-lg btn-primary">View Source On GitHub</a>
        </p>
    </div>
@endsection
@section('script')
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function () {

        })
    </script>
@endsection


<!--div class="row">
    <div class="col-lg-6 col-xs-12">
        <ul id="pagination" class="pagination-sm"></ul>
    </div>
    <div class="col-md-6 col-xs-12 widget widget_tally_box">
        <div class="x_panel">
            <div class="x_title">
                <h2>Activité completer à :</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div style="text-align: center;">
                                        <span class="chart" data-percent="98">
                                            <span class="percent"></span>
                                        </span>
                </div>
            </div>
        </div>
    </div>
</div-->



@section('style0')
    <!-- Bootstrap -->
    <link href="{{ asset('framework/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('framework/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('framework/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="{{ asset('framework/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('framework/build/css/custom.min.css') }}" rel="stylesheet">
@endsection









@section('scriptAc')

    <!-- jQuery -->
    <script src="{{ asset('framework/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('framework/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('framework/vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('framework/vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('framework/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('framework/vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- easy-pie-chart -->
    <script src="{{ asset('framework/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{ asset('framework/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('framework/build/js/custom.min.js') }}"></script>
@endsection