<?php

class cpf
{
    public function validar($numero)
    {
        $numeros = preg_replace('/[^0-9]/', '', $numero);

        $caracteres = str_split($numeros);

        $inteiro1 = ($caracteres[0] * 10) +
                    ($caracteres[1] * 9) +
                    ($caracteres[2] * 8) +
                    ($caracteres[3] * 7) +
                    ($caracteres[4] * 6) +
                    ($caracteres[5] * 5) +
                    ($caracteres[6] * 4) +
                    ($caracteres[7] * 3) +
                    ($caracteres[8] * 2);

        $resto1 = $inteiro1 % 11;
        $resto1 = 11 - $resto1;

        if ($resto1 >= 10) {

            $resto1 = 0;

        }

        $inteiro2 = ($caracteres[0] * 11) +
                    ($caracteres[1] * 10) +
                    ($caracteres[2] * 9) +
                    ($caracteres[3] * 8) +
                    ($caracteres[4] * 7) +
                    ($caracteres[5] * 6) +
                    ($caracteres[6] * 5) +
                    ($caracteres[7] * 4) +
                    ($caracteres[8] * 3) +
                    ($resto1 * 2);

        $resto2 = $inteiro2 % 11;
        $resto2 = 11 - $resto2;

        if ($resto2 >= 10) {

            $resto2 = 0;

        }

        if ($resto1 == $caracteres[9] && $resto2 == $caracteres[10]) {

            return "CPF Válido";

        }

        else {

            return "CPF Inválido";

        }
    }
}

?>