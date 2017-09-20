<?php
	$settings = $db->query("SELECT nome_campeonato from settings");
	if($settings){
	    $settings = $settings->fetch_assoc();
	    $nome = $settings['nome_campeonato'];                                             
	}
?> 