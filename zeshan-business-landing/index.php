<?php get_header(); ?>

<main>
    <section class="hero">
        <h2>Welcome to Our Business</h2>
        <p>Your trusted partner for success. Discover our services today.</p>
    </section>

    <section id="about">
        <h2>About Us</h2>
        <p>We are a dedicated team delivering innovative solutions to help your business grow. Founded by Zeshan Noor, our mission is to provide top-notch services with a focus on quality.</p>
    </section>

    <section id="contact">
        <h2>Contact Us</h2>
        <form id="contact-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
            <input type="hidden" name="action" value="zeshan_contact_form">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <div id="form-message"></div>
    </section>
</main>

<?php get_footer(); ?>
