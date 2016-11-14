<?php
session_start();

if (isset($_SESSION['user'])){

$SERVER = 'localhost';
$DATABASE= '2016';
$username = 'root';
$pass = '';

$conn= mysqli_connect($SERVER,$username,$pass,$DATABASE);
if (!$conn) {
    die("Connection failed :" . mysqli_connect_error());



}else{
    $tglawal=$_POST["tglawal"];
    $tglakhir=$_POST["tglakhir"];
    $berhasil = 0;

    echo $tglawal." ".$tglakhir;
    $user=$_SESSION["user"];

    $cek_data = "SELECT * FROM datacuti WHERE tglawal='$tglawal' AND tglakhir='tglakhir'";
    $query_check = mysqli_query($conn, $cek_data);

    if (mysqli_num_rows($query_check) <= 0){
      $query="INSERT INTO datacuti VALUES ('','$user','$tglawal','$tglakhir')ON duplicate KEY UPDATE tglawal=$tglawal AND tglakhir=$tglakhir";
      $result=mysqli_query($conn,$query);
      $berhasil = 1;
    }

    if ($berhasil == 1){
        echo "Data berhasil disimpan";
    }else{
        echo "Data redundant";
    }
}
}else{
    echo "<a href=index.php>Silahkan Login</a>";
}
