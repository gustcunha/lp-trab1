<?php
print "Qual o sexo do cliente? ";
	$sexo=trim(fgets(STDIN));
print "Quantas cervejas foram consumidas? ";
	$ceva=trim(fgets(STDIN));
print "Quantos refrigerantes foram consumidos? ";
	$refr=trim(fgets(STDIN));
print "Quantos espetinhos foram consumidos? ";
	$espt=trim(fgets(STDIN));

#--------------------------------------------------------
	$bc=($ceva*2.5)+($refr*2)+($espt*4);
#--------------------------------------------------------	
	if ($sexo=="H"||$sexo=="h"){
		$cta=10;		
	}
	else{if($sexo=="M"||$sexo=="m"){
		$cta=8;
	}
	}
#--------------------------------------------------------
	if($bc<=15){
		$cover=3;
	}else{
		$cover=0;
	}
#---------------------------------------------------------
	
/*Em um bar, o c�lculo da conta a ser paga pelo cliente � feito segundo os seguintes crit�rios:
1) O bar cobra um valor b�sico de entrada dependendo do sexo do cliente: homem - R$10,00 e
mulher R$8,00.
2) cerveja -> R$2,50 refrigerante -> R$2,00.
3) espetinho -> R$4,00.
4) O cliente deve pagar ainda R$3,00 para os cantores do bar. Entretanto, se o que ele consumiu
de bebida e comida for superior a R$15,00, ele n�o paga os tais R$3,00.
5) Depois de somar todos os itens acima, incluir ainda 10% para os gar�ons. Este, ent�o ser� o
valor final da conta a ser paga.
Fazer um programa que fa�a a leitura dos seguintes dados de um cliente:
- sexo
- quantidade de cervejas consumidas
- quantidade de refrigerantes consumidas
- quantidade de espetinhos consumidos
Depois, o programa deve mostrar:
- Valor b�sico de entrada
- Total consumido de bebida e comida
- Valor pago aos cantores (que ser� 0 ou 3 reais)
- Subtotal sem os 10%
- Total j� acrescido dos 10%*/
	
print "Valor da conta: ";
print "R$".$cta."(valor b�sico)";
print "R$".$bc."(bebida e comida)";
print "R$".$cover."(cantores)";
print "R$".$sub."(subtotal sem 10%)";
print "------------------------------------------";
print "R$".$total." TOTAL";

