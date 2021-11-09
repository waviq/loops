@extends('layouts.master')

@section('content')
    <div class="container">

        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-success', 'alert-success') }}">{{ Session::get('message') }}</p>
        @endif

            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                All Posts
            </h3>
            <div class="row g-5">

                <div class="col-md-8">
                    @foreach($posts as $post)
                        <article class="blog-post">
                            <h2 class="blog-post-title">{{$post->title}}</h2>
                            <p class="blog-post-meta">{{$post->created_at->format('Y-m-d')}} by <a
                                        href="#">{{$post->author->name}}</a></p>
                            <p class="blog-post-meta">email: <a href="#">{{$post->author->email}}</a></p>
                            {!! $post->content !!}
                            <hr>
                        </article>
                    @endforeach
                </div>

            </div>
        </div>

@endsection

@section('custom-script')
    <script>
        $("document").ready(function(){
            setTimeout(function(){
                $(".alert").remove();
            }, 5 );

        });
    </script>
@endsection