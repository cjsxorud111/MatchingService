$( window ).on( "load", function() { //페이지를 로드한 후 바로 실행
    if($('#idchek').text()==""){
        document.signup.id.focus();
    }
});
 
$('#idcheck').blur(function() { //아이디 유효성검사
    $.ajax({ // ajax실행부분
        type: "post",
        url: "checkid.php",
        data: {
            id: $('#idcheck').val()
        },
        success: function s(a) {
            $('#idch').html(a);
            
        },
        error: function error() {
            alert('시스템 문제발생');
        }
    });
});

$('#form-password').blur(function(){ //비밀번호 유효성검사
    if($('#form-password').val().length<8){
        $('#psch').html('비밀번호는 8자리 이상으로 지정하세요.').css('color','red');
        document.signup.password.value="";
        document.signup.password.focus()
    }else{
        $('#psch').html('');
    }
}); 

$('#form-name').blur(function(){ //이름 유효성검사
    if($('#form-name').val().length<3){
        $('#namech').html('올바른 이름을 입력해주세요').css('color','red');
        document.signup.username.value="";
        document.signup.username.focus();
    }else{
        $('#namech').html('');
    }
}); 

$('#form-mail').blur(function(){ //이메일 유효성검사
    var email = document.signup.email.value;
    var regex = /@/;
    if (regex.test(email) === false) {
    $('#mailch').html('잘못된 이메일 형식입니다.').css('color','red');

    document.signup.email.value="";
    document.signup.email.focus();
    }else{
         $('#mailch').html('');
    }
}); 
window.onload = function () {
    var checkload = true;
    
    document.getElementById('submit-btn').onclick = function(){
        checkload = false;
    }
    window.onbeforeunload = function() {
         if(checkload == true) {
            return "변경사항이 저장되지 않을수 있습니다.";
        };
    };
};




/*
jQuery(document).ready(function() { //새로고침 했을 때 정말 나갈건지 확인
    var checkload = true;
    $("#submit-btn").click(function() {
        checkload = false;
    });
    window.onbeforeunload = function() {
        if(checkload == 'true') {
            return "변경사항이 저장되지 않을수 있습니다.";
        };
    };
});
*/



