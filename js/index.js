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
