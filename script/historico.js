var isSearchButtonAppearCalled = false;

function searchButtonAppear() {
  var isSearchButtonAppearCalled = true;
  var searchButton = document.getElementById("searchButton");



}
if (isSearchButtonAppearCalled) {
    searchButton.style.display = "block";
    console.log("A função searchButtonAppear foi chamada.");
  } else {
    searchButton.style.display = "none";
    console.log("A função searchButtonAppear NÃO foi chamada.");
  }
