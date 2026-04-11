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
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="img/favicon/android-chrome-512x512.png">
</head>

<body class="overflow-x-hidden">
    <header class="site-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-4">
            <div class="container-fluid px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">
                    <img src="img/home/phe_logo_white.svg" alt="Logo" class="logo">
                </a>

                <!-- Toggle Button -->
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Content -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center gap-4 text-uppercase fw-semibold">
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Models
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">H-Series</a></li>
                                <li><a class="dropdown-item" href="#">Accessory Dwelling Units</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item">
                            <a class="nav-link text-white" href="projects.php">Projects</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Building System</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Building Material</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">About</a>
                        </li>

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Assembly
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">Build Process</a></li>
                                <li><a class="dropdown-item" href="#">How to Plan</a></li>
                                <li><a class="dropdown-item" href="#">Sustainability</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                About
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">About Honomobo</a></li>
                                <li><a class="dropdown-item" href="#">Our Team</a></li>
                            </ul>
                        </li> -->

                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white d-flex align-items-center gap-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="16" height="11" viewBox="0 0 21 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.399902 0H5.39989V12.5H0.399902V0Z" fill="currentColor"></path>
                                    <path d="M15.3999 0V12.5H20.3999V0H15.3999Z" fill="currentColor"></path>
                                    <path d="M13.7771 6.28829L13.4958 6.1755C13.2519 5.988 13.5896 5.2944 13.646 4.863C13.646 4.863 12.6894 5.20065 12.6147 5.01315L12.3708 4.5444L11.4897 5.50094C11.396 5.51999 11.3586 5.50094 11.3396 5.40719L11.7519 3.40114L11.1147 3.75708C11.0583 3.77613 11.0019 3.75708 10.9836 3.70069L10.3647 2.46289L9.72754 3.75634C9.67114 3.79369 9.63379 3.81273 9.59643 3.77538L8.97754 3.43773L9.35253 5.4256C9.31518 5.50031 9.25878 5.51935 9.16504 5.482L8.32129 4.52545C8.20849 4.69391 8.13379 4.9942 7.98364 5.0506C7.83349 5.107 7.34644 4.93781 7.02709 4.8631C7.13988 5.25715 7.47679 5.9317 7.27099 6.15655L6.91504 6.26934L8.56519 7.73199C8.69629 8.10699 8.52783 8.21979 8.41504 8.40729L10.2153 8.18244L10.178 9.98273H10.553L10.4783 8.18244L12.2786 8.38899C12.1658 8.14509 12.072 8.03304 12.1658 7.65804L13.8159 6.28914L13.7771 6.28829Z" fill="currentColor"></path>
                                </svg>
                                CA
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">USA</a></li>
                                <li><a class="dropdown-item" href="#">Canada</a></li>
                            </ul>
                        </li> -->

                        <li class="nav-item ms-lg-3">
                            <a class="site-header-cta" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>