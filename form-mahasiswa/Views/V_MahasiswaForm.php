<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form | 1303194010</title>
</head>

<body>
    <div class="container d-flex align-items-center flex-column">
        <h3 class="mt-5">Form</h3>

        <div class="a-group mt-2 d-flex">
            <a class="mx-2 text-decoration-none" href="<?= base_url('/table') ?>">Table</a>
            <a class="mx-2 text-decoration-none" href="<?= base_url('/form') ?>">Form</a>
            <a class="mx-2 text-decoration-none" href="<?= base_url('/crud') ?>">CRUD</a>
        </div>

        <div class="form mt-5" style="width: 70%;">
            <?= form_open('/mahasiswa/saveData') ?>
            <div class="form-floating mb-3">
                <input type="number" name="nim" class="form-control" id="nim" size="10" placeholder="1303194010" required>
                <label for="nim">NIM</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nama" class="form-control" id="nama" size="45" placeholder="Sultan Kautsar" required>
                <label for="nama">Nama</label>
            </div>
            <div class="form-floating mb-3">
                <select class="form-select form-select" name="jenis_kelamin" required>
                    <option selected>Pilih</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <label for="jenis_kelamin">Jenis Kelamin</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" size="45" placeholder="Magelang" required>
                <label for="tempat_lahir">Tempat Lahir</label>
            </div>
            <div class="form-floating mb-3">
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" size="45" placeholder="03/17/2001" required>
                <label for="tanggal_lahir">Tanggal Lahir</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="alamat" class="form-control" id="alamat" size="45" placeholder="Mertoyudan, Magelang" required>
                <label for="alamat">Alamat</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" size="45" placeholder="skautsar17@gmail.com" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="nomor_hp" class="form-control" id="nomor_hp" size="15" placeholder="081225459071" pattern="{0-9}+" required>
                <label for="nomor_hp">Nomor HP</label>
            </div>
            <button class="btn btn-secondary" type="submit">Submit</button>
            <input type="reset" class="btn btn-danger" value="Reset">
            <?= form_close(); ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>