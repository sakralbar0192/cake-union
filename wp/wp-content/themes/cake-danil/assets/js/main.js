"use strict";

var menu = document.querySelector('#menu');
var toggle = document.querySelector('#toggle');

if (menu) {
  menu.classList.add('_active');
}

if (toggle) {
  toggle.addEventListener("click", function (e) {
    menu.classList.toggle('_open');
  });
}

"use strict";

var menuList = document.querySelector('#menu-list');
var menuListToggle = document.querySelector('#menu-list-toggle');

if (menuList) {
  menuList.classList.add('_active');
}

if (menuListToggle) {
  menuListToggle.addEventListener("click", function (e) {
    menuList.classList.toggle('_open');
  });
}

"use strict";

var ESCAPE_KEY_CODE = 27;

if (document.querySelector("#cakes-list")) {
  var cakesList = document.querySelector("#cakes-list");
  var modal = document.querySelector("#modal");

  var showModal = function showModal(evt) {
    console.log('работает');
    evt.preventDefault();
    modal.classList.add("_active");
    document.addEventListener('keydown', function (evt) {
      if (evt.keyCode === ESCAPE_KEY_CODE) {
        modal.classList.remove("_active");
      }
    }, {
      once: true
    });
  };

  Array.from(cakesList.children).forEach(function (element) {
    element.addEventListener("click", showModal);
  });
}

if (document.querySelector(".swiper-container")) {
  var swiper = new Swiper(".swiper-container", {
    speed: 400,
    slidesPerView: 1,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    effect: "fade",
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });
}

"use strict";

if (document.querySelector('input[data-tel-input')) {
  document.addEventListener("DOMContentLoaded", function () {
    var phoneInput = document.querySelector('input[data-tel-input');

    var getInputNumbersValue = function getInputNumbersValue(input) {
      return input.value.replace(/\D/g, "");
    };

    var onPhoneInput = function onPhoneInput(e) {
      var input = e.target;
      var inputNumbersValue = getInputNumbersValue(input);
      var formatedInputValue = "";
      var selectionStart = input.selectionStart;

      if (!inputNumbersValue) {
        return input.value = '';
      }

      if (input.value.length != selectionStart) {
        if (e.data && /\D/g.test(e.data)) {
          input.value = inputNumbersValue;
        }

        return;
      }

      if (['7', '8', '9'].includes(inputNumbersValue[0])) {
        //russian number
        if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
        var firstSimbols = inputNumbersValue[0] == "8" ? "8" : "+7";
        formatedInputValue = firstSimbols + " ";

        if (inputNumbersValue.length > 1) {
          formatedInputValue += "(" + inputNumbersValue.substring(1, 4);
        }

        if (inputNumbersValue.length >= 5) {
          formatedInputValue += ") " + inputNumbersValue.substring(4, 7);
        }

        if (inputNumbersValue.length >= 8) {
          formatedInputValue += "-" + inputNumbersValue.substring(7, 9);
        }

        if (inputNumbersValue.length >= 10) {
          formatedInputValue += "-" + inputNumbersValue.substring(9, 11);
        }
      } else {
        //not rus
        formatedInputValue = "+" + inputNumbersValue;
      }

      input.value = formatedInputValue;
    };

    var onPhoneKeyDown = function onPhoneKeyDown(e) {
      var input = e.target;

      if (e.keyCode == 8 && getInputNumbersValue(input).length == 1) {
        input.value = "";
      }
    };

    var onPhonePaste = function onPhonePaste(e) {
      var pasted = e.clipboardData || window.clipboardData,
          input = e.target,
          inputNumbersValue = getInputNumbersValue(input);

      if (pasted) {
        var pastedText = pasted.getData('Text');

        if (/\D/g.test(pastedText)) {
          input.value = inputNumbersValue;
        }
      }
    };

    phoneInput.addEventListener('input', onPhoneInput);
    phoneInput.addEventListener('keydown', onPhoneKeyDown);
    phoneInput.addEventListener('paste', onPhonePaste);
  });
}
