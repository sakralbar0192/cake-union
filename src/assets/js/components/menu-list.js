"use strict"

const menuList = document.querySelector('#menu-list');
const menuListToggle = document.querySelector('#menu-list-toggle');

if (menuList) {
  menuList.classList.add('_active');
}

if(menuListToggle) {  
  menuListToggle.addEventListener("click", (e)=> {    
    menuList.classList.toggle('_open');    
  })
}