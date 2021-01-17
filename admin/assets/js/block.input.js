window.onload = function() {
  const myInput = document.getElementById('passinput');
  myInput.onpaste = function(e) {
    e.preventDefault();
  }
 }