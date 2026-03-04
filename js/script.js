// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

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

// Initialize Swiper for Building Applications
const buildingAppSwiper = new Swiper('.building-applications-swiper', {
  loop: false,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-next',
    prevEl: '.swiper-prev',
  },
});

