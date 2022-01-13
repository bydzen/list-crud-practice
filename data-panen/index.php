<?php
$host       = "localhost";
$user       = "root";
$pass       = "";
$db         = "latihancrud1";

$koneksi    = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}

$rand_id_panen = (string)rand(1928471263, 9999999999);

$id_panen        = "";
$nama_tanaman    = "";
$hasil_panen     = "";
$lama_tanam      = "";
$tanggal_panen   = "";

$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if ($op == 'delete') {
    $id         = $_GET['id'];
    $sql1       = "delete from data_panen where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Berhasil hapus data";
    } else {
        $error  = "Gagal melakukan delete data";
    }
}

if ($op == 'deleteall') { //untuk delete all
    $sql1       = "delete from data_panen";
    $q1         = mysqli_query($koneksi, $sql1);
    if ($q1) {
        $sukses = "Semua data berhasil dihapus";
    } else {
        $error  = "Data gagal dihapus";
    }
}

if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from data_panen where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $id_panen       = $r1['id_panen'];
    $nama_tanaman   = $r1['nama_tanaman'];
    $hasil_panen    = $r1['hasil_panen'];
    $lama_tanam     = $r1['lama_tanam'];
    $tanggal_panen  = $r1['tanggal_panen'];

    if ($id_panen == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    // check if rand_id_panen is available or not
    $sql1       = "select * from data_panen where id_panen = '$rand_id_panen'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    if ($r1) {
        $rand_id_panen = (string)rand(1928471263, 9999999999);
        $sql1       = "select * from data_panen where id_panen = '$rand_id_panen'";
        $q1         = mysqli_query($koneksi, $sql1);
        $r1         = mysqli_fetch_array($q1);
        if ($r1) {
            $rand_id_panen = (string)rand(1928471263, 9999999999);
        }
    }

    $id_panen        = $rand_id_panen;
    $nama_tanaman       = $_POST['nama_tanaman'];
    $hasil_panen     = $_POST['hasil_panen'];
    $lama_tanam      = $_POST['lama_tanam'];
    $tanggal_panen   = $_POST['tanggal_panen'];

    if ($id_panen && $nama_tanaman && $hasil_panen && $tanggal_panen) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update data_panen set id_panen = '$id_panen',nama_tanaman='$nama_tanaman',hasil_panen = '$hasil_panen',lama_tanam = '$lama_tanam',tanggal_panen='$tanggal_panen' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into data_panen(id_panen,nama_tanaman,hasil_panen,lama_tanam,tanggal_panen) values ('$id_panen','$nama_tanaman','$hasil_panen','$lama_tanam','$tanggal_panen')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Panen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px
        }

        .card {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container-sm" style="max-width: 50%;">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header text-white bg-secondary">
                Create/Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <p><?php echo $error; ?></p>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                    if ($sukses == "Semua data berhasil dihapus" || $sukses == "Data berhasil diupdate") {
                ?>
                        <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
                            <p><?php echo $sukses; ?></p><span id="count"></span>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php
                        header("refresh:3;url=index.php"); // 3 : detik
                    } else {
                    ?>
                        <div class="alert alert-success" role="alert">
                            <p><?php echo $sukses; ?></p>
                        </div>
                <?php
                    }
                }
                ?>
                <form action="" method="POST">
                    <!-- <div class="mb-3 row">
                        <label for="id_panen" class="col-sm-3 col-form-label">ID</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="id_panen" name="id_panen" value="<?php echo $id_panen ?>">
                        </div>
                    </div> -->
                    <div class="mb-3 row">
                        <label for="nama_tanaman" class="col-sm-3 col-form-label">Nama Tanaman</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_tanaman" name="nama_tanaman" value="<?php echo $nama_tanaman ?>">
                        </div>
                    </div>
                    <div class="mb-3 row d-flex align-items-center">
                        <label for="hasil_panen" class="col-sm-3 col-form-label">Hasil Panen</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" max="99999" class="form-control" id="hasil_panen" name="hasil_panen" value="<?php echo $hasil_panen ?>">
                        </div>
                        Kg
                    </div>
                    <div class="mb-3 row d-flex align-items-center">
                        <label for="lama_tanam" class="col-sm-3 col-form-label">Lama Tanam</label>
                        <div class="col-sm-8">
                            <input type="number" min="1" max="99999" class="form-control" id="lama_tanam" name="lama_tanam" value="<?php echo $lama_tanam ?>">
                        </div>
                        Bulan
                    </div>
                    <div class="mb-3 row">
                        <label for="tanggal_panen" class="col-sm-3 col-form-label">Tanggal Panen</label>
                        <div class="col-sm-8">
                            <input type="date" class="form-control" id="tanggal_panen" name="tanggal_panen" value="<?php echo $tanggal_panen ?>">
                        </div>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-success" />
                        &nbsp;
                        <input type="reset" value="Bersihkan" class="btn btn-secondary">
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-dark">
                Data Panen
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nama Tanaman</th>
                            <th scope="col">Hasil Panen</th>
                            <th scope="col">Lama Tanam</th>
                            <th scope="col">Tanggal Panen</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from data_panen order by id desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id            = $r2['id'];
                            $id_panen      = $r2['id_panen'];
                            $nama_tanaman  = $r2['nama_tanaman'];
                            $hasil_panen   = $r2['hasil_panen'];
                            $lama_tanam    = $r2['lama_tanam'];
                            $tanggal_panen = $r2['tanggal_panen'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $id_panen ?></td>
                                <td scope="row"><?php echo $nama_tanaman ?></td>
                                <td scope="row"><?php echo $hasil_panen . " Kg" ?></td>
                                <td scope="row"><?php echo $lama_tanam . " Bulan" ?></td>
                                <td scope="row"><?php echo $tanggal_panen ?></td>
                                <td scope="row">
                                    <div class="div d-flex justify-content-end">
                                        <a href="index.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-primary mb-1 ml-1">Ubah</button></a>
                                        &nbsp;
                                        <a href="index.php?op=delete&id=<?php echo $id ?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger mb-1">Hapus</button></a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <!-- jika tidak ada data maka tidak menampilkan tombol delete all -->
                <?php
                if ($urut > 1) {
                ?>
                    <div class="div d-flex justify-content-end" scope="row">
                        <!-- delete all data in table data_panen -->
                        <a href="index.php?op=deleteall" onclick="return confirm('Yakin mau delete semua data?')"><button type="button" class="btn btn-danger">Hapus Semua</button></a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        window.onload = function() {

            (function() {
                var counter = 3;
                span = document.getElementById("count");
                span.innerHTML = counter + " detik lagi";

                setInterval(function() {
                    counter--;
                    if (counter >= 0) {
                        span.innerHTML = counter + " detik lagi";
                    }
                    // Display 'counter' wherever you want to display it.
                    if (counter === 0) {
                        //    alert('this is where it happens');
                        clearInterval(counter);
                    }

                }, 1000);

            })();

        }
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>