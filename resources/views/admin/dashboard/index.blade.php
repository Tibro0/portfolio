@extends('admin.layouts.master')

@section('page-title')
    {{ config('app.name') }} | Dashboard
@endsection

@section('content')
    <div class="page-content">
        <div class="alert alert-primary border-0 bg-primary alert-dismissible fade show">
            <div class="text-white text-center">Admin Dashboard</div>
        </div>
    </div>
@endsection
