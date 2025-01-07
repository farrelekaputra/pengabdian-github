<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.tailwindcss.com"></script>

<style>
  .Sidebar{
    background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
  }
@media only screen and (max-width: 1200px){
    .Sidebar{
        width: 60px !important;
        background-color: rgba(50, 205, 50, 0);
        background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
        position: fixed;
    }
    label{
      font-size:0;
    }
    .sidebar ul li{
      display: flex;
    }
    .icon{
      margin-left:-20px !important;
      scale:1.3;
    }
}
</style>
<div class="Sidebar d-flex flex-col w-48 h-dvh left-0 p-6 pt-10">
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="Home nav-link fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="home") ?: "" ?>">
                  <div class="icon"><i class="bi bi-house-door text-white"></i></div>
                  <label for="labelHome" class="ps-2 text-light font-normal">Home</label>
                </a>
            </li>           
            <li>
                <a href="karyawan.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="karyawan") ?: "" ?> ">
                  <div class="icon font-s"><i class="bi bi-person text-white
                  "></i></div>
                  <label for="labelHome" class="ps-2 text-light font-normal">Karyawan</label>
                </a>
            </li>
            <li>
                <a href="monitoring.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="monitoring") ?: "" ?> ">
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.5 15a4.5 4.5 0 0 0-4.5 4.5m4.5-8.5a4.5 4.5 0 0 0-4.5 4.5M16.5 7a4.5 4.5 0 0 0-4.5 4.5M8 15c2.21 0 4 2.015 4 4.5M8 11c2.21 0 4 2.015 4 4.5M8 7c2.21 0 4 2.015 4 4.5M12 4v6" />
                    </svg>
                  </div>
                  <label for="labelHome" class="ps-2 text-light font-normal">Monitoring</label>
                </a>
            </li>
            <li>
                <a href="panen.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="panen") ?: "" ?> ">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="none" stroke="#ffffff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.5 15a4.5 4.5 0 0 0-4.5 4.5m4.5-8.5a4.5 4.5 0 0 0-4.5 4.5M16.5 7a4.5 4.5 0 0 0-4.5 4.5M8 15c2.21 0 4 2.015 4 4.5M8 11c2.21 0 4 2.015 4 4.5M8 7c2.21 0 4 2.015 4 4.5M12 4v6" />
                  </svg>
                </div>
                <label for="labelHome" class="ps-2 text-light font-normal">Panen</label>
                </a>
            </li>
            <li>
            <a href="../karyawan/#" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex;">
              <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                      <path fill="#ffffff" d="M13.5 8H12v5l4.28 2.54l.72-1.21l-3.5-2.08zM13 3a9 9 0 0 0-9 9H1l3.96 4.03L9 12H6a7 7 0 0 1 7-7a7 7 0 0 1 7 7a7 7 0 0 1-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42A8.9 8.9 0 0 0 13 21a9 9 0 0 0 9-9a9 9 0 0 0-9-9" />
                  </svg>
              </div>
              <label for="labelHome" class="ps-2 text-light font-normal">Riwayat</label>
            </a>
            </li>
            </ul>
</div>