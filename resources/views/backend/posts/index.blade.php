@extends('master')

@section('title', 'View All Posts')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> All posts </h2>
        </div>

        @include('shared.status')

        @if ($posts->isEmpty())
            <p> No post has been created yet.</p>
        @else
            <table class="table">
                <tbody>
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Post Content</td>
                            <td>Categories</td>
                            <td>Author</td>
                        </tr>
                    </thead>
                @foreach($posts as $post)
                    <tr>
                        <td><a href="{!! action('Admin\PostController@edit', $post) !!}">{!! $post->title !!}</a></td>
                        <td>{!! $post->content !!}</td>
                        <td>{!! implode(', ', $post->categories->pluck('name')->toArray()) !!}</td>
                        <td>{!! $post->user->name !!}</td>                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection