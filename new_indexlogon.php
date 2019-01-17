<!--로그인후 첫페이지-->
<?php   
    $conn = mysqli_connect("localhost","root",'01042372120');
    mysqli_select_db($conn, "RareAnimalLove");
    $result = mysqli_query($conn, "SELECT * FROM user");
    session_start();
?>
<html> 
   <a href=""></a>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="mytemplate.css?ver=11">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>     
        <script>
            $(document).ready(function(){ //페이지가 시작할때바로 id=toto인 태그에 main_article.php를 실행시켜줍니다. 
                $("#toto").load("newmain.php"); 
            });
            function career_ranking(){ //이 밑은버튼을 클릭했을때 onclick함수로 페이지를 실행할 함수들 
                $("#toto").load("new_careerrank.php"); 
                return false;
            }
            function star_ranking(){
                $("#toto").load("new_starranking.php"); 
                return false;
            }
            function match_ranking(){
                $("#toto").load("new_matchranking.php"); 
                return false;
            }
            function distance_ranking(){
                $("#toto").load("distance_ranking.php"); 
                return false;
            }
            
        </script>
    </head>
    <body id="target">
        <div class="container">
            <!--header-->
            <header>
                <div class="con">
                    <a href="#" id="aa" onclick="logon_article()"><img src=https://i.pinimg.com/originals/0a/e1/5e/0ae15e66f2be1672974f3e3d86c52e86.png id="logo" ></a>
                    <a href="#" id="a1" onclick="logon_article()">RARE ANIMAL LOVE</a>
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
                        
                        <h1>-관심있으신 분야의 전문가순위-</h1>
                        <div id="rank">
                            <input type="submit" name="name" class='soso' value="경력 높은순으로 나열" onclick="career_ranking()"> <!--onclick은 눌렀을때 실행하는 함수-->
                            <input type="submit" name="name" class='soso' value="별점순으로 나열" onclick="star_ranking()">
                            <input type="submit" name="name" class='soso' value="매치성사된 순으로 나열" onclick="match_ranking()">
                            <input type="submit" name="name" class='soso' value="거리순으로 나열 " onclick="distance_ranking()">
                            
                        </div>
                        <div id="toto"> <!-- 랭킹정보 삽입부분--> </div>
                        <br>

                        <label for="check">-다른 분야의 전문가순위 검색-</label>
                                <input type="checkbox" name="expert" id="check" placeholder="">
                            <br><br>
                            <form action="new_process.php" id="test" method="get">
                                <div class="form-group">
                                    <label>관심분야-</label> 
                                    <label>포유류
                                    <input type="checkbox" name="check1" value="1"> </label>
                                    <label>파충류
                                    <input type="checkbox" name="check1" value="2"> </label>
                                    <label>조류
                                    <input type="checkbox" name="check1" value="3"> </label>
                                    <label>어류
                                    <input type="checkbox" name="check1" value="4"> </label>
                                    <label>양서류
                                    <input type="checkbox" name="check1" value="5"> </label>
                                    <label>무척추동물
                                    <input type="checkbox" name="check1" value="6"> </label>
                                    <label>거미/곤충류
                                    <input type="checkbox" name="check1" value="7"> </label>
                                </div><br>
                                <div class="form-group">
                                    <label>관심분야-</label> 
                                    <label>음식
                                    <input type="checkbox" name="check2" value="1"> </label>
                                    <label>질병
                                    <input type="checkbox" name="check2" value="2"> </label>
                                    <label>행동
                                    <input type="checkbox" name="check2" value="3"> </label>
                                </div><br>
                                <input type="submit" value='그 분야의 전문가순위보기' id='expertrank' onclick="newmain()" >
                            </form>
                        <div id='tq'></div>
                        <div id="contents">
                            
                            
                        </div> <!--각페이지별 정보삽입부분 -->
                    </article>
                </div>
                <div id="ss"><!--로그인된 유저 정보표시-->
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
        <script> //회원가입페이지와 마찬가지로 클릭하면 추가 체크박스가 보임
            $("#test").hide();
            $(document).ready(function() {
                $("#check").change(function() {
                    if ($("#check").is(":checked")) {
                        $("#test").show();
                    } else{
                        $("#test").hide();
                    } 
                });
            });
        </script>
    </body>
</html>
