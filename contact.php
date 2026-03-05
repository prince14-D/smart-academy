<?php include("includes/header.php"); ?>

<!-- Hero Banner -->
<section class="hero-section">
    <div class="hero-slide">
        <img src="assests/images/banner3.jpeg" class="hero-slide-image" alt="Contact Smart Academy">
        <div class="container text-center text-white hero-content">
            <div class="hero-text">
                <h1 class="display-3 fw-bold mb-4 animate-fade-in">Contact Us</h1>
                <p class="lead mb-5 animate-slide-up">We're Here to Help</p>
                <p class="fs-5 mb-4 animate-slide-up">We'd love to hear from you</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Get In Touch</h2>
            <p class="section-subtitle mt-3">Reach out to us through any of these channels</p>
        </div>

        <div class="row g-4 mb-5">
            <!-- Phone -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #FF9500, #FFD400);">
                        <i class="bi bi-telephone-fill"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Call Us</h5>
                    <p class="mb-2">
                        <a href="tel:+231776061890" style="color: var(--primary-blue); text-decoration: none; font-weight: 600; font-size: 1.1rem;">
                            +231-776-061-890
                        </a>
                    </p>
                    <p class="text-muted small">Available Mon-Fri, 8:00 AM - 4:00 PM</p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #3498DB, #2980B9);">
                        <i class="bi bi-envelope-fill"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Email Us</h5>
                    <p class="mb-2">
                        <a href="mailto:info@smartacademy.com" style="color: var(--primary-blue); text-decoration: none; font-weight: 600;">
                            info@smartacademy.com
                        </a>
                    </p>
                    <p class="text-muted small">We respond within 24 hours</p>
                </div>
            </div>

            <!-- Location -->
            <div class="col-md-4">
                <div class="feature-card text-center">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #27AE60, #16A085);">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Visit Us</h5>
                    <p class="mb-2" style="color: var(--primary-blue); font-weight: 600;">
                        Liberia
                    </p>
                    <p class="text-muted small">Call for exact directions and hours</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form -->
<section class="light-bg py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Form -->
            <div class="col-lg-8">
                <div class="feature-card">
                    <h3 class="fw-bold text-primary-blue mb-4">Send us a Message</h3>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Full Name" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="email@example.com" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" placeholder="+231..." required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <select class="form-select" required>
                                <option selected disabled>Select Subject</option>
                                <option>General Inquiry</option>
                                <option>Admissions Question</option>
                                <option>Academic Concern</option>
                                <option>Feedback</option>
                                <option>Complaint</option>
                                <option>Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" placeholder="Your message here..." required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 fw-bold">
                            <i class="bi bi-send"></i> Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Side Info -->
            <div class="col-lg-4">
                <div class="feature-card bg-light">
                    <h5 class="fw-bold text-primary-blue mb-4">Quick Info</h5>
                    
                    <div class="mb-4 pb-4 border-bottom">
                        <h6 class="fw-bold text-primary-blue mb-2">School Hours</h6>
                        <p class="text-muted small mb-0">
                            <strong>Monday - Friday:</strong><br>
                            7:30 AM - 3:30 PM<br><br>
                            <strong>Saturday:</strong><br>
                            By appointment
                        </p>
                    </div>

                    <div class="mb-4 pb-4 border-bottom">
                        <h6 class="fw-bold text-primary-blue mb-2">Department Contacts</h6>
                        <p class="text-muted small mb-2">
                            <strong>Admissions:</strong><br>
                            admissions@smartacademy.com<br><br>
                            <strong>Academics:</strong><br>
                            academics@smartacademy.com
                        </p>
                    </div>

                    <div>
                        <h6 class="fw-bold text-primary-blue mb-2">Office Staff</h6>
                        <p class="text-muted small mb-0">
                            Available for inquiries and assistance during school hours.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle mt-3">Quick answers to common questions</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-8 mx-auto">
                <!-- FAQ Item 1 -->
                <div class="accordion accordion-flush mb-3" id="faq1">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                What is the admission process for Smart Academy?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faq1">
                            <div class="accordion-body">
                                The admission process includes submitting an application form, having your child assessed, visiting our campus, and completing enrollment. The entire process typically takes 1-2 weeks. Please visit our Admissions page for detailed information.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="accordion accordion-flush mb-3" id="faq2">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                What are the school hours?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faq2">
                            <div class="accordion-body">
                                School hours are Monday to Friday, 7:30 AM to 3:30 PM for all classes. Day Care students can be picked up as early as 4:00 PM. Extended care is available until 5:00 PM for an additional fee.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="accordion accordion-flush mb-3" id="faq3">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                What subjects are taught?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faq3">
                            <div class="accordion-body">
                                We offer a comprehensive curriculum including English, Mathematics, Science, Social Studies, Physical Education, Arts, Music, and Computer Studies. The curriculum is age-appropriate for each level.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="accordion accordion-flush mb-3" id="faq4">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4">
                                What is the teacher-student ratio?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#faq4">
                            <div class="accordion-body">
                                Day Care: 1:3, Nursery: 1:5, and Elementary: 1:25. We maintain small class sizes to ensure individual attention to each child.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="accordion accordion-flush mb-3" id="faq5">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                Are scholarships available?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faq5">
                            <div class="accordion-body">
                                Yes, we offer academic excellence scholarships, need-based assistance, sibling discounts, and talent-based scholarships. Visit our Admissions page or contact our office for more information on eligibility.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="accordion accordion-flush mb-3" id="faq6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6">
                                How often do you communicate with parents?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faq6">
                            <div class="accordion-body">
                                We maintain regular communication through report cards (3x per year), parent-teacher conferences, SMS updates, and email. We also send monthly newsletters and host special events.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="accordion accordion-flush" id="faq7">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7">
                                What safety measures do you have?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#faq7">
                            <div class="accordion-body">
                                Student safety is our top priority. We have competent security staff, CCTV surveillance, controlled access, secure fencing, and regular safety drills. All staff members are trained in emergency procedures.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="admission-cta py-5">
    <div class="container text-center" style="color: white;">
        <h2 class="display-5 fw-bold mb-3">Have More Questions?</h2>
        <p class="lead fs-5 mb-4">Our team is ready to help! Call or email us anytime</p>
        <div>
            <a href="tel:+231776061890" class="btn btn-light btn-lg fw-bold me-3 mb-2">
                <i class="bi bi-telephone"></i> Call Us
            </a>
            <a href="mailto:info@smartacademy.com" class="btn btn-light btn-lg fw-bold mb-2">
                <i class="bi bi-envelope"></i> Email Us
            </a>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>
