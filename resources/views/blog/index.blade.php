@extends('master')

@section('title', 'Blog')

@section('content')
<div class="container col-md-8 col-md-offset-2">

    @include('shared.status')

    @if ($posts->isEmpty())
        <p> There is no post.</p>
    @else

    @foreach ($posts as $post)
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="blog-post-title">
                    <a href="{!! action('BlogController@show', $post->slug) !!}">{!! $post->title !!}</a>
                </h2>
                <p class="blog-post-meta">
                    <strong>{!! $post->user->name !!}</strong> on
                    {!! $post->created_at->toFormattedDateString() !!}                
                </p>
            </div>
            <div class="panel-body">
                {!! mb_substr($post->content, 0, 500) !!}
            </div>
        </div>
    @endforeach
    @endif
</div>
@endsection