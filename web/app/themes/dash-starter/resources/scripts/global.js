import Swiper from 'swiper/bundle';

document.addEventListener('DOMContentLoaded', function () {
  // Get the header element by its ID
  const header = document.getElementById('header');

  // Function to toggle the class based on scroll position
  function toggleHeaderClass() {
    if (window.scrollY > 0) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  }

  // Add event listener to the window's scroll event
  window.addEventListener('scroll', toggleHeaderClass);
});

document.addEventListener('DOMContentLoaded', () => {
  var swiper = new Swiper('.logos-block', {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 4,
    loopedSlides: 4,
    loop: true,
    breakpoints: {
      // Breakpoint for mobile devices
      1024: {
        slidesPerView: 6, // Show 4 slides per view on mobile
        slidesPerGroup: 6, // Move 4 slides at a time on mobile
      },
    },
  });
});

// const swiperServices = new Swiper('.swiper', {
//   // Optional parameters
//   direction: 'horizontal',
//   loop: true,
//   slidesPerView: 1, // 2 slides per view by default
//   spaceBetween: 0,

//   // Responsive breakpoints
//   breakpoints: {
//     // When window width is <= 768px (tablet)
//     768: {
//       slidesPerView: 1,
//       spaceBetween: 10,
//     },
//     // When window width is > 768px (desktop)
//     769: {
//       slidesPerView: 4,
//       spaceBetween: 60,
//     },
//   },
// });

// Accordion
document.querySelectorAll('.faq__input').forEach((input) => {
  input.addEventListener('change', (event) => {
    const chevron = event.target.parentNode.querySelector('.faq__chevron');
    chevron.classList.toggle('rotate-180', event.target.checked);
  });
});

// Masonry

// Initialize Masonry when the images are loaded
imagesLoaded('#photo-gallery', function () {
  // Initialize Masonry
  var masonry = new Masonry('#photo-gallery', {
    itemSelector: '.masonry-gallery__item',
    columnWidth: '.masonry-gallery__item',
    gutter: '.lg\\:gap-x-2', // Use double backslash to escape special characters in the class name
    percentPosition: true,
  });
});

// Menu

// JavaScript to toggle the mobile menu
document.addEventListener('DOMContentLoaded', function () {
  const navPrimary = document.querySelector('.nav-primary');
  const navMobile = document.querySelector('.mobile-nav');
  const navToggle = document.querySelector('.nav-toggle');
  const navClose = document.querySelector('.nav-toggle-close');

  navToggle.addEventListener('click', function () {
    navMobile.classList.toggle('nav-open');
  });

  navClose.addEventListener('click', function () {
    navMobile.classList.toggle('nav-open');
  });
});

// Modal

document.addEventListener('DOMContentLoaded', function () {
  // Get all elements with the data-modal-hide attribute
  var modalHideButtons = document.querySelectorAll('[data-modal-hide]');

  // Attach a click event listener to each modal hide button
  modalHideButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var modalId = this.getAttribute('data-modal-hide');
      var modal = document.getElementById(modalId);
      modal.classList.add('hidden');
    });
  });

  // Get all elements with the data-modal-target attribute
  var modalTriggerButtons = document.querySelectorAll('[data-modal-target]');

  // Attach a click event listener to each modal trigger button
  modalTriggerButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      var modalId = this.getAttribute('data-modal-target');
      var modal = document.getElementById(modalId);
      modal.classList.remove('hidden');
    });
  });

  showPopupModal();
});
