@extends('layouts.admin')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Permission List</h4> 
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
                            @foreach($permissions as $permission)
                                <tr>
                                    <td class="txt-oflo">{{ $permission->id }}</td>
                                    <td>{{ $permission->name }}</td>
                                    <td class="txt-oflo">{{ $permission->created_at }}</td>
                                    <td>
                                        <a href="{{ route('permissions.edit', ['permission' => $permission]) }}" class="btn btn-link permission_edit">Edit</a>
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
                <form class="form-horizontal form-material" method="POST" action="{{ route('permissions.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Permission Name</label>
                        <div class="col-md-12">
                            <input type="text" name="name" placeholder="Enter permission name..." class="form-control form-control-line"> 
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Add Permission</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="edit_form"></div>
        </div>
    </div>
@endsection

@section('jsScript')
    <script src="{{ asset('/admin/js/custom/permission_index.js') }}"></script>
@endsection