@extends('layouts.admin')
@if(\Auth::user()->hasRole('admin'))
@section('page_content')
    <div id="contener">
        <h1>page d'accueil de l'administrateur</h1>
    </div>
@endsection

@section('scripts')

@endsection

@endif