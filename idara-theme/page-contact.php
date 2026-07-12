<?php
/**
 * Template Name: Contact
 * Description: Premium Contact page for Idara Al Furqan.
 */
get_header();
?>

  <!-- PAGE HERO -->
  <section class="page-hero">
    <div class="page-hero-bg" aria-hidden="true"></div>
    <div class="container page-hero-inner">
      <nav class="page-breadcrumb" aria-label="Breadcrumb">
        <a href="<?php echo home_url('/'); ?>">Home</a>
        <span>›</span>
        <span>Contact Us</span>
      </nav>
      <h1>We Will Answer <span class="page-hero-highlight">All Your Questions</span></h1>
      <p class="page-hero-sub">Reach out via WhatsApp, email, or our contact form. Our team responds within 24 hours, 7 days a week.</p>
    </div>
  </section>

  <!-- CONTACT SPLIT SECTION -->
  <section class="section">
    <div class="container">
      <div class="contact-split">

        <!-- LEFT: Contact Form -->
        <div class="contact-form-wrap">
          <div class="contact-form-header">
            <h2>Send Us a Message</h2>
            <p>Fill out the form below and one of our team members will get back to you as soon as possible.</p>
          </div>

          <?php
          // Show success/error messages if form was submitted
          if ( isset( $_GET['contact'] ) && $_GET['contact'] === 'success' ) : ?>
            <div class="contact-success-msg" role="alert">
              <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg>
              Thank you! Your message has been sent. We'll get back to you shortly.
            </div>
          <?php endif; ?>

          <form class="contact-form" id="contact-form" method="POST" action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" novalidate>
            <?php wp_nonce_field( 'contact_form_submit', 'contact_nonce' ); ?>
            <input type="hidden" name="action" value="handle_contact_form">

            <div class="contact-form-row">
              <div class="contact-field">
                <label for="contact-name">Full Name <span class="required">*</span></label>
                <input type="text" id="contact-name" name="contact_name" placeholder="e.g. Ahmed Al-Rashid" required autocomplete="name">
              </div>
              <div class="contact-field">
                <label for="contact-email">Email Address <span class="required">*</span></label>
                <input type="email" id="contact-email" name="contact_email" placeholder="you@example.com" required autocomplete="email">
              </div>
            </div>

            <div class="contact-form-row">
              <div class="contact-field">
                <label for="contact-phone">Phone / WhatsApp</label>
                <input type="tel" id="contact-phone" name="contact_phone" placeholder="+1 234 567 8900" autocomplete="tel">
              </div>
              <div class="contact-field">
                <label for="contact-course">Course of Interest</label>
                <select id="contact-course" name="contact_course">
                  <option value="" disabled selected>Select a course…</option>
                  <option value="noorani-qaida">Noorani Qaida</option>
                  <option value="nazra-quran">Nazra (Quran Reading)</option>
                  <option value="tajweed">Tajweed Course</option>
                  <option value="hifz">Hifz Program</option>
                  <option value="tafseer">Tafseer / Translation</option>
                  <option value="islamic-studies">Islamic Studies</option>
                  <option value="other">Other / Not Sure</option>
                </select>
              </div>
            </div>

            <div class="contact-field">
              <label for="contact-message">Your Message <span class="required">*</span></label>
              <textarea id="contact-message" name="contact_message" rows="5" placeholder="Tell us how we can help you, your preferred schedule, or any other details…" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary contact-submit-btn" id="contact-submit">
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
              Send Message
            </button>
          </form>
        </div>

        <!-- RIGHT: Contact Info -->
        <div class="contact-info-col">

          <!-- WhatsApp — primary -->
          <a href="https://wa.me/923166694116" class="contact-info-card contact-wa-card" target="_blank" rel="noopener">
            <div class="contact-info-icon">
              <svg width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </div>
            <div class="contact-info-body">
              <span class="contact-info-label">WhatsApp (Fastest)</span>
              <strong>+92 316 669 4116</strong>
              <span class="contact-info-hint">Tap to open WhatsApp</span>
            </div>
            <svg class="contact-info-arrow" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>

          <!-- Phone -->
          <a href="tel:+923145175279" class="contact-info-card" target="_blank" rel="noopener">
            <div class="contact-info-icon contact-icon-blue">
              <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 8.81a19.79 19.79 0 01-3.07-8.68A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14.92z"/></svg>
            </div>
            <div class="contact-info-body">
              <span class="contact-info-label">Phone (Pakistan)</span>
              <strong>+92 314 517 5279</strong>
              <span class="contact-info-hint">Mon – Sat, 9am – 9pm PKT</span>
            </div>
            <svg class="contact-info-arrow" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>

          <!-- Email -->
          <a href="mailto:info@idaraalfurqan.com" class="contact-info-card">
            <div class="contact-info-icon contact-icon-blue">
              <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,12 2,6"/></svg>
            </div>
            <div class="contact-info-body">
              <span class="contact-info-label">Email Us</span>
              <strong>info@idaraalfurqan.com</strong>
              <span class="contact-info-hint">We reply within 24 hours</span>
            </div>
            <svg class="contact-info-arrow" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>

          <!-- Address -->
          <div class="contact-info-card contact-address-card">
            <div class="contact-info-icon contact-icon-blue">
              <svg width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div class="contact-info-body">
              <span class="contact-info-label">Our Office</span>
              <strong>B47/1, Street 27, Sector E8</strong>
              <span class="contact-info-hint">Islamabad, Pakistan — 44000</span>
            </div>
          </div>

          <!-- Response time badge -->
          <div class="contact-response-badge">
            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            Average response time: <strong>under 2 hours</strong>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- WHY CONTACT US -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>How We Can Help</h2>
        <p class="section-subtitle">Whatever your question, we have someone ready to help</p>
      </div>
      <div class="contact-help-grid">
        <div class="contact-help-card premium-card">
          <div class="contact-help-icon">&#127891;</div>
          <h3>Course Enquiries</h3>
          <p>Not sure which course is right for you? We'll assess your level and recommend the perfect fit.</p>
        </div>
        <div class="contact-help-card premium-card">
          <div class="contact-help-icon">&#128197;</div>
          <h3>Schedule a Trial</h3>
          <p>Book a completely free 3-day trial class at a time that suits you — no commitment required.</p>
        </div>
        <div class="contact-help-card premium-card">
          <div class="contact-help-icon">&#128179;</div>
          <h3>Fee &amp; Billing</h3>
          <p>Questions about pricing, currencies, payment methods, or our family discount? We'll explain everything.</p>
        </div>
        <div class="contact-help-card premium-card">
          <div class="contact-help-icon">&#128483;</div>
          <h3>Teacher Preferences</h3>
          <p>Want a male or female teacher, or one who speaks a specific language? Just let us know.</p>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
