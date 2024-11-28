<?php 

include "functions.php";

$id_tanaman = getSingleColumn('tanaman','id');

$activePage = "panen";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panen</title>
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
.mango{
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
}
.mango:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.mango .mango-img img{
    width: 80%;
}
.mango .mango-text{
    align-items: center;
    justify-content: center;
}
.mango .mango-text ul li{
    margin-left: -16px; 
    font-size: larger;
}
.tomato{
    width: 12rem;
    height: 28rem;
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom, #fd8383, #F35555) 1;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    align-items: center;
    justify-content: center;
    text-align: center;
    display: flex;
    flex-direction: column;
}
.tomato:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.tomato .tomato-img img{
    width: 50%;
}
.tomato .tomato-text{
    align-items: center;
    justify-content: center;
}
.tomato .tomato-text ul li{
    align-items: center;
    justify-content: center;
}
.avocado{
    width: 12rem;
    height: 28rem;
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
.avocado .avocado-img img{
    width: 50%;
}
.avocado .avocado-text{
    align-items: center;
    justify-content: center;
}
.avocado .avocado-text ul li{
    align-items: center;
    justify-content: center;
    font-weight: larger;
}
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
.contentB > .orange{
    display: flex;
    flex-direction: column;
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom, #3FBCFF, #0077B6) 1;
    padding-top: 12%;
    padding-right: 10%;
    align-items: center;
    text-align: center;
    gap: -2rem;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.orange:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.contentB .orange .orange-img img{
    width: 36%;
}
.contentB .orange .orange-text{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
.contentB .orange .orange-text ul li{
    align-items: center;
    justify-content: center;
}
.contentB > .grape{
    display: flex;
    flex-direction: column;
    border-right: .6rem solid;
    border-image: linear-gradient(to bottom, #9970e4, #584085) 1;
    padding-top: 12%;
    padding-right: 10%;
    align-items: center;
    text-align: center;
    gap: 4rem;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.grape:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.contentB .grape .grape-img img{
    width: 36%;
}
.contentB .grape .grape-text{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: -46%;
}
.contentB .grape .grape-text ul li{
    text-align: end;
}


@media only screen and (max-width: 1200px){
    
    .Sidebar{
        height: 28rem;
        margin-top: -10rem;
        z-index: 9999;
        background-color: rgba(50, 205, 50, 0);
        background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
        position: fixed;
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
    .content .first h6{
        font-weight: bolder;
    }
    .mango {
        padding: 10px;
        display: flex;
        flex-direction: row;
        width: 18rem;
        height: 7rem;
        border-right: .6rem solid;
        border-image: linear-gradient(to bottom, #FAB02F, #D28908) 1;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
    }
    .mango:hover {
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .mango .mango-img img {
        width: 74px;
    }
    .mango .mango-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .mango-text h6 svg {
        width: 40px;
    }
    .mango-text h6 {
        display: flex;
        width: 100px;
        font-weight: normal !important;
    } 
    .mango-text ul li p{
        text-align: end;
        width: 120px;
        margin-left: -16px;
        font-size: smaller;
    } 
    .tomato {
        padding: 10px;
        display: flex;
        flex-direction: row;
        width: 18rem;
        height: 7rem;
        border-right: .6rem solid;
        border-image: linear-gradient(to bottom, #fd8383, #F35555) 1;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
    }
    .tomato:hover {
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .tomato .tomato-img img {
        width: 74px;
    }
    .tomato .tomato-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .tomato-text h6 svg {
        width: 40px;
    }
    .tomato-text h6 {
        display: flex;
        width: 100px;
    }
    .avocado {
        padding: 10px;
        display: flex;
        flex-direction: row;
        width: 18rem;
        height: 7rem;
        border-right: .6rem solid;
        border-image: linear-gradient(to bottom, #FAB02F, #D28908) 1;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        align-items: center;
        justify-content: space-around;
        text-align: center;
    }
    .avocado:hover {
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .avocado .avocado-img img {
        width: 74px;
    }
    .avocado .avocado-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .avocado-text h6 svg {
        width: 40px;
    }
    .avocado-text h6 {
        display: flex;
        width: 100px;
    }
    .contentB{
        display: flex;
        flex-direction: column;
        gap: 1rem;
        height: auto;
        margin-left: -3rem;
    }
    .contentB > .orange{
        padding: 10px;
        display: flex;
        flex-direction: column;
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
    }
    .orange:hover{
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .contentB .orange .orange-img img{
        width: 74px;
    }
    .contentB .orange .orange-text{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .contentB .orange .orange-text h6{
        width: 100px;
    }
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
    }
    .grape:hover{
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .contentB .grape .grape-img img{
        width: 74px;
    }
    .contentB .grape .grape-text{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
        padding-top: 100px;
        margin-left: -64px;
    }
    .contentB .grape .grape-text h6{
        display: flex;
        text-align: end;
        align-items: end;
        align-content: end;
    }
    .contentB .grape .grape-text h6{
        width: 100px;
        text-align: center;
    }
    .contentB .grape .grape-text p{
        display: flex;
        width: 120px;
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
        <center>
          <div class="content container-fluid bg-danger-emphasis mt-3 mb-3">
              <div class="first">
                  <h2>Panen</h2>
                  <div class="mango bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[0]?>'">
                  <div class="mango-img"><img src="img/mango.png" alt=""></div>
                  <div class="mango-text">
                    <h6>
                      Dapat dipanen pada
                    </h6>
                    <ul style="display: flex;list-style: none; justify-content: space-between;">
                      <li>
                        <p id="mango-panen">DD-MM-'YY</p>
                      </li>
                    </ul>
                  </div>
                  </div>
              </div>
              <div class="contentB rounded-3">
                  <div class="orange bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[1]?>'">
                    <div class="orange-img"><img src="img/orange.png" alt=""></div>
                    <div class="orange-text">
                      <h6>
                        Dapat dipanen pada
                      </h6>
                      <ul style="display: flex;list-style: none; justify-content: space-between;">
                        <li>
                          <p id="orange-panen">DD-MM-'YY</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="grape bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[2]?>'">
                    <div class="grape-img"><img src="img/grape.png" alt=""></div>
                    <div class="grape-text">
                      <h6>
                        Dapat dipanen pada
                      </h6>
                      <ul style="display: flex;list-style: none; justify-content: space-between;">
                        <li>
                          <p id="grape-panen">DD-MM-'YY</p>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
              <div class="tomato bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[3]?>'">
                <div class="tomato-img"><img src="img/tomato.png" alt=""></div>
                <div class="tomato-text">
                  <h6>
                    Dapat dipanen pada
                  </h6>
                  <ul style="display: flex;list-style: none; justify-content: space-between;">
                    <li>
                      <p id="tomato-panen">DD-MM-'YY</p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="avocado bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[4]?>'">
                <div class="avocado-img"><img src="img/avocado.png" alt=""></div>
                <div class="avocado-text">
                  <h6>
                    Dapat dipanen pada
                  </h6>
                  <ul style="display: flex;list-style: none; justify-content: space-between;">
                    <li>
                      <p id="avocado-panen">DD-MM-'YY</p>
                    </li>
                  </ul>
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