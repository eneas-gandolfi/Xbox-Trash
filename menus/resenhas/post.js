function fazPost(url, body) {
    console.log("Body=", body)
    let request = new XMLHttpRequest()
    request.open("POST", url, true)
    request.setRequestHeader("Content-type", "application/json")
    request.send(JSON.stringify(body))

    request.onload = function() {
        console.log(this.responseText)
    }

    return request.responseText
}


function cadastraResenha() {
    event.preventDefault()
    let url = "arn:aws:execute-api:sa-east-1:522268834170:jw980xde84/*/POST/xbox-trash"
    let nome = document.getElementById("nome").value
    let email = document.getElementById("email").value
    let resenha = document.getElementById("resenha").value
    console.log(nome)
    console.log(email)
    console.log(resenha)

    body = {
        "name": nome,
        "email": email,
        "resenha": resenha
    }

    fazPost(url, body)
}