/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
Data: 8 de Setembro de 2025
Descritivo: Faça um programa que calcule o aumento de 15% sobre um valor
*******************************************************************************/

<?php
// Define o valor inicial
$valor_inicial = 100.00;
$aumento_percentual = 15;

// Calcula o aumento
$aumento = ($valor_inicial * $aumento_percentual) / 100;
$valor_final = $valor_inicial + $aumento;

// Exibe o resultado
echo "O valor inicial é R$ $valor_inicial\n";
echo "O aumento de $aumento_percentual% é R$ $aumento\n";
echo "O valor final após o aumento é R$ $valor_final\n";
?>