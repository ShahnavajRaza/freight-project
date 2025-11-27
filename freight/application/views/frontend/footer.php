    <!-- Footer -->
    <!-- Footer -->
<footer>
    <div class="container">
        <div class="row">

            <!-- About -->
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

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <div class="footer-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="<?= base_url(); ?>">Home</a></li>
                        <li><a href="<?= site_url('about-freight-matters'); ?>">About Us</a></li>
                        <li><a href="<?= site_url('sea-freight'); ?>">Services</a></li>
                        <li><a href="<?= site_url('locations'); ?>">Locations</a></li>
                        <li><a href="<?= site_url('news'); ?>">News</a></li>
                        <li><a href="<?= site_url('contact'); ?>">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Our Services -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="footer-links">
                    <h5>Our Services</h5>
                    <ul>
                        <li><a href="<?= site_url('sea-freight'); ?>">Sea Freight</a></li>
                        <li><a href="<?= site_url('air-freight'); ?>">Air Freight</a></li>
                        <li><a href="<?= site_url('road-freight'); ?>">Road Freight</a></li>
                        <li><a href="<?= site_url('warehousing'); ?>">Warehousing</a></li>
                        <li><a href="<?= site_url('customs-clearance'); ?>">Customs Clearance</a></li>
                        <li><a href="<?= site_url('multimodal-transport'); ?>">Multimodal Transport</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Info -->
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

   <!-- Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 shadow-lg">

      <!-- Modal Header -->
      <div class="modal-header bg-primary text-white">
          <div>
              <img src="<?php echo base_url();?>assets/img/logo2.png" alt="Logo" style="height: 50px;
    margin-right: 16px;
    filter: invert(1);">
          </div>
        <h5 class="modal-title" id="quoteModalLabel">Request a Quote</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body p-4">
        <form>

          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Your Name</label>
              <input type="text" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Phone Number</label>
              <input type="text" class="form-control">
            </div>

            <div class="col-md-6">
              <label class="form-label">Service Type</label>
              <select class="form-select">
                <option value="">Sea Freight</option>
                <option>Air Freight</option>
                <option>Custom Clearance</option>
                <option>Warehousing</option>
              </select>
            </div>

            <div class="col-12">
              <label class="form-label">Message / Shipment Details</label>
              <textarea class="form-control" rows="4"></textarea>
            </div>
          </div>

        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit Request</button>
      </div>

    </div>
  </div>
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
