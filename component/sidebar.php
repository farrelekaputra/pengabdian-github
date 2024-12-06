<script src="https://cdn.tailwindcss.com"></script>
<style>
  .Sidebar{
    background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
}
@media only screen and (max-width: 1200px){
    .Sidebar{
        height: 28rem;
        margin-top: 2rem;
        background-color: rgba(50, 205, 50, 0);
        background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
        position: sticky;
    }
    .sidebar ul li{
        display: flex;
    }}
</style>
<div class="Sidebar d-flex flex-col w-48 h-dvh left-0 p-6">
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="Home nav-link fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="home") ? "background-color: rgb(49, 134, 41);": "" ?>">
                  <div class="icon"><i class="bi bi-house-door"></i></div>
                  <label for="labelHome" class="ps-2">Home</label>
                </a>
            </li>
            <li>
                <a href="karyawan.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="karyawan") ? "background-color: rgb(49, 134, 41);": "" ?> ">
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M28 16v6H4V6h7V4H4a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h8v4H8v2h16v-2h-4v-4h8a2 2 0 0 0 2-2v-6ZM18 28h-4v-4h4Z" />
                        <path fill="currentColor" d="M18 18h-.01a1 1 0 0 1-.951-.725L15.246 11H11V9h5a1 1 0 0 1 .962.725l1.074 3.76l3.009-9.78A1.01 1.01 0 0 1 22 3a.98.98 0 0 1 .949.684L24.72 9H30v2h-6a1 1 0 0 1-.949-.684l-1.013-3.04l-3.082 10.018A1 1 0 0 1 18 18" />
                    </svg>
                  </div>
                  <label for="labelHome" class="ps-2">Monitoring</label>
                </a>
            </li>
            <li>
                <a href="monitoring.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="monitoring") ? "background-color: rgb(49, 134, 41);": "" ?> ">
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.5 15a4.5 4.5 0 0 0-4.5 4.5m4.5-8.5a4.5 4.5 0 0 0-4.5 4.5M16.5 7a4.5 4.5 0 0 0-4.5 4.5M8 15c2.21 0 4 2.015 4 4.5M8 11c2.21 0 4 2.015 4 4.5M8 7c2.21 0 4 2.015 4 4.5M12 4v6" />
                    </svg>
                  </div>
                  <label for="labelHome" class="ps-2">Panen</label>
                </a>
            </li>
            <li>
                <a href="panen.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="panen") ? "background-color: rgb(49, 134, 41);": "" ?> ">
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                      <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.5 15a4.5 4.5 0 0 0-4.5 4.5m4.5-8.5a4.5 4.5 0 0 0-4.5 4.5M16.5 7a4.5 4.5 0 0 0-4.5 4.5M8 15c2.21 0 4 2.015 4 4.5M8 11c2.21 0 4 2.015 4 4.5M8 7c2.21 0 4 2.015 4 4.5M12 4v6" />
                  </svg>
                </div>
                <label for="labelHome" class="ps-2">Panen</label>
                </a>
            </li>
            <li>
            <a href="../karyawan/#" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; background-color: rgb(49, 134, 41);">
              <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                      <path fill="currentColor" d="M13.5 8H12v5l4.28 2.54l.72-1.21l-3.5-2.08zM13 3a9 9 0 0 0-9 9H1l3.96 4.03L9 12H6a7 7 0 0 1 7-7a7 7 0 0 1 7 7a7 7 0 0 1-7 7c-1.93 0-3.68-.79-4.94-2.06l-1.42 1.42A8.9 8.9 0 0 0 13 21a9 9 0 0 0 9-9a9 9 0 0 0-9-9" />
                  </svg>
              </div>
              <label for="labelHome" class="ps-2">Riwayat</label>
            </a>
            </li>
            </ul>
</div>