<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Appointment | FAIZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="card shadow-sm p-4" style="max-width: 500px; margin: auto; border-radius: 10px;">
            <h3 class="mb-4 text-center text-primary">TAMBAH DATA KONSULTASI</h3>
            
            <form method="POST" action="input_janji.php">
                <div class="mb-3">
                    <label for="nama_dokter" class="form-label">Nama Dokter</label>
                    <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" placeholder="Masukkan Nama Dokter" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Masukkan Tanggal" required>
                </div>
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="lokasi" class="form-control" id="lokasi" name="lokasi" placeholder="Masukkan Lokasi" required>
                </div>
                <div class="mb-3">
                    <label for="notes" class="form-label">Notes</label>
                    <input type="notes" class="form-control" id="notes" name="notes" placeholder="Masukkan Catatan" required>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a href="tables.php" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zkgYpbKx2xFWU3XH1a+onQTY8T1fT7Qlt1xiEJ1DZ45pfAPmP4yj4j4z7M" crossorigin="anonymous"></script>
</body>
</html>
