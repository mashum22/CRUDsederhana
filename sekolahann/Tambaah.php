<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2> S1 SEKOLAH | EDIT DATA SISWA </h2>
        <br/>
        <a href= "index.php">KEMBALI</a>
        <h3>edit data siswa</h3>

        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $query= mysqli_query($koneksi,"select * from siswa where is='$id'");
        while($data = mysqli_fetch_array($query)){
            ?>
            <form method ="post" action="edit_aksi.php">
                <table>
                    <tr>
                        <td>nama</td>
                        <td>
                            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <input type="text" name="nama" value=" <?php echo $data['nama'];?>">
                        </td>
                    </tr>
                    <tr>
                        <td>nis</td>
                        <td><input type="number" nama="nis" value=" <?php echo $data['nis'];?>"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="alamat" value=" <?php echo $data['alamat'];?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="simpan"></td>
                    </tr>
                </table>
            </form>
            <?php
        }
        ?>
    </body>
</html>