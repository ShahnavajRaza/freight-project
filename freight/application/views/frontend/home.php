<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freight Matters - Premium Logistics Solutions</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap"
        rel="stylesheet">
    <!-- owl crusal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

</head>

<body>
    <?php include 'header.php' ?>


    <section class="banner__slider">
        <div class="slider">

            <!-- Sea Freight -->
            <div class="slide active">
                <div class="slide__img">
                    <img src="<?php echo base_url(); ?>assets/img/sea-frieght.jpg" alt="Sea Freight">
                </div>
                <div class="slide__content">
                    <h2>Sea Freight</h2>
                    <p>Get your cargo delivered on schedule with our comprehensive global transport and logistics
                        solutions.</p>
                    <a href="<?php echo base_url('sea-freight'); ?>" class="button-custom">Learn More</a>
                </div>
            </div>

            <!-- Air Freight -->
            <div class="slide">
                <div class="slide__img">
                    <img src="<?php echo base_url(); ?>assets/img/Air-Freight.jpg" alt="Air Freight">
                </div>
                <div class="slide__content">
                    <h2>Air Freight</h2>
                    <p>Our team is dedicated to providing cost-effective, timely, and secure delivery solutions
                        worldwide.</p>
                    <a href="<?php echo base_url('air-freight'); ?>" class="button-custom">Learn More</a>
                </div>
            </div>

            <!-- Road Freight -->
            <div class="slide">
                <div class="slide__img">
                    <img src="<?php echo base_url(); ?>assets/img/Road-Freight.jpg" alt="Road Freight">
                </div>
                <div class="slide__content">
                    <h2>Road Freight</h2>
                    <p>We provide comprehensive transport solutions with essential support like customs clearance and
                        insurance.</p>
                    <a href="<?php echo base_url('road-freight'); ?>" class="button-custom">Learn More</a>
                </div>
            </div>

            <!-- Warehousing -->
            <div class="slide">
                <div class="slide__img">
                    <img src="<?php echo base_url(); ?>assets/img/Warehousing.jpg" alt="Warehousing">
                </div>
                <div class="slide__content">
                    <h2>Warehousing</h2>
                    <p>Outsourcing your warehouse needs to us enhances your operational flexibility and efficiency.</p>
                    <a href="<?php echo base_url('warehousing'); ?>" class="button-custom">Learn More</a>
                </div>
            </div>

            <!-- Customs Clearance -->
            <div class="slide">
                <div class="slide__img">
                    <img src="<?php echo base_url(); ?>assets/img/Customs-Clearance.jpg" alt="Customs Clearance">
                </div>
                <div class="slide__content">
                    <h2>Customs Clearance</h2>
                    <p>Our customs brokers simplify complex bureaucratic procedures for seamless import/export
                        processes.</p>
                    <a href="<?php echo base_url('customs-clearance'); ?>" class="button-custom">Learn More</a>
                </div>
            </div>

            <!-- Multimodal Transport -->
            <div class="slide">
                <div class="slide__img">
                    <img src="<?php echo base_url(); ?>assets/img/Multimodal-Transport.jpg" alt="Multimodal Transport">
                </div>
                <div class="slide__content">
                    <h2>Multimodal Transport</h2>
                    <p>We deliver Best-in-class Multimodal Transport services by seamlessly integrating various
                        transportation modes.</p>
                    <a href="<?php echo base_url('multimodal-transport'); ?>" class="button-custom">Learn More</a>
                </div>
            </div>

        </div>

        <div class="slider-nav">
            <div class="slider-dot active"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
            <div class="slider-dot"></div>
        </div>
    </section>

    <p>Hello this is git testing new </p> h


    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>About Freight Matters</h2>
            </div>
            <div class="section-subtitle">
                <p>Freight Matters is an emerging Indian Freight Forwarder company dedicated to offering personalized
                    logistics solutions across the globe.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="about-image"></div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="about-card">
                                <i class="fas fa-globe-americas"></i>
                                <h4>Our Identity</h4>
                                <p>Established with a robust vision to support the growing needs of our local clients
                                    and overseas partners.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-card">
                                <i class="fas fa-bullseye"></i>
                                <h4>Our Mission</h4>
                                <p>To deliver bespoke forwarding solutions combining speed, reliability, and
                                    personalized service.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-card">
                                <i class="fas fa-chart-line"></i>
                                <h4>Our Expertise</h4>
                                <p>We provide essential logistics support across manufacturing, retail, pharmaceuticals,
                                    and FMCG.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-card">
                                <i class="fas fa-handshake"></i>
                                <h4>Our Network</h4>
                                <p>We operate with a wide-reaching network of partners, agents, and service providers
                                    worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <div class="stat-number">100+</div>
                        <div class="stat-text">Clients</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <div class="stat-number">10+</div>
                        <div class="stat-text">Employees</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <div class="stat-number">3</div>
                        <div class="stat-text">Locations</div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <div class="stat-item">
                        <div class="stat-number">80+</div>
                        <div class="stat-text">Countries Served</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Our Services</h2>
            </div>
            <div class="section-subtitle">
                <p>We offer comprehensive logistics solutions tailored to meet your specific business needs and
                    requirements.</p>
            </div>

            <div class="row">

                <!-- Sea Freight -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image"
                            style="background-image: url('<?= base_url(); ?>assets/img/sea-frieght.jpg')"></div>
                        <div class="service-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h4>Sea Freight</h4>
                        <p>Get your cargo delivered on schedule with our comprehensive global transport and logistics
                            solutions.</p>
                        <a href="<?= site_url('sea-freight'); ?>" class="right_arrow">
                            Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Air Freight -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image"
                            style="background-image: url('<?= base_url(); ?>assets/img/Air-Freight.jpg')"></div>
                        <div class="service-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h4>Air Freight</h4>
                        <p>Our team is dedicated to providing cost-effective, timely, and secure delivery solutions
                            worldwide.</p>
                        <a href="<?= site_url('air-freight'); ?>" class="right_arrow">
                            Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Road Freight -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image"
                            style="background-image: url('<?= base_url(); ?>assets/img/Road-Freight.jpg')"></div>
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>Road Freight</h4>
                        <p>We provide comprehensive transport solutions with essential support like customs clearance
                            and insurance.</p>
                        <a href="<?= site_url('road-freight'); ?>" class="right_arrow">
                            Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Warehousing -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image"
                            style="background-image: url('<?= base_url(); ?>assets/img/Warehousing.jpg')"></div>
                        <div class="service-icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h4>Warehousing</h4>
                        <p>Outsourcing your warehouse needs to us enhances your operational flexibility and efficiency.
                        </p>
                        <a href="<?= site_url('warehousing'); ?>" class="right_arrow">
                            Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Customs Clearance -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image"
                            style="background-image: url('<?= base_url(); ?>assets/img/Customs-Clearance.jpg')"></div>
                        <div class="service-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4>Customs Clearance</h4>
                        <p>Our customs brokers simplify complex bureaucratic procedures for seamless import/export
                            processes.</p>
                        <a href="<?= site_url('customs-clearance'); ?>" class="right_arrow">
                            Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

                <!-- Multimodal Transport -->
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image"
                            style="background-image: url('<?= base_url(); ?>assets/img/Multimodal-Transport.jpg')">
                        </div>
                        <div class="service-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h4>Multimodal Transport</h4>
                        <p>We deliver Best-in-class Multimodal Transport services by seamlessly integrating various
                            transportation modes.</p>
                        <a href="<?= site_url('multimodal-transport'); ?>" class="right_arrow">
                            Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Testimonials Section -->




    <section class="testimonials-section">


        <div class="container">
            <div class="section-title">
                <h2 style="color: white;">Client Testimonials</h2>
            </div>
            <div class="section-subtitle" style="color: rgba(255,255,255,0.8);">
                <p>See what our clients have to say about our services and commitment to excellence.</p>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme owl-pd" id="owl-related-projects">
                    <div class="item">

                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "Freight Matters has been our logistics partner for over two years. Their attention to
                                detail and commitment to deadlines is remarkable."
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">RS</div>
                                <div>
                                    <h5>Rahul Sharma</h5>
                                    <p>Manufacturing Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">

                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "Their multimodal transport solutions saved us significant time and costs on our
                                international shipments. Highly recommended!"
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">PS</div>
                                <div>
                                    <h5>Priya Singh</h5>
                                    <p>Retail Chain</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">

                        <div class="testimonial-card">
                            <div class="testimonial-text">
                                "The customs clearance team at Freight Matters handled all our documentation seamlessly.
                                Their expertise made our imports hassle-free."
                            </div>
                            <div class="client-info">
                                <div class="client-avatar">AK</div>
                                <div>
                                    <h5>Anil Kumar</h5>
                                    <p>Pharmaceutical Company</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="section-title">
                <h2>Contact Us</h2>
            </div>
            <div class="section-subtitle">
                <p>Get in touch with our team for personalized logistics solutions tailored to your business needs.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="contact-info d-flex">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h5>Address</h5>
                            <p>B-330, Logix Technova, Noida Sector-132 Gejha, Gautam Buddha Nagar Uttar Pradesh India
                                201304</p>
                        </div>
                    </div>
                    <div class="contact-info d-flex">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div>
                            <h5>Phone</h5>
                            <p>0120-499-4127</p>
                        </div>
                    </div>
                    <div class="contact-info d-flex">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <h5>Email</h5>
                            <p>info@go2freightmatters.com</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.223537481466!2d77.37285931507933!3d28.502482682469646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce8a1a5f5b5c7%3A0x1c1b5b5b5b5b5b5b!2sLogix%20Technova%2C%20Sector%20132%2C%20Noida%2C%20Uttar%20Pradesh%20201304!5e0!3m2!1sen!2sin!4v1644567890123!5m2!1sen!2sin"
                            width="100%" height="250" style="border:0; border-radius: 0px;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5"
                                    placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php' ?>


    <script>
    jQuery("#owl-related-projects").owlCarousel({
        autoplay: true,
        lazyLoad: true,
        loop: true,
        margin: 15,
        responsiveClass: true,
        autoHeight: false,
        autoplayTimeout: 3000,
        smartSpeed: 800,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            350: {
                items: 1
            },
            600: {
                items: 3
            },
            768: {
                items: 3
            },
            1024: {
                items: 3
            }

            // 1366: {
            //     items: 4
            // }
        }
    });
    </script>



</body>

</html>