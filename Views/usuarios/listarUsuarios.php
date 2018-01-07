<?php 
	$ligacao = mysql_connect("localhost", "dionesjo_user", "Diones1507"); 
	$ok = mysql_select_db("dionesjo_sistema", $ligacao); 
?>
<form method="POST" action="index.php">
	<table width="100%" style="margin-bottom: 20px;">
		<tr>
			<td align="left" colspan="2">
				<div class="breadcrumb">
				  <span class="left"></span>
				  <ul>
					<li><a href="#" class="active">Voc&ecirc; est&aacute; em: </a></li>
					<li><a href="index.php?content=listarUsuarios&show=listarUsuarios">Usu&aacute;rios</a></li>
					<li><a href="#" class="active">Consultar</a></li>
				  </ul>
				  <span class="right"></span>
				</div>
			</td>
		</tr>
		<tr>
			<td align="left">
				<a href="index.php?content=listarUsuarios&show=listarUsuarios" title="Lixeira" class="lixeira" >Publicados(<?
					$consulta = "select * from tbl_usuarios where STATUS = 1"; 
					$resultado = mysql_query($consulta, $ligacao); 
					$cont = mysql_num_rows($resultado);
					echo $cont;
				?>)</a>&nbsp;
				<a href="index.php?content=listarUsuariosLixeira&show=listarUsuariosLixeira" title="Lixeira" class="lixeira" >Lixeira(<?
					$consulta = "select * from tbl_usuarios where STATUS = 0"; 
					$resultado = mysql_query($consulta, $ligacao); 
					$cont = mysql_num_rows($resultado);
					echo $cont;
				?>)</a>
			</td>
			<td align="right">
				<input 
					class="btn  btn-primary false" 
					type="submit" value="Cadastrar novo" name="Cadastrar novo" title="Novo Registro" 
				/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="content"/>
				<input type="hidden" value="formularioCadastrarUsuarios" name="show"/>
			</td>
		</tr>
	</table>
</form>	

	<table width="100%" class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>
			<tr style="font-size: 11px;">
				<th class="cols-labels" title="Clique para ordenar por Tipo de acesso" >Status</th>
				<th class="cols-labels" title="Clique para ordenar por Tipo de acesso" >Acesso</th>
				<th class="cols-labels" title="Clique para ordenar por Nome" >Nome</th>
				<th class="cols-labels" title="Clique para ordenar por Data de cadastro" >cadastrado por</th>
				<th class="cols-labels" title="Clique para ordenar por Data de cadastro" >Data de cadastro</th>
				<th class="cols-labels" title="Clique para ordenar por Data de cadastro" >Alterado por</th>
				<th class="cols-labels" title="Clique para ordenar por data de altera&ccedil;&atilde;o" >Ultima altera&ccedil;&atilde;o</th>
				<th class="cols-labels" title="Op&ccedil;&otilde;es Administrativas" >Op&ccedil;&otilde;es</th>
			</tr>
		</thead>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$userid = $oquefazer->registros->USUARIO_ID;
					$online = $oquefazer->registros->USUARIO_ON;
					$nivel	= $oquefazer->registros->USUARIO_NIVEL;
					$nome	= $oquefazer->registros->USUARIO_NOME;
					$snome	= $oquefazer->registros->USUARIO_SNOME;
					$login	= $oquefazer->registros->USUARIO_LOGIN;
					$email	= $oquefazer->registros->USUARIO_EMAIL;
					$cadpor	= $oquefazer->registros->CADPOR;
					$dtcad	= $oquefazer->registros->DTCAD;
					$altpor	= $oquefazer->registros->ALTPOR;
					$dtalt	= $oquefazer->registros->DTALT;
					
					if($nivel == 1){
						$cargo = 'Administrador';
					}else{
						$cargo = 'Usu&aacute;rio';
					}
					
					if($online == 1){$on = '<center><img src="images/on.png"></center>';}else{$on = '<center><img src="images/off.png"></center>';}
			?>
		<tr class="tr_out" onmouseover="this.className='tr_over'" onmouseout="this.className='tr_out'">
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $on;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $cargo;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $nome.' '.$snome;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $cadpor;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $dtcad;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $altpor;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $dtalt;?></label></td>
			<td class="rows-labels-left" >
				<table align="center">
					<tr>
						<td><a class="btn  btn-inverse false" href="index.php?content=detalhesUsuarios&show=detalhesUsuarios&userid=<? echo $userid;?>">Detalhes</a></td>
						<td><a class="btn  btn-warning false" href="index.php?content=formularioAlterarUsuarios&show=formularioAlterarUsuarios&userid=<? echo $userid;?>">Alterar</a></td>
						<td><a class="btn  btn-danger false" href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\n\nDeseja excluir o cadastro abaixo?\n\n<?php echo 'Nome: '.$nome.' '.$snome.'\nLogin: '.$snome.'\nE-mail: '.$email;?>')) {location='index.php?content=lixeiraUsuarios&show=lixeiraUsuarios&userid=<? echo $userid;?>';}">Deletar</a></td>
					</tr>
				</table>
			</td>
		</tr>
				<?php
				}
			?>
	</table>