/* get url, cut everything before hash, and assign index 1 to currentPageHref*/
let currentPagePath = window.location.href;

//returns an array
let currentPageString = currentPagePath.split("/");
let lastChildIndex = currentPageString.length - 1;
let lastChild = currentPageString[lastChildIndex];
let lastChildSplit = lastChild.split("=");

// getting action word
let currentPage = lastChildSplit[0];
if (currentPage == "") {
  currentPage = "home";
}
window.onload = function load() {
  if (currentPage == "account") {
    document.getElementById("student").className += " active";
  } else if (currentPage == "student") {
    document.getElementById("account").className += " active";
  } else if (currentPage != 'logout') {
    document.getElementById(currentPage).className += " active";
  } else {
    document.getElementById('home').className += " active";
  }
}