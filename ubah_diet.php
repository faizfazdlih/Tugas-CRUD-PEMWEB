<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="container">
        <div class="col-md-8 col-lg-6 mx-auto">
            <div class="card shadow-sm p-4 border-0" style="border-radius: 10px;">
                <h2 class="mb-4 text-center text-primary">UBAH DATA DIET</h2>

                <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM diet WHERE id='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <form method="POST" action="update_diet.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                        <div class="mb-3">
                            <label for="tipe_makanan" class="form-label">Tipe Makanan</label>
                            <select class="form-control" id="tipe_makanan" name="tipe_makanan" required>
                                <option value="" disabled>Pilih Tipe Makanan</option>
                                <option value="Sarapan" <?php echo $d['tipe_makanan'] == 'Sarapan' ? 'selected' : ''; ?>>Sarapan</option>
                                <option value="Makan Siang" <?php echo $d['tipe_makanan'] == 'Makan Siang' ? 'selected' : ''; ?>>Makan Siang</option>
                                <option value="Makan Malam" <?php echo $d['tipe_makanan'] == 'Makan Malam' ? 'selected' : ''; ?>>Makan Malam</option>
                                <option value="Camilan" <?php echo $d['tipe_makanan'] == 'Camilan' ? 'selected' : ''; ?>>Camilan</option>
                                <!-- Tambahkan opsi lain sesuai kebutuhan -->
                            </select>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama_makanan" class="form-label">Nama Makanan</label>
                            <input type="nama_makanan" class="form-control" name="nama_makanan" id="nama_makanan" value="<?php echo htmlspecialchars($d['nama_makanan']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="kalori" class="form-label">Kalori</label>
                            <input type="kalori" class="form-control" name="kalori" id="kalori" value="<?php echo htmlspecialchars($d['kalori']); ?>" required>
                        </div>

                        <div class="text-center">
                            <a href="diet.php" class="btn btn-danger px-4">Kembali</a>
                            <button type="submit" class="btn btn-primary px-4">Simpan</button>
                        </div>
                    </form>
                <?php 
                }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zkgYpbKx2xFWU3XH1a+onQTY8T1fT7Qlt1xiEJ1DZ45pfAPmP4yj4j4z7M" crossorigin="anonymous"></script>
</body>
</html>