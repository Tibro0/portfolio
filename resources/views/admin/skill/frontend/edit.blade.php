@extends('admin.layouts.master')

@section('page-title')
    {{ config('app.name') }} | Update Frontend Skill
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.frontend-skill.update', $frontendSkill->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Update Backend Skill</h5>
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <label class="form-label">Title <span class="text-danger">*</span></label>
                                    <input type="text" name="title"
                                        class="form-control @error('title') is-invalid @enderror"
                                        value="{{ old('title') ?? $frontendSkill->title }}" placeholder="Title">
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <label class="form-label">Percentage <span class="text-danger">*</span> (95)</label>
                                    <input type="text" name="percentage"
                                        class="form-control @error('percentage') is-invalid @enderror"
                                        value="{{ old('percentage') ?? $frontendSkill->percentage }}" placeholder="Percentage">
                                    @error('percentage')
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
