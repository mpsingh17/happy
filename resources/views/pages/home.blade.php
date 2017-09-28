@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <img src="{{ asset('img/misc/home-bg.png') }}" class="img-responsive" height="400px">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-xs-12">
            <div class="white-box">
                <h2 class="text-primary text-center">Register</h2>
                <form class="form-horizontal form-material" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" placeholder="Enter your email" class="form-control form-control-line" name="email" value="{{ old('email') }}" required> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" placeholder="Enter password..." class="form-control form-control-line" name="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Confirm Password</label>
                        <div class="col-md-12">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="col-md-6 col-xs-12">
            <div class="white-box">
                <h2 class="text-primary text-center">Log In</h2>
                <form class="form-horizontal form-material" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Email</label>
                        <div class="col-md-12">
                            <input type="email" placeholder="Enter your email" class="form-control form-control-line" name="email" value="{{ old('email') }}" required> 
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="example-email" class="col-md-12">Password</label>
                        <div class="col-md-12">
                            <input type="password" placeholder="Enter password..." class="form-control form-control-line"  name="password" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <button class="btn btn-success">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection