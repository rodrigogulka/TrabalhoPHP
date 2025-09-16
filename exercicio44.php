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
Descritivo: Crie um ternário que retorne "Aprovado" se nota >= 7, senão "Reprovado"
*******************************************************************************/

<?php
$nota = 8.5;
$resultado = ($nota >= 7) ? "Aprovado" : "Reprovado";
echo "O aluno está $resultado com a nota $nota.\n";
?>