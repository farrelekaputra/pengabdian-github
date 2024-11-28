<?php 

if(isset($_POST['masuk'])){    
    var_dump($_POST);
    die();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');
.html{
        background-color: white;
        font-family: "Jost", sans-serif;
    }
.bg img{
        margin-top: -8rem;
        position: fixed;
        z-index: -10;
        background-size: 100%;
        opacity: 0.7;
        background-attachment: fixed;
        width: 100vw;
    }
.container{
        display: flex;
        justify-content: center;
        margin-top: 8rem;
        width: min-content;
    }
.left{
        display: flex;
        flex-direction: column;
        background: rgb(22,48,32);
        background: linear-gradient(180deg, rgba(22,48,32,1) 0%, rgba(66,115,66,1) 100%);
    }
.right{
        display: flex;
        flex-direction: column;
        background-color: rgba(255, 255, 255, 0.644);
        justify-content: space-around;
        border-right: .5rem solid rgba(66,115,66,1);
    }
label{
        display: flex;
        flex-direction: column;
    }
label input{
        border-radius: 10rem;
    }
button{
        width: 6rem;
        cursor: pointer;
    }
button:hover{
    background-color: orange !important;
    transition: .3s;
}
    @media only screen and (max-width: 1200px){
        .container{
            margin-top: 120px ;
            display: flex;
            flex-direction: column-reverse;
        }
        .left{
            height: auto;
            border-top-right-radius: 0px !important;
            border-top-left-radius : 0px !important;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 20px !important;
        }
        .right{
            height: 160px;
            border-top-right-radius: 0px !important;
            border-top-left-radius : 20px !important;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;

        }
        .right label{
            text-align: center;
            justify-content: center;
        }
    }
</style>
<body>
    <div class="bg"><img src="img/background.jpg" alt=""></div>
    <div class="container" id="container">
        <div class="left p-2 px-5 rounded-start-4">
        <form action="" method="post">
            <label for="login" class="fs-2 pb-3 text-light">Masuk</label>
            <div class="Id pb-2" id="Id">
                <label for="IdKaryawan" class="pb-1 text-light">Email</label>
                <input type="Masukkan ID Karyawan" id="email" class="rounded-1 border-0">
            </div>
            <div class="Code pb-3" id="Code">
                <label for="CodeKaryawan" class="pb-1 text-light">Password</label>
                <input type="Masukkan Kode Karyawan" id="password" class="rounded-1 border-0">
            </div>
            <button id="masuk" class="btn btn-warning mx-auto mb-3 text-light fw-bolder">Masuk</button>
            </form>
        </div>
        <div class="right px-5 rounded-end-4">
            <div class="upText">
                <label for="" class="fs-2 mx-auto">SMFarming</label>
                <label for="" class="fs-6 mx-auto">Sistem Smart Farming</label>
            </div>
            <div class="bottomText fs-4">
                <label for="" class="text-center">Agro Purwosari Semarang</label>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>