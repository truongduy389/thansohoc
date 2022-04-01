//#region Set max time for input:datetime
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth() + 1; //January is 0!
var yyyy = today.getFullYear();
if (dd < 10) {
  dd = "0" + dd;
}
if (mm < 10) {
  mm = "0" + mm;
}
today = yyyy + "-" + mm + "-" + dd;
document.getElementById("dob").setAttribute("max", today);
//#endregion

//#region Show Mobile Navbar
function showMNav() {
  const mNav = document.getElementById("mNav");
  const btnmMenu = document.getElementById("btn-mMenu");
  if (mNav.style.display == "none") {
    mNav.style.display = "block";
    btnmMenu.style.display = "none";
  } else {
    mNav.style.display = "none";
    btnmMenu.style.display = "block";
  }
}
//#endregion

//#region Scroll Left Button
const rightBtn = document.querySelector('#right-button');
const leftBtn = document.querySelector('#left-button');
let cardReview = document.querySelector('#card-review');
var cardReviewWidth = cardReview.clientWidth;

rightBtn.addEventListener("click", function(event) {
  const conent = document.querySelector('#content');
  conent.scrollLeft += cardReviewWidth;
  event.preventDefault();
});

leftBtn.addEventListener("click", function(event) {
  const conent = document.querySelector('#content');
  conent.scrollLeft -= cardReviewWidth;
  event.preventDefault();
});
//#endregion