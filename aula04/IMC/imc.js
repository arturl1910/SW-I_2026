function calcular() {

    var Peso = document.getElementById("peso").value;
    var Altura = document.getElementById("altura").value;

    if (Peso == "" || Altura == "") {
    }
    // deixar vazio, pois se não a obesidade grave aparece se o usuario calcular sem preencher o peso e altura, além de ficar NaN
    else {

        var p = parseFloat(Peso);
        var a = parseFloat(Altura);
        var imc = p / (a * a);

        if (imc <= 18.5) {
            document.getElementById("Imc").innerText = "IMC: " + imc.toFixed(2) + " Magreza";
            // toFixed(2) limita as casas decimais
        }
        else if (imc <= 24.9) {
            document.getElementById("Imc").innerText = "IMC: " + imc.toFixed(2) + " Normal";
        }
        else if (imc <= 29.9) {
            document.getElementById("Imc").innerText = "IMC: " + imc.toFixed(2) + " Sobrepeso";
        }
        else if (imc <= 39.9) {
            document.getElementById("Imc").innerText = "IMC: " + imc.toFixed(2) + " Obesidade";
        }
        else {
            document.getElementById("Imc").innerText = "IMC: " + imc.toFixed(2) + " Obesidade Grave";
        }

    }
}