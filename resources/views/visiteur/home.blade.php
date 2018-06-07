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
                    {{ Auth::user()->id }}
                    {{ Auth::user()->getRole() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
