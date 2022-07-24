let test = document.getElementById("test");

  test.addEventListener("mouseover", function( event ) {
  event.target.style.color = "#EDCD1F";
  setTimeout(function() {
    event.target.style.color = "";
  }, 500);
}, false);