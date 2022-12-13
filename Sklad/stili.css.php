<?php
header('content-type:text/css');
?>
body {
    background: rgb(121 144 165);
    /* #17181c */
    margin: 0;
    background-attachment: fixed;
    background-size: 100%;
    font-style: normal;
    display: block;
}
.verh {
    width: 100%;
    height: 9%;

    background:lightsteelblue;

}
.verh ul{
    list-style: none;
}
.verh > ul{
    display: flex;
    height: 100%;
    padding-top: ;
    align-items: center;
    margin: 0;

}
.bddobav{
    background: lightsteelblue;
    display: flex;
    flex-direction: row;
}
.verh > ul li a{
    display: block;
    background:lightsteelblue;
    color: black;
    padding-right: 15px;
    padding-left: 15px;
    text-decoration: none;
    text-transform: uppercase;
    font-family: Courier, monospace ;
    font-size: 1.15em;
    font-weight: bold;
    transition: 0.3s ease;
}
.verh li a:hover{
    border: 1px solid#000000;
    /*transition: all 0.3s ease;*/
}
/*Выплывающее меню*/
.verh li ul{
    position: absolute;
    list-style: none;
    min-width: 150px;
    padding: 0;
    opacity: 0;
    pointer-events: none;
}
.verh li:hover >ul{
    opacity: 1;
    pointer-events: all;
}
.verh li> ul li a{
    padding-top: 5px;
    text-transform: none;
    text-decoration: none;
    background: lightsteelblue;
}
.img1{
    width: 130px;
    height: 65px;
}
.img2{
    width: 75%;
    padding-top: 3%;
}
.img3{
    width: 100%;
    height: 50%;
    overflow: hidden;
    object-fit: contain;

}
a{
    text-decoration: none;
    color: #0e77a6;
}

.img {
    width: 100%;
    /* height: 280px; */
}

.d-vhod{
    height: 5%;
    width: 30%;
    padding-right: 5%;
    cursor: pointer;
}
.form2{
    width: 45%;
    float: right;
    display: flex;
    flex-direction: row;
    margin: 0 20%;
    border: none;
    padding-top: 1%;
}

.rasmer{
    width: 100%;
    height: 100%;
}
.inputText {
    width: 90%;
    border-radius: 30px;
    background: lightsteelblue;
    color: rgba(0, 0, 0, 0.82);
    border: none;
    font-family: SF,-apple-system,BlinkMacSystemFont,sans-serif;
    box-shadow: 0 0 23px #204b5e;
}
.vhod{
    background: #ffffff;
    margin: auto;
    width: 100%;
    border-radius: 5px;
    color: #0E77A6FF;
    font-size: 25px;
    font-weight: bold;
    font-family: Courier, monospace;
    cursor: pointer;
    border: none;
    transition: 0.3s;

}
.vhod:hover{
    color: #ffffff;
    background: #0E77A6FF;
}

.registr {
    background: #0E77A6FF;
    margin: auto;
    width: 100%;
    border: none;
    border-radius: 5px;
    color: #ffffff;
    font-weight: bold;
    font-size: 25px;
    font-family: Courier, monospace;
    cursor: pointer;
    transition: 0.3s;

}
.registr:hover{
    background: #ffffff;
    color: #0E77A6FF;
}
.d-registr{
    height: 5%;
    width: 55%;
    padding-right: 5%;
    cursor: pointer;
}
.panel {
    width: 30%;
    position: unset;
    float: right;
    text-align: center;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 1%;
}
.post div.hide{
    display: none;
}
.logo{
    width: 100%;
    height: 50%;
    display: flex;
    padding-top: 8%;
}
.text1{
    width: 100%;
    padding-left: 5%;
    font-family: Courier, monospace;
}
p{
    font-size: 3em;
    margin: 0;
    font-weight:bold;
    font-family: Courier, monospace;
    padding-left: 4%;

}
.p{
    font-size: 1.8em;
    padding: unset;
}
.information{
    width: 100%;
    display: flex;
    padding-top:5%;
}
button {
    cursor: pointer;
}
.left1 {
    width: 50%;
    padding-left: 1%;
    font-family: Courier, monospace;

}
h1{
    font-size: 2em;
}
h2{
    font-size: 1.75em;
    padding-right: 5%;
    text-indent: 35px;

}
h3{
    color: #151515;
    margin: 0;margin-left: auto;
    margin-right: auto;
    width: 6em;
    font-family: Courier, monospace; /*<-----------------------------------------------------------------------------------------------*/


}
.cena{
    text-decoration: underline;
}
.f1 {
    width: 24%;
    display: flex;
    float: left;
    padding: 7px;
    color: white;
    transition: transform .2s;
    flex-direction: column;
    align-items: flex-start;
    justify-content: flex-start;
    align-content: flex-start;
}
.f1:hover{
    transform: scale(1.07);
    z-index: 1;
    box-shadow: 0 0 10px 3px #23495c;
}
section{
    width: 90%;
}
main {
    display: flex;
    width: 100%;
    margin: 0 auto;
    flex-wrap: wrap;
    /* flex-direction: row-reverse; */
    /* padding: 3%; */
    justify-content: center;
    padding-top: 4%;
}
.podpisi {
    font-size: 1.17em;
    margin: 0;
    color: white;
    font-family: Courier, monospace;

}
h4{
    margin: 0;
    color: white;
}
.side-title {
    width: 40%;
    font-family: Courier, monospace;
    text-transform: none;
    text-align: revert;
}
.st11 {
    width: 250px;
    background: rgb(255, 255, 255);
    color: #505050;
    font-size: 1.3em;
    border-radius: 30px;
    font-family: Courier, monospace;
    font-weight: bold;
    margin: 0;
    margin-top: auto;
}
.st11:hover{
    background:#505050;
    color: rgb(255, 255, 255);
}
.post {
    display: flex;
    flex-wrap: wrap;
}
.st12 {
    width: 50%;
    background: rgb(255, 255, 255);
    color: #505050;
    font-size: 1.3em;
    border-radius: 30px;
    font-family: Courier, monospace;
    font-weight: bold;

    margin: 0;
    margin-top: auto;
}
.st12:hover{
    background:#505050;
    color: rgb(255, 255, 255);
}
.form1{
    display: flex;
}
.form-registr{
    float: left;
    width: 44%;
    position: absolute;
    height: 44%;
    padding-top: 15%;
}
.block {

    height: 40%;
    background: lightsteelblue;
    /* margin: 0 25% 0 37%; */
    border-radius: 30px;
    width: 40%;
    text-align: center;
    padding: 1%;
    font-family: Courier, monospace;
}
.glavnay{
    font-size: 1.9em;
    cursor: pointer;
    font-family: Courier, monospace;
    width: 100%;
}
.glavnay:hover{
    text-shadow: -2px 5px 7px #0e77a6;
}
.submit1{
    width: 40%;
    font-size: 1em;
    cursor: pointer;
    background: #0E77A6FF;
    border-radius: 20px;
    color: #ffffff;
}
.submit1:hover{
    background: #cedaea;
    color: #0E77A6FF;
    box-shadow: 0px 0px 10px 3px;
    /*text-shadow: -2px 4px 6px #ff1aff;*/
}
input {
    width: 70%;
    margin-bottom: 20px;
    padding: 2%;
    background: #66919f;
    border: 1px solid #b9b9b9;
    box-shadow: 0px 0px 12px 1px;
    border-radius: 30px;
    color: white;

}

input::placeholder{
    color: white;
}
form {
    flex-direction: column;
    width: 100%;
    align-items: center;
}
.dobav{
    padding-left: 2%;
    width: 100%;
    padding-top: 2%;
}

.pop{
   display: flex;
}