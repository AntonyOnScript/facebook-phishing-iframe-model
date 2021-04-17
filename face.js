var email = document.getElementById('email')
var password = document.getElementById('password')
email.onfocus=function(){
    password.style.borderColor="rgb(206, 206, 206)"
    email.style.borderColor="rgb(60, 122, 255)"
}
password.onfocus=function(){
    email.style.borderColor="rgb(206, 206, 206)"
    password.style.borderColor="rgb(60, 122, 255)"
}
/*email.onmouseleave=()=>{
    email.style.borderColor="rgb(206, 206, 206)"
}*/