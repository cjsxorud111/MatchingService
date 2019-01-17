<?php //이 페이지에서 id가 db에 있는지 확인한다
    $conn = mysqli_connect("localhost","root","01042372120");
    mysqli_select_db($conn, "RareAnimalLove");
    $result = mysqli_query($conn, "SELECT * FROM user");
    $row = mysqli_fetch_assoc($result);
    $idch = $_POST['id']; //보내진 id를 idch변수에 담아서사용
    if(!$conn){
        echo "not connect DB";
    }
    $sql = "SELECT * FROM user WHERE id='".$idch."'"; //쿼리로 id=idch인 모든 행을 가져온다. 
    $result = mysqli_query($conn,$sql); //이 함수를 사용해야 쿼리가 동작
    $count = mysqli_num_rows($result); //이 함수는 result에 몇행이 담겨있는지 세서 count변수에 넣는다.
    
    session_start(); //세션을 시작한다. 세션은 부라우저가 가지고 있는 정보 id를 세션에 담아서 부라우저 전체에서 사용할수 있도록 한다. 

    $_SESSION['is_login'] = $_POST['id']; //아이디를 세션id_login변수에 담아서 사용한다.

    if($idch == ''){ // 보내진 id가 없으면 출력
    ?>
            <div>아이디를 입력하세요.</div>
            
               <?php
        }else{

        if($count == 0){ //카운트 변수가 0이면 출력
        ?>
                <div style="color:red" class="use">
                    일치하는 아이디가 없습니다.
                    <input type="hidden" value="1" name="use" />
                </div>
                
                <?php
        }else{ //0이 아니라면 출력
        ?>
               
                <div style="color:green" class="use">
                    일치하는 아이디가 있습니다.
                    <input type="hidden" value="0" name="use" />
                </div>
                
                <?php
        }
    }
?>