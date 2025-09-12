@extends('admin.layouts.master')

@section('page-title')
    {{ config('app.name') }} | About Section
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">
                            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                                <div class="breadcrumb-title border-0 pe-3">Update About Information</div>
                                <div class="ms-auto">
                                    <button type="button" class="btn btn-outline-primary px-5" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Main Title Update</button>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <label class="form-label">Preview</label><br>
                                    <img src="{{ asset($about->signature) }}" width="100">
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Signature (PNG)</label>
                                    <input type="file" name="signature"
                                        class="form-control @error('signature') is-invalid @enderror">
                                    @error('signature')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label">Signature Description <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="signature_description"
                                        class="form-control @error('signature_description') is-invalid @enderror"
                                        value="{{ $about->signature_description }}">
                                    @error('signature_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" cols="30" rows="10"
                                        class="form-control @error('description') is-invalid @enderror">{{ $about->description }}</textarea>
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

@section('model')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">About Title Update</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.about.main-title.update') }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-lg-12">
                                <label class="form-label">About Main Title <span class="text-danger">*</span></label>
                                <input type="text" name="about_main_title"
                                    class="form-control @error('about_main_title') is-invalid @enderror"
                                    value="{{ old('about_main_title') ?? $title['about_main_title'] }}" placeholder="About Main Title">
                                @error('about_main_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <label class="form-label">About Sub Title <span class="text-danger">*</span></label>
                                <input type="text" name="about_sub_title"
                                    class="form-control @error('about_sub_title') is-invalid @enderror"
                                    value="{{ old('about_sub_title') ?? $title['about_sub_title'] }}" placeholder="About Sub Title">
                                @error('about_sub_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-primary px-5">Save Changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
