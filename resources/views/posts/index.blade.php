@extends('layouts.app')

@section('content')
<div class="container">
  @foreach($posts as $post)
        <div class="row pt-2 pb-4">
            <div class="col-lg-6 offset-lg-3">
                <a href="/profile/{{$post->user->id}}"><img class="w-100" src="/storage/{{$post->image}}" alt=""></a>
            </div>
        </div>
    <div class="row">

            <div class="col-lg-6 offset-lg-3">
                <p>
                    <a href="/profile/{{$post->user->id}}">
                        <span class="font-weight-bold text-dark">{{$post->user->username}} </span>
                    </a>{{$post->caption}}
                </p>
            </div>
        </div>
      @endforeach

      <div class="row">
          <div class="col-lg-12 d-flex justify-content-center ">
              {{$posts->links()}}
          </div>
      </div>
</div>
@endsection
