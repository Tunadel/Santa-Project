<?php include 'header.php';
?>

<link rel="stylesheet" href="style/contrato.css">


 <div id="myModal" class="modal">


  <div class="modal-content">
    <span class="close">&times;</span>
    
      <input type="text" placeholder="Procurar objetivo.." id="myInput" onkeyup="filterFunction()"> <br><br>    
        
    <div class="dropdown" id="matematica">
        <div class="dropbtn"><span>Objetivos Matemática</span></div>
        <div id="myDropdown" class="dropdown-content">
        <div href="#about" class="item">
            <span><b class="tituloitem cor1">CONJUNTOS NUMÉRICOS</b><br>Encontre 10 situações reais (do cotidiano) nas quais os números estão presentes e depois
descreva-as. Procure quais são os conjuntos numéricos existentes na matemática. A partir dos
números registrados, classifique cada um de acordo com seu conjunto numérico.</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
        <input value="1" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#base" class="item">
            <span><b class="tituloitem cor1">CONJUNTOS NUMÉRICOS</b><br>Procure compreender quais são as necessidades e aplicações dos números para as ações
humanas. Pesquise como ao longo da história os números foram criados e em quais contextos
surgiram representações novas, que até então não existiam.</span>
            
            <div class="select">
            <img src="interface-images/x.png">
            </div>
        <input value="2" name="objetiv_id[]" style="display: none"/> 
            
            </div>
            
        <div href="#blog" class="item">
            <span><b class="tituloitem cor2">GEOMETRIA PLANA E ESPACIAL</b><br>Faça uma lista das figuras e formas geométricas que você conhece. Complete sua lista, através de
pesquisas, com figuras e formas novas além das citadas por você.
Fotografe elementos do dia a dia que se assemelhem com cada uma das formas citadas. Por fim,
classifique cada figura em bidimensional (plana) ou tridimensional (espacial).</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="3" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#contact" class="item">
            <span><b class="tituloitem cor2">GEOMETRIA PLANA E ESPACIAL</b><br>Desenhe, em papel quadriculado, figuras geométricas planas.
Encontre relações entre seus lados e a quantidade de quadradinhos em seu interior, se necessário
desenhe mais de uma imagem com tamanhos diferentes.
Pesquise as fórmulas para o cálculo da área de cada figura desenhada.
Faça uma análise e descreva a relação entre a fórmula e o cálculo de área a partir da contagem de
quadradinhos.</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="4" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#contact" class="item">
            <span><b class="tituloitem cor2">GEOMETRIA PLANA E ESPACIAL</b><br>Construa, com os materiais que desejar, um cubo com 1 centímetro de lado, outro cubo com 1
decímetro de lado e um terceiro cubo com 1 metro de lado. Escolha objetivos a sua volta e faça
uma estimativa de seus volumes a partir dos cubos construídos por você.</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="5" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#contact" class="item">
            <span><b class="tituloitem cor2">GEOMETRIA PLANA E ESPACIAL</b><br>Escolha 10 objetos circulares. Meça, em cada objeto, o diâmetro e o seu comprimento. Estabeleça
relações entre essas medidas.</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="6" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#contact" class="item">
            <span><b class="tituloitem cor2">GEOMETRIA PLANA E ESPACIAL</b><br>Procure embalagens e recipientes que contenham informações de sua capacidade (em litros,
mililitros, onças fluidas – fl oz, etc). Estabeleça uma relação, para cada situação, com as unidades
de medida de volume (1 m³, 1 dm³ ou 1 cm³).</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="7" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#contact" class="item">
            <span><b class="tituloitem cor3">TRATAMENTO DE INFORMAÇÃO</b><br>Procure em jornais, revistas ou meios de comunicação gráficos e tabelas que estejam associados a
alguma informação. Identifique e descreva quais são as informações relacionadas em cada gráfico/ tabela. Escreva um pequeno texto descrevendo as conclusões que você pode chegar a
partir das informações fornecidas por estes gráficos/ tabelas.</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="8" name="objetiv_id[]" style="display: none"/> 
            </div>
        </div>
    </div>
       
        <div class="dropdown" id="ingles">
        <div class="dropbtn"><span>Objetivos Inglês</span></div>
        <div id="myDropdown" class="dropdown-content">
        <div href="#custom" class="item">
            <span>Custom</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="5" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#support" class="item">
            <span>Support</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="6" name="objetiv_id[]" style="display: none"/> 
            </div>
        <div href="#tools" class="item">
            <span>Tools</span>
            <div class="select">
            <img src="interface-images/x.png">
            </div>
            <input value="7" name="objetiv_id[]" style="display: none"/> 
            </div>
        </div>
    </div>

      <br>
      
      
      
     <div class="bottom-modal"></div> 
  </div>

</div>


<div class="caixa"> 
                <div class="banner-caixa span-trabalho">
                <img src="interface-images/icon-02.png">    
                <span>Contrato de Trabalho</span>
                </div>
                </div>


                <form>
                <div class="caixa">
                    <div class="head-caixa line">
                    <img src="interface-images/icon-03.png"><span><bold class="bold">Contrato de Trabalho</bold> - Buscando nectar</span>
                    </div>
                    <div class="head-data">
                        Postado em: 08/10/2018
                    </div>
                    
                    
                   
<div class="caixa-text">  
    <div     class="title2 bold">
        <span><b>Contrato de Trabalho</b></span>
    </div>
<br>
    <div class="title3 bold">            
            <p>Nome do Contrato:</p>
    </div>
<br>
    <input type="text" name="nome-contrato" class="input-linha">     
<br>

    <div class="caixa-text escuro">
        <p class="bold Title2"> Objetivos: </p><br>
         
        
        <div id="objetivo-container" class="rest">
        
        </div><br>
        <div id="myBtn" class="btn-contrato title-londrina modulo">+ Selecionar objetivos</div>
    
        
    
     
    </div>
    <div class="title3 bold">            
        <p>Método de Entrega:</p>
    </div>
    
<br>
    
    <div id="editor" class="richtexteditor">
    </div>
    
<br>
    
<div class="title3 bold">            
        <p>Cor de identificação:</p>
    </div>
    <center><br>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor1"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor2"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor3"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor4"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor5"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor6"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor7"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor8"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor9"></div>
    </label>
    <label class="labl">
  <input type="radio" name="cor" value="1" class="radio">
  <div class="cor10"></div>
    </label>
</center>
    
    
    <div class="caixa-text">
        <span><bold class="bold">Aluno:</bold> João Pão</span>
    <br>
        <span><bold class="bold">Mestre:</bold> Letícia Medeiros</span>
        <button id="enviar" class="button-big title-londrina centro" type="submit">Enviar Proposta</button>
    </div>
<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
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
    
     <script>
    var selected = 0;        
            
    $(".dropbtn").click(function(){
        
        var clickedBtnID = $(this);
        $(this).parent().find('.item').toggle();
    
    });

        function filterFunction() {
            
          var input, filter, ul, li, a, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          div = $(".dropdown-content");
          a = div.find(".item").children('span');
          for (i = 0; i < a.length; i++) {
            if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
              console.log(a[i]);
              var tem  = a[i];
              var print = $('.item').has(tem);
              print.show();
              console.log(print);
            } else {
              var tem  = a[i];
              var print = $('.item').has(tem);
              print.hide();
            }
          }
        };
            
        $(".dropdown-content").find(".select").click(function(){
            var $dad = $(this).parent();
            console.log('clicked');
            var filter, a, i;
            a = $("#objetivo-container");
            filter = $dad.children("input").val();
            console.log(filter)
            if (a.has('.item')) {
            
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.indexOf(filter) > -1) {
                    console.log('ops');
                    } else {
                   
                    $dad.clone().prependTo("#objetivo-container");
                }
            
            }
                
            } else {
                console.log('ops2');
                $dad.clone().prependTo("#objetivo-container");
            }
            
            });
            
            
            $('#objetivo-container').delegate('.select','click',function() {
                console.log('blob');
                $(this).parent().remove();
            });
            
            
            
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
            
 $( "#enviar").click(function(){
            var myEditor = document.querySelector('#editor')
            var html = myEditor.children[0].innerHTML
            console.log(html);  
            });

            
            
        </script>
    
    
    
                </div>
                </div>
</form>




<?php include 'footer.php';
?>