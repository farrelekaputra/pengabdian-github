<?php 

include "functions.php";
session_start();

$data_tanaman = getDataTanaman($_SESSION['token'], "Loki");

$id_tanaman = getSingleColumn('tanaman','id');
$kelembapan_tanaman = getSingleColumn('tanaman','kelembapan');

$activePage = "home";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  html{
    background-color: rgba(224,224,224);
    /* overflow-x: hidden; */
}
body {
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: rgba(224,224,224); 
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
    align-items: center;
    justify-content: space-between;
}
.content{
    margin-left: 3rem;
    display: flex;
    align-items: center;
    justify-content: space-around;
    gap: 2rem;
}
.content > .first{
    display: flex;
    flex-direction: column;
    gap: .5rem;
}
.Mango{
    padding: 2rem;
    width: 12rem;
    height: 25rem;
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom, #FAB02F, #D28908) 1;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    align-items: center;
    justify-content: center;
    justify-items: center;
    justify-self: center;
    text-align: center;
    display: flex;
    flex-direction: column;
    cursor: pointer;
}
.Mango:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.fruit-img img{
    width: 80%;
}
/* .Mango .Atext{
    align-items: center;
    justify-content: center;
}
.Mango .Atext p{
    text-align: end;
} */
.tomato{
    width: 12rem;
    height: 28rem;
    /* background-color: rgb(13,110,253); */
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom, #fd8383, #F35555) 1;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    align-items: center;
    justify-content: center;
    text-align: center;
    display: flex;
    flex-direction: column;
    cursor:pointer;
}
.tomato:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.fruit-img img{
    width: 50%;
}
/* .tomato .tomato-text{
    align-items: center;
    justify-content: center;
}
.tomato .tomato-text p{
    text-align: end;
} */
.avocado{
    width: 12rem;
    height: 28rem;
    /* background-color: rgb(13,110,253); */
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom, #9EC74D, #80A92D) 1;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    align-items: center;
    justify-content: center;
    text-align: center;
    display: flex;
    flex-direction: column;
}
.avocado:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.fruit-img img{
    width: 50%;
}
/* .avocado .Dtext{
    align-items: center;
    justify-content: center;
}
.avocado .Dtext p{
    text-align: end;
} */
.contentB{
    display: flex;
    flex-direction: column;
    width: 16rem;
    height: 28rem;
    justify-content: center;
    gap: 1.8rem;
    /* background-color: white; */
}
.contentB div{
    height: 13rem;
}
.contentB > .Orange{
    display: flex;
    flex-direction: column;
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom,#FAB02F, #D28908) 1;
    padding-top: 5%;
    padding-right: 10%;
    align-items: center;
    text-align: center;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    cursor: pointer;
}
.Orange:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.fruit-img img{
    width: 36%;
}
/* .contentB .Orange .Orangetext{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 0px;
}
.contentB .Orange .Orangetext p{
    text-align: end;
    margin-left: 20px;
} */
.contentB > .grape{
    display: flex;
    flex-direction: column;
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom, #9970e4, #584085) 1;
    padding-top: 12%;
    padding-right: 10%;
    align-items: center;
    text-align: center;
    gap: 2rem;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    cursor: pointer;
}
.grape:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.fruit-img img{
    width: 36%;
}
.fruit-text{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: -30%;
}
 .fruit-text p{
    text-align: end;
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
        margin-left: 3.6rem;
        display: flex;
        align-items: center;
        justify-content: space-around;
        gap: 1rem;
    }
    .content > .first{
        display: flex;
        flex-direction: column;
        gap: .5rem;
        text-align: start;
    }
    .content .first h2{
        font-weight: bolder;
    }
    .Mango {
        padding: 10px;
        display: flex;
        flex-direction: row;
        width: 18rem;
        height: 7rem;
        border-right: .6rem solid;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
    }
    .Mango:hover {
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .fruit-img img {
        width: 74px;
    }
    /* .Mango .Atext {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .Atext h2 svg {
        width: 40px;
    }
    .Atext h2 {
        display: flex;
    }   */
    .tomato {
        padding: 10px;
        display: flex;
        flex-direction: row;
        width: 18rem;
        height: 7rem;
        border-right: .6rem solid;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
    }
    .tomato:hover {
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .tomato .fruit-img img {
        width: 74px;
    }
    /* .tomato .tomato-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .tomato-text h2 svg {
        width: 40px;
    }
    .tomato-text h2 {
        display: flex;
    } */
    .avocado {
        padding: 10px;
        display: flex;
        flex-direction: row;
        width: 18rem;
        height: 7rem;
        border-right: .6rem solid;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
        cursor: pointer;
    }
    .avocado:hover {
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .fruit-img img {
        width: 74px;
    }
    /* .avocado .Dtext {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .Dtext h2 svg {
        width: 40px;
    }
    .Dtext h2 {
        display: flex;
    } */
    .contentB{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap: 1rem;
        height: auto;
        margin-left: -3rem;
    }
    .contentB > .Orange{
        padding: 10px;
        display: flex;
        flex-direction: row;
        width: 18rem;
        height: 7rem;
        flex-wrap: wrap;
        border-right: .6rem solid;
        border-image: linear-gradient(to bottom, #fd8383, #F35555) 1;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
        margin-left: 8px;
    }
    .Orange:hover{
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .fruit-img img{
        width: 74px;
    }
    .contentB .Orange .fruit-text{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        margin-top: -100px;
        color: #1e1e1e;
    }
    /* .contentB .Orange .Orangetext h2{
        display: flex;
    }
    .contentB .Orange .Orangetext h2 svg{
        width: 40px;
    }
    .contentB .Orange .Orangetext p{
        display: flex;
        width: 100px;
        margin-left: 50px;
    } */
    .contentB > .grape{
        padding: 10px;
        display: flex;
        flex-direction: column;
        gap: 60px;
        width: 18rem;
        height: 7rem;
        flex-wrap: wrap;
        border-right: .6rem solid;
        border-image: linear-gradient(to bottom, #fd8383, #F35555) 1;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
        margin-left: 7px;
        cursor: pointer;
    }
    .grape:hover{
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .fruit-img img{
        width: 74px;
    }
    .contentB .grape .fruit-text{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        margin-left: -60px;
        margin-top: 16px;
    }
    .contentB .grape .fruit-text h2{
        display: flex;
    }
    .contentB .grape .fruit-text h2 svg{
        width: 40px;
    }
    .contentB .grape .fruit-text p{
        display: flex;
        width: 100px;
        margin-left: 50px;
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
          <div class="content bg-danger-emphasis mt-3 mb-3">
              <div class="first">
                  <h2>Home</h2>
                  <div class="Mango bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[0]?>'">
                    <div class="fruit-img"><img src="img/mango.png" alt=""></div>
                    <div class="fruit-text" style="margin-top: 10px;">
                      <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                        </svg><?=$kelembapan_tanaman[0]?>%
                      </h2>
                      <p>Area1</p>
                    </div>
                  </div>
              </div>
              <div class="contentB rounded-3">
                <div class="Orange bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[1]?>'">
                        <div class="fruit-img"><img src="img/orange.png" alt=""></div>
                        <div class="fruit-text">
                            <label id="orange-waterlevel">
                                <h2 style="display: flex;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                    </svg>
                                    <?=$kelembapan_tanaman[1]?>%
                                </h2>
                            </label>
                            <p style="margin-left: 46px;">Area 1</p>
                        </div>
                    </div>
                    <!-- anggur -->
                    <div class="grape bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[2]?>'">
                        <div class="fruit-img"><img src="img/grape.png" alt=""></div>
                        <div class="fruit-text">
                          <label id="grape-waterlevel">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                </svg><?=$kelembapan_tanaman[2]?>%
                              </h2>
                          </label>  
                        <p>Area 1</p>
                        </div>
                      </div>
              </div>
                <div class="tomato bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[3]?>'">
                    <div class="fruit-img"><img src="img/tomato.png" alt=""></div>
                    <div class="fruit-text" style="margin-top: 10px;" >
                        <label id="tomato-waterlevel">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                </svg>
                                <?=$kelembapan_tanaman[3]?>%
                            </h2>
                        </label>
                    <p>Area 1</p>
                    </div>
                </div>
              <div class="avocado bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[4]?>'">
                <div class="fruit-img"><img src="img/avocado.png" alt=""></div>
                <div class="fruit-text" style="margin-top: 10px;">
                    <label id="avocado-waterlevel">
                        <h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                            </svg>
                            <?=$kelembapan_tanaman[4]?>%
                        </h2>
                    </label>
                  <p>Area 1</p>
                </div>
              </div>
          </div>
      </center>
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