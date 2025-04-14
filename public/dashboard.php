<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Dashboard MISOPU</title>
<!-- BOOSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
<!-- CSS CUSTOM -->
<link rel="stylesheet" href="../assets/css/dashboard/dashboard.css">

</head>
<body>

<?php include '../views/layout/sidebar.php'; ?>

    <!-- Main Content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <h2 class="text-brown mb-4 fw-bold">Dashboard MISOPU</h2>
    <div class="row g-4">
        <div class="col-sm-6 col-lg-3">
        <div class="card card-misopu p-3">
            <div class="card-body">
            <h5 class="card-title">📅 Harian</h5>
            <p class="card-text">Total transaksi hari ini.</p>
            <h4 class="fw-bold">Rp 150.000</h4>
            </div>
        </div>
        </div>

        <div class="col-sm-6 col-lg-3">
        <div class="card card-misopu p-3">
            <div class="card-body">
            <h5 class="card-title">📆 Mingguan</h5>
            <p class="card-text">Total transaksi minggu ini.</p>
            <h4 class="fw-bold">Rp 1.200.000</h4>
            </div>
        </div>
        </div>

        <div class="col-sm-6 col-lg-3">
        <div class="card card-misopu p-3">
            <div class="card-body">
            <h5 class="card-title">🗓️ Bulanan</h5>
            <p class="card-text">Total transaksi bulan ini.</p>
            <h4 class="fw-bold">Rp 5.400.000</h4>
            </div>
        </div>
        </div>

        <div class="col-sm-6 col-lg-3">
        <div class="card card-misopu p-3">
            <div class="card-body">
            <h5 class="card-title">📖 Tahunan</h5>
            <p class="card-text">Total transaksi tahun ini.</p>
            <h4 class="fw-bold">Rp 62.500.000</h4>
            </div>
        </div>
        </div>
    </div>
    </main>
</div>
</div>






<!-- JS BOOSTRAP -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JS CUSTOM -->
<script src="../assets/js/dashboard.js"></script>
</body>
</html>
