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
Descritivo: Verifique se NÃO é fim de semana (usando operador lógico NOT)
*******************************************************************************/

<?php
// Inicializa a variável
$diaDaSemana = "quarta-feira";

// Verifica se não é fim de semana
if (!($diaDaSemana == "sábado" || $diaDaSemana == "domingo")) {
    echo "$diaDaSemana não é fim de semana\n";
} else {
    echo "$diaDaSemana é fim de semana\n";
}   
?>