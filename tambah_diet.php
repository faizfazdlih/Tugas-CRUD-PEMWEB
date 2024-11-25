<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Diet | FAIZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="container">
        <div class="card shadow-sm p-4" style="max-width: 500px; margin: auto; border-radius: 10px;">
            <h3 class="mb-4 text-center text-primary">TAMBAH DATA DIET</h3>
            
            <form method="POST" action="input_diet.php">
                <div class="mb-3">
                    <label for="tipe_makanan" class="form-label">Tipe Makanan</label>
                    <select class="form-control" id="tipe_makanan" name="tipe_makanan" required>
                        <option value="" disabled selected>Pilih Tipe Makanan</option>
                        <option value="Sarapan">Sarapan</option>
                        <option value="Makan Siang">Makan Siang</option>
                        <option value="Makan Malam">Makan Malam</option>
                        <option value="Camilan">Camilan</option>
                        <!-- Tambahkan opsi lain sesuai kebutuhan -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nama_makanan" class="form-label">Nama Makanan</label>
                    <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" placeholder="Masukkan Nama Makanan" required>
                </div>
                <div class="mb-3">
                    <label for="kalori" class="form-label">Kalori</label>
                    <input type="number" class="form-control" id="kalori" name="kalori" placeholder="Masukkan Kalori" required>
                </div>
                <div class="d-flex justify-content-between mt-4">
                    <a href="diet.php" class="btn btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zkgYpbKx2xFWU3XH1a+onQTY8T1fT7Qlt1xiEJ1DZ45pfAPmP4yj4j4z7M" crossorigin="anonymous"></script>
</body>
</html>
