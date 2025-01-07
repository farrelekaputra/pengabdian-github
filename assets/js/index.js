document.addEventListener("DOMContentLoaded", function () {
  var menuButton = document.querySelector(".menu");

  var sidebar = document.querySelector(".Sidebar");

  menuButton.addEventListener("click", function () {
    var isSidebarCollapsed = sidebar.style.width === "80px";

    if (isSidebarCollapsed) {
      sidebar.style.width = "250px";
      var sidebarLinks = sidebar.querySelectorAll("p");
      sidebarLinks.forEach(function (link) {
        link.style.display = "block";
      });
    } else {
      sidebar.style.width = "80px";
      var sidebarLinks = sidebar.querySelectorAll("p");
      sidebarLinks.forEach(function (link) {
        link.style.display = "none";
      });
    }
  });

  sidebar.style.transition = "width 0.3s";
});
