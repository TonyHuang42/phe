<!-- HERO -->
<section class="home-hero-section">
    <div class="hero-section-bg">
        <img src="<?= $product['banner_image']; ?>"
            alt="<?= $product['title']; ?>"
            class="hero-section-bg-img">
    </div>

    <div class="building-system-hero-section-wrap">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-9">
                    <h2 class="mb-0">
                        <?= $product['title']; ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OVERVIEW -->
<section class="product-intro py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">

                <?php if(!empty($product['overview_title'])): ?>
                    <h3 class="product-title mb-4">
                        <?= nl2br($product['overview_title']); ?>
                    </h3>
                <?php endif; ?>

                <?php if(!empty($product['overview_description'])): ?>
                    <p class="lead product-description">
                        <?= nl2br($product['overview_description']); ?>
                    </p>
                <?php endif; ?>

                <?php if(!empty($product['overview_features'])): ?>
                    <div class="key-features mt-5">

                        <h5 class="mb-4">
                            Key Features
                        </h5>

                        <ul class="feature-list-custom">

                            <?php foreach($product['overview_features'] as $feature): ?>
                                <li><?= $feature; ?></li>
                            <?php endforeach; ?>

                        </ul>

                    </div>
                <?php endif; ?>

                <?php if(!empty($product['overview_note_title'])): ?>
                    <div class="key-features mt-5">

                        <h5 class="mb-3">
                            <?= $product['overview_note_title']; ?>
                        </h5>

                        <?php if(!empty($product['overview_note_description'])): ?>
                            <p class="lead product-description mb-0">
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

<!-- PROFILE / DIAGRAM -->
<?php if(!empty($product['profile_image'])): ?>
<section class="product-diagram py-5">
    <div class="container text-center">

        <img
            src="<?= $product['profile_image']; ?>"
            class="img-fluid"
            alt="">

    </div>
</section>
<?php endif; ?>

<!-- SECONDARY SECTION -->
<section class="product-intro py-5">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-5">

                <?php if(!empty($product['secondary_title'])): ?>
                    <h3 class="product-title mb-4">
                        <?= nl2br($product['secondary_title']); ?>
                    </h3>
                <?php endif; ?>

                <?php if(!empty($product['secondary_description'])): ?>
                    <p class="lead product-description">
                        <?= nl2br($product['secondary_description']); ?>
                    </p>
                <?php endif; ?>

                <?php if(!empty($product['secondary_features'])): ?>
                    <div class="key-features mt-5">

                        <h5 class="mb-4">
                            Key Features
                        </h5>

                        <ul class="feature-list-custom">

                            <?php foreach($product['secondary_features'] as $feature): ?>
                                <li><?= $feature; ?></li>
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
                    <h3 class="product-title mb-4">
                        <?= $product['door_window_title']; ?>
                    </h3>
                <?php endif; ?>

                <?php if(!empty($product['door_features'])): ?>

                    <div class="key-features mb-4">

                        <h5 class="mb-3">
                            <?= $product['door_section_title']; ?>
                        </h5>

                        <ul class="feature-list-custom">

                            <?php foreach($product['door_features'] as $feature): ?>
                                <li><?= $feature; ?></li>
                            <?php endforeach; ?>

                        </ul>

                    </div>

                <?php endif; ?>

                <?php if(!empty($product['window_features'])): ?>

                    <div class="key-features">

                        <h5 class="mb-3">
                            <?= $product['window_section_title']; ?>
                        </h5>

                        <ul class="feature-list-custom">

                            <?php foreach($product['window_features'] as $feature): ?>
                                <li><?= $feature; ?></li>
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
document.addEventListener('DOMContentLoaded', function() {

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