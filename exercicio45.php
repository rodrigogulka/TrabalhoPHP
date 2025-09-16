/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
 25363232-2 - Helamã Sampaio
Data: 14 de Setembro de 2025
Descritivo: Use operador ternário para verificar se uma string está vazia
*******************************************************************************/

<?php
$string = "";
$resultado = (empty($string)) ? "A string está vazia." : "A string não está vazia.";
echo $resultado . "\n";
?>