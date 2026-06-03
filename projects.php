<?php
$page_title = "Projects | PHE";
$meta_description = "PHE is a leading provider of prefabricated homes. We offer a wide range of homes to suit your needs.";

include 'inc/header.php';
?>

<main>
    <section class="home-hero-section">
        <div class="hero-section-bg">
            <img src="img/home/banner_home.jpg" alt="PHE Hero" class="hero-section-bg-img">
        </div>

           <div class="building-system-hero-section-wrap">
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-lg-9">
                            <h2 class="mb-0">OUR PROJECTS</h2>
                        </div>
                        <div class="col-lg-3">
                            <h6>Proven modular building solutions delivered across diverse environments and
                                global markets
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <div class="slogan-stats-wrapper">
        <section class="home-slogan-section d-flex-center">
            <div class="container home-slogan-container">
                <h2 class="home-slogan-text">Built. Delivered. Proven.</h2>
                <h6 class="text-center">PHE Luxwood has successfully delivered modular building solutions across multiple
                    countries, supporting residential, commercial, and community developments.
                    From single-family homes to large-scale modular facilities, our projects demonstrate the
                    speed, flexibility, and performance of our engineered building system.
                </h6>
            </div>
        </section>
    </div>
    
    <section class="projects-section">
        <div class="container-fluid">
            <div class="projects-section-inner row">
                <div class="col-lg-2 pt-5 px-4" aria-label="Project filters">
                    <form class="projects-filter-form" action="projects.php" method="get">
                        <div class="projects-filter-group">
                            <button class="projects-filter-heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projects-filter-field" aria-expanded="false" aria-controls="projects-filter-field">
                                <span>Country</span>
                                <i class="fa-solid fa-chevron-up projects-filter-chevron" aria-hidden="true"></i>
                            </button>
                            <div class="collapse" id="projects-filter-field">
                                <ul class="projects-filter-list list-unstyled mb-0">
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="australia" id="filter-country-australia">
                                            <label class="form-check-label" for="filter-country-australia">Australia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="south-africa" id="filter-country-south-africa">
                                            <label class="form-check-label" for="filter-country-south-africa">South Africa</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="country" name="country[]" value="china" id="filter-country-china">
                                            <label class="form-check-label" for="filter-country-china">China</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="projects-filter-group">
                            <button class="projects-filter-heading collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#projects-filter-area" aria-expanded="false" aria-controls="projects-filter-area">
                                <span>Types</span>
                                <i class="fa-solid fa-chevron-up projects-filter-chevron" aria-hidden="true"></i>
                            </button>
                            <div class="collapse" id="projects-filter-area">
                                <ul class="projects-filter-list list-unstyled mb-0">
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="type" name="type[]" value="residential" id="filter-type-residential">
                                            <label class="form-check-label" for="filter-type-residential">Residential</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="type" name="type[]" value="commercial" id="filter-type-commercial">
                                            <label class="form-check-label" for="filter-type-commercial">Commercial</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input projects-filter-input" type="checkbox" data-filter="type" name="type[]" value="amenities" id="filter-type-amenities">
                                            <label class="form-check-label" for="filter-type-amenities">Amenities</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <p class="projects-filter-empty mt-4 mb-0 d-none" role="status">No projects match your filters.</p>
                    </form>
                </div>

                <div class="col-lg-10 top-padding px-5 text-white" style="background-color: #1a2e25;">
                    <div class="projects-content">
                        <!-- Block 1 -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Pacific House</h2>
                                    <p class="text-uppercase mb-5">3-Bedroom Residential Home</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>A modern modular home designed for efficient construction and comfortable living.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/australia/pacific_1.jpg" alt="Project 1" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/australia/pacific_2.jpg" alt="Project 2" class="img-fluid w-100">
                                </div>
                            </div>

                            <div class="projects-gallery-images d-none">
                                <img src="img/australia/pacific_3.jpg" alt="Pacific House - Interior 1">
                                <img src="img/australia/pacific_4.jpg" alt="Pacific House - Exterior Detail">
                                <img src="img/australia/pacific_5.jpg" alt="Pacific House - Living Area">
                                <img src="img/australia/pacific_6.jpg" alt="Pacific House - Interior 1">
                                <img src="img/australia/pacific_7.jpg" alt="Pacific House - Exterior Detail">                            
                            </div>
                        </div>

                        <!-- Block 2 -->
                        <div class="projects-block" data-country="australia" data-type="residential">
                            <div class="row mb-4">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Ballara House</h2>
                                    <p class="text-uppercase mb-5">2-Bedroom Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/australia/ballara_house_1.jpg" alt="Project 3" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A compact residential solution optimized for functionality and cost efficiency.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>

                            <div class="projects-gallery-images d-none">
                                <img src="img/australia/ballara_house_2.jpg" alt="ballara House - Interior 1">
                                <img src="img/australia/ballara_house_3.jpg" alt="ballara House - Exterior Detail">
                                <img src="img/australia/ballara_house_4.jpg" alt="ballara House - Living Area">
                                <img src="img/australia/ballara_house_5.jpg" alt="ballara House - Interior 1">
                                <img src="img/australia/ballara_house_6.jpg" alt="ballara House - Exterior Detail">                            
                            </div>
                        </div>

                        <!-- Block 3 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/australia/granny_flat_1.jpg" alt="Granny Flats" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Granny Flats</h2>
                                    <p class="text-uppercase mb-5">60 Units | 1-Bedroom Portable Cabins</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>A large-scale modular housing project designed for rapid deployment and consistent build quality. </p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/australia/granny_flat_2.jpg" alt="Granny Flats" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/australia/granny_flat_3.jpg" alt="Granny Flats - 3">
                                <img src="img/australia/granny_flat_4.jpg" alt="Granny Flats - 4">                                
                            </div>
                        </div>

                        <!-- Block 4 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row mb-4">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Eco Mining Cabins</h2>
                                    <p class="text-uppercase mb-5">37 Units | Studio Portable Cabins</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">Accommodation units developed for remote mining operations with fast installation capabilities. </p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main4.png" alt="Project 3" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <!-- Block 5 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">    
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Site Office</h2>
                                    <p class="text-uppercase mb-5">Modular Office Facility</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>A rapidly deployed modular workspace designed to support on-site operations.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/australia/site_office_1.jpg" alt="Site Office" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/australia/site_office_2.jpg" alt="Site Office" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/australia/site_office_3.jpg" alt="Site Office - 3">
                                <img src="img/australia/site_office_4.jpg" alt="Site Office - 4">                                
                            </div>

                        </div>

                        <!-- Block 6 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-4">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Cafeteria Facility</h2>
                                    <p class="text-uppercase mb-5">Modular Dining Facility</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main4.png" alt="Cafeteria Facility" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A functional modular structure providing dining and communal space for workforce environments.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Block 7 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/australia/club_canteen_1.jpg" alt="Canteen Facility" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Canteen Facility</h2>
                                    <p class="text-uppercase mb-5">Modular Food Service Unit</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>Designed for efficient food service operations within remote or temporary sites.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/australia/club_canteen_2.jpg" alt="Canteen Facility" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">
                                <img src="img/australia/club_canteen_3.jpg" alt="Canteen Facility - 3">
                                <img src="img/australia/club_canteen_4.jpg" alt="Canteen Facility - 4">                                
                            </div>
                        </div>

                        <!-- Block 8 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-4">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Portable Washrooms</h2>
                                    <p class="text-uppercase mb-5">Sanitation Units</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">Prefabricated modular washroom facilities designed for hygiene, durability, and ease of deployment.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="img/australia/tamborine_1.jpg" alt="Portable Washrooms" class="img-fluid w-100">
                                </div>
                            </div>
                             <div class="projects-gallery-images d-none">
                                <img src="img/australia/tamborine_1-1.jpg" alt="Portable Washrooms - 1-1">
                                <img src="img/australia/tamborine_2.jpg" alt="Portable Washrooms - 2">     
                                <img src="img/australia/tamborine_2-1.jpg" alt="Portable Washrooms - 2-1">   
                                <img src="img/australia/tamborine_3.jpg" alt="Portable Washrooms - 3">
                                <img src="img/australia/tamborine_4.jpg" alt="Portable Washrooms - 4">
                                <img src="img/australia/tamborine_5.jpg" alt="Portable Washrooms - 5">
                                <img src="img/australia/tamborine_6.jpg" alt="Portable Washrooms - 6">
                                <img src="img/australia/tamborine_7.jpg" alt="Portable Washrooms - 7">
                                <img src="img/australia/tamborine_8.jpg" alt="Portable Washrooms - 8">
                                <img src="img/australia/tamborine_9.jpg" alt="Portable Washrooms - 9">
                                <img src="img/australia/tamborine_10.jpg" alt="Portable Washrooms - 10">                                
                            </div>
                        </div>

                        <!-- Block 9 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Laundry Facilities</h2>
                                    <p class="text-uppercase mb-5">Modular Utility Units</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>Supporting infrastructure units designed for operational convenience in workforce environments.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Laundry Facilities" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Laundry Facilities" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <!-- Block 10 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row mb-4">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Warwick Farm Structure</h2>
                                    <p class="text-uppercase mb-5">Agricultural Modular Facility</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/australia/warwick_farm_1.jpg" alt="Warwick Farm Structure" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A modular building solution applied within a farm setting, demonstrating system adaptability beyond residential and commercial use.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-gallery-images d-none">                                
                                <img src="img/australia/warwick_farm_2.jpg" alt="Warwick Farm Structure - 2">                                     
                                <img src="img/australia/warwick_farm_3.jpg" alt="Warwick Farm Structure - 3">
                                <img src="img/australia/warwick_farm_4.jpg" alt="Warwick Farm Structure - 4">
                                <img src="img/australia/warwick_farm_5.jpg" alt="Warwick Farm Structure - 5">
                                <img src="img/australia/warwick_farm_6.jpg" alt="Warwick Farm Structure - 6">                             
                            </div>
                        </div>

                        <!-- Block 11 -->
                        <div class="projects-block" data-country="china" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Zambia House" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Zambia House</h2>
                                    <p class="text-uppercase mb-5">2-Bedroom Residential Home</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>A modular home built using Luxwood panels, combining structural performance with efficient construction methods.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Zambia House" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <!-- Block 12 -->
                        <div class="projects-block" data-country="china" data-type="residential">
                            <div class="row mb-4">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Beijing House</h2>
                                    <p class="text-uppercase mb-5">1-Bedroom Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A compact modular housing solution demonstrating adaptability within urban environments.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main4.png" alt="Beijing House" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <!-- Block 13 -->
                        <div class="projects-block" data-country="south-africa" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-7">
                                    <h2 class="mb-4">Theodor Herzl School</h2>
                                    <p class="text-uppercase mb-5">Educational Facility | 100+ Students</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>A modular school development designed to accommodate over 100 students, showcasing the scalability and reliability of the Luxwood system in community infrastructure.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="img/africa/theodor_herzl_school_1.jpg" alt="Theodor Herzl School" class="projects-feature-media-img">
                                </div>
                                <div class="projects-gallery-images d-none">                                
                                    <img src="img/africa/theodor_herzl_school_3.jpg" alt="Theodor Herzl School - 3">                                     
                                    <img src="img/africa/theodor_herzl_school_4.jpg" alt="Theodor Herzl School - 4">                                                          
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="img/africa/theodor_herzl_school_2.jpg" alt="Theodor Herzl School" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>

                        <!-- Block 14 -->
                        <div class="projects-block" data-country="south-africa" data-type="residential">
                            <div class="row mb-4">
                                <div class="col-lg-10 offset-lg-2">
                                    <h2 class="mb-4">Cornubia House</h2>
                                    <p class="text-uppercase mb-5">2-Level | 3-Bedroom Residential Home</p>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg">
                                <div class="col-lg-5">
                                    <img src="img/africa/cornubia.jpg" alt="Cornubia House" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A multi-level residential project demonstrating structural strength and architectural flexibility.</p>
                                        <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Block 15 -->
                        <div class="projects-block" data-country="south-africa" data-type="residential">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Brittania Bay Residence" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Brittania Bay Residence</h2>
                                    <p class="text-uppercase mb-5">2-Level | 2-Bedroom Residential Home</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>A coastal residential development designed to perform in demanding environmental conditions.</p>
                                            <button type="button" class="view-gallery-btn">VIEW IMAGES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Brittania Bay Residence" class="img-fluid w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Modal -->
    <div id="gallery-modal" class="gallery-modal">
        <div class="gallery-modal-overlay"></div>
        <div class="gallery-modal-content">
            <button class="gallery-modal-close">&times;</button>
            
            <div id="main-carousel" class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+1" alt="Gallery Image 1">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+2" alt="Gallery Image 2">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+3" alt="Gallery Image 3">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+4" alt="Gallery Image 4">
                        </li>
                    </ul>
                </div>
            </div>

            <div id="thumbnail-carousel" class="splide mt-3">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+1" alt="Thumbnail 1">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+2" alt="Thumbnail 2">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+3" alt="Thumbnail 3">
                        </li>
                        <li class="splide__slide">
                            <img src="https://placehold.co/1200x800?text=Project+Image+4" alt="Thumbnail 4">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Gallery Modal - Dynamic Image Loading
    document.addEventListener("DOMContentLoaded", () => {
        const galleryModal = document.getElementById("gallery-modal");
        const viewButtons = document.querySelectorAll(".view-gallery-btn");
        const closeButton = document.querySelector(".gallery-modal-close");
        const overlay = document.querySelector(".gallery-modal-overlay");

        if (!galleryModal || viewButtons.length === 0) return;

        let mainSplide, thumbnailSplide;

        // Initialize Splide instances
        function initializeSplide() {
            // Destroy existing instances if they exist
            if (mainSplide) mainSplide.destroy();
            if (thumbnailSplide) thumbnailSplide.destroy();

            // Initialize Main Splide
            mainSplide = new Splide("#main-carousel", {
                type: "fade",
                rewind: true,
                pagination: false,
                arrows: true,
            });

            // Initialize Thumbnail Splide
            thumbnailSplide = new Splide("#thumbnail-carousel", {
                fixedWidth: 100,
                fixedHeight: 60,
                gap: 10,
                rewind: true,
                isNavigation: true,
                pagination: false,
                arrows: false,
                breakpoints: {
                    600: {
                        fixedWidth: 60,
                        fixedHeight: 44,
                    },
                },
            });

            // Sync carousels
            mainSplide.sync(thumbnailSplide);
            mainSplide.mount();
            thumbnailSplide.mount();
        }

        // Populate gallery with project images
        function populateGallery(projectBlock) {
            // Get all visible images from the project block
            const visibleImages = projectBlock.querySelectorAll("img:not(.d-none img)");
            
            // Get hidden gallery images if they exist
            const hiddenGalleryContainer = projectBlock.querySelector(".projects-gallery-images");
            const hiddenImages = hiddenGalleryContainer ? hiddenGalleryContainer.querySelectorAll("img") : [];
            
            // Combine all images
            const allImages = [...visibleImages, ...hiddenImages];
            
            if (allImages.length === 0) return;

            // Clear existing slides
            const mainList = document.querySelector("#main-carousel .splide__list");
            const thumbList = document.querySelector("#thumbnail-carousel .splide__list");

            mainList.innerHTML = "";
            thumbList.innerHTML = "";

            // Add each image to both carousels
            allImages.forEach((img, index) => {
                const src = img.src;
                const alt = img.alt || `Gallery Image ${index + 1}`;

                // Main carousel slide
                const mainSlide = document.createElement("li");
                mainSlide.className = "splide__slide";
                mainSlide.innerHTML = `<img src="${src}" alt="${alt}">`;
                mainList.appendChild(mainSlide);

                // Thumbnail carousel slide
                const thumbSlide = document.createElement("li");
                thumbSlide.className = "splide__slide";
                thumbSlide.innerHTML = `<img src="${src}" alt="Thumbnail - ${alt}">`;
                thumbList.appendChild(thumbSlide);
            });

            // Reinitialize Splide with new slides
            initializeSplide();
        }

        // Open modal and populate with project images
        viewButtons.forEach(btn => {
            btn.addEventListener("click", () => {
                // Get the parent project block
                const projectBlock = btn.closest(".projects-block");
                
                if (projectBlock) {
                    populateGallery(projectBlock);
                }

                galleryModal.classList.add("active");
                document.body.style.overflow = "hidden";
            });
        });

        // Close modal
        const closeModal = () => {
            galleryModal.classList.remove("active");
            document.body.style.overflow = "";
        };

        closeButton.addEventListener("click", closeModal);
        overlay.addEventListener("click", closeModal);

        // Close on Escape key
        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && galleryModal.classList.contains("active")) {
                closeModal();
            }
        });

        // Initialize on page load (with placeholder images)
        initializeSplide();
    });

    // Projects Filter
    (function() {
        const form = document.querySelector('.projects-filter-form');
        if (!form) return;

        const blocks = document.querySelectorAll('.projects-block');
        const emptyMsg = form.querySelector('.projects-filter-empty');

        function getSelected(name) {
            return Array.from(form.querySelectorAll('input[data-filter="' + name + '"]:checked'))
                .map(input => input.value);
        }

        function applyFilters() {
            const countries = getSelected('country');
            const types = getSelected('type');
            let visibleCount = 0;

            blocks.forEach(block => {
                const country = block.dataset.country;
                const type = block.dataset.type;
                const matchCountry = countries.length === 0 || countries.includes(country);
                const matchType = types.length === 0 || types.includes(type);
                const show = matchCountry && matchType;

                block.classList.toggle('d-none', !show);
                if (show) visibleCount++;
            });

            if (emptyMsg) {
                emptyMsg.classList.toggle('d-none', visibleCount > 0);
            }
        }

        form.addEventListener('change', function(e) {
            if (e.target.matches('.projects-filter-input')) {
                applyFilters();
            }
        });

        form.addEventListener('submit', function(e) {
            e.preventDefault();
            applyFilters();
        });

        applyFilters();
    })();
</script>

<?php include 'inc/footer.php'; ?>