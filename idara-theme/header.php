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

<?php
/**
 * Mobile_Chevron_Walker — adds a .mobile-chevron span to parent items
 * so the CSS accordion chevron works without JS DOM manipulation.
 */
class Idara_Mobile_Walker extends Walker_Nav_Menu {
    public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        parent::start_el( $output, $item, $depth, $args, $id );
        // Inject chevron after the <a> closing tag for parent items at depth 0
        if ( $depth === 0 && in_array( 'menu-item-has-children', $item->classes ) ) {
            // Replace the last </a> with </a> + chevron button — we patch via JS instead (simpler)
        }
    }
}
?>

  <!-- TRUSTPILOT TOP BAR -->
  <div id="trustpilot-top-bar" style="background-color: #fcfcfc; border-bottom: 1px solid #e5e7eb; padding: 6px 0; font-size: 13px; font-family: 'Poppins', sans-serif;">
    <div class="container">
      <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
        <div style="color: #111827; display: flex; align-items: center; gap: 5px;">
          <span>See our <a href="#" style="color: inherit; text-decoration: none;"><span style="font-weight: 700; text-decoration: underline;">690 reviews</span></a> on</span>
          <span style="color: #00b67a; font-size: 16px; margin-left: 2px; line-height: 1;">&#9733;</span>
          <span style="font-weight: 700;">Trustpilot</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ANNOUNCEMENT BAR -->
  <div id="announcement-bar">
    <div class="container">
      <div class="bar-inner">
        <span class="bar-tagline">"In the Light of Quran, We Find Guidance"</span>
        <div class="bar-badges">
          <div class="bar-badge"><span>&#9733;</span> Female Teachers Available</div>
          <div class="bar-badge"><span>&#10003;</span> Flexible Timings</div>
          <div class="bar-badge"><span>&#9654;</span> 1-on-1 Live Classes</div>
          <div class="bar-badge"><span>&#9733;</span> Tajweed Certified</div>
        </div>
        <div class="bar-socials">
          <a href="#" title="Facebook">&#xfb;</a>
          <a href="#" title="Instagram">&#9312;</a>
          <a href="https://wa.me/923166694116" title="WhatsApp">&#9742;</a>
        </div>
      </div>
    </div>
  </div>

  <!-- NAVBAR -->
  <nav id="navbar">
    <div class="container">
      <div class="nav-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Idara Al Furqan Logo" class="logo-light">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/dark-logo.png" alt="Idara Al Furqan Logo" class="logo-dark">
        </a>
        
        <?php
        // WordPress Dynamic Menu (Primary)
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
            ) );
        } else {
            // Fallback to static links if menu is not set in WordPress
            echo '<ul class="nav-links">
                <li><a href="#hero">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#courses">Courses</a></li>
                <li><a href="#teachers">Our Teachers</a></li>
                <li><a href="#fee">Fee Plans</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>';
        }
        ?>
        
        <div style="display:flex;align-items:center;gap:12px;">
          <button id="theme-toggle" aria-label="Toggle Dark Mode" style="background:transparent;border:none;cursor:pointer;color:var(--green);display:flex;align-items:center;padding:4px;">
            <svg class="sun-icon" style="display:none;" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>
            <svg class="moon-icon" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
          </button>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary hide-on-mobile" style="margin-left: 10px;">Free Trial Class</a>
          <div class="hamburger" id="hamburger" onclick="toggleMenu()">
            <span></span><span></span><span></span>
          </div>
        </div>
      </div>
      <div class="mobile-nav" id="mobile-nav">
        <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'mobile-nav-list',
            ) );
        } else {
        ?>
        <a href="#hero">Home</a>
        <a href="#about">About Us</a>
        <a href="#courses">Courses</a>
        <a href="#teachers">Our Teachers</a>
        <a href="#fee">Fee Plans</a>
        <a href="#testimonials">Testimonials</a>
        <a href="#contact">Contact Us</a>
        <?php } ?>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="margin-top:16px;text-align:center">Free Trial Class</a>
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
      // Don't close if it's a sub-menu toggle link
      if (link.parentElement.classList.contains('menu-item-has-children')) {
        // Handled by the accordion script below
        return;
      }
      var nav = document.getElementById('mobile-nav');
      var ham = document.getElementById('hamburger');
      if (nav && nav.classList.contains('open')) {
        nav.classList.remove('open');
        ham.classList.remove('active');
      }
    });
  });
});

/* ── Mobile sub-menu accordion ── */
document.addEventListener('DOMContentLoaded', function () {
  var parents = document.querySelectorAll('.mobile-nav-list .menu-item-has-children');
  parents.forEach(function (item) {
    var link = item.querySelector(':scope > a');
    if (!link) return;

    /* Inject chevron span */
    var chevron = document.createElement('span');
    chevron.className = 'mobile-chevron';
    chevron.setAttribute('aria-hidden', 'true');
    link.appendChild(chevron);

    /* Prevent navigation on toggle tap; allow normal click if no sub-menu */
    link.addEventListener('click', function (e) {
      var sub = item.querySelector(':scope > .sub-menu');
      if (!sub) return;
      e.preventDefault();
      /* Close siblings */
      var siblings = item.parentElement.querySelectorAll(':scope > .menu-item-has-children.open');
      siblings.forEach(function (s) {
        if (s !== item) s.classList.remove('open');
      });
      item.classList.toggle('open');
    });
  });
});
</script>
