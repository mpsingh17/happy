@extends('layouts.error')

@section('content')  
    <div class="error-box">
        <div class="error-body text-center">
            <h1>404</h1>
            <h3 class="text-uppercase">{{ $flag }} Not Found !</h3>
            <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
            @if(Auth::check())
                <a href="{{ route('user.dashboard') }}" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a>     
            @else
                <a href="/" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back to home</a>    
            @endif
            <footer class="footer text-center"> 2017 &copy; Hapyy31 Group </footer>
        </div>
    </div>
@endsection
