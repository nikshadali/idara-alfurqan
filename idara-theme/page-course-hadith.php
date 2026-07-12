<?php
/**
 * Template Name: Course - Learn Hadith
 * Description: Learn Hadith Online course page.
 */
get_header();
?>

  <!-- COURSE HERO -->
  <section class="course-hero">
    <div class="course-hero-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="course-hero-inner">

        <!-- Left: Text -->
        <div class="course-hero-text">
          <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span>›</span>
            <a href="<?php echo home_url('/courses/'); ?>">Courses</a>
            <span>›</span>
            <span>Learn Hadith</span>
          </nav>

          <div class="course-hero-tags">
            <span class="course-tag">&#128220; Hadith & Sunnah</span>
            <span class="course-tag course-tag-level">All Levels</span>
          </div>

          <h1><span class="page-hero-highlight">Learn Hadith</span> Online</h1>
          <p class="course-hero-desc">Understand the Teachings of the Prophet Muhammad (ﷺ). Designed for children, adults, and students who want to deepen their Islamic knowledge and apply the Sunnah in their daily lives.</p>

          <!-- Quick stats bar -->
          <div class="course-quick-stats">
            <div class="course-quick-stat">
              <strong>Flexible</strong>
              <span>Duration</span>
            </div>
            <div class="course-quick-divider"></div>
            <div class="course-quick-stat">
              <strong>1-on-1</strong>
              <span>Class Structure</span>
            </div>
            <div class="course-quick-divider"></div>
            <div class="course-quick-stat">
              <strong>All Ages</strong>
              <span>Level</span>
            </div>
          </div>

          <div class="course-hero-ctas">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary btn-hero-main">&#128222; Book Free Trial</a>
            <a href="<?php echo home_url('/fee-structure/'); ?>" class="btn-hero-ghost">
              View Fee Plans
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
          </div>
        </div>

        <!-- Right: Course card summary -->
        <div class="course-hero-card premium-card">
          <div class="course-card-badge">&#127942; Authentic Islamic Studies</div>
          <ul class="course-card-details">
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span><strong>Duration:</strong> Varies by student pace</span>
            </li>
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
              <span><strong>Structure:</strong> 1-on-1 live classes</span>
            </li>
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              <span><strong>Teachers:</strong> Qualified Islamic Teachers</span>
            </li>
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              <span><strong>Prerequisite:</strong> None</span>
            </li>
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
              <span><strong>Schedule:</strong> Flexible timings</span>
            </li>
          </ul>
          <div class="course-card-price-note">
            Affordable <strong>Monthly Fees</strong>
          </div>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="width:100%;justify-content:center;">Enroll Now — Free Trial</a>
          <p class="course-card-free-note">&#10003; First class completely free &nbsp;&#10003; Beginner friendly</p>
        </div>

      </div>
    </div>
  </section>

  <!-- ABOUT THE COURSE -->
  <section class="section">
    <div class="container">
      <div class="course-about-split">
        <div class="course-about-text">
          <div class="about-page-label">About This Course</div>
          <h2 class="about-page-heading">What is the<br><span>Hadith Course?</span></h2>
          <p>The Hadith Course is a comprehensive Islamic studies program that introduces students to selected authentic Hadith from well-known collections. Students learn the meanings, explanations, historical context, and practical applications of the teachings of the Prophet Muhammad (ﷺ).</p>
          <p>The course emphasizes understanding rather than memorization alone, enabling students to implement the Sunnah in their personal, family, and community life. No advanced Islamic education is required, making this an accessible program for everyone.</p>
          
          <h3 style="margin-top: 32px; margin-bottom: 16px; font-family: 'DM Serif Display', serif; font-size: 24px; color: var(--green);">Who Should Enroll?</h3>
          <ul style="list-style-type: none; padding: 0; color: var(--text-secondary); margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px;">
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Children learning Islamic values</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Adults seeking deeper Islamic knowledge</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> New Muslims learning the Sunnah</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Students of Islamic studies</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Parents wishing to strengthen family education</li>
          </ul>
        </div>
        <div class="course-about-features">
          <h3>What You'll Learn</h3>
          <ul class="course-learn-list">
            <li>
              <div class="course-learn-icon">&#128218;</div>
              <div>
                <strong>Authentic Hadith</strong>
                <span>Study carefully chosen authentic Hadith covering faith, worship, character, family life, and manners.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#128161;</div>
              <div>
                <strong>Meanings & Explanations</strong>
                <span>Understand the meanings of Hadith through clear explanations that make the teachings easy to implement.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#128332;</div>
              <div>
                <strong>Understanding the Sunnah</strong>
                <span>Learn how the Prophet Muhammad (ﷺ) lived, worshipped, interacted with others, and demonstrated excellent character.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#128150;</div>
              <div>
                <strong>Moral & Ethical Values</strong>
                <span>Explore Islamic principles such as honesty, kindness, patience, humility, and generosity.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#128106;</div>
              <div>
                <strong>Islamic Etiquettes (Adab)</strong>
                <span>Understand proper Islamic manners related to worship, family relationships, social interactions, and daily routines.</span>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- COURSE METHODOLOGY & BENEFITS -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Teaching Methodology</h2>
        <p class="section-subtitle">A practical and engaging approach to learning the Sunnah</p>
      </div>
      <div class="course-features-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128214;</div>
          <h3>Reading & Context</h3>
          <p>Carefully reading the selected Hadith followed by a detailed explanation of its vocabulary and historical context.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128172;</div>
          <h3>Meaning & Wisdom</h3>
          <p>Engaging discussions focusing on understanding the deep meaning, wisdom, and Islamic values within the Hadith.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#127758;</div>
          <h3>Practical Application</h3>
          <p>Reflecting on how to practice these Prophetic teachings at home, school, work, and within the community.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COURSE FEATURES -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2>Why Choose Our Online Academy?</h2>
        <p class="section-subtitle">Dedicated to providing authentic Islamic education in a supportive environment</p>
      </div>
      <div class="course-features-grid">
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128104;&#8205;&#127979;</div>
          <h3>Experienced Teachers</h3>
          <p>Learn from qualified Islamic studies teachers who provide authentic and reliable instruction.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128100;</div>
          <h3>1-on-1 Interactive Classes</h3>
          <p>Receive individual attention in every class, ensuring a customized and comfortable learning pace.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128197;</div>
          <h3>Flexible Timings</h3>
          <p>Flexible schedules for students worldwide to easily balance Islamic studies with their daily routines.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128218;</div>
          <h3>Authentic Materials</h3>
          <p>Study carefully selected authentic Hadith from widely recognized and reliable Islamic sources.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128101;</div>
          <h3>For All Ages</h3>
          <p>Structured lesson plans tailored for children, adults, families, and complete beginners.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#9989;</div>
          <h3>Practical Focus</h3>
          <p>Emphasis on understanding, reflection, and practical application rather than just memorization.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- FAQ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p class="section-subtitle">Common questions about the Learn Hadith course</p>
      </div>
      <div class="faq-list">
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Is this course suitable for beginners?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes. The course is designed for learners of all levels, including complete beginners with no advanced Islamic education.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Are the Hadith authentic?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes. We teach carefully selected authentic Hadith from reliable and widely recognized Islamic sources.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Can children join this course?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Absolutely. Lessons are adapted to suit the age and understanding of each student, making it great for children.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Will I understand the meaning of every Hadith?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes. Every Hadith is explained in clear and simple language, along with its practical lessons and relevance to daily life.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Are classes one-on-one?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes. Every student receives personalized one-on-one online instruction from a qualified teacher.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>What course should I study after Hadith?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            After completing this course, students can continue with advanced Islamic Studies, Tafsir (Quran Explanation), Fiqh, Seerah, or Arabic Language studies.
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RELATED COURSES -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2>More Courses for You</h2>
        <p class="section-subtitle">Explore our other expert-led programmes</p>
      </div>
      <div class="related-courses-grid">
        <a href="<?php echo home_url('/courses/islamic-studies/'); ?>" class="related-course-card premium-card">
          <div class="related-course-icon">&#128332;</div>
          <div class="related-course-body">
            <span class="related-course-level">All Levels</span>
            <h3>Islamic Studies</h3>
            <p>Learn essential Islamic knowledge including Aqaid, Fiqh, Seerah, and daily Duas.</p>
          </div>
          <svg class="related-course-arrow" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="<?php echo home_url('/courses/learn-arabic/'); ?>" class="related-course-card premium-card">
          <div class="related-course-icon">&#127891;</div>
          <div class="related-course-body">
            <span class="related-course-level">All Levels · 6-12 Months</span>
            <h3>Learn Arabic</h3>
            <p>Master the Arabic Language with expert teachers to better understand Islamic texts.</p>
          </div>
          <svg class="related-course-arrow" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="<?php echo home_url('/courses/quran-reading/'); ?>" class="related-course-card premium-card">
          <div class="related-course-icon">&#128214;</div>
          <div class="related-course-body">
            <span class="related-course-level">Beginner · 10 weeks</span>
            <h3>Quran Reading</h3>
            <p>Read the Holy Quran with correct pronunciation, fluency, and proper articulation.</p>
          </div>
          <svg class="related-course-arrow" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="section section-alt">
    <div class="container">
      <div class="cta-card">
        <div class="cta-card-inner">
          <h2 class="cta-card-heading">Deepen Your Knowledge of the Sunnah</h2>
          <p class="cta-card-sub">Study authentic Hadith, understand the teachings of the Prophet Muhammad (ﷺ), and apply his timeless guidance in your everyday life. Join today!</p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-card-btn">&#128222; Book Free Trial Class</a>
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
