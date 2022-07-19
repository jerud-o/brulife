function myFunction() {
  document.getElementById("myDropdown").classList.toggle("custom-show");
}

window.onclick = function(event) {
  if (!event.target.matches('.custom-dropbtn')) {
      var dropdowns = document.getElementsByClassName("custom-dd-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('custom-show')) {
              openDropdown.classList.remove('custom-show');
          }
      }
  }
}