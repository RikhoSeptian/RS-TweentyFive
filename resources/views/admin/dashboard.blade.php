@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
        @if (session('message'))
            <h class="alert alert-success">{{ session('message') }},</h>
        @endif

        <div class="me-md-3 me-xl-5">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            {{-- <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p> --}}
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
            <h2>&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</h2>
            <p class="mb-md-0">Your analytics dashboard template.</p>
                <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
                  <i class="mdi mdi-download text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                  <i class="mdi mdi-clock-outline text-muted"></i>
                </button>
                <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
                  <i class="mdi mdi-plus text-muted"></i>
                </button>
            </div>
            <hr>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label for="">Total Orders</label>
                    <h1>{{ $totalOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label for="">Today Orders</label>
                    <h1>{{ $todayOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label for="">This Month Orders</label>
                    <h1>{{ $thisMonthOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-danger text-white mb-3">
                    <label for="">Year Orders</label>
                    <h1>{{ $thisYearOrder }}</h1>
                    <a href="{{ url('admin/orders') }}" class="text-white">View</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label for="">Total Products</label>
                    <h1>{{ $totalProducts }}</h1>
                    <a href="{{ url('admin/products') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label for="">Total Categories</label>
                    <h1>{{ $totalCategories }}</h1>
                    <a href="{{ url('admin/category') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label for="">Total Brands</label>
                    <h1>{{ $totalBrands }}</h1>
                    <a href="{{ url('admin/brands') }}" class="text-white">View</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-body bg-primary text-white mb-3">
                    <label for="">All Users</label>
                    <h1>{{ $totalAllUser }}</h1>
                    <a href="{{ url('admin/users') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-success text-white mb-3">
                    <label for="">Total Users</label>
                    <h1>{{ $totalUser }}</h1>
                    <a href="{{ url('admin/users') }}" class="text-white">View</a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-body bg-warning text-white mb-3">
                    <label for="">Total Admins</label>
                    <h1>{{ $totalAdmin }}</h1>
                    <a href="{{ url('admin/users') }}" class="text-white">View</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

@endsection
