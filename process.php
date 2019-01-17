<!--write.php페이지에서 입력받은정보를 db에 저장-->
<?php
    $conn = mysqli_connect("localhost", "root", "01042372120");
    mysqli_select_db($conn, "RareAnimalLove");

    $sql = "INSERT INTO user (id,password,username,email,interest1,interest2,expert,special1,special2,career,license,licensetype,created) VALUES('".$_POST['id']."','".$_POST['password']."','".$_POST['username']."','".$_POST['email']."','".$_POST['check1'].$_POST['check2'].$_POST['check3'].$_POST['check4'].$_POST['check5'].$_POST['check6'].$_POST['check7']."','".$_POST['check8'].$_POST['check9'].$_POST['check10']."','".$_POST['expert']."','".$_POST['check15'].$_POST['check16'].$_POST['check17'].$_POST['check18'].$_POST['check19'].$_POST['check20'].$_POST['check21']."','".$_POST['check22'].$_POST['check23'].$_POST['check24']."','".$_POST['career']."','".$_POST['check11'].$_POST['check12'].$_POST['check13'].$_POST['check14']."','".$_POST['licensetype']."', now())"; //입력받은 정보를 한번에 db에 저장하는 INSERT문

    $result = mysqli_query($conn, $sql); 

    //echo '<script>'alert('회원가입이완료');'</script>';

    header('Location: index.php'); //작동 후 이페이지는 보여주지않고 바로 index.php로 넘어감
?>