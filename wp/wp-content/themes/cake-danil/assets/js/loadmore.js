"use strict";

window.addEventListener('scroll', () => {
  const BOTTOM_OFSET = 300;
  const loadingBlock = document.querySelector('#loadmore');
  const productsContainer = document.querySelector('#products-container');
  let paged = loadingBlock.dataset.paged;
  let maxPages = loadingBlock.dataset.max_pages;
  if (
    window.pageYOffset > document.body.clientHeight - BOTTOM_OFSET - window.innerHeight
    &&
    !productsContainer.classList.contains('_loading')
  ) {
    productsContainer.classList.add('_loading');

    let trueRequest = new XMLHttpRequest();
    trueRequest.open('POST', ajax_url.ajaxUrl,true);
    trueRequest.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8' );
    trueRequest.send( {
      paged : paged,
			action : 'loadmore'
    } );
    trueRequest.onload = function() {

      var result = this.response;
      console.log(result)

    };
  }
})
