<?php

	class manutencaoUsuarios{

		var $resultado;

		var $registros;



		function manutencaoUsuarios(){

			$this->con = new conexao();

		}



		function listarUsuarios(){

			$sql = "select * FROM tbl_usuarios WHERE STATUS = 1	ORDER BY USUARIO_NOME ASC";

			$this->resultado = $this->con->banco->Execute($sql);			

		}

		

		function listarUsuariosLixeira(){

			$sql = "select * FROM tbl_usuarios WHERE STATUS = 0	ORDER BY USUARIO_NOME ASC";

			$this->resultado = $this->con->banco->Execute($sql);			

		}

		

		function lixeiraUsuarios(){

			$dt = date('d/m/Y');

			$hr = gmDate('H:i:s', strtotime("-3 hours"));	

			$data_hora = "$dt - $hr";

			$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];

			

				$sql = "update tbl_usuarios set STATUS = 0,

				ALTPOR = '".$responsavel."',

				DTALT = '".$data_hora."'



				where USUARIO_ID = ".$_REQUEST['userid'];

				if($this->resultado = $this->con->banco->Execute($sql)){

					//alerta("Usuario alterado com sucesso!");

						return true;

				}

				else{

					alerta("Ocorreu um erro ao tentar alterar a seu usuario!");

						return false;

				}

		}

		function restaurarUsuarios(){

			$dt = date('d/m/Y');

			$hr = gmDate('H:i:s', strtotime("-3 hours"));	

			$data_hora = "$dt - $hr";

			$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];

			

				$sql = "update tbl_usuarios set STATUS = 1,

				ALTPOR = '".$responsavel."',

				DTALT = '".$data_hora."'



				where USUARIO_ID = ".$_REQUEST['userid'];

				if($this->resultado = $this->con->banco->Execute($sql)){

					//alerta("Usuario alterado com sucesso!");

						return true;

				}

				else{

					alerta("Ocorreu um erro ao tentar alterar a seu usuario!");

						return false;

				}

		}

		

		function excluirUsuarios(){

			$sql = "delete from tbl_usuarios where USUARIO_ID =".$_REQUEST['userid'];

				if($this->resultado = $this->con->banco->Execute($sql)){

					alerta("Usuario excluido  com sucesso!");

						return true;

				}

				else{

					alerta("Ocorreu um erro ao tentar excluir o usuario!");

						return false;

				}

		}



		function formularioAlterarUsuarios(){

			$sql = "select * from tbl_usuarios where USUARIO_ID =".$_REQUEST['userid'];

			$this->resultado = $this->con->banco->Execute($sql);

			$this->registros = $this->resultado->FetchNextObject();

		}



		function detalhesUsuarios(){

			$sql = "select * from tbl_usuarios where USUARIO_ID =".$_REQUEST['userid'];

			$this->resultado = $this->con->banco->Execute($sql);

			$this->registros = $this->resultado->FetchNextObject();

		}

		

		function gravarAlteracaoUsuarios(){

		$dt = date('d/m/Y');

		$hr = gmDate('H:i:s', strtotime("-3 hours"));	

		$data_hora = "$dt - $hr";

		$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];

		



			$sql = "update tbl_usuarios set 

			USUARIO_NIVEL = '".$_POST['usuario_nivel']."',

			USUARIO_NOME = '".$_POST['usuario_nome']."',

			USUARIO_SNOME = '".$_POST['usuario_snome']."',

			USUARIO_EMAIL = '".$_POST['usuario_email']."',

			USUARIO_CPF = '".$_POST['usuario_cpf']."',

			USUARIO_LOGIN = '".$_POST['usuario_login']."',

			USUARIO_TELEFONE = '".$_POST['usuario_telefone']."',

			USUARIO_CELULAR = '".$_POST['usuario_celular']."',

			USUARIO_CEP = '".$_POST['usuario_cep']."',

			USUARIO_RUA = '".$_POST['usuario_rua']."',

			USUARIO_NUMERO = '".$_POST['usuario_numero']."',

			USUARIO_COMPLEMENTO = '".$_POST['usuario_complemento']."',

			USUARIO_CIDADE = '".$_POST['usuario_cidade']."',

			USUARIO_ESTADO = '".$_POST['usuario_estado']."',

			USUARIO_BAIRRO = '".$_POST['usuario_bairro']."',

			USUARIO_BANCO = '".$_POST['usuario_banco']."',

			USUARIO_AGENCIA = '".$_POST['usuario_agencia']."',

			USUARIO_CONTA = '".$_POST['usuario_conta']."',

			USUARIO_DIGITO = '".$_POST['usuario_digito']."',

			ALTPOR = '".$responsavel."',

			DTALT = '".$data_hora."'



			where USUARIO_ID = ".$_POST['userid'];

			if($this->resultado = $this->con->banco->Execute($sql)){

				//alerta("Usuario alterado com sucesso!");

					return true;

			}

			else{

				alerta("Ocorreu um erro ao tentar alterar a seu usuario!");

					return false;

			}

		}



		function gravarUsuarios(){

			$dt = date('d/m/Y');

			$hr = gmDate('H:i:s', strtotime("-3 hours"));

			$data_hora = "$dt - $hr";

			$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];



			$sql = "insert into tbl_usuarios

			(

				USUARIO_NIVEL,

				USUARIO_NOME,

				USUARIO_SNOME,

				USUARIO_LOGIN,

				USUARIO_EMAIL,

				USUARIO_CPF,

				USUARIO_SENHA,

				USUARIO_TELEFONE,

				USUARIO_CELULAR,

				USUARIO_CEP,

				USUARIO_RUA,

				USUARIO_NUMERO,

				USUARIO_COMPLEMENTO,

				USUARIO_CIDADE,

				USUARIO_ESTADO,

				USUARIO_BAIRRO,

				USUARIO_BANCO,

				USUARIO_AGENCIA,

				USUARIO_CONTA,

				USUARIO_DIGITO,

				CADPOR,

				DTCAD

			)	

			values 	

			(

				".$_REQUEST['usuario_nivel'].",

				'".$_REQUEST['usuario_nome']."',

				'".$_REQUEST['usuario_snome']."',

				'".$_REQUEST['usuario_login']."',

				'".$_REQUEST['usuario_email']."',

				'".$_REQUEST['usuario_cpf']."',

				'".base64_encode($_REQUEST['usuario_senha'])."',

				'".$_REQUEST['usuario_telefone']."',

				'".$_REQUEST['usuario_celular']."',

				'".$_REQUEST['usuario_cep']."',

				'".$_REQUEST['usuario_rua']."',

				'".$_REQUEST['usuario_numero']."',

				'".$_REQUEST['usuario_complemento']."',

				'".$_REQUEST['usuario_cidade']."',

				'".$_REQUEST['usuario_estado']."',

				'".$_REQUEST['usuario_bairro']."',				

				'".$_REQUEST['usuario_banco']."',				

				'".$_REQUEST['usuario_agencia']."',				

				'".$_REQUEST['usuario_conta']."',				

				'".$_REQUEST['usuario_digito']."',				

				'".$responsavel."',

				'".$data_hora."'

			)";



				if($this->resultado = $this->con->banco->Execute($sql)){

					alerta("Usuario cadastrado com sucesso!");

						return true;

				}

				else{

					alerta("Ocorreu um erro ao tentar cadastrar seu usuario!");

						return false;

				}

		}



		function totalDeUsuariosCadastrados(){

			$sql = "select COUNT(*) as TOTALUSUARIOS from tbl_usuarios";

			$this->resultado = $this->con->banco->Execute($sql);

			$this->registros = $this->resultado->FetchNextObject();

			return $this->registros->TOTALUSUARIOS;

		}

		

	}

?>