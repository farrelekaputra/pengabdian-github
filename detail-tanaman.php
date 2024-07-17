<?php 

include "functions.php";

$id = $_GET['id'];

$data_tanaman = getSingleRow("tanaman","$id");

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
    overflow-x: hidden;,
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
    justify-content: space-around;
    gap: 2rem;
    background-color: white;
    padding: 3%;
    margin-top: 2%;
    border-radius: 8px;
}
.top-content{
    width: 50%;
}
img{
    padding: 1rem;
    border-radius: 5% !important;
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
.mango-pemupukan{
    width: 150%;
}
.mango-kelembapan{
    width: 150%;
}
.mango-kelembapan p{
    margin-left: 10px;
}
.mango-panen{
    width: 150%;
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
}
</style>
<body>   
    <!-- navbar -->
    
    <?php include "component/navbar.php" ?>
    
    <!-- container body -->
      <div class="container bg-tertiary">
        <!-- content -->
        <div class="content">
            <div class="top-content d-flex">
                <div class="top-left">
                    <header>
                        <h1><?=$data_tanaman['nama']?></h1>
                        <!-- Mangifera indica -->
                        <div class="rounded">
                            <img src="img/<?=$data_tanaman['gambar']?>" alt="<?=$data_tanaman['gambar']?>" width="60%">
                        </div>
                    </header>
                </div>
                <div class="top-right">
                    <div class="status">
                        <header>
                            <h2 class="h2" style="margin-bottom: 20px !important;">Status</h2>
                        <div class="mango-kelembapan d-flex" id="mango-kelembapan">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                    <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                  </svg>
                            </div>
                            <p>Kelembapan Tanah <label for="mango-kelembapan" id="mango-kelembapan-mangga"><?=$data_tanaman['kelembapan']?>%</label></p>
                        </div>
                        <div class="mango-pemupukan d-flex" id="mango-pemupukan">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-right: 10px;">
                                    <path fill="orange" d="M23 4.1V2.3l-1.8-.2c-.1 0-.7-.1-1.7-.1c-4.1 0-7.1 1.2-8.8 3.3C9.4 4.5 7.6 4 5.5 4c-1 0-1.7.1-1.7.1l-1.9.3l.1 1.7c.1 3 1.6 8.7 6.8 8.7H9v3.4c-3.8.5-7 1.8-7 1.8v2h20v-2s-3.2-1.3-7-1.8V15c6.3-.1 8-7.2 8-10.9M12 18h-1v-5.6S10.8 9 8 9c0 0 1.5.8 1.9 3.7c-.4.1-.8.1-1.1.1C4.2 12.8 4 6.1 4 6.1S4.6 6 5.5 6c1.9 0 5 .4 5.9 3.1C11.9 4.6 17 4 19.5 4c.9 0 1.5.1 1.5.1s0 9-6.3 9H14c0-2 2-5 2-5c-3 1-3 4.9-3 4.9v5z" />
                                </svg>
                            </div>
                            <p>Status pemupukan <label for="mango-pemupukan" id="mango-pemupukan-mangga">30%</label></p>
                        </div>
                        <div class="mango-panen d-flex" id="mango-panen">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" height="28" viewBox="0 0 20 20">
                                    <path fill="grey" d="M5.673 0a.7.7 0 0 1 .7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699M1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756zm5.267 6.877v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zm-8.333-3.977v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0z"/>
                                </svg>
                            </div>
                            <p> Tanggal panen <label for="date" id="tanggal-mango-panen">dd-mm-yyyy</label></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-content">
                <p>
                <?=$data_tanaman['dekskripsi']?>
                </p>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>