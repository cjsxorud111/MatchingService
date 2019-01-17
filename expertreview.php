<?php
   
    $conn = mysqli_connect("localhost","root",'01042372120');
    mysqli_select_db($conn, "RareAnimalLove");
    $result = mysqli_query($conn, "SELECT * FROM user");
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
            <!--header-->
            <header>
                <div class="con">
                    <a href="index_logon.php" id="aa"><img src=https://i.pinimg.com/originals/0a/e1/5e/0ae15e66f2be1672974f3e3d86c52e86.png id="logo" ></a>
                    <a href="index_logon.php" id="a1">RARE ANIMAL LOVE</a>
                </div>
            </header>
            <!--end-->
            <div class="rows">
                <!--nav-->
                <nav>
                    <ul>
                        <li> <a href="chatting.php">전문가와 채팅</a></li>
                        <li> <a href="expertreview.php">전문가 평가</a></li>
                    </ul>
                </nav>
                <!--nav-->

                <div class="co">
                    <article>
                        <br>   
                        <div id='riv'>          
                           <?php 
                                $username=$_GET['이름'];
                                $sql="SELECT * FROM user WHERE username='$username'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                echo '<strong>'.$_GET['이름'].'전문가평가'.'</strong>';
                                echo '<input type="hidden" name="이름" value="'.$row['username'].'">';
                                /**/
                                echo '<form action="review_process.php" method="get">'.'<input type="hidden" name="toto0" value="'.$row['username'].'" >'.'별점주기'.'<input type="range" list="tickmarks" name="toto1">'.'한줄평'.'<textarea name="toto2" cols="11" rows="10">'.'</textarea>'.'<input type="submit" name="name">',
                                '</form>';  //별점과 한줄평을 수집해서 db의 review테이블에 저장
                            ?><br><br>
                        </div>
                        <datalist id="tickmarks">
                          <option value="0" label="0%">
                          <option value="10">
                          <option value="20">
                          <option value="30">
                          <option value="40">
                          <option value="50" label="50%">
                          <option value="60">
                          <option value="70">
                          <option value="80">
                          <option value="90">
                          <option value="100" label="100%">
                        </datalist>
                    </article>
                </div>
                <div id="ss">
                    <div id="sok">
                    <?php 
                        session_start();
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
