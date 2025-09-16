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
Descritivo: Escreva um código que calcule o IMC e classifique o resultado
*******************************************************************************/

<?php
$peso = 70; 
$altura = 1.75; 
$imc = $peso / ($altura * $altura);
$classificacao = "";
if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc < 24.9) {
    $classificacao = "Peso normal";
} elseif ($imc < 29.9) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obesidade";
}
echo "Seu IMC é $imc e a classificação é: $classificacao\n";
?>