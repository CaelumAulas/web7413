<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="css/produto.css"> -->
    <title>Produto</title>
</head>
<body>
    <?php include "../include/header.php" ?>
    <h1>Fuzzy Cardigan</h1>
    <p>R$ 50,00</p>
    <form action="/carrinho">
        <fieldset>  
            <legend>Escolha sua cor</legend>
            <label for="verde">        
                <img src="img/produtos/foto1-verde.png" alt="Verde">
            </label>
            <input type="radio" name="cor" id="verde" value="verde" class="inputCor">

            <label for="azul">
                <img src="img/produtos/foto1-azul.png" alt="">   

            </label>
            <input type="radio" name="cor" id="azul" value="azul" class="inputCor">

            <label for="rosa">
                <img src="img/produtos/foto1-rosa.png" alt="">   
                
            </label>
            <input type="radio" name="cor" id="rosa" value="rosa" class="inputCor">
        </fieldset>

        <legend>Escolha seu tamanho</legend>

        <!-- tamanho -->

        <button>Comprar</button>
    </form>

</body>
</html>