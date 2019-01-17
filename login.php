<!--로그인페이지-->
<html>
    <head>
        <title>로그인 페이지</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="mytemplate.css?ver=8">
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
                <nav></nav>
                <div class="co">
                    <article>
                        <div><!--아이디입력-->
                            <label for="id">ID &nbsp; </label>
                            <input type="text" name="id" class="foo" id="idcheck" placeholder="아이디를 입력해주세요" autocomplete='off'/>
                            <div id="idch">
                                <input type="hidden" value="0" name="use" /> 
                            </div> 
                        </div>
                        <br>
                        <div><!--비밀번호입력-->
                            <label for="pw">PW </label>
                            <input type="text" name="pw" id="passs" placeholder="비밀번호를 입력해주세요" autocomplete='off'/>
                            <div id="logch" >
                                <input type="hidden" value="0" name="use" /> 
                            </div> 
                        </div><br>
                        <div class="button">
                            <button type="submit" name="buttid" id="butt"> 로그인 </button>
                        </div>
                        <button onclick="location.href='write.php'" id="useer"> 회원가입 </button>
                    </article>
                </div>
            </div>
            <footer>
                <div id="foot">
                    하단
                </div>
            </footer>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script><!--jQuery를 사용하기위해 필요-->
        <script>
                 $('#idcheck').blur(function() {  

                    $.ajax({ // ajax실행부분 ajax는 비동기적 통신 
                        type: "post",
                        url: "idcheck.php", //idcheck부분과 통신하여 id가 맞는지 확인한다.
                        data: {
                            id: $('#idcheck').val() //입력한 내용을 데이터로 보냄
                        },
                        success: function s(a) {
                            $('#idch').html(a);
                        },
                        error: function error() {
                            alert('시스템 문제발생');
                        }
                    }); 
                }); 
        </script>
        <script>
                 $('#butt').click(function() {

                    $.ajax({ // ajax실행부분
                        type: "post",
                        url: "login_check.php", //password가 맞는지 확인한다.
                        datatype: "text",
                        data: {
                            id: $('#passs').val()
                        },
                        success: function s(textStatus) {

                            $('#logch').html(textStatus);
                        },
                        error: function error() {
                            alert('시스템 문제발생');
                        }
                    });
                });
        </script>
    </body>
</html>