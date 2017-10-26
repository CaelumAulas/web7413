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

            <form action="/carrinho" method="POST">

                <input type="hidden" name="codigo" value="Fuzzy Cardigan" >
                <input type="hidden" name="preco" value="50" >

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

                <fieldset class="tamanho">    
                    <legend>Escolha seu tamanho</legend>
                    <input type="range" name="tamanho" value="42" min="38" max="60" step="2">
                </fieldset>

                <!-- tamanho -->

                <button class="btnComprar">Comprar</button>
            </form>
        </div>

        <h2>Detlahes</h2>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur molestiae aspernatur repellendus accusamus at ut quaerat ab animi accusantium alias dolore eum quae nesciunt, neque veritatis facilis. Vel, quae totam!
        </p>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preco</th>
                </tr>
            <thead>

            <tbody>
                <tr>
                    <td>Macarrao</td>
                    <td>R$ 20,00</td>
                </tr>
                <tr>
                    <td>Macarrao</td>
                    <td>R$ 20,00</td>
                </tr>
                <tr>
                    <td>Macarrao</td>
                    <td>R$ 20,00</td>
                </tr>
                <tr>
                    <td>Macarrao</td>
                    <td>R$ 20,00</td>
                </tr>
                <tr>
                    <td>Macarrao</td>
                    <td>R$ 20,00</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Total</td>
                    <td>R$ 35,00</td>
                </tr>
            </tfoot>
        </table>

        <footer style="background:black;">Oi<br><br><br><br><br><br></footer>
    </div>
</body>
</html>