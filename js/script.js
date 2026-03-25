// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    const heroTitle = document.querySelector(".hero-section-title");
    if (heroTitle) {
        gsap.fromTo(
            heroTitle,
            {
                y: 80,
                opacity: 0,
            },
            {
                y: 0,
                opacity: 1,
                duration: 1,
                ease: "power2.inOut",
                delay: 0.15,
            },
        );
    }

    const heroSection = document.querySelector(".hero-section");
    const heroBgImg = document.querySelector(".hero-section-bg-img");
    if (heroSection && heroBgImg) {
        gsap.fromTo(
            heroBgImg,
            { scale: 1 },
            {
                scale: 1.5,
                ease: "none",
                scrollTrigger: {
                    trigger: heroSection,
                    start: "top top",
                    end: "bottom top",
                    scrub: true,
                    invalidateOnRefresh: true,
                },
            },
        );
    }

    const homeSloganSection = document.querySelector(".home-slogan-container");
    const homeSloganFades = document.querySelectorAll(".home-slogan-fade");
    if (homeSloganSection && homeSloganFades.length) {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: homeSloganSection,
                start: "top 80%",
                end: "center 50%",
                scrub: true,
                invalidateOnRefresh: true,
            },
        });
        tl.fromTo(homeSloganFades[0], { opacity: 0 }, { opacity: 1, ease: "none", duration: 0.45 }, 0);
        if (homeSloganFades[1]) {
            tl.fromTo(homeSloganFades[1], { opacity: 0 }, { opacity: 1, ease: "none", duration: 0.45 }, 0.2);
        }
    }

    const sloganStatsWrapper = document.querySelector(".slogan-stats-wrapper");
    const statsBanner = document.querySelector(".stats-banner");

    if (sloganStatsWrapper && statsBanner) {
        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: sloganStatsWrapper,
                start: "top top",
                end: "+=150%",
                scrub: true,
                pin: true,
                anticipatePin: 1,
            },
        });

        // Animate stats-banner expanding
        tl.to(statsBanner, {
            width: "100%",
            height: "100vh",
            ease: "power1.inOut",
        });
    }

    const whyChooseUsSection = document.querySelector(".why-choose-us-section");
    const whyChooseUsSlides = document.querySelectorAll(".why-choose-us-slide");

    if (whyChooseUsSection && whyChooseUsSlides.length > 1) {
        // Set initial states
        gsap.set(whyChooseUsSlides[1].querySelector(".why-choose-us-img-col"), { yPercent: 100 });
        gsap.set(whyChooseUsSlides[1].querySelector(".why-choose-us-content-wrapper"), { xPercent: 100 });

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: whyChooseUsSection,
                start: "top top",
                end: "+=100%",
                scrub: true,
                pin: true,
                anticipatePin: 1,
            },
        });

        tl.to(whyChooseUsSlides[0].querySelector(".why-choose-us-content-wrapper"), {
            xPercent: -100,
            ease: "none"
        }, 0)
        .to(whyChooseUsSlides[1].querySelector(".why-choose-us-img-col"), {
            yPercent: 0,
            ease: "none"
        }, 0)
        .to(whyChooseUsSlides[1].querySelector(".why-choose-us-content-wrapper"), {
            xPercent: 0,
            ease: "none"
        }, 0);
    }
});

// Recalculate ScrollTrigger after all images and resources have fully loaded
window.addEventListener("load", () => {
    ScrollTrigger.refresh();
});
