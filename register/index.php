<?php
session_start();
if (isset($_SESSION['username'])) {
    echo '<script>
                window.location.href = "http://localhost/aulusfy/";
        </script>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><title>Aulusfy</title>
    <link rel="icon" href="logo.png">
</head>
<script>
    var login = true;
    document.addEventListener("DOMContentLoaded", function () {
        window.onload = function() {
            var currentUrl = window.location.href;
            if (currentUrl.includes('error-reg-cre')) {
                roundTickElement.style.transform = "translateX(95%)";
                login = false;
                changeColorRegister();
                elementLogin.classList.remove('active');
                formloginDiv.style.opacity = 0;
                setTimeout(function () {
                    formloginDiv.style.display='none';
                    formregisterDiv.style.display='flex';
                    setTimeout(function () {
                        formregisterDiv.style.opacity = 1;
                    },15);
                }, 500);

                const errorMessage = document.getElementById("error-reg-cre");
                errorMessage.style.display = "list-item";
                setTimeout(() => {
                    errorMessage.style.opacity = 1;
                }, 509); 
            }
            if (currentUrl.includes('error-register')) {
                roundTickElement.style.transform = "translateX(95%)";
                login = false;
                changeColorRegister();
                elementLogin.classList.remove('active');
                formloginDiv.style.opacity = 0;
                setTimeout(function () {
                    formloginDiv.style.display='none';
                    formregisterDiv.style.display='flex';
                    setTimeout(function () {
                        formregisterDiv.style.opacity = 1;
                    },15);
                }, 500);

                const errorMessage = document.getElementById("error-register");
                errorMessage.style.display = "list-item";
                setTimeout(() => {
                    errorMessage.style.opacity = 1;
                }, 509); 
            }
            changeColorLogin();
        };
        const elementLogin = document.querySelector('.login-change');
        const elementRegister = document.querySelector('.register-change');
        const registerElement = document.querySelector(".tick");
        const roundTickElement = document.querySelector(".round");
        const changElement=document.querySelector(".changer");
        const formloginDiv=document.getElementById('form-login-id');
        const formregisterDiv=document.getElementById('form-register-id');

        const img2element=document.getElementById('img2-id');
        registerElement.addEventListener("click", function () {
            if (login == true) {
                roundTickElement.style.transform = "translateX(95%)";
                if (window.innerWidth <= 780) {
                    changElement.style.marginRight="-2vh";
                }
               
                login = false;
                changeColorRegister();
                elementLogin.classList.remove('active');
                formloginDiv.style.opacity = 0;
                setTimeout(function () {
                    formloginDiv.style.display='none';
                    formregisterDiv.style.display='flex';
                    setTimeout(function () {
                        formregisterDiv.style.opacity = 1;
                        if (window.innerWidth <= 780) {
                            img2element.style.height="10%";
                            }
                        
                    },15);    
                }, 500);
                var currentUrl = window.location.href;
            if (currentUrl.includes('error-reg-cre')) {
                const errorMessage = document.getElementById("error-reg-cre");
                errorMessage.style.display = "list-item";
                setTimeout(() => {
                    errorMessage.style.opacity = 1;
                }, 509); 
            }
            if (currentUrl.includes('error-register')) {
                const errorMessage1 = document.getElementById("error-register");
                errorMessage1.style.display = "list-item";
                setTimeout(() => {
                    errorMessage1.style.opacity = 1;
                }, 509); 
            }
               
               
            } else {
                roundTickElement.style.transform = "translateX(0%)";
                login = true;
                changeColorLogin();
                elementRegister.classList.remove('active');
                formregisterDiv.style.opacity = 0;
                setTimeout(function () {
                    formregisterDiv.style.display='none';
                    formloginDiv.style.display='flex';
                    setTimeout(function () {
                        formloginDiv.style.opacity = 1;
                        if (window.innerWidth <= 780) {
                            img2element.style.height="15%";
                        }
                        
                    },15);
                    


                }, 500);
            }
        });
        function changeColorLogin() {
            elementLogin.classList.toggle('active');
        }
        function changeColorRegister() {
            elementRegister.classList.toggle('active');
        }

    });

</script>
<body>
    <div class="panel">
        <img src="logo.png">
        <h1>Doctor AI</h1>
    </div>
    <div class="main">
        <img class="img1" src="svg1.svg">
        <div class="big-login">
        <div class="changer">
            <h1 class="login-change">login</h1>
            <div class="tick" onclick="animateTick()">
                <div class="tick-round">
                    <div class="round"></div>
                </div>       
            </div>
            <h1 class="register-change">register</h1>
        </div>
        <form class="form-login" id="form-login-id" method="post" action="login.php">
            <div class="usernamePlace">
                <h1 class="username-text">username</h1>
                <input type="text" placeholder="username" name="username"required>
            </div>
            <div class="passwordPlace">
                <h1 class="password-text">password</h1>
                <input type="password" placeholder="password" name="password" required>
            </div>
            <li id="error-login" class="error-login"> Incorrect username or password</li>
            <button type="submit" class="login-button">login</button>
            
    </form>

        <form class="register-form" id="form-register-id" method="post" action="register.php">
            <div class="emailPlace-register">
                <h1 class="email-text-reg">email</h1>
                <input type="text" placeholder="email" name="emailid" required>
            </div>
            <div class="usernamePlace-register">
                <h1 class="username-text-reg">username</h1>
                <input type="text" placeholder="username" name="usernameid" required>
            </div>
            <div class="passwordPlace-register">
                <h1 class="password-text-reg">password</h1>
                <input type="password" placeholder="password" name="passid" required>
            </div>
            <li id="error-reg-cre" class="error-reg-cre"> Registration credentials error: Please correct</li>
            <li id="error-register" class="error-register"> Sorry, username already taken</li>
            <button class="register-button">register</button>
        </form>
        

        </div>
        <img class="img2" id="img2-id" src="svg2.svg">
    </div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Open+Sans&display=swap');

    input:focus {
        outline: none;
        }
    body{
        margin:0;
        padding:0
        display: flex;
        background:#EBEBEB;
        -moz-user-select: none;
        -webkit-user-drag: none;
        overflow-x: none;
        overflow-y:hidden;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    @media screen and (min-width: 780px) {
    .error-login{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:0.75vw;
        margin-bottom:-1.9vw;
        transition: all 1s ease-in-out; 
        display:none;
        opacity:0;
        
    }
    .error-register{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:0.75vw;
        margin-bottom:-1.9vw;
        transition: all 1s ease-in-out; 
        display:none;
        opacity:0;
    }
    .error-reg-cre{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:0.75vw;
        margin-bottom:-1.7vw;
        transition: all 1s ease-in-out; 
        display:none;
        opacity:0;
    }
    .panel{
        flex: 25%;
        position:fixed;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction: row;
        left:0;
        top:0;
        width:25%;
        height: 100%;
        flex-shrink: 0;
        border-radius: 0px 9vh 9vh 0px;
        background: linear-gradient(168deg, #5803FF -2.41%, #222AF6 -2.4%, #764BA2 98.25%);
    }
    .panel img{
        width:30%;
        margin-left:-2.5vw;
        user-drag: none;  
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .panel h1{
        color: #FFF;
        font-family: Open Sans;
        font-size: 2.7vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-left:-1.2vw;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .main{
        flex:75%;
        margin-left: 25%; 
        justify-content:center;
        align-items:center;
        display: flex;
        position: relative;
        height: 100vh;
    }
    .main .img1{
        width:25%;
        position: absolute;
        left: 1vw;  
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        top:1vw;;
    }
    .changer{
        position:fixed;
        justify-content:center;
        align-items:center;
        display: flex;
        transition: transform 0.5s; 
        flex-direction: row;
        

    }
    .changer .tick{
        width: 3.125vw;
        height: 1.8229166666666667vw;
        flex-shrink: 0;
        border-radius: 788px;
        border: 0.15625vw solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        display:flex;
        align-items:center;

    }
    .changer .round{
        width: 1.3020833333333333vw;
        height: 1.3020833333333333vw;
        flex-shrink: 0;
        background: #4F80FF;
        border-radius:855px;
        border: 0.10416666666666667vw solid #4C0ACE;
        margin-left:0.10416666666666667vw;
        transition: transform 0.5s; 
    }
    .login-change{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.786777843954735vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-right:0.3vw;
        transition: all 0.5s ease; 
    }
    .login-change.active {
        color: #4F80FF;
        font-size:  1.886777843954735vw;
        
    }
    .register-change{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.786777843954735vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-left:0.2vw;
        transition: all 0.5s ease; 
    }
    .big-login{
        display:flex;
        justify-content:center;
        transition: all 0.5s ease;          
    }
    .register-change.active{
        color: #4F80FF;
        font-size:  1.886777843954735vw;
    }
    .tick-round{
        transition: transform 0.5s; 
    }
    .changer .tick:hover .tick-round {
        transform: scale(0.81);
        transition: transform 0.5s;
    }
    .form-login{
        width: 34.84375vw;
        height: 23.072916666666668vw;
        flex-shrink: 0;
        border-radius: 5.364583333333333vw 3.125vw;
        border: 0.3125vw solid #4C0ACE;
        background: rgba(217, 217, 217, 0.00);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top:3.8541666666666665vw;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }
    .usernamePlace h1{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.25vw;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.2604166666666667vw;
        
    }
    .login-button{
        width: 14.583333333333334vw;
        height: 3.2291666666666665vw;
        flex-shrink: 0;
        border-radius: 787px;
        border: 0.2604166666666667vw solid #4C0ACE;
        background: rgba(76, 10, 206, 0.00);
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.25vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:2.6041666666666665vw;
        transition: transform 0.5s
    }
    .login-button:hover{
        transform: scale(1.1);
    }
    .passwordPlace h1{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.25vw;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.2604166666666667vw;
        padding-top:1.5625vw;
    }
    .usernamePlace input{
        width: 20.833333333333332vw;
        height: 3.0208333333333335vw;
        flex-shrink: 0;
        border-radius: 0.2604166666666667vw 1.3020833333333333vw;
        border: 0.20833333333333334vw solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 0.9375vw;
        transition: border-radius 0.5s ease; 
    }
    .passwordPlace input{
        width: 20.833333333333332vw;
        height: 3.0208333333333335vw;
        flex-shrink: 0;
        border-radius: 0.2604166666666667vw 1.3020833333333333vw;
        border: 0.20833333333333334vw solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 0.9375vw;
        transition: border-radius 0.5s ease; 
    }
    .passwordPlace input:focus{
        border-radius:50px;
    }
    .usernamePlace input:focus{
        border-radius:50px;
    }
    .main .img2{
        width:27%;
        position: absolute;
        right: 0;
        bottom: 1vw;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        transition: height 0.5s ease-in-out;
        
    }

    .register-form{
        width: 34.84375vw;
        height: 27.22916666666668vw;
        flex-shrink: 0;
        border-radius: 3.125vw 5.364583333333333vw;
        border: 0.3125vw solid #4C0ACE;
        background: rgba(217, 217, 217, 0.00);
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top:3.8541666666666665vw;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
    }
    .emailPlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.25vw;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.2604166666666667vw;
        margin-top:-0.1vw;
    }
    .usernamePlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.25vw;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.2604166666666667vw;
    }
    .passwordPlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.25vw;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.2604166666666667vw;
    }
    .usernamePlace-register input{
        width: 20.833333333333332vw;
        height: 3.0208333333333335vw;
        flex-shrink: 0;
        border-radius: 1.3020833333333333vw 0.2604166666666667vw;
        border: 0.20833333333333334vw solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 0.9375vw;
        transition: border-radius 0.5s ease; 
    }   
    .emailPlace-register input{
        width: 20.833333333333332vw;
        height: 3.0208333333333335vw;
        flex-shrink: 0;
        border-radius: 1.3020833333333333vw 0.2604166666666667vw;
        border: 0.20833333333333334vw solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 0.9375vw;
        transition: border-radius 0.5s ease; 
    }
    .passwordPlace-register input{
        width: 20.833333333333332vw;
        height: 3.0208333333333335vw;
        flex-shrink: 0;
        border-radius: 1.3020833333333333vw 0.2604166666666667vw;
        border: 0.20833333333333334vw solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 0.9375vw;
        transition: border-radius 0.5s ease; 
    }
    .register-button{
        width: 14.583333333333334vw;
        height: 3.2291666666666665vw;
        flex-shrink: 0;
        border-radius: 787px;
        border: 0.2604166666666667vw solid #4C0ACE;
        background: rgba(76, 10, 206, 0.00);
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 1.25vw;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:2.5041666666666665vw;
        transition: transform 0.5s
    }
    .register-button:hover{
        transform: scale(1.1);
    }
    .emailPlace-register input:focus{
        border-radius:50px;
    }
    .usernamePlace-register input:focus{
        border-radius:50px;
    }
    .passwordPlace-register input:focus{
        border-radius:50px;
    }
}
/*Mobile*/
@media screen and (max-width: 780px) {

    @media screen and (min-height: 570px) {
    .body{
        margin:0;
        padding:0
        display: flex;
        background:#EBEBEB;
        -moz-user-select: none;
        -webkit-user-drag: none;
        overflow-x: none;
        overflow-y:hidden;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .panel{
        flex: 15%;
        position:fixed;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction: column;
        top:0;
        left:0;
        width:100%;
        height: 15%;
        flex-shrink: 0;
        border-radius: 0px 0vh 9vh 9vh;
        background: linear-gradient(168deg, #5803FF -2.41%, #222AF6 -2.4%, #764BA2 98.25%);
    }
    .panel img{
        margin-top:1vh;
        height:65%;
        margin-left:-1.0vw;
        user-drag: none;  
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;

    }
    .error-login{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1.9vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:1.5vh;
        margin-bottom:-2.5vh;
        transition: all 0.3s ease-in-out; 
        display:none;
        opacity:0;
        
        
    }
    .error-register{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1.9vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:1.5vh;
        margin-bottom:-1.5vh;
        transition: all 0.3s ease-in-out; 
        display:none;
        opacity:0;
        
    }
    .error-reg-cre{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1.75vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:1.5vh;
        margin-bottom:-1.5vh;
        transition: all 0.3s ease-in-out; 
        display:none;
        opacity:0;
       
    }
    .panel h1{
        color: #FFF;
        font-family: Open Sans;
        font-size: 3.0vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:-1vw;
        margin-left:-1.2vw;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .main{
        flex:85%;
        margin-top:15%; 
        display: flex;
        justify-content: center;
        align-items: center; 
        height: 85vh;
    }       
    .main .img1{
        width:25%;
        position: absolute;
        left: 1vw; 
        user-select: none;
        display:none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        top:1vw;
    }
    .changer{
        position:fixed;
        margin-top:-11vh;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction: row;
        transition: transform 0.5s; 
    }
    .changer .tick{
        width:4.75vh;
        height: 2.5vh;
        flex-shrink: 0;
        border-radius: 788px;
        border: 0.3vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        display:flex;
        align-items:center;

    }
    .changer .round{
        width: 1.78vh;
        height: 1.78vh;
        flex-shrink: 0;
        background: #4F80FF;
        border-radius:855px;
        border: 0.10416666666666667vh solid #4C0ACE;
        margin-left:0.4vh;
        transition: transform 0.5s; 
    }
    .login-change{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.5vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-right:0.3vh;
        transition: all 0.5s ease; 
    }
    .login-change.active {
        color: #4F80FF;
        font-size:  3vh;
    }
    .register-change{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.5vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-left:0.2vh;
        transition: all 0.5s ease; 
    }
    .big-login{
        display:flex;
        justify-content:center;
        transition: all 0.5s ease;          
    }
    .register-change.active{
        color: #4F80FF;
        font-size:  3vh;
    }
    .tick-round{
        transition: transform 0.5s; 
    }
    .changer .tick:hover .tick-round {
        transform: scale(0.81);
        transition: transform 0.5s;
    }
    .form-login{
        width: 41vh;
        height: 45vh;
        flex-shrink: 0;
        border-radius: 6.364583333333333vh 3.125vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(217, 217, 217, 0.00);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top:-2vh;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }
    .usernamePlace h1{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        
    }
    .login-button{
        width: 22vh;
        height: 5.2291666666666665vh;
        flex-shrink: 0;
        border-radius: 10000px;
        border: 0.2604166666666667vh solid #4C0ACE;
        background: rgba(76, 10, 206, 0.00);
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:5vh;
        transition: transform 0.5s
    }
    .login-button:hover{
        transform: scale(1.1);
    }
    .passwordPlace h1{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        padding-top:1.5625vh;
    }
    .usernamePlace input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius: 0.32vh 2vh;
        border: 0.25vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease; 
    }
    .passwordPlace input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius: 0.32vh 2vh;
        border: 0.25vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease;  
    }
    input:focus {
        outline: none;
        }
    .passwordPlace input:focus{
        border-radius:50px;
    }
    .usernamePlace input:focus{
        border-radius:50px;
    }
    .main .img2{
        height:15%;
        position:absolute;
        bottom: 1vh;
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        display:none;
        -webkit-user-select: none;
        -ms-user-select: none;
        transition: height 0.5s ease-in-out;
        
        
    }

    .register-form{
        width: 41vh;
        height: 54vh;
        flex-shrink: 0;
        border-radius:3.125vh 6.364583333333333vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(217, 217, 217, 0.00);
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top:-2vh;
        margin-bottom:-9vh;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        
    }
    .emailPlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        margin-top:-2vh;
    }
    .usernamePlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        padding-top:1.5625vh;
    }
    .passwordPlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        padding-top:1.5625vh;
    }
    .usernamePlace-register input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius:2vh 0.32vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease; 
    }
    .emailPlace-register input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius:2vh 0.32vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease;
    }
    .passwordPlace-register input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius:2vh 0.32vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease;
    }
    .register-button{
        width: 22vh;
        height: 5.2291666666666665vh;
        flex-shrink: 0;
        border-radius: 10000px;
        border: 0.351vh solid #4C0ACE;
        background: rgba(76, 10, 206, 0.00);
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:3vh;
        transition: transform 0.5s
    }
    .register-button:hover{
        transform: scale(1.1);
    }
    .emailPlace-register input:focus{
        border-radius:50px;
    }
    .usernamePlace-register input:focus{
        border-radius:50px;
    }
    .passwordPlace-register input:focus{
        border-radius:50px;
    }
}
@media screen and (max-height: 570px) {
    .body{
        margin:0;
        padding:0
        display: flex;
        background:#EBEBEB;
        -moz-user-select: none;
        -webkit-user-drag: none;
        overflow-x: none;
        overflow-y:hidden;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .panel{
        flex: 15%;
        position:fixed;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction: column;
        top:0;
        left:0;
        width:100%;
        height: 15%;
        flex-shrink: 0;
        border-radius: 0px 0vh 9vh 9vh;
        background: linear-gradient(168deg, #5803FF -2.41%, #222AF6 -2.4%, #764BA2 98.25%);
    }
    .panel img{
        margin-top:1vh;
        height:65%;
        margin-left:-1.0vw;
        user-drag: none;  
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;

    }
    .panel h1{
        color: #FFF;
        font-family: Open Sans;
        font-size: 3.0vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:-1vw;
        margin-left:-1.2vw;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
    }
    .error-login{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1.9vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:1.5vh;
        margin-bottom:-2.5vh;
        transition: all 0.3s ease-in-out; 
        display:none;
        opacity:0;
        
        
    }
    .error-register{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1.9vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:1.5vh;
        margin-bottom:-1.5vh;
        transition: all 0.3s ease-in-out; 
        display:none;
        opacity:0;
        
    }
    .error-reg-cre{
        color:#4C0ACE;
        font-family: Open Sans;
        font-size: 1.75vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:1.5vh;
        margin-bottom:-1.5vh;
        transition: all 0.3s ease-in-out; 
        display:none;
        opacity:0;
       
    }
    .main{
        flex:85%;
        margin-top:15%; 
        display: flex;
        justify-content: center;
        align-items: center; 
        height: 85vh;
    }
    .main .img1{
        width:25%;
        position: absolute;
        left: 1vw; 
        user-select: none;
        display:none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        top:1vw;;
    }
    .changer{
        position:fixed;
        margin-top:-11vh;
        justify-content:center;
        align-items:center;
        display: flex;
        flex-direction: row;
        transition: transform 0.5s; 

    }
    .changer .tick{
        width:4.75vh;
        height: 2.5vh;
        flex-shrink: 0;
        border-radius: 788px;
        border: 0.3vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        display:flex;
        align-items:center;

    }
    .changer .round{
        width: 1.78vh;
        height: 1.78vh;
        flex-shrink: 0;
        background: #4F80FF;
        border-radius:855px;
        border: 0.10416666666666667vh solid #4C0ACE;
        margin-left:0.351vh;
        transition: transform 0.5s; 
    }
    .login-change{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.5vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-right:0.3vh;
        transition: all 0.5s ease; 
    }
    .login-change.active {
        color: #4F80FF;
        font-size:  3vh;
    }
    .register-change{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.5vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-left:0.2vh;
        transition: all 0.5s ease; 
    }
    .big-login{
        display:flex;
        justify-content:center;
        transition: all 0.5s ease;          
    }
    .register-change.active{
        color: #4F80FF;
        font-size:  3vh;
    }
    .tick-round{
        transition: transform 0.5s; 
    }
    .changer .tick:hover .tick-round {
        transform: scale(0.81);
        transition: transform 0.5s;
    }
    .form-login{
        width: 41vh;
        height: 45vh;
        flex-shrink: 0;
        border-radius: 6.364583333333333vh 3.125vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(217, 217, 217, 0.00);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top:-2vh;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }
    .usernamePlace h1{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        
    }
    .login-button{
        width: 22vh;
        height: 5.2291666666666665vh;
        flex-shrink: 0;
        border-radius: 10000px;
        border: 0.351vh solid #4C0ACE;
        background: rgba(76, 10, 206, 0.00);
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:5vh;
        transition: transform 0.5s
    }
    .login-button:hover{
        transform: scale(1.1);
    }
    .passwordPlace h1{
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        padding-top:1.5625vh;
    }
    .usernamePlace input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius: 0.32vh 2vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease; 
    }
    .passwordPlace input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius: 0.32vh 2vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease;  
    }
    input:focus {
        outline: none;
        }
    .passwordPlace input:focus{
        border-radius:50px;
    }
    .usernamePlace input:focus{
        border-radius:50px;
    }
    .main .img2{
        height:15%;
        display:none;
        position: absolute;
        bottom: 0.1vh;
        display:none;   
        user-select: none;
        -moz-user-select: none;
        -webkit-user-drag: none;
        -webkit-user-select: none;
        -ms-user-select: none;
        transition: height 0.5s ease-in-out;
        
        
        
    }

    .register-form{
        width: 41vh;
        height: 54vh;
        flex-shrink: 0;
        border-radius:3.125vh 6.364583333333333vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(217, 217, 217, 0.00);
        display: none;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-top:-2vh;
        margin-bottom:-9vh;
        opacity: 0;
        transition: opacity 0.5s ease-in-out;
        
    }
    .emailPlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        margin-top:-2vh;
    }
    .usernamePlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        padding-top:1.5625vh;
    }
    .passwordPlace-register h1
    {
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2.7vh;
        font-style: normal;
        font-weight: 550;
        margin-bottom:0.5186721991701245vh;
        padding-top:1.5625vh;
    }
    .usernamePlace-register input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius:2vh 0.32vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease; 
    }
    .emailPlace-register input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius:2vh 0.32vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease;
    }
    .passwordPlace-register input{
        width: 29.933333333333332vh;
        height: 5.7208333333333335vh;
        flex-shrink: 0;
        border-radius:2vh 0.32vh;
        border: 0.351vh solid #4C0ACE;
        background: rgba(255, 255, 255, 0.00);
        font-size: 2vh;
        transition: border-radius 0.5s ease;
    }
    .register-button{
        width: 22vh;
        height: 5.2291666666666665vh;
        flex-shrink: 0;
        border-radius: 10000px;
        border: 0.351vh solid #4C0ACE;
        background: rgba(76, 10, 206, 0.00);
        color: #4C0ACE;
        font-family: Open Sans;
        font-size: 2vh;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        margin-top:3vh;
        transition: transform 0.5s
    }
    .register-button:hover{
        transform: scale(1.1);
    }
    .emailPlace-register input:focus{
        border-radius:50px;
    }
    .usernamePlace-register input:focus{
        border-radius:50px;
    }
    .passwordPlace-register input:focus{
        border-radius:50px;
    }
}
}


    </style>
</html>

<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  
if (isset($_GET['error-login'])) {
    echo '<script> const errorMessage = document.getElementById("error-login");
            errorMessage.style.display = "list-item";
            setTimeout(() => {
                errorMessage.style.opacity = 1;
              }, 50); 
        </script>';
}
?>