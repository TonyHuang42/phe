<?php 
$hotspots = [
    [
        'label' => 'END TONGUE AND GROOVE',
        'title' => 'Easy assembly',
        'description' => 'With end-jointed panels, it is easy to join and you use as much of the wood as possible. A sustainable choice for our planet and your finances.',
        'top' => '32%',
        'left' => '32%',
        'direction' => 'left'
    ],
    [
        'label' => 'TEXTURE',
        'title' => 'Brushed',
        'description' => 'A brushed structure has been treated with rotating brushes that have removed the soft springwood on the surface. The result is a more durable product with a clear wood structure.',
        'top' => '55%',
        'left' => '50%',
        'direction' => 'left'
    ],
    [
        'label' => 'CERTIFICATION',
        'title' => 'Sustainable forestry',
        'description' => 'The forests of Norrland that surround us are our main raw material, and respecting the environment comes naturally. Our wood panels and solid wood floors are made from wood from certified sustainable forestry.',
        'top' => '88%',
        'left' => '30%',
        'direction' => 'left'
    ],

    [
        'label' => 'Surface treatment',
        'title' => ' Superglaze',
        'description' => 'Superglaze is a two-layer treatment. The panel is first treated with a varnish that inhibits knot yellowing and then with a white-pigmented varnish that makes the panel bright and easy to keep clean.',
        'top' => '35%',
        'left' => '72%',
        'direction' => 'right'
    ],
    [
        'label' => 'Profile',
        'title' => 'Smooth',
        'description' => 'tongue and groove The smooth tongue and groove creates a modern and stylish smooth wall. The profile has a very small bevel that creates a smooth transition between each board.',
        'top' => '68%',
        'left' => '83%',
        'direction' => 'right'
    ],
    [
        'label' => '8% Moisture ratio',
        'title' => 'More Stable Products',
        'description' => 'Dimensionally stable wood product. For dimensionally stable wood panels and wood floors, the wood is dried to 8% moisture content.',
        'top' => '88%',
        'left' => '50%',
        'direction' => 'right'
    ],


];
?>
<!-- HERO -->
<section class="home-hero-section product-banner-animation">
    <div class="hero-section-bg product-banner-bg">
        <img src="<?= $product['banner_image']; ?>"
            alt="<?= $product['title']; ?>"
            class="hero-section-bg-img product-banner-img">
    </div>

    <div class="building-system-hero-section-wrap product-banner-content">
        <div class="ms-5">
            <div class="row align-items-end">
                <div class="">
                    <h2 class="mb-5 product-banner-title">
                        <?= $product['title']; ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OVERVIEW -->
<section class="product-intro product-diagram py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <?php if(!empty($product['overview_description'])): ?>
                    <div class="headline-wrap">
                        <h3 class="product-titles reveal-line">
                            <?= nl2br($product['overview_description']); ?>
                        </h3>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['overview_features'])): ?>
                    <div class="key-features mt-5">
                        <h3 class="mb-4 product-titles">
                            Key Features
                        </h3>
                        <ul class="feature-list-custom">
                            <?php foreach($product['overview_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['overview_note_title'])): ?>
                    <div class="key-features mt-5">
                        <h5 class="mb-3 product-titles">
                            <?= $product['overview_note_title']; ?>
                        </h5>
                        <?php if(!empty($product['overview_note_description'])): ?>
                            <p class="product-description mb-0">
                                <?= nl2br($product['overview_note_description']); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <img
                    src="<?= $product['overview_image']; ?>"
                    alt="<?= $product['title']; ?>"
                    class="product-feature-image">
            </div>
        </div>
    </div>
</section>

<section class="product-hotspot-section">
    <div class="product-hotspot-wrapper">

        <img src="<?= $product['profile_image']; ?>" class="product-main-image">

        <?php foreach($hotspots as $spot): ?>
            <div class="hotspot hotspot-<?= $spot['direction']; ?>"
                style="top:<?= $spot['top']; ?>;left:<?= $spot['left']; ?>;">

                <span class="hotspot-dot"></span>

            <div class="hotspot-card">
                <div class="hotspot-header">
                    <div class="hotspot-content">
                        <span class="hotspot-label">
                            <?= $spot['label']; ?>
                        </span>
                        <h4><?= $spot['title']; ?></h4>
                    </div>
                    <button class="hotspot-toggle">+</button>
                </div>
                <div class="hotspot-body">
                    <p><?= $spot['description']; ?></p>
                </div>
            </div>

            </div>
        <?php endforeach; ?>

    </div>
</section>

<!-- SECONDARY SECTION -->
<section class="product-intro py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">
                <?php if(!empty($product['secondary_title'])): ?>
                    <div class="headline-wrap">
                        <h3 class="product-titles reveal-line">
                            <?= nl2br($product['secondary_title']); ?>
                        </h3>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['secondary_description'])): ?>
                    <p class="product-description">
                        <?= nl2br($product['secondary_description']); ?>
                    </p>
                <?php endif; ?>

                <?php if(!empty($product['secondary_features'])): ?>
                    <div class="key-features mt-5">
                        <h5 class="mb-4 product-titles">
                            Key Features
                        </h5>
                        <ul class="feature-list-custom">
                            <?php foreach($product['secondary_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <img
                    src="<?= $product['secondary_image']; ?>"
                    alt=""
                    class="product-feature-image">
            </div>
        </div>
    </div>
</section>

<!-- DOORS & WINDOWS -->
<section class="product-intro py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <img
                    src="<?= $product['door_window_image']; ?>"
                    alt=""
                    class="product-feature-image">
            </div>
            <div class="col-lg-5">
                 <?php if(!empty($product['door_window_title'])): ?>
                    <div class="headline-wrap">
                        <h3 class="product-titles reveal-line">
                            <?= nl2br($product['door_window_title']); ?>
                        </h3>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['door_features'])): ?>
                    <div class="key-features mb-4">
                        <h5 class="mb-3 product-sub-titles">
                            <?= $product['door_section_title']; ?>
                        </h5>
                        <ul class="feature-list-custom">
                            <?php foreach($product['door_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['window_features'])): ?>
                    <div class="key-features">
                        <h5 class="mb-3 product-sub-titles">
                            <?= $product['window_section_title']; ?>
                        </h5>
                        <ul class="feature-list-custom">
                            <?php foreach($product['window_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="product-diagram py-5">
  <div class="container">
    <div class="diagram-scroll-wrapper">

      <!-- Left: tall image, sticky -->
      <div class="diagram-left">
        <div class="diagram-left-sticky">
          <img
            src="<?= $product['gallery_image_large']; ?>"
            class="diagram-image-large scroll-reveal reveal-left"
            alt="">
        </div>
      </div>

      <!-- Right: shorter image, scrolls with parallax -->
      <div class="diagram-right">
        <div class="parallax-small-image scroll-reveal reveal-right">
          <img
            src="<?= $product['gallery_image_small']; ?>"
            class="diagram-image-medium"
            alt="">
        </div>
      </div>

    </div>
  </div>
</section>
<script>
    document.querySelectorAll('.reveal-line').forEach(el => {
        // Grab only the text content, stripping any stray wrapper tags PHP may add
        const raw = el.innerHTML
            .replace(/<div[^>]*>|<\/div>|<span[^>]*>|<\/span>/gi, '')
            .trim();

        const lines = raw
            .split(/<br\s*\/?>/i)
            .map(l => l.trim())
            .filter(Boolean);

        el.innerHTML = lines.map(line => `
            <span class="reveal-line-wrap">
            <span class="reveal-line-inner">${line}</span>
            </span>
        `).join('');

        const io = new IntersectionObserver(entries => {
            entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target
                .querySelectorAll('.reveal-line-inner')
                .forEach((s, i) => {
                // Extra JS delay as a safety net on top of CSS delay
                setTimeout(() => s.classList.add('visible'), i * 120);
                });
            io.unobserve(entry.target);
            });
        }, { threshold: 0.2 });

        io.observe(el);
        });

    (function () {
        const wrapper    = document.querySelector('.diagram-scroll-wrapper');
        const rightPanel = document.querySelector('.diagram-right');
        const leftSticky = document.querySelector('.diagram-left-sticky');
        if (!wrapper || !rightPanel || !leftSticky) return;
        const NAV_H = 80;

        function onScroll() {
            const leftH  = leftSticky.offsetHeight;
            const rightH = rightPanel.offsetHeight;
            const MAX_OFFSET = (leftH - rightH) - (-72); 

            if (MAX_OFFSET <= 0) return;

            const sectionTop  = wrapper.getBoundingClientRect().top + window.scrollY;
            const scrolledIn  = window.scrollY - sectionTop + NAV_H;
            const offset = Math.min(Math.max(scrolledIn, 0), MAX_OFFSET);

            rightPanel.style.transform = `translateY(${offset}px)`;
        }

        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll);

        onScroll();
    })();

    document.querySelectorAll('.hotspot-toggle').forEach(btn => {
        btn.addEventListener('click', function () {
            const current = this.closest('.hotspot');
            document.querySelectorAll('.hotspot').forEach(item => {
                if (item !== current) {
                    item.classList.remove('active');
                }
            });
            current.classList.toggle('active');
        });
    });

document.addEventListener('DOMContentLoaded', function() {

 const bannerBg = document.querySelector('.product-banner-bg');

function updateParallax() {
    const scrolled = window.pageYOffset;

    bannerBg.style.transform =
        `translate3d(0, ${scrolled * 0.25}px, 0)`;

    requestAnimationFrame(updateParallax);
}

requestAnimationFrame(updateParallax);  



  // Scroll reveal (fade + slide in from left/right)
  const revealEls = document.querySelectorAll('.scroll-reveal');
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });
  revealEls.forEach(function(el) { observer.observe(el); });

});
</script>