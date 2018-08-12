<script type="text/javascript">
		function calc_total() {
			var qtd = parseInt(document.getElementById('qtdes').value);
			total = qtd * parseInt(document.getElementById('val_unie').value);
			document.getElementById('val_tots').value = total;
		}
	</script>
</head>
<body>
	<!-- Controle de saida do estoque, levará os valores para o controle -->
	<form method="post" action="controle.php" oninput="calc_total();">
		<fieldset>
			<p><label for="datas">Data de saída:</label><input id="datas" type="date" name="data"></p>
			<p><label for="barras"> Barras:</label><input id="barras" type="text" name="cod_barras"></p>
			<label for="descs">Descrição:</label><textarea id="descs" required="required"></textarea> 
			<p><label for="qtdes"> Quantidade:</label> <input id="qtdes" type="number" name="Cqtde"required="required"></p>
			<p><label for="val_tots">Valor Total: R$ </label> <input id="val_tots" type="text" name="val_total" readonly=""></p>
			<p><input type="submit" name="gravar" value="Gravar"></p>
		</fieldset>
	</form>
			<a href="menu.php"><button>Cancelar</button></a>

			<!-- -->