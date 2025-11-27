<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sea Freight Services | Freight Matters</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- owl crusal -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?id=<?php echo json_encode(date('Y')); ?>">
 
</head>
<body>
    <?php include 'header.php'?>

    <!-- Service Hero Section -->
    <section class="service-hero">
        <div class="container">
            <h1>Sea Freight Services</h1>
            <p>Reliable, efficient, and cost-effective ocean shipping solutions for your global supply chain needs</p>
            <!--<a href="#contact" class="btn btn-primary">Get a Quote</a>-->
        </div>
    </section>

    <!-- Service Detail Section -->
    <section class="service-detail-section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 order-2 order-md-1">
                    <h2>Comprehensive Sea Freight Solutions</h2>
                    <p>At Freight Matters, we offer end-to-end sea freight services designed to meet the diverse needs of our clients. With our extensive network of shipping partners and strategic alliances, we ensure your cargo reaches its destination safely and on time.</p>
                    <p>Our sea freight services include Full Container Load (FCL), Less than Container Load (LCL), and specialized solutions for oversized or hazardous cargo. We handle everything from documentation to customs clearance, providing a seamless shipping experience.</p>
                    <!--<a href="#" class="btn btn-outline-primary">Download Brochure</a>-->
                </div>
                <div class="col-lg-6  order-1 order-md-2">
                    <img src="https://images.unsplash.com/photo-1670121180583-39ab653a071c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sea Freight" class="img-fluid mobile_img_bottom">
                </div>
            </div>
            
            <div class="row ">
                <div class="col-12 text-center mb-5 mt-5">
                    <h2>Our Sea Freight Capabilities</h2>
                    <p class="lead">We provide tailored solutions for all your ocean shipping requirements</p>
                </div>
                
                <div class="col-md-4">
                    <div class="service-feature">
                        <div class="service-feature-icon">
                            <i class="fas fa-box"></i>
                        </div>
                        <h4>FCL Shipping</h4>
                        <p>Dedicated container services for larger shipments with competitive pricing and flexible scheduling.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-feature">
                        <div class="service-feature-icon">
                            <i class="fas fa-boxes"></i>
                        </div>
                        <h4>LCL Consolidation</h4>
                        <p>Cost-effective solutions for smaller shipments by consolidating cargo with other shippers.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="service-feature">
                        <div class="service-feature-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h4>Specialized Cargo</h4>
                        <p>Expert handling for oversized, heavy-lift, refrigerated, and hazardous materials.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="service-process">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Why Choose Our Sea Freight Services</h2>
                    <p class="lead">We deliver value through expertise, technology, and personalized service</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h4>Global Network</h4>
                        <p>Access to a worldwide network of ports and shipping lines for comprehensive coverage.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h4>Cost Efficiency</h4>
                        <p>Competitive pricing and optimized routing to maximize your shipping budget.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Risk Management</h4>
                        <p>Comprehensive cargo insurance and risk mitigation strategies for peace of mind.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4>Timely Delivery</h4>
                        <p>Reliable scheduling and real-time tracking to ensure on-time delivery of your shipments.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4>Documentation Expertise</h4>
                        <p>Accurate handling of all shipping documentation and regulatory compliance requirements.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="benefit-card">
                        <div class="benefit-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h4>Dedicated Support</h4>
                        <p>Personalized account management and 24/7 customer support for all your queries.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="service-detail-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2>Our Sea Freight Process</h2>
                    <p class="lead">A streamlined approach to ensure efficient and reliable shipping</p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">1</div>
                        <h4>Consultation & Planning</h4>
                        <p>We analyze your shipping needs and develop a customized logistics plan.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">2</div>
                        <h4>Booking & Documentation</h4>
                        <p>We handle all booking procedures and prepare necessary documentation.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">3</div>
                        <h4>Cargo Handling & Shipping</h4>
                        <p>Your cargo is carefully loaded and shipped via the most efficient route.</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6">
                    <div class="process-step">
                        <div class="process-number">4</div>
                        <h4>Tracking & Delivery</h4>
                        <p>Real-time tracking and coordination until final delivery at destination.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="service-cta" id="contact">
        <div class="container">
            <h2>Ready to Ship Your Cargo?</h2>
            <p class="lead mb-4">Contact our sea freight experts for a customized shipping solution</p>
            <!--<a href="#" class="btn btn-primary">Request a Quote</a>-->
            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#quoteModal">
                Request a Quote
            </a>
            <a href="<?php echo base_url();?>contact" class="btn btn-outline-light">Contact Our Team</a>
        </div>
    </section>
   <?php include 'footer.php'?>


</body>
</html>