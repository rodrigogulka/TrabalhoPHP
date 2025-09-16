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
Descritivo: Crie uma condição que verifique se um ano é bissexto
*******************************************************************************/

<?php
$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "O ano $ano é bissexto.\n";
} else {
    echo "O ano $ano não é bissexto.\n";
}
?>