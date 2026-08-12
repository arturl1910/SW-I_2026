<?php

class imc
{
    public function calcular($Peso, $Altura)
    {
        if ($Peso == "" || $Altura == "") {

            return "Informe o peso e a altura.";

        }

        else {

            $p = $Peso;
            $a = $Altura;

            $imc = $p / ($a * $a);

            if ($imc <= 18.5) {

                return $imc . " - Magreza";

            }

            else if ($imc <= 24.9) {

                return $imc . " - Peso adequado";

            }

            else if ($imc <= 29.9) {

                return $imc . " - Sobrepeso";

            }

            else if ($imc <= 34.9) {

                return $imc . " - Obesidade Grau I";

            }

            else if ($imc <= 39.9) {

                return $imc . " - Obesidade Grau II";

            }

            else {

                return $imc . " - Obesidade Grau III";

            }
        }
    }
}

?>