/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
 25363232-2 - Helamã Sampaio
Data: 10 de Setembro de 2025
Descritivo: Teste se uma string é menor que outra em ordem alfabética
*******************************************************************************/

<?php
// Inicializa as variáveis
$str1 = "banana";
$str2 = "maçã";

// Compara as strings em ordem alfabética
if ($str1 < $str2) {
    echo "\"$str1\" vem antes de \"$str2\" em ordem alfabética\n";
} else {
    echo "\"$str1\" não vem antes de \"$str2\" em ordem alfabética\n";
}
?>