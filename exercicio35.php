/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
 25363232-2 - Helamã Sampaio
Data: 11 de Setembro de 2025
Descritivo: Faça um programa que mostre mensagem diferente para manhã, tarde e noite
*******************************************************************************/

<?php
$hora = 14; 
if ($hora >= 5 && $hora < 12) {
    echo "Bom dia!\n";
} elseif ($hora >= 12 && $hora < 18) {
    echo "Boa tarde!\n";
} else {
    echo "Boa noite!\n";
}
?>