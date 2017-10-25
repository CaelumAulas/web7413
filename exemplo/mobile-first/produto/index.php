<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/produto.css">
    <title>Produto</title>
</head>
<body>
    
    <?php include "../include/header.php" ?>
    <div class="container">       
        <div class="produto">
            <h1>Fuzzy Cardigan</h1>
            <p>R$ 50,00</p>

            <form action="/carrinho">
                <fieldset class="cores">  
                    
                    <legend>Escolha sua cor</legend>
                    
                    <input type="radio" name="cor" id="verde" value="verde" class="inputCor">
                    <label for="verde">        
                        <img src="img/produtos/foto1-verde.png" alt="Verde">                
                    </label>

                    <input type="radio" name="cor" id="azul" value="azul" class="inputCor" checked>
                    <label for="azul">
                        <img src="img/produtos/foto1-azul.png" alt="">
                    </label>

                    <input type="radio" name="cor" id="rosa" value="rosa" class="inputCor">
                    <label for="rosa">
                        <img src="img/produtos/foto1-rosa.png" alt="">                
                    </label>
                </fieldset>

                <legend>Escolha seu tamanho</legend>

                <!-- tamanho -->

                <button class="btnComprar">Comprar</button>
            </form>
        <div/>
    </div>
</body>
</html>