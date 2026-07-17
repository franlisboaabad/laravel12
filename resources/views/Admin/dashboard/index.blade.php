@extends('Admin.layouts.app')

@section('title', 'Dashboard — ' . config('app.name'))

@section('content')
<div class="row">
    <div class="col-lg-8 mb-6 order-0">
        <div class="card">
            <div class="d-flex align-items-start row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary mb-3">Welcome to {{ config('app.name') }} 🎉</h5>
                        <p class="mb-6">
                            Base project with Sneat Bootstrap admin template.<br />
                            Ready to build your next application.
                        </p>
                        <a href="javascript:;" class="btn btn-sm btn-outline-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-sm-5 text-center text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-6">
                        <img
                            src="{{ asset('assets/img/illustrations/man-with-laptop.png') }}"
                            height="175"
                            alt="Welcome"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-4 order-1">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-6 mb-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/chart-success.png') }}" alt="chart" class="rounded" />
                            </div>
                        </div>
                        <p class="mb-1">Profit</p>
                        <h4 class="card-title mb-3">$12,628</h4>
                        <small class="text-success fw-medium"><i class="icon-base bx bx-up-arrow-alt"></i> +72.80%</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-6 mb-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between mb-4">
                            <div class="avatar flex-shrink-0">
                                <img src="{{ asset('assets/img/icons/unicons/wallet-info.png') }}" alt="wallet" class="rounded" />
                            </div>
                        </div>
                        <p class="mb-1">Sales</p>
                        <h4 class="card-title mb-3">$4,679</h4>
                        <small class="text-success fw-medium"><i class="icon-base bx bx-up-arrow-alt"></i> +28.42%</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
