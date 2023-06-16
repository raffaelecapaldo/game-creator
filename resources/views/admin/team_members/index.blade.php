@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <h1 class="text-white">Team Members</h1>
    <div class="table-responsive">
        <table class="table table-dark">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">Title</th>
                <th scope="col">Image profile</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($members as $member)

                @empty

                @endforelse
              <tr class="align-middle">
                <th scope="row">{{$member->id}}</th>
                <td>{{$member->name}}</td>
                <td>{{$member->surname}}</td>
                <td>{{$member->title}}</td>
                <td><img class="photo" src="{{$member->photo}}" alt=""></td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
@endsection
