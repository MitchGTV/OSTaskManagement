@extends('layouts.guest')

@section('content')

    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            <div class="container">
                <div class="row flex-center min-vh-100 py-5">
                    <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3">
                        <a class="d-flex flex-center text-decoration-none mb-4" href="../../../index.html"></a>
                        <div class="text-center mb-7">
                            <h3 class="text-1000">Sign Up</h3>
                            <p class="text-700">Create your account today</p>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3 text-start">
                                <label class="form-label" for="name">Name</label>
                                <input class="form-control" name="name" id="name" type="text" placeholder="Name" required />
                            </div>
                            <div class="mb-3 text-start">
                                <label class="form-label" for="email">Email address</label>
                                <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" required /></div>
                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="password">Password</label>
                                    <input class="form-control form-icon-input" id="password" name="password" type="password" placeholder="Password" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="password_confirmation">Confirm Password</label>
                                    <input class="form-control form-icon-input" id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm Password" />
                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" id="termsService" type="checkbox" />
                                <label class="form-label fs--1 text-none" for="termsService">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                            </div>
                            <button class="btn btn-primary w-100 mb-3" type="submit">Sign up</button>
                            <div class="text-center">
                                <a class="fs--1 fw-bold" href="{{ route('login') }}">Sign in to an existing account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>

@endsection
