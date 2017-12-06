@extends('master')
@section('title', 'View a ticket')

@section('content')

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">                
                <div class="content">
                    <h2 class="header">{!! $ticket->title !!}</h2>
                    <div class="meta-ticket-info">
                        <p>
                            <strong>{!! $ticket->user->name !!}</strong> at
                            {!! $ticket->created_at->toFormattedDateString() !!}
                        </p>
                    </div>
                    <p> <strong>Status</strong>: {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
                    <p> {!! $ticket->content !!} </p>
                </div>
                @if(Auth::user()->hasRole('admin'))
                    <a href="{!! action('TicketController@edit', $ticket->slug) !!}" class="btn btn-info">Edit</a>

                    <form method="post" action="{!! action('TicketController@destroy', $ticket->slug) !!}" class="pull-left">
                        
                        {{ method_field('destroy') }}
                        {{ csrf_field() }}
                        
                        <div>
                            <button type="submit" class="btn btn-warning">Delete</button>
                        </div>
                    </form>
                @endif
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

                @include('shared.errors')

                @include('shared.status')

                {{--  <input type="hidden" name="_token" value="{!! csrf_token() !!}">  --}}
                
                {!! csrf_field() !!}
                
                <input type="hidden" name="commentable_id" value="{!! $ticket->id !!}">
                <input type="hidden" name="commentable_type" value="App\Ticket">

                <fieldset>
                    <legend>Reply</legend>
                    <div class="form-group">
                        <div class="col-lg-12">
                            <textarea class="form-control" rows="3" id="content" name="content"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 ">                            
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

@endsection