<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
            overflow-x:hidden;
        }
        p{
            font-family:'Courier New', Courier, monospace;
            line-height: 12px;
        }
        h1{
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <div class="container-fluid  p-0">
        <!-- Header -->
        <div class="col-md-12 bg-info text-white" style="--bs-bg-opacity: .4;">
            <h1>FORM BELANJA</h1>
        </div>
        <!-- Header -->


        <div class="row">
            <div class="col-md-8">
                <!-- form -->
                <div class="col-md-8 mx-auto">
                    <form method="POST" action="index.php">
                        <div class="form-group">
                            <label for="nama">Nama Pelanggan</label> 
                            <input id="nama" name="nama" placeholder="Masukkan Nama Anda" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="produk">Produk Pilihan</label> 
                            <div>
                            <select id="produk" name="produk" class="custom-select">
                                <option value="">-- Pilih Produk --</option>
                                <option value="TV">TV</option>
                                <option value="Kulkas">Kulkas</option>
                                <option value="Mesin Cuci">Mesin Cuci</option>
                                <option value="Rice Cooker">Rice Cooker</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah Beli</label> 
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                    </div> 
                    <div class="form-group">
                        <button name="beli" type="submit" class="btn btn-primary">Beli</button>
                        <button name="reset" type="reset" class="btn btn-warning">Reset</button>
                    </div>
                    </form>
                </div>
                <!-- form -->
            </div>

            <!-- daftar harga -->
            <div class="col-md-4 mx-auto px-4">
            <table class="table table-bordered table-sm mt-3">
                <h3 align="center">Harga Produk</h3>
				<thead>
					<tr class="table-active">
						<th>
							#
						</th>
						<th>
							Produk
						</th>
						<th>
							Harga
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TV
						</td>
						<td>
                        RP 2.000.000
						</td>
					</tr>
					<tr>
						<td>
							2
						</td>
						<td>
							Mesin Cuci
						</td>
						<td>
                        RP 1.500.000
						</td>
					</tr>
					<tr>
						<td>
							3
						</td>
						<td>
							Kulkas
						</td>
						<td>
                        RP 3.250.000
						</td>
					</tr>
					<tr>
						<td>
							4
						</td>
						<td>
							Rice Cooker
						</td>
						<td>
							RP 500.000
						</td>
					</tr>
				</tbody>
			</table>
            </div>
            <!-- daftar harga -->
        </div>
        
	</div>
</div>
</body>
</html>


<?php
error_reporting(0);
    $nama = $_POST['nama'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    if($produk == 'TV') $harga = 2000000;
    else if($produk == 'Kulkas') $harga = 3250000;
    else if($produk == 'Mesin Cuci') $harga = 1500000;
    else if($produk == 'Rice Cooker') $harga = 500000;
    else $harga = '';

    $total_belanja = $jumlah * $harga;
    $diskon = 0.2 * $total_belanja;
    $ppn = 0.1 * ($total_belanja - $diskon);
    $harga_bersih = ($total_belanja - $diskon) - $ppn;

    if(isset($_POST["beli"])){    
?>

<div class="row">
            <div class="col-md-8 text-center">
                <p>-----------------------</p>
                <p>Nama Pelanggan: <?=$nama?></p>
                <p>Produk Pilihan: <?=$produk?></p>
                <p>Jumlah Beli: <?=$jumlah?></p>
                <p>Harga Satuan: RP <?=$harga?></p>
                <p>Total Belanja: RP <?=$total_belanja?></p>
                <p>Potongan Diskon: RP <?=$diskon?></p>
                <p>PPN: RP <?=$ppn?></p>
                <p>Harga Bersih: RP <?=$harga_bersih?></p>
                <p>-----------------------</p>

            </div>
            <div class="col-md-4"></div>
<?php }?>