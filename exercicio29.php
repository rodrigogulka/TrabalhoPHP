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
Descritivo: Teste se uma string não está vazia E tem mais de 3 caracteres
*******************************************************************************/

<?php
// Inicializa a variável
$texto = "Olá";

// Verifica se a string não está vazia e tem mais de 3 caracteres
if (!empty($texto) && strlen($texto) > 3) {
    echo "A string não está vazia e tem mais de 3 caracteres\n";
} else {
    echo "A string está vazia ou tem 3 caracteres ou menos\n";
}
?>