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

    <section class="projects-section section-padding">
        <div class="container-fluid px-4 px-lg-5">
            <div class="projects-section-inner">
                <div class="col-lg-3" aria-label="Project filters">
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
                                            <input class="form-check-input" type="checkbox" name="field[]" value="education-culture" id="filter-field-education">
                                            <label class="form-check-label" for="filter-field-education">Australia</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input" type="checkbox" name="field[]" value="offices-conference" id="filter-field-offices">
                                            <label class="form-check-label" for="filter-field-offices">South Africa</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input" type="checkbox" name="field[]" value="hotel-catering" id="filter-field-hotel">
                                            <label class="form-check-label" for="filter-field-hotel">China</label>
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
                                            <input class="form-check-input" type="checkbox" name="area[]" value="ceiling" id="filter-area-ceiling">
                                            <label class="form-check-label" for="filter-area-ceiling">Residential</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input" type="checkbox" name="area[]" value="wall" id="filter-area-wall">
                                            <label class="form-check-label" for="filter-area-wall">Commercial</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check projects-filter-check">
                                            <input class="form-check-input" type="checkbox" name="area[]" value="cabinet" id="filter-area-cabinet">
                                            <label class="form-check-label" for="filter-area-cabinet">Amenities</label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-9">
                    <!-- Project grid or list -->
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>