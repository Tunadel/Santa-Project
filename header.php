<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link rel="stylesheet" href="style/trial.css">
    <link rel="stylesheet" href="style/caixa-text.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="jquery.lineProgressbar.css">
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    
	<title> MENU TEST </title>
</head>

    
<script>
    
var fechado = 0;
            
            $( "#black-cover" ).click(function() {
              fecha();
            });
            
            function fecha(){
            
            if (fechado == 1) {
            document.getElementById("sidebar-wrapper").style.width = "0px";
            document.getElementById("img").src = "interface-images/hamburg.png";
            document.getElementById("black-cover").style.display = "none";
            fechado = 0;
            } else {
            document.getElementById("sidebar-wrapper").style.width = "250px";
            document.getElementById("sidebar-wrapper").style.transition = ".5s";
            document.getElementById("black-cover").style.display = "inline";
            document.getElementById("img").src = "interface-images/x.png";
            fechado = 1;
            }};
            
            
            
            var fechadoperfil = 0;
            function fecha2(){
            
            if (fechadoperfil == 1) {
                 document.getElementById("perfil-box").style.maxHeight = "0px";
                 document.getElementById("perfil-box").style.display = "inline";
                fechadoperfil = 0;
            } else {
            document.getElementById("perfil-box").style.maxHeight =  document.getElementById("perfil-box").style.height;
                  document.getElementById("perfil-box").style.display = "inline";
            fechadoperfil = 1;
            }};    
</script>
	<body>
        <div class="page-wrapper">
        
        <header class="header">
            
            <div class="head">
                <div>
                    <div id="close-button" class="close-button" onclick="fecha()">
                    <img id="img" src="interface-images/hamburg.png" width="35px"></div>
                    </div> 
                <div class="head-logo">
                <img>
                </div>
                <div class="perfil-caixa" onclick="fecha2()"><span>Entrar</span></div>
            </div>   
            
        </header>
               
        <div class="perfil-box" id="perfil-box">
            <br>
            <p>Entrar na Colméia</p>
           
            <label>Login</label>
            <input>
            
            <label>Senha</label>
            <input type="password">
            <br>
            <input type="submit" class="btn btn-primary" value="Login">
            <br>
            </div>
            
        <div class="sidebar-wrapper" id="sidebar-wrapper">
        <div class="sidebar">
        <ul>
            <span class="modulo">Módulos</span>
            <div class="modulo">
            <ul class="span-modulo-fundo">    
                <br>    
                <a href="https://www.google.com"><li class="modulo">Matemática 101</li></a>
                <li class="modulo">História 102</li>
                <li class="modulo">Português 201</li>
                <li class="modulo">Geografia 105</li>
                <li class="modulo">Inglês 202</li>
                <br>        
            </ul>
            </div>
            <span class="span-trabalho">Trabalho Personalizado</span>
            <div class="span-trabalho">
            <ul class="span-modulo-fundo">    
                <br>    
                <li class="inside span-trabalho">Meus Contratos</li>
                <li class="inside span-trabalho">Meus Objetivos</li>
                <li class="inside span-trabalho">Contratar Trabalho</li>
                <br>        
            </ul>
            </div>
            <span class="span-agenda">Agenda</span>
            <span class="span-biblioteca">Biblioteca</span>   
        </ul>
            
            
            </div>
            
        </div>
        
        
        <div id="content" class="content">
            <div id="black-cover" class="black-cover"></div>
            <div class="content-box">