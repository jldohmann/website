//var allButtons = document.querySelectorAll('.readMore');
//
//for (var i = 0; i < allButtons.length; i++) {
//  allButtons[i].addEventListener('click', function() {
//
//    if (this.style.display === "none") {      // this part
//        this.style.display = "block";          // toggles the div
//        } else {                                   // based on it's given
//          this.style.display = "none";         // css styling state
//
//  });
//}

var btns = document.querySelectorAll(".readMore");
btns.forEach(readMore);

function readMore() {
  if (this.style.display === "none") {
    this.style.display = "block";
  } else {
    this.style.display = "none";
  }
}

/*
function readMore() {
    var x = document.querySelector(".readMore");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
*/

//function readMore() {
//  var btns = document.querySelectorAll(".readMore"), i;
//  for (i = 0; i < btns.length; ++i) {
//
//    if (btns[i].style.display === "none") {      // this part
//      btns[i].style.display = "block";          // toggles the div
//    } else {                                   // based on it's given
//      btns[i].style.display = "none";         // css styling state
//    }
//
//  }
//}
