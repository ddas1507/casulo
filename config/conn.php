<?php

	define("server", "localhost");
	define("user", "bairr058_user");
	define("pass", "Diones1507**");
	define("database", "bairr058_menu");
	$conecta = new mysqli(server, user, pass, database);

	if ($conecta->connect_error) {
		trigger_error("ERRO NA CONEXÃO: "  . $conecta->connect_error, E_USER_ERROR);
	}

	$conecta->close(); // FECHANDO A CONEXÃO
/*
// PODE SER SEPARADO O TRECHO ACIMA PARA SER CHAMADO POR INCLUDE
$sql = "SELECT * FROM teste"; // CONSULTA
$query = $conecta->query($sql); // RODA A CONSULTA
$linhas = $query->num_rows;
if($linhas >= 1) { // SE HÁ LINHAS
while($colunas = $query->fetch_assoc()) {
echo " {$colunas["texto"]} "; // DADOS DA CONSULTA
}
$query->free(); // LIBERANDO OS DADOS DA CONSULTA
} else {
echo "Não há resultados"; // SEM RESULTADOS
}
$conecta->close(); // FECHANDO A CONEXÃO
*/
?>

