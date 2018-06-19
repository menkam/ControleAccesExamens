@extends('layouts.global')
@if(\Auth::user()->hasRole('enseignant'))

@section('titre','Accueil-Enseignant')

@section('accueil')

@endsection

@endif