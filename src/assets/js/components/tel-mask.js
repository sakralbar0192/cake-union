"use strict"
if (document.querySelector('input[data-tel-input')) {
  document.addEventListener("DOMContentLoaded", function() {
    const phoneInput = document.querySelector('input[data-tel-input');
  
    const getInputNumbersValue = function(input){
      return input.value.replace(/\D/g, "");
    }
  
    const onPhoneInput = function(e) {
      const input = e.target;
      let inputNumbersValue = getInputNumbersValue(input);
      let formatedInputValue = "";
      let selectionStart = input.selectionStart;
  
      if (!inputNumbersValue) {
        return input.value = '';
      }
  
      if (input.value.length != selectionStart) {
        if (e.data && /\D/g.test(e.data)) {
          input.value = inputNumbersValue;
        }  
        return;
      }
  
      if (['7','8','9'].includes(inputNumbersValue[0])) {
        //russian number
  
        if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;      
        let firstSimbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
  
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
    }
  
    const onPhoneKeyDown = function(e) {
      const input = e.target;
      if (e.keyCode == 8 && getInputNumbersValue(input).length == 1){
        input.value = "";
      }
      
    }
  
    const onPhonePaste = function(e) {
      let pasted = e.clipboardData || window.clipboardData,
        input = e.target,
        inputNumbersValue = getInputNumbersValue(input);
  
        if (pasted){
          let pastedText = pasted.getData('Text');
          if (/\D/g.test(pastedText)){
             input.value = inputNumbersValue;
          }
        }
    }
  
    phoneInput.addEventListener('input', onPhoneInput);
    phoneInput.addEventListener('keydown', onPhoneKeyDown);
    phoneInput.addEventListener('paste', onPhonePaste);
  })
}
