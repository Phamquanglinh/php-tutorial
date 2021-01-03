function makeCaptcha(){
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 5; i++)
        text += possible.charAt(Math.floor(Math.random() * possible.length));
    document.getElementById("captcha").innerHTML=text;
}
makeCaptcha();

function checkCaptcha(){
    var captcha= document.getElementById("captcha").textContent;
    var confirmCaptcha= document.getElementById("confirm-captcha").value;
    if(captcha !== confirmCaptcha){
        alert("Fail captcha");
        makeCaptcha();
        return false;
    }
    else{
        if(checkStrong()){
            if(signMode=="Đăng nhập"){ //signMode Login
                return true;
            }else{
                if(checkSimilar()){
                    return true;
                }else {
                    alert("Mật khẩu chưa trùng khớp");
                    makeCaptcha();
                    return false;}
            }
        }else {
            alert("Mật khẩu chưa đủ mạnh")
        }

    }
}

function swapForm(){
    signMode=document.getElementById("swap").textContent;
    if(signMode=="Đăng nhập"){
        document.getElementById("swap").innerHTML="Đăng ký ngay";
        document.getElementById("force-btn").innerHTML='<div>Đăng nhập <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>';
        document.getElementById("force-btn").className="btn btn-info";
        document.getElementById("hr").innerHTML="<span>Bạn chưa có tài khoản?</span>";
        document.getElementById("js-re-password").style.display="none";
        document.getElementById("js-re-pass-label").style.display="none";
        document.getElementById("js-re-password").required=false;
        document.getElementById("sign-mode").value="login";

    }else{
        signMode="Đăng ký";
        document.getElementById("swap").innerHTML="Đăng nhập";
        document.getElementById("force-btn").innerHTML='<div>Đăng ký mở tài khoản <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></div>';
        document.getElementById("force-btn").className="btn btn-success";
        document.getElementById("hr").innerHTML="<span>Bạn đã có tài khoản?</span>";
        document.getElementById("js-re-password").style.display="block";
        document.getElementById("js-re-pass-label").style.display="block";
        document.getElementById("sign-mode").value="register";
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
function checkSimilar(){
    password=document.getElementById("js-password").value;
    rePassword=document.getElementById("js-re-password").value;
    if(password===rePassword){
        document.getElementById("js-re-password").style.border="2px solid green";
        document.getElementById("js-similar").style.display="none";
        return true;
    }else {
        document.getElementById("js-re-password").style.border="2px solid red";
        document.getElementById("js-similar").style.display="block";
        document.getElementById("js-similar").style.color="red";
        document.getElementById("js-similar").innerHTML="Mật khẩu không trùng khớp !";
        return false;
    }
}

