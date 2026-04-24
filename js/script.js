// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, SplitText);

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

    // Building System Hero Animation
    const buildingSystemHeroWrap = document.querySelector(".building-system-hero-section-wrap");
    if (buildingSystemHeroWrap) {
        const heroH2 = buildingSystemHeroWrap.querySelector("h2");
        const heroH6 = buildingSystemHeroWrap.querySelector("h6");
        
        if (heroH2 && heroH6) {
            // Split the h2 into characters and words to prevent awkward line breaks mid-word
            const splitH2 = new SplitText(heroH2, { type: "words, chars" });
            
            // Set initial states (yPercent = % of each element's own height on Y)
            gsap.set(splitH2.chars, { yPercent: 100, opacity: 0 });
            gsap.set(heroH6, { yPercent: 100, opacity: 0 });
            
            const tl = gsap.timeline({ delay: 0.2 });
            
            // Animate characters up
            tl.to(splitH2.chars, {
                yPercent: 0,
                opacity: 1,
                duration: 1,
                stagger: 0.05,
                ease: "power3.out"
            })
            // Then animate h6 up
            .to(heroH6, {
                yPercent: 0,
                opacity: 1,
                duration: 1,
                ease: "power3.out"
            }, "-=0.4");
        }
    }

    // Zoom hero background on scroll
    const heroSection = document.querySelector(".hero-section, .home-hero-section");
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

    // Modular Animation
    if (document.querySelector(".modular-row")) {
        const sepTl = gsap.timeline({
            scrollTrigger: {
                trigger: ".modular-row",
                start: "top 50%",
                end: "top 20%",
                scrub: 1,
            },
        });

        sepTl.fromTo(".modular-animation-wrapper",
            {
                x: () => {
                    const el = document.querySelector(".modular-animation-wrapper");
                    const currentX = gsap.getProperty(el, "x");
                    gsap.set(el, { x: 0 });
                    const rect = el.getBoundingClientRect();
                    const center = rect.left + rect.width / 2;
                    const offset = (window.innerWidth / 2) - center;
                    gsap.set(el, { x: currentX });
                    return offset;
                }
            },
            { x: 0, ease: "none" },
            0
        )
        .fromTo(".modular-content-wrapper",
            {
                x: () => {
                    const el = document.querySelector(".modular-content-wrapper");
                    const currentX = gsap.getProperty(el, "x");
                    gsap.set(el, { x: 0 });
                    const rect = el.getBoundingClientRect();
                    const center = rect.left + rect.width / 2;
                    const offset = (window.innerWidth / 2) - center;
                    gsap.set(el, { x: currentX });
                    return offset;
                },
                opacity: 0
            },
            { x: 0, opacity: 1, ease: "none" },
            0
        );

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".modular-animation-wrapper",
                start: "top 70%",
                end: "top 20%",
                scrub: 1,
            },
        });

        tl.to(".box-1", { x: -200, y: -100 }, "phase1")
            .to(".box-2", { x: -100, y: -50 }, "phase1")
            .to(".box-3", { x: 0, y: 0 }, "phase1")
            .to(".box-4", { x: 100, y: 50 }, "phase1");

        tl.to(".box-1", { x: -150, y: -50 }, "phase2")
            .to(".box-2", { x: -100, y: -25 }, "phase2")
            .to(".box-3", { x: -50, y: 0 }, "phase2")
            .to(".box-4", { x: 0, y: 25 }, "phase2");

        window.addEventListener("load", () => ScrollTrigger.refresh());
    }

    // Values rows — columns slide up from 100% below their original position, one by one
    const valuesRows = document.querySelectorAll(".values-row");
    valuesRows.forEach((row) => {
        const cols = row.querySelectorAll(".values-col");
        if (!cols.length) return;

        gsap.set(cols, { yPercent: 100 });

        gsap.to(cols, {
            yPercent: 0,
            duration: 1,
            ease: "power3.out",
            stagger: 0.15,
            scrollTrigger: {
                trigger: row,
                start: "top 80%",
                once: true,
            },
        });
    });

    // Modular Kit Homes title — scrub each character color to #000 one by one
    // const modularKitHomesTitle = document.querySelector(".modular-kit-homes-title");
    // if (modularKitHomesTitle) {
    //     const splitTitle = new SplitText(modularKitHomesTitle, { type: "chars" });

    //     gsap.to(splitTitle.chars, {
    //         color: "#000",
    //         ease: "none",
    //         stagger: { each: 1, ease: "none" },
    //         scrollTrigger: {
    //             trigger: modularKitHomesTitle,
    //             start: "top 80%",
    //             end: "center center",
    //             scrub: true,
    //         },
    //     });
    // }
    const kitHomesIntro = document.querySelector(".kit-homes-intro");
    if (kitHomesIntro) {
        gsap.to(kitHomesIntro, {
        backgroundColor: "#414740",
        scrollTrigger: {
            trigger: kitHomesIntro,
            start: "top 60%",
            end: "top 30%",
            scrub: true,
        },
        });
    }

    // Kit Home Blinds Animation
    const kitHomeSection = document.querySelector(".kit-home");
    const kitHomeSlides = document.querySelectorAll(".kit-home-slide");
    const kitHomeNavItems = document.querySelectorAll(".kit-home-nav-item");

    if (kitHomeSection && kitHomeSlides.length > 1) {
        kitHomeSection.classList.add("kit-home--multi-slide");

        // Equalize .kit-home-text heights across all slides so the progress bar
        // (whose height is a percentage of its parent) has a consistent length
        // regardless of whether a title wraps to two lines on some slides.
        const kitHomeTextEls = kitHomeSection.querySelectorAll(".kit-home-slide .kit-home-text");
        const equalizeKitHomeTextHeights = () => {
            kitHomeTextEls.forEach(el => { el.style.minHeight = ""; });
            let maxHeight = 0;
            kitHomeTextEls.forEach(el => {
                maxHeight = Math.max(maxHeight, el.offsetHeight);
            });
            if (maxHeight > 0) {
                kitHomeTextEls.forEach(el => { el.style.minHeight = maxHeight + "px"; });
            }
        };
        equalizeKitHomeTextHeights();
        ScrollTrigger.addEventListener("refreshInit", equalizeKitHomeTextHeights);

        // Set initial states. We use zIndex: "auto" on the slides so they don't create a stacking context,
        // allowing us to interleave the z-indexes of the left and right images globally.
        gsap.set(kitHomeSlides, { opacity: 0, visibility: "hidden", zIndex: "auto" });
        gsap.set(kitHomeSlides[0], { opacity: 1, visibility: "visible", zIndex: "auto" });

        // Assign global z-indexes to the internal elements so left images always stay above right images across all slides
        kitHomeSlides.forEach((slide, index) => {
            const rightImg = slide.querySelector(".kit-home-img-right");
            const leftImg = slide.querySelector(".kit-home-img-left");
            const content = slide.querySelector(".kit-home-content");

            if (rightImg) gsap.set(rightImg, { zIndex: index + 1 });
            if (leftImg) gsap.set(leftImg, { zIndex: index + 50 });
            if (content) gsap.set(content, { zIndex: index + 100 });
        });

        const syncKitHomeActiveSlide = progress => {
            const activeIdx = Math.round(progress * (kitHomeSlides.length - 1));
            kitHomeSlides.forEach((slide, idx) => {
                slide.classList.toggle("kit-home-slide--active", idx === activeIdx);
            });
            if (kitHomeNavItems.length) {
                kitHomeNavItems.forEach((item, idx) => {
                    item.classList.toggle("is-active", idx === activeIdx);
                });
            }
        };

        const tlKitHome = gsap.timeline({
            scrollTrigger: {
                trigger: kitHomeSection,
                start: "top top",
                end: "+=" + (kitHomeSlides.length - 1) * 100 + "%",
                scrub: 1,
                pin: true,
                anticipatePin: 1,
                invalidateOnRefresh: true,
                onUpdate: self => {
                    kitHomeSection.style.setProperty('--section-progress', (self.progress * 100) + '%');
                    syncKitHomeActiveSlide(self.progress);
                }
            }
        });

        if (tlKitHome.scrollTrigger) {
            syncKitHomeActiveSlide(tlKitHome.scrollTrigger.progress);
        }

        // Click a nav item to jump to the matching slide
        if (kitHomeNavItems.length) {
            kitHomeNavItems.forEach((item, idx) => {
                const link = item.querySelector("a");
                if (!link) return;
                link.addEventListener("click", (e) => {
                    e.preventDefault();
                    const st = tlKitHome.scrollTrigger;
                    if (!st) return;
                    const ratio = kitHomeSlides.length > 1 ? idx / (kitHomeSlides.length - 1) : 0;
                    const target = st.start + ratio * (st.end - st.start);
                    window.scrollTo({
                        top: target,
                        behavior: "smooth",
                    });
                });
            });
        }

        for (let i = 0; i < kitHomeSlides.length - 1; i++) {
            const nextSlide = kitHomeSlides[i + 1];
            const startTime = i * 2;

            // Setup next slide for blinds effect
            gsap.set(nextSlide, { 
                opacity: 1, 
                visibility: "visible", 
                zIndex: "auto"
            });

            const nextImgRight = nextSlide.querySelector(".kit-home-img-right");
            const nextImgLeft = nextSlide.querySelector(".kit-home-img-left");

            const currentSlide = kitHomeSlides[i];
            const currentLines = currentSlide.querySelectorAll(".line-content");
            const nextLines = nextSlide.querySelectorAll(".line-content");

            // Initial state for next slide text
            gsap.set(nextLines, { yPercent: 100 });

            // Setup left image animation (slide up from bottom)
            if (nextImgLeft) {
                gsap.set(nextImgLeft, { clipPath: "inset(100% 0% 0% 0%)" });
                tlKitHome.to(nextImgLeft, {
                    clipPath: "inset(0% 0% 0% 0%)",
                    duration: 1,
                    ease: "none"
                }, startTime);
            }

            // Setup right image animation (30 blinds, bottom first)
            if (nextImgRight) {
                const numBlinds = 30;
                const blinds = Array.from({ length: numBlinds }, () => ({ value: 0 }));
                
                const updateBlindsMask = () => {
                    let maskImages = [];
                    let maskSizes = [];
                    let maskPositions = [];
                    
                    const blindHeight = (100 / numBlinds) + 0.5; // Add 0.5% to overlap and prevent gaps
                    
                    for (let j = 0; j < numBlinds; j++) {
                        maskImages.push(`linear-gradient(to top, black ${blinds[j].value}%, transparent ${blinds[j].value}%)`);
                        maskSizes.push(`100% ${blindHeight}%`);
                        maskPositions.push(`0 ${j * 100 / (numBlinds - 1)}%`);
                    }
                    
                    nextImgRight.style.maskImage = maskImages.join(', ');
                    nextImgRight.style.webkitMaskImage = maskImages.join(', ');
                    nextImgRight.style.maskSize = maskSizes.join(', ');
                    nextImgRight.style.webkitMaskSize = maskSizes.join(', ');
                    nextImgRight.style.maskPosition = maskPositions.join(', ');
                    nextImgRight.style.webkitMaskPosition = maskPositions.join(', ');
                    nextImgRight.style.maskRepeat = 'no-repeat';
                    nextImgRight.style.webkitMaskRepeat = 'no-repeat';
                };

                updateBlindsMask(); // Set initial state

                tlKitHome.to(blinds, {
                    value: 100,
                    duration: 0.5,
                    stagger: {
                        amount: 0.5,
                        from: "end"
                    },
                    ease: "none",
                    onUpdate: updateBlindsMask
                }, startTime);
            }

            // Animate text
            tlKitHome.to(currentLines, {
                yPercent: -100,
                duration: 0.4,
                stagger: 0.05,
                ease: "power2.in"
            }, startTime)
            .to(nextLines, {
                yPercent: 0,
                duration: 0.4,
                stagger: 0.05,
                ease: "power2.out"
            }, startTime + 0.6);
        }
    }

    // Modular Section Intro Animation
    const modularIntro = document.querySelector(".modular-section-intro");
    if (modularIntro) {
        gsap.to(modularIntro, {
            backgroundColor: "#414740",
            scrollTrigger: {
                trigger: modularIntro,
                start: "top 60%",
                end: "top 30%",
                scrub: true
            }
        });

        ScrollTrigger.create({
            trigger: modularIntro,
            start: "top top",
            pin: true,
            pinSpacing: false,
            invalidateOnRefresh: true
        });
    }

    // Fade in modular features descriptions independently of the pinned section
    const modularDescs = document.querySelectorAll(".modular-features-desc");
    if (modularDescs.length > 0) {
        gsap.set(modularDescs, { y: 30, opacity: 0 });

        const descObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    gsap.to(entry.target, {
                        y: 0,
                        opacity: 1,
                        duration: 0.8,
                        ease: "power2.out"
                    });
                    obs.unobserve(entry.target);
                }
            });
        }, {
            rootMargin: "0px 0px -10% 0px"
        });

        modularDescs.forEach(desc => descObserver.observe(desc));
    }

    // Process Section Animation
    const processSection = document.querySelector(".modular-features-section");
    if (processSection) {
        let mm = gsap.matchMedia();
        
        mm.add("(min-width: 992px)", () => {
            const col1 = document.querySelector(".modular-features-col-1");
            const col2 = document.querySelector(".modular-features-col-2");
            const col3 = document.querySelector(".modular-features-col-3");
            const col4 = document.querySelector(".modular-features-col-4");

            // Initial states
            gsap.set([col1, col2, col3, col4], { yPercent: 100 });

            const tlProcess = gsap.timeline({
                scrollTrigger: {
                    trigger: processSection,
                    start: "top top",
                    end: "+=150%",
                    scrub: true,
                    pin: true,
                    anticipatePin: 1,
                    invalidateOnRefresh: true
                }
            });

            // Animate columns up
            tlProcess.to(col1, { yPercent: 30, ease: "none", duration: 0.7 }, 0)
                     .to(col2, { yPercent: 30, ease: "none", duration: 0.55 }, 0.15)
                     .to(col3, { yPercent: 30, ease: "none", duration: 0.4 }, 0.3)
                     .to(col4, { yPercent: 30, ease: "none", duration: 0.25 }, 0.45)
                     // Move all columns to 0% completely to cover the background image
                     .to([col1, col2, col3, col4], { yPercent: 0, ease: "none", duration: 0.3 }, 0.7);
            
            return () => { // cleanup
                gsap.killTweensOf([col1, col2, col3, col4]);
                // reset styles
                gsap.set([col1, col2, col3, col4], { clearProps: "all" });
            };
        });
        
        mm.add("(max-width: 991px)", () => {
            const cols = document.querySelectorAll(".modular-features-col");
            
            gsap.set(cols, { clearProps: "all" });
        });
    }
});

// Recalculate ScrollTrigger after all images and resources have fully loaded
window.addEventListener("load", () => {
    ScrollTrigger.refresh();
});

// Full page reload after resize (debounced) — home only; resets pinned ScrollTrigger / slogan-stats sequence
let resizeReloadTimer;

// Helper function to detect touch devices
const isTouchDevice = () => {
  return "ontouchstart" in window || navigator.maxTouchPoints > 0;
};

window.addEventListener("resize", () => {
  if (!document.querySelector(".home-page")) return;

  // If it's a touch device (mobile/tablet), do nothing
  if (isTouchDevice()) return;

  clearTimeout(resizeReloadTimer);
  resizeReloadTimer = setTimeout(() => {
    window.location.reload();
  }, 250);
});
