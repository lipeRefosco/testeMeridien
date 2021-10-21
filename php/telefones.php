<?php

	$telefones = array(
		'51 12345-6789',
		'(51) 77777-9999',
		'51999999999', // padronizado
		'51 99999',
		'5199999999999999999',
		'(51) 55555--9998',
		'51)))))) 12345-6789'
	);

	// resolva abaixo

	function padronizaTelefone($numero)
	{
		$expressao = "/[),.(\s-]/";
		$numeroTratado = preg_replace($expressao, "", $numero);
		
		if ( strlen($numeroTratado) == 11 ) {
			return $numeroTratado;
		}
	}

	function padronizaTelefoneArray($array)
	{
		foreach ( $array as $value ){

			$numeroTratado = padronizaTelefone($value);

			if ( $numeroTratado == NULL) {

				unset($value);

			} else {

				$todosNumeros[] = $numeroTratado;

			}
		}
		return $todosNumeros;
	}

	$telefonesPadronizados = padronizaTelefoneArray($telefones);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Teste Jr - PHP</title>
</head>
<body>
	<ol>
		<?php foreach ($telefonesPadronizados as $value) { ?>
			<li><?php echo $value; ?></li>
		<?php } ?>
	</ol>
	
</body>
</html>
