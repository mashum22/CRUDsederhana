<html>
    <head>
        <title></title>
    </head>
    <body>
        <h2>S1 SEKOLAH | DATA SISWA</h2>
        <br/>
        <a href="tambah.php">+ tambah data</a>
        <br/>
        <table border="1">
            <tr>
                <th>no</th>
                <th>nama</th>
                <th>NIS</th>
                <th>alamat</th>
                <tr>opsi</tr>
            </tr>
            <?php
            include 'koneksi.php';
            $no =1;
            $query = mysqli_query($koneksi,"select * from siswa");
            while ($data= mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                </td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>