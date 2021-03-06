<html>
<head>

<?php 
include "header.php";
include "alerts.php";
include "koneksi.php"; 

$sql = mysqli_query($koneksi,"SELECT id, nama, tgl, minggu, kondisi, kategori, loc, des FROM sc ORDER BY tgl DESC");
?>
<script type="text/javascript">
window.apex_search = {};
apex_search.init = function (){
	this.rows = document.getElementById('data').getElementsByTagName('TR');
	this.rows_length = apex_search.rows.length;
	this.rows_text =  [];
	for (var i=0;i<apex_search.rows_length;i++){
        this.rows_text[i] = (apex_search.rows[i].innerText)?apex_search.rows[i].innerText.toUpperCase():apex_search.rows[i].textContent.toUpperCase();
	}
	this.time = false;
}
apex_search.lsearch = function(){
	this.term = document.getElementById('S').value.toUpperCase();
	for(var i=0,row;row = this.rows[i],row_text = this.rows_text[i];i++){
		row.style.display = ((row_text.indexOf(this.term) != -1) || this.term  === '')?'':'none';
	}
	this.time = false;
}
apex_search.search = function(e){
    var keycode;
    if(window.event){keycode = window.event.keyCode;}
    else if (e){keycode = e.which;}
    else {return false;}
    if(keycode == 13) { apex_search.lsearch(); } else { return false; }
}
</script>
</head>

<body onload="apex_search.init();">
<div class="container">
<?php include "nav.php"; ?>
<div class="row">
    <div class="col-lg-12">
        <div class="page-header">
            <h1>Stopcard Report ICT & DM</h1>
        </div>
    </div>
</div>

<p>
<div class="row">
<div class="col-lg-4">
    <div class="input-group">
	<input placeholder="masukkan kata kunci..." type="text" size="30" class="form-control" maxlength="1000" value="" id="S" onkeyup="apex_search.search(event);" />
	<span class="input-group-btn">
	<input  type="button" class="btn btn-default" value="Search" onclick="apex_search.lsearch();"/>
	</span>
	</div>
</div>


</div>



<div class="row">
	<div class="col-md-12">
	<p>
		<div class="page-header">
            <p><h4>Total Record : <?php echo mysqli_num_rows($sql) ." Data"?></h4></p>
        </div>
		
		<table class="table table-hover table-bordered">
			<thead>
				<tr>
					<th width="5%"><center>NO</center></th>
					<th>NAMA</th>
					<th>TANGGAL</th>
					<th>MINGGU</th>
					<th>KONDISI</th>
					<th>KATEGORI</th>
					<th>LOKASI</th>
					<th>DESKRIPSI</th>
					<th width="15%"><center>ACTION</center></th>
				</tr>
			</thead>
			<tbody id="data">
			<?php $no=1; while ($row = mysqli_fetch_array($sql)) { ?>
				<tr>
					<td align="center"><?php echo $no; ?></td>
					<td><?php echo $row['nama']; ?></td>
					<td><?php echo $row['tgl']; ?></td>
					<td><?php echo $row['minggu']; ?></td>
					<td><?php echo $row['kondisi']; ?></td>
					<td><?php echo $row['kategori']; ?></td>
					<td><?php echo $row['loc']; ?></td>
					<td style="text-align: justify;"><?php echo $row['des']; ?></td>
					<td align="center">
					<a href="form-edit.php?id=<?php echo $row['id']; ?>">update</a> 
					| 
					<a href="del.php?id=<?php echo $row['id']; ?>" onclick ="if (!confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')) return false;">delete</a>
					</td>
				</tr>
			<?php $no++; } ?>	
			</tbody>
		</table>
	</p>	
	</div>
</div>	

</div>
<?php include "footer.php"; ?>
</body>
</html>
