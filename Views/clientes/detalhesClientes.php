<script>
function mascara(src, mask){
	var i = src.value.length;
	var saida = mask.substring(0,1);
	var texto = mask.substring(i)
	
	if (texto.substring(0,1) != saida){
		src.value += texto.substring(0,1);
	}
} 

function proximoCampo(atual,proximo){
	if(atual.value.length >= atual.maxLength){
		document.getElementById(proximo).focus();
	}
}
</script>
<link rel="stylesheet" href="head/css/smk-accordion.css" />

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<style type="text/css">
	.container_demo{
		max-width: 1024px;
		margin: 20px auto 20px;
	}
</style>
<form name="formularioAlterarTecnicos" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div class="breadcrumb">
				  <span class="left"></span>
				  <ul>
					<li><a href="#" class="active">Voc&ecirc; est&aacute; em: </a></li>
					<li><a href="index.php?content=listarClientes&show=listarClientes">Clientes</a></li>
					<li><a href="#" class="active">Ficha Cadastral de <?php echo $oquefazer->registros->CLIENTE_NOMEFANTASIA;?></a></li>
				  </ul>
				  <span class="right"></span>
				</div>
			</td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td valign="top">
				<div class="container_demo">
					<label class="labels-perfil-header"><b>Cadastrado realizado por </b><?php echo $oquefazer->registros->CADPOR;?> <b>em: </b> <?php echo $oquefazer->registros->DTCAD;?></label><br />
					<label class="labels-perfil-header"><b>Ultima altera&ccedil;&atilde;o por </b><?php echo $oquefazer->registros->ALTPOR;?> <b>em: </b> <?php echo $oquefazer->registros->DTALT;?></label><br /><br />
					<!-- Accordion begin -->
					<div class="accordion_example4">
						<!-- Section  -->
						<div class="accordion_in">
							<div class="acc_head">Dados da Empresa</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">C&oacute;digo de cadastro:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_ID;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Raz&atilde;o Social:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_RAZAOSOCIAL;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Nome Fantasia:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_NOMEFANTASIA;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">CNPJ:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CNPJ;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Dominio:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_DOMINIO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Area de atua&ccedil;&atilde;o:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_AREADEATUACAO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form" valign="top">Informa&ccedil;&otilde;es Adicionais:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_INFORMACOESADICIONAIS;?></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Dados Pessoais</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Representante Legal:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_REPRESENTANTELEGAL;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Estado Civil:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_ESTADOCIVIL;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Nacionalidade:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_NACIONALIDADE;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Naturalidade:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_NATURALIDADE;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Profiss&atilde;o/Cargo:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_PROFISSAOCARGO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Data de Nascimento:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_DATADENACIMENTO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Documento de identifica&ccedil;&atilde;o:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_DOCUMENTOIDENTIFICACAO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">CPF:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CPF;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Telefone:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_TELEFONE;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Telefone2:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_TELEFONE2;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Telefone3:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_TELEFONE3;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Celular:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CELULAR;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">E-mail:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_EMAIL;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">E-mail2:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_EMAIL2;?></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Endere&ccedil;o</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">CEP:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CEP;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Rua:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_RUA;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">N&uacute;mero:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_NUMERO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Complemento:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_COMPLEMENTO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Bairro:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_BAIRRO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Cidade:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CIDADE;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Estado:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_ESTADO;?></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Painel de controle - FTP</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Url:</td><td class="tamanho-da-tdright-form" ><a href="<?php echo $oquefazer->registros->CLIENTE_FTP_URL;?>" target="_blank" title="Clique aqui para acessar!" ><?php echo $oquefazer->registros->CLIENTE_FTP_URL;?></a></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Usu&aacute;rio:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_FTP_USUARIO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Senha:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_FTP_SENHA;?></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Painel de controle - Plataforma</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Plataforma:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CMS_NOME;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Url:</td><td class="tamanho-da-tdright-form" ><a href="<?php echo $oquefazer->registros->CLIENTE_CMS_URL;?>" target="_blank" title="Clique aqui para acessar!" ><?php echo $oquefazer->registros->CLIENTE_CMS_URL;?></a></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Usu&aacute;rio:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CMS_USUARIO;?></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" ><td class="tamanho-da-tdleft-form">Senha:</td><td class="tamanho-da-tdright-form" ><?php echo $oquefazer->registros->CLIENTE_CMS_SENHA;?></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Painel Financeiro</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'" >
										<td style="text-align: right;" colspan="2" class="tamanho-da-tdright-form" >
											<a href="index.php?content=formGerarBoleto&show=formGerarBoleto&clienteid=<? echo $oquefazer->registros->CLIENTE_ID;?>" title="Gerar Boleto" alt="Gerar Boleto">
												Gerar Boleto
											</a>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<!--div class="accordion_in">
							<div class="acc_head">Plano de Hospedagem</div>
							<div class="acc_content">
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Or&ccedil;amento</div>
							<div class="acc_content">
							</div>
						</div-->
					</div>
					<!-- Accordion end -->
				</div>

				<script type="text/javascript" src="head/js/smk-accordion.js"></script>
				<script type="text/javascript">
					jQuery(document).ready(function($){
						$(".accordion_example4").smk_Accordion({
							closeAble: true, //boolean
							closeOther: false, //boolean
						});					
					});
				</script>
			</td>
		</tr>
	</table>
</form>