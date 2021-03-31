@extends('layouts.auth')

@section('content')
<div class="signin-panel">
    <img src="{{ asset('logo/si.jpg')}}" alt="" width="100%">
    <div class="signin-sidebar">
        <div class="signin-sidebar-body">
            <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>Management Tugas Akhir</span></a>
            <h4 class="signin-title">Welcome back!</h4>
            <h5 class="signin-subtitle">Please signin to continue.</h5>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
            <form method="POST" action="{{ url('auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="signin-form">
                    <div class="form-group">
                        <label>Email address</label>
                        <input type="text" class="form-control" name="username" placeholder="Enter your email address" required="">
                    </div>
                    <div class="form-group">
                        <label class="d-flex justify-content-between">
                            <span>Password</span>
                            <a href="" class="tx-13">Forgot password?</a>
                        </label>
                        <input type="password" class="form-control" name="password" placeholder="Enter your password" required="">
                    </div>
                    <div class="form-group d-flex mg-b-0">
                        <button class="btn btn-brand-01 btn-uppercase flex-fill" type="submit">Sign In</button>
                        <a href="#" class="btn btn-white btn-uppercase flex-fill mg-l-10">Sign Up</a>
                    </div>
                    <div class="divider-text mg-y-30"></div>
                </div>
            </form>
            <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">By signing in, you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a></p>
        </div><!-- signin-sidebar-body -->
    </div><!-- signin-sidebar -->
</div><!-- signin-panel -->
@endsection
