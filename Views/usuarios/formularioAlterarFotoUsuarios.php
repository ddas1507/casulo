<form name="formularioAlterarFotoImoveis" action="index.php" method="post" enctype="multipart/form-data">
	<table class="tabela-nevegacao">
		<tr>
			<td align="left">
				<div id="navegacao-header">
					<ul>
						<li><b>Usu&aacute;rios</b></li>
						<li>></li>
						<li><b><a href="index.php?content=listarUsuarios&show=listarUsuarios">Consultar Usu&aacute;rios</a></b></li>
						<li>></li>
						<li>Atualizar Foto</li>
					</ul>
				</div>
			</td>
		</tr>
	</table>
	<table class="tabelas-cadastro">
		<tr>
			<td valign="top">
				<fieldset class="conteudo-fielset"><legend class="titulo-fielset">Foto principal</legend>
					<table>
						<td >Usuario:</td><td ><input type="text" name="usuario_nome" id="usuario_nome" size="100px" value="<?php echo $oquefazer->registros->USUARIO_NOME;?>" disabled="disabled"/></td>
						<tr><td >Foto:</td><td ><input type="file" name="usuario_img" id="usuario_img" /></td></tr>
					</table>
				</fieldset>
			</td>
		</tr>	
		<tr >
			<td colspan="2">
				<fieldset class="conteudo-fielset">
					<input class="btn  btn-success false"type="submit" value="Alterar" name="Alterar"/>
					<input class="btn  btn-danger false" yype="reset" value="Restaurar" name="Restaurar"/>
				<input type="hidden" value="gravarAlteracaoFotoUsuarios" name="content"/>
				<input type="hidden" value="gravarAlteracaoFotoUsuarios" name="show"/>
				<input type="hidden" value="<?php echo $oquefazer->registros->USUARIO_ID;?>" name="userid"/>
			</td>
		</tr>
	</table>
</form>