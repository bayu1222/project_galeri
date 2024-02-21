<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
</head>
<body>
    <form action="proses_komentar.php"method="POST">
        <?php
        $koneksi= mysqli_connect("localhost","root","","galeri");
        $FotoID=$_GET['FotoID'];
        $sql=mysqli_query($koneksi, "SELECT*FROM foto WHERE FotoID='$FotoID'");
        while($show=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="FotoID" value="<?=$show['FotoID'];?>"hidden>
        <table>
            <a href="halaman_utama.php">Kembali</a>
            <tr>
                <td>Judul</td>
                <td><input type="text"name="JudulFoto"value="<?=$show['JudulFoto'];?>"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text"name="DeskripsiFoto"value="<?=$show['DeskripsiFoto'];?>"></td>
            </tr>
            <tr>
                <td>FotoID</td>
                <td><?="<img src='file/$show[LokasiFile]' width='70' />"; ?></td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td><input type="text"name="IsiKomentar"></td>
            </tr>
            <tr>
            <td><button>Komentar</button></td>
            </tr>
            <?php
            } 
            ?>
        </table>
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <td>Komentar</td>
                <th>Tanggal</th>
                </table>
        </tr>
            <tr>
             <?php
            $koneksi= mysqli_connect("localhost","root","","galeri");
            $UserID=$_SESSION['UserID'];
            $sql="SELECT*FROM komentarfoto,User WHERE FotoID='".$_GET['FotoID']."' and komentarfoto.UserID=user.UserID";
            $query=mysqli_query($koneksi,$sql);
                while($show = mysqli_fetch_array($query)){
             ?>
                 <tr>
                    <td><?=$show['KomentarID'];?></td>
                    <td><?=$show['NamaLengkap'];?></td>
                    <td><?=$show['IsiKomentar'];?></td>
                    <td><?=$show['TanggalKomentar'];?></td><p>
                 </tr>   
                 <?php
            }
                 ?>
            </tr>
        </table>
</body>
</html>