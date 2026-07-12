<?php
/**
 * Template Name: All Courses
 * Description: Page template to display all Regular and Complementary courses.
 */
get_header();
?>

<style>
/* Custom styles for the courses directory */
.courses-directory-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
    margin-top: 40px;
}

.directory-course-card {
    display: flex;
    flex-direction: column;
    padding: 32px;
    height: 100%;
}

.directory-course-icon {
    width: 48px;
    height: 48px;
    background: rgba(72, 126, 237, 0.08);
    color: var(--primary);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    margin-bottom: 20px;
}

.directory-course-title {
    font-family: 'DM Serif Display', serif;
    font-size: 24px;
    color: var(--text-light);
    margin-bottom: 12px;
    line-height: 1.2;
}

.directory-course-def {
    font-size: 15px;
    color: var(--text-secondary);
    margin-bottom: 24px;
    line-height: 1.6;
}

.directory-course-points {
    list-style: none;
    margin-bottom: 32px;
    flex-grow: 1;
}

.directory-course-points li {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 14px;
    color: var(--text-secondary);
    margin-bottom: 12px;
    line-height: 1.5;
}

.directory-course-points li svg {
    flex-shrink: 0;
    color: var(--primary);
    width: 18px;
    height: 18px;
    margin-top: 2px;
}

.directory-course-footer {
    margin-top: auto;
    padding-top: 20px;
    border-top: 1px solid var(--card-border);
}

.btn-course-enroll {
    width: 100%;
    justify-content: center;
}

@media (max-width: 768px) {
    .courses-directory-grid {
        grid-template-columns: 1fr;
    }
}
</style>

  <!-- COURSES HERO -->
  <section class="course-hero" style="padding: 80px 0;">
    <div class="course-hero-bg" aria-hidden="true"></div>
    <div class="container">
      <div class="course-hero-inner" style="grid-template-columns: 1fr; text-align: center;">
        <div class="course-hero-text" style="max-width: 800px; margin: 0 auto;">
          <nav class="page-breadcrumb" aria-label="Breadcrumb" style="justify-content: center; margin-bottom: 24px;">
            <a href="<?php echo home_url('/'); ?>">Home</a>
            <span>›</span>
            <span>Our Courses</span>
          </nav>
          <h1 style="font-size: clamp(36px, 5vw, 56px); margin-bottom: 20px;">Explore Our <span class="page-hero-highlight">Quranic Courses</span></h1>
          <p class="course-hero-desc" style="margin: 0 auto; max-width: 600px;">A comprehensive range of structured Islamic programs designed to help students of all ages read, memorize, and understand the Holy Quran.</p>
        </div>
      </div>
    </div>
  </section>

  <?php
  // Define the courses data based on user content
  $regular_courses = [
      [
          'title' => 'Furqan Qaida',
          'icon' => '📖',
          'def' => 'A foundational course designed for beginners to learn the Arabic alphabet, correct pronunciation, and the essential skills required for reading the Holy Quran.',
          'points' => ['Arabic alphabet', 'Correct Makharij (points of articulation)', 'Letter joining', 'Basic Tajweed rules', 'Preparation for Quran reading']
      ],
      [
          'title' => 'Quran Reading',
          'icon' => '🎙️',
          'def' => 'A comprehensive course that enables students to read the Holy Quran fluently and accurately with proper pronunciation and confidence.',
          'points' => ['Nazra Quran', 'Correct pronunciation', 'Fluent recitation', 'Daily reading practice', 'Error correction']
      ],
      [
          'title' => 'Quran Memorization',
          'icon' => '🧠',
          'def' => 'A structured Hifz program that helps students memorize the Holy Quran systematically through consistent practice, regular revision, and teacher supervision.',
          'points' => ['Daily lesson (Sabaq)', 'Revision of previous lessons', 'Memorization techniques', 'Teacher assessment', 'Strong Hifz routine']
      ],
      [
          'title' => 'Quran with Tajweed',
          'icon' => '✨',
          'def' => 'Learn to recite the Holy Quran beautifully by applying the authentic rules of Tajweed and proper pronunciation.',
          'points' => ['Makharij', 'Sifaat', 'Ghunnah', 'Madd', 'Qalqalah', 'Stopping and starting rules', 'Practical recitation']
      ],
      [
          'title' => 'Learn Ten Qirats',
          'icon' => '📜',
          'def' => 'An advanced course that introduces students to the ten authentic Qira’at through structured instruction and guided practice.',
          'points' => ['Introduction to the Ten Qira’at', 'Riwayat', 'Pronunciation variations', 'Advanced recitation', 'Teacher-guided practice']
      ],
      [
          'title' => 'Learn Arabic',
          'icon' => '✍️',
          'def' => 'A beginner-friendly course designed to develop Arabic reading, writing, comprehension, and basic communication skills.',
          'points' => ['Arabic grammar', 'Vocabulary building', 'Sentence construction', 'Quranic Arabic', 'Translation and comprehension']
      ],
      [
          'title' => 'Hadith',
          'icon' => '📚',
          'def' => 'A comprehensive study of selected Hadith to help students understand their meanings, teachings, and practical application in everyday life.',
          'points' => ['Selected Hadith', 'Meanings and explanations', 'Understanding the Sunnah', 'Moral values', 'Character development']
      ],
      [
          'title' => 'Quran Tafseer',
          'icon' => '💡',
          'def' => 'A course that explores the meanings, context, and divine message of the Holy Quran, enabling students to gain a deeper understanding of its guidance and teachings.',
          'points' => ['Surah explanation', 'Word meanings', 'Historical context', 'Practical lessons', 'Islamic guidance for daily life']
      ]
  ];

  $complementary_courses = [
      [
          'title' => 'Islamic History',
          'icon' => '🕌',
          'def' => 'A comprehensive course that explores the rich history of Islam, including the lives of the Prophets, the Companions, and the development of Islamic civilization.',
          'points' => ['Seerah of the Prophets', 'Khulafa-e-Rashideen', 'Major Islamic events', 'Moral and spiritual lessons', 'Islamic heritage and civilization']
      ],
      [
          'title' => 'Islamic Studies',
          'icon' => '🕋',
          'def' => 'An introductory course that provides a strong foundation in Islamic beliefs, worship, morals, and practical guidance for everyday life.',
          'points' => ['Articles of Faith (Iman)', 'The Five Pillars of Islam', 'Islamic manners and etiquette', 'Halal and Haram fundamentals', 'Living an Islamic lifestyle']
      ],
      [
          'title' => 'Day-to-Day Duas',
          'icon' => '🤲',
          'def' => 'A practical course designed to help students learn, memorize, and understand the authentic daily supplications (Masnoon Duas) for different occasions.',
          'points' => ['Duas before and after eating', 'Sleeping and waking up duas', 'Entering and leaving the home', 'Travel duas', 'Bathroom duas', 'Morning and evening adhkar']
      ],
      [
          'title' => 'Prayer Lessons',
          'icon' => '📿',
          'def' => 'A step-by-step course that teaches students how to perform Salah correctly while understanding its essential actions, supplications, and significance.',
          'points' => ['Correct method of Wudu', 'Step-by-step Salah guide', 'Essential prayer supplications', 'Understanding Rak’ahs', 'Correction of common prayer mistakes']
      ]
  ];
  ?>

  <!-- REGULAR COURSES -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Regular Courses</h2>
        <p class="section-subtitle">Core programs focusing on reading, memorization, and understanding the Holy Quran</p>
      </div>

      <div class="courses-directory-grid">
        <?php foreach ( $regular_courses as $course ) : ?>
        <div class="premium-card directory-course-card">
          <div class="directory-course-icon"><?php echo $course['icon']; ?></div>
          <h3 class="directory-course-title"><?php echo esc_html($course['title']); ?></h3>
          <p class="directory-course-def"><?php echo esc_html($course['def']); ?></p>
          <ul class="directory-course-points">
            <?php foreach ( $course['points'] as $point ) : ?>
            <li>
              <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
              <span><?php echo esc_html($point); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="directory-course-footer">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline btn-course-enroll">Enroll Now</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- COMPLEMENTARY COURSES -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2>Complementary Courses</h2>
        <p class="section-subtitle">Essential Islamic studies to build a strong foundation in faith and daily practices</p>
      </div>

      <div class="courses-directory-grid">
        <?php foreach ( $complementary_courses as $course ) : ?>
        <div class="premium-card directory-course-card">
          <div class="directory-course-icon"><?php echo $course['icon']; ?></div>
          <h3 class="directory-course-title"><?php echo esc_html($course['title']); ?></h3>
          <p class="directory-course-def"><?php echo esc_html($course['def']); ?></p>
          <ul class="directory-course-points">
            <?php foreach ( $course['points'] as $point ) : ?>
            <li>
              <svg fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
              <span><?php echo esc_html($point); ?></span>
            </li>
            <?php endforeach; ?>
          </ul>
          <div class="directory-course-footer">
            <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline btn-course-enroll">Enroll Now</a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="section section-alt">
    <div class="container">
      <div class="cta-card">
        <div class="cta-card-inner">
          <h2 class="cta-card-heading">Ready to Begin Your Journey?</h2>
          <p class="cta-card-sub">Book your free trial class today — no payment, no commitment, just pure learning.</p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-card-btn">&#128222; Book Free Trial Class</a>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
