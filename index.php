<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>   
    <!-- navbar -->

      <?php include "view/component/navbar.php" ?>
    
    <!-- container body -->
      <div class="container bg-tertiary">

        <!-- sidebar -->
        <?php include "view/component/sidebar.php" ?>

        <!-- content -->
        <div class="content bg-danger-emphasis mt-3 mb-3">
              <div class="first">
                  <h2>Home</h2>
                  <div class="Mango bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[0]?>'">
                    <div class="fruit-img w-6"><img src="assets/img/kelengkeng.png" alt=""></div>
                    <div class="fruit-img"><img src="assets/img/kelengkeng.png" alt=""></div>
                    <div class="fruit-text" style="margin-top: 10px;">
                      <h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                        </svg>
                      </h2>
                      <p>Area1</p>
                    </div>
                  </div>
              </div>
              <div class="contentB rounded-3">
                <div class="Orange bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[1]?>'">
                        <div class="fruit-img"><img src="assets/img/kelengkeng.png" alt=""></div>
                        <div class="fruit-text">
                            <label id="orange-waterlevel">
                                <h2 style="display: flex;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                        <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                    </svg>
                                </h2>
                            </label>
                            <p style="margin-left: 46px;">Area 1</p>
                        </div>
                    </div>
                    <!-- anggur -->
                    <div class="grape bg-light rounded-2" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[2]?>'">
                        <div class="fruit-img"><img src="assets/img/kelengkeng.png" alt=""></div>
                        <div class="fruit-text">
                          <label id="grape-waterlevel">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                  <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                </svg>
                              </h2>
                          </label>  
                        <p>Area 1</p>
                        </div>
                      </div>
              </div>
                <div class="tomato bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[3]?>'">
                    <div class="fruit-img"><img src="assets/img/kelengkeng.png" alt=""></div>
                    <div class="fruit-text" style="margin-top: 10px;" >
                        <label id="tomato-waterlevel">
                            <h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                                <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                                </svg>
                            </h2>
                        </label>
                    <p>Area 1</p>
                    </div>
                </div>
              <div class="avocado bg-light rounded-3" onclick="window.location.href='detail-tanaman.php?id=<?=$id_tanaman[4]?>'">
                <div class="fruit-img"><img src="assets/img/kelengkeng.png" alt=""></div>
                <div class="fruit-text" style="margin-top: 10px;">
                    <label id="avocado-waterlevel">
                        <h2>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="blue" class="bi bi-droplet" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0q.164.544.371 1.038c.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8m.413 1.021A31 31 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
                            <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87z"/>
                            </svg>
                        </h2>
                    </label>
                  <p>Area 1</p>
                </div>
              </div>
          </div>
      </center>
    </div>
    <script src="assets/js/index.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>