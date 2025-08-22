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
                            <h5 class="d-flex align-items-center mb-3">Update About Information</h5>
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
                                    <label class="form-label">Signature Description <span class="text-danger">*</span></label>
                                    <input type="text" name="signature_description"
                                        class="form-control @error('signature_description') is-invalid @enderror"
                                        value="{{ $about->signature_description }}">
                                    @error('signature_description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$about->description}}</textarea>
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
