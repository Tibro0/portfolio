<section id="faq" class="faq section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>{{ $sectionTitle['faq_main_title'] }}</h2>
        <p>{{ $sectionTitle['faq_sub_title'] }}</p>
    </div>
    <!-- End Section Title -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <div class="faq-container">
                    @foreach ($faqs as $faq)
                        <div class="faq-item {{ $loop->iteration === 1 ? 'faq-active' : '' }}">
                            <h3>{{ $faq->question }}</h3>
                            <div class="faq-content">
                                <p>{{ $faq->answer }}</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- End Faq Column-->
        </div>
    </div>
</section>
