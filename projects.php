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
                        <div class="projects-block" data-country="south-africa" data-type="residential">
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
                        <div class="projects-block" data-country="china" data-type="amenities">
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