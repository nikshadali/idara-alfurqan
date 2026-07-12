  <!-- FOOTER -->
  <footer id="footer">
    <div class="footer-main">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-brand">
            <div class="logo-wrap">
              <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Dar Ul Quran"> -->
              <div>
                <div class="brand-name">Dar Ul Quran</div>
                <div class="brand-sub">Online Quran Academy</div>
              </div>
            </div>
            <p>Our mission is to make Quran education accessible to every Muslim family worldwide through qualified
              teachers, personalized attention, and a nurturing online environment.</p>
            <div class="footer-socials">
              <a href="#" title="Facebook">f</a>
              <a href="#" title="Instagram">in</a>
              <a href="#" title="YouTube">yt</a>
              <a href="https://wa.me/923166694116" title="WhatsApp">wa</a>
            </div>
          </div>
          <div class="footer-col">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <?php dynamic_sidebar( 'footer-1' ); ?>
            <?php else : ?>
                <h4>Quick Links</h4>
                <ul>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#courses">Courses</a></li>
                  <li><a href="#teachers">Our Teachers</a></li>
                  <li><a href="#fee">Fee Plans</a></li>
                  <li><a href="#testimonials">Testimonials</a></li>
                  <li><a href="#contact">Contact Us</a></li>
                </ul>
            <?php endif; ?>
          </div>
          <div class="footer-col">
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <?php dynamic_sidebar( 'footer-2' ); ?>
            <?php else : ?>
                <h4>Our Courses</h4>
                <ul>
                  <li><a href="#courses">Noorani Qaida</a></li>
                  <li><a href="#courses">Nazra Quran</a></li>
                  <li><a href="#courses">Tajweed Course</a></li>
                  <li><a href="#courses">Hifz Program</a></li>
                  <li><a href="#courses">Translation Course</a></li>
                </ul>
            <?php endif; ?>
          </div>
          <div class="footer-col" id="contact">
            <h4>Contact Us</h4>
            <div class="footer-contact-item">
              <span>&#9742;</span>
              <span>+92 316 669 4116</span>
            </div>
            <div class="footer-contact-item">
              <span>&#9993;</span>
              <span>info@idaraalfurqan.com</span>
            </div>
            <div class="footer-contact-item">
              <span>&#127760;</span>
              <span>www.idaraalfurqan.com</span>
            </div>
            <div class="footer-contact-item">
              <span>&#128205;</span>
              <span>Pakistan (Serving Worldwide)</span>
            </div>
            <div class="footer-wa-card">
              <p>Start your free trial today!</p>
              <a href="https://wa.me/923166694116">&#9742; Chat on WhatsApp</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <span>Dar Ul Quran</span> Online Quran Academy. All rights reserved. &mdash; Designed with
          &#10084;&#65039; for Quran learners</p>
      </div>
    </div>
  </footer>

  <!-- SCROLL TO TOP -->
  <button id="scroll-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" title="Back to top">&#8593;</button>

  <script>
    // Theme Toggle Logic
    const themeToggleBtn = document.getElementById('theme-toggle');
    const sunIcon = document.querySelector('.sun-icon');
    const moonIcon = document.querySelector('.moon-icon');
    const htmlEl = document.documentElement;

    function updateIcons() {
      if (htmlEl.getAttribute('data-theme') === 'dark') {
        if(sunIcon) sunIcon.style.display = 'block';
        if(moonIcon) moonIcon.style.display = 'none';
      } else {
        if(sunIcon) sunIcon.style.display = 'none';
        if(moonIcon) moonIcon.style.display = 'block';
      }
    }

    if (themeToggleBtn) {
      updateIcons();
      themeToggleBtn.addEventListener('click', () => {
        if (htmlEl.getAttribute('data-theme') === 'dark') {
          htmlEl.removeAttribute('data-theme');
          localStorage.setItem('idara_theme', 'light');
        } else {
          htmlEl.setAttribute('data-theme', 'dark');
          localStorage.setItem('idara_theme', 'dark');
        }
        updateIcons();
      });
    }

    // Original Logic
    function toggleMenu() {
      document.getElementById('mobile-nav').classList.toggle('open');
    }
    window.addEventListener('scroll', function () {
      var btn = document.getElementById('scroll-top');
      btn.classList.toggle('visible', window.scrollY > 400);
    });

    // Stats Animation Observer & Counter
    if ('IntersectionObserver' in window) {
      var statsObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            
            // Animate numbers
            var statNumbers = entry.target.querySelectorAll('.stat-number');
            statNumbers.forEach(function(statNode) {
              var text = statNode.innerText.trim();
              var numberMatch = text.match(/(\d+)/);
              if (numberMatch) {
                var targetNum = parseInt(numberMatch[0], 10);
                var suffix = text.replace(numberMatch[0], '');
                var duration = 1500; // ms
                var start = null;
                
                var step = function(timestamp) {
                  if (!start) start = timestamp;
                  var progress = Math.min((timestamp - start) / duration, 1);
                  // easeOutQuart
                  var ease = 1 - Math.pow(1 - progress, 4);
                  var currentNum = Math.floor(ease * targetNum);
                  statNode.innerText = currentNum + suffix;
                  if (progress < 1) {
                    window.requestAnimationFrame(step);
                  } else {
                    statNode.innerText = text; // ensure final exact text
                  }
                };
                window.requestAnimationFrame(step);
              }
            });
            
            statsObserver.unobserve(entry.target);
          }
        });
      }, { threshold: 0.1 });

      document.querySelectorAll('.stats-grid').forEach(function(grid) {
        statsObserver.observe(grid);
      });
    } else {
      document.querySelectorAll('.stats-grid').forEach(function(grid) {
        grid.classList.add('in-view');
      });
    }
  </script>

<?php wp_footer(); ?>
</body>
</html>
