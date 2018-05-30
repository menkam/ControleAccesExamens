@extends('layouts.global')
@section('stylesheets')

@endsection
@section('titre','hello world')

@section('page_content')
    <form>
        <input class="btn btn-success" type="button" value="Bonsoir">
        <select id="id_annee" name="id_annee" required="required" class="form-control"></select>
    </form>
@endsection

@section('scripts')
    <script src="{{ asset('js/hello.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
@endsection
