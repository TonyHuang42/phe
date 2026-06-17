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


<!-- <section class="product-intro py-5"> -->
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
                        <h3 class="product-titles mb-4">
                            <?= $product['overview_features_title'] ?? 'Key Features' ?>
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
                        <h5 class="product-titles mb-3">
                            <?= $product['overview_note_title']; ?>
                        </h5>
                        <?php if(!empty($product['overview_note_description'])): ?>
                            <p class="product-description mb-0">
                                <?= nl2br($product['overview_note_description']); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if(!empty($product['overview_applications_title'])): ?>
                    <div class="key-features mt-5">
                        <h5 class="product-titles mb-3">
                            <?= $product['overview_applications_title']; ?>
                        </h5>
                        <ul class="feature-list-custom">
                            <?php foreach($product['overview_applications'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>

                        </ul>
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

<!-- SECONDARY SECTION -->
<?php
if (
    !empty($product['secondary_title']) ||
    !empty($product['secondary_description']) ||
    !empty($product['secondary_image']) ||
    !empty($product['secondary_features'])
):
?>
<section class="product-intro py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 d-flex align-items-center justify-content-center">
                <?php if(!empty($product['secondary_image'])): ?>
                    <img
                        src="<?= $product['secondary_image']; ?>"
                        alt=""
                        class="product-feature-image">
                <?php endif; ?>

            </div>
             <div class="col-lg-5">
                <?php if(!empty($product['secondary_title'])): ?>
                    <h3 class="product-titles mb-4">
                        <?= nl2br($product['secondary_title']); ?>
                    </h3>
                <?php endif; ?>

                <?php if(!empty($product['secondary_description'])): ?>
                    <p class="product-description">
                        <?= nl2br($product['secondary_description']); ?>
                    </p>
                <?php endif; ?>

                <?php if(!empty($product['secondary_features'])): ?>
                    <div class="key-features mt-5">
                        <h3 class="mb-4 product-titles">
                            Key Features
                        </h3>
                        <ul class="feature-list-custom">
                            <?php foreach($product['secondary_features'] as $feature): ?>
                                <li class="product-description"><?= $feature; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<script>
document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.product-titles.reveal-line').forEach(el => {
    // Clean out any stray div/span wrappers PHP may have added
    const raw = el.innerHTML
      .replace(/<div[^>]*>|<\/div>|<span[^>]*>|<\/span>/gi, '')
      .trim();

    const lines = raw
      .split(/<br\s*\/?>/i)
      .map(line => line.trim())
      .filter(Boolean);

    el.innerHTML = lines.map(line => `
      <span class="reveal-line-wrap">
        <span class="reveal-line-inner">${line}</span>
      </span>
    `).join('');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;

        entry.target
          .querySelectorAll('.reveal-line-inner')
          .forEach((line, index) => {
            const delay = index === 0 ? 0 : 150 + (index * 120);
            setTimeout(() => line.classList.add('visible'), delay);
          });
        observer.unobserve(entry.target);
      });
    }, {
      threshold: 0.15,
      rootMargin: '0px 0px -40px 0px'
    });
    observer.observe(el);
  });

});
</script>
<!-- <script>
  document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.reveal-line').forEach(el => {
    const raw = el.innerHTML
      .replace(/<div[^>]*>|<\/div>|<span[^>]*>|<\/span>/gi, '')
      .trim();

    const lines = raw
      .split(/<br\s*\/?>/i)
      .map(line => line.trim())
      .filter(Boolean);

    el.innerHTML = lines.map(line => `
      <span class="reveal-line-wrap">
        <span class="reveal-line-inner">${line}</span>
      </span>
    `).join('');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;

        entry.target
          .querySelectorAll('.reveal-line-inner')
          .forEach((line, index) => {
            // Exponential stagger — first lines come in fast, later ones slow down
            const delay = index === 0 ? 0 : 80 + (index * 60);
            setTimeout(() => line.classList.add('visible'), delay);
          });

        observer.unobserve(entry.target);
      });
    }, {
      threshold: 0.15,       // trigger slightly earlier
      rootMargin: '0px 0px -40px 0px'  // fires 40px before it hits viewport bottom
    });

    observer.observe(el);
  });
});
</script> -->