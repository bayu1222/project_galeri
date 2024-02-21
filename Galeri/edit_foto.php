<?php
    $koneksi=mysqli_connect("localhost","root","","galeri");
    $FotoID=$_GET['FotoID'];
    $sql="SELECT * FROM foto WHERE FotoID=$FotoID";
    $query=mysqli_query($koneksi,$sql);
    while( $foto=mysqli_fetch_array($query)){
?>

<html>
    <head><center>
        <title> Edit Data Foto</title>
        <style>
    body {
    background-color:orange
}
    </style>
</head>
<body>
    <h3>Edit Data Foto</h3>
    <form action="" method="post">
        <fieldset>
            <div>

            <input type="hidden" name="FotoID" value="<?php echo $foto['FotoID']?>"/>
           </div>
           <center>
          <div>
            <label for="FotoID">FotoID</label><br>
            <input type="text" name="FotoID" value="<?php if(isset($_GET['FotoID'])){echo $foto['FotoID'];}?>"/>
          </div>
          <div>
            <label for="JudulFoto">JudulFoto</label><br>
            <input type="text" name="JudulFoto" value="<?php if(isset($_GET['FotoID'])){echo $foto['JudulFoto'];}?>"/>
          </div>
           <div>
            <label for="DeskripsiFoto">DeskripsiFoto</label><br>
            <input type="text" name="DeskripsiFoto" value="<?php if(isset($_GET['FotoID'])){echo $foto['DeskripsiFoto'];}?>"/>
          </div>
          <div>
            <label for="TanggalUnggah">TanggalUnggah</label><br>
            <input type="date" name="TanggalUnggah" value="<?php if(isset($_GET['FotoID'])){echo $foto['TanggalUnggah'];}?>"/>
          </div>
          <div>
            <label for="LokasiFile">LokasiFile</label><br>
            <input type="text" name="LokasiFile" value="<?php if(isset($_GET['FotoID'])){echo $foto['LokasiFile'];}?>"/>
          </div>
           <div>
            <label for="AlbumID">AlbumID</label><br>
            <input type="text" name="AlbumID" value="<?php if(isset($_GET['FotoID'])){echo $foto['AlbumID'];}?>"/>
          </div>
           <div>
            <label for="UserID">UserID</label><br>
            <input type="text" name="UserID" value="<?php if(isset($_GET['FotoID'])){echo $foto['UserID'];}?>"/>
          </div>

          <br>
          <div>
            <button >Save</button>
</div>
</fieldset>
</form>
<?php
}
?>
</body>
</html></center>
</center>
<?php
$koneksi=mysqli_connect("localhost","root","","galeri");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $FotoID=$_POST['FotoID'];
    $JudulFoto=$_POST['JudulFoto'];
    $DeskripsiFoto=$_POST['DeskripsiFoto'];
    $TanggalUnggah=$_POST['TanggalUnggah'];
    $LokasiFile=$_POST['LokasiFile'];
    $AlbumID=$_POST['AlbumID'];
    $UserID=$_POST['UserID'];

    $sql="UPDATE foto SET FotoID='$FotoID' , JudulFoto='$JudulFoto', DeskripsiFoto='$DeskripsiFoto', TanggalUnggah='$TanggalUnggah', LokasiFile='$LokasiFile', AlbumID='$AlbumID' WHERE FotoID=$FotoID";
    $query=mysqli_query($koneksi,$sql);

    if($query){

        header('location:data_foto.php?status=sukses');

    }
}
?>