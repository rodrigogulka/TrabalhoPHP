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
Descritivo: Crie uma expressão ternária que retorne "Par" ou "Ímpar" baseado em um número
*******************************************************************************/

<?php
$numero = 10;
$resultado = ($numero % 2 == 0) ? "Par" : "Ímpar";
echo "O número $numero é $resultado.\n";
?>