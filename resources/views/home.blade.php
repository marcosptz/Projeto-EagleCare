@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <p>
                        @if(Auth::user()->nivel == 1)
                        <a href="{{ route('user.create') }}" class="btn btn-primary my-2">Cadastrar usuário</a>
                        @endif
                    <a href="#" class="btn btn-secondary my-2">Listar usuários</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
