<section id="services" class="services section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>{{ $sectionTitle['services_main_title'] }}</h2>
        <p>{{ $sectionTitle['services_sub_title'] }}</p>
    </div>
    <!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4">
            <!-- Card 1 -->
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 10 }}">
                    <div class="service-item">
                        <div class="icon">
                            <i class="{{ $service->icon }}"></i>
                        </div>
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                        {{-- <div class="card-links">
                            <a href="javascript:;" class="link-item">
                                Learn More
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div> --}}
                    </div>
                </div>
            @endforeach
            <!-- End Service Item -->
        </div>
    </div>
</section>
