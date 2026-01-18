<!-- Hero Section Start -->
<section class="hero-section hero-1 bg-cover fix" style="background-image: url(assets/img/hero/bg.jpg);">
    <div class="random-shape float-bob-x">
        <img src="/assets/img/shape/random-shape.png" alt="img">
    </div>
    <div class="arrow-shape float-bob-y">
        <img src="/assets/img/hero/angle-arrow.png" alt="img">
    </div>
    <div class="star-shape float-bob-y">
        <img src="/assets/img/shape/star.png" alt="img">
    </div>
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="hero-images">
                    <img class="img-fluid" src="/assets/img/home.png" alt="Home Page Image">
                    <div class="hero-shape">
                        <img src="/assets/img/shape/bg-shape.png" alt="img">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="hero-content">
                    <h1>The School of <br> <strong class="type-text"></strong></h1>
                    <p class="lead">CHAZ Brook Besor University is a private higher education institution offering affordable,
                        quality university education across diverse professional and academic disciplines, designed to
                        support students at every stage of their academic journey.</p>
                    <div class="hero-btn-wrapper">
                        <a href="/download-application" class="theme-btn">Download Application Form
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marquee Section Start -->
<section class="marquee-section section-bg-2 fix">
    <?php
    // Array of degree programs for easy editing
    $programs = [
        'Bachelor of Accounting and Finance',
        'Bachelor of Procurement',
        'Bachelor of Transport and Logistics',
        'Bachelor of Human Resource Management',
        'Bachelor of Business Administration',
        'Bachelor of Economics',
        'Bachelor of Marketing',
        'Bachelor of Science in Mathematics Education',
        'Bachelor of Science in Physics Education',
        'Bachelor of Science in Chemistry Education',
        'Bachelor of Science in Biology Education',
        'Bachelor of Primary Education',
        'Bachelor of Early Childhood Education',
        'Bachelor of English Education',
        'Bachelor in Special Education',
        'Bachelor of Education in Integrated Social Studies',
        'Bachelor of Arts in Religious Education',
        'Postgraduate Diploma in Teaching Methodology',
        'Bachelor of Science in Computer Science',
        'Bachelor of Law',
        'Bachelor of Arts in Civic Education',
        'Bachelor of Arts in Geography',
        'Bachelor of Social Work',
        'Bachelor of Development Studies',
        'Bachelor of Nursing'
    ];
    ?>
    <div class="marquee-container">
        <div class="marquee-wrapper">
            <div class="marquee-content">
                <?php foreach ($programs as $program): ?>
                <div class="marquee-text">
                    <img src="/assets/img/shape/mortarboard.png" width="50px" alt="img">
                    <h3><?php echo htmlspecialchars($program); ?></h3>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- duplicate content for seamless scroll -->
            <div class="marquee-content">
                <?php foreach ($programs as $program): ?>
                <div class="marquee-text">
                    <img src="/assets/img/star/star-2.png" alt="img">
                    <h3><?php echo htmlspecialchars($program); ?></h3>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- About Section Start -->
<section id="whatsapp-community" class="about-section fix section-padding pb-0">
    <div class="container">
        <div class="about-wrapper-1 pt-0">
            <div class="random-shape float-bob-x">
                <img src="/assets/img/shape/random-shape.png" alt="img">
            </div>
            <div class="star-shape float-bob-y">
                <img src="/assets/img/shape/star.png" alt="shape">
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="wow fadeInUp"><img src="/assets/img/shape/star-2.png" alt="img">WhatsApp
                                Community</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".2s">Connect With <br> <span>CHAZ Brook Besor
                                    University
                                </span></h2>
                            <p class="wow fadeInUp" data-wow-delay=".3s">The CHAZ Brook Besor University WhatsApp
                                Community connects prospective students, current learners, and the university team in
                                one shared space for updates, academic support, admissions guidance, and important
                                university information.</p>
                        </div>
                        <div class="client-reviews mt-4 mt-md-0">
                            <div class="wow fadeInUp" data-wow-delay=".4s">
                                <h2>24/7</h2>
                                <h6>Access to university
                                    updates and support
                                </h6>
                            </div>
                            <div class="wow fadeInUp" data-wow-delay=".5s">
                                <h2>Multiple</h2>
                                <h6>Student and programme
                                    groups available
                                </h6>
                            </div>
                        </div>
                        <div class="about-button">
                            <a href="https://chat.whatsapp.com/G8Va23r2lE889MNGVYIfyn" target="blank" class="theme-btn wow fadeInUp" data-wow-delay=".6s">Join WhatsApp Community <i
                                    class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="about-images">
                        <img class="wow img-custom-anim-right" data-wow-delay=".3s" src="/assets/img/whatsapp.png"
                            alt="img">
                        <div class="bg-shape wow img-custom-anim-top">
                            <!-- <img src="/assets/img/shape/bg-shape-2.png" alt="img"> -->
                        </div>
                        <div class="shape-left float-bob-x">
                            <!-- <img src="/assets/img/about/shape-left.png" alt="img"> -->
                        </div>
                        <div class="shape-right float-bob-y">
                            <!-- <img src="/assets/img/about/shape-right.png" alt="img"> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section Start -->
<section id="contact-us" class="contact-section contact-1 section-padding fix">
    <div class="star-left-shape"></div>
    <div class="star-right-shape"></div>
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="contact-wrapper-2">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".2s">Get in Touch With
                            CHAZ Brook Besor University
                        </h2>
                        <p class="mt-3 mt-mb-0">For general enquiries, admissions information, and academic support,
                            contact CHAZ Brook Besor University through the details below. Our team is available to
                            assist prospective and current students.</p>

                    </div>
                    <div class="contact-item-wrapper">
                        <div class="contact-item wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="content">
                                <span>Call Now</span>
                                <h6>+260 955 767 344</h6>
                            </div>
                        </div>
                        <div class="contact-item wow fadeInUp" data-wow-delay=".4s">
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="content">
                                <span>Email</span>
                                <h6 style="text-transform: lowercase;">admissions@cbbu.ac.zm</h6>
                            </div>
                        </div>
                        <div class="contact-item wow fadeInUp" data-wow-delay=".6s">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="content">
                                <span>Address</span>
                                <h6>CHAZ House, Meanwood, Lusaka</h6>
                            </div>
                        </div>
                    </div>
                    <div class="social">
                        <h6>Social: </h6>
                        <ul class="social-list">
                            <li class="wow fadeInUp" data-wow-delay=".2s"><a href="https://www.facebook.com/share/17vuJ4TKiP/"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li class="wow fadeInUp" data-wow-delay=".6s"><a href="https://www.instagram.com/chazbbuniversity?igsh=MTNqdms3dnQyemNsNg=="><i
                                        class="fa-brands fa-instagram"></i></a></li>
                            <li class="wow fadeInUp" data-wow-delay=".8s"><a href="https://www.linkedin.com/company/chazbrookbesoruniversity"><i
                                        class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5019.0404729486745!2d28.4286692!3d-15.380318899999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x194089a6a4e7dfb3%3A0x66af9c9e928b23c2!2sChurches%20Health%20Association%20of%20Zambia%20(CHAZ)!5e0!3m2!1sen!2szm!4v1768562047717!5m2!1sen!2szm"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
