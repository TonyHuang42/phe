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

