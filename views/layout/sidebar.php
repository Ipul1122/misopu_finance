<!-- Overlay -->
<div id="overlay" class="overlay" onclick="toggleSidebar(false)"></div>

<!-- Mobile Navbar -->
<div class="d-md-none d-flex justify-content-between align-items-center p-3 border-bottom">
<h5 class="m-0 fw-bold text-brown">MISOPU</h5>
<button class="hamburger" onclick="toggleSidebar(true)">☰</button>
</div>

<!-- Mobile Sidebar -->
<div id="mobileSidebar" class="mobile-sidebar">
<div class="d-flex justify-content-between align-items-center mb-4">
    <h5 class="text-brown fw-bold">Menu</h5>
    <button class="btn-close" onclick="toggleSidebar(false)"></button>
</div>
<ul class="nav flex-column">
    <li class="nav-item"><a class="nav-link <?= $currentPage == 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php">🏠 Home</a></li>
    <li class="nav-item"><a class="nav-link <?= $currentPage == 'hitung.php' ? 'active' : '' ?>" href="hitung.php">🧮 Hitung</a></li>
    <li class="nav-item"><a class="nav-link <?= $currentPage == 'histori.php' ? 'active' : '' ?>" href="histori.php">📜 Histori</a></li>
</ul>
</div>

<!-- Main Layout -->
<div class="container-fluid">
<div class="row">
    <!-- Sidebar (desktop only) -->
    <nav class="col-md-3 col-lg-2 d-none d-md-block sidebar">
    <div class="text-center mb-4 fs-4 fw-bold text-brown">MISOPU</div>
    <ul class="nav flex-column">
        <li class="nav-item"><a class="nav-link <?= $currentPage == 'dashboard.php' ? 'active' : '' ?>" href="dashboard.php">🏠 Home</a></li>
        <li class="nav-item"><a class="nav-link <?= $currentPage == 'hitung.php' ? 'active' : '' ?>" href="hitung.php">🧮 Hitung</a></li>
        <li class="nav-item"><a class="nav-link <?= $currentPage == 'histori.php' ? 'active' : '' ?>" href="histori.php">📜 Histori</a></li>
    </ul>
    </nav>