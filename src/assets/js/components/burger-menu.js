"use strict"

const menu = document.querySelector('#menu');
const toggle = document.querySelector('#toggle');

menu.classList.add('_active');

if(toggle) {  
  toggle.addEventListener("click", (e)=> {    
    menu.classList.toggle('_open');    
  })
}