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
Descritivo: Use ternário para determinar se um número é múltiplo de 5
*******************************************************************************/

<?php
$numero = 15;
$resultado = ($numero % 5 == 0) ? "é múltiplo de 5" : "não é múltiplo de 5";
echo "O número $numero $resultado.\n";
?>