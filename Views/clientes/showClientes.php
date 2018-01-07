<?php
	require('manutencaoClientes.php');
		$oquefazer = new manutencaoClientes();
			/*echo 'show: '.*/$show = $_REQUEST['show'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	if($show == 'listarClientes'){$oquefazer->listarClientes();require('listarClientes.php');}	
	if($show == 'listarClientesLixeira'){$oquefazer->listarClientesLixeira();require('listarClientesLixeira.php');}	
	if($show == 'formularioCadastrarClientes'){require('formularioCadastrarClientes.php');}
	if($show == 'formularioAlterarClientes'){$oquefazer->formularioAlterarClientes();require('formularioAlterarClientes.php');}
	if($show == 'gravarAlteracaoClientes'){$oquefazer->gravarAlteracaoClientes();$oquefazer->listarClientes();require('listarClientes.php');}
	if($show == 'gravarClientes'){$oquefazer->gravarClientes();$oquefazer->listarClientes();require('listarClientes.php');}
	if($show == 'lixeiraClientes'){$oquefazer->lixeiraClientes();$oquefazer->listarClientes();require('listarClientes.php');}	
	if($show == 'restaurarClientes'){$oquefazer->restaurarClientes();$oquefazer->listarClientes();require('listarClientes.php');}	
	if($show == 'excluirClientes'){$oquefazer->excluirClientes();$oquefazer->listarClientes();require('listarClientes.php');}	
	if($show == 'detalhesClientes'){$oquefazer->detalhesClientes();require('detalhesClientes.php');}	
	if($show == 'formGerarBoleto'){$oquefazer->formGerarBoleto();require('formGerarBoleto.php');}	
?>