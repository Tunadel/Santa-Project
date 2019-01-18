<?php
echo "<label style='border-bottom: 2px solid white'>". $_SESSION['nome']. "</label><br>";
echo '<center><img src="data:image/png;base64,'.base64_encode( $_SESSION['image'] ).'"/></center>';
echo '<form action="connection/logout.php" method="Post">
<button type="submit" class="btn btn-primary cor3" value="submit">Sair</button>
</form><br>
';

?>