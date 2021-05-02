function enviar()
{
    var nome = document.getElementById('nome')
    var email = document.getElementById('email')
    var res = document.getElementById('res')
    res.innerText = `${nome} ${email}`
}