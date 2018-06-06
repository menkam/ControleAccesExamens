@extends('layouts.admin')
@if(\Auth::user()->hasRole('admin'))
@section('page_content')
    <div id="contener">
        <h1>page d'accueil de l'administrateur</h1>
        <div id="heure">voici l'heure du serveur</div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        alert(dateCourante);
        alert(heureCourante);

        dateCourante = dateCourante;
        heureCourante = heureCourante;
    </script>

@endsection

@endif