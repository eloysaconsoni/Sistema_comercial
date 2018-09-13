<script type="text/javascript">
		function calc_total() {
			var qtd = parseInt(document.getElementById('qtdeen').value);
			total = qtd * parseInt(document.getElementById('val_unien').value);
			document.getElementById('val_toten').value = total;
		}
	</script>
<head>
	<title>Sistema Comercial</title>
	<link rel="shortcut icon" href="view/imagens/book-bag.png">
</head>
<body class="fundo">
	<div style="padding-top: 65px;">
	<link rel="stylesheet" type="text/css" href="view/CSS.css">
	<form method="post" action="controle.php" oninput="calc_total();">
		<fieldset style="border-color:  #00FF7F; font-size: 21px; font-weight: bolder; width: 500px; margin-left: 690px; margin-top: 50px;">
			<p style="color: #00FF7F;">Entrada de produtos</p>
			<p><label for="dataen">Data da entrada: </label><input id="dataen" type="date" name="data" style="color: red;
			border-color: red;"></p>
			<p><label for="barraen"> Barras: </label><input id="barraen" type="text" name="cod_barras"></p>
			<p style="position: absolute; top: 260;">Descrição:</p><label style="padding-left: 100px;" for="descen"></label><textarea id="descen" required="required"></textarea> 
			<p><label for="qtdeen"> Quantidade: </label> <input id="qtdeen" type="number" name="Cqtde"required="required"></p>
			<p><label for="val_unien"> Valor Unitário: R$ </label><input id="val_unien" type="number" name="val_unit"></p>
			<p><label for="val_toten">Valor Total: R$ </label> <input id="val_toten" type="text" name="val_total" readonly=""></p>
		</fieldset>
	</form> 
		<div style="margin-left: 690px; ">
			<a href="index.php"><button>Voltar</button></a>
			<button style="margin-left: 10px;" onclick="validacao()" >Cancelar</button>
			<input style="margin-left: 10px;" type="submit" name="gravar" value="Gravar">			
			
			<?php include "cabecalho.php" ?>
		</div>
		</div>
	