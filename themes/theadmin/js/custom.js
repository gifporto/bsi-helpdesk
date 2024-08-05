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




