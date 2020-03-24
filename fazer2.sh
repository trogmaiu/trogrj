#!/bin/bash
source fazer3.sh
echo "<?php
include(\"src/jpgraph.php\");
include(\"src/jpgraph_bar.php\"); 
/*
Definir um array para cada ponto da coordenada Y, especificando
seus pontos/valores, sendo:
numGols = o número de gols marcados em cada dia da semana, 
começando Domingo (8 gols) e terminando Sábado (11 gols)
*/ 
\$numGols = array (\"$a1\", \"$a2\", \"$a3\");
 
// iniciar criação do gráfico
\$grafico = new graph(350,200,\"png\");
 
// ajustar alguns parâmetros
\$grafico->SetScale(\"textlin\");
\$grafico->SetShadow();
 
\$grafico->title->Set('GOOD IS LIPE LAPA');
 
// criar o gráfico de barras
\$gBarras = new BarPlot(\$numGols);
 
// ajuste de cores
\$gBarras->SetFillColor(\"orange\");
\$gBarras->SetShadow(\"darkblue\");
 
// adicionar gráfico de barras ao gráfico
\$grafico->Add(\$gBarras);
 
// imprimir gráfico
\$grafico->Stroke();
 
?>
" > grafico2.php

