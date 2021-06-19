"use strict"

const menuList = document.querySelector('#menu-list');
const menuListToggle = document.querySelector('#menu-list-toggle');

menuList.classList.add('_active');

if(toggle) {  
  menuListToggle.addEventListener("click", (e)=> {    
    menuList.classList.toggle('_open');    
  })
}