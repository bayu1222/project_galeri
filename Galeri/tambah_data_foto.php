<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data foto</title>
</head>
<body>
<a href="halaman_utama.php">Kembali</a>
<H3>Tambah Data Foto</H3>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="">FotoID:</label>
        <input type="text" name="FotoID">
        <p>
        <label for="">JudulFoto:</label>
        <input type="text" name="JudulFoto">
        <p>   
        <label for="">DeskripsiFoto:</label>
        <input type="text"name="DeskripsiFoto">
        <p>   
        <label for="">TanggalUnggah:</label>
        <input type="date" name="TanggalUnggah">
        <p>   
        <label for="">LokasiFile:</label>
        <input type="file" name="LokasiFile">
        <p>   
        <label for="">AlbumID:</label>
        <input type="text" name="AlbumID">
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
    $FotoID=$_POST['FotoID'];
    $JudulFoto=$_POST['JudulFoto'];
    $DeskripsiFoto=$_POST['DeskripsiFoto'];
    $TanggalUnggah=$_POST['TanggalUnggah'];
    $AlbumID=$_POST['AlbumID'];
    $UserID=$_POST['UserID'];
    $LokasiFile=$_FILES['LokasiFile']['name'];
    $file_tmp=$_FILES['LokasiFile']['tmp_name'];
    move_uploaded_file($file_tmp, 'file/'.$LokasiFile);
    $sql="INSERT INTO foto(FotoID,JudulFoto,DeskripsiFoto,TanggalUnggah,LokasiFile,AlbumID,UserID) value ('$FotoID','$JudulFoto','$DeskripsiFoto','$TanggalUnggah','$LokasiFile','$AlbumID','$UserID')";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:data_foto.php?status=sukses');
    }

}

?>

    
</body>
</html>