<?php include("includes/header.php"); ?>

<!-- ============================================
     HERO SECTION
     ============================================ -->
<section class="hero-section">
    <div id="heroSlider" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-slide hero-slide-1">
                    <img src="assests/images/banner1.jpeg" class="hero-slide-image" alt="Smart Academy School Campus">
                    <div class="container text-center text-white hero-content">
                        <h1 class="display-3 fw-bold mb-3">Welcome to Smart Academy School</h1>
                        <p class="lead fs-5 mb-2">Private Primary School & Semi Junior High</p>
                        <p class="motto fs-6 mb-4">Strive for Quality Education & Discipline</p>
                        <a href="admissions.php" class="cta-button">
                            <i class="bi bi-pencil-square"></i> Apply for Admission Today
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-slide hero-slide-2">
                    <img src="assests/images/banner2.jpeg" class="hero-slide-image" alt="Smart Academy Classroom Learning">
                    <div class="container text-center text-white hero-content">
                        <h1 class="display-3 fw-bold mb-3">Building Future Leaders</h1>
                        <p class="lead fs-5 mb-2">Quality academics, discipline, and character development</p>
                        <p class="motto fs-6 mb-4">A safe environment where every learner can thrive</p>
                        <a href="academics.php" class="cta-button">
                            <i class="bi bi-book-fill"></i> Explore Our Programs
                        </a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-slide hero-slide-3">
                    <img src="assests/images/banner3.jpeg" class="hero-slide-image" alt="Smart Academy Students Activities">
                    <div class="container text-center text-white hero-content">
                        <h1 class="display-3 fw-bold mb-3">Admissions Are Open</h1>
                        <p class="lead fs-5 mb-2">Join the Smart Academy School family today</p>
                        <p class="motto fs-6 mb-4">Start your child’s journey to excellence</p>
                        <a href="contact.php" class="cta-button">
                            <i class="bi bi-telephone-fill"></i> Contact Admissions
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- ============================================
     ABOUT SECTION
     ============================================ -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <h2 class="section-title mb-3">About Smart Academy</h2>
                <p class="section-subtitle">
                    Smart Academy is a premier educational institution dedicated to providing quality early childhood and elementary education in a nurturing, disciplined, and stimulating environment.
                </p>
                <p class="mb-3">
                    We believe in developing confident, independent thinkers who are equipped with strong academic foundations, excellent discipline, and a love for continuous learning. Our school foster excellence through innovative teaching methods, qualified educators, and a student-centered approach.
                </p>
                <ul class="list-unstyled mb-4">
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> <strong>Expert Educators:</strong> Highly qualified and experienced teachers</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> <strong>Safe Campus:</strong> Modern facilities and secure environment</li>
                    <li class="mb-2"><i class="bi bi-check-circle-fill text-success"></i> <strong>Holistic Development:</strong> Academic & character building focus</li>
                    <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Individual Attention:</strong> Small class sizes for personalized care</li>
                </ul>
                <a href="about.php" class="cta-button">Learn More About Us</a>
            </div>
            <div class="col-lg-6">
                <div class="ratio ratio-16x9">
                    <img src="assests/images/banner1.jpeg" class="img-fluid rounded-3xl shadow-lg" alt="Smart Academy Campus" style="object-fit: cover; border-radius: 15px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     PROGRAMS SECTION
     ============================================ -->
<section class="light-bg py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Programs</h2>
            <p class="section-subtitle mt-3">Comprehensive education programs designed for every developmental stage</p>
        </div>

        <div class="row g-4">
            <!-- Day Care Program -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-heart-fill"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Day Care Program</h4>
                    <p class="text-muted mb-3">Nurturing and safe care for infants and toddlers ages 6 months to 2 years with emphasis on basic development and socialization.</p>
                    <ul class="list-unstyled small">
                        <li><i class="bi bi-star"></i> Small group care</li>
                        <li><i class="bi bi-star"></i> Play-based learning</li>
                        <li><i class="bi bi-star"></i> Nutritious meals</li>
                    </ul>
                </div>
            </div>

            <!-- Nursery Program -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-book-fill"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Nursery Classes</h4>
                    <p class="text-muted mb-3">Early childhood education for ages 2-4 years focusing on basic literacy, numeracy, and social-emotional skill development.</p>
                    <ul class="list-unstyled small">
                        <li><i class="bi bi-star"></i> Interactive learning</li>
                        <li><i class="bi bi-star"></i> Creative activities</li>
                        <li><i class="bi bi-star"></i> Language development</li>
                    </ul>
                </div>
            </div>

            <!-- Elementary School -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card">
                    <div class="feature-icon mb-3">
                        <i class="bi bi-mortarboard-fill"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Elementary School</h4>
                    <p class="text-muted mb-3">Comprehensive primary education for grades 1-6 with strong focus on academics, discipline, and character development.</p>
                    <ul class="list-unstyled small">
                        <li><i class="bi bi-star"></i> Rigorous academics</li>
                        <li><i class="bi bi-star"></i> Extracurricular activities</li>
                        <li><i class="bi bi-star"></i> Character building</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     WHY CHOOSE US SECTION
     ============================================ -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Why Choose Smart Academy</h2>
            <p class="section-subtitle mt-3">Excellence in education through dedicated commitment</p>
        </div>

        <div class="row g-4">
            <!-- Qualified Teachers -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-person-badge"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Qualified Teachers</h5>
                    <p>Our team comprises experienced and certified educators committed to excellence and individual student development with modern teaching methodologies.</p>
                </div>
            </div>

            <!-- Safe & Modern Facilities -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-building"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Safe Facilities</h5>
                    <p>State-of-the-art infrastructure with modern classrooms, computer labs, library, playground, and strict security measures ensuring student safety.</p>
                </div>
            </div>

            <!-- Holistic Development -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-lightbulb"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Holistic Education</h5>
                    <p>Beyond academics, we emphasize discipline, character building, sports, arts, and life skills to develop well-rounded individuals prepared for success.</p>
                </div>
            </div>

            <!-- Small Class Sizes -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Personalized Attention</h5>
                    <p>Maintain optimal student-teacher ratios to provide individualized attention and ensure every child receives support tailored to their needs.</p>
                </div>
            </div>

            <!-- Discipline & Values -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-award-fill"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Discipline & Values</h5>
                    <p>Strong emphasis on discipline, respect, integrity, and positive values creating a conducive environment for learning and growth.</p>
                </div>
            </div>

            <!-- Parent Partnership -->
            <div class="col-lg-4 col-md-6">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="bi bi-chat-heart"></i>
                    </div>
                    <h5 class="fw-bold text-primary-blue">Parent Engagement</h5>
                    <p>Regular communication with parents through reports, meetings, and events to keep families involved in their children's educational journey.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     PRINCIPAL'S MESSAGE
     ============================================ -->
<section class="light-bg py-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-4 text-center">
                <img src="assests/images/principal.jpg" class="rounded-circle shadow-lg" width="250" alt="School Principal" style="object-fit: cover; height: 250px;">
            </div>
            <div class="col-lg-8">
                <h2 class="section-title mb-4">Message from Our Principal</h2>
                <p class="fs-6 lh-lg mb-4">
                    <strong>Welcome to Smart Academy,</strong> where we believe education transcends textbooks and examinations. Our mission is to nurture young minds and shape future leaders with strong academic foundations, uncompromising discipline, and excellent moral character.
                </p>
                <p class="fs-6 lh-lg mb-4">
                    Every child who walks through our doors is unique, with unlimited potential. We are committed to providing an environment where each student can flourish academically, socially, and emotionally. Our teachers, staff, and parents work collaboratively to ensure that our children not only excel in their studies but develop into responsible, compassionate, and productive members of society.
                </p>
                <p class="fs-6 lh-lg">
                    We invite you to visit our campus and experience the Smart Academy difference. Together, let's prepare our children for a bright future.
                </p>
                <div class="mt-4">
                    <h6 class="fw-bold text-primary-blue">School Principal</h6>
                    <p class="text-muted small mb-0">Principal, Smart Academy School</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     TESTIMONIALS SECTION
     ============================================ -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">What Parents Say</h2>
            <p class="section-subtitle mt-3">Hear from our satisfied parents and guardians</p>
        </div>

        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">"My daughter has shown remarkable growth since joining Smart Academy. The teachers are dedicated, caring, and truly invested in her development. We couldn't be happier!"</p>
                    <h6 class="testimonial-author">Maria Johnson</h6>
                    <p class="testimonial-role">Parent, Grade 2</p>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">"Smart Academy's focus on discipline combined with quality education is exactly what we were looking for. Our son is thriving academically and socially!"</p>
                    <h6 class="testimonial-author">Ahmed Hassan</h6>
                    <p class="testimonial-role">Parent, Grade 4</p>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="col-lg-4 col-md-6">
                <div class="testimonial-card">
                    <div class="mb-3">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                    <p class="testimonial-text">"The communication from teachers and the school is excellent. We always know what's happening and how we can support our child's learning at home."</p>
                    <h6 class="testimonial-author">Fatima Williams</h6>
                    <p class="testimonial-role">Parent, Nursery Class</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     GALLERY SECTION
     ============================================ -->
<section class="light-bg py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">School Gallery</h2>
            <p class="section-subtitle mt-3">Moments of learning and growth at Smart Academy</p>
        </div>

        <div class="gallery-grid mb-4">
            <div class="gallery-item">
                <img src="assests/images/gallery1.jpg" alt="Classroom Activities">
                <div class="gallery-overlay">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assests/images/gallery2.jpg" alt="Sports Activities">
                <div class="gallery-overlay">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assests/images/gallery3.jpg" alt="School Events">
                <div class="gallery-overlay">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assests/images/gallery1.jpg" alt="Campus Tour">
                <div class="gallery-overlay">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assests/images/gallery2.jpg" alt="Graduation">
                <div class="gallery-overlay">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="assests/images/gallery3.jpg" alt="Art Activities">
                <div class="gallery-overlay">
                    <i class="bi bi-eye"></i>
                </div>
            </div>
        </div>

        <div class="text-center">
            <a href="gallery.php" class="cta-button">View Full Gallery</a>
        </div>
    </div>
</section>

<!-- ============================================
     ADMISSION CTA
     ============================================ -->
<section class="admission-cta py-5">
    <div class="container text-center" style="color: white;">
        <h2 class="display-5 fw-bold mb-3">Admissions are Open</h2>
        <p class="lead fs-5 mb-4">
            Enroll your child today at Smart Academy and give them the quality education and discipline they deserve. Limited spots available!
        </p>
        <a href="admissions.php" class="btn btn-light btn-lg fw-bold">
            <i class="bi bi-pencil-square"></i> Apply Now
        </a>
    </div>
</section>

<!-- ============================================
     CALL TO ACTION CONTACT
     ============================================ -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title mb-4">Have Questions?</h2>
        <p class="section-subtitle mb-4">We're here to help! Get in touch with us for more information about our programs and enrollment process.</p>
        
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #FF9500, #FFD400);">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <h5 class="fw-bold">Call Us</h5>
                    <p><a href="tel:+231776061890" style="color: var(--primary-blue); text-decoration: none; font-weight: 600;">+231-776-061-890</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #3498DB, #2980B9);">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <h5 class="fw-bold">Email Us</h5>
                    <p><a href="mailto:info@smartacademy.com" style="color: var(--primary-blue); text-decoration: none; font-weight: 600;">info@smartacademy.com</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon" style="background: linear-gradient(135deg, #27AE60, #229954);">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <h5 class="fw-bold">Visit Us</h5>
                    <p>Liberia<br><small class="text-muted">Call for directions</small></p>
                </div>
            </div>
        </div>

        <a href="contact.php" class="cta-button">Send us a Message</a>
    </div>
</section>

<?php include("includes/footer.php"); ?>