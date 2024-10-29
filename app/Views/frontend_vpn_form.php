<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title); ?></title>
    <!-- Tambahkan CSS dan JS jika diperlukan -->
</head>
<body>
    <div class="container">
        <h1><?= esc($title); ?></h1>

        <!-- Tempatkan notifikasi di sini -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= site_url('vpn_services/submit'); ?>" method="post">
            <h2>Langkah 1: Pilih Wilayah dan Alamat</h2>
            <label for="region">Wilayah:</label>
            <select id="region" name="region" required>
                <option value="">Pilih wilayah</option>
                <option value="wilayah1">Wilayah 1</option>
                <option value="wilayah2">Wilayah 2</option>
                <!-- Tambahkan pilihan wilayah lainnya -->
            </select>

            <label for="address">Alamat Lengkap:</label>
            <input type="text" id="address" name="address" required placeholder="Masukkan alamat lengkap">

            <div id="map" style="height: 300px; width: 100%;"></div> <!-- Tempatkan peta di sini -->

            <h2>Langkah 2: Masukkan Data Diri</h2>
            <label for="fullname">Nama Lengkap:</label>
            <input type="text" id="fullname" name="fullname" required placeholder="Masukkan nama lengkap">

            <label for="phone">No HP:</label>
            <input type="text" id="phone" name="phone" required placeholder="Masukkan nomor telepon">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="Masukkan email">

            <button type="submit">Beli Paket</button>
        </form>
    </div>

    <script>
        // Inisialisasi peta di sini (misalnya dengan Google Maps API)
    </script>
</body>
</html>
