<?php
$pemasukkan = [
    ['nama' => 'Mie Ayam', 'deskripsi' => 'Paket Mie Ayam', 'harga_satuan' => 15000, 'jumlah' => 5],
    ['nama' => 'Es Teh Manis', 'deskripsi' => 'Minuman Es Teh', 'harga_satuan' => 5000, 'jumlah' => 3],
    ['nama' => 'Nasi Goreng', 'deskripsi' => 'Nasi Goreng Spesial', 'harga_satuan' => 20000, 'jumlah' => 2],
    ['nama' => 'Mie Goreng', 'deskripsi' => 'Mie Goreng', 'harga_satuan' => 12000, 'jumlah' => 6],
    ['nama' => 'Es Jeruk', 'deskripsi' => 'Minuman Es Jeruk', 'harga_satuan' => 8000, 'jumlah' => 4],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung</title>
    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="../assets/css/dashboard/dashboard.css">
    <link rel="stylesheet" href="../assets/css/hitung/hitung.css">

</head>
<body>

    <?php include '../views/layout/sidebar.php'; ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
    <div class="container">
        <h2 class="text-center mb-4">Pemasukkan MISOPU</h2>
        <form>
            <!-- Table for Desktop -->
            <div class="d-none d-md-block">
                <table class="table table-bordered" id="pemasukkanTable">
                    <thead class="thead-light">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Harga Satuan</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        <?php $no = 1; foreach ($pemasukkan as $item): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><input type="text" class="form-control" value="<?= $item['nama'] ?>"></td>
                            <td><input type="text" class="form-control" value="<?= $item['deskripsi'] ?>"></td>
                            <td><input type="number" class="form-control harga" value="<?= $item['harga_satuan'] ?>" oninput="updateRow(this)"></td>
                            <td><input type="number" class="form-control jumlah" value="<?= $item['jumlah'] ?>" oninput="updateRow(this)"></td>
                            <td class="total-harga text-end align-middle">Rp <?= number_format($item['harga_satuan'] * $item['jumlah'], 0, ',', '.') ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <!-- <td colspan="5" class="text-end"><strong>Total Pemasukkan</strong></td>
                            <td class="text-end" id="grandTotalTable"></td> -->
                        </tr>
                    </tfoot>
                </table>
            </div>

            <!-- Mobile View -->
            <div id="mobileForm" class="d-md-none"></div>

            <button type="button" class="btn btn-success mt-3" onclick="addRow()">+ Tambah Baris</button>
            <div class="text-end mt-3">
                <strong>Total Pemasukkan:</strong> Rp <span id="grandTotalMobile">0</span>
            </div>
        </form>
    </div>
</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/dashboard.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
    renderMobileCards();
    updateGrandTotal();
});

function renderMobileCards() {
    const data = <?php echo json_encode($pemasukkan); ?>;
    const mobileForm = document.getElementById("mobileForm");
    mobileForm.innerHTML = "";

    data.forEach((item, index) => {
        mobileForm.innerHTML += `
        <div class="mobile-card">
            <label>No: ${index + 1}</label>
            <label>Nama:</label>
            <input type="text" class="form-control" value="${item.nama}">
            <label>Deskripsi:</label>
            <input type="text" class="form-control" value="${item.deskripsi}">
            <label>Harga Satuan:</label>
            <input type="number" class="form-control harga" value="${item.harga_satuan}" oninput="updateRow(this)">
            <label>Jumlah:</label>
            <input type="number" class="form-control jumlah" value="${item.jumlah}" oninput="updateRow(this)">
            <div class="total-harga">Total Harga: Rp <span class="row-total">${(item.harga_satuan * item.jumlah).toLocaleString('id-ID')}</span></div>
        </div>
        `;
    });
}

function updateRow(input) {
    const card = input.closest(".mobile-card") || input.closest("tr");
    const harga = parseInt(card.querySelector(".harga").value) || 0;
    const jumlah = parseInt(card.querySelector(".jumlah").value) || 0;
    const total = harga * jumlah;

    const totalEl = card.querySelector(".row-total");
    if (totalEl) totalEl.textContent = total.toLocaleString('id-ID');

    updateGrandTotal();
}

function updateGrandTotal() {
    let grandTotal = 0;
    document.querySelectorAll(".harga").forEach((el, idx) => {
        const jumlah = document.querySelectorAll(".jumlah")[idx];
        const h = parseInt(el.value) || 0;
        const j = parseInt(jumlah.value) || 0;
        grandTotal += h * j;
    });

    // Update both desktop and mobile
    const grandTotalDesktop = document.getElementById("grandTotalTable");
    const grandTotalMobile = document.getElementById("grandTotalMobile");

    if (grandTotalDesktop) grandTotalDesktop.textContent = "Rp " + grandTotal.toLocaleString('id-ID');
    if (grandTotalMobile) grandTotalMobile.textContent = grandTotal.toLocaleString('id-ID');
}

function addRow() {
    const tableBody = document.getElementById("tableBody");

    const newRow = document.createElement("tr");
    newRow.innerHTML = `
        <td>${tableBody.children.length + 1}</td>
        <td><input type="text" class="form-control"></td>
        <td><input type="text" class="form-control"></td>
        <td><input type="number" class="form-control harga" value="0" oninput="updateRow(this)"></td>
        <td><input type="number" class="form-control jumlah" value="0" oninput="updateRow(this)"></td>
        <td class="total-harga text-end align-middle">Rp <span class="row-total">0</span></td>
    `;
    tableBody.appendChild(newRow);

    // Tambahkan juga ke mobile
    const mobileForm = document.getElementById("mobileForm");
    const card = document.createElement("div");
    card.className = "mobile-card";
    card.innerHTML = `
        <label>No: ${mobileForm.children.length + 1}</label>
        <label>Nama:</label>
        <input type="text" class="form-control">
        <label>Deskripsi:</label>
        <input type="text" class="form-control">
        <label>Harga Satuan:</label>
        <input type="number" class="form-control harga" value="0" oninput="updateRow(this)">
        <label>Jumlah:</label>
        <input type="number" class="form-control jumlah" value="0" oninput="updateRow(this)">
        <div class="total-harga">Total Harga: Rp <span class="row-total">0</span></div>
    `;
    mobileForm.appendChild(card);

    updateGrandTotal();
}
</script>

</body>
</html>