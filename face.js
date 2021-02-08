var email = document.getElementById('email')
var senha = document.getElementById('senha')
email.onfocus=function(){
    senha.style.borderColor="rgb(206, 206, 206)"
    email.style.borderColor="rgb(60, 122, 255)"
}
senha.onfocus=function(){
    email.style.borderColor="rgb(206, 206, 206)"
    senha.style.borderColor="rgb(60, 122, 255)"
}
/*email.onmouseleave=()=>{
    email.style.borderColor="rgb(206, 206, 206)"
}*/