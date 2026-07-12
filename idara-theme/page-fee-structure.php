<?php
/**
 * Template Name: Fee Structure
 * Description: Premium pricing & fee structure page for Idara Al Furqan.
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
        <span>Fee Structure</span>
      </nav>
      <h1>Simple, <span class="page-hero-highlight">Affordable</span> Pricing</h1>
      <p class="page-hero-sub">Accepting fees in USD, CAD, GBP &amp; AUD. Start with a completely free trial — no card required.</p>
    </div>
  </section>

  <!-- CURRENCY SWITCHER + PRICING CARDS -->
  <section class="section">
    <div class="container">

      <!-- Currency toggle -->
      <div class="currency-switcher" role="group" aria-label="Select currency">
        <button class="currency-btn active" data-currency="usd">🇺🇸 USD</button>
        <button class="currency-btn" data-currency="cad">🇨🇦 CAD</button>
        <button class="currency-btn" data-currency="gbp">🇬🇧 GBP</button>
        <button class="currency-btn" data-currency="aud">🇦🇺 AUD</button>
      </div>

      <!-- Pricing grid -->
      <div class="pricing-grid">

        <!-- Free Trial -->
        <div class="pricing-card premium-card">
          <div class="pricing-plan-name">Free Trial</div>
          <div class="pricing-price">
            <span class="pricing-amount" data-usd="$0" data-cad="$0" data-gbp="£0" data-aud="$0">$0</span>
            <span class="pricing-period">/ month</span>
          </div>
          <p class="pricing-desc">Try any class completely free. No commitment, no payment needed.</p>
          <ul class="pricing-features">
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Trial classes with multiple tutors</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> No credit card required</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Choose your preferred tutor gender</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Flexible scheduling</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="pricing-btn pricing-btn-outline">Book Free Trial</a>
        </div>

        <!-- 2 Classes / Week -->
        <div class="pricing-card premium-card">
          <div class="pricing-plan-name">2 Classes / Week</div>
          <div class="pricing-price">
            <span class="pricing-amount" data-usd="$30" data-cad="$45" data-gbp="£25" data-aud="$45">$30</span>
            <span class="pricing-period">/ month</span>
          </div>
          <p class="pricing-desc">A gentle start — ideal for beginners building a consistent habit.</p>
          <ul class="pricing-features">
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> 8 live classes per month</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> One-on-one sessions</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Certified male or female tutor</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Monthly progress report</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="pricing-btn pricing-btn-outline">Get Started</a>
        </div>

        <!-- 3 Classes / Week -->
        <div class="pricing-card premium-card">
          <div class="pricing-plan-name">3 Classes / Week</div>
          <div class="pricing-price">
            <span class="pricing-amount" data-usd="$35" data-cad="$50" data-gbp="£27" data-aud="$50">$35</span>
            <span class="pricing-period">/ month</span>
          </div>
          <p class="pricing-desc">The perfect balance for steady, consistent Quran progress.</p>
          <ul class="pricing-features">
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> 12 live classes per month</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> One-on-one sessions</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Certified male or female tutor</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Monthly progress report</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="pricing-btn pricing-btn-outline">Get Started</a>
        </div>

        <!-- 4 Classes / Week — MOST POPULAR -->
        <div class="pricing-card premium-card pricing-card-featured">
          <div class="pricing-badge">Most Popular</div>
          <div class="pricing-plan-name">4 Classes / Week</div>
          <div class="pricing-price">
            <span class="pricing-amount" data-usd="$45" data-cad="$64" data-gbp="£35" data-aud="$65">$45</span>
            <span class="pricing-period">/ month</span>
          </div>
          <p class="pricing-desc">Our most chosen plan — fast progress with dedicated daily learning.</p>
          <ul class="pricing-features">
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> 16 live classes per month</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> One-on-one sessions</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Certified male or female tutor</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Monthly progress report</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Backup teacher available</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="pricing-btn pricing-btn-primary">Get Started</a>
        </div>

        <!-- 5 Classes / Week -->
        <div class="pricing-card premium-card">
          <div class="pricing-plan-name">5 Classes / Week</div>
          <div class="pricing-price">
            <span class="pricing-amount" data-usd="$50" data-cad="$70" data-gbp="£40" data-aud="$70">$50</span>
            <span class="pricing-period">/ month</span>
          </div>
          <p class="pricing-desc">For dedicated learners who want maximum results in minimum time.</p>
          <ul class="pricing-features">
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> 20 live classes per month</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> One-on-one sessions</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Certified male or female tutor</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Monthly progress report</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Backup teacher available</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="pricing-btn pricing-btn-outline">Get Started</a>
        </div>

        <!-- Hifz Classes -->
        <div class="pricing-card premium-card pricing-card-hifz">
          <div class="pricing-plan-name">&#11088; Hifz Program</div>
          <div class="pricing-price">
            <span class="pricing-amount" data-usd="$70" data-cad="$100" data-gbp="£55" data-aud="$100">$70</span>
            <span class="pricing-period">/ month</span>
          </div>
          <p class="pricing-desc">Intensive Quran memorization program with specialized Hifz teachers.</p>
          <ul class="pricing-features">
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Daily Hifz sessions</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Dedicated Hafiz teacher</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Structured revision plan</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Completion certificate</li>
            <li><svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> Monthly progress report</li>
          </ul>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="pricing-btn pricing-btn-outline">Enroll Now</a>
        </div>

      </div><!-- end .pricing-grid -->

      <!-- Payment methods note -->
      <p class="pricing-payment-note">
        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        Secure payments via <strong>2Checkout</strong>, <strong>PayPal</strong>, Credit Card &amp; Mastercard.
      </p>
    </div>
  </section>

  <!-- FAMILY DISCOUNT -->
  <section class="section section-alt">
    <div class="container">
      <div class="discount-banner">
        <div class="discount-banner-icon">&#127968;</div>
        <div class="discount-banner-body">
          <h2>Family Discount Package</h2>
          <p>A <strong>20% tuition discount</strong> will be awarded to the 2nd &amp; 3rd siblings of a family. Make Quran learning affordable for your entire household.</p>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">&#128222; Ask About Family Plan</a>
      </div>
    </div>
  </section>

  <!-- PAYMENT INFO + WHAT'S INCLUDED -->
  <section class="section">
    <div class="container">
      <div class="section-title">
        <h2>What's Included</h2>
        <p class="section-subtitle">Every plan comes with the same premium quality — only the frequency changes</p>
      </div>
      <div class="included-grid">
        <div class="included-item">
          <div class="included-icon">&#127891;</div>
          <h3>Certified Tutors</h3>
          <p>All teachers are Hafiz, Qari &amp; Alim graduates with thorough background checks and verified credentials.</p>
        </div>
        <div class="included-item">
          <div class="included-icon">&#128100;</div>
          <h3>One-on-One Classes</h3>
          <p>Every session is exclusively yours — no group distractions, just focused personalized learning.</p>
        </div>
        <div class="included-item">
          <div class="included-icon">&#128197;</div>
          <h3>Flexible Scheduling</h3>
          <p>Morning, evening, or weekends — you pick the time that works best for you and your family.</p>
        </div>
        <div class="included-item">
          <div class="included-icon">&#128202;</div>
          <h3>Monthly Reports</h3>
          <p>Receive a detailed progress report each month so you always know how well you're advancing.</p>
        </div>
        <div class="included-item">
          <div class="included-icon">&#128257;</div>
          <h3>Backup Teachers</h3>
          <p>Alternative certified teachers ensure your class is never cancelled even if your tutor is unavailable.</p>
        </div>
        <div class="included-item">
          <div class="included-icon">&#127942;</div>
          <h3>Completion Certificate</h3>
          <p>Earn an official Appraisal Certificate upon successful completion of your enrolled course.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ ACCORDION -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-title">
        <h2>Frequently Asked Questions</h2>
        <p class="section-subtitle">Everything you need to know about fees and payments</p>
      </div>
      <div class="fee-faq-list" style="max-width:780px; margin:0 auto;">

        <div class="faq-item premium-card fee-faq-item">
          <button class="faq-question fee-faq-trigger" aria-expanded="false">
            What are the accepted payment methods?
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="faq-answer fee-faq-body" hidden>
            We accept payments through <strong>2Checkout.com</strong>, <strong>PayPal</strong>, Credit Card, and Mastercard. Fee is collected in advance after trial classes, at the time of joining regular classes.
          </div>
        </div>

        <div class="faq-item premium-card fee-faq-item">
          <button class="faq-question fee-faq-trigger" aria-expanded="false">
            Is there a refund policy?
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="faq-answer fee-faq-body" hidden>
            <ul style="padding-left:18px; line-height:1.9;">
              <li>Trial classes are completely free. Regular monthly charges begin after the trial.</li>
              <li>To stop services, email our office <strong>before the new month begins</strong> to avoid being charged.</li>
              <li>For a monthly break, notify us by email before the month starts. Classes during a month incur the full fee.</li>
              <li>No refund for public holidays or absences without prior notice.</li>
            </ul>
          </div>
        </div>

        <div class="faq-item premium-card fee-faq-item">
          <button class="faq-question fee-faq-trigger" aria-expanded="false">
            When is the fee charged?
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="faq-answer fee-faq-body" hidden>
            Fee is collected <strong>monthly in advance</strong>, starting after your free trial classes are complete and you decide to join regular classes.
          </div>
        </div>

        <div class="faq-item premium-card fee-faq-item">
          <button class="faq-question fee-faq-trigger" aria-expanded="false">
            Can I change my plan later?
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="faq-answer fee-faq-body" hidden>
            Yes. You can upgrade or downgrade your class frequency at any time by contacting us before the new billing month begins. We'll adjust your plan accordingly.
          </div>
        </div>

        <div class="faq-item premium-card fee-faq-item">
          <button class="faq-question fee-faq-trigger" aria-expanded="false">
            Do siblings get a discount?
            <svg class="faq-chevron" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="m6 9 6 6 6-6"/></svg>
          </button>
          <div class="faq-answer fee-faq-body" hidden>
            Absolutely! A <strong>20% tuition discount</strong> is awarded to the 2nd and 3rd siblings enrolled from the same family. Contact us to apply your family discount.
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="section">
    <div class="container">
      <div class="cta-card">
        <div class="cta-card-inner">
          <h2 class="cta-card-heading">Start with a Free Trial Today</h2>
          <p class="cta-card-sub">No credit card. No commitment. Just pure Quran learning with expert teachers.</p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="cta-card-btn">&#128222; Book Free Trial</a>
        </div>
      </div>
    </div>
  </section>

<script>
/* Currency switcher */
(function () {
  const btns = document.querySelectorAll('.currency-btn');
  const amounts = document.querySelectorAll('.pricing-amount');

  btns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      btns.forEach(function (b) { b.classList.remove('active'); });
      btn.classList.add('active');
      const cur = btn.dataset.currency;
      amounts.forEach(function (el) {
        el.textContent = el.dataset[cur];
      });
    });
  });

  /* FAQ accordion */
  document.querySelectorAll('.fee-faq-trigger').forEach(function (trigger) {
    trigger.addEventListener('click', function () {
      const expanded = trigger.getAttribute('aria-expanded') === 'true';
      const body = trigger.nextElementSibling;
      trigger.setAttribute('aria-expanded', !expanded);
      if (expanded) {
        body.hidden = true;
        trigger.closest('.fee-faq-item').classList.remove('faq-open');
      } else {
        body.hidden = false;
        trigger.closest('.fee-faq-item').classList.add('faq-open');
      }
    });
  });
})();
</script>

<?php get_footer(); ?>
