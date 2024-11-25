<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body class="bg-light d-flex vh-100">
 
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Data User</h2>
            <form method="POST" action="tambah.php">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Password</th>
                        <th class="text-center">Jenis Kelamin</th>
                        <th class="text-center">Alamat</th>
						<th class="text-center">No.Telp</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi, "SELECT * FROM user");
                    while ($d = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $no++; ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($d['username']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($d['password']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($d['jenis_kelamin']); ?></td>
                            <td class="text-center"><?php echo htmlspecialchars($d['alamat']); ?></td>
							<td class="text-center"><?php echo htmlspecialchars($d['telepon']); ?></td>
                            <td class="text-center">
                                <a role="button" class="btn btn-info btn-sm text-white me-2" href="ubah.php?id=<?php echo $d['id']; ?>">UBAH</a>
                                <a role="button" class="btn btn-danger btn-sm" href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                            </td>
                        </tr>
                    <?php 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2zkgYpbKx2xFWU3XH1a+onQTY8T1fT7Qlt1xiEJ1DZ45pfAPmP4yj4j4z7M" crossorigin="anonymous"></script>
</body>
</html>