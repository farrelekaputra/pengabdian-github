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
    cursor: pointer;
}
.mango:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.mango .fruit-img img{
    width: 80%;
}
.mango .fruit-text{
  width: 120%;
    align-items: center;
    justify-content: center;
}
.mango .fruit-text p{
    text-align: end;
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
    cursor: pointer;
}
.tomato:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.tomato .fruit-img img{
    width: 50%;
}
.tomato .fruit-text{
    align-items: center;
    justify-content: center;
}
.tomato .fruit-text p{
    text-align: end;
    width: 100px;
    margin-left: -16px;
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
    cursor: pointer;
}
.avocado:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.avocado .fruit-img img{
    width: 50%;
}
.avocado .fruit-text{
    align-items: center;
    justify-content: center;
}
.avocado .fruit-text p{
    text-align: end;
    width: 100px;
    margin-left: -16px;
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
    border-image: linear-gradient(to bottom, #9970e4, #584085) 1;
    padding-top: 12%;
    padding-right: 10%;
    align-items: center;
    text-align: center;
    gap: 4rem;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    cursor: pointer;
}
.orange:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.contentB .orange .fruit-img img{
    width: 36%;
}
.contentB .orange .fruit-text{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: -46%;
}
.contentB .orange .fruit-text p{
    text-align: end;
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
    cursor: pointer;
}
.grape:hover{
    box-shadow: #2125296c 2px 2px 2px 2px;
    transition: .3s;
}
.contentB .grape .fruit-img img{
    width: 36%;
}
.contentB .grape .fruit-text{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: -80px !important;
}
.contentB .grape .fruit-text p{
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
    .content .first h2{
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
    .mango .fruit-img img {
        width: 74px;
    }
    .mango .fruit-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .fruit-text h2 svg {
        width: 40px;
    }
    .fruit-text h2 {
        display: flex;
    } 
    .fruit-text p{
        text-align: end;
    width: 100px;
    margin-left: -16px;
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
    .tomato .fruit-img img {
        width: 74px;
    }
    .tomato .fruit-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .fruit-text h2 svg {
        width: 40px;
    }
    .fruit-text h2 {
        display: flex;
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
    .avocado .fruit-img img {
        width: 74px;
    }
    .avocado .fruit-text {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
    }
    .fruit-text h2 svg {
        width: 40px;
    }
    .fruit-text h2 {
        display: flex;
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
        margin-left: 10px;
    }
    .orange:hover{
        box-shadow: #2125296c 2px 2px 2px 2px;
        transition: .3s;
    }
    .contentB .orange .fruit-img img{
        width: 74px;
        margin-left: -35px;
    }
    .contentB .orange .fruit-text{
        display: flex;
        width: 60px;
        margin-left: -75px;
        margin-top: 12px;
    }
    .contentB .orange .fruit-text h2{
        display: flex;
    }
    .contentB .orange .fruit-text h2 svg{
        width: 40px;
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
    .contentB .grape .fruit-img img{
        width: 74px;
    }
    .contentB .grape .fruit-text{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: larger;
        padding-top: 10px;
        padding-top: 100px;
        margin-left: -64px;
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
                  <h2>Monitoring</h2>
                  <div class="mango bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[0]?>'">
                  <div class="fruit-img"><img src="img/mango.png" alt=""></div>
                  <div class="fruit-text">
                    <label id="mango-pemupukan">
                      <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-right: 10px;">
                          <path fill="orange" d="M23 4.1V2.3l-1.8-.2c-.1 0-.7-.1-1.7-.1c-4.1 0-7.1 1.2-8.8 3.3C9.4 4.5 7.6 4 5.5 4c-1 0-1.7.1-1.7.1l-1.9.3l.1 1.7c.1 3 1.6 8.7 6.8 8.7H9v3.4c-3.8.5-7 1.8-7 1.8v2h20v-2s-3.2-1.3-7-1.8V15c6.3-.1 8-7.2 8-10.9M12 18h-1v-5.6S10.8 9 8 9c0 0 1.5.8 1.9 3.7c-.4.1-.8.1-1.1.1C4.2 12.8 4 6.1 4 6.1S4.6 6 5.5 6c1.9 0 5 .4 5.9 3.1C11.9 4.6 17 4 19.5 4c.9 0 1.5.1 1.5.1s0 9-6.3 9H14c0-2 2-5 2-5c-3 1-3 4.9-3 4.9v5z" />
                        </svg>
                        Baik
                      </h2>
                    </label>
                    <ul style="display: flex;list-style: none; justify-content: space-between;">
                      <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                          <g fill="none" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path fill="#636363" d="M15 8.824C15 11.455 13 12 12 12s-3-.545-3-3.176C9 6.192 12 3 12 3s3 3.192 3 5.824" />
                            <path d="m3 15l.872.697a2.33 2.33 0 0 0 3.102-.171v0a2.33 2.33 0 0 1 3.164-.122l.18.154c.968.83 2.396.83 3.364 0l.18-.154a2.33 2.33 0 0 1 3.164.121v0a2.33 2.33 0 0 0 3.102.172L21 15m-.5 4l-.442.442c-.86.86-2.255.86-3.116 0v0a2.203 2.203 0 0 0-2.99-.114l-.27.23c-.968.83-2.396.83-3.364 0l-.27-.23a2.203 2.203 0 0 0-2.99.114v0c-.86.86-2.255.86-3.116 0L3.5 19" />
                          </g>
                        </svg>
                      </li>
                    </ul>
                  </div>
                  </div>
              </div>
              <div class="contentB rounded-3">
                  <div class="orange bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[1]?>'">
                    <div class="fruit-img"><img src="img/orange.png" alt=""></div>
                    <div class="fruit-text">
                      <h2 style="display: flex;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-right: 10px;">
                          <path fill="orange" d="M23 4.1V2.3l-1.8-.2c-.1 0-.7-.1-1.7-.1c-4.1 0-7.1 1.2-8.8 3.3C9.4 4.5 7.6 4 5.5 4c-1 0-1.7.1-1.7.1l-1.9.3l.1 1.7c.1 3 1.6 8.7 6.8 8.7H9v3.4c-3.8.5-7 1.8-7 1.8v2h20v-2s-3.2-1.3-7-1.8V15c6.3-.1 8-7.2 8-10.9M12 18h-1v-5.6S10.8 9 8 9c0 0 1.5.8 1.9 3.7c-.4.1-.8.1-1.1.1C4.2 12.8 4 6.1 4 6.1S4.6 6 5.5 6c1.9 0 5 .4 5.9 3.1C11.9 4.6 17 4 19.5 4c.9 0 1.5.1 1.5.1s0 9-6.3 9H14c0-2 2-5 2-5c-3 1-3 4.9-3 4.9v5z" />
                        </svg>
                        Kurang
                      </h2>
                      <ul style="display: flex;list-style: none; justify-content: center; margin-left: -40px;">
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <g fill="none" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                              <path fill="#636363" d="M15 8.824C15 11.455 13 12 12 12s-3-.545-3-3.176C9 6.192 12 3 12 3s3 3.192 3 5.824" />
                              <path d="m3 15l.872.697a2.33 2.33 0 0 0 3.102-.171v0a2.33 2.33 0 0 1 3.164-.122l.18.154c.968.83 2.396.83 3.364 0l.18-.154a2.33 2.33 0 0 1 3.164.121v0a2.33 2.33 0 0 0 3.102.172L21 15m-.5 4l-.442.442c-.86.86-2.255.86-3.116 0v0a2.203 2.203 0 0 0-2.99-.114l-.27.23c-.968.83-2.396.83-3.364 0l-.27-.23a2.203 2.203 0 0 0-2.99.114v0c-.86.86-2.255.86-3.116 0L3.5 19" />
                            </g>
                          </svg>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="grape bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[2]?>'">
                    <div class="fruit-img"><img src="img/grape.png" alt=""></div>
                    <div class="fruit-text">
                      <label id="grape-pemupukan">
                        <h2 style="display: flex;">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-right: 10px;">
                            <path fill="purple" d="M23 4.1V2.3l-1.8-.2c-.1 0-.7-.1-1.7-.1c-4.1 0-7.1 1.2-8.8 3.3C9.4 4.5 7.6 4 5.5 4c-1 0-1.7.1-1.7.1l-1.9.3l.1 1.7c.1 3 1.6 8.7 6.8 8.7H9v3.4c-3.8.5-7 1.8-7 1.8v2h20v-2s-3.2-1.3-7-1.8V15c6.3-.1 8-7.2 8-10.9M12 18h-1v-5.6S10.8 9 8 9c0 0 1.5.8 1.9 3.7c-.4.1-.8.1-1.1.1C4.2 12.8 4 6.1 4 6.1S4.6 6 5.5 6c1.9 0 5 .4 5.9 3.1C11.9 4.6 17 4 19.5 4c.9 0 1.5.1 1.5.1s0 9-6.3 9H14c0-2 2-5 2-5c-3 1-3 4.9-3 4.9v5z" />
                          </svg>
                          Cukup
                        </h2>
                      </label>
                      <ul style="display: flex;list-style: none; gap: 16px;">
                        <li>
                          <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                            <g fill="none" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                              <path fill="#636363" d="M15 8.824C15 11.455 13 12 12 12s-3-.545-3-3.176C9 6.192 12 3 12 3s3 3.192 3 5.824" />
                              <path d="m3 15l.872.697a2.33 2.33 0 0 0 3.102-.171v0a2.33 2.33 0 0 1 3.164-.122l.18.154c.968.83 2.396.83 3.364 0l.18-.154a2.33 2.33 0 0 1 3.164.121v0a2.33 2.33 0 0 0 3.102.172L21 15m-.5 4l-.442.442c-.86.86-2.255.86-3.116 0v0a2.203 2.203 0 0 0-2.99-.114l-.27.23c-.968.83-2.396.83-3.364 0l-.27-.23a2.203 2.203 0 0 0-2.99.114v0c-.86.86-2.255.86-3.116 0L3.5 19" />
                            </g>
                          </svg>
                        </li>
                        <li>
                        </li>
                      </ul>
                    </div>
                  </div>
              </div>
              <div class="tomato bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[3]?>'">
                <div class="fruit-img"><img src="img/tomato.png" alt=""></div>
                <div class="fruit-text">
                  <label id="tomato-pemupukan">
                    <h2>
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-right: 10px;">
                        <path fill="red" d="M23 4.1V2.3l-1.8-.2c-.1 0-.7-.1-1.7-.1c-4.1 0-7.1 1.2-8.8 3.3C9.4 4.5 7.6 4 5.5 4c-1 0-1.7.1-1.7.1l-1.9.3l.1 1.7c.1 3 1.6 8.7 6.8 8.7H9v3.4c-3.8.5-7 1.8-7 1.8v2h20v-2s-3.2-1.3-7-1.8V15c6.3-.1 8-7.2 8-10.9M12 18h-1v-5.6S10.8 9 8 9c0 0 1.5.8 1.9 3.7c-.4.1-.8.1-1.1.1C4.2 12.8 4 6.1 4 6.1S4.6 6 5.5 6c1.9 0 5 .4 5.9 3.1C11.9 4.6 17 4 19.5 4c.9 0 1.5.1 1.5.1s0 9-6.3 9H14c0-2 2-5 2-5c-3 1-3 4.9-3 4.9v5z" />
                      </svg>
                      Cukup
                    </h2>
                  </label>
                  <ul style="display: flex;list-style: none; justify-content: space-between;">
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <g fill="none" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                          <path fill="#636363" d="M15 8.824C15 11.455 13 12 12 12s-3-.545-3-3.176C9 6.192 12 3 12 3s3 3.192 3 5.824" />
                          <path d="m3 15l.872.697a2.33 2.33 0 0 0 3.102-.171v0a2.33 2.33 0 0 1 3.164-.122l.18.154c.968.83 2.396.83 3.364 0l.18-.154a2.33 2.33 0 0 1 3.164.121v0a2.33 2.33 0 0 0 3.102.172L21 15m-.5 4l-.442.442c-.86.86-2.255.86-3.116 0v0a2.203 2.203 0 0 0-2.99-.114l-.27.23c-.968.83-2.396.83-3.364 0l-.27-.23a2.203 2.203 0 0 0-2.99.114v0c-.86.86-2.255.86-3.116 0L3.5 19" />
                        </g>
                      </svg>
                    </li>
                    <li>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="avocado bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[4]?>'">
                <div class="fruit-img"><img src="img/avocado.png" alt=""></div>
                <div class="fruit-text">
                  <label id="avocado-pemupukan">
                    <h2>
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" style="margin-right: 10px;">
                        <path fill="green" d="M23 4.1V2.3l-1.8-.2c-.1 0-.7-.1-1.7-.1c-4.1 0-7.1 1.2-8.8 3.3C9.4 4.5 7.6 4 5.5 4c-1 0-1.7.1-1.7.1l-1.9.3l.1 1.7c.1 3 1.6 8.7 6.8 8.7H9v3.4c-3.8.5-7 1.8-7 1.8v2h20v-2s-3.2-1.3-7-1.8V15c6.3-.1 8-7.2 8-10.9M12 18h-1v-5.6S10.8 9 8 9c0 0 1.5.8 1.9 3.7c-.4.1-.8.1-1.1.1C4.2 12.8 4 6.1 4 6.1S4.6 6 5.5 6c1.9 0 5 .4 5.9 3.1C11.9 4.6 17 4 19.5 4c.9 0 1.5.1 1.5.1s0 9-6.3 9H14c0-2 2-5 2-5c-3 1-3 4.9-3 4.9v5z" />
                      </svg>
                      Cukup
                    </h2>
                  </label>
                  <ul style="display: flex;list-style: none; justify-content: space-between;">
                    <li>
                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24">
                        <g fill="none" stroke="#636363" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                          <path fill="#636363" d="M15 8.824C15 11.455 13 12 12 12s-3-.545-3-3.176C9 6.192 12 3 12 3s3 3.192 3 5.824" />
                          <path d="m3 15l.872.697a2.33 2.33 0 0 0 3.102-.171v0a2.33 2.33 0 0 1 3.164-.122l.18.154c.968.83 2.396.83 3.364 0l.18-.154a2.33 2.33 0 0 1 3.164.121v0a2.33 2.33 0 0 0 3.102.172L21 15m-.5 4l-.442.442c-.86.86-2.255.86-3.116 0v0a2.203 2.203 0 0 0-2.99-.114l-.27.23c-.968.83-2.396.83-3.364 0l-.27-.23a2.203 2.203 0 0 0-2.99.114v0c-.86.86-2.255.86-3.116 0L3.5 19" />
                        </g>
                      </svg>
                    </li>
                    <li>
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