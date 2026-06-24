<?php

$nota = [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];

function classificarAluno($nota) {
    if ($nota >= 7) {
        return "passou de ano";
    } elseif ($nota >= 5) {
        return "recuperação";
    } else {
        return "reprovou";
    }
}

$passou = 0;
$recuperacao = 0;
$reprovados = 0;
$soma = 0;

for ($i = 0; $i < count($nota); $i++) {

    $situacao = classificarAluno($nota[$i]);

    echo "aluno " . ($i + 1) . ": nota = " . $nota[$i] . " -> " . $situacao . "<br>";

    if ($situacao == "aprovado") {
        $passou++;
    } elseif ($situacao == "recuperação") {
        $recuperacao++;
    } else {
        $reprovados++;
    }

    $soma += $nota[$i];
}

$media = $soma / count($nota);

echo "<br>Resumo da turma:<br>";
echo "passou de ano: $passou<br>";
echo "recuperação: $recuperacao<br>";
echo "reprovou: $reprovados<br>";
echo "média da turma: " . number_format($media, 2) . "<br>";

if ($media >= 7) {
    echo "turma com desempenho bom";
} else {
    echo "turma precisa melhorar";
}

?>