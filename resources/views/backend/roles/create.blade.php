@extends('master')

@section('title', 'Create a New Role')  

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="well well bs-component">
        <form method="post" class="form-horizontal">
            
            {!! csrf_field() !!}

            @include('shared.errors')
               
            @include('shared.status')
                
            <fieldset>
                <legend>Create a New Role</legend>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="display-name" class="col-lg-2 control-label">Display Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="display-name" name="display-name">
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-lg-2 control-label">Description</label>
                    <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="description" name="description"></textarea>                        
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">                            
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </fieldet>
        </form>
    </div>
</div>
@endsection