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
    slidesPerView: 6,
    spaceBetween: 30,
    slidesPerGroup: 6,
    loopedSlides: 6,
    loop: true,
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

// Menu:
