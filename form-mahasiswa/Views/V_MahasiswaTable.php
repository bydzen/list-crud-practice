<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Table | 1303194010</title>
</head>

<body>
    <div class="container d-flex align-items-center flex-column">
        <h3 class="mt-5">Table</h3>

        <div class="a-group mt-2 d-flex">
            <a class="mx-2 text-decoration-none" href="<?= base_url('/table') ?>">Table</a>
            <a class="mx-2 text-decoration-none" href="<?= base_url('/form') ?>">Form</a>
            <a class="mx-2 text-decoration-none" href="<?= base_url('/crud') ?>">CRUD</a>
        </div>

        <div class="form-search d-flex justify-content-end" style="width: 100%;">
            <form action="" method="get" style="width: 29%;">
                <div class="input-group mt-5">
                    <input type="text" class="form-control" value="<?php  ?>" name="katakunci" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                </div>
            </form>
        </div>

        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tempat, Tanggal Lahir</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($showData as $row) :
                    $no++;
                ?>
                    <tr>
                        <th scope="row"><?= $no; ?></th>
                        <td><?= $row->nim ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->jenis_kelamin ?></td>
                        <td><?= $row->tempat_lahir . ', ' . $row->tanggal_lahir ?></td>
                        <td><?= $row->alamat ?></td>
                        <td><?= $row->email ?></td>
                        <td><?= $row->nomor_hp ?></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
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