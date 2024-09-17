<?php 

include "functions.php";

$data_karyawan = getAllData('users');

$activePage = "karyawan";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
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
nav{
    margin-top: -.7rem;
}
.nav li{
    height: 3rem;
    margin-bottom: 1.4rem;
    transition: .3s;
}
.nav li a:hover{
    background-color: rgb(49, 134, 41);
    transition: .2s;
    border-radius: 5px;
    color: white;
    width: 100%;
}
.nav li:hover a {
    color: white !important;
}
.Sidebar{
  width: 16rem;
    height: 28rem;
    margin-top: -.7rem;
    background-color: rgba(50, 205, 50, 0);
    background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
}
.sidebar ul li{
    display: flex;
}
.sidebar p{
    height: 28rem;
    color: white !important;
}
.container{
    display: flex;
    margin-left: 0rem;
    justify-content: space-between;
}
.content{
    margin-left: 3rem;
    display: flex;
    height: auto;
}
a{
  text-decoration: none;
  color: #1e1e1e;
}
.foto-karyawan{
  width: 10%;
}
td img{
  width: 40px;
  border-radius: 100px;
}

@media only screen and (max-width: 1200px){
    
    .Sidebar{
      width: 80px;
        height: 28rem;
        margin-top: -10rem;
        z-index: 9999;
        background-color: rgba(50, 205, 50, 0);
        background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
    }
    .sidebar ul li{
        display: flex;
    }
    .sidebar p{
        height: 28rem;
        color: white !important;
        display: block;
    }
    .container{
        display: flex;
        margin-left: 0rem;
        align-items: center;
        justify-content: space-between;
    }
    .content{
        display: flex;
        flex-direction: column;
        margin-left: 1rem;
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 1rem;
    }
}
</style>
<body>  
    <!-- navbar -->
    
    <?php include "component/navbar.php" ?>
    
    <!-- container body -->
      <div class="container bg-tertiary mt-4">

        <!-- sidebar -->
        
        <?php include "component/sidebar.php" ?>

        <!-- content -->
          <div class="content container-fluid bg-danger-emphasis mt-3 mb-3">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Area Penugasan</th>
                    <th scope="col" class="foto-karyawan"> </th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($data_karyawan as $id => $data): ?>
                    <tr>
                      <th scope="row"><a href="karyawan-detail.php?id=<?=$id?>"><?= $data['email'] ?></a></th>
                      <td id="nama-karyawan"><?=$data['username']?></td>
                      <td id="area-karyawan"><?="Area ".$data['areaKaryawan']?></td>
                      <td id="foto-karyawan"><img src="img/<?= isset($data['gambar']) ? $data['gambar'] : "karyawan-1.jpg" ?>" alt="<?=$data['username']?>" class="budi-img">
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
          </div>
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