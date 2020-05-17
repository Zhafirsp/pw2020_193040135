// tombol cari
const tombolCari = document.querySelector('.tombol-cari');
// keyword
const keyword = document.querySelector('.keyword');
// hilangkan tombol cari
tombolCari.style.display = 'none';
// container
const big = document.querySelector('.big');
// sidenav
const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);
// media
const mBoxed = document.querySelectorAll('.materialboxed');
M.Materialbox.init(mBoxed);
// slider
const slider = document.querySelectorAll('.slider')
M.Slider.init(slider, {
  indicators: false,
  height: 500,
  transition: 600,
  interval: 3000
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

// form no hp
function hanyaAngka(evt) {
  var charCode = (evt.which) ? evt.which : event.keyCode
  if (charCode > 31 && (charCode < 48 || charCode > 57))

    return false;
  return true;
}


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

  // 2. fetch()
  fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (big.innerHTML = response));

});
//preview imgae untuk tambah dan ubah
function previewFoto() {
  const foto = document.querySelector(".foto");
  const imgPreview = document.querySelector(".img-preview");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(foto.files[0]);

  oFReader.onload = function (oFReader) {
    imgPreview.src = oFReader.target.result;
  };
}
function previewLogo() {
  const logo_merk = document.querySelector(".logo_merk");
  const imgPreviews = document.querySelector(".img-previews");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(logo_merk.files[0]);

  oFReader.onload = function (oFReader) {
    imgPreviews.src = oFReader.target.result;
  };
}