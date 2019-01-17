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

        <div class="container">
            <header>
                <div class="con">
                    <a href="index_logon.php" id="aa"><img src=https://i.pinimg.com/originals/0a/e1/5e/0ae15e66f2be1672974f3e3d86c52e86.png id="logo" ></a>
                    <a href="index_logon.php" id="a1">RARE ANIMAL LOVE</a>
                </div>
            </header>
            

            <div class="rows">  
                <nav></nav>

                <div class="co">
                    <article>
                        <br> 
                        
                        <div id='inf'>
                        <img src="photo.jpg" alt="프로필사진" id="pro">
                        <br>
                            <strong> 전문가 세부내용 </strong>
                            <?php //전문가 정보 출력 
                            echo '1. 전문가이름:'.$_GET['이름'];
                            echo '<br>';
                            $username=$_GET['이름'];
                            $sql = "SELECT * FROM user WHERE username='$username'";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            echo '2. 이메일주소:'.$row['email'];
                            echo '<br>';
                            echo '3. 전문가아이디:'.$row['id'];
                            echo '<br>';
                            echo '4. 별점평균:'.$row['stareve'];
                            $sum = 0;
                            $sql = "SELECT * FROM review WHERE name='$username'"; //db의 리뷰 테이블에서 전문가이름과 같은 사람들의 정보를 모두 검색
                            $result = mysqli_query($conn, $sql);
                            while( $row = mysqli_fetch_assoc($result)){ //반복문으로 검색된 전문가의 수를 셈
                                $sum+= 1;
                            };
                            
                            if($sum !== 0){
                                echo '<br>'.'5. 등록된 사용자 한줄평가는:'.'총 '.$sum.' 개입니다.'; 
                            }else{
                                echo '<br>'.'5. 등록된 사용자 한줄평가는:'.'총 0 개입니다.'; 
                            }
                            
                            $result = mysqli_query($conn, $sql);
                            echo "<div id=ream>";
                                while( $row = mysqli_fetch_assoc($result)){
                                    echo '<br>';
                                    echo '<div id=one>'.$row['expertreview'].'</div>'; //한줄평가 출력부분
                                };
                            echo "</div>";
                            
                            $sql = "SELECT * FROM user WHERE username='$username'"; //다시 유저네임을 가져오기 위해 $row에 sql문을 담아야함 
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                            ?>
                            
                        </div>
                        <?php
                        echo '<form action="chatting.php" id="'.$row['number'].'" method="get">'.$row['username'].'님 과'.'<input type="hidden" name="이름" value="'.$row['username'].'" value="채팅시작">'.'<input type="submit" value="채팅시작">'.'</form>'."\n";
                        ?>
                    </article>
                </div>
                <div id="ss"><!--현재로그인된사용자정보-->
                    <div id="sok">
                        <?php 
                        echo $_SESSION['is_login'];
                        ?>     
                    </div>
                    <p id='sso'>님 환영합니다</p>
                    <a href="./logout.php" id='lota'>로그아웃</a>
                </div>
            </div>
            <footer>
                <div id="foot">
                    하단
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    </body>
</html>
