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
Descritivo: Crie uma condição que verifique se um triângulo é válido
*******************************************************************************/

<?php
$a = 3;
$b = 4;
$c = 5;
if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
    echo "O triângulo é válido.\n";
} else {
    echo "O triângulo não é válido.\n";
}
?>