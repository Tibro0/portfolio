<section id="contact" class="contact section light-background">
    <!-- Section Title -->
    <div class="container section-title">
        <h2>Contact</h2>
        <p>Results-driven innovator building high-performing teams and transformative products.</p>
    </div>
    <!-- End Section Title -->
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                    <h3>Contact Info</h3>
                    <p>Your link to innovative tech leadership and transformative growth. Let's connect.</p>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="content">
                            <h4>Our Location</h4>
                            <p>A108 Adam Street</p>
                            <p>New York, NY 535022</p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="content">
                            <h4>Phone Number</h4>
                            <p><a href="">+1 5589 55488 55</a></p>
                            <p><a href="">+1 6678 254445 41</a></p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Email Address</h4>
                            <p><a href="">info@example.com</a></p>
                            <p><a href="">contact@example.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                    <h3>Get In Touch</h3>
                    <p>Ready to connect? Send a message and let's start a conversation.</p>
                    <form action="{{ route('contact-form') }}" method="POST" data-aos="fade-up"
                        data-aos-delay="200">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid border-danger @enderror" placeholder="Your name"/>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <input type="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid border-danger @enderror" placeholder="Your Email"/>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control @error('subject') is-invalid border-danger @enderror"
                                    name="subject" value="{{ old('subject') }}" placeholder="Subject"/>
                                @error('subject')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <textarea class="form-control @error('message') is-invalid border-danger @enderror" name="message" rows="6" placeholder="Message">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
