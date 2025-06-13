<?php

/*$escola = "Senac";
$professor = "Danilo";

if ($escola == "Senac" && $professor == "Danilo") {
    echo"Aula de Back-End";
} 

echo"<hr>";
#serve para ajudar pra ver se é vdd ou false
var_dump($escola == "Senac" && $professor == "Danilo");

$idade = "12";
$pessoa1 = "convite";
$pessoa2 = "sem convite";

if ($idade == 12 && $pessoa1 ="convite" || $pessoa2 == "convite") {
    echo "<hr>";
    var_dump($idade == 12 && $pessoa1 ="convite" || $pessoa2 = "sem convite");
    echo "Bem-Vindo a Festa";

} elseif ($idade <= 9 && $pessoa1 == "sem convite" || $pessoa2 == "convite") {
    echo "Entrada não permotida";
} else {
    echo "Entrada não permitida 1";
}

echo "<hr> ";
echo"<h2> Exemplo de estrutura for </h2>";

for ($i=1; $i <= 10 ; $i++) {
   echo"<br>" . $i;
}*/

$num1 = $_POST["num1"];

#sempre tenho que adicionar um contador na tabuada para que de certo $i

for ($i = 1; $i <= 10; $i++) {
    echo "<hr>" . $num1 . " X " . $i . " = " . $num1*$i;
}

?>