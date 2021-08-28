function emailVal(){
    const email = document.getElementById("login_user_name").value;
    console.log(email);
    if(!email.match(/.+@.+\..+/)) {
        document.my_login_form.my_submit.type = "button";
        document.getElementById("message_content").innerHTML = "メールアドレスの形式が正しくありません。";
        return;
    }else{
        document.my_login_form.my_submit.type = "submit";
    }
}