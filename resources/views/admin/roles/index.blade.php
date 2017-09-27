@extends('layouts.admin')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Role List</h4> 
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>CREATED AT</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td class="txt-oflo">{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td class="txt-oflo">{{ $role->created_at }}</td>
                                    <td>
                                        <a href="{{ route('roles.edit', ['role' => $role]) }}" id="{{ $role->id }}" class="btn btn-link role_edit">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div class="white-box">
                <form class="form-horizontal form-material" method="POST" action="{{ route('roles.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Role Name</label>
                        <div class="col-md-12">
                            <input type="text" name="role_name" placeholder="Enter role name..." class="form-control form-control-line"> 
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Add Role</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="edit_form"></div>
        </div>
    </div>
@endsection

@section('jsScript')
    <script src="{{ asset('/admin/js/custom/role_index.js') }}"></script>
@endsection