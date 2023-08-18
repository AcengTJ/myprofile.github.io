function submitMessage() {
  const scriptURL =
    "https://script.google.com/macros/s/AKfycbwXberayO7I5tbol-OmW0s5gt8_XzjOS5wapbCewI3f2ORqdwEBXSCDwTrdkQJAsBH_/exec";
  const form = document.forms["contact-form"];
  const btnSubmit = document.querySelector(".btn3");
  const btnLoading = document.querySelector(".btn-loading");
  const alert = document.querySelector(".alert");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    // Ketika tombol submit diklik
    // tampilkan tombol loading, hilangkan tombol kirim
    btnLoading.classList.toggle("d-none");
    btnSubmit.classList.toggle("d-none");

    fetch(scriptURL, { method: "POST", body: new FormData(form) })
      .then((response) => {
        // tampilkan tombol kirim, hilangkan tombol loading
        btnLoading.classList.toggle("d-none");
        btnSubmit.classList.toggle("d-none");

        // tampilkan alert
        alert.classList.toggle("d-none");

        // Reset form
        form.reset();

        console.log("Success!", response);
      })
      .catch((error) => console.error("Error!", error.message));
  });
}

var tabLinks = document.getElementsByClassName("tab-links");
var tabContents = document.getElementsByClassName("tab-contents");

function openTab(tabName) {
  for (tabLink of tabLinks) {
    tabLink.classList.remove("active-link");
  }
  for (tabContent of tabContents) {
    tabContent.classList.remove("active-tab");
  }
  event.currentTarget.classList.add("active-link");
  document.getElementById(tabName).classList.add("active-tab");
}

// // JavaScript for handling the mobile navigation menu
// document.querySelector(".fas.fa-bars").addEventListener("click", function () {
//   document.querySelector("nav ul").classList.toggle("show");
// });

// document.querySelector(".fas.fa-times").addEventListener("click", function () {
//   document.querySelector("nav ul").classList.remove("show");
// });

function navbarMenu() {
  const menuToggle = document.querySelector(".menu-toggle input");
  const nav = document.querySelector("nav ul");

  nav.classList.toggle("slide");
}
