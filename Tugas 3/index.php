<?php 
    //array data Mahasaswa
    $m1 = ['Nama Mahasiswa' => 'Saiful Halimah', 'NIM'=> '210001', 'Nilai' => '80'];
    $m2 = ['Nama Mahasiswa' => 'Ratna Batari', 'NIM'=> '210002', 'Nilai' => '86'];
    $m3 = ['Nama Mahasiswa' => 'Rustam Buana', 'NIM'=> '210003', 'Nilai' => '78'];
    $m4 = ['Nama Mahasiswa' => 'Burhanuddin Susila', 'NIM'=> '210004', 'Nilai' => '92'];
    $m5 = ['Nama Mahasiswa' => 'Adi Usman', 'NIM'=> '210005', 'Nilai' => '66'];
    $m6 = ['Nama Mahasiswa' => 'Nur Firdaus', 'NIM'=> '210006', 'Nilai' => '59'];
    $m7 = ['Nama Mahasiswa' => 'Mansur Guntur', 'NIM'=> '210007', 'Nilai' => '73'];
    $m8 = ['Nama Mahasiswa' => 'Jamaluddin Ratna', 'NIM'=> '210008', 'Nilai' => '85'];
    $m9 = ['Nama Mahasiswa' => 'Asih Nirmala', 'NIM'=> '210009', 'Nilai' => '94'];
    $m10 = ['Nama Mahasiswa' => 'Ridwan Taufik', 'NIM'=> '2100010', 'Nilai' => '55'];
    $m11 = ['Nama Mahasiswa' => 'Muhammad Yohanes', 'NIM'=> '2100011', 'Nilai' => '77'];
    $m12 = ['Nama Mahasiswa' => 'Tirta Kasih', 'NIM'=> '2100012', 'Nilai' => '79'];
    $m13 = ['Nama Mahasiswa' => 'Sri Wangi', 'NIM'=> '2100013', 'Nilai' => '63'];
    $m14 = ['Nama Mahasiswa' => 'Lestari Dewi', 'NIM'=> '2100014', 'Nilai' => '55'];
    $m15 = ['Nama Mahasiswa' => 'Nurul Hadi', 'NIM'=> '2100015', 'Nilai' => '97'];
    $m16 = ['Nama Mahasiswa' => 'Agus Ismail', 'NIM'=> '2100016', 'Nilai' => '87'];
    
    $array_mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10, $m11, $m12, $m13, $m14, $m15, $m16];

    //deklarasi judul pada tabel header
    $array_header = ['No.', 'Nama Mahasiswa', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    
    // fungsi agregat
    $nilai_mahasiswa = array_column($array_mahasiswa,'Nilai');
    $sum_nilai = array_sum($nilai_mahasiswa);
    $sum_mahasiswa = count($array_mahasiswa);
    $nilai_tertinggi = max($nilai_mahasiswa);
    $nilai_terendah = min($nilai_mahasiswa);
    $nilai_rata2 = $sum_nilai/$sum_mahasiswa;
    $array_footer = [
        'Nilai Tertinggi' => $nilai_tertinggi,
        'Nilai Terendah' => $nilai_terendah,
        'Nilai Rata-Rata' => $nilai_rata2,
        'Jumlah Mahasiswa' => $sum_mahasiswa,
        'Jumlah Keseluruhan Nilai' => $sum_nilai];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    table{
        font-family: "poppins", sans-serif;
    }
</style>
    </style>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 px-0">
			<h3 class="text-center text-bg-primary">
				Daftar Nilai Mahasiswa
			</h3>
		</div>
	</div>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr class="table-primary text-center">
                        <?php
                        foreach ($array_header as $header) {?>
                        <th>
                            <?= $header ?>
                        </th>
                        <?php }?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        foreach ($array_mahasiswa as $mahasiswa) {
                            //keterangan
                            $ket = ($mahasiswa['Nilai'] >= 65)? 'Lulus':'Tidak Lulus';
                            
                            //grade
                            if($mahasiswa['Nilai'] >= 85 && $mahasiswa['Nilai'] <=100) {
                                $grade = 'A';}
                            else if($mahasiswa['Nilai'] >=75 && $mahasiswa['Nilai'] <85){
                                $grade = 'B';}
                            else if($mahasiswa['Nilai'] >=60 && $mahasiswa['Nilai'] <75){
                                $grade = 'C';}
                            else if($mahasiswa['Nilai'] >=50 && $mahasiswa['Nilai'] < 60){
                                $grade = 'D';}
                            else if($mahasiswa['Nilai'] >=0 && $mahasiswa['Nilai'] < 0){
                                $grade = 'E';}
                            else {
                                $grade = '';}
                            
                                //predikat
                            switch ($grade) {
                                case "A":
                                    $predikat = 'Memuaskan';
                                    break;
                                case "B":
                                    $predikat = 'Bagus';
                                    break;
                                case "C":
                                    $predikat = 'Cukup';
                                    break;
                                case "D":
                                    $predikat = 'Kurang';
                                    break;
                                case "E":
                                    $predikat = 'Buruk';
                                    break;
                                default:
                                    $predikat = 'null';}
                    ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $mahasiswa['Nama Mahasiswa'] ?></td>
                        <td class="text-center"><?= $mahasiswa['NIM'] ?></td>
                        <td class="text-center"><?= $mahasiswa['Nilai'] ?></td>
                        <td class="text-center" style="background-color: <?= $color?>"><?= $ket ?></td>
                        <td class="text-center"><?= $grade ?></td>
                        <td class="text-center"><?= $predikat ?></td>
                    </tr>
                    <?php }?>
                </tbody>
                <tfoot class="table-secondary">
                    <?php foreach($array_footer as $footer => $nilai) { ?>
                    <tr>
                        <th colspan="3"><?= $footer ?></th>
                        <th colspan="4"><?= $nilai ?></th>
                    </tr>
                    <?php }?>
                </tfoot>
            </table>

        </div>
    </div>
</div>
</body>
</html>