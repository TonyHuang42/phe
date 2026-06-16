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
                <div class="col-lg-9">
                    <h2 class="mb-5 product-banner-title">
                        <?= $product['title']; ?>
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>

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
                            <?= $product['overview_features_title'] ?? 'Key Features' ?>
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

                <?php if(!empty($product['overview_applications_title'])): ?>
                    <div class="key-features mt-5">

                        <h5 class="mb-3">
                            <?= $product['overview_applications_title']; ?>
                        </h5>

                        <ul class="feature-list-custom">
                            <?php foreach($product['overview_applications'] as $feature): ?>
                                <li><?= $feature; ?></li>
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

        </div>
    </div>
</section>
<?php endif; ?>