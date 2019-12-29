<html>
<head>

<?php 
include "header.php";
include "alerts.php";
include "koneksi.php"; 
?>
</head>
<body>

<div class="container">
  <?php include "nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Form Input Stopcard</h1>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-md-6">
	<form id="form_input" method="POST">	

  <?php  
  if(isset($_POST['simpan']))

{
	mysqli_query($koneksi, "INSERT INTO sc 
    (nama, tgl, minggu, kondisi, kategori, loc, des)
    VALUES (
    '".$_POST['nama']."',
    '".$_POST['tgl']."',
    '".$_POST['minggu']."',
    '".$_POST['kondisi']."',
    '".$_POST['kategori']."',
    '".$_POST['loc']."',
    '".$_POST['des']."'
        )
    ");
	writeMsg('save.sukses');
}
?>


	<div class="form-group">
  		<label class="control-label" for="nama">Nama</label>
      <select class="form-control" name="nama" id="nama" required>
            <option>--- Silahkan Pilih ---</option>
            <option value="Dahrun Binan" >Dahrun Binan</option>
            <option value="Dian Sulistyo">Dian Sulistyo</option>
            <option value="Dharmawansyah">Dharmawansyah</option>
            <option value="Eben Haizar">Eben Haizar</option>
            <option value="Edy Kurniawan">Edy Kurniawan</option>
            <option value="Husein Mawi">Husein Mawi</option>
            <option value="Irwandi">Irwandi</option>
            <option value="Irwanto">Irwanto</option>
            <option value="Iwan Yudi">Iwan Yudi</option>
            <option value="Kripton Wiryawan">Kripton Wiryawan</option>
            <option value="Marzuki">Marzuki</option>
            <option value="Ramanda Putra">Ramanda Putra</option>
            <option value="Ricky Faizal">Ricky Faizal</option>
            <option value="Ridwan Alfianto">Ridwan Alfianto</option>
            <option value="Sahidin">Sahidin</option>
            <option value="Samsi">Samsi</option>
            <option value="Saroji">Saroji</option>
            <option value="Subandi">Subandi</option>
            <option value="Suparman">Suparman</option>
            <option value="Syarief Hidayat">Syarief Hidayat</option>
            <option value="Widadi Haryoko">Widadi Haryoko</option>
            <option value="Yahya Santoso">Yahya Santoso</option>
            <option value="Maruli D">Maruli D</option>
      </select>
  	</div>

    <div class="form-group">
      <label class="control-label" for="tgl">Tanggal</label>
      <input type="date" class="form-control" name="tgl" id="tgl" required>
  </div>

	<div class="form-group">
  		<label class="control-label" for="minggu">Minggu Ke : </label>
      <select class="form-control" name="minggu" id="minggu" required>
            <option>--- Silahkan Pilih ---</option>
            <option value="Week 1">Week 1</option>
            <option value="Week 2">Week 2</option>
            <option value="Week 3">Week 3</option>
            <option value="Week 4">Week 4</option>
            <option value="Week 5">Week 5</option>
      </select>
  </div>


  <div class="form-group">
      <label class="control-label" for="kondisi">Kondisi </label> <br>
      <label><input type="radio" name="kondisi" value="SAFE"> SAFE</label>
      <label><input type="radio" name="kondisi" value="UNSAFE"> UNSAFE</label>
  </div>

  <div class="form-group">
      <label class="control-label" for="kategori">Kategori </label>
      <select class="form-control" name="kategori" id="kategori" required>
            <option>--- Silahkan Pilih ---</option>
            <option value="Procedures">Procedures</option>
            <option value="Orderlines">Orderlines</option>
            <option value="PPE">PPE</option>
            <option value="Reaction of People">Reaction of People</option>
            <option value="Position of People">Position of People</option>
       </select>
  </div>

    <div class="form-group">
      <label class="control-label" for="loc">Location</label>
      <select class="form-control" name="loc" id="loc" required>
            <option>--- Silahkan Pilih ---</option>
            <option value="CINTA COMPLEX">CINTA COMPLEX</option>
            <option value="RAMA">RAMA</option>
            <option value="RAMA G">RAMA G</option>
            <option value="PABELOKAN">PABELOKAN</option>
            <option value="CNOOC 114">CNOOC 114</option>
            <option value="SBU REMOTE">SBU REMOTE</option>
            <option value="KRISNA">KRISNA</option>
            <option value="KARMILA">KARMILA</option>
            <option value="BANUWATI">BANUWATI</option>
            <option value="ZELDA P">ZELDA P</option>
            <option value="PETREX">PETREX</option>
            <option value="CBU REMOTE">CBU REMOTE</option>
            <option value="WIDURI">WIDURI</option>
            <option value="SUPERIOR">SUPERIOR</option>
            <option value="HYSY">HYSY</option>
            <option value="LISA A">LISA A</option>
            <option value="FEDERAL">FEDERAL</option>
            <option value="NBU REMOTE">NBU REMOTE</option>
            <option value="COSL 221">COSL 221</option>
            <option value="COSL 222">COSL 222</option>
            <option value="COSL 223">COSL 223</option>
            <option value="COSL 225">COSL 225</option>
            <option value="AWB DUTA 7">AWB DUTA 7</option>
            <option value="BAYU CAKRAWALA">BAYU CAKRAWALA</option>
            <option value="BAYU CONSTRUCTOR">BAYU CONSTRUCTOR</option>
            <option value="LOGINDO RALIANCE">LOGINDO RALIANCE</option>
       </select>
  </div>

	<div class="form-group">
  		<label class="control-label" for="des">Deskripsi</label>
      <textarea class="form-control" placeholder="input here..." rows="10" name="des" id="des" required></textarea>
  		
	</div>

	<div class="form-group">
	<input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
	<input type="reset" value="Reset" class="btn btn-danger">
	</div>

	</form>
	</div>
</div>

</div>
<?php include "footer.php"; ?>
</body>
</html>