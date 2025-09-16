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
Descritivo: Faça um programa que converta temperatura entre Celsius e Fahrenheit baseado em uma escolha
*******************************************************************************/

<?php
$temperaturaCelsius = 25;
$temperaturaFahrenheit = 77;
$escolha = 'C'; 

if ($escolha == 'C') {
    $fahrenheit = ($temperaturaCelsius * 9/5) + 32;
    echo "$temperaturaCelsius °C é igual a $fahrenheit °F\n";
} elseif ($escolha == 'F') {
    $celsius = ($temperaturaFahrenheit - 32) * 5/9;
    echo "$temperaturaFahrenheit °F é igual a $celsius °C\n";
} else {
    echo "Escolha inválida. Use 'C' para Celsius ou 'F' para Fahrenheit.\n";
}
?>