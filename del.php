<?php
include "koneksi.php";

mysqli_query($koneksi, "DELETE FROM sc WHERE ID = '".$_GET['id']."'");
echo "<script language=javascript>parent.location.href='rekap.php';</script>";
?>