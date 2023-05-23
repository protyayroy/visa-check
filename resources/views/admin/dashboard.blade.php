@php
    $active = 'dashboard';
@endphp
@extends('admin.layouts.layout')
@php
    $dashboard = 'active';
@endphp
@section('title')
    Dashboard
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{ auth()->user()->name }}</h3>
                    </div>
                    <div class="col-12 col-xl-4">
                        <div class="justify-content-end d-flex">
                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                <button class="btn btn-sm btn-light bg-white" type="button"
                                    id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <i class="mdi mdi-calendar"></i> Today {{ date('d-m-Y') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-12 grid-margin transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                            <a href="">
                            <a href="{{ route('order.view', date('d-m-Y')) }}">
                                <div class="card-body">
                                    <p class="mb-4">Today’s Orders</p>
                                    <p class="fs-30 mb-2">
                                        {{ App\Models\Order::where('order_date', date('d-m-Y'))->count() }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                            <a href="">
                            <a href="{{ route('order.view') }}">
                                <div class="card-body">
                                    <p class="mb-4">Total Orders</p>
                                    <p class="fs-30 mb-2">{{ App\Models\Order::count() }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                            <a href="{{ route('product') }}">
                                <div class="card-body">
                                    <p class="mb-4">Number of Products</p>
                                    <p class="fs-30 mb-2">{{ App\Models\Product::count() }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                            <a href="">
                                <div class="card-body">
                                    <p class="mb-4">Number of Users</p>
                                    <p class="fs-30 mb-2">{{ App\Models\User::count() }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
