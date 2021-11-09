@extends('layouts.master')

@section('content')
    <div class="container">


        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            All Comments
        </h3>
        <div class="row g-5">

            <div class="col-md-8">
                @foreach($comments as $comment)
                    <article class="blog-post">
                        <h2 class="blog-post-title">{{$comment->name}}</h2>
                        <p class="blog-post-meta">email: <a href="#">{{$comment->email}}</a></p>
                        <p>{{$comment->comment}}</p>
                        <hr>
                    </article>
                @endforeach
            </div>

        </div>
    </div>

@endsection
