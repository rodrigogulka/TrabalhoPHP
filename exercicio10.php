/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
 25363232-2 - Helamã Sampaio
Data: 8 de Setembro de 2025
Descritivo: Escreva um script que converta minutos em horas e minutos
*******************************************************************************/

<?php
// Define o total de minutos
$total_minutos = 135;
$horas = intdiv($total_minutos, 60);
$minutos = $total_minutos % 60;

// Exibe o resultado
echo "$total_minutos minutos equivalem a $horas horas e $minutos minutos.\n";
?>

