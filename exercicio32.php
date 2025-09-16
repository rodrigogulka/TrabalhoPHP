/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
 25363232-2 - Helamã Sampaio
Data: 11 de Setembro de 2025
Descritivo: Faça um programa que classifique notas (A, B, C, D, F)
*******************************************************************************/

<?php
$nota = 85;
$classificacao = "";
if ($nota >= 90) {
    $classificacao = "A";
} elseif ($nota >= 80) {
    $classificacao = "B";
} elseif ($nota >= 70) {
    $classificacao = "C";
} elseif ($nota >= 60) {
    $classificacao = "D";
} else {
    $classificacao = "F";
}
echo "A classificação da nota $nota é: $classificacao\n";
?>