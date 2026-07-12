<?php
/**
 * Template Name: Landing Page (90-Day Program)
 * Description: High-converting landing page for the 90-Day Quran Program.
 */

get_header('landing');
?>

  <!-- HERO -->
  <section id="hero-landing" class="hero-split">
    <!-- Right side background image -->
    <div class="hero-split-image"></div>
    
    <div class="container hero-split-container">
      <div class="hero-split-left">
        
        <h1>Learn Quran Online with<br><span class="text-gold">Real Teachers</span></h1>
        <p class="hero-subtitle-split">Personalized 1-on-1 Quran classes designed to help you master Quran reading in just 90 days.</p>
        <div class="hero-left-actions">
          <a href="#hero-form" class="btn-hero-cta">
            Claim Your FREE Trial Class
            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
          </a>
          <div class="hero-social-proof">
            <div class="hero-avatars">
              <div class="hero-avatar" style="background: #fbbf24;">A</div>
              <div class="hero-avatar" style="background: #34d399;">F</div>
              <div class="hero-avatar" style="background: #60a5fa;">S</div>
              <div class="hero-avatar" style="background: #f87171;">M</div>
            </div>
            <div class="hero-social-proof-text">
              <strong>10,000+</strong> Students Worldwide
            </div>
          </div>
        </div>
      </div>
      
      <div class="hero-split-right">
        <div class="split-glass-panel" id="hero-form">
          <h3>Claim Your FREE Trial Class</h3>
          <p>Fill out the form below and we will contact you shortly.</p>
          <form id="whatsapp-form" action="#" method="POST">
            <div class="split-form-group">
              <input type="text" id="name" placeholder="Enter your full name" required>
            </div>
            <div class="split-form-group">
              <input type="email" id="email" placeholder="Enter your email address" required>
            </div>
            <div class="split-form-group">
              <input type="tel" id="contact" placeholder="Enter your phone/WhatsApp" required>
            </div>
            <div class="split-form-group">
              <textarea id="msg" placeholder="Tell us about your learning goals" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn-split-submit">
              Claim Your FREE Trial Class
            </button>
            <div class="split-trust">
              <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              No payment required &bull; 100% Free Trial
            </div>
          </form>

          <script>
            document.getElementById('whatsapp-form').addEventListener('submit', function(e) {
              e.preventDefault();
              var name = document.getElementById('name').value;
              var email = document.getElementById('email').value;
              var contact = document.getElementById('contact').value;
              var msg = document.getElementById('msg').value;
              
              var text = "Name: " + name + "%0AEmail: " + email + "%0AContact: " + contact + "%0AMessage: " + msg;
              var whatsappUrl = "https://wa.me/9233329991120?text=" + text;
              window.open(whatsappUrl, '_blank');
            });
          </script>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section id="why-choose-us" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Why Choose Us</h2>
        <!-- <div class="divider"><span></span><span class="ornament">&#10022;</span><span></span></div> -->
        <p class="section-subtitle" style="margin-top:16px;">Why Thousands of Students Trust Our Online Quran Academy<br>Our proven learning
          system makes Quran reading simple, engaging, and effective for students of all ages.</p>
      </div>
      <div class="about-cards five" style="margin-bottom: 56px;">
        <div class="about-card premium-card">
          <div class="card-icon-wrap">
            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" />
              <rect x="8" y="2" width="8" height="4" rx="1" ry="1" />
              <path d="M9 14h6" />
              <path d="M9 10h6" />
            </svg>
          </div>
          <p>Personalized lesson plans</p>
        </div>
        <div class="about-card premium-card">
          <div class="card-icon-wrap">
            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
              <path d="M2 20h20" />
              <path d="M12 10v4" />
              <path d="M10 12h4" />
            </svg>
          </div>
          <p>Interactive live sessions</p>
        </div>
        <div class="about-card premium-card">
          <div class="card-icon-wrap">
            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M3 3v18h18" />
              <path d="m19 9-5 5-4-4-3 3" />
            </svg>
          </div>
          <p>Progress tracking</p>
        </div>
        <div class="about-card premium-card">
          <div class="card-icon-wrap">
            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 6v6l4 2" />
            </svg>
          </div>
          <p>Flexible scheduling</p>
        </div>
        <div class="about-card premium-card">
          <div class="card-icon-wrap">
            <svg width="32" height="32" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
              <path d="M2 12h20" />
            </svg>
          </div>
          <p>Worldwide availability</p>
        </div>
      </div>
      <div style="text-align: center;">
        <a href="#hero-landing" class="btn btn-primary btn-lg shadow-btn">
          <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" viewBox="0 0 24 24">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
          Start Learning Today
        </a>
      </div>
    </div>
  </section>

  <!-- 90-DAY ROADMAP -->
  <section id="roadmap" class="section">
    <div class="container">
      <div class="section-title">
        <h2>90-Day Roadmap</h2>
        <!-- <div class="divider"><span></span><span class="ornament">&#10022;</span><span></span></div> -->
        <p class="section-subtitle" style="margin-top:16px;">Your Quran Transformation Journey</p>
      </div>
      <div class="roadmap-timeline-wrap">
        <div class="timeline-line"></div>
        <div class="roadmap-grid timeline-active">
          <div class="roadmap-card premium-card timeline-node">
            <div class="timeline-dot"></div>
            <div class="roadmap-month">Month 1</div>
            <h3>Foundation</h3>
            <p>Learn Arabic letters, pronunciation, and reading basics.</p>
          </div>
          <div class="roadmap-card premium-card timeline-node">
            <div class="timeline-dot"></div>
            <div class="roadmap-month">Month 2</div>
            <h3>Fluency</h3>
            <p>Master essential Tajweed rules and improve fluency.</p>
          </div>
          <div class="roadmap-card premium-card timeline-node">
            <div class="timeline-dot"></div>
            <div class="roadmap-month">Month 3</div>
            <h3>Confidence</h3>
            <p>Read the Quran confidently with proper pronunciation and rhythm.</p>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 56px;">
        <a href="#hero-landing" class="btn btn-primary btn-lg shadow-btn">Reserve Your Free Trial</a>
      </div>
    </div>
  </section>

  <!-- WHY OUR STUDENTS SUCCEED -->
  <section id="success" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Why Our Students Succeed</h2>
        <!-- <div class="divider"><span></span><span class="ornament">&#10022;</span><span></span></div> -->
        <p class="section-subtitle" style="margin-top:16px;" >A Learning Experience Designed for Real Results</p>
      </div>
      <div class="success-grid bento-grid">
        <div class="success-card premium-card bento-item">
          <div class="success-icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2" />
              <circle cx="12" cy="7" r="4" />
            </svg>
          </div>
          <div class="success-content">
            <h3>Personalized Learning</h3>
            <p>Every lesson is tailored to your level, ensuring you learn at a pace that is comfortable and effective.
            </p>
          </div>
        </div>
        <div class="success-card premium-card bento-item">
          <div class="success-icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M22 10v6M2 10l10-5 10 5-10 5z" />
              <path d="M6 12v5c3 3 9 3 12 0v-5" />
            </svg>
          </div>
          <div class="success-content">
            <h3>Certified Tutors</h3>
            <p>Experienced teachers with years of Quran teaching expertise to guide your pronunciation perfectly.</p>
          </div>
        </div>
        <div class="success-card premium-card bento-item">
          <div class="success-icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <circle cx="12" cy="12" r="10" />
              <path d="M12 6v6l4 2" />
            </svg>
          </div>
          <div class="success-content">
            <h3>Flexible Schedule</h3>
            <p>Morning, evening, and weekend classes available worldwide.</p>
          </div>
        </div>
        <div class="success-card premium-card bento-item">
          <div class="success-icon">
            <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round" viewBox="0 0 24 24">
              <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
              <circle cx="9" cy="7" r="4" />
              <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              <path d="M16 3.13a4 4 0 0 1 0 7.75" />
            </svg>
          </div>
          <div class="success-content">
            <h3>One-on-One Attention</h3>
            <p>Receive instant corrections and continuous support.</p>
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 56px;">
        <a href="#hero-landing" class="btn btn-primary btn-lg shadow-btn">Join the 90-Day Quran Program</a>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials" class="section">
    <div class="container">
      <div class="section-title">
        <h2>What Our Students Say</h2>
        <!-- <div class="divider"><span></span><span class="ornament">&#10022;</span><span></span></div> -->
      </div>
      <div class="testimonials-track"
        style="grid-template-columns: repeat(2, 1fr); max-width: 900px; margin: 0 auto 56px;">
        <div class="testimonial-card premium-card">
          <div class="quote-mark">&ldquo;</div>
          <p class="testimonial-text">"I always wanted to improve my Quran reading but never found the right teacher.
            After joining this 90-day program, my confidence increased dramatically. The tutors are patient, supportive,
            and explain every rule clearly. I can now read the Quran with proper Tajweed and look forward to every
            class."</p>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <div class="testimonial-author">
            <strong>Ahmed K.</strong>
            <span>United Arab Emirates</span>
          </div>
        </div>
        <div class="testimonial-card premium-card">
          <div class="quote-mark">&ldquo;</div>
          <p class="testimonial-text">"My 9-year-old daughter loves her classes and has improved so much in just a few
            weeks. The teacher keeps her engaged and makes learning enjoyable. Highly recommended for parents looking
            for quality online Quran education."</p>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <div class="testimonial-author">
            <strong>Fatima S.</strong>
            <span>United Kingdom</span>
          </div>
        </div>
      </div>
      <div style="text-align: center;">
        <a href="#hero-landing" class="btn btn-primary btn-lg shadow-btn">Join Hundreds of Happy Students</a>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p class="section-subtitle">Common questions about the 90-Day Quran Program</p>
      </div>
      <div class="faq-list">
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Do I need previous knowledge?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            No, beginners are welcome. We start from the very basics of Noorani Qaida.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Are classes one-on-one?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes, every student receives personalized live sessions with full attention.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Are female tutors available?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes, we offer both male and female certified instructors to accommodate your preference.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Can children enroll?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Absolutely! We have specialized tutors trained to make learning engaging for kids.
          </div>
        </div>
      </div>
      <div style="text-align: center; margin-top: 56px;">
        <a href="#hero-landing" class="btn btn-primary btn-lg shadow-btn">Book Your Free Assessment</a>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section id="final-cta" class="cta-outer">
    <div class="container">
      <div class="cta-card">
        <div class="cta-card-inner">
          <h2 class="cta-card-heading">Begin Your Quran Journey Today</h2>
          <p class="cta-card-sub">One free trial class. No payment. No commitment. Just pure learning.</p>
          <a href="#hero-form" class="cta-card-btn">Book Your Free Class</a>
        </div>
      </div>
    </div>
  </section>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const faqTriggers = document.querySelectorAll('.fee-faq-trigger');
  faqTriggers.forEach(trigger => {
    trigger.addEventListener('click', function() {
      const parent = this.parentElement;
      const body = parent.querySelector('.fee-faq-body');
      
      if (parent.classList.contains('faq-open')) {
        parent.classList.remove('faq-open');
        this.setAttribute('aria-expanded', 'false');
        body.style.display = 'none';
      } else {
        parent.classList.add('faq-open');
        this.setAttribute('aria-expanded', 'true');
        body.style.display = 'block';
      }
    });
  });
});
</script>

<?php get_footer(); ?>
