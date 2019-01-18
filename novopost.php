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
    <img src="interface-images/mat.png"><span>Novo Post</span>
    
    </div>
    <div class="head-data">
    
    </div>

    <div class="caixa-text">    
    <input type="text" class="input-linha" placeholder="Título do Post">     
    <br>
    <br>
    <div id="editor2" class="richtexteditor" style="min-height: 150px">
    </div>
    
    </div>    
    <script>
        
    var quill = new Quill('#editor2', {
    theme: 'snow',
    modules: {
      toolbar: [
      
  ['bold', 'italic', 'underline'],        // toggled buttons
  ['blockquote'],

  [{ 'list': 'ordered'}, { 'list': 'bullet' }],   

  [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown

  [{ 'color': [] }],          // dropdown with defaults from theme
  
  [{ 'align': [] }],      
  ['image', 'link', 'video'],
          ],
     imageResize: {
            modules: [ 'Resize', 'DisplaySize', 'Toolbar' ]
        }
    }
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


<?php include 'footer.php';
?>