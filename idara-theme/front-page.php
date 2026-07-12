<?php
/**
 * Template Name: Custom Home Page
 * Description: A special front page template for the Quranic Academy
 */

get_header();
?>

  <!-- HERO -->
  <section id="hero">
    <div class="container">
      <div class="hero-inner">

        <!-- LEFT: Text content -->
        <div class="hero-left">
          <!-- Badge chip -->
          <!-- <div class="hero-badge">
            <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
            Quran Courses for Every Level &amp; Goal
          </div> -->

          <!-- Arabic Basmala -->
          

          <!-- Heading -->
          <h1>Learn Quran Online<br>with <span class="hero-h1-highlight">Real Teachers</span> </h1>

          <!-- Subtitle -->
          <p class="hero-subtitle">Personalized 1-on-1 live classes for Kids, Adults &amp; Sisters. Learn Tajweed, Hifz, and Quran reading from the comfort of your home with certified tutors worldwide.</p>

          <!-- Feature pills -->
          <!-- <div class="hero-features">
            <div class="hero-feature">&#10003; One-to-One Classes</div>
            <div class="hero-feature">&#10003; Flexible Timings</div>
            <div class="hero-feature">&#10003; Female Teachers Available</div>
            <div class="hero-feature">&#10003; Tajweed Certified</div>
          </div> -->

          <!-- CTA buttons -->
          <div class="hero-ctas">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-hero-main">
              &#128222; Book Free Trial Class
            </a>
            <a href="#courses" class="btn-hero-ghost">
              Explore Courses
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>

          <!-- Social proof -->
          <div class="hero-social-row">
            <div class="hero-avatars">
              <div class="hero-avatar" style="background:#fbbf24;">A</div>
              <div class="hero-avatar" style="background:#34d399;">F</div>
              <div class="hero-avatar" style="background:#60a5fa;">S</div>
              <div class="hero-avatar" style="background:#f87171;">M</div>
              <div class="hero-avatar" style="background:#a78bfa;">Z</div>
            </div>
            <div class="hero-social-text">
              <strong>10,000+</strong> Students worldwide
            </div>
          </div>
        </div>

        <!-- RIGHT: Image card with floating badges -->
        <div class="hero-img-wrap">
          <!-- Floating badge — top left -->
          <div class="hero-float-badge hero-float-top">
            <div class="hero-float-icon">&#11088;</div>
            <div class="hero-float-info">
              <strong>100% Satisfaction</strong>
              <span>Guaranteed Results</span>
            </div>
          </div>

          <!-- Main image card -->
          <div class="hero-img-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/idara-alfurqan-hero.png" alt="Quran teacher and student in live online session">
          </div>

          <!-- Floating badge — bottom left -->
          <div class="hero-float-badge hero-float-bottom">
            <div class="hero-float-icon">&#127760;</div>
            <div class="hero-float-info">
              <strong>Learn Anywhere</strong>
              <span>On any device</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="section section-alt">
    <div class="container">
      <div class="about-inner">
        <div class="about-left">
          <h2>About Us</h2>
          <p>Dar Ul Quran Online Quran Academy is a leading Islamic educational platform connecting students worldwide
            with highly qualified Quran tutors. We offer personalized one-to-one live sessions that make learning
            accessible, flexible, and spiritually enriching for every student, regardless of age or background.</p>
          <p>Our mission is to make Quran education available to every Muslim household across the globe in a safe,
            structured, and nurturing environment guided by the light of the Holy Quran.</p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Learn More</a>
        </div>
        <div class="about-right">
          <div class="about-cards five">
            <div class="about-card">
              <div style="font-size:32px;color:var(--green)">&#127979;</div>
              <p>Experienced Teachers</p>
            </div>
            <div class="about-card">
              <div style="font-size:32px;color:var(--green)">&#128100;</div>
              <p>Personalized Attention</p>
            </div>
            <div class="about-card">
              <div style="font-size:32px;color:var(--green)">&#127758;</div>
              <p>International Students</p>
            </div>
            <div class="about-card">
              <div style="font-size:32px;color:var(--green)">&#128176;</div>
              <p>Affordable Fee</p>
            </div>
            <div class="about-card">
              <div style="font-size:32px;color:var(--green)">&#128274;</div>
              <p>Safe &amp; Friendly Environment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- COURSES -->
  <section id="courses" class="section">
    <div class="container">
      <div class="section-title">
        <h2>Our Courses</h2>
      </div>
      <div class="courses-grid">
        <div class="course-card">
          <div class="course-icon">&#128218;</div>
          <div class="arabic-name">نوراني قاعدہ</div>
          <h3>Noorani Qaida</h3>
          <p>Learn Arabic alphabets and basic pronunciation from scratch with our beginner-friendly curriculum.</p>
        </div>
        <div class="course-card">
          <div class="course-icon">&#128214;</div>
          <div class="arabic-name">ناظرہ قرآن</div>
          <h3>Nazra Quran</h3>
          <p>Develop fluent Quran reading skills with proper letter recognition and word flow.</p>
        </div>
        <div class="course-card">
          <div class="course-icon">&#127908;</div>
          <div class="arabic-name">تجويد</div>
          <h3>Tajweed Course</h3>
          <p>Master the rules of Tajweed for beautiful and correct recitation of the Holy Quran.</p>
        </div>
        <div class="course-card">
          <div class="course-icon">&#11088;</div>
          <div class="arabic-name">حفظ قرآن</div>
          <h3>Hifz Program</h3>
          <p>Memorize the Holy Quran with structured lessons, daily revision, and expert guidance.</p>
        </div>
        <div class="course-card">
          <div class="course-icon">&#128172;</div>
          <div class="arabic-name">ترجمہ</div>
          <h3>Translation Course</h3>
          <p>Understand the word-to-word meaning and tafseer of the Holy Quran in your language.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section id="stats">
    <div class="container">
      <div class="stats-grid">
        <div class="stat-item">
          <div class="stat-icon" style="font-size:32px">&#128578;</div>
          <div class="stat-number">5000+</div>
          <div class="stat-label">Happy Students</div>
        </div>
        <div class="stat-item">
          <div class="stat-icon" style="font-size:32px">&#127758;</div>
          <div class="stat-number">25+</div>
          <div class="stat-label">Countries</div>
        </div>
        <div class="stat-item">
          <div class="stat-icon" style="font-size:32px">&#127979;</div>
          <div class="stat-number">30+</div>
          <div class="stat-label">Qualified Teachers</div>
        </div>
        <div class="stat-item">
          <div class="stat-icon" style="font-size:32px">&#11088;</div>
          <div class="stat-number">100%</div>
          <div class="stat-label">Satisfaction</div>
        </div>
      </div>
    </div>
  </section>

  <!-- HOW IT WORKS -->
  <section id="how-it-works" class="section">
    <div class="container">
      <div class="section-title">
        <h2>How It Works</h2>
        <p class="section-subtitle">Start your Quran learning journey in just 4 simple steps</p>
      </div>
      <div class="how-steps">
        <div class="how-step">
          <div class="how-step-number">01</div>
          <div class="how-step-icon">&#128203;</div>
          <h3>Fill the Form</h3>
          <p>Fill out our contact form or call our numbers to express your interest and choose your preferred schedule.</p>
        </div>
        <div class="how-step-connector"></div>
        <div class="how-step">
          <div class="how-step-number">02</div>
          <div class="how-step-icon">&#127891;</div>
          <h3>Free Trial Class</h3>
          <p>Get a completely free trial class at your desired time. Try multiple tutors and classes to find the perfect fit.</p>
        </div>
        <div class="how-step-connector"></div>
        <div class="how-step">
          <div class="how-step-number">03</div>
          <div class="how-step-icon">&#9989;</div>
          <h3>Sign Up &amp; Learn</h3>
          <p>If you like the experience, sign up and start your regular Quran learning sessions from the comfort of home.</p>
        </div>
        <div class="how-step-connector"></div>
        <div class="how-step">
          <div class="how-step-number">04</div>
          <div class="how-step-icon">&#127942;</div>
          <h3>Get Your Certificate</h3>
          <p>Complete your course and receive an Appraisal Certificate posted directly to your email address.</p>
        </div>
      </div>
      <div style="text-align:center; margin-top:48px;">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary shadow-btn">&#128222; Book Your Free Trial</a>
      </div>
    </div>
  </section>

  <!-- WHY CHOOSE US -->
  <section id="why-choose-us" class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Why Choose Us</h2>
        <p class="section-subtitle">The great advantages of Idara Al Furqan — your premier online Quran academy</p>
      </div>
      <div class="why-grid">
        <div class="why-card premium-card">
          <div class="why-icon">&#127760;</div>
          <h3>Worldwide Recognition</h3>
          <p>Serving since 2018 in more than 10 countries including the USA, UK, Australia &amp; Canada.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#128336;</div>
          <h3>24/7 Service</h3>
          <p>We offer Quran lessons round the clock so you and your kids can learn even with the busiest schedules.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#127942;</div>
          <h3>Appraisal Certificate</h3>
          <p>We award a completion certificate after successful evaluation of your completed course, sent to your email.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#128179;</div>
          <h3>Easy Online Payments</h3>
          <p>Process invoices securely via credit card, local bank transfers, and PayPal with ease.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#128100;</div>
          <h3>One-on-One Classes</h3>
          <p>Individual brother-to-brother and sister-to-sister classes with a dedicated one-on-one learning mechanism.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#128202;</div>
          <h3>Evaluation Reports</h3>
          <p>Our quality control team monitors teachers and provides you a detailed progress report every month.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#128187;</div>
          <h3>Online Learning Panel</h3>
          <p>A full learning management system to track schedules, lessons, complaints, and payments in one place.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#128257;</div>
          <h3>Alternative Teachers</h3>
          <p>We have backup teachers ready to conduct your class in the absence of your assigned teacher.</p>
        </div>
        <div class="why-card premium-card">
          <div class="why-icon">&#128483;</div>
          <h3>Multilingual Tutors</h3>
          <p>Expert Arab and non-Arab, male and female Quran teachers fluent in English, Arabic, and Urdu.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- OUR MANIFESTO -->
  <section id="manifesto" class="section">
    <div class="container">
      <div class="manifesto-inner">
        <div class="section-title">
          <h2>Our Manifesto</h2>
        </div>
        <div class="manifesto-quote">
          <p class="manifesto-hadith">&#8220;The best among you is the one who learns the Quran and teaches it to others.&#8221;</p>
          <span class="manifesto-hadith-source">— Prophet Muhammad &#9882; (Sahih Al-Bukhari)</span>
        </div>
        <div class="manifesto-body">
          <p>At Idara Al Furqan, we are dedicated to providing a comprehensive and enriching educational experience for students of all ages. Our academy is built upon the principles of knowledge, integrity, and spiritual growth — offering a nurturing environment that fosters a love for the Quran and its teachings.</p>
          <p>In the fast-paced 21st century, we strive to serve Muslims with flexible online Quran education using modern technology such as Zoom and Skype. Our mission is to help people understand the Quran with Tajweed, follow the modesty of Islam, and strengthen their faith — accessible from anywhere in the world.</p>
        </div>
        <div style="text-align:center; margin-top:36px;">
          <a href="https://idaraalfurqan.com/about/" class="btn btn-primary">Learn More About Us</a>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials" class="section">
    <div class="container">
      <div class="section-title">
        <h2>What Our Students Say</h2>
      </div>
      <div class="testimonials-track">
        <div class="testimonial-card">
          <div class="quote-mark">&ldquo;</div>
          <p class="testimonial-text">My son started from zero and within 6 months he can read the Quran fluently. The
            teacher is so patient and knowledgeable. Highly recommend Dar Ul Quran!</p>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <div class="testimonial-author">
            <strong>Ahmed Al-Farouqi</strong>
            <span>&#127468;&#127463; United Kingdom</span>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="quote-mark">&ldquo;</div>
          <p class="testimonial-text">As a revert Muslim, I needed someone to teach me from basics. The female teacher
            assigned to me was incredibly supportive and professional. JazakAllah Khair!</p>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <div class="testimonial-author">
            <strong>Sarah Mitchell</strong>
            <span>&#127482;&#127480; United States</span>
          </div>
        </div>
        <div class="testimonial-card">
          <div class="quote-mark">&ldquo;</div>
          <p class="testimonial-text">Excellent teaching methodology. My daughter completed Noorani Qaida in just 3
            months. The timings are very flexible and fit perfectly with our schedule.</p>
          <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          <div class="testimonial-author">
            <strong>Fatima Al-Rashidi</strong>
            <span>&#127462;&#127466; UAE</span>
          </div>
        </div>
      </div>
      <div class="testimonials-nav">
        <button class="tn-btn">&#8592;</button>
        <button class="tn-btn">&#8594;</button>
      </div>
    </div>
  </section>

<?php
get_footer();

