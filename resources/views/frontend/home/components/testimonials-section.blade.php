<section id="testimonials" class="testimonials section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>{{ $sectionTitle['testimonial_main_title'] }}</h2>
        <p>{{ $sectionTitle['testimonial_sub_title'] }}</p>
    </div>
    <!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-12">
                <div class="testimonials-container">
                    <div class="swiper testimonials-slider init-swiper" data-aos="fade-up" data-aos-delay="400">
                        <script type="application/json" class="swiper-config">
                    {
                      "loop": true,
                      "speed": 600,
                      "autoplay": {
                        "delay": 5000
                      },
                      "slidesPerView": 1,
                      "spaceBetween": 30,
                      "pagination": {
                        "el": ".swiper-pagination",
                        "type": "bullets",
                        "clickable": true
                      },
                      "breakpoints": {
                        "768": {
                          "slidesPerView": 2
                        },
                        "992": {
                          "slidesPerView": 3
                        }
                      }
                    }
                  </script>
                        <div class="swiper-wrapper">
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="stars">
                                            @for ($i = 1; $i <= $testimonial->ratting; $i++)
                                                <i class="bi bi-star-fill"></i>
                                            @endfor
                                        </div>
                                        <p>{{ $testimonial->description }}</p>
                                        <div class="testimonial-profile">
                                            <img src="{{ asset($testimonial->image) }}" alt="Reviewer"
                                                class="img-fluid rounded-circle" />
                                            <div>
                                                <h3>{{ $testimonial->name }}</h3>
                                                <h4>{{ $testimonial->designation }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
