const form = document.getElementById("loginForm");

form.addEventListener("submit", function (e) {
  e.preventDefault(); // voorkomt refresh

  // Simuleer login
  localStorage.setItem("loggedIn", "true");

  // Doorlinken naar dashboard
  window.location.href = "HomePage.html";
});