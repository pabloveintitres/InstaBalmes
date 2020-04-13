@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row pt-5">
            <div class="list-group">
                    @foreach($users as $user)
                        <a href="profile/{{$user->id}}" class="list-group-item list-group-item-action">{{  $user->name }}</a>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
