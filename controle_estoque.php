<!-- quando a barra for digitada ele ira localizar o item em imprime.php -->
<head>
	<title>Sistema Comercial</title>
	<link rel="shortcut icon" href="view/imagens/book-bag.png">
</head>
<body class="fundo">
	<link rel="stylesheet" type="text/css" href="view/CSS.css">
<form method="post" action="imprime.php">
	<fieldset style="border-color:  #00FF7F; font-size: 21px; font-weight: bolder; width: 500px; margin-left: 690px; margin-top: 115px;">
	<p style="color: #00FF7F;">Controle de estoque</p>
	<p>Para pesquisar um produto digite o código de barras OU a descrição.</p>
	<p><label for="barra_dig"> Barras: </label><input id="barra_dig" type="text" name="cod_barras"></p>
	<p style="position: absolute; top: 284px;">Descrição: </p><label style="padding-left: 100px;" for="descen"></label><textarea id="descen" ></textarea>
	
</fieldset>
</form>
<div style="margin-left: 690px;">
	<p><input style="margin-left: 10px;" type="submit" value="Pesquisar">
	<a href="index.php"><button style="margin-left: 10px;">Voltar</button></a>
</p>
</div>
<?php include "cabecalho.php" ?>
       