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
Descritivo: Use operador ternário aninhado para classificar um número como positivo, negativo ou zero
*******************************************************************************/

<?php
$numero = 0;
$resultado = ($numero > 0) ? "positivo" : (($numero < 0) ? "negativo" : "zero");
echo "O número $numero é $resultado.\n";
?>