<?php 
	$ligacao = mysql_connect("localhost", "dionesjo_user", "Diones1507"); 
	$ok = mysql_select_db("dionesjo_sistema", $ligacao); 
?>
<form method="POST" action="index.php">
	<table style="width:100%; margin-bottom: 20px;">
		<tr>
			<td align="left" colspan="2">
				<div class="breadcrumb">
				  <span class="left"></span>
				  <ul>
					<li><a href="#" class="active">Voc&ecirc; est&aacute; em: </a></li>
					<li><a href="index.php?content=listarClientes&show=listarClientes">Clientes</a></li>
					<li><a href="#" class="active">Consultar</a></li>
				  </ul>
				  <span class="right"></span>
				</div>
			</td>
		</tr>
		<tr>
			<td align="left">
				<a href="index.php?content=listarClientes&show=listarClientes" title="Lixeira" class="lixeira" >Publicados(<?
					$consulta = "select * from tbl_clientes where STATUS = 1"; 
					$resultado = mysql_query($consulta, $ligacao); 
					$cont = mysql_num_rows($resultado);
					echo $cont;
				?>)</a>&nbsp;
				<a href="index.php?content=listarClientesLixeira&show=listarClientesLixeira" title="Lixeira" class="lixeira" >Lixeira(<?
					$consulta = "select * from tbl_clientes where STATUS = 0"; 
					$resultado = mysql_query($consulta, $ligacao); 
					$cont = mysql_num_rows($resultado);
					echo $cont;
				?>)
				</a>
			</td>
			<td align="right">
				<input 
					class="btn  btn-primary false" 
					type="submit" value="Cadastrar novo" name="Cadastrar novo" title="Novo Registro" 
				/>
				<input type="hidden" value="formularioCadastrarClientes" name="content"/>
				<input type="hidden" value="formularioCadastrarClientes" name="show"/>
			</td>
		</tr>
	</table>
</form>	

	<table width="100%" class="tabelas-consulta" cellspacing="0" cellpadding="0" border="0" class="display" id="listagem">
		<thead>
			<tr class="rows-labels-tr">
				<th class="cols-labels" title="Clique para ordenar por Nome" >ID</th>
				<th class="cols-labels" title="Clique para ordenar por Nome" >Raz&atilde;o Social</th>
				<th class="cols-labels" title="Clique para ordenar por Nome" >Nome Fantasia</th>
				<th class="cols-labels" title="Clique para ordenar por Nome" >Representante Legal</th>
				<th class="cols-labels" title="Clique para ordenar por Nome" >Dom&iacute;nio</th>
				<th class="cols-labels" title="Op&ccedil;&otilde;es Administrativas" >Op&ccedil;&otilde;es</th>
			</tr>
		</thead>
			<?php
				while($oquefazer->registros = $oquefazer->resultado->FetchNextObject())
				{
					$clienteid = $oquefazer->registros->CLIENTE_ID;
					$cliente_razaosocial = $oquefazer->registros->CLIENTE_RAZAOSOCIAL;
					$cliente_nomefantasia	= $oquefazer->registros->CLIENTE_NOMEFANTASIA;
					$cliente_representantelegal	= $oquefazer->registros->CLIENTE_REPRESENTANTELEGAL;
					$cadpor	= $oquefazer->registros->CADPOR;
					$dtcad	= $oquefazer->registros->DTCAD;
					$altpor	= $oquefazer->registros->ALTPOR;
					$dtalt	= $oquefazer->registros->DTALT;
			?>
		<tr class="rows-labels-tr">
			<td class="rows-labels-left" ><label class="rows-labels-td">00<? echo $clienteid;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $cliente_razaosocial;?></a></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $cliente_nomefantasia;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><? echo $cliente_representantelegal;?></label></td>
			<td class="rows-labels-left" ><label class="rows-labels-td"><a class="link_dominio" href="http://primedeluxe.com.br" target="_blank">Visitar Site</a></label></td>
			<td class="rows-labels-left" >
				<table align="center">
					<tr>
						<td><a class="btn  btn-success false" href="index.php?content=restaurarClientes&show=restaurarClientes&clienteid=<? echo $clienteid;?>">Restaurar</a></td>
						<td><a class="btn  btn-danger false" href="javascript:if(confirm('ATEN&Ccedil;&Atilde;O!!!\n\nDeseja excluir permanentemente o cadastro abaixo?\n\n<?php echo 'Nome: '.$nome.' '.$snome;?>')) {location='index.php?content=excluirClientes&show=excluirClientes&clienteid=<? echo $clienteid;?>';}">Excluir</a></td>
					</tr>
				</table>
			</td>
		</tr>
				<?php
				}
			?>
	</table>