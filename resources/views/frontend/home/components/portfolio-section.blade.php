<section id="portfolio" class="portfolio section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>{{ $sectionTitle['portfolio_main_title'] }}</h2>
        <p>{{ $sectionTitle['portfolio_sub_title'] }}</p>
    </div>
    <!-- End Section Title -->

    <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
                <li data-filter="*" class="filter-active">
                    <i class="bi bi-grid-3x3"></i> All Projects
                </li>
                @foreach ($categories as $category)
                    <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                @endforeach
            </ul>

            <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
                @foreach ($categories as $category)
                    @php
                        $portfolios = App\Models\Portfolio::with(['category'])
                            ->where('category_id', $category->id)
                            ->get();
                    @endphp
                    @foreach ($portfolios as $portfolio)
                        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item {{ $category->slug }}">
                            <article class="portfolio-entry">
                                <figure class="entry-image">
                                    <img src="{{ asset($portfolio->thumb_image) }}" class="img-fluid" alt=""
                                        loading="lazy" />
                                    <div class="entry-overlay">
                                        <div class="overlay-content">
                                            <div class="entry-meta">{{ $portfolio->frontend_title }}</div>
                                            <h3 class="entry-title">{{ $portfolio->frontend_description }}</h3>
                                            <div class="entry-links">
                                                <a href="{{ asset($portfolio->thumb_image) }}" class="glightbox"
                                                    data-gallery="portfolio-gallery-ui"
                                                    data-glightbox="title: {{ $portfolio->preview_title }}; description: {{ $portfolio->preview_description }}">
                                                    <i class="bi bi-arrows-angle-expand"></i>
                                                </a>
                                                <a target="_blank" href="{{ $portfolio->live_link }}">
                                                    <i class="bi bi-arrow-up-right"></i>
                                                </a>
                                                @if ($portfolio->github_link)
                                                    <a target="_blank" href="{{ $portfolio->github_link }}">
                                                        <i class="bi bi-github"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </figure>
                            </article>
                        </div>
                    @endforeach
                @endforeach
            </div>
            <!-- End Portfolio Container -->
        </div>
    </div>
</section>
