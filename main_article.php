<?php
    $conn = mysqli_connect("localhost","root",'01042372120');
    mysqli_select_db($conn, "RareAnimalLove");
    $result = mysqli_query($conn, "SELECT * FROM user");
    session_start();
?>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="mytemplate.css?ver=11">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
    </head>
    
    <body id="target">
        <article>
           <div id="soku">
                <?php 
                    echo '<br>';
                    $special1 = $_SESSION['interest1']; //세션의 유저의interest값을 스페셜1변수에 담아서 검색
                    $special2 = $_SESSION['interest2'];
                    $sql = "SELECT * FROM user LEFT JOIN interest1 ON user.special1=interest1.NUMBER WHERE special1=$special1 OR special2=$special2"; //조인으로 interest1에서 정보가져옴 

                    //1. 페이지 자체를 비동기식으로 전환하는방법: 이 페이지에서 php로 알고리즘 적용하여 정렬한다. 
                    //2. 자바스크립트로 태그 아이디 따와서 알고리즘 적용: 하지만 현재 아래 a태그에 아이디 적용이 안됨.
                    $result = mysqli_query($conn, $sql);

                    $test = 0;
                    $array = [];
                    while($row = mysqli_fetch_assoc($result)){ //유저 정보 출력
                        $test = $test+1;
                        $array[$test] = $row['career'];

                    };
                    $idch = $_POST['id'];
                    echo '관심있으신 분야의 전문가 목록은 총 '.$test.'명 입니다.';

                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){ //유저 정보 출력

                    echo '<form action="expertinfo1.php" id="ddibb" method="get">'.'유저이름: '.$row['username'].'<input type="hidden" name="이름" value="'.$row['username'].'">'.",\n\n\n".'전문분야: '.$row['NAME'].",\n\n\n".'이메일:  '.$row['email']."\n\n\n".'경력:  '.$row['career'].'</form>';

                    };                            
                 ?>
            </div>
        </article>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>    
    </body>
</html>
