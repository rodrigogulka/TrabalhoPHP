/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
 25363232-2 - Helamã Sampaio
Data: 12 de Setembro de 2025
Descritivo: Escreva um script que determine o maior entre três números
*******************************************************************************/

<?php
$num1 = 10;
$num2 = 20;
$num3 = 15;
if ($num1 >= $num2 && $num1 >= $num3) {
    echo "O maior número é: $num1\n";
} elseif ($num2 >= $num1 && $num2 >= $num3) {
    echo "O maior número é: $num2\n";
} else {
    echo "O maior número é: $num3\n";
}
?>