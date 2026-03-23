// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Stats Banner Animation
document.addEventListener("DOMContentLoaded", () => {
    const statsBanner = document.querySelector(".stats-banner");
    const statsBannerBg = document.querySelector(".stats-banner-bg");
    if (statsBanner) {
        gsap.fromTo(
            statsBanner,
            {
                clipPath: "inset(25% 40% 25% 40% round 20px)",
            },
            {
                clipPath: "inset(0% 0% 0% 0% round 0px)",
                scrollTrigger: {
                    trigger: statsBanner,
                    start: "center bottom",
                    end: "center center",
                    scrub: true,
                },
            },
        );

        if (statsBannerBg) {
            // Parallax: dedicated background layer moves slower than scroll
            gsap.fromTo(
                statsBannerBg,
                {
                    yPercent: -12,
                },
                {
                    yPercent: 12,
                    ease: "none",
                    scrollTrigger: {
                        trigger: statsBanner,
                        start: "top bottom",
                        end: "bottom top",
                        scrub: true,
                        invalidateOnRefresh: true,
                    },
                },
            );
        }
    }
});
