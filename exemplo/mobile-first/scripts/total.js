var $quantidade = document.querySelector("#qt")
var $preco = document.querySelector("#preco")

function calculaTotal(){    
    var preco = $preco.textContent.replace("R$", "").replace(",", ".") * 1
    var quantidade = $quantidade.value

    var total = document.querySelector("#total")
    total.textContent = "R$ " + (preco * quantidade).toFixed(2).replace(".", ",")
}

calculaTotal()

$quantidade.onchange = calculaTotal