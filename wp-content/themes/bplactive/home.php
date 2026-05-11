<?php get_header(); ?>


<main id="main" class="site-main home-modern">
    <!-- Hero Section -->
    <section class="home-hero-modern">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/bpl-logo.png" alt="BPL Logo" onerror="this.style.display='none';">
            <h1>Welcome to BPL</h1>
            <p>Empowering innovation in products and services for a brighter tomorrow.</p>
            <a href="#features" class="cta-btn">Explore Features</a>
        </div>
        <div class="hero-gradient"></div>
    </section>

    <!-- Features Section -->
    <section id="features" class="home-features">
        <div class="container">
            <div class="feature-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature1.png" alt="Feature 1" onerror="this.style.display='none';">
                <h3>Cutting-edge Technology</h3>
                <p>We leverage the latest advancements to deliver top-notch solutions for our clients.</p>
            </div>
            <div class="feature-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature2.png" alt="Feature 2" onerror="this.style.display='none';">
                <h3>Customer Focused</h3>
                <p>Our approach is centered around understanding and exceeding customer expectations.</p>
            </div>
            <div class="feature-card">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/feature3.png" alt="Feature 3" onerror="this.style.display='none';">
                <h3>Sustainable Growth</h3>
                <p>We believe in building solutions that are scalable and environmentally responsible.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="home-about">
        <div class="container">
            <h2>About BPL</h2>
            <p>BPL is dedicated to delivering innovative products and services that make a difference. Our team is passionate about technology, customer satisfaction, and sustainable growth. Join us on our journey to shape the future.</p>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="home-cta">
        <div class="container">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today to learn more about our offerings and how we can help you achieve your goals.</p>
            <a href="/contact" class="cta-btn">Contact Us</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>
