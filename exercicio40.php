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
Descritivo: Crie uma calculadora simples com switch case
*******************************************************************************/

<?php
$numero1 = 10;
$numero2 = 5;
$operacao = '+'; 
$resultado = 0;

switch ($operacao) {
    case '+':
        $resultado = $numero1 + $numero2;
        break;
    case '-':
        $resultado = $numero1 - $numero2;
        break;
    case '*':
        $resultado = $numero1 * $numero2;
        break;
    case '/':
        if ($numero2 != 0) {
            $resultado = $numero1 / $numero2;
        } else {
            echo "Erro: Divisão por zero não é permitida.\n";
            exit;
        }
        break;
    default:
        echo "Operação inválida.\n";
        exit;
}
echo "O resultado de $numero1 $operacao $numero2 é: $resultado\n";
?>