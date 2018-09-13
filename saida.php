<script type="text/javascript">
		function calc_total() {
			var qtd = parseInt(document.getElementById('qtdes').value);
			total = qtd * parseInt(document.getElementById('val_unie').value);
			document.getElementById('val_tots').value = total;
		}
	</script>
<head>
	<title>Sistema Comercial</title>
	<link rel="shortcut icon" href="view/imagens/book-bag.png">
</head>
<body class="fundo">
	<link rel="stylesheet" type="text/css" href="view/CSS.css">
	<!-- Controle de saida do estoque, levará os valores para o controle -->
	<div>
	<form id="fo" method="post" action="controle.php" oninput="calc_total();">
		<fieldset style="border-color:  #00FF7F; font-size: 21px; font-weight: bolder; width: 500px; margin-left: 690px; margin-top: 115px;">
			<p style="color: #00FF7F;">Saída de Produtos</p>
			<p><label for="datas">Data de saída: </label><input id="datas" type="date" name="data" style="color: red; border-color: red;"></p>
			<p><label for="barras">Barras: </label><input id="barras" type="text" name="cod_barras"></p>
			<p style="position: absolute; top: 260;">Descrição:</p><label style="padding-left: 100px;" for="descen"></label><textarea id="descen" required="required"></textarea> 
			<p><label for="qtdes"> Quantidade: </label> <input id="qtdes" type="number" name="Cqtde"required="required"></p>
			<p><label for="val_tots">Valor Total: R$ </label> <input id="val_tots" type="text" name="val_total" readonly=""></p>
		</fieldset>
	</form>
	</div>
	<div style="margin-left: 690px; "> <!-- Alinhados -->
			<a href="index.php"><button>Voltar</button></a>
			<button style="margin-left: 10px;" onclick="validacao()" >Cancelar</button>
			<input style="margin-left: 10px;" type="submit" name="gravar" value="Gravar">
	</div>


<?php include "cabecalho.php" ?>
<script type="text/javascript">

	function funcao_b() {
}
function confirmar() {
    $( "#dialog-confirm" ).dialog({
      resizable: false,
      height: "auto",
      width: 520,
      modal: true,
      buttons: {
        "Sim": function() {

          $( this ).dialog( "close" );
          
        },
        'Não': function() {
          $( this ).dialog( "close" );
          console.log('cancelado');
        }
      }
    });
} </script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

<button id="btn" onclick="confirmar();">Cancelar</button><!-- Botão de teste-->
<div id="dialog-confirm" title="Tem certeza que deseja cancelar essa operação?"></div>

</div>

			<a href="index.php"><button>Voltar</button></a>

			<!-- -->