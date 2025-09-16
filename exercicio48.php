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
Descritivo: Crie um ternário que retorne "Frio" se temperatura < 15, "Agradável" se entre 15-25, "Quente" se > 25.
*******************************************************************************/

<?php
$temperatura = 22;
$resultado = ($temperatura < 15) ? "Frio" : (($temperatura <= 25) ? "Agradável" : "Quente");
echo "A temperatura de $temperatura°C é considerada $resultado.\n";
?>