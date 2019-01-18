<?php 
    include 'header.php';
?>

<link rel="stylesheet" href="style/contrato.css">

<div class="caixa">
<div class="caixa-text">
<div class="aluno_page">
    <img src="interface-images/blob.png">
    <br>
    <span class="title2">Mateus Bolacha da Silva Pereira</span>
    <br>
    <span class="title3">Ciclo 2 2018</span>
</div>
</div>
</div>









<div class="caixa"> 
                <div class="banner-caixa span-trabalho">
                <img src="interface-images/icon-02.png">    
                <span>Contratos</span>
                </div>
                </div>



<div class="caixa">
    <div class="caixa-text">
        <br>
    <span class="title-londrinabook">Contratos em andamento:</span>
    <div class="line"></div>
    </div>
 <div class="contrato-container"> 
                    
                
                    <div class="contrato-mini">
                    <div class="head-contrato cor1"></div>
                    <img class="notification-icon" src="interface-images/notification-02.png">
                    <span class="notification title-londrina">2</span>
                    <span class="contrato-date title-londrina">11/09</span>
                    <span class="contrato-title title-londrina">Contrato de Inglês</span>
                    </div>
                    
                    <div class="contrato-mini">
                    <div class="head-contrato cor2"></div>
                    <img class="notification-icon" src="interface-images/notification-02.png">
                    <span class="notification title-londrina">1</span>
                    <span class="contrato-date title-londrina">11/09</span>
                    <span class="contrato-title title-londrina">Contrato de Inglês</span>
                    
                    </div>
                    
                    <div class="contrato-mini">    
                    <div class="head-contrato cor3"></div>
                    <span class="contrato-date title-londrina">11/09</span>
                    <span class="contrato-title title-londrina">Estudo sobre robôs de outra galáxia</span>
                    </div>
                    
                </div><br>
    <div class="caixa-text">
    <span class="title-londrinabook">Contratos Já Finalizados:</span>
    <div class="line"></div>
    </div>
    
    <div class="contrato-container"> 
     
                
                    <div class="contrato-mini contrato-menor">
                    <div class="head-contrato cor4"></div>
                    <img class="notification-icon" src="interface-images/notification-02.png">
                    <span class="notification title-londrina">2</span>
                    <span class="contrato-date title-londrina">12/12</span>
                    <span class="contrato-title-menor title-londrina">Contrato sobre banana</span>
                    </div>
        
                    <div class="contrato-mini contrato-menor">
                    <div class="head-contrato cor5"></div>    
                    <img class="notification-icon" src="interface-images/notification-02.png">
                    <span class="notification title-londrina">2</span>
                    <span class="contrato-date title-londrina">12/12</span>
                    <span class="contrato-title-menor title-londrina">Contrato sobre banana</span>
                    </div>
        
                    <div class="contrato-mini contrato-menor">
                    <div class="head-contrato cor6"></div>    
                    <img class="notification-icon" src="interface-images/notification-02.png">
                    <span class="notification title-londrina">2</span>
                    <span class="contrato-date title-londrina">12/12</span>
                    <span class="contrato-title-menor title-londrina">Contrato sobre banana</span>
                    </div>
        
                    <div class="contrato-mini contrato-menor">
                    <div class="head-contrato cor7"></div>    
                    <img class="notification-icon" src="interface-images/notification-02.png">
                    <span class="notification title-londrina">2</span>
                    <span class="contrato-date title-londrina">12/12</span>
                    <span class="contrato-title-menor title-londrina">Contrato sobre banana</span>
                    </div>
        
    
                    <div class="contrato-menor contrato-mini ">
                    <div class="head-contrato cor8"></div>    
                    <img class="notification-icon" src="interface-images/notification-02.png">
                    <span class="notification title-londrina">2</span>
                    <span class="contrato-date title-londrina">12/12</span>
                    <span class="contrato-title-menor title-londrina">Contrato sobre banana</span>
                    </div>
    </div>
    <br>
    
    
    
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>


<link rel="stylesheet" href="style/objetivo.css">
<link rel="stylesheet" href="style/contrato.css">

<div class="caixa"> 
                <div class="banner-caixa span-trabalho">
                <img src="interface-images/icon-02.png">    
                <span>Objetivos</span>
                </div>
                </div>



<div class="caixa" style="text-align:center">
    <br>
 <span class="title-londrinabook bold">Visão geral dos Objetivos:</span> <br>
<div  style="max-width: 600px; width: 100%; display:inline-block; text-align:left;">
<canvas id="myChart" width="500" height="500"></canvas>
<script>
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ["Matemática", "Geografia", "História", "Gramática", "Literatura", "Inglês", "Física", "Biologia", "Química", "Sociologia", "I.C.", "Redação", "Objetivos Pendentes"],
        datasets: [{
            label: '# Objetivos Completos',
            data: [8, 7, 9, 5, 4, 3, 2, 4, 5, 8, 5, 5, 35],
            backgroundColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                '#4D886E',
                '#8FE9A2',
                '#D7A42B',
                '#A362D6',
                '#28448F',
                '#F1CA2F',
                '#C86767',
                '#89E0C6',
                '#85D375',
                'rgb(235, 235, 235)',
            ]
        }]
    },
    options: {
        layout: {
            padding: {
                left: 10,
                right: 10,
                top: 10,
                bottom: 10
            }},
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
            display: true,
            labels: {
                fontSize: 14,
                fontColor: 'rgb(31, 31, 31)',
                
            }
        }
    }
});
</script>
    
</div>
    </div>

<div class="caixa">

                    <div class="caixa-text">
                        <br>
                    <span class="title-londrinabook bold">Objetivos por disciplina:</span> <br><br>
                        <button class="link cor1" value="matematica">Matemática <img src="interface-images/icon-05.png"></button>
                        <button class="link cor4" value="historia">História <img src="interface-images/icon-05.png"></button>
                        <button class="link cor6" value="geografia">Geografia <img src="interface-images/icon-05.png"></button>
                        <button class="link cor2" value="matematica">Matemática <img src="interface-images/icon-05.png"></button>
                        <button class="link cor3" value="historia">História <img src="interface-images/icon-05.png"></button>
                        <button class="link cor4" value="geografia">Geografia <img src="interface-images/icon-05.png"></button>
                        <button class="link cor5" value="matematica">Matemática <img src="interface-images/icon-05.png"></button>
                        <button class="link cor7" value="historia">História <img src="interface-images/icon-05.png"></button>
                        <button class="link cor6" value="geografia">Geografia <img src="interface-images/icon-05.png"></button>
                        <button class="link cor8" value="matematica">Matemática <img src="interface-images/icon-05.png"></button>
                        <button class="link cor9" value="historia">História <img src="interface-images/icon-05.png"></button>
                        <button class="link cor10" value="geografia">Geografia <img src="interface-images/icon-05.png"></button>
                        
                        <script>
                    $('.link').click(function() {
                    $link = $( this ).val();    
                    $("html, body").animate({scrollTop: ($('#' + $link ).offset().top - 100) });
});


                       
                        </script>
              <br><br>          
                        
    </div>
</div>

<div class="caixa">

                    <div class="caixa-text" id="matematica">
                        <br>
                    
                                               
                        <span class="title-londrinabook bold">Matemática:</span> <br>
                        <span><span class="title3 bold">12/20</span> Objetivos Completos</span>
                        
                    <div id="progressbar1"></div>
                        
                    <div  class="objetivo">
                            
    <div class="objetivo-desc">
    <span>
    <b class="tituloitem cor1">CONJUNTOS NUMÉRICOS</b>
    <span class="objetivo-content">
    Encontre 10 situações reais (do cotidiano) nas quais os números estão presentes e depois
    descreva-as. Procure quais são os conjuntos numéricos existentes na matemática. A partir dos
    números registrados, classifique cada um de acordo com seu conjunto numérico.
    </span>
    </span>
    </div>
 <div class="objetivo-sign completo">
<img src="interface-images/icon-02.png">

</div>
</div>
                        
     <div  class="objetivo">     
    <div class="objetivo-desc">
    <span>
    <b class="tituloitem cor2">GEOMETRIA PLANA E ESPACIAL</b>
    <span class="objetivo-content">
    Desenhe, em papel quadriculado, figuras geométricas planas.
Encontre relações entre seus lados e a quantidade de quadradinhos em seu interior, se necessário
desenhe mais de uma imagem com tamanhos diferentes.
Pesquise as fórmulas para o cálculo da área de cada figura desenhada.
Faça uma análise e descreva a relação entre a fórmula e o cálculo de área a partir da contagem de
quadradinhos.
    </span>
    </span>
    </div>        
    <div class="objetivo-sign progresso">
         <img src="interface-images/icon-02.png">
         </div>
    </div>
                        
                        
 <div  class="objetivo">      
    <div class="objetivo-desc">
    <span>
    <b class="tituloitem cor1">CONJUNTOS NUMÉRICOS</b>
    <span class="objetivo-content">
    Encontre 10 situações reais (do cotidiano) nas quais os números estão presentes e depois
    descreva-as. Procure quais são os conjuntos numéricos existentes na matemática. A partir dos
    números registrados, classifique cada um de acordo com seu conjunto numérico.
    </span>
    </span>
    </div>
    <div class="objetivo-sign branco">
     
     </div>
</div>
                        
                        
                        <br>
                        
                        <span class="title-londrinabook bold" id="historia">História:</span> <br>
                        <span><span class="title3 bold">6/16</span> Objetivos Completos</span>
                    <div id="progressbar2"></div>
                        
                         <div  class="objetivo">
                            
    <div class="objetivo-desc">
    <span>
    <b class="tituloitem cor1">CONJUNTOS NUMÉRICOS</b>
    <span class="objetivo-content">
    Encontre 10 situações reais (do cotidiano) nas quais os números estão presentes e depois
    descreva-as. Procure quais são os conjuntos numéricos existentes na matemática. A partir dos
    números registrados, classifique cada um de acordo com seu conjunto numérico.
    </span>
    </span>
    </div>

                    <div class="objetivo-sign completo">
                             <img src="interface-images/icon-02.png">
                             </div>
                    </div>
                        <br>
                        <span class="title-londrinabook bold" id="geografia">Geografia:</span> <br>
                        <span><span class="title3 bold">6/16</span> Objetivos Completos</span>
                    <div id="progressbar3"></div>
                        
                        
                         <div  class="objetivo">
                            
    <div class="objetivo-desc">
    <span>
    <b class="tituloitem cor1">CONJUNTOS NUMÉRICOS</b>
    <span class="objetivo-content">
    Encontre 10 situações reais (do cotidiano) nas quais os números estão presentes e depois
    descreva-as. Procure quais são os conjuntos numéricos existentes na matemática. A partir dos
    números registrados, classifique cada um de acordo com seu conjunto numérico.
    </span>
    </span>
    </div>

                    <div class="objetivo-sign completo">
                             <img src="interface-images/icon-02.png">
                             </div>
                    </div>
                        
                        
             <div  class="objetivo">            
    <div class="objetivo-desc">
    <span>
    <b class="tituloitem cor1">CONJUNTOS NUMÉRICOS</b>
    <span class="objetivo-content">
    Encontre 10 situações reais (do cotidiano) nas quais os números estão presentes e depois
    descreva-as. Procure quais são os conjuntos numéricos existentes na matemática. A partir dos
    números registrados, classifique cada um de acordo com seu conjunto numérico.
    </span>
    </span>
    </div>
                    <div class="objetivo-sign completo">
                 <img src="interface-images/icon-02.png">
                 </div>
                    </div>
                        <br>
                        
                        
                    </div>
                    
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script src="lineprogress/jquery.lineProgressbar.js"></script>
                    <script>
                        
                    $('#progressbar1').LineProgressbar({
                      percentage: 60,
                      ShowProgressCount: true,
                      fillBackgroundColor: '#B862D9',
                      backgroundColor: '#FFF',
                      height: '53px',
                      radius: '5px'
                    });
                        
                    $('#progressbar2').LineProgressbar({
                      percentage: 40,
                      ShowProgressCount: false,
                      fillBackgroundColor: '#E36666',
                      backgroundColor: '#FFF',
                      height: '53px',
                      radius: '5px'
                    });
                        
                    $('#progressbar3').LineProgressbar({
                      percentage: 40,
                      ShowProgressCount: false,
                      fillBackgroundColor: '#56c636',
                      backgroundColor: '#FFF',
                      height: '53px',
                      radius: '5px'
                    });  
                    </script>
                
</div>

<?php 
    include 'footer.php';
?>
                

