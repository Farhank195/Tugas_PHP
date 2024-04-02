<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center">
				Form Nilai Ujian
			</h3>
        </div>
        <div class="col-md-8 mx-auto">
            <form method="POST" action="objMahasiswa.php">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nim" class="col-4 col-form-label">Nim</label> 
                    <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kuliah" class="col-4 col-form-label">Kuliah</label> 
                    <div class="col-8">
                    <select id="kuliah" name="kuliah" class="custom-select">
                        <option value="">--- PILIH KAMPUS ---</option>
                        <option value="unj">UNJ</option>
                        <option value="unismuh">UNISMUH</option>
                        <option value="unm">UNM</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                    <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="">--- PILIH MATAKULIAH ---</option>
                        <option value="PHP">PHP</option>
                        <option value="JAVASCRIPT">JAVASCRIPT</option>
                        <option value="BOOTSTRAP">BOOTSTRAP</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                    <div class="col-8">
                    <input id="nilai" name="nilai" type="text" class="form-control">
                    </div>
                </div> 
                <div class="form-group row">
                    <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
		</div>
	</div>


</body>
</html>