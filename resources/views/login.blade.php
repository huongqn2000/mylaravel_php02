@extends('layouts.login')
@section('title', 'Login Page')
@section('main')
    <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
        <form method="post" action="{{ route('login.post') }}" style="width: 100%">
            @csrf
            <div class="container">
                <div class="card login-card">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img src="{{ asset('image/login.jpg') }}" alt="login" class="login-card-img">
                            <p class="text-white font-weight-medium text-center flex-grow align-self-end footer-link text-small">
                                Free <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">Bootstrap dashboard templates</a> from Bootstrapdash
                            </p>
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <div class="brand-wrapper">
                                    <img src="{{ asset('image/logo.svg') }}" alt="logo" class="logo">
                                </div>
                                <p class="login-card-description">Sign into your account</p>
                                <form action="#!">
                                    <div class="form-group">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label for="password" class="sr-only">Password</label>
                                        <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                                    </div>
                                    <input name="login" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
                                </form>
                                <a href="#!" class="forgot-password-link">Forgot password?</a>
                                <p class="login-card-footer-text">Don't have an account? <a href="#!" class="text-reset">Register here</a></p>
                                <nav class="login-card-footer-nav">
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </main>
@stop
