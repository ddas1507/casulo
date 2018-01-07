<?php 

	  require('config/conn.php');

		  $content = $_REQUEST['content'];
		if($content == "dadosIndex") require('index.php');
		elseif($content == "listarUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "listarUsuariosLixeira") require('Views/usuarios/showUsuarios.php');
		elseif($content == "formularioCadastrarUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "formularioAlterarUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "gravarAlteracaoUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "gravarUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "excluirUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "lixeiraUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "restaurarUsuarios") require('Views/usuarios/showUsuarios.php');
		elseif($content == "detalhesUsuarios") require('Views/usuarios/showUsuarios.php');

		else
			require('index.php');

?>	