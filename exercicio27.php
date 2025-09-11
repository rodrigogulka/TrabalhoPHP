/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2B
Componentes:
 25178060-2 - Rodrigo Samuel Gulka
 25147198-2 - Lucas Pavelski Tanck
 25363232-2 - Helamã Sampaio
Data: 10 de Setembro de 2025
Descritivo: Teste se uma variável é maior que 100 OU menor que 50
*******************************************************************************/

<?php
// Inicializa a variável
$numero = 30;

// Verifica se o número é maior que 100 ou menor que 50
if ($numero > 100 || $numero < 50) {
    echo "$numero é maior que 100 ou menor que 50\n";
} else {
    echo "$numero está entre 50 e 100\n";
}
?>