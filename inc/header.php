<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title & Description -->
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome 7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="img/favicon/android-chrome-512x512.png">
</head>

<body>
    <header class="floating-header">
        <div class="floating-header-inner">
            <div class="floating-nav-top">
                <nav class="floating-nav-links">
                    <a href="#" class="nav-link-item" data-target="detail-build">Build Smarter</a>
                    <a href="#" class="nav-link-item" data-target="detail-sustain">Sustainability</a>
                    <a href="#" class="nav-link-item" data-target="detail-about">About</a>
                </nav>
                <a href="#" class="btn-contact">Contact</a>
            </div>
            <div class="floating-nav-details">
                <p id="detail-build" class="nav-detail-text">By pre-constructing our homes<br>offsite, we save valuable resources</p>
                <p id="detail-sustain" class="nav-detail-text">Our sustainable approach minimizes<br>environmental impact and waste</p>
                <p id="detail-about" class="nav-detail-text">Learn more about our team and<br>our vision for the future of housing</p>
            </div>
        </div>
    </header>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <div class="site-logo">
                <a href="index.php">
                    <img src="img/home/phe_logo_white.svg" alt="PHE Logo">
                </a>
            </div>