const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');
// sidenav
const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);
// slider
const slider = document.querySelectorAll('.slider')
M.Slider.init(slider, {
  indicators: false,
  height: 500,
  transition: 600,
  interval: 3000
});
// Feature discovery
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.tap-target');
  var instances = M.TapTarget.init(elems, options);
});
// scrollspy
const scroll = document.querySelectorAll('.scrollspy');
M.ScrollSpy.init(scroll, {
  scrollOffset: 50
});
// parallax 
const parallax = document.querySelectorAll('.parallax');
M.Parallax.init(parallax);
// dropdown
const dropdown = document.querySelectorAll('.dropdown-trigger');
M.Dropdown.init(dropdown);
// info 
document.addEventListener('DOMContentLoaded', function () {
  var elems = document.querySelectorAll('.fixed-action-btn');
  var instances = M.FloatingActionButton.init(elems, {
    direction: 'left',
    hoverEnabled: false
  });
});

// form untuk no hp
function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // ajax
  // xmlhttprequest
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     container
  //   }
  // };

  // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
  // xhr.send();

  //  2. fetch()
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));

});