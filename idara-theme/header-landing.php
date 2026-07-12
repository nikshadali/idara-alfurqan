<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#487eed">
  <meta name="description" content="Dar Ul Quran Online Quran Academy - Learn Quran Online with Expert Teachers. One-to-One live classes for kids, adults and sisters worldwide.">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Poppins:wght@300;400;500;600;700&family=Noto+Naskh+Arabic:wght@400;600&display=swap" rel="stylesheet">
  <script>
    (function() {
      const storedTheme = localStorage.getItem('idara_theme');
      if (storedTheme === 'dark' || (!storedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.setAttribute('data-theme', 'dark');
      }
    })();
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- ANNOUNCEMENT BAR -->
  <div id="announcement-bar">
    <div class="container">
      <div class="bar-inner">
        <span class="bar-tagline">"In the Light of Quran, We Find Guidance"</span>
        <div class="bar-badges">
          <div class="bar-badge"><span>&#9733;</span> Female Teachers Available</div>
          <div class="bar-badge"><span>&#10003;</span> 100% Free Trial</div>
          <div class="bar-badge"><span>&#9654;</span> 1-on-1 Live Classes</div>
        </div>
        <div class="bar-socials">
          <a href="https://wa.me/9233329991120" title="WhatsApp">&#9742;</a>
        </div>
      </div>
    </div>
  </div>

  <!-- LANDING PAGE NAVBAR -->
  <nav id="navbar">
    <div class="container">
      <div class="nav-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Idara Al Furqan Logo" class="logo-light">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-logo.png" alt="Idara Al Furqan Logo" class="logo-dark">
        </a>
        
        <ul class="nav-links">
            <li><a href="#why-choose-us">Why Us</a></li>
            <li><a href="#roadmap">Roadmap</a></li>
            <li><a href="#success">Benefits</a></li>
            <li><a href="#testimonials">Reviews</a></li>
            <li><a href="#faq">FAQ</a></li>
        </ul>
        
        <div style="display:flex;align-items:center;gap:12px;">
          <button id="theme-toggle" aria-label="Toggle Dark Mode" style="background:transparent;border:none;cursor:pointer;color:var(--green);display:flex;align-items:center;padding:4px;">
            <svg class="sun-icon" style="display:none;" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
            <svg class="moon-icon" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
          </button>
          <a href="#hero-form" class="btn btn-primary hide-on-mobile" style="margin-left: 10px;">Claim Free Trial</a>
          <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
      <div class="mobile-nav" id="mobile-nav">
        <a href="#why-choose-us">Why Us</a>
        <a href="#roadmap">Roadmap</a>
        <a href="#success">Benefits</a>
        <a href="#testimonials">Reviews</a>
        <a href="#faq">FAQ</a>
        <a href="#hero-form" class="btn btn-primary" style="margin-top:16px;text-align:center">Claim Free Trial</a>
      </div>
    </div>
  </nav>

<script>
/* ── Mobile hamburger ── */
function toggleMenu() {
  var nav = document.getElementById('mobile-nav');
  var ham = document.getElementById('hamburger');
  nav.classList.toggle('open');
  ham.classList.toggle('active');
}

/* ── Close mobile menu on anchor click ── */
document.addEventListener('DOMContentLoaded', function () {
  var mobileLinks = document.querySelectorAll('#mobile-nav a:not(.mobile-chevron)');
  mobileLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      var nav = document.getElementById('mobile-nav');
      var ham = document.getElementById('hamburger');
      if (nav && nav.classList.contains('open')) {
        nav.classList.remove('open');
        ham.classList.remove('active');
      }
    });
  });
});
</script>
