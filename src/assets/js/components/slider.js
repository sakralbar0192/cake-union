"use strict"
const SHOW_TIME = 4000;
const slides = document.querySelector('#slides-list').children;
const controls = document.querySelector('#controls').children;
const dotsList = document.querySelector('#dots');
const dots = dotsList.children;
const dotTemplate = document.querySelector("#dot");
let currentSlideIndex = 0;

const createDots = () => {
  const dotsNumbers =slides.length - dots.length;
  for (let i=1;i<=dotsNumbers;i++) {    
    const dot = dotTemplate.cloneNode(true);
    dot.classList.remove('slider__dot--current')
    dotsList.appendChild(dot);
  }
}

createDots()

const changeSlideToNext = () => {
  if (currentSlideIndex == slides.length-1) {
    currentSlideIndex = 0;
    slides[slides.length-1].classList.toggle('_current');
    slides[currentSlideIndex].classList.toggle('_current');  
    dots[slides.length-1].classList.toggle('slider__dot--current');
    dots[currentSlideIndex].classList.toggle('slider__dot--current');   
  }  else {
    slides[currentSlideIndex].classList.toggle('_current');
    slides[currentSlideIndex+1].classList.toggle('_current');
    dots[currentSlideIndex].classList.toggle('slider__dot--current');
    dots[currentSlideIndex+1].classList.toggle('slider__dot--current');
    currentSlideIndex++;
  }   
}

const changeSlideToPrevious = () => {
  if (currentSlideIndex == 0) {
    currentSlideIndex = slides.length-1;
    slides[0].classList.toggle('_current');
    slides[currentSlideIndex].classList.toggle('_current');  
    dots[0].classList.toggle('slider__dot--current');
    dots[currentSlideIndex].classList.toggle('slider__dot--current');  
  }  else {    
    slides[currentSlideIndex].classList.toggle('_current');
    slides[currentSlideIndex-1].classList.toggle('_current');
    dots[currentSlideIndex].classList.toggle('slider__dot--current');
    dots[currentSlideIndex-1].classList.toggle('slider__dot--current');
    currentSlideIndex--;
  }
}

const activateSlider = () => {  
  let timer = setInterval(changeSlideToNext, SHOW_TIME);
  Array.from(controls).forEach(control => {
    control.addEventListener('click', () => {
      clearInterval(timer);
      if (control.getAttribute('id') === 'next') {
        changeSlideToNext();        
      } else if (control.getAttribute('id') === 'previous') {
        changeSlideToPrevious();
      }
      timer = setInterval(changeSlideToNext, SHOW_TIME);
    })
  });  
}

activateSlider();