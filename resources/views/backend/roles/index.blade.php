@extends('master')

@section('title', 'Show All Roles')  

@section('content')
<div class="container col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2> Roles </h2>
        </div>

        @include('shared.status')        

        @if ($roles->isEmpty())
            <p> There is no roles.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Display Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{!! $role->name !!}</td>                            
                            <td>{!! $role->display_name !!}</td>
                            <td>{!! $role->description !!}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>   
@endsection