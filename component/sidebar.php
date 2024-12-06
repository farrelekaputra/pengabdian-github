<style>
  .Sidebar{
    width: 16rem;
    height: 28rem;
    margin-top: 2rem;
    background-color: rgba(50, 205, 50, 0);
    background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
    position: sticky;
    top: 4rem;
}
.sidebar ul li{
    display: flex;
}
.sidebar p{
    height: 28rem;
    color: white !important;
}
@media only screen and (max-width: 1200px){
    .Sidebar{
        width: 80px;
        height: 28rem;
        margin-top: 2rem;
        z-index: 9999;
        background-color: rgba(50, 205, 50, 0);
        background-image: linear-gradient(to bottom, rgb(61, 117, 61), #1a3423);
        position: sticky;
        top: 2rem;
    }
    .sidebar ul li{
        display: flex;
    }}
</style>
<div class="Sidebar d-flex flex-column flex-shrink-0 p-3 rounded">
            <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="index.php" class="Home nav-link fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="home") ? "background-color: rgb(49, 134, 41);": "" ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" d="M6 19h3v-6h6v6h3v-9l-6-4.5L6 10zm-2 2V9l8-6l8 6v12h-7v-6h-2v6zm8-8.75"/></svg>
                <p style="color: white; margin-left: 6px;">Home</p>
                </a>
            </li>
            <li>
                <a href="karyawan.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="karyawan") ? "background-color: rgb(49, 134, 41);": "" ?> ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 48 48"><g fill="white"><path fill-rule="evenodd" d="M24.767 17.736c.376.17.794.264 1.233.264h4v-6h2v-2h-3.341a6 6 0 1 0-3.892 7.736M23 8c-1.48 0-2.773.804-3.465 2h6.93A3.998 3.998 0 0 0 23 8m3 8a1 1 0 0 1-1-1v-3h3v4z" clip-rule="evenodd"/><path d="M10 20a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h.054c.257 2.35 1.42 4.28 3.156 5.65c1.957 1.543 4.602 2.35 7.45 2.35c4.552 0 8.76-1.833 10.172-6.007a2.001 2.001 0 0 0 1.845-3.084l3.788-2.062l-.956-1.756l-4.856 2.643l-5.004-1.877h-.002A1 1 0 0 1 25 28.92V26a2 2 0 1 0-4 0v5a2 2 0 0 0 1.298 1.873l6.636 2.488C27.897 38.388 24.771 40 20.66 40c-2.487 0-4.671-.707-6.21-1.921c-1.313-1.035-2.184-2.456-2.398-4.218A4.002 4.002 0 0 0 15 30v-6a4 4 0 0 0-4-4h1.5a1 1 0 1 0 0-2h-4a1 1 0 1 0 0 2zm31.848 5.53l-1.696-1.06L36.696 30H42v-2h-1.696z"/><path d="M18 20a2 2 0 0 0-2 2v9.5a5.5 5.5 0 0 0 8.758 4.431l-3.162-1.186A4 4 0 0 1 19 31v-5a4 4 0 0 1 8 0v-3a3 3 0 0 0-3-3z"/></g></svg>
                <p style="color: white; margin-left: 6px;">Karyawan</p>
                </a>
            </li>
            <li>
                <a href="monitoring.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="monitoring") ? "background-color: rgb(49, 134, 41);": "" ?> ">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="white" d="M3 21v-2l2-2v4zm4 0v-6l2-2v8zm4 0v-8l2 2.025V21zm4 0v-5.975l2-2V21zm4 0V11l2-2v12zM3 15.825V13l7-7l4 4l7-7v2.825l-7 7l-4-4z"/></svg>
                <p style="color: white;  margin-left: 6px;"> Monitoring</p>
                </a>
            </li>
            <li>
                <a href="panen.php" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; <?=($activePage=="panen") ? "background-color: rgb(49, 134, 41);": "" ?> ">
                  <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 0 20 20"><path fill="white" d="M5.673 0a.7.7 0 0 1.7.7v1.309h7.517v-1.3a.7.7 0 0 1 1.4 0v1.3H18a2 2 0 0 1 2 1.999v13.993A2 2 0 0 1 18 20H2a2 2 0 0 1-2-1.999V4.008a2 2 0 0 1 2-1.999h2.973V.699a.7.7 0 0 1 .7-.699M1.4 7.742v10.259a.6.6 0 0 0 .6.6h16a.6.6 0 0 0 .6-.6V7.756zm5.267 6.877v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zm-8.333-3.977v1.666H5v-1.666zm4.166 0v1.666H9.167v-1.666zm4.167 0v1.666h-1.667v-1.666zM4.973 3.408H2a.6.6 0 0 0-.6.6v2.335l17.2.014V4.008a.6.6 0 0 0-.6-.6h-2.71v.929a.7.7 0 0 1-1.4 0v-.929H6.373v.92a.7.7 0 0 1-1.4 0z"/></svg>
                <p style="color: white; margin-left: 6px;">Panen</p>
                </a>
            </li>
            <li>
            <a href="../karyawan/#" class="nav-link link-dark fw-bolder mb-1 mt-2" style="display: flex; background-color: rgb(49, 134, 41);">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
                <path fill="white" d="M12 21q-3.45 0-6.012-2.287T3.05 13H5.1q.35 2.6 2.313 4.3T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H9v2H3V4h2v2.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m2.8-4.8L11 12.4V7h2v4.6l3.2 3.2z" />
              </svg>
            <p class="sidebarTeks">Riwayat</p>
            </li>
            </ul>
</div>