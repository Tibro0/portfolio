<section id="skills" class="skills section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
            <div class="col-lg-8">
                <div class="skills-grid">
                    <div class="row g-4">
                        <div class="col-md-6" data-aos="flip-left" data-aos-delay="200">
                            <div class="skill-card">
                                <div class="skill-header">
                                    <i class="{{ $skillCardTitleOne->icon }}"></i>
                                    <h3>{{ $skillCardTitleOne->title }}</h3>
                                </div>
                                <div class="skills-animation">
                                    @foreach ($frontendSkills as $frontendSkill)
                                        <div class="skill-item">
                                            <div class="skill-info">
                                                <span class="skill-name">{{ $frontendSkill->title }}</span>
                                                <span class="skill-percentage">{{ $frontendSkill->percentage }}%</span>
                                            </div>
                                            <div class="skill-bar progress">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="{{ $frontendSkill->percentage }}" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Frontend Card -->
                        </div>

                        <div class="col-md-6" data-aos="flip-left" data-aos-delay="300">
                            <div class="skill-card">
                                <div class="skill-header">
                                    <i class="{{ $skillCardTitleTwo->icon }}"></i>
                                    <h3>{{ $skillCardTitleTwo->title }}</h3>
                                </div>
                                <div class="skills-animation">
                                    @foreach ($backendSkills as $backendSkill)
                                        <div class="skill-item">
                                            <div class="skill-info">
                                                <span class="skill-name">{{ $backendSkill->title }}</span>
                                                <span class="skill-percentage">{{ $backendSkill->percentage }}%</span>
                                            </div>
                                            <div class="skill-bar progress">
                                                <div class="progress-bar" role="progressbar"
                                                    aria-valuenow="{{ $backendSkill->percentage }}" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- End Backend Card -->
                        </div>

                        <div class="col-md-6" data-aos="flip-left" data-aos-delay="400">
                            <div class="skill-card">
                                <div class="skill-header">
                                    <i class="{{ $skillCardTitleThree->icon }}"></i>
                                    <h3>{{ $skillCardTitleThree->title }}</h3>
                                </div>
                                <div class="skills-animation">
                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Figma</span>
                                            <span class="skill-percentage">85%</span>
                                        </div>
                                        <div class="skill-bar progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="85"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Photoshop</span>
                                            <span class="skill-percentage">70%</span>
                                        </div>
                                        <div class="skill-bar progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Illustrator</span>
                                            <span class="skill-percentage">68%</span>
                                        </div>
                                        <div class="skill-bar progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="68"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Design Card -->
                        </div>

                        <div class="col-md-6" data-aos="flip-left" data-aos-delay="500">
                            <div class="skill-card">
                                <div class="skill-header">
                                    <i class="{{ $skillCardTitleFour->icon }}"></i>
                                    <h3>{{ $skillCardTitleFour->title }}</h3>
                                </div>
                                <div class="skills-animation">
                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">AWS</span>
                                            <span class="skill-percentage">76%</span>
                                        </div>
                                        <div class="skill-bar progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="76"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Docker</span>
                                            <span class="skill-percentage">73%</span>
                                        </div>
                                        <div class="skill-bar progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="73"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                    <div class="skill-item">
                                        <div class="skill-info">
                                            <span class="skill-name">Git</span>
                                            <span class="skill-percentage">90%</span>
                                        </div>
                                        <div class="skill-bar progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End DevOps Card -->
                        </div>
                    </div>
                </div>
                <!-- End Skills Grid -->
            </div>

            <div class="col-lg-4">
                <div class="skills-summary" data-aos="fade-left" data-aos-delay="200">
                    <h3>Professional Expertise</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        Ut enim ad minim veniam.
                    </p>

                    <div class="summary-stats">
                        @foreach ($counters as $counter)
                            @if ($loop->index == 0)
                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="stat-circle">
                                        <i class="{{ $counter->icon }}"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">{{ $counter->number }}+</span>
                                        <span class="stat-label">{{ $counter->title }}</span>
                                    </div>
                                </div>
                            @elseif ($loop->index == 1)
                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="stat-circle">
                                        <i class="{{ $counter->icon }}"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">{{ $counter->number }}+</span>
                                        <span class="stat-label">{{ $counter->title }}</span>
                                    </div>
                                </div>
                            @elseif ($loop->index == 2)
                                <div class="stat-item" data-aos="zoom-in" data-aos-delay="500">
                                    <div class="stat-circle">
                                        <i class="{{ $counter->icon }}"></i>
                                    </div>
                                    <div class="stat-info">
                                        <span class="stat-number">{{ $counter->number }}+</span>
                                        <span class="stat-label">{{ $counter->title }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <div class="skills-badges" data-aos="fade-up" data-aos-delay="600">
                        <h4>Certifications</h4>
                        <div class="badge-list">
                            <div class="skill-badge">AWS Certified</div>
                            <div class="skill-badge">Laravel Expert</div>
                            <div class="skill-badge">Vue.js Developer</div>
                            <div class="skill-badge">UI/UX Design</div>
                        </div>
                    </div>
                </div>
                <!-- End Skills Summary -->
            </div>
        </div>
    </div>
</section>
