var valido = true
function enviar() {
    var nome = document.getElementById('nome').value
    var email = document.getElementById('email').value
    var dataEntrada = window.document.getElementById('dataEntrada').value
    var dataSaida = window.document.getElementById('dataSaida').value
    var adulto = Number(window.document.getElementById('adulto').value)
    var crianca = Number(window.document.getElementById('crianca').value)
    var res = document.getElementById('res')
    var check = document.getElementById('check')
    res.style.color = '#d62828'

    if (nome.length == 0 || email.length == 0 || dataEntrada.length == 0 || dataSaida.length == 0 || adulto.length == 0) {
        res.innerText = 'Erro!!! Por favor preenche todos os campos'
    }
    else if (!valido) {
        res.innerText = 'Verifica o seu email'
    }
    else if (!check.checked) {
        res.innerText = 'Por favor, aceita os termos de licença'
    }
    else {
        var inicio = new Date(dataEntrada)
        var fim = new Date(dataSaida)
        var diff = fim.getTime() - inicio.getTime();
        var dias = diff / (1000 * 60 * 60 * 24);
        if (dias > 0) {
            var total = (adulto * 50) + (crianca * 30)
            res.style.color = "green"
            res.innerText = `Preço Total: ${total}€`
        }
        else {
            res.innerText = 'Datas Inválidas'
        }
    }
}
function validarEmail() {
    var email = document.getElementById('email')
    var res = document.getElementById('valEmail')
    if (!email.checkValidity()) {
        res.style.color = '#d62828'
        res.style.marginTop = '-20px'
        res.innerHTML = "Email invalido";
        valido = false
    }
    else {
        res.innerText = ''
        valido = true
    }
}
function submit() {
    alert("Funcionou")
}

function entrouT() {
    var linha = document.getElementById('Azul')
    linha.style.backgroundColor = "#81b29a"
}
function saiu() {
    var linha = document.getElementById('Azul')
    linha.style.backgroundColor = "#81b29a"
}
function entrouA() {
    var linha = document.getElementById('Azul')
    linha.style.backgroundColor = "#a5a58d"
}
function entrouD() {
    var linha = document.getElementById('Azul')
    linha.style.backgroundColor = "#00b4d8"
}
function submeter() {
    var nome = document.getElementById('nome').value
    var email = document.getElementById('email').value
    var msg = document.getElementById('msg').value
    var res = document.getElementById('res')
    if (nome.length == 0 || email.length == 0 || msg.length == 0) {
        res.style.color = '#d62828'
        res.innerText = 'ERRO!!! Digite preenche todos os campos'
    }
    else {
        res.style.color = "green"
        res.innerText = 'Mensagem submetida com sucesso'
    }
}
function login() {
    var email = document.getElementById('email').value
    var senha = document.getElementById('senha').value
    var res = document.getElementById('res')
    if (email.length == 0 || senha.length == 0) {
        res.style.color = '#d62828'
        res.innerHTML = 'ERRO!!! Digite preenche todos os campos'
    }
    else if (email == "geral@jurele.com" && senha == "12345678") {
        document.getElementById('link').click();
    }
    else {
        res.style.color = '#d62828'
        res.innerHTML = 'ERRO!!! Usuario não cadastrado'
    }
}
function criar() {
    var nome = document.getElementById('nome').value
    var email = document.getElementById('email').value
    var dataNasc = window.document.getElementById('dataNasc').value
    var sexo = document.getElementsByName('sexo')
    var tel = document.getElementById('tel').value
    var morada = document.getElementById('morada').value
    var senha = window.document.getElementById('senha').value
    var senhaC = window.document.getElementById('senhaC').value
    var res = document.getElementById('res')
    var check = document.getElementById('check')
    res.style.color = '#d62828'
    var ano = (new Date(dataNasc)).getFullYear()
    var atual = (new Date()).getFullYear()
    if (nome.length == 0 || email.length == 0 || dataNasc.length == 0 || tel.length == 0 || morada.length == 0 || senha.length == 0 || senhaC.length == 0) {
        res.innerText = 'Erro!!! Por favor preenche todos os campos'
    }
    else if (!valido) {
        res.innerText = 'Verifica o seu email'
    }
    else if (!check.checked) {
        res.innerText = 'Por favor, aceita os termos de licença'
    }
    else if (ano > atual) {
        res.innerText = 'Verifica as datas'
    }
    else if ((atual - ano) < 18) {
        res.innerText = 'Menor de idade'
    }
    else if(senha != senhaC)
    {
        res.innerText = 'Senhas diferentes'
    }
    else {
        var genero
        if (sexo[0].checked) {
            genero = "Homem"
        }
        if (sexo[1].checked) {
            genero = "Mulher"
        }
        res.style.color = "green"
        res.innerText = "Registro adicionado com sucesso"
    }

}


//https://metring.com.br/diferenca-entre-datas-em-javascript
