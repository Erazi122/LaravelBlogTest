@extends('master')

@section('title', 'View a post')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        <div class="content">
            <h2 class="header">{!! $post->title !!}</h2>
            <div class="meta-post-info">
                <p>
                    <strong>{!! $post->user->name !!}</strong> at
                    {!! $post->created_at->toFormattedDateString() !!}
                </p>
            </div>
            <p> {!! $post->content !!} </p>
        </div>
        <div class="clearfix"></div>
    </div>
    @foreach($comments as $comment)
        <div class="well well bs-component">
            <div class="content">
                {!! $comment->content !!}
                <div class="pull-right">
                    | by <strong>{!! $comment->user->name !!}</strong> at   
                    {!! $comment->created_at->toDateTimeString() !!}
                </div>
            </div>
        </div>
    @endforeach
    <div class="well well bs-component">
        <form class="form-horizontal" method="post" action="/comment">
            
            {!! csrf_field() !!}

            @include('shared.errors')
            
            @include('shared.status')
            
            <input type="hidden" name="commentable_id" value="{!! $post->id !!}">
            <input type="hidden" name="commentable_type" value="App\Post">

            <fieldset>
                <legend>Comment</legend>    
                <div class="form-group">
                    <div class="col-lg-12">
                        <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10">    
                        <button type="submit" class="btn btn-primary">Post</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection