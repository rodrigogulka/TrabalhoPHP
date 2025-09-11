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
Descritivo: Verifique se duas variáveis são idênticas em valor e tipo
*******************************************************************************/

<?php
// Inicializa as variáveis
$var1 = 20;        
$var2 = "20";     

// Compara se as variáveis são idênticas em valor e tipo
if ($var1 === $var2) {
    echo "As variáveis são idênticas em valor e tipo.\n";
} else {
    echo "As variáveis não são idênticas em valor e tipo.\n";
}   
?>