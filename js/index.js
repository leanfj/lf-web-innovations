(function() {
  'use strict';
  //Troca texto hero
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
  //Estilo menu
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
  //Portifolio ação
  let filtersElem = document.querySelectorAll('.portifolio-navigation__item');

  filtersElem.forEach(element => {
    element.addEventListener('click', function(event) {
      let filterValue = event.target.getAttribute('data-filter');
      let thumbs = document.querySelector('.thumbs');
      let thumbItems = thumbs.querySelectorAll('.thumbs__item');

      thumbItems.forEach(thumb => {
        if (thumb.classList[2] != filterValue) {
          thumb.style.transition = 'all .3s';
          thumb.style.opacity = '0.2';
        }
        if (thumb.classList[2] == filterValue) {
          thumb.style.transition = 'all .3s';
          thumb.style.opacity = '1';
        }
        if (thumb.classList[1] == filterValue) {
          thumb.style.transition = 'all .3s';
          thumb.style.opacity = '1';
        }
      });
    });
  });

  // change is-checked class on buttons
  let tagGroups = document.querySelectorAll('.portifolio-navigation__item');

  //Loop sobre item para atuar em cada elementos
  tagGroups.forEach(item => {
    //Em cada item adciono um evento de click
    item.addEventListener('click', function() {
      //Pego o elemento com a classe que ativa o estilo
      let itemAtivo = document.querySelector(
        '.portifolio-navigation__item--active'
      );
      //Utilização do replace para remover a classe que ativa o estilo do item
      itemAtivo.className = itemAtivo.className.replace(
        ' portifolio-navigation__item--active',
        ''
      );

      // Elemento que recebe o click recebe a classe que ativa
      this.className += ' portifolio-navigation__item--active';
    });
  });
})();
