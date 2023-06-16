@extends('layouts.app')
@section('characterlink')
{{route('admin.characters.index')}}
@endsection


@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="dash-buttons">
                        <button class="btn btn-primary"><a href="{{route('admin.characters.create')}}">Crea un nuovo personaggio</a></button>
                        <form class="mt-2" action="{{ route('logout') }}" method="POST">
                            @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
