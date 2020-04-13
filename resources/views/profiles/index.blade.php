@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 pt-5 pl-5">
                <img src="https://instagram.fbcn3-1.fna.fbcdn.net/v/t51.2885-19/s320x320/30589887_2010876322572326_834434668697747456_n.jpg?_nc_ht=instagram.fbcn3-1.fna.fbcdn.net&_nc_ohc=AzzTIOXMDZ4AX-l7ZmY&oh=8c8317fcb609865cf40c24074086d2c0&oe=5EBA5708" alt="" class="rounded-circle" id="profileImage">
            </div>
            <div class="col-9 pt-5 pl-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{ $user->username }}</h1>
                    <a class="btn-outline-primary" href="/profiles">Find other users</a>
{{--                    <a class="btn-outline-primary" href="#">Edit profile</a>--}}
                    <a class="btn-outline-primary" href="/p/create">Add new post</a>
                </div>
                <div class="d-flex">
                    <div class="pr-5">{{ $user->posts->count() }} posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                {{--                <div class="pt-3">{{ $user->profile->title }}</div>
                                <div >{{ $user->profile->description }}</div>
                                <div><strong><a href=#>{{ $user->profile->url }}</a></strong></div>--}}
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" alt="" class="w-100 pb-4">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
