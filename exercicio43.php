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
Descritivo: Use ternário para verificar se uma pessoa pode votar (idade >= 16)
*******************************************************************************/

<?php
$idade = 18;
$podeVotar = ($idade >= 16) ? "pode votar" : "não pode votar";
echo "Uma pessoa com $idade anos $podeVotar.\n";
?>