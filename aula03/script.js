function processarValidacao(){
    const valorInput = document.getElementById('cpf').value;
    const EhValido = validarCPF(valorInput);

    if (EhValido) {
        alert("O CPF " + valorInput + " é VÁLIDO!");
    } else {
        alert("O CPF " + valorInput + " é INVÁLIDO!");
    }
}

function soma(){
    const valorInput = document.getElementById('cpf').value;
    const valorNome = document.getElementById('nome').value;
    const valoremail = document.getElementById('email').value;
    const valorendereço = document.getElementById('endereço').value;
    alert("Olá "+valorNome+"Seu cpf é: "+valorInput+"Seu email é : "+valoremail+"Seu endereço é: "+valorendereço);
}


function validarCPF(cpf){
    cpf = cpf.replace(/[^\d]+/g, '');

    if(cpf.length !==11 || !!cpf.match(/(\d)\1{10}/)){
        return false;
    }

    const digitos = cpf.split('').map(el => +el);
}