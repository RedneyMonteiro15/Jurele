var valido = true
function enviar()
{
    var nome = document.getElementById('nome').value
    var email = document.getElementById('email').value
    var dataEntrada = window.document.getElementById('dataEntrada').value
    var dataSaida = window.document.getElementById('dataSaida').value
    var adulto = Number(window.document.getElementById('adulto').value)
    var crianca = Number(window.document.getElementById('crianca').value)
    var res = document.getElementById('res')
    res.style.color = '#d62828'
    if(nome.length == 0 || email.length == 0 || dataEntrada.length == 0 || dataSaida.length == 0 || adulto.length == 0)
    {
        res.innerText = 'Erro!!! Por favor preenche todos os campos'
    }
    else if(!valido)
    {
        res.innerText = 'Verifica o seu email'
    }
    else
    {
        var inicio = new Date(dataEntrada)
        var fim = new Date(dataSaida)
        var diff = fim.getTime() - inicio.getTime();
        var dias = diff / (1000 * 60 * 60 * 24);
        if(dias > 0)
        {
            var total = (adulto * 50) + (crianca * 30)
            res.style.color = "green"
            res.innerText = `Preço Total: ${total}€`
        }
        else
        {
            res.innerText = 'Datas Inválidas'
        }
    }
}
function validarEmail(){
    var email = document.querySelector('#email');
    var res = document.getElementById('valEmail')
    if(!email.checkValidity()){
        res.style.color = '#d62828'
        res.style.marginTop = '-20px'
        res.innerHTML = "Email invalido";  
        valido = false
    }
    else
    {
        res.innerText = ''
        valido = true
    }
}


//https://metring.com.br/diferenca-entre-datas-em-javascript
