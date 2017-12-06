@extends('master')

@section('title', 'Edit a User')

@section('content')
<script>
    $(document).ready(function() {
        $('#keep_password').click(function() {
            $('.password').attr('disabled', this.checked);
        });
    });
</script>
<div class="container col-md-6 col-md-offset-3">
    <div class="well well bs-component">
        <form class="form-horizontal" method="post">
            
            {!! csrf_field() !!}
            {!! method_field('PATCH') !!}

            @include('shared.errors')

            @include('shared.status')

            <fieldset>
                <legend>Edit a User Information</legend>
                <div class="form-group">
                    <label for="name" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="roles" class="col-lg-2 control-label">Roles</label>
                    <div class="col-lg-10">
                    
                        <div class="checkbox" id="roles">                            
                                @foreach($roles as $role)
                                    <label class="checkbox-inline"> 
                                        <input type="checkbox" name="roles[]" value="{!! $role->id !!}" 
                                            @if(in_array($role->id, $selectedRoles)) checked="checked" @endif >
                                    {!! $role->display_name !!}</label>                                                              
                                @endforeach                            
                        </div>
                        
                        {{--  <select class="form-control" id="role" name="role[]" multiple>
                            @foreach($roles as $role)
                                <option value="{!! $role->id !!}"
                                    @if(in_array($role->id, $selectedRoles))
                                        selected="selected" 
                                    @endif >
                                    {!! $role->display_name !!}
                                </option>
                            @endforeach
                        </select>  --}}
                    </div>                
                </div>
                <div class="form-group">
                    <label for="keep_password" class="col-lg-2 control-label">Keep current password</label>
                    <div class="checkbox col-lg-10">                            
                        <label class="checkbox-inline"> 
                            <input type="checkbox" name="keep_password" id="keep_password" value="true" checked> 
                        </label>                                                           
                    </div>                              
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control password" name="password" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 control-label">Confirm password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control password" name="password_confirmation" disabled>
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