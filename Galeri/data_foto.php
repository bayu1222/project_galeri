<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data foto</title>
</head>
<body>
    <center>
        <h2>Data foto</h2>
        <a href="tambah_data_foto.php">tambah data foto</a>
        <table border=1>
            <tr>
                <th>fotoid</th>
                <th>judul foto</th>
                <th>deskripsi foto</th>
                <th>tanggal unggah</th>
                <th>lokasi file</th>
                <th>album id</th>
                <th>user id</th>
                <th>aksi</th>
                
                <center>
            </tr><tr>
            <?php
            $koneksi= mysqli_connect("localhost","root","","galeri");
            session_start();
            if(!isset($_SESSION['UserID'])){
                header('location:data_foto.php');
            }
            else{
            $UserID=$_SESSION['UserID'];
            $sql ="SELECT*FROM foto WHERE UserID='$UserID'";
            }
                $query = mysqli_query ($koneksi,$sql);
                while( $show = mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?=$show ['FotoID']; ?></td>
                <td><?=$show ['JudulFoto']; ?></td>
                <td><?=$show ['DeskripsiFoto']; ?></td>
                <td><?=$show ['TanggalUnggah']; ?></td>
                <td><?="<img src='file/$show[LokasiFile]' width='70'/>";?></td>
                <td><?=$show ['AlbumID']; ?></td>
                <td><?=$show ['UserID']; ?></td>
                <td>
                <a href="edit_foto.php?FotoID=<?=$show['FotoID'];?>">edit</a>
        <a href="hapus_foto.php?FotoID=<?=$show['FotoID'];?>">hapus</a>
                </td>
            </td>
            </tr>
            <?php
            } ?>
            </tr>
        </table>
    </center>
</body>
</html>