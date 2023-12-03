<?php
$koneksi = mysqli_connect("localhost","root","","school");
// ->>>>> "server","user","password","nama database"


if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqli_connect_error();
}
?>