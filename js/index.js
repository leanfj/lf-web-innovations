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

var iso = new Isotope('.thumbs', {
  itemSelector: '.thumbs__item'
});

var filtersElem = document.querySelectorAll('.portifolio-navigation__item');

filtersElem.forEach(element => {
  element.addEventListener('click', function(event) {
    var filterValue = event.target.getAttribute('data-filter');
    iso.arrange({ filter: filterValue });
  });
});

// change is-checked class on buttons
let tagGroups = document.querySelectorAll('.portifolio-navigation__item');

//Loop sobre item para atuar em cada elementos
tagGroups.forEach(item => {
  //Em cada item adciono um evento de click
  item.addEventListener('click', function() {
    //Pego o elemento com a classe que ativa o estilo
    let current = document.querySelector(
      '.portifolio-navigation__item--active'
    );
    console.log(current.classList);
    //Troco o
    current.className = current.className.replace(
      ' portifolio-navigation__item--active',
      ''
    );
    this.className += ' portifolio-navigation__item--active';
  });
});

// for (var i = 0; i < tagGroups.length; i++) {
//   tagGroups[i].addEventListener('click', function() {
//     var current = document.getElementsByClassName(
//       'portifolio-navigation__item--active'
//     );
//     current[0].className = current[0].className.replace(
//       ' portifolio-navigation__item--active',
//       ''
//     );
//     this.className += ' portifolio-navigation__item--active';
//   });
// }
