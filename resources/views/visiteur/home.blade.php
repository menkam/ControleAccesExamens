@extends('layouts.temp')

@section('page_content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">visiteur</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Salut {{ Auth::user()->name }} {{ Auth::user()->prenom }}, votre compte n'est pas encore activé...
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
