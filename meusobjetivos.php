<?php include 'header.php';
?>

<link rel="stylesheet" href="style/objetivo.css">
<link rel="stylesheet" href="style/contrato.css">

<div class="caixa"> 
                <div class="banner-caixa span-trabalho">
                <img src="interface-images/icon-02.png">    
                <span>Meus Objetivos</span>
                </div>
                </div>



<div class="caixa">

                    <div class="caixa-text">
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

                    <div class="objetivo-sign completo"></div>
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


                            
                    <div class="objetivo-sign completo"></div>
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

                    <div class="objetivo-sign completo"></div>
                    </div>
                        
                        
                        <br>
                        
                        <span class="title-londrinabook bold">História:</span> <br>
                        <span><span class="title3 bold">6/16</span> Objetivos Completos</span>
                    <div id="progressbar2"></div>
                        
                        <span class="title-londrinabook bold">Geografia:</span> <br>
                        <span><span class="title3 bold">6/16</span> Objetivos Completos</span>
                    <div id="progressbar3"></div>
                        
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

<?php include 'footer.php';
?>