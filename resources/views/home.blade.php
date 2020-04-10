@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 pt-5 pl-5">
                <img src="https://instagram.fbcn3-1.fna.fbcdn.net/v/t51.2885-19/s320x320/30589887_2010876322572326_834434668697747456_n.jpg?_nc_ht=instagram.fbcn3-1.fna.fbcdn.net&_nc_ohc=AzzTIOXMDZ4AX-l7ZmY&oh=8c8317fcb609865cf40c24074086d2c0&oe=5EBA5708" alt="" class="rounded-circle" id="profileImage">
            </div>
            <div class="col-9 pt-5 pl-5">
                <div>
                    <h1>{{ $user->username }}</h1>
                </div>
                <div class="d-flex">
                    <div class="pr-5">153</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-3">{{ $user->profile->title }}</div>
                <div >{{ $user->profile->description }}</div>
                <div><strong><a href=#>{{ $user->profile->url }}</a></strong></div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="col-4">
                <img src="https://instagram.fbcn3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/71036524_589029411628915_2022576023367012211_n.jpg?_nc_ht=instagram.fbcn3-1.fna.fbcdn.net&_nc_cat=107&_nc_ohc=Hzs2EB6AhlkAX8A8-oB&oh=5e86c42ff9970b230074ca131aecf824&oe=5EB7CF98" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src=https://instagram.fbcn3-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/s640x640/69478559_1300223496844457_7961672726577489446_n.jpg?_nc_ht=instagram.fbcn3-1.fna.fbcdn.net&_nc_cat=105&_nc_ohc=7Z0M6BETbIUAX8CW9zv&oh=bf3dfc55f34c606acddc81cb8dd4e3d0&oe=5EB8EA4E alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://instagram.fbcn3-1.fna.fbcdn.net/v/t51.2885-15/e15/c257.0.565.565a/67503282_510013546478555_7857664029003016961_n.jpg?_nc_ht=instagram.fbcn3-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=nCm95oJ95k0AX8VuacX&oh=4819138469df21296f7acd0cae79332d&oe=5EB7D608" alt="" class="w-100">
            </div>
        </div>
    </div>
@endsection
