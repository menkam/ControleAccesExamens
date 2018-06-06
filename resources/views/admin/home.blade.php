@extends('layouts.admin')
@if(\Auth::user()->hasRole('admin'))
@section('page_content')
    <div id="contener">
        <h6>page d'accueil de l'administrateur</h6>
        <div id="heure">voici l'heure du serveur</div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        //alert(dateCourante);
        //alert(heureCourante);

        dateCourante = dateCourante;
        heureCourante = heureCourante;
        $("#heure").html("<h1>nous somme "+dateCourante+" et il est "+heureCourante+"</h1>");
    </script>

@endsection

@endif