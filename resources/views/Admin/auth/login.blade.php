@extends('Admin.layouts.auth')

@section('title', 'Login — ' . config('app.name'))

@section('content')
<div class="card px-sm-6 px-0">
    <div class="card-body">
        <div class="app-brand justify-content-center mb-6">
            <a href="{{ route('dashboard') }}" class="app-brand-link gap-2">
                @include('Admin.layouts.sections.logo')
                <span class="app-brand-text demo text-heading fw-bold">{{ config('app.name') }}</span>
            </a>
        </div>

        <h4 class="mb-1">Welcome! 👋</h4>
        <p class="mb-6">Please sign-in to your account</p>

        <form id="formAuthentication" class="mb-6" action="{{ route('dashboard') }}" method="GET">
            <div class="mb-6">
                <label for="email" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    autofocus
                />
            </div>
            <div class="mb-6 form-password-toggle">
                <label class="form-label" for="password">Password</label>
                <div class="input-group input-group-merge">
                    <input
                        type="password"
                        id="password"
                        class="form-control"
                        name="password"
                        placeholder="············"
                        aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
                </div>
            </div>
            <div class="mb-8">
                <div class="d-flex justify-content-between">
                    <div class="form-check mb-0">
                        <input class="form-check-input" type="checkbox" id="remember-me" />
                        <label class="form-check-label" for="remember-me">Remember Me</label>
                    </div>
                    <a href="javascript:void(0);">
                        <span>Forgot Password?</span>
                    </a>
                </div>
            </div>
            <div class="mb-6">
                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
            </div>
        </form>
    </div>
</div>
@endsection
