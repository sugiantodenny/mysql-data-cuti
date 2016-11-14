<?php
session_start();
$SERVER = 'localhost';
$DATABASE= '2016';
$username = 'root';
$pass = '';

$conn= mysqli_connect($SERVER,$username,$pass,$DATABASE);
if (!$conn){
    die("Connection failed :" .mysqli_connect_error());
}//else
   // echo "koneksi berhasil";
echo "<br>";
$user=$_POST["user"];
$pass=$_POST["pass"];


$query="SELECT * FROM username WHERE user='".$user." ' ";
$result=mysqli_query($conn,$query);
$a=mysqli_num_rows($result);


    if($result){
        $row=mysqli_fetch_row($result);

        if ($row[1]== $pass){
            echo "login berhasil". $row[2];
            echo "<br>";
            echo "Menu";
            echo "<br>";
            echo "<a href='cuti.php' >1.Masukkan data cuti</a>";
            echo "<br>";
            echo "<a href='history.php'>2.Tampilkan History</a>"."<br>";
            echo "<a href='update.php'>3.update</a>";

            $_SESSION['user']=$user;
        }else{
            echo "Kombinasi username dan password salah";//user ada tapi password salah
        }

    }else{
        echo "Kombinasi username dan password salah";
    }
?>