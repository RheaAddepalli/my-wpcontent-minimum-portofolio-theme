document.addEventListener("DOMContentLoaded", function () {
  const toggleBtn = document.getElementById("toggle-theme");

  toggleBtn.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode");

    // Optional: Save preference to localStorage
    if (document.body.classList.contains("dark-mode")) {
      localStorage.setItem("theme", "dark");
    } else {
      localStorage.setItem("theme", "light");
    }
  });

  // On page load, apply saved theme
  if (localStorage.getItem("theme") === "dark") {
    document.body.classList.add("dark-mode");
  }
});
