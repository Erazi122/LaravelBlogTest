@extends('master')
@section('title', 'Edit a ticket')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">

            <form class="form-horizontal" method="post">

                @include('shared.errors')                

                @include('shared.status')
                
                {{ csrf_field() }}

                {{ method_field('PATCH') }}

                {{--  <input type="hidden" name="_method" value="put">  --}}
                {{--  <input type="hidden" name="_token" value="{!! csrf_token() !!}">  --}}

                <fieldset>
                    <legend>Edit ticket</legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Title</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" name="title" value="{!! $ticket->title !!}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Content</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="content" name="content">{!! $ticket->content !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-lg-2 control-label"> Close this ticket? </label>
                        <div class="checkbox col-lg-10">                            
                            <label class="checkbox-inline">
                                <input type="checkbox" name="status" id="status" {!! $ticket->status ? '' : 'checked' !!}>
                            </label>                            
                        </div>
                    </div>                    
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">                            
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection