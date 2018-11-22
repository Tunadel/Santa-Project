<?php include 'header.php';
?>

<link rel="stylesheet" href="style/modulinho.css">

<div class="caixa"> 
                <div class="banner-modulo modulo">
                <div class="canto-direito">
                <div class="id-modulo">
                <span>101</span>
                </div>
                <div class="disciplina-modulo">
                <span>Geografia</span>
                </div>
                </div>
                <span>Mares de Morros</span>
                <div class="canto-esquerdo">
                <span>Prof. Victor</span>
                </div>
                </div>
                </div>



<div class="caixa">
    <div class="head-caixa line">
    <img src="interface-images/mat.png"><span><bold class="bold">Mares de Morros</bold> - Plano de Aulas</span>
    </div>
    <div class="head-data">
    Postado em: 08/10/2018
    </div>
    <div class="container">
        
        
    <div class="caixa-text plano-aula escuro">
        
        
    <span class="title3">Conteúdo do Módulo</span>
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
        </p>
        
        <br>
        
        <span class="title3">Duração do Módulo</span>
        <p>
        11/09/2018 até 21/09/2018
        </p>
        
        <br>
        
        <span class="title3">Material do Módulo</span>
        <br>
        <p>
        <a href="https://www.wikipedia.org/">https://www.wikipedia.org/</a>
        </p>
        <p>
        <a href="https://www.youtube.com/watch?v=sjCrqP_c7C8">https://www.youtube.com/watch?v=sjCrqP_c7C8</a>    
        </p>
       
        
    </div>
        
    <div class="caixa-text professor-plano-aula">
    <img src="interface-images/mat.png">
    <span>
    Prof. Victor Silva
    </span>
    </div>
    
    </div>
    <br>
</div>

<div class="caixa"> 
                <div class="banner-forum modulo">
                    <span>Fórum</span>
                </div>
</div>

<div class="caixa blank">
    <button class="button-big title-londrina">Criar novo post +</button>
</div>

<div class="caixa">
    <div class="head-caixa line">
    <img src="interface-images/mat.png"><span>Novo Post</span>
    <button class="btn-modulo apagar">Apagar</button>
    </div>
    <div class="head-data">
    
    </div>

    <div class="caixa-text">    
    <input type="text" class="input-linha" placeholder="Título Post">     
    <br>
    <br>
    <div id="editor2" class="richtexteditor">
    </div>
    
    </div>    
    <script>
      var quill = new Quill('#editor2', {
        theme: 'snow'
        });
    </script>
    
    <div class="forum-bottom">
    <div class="checkinputs-modulo">   
    <input type="checkbox" name="post" value="huey">
    <span>Permitir edição</span>
    </div>
    <div class="checkinputs-modulo">       
    <input type="checkbox" name="post" value="huey">
    <span>Fixar Post</span>
    </div>
    <div class="checkinputs-modulo">   
    <input type="checkbox" name="post" value="huey">
    <span>Permitir respostas</span>
    </div>    
    <div class="checkinputs-modulo">   
    <input type="checkbox" name="post" value="huey">
    <span>Permitir múltiplas respostas</span>
    </div>     
    <button class="btn-modulo enviar">Enviar</button>
    </div>
</div>

    <div class="caixa" data-value="1">
        <div class="head-caixa line"> 
        <img src="interface-images/mat.png"><span>Título Post</span> 
        <button class="btn-modulo mostrar">Editar</button>
        </div>
        <div class="head-data">
        Postado em: 08/10/2018
        </div>
        <div class="caixa-text escuro">
            <p class="title3">Conteúdo Post</p><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div class="forum-bottom">
        <span class="title3">
            <bold class="bold">Autor:</bold> Victor Silva
        </span>
        <button id="post1" class="btn-modulo mostrar">Mostrar +</button>
        </div>
    </div>

<div class="caixa-resposta" data-father="1">
    <div class="head-caixa line">
    <img src="interface-images/mat.png"><span>Resposta: Título Post</span>
    <button class="btn-modulo apagar">Apagar</button>
    </div>
    <div class="head-data">
    Postado em: 08/10/2018
    </div>
    <div class="caixa-text escuro">
        <p class="title3">Conteúdo Post</p><br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
    <div class="forum-bottom">
    
    <span class="title3">
        <bold class="bold">Por:</bold> Victor Silva
    </span>
    </div>
</div>

<div class="caixa-resposta" data-father="1">
    <div class="head-caixa line">
    <img src="interface-images/mat.png"><span>Escrever Resposta: Título Post</span>
    </div>
    <div class="head-data">
    
    </div>

    <div class="caixa-text">
    
    <div id="editor" class="richtexteditor">
    </div>
    
    </div>    
    <script>
      var quill = new Quill('#editor', {
        theme: 'snow'
        });
    </script>
    
    <div class="forum-bottom">
    <button class="btn-modulo enviar">Enviar</button>
    </div>
</div>

<div class="caixa">
        <div class="head-caixa line"> 
        <img src="interface-images/mat.png"><span>Título Post</span> 
        <button class="btn-modulo mostrar">Editar</button>
        </div>
        <div class="head-data">
        Postado em: 08/10/2018
        </div>
        <div class="caixa-text escuro">
            <p class="title3">Conteúdo Post</p><br>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
        <div class="forum-bottom">
        
        <span class="title3">
            <bold class="bold">Autor:</bold> Victor Silva
        </span>
            
        <button class="btn-modulo mostrar">Mostrar +</button>
        </div>
    </div>



<script>
    $('#post1').click(function() {
        $obj = $(this);
        var $post = $('#post1').parent().parent().data("value");
        var $resposta = $(document).find('.caixa-resposta');
        
        $resposta.each(function() {
            if ($resposta.data('father') == $post) {
               $(this).toggle(); 
            }
        });
        if ($obj.text() == "Mostrar +") {
            $obj.text("Mostrar -");
        } else if ($obj.text() == "Mostrar -") {
            $obj.text("Mostrar +");
        }
});
</script>






<?php include 'footer.php';
?>