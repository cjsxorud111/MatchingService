<!--write.php페이지에서 입력받은정보를 db에 저장-->
<?php
$conn = mysqli_connect("localhost", "root", "01042372120");
mysqli_select_db($conn, "RareAnimalLove");
session_start();

$_SESSION['che1'] = $_GET['check1'];
$_SESSION['che2'] = $_GET['check2'];
$use = $_SESSION['che1'];
echo $use;


$result = mysqli_query($conn, $sql); 
header('Location: new_indexlogon.php'); 
?>