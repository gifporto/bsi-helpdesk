// transparant topbar
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    document.getElementById("topbar").classList.add("topbar-trans");
  } else {
    document.getElementById("topbar").classList.remove("topbar-trans");
  }
}

// arrow animasi
$(document).ready(function () {
  $(".dropdown")
    .on("show.bs.dropdown", function () {
      $(".dropdown-icon", this)
        .removeClass("ti-angle-down")
        .addClass("ti-angle-up");
    })
    .on("hide.bs.dropdown", function () {
      $(".dropdown-icon", this)
        .removeClass("ti-angle-up")
        .addClass("ti-angle-down");
    });
});

// opsi kategori
function tampilkanData() {
  var kategori = document.getElementById("kategoriSelect").value;
  var hasil = document.getElementById("hasil");

  if (kategori === "Internal") {
      hasil.innerHTML = '<div class="form-group col-lg-12"> <label class="text-dark">Instansi Internal</label> <select class="form-control"> <option>Biro Sistem Informasi</option> <option>Biro Sumber Daya Manusia</option> </select> </div>';
  } else if (kategori === "Eksternal") {
      hasil.innerHTML = '<div class="form-group col-lg-12"> <label class="text-dark">Instansi Eksternal</label> <input class="form-control" type="text"> </div>';
  }
}





