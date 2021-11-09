@extends('layouts.master')

@section('content')
    <div class="container">

        <div class="row g-5">

                @foreach($users as $user)
                    <h3>{{$user->name}}</h3>
                <div class="row g-5">
                    <h3 class="pb-4 mb-4 fst-italic border-bottom" style="margin-left: 25px!important;">
                        All Posts
                    </h3>
                    <ul>
                        <li>
                            <ul>
                                @foreach($user->posts as $post)
                                <li><h4>{{$post->title}}</h4>
                                    <h4 style="margin-left:25px !important;">Comment list</h4>

                                    <ul>
                                        @foreach($post->comments as $comment)
                                        <li>{{$comment->comment}}</li>
                                        @endforeach

                                    </ul>
                                </li>
                                    @endforeach

                            </ul>
                        </li>
                    </ul>
                @endforeach
                </div>
            </div>

@endsection