<!--회원가입페이지-->
<?php
    $conn = mysqli_connect("localhost","root",'01042372120');
    mysqli_select_db($conn, "RareAnimalLove");
    $result = mysqli_query($conn, "SELECT * FROM user");
?>
<html>
    <head>  
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="mytemplate.css?ver=9">
        
    </head>
    <body id="target">
        <div class="container">
            <header>
                <div class="con">
                    <a href="index.php" id="aa"><img src=https://i.pinimg.com/originals/0a/e1/5e/0ae15e66f2be1672974f3e3d86c52e86.png id="logo" ></a>
                    <a href="index.php" id="a1">RARE ANIMAL LOVE</a>
                </div>
            </header>
            <div class="rows">
                <div class="co">
                    <article> <!--회원가입본문:모두 회원가입정보를 입력받는버튼, 폼태그로 한번에 데이터를 process.php페이지로 보냄-->
                        <form action="process.php" name="signup" onsubmit="return checking()" method="post" autocomplete='off'>
                            <label for="idcheck">아이디</label> 
                            <input type="text" name="id" id="idcheck" placeholder="아이디를 적어주세요.">
                            <div id="idch">
                            <input type="hidden" value="0" name="use" /> 
                            </div>  
                            <br><br>
                            
                            <label for="form-password">비밀번호</label>
                            <input type="text" name="password" id="form-password" placeholder="8자리이상 적어주세요.">
                            <div id="psch"></div>
                            
                            <br><br>
                            <label for="form-name">이름</label>
                            <input type="text" name="username" id="form-name" placeholder="한글로 적어주세요.">
                            <div id="namech"></div>
                            <br><br>
                            
                            <label for="form-mail">이메일</label>
                            <input type="text" name="email" id="form-mail" placeholder="메일형식으로 적어주세요.">
                            <div id="mailch"></div>
                            <br><br>

                            <div name="interest">
                                <label for="form-description">관심분야1-</label> 
                                <label for="check1">포유류</label>
                                <input type="checkbox" name="check1" id="check1" class='check' value="1"> 
                                <label for="check2">파충류</label>
                                <input type="checkbox" name="check2" id="check2" class='check' value="2"> 
                                <label for="check3">조류</label>
                                <input type="checkbox" name="check3" id="check3" class='check' value="3"> 
                                <label for="check4">어류</label>
                                <input type="checkbox" name="check4" id="check4" class='check' value="4"> 
                                <label for="check5">양서류</label>
                                <input type="checkbox" name="check5" id="check5" class='check' value="5"> 
                                <label for="check6">무척추동물</label>
                                <input type="checkbox" name="check6" id="check6" class='check' value="6"> 
                                <label for="check7">거미/곤충류</label>
                                <input type="checkbox" name="check7" id="check7" class='check' value="7">
                            </div>
                            <br>

                            <div class="form-group">
                                <label for="form-description">관심분야2-</label> 
                                <label for="check8">음식</label>
                                <input type="checkbox" name="check8" id="check8" class='checked2' value="1"> 
                                <label for="check9">질병</label>
                                <input type="checkbox" name="check9" id="check9" class='checked2' value="2"> 
                                <label for="check9">행동</label>
                                <input type="checkbox" name="check10" id="check10" class='checked2' value="3">
                            </div><br>
                                <label for="check">전문가여부</label>
                                <input type="checkbox" name="expert" id="check" placeholder="">
                            <br><br>
                            <div id="test">
                                <div class="form-group">
                                    <label for="form-description">전문분야1-</label> 
                                    <label for="check15">포유류</label>
                                    <input type="checkbox" name="check15" id="check15" value="1"> 
                                    <label for="check16">파충류</label>
                                    <input type="checkbox" name="check16" id="check16" value="2"> 
                                    <label for="check17">조류</label>
                                    <input type="checkbox" name="check17" id="check17" value="3"> 
                                    <label for="check18">어류</label>
                                    <input type="checkbox" name="check18" id="check18" value="4"> 
                                    <label for="check19">양서류</label>
                                    <input type="checkbox" name="check19" id="check19" value="5"> 
                                    <label for="check20">무척추동물</label>
                                    <input type="checkbox" name="check20" id="check20" value="6"> 
                                    <label for="check21">거미/곤충류</label>
                                    <input type="checkbox" name="check21" id="check21" value="7">
                                </div><br>
                                <div class="form-group">
                                    <label for="form-description">전문분야2-</label> 
                                    <label for="check22">음식</label>
                                    <input type="checkbox" name="check22" id="check22" value="1"> 
                                    <label for="check23">질병</label>
                                    <input type="checkbox" name="check23" id="check23" value="2"> 
                                    <label for="check24">행동</label>
                                    <input type="checkbox" name="check24" id="check24" value="3">
                                </div><br>
                                <div class="form-group">
                                    <label for="form-description">경력</label>
                                    <input type="text" textarea class="form-control" name="career" id="form-title" placeholder="예)3년">
                                </div><br>
                                <div class="form-group">
                                    <label for="form-description">자격증-</label> 
                                    <label for="check11">의료</label>
                                    <input type="checkbox" name="check11" id="check11" value="1"> 
                                    <label for="check12">양육</label>
                                    <input type="checkbox" name="check12" id="check12" value="2"> 
                                    <label for="check13">사냥</label>
                                    <input type="checkbox" name="check13" id="check13" value="3"> 
                                    <label for="check14">연구</label>
                                    <input type="checkbox" name="check14" id="check14" value="4">
                                </div><br>
                                <div class="form-group">
                                    <label for="licenset">자격증내용</label>
                                    <input type="text" name="licensetype" id="licenset" placeholder='내용을 적어주세요.'>
                                </div>
                            </div><br>
                            <input type="submit" name="name" value="회원가입" id='submit-btn' >
                        </form>
                    </article>
                </div>
            </div>
            <footer>
                <div id="foot">
                    하단
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script> //전문가 여부를 묻고 추가 버튼을 생성하는 jQuery
            $("#test").hide();
            $(document).ready(function() {
                $("#check").change(function() {
                    if ($("#check").is(":checked")) {
                        $("#test").show();
                    } 
                });
            });
            /**/
            function checking(){
                var check = document.getElementsByClassName('check');
                var checked2 = document.getElementsByClassName('checked2');
                if($("#idcheck").val()==""){
                     document.signup.id.focus();
                    alert('아이디를 입력하세요');
                    return false;
                }else if($("#form-password").val()==""){
                    document.signup.password.focus();
                    alert('비밀번호를 입력하세요');
                    return false;
                }else if($("#form-name").val()==""){
                    document.signup.username.focus();
                    alert('이름을 입력하세요');
                    return false;
                }else if($("#form-mail").val()==""){
                    document.signup.email.focus();
                    alert('이메일을 입력하세요');
                    return false;
                }else if($('#check1').prop("checked")==false && $('#check2').prop("checked")==false && $('#check3').prop("checked")==false && $('#check4').prop("checked")==false && $('#check5').prop("checked")==false && $('#check6').prop("checked")==false && $('#check7').prop("checked")==false){
                   // $('#so').css('border-bottom': '1px solid red');
                    alert('관심분야1을 선택해주세요');
                    return false;
                }else if($('#check8').prop("checked")==false && $('#check9').prop("checked")==false && $('#check10').prop("checked")==false){
                    //$('#soc').css('border-bottom': '1px solid red');
                    alert('관심분야2를 선택해주세요');
                    return false;
                }else{
                    alert ('회원가입이 완료되었습니다.');
                }    
            }
            
        </script>
        <script type='text/javascript' src='signupcheck.js'></script> <!--signupcheck.js에서 유효성검사를 함 -->
    </body>
</html>
