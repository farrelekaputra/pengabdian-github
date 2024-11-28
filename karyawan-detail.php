<?php 

include "functions.php";

$id = $_GET['id'];

$data_karyawan = getSingleRow("users","$id");

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
    overflow-x: hidden;
}
body {
    font-family: var(--bs-font-sans-serif);
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: rgba(224,224,224); 
}
.container{
    display: flex;
    margin: auto;
    align-items: center;
    justify-content: center;
}
.content{
    margin: auto;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    justify-content: space-around;
    gap: 2rem;
    background-color: white;
    padding: 3%;
    margin-top: 2%;
    border-radius: 8px;
    height: 75dvh;
}
.top-content{
    width: 60%;
}
img{
    padding: 1rem;
    border-radius: 100% !important;
    border: .5rem solid #FAB02F;
    color: #fff;
    /* border-image: linear-gradient(to bottom, #FAB02F, #D28908) 1; */
}
.status div p{
    font-size: larger;
}
.status div p label{
    font-weight: bolder;
}
.area-karyawan{
    width: 70%;
}
.mango-kelembapan{
    width: 90%;
}
.mango-kelembapan p{
    margin-left: 10px;
}
.mango-panen{
    width: 100%;
}
.mango-panen p{
    margin-left: 10px;
}
.bottom-content{
    width: 90%;
}
.bottom-content p{
    text-align: justify;
    font-size: larger;
}
@media only screen and (max-width: 1200px){
    .container{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .content{
        margin: auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-around;
        gap: 2rem;
        background-color: white;
        padding: 3%;
        margin-top: 2%;
        border-radius: 8px;
        height: auto;
    }
    .top-content{
        flex-direction: column;
    }
    .top-content div header h1{
        display: flex;
        margin: auto;
    }
    .top-content .top-left{
        margin-bottom: 20px;
    }
    img{
        width: 80%;
        margin-top: 10px;
    }
    p{
        font-size:medium !important;
    }
    .area-karyawan p{
        margin-left: 5%;
    }
}
</style>
<body>   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgba(224,224,224);">
        <div class="container-fluid mt-n2 p-2" style="
          background-color: rgba(50, 205, 50, 0);
          background-image: linear-gradient(to bottom, rgb(61, 117, 61), #2b5339); 
          margin-top: -8px; 
          margin-bottom: -8px;"
        >
            <div class="menu me-4" style="cursor:pointer">
                <a href="karyawan.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24">
                        <path fill="#fff" d="m4 10l-.707.707L2.586 10l.707-.707zm17 8a1 1 0 1 1-2 0zM8.293 15.707l-5-5l1.414-1.414l5 5zm-5-6.414l5-5l1.414 1.414l-5 5zM4 9h10v2H4zm17 7v2h-2v-2zm-7-7a7 7 0 0 1 7 7h-2a5 5 0 0 0-5-5z" />
                    </svg>
                </a>
            </div>
            <a class="navbar-brand text-light fw-bolder" href="index.php">SMFarming 
              <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                <path fill="#fff" d="m10.55 16.55l4.875-4.325l-.275-.8l-3.6-.35l2.325-3.25l-.4-.425L8.6 11.75l.275.8l3.6.35l-2.35 3.225zM12 20q-1.4 0-2.637-.437T7.1 18.325l-2.1 2.1L3.575 19l2.1-2.1q-.8-1.025-1.237-2.262T4 12q0-3.35 2.325-5.675T12 4h8v8q0 3.35-2.325 5.675T12 20" />
              </svg>
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
              <button class="btn bg-warning text-light fw-bolder" type="submit">Keluar</button>
          </div>
        </div>
      </nav>
    
    <!-- container body -->
      <div class="container bg-tertiary">
        <!-- content -->
        <div class="content">
            <div class="top-content d-flex">
                <div class="top-left">
                    <header>
                        <h1>Detail Karyawan</h1>
                        <!-- Mangifera indica -->
                        <div class="rounded">
                            <img src="img/karyawan-1.jpg" alt="<?=$data_karyawan['username']?>"  width="60%">
                        </div>
                    </header>
                </div>
                <div class="top-right">
                    <div class="status">
                        <header>
                            <h2 class="h2" style="margin-bottom: 20px !important;">ID : <label for="ID" id="id-karyawan"><?=$_GET['id']?></label></h2>
                        <div class="mango-kelembapan d-flex" id="mango-kelembapan">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 48 48">
                                    <g fill="none" stroke="#1e1e1e" stroke-linecap="round" stroke-linejoin="round" stroke-width="4">
                                        <circle cx="24" cy="11" r="7" />
                                        <path d="M4 41c0-8.837 8.059-16 18-16m9 17l10-10l-4-4l-10 10v4z" />
                                    </g>
                                </svg>
                            </div>
                            <p>Nama Karyawan<label for="karyawan-name" id="nama-karyawan"><?=$data_karyawan['username']?></label></p>
                        </div>
                        <div class="area-karyawan d-flex" id="area">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#1e1e1e" d="M3 3.75a.75.75 0 0 1 1.5 0v6.258l3.65-1.922a.75.75 0 0 1 .73.018l3.82 2.246l5.6-4.2a.75.75 0 0 1 1.2.6V19.5h.75a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75zm1.5 7.953V19.5H18V8.25l-4.8 3.6a.75.75 0 0 1-.83.046L8.48 9.609z" />
                                </svg>
                            </div>
                            <p>Area Tugas<label for="karyawan-area" id="area-karyawan"><?=$data_karyawan['areaKaryawan']?></label></p>
                        </div>
                        <div class="mango-panen d-flex" id="email">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                                    <path fill="#1e1e1e" d="M4 20q-.825 0-1.412-.587T2 18V6q0-.825.588-1.412T4 4h16q.825 0 1.413.588T22 6v12q0 .825-.587 1.413T20 20zm8-7L4 8v10h16V8zm0-2l8-5H4zM4 8V6v12z" />
                                </svg>
                            </div>
                            <p>Email Karyawan<label for="date" id="email-karyawan"><?=$data_karyawan['email']?></label></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>