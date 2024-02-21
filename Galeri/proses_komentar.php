<?php
$koneksi=mysqli_connect("localhost","root","","galeri");
session_start();
$id=$_POST['FotoID'];
$komen=$_POST['IsiKomentar'];
$tanggal=date("Y-m-d");
$UserID=$_SESSION['UserID'];
$sql="INSERT INTO komentarfoto SET FotoID='$id', UserID='$UserID', IsiKomentar='$komen', TanggalKomentar='$tanggal'";
$query=mysqli_query($koneksi,$sql);
header('location:komentarfoto.php?FotoID='.$id);
?>