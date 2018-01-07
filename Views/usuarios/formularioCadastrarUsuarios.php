<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" language="javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#usuario_cep").blur(function(e){
		if($.trim($("#usuario_cep").val()) != ""){
			$.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+$("#usuario_cep").val(), function(){
				if(resultadoCEP["resultado"]){
					$("#usuario_rua").val(unescape(resultadoCEP["tipo_logradouro"])+": "+unescape(resultadoCEP["logradouro"]));
					$("#usuario_bairro").val(unescape(resultadoCEP["bairro"]));
					$("#usuario_cidade").val(unescape(resultadoCEP["cidade"]));
					$("#usuario_estado").val(unescape(resultadoCEP["uf"]));
				}else{
					alerta("Não foi possivel encontrar o endereço");
				}
			});				
		}		
	})
});
</script>
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
<form name="formularioCadastrarUsuarios" action="index.php" method="post">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div class="breadcrumb">
				  <span class="left"></span>
				  <ul>
					<li><a href="#" class="active">Voc&ecirc; est&aacute; em: </a></li>
					<li><a href="index.php?content=listarUsuarios&show=listarUsuarios">Usu&aacute;rios</a></li>
					<li><a href="#" class="active">Novo Registro</a></li>
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
					<!-- Accordion begin -->
					<div class="accordion_example4">
						<div class="accordion_in">
							<div class="acc_head">Dados de Acesso</div>
							<div class="acc_content">
								<table width="100%">
									<tr>
										<td class="tamanho-da-tdright-form">Tipo de Acesso</td>
										<td>
											<select name="usuario_nivel" id="usuario_nivel" required="required" class="posicao-dos-campos-form">
											  <option value="0">Selecione uma op&ccedil;&atilde;o</option>
											  <option value="1">Administrador</option>
											  <option value="2">Usu&aacute;rio</option>
											</select>
										</td>
									</tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">E-mail:</td><td><input type="text" name="usuario_email" id="usuario_email" size="30" maxlength="50" required="required" class="posicao-dos-campos-form" placeholder="Digite seu e-mail"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Login:</td><td><input type="text" name="usuario_login" id="usuario_login" size="30" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite seu nome de usuário"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Senha:</td><td><input type="password" name="usuario_senha" id="usuario_senha" size="30" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite sua senha"/></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Dados Pessoais</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Nome:</td><td><input type="text" name="usuario_nome" id="usuario_nome" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite seu primeiro nome"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Sobrenome:</td><td><input type="text" name="usuario_snome" id="usuario_snome" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite seu ultimo nome"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">CPF:</td><td><input type="text" name="usuario_cpf" id="usuario_cpf" size="30px" maxlength="14" required="required" class="posicao-dos-campos-form" placeholder="Digite seu CPF" onkeypress="mascara(this, '###.###.###-##')" onkeyup="proximoCampo(this, 'usuario_telefone')"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Telefone:</td><td><input type="text" name="usuario_telefone" id="usuario_telefone" size="30px" maxlength="12" required="required" class="posicao-dos-campos-form" placeholder="Digite seu telefone" onkeypress="mascara(this, '##&nbsp;####-####')" onkeyup="proximoCampo(this, 'usuario_celular')"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Celular:</td><td><input type="text" name="usuario_celular" id="usuario_celular" size="30px" maxlength="14" required="required" class="posicao-dos-campos-form" placeholder="Digite seu celular" onkeypress="mascara(this, '##&nbsp;#&nbsp;####-####')" onkeyup="proximoCampo(this, 'usuario_cep')" /></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Dados Banc&aacute;rios</div>
							<div class="acc_content">
								<table width="100%">
									<tr>
										<td class="tamanho-da-tdright-form">Banco</td>
										<td>
											<select name="usuario_banco" id="usuario_banco" required="required" class="posicao-dos-campos-form">
											  <option value="0">Selecione uma op&ccedil;&atilde;o</option>
											  <option value="341">ITA&Uacute;-UNIBANCO</option>
											</select>
										</td>
									</tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Ag&ecirc;ncia:</td><td><input type="text" name="usuario_agencia" id="usuario_agencia" size="4px" maxlength="4" class="posicao-dos-campos-form" onkeypress="mascara(this, '####')" onkeyup="proximoCampo(this, 'usuario_conta')"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Conta:</td><td><input type="text" name="usuario_conta" id="usuario_conta" size="5px" maxlength="5" class="posicao-dos-campos-form" onkeypress="mascara(this, '#####')" onkeyup="proximoCampo(this, 'usuario_digito')"/>&nbsp;</td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Digito:</td><td><input type="text" name="usuario_digito" id="usuario_digito" size="1px" maxlength="1" class="posicao-dos-campos-form" onkeypress="mascara(this, '#')" onkeyup="proximoCampo(this, 'usuario_cep')"/></td></tr>
								</table>
							</div>
						</div>
						<div class="accordion_in">
							<div class="acc_head">Endere&ccedil;o</div>
							<div class="acc_content">
								<table width="100%">
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">CEP:</td><td><input type="text" name="usuario_cep" id="usuario_cep" size="30px" maxlength="9" required="required" class="posicao-dos-campos-form" placeholder="Digite seu cep" onkeypress="mascara(this, '#####-###')" onkeyup="proximoCampo(this, 'usuario_numero')"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Rua:</td><td><input type="text" name="usuario_rua" id="usuario_rua" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite nome da sua rua"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">N&uacute;mero:</td><td><input type="text" name="usuario_numero" id="usuario_numero" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite o numero da sua casa"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Complemento:</td><td><input type="text" name="usuario_complemento" id="usuario_complemento" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Se houver digite seu complemento"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Bairro:</td><td><input type="text" name="usuario_bairro" id="usuario_bairro" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite seu bairro"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Cidade:</td><td><input type="text" name="usuario_cidade" id="usuario_cidade" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite sua cidade"/></td></tr>
									<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'"><td class="tamanho-da-tdleft-form">Estado:</td><td><input type="text" name="usuario_estado" id="usuario_estado" size="30px" maxlength="30" required="required" class="posicao-dos-campos-form" placeholder="Digite seu estado"/></td></tr>
								</table>
							</div>
						</div>
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
		<tr>
			<td align="right" colspan="2">
					<input class="btn  btn-success false"  type="submit" value="Salvar" name="Salvar" id="usuario_salvar"/>&nbsp;
					<input class="btn  btn-danger false" type="reset" value="Limpar" name="Limpar"/>
					<input type="hidden" value="gravarUsuarios" name="content"/>
					<input type="hidden" value="gravarUsuarios" name="show"/>
			</td>
		</tr>
	</table>
</form>