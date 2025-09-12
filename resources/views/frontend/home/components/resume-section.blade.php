<section id="resume" class="resume section">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>{{$sectionTitle['resume_main_title']}}</h2>
        <p>{{$sectionTitle['resume_sub_title']}}</p>
    </div>
    <!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <div class="experience-section">
                    <div class="section-header">
                        <h2><i class="bi bi-briefcase"></i> {{@$sectionTitle['professional_journey_title']}}</h2>
                        <p class="section-subtitle">{{@$sectionTitle['professional_journey_description']}}</p>
                    </div>

                    <div class="experience-cards">
                        @foreach ($professionalJourneys as $professionalJourney)
                            <div class="experience-card" data-aos="zoom-in"
                                data-aos-delay="{{ $loop->iteration * 10 }}">
                                <div class="card-header">
                                    <div class="role-info">
                                        <h3>{{ $professionalJourney->title }}</h3>
                                        <h4>{{ $professionalJourney->sub_title }}</h4>
                                    </div>
                                    <span class="duration">{{ $professionalJourney->year }}</span>
                                </div>
                                <div class="card-body">
                                    <p>{{ $professionalJourney->description }}</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
                <div class="experience-section">
                    <div class="section-header">
                        <h2><i class="bi bi-mortarboard"></i>  {{@$sectionTitle['academic_excellences_title']}}</h2>
                        <p class="section-subtitle"> {{@$sectionTitle['academic_excellences_description']}}</p>
                    </div>

                    <div class="experience-cards">
                        @foreach ($academicExcellences as $academicExcellence)
                            <div class="experience-card" data-aos="zoom-in" data-aos-delay="{{ $loop->iteration * 10 }}">
                                <div class="card-header">
                                    <div class="role-info">
                                        <h3>{{ $academicExcellence->title }}</h3>
                                        <h4>{{ $academicExcellence->sub_title }}</h4>
                                    </div>
                                    <span class="duration">{{ $academicExcellence->year }}</span>
                                </div>
                                <div class="card-body">
                                    <p>{{ $academicExcellence->description }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
