<?php
    $conn = mysqli_connect("localhost", "root", "01042372120");
    mysqli_select_db($conn, "RareAnimalLove");

    $sql = "INSERT INTO review (name,starpoint,expertreview) VALUES ('".$_GET['toto0']."','".$_GET['toto1']."','".$_GET['toto2']."')"; //입력받은 데이터를 review 테이블에 저장
    $result = mysqli_query($conn, $sql);

    $username=$_GET['toto0'];
    echo $username;
    echo '<br>';
    $sql = "SELECT * FROM review WHERE name='$username'";
    $result = mysqli_query($conn, $sql);
    while( $row = mysqli_fetch_assoc($result)){ //starpoint별점의 평균을 계산하기 위해 현제 review 테이블에 저장되어있는 모든 starpoint를 더하고 그 수 를 센다. 
       
        echo $row['starpoint'];
        echo '<br>';
        
        $starnum += 1;
        $star += $row['starpoint'];
     };

    $stareve = $star/$starnum; //평균을 구하여 stareve함수에 넣는다. 
    echo '<br>';
    echo $stareve;
    $sql = "UPDATE user SET stareve='$stareve' WHERE username='$username'"; //user테이블에 stareve열을 새로운 평균별점으로 업데이트한다. 
    $result = mysqli_query($conn, $sql);
     
     $sql="SELECT * FROM user WHERE username='$username'";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result);
     $matchnum = $row['matchnum'];
    
    
    if($matchnum==null){
        $matchnum=1;
    }else{
        $matchnum=$matchnum+1;
    }/**/
    $sql="UPDATE user SET matchnum='$matchnum' WHERE username='$username'";
    $result = mysqli_query($conn, $sql); 
     
   
    header('Location: index_logon.php');
?>