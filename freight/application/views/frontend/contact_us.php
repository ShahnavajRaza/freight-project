<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Freight Matters</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?id=<?php echo json_encode(date('Y')); ?>">
</head>

<body>

<?php include 'header.php' ?>

<!-- Hero Section -->
<section class="service-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <p>
            Have questions or need assistance? Freight Matters is here to support you with expert logistics, freight forwarding, 
            warehousing, customs clearance, and end-to-end supply chain solutions.
        </p>
    </div>
</section>

<!-- ================================
     QUICK CONTACT BOXES
==================================== -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">

            <!-- Phone -->
            <div class="col-md-4">
                <div class="info-box p-4 h-100">
                    <h5 class="mb-2"><i class="fa-solid fa-phone"></i> Phone</h5>
                    <p class="mb-1">0120-499-4127</p>
                    <p class="mb-0">Mon–Sat: 9:00 AM – 6:00 PM</p>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-4">
                <div class="info-box p-4 h-100">
                    <h5 class="mb-2"><i class="fa-solid fa-envelope"></i> Email</h5>
                    <p class="mb-0">info@go2freightmatters.com</p>
                </div>
            </div>

            <!-- Address -->
            <div class="col-md-4">
                <div class="info-box p-4 h-100">
                    <h5 class="mb-2"><i class="fa-solid fa-location-dot"></i> Address</h5>
                    <p class="mb-0">
                        B-330, Logix Technova,<br>
                        Noida Sector-132, Gejha,<br>
                        Gautam Buddha Nagar,<br>
                        Uttar Pradesh, India 201304
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ================================
     CONTACT FORM SECTION
==================================== -->
<section class="py-5" style="background:#f8f9fa;" id="contact_form_page">
    <div class="container">
        <div class="row align-items-center">

            <!-- Left Text -->
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="mb-3">Get in Touch</h2>
                <p class="mb-4">
                    Whether you're seeking reliable freight forwarding, seamless customs clearance, 
                    or multimodal logistics solutions – our dedicated team is ready to assist.
                </p>

                <ul class="list-unstyled">
                    <li class="mb-2"><i class="fa-solid fa-check-circle"></i> Fast & Transparent Communication</li>
                    <li class="mb-2"><i class="fa-solid fa-check-circle"></i> Skilled Logistics Experts</li>
                    <li class="mb-2"><i class="fa-solid fa-check-circle"></i> Client-First Service Approach</li>
                </ul>
            </div>

            <!-- Form -->
            <div class="col-lg-7">
                <form action="#" method="post" class="p-4 form-box">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Phone Number" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" placeholder="Company Name (Optional)">
                        </div>

                        <div class="col-12 mb-3">
                            <select class="form-control" required>
                                <option value="">Select Service</option>
                                <option>Sea Freight</option>
                                <option>Air Freight</option>
                                <option>Road Freight</option>
                                <option>Warehousing</option>
                                <option>Customs Clearance</option>
                                <option>Multimodal Transport</option>
                                <option>Supply Chain & Logistics</option>
                            </select>
                        </div>

                        <div class="col-12 mb-3">
                            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-5 py-2">Submit</button>
                        </div>

                    </div>
                </form>
            </div>

        </div>
    </div>
</section>

<!-- ================================
     GOOGLE MAP SECTION
==================================== -->
<section class="map-section">
    <div class="container-fluid px-0">
        <iframe 
            src="https://maps.google.com/maps?q=B-330%20Logix%20Technova%20Noida%20Sector%20132&t=&z=15&ie=UTF8&iwloc=&output=embed"
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen 
            loading="lazy">
        </iframe>
    </div>
</section>

<!-- ================================
     FINAL CTA SECTION
==================================== -->
<section class="cta-section py-5">
    <div class="container text-center">
        <h2 class="section-title mb-3">Let’s Build Your Logistics Success Together</h2>
        <p class="section-subtitle mb-4">
            Connect with our expert team to discuss your requirements and get the best logistics solutions.
        </p>
        <a href="#contact_form_page" class="btn btn-primary px-5 py-2">Contact Us</a>
    </div>
</section>

<?php include 'footer.php' ?>

</body>
</html>
