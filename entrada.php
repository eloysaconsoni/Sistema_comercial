<script type="text/javascript">
		function calc_total() {
			var qtd = parseInt(document.getElementById('qtdeen').value);
			total = qtd * parseInt(document.getElementById('val_unien').value);
			document.getElementById('val_toten').value = total;
		}
	</script>
</head>
<body>
	<form method="post" action="controle.php" oninput="calc_total();">
		<fieldset>
			<p><label for="dataen">Data da entrada:</label><input id="dataen" type="date" name="data"></p>
			<p><label for="barraen"> Barras:</label><input id="barraen" type="text" name="cod_barras"></p>
			<label for="descen">Descrição:</label><textarea id="descen" required="required"></textarea> 
			<p><label for="qtdeen"> Quantidade:</label> <input id="qtdeen" type="number" name="Cqtde"required="required"></p>
			<p><label for="val_unien"> Valor Unitário: R$</label><input id="val_unien" type="number" name="val_unit"></p>
			<p><label for="val_toten">Valor Total: R$ </label> <input id="val_toten" type="text" name="val_total" readonly=""></p>
			<p><input type="submit" name="gravar" value="Gravar"></p>
		</fieldset>
	</form>
			<a href="menu.php"><button>Cancelar</button></a>