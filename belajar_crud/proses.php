<?php
    include 'koneksi.php';

    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){

            $no_ticket = $_POST['no_ticket'];
            $cluster = $_POST['cluster'];
            $segment = $_segment['segment'];
            $foto = $_foto['foto'];
            $alamat = $_alamat['alamat'];

            $query = "INSERT INTO tb_siswa VALUES(null, '$no_ticket','$cluster','$segment','$foto,'$alamat')";
            $sql = mysqli_query($conn, $query);

            if($sql){
                echo "Data Berhasil Ditambahkan <a href='index.php'>[Home]</a>";
            } else {
                echo $query;
            }

            //echo $no_ticket. " | ".$cluster. " | ".$segment. " | ".$foto. " | ".$alamat. " | ";

            //echo "<br>Tambah data <a href='index.php'>[Home]</a>";

        if($_POST['aksi'] == "add"){
            echo "Tambah Data <a href='index.php'>[Home]</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Data <a href='index.php'>[Home]</a>";

        }
    }
    if(isset($_GET['hapus'])){
        echo "Hapus Data <a href='index.php'>[Home]</a>";
    }
    

?>
