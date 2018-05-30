@extends('layouts.enseignant')
@if(\Auth::user()->hasRole('etudiant'))
@section('page_content')
    <div id="contener">
        <h1>page d'accueille de l'étudiant</h1>
    </div>
@endsection

@section('scripts')

@endsection

@endif