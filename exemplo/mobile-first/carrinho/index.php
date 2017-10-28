<link rel="stylesheet" href="css/bootstrap4.css">
<link rel="stylesheet" href="css/bootstrap-grid.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="jumbotron">

    <div class="container">
        <h1>Ótima escolha!</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, sapiente!</p>
    </div>

</div>

<div class="container">
    <div class="row">   
        <div class="col-sm-4">
            <article class="card">
                <header class="card-header">
                    Sua Compra
                </header>
                <div class="card-body">
                    <img class="embed-responsive" src="img/produtos/foto1-<?php print $_POST["cor"] ?>.png" alt="">
                    <dl>
                        <dt>Nome:</dt> 
                        <dd><?php print $_POST["nome"] ?></dd>
                        
                        <dt>Preço:</dt> 
                        <dd id="preco">
                            R$<?php print $_POST["preco"] ?>
                        </dd>
                        
                        <dt>Cor</dt>
                        <dd>
                            <?php print $_POST["cor"] ?>
                        </dd>

                        <dt>Tamanho</dt>
                        <dd>
                            <?php print $_POST["tamanho"] ?>
                        </dd>
                    </dl>

                    <div class="form-group"> 
                        <label for="qt">Quantidade</label>
                        <input id="qt" type="number" class="form-control" value="1">
                    </div>
                    <div class="form-group">
                        <label for="total">Total</label>
                        <output id="total" class="form-control">
                        </output>
                    </div>                

                </div>
            </article>
        </div>
        <form action="#" class="col-sm-8 row">
            <fieldset class="col-sm-6">
                <legend>Dados Pessoais</legend>

                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input id="nome" type="text" class="form-control" placeholder="Digite seu nome">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    
                    <div class="input-group">
                        <span class="input-group-addon"> @ </span>
                        <input id="email" type="email" class="form-control">            
                    </div>

                </div>

                <div class="form-group">
                    <label for="cpf">CPF</label>
                    <!-- Expressãop Regular -->
                    <input id="cpf" type="text" pattern="^\d\d\d\.\d\d\d\.\d\d\d-\d\d$" class="form-control">
                </div>
            </fieldset>
            <fieldset class="col-sm-6">
                <legend>Dados do Cartão</legend>

                <div class="form-group">
                    <label for="ncartao">Número do Cartão</label>
                    <input id="ncartao" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="bandeira">Bandeira</label>
                    <select id="bandeira" type="text" class="form-control">
                        <option value="">
                            Master
                        </option>
                        <option value="">
                            Visa
                        </option>
                        <option value="">
                            Amex
                        </option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="validade">Validade</label>
                    <input id="validade" type="month" class="form-control">
                </div>

                <button class="btn btn-primary float-right">Confirmar pedido</button>
            </fieldset>
        </form>
    </div>
</div>


<script src="scripts/total.js"></script>
