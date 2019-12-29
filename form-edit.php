<!DOCTYPE html>
<html>
<head>
	<title></title>

	<?php 
		include "header.php";
		include "alerts.php";
		include "koneksi.php"; 

		if( !isset($_GET['id']) ){
			// kalau tidak ada id di query string
			header('Location: rekap.php');
		}	

		//ambil id dari query string
		$id = $_GET['id'];

		// buat query untuk ambil data dari database
		$sql = "SELECT * FROM sc WHERE id=$id";
		$query = mysqli_query($koneksi, $sql);
		$all = mysqli_fetch_assoc($query);

		// jika data yang di-edit tidak ditemukan
		if( mysqli_num_rows($query) < 1 ){
			die("data tidak ditemukan...");
		}
	?>
</head>
<body>
	<div class="container">
		<?php include "nav.php"; ?>

		<div class="row">
    		<div class="col-lg-12">
        		<div class="page-header">
            		<h1>Form Update Data</h1>
        		</div>
    		</div>
		</div>

		<div class="row">
			<div class="col-md-6">
				<!-- Content Form -->
				<form action="proses-edit.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $all['id'] ?>" />

					<!-- Input Nama -->
					<div class="form-group">
						<label class="control-label" for="nama">Nama: </label>
						<?php $nama = $all['nama'] ?>
						<select class="form-control" name="nama">
							<option>--- Silahkan Pilih ---</option>
							<option <?php echo ($nama == 'Dahrun Binan') ? "selected": "" ?>>Dahrun Binan</option>
					        <option <?php echo ($nama == 'Dian Sulistyo') ? "selected": "" ?>>Dian Sulistyo</option>
					        <option <?php echo ($nama == 'Dharmawansyah') ? "selected": "" ?>>Dharmawansyah</option>
					        <option <?php echo ($nama == 'Eben Haizar') ? "selected": "" ?>>Eben Haizar</option>
					        <option <?php echo ($nama == 'Edy Kurniawan') ? "selected": "" ?>>Edy Kurniawan</option>
					        <option <?php echo ($nama == 'Husein Mawi') ? "selected": "" ?>>Husein Mawi</option>
					        <option <?php echo ($nama == 'Irwandi') ? "selected": "" ?>>Irwandi</option>
					        <option <?php echo ($nama == 'Irwanto') ? "selected": "" ?>>Irwanto</option>
					        <option <?php echo ($nama == 'Iwan Yudi') ? "selected": "" ?>>Iwan Yudi</option>
					        <option <?php echo ($nama == 'Kripton Wiryawan') ? "selected": "" ?>>Kripton Wiryawan</option>
					        <option <?php echo ($nama == 'Marzuki') ? "selected": "" ?>>Marzuki</option>
					        <option <?php echo ($nama == 'Ramanda Putra') ? "selected": "" ?>>Ramanda Putra</option>
					        <option <?php echo ($nama == 'Ricky Faizal') ? "selected": "" ?>>Ricky Faizal</option>
					        <option <?php echo ($nama == 'Ridwan Alfianto') ? "selected": "" ?>>Ridwan Alfianto</option>
					        <option <?php echo ($nama == 'Sahidin') ? "selected": "" ?>>Sahidin</option>
					        <option <?php echo ($nama == 'Samsi') ? "selected": "" ?>>Samsi</option>
					        <option <?php echo ($nama == 'Saroji') ? "selected": "" ?>>Saroji</option>
					        <option <?php echo ($nama == 'Subandi') ? "selected": "" ?>>Subandi</option>
					        <option <?php echo ($nama == 'Suparman') ? "selected": "" ?>>Suparman</option>
					        <option <?php echo ($nama == 'Syarief Hidayat') ? "selected": "" ?>>Syarief Hidayat</option>
					        <option <?php echo ($nama == 'Widadi Haryoko') ? "selected": "" ?>>Widadi Haryoko</option>
					        <option <?php echo ($nama == 'Yahya Santoso') ? "selected": "" ?>>Yahya Santoso</option>
					        <option <?php echo ($nama == 'Maruli D') ? "selected": "" ?>>Maruli D</option>
						</select>
					</div>

					<!-- Input tanggal -->
					<div class="form-group">
						<label class="control-label" for="tgl">Tanggal: </label>
						<input type="date" name="tgl" class="form-control"  value="<?php echo $all['tgl'] ?>" />
					</div>

					<!-- Input Minggu -->
					<div class="form-group">
						<label class="control-label" for="minggu">Minggu : </label>
						<?php $week = $all['minggu']; ?>
						<select class="form-control" name="minggu">
							<option>--- Silahkan Pilih ---</option>
							<option <?php echo ($week == 'Week 1') ? "selected": "" ?>>Week 1</option>
							<option <?php echo ($week == 'Week 2') ? "selected": "" ?>>Week 2</option>
							<option <?php echo ($week == 'Week 3') ? "selected": "" ?>>Week 3</option>
							<option <?php echo ($week == 'Week 4') ? "selected": "" ?>>Week 4</option>
							<option <?php echo ($week == 'Week 5') ? "selected": "" ?>>Week 5</option>
						</select>
					</div>	

					<!-- Input Kondisi -->
					<div class="form-group">
						<label class="control-label" for="kondisi">Kondisi : </label>
						<?php $cond = $all['kondisi']; ?>
						<label><input type="radio" name="kondisi" value="SAFE" <?php echo ($cond == 'SAFE') ? "checked": "" ?>> SAFE</label>
						<label><input type="radio" name="kondisi" value="UNSAFE" <?php echo ($cond == 'UNSAFE') ? "checked": "" ?>> UNSAFE</label>
					</div>

					<!-- Input Kategori -->
					<div class="form-group">
						<label class="control-label" for="kategori">Kategori : </label> 
						<?php $cate = $all['kategori']; ?>
						<br>
						<select class="form-control" name="kategori">
							<option>--- Silahkan Pilih ---</option>
							<option <?php echo ($cate == 'Orderlines') ? "selected": "" ?>>Orderlines</option>
							<option <?php echo ($cate == 'Procedures') ? "selected": "" ?>>Procedures</option>
							<option <?php echo ($cate == 'PPE') ? "selected": "" ?>>PPE</option>
							<option <?php echo ($cate == 'Reaction of People') ? "selected": "" ?>>Reaction of People</option>
							<option <?php echo ($cate == 'Position of People') ? "selected": "" ?>>Position of People</option>
						</select>
					</div>

					<!-- Input Lokasi -->
					<div class="form-group">
						<label class="control-label" for="loc">Lokasi : </label>
						<?php $location = $all['loc']; ?>
						<select class="form-control" name="loc">
							<option>--- Silahkan Pilih ---</option>
							<option <?php echo ($location == 'CINTA COMPLEX') ? "selected": "" ?>>CINTA COMPLEX</option>
					        <option <?php echo ($location == 'RAMA') ? "selected": "" ?>>RAMA</option>
					        <option <?php echo ($location == 'RAMA G') ? "selected": "" ?>>RAMA G</option>
					        <option <?php echo ($location == 'PABELOKAN') ? "selected": "" ?>>PABELOKAN</option>
					        <option <?php echo ($location == 'CNOOC 114') ? "selected": "" ?>>CNOOC 114</option>
					        <option <?php echo ($location == 'SBU REMOTE') ? "selected": "" ?>>SBU REMOTE</option>
					        <option <?php echo ($location == 'KRISNA') ? "selected": "" ?>>KRISNA</option>
					        <option <?php echo ($location == 'KARMILA') ? "selected": "" ?>>KARMILA</option>
					        <option <?php echo ($location == 'BANUWATI') ? "selected": "" ?>>BANUWATI</option>
					        <option <?php echo ($location == 'ZELDA P') ? "selected": "" ?>>ZELDA P</option>
					        <option <?php echo ($location == 'PETREX') ? "selected": "" ?>>PETREX</option>
					        <option <?php echo ($location == 'CBU REMOTE') ? "selected": "" ?>>CBU REMOTE</option>
					        <option <?php echo ($location == 'WIDURI') ? "selected": "" ?>>WIDURI</option>
					        <option <?php echo ($location == 'SUPERIOR') ? "selected": "" ?>>SUPERIOR</option>
					        <option <?php echo ($location == 'HYSY') ? "selected": "" ?>>HYSY</option>
					        <option <?php echo ($location == 'LISA A') ? "selected": "" ?>>LISA A</option>
					        <option <?php echo ($location == 'FEDERAL') ? "selected": "" ?>>FEDERAL</option>
					        <option <?php echo ($location == 'NBU REMOTE') ? "selected": "" ?>>NBU REMOTE</option>
					        <option <?php echo ($location == 'COSL 221') ? "selected": "" ?>>COSL 221</option>
					        <option <?php echo ($location == 'COSL 222') ? "selected": "" ?>>COSL 222</option>
					        <option <?php echo ($location == 'COSL 223') ? "selected": "" ?>>COSL 223</option>
					        <option <?php echo ($location == 'COSL 225') ? "selected": "" ?>>COSL 225</option>
					        <option <?php echo ($location == 'AWB DUTA 7') ? "selected": "" ?>>AWB DUTA 7</option>
					        <option <?php echo ($location == 'BAYU CAKRAWALA') ? "selected": "" ?>>BAYU CAKRAWALA</option>
					        <option <?php echo ($location == 'BAYU CONSTRUCTOR') ? "selected": "" ?>>BAYU CONSTRUCTOR</option>
					        <option <?php echo ($location == 'LOGINDO RALIANCE') ? "selected": "" ?>>LOGINDO RALIANCE</option>
						</select>
					</div>

					<!-- Input Deskripsi -->
					<div class="form-group">
						<label class="control-label" for="des">Deskripsi : </label>
						<textarea class="form-control" rows="10" name="des"><?php echo $all['des'] ?></textarea>
					</div>

					<div class="form-group">
						<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
						<button  class="btn btn-danger" style="text-decoration: none; "><a href="rekap.php">BATAL</a></button>
					</div>

				</form>
			</div>
		</div>
		

	</div>
</body>
</html>