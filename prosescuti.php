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

    echo $tglawal." ".$tglakhir;
    $user=$_SESSION["user"];

    $query="INSERT INTO datacuti VALUES ('','$user','$tglawal','$tglakhir')ON duplicate KEY UPDATE tglawal=$tglawal AND tglakhir=$tglakhir";
    $result=mysqli_query($conn,$query);

    if ($query){
        echo "Data berhasil disimpan";
    }else{
        echo "Data tidak berhasil disimpan";
    }
}
}else{
    echo "<a href=index.php>Silahkan Login</a>";
}