<head>
	<title>Sistema Comercial</title>
	<link rel="shortcut icon" href="view/imagens/book-bag.png">
</head>
<body class="fundo">
	<link rel="stylesheet" type="text/css" href="view/CSS.css">
	<form>
		<fieldset style="border-color:  #00FF7F; font-size: 21px; font-weight: bolder; width: 500px; margin-left: 450px; margin-top: 115px; ">

			<p style="color: #00FF7F;">Relatório de Todos os Produtos</p>

			<label for="descen">Descrição: </label><textarea id="descen" required="required"></textarea>

			<p><label for="qtdeen"> Quantidade: </label> <input id="qtdeen" type="number" name="Cqtde"required="required"></p>

			<p><label for="val_unien"> Valor Unitário: R$</label><input id="val_unien" type="number" name="val_unit"></p>
			
			<p><label for="val_toten">Valor Total: R$ </label> <input id="val_toten" type="text" name="val_total" readonly=""></p>

		</fieldset>
	</form>
	<div style="margin-left: 690px; ">
	 <a href="menu_relatorio.php"><button>Voltar</button></a>
	 <?php include "cabecalho.php" ?>
	</div>
</body>