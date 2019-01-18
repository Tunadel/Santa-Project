<?php

session_start();
// Include config file
require_once 'connection/config.php';
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = '
        <script>abre2();</script>
        <er>Por favor, insira um número de matrícula.</er><br>';
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = '
        <script>abre2();</script>
        <er>Por favor, insira uma senha.</er><br>';
    } else{
        $password = trim($_POST['password']);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT LOGIN, SENHA FROM alunos WHERE LOGIN = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if($password == $hashed_password){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            
    if ($stmt = mysqli_prepare($link, "SELECT ID, NOME, FOTO FROM alunos WHERE LOGIN = ?")) {
    /* bind parameters for markers */
    mysqli_stmt_bind_param($stmt, "s", $username);

    /* execute query */
    mysqli_stmt_execute($stmt);

    /* bind result variables */
    mysqli_stmt_bind_result($stmt, $id, $nome, $foto);

    /* fetch value */
    mysqli_stmt_fetch($stmt);

    mysqli_stmt_close($stmt);
}
                            session_start();
                            $_SESSION['username'] = $username;
                            $_SESSION['nome'] = $nome;  
                            $_SESSION['image'] = $foto;      
                            header("location: index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = '
                            <script>abre2();</script>
                            <er>A senha inserida não é válida.</er><br>';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = '
                    <script>abre2();</script>
                    <er>Nenhum número de matrícula encontrada.</er><br>';
                }
            } else{
                echo '
                <script>abre2();</script>
                <er>Opá, parece que algo deu errado.</er><br>';
            }
            mysqli_stmt_close($stmt);
        }
        // Close statement        
    }
    
    // Close connection
    mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <link href="https://fonts.googleapis.com/css?family=Londrina+Solid" rel="stylesheet">
    
    <link rel="icon" href="interface-images/icon-03.png">
    
     <!--Fonte Open Sans -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    
    
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="style/trial.css">
    <link rel="stylesheet" href="style/caixa-text.css">
    
   

    <!--Line Progress, pra renderizar os gráficos dos objetivos-->
    <link rel="stylesheet" href="lineprogress/jquery.lineProgressbar.css">  

    <!--Quill.js a biblioteca de editor de texto, image-resize.js é uma biblioteca pra redimensionar imagem dentro do quill-->
    
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="lineprogress/image-resize.min.js"></script>

    <!--Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    
	<title>Sistema Colmeia</title>
</head>

    
<script>
   
var fechado = 0;
            
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
    
            function abre2(){
            document.getElementById("perfil-box").style.maxHeight =  document.getElementById("perfil-box").style.height;
            document.getElementById("perfil-box").style.display = "inline";
            fechadoperfil = 1;
            };
</script>
	<body>
        <div class="page-wrapper">
        
        <header class="header">
            
            <div class="head">
                <div>
                    <div id="close-button" class="close-button" onclick="fecha()">
                    <img id="img" src="interface-images/hamburg.png" width="35px"></div>
                    </div> 
                <a href="index.php">
                <div class="head-logo">
                <img src="interface-images/colegiologobranco.png">
                </div>
                </a>
                <div class="perfil-caixa" onclick="fecha2()"><span>
            <?php
            if (!isset($_SESSION['username'])){
                echo "Entrar";
            } else {
                echo "Perfil";
            }
            ?>  
                </span>
                </div>
            </div>   
            
        </header>
               
        <div class="perfil-box" id="perfil-box">
           
            </div>
            
        
        
        <div id="content" class="content">
            <div id="black-cover" class="black-cover"></div>
            <div class="content-box">
                
                
    <script>
             
        $('#show_modulo').css({ transform: 'rotate(180deg)' });
        
        
        $( "#black-cover" ).click(function() {
              fecha();
            });
        
        
        
   var modulo_aberto = 1;
                    
   $( "#show_modulo" ).click(function() {
   
   if (modulo_aberto == 1){modulo_aberto = 0}
       else{modulo_aberto = 1};
   rotatebtn();
  $( "#modulo_corpo" ).slideToggle( "slow", "swing", function() {
  
  });
});

function rotatebtn() {
if(modulo_aberto == 0){
$('#show_modulo').animate(
{ deg: 0 },
{
duration: 600,
step: function(now) {
$(this).css({ transform: 'rotate(' + now + 'deg)' });
}
}
);
}
if(modulo_aberto == 1){
$('#show_modulo').animate(
{ deg: 180 },
{
duration: 600,
step: function(now) {
$(this).css({ transform: 'rotate(' + now + 'deg)' });
}
}
);
}
}

                </script>
                
                
                
            <div class="caixa" style="max-width: 410px">
            <div class="caixa-text">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="formprofessor">
            <span class="title-londrinabook">Entrar como Professor</span><br><br>
            <span class="title3">Login</span>
            <input name="username">
            <span class="help-block"><?php echo $username_err; ?></span><br>
            <span class="title3">Senha</span>
            <input type="password" name="password">
            <span class="help-block"><?php echo $password_err; ?></span>
            <button type="submit" class="button-big title-londrinabook  cor9" value="submit">Entrar</button>
            </form>
                    
                </div>
                 </div>
                
                
                
<?php 
    include 'footer.php';
?>
                

