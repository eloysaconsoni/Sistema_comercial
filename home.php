<?php 

	$senhapadrao = 0000;
	$senhausuario = 0;
	$senhadig = $_POST["senha"];


	if (($senhadig == $senhapadrao) || ($senhadig == $senhausuario)) {
		header('Location: menu.php'); 
	}else{
		echo "Senha invalida, por favor tente novamente ou use a senha do ADM";
		$senhaiv = 1;
		
		if ( $senhaiv == 1) {
			sleep(3);
			header('Location: index.html');
			
		}
	}
?>
	
