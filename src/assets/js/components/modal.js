"use strict"
const ESCAPE_KEY_CODE = 27;

if (document.querySelector("#cakes-list")) {
  const cakesList = document.querySelector("#cakes-list");
  const modal = document.querySelector("#modal");

  const showModal = (evt) => {
    console.log('работает')
    evt.preventDefault();
    modal.classList.add("_active");

    document.addEventListener('keydown',(evt) => {
      if (evt.keyCode === ESCAPE_KEY_CODE){
        modal.classList.remove("_active");
      }
    }, {once: true});
  }

  Array.from(cakesList.children).forEach(element => {
    element.addEventListener("click",showModal)
  })
}
