<?php
/**
 * Template Name: Course - Learn Arabic
 * Description: Learn Arabic Online course page.
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
            <span>Learn Arabic</span>
          </nav>

          <div class="course-hero-tags">
            <span class="course-tag">&#127891; Arabic Language</span>
            <span class="course-tag course-tag-level">All Levels</span>
          </div>

          <h1><span class="page-hero-highlight">Learn Arabic</span> Online</h1>
          <p class="course-hero-desc">Master the Arabic Language with Expert Teachers. Designed for children, adults, and beginners who want to develop strong Arabic reading, writing, grammar, and communication skills.</p>

          <!-- Quick stats bar -->
          <div class="course-quick-stats">
            <div class="course-quick-stat">
              <strong>6-12 Months</strong>
              <span>Duration</span>
            </div>
            <div class="course-quick-divider"></div>
            <div class="course-quick-stat">
              <strong>1-on-1</strong>
              <span>Class Structure</span>
            </div>
            <div class="course-quick-divider"></div>
            <div class="course-quick-stat">
              <strong>Beginner</strong>
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
          <div class="course-card-badge">&#127942; Comprehensive Arabic Program</div>
          <ul class="course-card-details">
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span><strong>Duration:</strong> 6 to 12 months</span>
            </li>
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg>
              <span><strong>Structure:</strong> 1-on-1 live classes</span>
            </li>
            <li>
              <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
              <span><strong>Teachers:</strong> Qualified Arabic Teachers</span>
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
          <h2 class="about-page-heading">What is the<br><span>Learn Arabic Course?</span></h2>
          <p>The Learn Arabic Course is a comprehensive beginner-friendly program that teaches students how to read, write, understand, and communicate in Arabic. Starting with the fundamentals of the language, the course gradually introduces grammar, vocabulary, sentence formation, and Quranic Arabic to build a solid linguistic foundation.</p>
          <p>Whether you are learning Arabic for religious, academic, or personal reasons, this course provides the essential knowledge needed for long-term success under the guidance of expert teachers.</p>
          
          <h3 style="margin-top: 32px; margin-bottom: 16px; font-family: 'DM Serif Display', serif; font-size: 24px; color: var(--green);">Who Should Enroll?</h3>
          <ul style="list-style-type: none; padding: 0; color: var(--text-secondary); margin-bottom: 24px; display: flex; flex-direction: column; gap: 10px;">
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Beginners with no prior Arabic knowledge</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Children learning Arabic from the basics</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Adults interested in understanding the Quran</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Students preparing for Islamic studies</li>
            <li style="display: flex; gap: 10px;"><span style="color: var(--green);">&#10003;</span> Anyone wishing to speak, read, and understand Arabic</li>
          </ul>
        </div>
        <div class="course-about-features">
          <h3>What You'll Learn</h3>
          <ul class="course-learn-list">
            <li>
              <div class="course-learn-icon">&#128221;</div>
              <div>
                <strong>Reading & Writing</strong>
                <span>Learn the Arabic alphabet, letter forms, handwriting, and reading skills through guided practice.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#128218;</div>
              <div>
                <strong>Grammar & Sentence Construction</strong>
                <span>Understand fundamental grammar (Nahw) and learn to form correct Arabic sentences clearly.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#128172;</div>
              <div>
                <strong>Vocabulary & Conversation</strong>
                <span>Expand vocabulary and practice everyday conversations, greetings, and common expressions.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#128214;</div>
              <div>
                <strong>Quranic Arabic & Translation</strong>
                <span>Study Quranic vocabulary and develop the ability to translate basic Arabic texts.</span>
              </div>
            </li>
            <li>
              <div class="course-learn-icon">&#127908;</div>
              <div>
                <strong>Listening & Pronunciation</strong>
                <span>Improve your pronunciation and listening skills by learning the correct sounds of Arabic letters.</span>
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
        <p class="section-subtitle">A practical, step-by-step approach to language learning</p>
      </div>
      <div class="course-features-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));">
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128203;</div>
          <h3>Foundations First</h3>
          <p>We begin with Arabic alphabet review, reading, and writing practice to ensure a strong base for absolute beginners.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#127919;</div>
          <h3>Practical Application</h3>
          <p>Engage in grammar lessons with practical examples, vocabulary building activities, and sentence construction exercises.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128172;</div>
          <h3>Communication & Comprehension</h3>
          <p>Focus on translation, reading comprehension, speaking, and pronunciation, followed by regular revision and assessments.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COURSE FEATURES -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2>Why Choose Our Online Academy?</h2>
        <p class="section-subtitle">Making Arabic learning simple, engaging, and effective</p>
      </div>
      <div class="course-features-grid">
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128104;&#8205;&#127979;</div>
          <h3>Expert Arabic Teachers</h3>
          <p>Qualified and experienced instructors dedicated to helping you master the language.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128100;</div>
          <h3>1-on-1 Interactive Classes</h3>
          <p>Personalized attention and customized lesson plans tailored to your specific learning goals.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128197;</div>
          <h3>Flexible Timings</h3>
          <p>Flexible class schedules for international students to balance learning with your daily routine.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128218;</div>
          <h3>Beginner-Friendly Curriculum</h3>
          <p>A structured, easy-to-follow curriculum packed with interactive reading and writing exercises.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#128101;</div>
          <h3>Male & Female Tutors</h3>
          <p>Separate male and female teachers available to provide a comfortable learning environment.</p>
        </div>
        <div class="course-feature-card premium-card">
          <div class="course-feature-icon">&#9989;</div>
          <h3>Progress Assessments</h3>
          <p>Regular quizzes and evaluations to track your vocabulary, grammar, and speaking improvements.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- FAQ -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p class="section-subtitle">Common questions about the Learn Arabic course</p>
      </div>
      <div class="faq-list">
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Is this course suitable for complete beginners?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes. Our Learn Arabic Course starts from the basics and is perfectly designed for students with no previous Arabic experience.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Can children and adults join?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Absolutely. The course is suitable for children, teenagers, adults, and senior learners.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Will I learn Quranic Arabic?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes. In addition to modern Arabic fundamentals, students learn Quranic vocabulary and expressions to improve Quran understanding.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>Are classes one-on-one?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Yes. Every student receives personalized one-on-one online lessons with a dedicated Arabic language teacher.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>How long does it take to learn Arabic?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            Learning Arabic depends on your goals, consistency, and practice. Most students complete the beginner level within 6 to 12 months.
          </div>
        </div>
        <div class="fee-faq-item premium-card">
          <button class="fee-faq-trigger" aria-expanded="false">
            <span>What can I study after completing this course?</span>
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M6 9l6 6 6-6"/></svg>
          </button>
          <div class="fee-faq-body" style="display:none;">
            After finishing the beginner level, students can continue with Intermediate Arabic, Advanced Arabic, Quran Translation, Tafsir studies, or Islamic studies programs.
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
        <a href="<?php echo home_url('/courses/furqan-qaida/'); ?>" class="related-course-card premium-card">
          <div class="related-course-icon">&#128218;</div>
          <div class="related-course-body">
            <span class="related-course-level">Beginner · 2-4 Months</span>
            <h3>Furqan Qaida</h3>
            <p>The perfect first step for beginners to learn Arabic letters and basic pronunciation.</p>
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
        <a href="<?php echo home_url('/courses/islamic-studies/'); ?>" class="related-course-card premium-card">
          <div class="related-course-icon">&#128332;</div>
          <div class="related-course-body">
            <span class="related-course-level">All Levels</span>
            <h3>Islamic Studies</h3>
            <p>Learn essential Islamic knowledge including Aqaid, Fiqh, Seerah, and daily Duas.</p>
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
          <h2 class="cta-card-heading">Start Your Arabic Learning Journey</h2>
          <p class="cta-card-sub">Master the Arabic Language with expert teachers. Understand the Holy Quran and communicate effectively. Join today!</p>
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
