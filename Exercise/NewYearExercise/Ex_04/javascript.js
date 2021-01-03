//Check password
function checkStrong(){
    strongPassword= new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
    password=document.getElementById("js-password").value;
    borderAlert= document.getElementById("js-password")
    if(password.match(strongPassword)){
        borderAlert.style.border="2px solid green";
        document.getElementById("js-strong").style.color="green";
        document.getElementById("js-strong").style.display="none";
        return true;
    }else {
        borderAlert.style.border="3px solid red";
        document.getElementById("js-strong").style.color="red";
        document.getElementById("js-strong").style.display="block";
        document.getElementById("js-strong").innerHTML="Mật khẩu chưa đủ mạnh" +
            "<br>Mật khẩu mạnh là mật khẩu có ký tự hoa thường,số và ký tự đặc biệt" +
            "<br> Ví dụ : Linhdeptrai@123";
        return false;
    }
}
function checkSimilar(){
    password=document.getElementById("js-password").value;
    rePassword=document.getElementById("js-re-password").value;
    if(password===rePassword){
        document.getElementById("js-re-password").style.border="2px green";
        document.getElementById("js-similar").style.display="none";
        return true;
    }else {
        document.getElementById("js-re-password").style.border="2px red";
        document.getElementById("js-similar").style.display="block";
        document.getElementById("js-similar").style.color="red";
        document.getElementById("js-similar").innerHTML="Mật khẩu không trùng khớp !";
        return false;
    }
}
//
function checkPrivacy(){
    document.getElementById("js-agree-checkbox").disabled=false;
    document.getElementById("modal").style.display="block";
    document.getElementById("js-agree-checkbox").style.cursor="pointer";
}
function openSubmit(){
        document.getElementById("js-submit-btn").disabled=false;
        document.getElementById("js-submit-btn").style.background="#005eff";
        document.getElementById("js-submit-btn").style.cursor="pointer";
}


function signupValidate(){
    if(checkSimilar() && checkStrong()){
        return true;
    }else {
        alert("Vui lòng xem lại mật khẩu và chắc chắn đã đọc nội quy !");
        return false;
    }
}
modal=document.getElementById("modal");
close=document.getElementById('close')
window.onclick=function (even){
    if(even.target==modal){
        modal.style.display="none";
    }
}
close.onclick = function() {
    modal.style.display = "none";
}