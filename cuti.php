<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cuti</title>
</head>
<style>

</style>
<body>
<?php
session_start();
if (!isset($_SESSION['user'])){
    echo "Harap Login";
    echo "<a href='index.php'>";
}else{
    echo " ".($_SESSION['user']);
    
}

?>
<h2>Form Login</h2>
<form method="post" action="prosescuti.php">
    <table>
        <tr>
            <td>Tanggal awal: </td>
            <td><input type="text" name="tglawal"></td>
        </tr>
        <tr>
            <td>Tanggal akhir: </td>
            <td><input type="text" name="tglakhir"></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="simpan">
</form>




</body>
</html>
