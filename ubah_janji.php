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
                <h2 class="mb-4 text-center text-primary">UBAH DATA KONSULTASI</h2>

                <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM janji_dokter WHERE id='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <form method="POST" action="update_janji.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                        <div class="mb-3">
                            <label for="nama_dokter" class="form-label">Nama Dokter</label>
                            <input type="text" class="form-control" name="nama_dokter" id="nama_dokter" value="<?php echo htmlspecialchars($d['nama_dokter']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="tanggal_janji" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal_janji" id="tanggal_janji" value="<?php echo htmlspecialchars($d['tanggal_janji']); ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="lokasi" class="form-control" name="lokasi" id="lokasi" value="<?php echo htmlspecialchars($d['lokasi']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label">Notes</label>
                            <input type="notes" class="form-control" name="notes" id="notes" value="<?php echo htmlspecialchars($d['notes']); ?>" required>
                        </div>

                        <div class="text-center">
                            <a href="tables.php" class="btn btn-danger px-4">Kembali</a>
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