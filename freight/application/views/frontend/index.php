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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
<!-- owl crusal -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">



    
    <style>
        :root {
            --primary-blue: #1a4b8c;
            --secondary-blue: #2c6bb3;
            --light-blue: #e8f0fe;
            --accent-color: #50aad4;
            --dark-text: #333333;
            --light-text: #f8f9fa;
        }
        
        a{
            text-decoration:none;
        }
        
        body {
            font-family: 'Open Sans', sans-serif;
            color: var(--dark-text);
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
        }
        
        .navbar {
            background-color: transparent;
            /*padding: 20px 0;*/
            transition: all 0.4s ease;
        }
        .navbar{
            background-color: white;
          
        }
        
  /*       .navbar img{*/
  /*filter: invert(1) brightness(2);*/
  /*       }*/
  /*        .navbar.scrolled img {*/
  /*           filter: none !important;*/
            
  /*      }*/
         
  /*      .navbar.scrolled {*/
  /*           filter: none !important;*/
  /*          background-color: white;*/
  /*          box-shadow: 0 2px 20px rgba(0,0,0,0.1);*/
            /*padding: 12px 0;*/
  /*      }*/
        
        .navbar-brand {
            
            font-weight: 700;
            color: black;
            font-size: 1.8rem;
            transition: color 0.3s;
        }
        
        /*.navbar.scrolled .navbar-brand {*/
        /*    color: var(--primary-blue);*/
        /*}*/
        
        .navbar-nav .nav-link {
            color: black;
            font-weight: 700;
            margin: 0 8px;
            transition: color 0.3s;
            position: relative;
        }
        
        /*.navbar.scrolled .nav-link {*/
        /*    color: var(--dark-text);*/
        /*}*/
        
        .navbar-nav .nav-link:hover {
            color: var(--accent-color);
        }
        
        /*.navbar-nav .nav-link:after {*/
        /*    content: '';*/
        /*    position: absolute;*/
        /*    width: 0;*/
        /*    height: 2px;*/
            /*background: var(--accent-color);*/
        /*    bottom: 0;*/
        /*    right: 7px;*/
        /*    transition: width 0.3s;*/
        /*}*/
        
        /*.navbar-nav .nav-link:hover:after {*/
        /*    width: 100%;*/
        /*}*/
        
        .navbar-nav .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-radius: 0px;
        }
        
        .dropdown-item:hover {
            background-color: var(--light-blue);
            color: var(--primary-blue);
        }
        
        .hero-section {
            background: linear-gradient(rgba(26, 75, 140, 0.7), rgba(26, 75, 140, 0.8)), url('https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 180px 0 120px;
            text-align: center;
            position: relative;
        }
        
        .hero-section:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to bottom, transparent, white);
        }
        
        .hero-section h1 {
            font-weight: 800;
            margin-bottom: 25px;
            font-size: 3.5rem;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .hero-section p {
            font-size: 1.3rem;
            max-width: 700px;
            margin: 0 auto 40px;
            font-weight: 300;
        }
        
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            padding: 14px 35px;
            font-weight: 600;
            border-radius: 0px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(255, 107, 0, 0.3);
        }
        
        .btn-primary:hover {
            background-color: #e55a00;
            border-color: #e55a00;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 107, 0, 0.4);
        }
        
        .btn-outline-light {
            padding: 14px 35px;
            font-weight: 600;
            border-radius: 0px;
            transition: all 0.3s;
        }
        
        .btn-outline-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(255, 255, 255, 0.3);
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
            position: relative;
        }
        
        .section-title h2 {
            /*color: var(--primary-blue);*/
            font-weight: 700;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title h2:after {
            content: '';
            position: absolute;
            width: 100px;
            height: 4px;
            background-color: var(--accent-color);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        
        .right_arrow{
         color:var(--accent-color);   
        }
        
        .section-subtitle {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            color: #666;
            font-size: 1.1rem;
        }
        
        .about-section, .services-section, .testimonials-section, .contact-section {
            padding: 100px 0;
        }
        
        .about-section {
            background-color: #f8f9fa;
        }
        
        .about-image {
            border-radius: 0px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            height: 100%;
            min-height: 570px;
            background: url('https://images.unsplash.com/photo-1585713181935-d5f622cc2415?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover;
        }
        
        .about-card {
            background: white;
            border-radius: 0px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            height: 100%;
            transition: transform 0.4s, box-shadow 0.4s;
            border-left: 4px solid var(--primary-blue);
        }
        
        .about-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .about-card i {
            font-size: 2.5rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }
        
        .service-card {
            background: white;
            border-radius: 0px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            /*height: 100%;*/
            transition: transform 0.4s, box-shadow 0.4s;
            position: relative;
            overflow: hidden;
        }
        
        .service-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary-blue), var(--secondary-blue));
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .service-icon {
            font-size: 3rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
            display:none;
        }
        
        .service-image {
            height: 200px;
            border-radius: 0px;
            overflow: hidden;
            margin-bottom: 20px;
            background-size: cover;
            background-position: center;
        }
        
        .testimonials-section {
            background: linear-gradient(300deg, #282f3b 40%, rgba(0, 0, 0, 0.09) 100%), url(https://images.unsplash.com/photo-1553413077-190dd305871c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
        }
        
        .testimonial-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 0px;
            padding: 30px;
            margin: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
        }
        
        .testimonial-text:before {
            content: """;
            font-family: Georgia, serif;
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.3);
            position: absolute;
            top: -20px;
            left: -10px;
        }
        
        .client-info {
            display: flex;
            align-items: center;
        }
        
        .client-avatar {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary-blue);
            font-weight: bold;
            margin-right: 15px;
            font-size: 1.5rem;
        }
        
        .contact-info {
            margin-bottom: 30px;
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background-color: var(--light-blue);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-color);
            font-size: 1.5rem;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .contact-form {
            background: white;
            border-radius: 0px;
            padding: 40px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 0px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(26, 75, 140, 0.2);
        }
        
        footer {
            background-color: #1a1a1a;
            color: white;
            padding: 70px 0 20px;
        }
        
        .footer-links h5 {
            margin-bottom: 20px;
            font-weight: 600;
            color: var(--accent-color);
        }
        
        .footer-links ul {
            list-style: none;
            padding: 0;
        }
        
        .footer-links ul li {
            margin-bottom: 10px;
        }
        
        .footer-links ul li a {
            color: rgba(255,255,255,0.7);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links ul li a:hover {
            color: white;
            padding-left: 5px;
        }
        
        .social-icons a {
            display: inline-block;
            width: 45px;
            height: 45px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            text-align: center;
            line-height: 45px;
            margin-right: 10px;
            color: white;
            transition: all 0.3s;
        }
        
        .social-icons a:hover {
            background-color: var(--accent-color);
            transform: translateY(-5px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255,255,255,0.1);
            padding-top: 20px;
            margin-top: 50px;
            text-align: center;
            color: rgba(255,255,255,0.7);
        }
        
        /* Back to top button */
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--accent-color);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 1000;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        
        .back-to-top.active {
            opacity: 1;
            visibility: visible;
        }
       
        /* Stats Section */
        .stats-section {
            background:linear-gradient(300deg, #282f3b 40%, rgba(0, 0, 0, 0.09) 100%),url('https://img.freepik.com/free-photo/jumbo-jet-flying-sky_23-2150895699.jpg?t=st=1763379123~exp=1763382723~hmac=6d14ea9d074bc4ed76d9ed51f9380779eabaade3d6c0a5972939efcb89b1aa81&w=1480');
            color: white;
            padding: 80px 0;
            background-position: left;
                background-attachment: fixed;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .stat-text {
            font-size: 1.1rem;
            opacity: 0.9;
        }
        
        /* Animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 0.8s ease forwards;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .hero-section p {
                font-size: 1.1rem;
            }
            
            .section-title h2 {
                font-size: 1.8rem;
            }
        }
        
         @media (max-width: 600px) {
                .banner__slider {
         height: 620px !important; 
         
    }
    .banner__slider img{
       height: 380px !important; 
    }

    .slider-nav {
   
    display: none !important;
   
}


.about-image {
        height: 350px;
             min-height: 0px !important;
}

    .stats-section {
    
     background-size: cover;
}
    
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
             <img src="assets/img/logo2.png" alt="Logo" style="height:80px;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Freight Matters
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                            <li><a class="dropdown-item" href="#">Our Identity</a></li>
                            <li><a class="dropdown-item" href="#">Our Mission</a></li>
                            <li><a class="dropdown-item" href="#">Our Expertise</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="#">Sea freight</a></li>
                            <li><a class="dropdown-item" href="#">Air freight</a></li>
                            <li><a class="dropdown-item" href="#">Road freight</a></li>
                            <li><a class="dropdown-item" href="#">Warehousing</a></li>
                            <li><a class="dropdown-item" href="#">Customs Clearance</a></li>
                            <li><a class="dropdown-item" href="#">Multimodal Transport</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="locationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Locations
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="locationsDropdown">
                            <li><a class="dropdown-item" href="#">Delhi NCR</a></li>
                            <li><a class="dropdown-item" href="#">Mumbai</a></li>
                            <li><a class="dropdown-item" href="#">Chennai</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="contactDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Contact
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="contactDropdown">
                            <li><a class="dropdown-item" href="#">Inquiry Submit</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

           
<style>
.banner__slider {
    position: relative;
    width: 100%;
    height: 90vh;
    overflow: hidden;
    display: flex;
}

/* SLIDER MAIN */
.slider {
    width: 100%;
    height: 100%;
    position: relative;
}

.slide {
    display: flex;
    width: 100%;
    height: 100%;
    opacity: 0;
    transition: opacity 1s ease;  /* simple fade animation */
    position: absolute;
    top: 0;
    left: 0;
}

.slide.active {
    opacity: 1;
}

/* LEFT IMAGE */
.slide__img {
    width: 70%;
    height: 100%;
}

.slide__img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* RIGHT CONTENT */
.slide__content {
    width: 30%;
    height: 100%;
    background: #40a2d0;
    padding: 70px 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.slide__content h2 {
    font-size: 38px;
    font-weight: 700;
    line-height: 1.3;
    color: #fff;
    margin-bottom: 20px;
}

.slide__content p {
    font-size: 17px;
    margin-bottom: 20px;
    color: #fff;
}

.button-custom {
    background: #fff;
    color: #40a2d0;
    padding: 12px 30px;
    border-radius: 0px;
    border: none;
    font-weight: 600;
    width: fit-content;
}

/* DOTS */
.slider-nav {
    position: absolute;
    bottom: 20px;
    left: 50px;
    display: flex;
    gap: 10px;
}

.slider-dot {
    width: 12px;
    height: 12px;
    background: rgba(0,0,0,0.3);
    border-radius: 50%;
    cursor: pointer;
    transition: 0.3s;
}

.slider-dot.active {
    background: #000;
    transform: scale(1.2);
}

/* -------------------------
   MOBILE RESPONSIVE
-------------------------- */
@media(max-width: 900px) {
    .banner__slider {
        height: auto;
    }

    .slide {
        flex-direction: column;
        position: absolute;
    }

    .slide__img {
        width: 100%;
        height: 55vh;
    }

    .slide__content {
        width: 100%;
        height: auto;
        padding: 40px 25px;
    }

    .slide__content h2 {
        font-size: 28px;
    }

    .slide__content p {
        font-size: 15px;
    }

    .slider-nav {
        left: 50%;
        bottom: 15px;
        transform: translateX(-50%);
    }
}

@media(max-width: 500px) {
    .slide__img {
        height: 45vh;
    }

    .slide__content h2 {
        font-size: 22px;
        line-height: 1.2;
    }
}



</style>
      <section class="banner__slider">
        <div class="slider">
            <!-- Sea Freight -->
            <div class="slide active">
                <div class="slide__img">
                    <img src="https://images.unsplash.com/photo-1585713181935-d5f622cc2415?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Sea Freight">
                </div>
                <div class="slide__content">
                    <h2>Sea Freight</h2>
                    <p>Get your cargo delivered on schedule with our comprehensive global transport and logistics solutions.</p>
                    <button class="button-custom">Learn More</button>
                </div>
            </div>

            <!-- Air Freight -->
            <div class="slide">
                <div class="slide__img">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Air Freight">
                </div>
                <div class="slide__content">
                    <h2>Air Freight</h2>
                    <p>Our team is dedicated to providing cost-effective, timely, and secure delivery solutions worldwide.</p>
                    <button class="button-custom">Learn More</button>
                </div>
            </div>

            <!-- Road Freight -->
            <div class="slide">
                <div class="slide__img">
                    <img src="assets/img/Road-Freight.jpg" alt="Road Freight">
                </div>
                <div class="slide__content">
                    <h2>Road Freight</h2>
                    <p>We provide comprehensive transport solutions with essential support like customs clearance and insurance.</p>
                    <button class="button-custom">Learn More</button>
                </div>
            </div>

            <!-- Warehousing -->
            <div class="slide">
                <div class="slide__img">
                    <img src="https://images.unsplash.com/photo-1553413077-190dd305871c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Warehousing">
                </div>
                <div class="slide__content">
                    <h2>Warehousing</h2>
                    <p>Outsourcing your warehouse needs to us enhances your operational flexibility and efficiency.</p>
                    <button class="button-custom">Learn More</button>
                </div>
            </div>

            <!-- Customs Clearance -->
            <div class="slide">
                <div class="slide__img">
                    <img src="assets/img/Customs-Clearance.jpg" alt="Customs Clearance">
                </div>
                <div class="slide__content">
                    <h2>Customs Clearance</h2>
                    <p>Our customs brokers simplify complex bureaucratic procedures for seamless import/export processes.</p>
                    <button class="button-custom">Learn More</button>
                </div>
            </div>

            <!-- Multimodal Transport -->
            <div class="slide">
                <div class="slide__img">
                    <img src="https://img.freepik.com/free-photo/scene-with-photorealistic-logistics-operations-proceedings_23-2151468882.jpg?t=st=1763381206~exp=1763384806~hmac=f824c339cf380da205899a7c0fd6ac99a6302aa51521984e8c6565c074d7db19&w=1480" alt="Multimodal Transport">
                </div>
                <div class="slide__content">
                    <h2>Multimodal Transport</h2>
                    <p>We deliver Best-in-class Multimodal Transport services by seamlessly integrating various transportation modes.</p>
                    <button class="button-custom">Learn More</button>
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

 

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="section-title">
                <h2>About Freight Matters</h2>
            </div>
            <div class="section-subtitle">
                <p>Freight Matters is an emerging Indian Freight Forwarder company dedicated to offering personalized logistics solutions across the globe.</p>
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
                                <p>Established with a robust vision to support the growing needs of our local clients and overseas partners.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-card">
                                <i class="fas fa-bullseye"></i>
                                <h4>Our Mission</h4>
                                <p>To deliver bespoke forwarding solutions combining speed, reliability, and personalized service.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-card">
                                <i class="fas fa-chart-line"></i>
                                <h4>Our Expertise</h4>
                                <p>We provide essential logistics support across manufacturing, retail, pharmaceuticals, and FMCG.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="about-card">
                                <i class="fas fa-handshake"></i>
                                <h4>Our Network</h4>
                                <p>We operate with a wide-reaching network of partners, agents, and service providers worldwide.</p>
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
                <p>We offer comprehensive logistics solutions tailored to meet your specific business needs and requirements.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1561715276-a2d087060f1d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')"></div>
                        <div class="service-icon">
                            <i class="fas fa-ship"></i>
                        </div>
                        <h4>Sea Freight</h4>
                        <p>Get your cargo delivered on schedule with our comprehensive global transport and logistics solutions.</p>
                        <a href="#" class="right_arrow">Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')"></div>
                        <div class="service-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h4>Air Freight</h4>
                        <p>Our team is dedicated to providing cost-effective, timely, and secure delivery solutions worldwide.</p>
                        <a href="#" class="right_arrow">Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image" style="background-image: url('assets/img/Road-Freight.jpg')"></div>
                        <div class="service-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <h4>Road Freight</h4>
                        <p>We provide comprehensive transport solutions with essential support like customs clearance and insurance.</p>
                        <a href="#" class="right_arrow">Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image" style="background-image: url('https://images.unsplash.com/photo-1553413077-190dd305871c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80')"></div>
                        <div class="service-icon">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h4>Warehousing</h4>
                        <p>Outsourcing your warehouse needs to us enhances your operational flexibility and efficiency.</p>
                        <a href="#" class="right_arrow">Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span></a> 
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image" style="background-image: url('assets/img/Customs-Clearance.jpg')"></div>
                        <div class="service-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h4>Customs Clearance</h4>
                        <p>Our customs brokers simplify complex bureaucratic procedures for seamless import/export processes.</p>
                        <a href="#" class="right_arrow">Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-card">
                        <div class="service-image" style="background-image: url('https://img.freepik.com/free-photo/scene-with-photorealistic-logistics-operations-proceedings_23-2151468882.jpg?t=st=1763381206~exp=1763384806~hmac=f824c339cf380da205899a7c0fd6ac99a6302aa51521984e8c6565c074d7db19&w=1480')"></div>
                        <div class="service-icon">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h4>Multimodal Transport</h4>
                        <p>We deliver Best-in-class Multimodal Transport services by seamlessly integrating various transportation modes.</p>
                        <a href="#" class="right_arrow">Learn More &nbsp;<span><i class="fa-solid fa-arrow-right"></i></span></a>
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
                            "Freight Matters has been our logistics partner for over two years. Their attention to detail and commitment to deadlines is remarkable."
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
                            "Their multimodal transport solutions saved us significant time and costs on our international shipments. Highly recommended!"
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
                            "The customs clearance team at Freight Matters handled all our documentation seamlessly. Their expertise made our imports hassle-free."
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
                            <p>B-330, Logix Technova, Noida Sector-132 Gejha, Gautam Buddha Nagar Uttar Pradesh India 201304</p>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.223537481466!2d77.37285931507933!3d28.502482682469646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce8a1a5f5b5c7%3A0x1c1b5b5b5b5b5b5b!2sLogix%20Technova%2C%20Sector%20132%2C%20Noida%2C%20Uttar%20Pradesh%20201304!5e0!3m2!1sen!2sin!4v1644567890123!5m2!1sen!2sin" width="100%" height="250" style="border:0; border-radius: 0px;" allowfullscreen="" loading="lazy"></iframe>
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
                                <textarea class="form-control" id="message" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h3 class="mb-3">Freight Matters</h3>
                    <p>Your trusted partner for global logistics solutions. We deliver bespoke forwarding solutions combining speed, reliability, and personalized service.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <div class="footer-links">
                        <h5>Quick Links</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Locations</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-links">
                        <h5>Our Services</h5>
                        <ul>
                            <li><a href="#">Sea Freight</a></li>
                            <li><a href="#">Air Freight</a></li>
                            <li><a href="#">Road Freight</a></li>
                            <li><a href="#">Warehousing</a></li>
                            <li><a href="#">Customs Clearance</a></li>
                            <li><a href="#">Multimodal Transport</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-links">
                        <h5>Contact Info</h5>
                        <ul>
                            <li><i class="fas fa-map-marker-alt me-2"></i> Noida, Uttar Pradesh</li>
                            <li><i class="fas fa-phone me-2"></i> 0120-499-4127</li>
                            <li><i class="fas fa-envelope me-2"></i> info@go2freightmatters.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Freight Matters. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <div class="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>

    <!-- Bootstrap 5 JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
 
          <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    
    <script>
document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".slide");
    const dots = document.querySelectorAll(".slider-dot");
    let index = 0;

    function showSlide(i) {
        slides.forEach((s, idx) => s.classList.toggle("active", idx === i));
        dots.forEach((d, idx) => d.classList.toggle("active", idx === i));
        index = i;
    }

    function nextSlide() {
        index = (index + 1) % slides.length;
        showSlide(index);
    }

    dots.forEach((dot, i) => {
        dot.addEventListener("click", () => showSlide(i));
    });

    setInterval(nextSlide, 6000);
});
</script>
    <script>
        $(document).ready(function() {
            // Back to top button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 300) {
                    $('.back-to-top').addClass('active');
                } else {
                    $('.back-to-top').removeClass('active');
                }
            });
            
            $('.back-to-top').click(function() {
                $('html, body').animate({scrollTop: 0}, 800);
                return false;
            });
            
            // Navbar background change on scroll
            $(window).scroll(function() {
                if ($(window).scrollTop() > 50) {
                    $('.navbar').addClass('scrolled');
                } else {
                    $('.navbar').removeClass('scrolled');
                }
            });
            
            // Animation on scroll
            function animateOnScroll() {
                $('.fade-in-up').each(function() {
                    var elementTop = $(this).offset().top;
                    var elementBottom = elementTop + $(this).outerHeight();
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();
                    
                    if (elementBottom > viewportTop && elementTop < viewportBottom) {
                        $(this).addClass('fade-in-up');
                    }
                });
            }
            
            // Initial check
            animateOnScroll();
            
            // Check on scroll
            $(window).scroll(function() {
                animateOnScroll();
            });
        });
    </script>

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