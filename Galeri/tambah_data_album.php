<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data album</title>
</head>
<body>
<H3>Tambah Data Album</H3>
    <form action="" method="POST">
        <label for="">AlbumID:</label>
        <input type="text" name="AlbumID">
        <p>
        <label for="">NamaAlbum</label>
        <input type="text" name="NamaAlbum">
        <p>   
        <label for="">Deskripsi:</label>
        <input type="text"name="Deskripsi">
        <p>   
        <label for="">TanggalDibuat:</label>
        <input type="date" name="TanggalUnggah">
        <p>   
        <label for="">UserID:</label>
        <input type="text" name="UserID">
        <p>   
        <input type="submit" value="simpan">

</form>
</body>
</html>
<?php
$koneksi=mysqli_connect("localhost","root","","galeri");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $AlbumID=$_POST['AlbumID'];
    $NamaAlbum=$_POST['NamaAlbum'];
    $Deskripsi=$_POST['Deskripsi'];
    $TanggalDibuat=$_POST['TanggalDibuat'];
    $UserID=$_POST['UserID'];
    $sql="INSERT INTO album (AlbumID,NamaAlbum,Deskripsi,TanggalDibuat,UserID) value ('$AlbumID','$NamaAlbum','$Deskripsi','$TanggalDibuat','$UserID')";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:data_album.php?status=sukses');
    }

}

?>

    
</body>
</html>