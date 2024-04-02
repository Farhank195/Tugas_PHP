<?php 
    require_once "Mahasiswa.php";

    $namaMhs = $_POST['nama'];
    $nimMhs = $_POST['nim'];
    $kampusMhs = $_POST['kuliah'];
    $matkulMhs = $_POST['matkul'];
    $nilaiMhs = $_POST['nilai'];

    $Mahasiswa = new Mahasiswa($namaMhs, $nimMhs, $kampusMhs, $matkulMhs, $nilaiMhs);
    $grade = $Mahasiswa->getGrade();
    $predikat = $Mahasiswa->getPredikat($grade);
    $status = $Mahasiswa->getHasil();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h3 class="text-center">
                    Tabel Nilai Ujian Mahasiswa
                </h3>
            </div>
            <div class="col-md-8 mx-auto mb-2">
                <a href="index.php" class="btn btn-primary">Kembali</a>
            </div>
        </div>
            <div class="col-md-8 mx-auto ">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>
                                NIM
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Kuliah
                            </th>
                            <th>
                                Mata Kuliah
                            </th>
                            <th>
                                Nilai
                            </th>
                            <th>
                                Grade
                            </th>
                            <th>
                                Predikat
                            </th>
                            <th>
                                Status
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <?= $nimMhs?>
                            </td>
                            <td>
                                <?= $namaMhs?>
                            </td>
                            <td>
                                <?= $kampusMhs?>
                            </td>
                            <td>
                                <?= $matkulMhs?>
                            </td>
                            <td>
                                <?= $nilaiMhs?>
                            </td>
                            <td>
                                <?= $grade?>
                            </td>
                            <td>
                                <?= $predikat?>
                            </td>
                            <td>
                                <?= $status?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
</body>
</html>