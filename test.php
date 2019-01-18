<html>
<head>
<script type="text/javascript">

function confSubmit(form) {
if (confirm("Tem certeza que deseja fechar esse contrato? Quando fechado os objetivos do contratos não podem mais ser completos.")) {
form.submit();
}

else {
alert("You decided to not submit the form!");
}
}
</script>
</head>
<body>

<form action="somefile.php" method="POST">
<!--Put form elements here-->

<input type="button" onClick="confSubmit(this.form);" value="Submit Form">
</form>

    <?php
    session_start();
    
    
    
    echo "<h1>".$_SESSION['username']."</h1>";
    
    
    
    
require('connection/config.php');
    
$sql = "SELECT * FROM `alunos` WHERE 1";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["NOME"]. " - Login: " . $row["LOGIN"]. "<br>";
    }
} else {
    echo "0 results";
}
    ?>
    
    
    
</body>
</html>