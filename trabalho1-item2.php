<?php
# ENTRADA DE DADOS

print "Total de rendimentos banc�rios: ";
	$rend=trim(fgets(STDIN));
print "Total de rendimentos de sal�rios ou servi�os: ";
	$sal=trim(fgets(STDIN));
print "Total de outros rendimentos: ";
	$outros=trim(fgets(STDIN));
print "Servi�os m�dicos pagos: ";
	$med=trim(fgets(STDIN));
print "Servi�os educacionais pagos: ";
	$edu=trim(fgets(STDIN));

# C�LCULO IMPOSTOS

	$imb=$rend*0.20;
	$ior=$outros*0.10;
	if($sal<=8000){
		$ir=0;
	}else{
		if($sal<=24000){
			$ir=$sal*0.15;
		}else{
			$ir=$sal*0.2;			
		}
	}
	$it=$imb+$ior+$ir;
	
# C�LCULOS ABATIMENTOS

	$abt=$med+$edu;
	$x=$it*0.30;
	if()
	
	
	
	
# RETORNO DE DADOS

print "\n\nTotal de impostos:
R$ ".$imb." (sobre rendimentos bancarios)
R$ ".$ir." (sobre salarios servicos)
R$ ".$ior." (sobre outros rendimentos)
R$ ".$it." (total)
------------------------------------------
Maximo a ser abatido:
R$ ".$abat." 
------------------------------------------
Total de valores possiveis de abater:
R$ ".$med." (servicos medicos)
R$ ".$edu." (servicos educacionais)
R$ ".$abt." (total)
------------------------------------------
Imposto total:
R$ ".$ib." (imposto bruto)
R$ ".$abat." (abatimentos)
R$ ".$IT." (total)";




/*- 20% sobre os rendimentos banc�rios
- As seguintes porcentagens para os rendimentos anuais de sal�rio ou servi�os:
- At� $8000 - isento
- Entre $8000,01 e $24000 - 15%
- Acima de $24000 - 20%
- Outros rendimentos: 10%
- O contribuinte pode abater at� 30% do seu imposto com servi�os m�dicos e/ou educacionais*/