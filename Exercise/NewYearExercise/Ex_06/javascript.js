
function loginValidate(){
    if(checkStrong()){
        return true;}
    else{
        alert("Mật khẩu chưa đủ mạnh");
        return false;
    }
}
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

