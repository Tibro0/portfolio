@extends('admin.layouts.master')

@section('page-title')
    {{ config('app.name') }} | Create Professional Journey
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.professional-journey.store') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Create Professional Journey</h5>
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <label class="form-label">Year <span class="text-danger">*</span></label>
                                    <input type="text" name="year"
                                        class="form-control @error('year') is-invalid @enderror"
                                        value="{{ old('year') }}" placeholder="Year">
                                    @error('year')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title') }}" placeholder="Title">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label">Sub Title <span class="text-danger">*</span></label>
                                    <input type="text" name="sub_title"
                                        class="form-control @error('sub_title') is-invalid @enderror"
                                        value="{{ old('sub_title') }}" placeholder="Sub Title">
                                    @error('sub_title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" placeholder="Description">{{ old('description') }}</textarea>
                                    @error('description')
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
