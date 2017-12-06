@extends('master')

@section('title', 'Create A New Post')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        <form class="form-horizontal" method="post">

            {!! csrf_field() !!} 

            @include('shared.errors')

            @include('shared.status')
            
            <fieldset>
                <legend>Create a new post</legend>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                    </div>
                </div>                
                <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">Content</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="content" name="content" required></textarea>
                    </div>
                </div>
                 <div class="form-group">
                    <label for="categories" class="col-lg-2 control-label">Categories</label>
                    <div class="col-lg-10">
                        <select class="form-control" rows="3" id="categories" name="categories[]" multiple required>
                            @foreach($categories as $category)
                                <option value="{!! $category->id !!}">
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
@endsection