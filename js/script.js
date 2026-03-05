// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, ScrollSmoother, SplitText);

// Initialize ScrollSmoother
const smoother = ScrollSmoother.create({
  wrapper: "#smooth-wrapper",
  content: "#smooth-content",
  smooth: 1.5, // seconds it takes to catch up to native scroll position
  effects: true, // look for data-speed and data-lag attributes on elements
  normalizeScroll: true, // prevents address bar from showing/hiding on most devices, solves various other browser inconsistencies
});

// Pin the hero banner so the content below covers it up
ScrollTrigger.create({
  trigger: ".hero-banner",
  start: "top top",
  end: "bottom top", // You can adjust this to control how long it stays pinned
  pin: true,
  pinSpacing: false // Important: This allows the next section to scroll over it
});

// Animate hero section and headline
document.addEventListener("DOMContentLoaded", () => {
  const clipPath = document.getElementById("venetian-blinds");
  const heroHeadline = document.querySelector(".hero-headline");
  
  if (clipPath) {
    const headerElements = document.querySelectorAll(".floating-header, .site-logo");
    if (headerElements.length > 0) {
      // Hide header initially on the home page before sliding in
      gsap.set(headerElements, { y: -100, autoAlpha: 0 });
    }

    const numberOfBlinds = 8;
    const blindHeight = 1 / numberOfBlinds;

    // Step 1: Dynamically generate the SVG <rect> blind elements
    for (let i = 0; i < numberOfBlinds; i++) {
        const rect = document.createElementNS("http://www.w3.org/2000/svg", "rect");
        rect.classList.add("blind");
        rect.setAttribute("x", "0");
        rect.setAttribute("y", (i + 1) * blindHeight);
        rect.setAttribute("width", "1");
        rect.setAttribute("height", "0");
        clipPath.appendChild(rect);
    }

    // Initialize blinds to 0 height
    document.querySelectorAll(".blind").forEach((rect, i) => {
        gsap.set(rect, { attr: { y: (i + 1) * blindHeight, height: 0 } });
    });

    // Animate blinds open, then trigger SplitText animation
    gsap.to(".blind", {
        duration: (i) => 0.4 + (i * 0.05),
        attr: { y: (i) => i * blindHeight, height: blindHeight },
        stagger: { each: 0.1, from: "end" },
        ease: "power1.in",
        onComplete: () => {
            const headerElements = document.querySelectorAll(".floating-header, .site-logo");
            if (headerElements.length > 0) {
              gsap.to(headerElements, {
                duration: 0.8,
                y: 0,
                autoAlpha: 1,
                ease: "power2.out",
                stagger: 0.1
              });
            }

            if (heroHeadline) {
              const splitHeadline = new SplitText(heroHeadline, { type: "chars, words", mask: "words" });
              
              gsap.set(heroHeadline, { visibility: "visible" });
              
              gsap.from(splitHeadline.chars, {
                duration: 0.5,
                y: 100,
                autoAlpha: 0,
                stagger: 0.04,
                ease: "power1.out"
              });
            }
        }
    });
  } else if (heroHeadline) {
    // Fallback if clipPath doesn't exist
    const splitHeadline = new SplitText(heroHeadline, { type: "chars, words", mask: "words" });
    
    // Reveal the parent container now that it's split
    gsap.set(heroHeadline, { visibility: "visible" });
    
    gsap.from(splitHeadline.chars, {
      duration: 0.5,
      y: 100,
      autoAlpha: 0,
      stagger: 0.04,
      ease: "power1.out",
      delay: 0.2
    });
  }
});

// Initialize Swiper for Building Applications
const buildingAppSwiper = new Swiper('.building-applications-swiper', {
  loop: false,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },
});

// Floating Header Navigation Hover Logic
document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('.nav-link-item');
  const navDetails = document.querySelectorAll('.nav-detail-text');
  const headerInner = document.querySelector('.floating-header-inner');

  if (navLinks.length > 0 && navDetails.length > 0 && headerInner) {
    // Handle hovering over individual links
    navLinks.forEach(link => {
      link.addEventListener('mouseenter', () => {
        const targetId = link.getAttribute('data-target');
        
        // Hide all details
        navDetails.forEach(detail => {
          detail.classList.remove('active-detail');
        });
        
        // Show the targeted detail
        const targetDetail = document.getElementById(targetId);
        if (targetDetail) {
          targetDetail.classList.add('active-detail');
        }
      });
    });

    // Reset to "Build Smarter" when mouse leaves the entire header area
    headerInner.addEventListener('mouseleave', () => {
      navDetails.forEach(detail => {
        detail.classList.remove('active-detail');
      });
      const defaultDetail = document.getElementById('detail-build');
      if (defaultDetail) {
        defaultDetail.classList.add('active-detail');
      }
    });
  }
});

// Animation for Index
document.addEventListener("DOMContentLoaded", () => {
  if (document.querySelector(".animation-container")) {
    const tl = gsap.timeline({
      scrollTrigger: {
        trigger: ".animation-container",
        start: "top center", 
        end: "bottom center", 
        scrub: 1,               
      }
    });

    /* --- PHASE 1: STACK TOGETHER --- */
    // Moved to center without any rotation
    tl.to(".box-1", { x: -200, y: -100 }, "stack")
      .to(".box-2", { x: -100, y: -50 }, "stack")
      .to(".box-3", { x: 0, y: 0 }, "stack")
      .to(".box-4", { x: 100, y: 50 }, "stack");

    /* --- PHASE 2: SEPARATE --- */
    // Spread out horizontally in a straight, parallel line
    tl.to(".box-1", { x: -150, y: -50 }, "separate")
      .to(".box-2", { x: -100, y: -25 }, "separate")
      .to(".box-3", { x: -50, y: 0 }, "separate")
      .to(".box-4", { x: 0, y: 25 }, "separate");
  }
});