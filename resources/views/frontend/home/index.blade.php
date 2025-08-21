@extends('frontend.layouts.master')

@section('page-title')
    {{ config('app.name') }} | Home
@endsection

@section('content')
    <!-- Hero Section -->
    @include('frontend.home.components.hero-section')
    <!-- /Hero Section -->

    <!-- About Section -->
    @include('frontend.home.components.about-section')
    <!-- /About Section -->

    <!-- Skills Section -->
    @include('frontend.home.components.skills-section')
    <!-- /Skills Section -->

    <!-- Resume Section -->
    @include('frontend.home.components.resume-section')
    <!-- /Resume Section -->

    <!-- Services Section -->
    @include('frontend.home.components.services-section')
    <!-- /Services Section -->

    <!-- Portfolio Section -->
    @include('frontend.home.components.portfolio-section')
    <!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    @include('frontend.home.components.testimonials-section')
    <!-- /Testimonials Section -->

    <!-- Faq Section -->
    @include('frontend.home.components.faq-section')
    <!-- /Faq Section -->

    <!-- Contact Section -->
    @include('frontend.home.components.contact-section')
    <!-- /Contact Section -->
@endsection
