var modal = document.getElementsByClassName('bg-modal');
var open = document.getElementsByClassName('open-modal');
var close = document.getElementsByClassName('bg-close');

console.log(modal)
// OPEN MODAL 1
open[0].onclick = function () {
  modal[0].style.display = 'block';
}

//CLOSE 1

close[0].onclick = function () {
  modal[0].style.display = 'none';
}

// OPEN MODAL 2
open[1].onclick = function () {
  modal[1].style.display = 'block';
}

//CLOSE 2

close[1].onclick = function () {
  modal[1].style.display = 'none';
}

// OPEN MODAL 3
open[2].onclick = function () {
  modal[2].style.display = 'block';
}

//CLOSE 3

close[2].onclick = function () {
  modal[2].style.display = 'none';
}