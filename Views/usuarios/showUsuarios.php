<?php

	require('manutencaoUsuarios.php');

		$oquefazer = new manutencaoUsuarios();

			/*echo 'show: '.*/$show = $_REQUEST['show'];

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	

	if($show == 'listarUsuarios'){$oquefazer->listarUsuarios();require('listarUsuarios.php');}	

	if($show == 'listarUsuariosLixeira'){$oquefazer->listarUsuariosLixeira();require('listarUsuariosLixeira.php');}	

	if($show == 'formularioCadastrarUsuarios'){require('formularioCadastrarUsuarios.php');}

	if($show == 'formularioAlterarUsuarios'){$oquefazer->formularioAlterarUsuarios();require('formularioAlterarUsuarios.php');}

	if($show == 'gravarAlteracaoUsuarios'){$oquefazer->gravarAlteracaoUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}

	if($show == 'gravarUsuarios'){$oquefazer->gravarUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}

	if($show == 'lixeiraUsuarios'){$oquefazer->lixeiraUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}	

	if($show == 'restaurarUsuarios'){$oquefazer->restaurarUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}	

	if($show == 'excluirUsuarios'){$oquefazer->excluirUsuarios();$oquefazer->listarUsuarios();require('listarUsuarios.php');}	

	if($show == 'detalhesUsuarios'){$oquefazer->detalhesUsuarios();require('detalhesUsuarios.php');}	

?>