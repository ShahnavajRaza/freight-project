<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Locations - Freight Matters</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?id=<?php echo json_encode(date('Y')); ?>">
    <style>
       
        
        .locations-section {
            padding: 100px 0;
        }
        
        .location-hero {
            background: linear-gradient(rgba(26, 75, 140, 0.8), rgba(26, 75, 140, 0.9)), url('https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 150px 0 100px;
            text-align: center;
        }
        
        .location-hero h1 {
            font-weight: 800;
            margin-bottom: 25px;
            font-size: 3.5rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .location-hero p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 40px;
            font-weight: 300;
        }
        
        .location-card {
            background: white;
            border-radius: 0px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            height: 100%;
            transition: transform 0.4s, box-shadow 0.4s;
            border-left: 4px solid var(--primary-blue);
        }
        
        .location-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .location-icon {
            width: 80px;
            height: 80px;
            background-color: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            color: var(--primary-blue);
            font-size: 2rem;
        }
        
        .location-map {
            height: 100%;
            border-radius: 0px;
            overflow: hidden;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .contact-info {
            margin-bottom: 30px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            background-color: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-color);
            font-size: 1.2rem;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .service-cta {
            background: linear-gradient(300deg, #282f3b 40%, rgba(0, 0, 0, 0.09) 100%), url('https://images.unsplash.com/photo-1553413077-190dd305871c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        
        .service-cta h2 {
            margin-bottom: 30px;
        }
        
       
        
        @media (max-width: 768px) {
            .location-hero h1 {
                font-size: 2.5rem;
            }
            
            .location-hero {
                padding: 100px 0 60px;
            }
            
            .location-hero p {
                font-size: 1.1rem;
            }
            
            .location-map {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <?php include"header.php"?>
   <section class="service-hero">
    <div class="container">
         <h1>Our Locations</h1>
            <p>Strategic presence across India to serve your logistics needs</p>
            <a href="#delhi" class="btn btn-primary">Explore Our Offices</a>
    </div>
</section>
    <!-- Delhi NCR Location -->
    <section class="locations-section" id="delhi">
        <div class="container">
            <div class="section-title">
                <h2>Delhi NCR Office</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3505.719351366209!2d77.37320297538817!3d28.527734075724177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce89a4b55a0c1%3A0x5f1a0b2d2b2b2b2b!2sLogix%20Technova%2C%20Sector%20132%2C%20Noida%2C%20Uttar%20Pradesh%20201304!5e0!3m2!1sen!2sin!4v1691234567890!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="mb-4">Corporate Headquarters</h3>
                        <p class="mb-4">Our Delhi NCR office serves as the corporate headquarters and primary operational hub for Freight Matters, strategically located in the heart of India's business capital.</p>
                        
                        <div class="contact-info d-flex align-items-start mb-3">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Address</h5>
                                <p>B-330, Logix Technova, Noida Sector-132 Gejha, Gautam Buddha Nagar Uttar Pradesh India 201304</p>
                            </div>
                        </div>
                        
                        <div class="contact-info d-flex align-items-start mb-3">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p>0120-499-4127</p>
                            </div>
                        </div>
                        
                        <div class="contact-info d-flex align-items-start mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>info@go2freightmatters.com</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Services Available</h6>
                                <ul>
                                    <li>Sea Freight</li>
                                    <li>Air Freight</li>
                                    <li>Road Freight</li>
                                    <li>Customs Clearance</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Operating Hours</h6>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 2:00 PM<br>
                                Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mumbai Location -->
    <section class="locations-section bg-light" id="mumbai">
        <div class="container">
            <div class="section-title">
                <h2>Mumbai Office</h2>
            </div>
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-6 mb-4">
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.902699593875!2d72.84077097538817!3d19.017722475724177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ced3e95e01c1%3A0x5f1a0b2d2b2b2b2b!2sNariman%20Point%2C%20Mumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1691234567890!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h3 class="mb-4">Port Operations Hub</h3>
                        <p class="mb-4">Our Mumbai office specializes in sea freight operations, strategically located near India's busiest port to provide seamless shipping solutions for our clients.</p>
                        
                        <div class="contact-info d-flex align-items-start mb-3">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Address</h5>
                                <p>Office No. 502, Business Tower, Nariman Point, Mumbai, Maharashtra 400021</p>
                            </div>
                        </div>
                        
                        <div class="contact-info d-flex align-items-start mb-3">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p>022-2499-4127</p>
                            </div>
                        </div>
                        
                        <div class="contact-info d-flex align-items-start mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>mumbai@go2freightmatters.com</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Services Available</h6>
                                <ul>
                                    <li>Sea Freight</li>
                                    <li>Air Freight</li>
                                    <li>Customs Clearance</li>
                                    <li>Warehousing</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Operating Hours</h6>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 1:00 PM<br>
                                Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chennai Location -->
    <section class="locations-section" id="chennai">
        <div class="container">
            <div class="section-title">
                <h2>Chennai Office</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="location-map">
                        <iframe 
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.269284063209!2d80.25018847538817!3d13.082915275724177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526600d61a5a5f%3A0x5f1a0b2d2b2b2b2b!2sTidel%20Park%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1691234567890!5m2!1sen!2sin" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="location-card">
                        <div class="location-icon">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3 class="mb-4">Southern India Operations</h3>
                        <p class="mb-4">Our Chennai office serves as the gateway to Southern India, providing comprehensive logistics solutions for the region's thriving manufacturing and automotive industries.</p>
                        
                        <div class="contact-info d-flex align-items-start mb-3">
                            <div class="contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h5>Address</h5>
                                <p>Unit No. 307, Tidel Park, Taramani, Chennai, Tamil Nadu 600113</p>
                            </div>
                        </div>
                        
                        <div class="contact-info d-flex align-items-start mb-3">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5>Phone</h5>
                                <p>044-2499-4127</p>
                            </div>
                        </div>
                        
                        <div class="contact-info d-flex align-items-start mb-4">
                            <div class="contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h5>Email</h5>
                                <p>chennai@go2freightmatters.com</p>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Services Available</h6>
                                <ul>
                                    <li>Sea Freight</li>
                                    <li>Air Freight</li>
                                    <li>Road Freight</li>
                                    <li>Multimodal Transport</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <h6>Operating Hours</h6>
                                <p>Monday - Friday: 9:00 AM - 6:00 PM<br>
                                Saturday: 9:00 AM - 1:00 PM<br>
                                Sunday: Closed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Coverage Map Section -->
    <section class="locations-section bg-light">
        <div class="container">
            <div class="section-title">
                <h2>Our Available Services</h2>
            </div>
            <div class="row mt-5">

    <!-- Air Freight -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-plane"></i>
        </div>
        <h5>Air Freight Coverage</h5>
        <p>Direct connections to major international airports across 25+ countries</p>
    </div>

    <!-- Sea Freight -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-ship"></i>
        </div>
        <h5>Sea Freight Coverage</h5>
        <p>Access to all major Indian ports with global shipping partners</p>
    </div>

    <!-- Road / Domestic -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-truck"></i>
        </div>
        <h5>Domestic Network</h5>
        <p>Comprehensive road freight services across all Indian states</p>
    </div>

    <!-- Warehousing -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-warehouse"></i>
        </div>
        <h5>Warehousing</h5>
        <p>Secure and scalable storage at strategically located facilities across India</p>
    </div>

    <!-- Customs Clearance -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-file-invoice"></i>
        </div>
        <h5>Customs Clearance</h5>
        <p>Fast and compliant document processing for import & export cargo</p>
    </div>

    <!-- Last Mile Delivery -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-shipping-fast"></i>
        </div>
        <h5>Last-Mile Delivery</h5>
        <p>Reliable door-to-door delivery for B2B and B2C shipments</p>
    </div>

    <!-- Project Cargo -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-boxes"></i>
        </div>
        <h5>Project Cargo</h5>
        <p>Handling oversized, heavy, and complex industrial cargo</p>
    </div>

    <!-- International Courier -->
    <div class="col-md-3 text-center mb-4">
        <div class="location-icon mb-3">
            <i class="fas fa-globe"></i>
        </div>
        <h5>International Courier</h5>
        <p>Priority and express parcel services across 200+ global destinations</p>
    </div>

</div>

        </div>
    </section>

    <!-- CTA Section -->
    <section class="service-cta">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="mb-4">Need Logistics Support Near You?</h2>
                    <p class="mb-5">Contact the Freight Matters office closest to your location for personalized service.</p>
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">Request a Quote</a>
        <a href="#" class="btn btn-outline-light">Contact Our Team</a>
                </div>
            </div>
        </div>
    </section>

   <?php include"footer.php"?>
</body>
</html>