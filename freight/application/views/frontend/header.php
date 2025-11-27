<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <img src="<?= base_url('assets/img/logo2.png'); ?>" alt="Logo" style="height:80px;">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('about-freight-matters'); ?>">About Freight Matters</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="<?= site_url('sea-freight'); ?>">Sea Freight</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('air-freight'); ?>">Air Freight</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('road-freight'); ?>">Road Freight</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('warehousing'); ?>">Warehousing</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('customs-clearance'); ?>">Customs Clearance</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('multimodal-transport'); ?>">Multimodal Transport</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('locations'); ?>">Locations</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('news'); ?>">News</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('contact'); ?>">Contact</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
