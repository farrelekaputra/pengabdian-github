<?php 

include "functions.php";

$id_tanaman = getSingleColumn('tanaman','id');

$activePage = "monitoring";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  html{
    background-color: rgb(226, 226, 226);
    overflow-x: hidden;
}
body {
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: rgb(226, 226, 226);
}
html{
    background-color: rgb(226, 226, 226);
    overflow-x: hidden;
    }
.container{
    display:flex;
    justify-content: center;
}
.Sidebar{
    margin-right:4%;
    position: fixed;
    top: 1;
}
@media only screen and (max-width: 1200px){
    .Sidebar{
        height: 28rem;
    }
}
</style>
<body>
    <!-- navbar -->
    
    <?php include "component/navbar.php" ?>
    
    <!-- container body -->
      <div class="container bg-tertiary">

        <!-- sidebar -->
        <?php include "component/sidebar.php" ?>

        <!-- content -->
        <div class="container-fluid d-flex flex-column mx-auto" style="width: 90%; margin-left: 14% !important">
      <h1 class="mb-5 pb-5">Monitoring</h1>

      <!-- Kelengkeng 1 -->
      <section class="Kelengkeng1 mb-5">
          <div class="content d-flex flex-column">
              <h3>
                <?=$id_tanaman[0]?>
              </h3>
              <hr>
              <div class="detail d-flex flex-column">
              <div class="line1 d-flex flex-row">
                  <div class="penyiraman d-flex flex-row">
                      <label for="statusPenyiraman"><i class="bi bi-droplet-fill pe-1 text-primary"></i>Status penyiraman : </label>
                      <p class="ps-3">Sudah</p>
                  </div>
                  <div class="pemupukan d-flex flex-row ms-5 ps-5">
                      <label for="statusPemupukan"><i class="bi bi-water pe-1 text-danger"></i>Status pemupukan :</label>
                      <p class="ps-3">Sudah</p>
                  </div>
              </div>
              <div class="line2 d-flex flex-row">
                  <div class="karyawan d-flex flex-row">
                      <label for="statusKaryawan"><i class="bi bi-person-fill pe-1 text-dark"></i> Karyawan bertugas : </label>
                      <p class="ps-3">Heri</p>
                  </div>
                  <div class="panen d-flex flex-row ms-5 ps-5">
                      <label for="statusPanen"><i class="bi bi-calendar-week-fill pe-2 text-success"></i>Estimasi Panen :</label>
                      <p class="ps-3">dd-mm-yyyy</p>
                  </div>
              </div>
                  <div class="caption pt-2">
                      <p style="text-align: justify;">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nihil architecto ad amet saepe, natus incidunt provident, dicta voluptatibus exercitationem earum ea perspiciatis et laborum qui reprehenderit atque doloremque sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptatibus distinctio reiciendis ut ea minima hic consequuntur, autem, asperiores dignissimos sit sint labore aspernatur repellat. Voluptates possimus nihil earum fuga? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis iusto deserunt laudantium in temporibus explicabo velit facilis quasi, hic fuga nemo iure! Quam reprehenderit aliquid nemo pariatur. Magni, praesentium eum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda qui eos quod placeat consectetur enim dignissimos at similique officia. Magnam, fugit distinctio? Reprehenderit, qui itaque exercitationem eos expedita doloribus minima?
                      </p>
                  </div>
              </div>
          </div>
      </section>

      <!-- Kelengkeng 2 -->
      <section class="Kelengkeng2 mb-5">
          <div class="content d-flex flex-column">
              <h3>
                <?=$id_tanaman[1]?>
              </h3>
              <hr>
              <div class="detail d-flex flex-column">
              <div class="line1 d-flex flex-row">
                  <div class="penyiraman d-flex flex-row">
                      <label for="statusPenyiraman"><i class="bi bi-droplet-fill pe-1 text-primary"></i>Status penyiraman : </label>
                      <p class="ps-3">Sudah</p>
                  </div>
                  <div class="pemupukan d-flex flex-row ms-5 ps-5">
                      <label for="statusPemupukan"><i class="bi bi-water pe-1 text-danger"></i>Status pemupukan :</label>
                      <p class="ps-3">Sudah</p>
                  </div>
              </div>
              <div class="line2 d-flex flex-row">
                  <div class="karyawan d-flex flex-row">
                      <label for="statusKaryawan"><i class="bi bi-person-fill pe-1 text-dark"></i> Karyawan bertugas : </label>
                      <p class="ps-3">Ahmad</p>
                  </div>
                  <div class="panen d-flex flex-row ms-5 ps-5">
                      <label for="statusPanen"><i class="bi bi-calendar-week-fill pe-2 text-success"></i>Estimasi Panen :</label>
                      <p class="ps-3">dd-mm-yyyy</p>
                  </div>
              </div>
                  <div class="caption pt-2">
                      <p style="text-align: justify;">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nihil architecto ad amet saepe, natus incidunt provident, dicta voluptatibus exercitationem earum ea perspiciatis et laborum qui reprehenderit atque doloremque sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptatibus distinctio reiciendis ut ea minima hic consequuntur, autem, asperiores dignissimos sit sint labore aspernatur repellat. Voluptates possimus nihil earum fuga? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis iusto deserunt laudantium in temporibus explicabo velit facilis quasi, hic fuga nemo iure! Quam reprehenderit aliquid nemo pariatur. Magni, praesentium eum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda qui eos quod placeat consectetur enim dignissimos at similique officia. Magnam, fugit distinctio? Reprehenderit, qui itaque exercitationem eos expedita doloribus minima?
                      </p>
                  </div>
              </div>
          </div>
      </section>

      <!-- Kelengkeng 3 -->
      <section class="Kelengkeng3 mb-5">
          <div class="content d-flex flex-column">
              <h3>
                <?=$id_tanaman[2]?>
              </h3>
              <hr>
              <div class="detail d-flex flex-column">
              <div class="line1 d-flex flex-row">
                  <div class="penyiraman d-flex flex-row">
                      <label for="statusPenyiraman"><i class="bi bi-droplet-fill pe-1 text-primary"></i>Status penyiraman : </label>
                      <p class="ps-3">Sudah</p>
                  </div>
                  <div class="pemupukan d-flex flex-row ms-5 ps-5">
                      <label for="statusPemupukan"><i class="bi bi-water pe-1 text-danger"></i>Status pemupukan :</label>
                      <p class="ps-3">Sudah</p>
                  </div>
              </div>
              <div class="line2 d-flex flex-row">
                  <div class="karyawan d-flex flex-row">
                      <label for="statusKaryawan"><i class="bi bi-person-fill pe-1 text-dark"></i> Karyawan bertugas : </label>
                      <p class="ps-3">Suherman</p>
                  </div>
                  <div class="panen d-flex flex-row ms-5 ps-5">
                      <label for="statusPanen"><i class="bi bi-calendar-week-fill pe-2 text-success"></i>Estimasi Panen :</label>
                      <p class="ps-3">dd-mm-yyyy</p>
                  </div>
              </div>
                  <div class="caption pt-2">
                      <p style="text-align: justify;">
                          Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod nihil architecto ad amet saepe, natus incidunt provident, dicta voluptatibus exercitationem earum ea perspiciatis et laborum qui reprehenderit atque doloremque sequi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto voluptatibus distinctio reiciendis ut ea minima hic consequuntur, autem, asperiores dignissimos sit sint labore aspernatur repellat. Voluptates possimus nihil earum fuga? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis iusto deserunt laudantium in temporibus explicabo velit facilis quasi, hic fuga nemo iure! Quam reprehenderit aliquid nemo pariatur. Magni, praesentium eum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda qui eos quod placeat consectetur enim dignissimos at similique officia. Magnam, fugit distinctio? Reprehenderit, qui itaque exercitationem eos expedita doloribus minima?
                      </p>
                  </div>
              </div>
          </div>
      </section>
  </div>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        var menuButton = document.querySelector(".menu");
    
        var sidebar = document.querySelector(".Sidebar");
    
        menuButton.addEventListener("click", function() {
          var isSidebarCollapsed = sidebar.style.width === "80px";
    
          if (isSidebarCollapsed) {
            sidebar.style.width = "250px";
            var sidebarLinks = sidebar.querySelectorAll("p");
            sidebarLinks.forEach(function(link) {
              link.style.display = "block";
            });
          } 
          else {
            sidebar.style.width = "80px";
            var sidebarLinks = sidebar.querySelectorAll("p");
            sidebarLinks.forEach(function(link) {
              link.style.display = "none";
            });
          }
        });
    
        sidebar.style.transition = "width 0.3s";
      });
  </script>
       
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>