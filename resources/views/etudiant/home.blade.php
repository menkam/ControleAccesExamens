@extends('layouts.enseignant')
@if(\Auth::user()->hasRole('etudiant'))
@section('page_content')
    <div id="contener">
        <h6>page d'accueil de l'étudiant</h6>
        <div id="heure">voici l'heure du serveur</div><br>
        <img src="{{ asset('images/construction.gif') }}">
    </div>
@endsection

@section('scripts')

@endsection
<script type="text/javascript">
    //alert(dateCourante);
    //alert(heureCourante);

    dateCourante = dateCourante;
    heureCourante = heureCourante2;
    $("#heure").html("<h1>nous somme "+dateCourante+" et il est "+heureCourante+"</h1>");
</script>
@endif