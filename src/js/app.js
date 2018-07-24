import sayHello from './lib/sayHello.js';
import initSliders from './components/sliders.js';
import popup from './components/popup.js';
import formSubmit from './components/form.js';

sayHello();

$(document).ready(function() {
  initSliders();
  formSubmit();
  popup();
});
