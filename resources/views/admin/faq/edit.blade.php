@extends('admin.layouts.master')

@section('page-title')
    {{ config('app.name') }} | Update Faq
@endsection

@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('admin.faq.update',$faq->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <h5 class="d-flex align-items-center mb-3">Update Faq</h5>
                            <div class="row g-3">
                                <div class="col-lg-12">
                                    <label class="form-label">Question <span class="text-danger">*</span></label>
                                    <input type="text" name="question"
                                        class="form-control @error('question') is-invalid @enderror"
                                        value="{{ old('question') ?? $faq->question }}" placeholder="Question">
                                    @error('question')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <label class="form-label">Answer <span class="text-danger">*</span></label>
                                    <textarea name="answer" cols="30" rows="10" class="form-control @error('answer') is-invalid @enderror" placeholder="Answer">{{old('answer') ?? $faq->answer}}</textarea>
                                    @error('answer')
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
