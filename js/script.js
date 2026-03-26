// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

document.addEventListener("DOMContentLoaded", () => {
    // Fade in hero title
    const heroTitle = document.querySelector(".hero-section-wrap");
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

    // Zoom hero background on scroll
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

    // Reveal slogan lines from left and right when section enters view
    const sloganSection = document.querySelector(".home-slogan-container");
    const sloganLines = sloganSection?.querySelectorAll(".home-slogan-text");
    if (sloganSection && sloganLines && sloganLines.length >= 2) {
        const line1 = sloganLines[0];
        const line2 = sloganLines[1];
        gsap
            .timeline({
                scrollTrigger: {
                    trigger: sloganSection,
                    start: "top 75%",
                    once: false,
                },
            })
            .from(line1, {
                x: -200,
                opacity: 0,
                duration: 1,
                ease: "power2.out",
            })
            .from(
                line2,
                {
                    x: 200,
                    opacity: 0,
                    duration: 1,
                    ease: "power2.out",
                },
                "-=0.55",
            );
    }

    // Pin slogan + stats wrapper, parallax slogan, expand stats banner and scale bg image
    const sloganStatsWrapper = document.querySelector(".slogan-stats-wrapper");
    const statsBanner = document.querySelector(".stats-banner");
    const homeSloganSection = document.querySelector(".home-slogan-section");
    const statsBannerBg = document.querySelector(".stats-banner-bg");
    
    if (sloganStatsWrapper && statsBanner && homeSloganSection && statsBannerBg) {
        // Set initial state for the background image
        gsap.set(statsBannerBg, { xPercent: -50, scale: 1.8, transformOrigin: "center center" });

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: sloganStatsWrapper,
                start: "top top",
                end: "+=150%",
                scrub: true,
                pin: true,
                anticipatePin: 1,
                invalidateOnRefresh: true,
            }
        });

        // Make the slogan scroll slower by moving it up slightly while pinned
        tl.to(homeSloganSection, {
            y: "-30vh",
            ease: "none"
        }, 0);

        // Animate stats-banner expanding from bottom
        tl.to(statsBanner, {
            width: "100%",
            height: "100%",
            ease: "none"
        }, 0);

        // Animate background image shrinking to 100%
        tl.to(statsBannerBg, {
            scale: 1,
            ease: "none"
        }, 0);
    }

    // Crossfade two why-choose-us slides with scroll-scrubbed movement
    const whyChooseUsSection = document.querySelector(".why-choose-us-section");
    const whyChooseUsSlides = document.querySelectorAll(".why-choose-us-slide");

    if (whyChooseUsSection && whyChooseUsSlides.length > 1) {
        const slide1 = whyChooseUsSlides[0];
        const slide2 = whyChooseUsSlides[1];

        const slide1ContentCol = slide1.querySelector(".why-choose-us-content-col");
        const slide2ImgCol = slide2.querySelector(".why-choose-us-img-col");
        const slide2ContentCol = slide2.querySelector(".why-choose-us-content-col");

        // Initial states
        gsap.set(slide2ImgCol, { yPercent: 100 });
        gsap.set(slide2ContentCol, { xPercent: 100 });

        const tlWhyChooseUs = gsap.timeline({
            scrollTrigger: {
                trigger: whyChooseUsSection,
                start: "top top",
                end: "+=100%",
                scrub: true,
                pin: true,
                anticipatePin: 1,
                invalidateOnRefresh: true,
            }
        });

        tlWhyChooseUs
            .to(slide2ImgCol, { yPercent: 0, ease: "none" }, 0)
            .to(slide1ContentCol, { xPercent: -100, opacity: 0, ease: "none" }, 0)
            .to(slide2ContentCol, { xPercent: 0, ease: "none" }, 0);
    }
});

// Recalculate ScrollTrigger after all images and resources have fully loaded
window.addEventListener("load", () => {
    ScrollTrigger.refresh();
});

// Full page reload after resize (debounced) — resets pinned ScrollTrigger / slogan-stats sequence
let resizeReloadTimer;
window.addEventListener("resize", () => {
    clearTimeout(resizeReloadTimer);
    resizeReloadTimer = setTimeout(() => {
        window.location.reload();
    }, 250);
});
