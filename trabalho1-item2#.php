<?php
print "CALCULADORA DE IMPOSTOS\n\n";

# ENTRADA DE DADOS

print "Total de rendimentos bancários: ";
	$rend=trim(fgets(STDIN));
print "Total de rendimentos de salários ou serviços: ";
	$sal=trim(fgets(STDIN));
print "Total de outros rendimentos: ";
	$outros=trim(fgets(STDIN));
print "Serviços médicos pagos: ";
	$med=trim(fgets(STDIN));
print "Serviços educacionais pagos: ";
	$edu=trim(fgets(STDIN));

# CÁLCULO IMPOSTOS

	$irb=$rend*0.20;
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
	$it=$irb+$ior+$ir;
	
# CÁLCULOS ABATIMENTOS

	$abt=$med+$edu;
	$x=$it*0.30;
	if($abt<=$x){
		$IT=$it-$abt;
		}else{
			$IT=$it-$x;
		}
	
# RETORNO DE DADOS

	$abat=$it-$IT; 
		
print "\n\nIMPOSTOS A PAGAR:\n
R$ ".number_format($irb,2,',','.')." (sobre rendimentos bancários)
R$ ".number_format($ir,2,',','.')." (sobre salários serviços)
R$ ".number_format($ior,2,',','.')." (sobre outros rendimentos)
R$ ".number_format($it,2,',','.')." (total)
-------------------------------------------
Total de valores possíveis de abater:
R$ ".number_format($med,2,',','.')." (serviços médicos)
R$ ".number_format($edu,2,',','.')." (serviços educacionais)
R$ ".number_format($abt,2,',','.')." (total)
-------------------------------------------
Abatimento máximo permitido:
R$ ".number_format($abat,2,',','.')." 
-------------------------------------------
IMPOSTOS TOTAIS:
R$ ".number_format($it,2,',','.')." (imposto bruto)
R$ ".number_format($abat,2,',','.')." (abatimentos)
\nR$ ".number_format($IT,2,',','.')." (total)";




