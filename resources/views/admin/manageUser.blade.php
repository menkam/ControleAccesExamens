@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">manager user</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>                        
                    @endif
                    
                    @if($users->count() > 0)
                    <ul>
                        @foreach($users as $user)
                        <li><a href="{{ route('manageUser.show', ['manageUser' => $user->id]) }}">{{ $user->name }}</a></li>
                        @endforeach                        
                    </ul>
                    {{ $users->links() }}
                    @else                   
                        tous les a=utilisateur sont activés
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
