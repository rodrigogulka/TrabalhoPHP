/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
Data: 8 de Setembro de 2025
Descritivo: Crie uma expressão ternária que verifique se um ano é bissexto
*******************************************************************************/

<?php
echo "Digite um ano: ";
$ano = trim(fgets(STDIN));

$resultado = ($ano % 400 == 0 || ($ano % 4 == 0 && $ano % 100 != 0)) 
    ? "O ano $ano é bissexto" 
    : "O ano $ano não é bissexto";

echo $resultado . PHP_EOL;
?>
