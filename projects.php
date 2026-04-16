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
            <div class="projects-section-inner row">
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

                <!-- <div class="col-lg-9">
                    <div class="fund-block">
                        <div class="row">
                            <div class="col-lg-5">
                                <h2>The Real Estate Fund Investments</h2>
                                <h6 class="fund-eyebrow text-uppercase">Multi-Family Real Estate Disciplined Focus</h6>
                            </div>
                            <div class="col-lg-7">
                                <img src="img/home/img_1.jpg" alt="Multi-family real estate property" class="img-fluid">
                            </div>
                        </div>
                        <div class="row mt-4 mt-lg-5">
                            <div class="col-lg-5">
                                <p>The Real Estate Fund's goal is to provide attractive housing for tenants seeking a safe environment they can be proud of. We focus on multi-family properties in the 24-60 unit range, representing a significant piece of the market where we expect to find opportunities. It is also a market segment where once we decide to sell, we should receive offers at the higher end of an improving market. As we grow, larger properties will be considered in our Business Plan.</p>
                                <a href="#" class="fund-link text-uppercase">The Real Estate Fund Investments</a>
                            </div>
                        </div>
                        <div class="row mt-4 mt-lg-5">
                            <div class="col-lg-9 offset-lg-1">
                                <img src="img/home/img_project_1.jpg" alt="Multi-family residential building" class="img-fluid">
                            </div>
                        </div>
                    </div>

                    <div class="fund-block mt-5 pt-lg-5">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2 text-center">
                                <h2>The Real Estate Fund Investment Approach</h2>
                                <h6 class="fund-eyebrow text-uppercase">Real Estate Opportunity Investing and Value-Add</h6>
                            </div>
                        </div>
                        <div class="row mt-4 mt-lg-5 align-items-center">
                            <div class="col-lg-6 offset-lg-1">
                                <img src="img/home/img_project_2.jpg" alt="Investment approach property" class="img-fluid">
                            </div>
                            <div class="col-lg-4">
                                <p>It will take patience and rigorous due diligence to find the right opportunities for The Real Estate Fund to capitalize on. We will not be rushed or compromise our economic goals and philosophies. Our Founder or affiliates will invest directly in every property acquisition, so investors can be assured that there is commonality of interest in the goals of The Real Estate Fund's property investments and management.</p>
                                <a href="#" class="fund-link text-uppercase">The Real Estate Fund Investments</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</main>

<?php include 'inc/footer.php'; ?>