@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3">
            <img class="rounded-circle p-5 w-100"  src="{{$user->profile->profileImage()}}" alt="">
        </div>
        <div class="col-lg-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
               <div class="d-flex align-items-center pb-3">
                   <div class="h4">{{$user->username}}</div>

                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
               </div>

                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan


            </div>
            @can('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-5"><strong>{{$postCount}} </strong>posts</div>
                <div class="pr-5"><strong>{{$followersCount}}</strong>followers</div>
                <div class="pr-5"><strong>{{$followingCount}} </strong>following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div>{{$user->profile->description}}</div>
            <div><a href="#">{{$user->profile->url }}</a></div>
        </div>
    </div>
    <div class="row ">
        @foreach($user->posts as $post)
            <div class="col-lg-4 pb-5 ">
                <a href="/p/{{$post->id}}">
                    <img class="img-fluid " src="/storage/{{$post->image}}" alt="">
                </a>
            </div>

            @endforeach
       </div>
</div>
@endsection
