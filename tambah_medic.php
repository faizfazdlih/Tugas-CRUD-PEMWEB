<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Medis | FAIZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="card shadow-sm p-4" style="max-width: 500px; margin: auto; border-radius: 10px;">
            <h3 class="mb-4 text-center text-primary">TAMBAH DATA MEDIS</h3>
            
            <form method="POST" action="input_medic.php">
                <div class="mb-3">
                    <label for="nama_obat" class="form-label">Nama Obat</label>
                    <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="Masukkan Nama Obat" required>
                </div>
                <div class="mb-3">
                    <label for="dosis" class="form-label">Dosis</label>
                    <input type="dosis" class="form-control" id="dosis" name="dosis" placeholder="Masukkan Dosis" required>
                </div>
                <div class="mb-3">
                    <label for="frekuensi" class="form-label">Frekuensi</label>
                    <input type="frekuensi" class="form-control" id="frekuensi" name="frekuensi" placeholder="Masukkan Frekuensi" required>
                </div>
                <div class="mb-3">
                    <label for="start_date" class="form-label">Awal Penggunaan</label>
                    <input type="date" class="form-control" id="start_date" name="start_date" placeholder="Masukkan Awal Penggunaan" required>
                </div>
                <div class="mb-3">
                    <label for="end_date" class="form-label">Akhir Penggunaan</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" placeholder="Masukkan Akhir Penggunaan " required>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a href="medic.php" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zkgYpbKx2xFWU3XH1a+onQTY8T1fT7Qlt1xiEJ1DZ45pfAPmP4yj4j4z7M" crossorigin="anonymous"></script>
</body>
</html>
