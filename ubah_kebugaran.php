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
                <h2 class="mb-4 text-center text-primary">UBAH DATA OLAHRAGA</h2>

                <?php
                include 'koneksi.php';
                $id = $_GET['id'];
                $data = mysqli_query($koneksi, "SELECT * FROM kebugaran WHERE id='$id'");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <form method="POST" action="update_kebugaran.php">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                        <div class="mb-3">
                            <label for="nama_olahraga" class="form-label">Olahraga</label>
                            <input type="text" class="form-control" name="nama_olahraga" id="nama_olahraga" value="<?php echo htmlspecialchars($d['nama_olahraga']); ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="frekuensi" class="form-label">Frekuensi</label>
                            <input type="frekuensi" class="form-control" name="frekuensi" id="frekuensi" value="<?php echo htmlspecialchars($d['frekuensi']); ?>" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="durasi" class="form-label">Durasi</label>
                            <input type="time" class="form-control" name="durasi" id="durasi" value="<?php echo htmlspecialchars($d['durasi']); ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="notes" class="form-label">Notes</label>
                            <input type="notes" class="form-control" name="notes" id="notes" value="<?php echo htmlspecialchars($d['notes']); ?>" required>
                        </div>

                        <div class="text-center">
                            <a href="kebugaran.php" class="btn btn-danger px-4">Kembali</a>
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