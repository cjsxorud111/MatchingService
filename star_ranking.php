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
                           <h1>별점 높은순 랭킹</h1>
                            <?php
                                echo '<br>';
                                $special1 = $_SESSION['interest1']; //세션의 유저의interest값을 스페셜1변수에 담아서 검색
                                $special2 = $_SESSION['interest2'];
                                $sql = "SELECT * FROM user LEFT JOIN interest1 ON user.special1=interest1.NUMBER WHERE special1=$special1 or special2=$special2"; //조인으로 interest1에서 정보가져옴 
                           
                                //1. 페이지 자체를 비동기식으로 전환하는방법: 이 페이지에서 php로 알고리즘 적용하여 정렬한다. 
                                //2. 자바스크립트로 태그 아이디 따와서 알고리즘 적용: 하지만 현재 아래 태그에 아이디 적용이 안됨.
                                
                                $result = mysqli_query($conn, $sql); 
                                $test = 0;
                                $array = [];
                                while($row = mysqli_fetch_assoc($result)){ //유저 정보 출력
                                    
                                    $array[$test] = $row['stareve']; //경력을 array배열에 넣어줌
                                    $test = $test+1;
                                        
                                };
                           
                                echo '관심있으신 분야의 전문가 목록은 총 '.$test.'명 입니다.';
                                echo '<br>';
                                rsort($array); //내림차순 정렬
                                $array2 = array_unique($array); //중복값 제거 함수                                
                                echo '<br>';

                                    for($ii=0; $ii<$test; $ii++){ //2중 for문으로 차례로 비교하며 경력높은순위 정렬
                                        
                                      $result = mysqli_query($conn, $sql); //반복문이 한번 끝날때마다 sql문을 result변수에 계속 담아서 conn해주어야 함
                                        
                                        for($aa=0; $aa<$test; $aa++){
                                             
                                            $row = mysqli_fetch_assoc($result); //result를 $row에 
                                            
                                            $siv = $row['stareve'];
                                            
                                            if($array2[$ii] == $siv){
                                                 
                                                echo '<form action="expertinfo1.php" id="'.$row['number'].'" method="get">'.'유저이름: '.$row['username'].'<input type="hidden" name="이름" value="'.$row['username'].'">'.",\n\n\n".'전문분야: '.$row['NAME'].",\n\n\n".'이메일:  '.$row['email']."\n\n\n".'경력:  '.$row['career']."\n\n\n".'별점:  '.$row['stareve'].'<input type="submit" value="자세한정보">'.'</form>'."\n";
                                                
                                            }
                                         }
                                      }
                             ?>
                        </div>
                    </article>

        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>    
    </body>
</html>
