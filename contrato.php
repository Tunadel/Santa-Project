<?php include 'header.php';
?>

<link rel="stylesheet" href="style/contrato.css">
<link rel="stylesheet" href="style/modulinho.css">


<?php 

if (!isset($_GET['status'])){
    include 'pagesContrato/contratoNovo.php';
} else if ($_GET['status'] == '1') {
    include 'pagesContrato/contratoAvaliacao.php';
} else if ($_GET['status'] == '2') {
    include 'pagesContrato/contratoAndamento.php';
}
      
?>

<?php include 'footer.php';
?>