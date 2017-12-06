@extends('master')

@section('title', 'Edit A Post')

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        <form class="form-horizontal" method="post">
            
            {!! csrf_field() !!}
            {!! method_field('PATCH') !!}

            @include('shared.errors')

            @include('shared.status')      
                        
            <fieldset>
                <legend>Edit a post</legend>
                <div class="form-group">
                    <label for="title" class="col-lg-2 control-label">Title</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $post->title }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="content" class="col-lg-2 control-label">Content</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="content" name="content" required>{!! $post->content !!}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-lg-2 control-label">Categories</label>
                    <div class="col-lg-10">
                        <select class="form-control" id="categories" name="categories[]" multiple required>
                            @foreach($categories as $category)
                                <option value="{!! $category->id !!}" 
                                    @if(in_array($category->id, $selectedCategories)) selected="selected" @endif >
                                {!! $category->name !!}</option>
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