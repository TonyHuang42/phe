<?php
$page_title = "Projects | PHE";
$meta_description = "PHE is a leading provider of prefabricated homes. We offer a wide range of homes to suit your needs.";

include 'inc/header.php';
?>

<main>
    <section class="hero-section">
        <div class="hero-section-bg">
            <img src="img/home/banner_home.jpg" alt="PHE Hero" class="hero-section-bg-img">
        </div>
    </section>

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
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Project 1" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Project 2" class="img-fluid w-100">
                                </div>
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
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main4.png" alt="Project 3" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A compact residential solution optimized for functionality and cost efficiency.</p>
                                        <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Block 3 -->
                        <div class="projects-block" data-country="australia" data-type="commercial">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Project 1" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Granny Flats</h2>
                                    <p class="text-uppercase mb-5">60 Units | 1-Bedroom Portable Cabins</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>A large-scale modular housing project designed for rapid deployment and consistent build quality. </p>
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Project 2" class="img-fluid w-100">
                                </div>
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
                                        <a href="#" class="projects-more-details-link">MORE DETAILS</a>
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
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Site Office" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Site Office" class="img-fluid w-100">
                                </div>
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
                                        <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Block 7 -->
                        <div class="projects-block" data-country="australia" data-type="amenities">
                            <div class="row mb-5 pb-5">
                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Canteen Facility" class="projects-feature-media-img">
                                </div>

                                <div class="col-lg-7">
                                    <h2 class="mb-4">Canteen Facility</h2>
                                    <p class="text-uppercase mb-5">Modular Food Service Unit</p>
                                    <div class="row">
                                        <div class="col-lg-5 offset-lg-5">
                                            <p>Designed for efficient food service operations within remote or temporary sites.</p>
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Canteen Facility" class="img-fluid w-100">
                                </div>
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
                                        <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                    </div>
                                </div>

                                <div class="col-lg-5 offset-lg-1">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main4.png" alt="Portable Washrooms" class="img-fluid w-100">
                                </div>
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
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
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
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main4.png" alt="Warwick Farm Structure" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A modular building solution applied within a farm setting, demonstrating system adaptability beyond residential and commercial use.</p>
                                        <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                    </div>
                                </div>
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
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
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
                                        <a href="#" class="projects-more-details-link">MORE DETAILS</a>
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
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 projects-feature-media-col">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main2.jpeg" alt="Theodor Herzl School" class="projects-feature-media-img">
                                </div>
                            </div>

                            <div class="row bottom-padding-lg projects-content-overlap-row">
                                <div class="col-lg-7 offset-lg-3">
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/slide2.jpeg" alt="Theodor Herzl School" class="img-fluid w-100">
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
                                    <img src="https://tref.digitaldesignnyc.co/wp-content/uploads/2023/12/main4.png" alt="Cornubia House" class="img-fluid w-100">
                                </div>
                                <div class="col-lg-5 offset-lg-1 d-flex flex-column justify-content-center">
                                    <div>
                                        <p class="mb-4">A multi-level residential project demonstrating structural strength and architectural flexibility.</p>
                                        <a href="#" class="projects-more-details-link">MORE DETAILS</a>
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
                                            <a href="#" class="projects-more-details-link">MORE DETAILS</a>
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
</main>

<script>
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