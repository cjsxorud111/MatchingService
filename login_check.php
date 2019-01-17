<?php
    $conn = mysqli_connect("localhost","root","01042372120"); //서버에 접속하는 함수를 conn변수에 저장한다.
    mysqli_select_db($conn, "RareAnimalLove"); //서버에서 db를 선택한다. 
    $result = mysqli_query($conn, "SELECT * FROM user"); 
    $row = mysqli_fetch_assoc($result); //result변수의 연관배열들을 row에 담는다.
    $idch = $_POST['id'];
    if(!$conn){ //connect되지 않았다면 출력
        echo "not connect DB";
    }

    $sql = "SELECT * FROM user WHERE password='".$idch."'"; //password가 idch인 행 sql변수에 담고
    $result = mysqli_query($conn,$sql); //sql실행하여 result 변수에 담는다.
    $count = mysqli_num_rows($result); 
    
    $row = mysqli_fetch_assoc($result);

    session_start(); //세션 시작 세션을 사용하려면 반드시 session_start함수를 써야함
    $_SESSION['interest1'] = $row['interest1']; //세션에 데이터를 담는다.
    $_SESSION['user_info'] = $row['username'];
    $_SESSION['interest2'] = $row['interest2'];
    
    if($idch == ''){ 
    ?>
            <div>패스워드를 입력하세요.</div>
            
               <?php
        }else{

        if($count == 0){
        ?>
                <div style="color:red" class="use" id="not">
                    <strong>로그인실패!</strong>
                </div>
                
                <?php
        }else{
        ?>
        
        <div style="color:green" class="use" id="suc">로그인성공!</div>
         
        <script>setTimeout(function() { //로그인 됬다는걸 알려주고 1초후에 이동
          window.location.href = 'index_logon.php';
        }, 1000)</script>
        
        <?php
        }
    }
?>



