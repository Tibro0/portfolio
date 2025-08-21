@extends('admin.layouts.master')

@section('page-title')
    {{ config('app.name') }} | Create Social Icon
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.social-icon.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Create Social Icon</h5>
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <label class="form-label">Icon <span class="text-danger">*</span> (<a href="https://icons.getbootstrap.com/" target="_blank">https://icons.getbootstrap.com/</a>)</label>
                                    <input type="text" name="icon"
                                        class="form-control @error('icon') is-invalid @enderror"
                                        value="{{ old('title') }}" placeholder="Icon">
                                    @error('icon')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label">URL <span class="text-danger">*</span></label>
                                    <input type="text" name="url"
                                        class="form-control @error('url') is-invalid @enderror"
                                        value="{{ old('url') }}" placeholder="URL">
                                    @error('url')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary px-5">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
