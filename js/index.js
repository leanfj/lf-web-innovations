let slideIndex = 0;

changeHeroText();

function changeHeroText() {
  let $slideItem = document.querySelectorAll('.slide-item');
  $slideItem.forEach(item => {
    item.classList.remove('slide-item--active');
  });
  slideIndex++;

  if (slideIndex > $slideItem.length) {
    slideIndex = 1;
  }

  $slideItem[slideIndex - 1].classList.add('slide-item--active');

  setTimeout(changeHeroText, 5000);
}

let $menuMobileIcon = document.querySelector('.menu-icon');

$menuMobileIcon.addEventListener('click', () => {
  const $menuMobile = document.querySelector('.menu-mobile');
  $menuMobile.classList.toggle('menu-mobile--active');

  const $menuMobileSpans = document.querySelectorAll('.menu-icon > span');
  $menuMobileSpans.forEach(item => {
    item.classList.toggle('span-line--active');
  });
});

(function() {
  'use strict';

  const section = document.querySelectorAll('.section');
  const sections = {};
  let i = 0;

  section.forEach(item => {
    sections[item.id] = item.offsetTop;
  });

  window.onscroll = function() {
    const scrollPosition =
      document.documentElement.scrollTop || document.body.scrollTop;

    for (i in sections) {
      if (sections[i] <= scrollPosition) {
        document
          .querySelector('.menu__item--active')
          .setAttribute('class', ' ');
        document
          .querySelector('a[href*=' + i + ']')
          .setAttribute('class', 'menu__item--active');
      }
    }
  };
})();
