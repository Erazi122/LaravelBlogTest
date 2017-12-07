@extends('master')

@section('title', 'Admin Control Panel')

@section('content')
<div class="container">
    <div class="row banner">
        <div class="col-md-12">
            <div class="list-group">
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="glyphicon glyphicon-user mdi-social-person"></i>
                    </div>
                    <div class="row-content">
                        <div class="action-secondary"><i class="mdi-social-info"></i></div>
                        <h4 class="list-group-item-heading">Manage Users</h4>
                        <a href="/admin/users" class="btn btn-default btn-raised">All Users</a>
                    </div>
                </div>       
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="glyphicon glyphicon-pencil"></i>
                    </div>
                    <div class="row-content">
                    <div class="action-secondary"><i class="mdi-material-info"></i></div>
                        <h4 class="list-group-item-heading">Manage Roles</h4>
                        <a href="/admin/roles" class="btn btn-default btn-raised">All Roles</a>
                        <a href="/admin/roles/create" class="btn btn-primarybtn-raised">Create A Role</a>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="glyphicon glyphicon-list-alt"></i>
                    </div>
                    <div class="row-content">
                        <div class="action-secondary"><i class="mdi-material-info"></i></div>
                        <h4 class="list-group-item-heading">Manage Posts</h4>
                        <a href="/admin/posts" class="btn btn-default btn-raised">All Posts</a>
                        <a href="/admin/posts/create" class="btn btn-primarybtn-raised">Create A Post</a>
                    </div>
                </div>
                <div class="list-group-separator"></div>
                <div class="list-group-item">
                    <div class="row-action-primary">
                        <i class="glyphicon glyphicon-folder-close"></i>
                    </div>
                    <div class="row-content">
                        <div class="action-secondary"><i class="mdi-material-info"></i></div>
                        <h4 class="list-group-item-heading">Manage Categories</h4>
                        <a href="/admin/categories" class="btn btn-default btn-raised">All Categories</a>
                        <a href="/admin/categories/create" class="btn btn-primarybtn-raised">Create A Category</a>
                    </div>
                </div>
                <div class="list-group-separator"></div>
            </div>
        </div>
    </div>
</div>
@endsection