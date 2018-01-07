<?php
	class manutencaoClientes{
		var $resultado;
		var $registros;

		function manutencaoClientes(){
			$this->con = new conexao();
		}

		function listarClientes(){
			$sql = "select * FROM tbl_clientes WHERE STATUS = 1	ORDER BY CLIENTE_RAZAOSOCIAL ASC";
			$this->resultado = $this->con->banco->Execute($sql);			
		}
		
		function listarClientesLixeira(){
			$sql = "select * FROM tbl_clientes WHERE STATUS = 0	ORDER BY CLIENTE_RAZAOSOCIAL ASC";
			$this->resultado = $this->con->banco->Execute($sql);			
		}
		
		function lixeiraClientes(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
			$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];
			
				$sql = "update tbl_clientes set STATUS = 0,
				ALTPOR = '".$responsavel."',
				DTALT = '".$data_hora."'

				where CLIENTE_ID = ".$_REQUEST['clienteid'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Cliente alterado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar alterar a seu cliente!");
						return false;
				}
		}
		function restaurarClientes(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));	
			$data_hora = "$dt - $hr";
			$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];
			
				$sql = "update tbl_clientes set STATUS = 1,
				ALTPOR = '".$responsavel."',
				DTALT = '".$data_hora."'

				where CLIENTE_ID = ".$_REQUEST['clienteid'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					//alerta("Cliente alterado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar alterar a seu cliente!");
						return false;
				}
		}
		
		function excluirClientes(){
			$sql = "delete from tbl_clientes where CLIENTE_ID =".$_REQUEST['clienteid'];
				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Cliente excluido com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar excluir o cliente!");
						return false;
				}
		}

		function formularioAlterarClientes(){
			$sql = "select * from tbl_clientes where CLIENTE_ID =".$_REQUEST['clienteid'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}

		function detalhesClientes(){
			$sql = "select * from tbl_clientes where CLIENTE_ID =".$_REQUEST['clienteid'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		function formGerarBoleto(){
			$sql = "select * from tbl_clientes where CLIENTE_ID =".$_REQUEST['clienteid'];
			$this->resultado = $this->con->banco->Execute($sql);
			$this->registros = $this->resultado->FetchNextObject();
		}
		
		function gravarAlteracaoClientes(){
		$dt = date('d/m/Y');
		$hr = gmDate('H:i:s', strtotime("-3 hours"));	
		$data_hora = "$dt - $hr";
		$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];
		

			$sql = "update tbl_clientes set 
			CLIENTE_RAZAOSOCIAL = '".$_POST['cliente_razaosocial']."',
			CLIENTE_NOMEFANTASIA = '".$_POST['cliente_nomefantasia']."',
			CLIENTE_CNPJ = '".$_POST['cliente_cnpj']."',
			CLIENTE_CEP = '".$_POST['cliente_cep']."',
			CLIENTE_RUA = '".$_POST['cliente_rua']."',
			CLIENTE_NUMERO = '".$_POST['cliente_numero']."',
			CLIENTE_COMPLEMENTO = '".$_POST['cliente_complemento']."',
			CLIENTE_BAIRRO = '".$_POST['cliente_bairro']."',
			CLIENTE_CIDADE = '".$_POST['cliente_cidade']."',
			CLIENTE_ESTADO = '".$_POST['cliente_estado']."',
			CLIENTE_DOMINIO = '".$_POST['cliente_dominio']."',
			CLIENTE_TELEFONE = '".$_POST['cliente_telefone']."',
			CLIENTE_TELEFONE2 = '".$_POST['cliente_telefone2']."',
			CLIENTE_TELEFONE3 = '".$_POST['cliente_telefone3']."',
			CLIENTE_CELULAR = '".$_POST['cliente_celular']."',
			CLIENTE_EMAIL = '".$_POST['cliente_email']."',
			CLIENTE_EMAIL2 = '".$_POST['cliente_email2']."',
			CLIENTE_REPRESENTANTELEGAL = '".$_POST['cliente_representantelegal']."',
			CLIENTE_ESTADOCIVIL = '".$_POST['cliente_estadocivil']."',
			CLIENTE_NACIONALIDADE = '".$_POST['cliente_nacionalidade']."',
			CLIENTE_NATURALIDADE = '".$_POST['cliente_naturalidade']."',
			CLIENTE_PROFISSAOCARGO = '".$_POST['cliente_profissaocargo']."',
			CLIENTE_AREADEATUACAO = '".$_POST['cliente_areadeatuacao']."',
			CLIENTE_DATADENACIMENTO = '".$_POST['cliente_datadenacimento']."',
			CLIENTE_DOCUMENTOIDENTIFICACAO = '".$_POST['cliente_documentoidentificacao']."',
			CLIENTE_CPF = '".$_POST['cliente_cpf']."',
			CLIENTE_INFORMACOESADICIONAIS = '".$_POST['cliente_informacoesadicionais']."',
			
			CLIENTE_FTP_URL = '".$_POST['cliente_ftp_url']."',
			CLIENTE_FTP_USUARIO = '".$_POST['cliente_ftp_usuario']."',
			CLIENTE_FTP_SENHA = '".$_POST['cliente_ftp_senha']."',
			
			CLIENTE_CMS_NOME = '".$_POST['cliente_cms_nome']."',
			CLIENTE_CMS_URL = '".$_POST['cliente_cms_url']."',
			CLIENTE_CMS_USUARIO = '".$_POST['cliente_cms_usuario']."',
			CLIENTE_CMS_SENHA = '".$_POST['cliente_cms_senha']."',
			
			ALTPOR = '".$responsavel."',
			DTALT = '".$data_hora."'

			where CLIENTE_ID = ".$_POST['clienteid'];
			if($this->resultado = $this->con->banco->Execute($sql)){
				//alerta("Cliente alterado com sucesso!");
					return true;
			}
			else{
				alerta("Ocorreu um erro ao tentar alterar a seu cliente!");
					return false;
			}
		}

		function gravarClientes(){
			$dt = date('d/m/Y');
			$hr = gmDate('H:i:s', strtotime("-3 hours"));
			$data_hora = "$dt - $hr";
			$status = 1;
			$responsavel = $_SESSION['sessao_nome_usuario'].' '.$_SESSION['sessao_snome_usuario'];

			$sql = "insert into tbl_clientes
			(
				CLIENTE_RAZAOSOCIAL,
				CLIENTE_NOMEFANTASIA,
				CLIENTE_CNPJ,
				CLIENTE_CEP,
				CLIENTE_RUA,
				CLIENTE_NUMERO,
				CLIENTE_COMPLEMENTO,
				CLIENTE_BAIRRO,
				CLIENTE_CIDADE,
				CLIENTE_ESTADO,
				CLIENTE_DOMINIO,
				CLIENTE_TELEFONE,
				CLIENTE_TELEFONE2,
				CLIENTE_TELEFONE3,
				CLIENTE_CELULAR,
				CLIENTE_EMAIL,
				CLIENTE_EMAIL2,
				CLIENTE_REPRESENTANTELEGAL,
				CLIENTE_ESTADOCIVIL,
				CLIENTE_NACIONALIDADE,
				CLIENTE_NATURALIDADE,
				CLIENTE_PROFISSAOCARGO,
				CLIENTE_AREADEATUACAO,
				CLIENTE_DATADENACIMENTO,
				CLIENTE_DOCUMENTOIDENTIFICACAO,
				CLIENTE_CPF,
				CLIENTE_INFORMACOESADICIONAIS,
				CLIENTE_FTP_URL,
				CLIENTE_FTP_USUARIO,
				CLIENTE_FTP_SENHA,
				CLIENTE_CMS_NOME,
				CLIENTE_CMS_URL,
				CLIENTE_CMS_USUARIO,
				CLIENTE_CMS_SENHA,
				CADPOR,
				STATUS,
				DTCAD
			)	
			values 	
			(
				'".$_REQUEST['cliente_razaosocial']."',
				'".$_REQUEST['cliente_nomefantasia']."',
				'".$_REQUEST['cliente_cnpj']."',
				'".$_REQUEST['cliente_cep']."',
				'".$_REQUEST['cliente_rua']."',
				'".$_REQUEST['cliente_numero']."',
				'".$_REQUEST['cliente_complemento']."',
				'".$_REQUEST['cliente_bairro']."',
				'".$_REQUEST['cliente_cidade']."',
				'".$_REQUEST['cliente_estado']."',
				'".$_REQUEST['cliente_dominio']."',
				'".$_REQUEST['cliente_telefone']."',
				'".$_REQUEST['cliente_telefone2']."',
				'".$_REQUEST['cliente_telefone3']."',
				'".$_REQUEST['cliente_celular']."',
				'".$_REQUEST['cliente_email']."',
				'".$_REQUEST['cliente_email2']."',
				'".$_REQUEST['cliente_representantelegal']."',
				'".$_REQUEST['cliente_estadocivil']."',
				'".$_REQUEST['cliente_nacionalidade']."',
				'".$_REQUEST['cliente_naturalidade']."',
				'".$_REQUEST['cliente_profissaocargo']."',
				'".$_REQUEST['cliente_areadeatuacao']."',
				'".$_REQUEST['cliente_datadenacimento']."',
				'".$_REQUEST['cliente_documentoidentificacao']."',
				'".$_REQUEST['cliente_cpf']."',
				'".$_REQUEST['cliente_informacoesadicionais']."',
				'".$_REQUEST['cliente_ftp_url']."',
				'".$_REQUEST['cliente_ftp_usuario']."',
				'".$_REQUEST['cliente_ftp_senha']."',
				'".$_REQUEST['cliente_cms_nome']."',
				'".$_REQUEST['cliente_cms_url']."',
				'".$_REQUEST['cliente_cms_usuario']."',
				'".$_REQUEST['cliente_cms_senha']."',
				'".$responsavel."',
				'".$status."',
				'".$data_hora."'
			)";

				if($this->resultado = $this->con->banco->Execute($sql)){
					alerta("Cliente cadastrado com sucesso!");
						return true;
				}
				else{
					alerta("Ocorreu um erro ao tentar cadastrar seu cliente!");
						return false;
				}
		}
	}
?>