<div style="width: 50%; margin: 5px auto;border: 0px solid #ccc;text-align: center;">Painel Administrativo - Oficina Casulo</div>

<?php
	$con = mysql_connect("localhost", "dionesjo_user", "Diones1507"); 
	$ok = mysql_select_db("dionesjo_sistema", $con);
	
	$query = "SELECT SUM(STATUS) FROM tbl_clientes"; 
	$result = mysql_query($query) or die(mysql_error());
	
	while($row = mysql_fetch_array($result)){
		echo "Clientes Cadastrados: ". $row['SUM(STATUS)'];
	}
?>
