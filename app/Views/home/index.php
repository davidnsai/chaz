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
                    <img src="/assets/img/star/star-2.png" alt="img">
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