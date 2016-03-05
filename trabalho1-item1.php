<?php

#ENTRADA DE DADOS

print "Qual o sexo do cliente? ";
	$sexo=trim(fgets(STDIN));
print "Quantas cervejas foram consumidas? ";
	$ceva=trim(fgets(STDIN));
print "Quantos refrigerantes foram consumidos? ";
	$refr=trim(fgets(STDIN));
print "Quantos espetinhos foram consumidos? ";
	$espt=trim(fgets(STDIN));

#CÁLCULO PRINCIPAL 

	$bc=($ceva*2.5)+($refr*2)+($espt*4);

	
#CÁLCULOS COMPLEMENTARES

	if($bc<=15){
		$cover=3;
	}else{
		$cover=0;
	}
#----------
	if ($sexo=="M"||$sexo=="m"){
		$cta=10;
		$sub=$bc+$cta+$cover;
		$total=($sub*0.1)+$sub;
	}
	else{if($sexo=="F"||$sexo=="f"){
		$cta=8;
		$sub=$bc+$cta+$cover;
		$total=($sub*0.1)+$sub;
	}
	}
	
#RETORNO DE DADOS
	
print "\nValor da conta:\n";
print "\nR$ ".$cta."(valor básico)";
print "\nR$ ".$bc."(bebida e comida)";
print "\nR$ ".$cover."(artistas)";
print "\nR$ ".$sub."(subtotal sem 10%)";
print "\n------------------------------------------";
print "\nR$ m
		".$total." TOTAL";

