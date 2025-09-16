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
Descritivo: Crie uma expressão ternária que retorne "Maioridade" ou "Menoridade" baseado na idade
*******************************************************************************/

<?php
$idade = 20;
$resultado = ($idade >= 18) ? "Maioridade" : "Menoridade";
echo "Uma pessoa com $idade anos está em $resultado.\n";
?>