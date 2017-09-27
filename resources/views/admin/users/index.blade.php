@extends('layouts.admin')

@section('content')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">User List</h4> 
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
                                <th>EMAIL</th>
                                <th>CREATED AT</th>
                                <th>OPTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td class="txt-oflo">{{ $user->id }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="txt-oflo">{{ $user->created_at }}</td>
                                    <td>
                                        <a href="{{ route('users.show', ['user' => $user]) }}" class="btn btn-link btn_view_user">View</a>
                                        <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-link btn_edit_user">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4 col-xs-12">
            <div id="edit_form"></div>
            <div id="view_user"></div>
            <div class="white-box">
                <form class="form-horizontal form-material" method="POST" action="{{ route('users.store') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control form-control-line" name="email"placeholder="Enter email..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control form-control-line" name="password" placeholder="Enter password..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Confirm password</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control form-control-line" name="password_confirmation" placeholder="Enter confirm password..." required>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('jsScript')
    <script src="{{ asset('/admin/js/custom/user_index.js') }}"></script>
@endsection