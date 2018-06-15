@extends('layouts.global')

@section('stylesheets')

@endsection

@section('page_content')
<div class="container">
    @yield('contenu')
</div>
@endsection

@section('script')


@endsection

@section('scripts')
    <link href="{{ asset('ajax/libs/toastr.js/latest/css/toastr.min.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('ajax/libs/toastr.js/latest/js/toastr.min.js') }}"></script>
    <script src="{{ asset('ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js') }}"></script>
    <!-- easy-pie-chart -->
    <script src="{{ asset('framework/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') }}"></script>

    <!--script type="text/javascript" src="{{ asset('0ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('0ajax/libs/jquery/3.1.0/jquery.js') }}"></script-->
    @yield('script-form')
@endsection