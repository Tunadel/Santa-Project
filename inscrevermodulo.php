<?php include 'header.php';
?>
<link rel="stylesheet" href="style/modulinho.css">

<div class="caixa"> 
                <div class="banner-caixa modulo">
                <img src="interface-images/icon-01.png">    
                <span>Inscrição em Módulos</span>
                </div>
                </div>

<div class="caixa"> 
    <div class="modulo-container">
    
    <div class="caixa-text">
     <div class="title-londrinabook">
        <span> Inscrição em Módulos: Segunda Feira</span>
    </div>
    <div class="line"></div>
    </div>
    
    
    <div class="modulo-box">
    <div class="modulo-box-codigo cor10"><span>MA101</span></div>
    <div class="modulo-box-container">
    <div class="modulo-box-title">Trigonometria e aplicações</div>
    <div class="modulo-box-conteudo">Relações trigonométricas  : seno, cosseno e tangente. Aplicações das relações trigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis e grandes distâncias.</div>
    </div>
<label class="modulo-box-label">
    <input class="modulo-select" type="radio" name="radio">
    <span class="checkmark">Se Inscrever</span>
</label>
    </div>
    
    <div class="modulo-box">
    <div class="modulo-box-codigo cor8"><span>MA101</span></div>
    <div class="modulo-box-container">
    <div class="modulo-box-title">Trigonometria e aplicações</div>
    <div class="modulo-box-conteudo">Relações trs relações trigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis e grandes distâncias.</div>
    </div>
<label class="modulo-box-label">
    <input class="modulo-select" type="radio" name="radio">
    <span class="checkmark">Se Inscrever</span>
</label>
    </div>
    
    <div class="modulo-box">
    <div class="modulo-box-codigo cor7"><span>MA101</span></div>
    <div class="modulo-box-container">
    <div class="modulo-box-title">Trigonometria e aplicações</div>
    <div class="modulo-box-conteudo">Relações trigonométricas  : seno, cosseno e tAplicações dtrigonométricas no cotidiano. Uso das relações para encontrar medidas inacessías relações trigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis e grandes distâncias.angente. Aplicações das relações trigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis e grandes distânciastrigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis.</div>
    </div>
<label class="modulo-box-label">
    <input class="modulo-select" type="radio" name="radio">
    <span class="checkmark">Se Inscrever</span>
</label>
    </div>
    
    
    <div class="caixa-text">
     <div class="title-londrinabook">
        <span> Inscrição em Módulos: Terça Feira</span>
    </div>
    <div class="line"></div>
    </div>
    
    
    <div class="modulo-box">
    <div class="modulo-box-codigo cor4"><span>MA101</span></div>
    <div class="modulo-box-container">
    <div class="modulo-box-title">Trigonometria e aplicações</div>
    <div class="modulo-box-conteudo">Relações trigonométricas  : seno, cosseno e tangente. Aplicações das relações trigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis e grandes distâncias.</div>
    </div>
<label class="modulo-box-label">
    <input class="modulo-select" type="radio" name="terca">
    <span class="checkmark">Se Inscrever</span>
</label>
    </div>
    
    <div class="modulo-box">
    <div class="modulo-box-codigo cor2"><span>MA101</span></div>
    <div class="modulo-box-container">
    <div class="modulo-box-title">Trigonometria e aplicações</div>
    <div class="modulo-box-conteudo">Relações trs relações trigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis e grandes distâncias.</div>
    </div>
<label class="modulo-box-label">
    <input class="modulo-select" type="radio" name="terca">
    <span class="checkmark">Se Inscrever</span>
</label>
    </div>
    
    <div class="modulo-box">
    <div class="modulo-box-codigo cor1"><span>MA101</span></div>
    <div class="modulo-box-container">
    <div class="modulo-box-title">Trigonometria e aplicações</div>
    <div class="modulo-box-conteudo">Relações trigonométricas  : seno, cosss trigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveiselações para encontrar medidas inacessíveis e grandes distânciastrigonométricas no cotidiano. Uso das relações para encontrar medidas inacessíveis.</div>
    </div>
<label class="modulo-box-label">
    <input class="modulo-select" type="radio" name="terca">
    <span class="checkmark">Se Inscrever</span>
</label>
    </div>
    
    </div>
</div>


<script>
$('.modulo-select').click(function() {
  if ($(this).is(':checked')) {
    $(this).siblings('span').html('&#10004; Inscrito');
  } 
   $('.modulo-select').each(function() {
   if (!$( this ).is(':checked')) {
   $( this ).siblings('span').html('Se Inscrever');
}});
}

);

    
</script>

<?php include 'footer.php';
?>