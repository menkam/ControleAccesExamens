@extends('layouts.global')
@if(\Auth::user()->hasRole('admin'))

@section('accueil')
<a href="{{ route('admin.index') }}" class="site_title"><i class="fa"><small>PFE</small></i> <span>LIR-2017</span></a>
@endsection

@section('sidebar_menu')
@endsection
@else
@section('page_content')
<div class="row">
    <div class="col col-md-10 col-md-offset-1">
        <div class="alert alert-warning" style="text-align: center; margin-top: 10%">
            <h2>ATTENTION !!!</h2><br/>
            <i class="fa fa-warning" style="font-size: 6em"></i><br/>
            <h3>Cette page est accessible uniquement par l'administrateur</h3><br/>
        </div>
    </div>
</div>
@endsection
@endif